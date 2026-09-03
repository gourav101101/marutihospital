<footer style="background: linear-gradient(180deg, #1E2A38 0%, #2C3E50 100%); color: rgba(255,255,255,0.7); padding-top: 80px; position: relative;">
  <!-- Decorative Top Border -->
  <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);"></div>

  <div class="container">
     <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1.5fr; gap: 40px; margin-bottom: 60px;" class="footer-grid">
        
        <!-- Brand Col -->
        <div>
            <a href="{{ route('home') }}" class="footer-hospital-brand">
              <span class="footer-hospital-brand__mark"><img src="{{ asset('images/maruti-hospital-icon.png') }}" alt="Maruti Multispeciality Hospital logo" width="76" height="76" /></span>
              <span><strong>Maruti Multispeciality</strong><small>Hospital · Bhopal</small></span>
            </a>
            <p style="font-size: 14px; line-height: 1.7; margin-bottom: 24px; color: rgba(255,255,255,0.75);">
                Maruti Multispeciality Hospital provides patient-focused hospital care on Raisen Road in Bhopal and is open 24 hours.
            </p>
            <div style="display: flex; gap: 12px;">
                <!-- Facebook -->
                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; border: 1px solid rgba(255,255,255,0.1); transition: var(--transition);"
                onmouseover="this.style.background='var(--primary)'; this.style.borderColor='var(--primary)'"
                onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </a>
                <!-- Twitter/X -->
                <a href="https://x.com/" target="_blank" rel="noopener noreferrer" aria-label="X" style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; border: 1px solid rgba(255,255,255,0.1); transition: var(--transition);"
                onmouseover="this.style.background='var(--primary)'; this.style.borderColor='var(--primary)'"
                onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                    </svg>
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; border: 1px solid rgba(255,255,255,0.1); transition: var(--transition);"
                onmouseover="this.style.background='var(--primary)'; this.style.borderColor='var(--primary)'"
                onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                    </svg>
                </a>
                <!-- YouTube -->
                <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="YouTube" style="width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; border: 1px solid rgba(255,255,255,0.1); transition: var(--transition);"
                onmouseover="this.style.background='var(--primary)'; this.style.borderColor='var(--primary)'"
                onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z" />
                      <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 style="color: white; font-size: 16px; margin-bottom: 24px;">Quick Links</h4>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
               <li><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Home</a></li>
               <li><a href="{{ route('about') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">About Us</a></li>
               <li><a href="{{ route('doctors') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Our Doctors</a></li>
               <li><a href="{{ route('services') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Patient Services</a></li>
               <li><a href="{{ route('gallery') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Gallery</a></li>
               <li><a href="{{ route('downloads') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Downloads</a></li>
               <li><a href="{{ route('health-library') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Health Library</a></li>
               <li><a href="{{ route('contact') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Contact Us</a></li>
            </ul>
        </div>

        <!-- Departments -->
        <div>
            <h4 style="color: white; font-size: 16px; margin-bottom: 24px;">Departments</h4>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
               <li><a href="{{ url('/#departments') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Cardiology</a></li>
               <li><a href="{{ url('/#departments') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Neurology</a></li>
               <li><a href="{{ url('/#departments') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Orthopaedics</a></li>
               <li><a href="{{ url('/#departments') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Pediatrics</a></li>
               <li><a href="{{ url('/#departments') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 14px; transition: var(--transition);" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Critical Care</a></li>
            </ul>
        </div>

        <!-- Appointment support -->
        <div>
            <h4 style="color: white; font-size: 16px; margin-bottom: 24px;">Need Help?</h4>
            <p style="font-size: 14px; line-height: 1.6; margin-bottom: 16px; color: rgba(255,255,255,0.75);">
                Request an appointment online or contact our patient-care team for guidance.
            </p>
            <a href="{{ route('appointment') }}" class="btn btn-primary" style="display: inline-flex; padding: 12px 16px; border-radius: 8px;">Book an Appointment</a>
            <a href="{{ route('contact') }}" style="display: block; width: fit-content; margin-top: 16px; color: var(--accent); font-size: 14px; font-weight: 600; text-decoration: none;">Contact patient care →</a>
            <a href="tel:{{ config('hospital.phone.href') }}" style="display:block;width:fit-content;margin-top:12px;color:white;font-size:14px;font-weight:700;text-decoration:none">{{ config('hospital.phone.display') }}</a>
            <a href="{{ config('hospital.directions_url') }}" target="_blank" rel="noopener noreferrer" style="display:block;width:fit-content;margin-top:10px;color:rgba(255,255,255,.72);font-size:13px;text-decoration:none">Get directions to Raisen Road →</a>
        </div>

     </div>

     <div style="border-top: 1px solid rgba(255,255,255,0.1); padding: 24px 0; display: flex; justify-content: space-between; align-items: center; font-size: 13px;" class="footer-bottom">
         <div>&copy; {{ date('Y') }} {{ config('hospital.name') }}. All rights reserved.</div>
         <div style="display: flex; gap: 16px;">
             <a href="{{ route('privacy') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Privacy Policy</a>
             <a href="{{ route('terms') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='var(--accent)'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Terms of Service</a>
         </div>
     </div>
  </div>
</footer>
