<header id="main-header" style="position: relative; z-index: 1000; background: white; height: var(--header-height); display: flex; align-items: center; border-bottom: 1px solid transparent; transition: var(--transition);">
  <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="hospital-brand" aria-label="Maruti Multispeciality Hospital home">
      <img src="{{ asset('images/maruti-hospital-icon.png') }}" alt="Maruti Multispeciality Hospital logo" class="hospital-brand__logo" width="78" height="78" />
      <span class="hospital-brand__wordmark">
        <strong>Maruti Multispeciality</strong>
        <span>Hospital · Bhopal</span>
      </span>
      <img src="{{ asset('images/nabh-logo.png') }}" alt="NABH Accredited" class="hospital-brand__nabh-logo" width="68" height="68" title="NABH Accredited - Patient Safety &amp; Quality of Care" />
    </a>

    <!-- Desktop Nav -->
    <nav style="display: flex; align-items: center; gap: 8px;">
      <ul style="display: flex; list-style: none; gap: 2px; margin: 0; padding: 0;" class="desktop-nav">

        <!-- Home -->
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
            Home
          </a>
        </li>

        <!-- About -->
        <li style="position: relative;" class="nav-item has-dropdown">
          <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" aria-expanded="false">
            About
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="dropdown-icon">
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </a>
          <div class="nav-dropdown" style="min-width: 340px;">
            <div style="display: grid; grid-template-columns: 1fr; gap: 4px;">
              <a href="{{ route('about') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><polyline points="9 22 9 12 15 12 15 22" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">About Maruti Hospital</div>
                  <div class="dropdown-item-desc">Our history, mission & values</div>
                </div>
              </a>
              <a href="{{ route('about') }}#mission" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10" /><circle cx="12" cy="12" r="6" /><circle cx="12" cy="12" r="2" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Our Mission</div>
                  <div class="dropdown-item-desc">What drives us every day</div>
                </div>
              </a>
              <a href="{{ route('about') }}#leadership" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Our Team</div>
                  <div class="dropdown-item-desc">Leadership & management</div>
                </div>
              </a>
              <a href="{{ route('about') }}#gallery" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="6" width="22" height="16" rx="2" /><path d="M1 10h22" /><path d="M8 6V2" /><path d="M16 6V2" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Infrastructure</div>
                  <div class="dropdown-item-desc">Hospital facilities and patient services</div>
                </div>
              </a>
            </div>
          </div>
        </li>

        <!-- Departments (Mega) -->
        <li style="position: relative;" class="nav-item has-dropdown">
          <a href="{{ url('/#departments') }}" class="nav-link" aria-expanded="false">
            Departments
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="dropdown-icon">
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </a>
          <div class="nav-dropdown nav-dropdown--centered" style="min-width: 640px;">
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 4px;">
              <!-- Accident & Emergency -->
              <a href="{{ url('/#departments') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Accident & Emergency</div>
                  <div class="dropdown-item-desc">Call to confirm available urgent care</div>
                </div>
              </a>
              <!-- Cardiology -->
              <a href="{{ url('/#departments') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0L12 5.34l-.77-.76a5.4 5.4 0 0 0-7.65 7.65L12 20.65l8.42-8.42a5.4 5.4 0 0 0 0-7.65z" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Cardiology</div>
                  <div class="dropdown-item-desc">Heart & cardiovascular care</div>
                </div>
              </a>
              <!-- Neurology -->
              <a href="{{ url('/#departments') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2a8 8 0 0 0-8 8c0 3.4 2.1 6.3 5 7.5V20a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2.5c2.9-1.2 5-4.1 5-7.5a8 8 0 0 0-8-8z" /><path d="M10 14h4" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Neurology</div>
                  <div class="dropdown-item-desc">Brain & nervous system</div>
                </div>
              </a>
              <!-- Orthopaedics -->
              <a href="{{ url('/#departments') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 6l-6 6M6 18l6-6m0 0l-4-4m4 4l4 4" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Orthopaedics</div>
                  <div class="dropdown-item-desc">Bone, joint & spine care</div>
                </div>
              </a>
              <!-- Mother & Child -->
              <a href="{{ url('/#departments') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="5" /><path d="M20 21a8 8 0 0 0-16 0" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Mother & Child</div>
                  <div class="dropdown-item-desc">Maternity & pediatric care</div>
                </div>
              </a>
              <!-- Critical Care -->
              <a href="{{ url('/#departments') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Critical Care (ICU)</div>
                  <div class="dropdown-item-desc">Intensive & critical care</div>
                </div>
              </a>
              <!-- Cancer Care -->
              <a href="{{ url('/#departments') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" /><path d="M12 8v8m-4-4h8" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Cancer Care</div>
                  <div class="dropdown-item-desc">Oncology & treatment</div>
                </div>
              </a>
              <!-- Rehabilitation -->
              <a href="{{ url('/#departments') }}" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" /><line x1="4" y1="22" x2="4" y2="15" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Rehabilitation</div>
                  <div class="dropdown-item-desc">Recovery & physiotherapy</div>
                </div>
              </a>
            </div>
          </div>
        </li>

        <!-- Services -->
        <li style="position: relative;" class="nav-item has-dropdown">
          <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" aria-expanded="false">
            Services
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="dropdown-icon">
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </a>
          <div class="nav-dropdown nav-dropdown--centered" style="min-width: 380px;">
            <div style="display: grid; grid-template-columns: 1fr; gap: 4px;">
              <a href="{{ route('services') }}#diagnostics" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 3v11M15 3v7M9 14c0 2.21 1.79 4 4 4h2c2.21 0 4 1.79 4 4" /><circle cx="9" cy="14" r="2" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Labs & Diagnostics</div>
                  <div class="dropdown-item-desc">Advanced imaging & pathology</div>
                </div>
              </a>
              <a href="{{ route('services') }}#pharmacy" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5" /><path d="M12 11v4m-2-2h4" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Pharmacy</div>
                  <div class="dropdown-item-desc">24/7 in-house pharmacy</div>
                </div>
              </a>
              <a href="{{ route('services') }}#ambulance" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10 17h4V5H2v12h3m15 0h2v-3.34a4 4 0 0 0-.54-2L17.5 7H14v10h1" /><circle cx="7.5" cy="17.5" r="2.5" /><circle cx="17.5" cy="17.5" r="2.5" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Ambulance</div>
                  <div class="dropdown-item-desc">Call to confirm transport availability</div>
                </div>
              </a>
              <a href="{{ route('services') }}#homecare" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><path d="M9 14h2v4H9z" /><path d="M13 14h2v4h-2z" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Home Care</div>
                  <div class="dropdown-item-desc">Post-discharge care at home</div>
                </div>
              </a>
              <a href="{{ route('services') }}#rehab" class="nav-dropdown-item">
                <div class="dropdown-item-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" /></svg>
                </div>
                <div>
                  <div class="dropdown-item-title">Rehabilitation</div>
                  <div class="dropdown-item-desc">Physiotherapy & recovery</div>
                </div>
              </a>
            </div>
          </div>
        </li>

        <!-- Doctors -->
        <li class="nav-item">
          <a href="{{ route('doctors') }}" class="nav-link">
            Doctors
          </a>
        </li>

        <!-- Contact -->
        <li class="nav-item">
          <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
            Contact
          </a>
        </li>
      </ul>

      <a href="{{ route('appointment') }}" class="btn btn-primary btn-sm header-cta" style="margin-left: 8px;">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
          <line x1="16" y1="2" x2="16" y2="6" />
          <line x1="8" y1="2" x2="8" y2="6" />
          <line x1="3" y1="10" x2="21" y2="10" />
        </svg>
        Book Appointment
      </a>

      <!-- Mobile hamburger -->
      <button id="mobile-menu-btn" class="mobile-menu-btn" style="display: none; background: var(--primary-50); border: 1px solid var(--border); cursor: pointer; padding: 10px; border-radius: 10px; color: var(--primary); transition: var(--transition);" aria-label="Toggle menu">
        <svg id="hamburger-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="3" y1="6" x2="21" y2="6" />
          <line x1="3" y1="12" x2="21" y2="12" />
          <line x1="3" y1="18" x2="21" y2="18" />
        </svg>
      </button>
    </nav>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" style="display: none; position: fixed; top: var(--header-height); left: 0; right: 0; bottom: 0; background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(16px); z-index: 999; padding: 24px; overflow-y: auto;">
    <ul style="list-style: none; padding: 0; margin: 0;">
      <li>
        <a href="{{ route('home') }}" style="display: block; padding: 16px 0; font-size: 18px; font-weight: 600; color: var(--text); text-decoration: none; border-bottom: 1px solid var(--border-light);">Home</a>
      </li>
      <li>
        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-light);">
          <a href="{{ route('about') }}" style="display: block; padding: 16px 0; font-size: 18px; font-weight: 600; color: var(--text); text-decoration: none; flex: 1;">About</a>
          <button class="mobile-accordion-toggle" style="background: var(--primary-50); border: 1px solid var(--border); border-radius: 8px; padding: 8px; cursor: pointer; color: var(--primary);" aria-label="Toggle About submenu">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9" /></svg>
          </button>
        </div>
        <div class="mobile-submenu" style="display: none; padding: 12px 0 12px 16px; border-left: 2px solid var(--primary-100); margin-left: 12px; margin-top: 8px;">
          <a href="{{ route('about') }}" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">About Maruti Hospital</a>
          <a href="{{ route('about') }}#mission" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Our Mission</a>
          <a href="{{ route('about') }}#leadership" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Our Team</a>
          <a href="{{ route('about') }}#gallery" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Infrastructure</a>
        </div>
      </li>
      <li>
        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-light);">
          <a href="{{ url('/#departments') }}" style="display: block; padding: 16px 0; font-size: 18px; font-weight: 600; color: var(--text); text-decoration: none; flex: 1;">Departments</a>
          <button class="mobile-accordion-toggle" style="background: var(--primary-50); border: 1px solid var(--border); border-radius: 8px; padding: 8px; cursor: pointer; color: var(--primary);" aria-label="Toggle Departments submenu">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9" /></svg>
          </button>
        </div>
        <div class="mobile-submenu" style="display: none; padding: 12px 0 12px 16px; border-left: 2px solid var(--primary-100); margin-left: 12px; margin-top: 8px;">
          <a href="{{ url('/#departments') }}" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Accident & Emergency</a>
          <a href="{{ url('/#departments') }}" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Cardiology</a>
          <a href="{{ url('/#departments') }}" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Neurology</a>
          <a href="{{ url('/#departments') }}" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Orthopaedics</a>
          <a href="{{ url('/#departments') }}" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Mother & Child</a>
          <a href="{{ url('/#departments') }}" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Critical Care (ICU)</a>
        </div>
      </li>
      <li>
        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-light);">
          <a href="{{ route('services') }}" style="display: block; padding: 16px 0; font-size: 18px; font-weight: 600; color: var(--text); text-decoration: none; flex: 1;">Services</a>
          <button class="mobile-accordion-toggle" style="background: var(--primary-50); border: 1px solid var(--border); border-radius: 8px; padding: 8px; cursor: pointer; color: var(--primary);" aria-label="Toggle Services submenu">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9" /></svg>
          </button>
        </div>
        <div class="mobile-submenu" style="display: none; padding: 12px 0 12px 16px; border-left: 2px solid var(--primary-100); margin-left: 12px; margin-top: 8px;">
          <a href="{{ route('services') }}#diagnostics" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Labs & Diagnostics</a>
          <a href="{{ route('services') }}#pharmacy" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Pharmacy</a>
          <a href="{{ route('services') }}#ambulance" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Ambulance</a>
          <a href="{{ route('services') }}#homecare" style="display: block; padding: 10px 0; font-size: 15px; color: var(--text-secondary); text-decoration: none;">Home Care</a>
        </div>
      </li>
      <li>
        <a href="{{ route('doctors') }}" style="display: block; padding: 16px 0; font-size: 18px; font-weight: 600; color: var(--text); text-decoration: none; border-bottom: 1px solid var(--border-light);">Doctors</a>
      </li>
      <li>
        <a href="{{ route('contact') }}" style="display: block; padding: 16px 0; font-size: 18px; font-weight: 600; color: var(--text); text-decoration: none; border-bottom: 1px solid var(--border-light);">Contact</a>
      </li>
    </ul>
    <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 32px;">
      Book Appointment
    </a>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');
        
        // Sticky Header scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });

        // Desktop Dropdowns handling for touch/keyboard
        const navItems = document.querySelectorAll('.nav-item.has-dropdown');

        navItems.forEach(item => {
            const link = item.querySelector('.nav-link');
            const dropdown = item.querySelector('.nav-dropdown');
            
            // Allow clicking to toggle on touch devices
            link.addEventListener('click', (e) => {
                if (window.innerWidth > 968) {
                    const isExpanded = link.getAttribute('aria-expanded') === 'true';
                    
                    // Close others
                    navItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.querySelector('.nav-link').setAttribute('aria-expanded', 'false');
                            otherItem.querySelector('.nav-dropdown').classList.remove('active');
                        }
                    });

                    // Toggle current
                    link.setAttribute('aria-expanded', !isExpanded);
                    if (!isExpanded) {
                        dropdown.classList.add('active');
                        e.preventDefault(); // Prevent navigation on first click if it's acting as a toggle
                    } else {
                        dropdown.classList.remove('active');
                    }
                }
            });

            // Clean up on mouse leave (CSS handles the visual hover state, JS handles the active class fallback)
            item.addEventListener('mouseleave', () => {
                dropdown.classList.remove('active');
                link.setAttribute('aria-expanded', 'false');
            });
        });

        // Mobile Menu
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        let isMobileOpen = false;

        mobileBtn.addEventListener('click', () => {
            isMobileOpen = !isMobileOpen;
            
            if (isMobileOpen) {
                mobileMenu.style.display = 'block';
                mobileMenu.style.animation = 'slideInMobile 0.3s cubic-bezier(0.16, 1, 0.3, 1)';
                hamburgerIcon.innerHTML = '<path d="M18 6L6 18M6 6l12 12" />';
                mobileBtn.style.background = 'var(--primary-100)';
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            } else {
                mobileMenu.style.display = 'none';
                hamburgerIcon.innerHTML = '<line x1="3" y1="6" x2="21" y2="6" /><line x1="3" y1="12" x2="21" y2="12" /><line x1="3" y1="18" x2="21" y2="18" />';
                mobileBtn.style.background = 'var(--primary-50)';
                document.body.style.overflow = '';
            }
        });

        // Mobile Accordion Toggles
        const accordionToggles = document.querySelectorAll('.mobile-accordion-toggle');
        accordionToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const submenu = toggle.closest('li').querySelector('.mobile-submenu');
                const icon = toggle.querySelector('svg');
                if (submenu.style.display === 'none' || !submenu.style.display) {
                    submenu.style.display = 'block';
                    icon.style.transform = 'rotate(180deg)';
                    toggle.style.background = 'var(--primary-100)';
                } else {
                    submenu.style.display = 'none';
                    icon.style.transform = 'rotate(0)';
                    toggle.style.background = 'var(--primary-50)';
                }
            });
        });
    });
  </script>
</header>
