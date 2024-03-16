<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home- Zin's Home</title>
    <link rel="stylesheet" href="{{asset('assets')}}/css/home.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body style="font-family: 'Times New Roman', Times, serif;">
    <div class="background" style="background-image: url('{{asset('assets')}}/img/header-img.png');">
        <section class="header-background">
            <section class="header">
                <div id="floatingDiv">
                    <div class="header-floatingDiv">
                        <div class="header-floatingDiv-menu">
                            <ul>
                                <li><a href="#">Our Rooms</a></li>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                        <div class="header-floatingDiv-logo">
                            <a href="">
                                <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/logo-black2.png" alt="">
                            </a>
                        </div>
                        <div class="header-floatingDiv-menu header-floatingDiv-menu-right">
                            <ul>
                                <li><a href="#">en</a></li>
                                <li><a href="#">vi</a></li>
                                <li><a href="#">Book Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-navbar">
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">Our Rooms</a></li>
                            <li><a href="#">Restaurant</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                    <div class="header-logo">
                        <a href="">
                            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/logo-white2.png" alt="">
                        </a>
                    </div>
                    <div class="header-menu header-right">
                        <ul>
                            <li><a href="#">en</a></li>
                            <li><a href="#">vi</a></li>
                            <li><a href="#">Book Now</a></li>
                        </ul>
                    </div>
                </div> 
            </section>
        </section>
        <section class="welcome">
            <h1>Welcome to Zin's Home <br> Hotel & Resort</h1>
        </section>
        <section class="form-search">
            <form action="">
                <div class="form-search-block">
                    <div class="check-in form-style">
                        <p>Check-in *</p>
                        <input class="form-input-style border-style" style="background: transparent;" type="date" placeholder="Check-in Date" aria-label="Check-in">
                    </div>
                    <div class="check-out form-style">
                        <p>Check-out *</p>
                        <input class="form-input-style border-style" style="background: transparent;" type="date" placeholder="Check-out Date" aria-label="Check-out">
                    </div>
                    <div class="adults form-style">
                        <p>Adults</p>
                        <select style="background: transparent;" class="form-input-style" aria-label="">
                            <option selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                          </select>
                    </div>
                    <div class="children form-style">
                        <p>Children</p>
                        <select style="background: transparent;" class="form-input-style" aria-label="Default select example">
                            <option selected>0</option>
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                            <option value="1">6</option>
                            <option value="1">7</option>
                            <option value="1">8</option>
                            <option value="1">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="form-style">
                        <button type="submit">Search</button>
                    </div>
                    
                </div>
                
            </form>
        </section>
    </div>
    
    
    

    <section class="content" style="width: 100%;background-color: #F1F0EB;">
        <section class="winter-special-offer">
            <div style="margin-top: 200px;" class="winter-img col-md-6">
                <img src="{{asset('assets')}}/img/winter-img.png" alt="">
            </div>
            <div class="col-md-6 spa-ads winter-special-offer-text">
                <h1>Winter Special</h1>
                <h1>Offer</h1>
            <p>Discover a world of luxury and relaxation with our carefully curated hotel offers, <br>
                designed to enhance your stay and create lasting memories. Whether you’re planning a <br>
                romantic getaway, a family vacation, or a business trip, we have the perfect offer to suit <br>
                your needs and elevate your experience. 
            </p>
            <div class="book-spa-session view-winter-more">
                <a href="">
                    <button type="button" class="btn">View Our Offers</button>
                </a>
            </div>
            </div>
        </section>
        <section style="margin-top: 100px;" class="spa-ads our-room">
            <h1>Our Rooms</h1>
            <p>
                Get ready to carve through pristine powder and conquer the <br>
                slopes of varying difficulty levels. Our resort boasts a diverse <br> 
                range of ski and snowboard trails, ensuring there’s something <br>
                for everyone, from beginners to seasoned experts.
            </p>
            <div class="book-spa-session">
                <a href="">
                    <button type="button" class="btn">Book spa session</button>
                </a>
            </div>
        </section>
        <section class="room-type">
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/CB997E/333333?text=1" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/DDBEA9/333333?text=2" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/FFE8D6/333333?text=3" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/B7B7A4/333333?text=4" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 4</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/A5A58D/333333?text=5" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/6B705C/eeeeee?text=6" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 6</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>		
            </div>
        </section>
        <section style="margin-top: 100px;" class="offers restaurant">
            <div class="container offers-content">
                <div class="row">
                    <div class="offers-text col-md-7">
                        <h2>Restaurant</h2>
                        <p>Executive Chef, showcases their expertise and passion for fine dining by using the finest, locally sourced ingredients</p> 
                    </div>
                    <div class="discover-our-offers col-md-5">
                        <a href="">
                            <button type="button" class="btn">Discover More</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 100px;" class="restaurant-img">
            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/happy-man-toasting-with-wine-and-smiling-to-girlfr-2023-04-11-19-25-22-utc-683x1024.jpg" alt="">
            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/restaurant-food-2021-09-02-00-17-28-utc-683x1024.jpg" alt="">
            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/fine-dining-design-in-restaurant-2022-09-29-22-34-40-utc-683x1024.jpg" alt="">        
            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/restaurant-2022-11-15-11-05-42-utc-768x1024.jpg" alt="">
        </section>
        <section style="margin-top: 100px;" class="spa-ads ">
            <h1>A World of Spa</h1>
            <p>Nestled within the heart of our hotel,
                our spa is a sanctuary of <br>relaxation and rejuvenation, 
                dedicated to enhancing your well- <br> being and restoring 
                your inner balance.</p>
            <div class="book-spa-session">
                <a href="">
                    <button type="button" class="btn">Book spa session</button>
                </a>
            </div>
        </section>
        <section style="margin-top: 100px;" class="big-img">
            <div style=" display: flex;
            justify-content: center;
            align-items: center;">
                <img style="width: 90%; align-content: center;" src="{{asset('assets')}}/img/home-big-img.png" alt="">
            </div>
        </section>
        <section style="margin-top: 100px;" class="offers">
            <div class="container offers-content">
                <div class="row">
                    <div class="offers-text col-md-7">
                        <h2>Offers</h2>
                        <p>Discover our attractive offers on all Rooms & Suites at the Hoteller Resort. Start your journey with us.</p> 
                    </div>
                    <div class="discover-our-offers col-md-5">
                        <a href="">
                            <button type="button" class="btn">Discover our offers</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 100px;" class="activities-service">
            <div class="row" style="width: 100%;">
                <div class="service-infomation col-md-2">
                    <a class="service-infomation-style" href="">
                        <div class="sevice-img">
                            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/adventurous-caucasian-woman-hiking-on-top-of-a-can-2021-10-28-01-56-10-utc-660x913.jpg" alt="">
                        </div>
                        <div class="learn-more">
                            <button type="button" class="btn">Learn More</button>
                        </div>
                        <div class="service-infomation-text">
                            <h3>Winter Hiking</h3>
                            <p>$180 / person</p>
                        </div>
                    </a>
                </div>
                <div class="service-infomation col-md-2">
                    <a class="service-infomation-style" href="">
                        <div class="sevice-img">
                            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/paraglider-with-instructor-over-the-ski-slopes-2023-03-30-16-02-44-utc-660x913.jpg" alt="">
                        </div>
                        <div class="learn-more">
                            <button type="button" class="btn">Learn More</button>
                        </div>
                        <div class="service-infomation-text">
                            <h3>Paraglider Excercises</h3>
                            <p>$260 / person</p>
                        </div>
                    </a>
                </div>
                <div class="service-infomation col-md-2">
                    <a class="service-infomation-style" href="">
                        <div class="sevice-img">
                            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/young-female-backpacker-skier-in-pink-suit-ski-tou-2022-05-17-05-27-10-utc-660x913.jpg" alt="">
                        </div>
                        <div class="learn-more">
                            <button type="button" class="btn">Learn More</button>
                        </div>
                        <div class="service-infomation-text">
                            <h3>Ski Lesson</h3>
                            <p>$160 / person</p>
                        </div>
                    </a>
                </div>
                <div class="service-infomation col-md-2">
                    <a class="service-infomation-style" href="">
                        <div class="sevice-img">
                            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/getty-images-8nLhIUtBnU-unsplash-660x913.jpg" alt="">
                        </div>
                        <div class="learn-more">
                            <button type="button" class="btn">Learn More</button>
                        </div>
                        <div class="service-infomation-text">
                            <h3>Spa & Wellness</h3>
                            <p>$80 / person</p>
                        </div>
                    </a>
                </div>
                <div class="service-infomation col-md-2">
                    <a class="service-infomation-style" href="">
                        <div class="sevice-img">
                            <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/a-view-from-a-distance-of-a-single-golfer-on-a-gre-2022-03-04-02-06-40-utc-660x913.jpg" alt="">
                        </div>
                        <div class="learn-more">
                            <button type="button" class="btn">Learn More</button>
                        </div>
                        <div class="service-infomation-text">
                            <h3>Gofl Club</h3>
                            <p>$280 / person</p>
                        </div>
                    </a>
                </div>
            </div>
            
        </section>
        <section style="margin-top: 100px;" class="footer">
            <hr>
            <div class="container">
                <div class="footer-row-1">
                    <div class="footer-logo-one col-md-4">
                        <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/logo-black2.png" alt="">
                    </div>
                    <div class="footer-form-email col-md-4">
                        <h3>
                            Newsletter Sign Up
                        </h3>
                        <p>
                            Sign up for our news, deals and special offers.
                        </p>
                        <input class="form-control" type="email" placeholder="Your email address" aria-label="Your email address">
                        <br>
                        <button type="button" class="btn btn-lg" fdprocessedid="vl8tv8">Sign up</button>
                    </div>
                    <div class="footer-contact-address col-md-4">
                        <p>
                            The Hoteller Resort Via Serlas 27,       
                        </p>
                        <p>
                            7500 St. Moritz, Switzerland 
                        </p>
                        <p>
                            +45 35634 3444
                        </p>
                        <p>
                            contact@thehotel.com  
                        </p>
                        <div class="social-media-link">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="mt-5">
                <div class="footer-row-2 mt-5">
                    <div class="footer-menu col-md-4">
                        <ul>
                            <li><a href="">About Hotel</a></li>
                            <li><a href="">Our Rooms</a></li>
                            <li><a href="">Restaurant & Bar</a></li>
                            <li><a href="">Spa & Wellness</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-menu col-md-4">
                        <ul>
                            <li><a href="">Deluxe Room</a></li>
                            <li><a href="">Prestige Room</a></li>
                            <li><a href="">Alpine Suite</a></li>
                            <li><a href="">Serinity Suite</a></li>
                            <li><a href="">Residence Suite</a></li>
                            <li><a href="">Penthouse</a></li>
                        </ul>
                    </div>
                    <div class="footer-copyright col-md-4">
                        <p>© Copyright All rights reserved.
                            THE HOTELLER SKI RESORT</p>
                    </div>
                </div>
                <hr class="mt-5">
                <div class="mt-5 footer-row-3 d-flex justify-content-between">
                    <div class="contact-logo contact-tripadvisor-lux">
                        <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/tripadvisor_travellers_choice.png" alt="">
                        <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/global_luxury_hotel_spa.png" alt="">
                    </div>
                    <div class="contact-logo contact-boutique-booking">
                        <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/world_boutique_hotel_awards.png" alt="">
                        <img src="https://hotellerv6-5.b-cdn.net/ski/wp-content/uploads/sites/4/2023/09/booking_com.png" alt="">
                    </div>
                </div>    
            </div>  
        </section>
    </section>
    
    <script src="{{asset('assets')}}/js/home.js"></script>
</body>
</html>