<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
    <title>ChoXe</title>
</head>
<body>
    @foreach ($products as $product)
@endforeach
    <div class="header">
        <div class="first-header">
            <div>
                <a class="a" href="/users/trangchu"><img src="../storage/images/logo_white.png"></a>
                <a class="a" href="#"><img src="../storage/images/car_check_white_19_19.png">Car Audit</a>
                <a class="a" href="#"><img src="../storage/images/support_white_24_24.png">Thủ tục mua bán</a>
                <a class="a" href="#"><img src="../storage/images/news_white_20_16.png">Tin tức</a>
            </div>
        </div>
        <div class="seccond-header">
            <div class="seccond-header-two">
                <input class="input-search" type="text" placeholder="Tìm kiếm trong chợ xe">
                    <img class="icon-search" src="../storage/images/search.png">
                    <img class="icon-preferences" src="../storage/images/preferences_circle.png">
            </div>
            <div class="subnav">
                    <button class="subnavbtn">
                        <a class="avatar-wrapper" href="/users/trangchu">
                            Welcome User
                    </button>
                <div class="subnav-content">
                      
                    <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                      
                </div>
            </div>
            </a>
            <a class="button btn_add_listing" href="#"><span style="line-height: 40px;">Đăng Tin</span><img class="add" src="../storage/images/add_listing_white_16_18.png"></a>
        </div>
    </div>

    <section class="header-top">
        
        <div class="card-content">
            <h2>Từ khóa tìm kiếm nhiều nhất</h2>
            <div class="popular-keyword">
                <a class="black" href="#" class="tag">Hyundai Accent</a>
                <a class="black" href="#" class="tag">Mazda CX-5</a>
                <a class="black" href="#" class="tag">Xe 7 chỗ dưới 1 tỷ</a>
                <a class="black" href="#" class="tag">Ford Explorer 2022</a>
                <a class="black" href="#" class="tag">Bán tải cũ giá rẻ</a>
            </div>
        </div>
    </section>
    <section class="mid-one">
        <h2>Tin đăng mới nhất</h2>
        <div class="columns">
            <div class="list-car">
                <div class="list-car-image">
                    <a href="#"><img src="../storage/images/car1.jpg"></a>
                </div>
                <div class="list-car-info">
                    
                    <a class="car-name" href="/users/1/show">Toyota Wigo 1.2G 4X2 AT 2018</a>
                    
                    <div class="car-attribute">
                        <span>2018</span>
                        <span>Tự động</span>
                        <span>50.000 km</span>
                    </div>
                    <div class="car-price">
                        325 Triệu
                    </div>
                    <span>Hà Nội 29/6/2023</span>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="list-car">
                <div class="list-car-image">
                    <a href="#"><img src="../storage/images/car2.jpg"></a>
                </div>
                <div class="list-car-info">
                    <a class="car-name" href="/users/2/show">BMW 3 Series 320I sx 12/2016 đăng ký lần đầu 2017, 1 chủ từ đầu đã sang ra tên em.màu đen nội thất đen</a>
                    <div class="car-attribute">
                        <span>2016</span>
                        <span>Bán tự động</span>
                        <span>40.000 km</span>
                    </div>
                    <div class="car-price">
                        888 Triệu
                    </div>
                    <span>Hồ Chí Minh 29/6/2023</span>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="list-car">
                <div class="list-car-image">
                    <a href="#"><img src="../storage/images/car3.jpg"></a>
                </div>
                <div class="list-car-info">
                    <a class="car-name" href="/users/3/show">Hyundai Sonata 2016 nhập khẩu 2016, Tự động, đã đi 194.249 km</a>
                    <div class="car-attribute">
                        <span>2016</span>
                        <span>Bán tự động</span>
                        <span>194 km</span>
                    </div>
                    <div class="car-price">
                        450 Triệu
                    </div>
                    <span>Bắc Ninh 29/6/2023</span>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="list-car">
                <div class="list-car-image">
                    <a href="#"><img src="../storage/images/car4.jpg"></a>
                </div>
                <div class="list-car-info">
                    <a class="car-name" href="/users/4/show">Hyundai Starex Hyundai Starex H-1 2.5 MT 6 chỗ máy dầu 2015, Số sàn, đã đi 80.000 km</a>
                    <div class="car-attribute">
                        <span>2015</span>
                        <span>Số sàn</span>
                        <span>80.000 km</span>
                    </div>
                    <div class="car-price">
                        510 Triệu
                    </div>
                    <span>Hà Nội 28/6/2023</span>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="list-car">
                <div class="list-car-image">
                    <a href="#"><img src="../storage/images/car5.jpg"></a>
                </div>
                <div class="list-car-info">
                    <a class="car-name" href="/users/5/show">Mitsubishi Triton GLS 2017, Tự động, đã đi 40.000 km</a>
                    <div class="car-attribute">
                        <span>2017</span>
                        <span>Tự động</span>
                        <span>40.000 km</span>
                    </div>
                    <div class="car-price">
                        420 Triệu
                    </div>
                    <span>Hòa Bình 28/6/2023</span>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="list-car">
                <div class="list-car-image">
                    <a href="#"><img src="../storage/images/car6.jpg"></a>
                </div>
                <div class="list-car-info">
                    <a class="car-name" href="/users/6/show">Xe Alltis cá nhân dùng rất chất cần bán</a>
                    <div class="car-attribute">
                        <span>2009</span>
                        <span>Tự động</span>
                        <span>98.000 km</span>
                    </div>
                    <div class="car-price">
                        350 Triệu
                    </div>
                    <span>Hà Nội 28/6/2023</span>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="list-car">
                <div class="list-car-image">
                    <a href="#"><img src="../storage/images/car7.jpg"></a>
                </div>
                <div class="list-car-info">
                    <a class="car-name" href="/users/7/show">Hyundai Tucson Hyundai Tucson 2.0L Đặc biệt 2021, Tự động, đã đi 10.000 km</a>
                    <div class="car-attribute">
                        <span>2021</span>
                        <span>Tự động</span>
                        <span>10.000 km</span>
                    </div>
                    <div class="car-price">
                        850 Triệu
                    </div>
                    <span>Hà Nội 21/6/2023</span>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="list-car">
                <div class="list-car-image">
                    <a href="#"><img src="../storage/images/car8.jpg"></a>
                </div>
                <div class="list-car-info">
                    <a class="car-name" href="/users/8/show">Toyota Vios 2008 2007, Số sàn, đã đi 200.000 km</a>
                    <div class="car-attribute">
                        <span>2007</span>
                        <span>Tự động</span>
                        <span>200.000 km</span>
                    </div>
                    <div class="car-price">
                        118 Triệu
                    </div>
                    <span>Hà Nội 20/6/2023</span>
                </div>
            </div>
        </div>
        <div class="xemthem">
            <a>Xem thêm >></a>
        </div>
       
    </section>
    
    <section class="mid-two">
        <div class="list-salon">
            <h1>Salon Ô tô</h1>
            <div class="salon-columns">
                <div class="salon-img">
                    <a href="#"><img src="../storage/images/BQLT4XgHxTkx15gjiFzdK1ln63658dlMIYDoleQP.png"></a>
                </div>
                <div class="salon-info">
                    <a class="black" >Chợ Xe Kiểu Mỹ</a>
                    <div class="location">
                        <img src="../storage/images/location_12_13.png">  135 nguyễn Trãi
                    </div>
                    <div class="phone">
                       <img src="../storage/images/phone_14_14.png"> 0911442883
                    </div>
                </div>
            </div>

            <div class="salon-columns">
                <div class="salon-img">
                    <a href="#"><img src="../storage/images/2XTCMnh7xcDPu8KmPy0qZ0i89X71pZAjEdKEAsjb.png"></a>
                </div>
                <div class="salon-info">
                    <a class="black" >Toyota Phú Mỹ Hưng</a>
                    <div class="location">
                        <img src="../storage/images/location_12_13.png"> 290 Nguyễn Văn Linh
                    </div>
                    <div class="phone">
                        <img src="../storage/images/phone_14_14.png"> 0392211086
                    </div>
                </div>
            </div>

            <div class="salon-columns">
                <div class="salon-img">
                    <a href="#"><img src="../storage/images/ESo9T7cn4MBa8YHaruYJDLU1vWuwKWKu3GObFvm5.jpg"></a>
                </div>
                <div class="salon-info">
                    <a class="black" >Mitsubishi Thủ Đức</a>
                    <div class="location">
                        <img src="../storage/images/location_12_13.png"> 14 Hoàng Hữu Nam
                    </div>
                    <div class="phone">
                        <img src="../storage/images/phone_14_14.png"> 0989700015
                    </div>
                </div>
            </div>

            <div class="salon-columns">
                <div class="salon-img">
                    <a href="#"><img src="../storage/images/t3ESa3EulQzPwCDI3NS1k8HFu5NwHBPsjBsNnFwi.png"></a>
                </div>
                <div class="salon-info">
                    <a class="black" >Lexus Lướt Hà Nội</a>
                    <div class="location">
                        <img src="../storage/images/location_12_13.png"> Thái Ngọc Lexus Lướt Hà Nội 1C Nguyễn Văn Huyên Nghĩa Đô Cầu Giấy Hà Nội < Hoàng Quốc Việt Rẽ 200m Hướng Công Viên Nghĩa Đô >
                    </div>
                    <div class="phone">
                        <img src="../storage/images/phone_14_14.png">  0983999222
                    </div>
                </div>
            </div>

            <div class="salon-columns">
                <div class="salon-img">
                    <a href="#"><img src="../storage/images/G4m1fCTTrgd0vQKFRz2cLEMF26zL8Y3b2kdyOvxX.jpg"></a>
                </div>
                <div class="salon-info">
                    <a class="black" >Volkwagen Hải Phòng</a>
                    <div class="location">
                        <img src="../storage/images/location_12_13.png">  722 Nguyễn Văn Linh
                    </div>
                    <div class="phone">
                        <img src="../storage/images/phone_14_14.png">  0929817882
                    </div>
                </div>
            </div>

            <div class="salon-columns">
                <div class="salon-img">
                    
                </div>
                <div class="salon-info">
                    <a class="black" ></a>
                    <div class="location">
                        
                    </div>
                    <div class="phone">
                       
                    </div>
                </div>
            </div>

            <div class="xemthem">
                <a>Xem thêm >></a>
            </div>
        </div>
    </section>
    
    <section>
        <div class="card-contents">
            <div class="h1">
                <h1>Bảng giá xe các hãng</h1>
            </div>
            
            <div class="icons-car">
                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/eOSjSo0gO8zg3aHRY4hpcC5hoLIfgYB47RZLyJF4.png" alt="">
                        <span>Toyota</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/hxYUSrBgsJGbgHENtd1chtBB19r1ksXHzQaPEAwr.png" alt="">
                        <span>Hyundai</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/uvICoTdobRIpiAXOixCuqkkLZz3s31JrMXLcm4Ap.png" alt="">
                        <span>KIA</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/b1jG5dKj26eRha1W4N18eDTmnRFtpQv4WaYoAQvx.png" alt="">
                        <span>VinFast</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/SyCd75asAUtvOi47Xo8hhRwrUMFCzqVyMdTX4v1n.png" alt="">
                        <span>Mitsubishi</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/Ivm3NQ38jfj7OB9CnvnrY832QuWVde0VS1zVxD6A.png" alt="">
                        <span>Mazda</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/HIsRavXij0eXRvpan2rQ6hhK1x0xE5AQZQulMAwh.png" alt="">
                        <span>Ford</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/EUz8F51M2NxCyY6z4XTb9A2uBGxBRjeUIi6DdrBj.png" alt="">
                        <span>Honda</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/6gUqToXRpeo5wtrKZA7AerqzFRZWvDAOHvedLR8L.png" alt="">
                        <span>Suzuki</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/rflImCxyuFYRqhhufOzm49pxkBlTFElThgyp4gvz.png" alt="">
                        <span>Mercedes-Benz</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/GKp6EsreSG6EE6M4FGbwyTqtqW92dgs0gySJrgIm.png" alt="">
                        <span>BMW</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/B1WGu56r65M1CX2G7MwdsZBlsdtAn8sYkC6I7iz2.png" alt="">
                        <span>Audi</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/RUaGWHaM7ITdK32Ym8C2CcQYex1TRltUG0TPNyiB.png" alt="">
                        <span>Peugeot</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/AObF7Z5iuO7k7LnLzHf04yK4afd72Z6KlZO3x6O7.png" alt="">
                        <span>Isuzu</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/6Iv4VKqCyIeHqokGF5hfRUkcd8sVhE5l7myc2gm2.png" alt="">
                        <span>Subaru</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/66WARwSXjFfhTS8Gd2Ze2bSzW05W4NB1JPE0TXHL.png" alt="">
                        <span>Nissan</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/bEniM1nfBsq6vBjO61Emk2kRTl0q8doZAV4HBaLm.png" alt="">
                        <span>MG</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/JhRTYkecAKtFQwmBMj6gTy996ZhjdBnYTyytlv77.png" alt="">
                        <span>Lexus</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/lhb1UKRgVtLBmSbgejXh8KMT7Y1n10pnWjtc74GC.png" alt="">
                        <span>Acura</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/sNQQLeQlI0V92Bo5j4xUHhLwJ0hfJcGbZ5BeeUZa.jpg" alt="">
                        <span>Đỗ Thành</span>
                    </a>
                </div>
                
                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/WtVMdr3zGFYCJYgwhnd3363643rJUDMBXkarqQdi.png" alt="">
                        <span>Hino</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/bTSWdI08orNpdut09fWv4LFsi7hfjtwng29h8RPz.png" alt="">
                        <span>Kawasaki</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/AxX6JwcNkq90Sh8LXffj9xgWpGIPJwbw5VRDE689.png" alt="">
                        <span>Volvo</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/cYMrrMLBWgYKKju8imZiTSuec8Ketkld19SrCE0L.png" alt="">
                        <span>Bentley</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/DHg3m1HXxu5qLZQCM6xSHbCabccJjrmOrvCfhQ6o.png" alt="">
                        <span>Jaguar</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/vfHWbuxbCaGyvCsqbiJKf0ix4vWbS76tnNox1xRv.png" alt="">
                        <span>Jeep</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/TDiHU9lqDxlyD74Iul1hVxtFElDC7LhK9MzXtyo8.png" alt="">
                        <span>Land Rover</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/j4rPTwqOB5HsjMQOFfrNTt3frH2xUj1jrzd3wAUx.png" alt="">
                        <span>Maserati</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/xP4BPDMQtJICmodpZ4z98MtdK1nN97nATjWnTL2Q.png" alt="">
                        <span>Mini</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/rVIyp5kLRXmGOHpFlinPAUtd8PAUIt37oAbMyWdd.png" alt="">
                        <span>Porsche</span>
                    </a>
                </div>
                
                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/yEUrcyAltI05Ms7iKAzgAzMDWkCpXYJYVR8r2AvO.png" alt="">
                        <span>Volkswagen</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/dzy60miFK4sJewVCRpAehjPOCk1sGWrDohWnBbep.png" alt="">
                        <span>Chevrolet</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/DDsGtA9u9cJGtHyQW0GX2kavHfAthqCIxmd1Mxpv.png" alt="">
                        <span>Ram</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/z5soebv7BcoCesp0srRJKQg7jpcXrex8PnCVz2nI.gif" alt="">
                        <span>Yamaha</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                    <a class="brand-item" href="#">
                        <img src="../storage/images/TcFuubTaDmAh4fdMu2GDliLqlgdKZkcVOqrgkk6V.png" alt="">
                        <span>Dongben</span>
                    </a>
                </div>

                <div class="columns-icons-car">
                   
                </div>
            </div>

            <div class="xemthem">
                <a>Xem thêm >></a>
            </div>
        </div>
    </section>
    <section class="footer-section">
        <div class="container">
            <div class="logo">
                <img src="../storage/images/logo_white.png" alt="">
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
                        <a href="#"><img src="../storage/images/phone_white_14_14.png" alt="">091.144.2883</a>
                        <a href="#"><img src="../storage/images/email_white_14_10.png" alt="">cskh@choxe.vn</a>
                    </div>
    
                    <div class="footer-img">
                        <img src="../storage/images/logo-bct.png" alt="">
                    </div>
                </div>
    
                <div class="footer-link">
                    <a href="">GIỚI THIỆU</a>
                    <a style="margin-top: 2rem;" href="">QUY CHẾ HOẠT ĐỘNG</a>
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