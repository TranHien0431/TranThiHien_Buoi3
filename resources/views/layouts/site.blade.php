<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("fontawesome/css/all.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/layoutsite.css")}}">
    
    @yield('header')
</head>
<body>
    <header class="section_header">
        <div class="container">
            <div class="row py-2">
                <div class="col-3 col-md-2 order-1 order-md-1">
                    <a href="index.html">
                        <img src="{{ asset("images/logo.webp")}}" class="logo" alt="Logo" height="80px" width="160px">
                    </a>
                </div>
                <div class="col-12 col-md-8 order-3 order-md-2 py-3">
                    <nav class="navbar navbar-expand-lg bg-white" data-bs-theme="light">
                        <div class="container-fluid">
                            <a class="navbar-brand d-none" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Thương hiệu</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Trang điểm
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Kem nền</a></li>
                                            <li><a class="dropdown-item" href="#">Kem che khuyết điểm</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Kem lót</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Chăm sóc
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Chăm sóc body</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Chăm sóc tóc</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dương da
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Mặt nạ</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Làm sạch</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-9 col-md-2 order-2 order-md-3 text-end py-4">
                    <ul class="nav justify-content-end">
                        <li class="nav-item px-1 position-relative">
                            <button type="button" class="  btn btn-light  mx-2">
                                <i class="fa-regular fa-heart"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    2
                                </span>
                            </button>
                        </li>
                        <li class="nav-item px-1 position-relative">
                            <button type="button" class="  btn btn-light  mx-2">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    1

                                </span>
                            </button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

  

    <!-- Footer Section -->
    <footer class="section_footer bg-light text-dark">
        <div class="container py-3 ">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html">
                        <img src="{{ asset("images/logo.webp")}}" class="logo" alt="Logo" height="50px" width="100px">
                    </a>
                    <p>Không phải những người đẹp là những người hạnh phúc, mà những người hạnh phúc mới là những người
                        đẹp.</p>
                       
                            <!-- Facebook -->
                            <a
                            data-mdb-ripple-init
                              class="btn text-white btn-floating m-1"
                              style="background-color: #2d5338;"
                              href="#!"
                              role="button"
                              ><i class="fab fa-facebook-f"></i
                            ></a>
                      
                            <!-- Twitter -->
                            <a
                              data-mdb-ripple-init
                              class="btn text-white btn-floating m-1"
                              style="background-color: #2d5338;"
                              href="#!"
                              role="button"
                              ><i class="fab fa-twitter"></i
                            ></a>
                      
                            <!-- Google -->
   <!-- Instagram -->
                            <a
                              data-mdb-ripple-init
                              class="btn text-white btn-floating m-1"
                              style="background-color: #2d5338;"
                              href="#!"
                              role="button"
                              ><i class="fab fa-instagram"></i
                            ></a>
                      
                            <!-- Linkedin -->
                           
                            <!-- Github -->
                            <a
                              data-mdb-ripple-init
                              class="btn text-white btn-floating m-1"
                              style="background-color: #2d5338;"
                              href="#!"
                              role="button"
                              ><i class="fab fa-github"></i
                            ></a>
                          </section>
                          <!-- Section: Social media -->
                        

                </div>
                <div class="col-md mx-1">
                    <h5>THÔNG TIN LIÊN HỆ</h5>
                    <p>Địa chỉ: 70 Lữ Gia, Phường 15, Quận 11, TP. Hồ Chí Minh</p>
                    <p>Điện thoại: 1900 6750</p>
                    <p>Email: support@sapo.vn</p>
                </div>
                <div class="col-md">
                    <h5>CHÍNH SÁCH</h5>
                    <ul class="container-footer">
                        <li><a class="dropdown-item" href="#">Chính sách và quy định chung</a></li>
                        <li><a class="dropdown-item" href="#">Chính sách thanh toán</a></li>
                        <li><a class="dropdown-item" href="#">Chính sách giao nhận</a></li>
                        <li><a class="dropdown-item" href="#">Chính sách đổi trả sản phẩm</a></li>
                        <li><a class="dropdown-item" href="#">Điều khoản sử dụng</a></li>
                        <li><a class="dropdown-item" href="#">Chính sách bảo mật thông tin cá nhân</a></li>

                    </ul>
                </div>
                <div class="col-md-2">
                    <h5>HỖ TRỢ</h5>
                    <ul class="container-footer">
                        <li><a class="dropdown-item" href="#">Quyền lợi Dino-er</a></li>
                        <li><a class="dropdown-item" href="#">Thông tin thành viên</a></li>
                        <li><a class="dropdown-item " href="#">Tích điểm đổi quà</a></li>
                        <li><a class="dropdown-item" href="#">Hệ thống cửa hàng</a></li>
                        <li><a class="dropdown-item" href="#">Tuyển dụng</a></li>
                        <li><a class="dropdown-item" href="#">Liên hệ</a></li>


                    </ul>
                </div>
            </div>
        </div>

    </footer>
                            
    @yield('footer')
    <link rel="stylesheet" href="{{ asset("bootstrap/css/>bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("frontawesome/css/all.min.css")}}">
</body>
</html>
