<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{ asset ('/assests/adminn/images/faces/pic-2.png')}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Member</p>
                  <div>
                    <small class="designation text-muted">Member</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftarmobil">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
              
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('mobil') }}">Mobil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('supir') }}"> Supir </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('rental') }}"> Rental </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('kembali') }}"> Pengembalian </a>
                </li>
                
              </ul>
            </div>
          </li>
          
        
        </ul>
      </nav>
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>