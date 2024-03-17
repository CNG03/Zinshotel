<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
     @include('layout.link-css')
    <link rel="stylesheet" href="{{asset('assets')}}/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/service.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @include('layout.link-css')
</head>
<body>
    <div class="service">
        @include('layout.header')
        <header class="header">
        <!-- Đợi bổ sung -->
        </header>
        <div class="container">
            <section class="du-thuyen">
                <div class="col-md-6 spa-ads du-thuyen-text">
                    <h1>Rent A Yacht</h1>
                    <p>
                        Explore the sea in our luxury. 5-star cruise - Perfect travel experience. Explore the sea, enjoy unlimited happiness.
                    </p>
                    <div class="book-spa-session view-more">
                        <a href="">
                            <button type="button" class="btn">More</button>
                        </a>
                    </div>
                </div>
                <div style="margin-top: 50px;" class="duthuyen-img col-md-6">
                    <img src="https://geos-nature.org/wp-content/uploads/2021/12/9-2.jpg" alt="">
                </div>
            </section>

            <section class="spa-ads travel-tour">
                <div style="margin-top: 50px;" class="travel-tour-img">
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <img style="width: 100%; align-content: center;" src="https://media.baodautu.vn/Images/chicuong/2021/09/29/16.jpg" alt="">
                    </div>
                </div>
            </section>

            <section class="spa-ads travel-tour">
                <div class="travel-tour-text">
                    <h1>Travel Tours</h1>
                    <p>
                        Immersed in the charming landscape, visitors can enjoy the cool green space.
                        <br>Join us to explore amazing natural beauty and make your mark for a greener future.
                    </p>
                </div>
                <div class="book-spa-session view-more">
                    <a href="">
                        <button type="button" class="btn">More</button>
                    </a>
                </div>
            </section>

            <section class="bus">
                <div style="margin-top: 50px;" class="bus-img col-md-6">
                    <img src="https://thacobus.vn/storage/bus/chi-tiet-sp/xe-bus-facelift/mobihome-luxury/banner-new-mobihome-luxury-sp.jpg" alt="">
                </div>
                <div class="col-md-6 spa-ads bus-text">
                    <h1>Bus Tours</h1>
                    <p>
                        Featuring top-notch buses, premium amenities, and professional service, we ensure a journey of sophistication and comfort, allowing guests to explore the world in style and grandeur.
                    </p>
                    <div class="book-spa-session view-more">
                        <a href="">
                            <button type="button" class="btn">More</button>
                        </a>
                    </div>
                </div>
            </section>

            <section style="margin-top: 50px;" class="bonus-service">
                <div class="row" style="width: 100%;">
                    <div class="service-item col-md-2">
                        <a class="service-style" href="">
                            <div class="service-img">
                                <img src="{{asset('assets')}}/img/service/cable car.png" alt="">
                            </div>
                            <div class="learn-more">
                                <button type="button" class="btn">More</button>
                            </div>
                            <div>
                                <h3>Cable Car</h3>
                                <p>110$/Person</p>
                            </div>
                        </a>
                    </div>

                    <div class="service-item col-md-2">
                        <a class="service-style" href="">
                            <div class="service-img">
                                <img src="{{asset('assets')}}/img/service/BBQ.png" alt="">
                            </div>
                            <div class="learn-more">
                                <button type="button" class="btn">More</button>
                            </div>
                            <div>
                                <h3>BBQ</h3>
                                <p>450$/Family</p>
                            </div>
                        </a>
                    </div>

                    <div class="service-item col-md-2">
                        <a class="service-style" href="">
                            <div class="service-img">
                                <img src="{{asset('assets')}}/img/service/_Kiteboarding.png" alt="">
                            </div>
                            <div class="learn-more">
                                <button type="button" class="btn">More</button>
                            </div>
                            <div>
                                <h3>Kitesurfing</h3>
                                <p>225$/Person</p>
                            </div>
                        </a>
                    </div>

                    <div class="service-item col-md-2">
                        <a class="service-style" href="">
                            <div class="service-img">
                                <img src="{{asset('assets')}}/img/service/seaplane.png" alt="">
                            </div>
                            <div class="learn-more">
                                <button type="button" class="btn">More</button>
                            </div>
                            <div>
                                <h3>Seaplane</h3>
                                <p>160$/hour</p>
                            </div>
                        </a>
                    </div>
                    <div class="service-item col-md-2">
                        <a class="service-style" href="">
                            <div class="service-img">
                                <img src="{{asset('assets')}}/img/service/Classic Golf Skort.png" alt="">
                            </div>
                            <div class="learn-more">
                                <button type="button" class="btn">More</button>
                            </div>
                            <div>
                                <h3>Gofl</h3>
                                <p>315$/hour</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        @include('layout.footer')
        <footer class="footer"></footer>
    </div>
    @include('layout.js')
</body>
</html>