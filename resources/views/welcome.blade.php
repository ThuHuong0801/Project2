@extends('layouts\user.app')

@section('content')
    <main id="main">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
        <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">ALL PHIM</li>
                <li data-filter=".filter-app">PHIM ĐANG CHIẾU</li>
                <li data-filter=".filter-card">PHIM SẮP CHIẾU</li>
                <li data-filter=".filter-web">SUẤT CHIẾU ĐẶT BIỆT</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>PHIM 1</h4>
                    <p>PHIM ĐANG CHIẾU</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>SUẤT CHIẾU ĐẶC BIỆT 3</h4>
                    <p>SUẤT CHIẾU ĐẶC BIỆT</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>PHIM ĐANG CHIẾU 2</h4>
                    <p>PHIM ĐANG CHIẾU</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>PHIM SẮP CHIẾU 2</h4>
                    <p>PHIM SẮP CHIẾU</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>SUẤT CHIẾU ĐẶC BIỆT 2</h4>
                    <p>SUẤT CHIẾU ĐẶC BIỆT</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>PHIM ĐANG CHIẾU 3</h4>
                    <p>PHIM ĐANG CHIẾU</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>PHIM SẮP CHIẾU 1</h4>
                    <p>PHIM SẮP CHIẾU</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>PHIM SẮP CHIẾU 3</h4>
                    <p>PHIM SẮP CHIẾU</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                <img src="{{ asset('assets1') }}/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>SUẤT CHIẾU ĐẶC BIỆT 3</h4>
                    <p>SUẤT CHIẾU ĐẶC BIỆT</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('assets1') }}/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Section --> 

    </main><!-- End #main -->

@endsection


