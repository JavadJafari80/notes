@extends('layouts.app')

@section('content')
    <div class="breadcrumb">
        <ul>
            <li><a href="index.html" >پیشخوان</a></li>
            <li><a href="courses.html" class="is-active">کاربران</a></li>
        </ul>
    </div>
    <h3 class="text-center">مدیریت سیستم</h3>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- دکمه‌ها -->
            <button id="clearCacheBtn" class="btn btn-danger btn-block mb-3">پاک‌سازی کش</button>
            <button id="clearRouteCacheBtn" class="btn btn-danger btn-block mb-3"> پاک‌سازی کش روت</button>
            <button id="runMigrationsBtn" class="btn btn-warning btn-block mb-3">اجرای مایگریشن‌ها</button>
            <button id="optimizeAppBtn" class="btn btn-success btn-block mb-3">بهینه‌سازی اپلیکیشن</button>
        </div>
    </div>

    <!-- پیام‌ها -->
    <div id="message" class="alert mt-3" style="display: none;"></div>

    <!-- اضافه کردن jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // پاک‌سازی کش
            $('#clearCacheBtn').on('click', function () {
                $.ajax({
                    url: '{{ route('Setting.clearCache') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        $('#message').removeClass('alert-danger alert-warning alert-success').addClass('alert-success').text(response.message).show();
                    },
                    error: function () {
                        $('#message').removeClass('alert-success alert-warning').addClass('alert-danger').text('خطا در پاک‌سازی کش').show();
                    }
                });
            });

            $('#clearRouteCacheBtn').on('click', function () {
                $.ajax({
                    url: '{{ route('Setting.clearRouteCache') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        $('#message').removeClass('alert-danger alert-warning alert-success').addClass('alert-success').text(response.message).show();
                    },
                    error: function () {
                        $('#message').removeClass('alert-success alert-warning').addClass('alert-danger').text('خطا در پاک‌سازی کش').show();
                    }
                });
            });

            // اجرای مایگریشن‌ها
            $('#runMigrationsBtn').on('click', function () {
                $.ajax({
                    url: '{{ route('Setting.runMigrations') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        $('#message').removeClass('alert-danger alert-success alert-warning').addClass('alert-success').text(response.message).show();
                    },
                    error: function () {
                        $('#message').removeClass('alert-success alert-warning').addClass('alert-danger').text('خطا در اجرای مایگریشن‌ها').show();
                    }
                });
            });

            // بهینه‌سازی اپلیکیشن
            $('#optimizeAppBtn').on('click', function () {
                $.ajax({
                    url: '{{ route('Setting.optimizeApp') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        $('#message').removeClass('alert-danger alert-success alert-warning').addClass('alert-success').text(response.message).show();
                    },
                    error: function () {
                        $('#message').removeClass('alert-success alert-warning').addClass('alert-danger').text('خطا در بهینه‌سازی اپلیکیشن').show();
                    }
                });
            });
        });
    </script>
@endsection

