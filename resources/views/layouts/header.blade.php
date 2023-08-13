<header class="bg-primary">
    <div class="bg-image bg-header py-5">              
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
                <div class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none me-2">
                    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="80" height="60">
                </div>
                <div class="app-name text-white col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <div class="small fw-bold">
                       Point of Sales
                    </div>
                    <div class="fs-5 fw-bold">
                        PASURUAN CASHIER
                    </div>
                </div>
               
                {{-- PROFIL MENU --}}                
                <div class="account-dropdown me-2">
                    <button class="btn btn-default border text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://testing.unmerpas.ac.id/files/users/img/no-photo.webp" class="img-thumbnail rounded-5 me-2" style="width:40px;height:40px"> 
                        <span class="account-name fw-bold">Super Administrator</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end mt-1" style="width:240px">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person"></i> Halaman Profil
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-lock"></i> Ganti Password
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                                @csrf
                                <button type="submit" class="btn btn-default text-danger p-0 fw-bold logout_confirm">
                                    <i class="bi bi-box-arrow-left"></i> Log out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>