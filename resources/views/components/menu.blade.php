<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/dashboard" class="app-brand-link">
        <span class="app-brand-logo demo">
          <svg
            width="100"
            viewBox="5 15 30 42"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
          >
            <image xlink:href="assets/img/icons/MLogo.svg" width="40" height="84" />
          </svg>
        </span>
        
        <span class="app-brand-text demo menu-text fw-bold ms-2">Admin</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      @if(request()->routeIs(['dashboard']))
      <li class="menu-item active open">
        @else 
        <li class="menu-item">
      @endif
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboards">Dashboards</div>
          {{-- <div class="badge bg-danger rounded-pill ms-auto">5</div> --}}
        </a>
      </li>

      {{-- REQUESTS --}}
      @if(request()->routeIs(['requests']))
      <li class="menu-item active open">
        @else 
        <li class="menu-item">
      @endif
        <a href="{{ route('requests') }}" 
          target="_self" class="menu-link"> 
            <i class="menu-icon tf-icons bx bx-envelope"></i> 
            <div data-i18n="Ayala Land Premier">Requests</div> 
        </a>

          {{-- COUNT REQUEST  --}}
          {{-- <div class="badge bg-danger rounded-pill ms-auto">5</div> --}}
        </a>
      </li>

      
      @if(request()->routeIs(['upload.index']))
      <li class="menu-item active open">
        @else 
        <li class="menu-item">
      @endif
        <a href="{{ route('upload.index') }}" 
          target="_self" class="menu-link"> 
            <i class="menu-icon tf-icons bx"></i> 
            <div data-i18n="Ayala Land Premier">Uploaded Properties</div> 
        </a>

          {{-- COUNT REQUEST  --}}
          {{-- <div class="badge bg-danger rounded-pill ms-auto">5</div> --}}
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">WYSIWYG</span>
      </li>
      <!-- Pages -->
      <li class="menu-item">
        <a href="{{ route('adminhome') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-store"></i>
          <div data-i18n="Front Pages">Home/Landing</div>
        </a>
      </li>

      {{-- ABOUT US --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-detail"></i>
          <div data-i18n="About Us">About Us</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a
              href="{{ route('about') }}"
              target="_self"
              class="menu-link">
              <div data-i18n="About Us">About Us</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('adminlegacy') }}" class="menu-link">
              <div data-i18n="Our Legacy">Our Legacy</div>
            </a>
          </li>
          <li class="menu-item">
            <a
              href="{{ route('admincareers') }}"
              target="_self"
              class="menu-link">
              <div data-i18n="Careers">Careers</div>
            </a>
          </li>
          <li class="menu-item">
            <a
              href="{{ route('awards') }}"
              target="_self"
              class="menu-link">
              <div data-i18n="Awards">Awards</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- RESIDENCES --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-home"></i>
          <div data-i18n="Residences">Residences</div>
        </a>
        
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('adminresidences') }}"
              target="_self" class="menu-link">
              <div data-i18n="Residences">Residences</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('adminpremier') }}" class="menu-link">
              <div data-i18n="Ayala Land Premier">Ayala Land Premier</div>
            </a>
          </li>
        </ul>
      </li>


      {{--  --}}
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Properties</span>
      </li>

      @if(request()->routeIs(['premierproperties']))
      <li class="menu-item active open">
        @else 
        <li class="menu-item">
      @endif
        <a href="{{ route('premierproperties') }}"
          target="_self" class="menu-link">
          <i class="menu-icon tf-icons bx"></i>
          <div data-i18n="Ayala Land Premier">Ayala Land Premier</div>
        </a>
      </li>

      @if(request()->routeIs(['other']))
      <li class="menu-item active open">
        @else 
        <li class="menu-item">
      @endif
        <a href="{{ route('other') }}"
          target="_self" class="menu-link">
          <i class="menu-icon tf-icons bx"></i>
          <div data-i18n="Ayala Land Premier">Other Details</div>
        </a>
      </li>
      
    </ul>
  </aside>