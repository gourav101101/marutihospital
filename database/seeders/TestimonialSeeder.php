<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Google Reviewer',
                'client_position' => 'Patient feedback',
                'client_company' => 'Google Reviews',
                'avatar' => null,
                'content' => 'Service was good Staff behaviour was like friendly',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Google Reviewer',
                'client_position' => 'Patient feedback',
                'client_company' => 'Google Reviews',
                'avatar' => null,
                'content' => 'Nurses and doctors were very nice and helpful.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 2,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::firstOrCreate(['content' => $testimonial['content']], $testimonial);
        }
    }
}
