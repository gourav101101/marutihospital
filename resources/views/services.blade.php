@extends('layouts.app')

@section('title', 'Services - Maruti Hospital')

@section('content')
  <!-- Hero Banner -->
  <section class="page-hero">
    <div class="container">
      <div class="breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="separator">/</span>
        <span style="color: white;">Services</span>
      </div>
      <h1>
        Our <span style="color: var(--secondary);">Patient Services</span>
      </h1>
      <p>
        Comprehensive support facilities that extend our care beyond treatments, ensuring a seamless and comfortable healthcare experience.
      </p>
    </div>
  </section>

  <!-- ── Services Grid Overview ── -->
  <section style="padding: 100px 0; background: var(--bg-white);">
    <div class="container">
      <div style="text-align: center; margin-bottom: 60px;">
        <div class="section-badge" style="margin: 0 auto 16px;">What We Offer</div>
        <h2 class="section-title">
          Complete Healthcare <span style="color: var(--primary);">Support</span>
        </h2>
        <p class="section-subtitle" style="margin: 0 auto;">
          From diagnostics to rehabilitation, we provide end-to-end healthcare services under one roof.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 48px;">
        <!-- Service 1: Diagnostics -->
        <div id="diagnostics" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; align-items: center; padding: 40px; background: var(--bg-light); border-radius: var(--radius-xl); border: 1px solid var(--border-light);" class="service-detail-grid">
          <div style="order: 1;">
            <div style="font-size: 48px; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: #3498DB12; border-radius: 20px; margin-bottom: 20px;">
              🔬
            </div>
            <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 12px; color: var(--text);">Labs & Diagnostics</h3>
            <p style="font-size: 16px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 24px;">
              Our diagnostic centre is equipped with state-of-the-art imaging technology including digital X-ray, 128-slice CT scanner, 1.5T MRI, ultrasound and colour Doppler. Our pathology lab offers a full spectrum of tests — haematology, biochemistry, microbiology and histopathology — with rapid turnaround times.
            </p>
            <a href="{{ url('/appointment') }}" class="btn btn-primary">
              Book This Service
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
          <div style="order: 2;">
            <div style="background: white; border-radius: var(--radius-lg); padding: 32px; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
              <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 20px; color: var(--text);">Key Features</h4>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;" class="features-sub-grid">
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #3498DB20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3498DB" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Digital X-Ray & CT Scan
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #3498DB20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3498DB" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  1.5T MRI Imaging
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #3498DB20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3498DB" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Full Pathology Lab
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #3498DB20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3498DB" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Ultrasound & Colour Doppler
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #3498DB20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3498DB" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Same-day Reports Available
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #3498DB20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3498DB" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Home Sample Collection
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 2: Health Checkup -->
        <div id="checkup" style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: center; padding: 40px; background: white; border-radius: var(--radius-xl); border: 1px solid var(--border-light);" class="service-detail-grid">
          <div style="order: 2;">
            <div style="font-size: 48px; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: #2ECC7112; border-radius: 20px; margin-bottom: 20px;">
              🩺
            </div>
            <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 12px; color: var(--text);">Health Checkup Packages</h3>
            <p style="font-size: 16px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 24px;">
              Prevention is better than cure. Our health checkup packages are designed by experts to screen for common lifestyle diseases, cardiac risks, diabetes, thyroid disorders, and more. Each package includes consultation with a specialist, comprehensive blood work, imaging, and a personalised health report.
            </p>
            <a href="{{ url('/appointment') }}" class="btn btn-primary">
              Book This Service
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
          <div style="order: 1;">
            <div style="background: white; border-radius: var(--radius-lg); padding: 32px; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
              <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 20px; color: var(--text);">Key Features</h4>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;" class="features-sub-grid">
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #2ECC7120; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2ECC71" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Basic Health Screening
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #2ECC7120; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2ECC71" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Executive Health Checkup
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #2ECC7120; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2ECC71" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Cardiac Risk Assessment
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #2ECC7120; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2ECC71" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Women's Wellness Package
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #2ECC7120; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2ECC71" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Senior Citizen Package
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #2ECC7120; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2ECC71" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Corporate Health Camps
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 3: Pharmacy -->
        <div id="pharmacy" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; align-items: center; padding: 40px; background: var(--bg-light); border-radius: var(--radius-xl); border: 1px solid var(--border-light);" class="service-detail-grid">
          <div style="order: 1;">
            <div style="font-size: 48px; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: #E67E2212; border-radius: 20px; margin-bottom: 20px;">
              💊
            </div>
            <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 12px; color: var(--text);">24/7 Pharmacy</h3>
            <p style="font-size: 16px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 24px;">
              Our in-house pharmacy is staffed 24 hours a day, 7 days a week, ensuring patients and visitors always have access to prescribed medications, surgical supplies, and OTC products. We maintain a comprehensive inventory of drugs from trusted manufacturers at competitive prices.
            </p>
            <a href="{{ url('/appointment') }}" class="btn btn-primary">
              Book This Service
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
          <div style="order: 2;">
            <div style="background: white; border-radius: var(--radius-lg); padding: 32px; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
              <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 20px; color: var(--text);">Key Features</h4>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;" class="features-sub-grid">
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #E67E2220; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#E67E22" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  24-Hour Availability
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #E67E2220; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#E67E22" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Prescription Dispensing
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #E67E2220; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#E67E22" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  OTC Medications
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #E67E2220; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#E67E22" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Surgical Supplies
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #E67E2220; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#E67E22" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Home Delivery Service
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #E67E2220; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#E67E22" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Competitive Pricing
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 4: Ambulance -->
        <div id="ambulance" style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: center; padding: 40px; background: white; border-radius: var(--radius-xl); border: 1px solid var(--border-light);" class="service-detail-grid">
          <div style="order: 2;">
            <div style="font-size: 48px; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: var(--primary-50); border-radius: 20px; margin-bottom: 20px;">
              🚑
            </div>
            <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 12px; color: var(--text);">Ambulance Service</h3>
            <p style="font-size: 16px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 24px;">
              Our ambulance fleet is equipped with Advanced Cardiac Life Support (ACLS) and Basic Life Support (BLS) equipment. Staffed by trained paramedics, our ambulances ensure safe and rapid patient transport with continuous monitoring. GPS-enabled tracking ensures the nearest available unit is dispatched.
            </p>
            <a href="{{ url('/appointment') }}" class="btn btn-primary">
              Book This Service
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
          <div style="order: 1;">
            <div style="background: white; border-radius: var(--radius-lg); padding: 32px; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
              <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 20px; color: var(--text);">Key Features</h4>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;" class="features-sub-grid">
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: var(--primary-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  ACLS Equipped Ambulances
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: var(--primary-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  BLS Transport Units
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: var(--primary-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Trained Paramedic Staff
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: var(--primary-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  GPS-Enabled Dispatch
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: var(--primary-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Inter-Hospital Transfers
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: var(--primary-100); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Local Patient Transport Support
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 5: Homecare -->
        <div id="homecare" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; align-items: center; padding: 40px; background: var(--bg-light); border-radius: var(--radius-xl); border: 1px solid var(--border-light);" class="service-detail-grid">
          <div style="order: 1;">
            <div style="font-size: 48px; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: #8E44AD12; border-radius: 20px; margin-bottom: 20px;">
              🏠
            </div>
            <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 12px; color: var(--text);">Homecare Services</h3>
            <p style="font-size: 16px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 24px;">
              For patients recovering at home after surgery, or those needing ongoing nursing care, our homecare team brings hospital-quality care to your doorstep. Services include wound care, IV therapy, physiotherapy, post-operative monitoring, and elderly care by trained professionals.
            </p>
            <a href="{{ url('/appointment') }}" class="btn btn-primary">
              Book This Service
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
          <div style="order: 2;">
            <div style="background: white; border-radius: var(--radius-lg); padding: 32px; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
              <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 20px; color: var(--text);">Key Features</h4>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;" class="features-sub-grid">
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #8E44AD20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#8E44AD" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Post-Surgical Nursing
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #8E44AD20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#8E44AD" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Wound Care & IV Therapy
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #8E44AD20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#8E44AD" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Physiotherapy at Home
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #8E44AD20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#8E44AD" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Elderly Care Services
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #8E44AD20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#8E44AD" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Trained & Certified Staff
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #8E44AD20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#8E44AD" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Flexible Scheduling
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Service 6: Rehab -->
        <div id="rehab" style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: center; padding: 40px; background: white; border-radius: var(--radius-xl); border: 1px solid var(--border-light);" class="service-detail-grid">
          <div style="order: 2;">
            <div style="font-size: 48px; width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: #1ABC9C12; border-radius: 20px; margin-bottom: 20px;">
              🏃
            </div>
            <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 12px; color: var(--text);">Rehabilitation Centre</h3>
            <p style="font-size: 16px; color: var(--text-secondary); line-height: 1.8; margin-bottom: 24px;">
              Our rehabilitation centre offers comprehensive recovery programs for patients post-surgery, post-stroke, or managing chronic musculoskeletal conditions. Our team of physiotherapists, occupational therapists, and speech therapists work together to create personalised recovery plans.
            </p>
            <a href="{{ url('/appointment') }}" class="btn btn-primary">
              Book This Service
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
          <div style="order: 1;">
            <div style="background: white; border-radius: var(--radius-lg); padding: 32px; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
              <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 20px; color: var(--text);">Key Features</h4>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;" class="features-sub-grid">
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #1ABC9C20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1ABC9C" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Post-Surgery Rehabilitation
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #1ABC9C20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1ABC9C" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Stroke Recovery Programs
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #1ABC9C20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1ABC9C" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Sports Injury Rehab
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #1ABC9C20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1ABC9C" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Occupational Therapy
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #1ABC9C20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1ABC9C" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Speech & Language Therapy
                </div>
                <div class="service-feature-item" style="display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; background: var(--bg-light); font-size: 14px; color: var(--text); font-weight: 500;">
                  <div style="width: 24px; height: 24px; border-radius: 50%; background: #1ABC9C20; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1ABC9C" stroke-width="3"><path d="M20 6L9 17l-5-5" /></svg>
                  </div>
                  Pain Management
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <style>
      @media (max-width: 968px) {
        .service-detail-grid { grid-template-columns: 1fr !important; gap: 32px !important; }
        .service-detail-grid > div { order: unset !important; }
      }
      @media (max-width: 640px) {
        .features-sub-grid { grid-template-columns: 1fr !important; }
      }
    </style>
  </section>

  <!-- ── Process Steps ── -->
  <section style="padding: 100px 0; background: var(--bg-light);">
    <div class="container">
      <div style="text-align: center; margin-bottom: 60px;">
        <div class="section-badge" style="margin: 0 auto 16px;">How It Works</div>
        <h2 class="section-title">
          Simple <span style="color: var(--primary);">Process</span>
        </h2>
        <p class="section-subtitle" style="margin: 0 auto;">
          Getting started with any of our services is easy.
        </p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1000px; margin: 0 auto;" class="process-grid">
        <div style="text-align: center; position: relative;">
          <div style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--primary-light)); display: flex; align-items: center; justify-content: center; color: white; font-size: 22px; font-weight: 800; margin: 0 auto 16px; box-shadow: var(--shadow-primary);">
            01
          </div>
          <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 8px;">Book Online or Call</h4>
          <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.5; margin: 0;">Schedule through our website, app, or helpline.</p>
        </div>
        <div style="text-align: center; position: relative;">
          <div style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--primary-light)); display: flex; align-items: center; justify-content: center; color: white; font-size: 22px; font-weight: 800; margin: 0 auto 16px; box-shadow: var(--shadow-primary);">
            02
          </div>
          <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 8px;">Confirm Appointment</h4>
          <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.5; margin: 0;">Our team confirms your slot and shares details.</p>
        </div>
        <div style="text-align: center; position: relative;">
          <div style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--primary-light)); display: flex; align-items: center; justify-content: center; color: white; font-size: 22px; font-weight: 800; margin: 0 auto 16px; box-shadow: var(--shadow-primary);">
            03
          </div>
          <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 8px;">Visit or Get Home Service</h4>
          <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.5; margin: 0;">Arrive at the hospital or receive care at home.</p>
        </div>
        <div style="text-align: center; position: relative;">
          <div style="width: 64px; height: 64px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--primary-light)); display: flex; align-items: center; justify-content: center; color: white; font-size: 22px; font-weight: 800; margin: 0 auto 16px; box-shadow: var(--shadow-primary);">
            04
          </div>
          <h4 style="font-size: 16px; font-weight: 700; margin-bottom: 8px;">Get Your Results</h4>
          <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.5; margin: 0;">Access reports digitally or collect from our centre.</p>
        </div>
      </div>
    </div>
    <style>
      @media (max-width: 768px) { .process-grid { grid-template-columns: repeat(2, 1fr) !important; } }
      @media (max-width: 480px) { .process-grid { grid-template-columns: 1fr !important; } }
    </style>
  </section>

  <!-- ── FAQ ── -->
  <section style="padding: 100px 0; background: var(--bg-white);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 60px; align-items: flex-start;" class="faq-grid">
        <div>
          <div class="section-badge">FAQs</div>
          <h2 class="section-title">
            Frequently Asked <span style="color: var(--primary);">Questions</span>
          </h2>
          <p class="section-subtitle">
            Find answers to common questions about our services and facilities.
          </p>
          <a href="{{ url('/contact') }}" class="btn btn-outline" style="margin-top: 24px;">
            Still have questions? Contact Us
          </a>
        </div>
        <div>
          <!-- FAQ 1 -->
          <div class="accordion-item" style="margin-bottom: 8px;">
            <button class="accordion-trigger" onclick="this.nextElementSibling.classList.toggle('active'); this.querySelector('svg').style.transform = this.nextElementSibling.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)'">
              How can I book a health checkup?
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.2s ease; flex-shrink: 0;">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="accordion-content">You can request a health checkup through our appointment page, call us at {{ config('hospital.phone.display') }}, or visit the reception desk. Our team will confirm available packages and timings.</div>
          </div>
          <!-- FAQ 2 -->
          <div class="accordion-item" style="margin-bottom: 8px;">
            <button class="accordion-trigger" onclick="this.nextElementSibling.classList.toggle('active'); this.querySelector('svg').style.transform = this.nextElementSibling.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)'">
              Do you offer home sample collection for lab tests?
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.2s ease; flex-shrink: 0;">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="accordion-content">Yes, we offer home sample collection for most lab tests. You can request this service while booking your test or by calling our diagnostics helpline.</div>
          </div>
          <!-- FAQ 3 -->
          <div class="accordion-item" style="margin-bottom: 8px;">
            <button class="accordion-trigger" onclick="this.nextElementSibling.classList.toggle('active'); this.querySelector('svg').style.transform = this.nextElementSibling.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)'">
              What insurance providers do you accept?
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.2s ease; flex-shrink: 0;">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="accordion-content">Insurance and scheme eligibility can vary by treatment and policy. Please call {{ config('hospital.phone.display') }} with your card or policy details so our team can confirm current support.</div>
          </div>
          <!-- FAQ 4 -->
          <div class="accordion-item" style="margin-bottom: 8px;">
            <button class="accordion-trigger" onclick="this.nextElementSibling.classList.toggle('active'); this.querySelector('svg').style.transform = this.nextElementSibling.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)'">
              How quickly can an ambulance reach me?
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.2s ease; flex-shrink: 0;">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="accordion-content">Please call {{ config('hospital.phone.display') }} to ask about current ambulance availability, service area and estimated arrival time.</div>
          </div>
          <!-- FAQ 5 -->
          <div class="accordion-item" style="margin-bottom: 8px;">
            <button class="accordion-trigger" onclick="this.nextElementSibling.classList.toggle('active'); this.querySelector('svg').style.transform = this.nextElementSibling.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)'">
              Are homecare services available on weekends?
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.2s ease; flex-shrink: 0;">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </button>
            <div class="accordion-content">Yes, our homecare services are available 7 days a week including public holidays. You can schedule visits based on your convenience.</div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .accordion-content { display: none; padding: 16px; font-size: 15px; color: var(--text-secondary); line-height: 1.6; }
      .accordion-content.active { display: block; }
      @media (max-width: 968px) {
        .faq-grid { grid-template-columns: 1fr !important; gap: 40px !important; }
      }
    </style>
  </section>

  <!-- ── CTA ── -->
  <section style="padding: 80px 0; background: var(--dark); color: white; text-align: center;">
    <div class="container">
      <h2 style="font-size: clamp(28px, 4vw, 40px); font-weight: 800; color: white; margin-bottom: 16px;">
        Need a <span style="color: var(--secondary);">Service?</span>
      </h2>
      <p style="font-size: 17px; color: rgba(255,255,255,0.7); max-width: 500px; margin: 0 auto 32px; line-height: 1.7;">
        Book an appointment or call us to learn more about our patient services.
      </p>
      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <a href="{{ url('/appointment') }}" class="btn btn-secondary btn-lg">Book Appointment</a>
        <a href="tel:{{ config('hospital.phone.href') }}" class="btn btn-white btn-lg">Call Now</a>
      </div>
    </div>
  </section>
@endsection
