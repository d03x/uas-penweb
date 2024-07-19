<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
            <!--begin::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">MANAJEMEN PRODUK</span>
            <!--end::Brand Text--> </a> <!--end::Brand Link-->
    </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="{{ route('home') }}" class="nav-link active"> <i
                            class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Data Master
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('product') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Data Produk</p>
                            </a> </li>
                        <li class="nav-item"> <a href="{{ route('kategori') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Data Kategori</p>
                            </a> </li>

                        @if (auth()->user()->role === 'admin')
                       
                       
                            <li class="nav-item"> 
                                <a href="{{ route('users.index') }}" class="nav-link"> <i
                                        class="nav-icon bi bi-circle"></i>
                                    <p>Data User</p>
                                </a> </li>
                        @endif

                    </ul>
                </li>

                <li class="nav-header">Other</li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <li class="nav-item"> 
                    <a href="#" onclick="event.preventDefault(); confirm('Apakah anda yakin?'); document.getElementById('logout-form').submit();" href="#" class="nav-link logout-link"> <i
                            class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Logout
                        </p>
                    </a>

                </li>

        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>

