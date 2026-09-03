<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Brochure;
use App\Models\ContactMessage;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\PatientFeedback;
use App\Models\Gallery;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'doctors' => Doctor::active()->ordered()->get(),
            'departments' => Department::active()->ordered()->get(),
            'blogs' => Blog::published()->latest('published_at')->take(3)->get(),
            'testimonials' => Testimonial::active()->ordered()->take(3)->get(),
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function doctors()
    {
        return view('doctors', ['doctors' => Doctor::active()->ordered()->get()]);
    }

    public function doctorProfile(Doctor $doctor)
    {
        abort_if(!$doctor->is_active, 404);
        return view('doctor-profile', compact('doctor'));
    }

    public function patientStories()
    {
        return view('patient-stories', ['testimonials' => Testimonial::active()->ordered()->paginate(12)]);
    }

    public function services()
    {
        return view('services');
    }

    public function gallery()
    {
        return view('gallery', ['images' => Gallery::active()->ordered()->get()]);
    }

    public function downloads()
    {
        return view('downloads', ['brochures' => Brochure::latest()->get()]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function appointment()
    {
        return view('appointment', [
            'departments' => Department::active()->ordered()->get(['id', 'name']),
            'doctors' => Doctor::active()->ordered()->get(['id', 'name', 'department']),
        ]);
    }

    public function storeAppointment(Request $request)
    {
        $validated = $request->validate([
            'patient_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:255'],
            'age' => ['nullable', 'integer', 'min:1', 'max:120'],
            'gender' => ['nullable', 'in:male,female,other'],
            'department' => [
                'required',
                'string',
                'max:255',
                Rule::exists('departments', 'name')->where('is_active', true),
            ],
            'preferred_doctor' => ['nullable', 'string', 'max:255'],
            'preferred_date' => ['required', 'date', 'after_or_equal:today'],
            'time_slot' => ['required', 'string', 'max:255'],
            'symptoms' => ['nullable', 'string', 'max:2000'],
        ]);

        if ($validated['preferred_doctor'] ?? null) {
            $doctorIsAvailable = Doctor::active()
                ->where('name', $validated['preferred_doctor'])
                ->where('department', $validated['department'])
                ->exists();

            if (! $doctorIsAvailable) {
                return back()
                    ->withErrors(['preferred_doctor' => 'Please choose an available doctor in the selected department.'])
                    ->withInput();
            }
        }

        Appointment::create($validated);

        return redirect()->route('appointment')->with('appointment_success', true);
    }

    public function storeContactMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact')->with('contact_success', true);
    }

    public function healthLibrary()
    {
        $query = Blog::published()->latest('published_at');

        if (request('topic')) {
            $query->where('tag', request('topic'));
        }

        return view('health-library', [
            'articles' => $query->paginate(9)->withQueryString(),
            'topics' => Blog::published()->whereNotNull('tag')->distinct()->orderBy('tag')->pluck('tag'),
        ]);
    }

    public function healthArticle(Blog $blog)
    {
        abort_unless($blog->is_published, 404);

        return view('health-article', compact('blog'));
    }

    public function privacy()
    {
        return view('legal', [
            'title' => 'Privacy Policy',
            'heading' => 'Your privacy matters to us',
            'intro' => 'This policy explains how Maruti Multispeciality Hospital handles information shared through this website.',
            'sections' => [
                ['Information we collect', 'We collect only the details you submit, such as your name, phone number, email address, and appointment request details.'],
                ['How we use your information', 'We use this information to respond to enquiries, arrange appointments, and improve our patient services.'],
                ['Keeping information safe', 'We use reasonable safeguards to protect submitted information and do not sell personal information to third parties.'],
            ],
        ]);
    }

    public function terms()
    {
        return view('legal', [
            'title' => 'Terms of Service',
            'heading' => 'Hospital Terms of Service',
            'intro' => 'By accessing our services, you agree to these terms.',
            'sections' => [
                ['Medical Disclaimer', 'The information provided on this website is for general informational purposes only and does not constitute medical advice.'],
                ['Service Availability', 'While we strive to provide 24/7 care, specific specialists and non-emergency services operate during scheduled hours.'],
                ['Patient Responsibilities', 'Patients are expected to provide accurate medical history and follow the prescribed treatment plans.'],
                ['Modifications', 'Maruti Multispeciality Hospital reserves the right to update these terms at any time without prior notice.']
            ]
        ]);
    }

    public function storeFeedback(Request $request)
    {
        $validated = $request->validate([
            'patient_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string|max:1000',
        ]);

        $validated['status'] = 'pending';

        PatientFeedback::create($validated);

        return back()->with('success', 'Thank you for your feedback! It helps us improve our services.');
    }
}
