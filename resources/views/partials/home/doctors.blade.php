@php($showAllDoctors = $showAllDoctors ?? false)
<section id="doctors" class="doctors-section">
  <div class="container">
    <div class="doctors-heading">
      <div class="section-badge">Our experts</div>
      <h2 class="section-title">Meet our <span>specialists</span></h2>
      <p class="section-subtitle">Experienced clinicians focused on thoughtful, patient-first care.</p>
    </div>
    <div class="doctors-grid">
      @forelse($showAllDoctors ? $doctors : $doctors->take(4) as $doctor)
        <a href="{{ route('doctor.profile', $doctor) }}" class="doctor-card" style="text-decoration: none; color: inherit; display: block;">
          <div class="doctor-photo" style="background-image:url('{{ $doctor->photo ? asset($doctor->photo) : asset('images/doctors-team.png') }}')"></div>
          <div class="doctor-card__body">
            <p class="doctor-department">{{ $doctor->department }}</p>
            <h3>{{ $doctor->name }}</h3>
            <p class="doctor-designation">{{ $doctor->designation }}</p>
            @if($doctor->experience)<span class="doctor-experience">{{ $doctor->experience }} experience</span>@endif
          </div>
        </a>
      @empty
        <p class="doctors-empty">Doctor profiles will be available soon.</p>
      @endforelse
    </div>
    @if(!$showAllDoctors && $doctors->count() > 4)
      <div class="directory-action"><a class="btn btn-outline" href="{{ route('doctors') }}">View all specialists <span aria-hidden="true">→</span></a></div>
    @endif
  </div>
  <style>
    .doctors-section { padding: 104px 0; background: #FFFFFF; }.doctors-heading { max-width: 660px; margin: 0 auto 48px; text-align:center; }.doctors-heading .section-badge{margin:0 auto 15px}.doctors-heading .section-title{margin-bottom:14px}.doctors-heading .section-title span{color:var(--primary)}.doctors-heading .section-subtitle{margin:0 auto}.doctors-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:20px}.doctor-card{overflow:hidden;background:#fff;border:1px solid #E2E8F0;border-radius:18px;box-shadow:0 8px 22px rgba(30,42,56,.055);transition:transform .2s ease,box-shadow .2s ease}.doctor-card:hover{transform:translateY(-5px);box-shadow:0 18px 35px rgba(30,42,56,.13)}.doctor-photo{height:245px;background-color:#F8FAFC;background-position:center;background-size:cover}.doctor-card__body{padding:20px}.doctor-department{margin-bottom:7px;color:var(--primary);font-size:11px;font-weight:800;letter-spacing:.08em;text-transform:uppercase}.doctor-card h3{margin-bottom:5px;font-size:19px}.doctor-designation{min-height:42px;color:var(--text-secondary);font-size:13px;line-height:1.5}.doctor-experience{display:inline-block;margin-top:14px;padding:5px 9px;border-radius:999px;background:#F1F5F9;color:#5A6B7D;font-size:11px;font-weight:700}.doctors-empty{grid-column:1/-1;text-align:center;color:var(--text-secondary)}@media(max-width:1024px){.doctors-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}@media(max-width:640px){.doctors-section{padding:72px 0}.doctors-heading{margin-bottom:32px}.doctors-grid{grid-template-columns:1fr}.doctor-photo{height:280px}}
  </style>
</section>
