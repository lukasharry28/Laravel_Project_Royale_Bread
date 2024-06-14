<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Footer CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- CSS Untuk DataTables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    {{-- ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Admin - @yield('title')</title>

    {{-- Footer Css --}}
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            font-family: 'Work Sans', sans-serif;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        body {
            background: #fff;
        }

        .container-fluid {
            flex: 1;
        }

        section {
            padding: 80px 13% 70px;
        }

        .footer-content h4 {
            color: #fff;
            margin-bottom: 1.5rem;
            font-size: 22px;
        }

        .footer-content li {
            margin-bottom: 16px;
        }

        .footer-content li a {
            display: block;
            color: #d6d6d6;
            font-size: 15px;
            font-weight: 400;
            transition: all .40s ease;
        }

        .footer-content li a:hover {
            transform: translateY(-3px) translateX(-5px);
            color: #fff;
        }

        .footer-content p {
            color: #d6d6d6;
            font-size: 16px;
            line-height: 30px;
            margin: 10px 0;
        }

        .nav a {
            display: block;
            color: #002aff;
            font-size: 15px;
            font-weight: 400;
            transition: all .40s ease;
        }

        .nav a:hover {
            transform: translateY(-3px) translateX(5px);
            color: #002aff;
        }

        .icons a {
            display: inline-block;
            font-size: 22px;
            color: #d6d6d6;
            margin-right: 17px;
            transition: all .40s ease;
        }

        .icons a:hover {
            color: #fff;
            transform: translateY(-5px);
        }

    </style>

    {{-- google fonts link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Royale Bread</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/Dashboard">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/aex.ccry/">Instagram </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facebook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Twitter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shopee</a>
                </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
            <div class="dropdown float-right">
                <button class="btn dropdown-toggle btn-outline-light" type="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i> User
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">{{ Auth::user()->name ?? ""}}</a>
                    <a class="dropdown-item" href="/User">Change Password</a>
                    <a class="dropdown-item" href="/Logout">Log Out</a>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <!-- MENU -->
                <div class="row mt-3">
                    <div class="col">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link {{ @key == 'dashboard' ? 'active' : '' }}" id="v-pills-dashboard-tab" href="/Dashboard">Dashboard</a>
                            <a class="nav-link {{ @key == 'produk' ? 'active' : '' }}" id="v-pills-produk-tab" href="/Produk">Produk</a>
                            <a class="nav-link {{ @key == 'keranjang' ? 'active' : '' }}" id="v-pills-keranjang-tab" href="/Keranjang">Keranjang</a>
                            <a class="nav-link {{ @key == 'delivery' ? 'active' : '' }}" id="v-pills-delivery-tab" href="/Delivery">Delivery</a>
                            <a class="nav-link {{ @key == 'profile' ? 'active' : '' }}" id="v-pills-profile-tab" href="/Profile">Profile</a>
                            <a class="nav-link {{ @key == 'rotiroyale' ? 'active' : '' }}" id="v-pills-rotiroyale-tab" href="/Roti_Royale">Roti Royale</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 bg-warning py-4">
                <!-- ARTIKEL -->
                <div class="card">
                    <div class="card-body">
                        <!-- ANAK-ANAK : {HOME, PROFILE, DKK} -->
                        @yield('artikel')
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer Section --}}
    <footer class="bd-footer py-4 py-md-5 mt-5 bg-dark">
        <div class="container py-4 py-md-5 px-4 px-md-3 text-light">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/Dashboard" aria-label="Bootstrap">
                        <img style="max-width: 100px; max-height: 70px; width: auto; height: auto;" src="https://i.ibb.co/NmX3gTv/Royale-Bread.png" alt="Royale Bread">
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Designed and built with all the love in the world by Hary. Lorem ipsum dolor sit amet.</li>
                        <li class="mb-2">©2024 Royale Bread.</li>
                    </ul>
                    <div class="icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                        <a href="#"><i class="bi bi-cart-dash-fill"></i></a>
                    </div>

                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Laman</h5>
                    <ul class="footer-content">
                        <li class="mb-2"><a href="#">Dashboard</a></li>
                        <li class="mb-2"><a href=#">Produk</a></li>
                        <li class="mb-2"><a href="#">Keranjang</a></li>
                        <li class="mb-2"><a href="#">Delivery</a></li>
                        <li class="mb-2"><a href="#">Profile</a></li>
                        <li class="mb-2"><a href=#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Pengantar</h5>
                    <ul class="footer-content">
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Shop</h5>
                    <ul class="footer-content">
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Blog</h5>
                    <ul class="footer-content">
                        <li class="mb-2"><a href="#">Issues</a></li>
                        <li class="mb-2"><a href="#">Discussions</a></li>
                        <li class="mb-2"><a href="#">Corporate sponsors</a></li>
                        <li class="mb-2"><a href="#">Open Collective</a></li>
                        <li class="mb-2"><a href="#">Lorem ipsum</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {{-- End Footer --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
        new DataTable('#example');

    </script>
</body>

</html>
