@extends('layouts.app')
@section('title', 'Resources & Downloads - Maruti Hospital')

@section('content')
  <section class="page-hero">
    <div class="container">
      <div class="breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="separator">/</span>
        <span style="color: white;">Downloads</span>
      </div>
      <h1>
        Resources & <span style="color: var(--primary-light);">Downloads</span>
      </h1>
      <p>
        Download hospital brochures, patient guides, and other important resources.
      </p>
    </div>
  </section>

  <section style="padding: 80px 0; background: var(--bg-light); min-height: 50vh;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto;">
        @forelse($brochures as $brochure)
          <div style="display: flex; align-items: center; justify-content: space-between; padding: 24px; background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); border: 1px solid var(--border-light); margin-bottom: 16px; transition: var(--transition);"
               onmouseover="this.style.boxShadow='var(--shadow-md)'; this.style.borderColor='var(--primary-200)';"
               onmouseout="this.style.boxShadow='var(--shadow-sm)'; this.style.borderColor='var(--border-light)';">
            <div style="display: flex; align-items: center; gap: 16px;">
              <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--primary-50); display: flex; align-items: center; justify-content: center; color: var(--primary);">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" /><polyline points="14 2 14 8 20 8" />
                </svg>
              </div>
              <div>
                <h3 style="font-size: 16px; font-weight: 600; color: var(--text); margin-bottom: 4px;">{{ $brochure->original_name }}</h3>
                <div style="font-size: 13px; color: var(--text-secondary);">Added {{ $brochure->created_at->format('M d, Y') }}</div>
              </div>
            </div>
            <a href="{{ asset($brochure->file_path) }}" download class="btn btn-outline" style="padding: 8px 16px; font-size: 13px;">
              Download PDF <span aria-hidden="true">↓</span>
            </a>
          </div>
        @empty
          <div style="text-align: center; padding: 60px 20px; background: white; border-radius: var(--radius-lg); border: 1px solid var(--border-light);">
            <div style="width: 64px; height: 64px; margin: 0 auto 20px; background: var(--primary-50); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: var(--primary);">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" /><polyline points="14 2 14 8 20 8" />
              </svg>
            </div>
            <h2 style="font-size: 20px; font-weight: 600; color: var(--text); margin-bottom: 8px;">No Downloads Available</h2>
            <p style="color: var(--text-secondary);">Brochures and resources will be added here soon.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>
@endsection
