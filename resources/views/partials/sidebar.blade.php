<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset ('/assests/admin/images/icon/aa.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                            
                                <i class="fas fa-tachometer-alt" style="font-size:24px;color: blue"></i>Dashboard</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('merk.index') }}">Merk Mobil</a>
                                </li>
                                </ul>
                           
                        
                        <li>
                            <a href="{{ route('mobil.index') }}">
                                <i class="fa fa-car" style="font-size:24px; color: blue"></i>Mobil</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('supir.index') }}">
                                <i class="fa fa-user-circle" style="font-size:24px; color:blue"></i>Supir</a>
                        </li>
                        <li>
                            <a href="{{ route('rental.index') }}">
                        <i class="fa fa-asl-interpreting" style="font-size:24px; color: blue"></i>Data Rental</a>
                        </li>

                       

                        <li><a href="{{ route('kembali.index') }}">
                        <i class="fa fa-link" style="font-size:24px; color:blue"></i>Data Pengembalian</a>
                        </li>
                        
                            </ul>
                        </li>
                    </ul>

                </nav>

            </div>
        </aside>