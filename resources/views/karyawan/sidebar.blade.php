
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{ asset ('/assests/karyawan/images/faces/face1.jpg')}}" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">David Grey. H</span>
                <span class="text-secondary text-small">Project Manager</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftarmobil">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('mobil') }}">Mobil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('supir.index') }}"> Supir </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('rental.index') }}"> Rental </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('kembali.index') }}"> Pengembalian </a>
                </li>
                
              </ul>
            </div>
            </a>
          </li>
          </ul>
              </div>
            </span>
          </li>
        </ul>
      </nav>
      
          