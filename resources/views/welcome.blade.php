<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دفترچه| اپلیکیشن موبایل</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>
<!-- Header Section -->
<div class="header" dir="rtl">
    <h2>دفترچه</h2>
    <p>هر فکر بزرگ، ابتدا یک یادداشت ساده است.</p>
</div>

<div class="container">
    <div class="row align-items-center">
        <!-- Download Buttons Section -->
                <div class="col-md-5 text-center">
                    <div class="download-box">
                        <h4 class="text-center mb-4">دانلود اپلیکیشن</h4>
                        <div class="d-flex justify-content-center">
                            <div class="download-grid">
                                <a href="#" class="btn btn-google-play d-flex align-items-center justify-content-center">
                                    دانلود از گوگل پلی استور
                                    <i class="bi bi-google-play"></i>
                                </a>
                                <a href="#" class="btn btn-bazar d-flex text-center align-items-center justify-content-center">
                                    دانلود از بازار
                                    <i class="bi bi-bag-dash-fill"></i>
                                </a>
                                <a href="#" class="btn btn-myket d-flex align-items-center justify-content-center">
                                    دانلود از مایکت
                                    <i class="bi bi-shop"></i>
                                </a>
                                <a href="#" class="btn btn-direct-download d-flex align-items-center justify-content-center">
                                    دانلود مستقیم
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>




        <!-- Swiper Slider Section -->
        <div class="col-md-7 text-center">
            <div class="phone-mockup" style="position: relative; max-width: 300px;height: 600px; margin: auto;">
                <!-- تصویر فریم موبایل -->
                <img src="https://melodify.app/web/slides/frame.png" alt="Mobile Frame"
                     style=" position: relative; z-index: 1;">

                <!-- Swiper Slider داخل فریم موبایل -->
                <div class="swiper-container"
                     style="position: absolute; top: 3.5%; left: 9.5%; width: 120%; height: 85%; z-index: 2; overflow: visible;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://melodify.app/web/slides/lyrics-min.png" alt="Slide 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://melodify.app/web/slides/Group-1868-min.png" alt="Slide 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://melodify.app/web/slides/updated-min.png" alt="Slide 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://melodify.app/web/slides/folders-1-min.png" alt="Slide 4">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://melodify.app/web/slides/add-to-playlist-min.png" alt="Slide 5">
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>



</body>
</html>
