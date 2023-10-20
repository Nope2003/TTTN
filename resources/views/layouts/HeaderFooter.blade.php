<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
    
    <title>ChoXe</title>
</head>
<body>
    <div class="header">
        <div class="first-header">
            <div>
                <a class="a" href="/users/trangchu"><img src="{{ asset('../storage/images/logo_white.png') }}"></a>
                <a class="a" href="#"><img src="{{ asset('../storage/images/car_check_white_19_19.png') }}">Car Audit</a>
                <a class="a" href="#"><img src="{{ asset('../storage/images/support_white_24_24.png') }}">Thủ tục mua bán</a>
                <a class="a" href="#"><img src="{{ asset('../storage/images/news_white_20_16.png') }}">Tin tức</a>
            </div>
        </div>
        <div class="seccond-header">
            <input class="input-search" type="text" placeholder="Tìm kiếm trong chợ xe">
                <img class="icon-search" src="{{ asset('../storage/images/search.png') }}">
                <img class="icon-preferences" src="{{ asset('../storage/images/preferences_circle.png') }}">
            <a class="avatar-wrapper" href="{{ route('login') }}"><img src="{{ asset('../storage/images/avatar_shape_white_20_20.png') }}">Đăng nhập</a>
            <a class="button btn_add_listing') }}" href="#"><span style="line-height: 40px;">Đăng Tin</span><img class="add" src="{{ asset('../storage/images/add_listing_white_16_18.png') }}"></a>
        </div>
    </div>

    @yield('content')

    <section class="footer-section">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('../storage/images/logo_white.png') }}" alt="">
            </div>
    
            <div class="footer-content-wrapper">
                <div class="footer-content">
                    <div class="text-footer-one">
                        ©2022 by ChoXe.net. All rights reserved. Công Ty Cổ Phần Ô Tô Xuyên Việt; Mã số thuế: 0304013473
                    </div>
    
                    <div class="text-footer-two">
                        Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ, phường Tân Phong, Quận 7, TPHCM
                    </div>
    
                    <div class="text-footer-three" >
                        <a href="#"><img src="{{ asset('../storage/images/phone_white_14_14.png') }}" alt="">091.144.2883</a>
                        <a href="#"><img src="{{ asset('../storage/images/email_white_14_10.png') }}" alt="">cskh@choxe.vn</a>
                    </div>
    
                    <div class="footer-img') }}">
                        <img src="{{ asset('../storage/images/logo-bct.png') }}" alt="">
                    </div>
                </div>
    
                <div class="footer-link">
                    <a href="">GIỚI THIỆU</a>
                    <a class="a" style="margin-top: 2rem;" href="">QUY CHẾ HOẠT ĐỘNG</a>
                    <a style="margin-top: 2rem;" href="">BÁO GIÁ</a>
                </div>
    
                <div class="footer-hotline">
                    <a href="" class="button2 hotline"><img src="" alt="">Hotline: 091.144.2883</a>
                    <a href="" class="button2 agent"><img src="" alt="">Hotline: 091.144.2883</a>
                </div>
            </div>
        </div>
    </section>
    </body>
    </html>