    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto"><img src="{{ asset('assets1') }}/img/logo1.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
            <li class="dropdown">
                <a href="#">
                <p class="round"><span>Beta</span> <i class="bi bi-chevron-down"></i></p>
                </a>
                <ul>
                <li class="dropdown"><a href="#"><span>Hà Nội</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="#">Beta Thanh Xuân</a></li>
                    <li><a href="#">Beta Mỹ Đình</a></li>
                    <li><a href="#">Beta Đan Phượng</a></li>
                    <li><a href="#">Beta Giải Phóng</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>TP.Hồ Chí Minh</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="#">Beta Quang Trung</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Bắc Giang</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="#">Beta Bắc Giang</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Đồng Nai</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="#">Beta Biên Hòa</a></li>
                    <li><a href="#">Beta Long Khách</a></li>
                    <li><a href="#">Beta Long Thành</a></li>
                    </ul>
                </li>
                </ul>
            <li><a href="services.html">Lịch chiếu theo rạp</a></li>
            <li><a href="portfolio.html">Phim</a></li>
            <li><a href="pricing.html">Rạp</a></li>
            <li><a href="blog.html">Giá vé</a></li>
            <li><a href="pricing.html">Tin mới và ưu đã</a></li>
            <li><a href="blog.html">Thành viên</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{ asset('assets1') }}/img/slide/slide-5.jpg)">
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{ asset('assets1') }}/img/slide/slide-2.jpg)">
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url({{ asset('assets1') }}/img/slide/slide-3.jpg)">
            </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section><!-- End Hero -->