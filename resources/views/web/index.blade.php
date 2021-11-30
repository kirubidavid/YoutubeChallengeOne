<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{asset('assets/css/web.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">Travel</a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#home" class="nav_link"></a>
                    </li>
                    <li class="nav_item">
                        <a href="#home" class="nav_link">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">About</a>
                    </li>
                    <li class="nav_item">
                        <a href="#discover" class="nav_link">Discover</a>
                    </li>
                    <li class="nav_item">
                        <a href="#place" class="nav_link">Place</a>
                    </li>
                </ul>
                <i class="ri-close-line nav_close" id="nav-close"></i>
            </div>
            <div class="nav_toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home" id="home">
            <img src="{{asset('assets/imgs/home1.jpg')}}" alt="" class="home_img">
            <div class="home_container container grid">
                <div class="home_data">
                    <span class="home_data_subtitle">Discover your place</span>
                    <h1 class="home_data_title"> Explore The <br> Best <b> Beautiful <br>Beaches </b></h1>
                    <a href="" class="button">Explore</a>
                </div>
                <div class="home_social">
                    <a href="" target="_blank" class="home_social_link">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="" target="_blank" class="home_social_link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="" target="_blank" class="home_social_link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>
                <div class="home_info">
                    <div>
                        <span class="home_info_title">5 Best places to visit</span>
                        <a href="" class="button button_flex button_link home_info_button">
                            More <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                    <div class="home_info_overlay">
                        <img src="{{asset('assets/imgs/home2.jpg')}}" alt="" class="home_info_img">
                    </div>
                </div>
            </div>
        </section>
        <section class="about section" id="about">
            <div class="about_container container grid">
                <div class="about_data">
                    <h2 class="section_title about_title">
                        More Information <br> About The Best Beaches
                    </h2>
                    <p class="about_description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit 
                        sapiente placeat sit officia quod neque minus tempora itaque 
                        aliquam aspernatur accusamus voluptatem 
                        facere culpa maiores sed, eum voluptas quos. Mollitia.
                    </p>
                    <a href="#" class="button">Reserve a place</a>
                </div>
                <div class="about_img">
                    <div class="about_img_overlay">
                        <img src="{{asset('assets/imgs/about1.jpg')}}" alt="" class="about_img_one">
                    </div>
                    <div class="about_img_overlay">
                        <img src="{{asset('assets/imgs/about2.jpg')}}" alt="" class="about_img_two">
                    </div>
                </div>
            </div>
        </section>
        
        <section class="experience section">
            <h2 class="section_title">With our Experience <br> We Will Serve You.</h2>
            <div class="experience_container container grid">
                <div class="experience_content grid">
                    <div class="experience_data">
                        <h2 class="experience_number"> 20</h2>
                        <span class="experience_description">
                            Year <br> Experience
                        </span>
                    </div>

                    <div class="experience_data">
                        <h2 class="experience_number"> 70</h2>
                        <span class="experience_description">
                            Complete <br> Tours
                        </span>
                    </div>

                    <div class="experience_data">
                        <h2 class="experience_number"> 20+</h2>
                        <span class="experience_description">
                            Tourist <br> Destination
                        </span>
                    </div>
                </div>
                <div class="experience_img grid">
                    <div class="experience_overlay">
                        <img src="{{asset('assets/imgs/experience1.jpg')}}" alt="" class="experience_img_one">
                    </div>
                    <div class="experience_overlay">
                        <img src="{{asset('assets/imgs/experience2.jpg')}}" alt="" class="experience_img_two">
                    </div>
                </div>
            </div>
        </section>

        <section class="video section">
            <h2 class="section_title">Video Tour</h2>
            <div class="video_container container">
                <p class="video_description">
                    Find out more with our video of the most beautiful and pleasant places 
                    for you and your family.
                </p>
                <div class="video_content">
                    <video id="video-file">
                        <source src="{{asset('assets/video/video.mp4')}}" type="video/mp4">
                    </video>
                    <button class="button button-flex video_button" id="video-button">
                        <i class="ri-play-line video_button_icon" id="video-icon"></i>
                    </button>
                </div>
            </div>
        </section>
        <section class="place section" id="place">
            <h2 class="section_title">
                Choose Your Place
            </h2>
            <div class="place_container container grid">
                <div class="place_card">
                    <img src="{{asset('assets/imgs/place1.jpg')}}" alt="" class="place_img">
                    <div class="place_content">
                        <span class="place_rating">
                            <i class="ri-star-line place_rating_icon"></i>
                            <span class="place_rating_number">4,8</span>
                        </span>
                        <div class="place_data">
                            <h3 class="place_title">Bali</h3>
                            <span class="place_subtitle">Indonesia</span>
                            <span class="place_price">$2499</span>
                        </div>
                    </div>
                    <button class="button button--flex place_button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <div class="place_card">
                    <img src="{{asset('assets/imgs/place2.jpg')}}" alt="" class="place_img">
                    <div class="place_content">
                        <span class="place_rating">
                            <i class="ri-star-line place_rating_icon"></i>
                            <span class="place_rating_number">4,8</span>
                        </span>
                        <div class="place_data">
                            <h3 class="place_title">Lamu</h3>
                            <span class="place_subtitle">Kenya</span>
                            <span class="place_price">$1599</span>
                        </div>
                    </div>
                    <button class="button button--flex place_button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
                <div class="place_card">
                    <img src="{{asset('assets/imgs/place3.jpg')}}" alt="" class="place_img">
                    <div class="place_content">
                        <span class="place_rating">
                            <i class="ri-star-line place_rating_icon"></i>
                            <span class="place_rating_number">4,8</span>
                        </span>
                        <div class="place_data">
                            <h3 class="place_title">Zanzibar</h3>
                            <span class="place_subtitle">Tanzania</span>
                            <span class="place_price">$3000</span>
                        </div>
                    </div>
                    <button class="button button--flex place_button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
                <div class="place_card">
                    <img src="{{asset('assets/imgs/place4.jpg')}}" alt="" class="place_img">
                    <div class="place_content">
                        <span class="place_rating">
                            <i class="ri-star-line place_rating_icon"></i>
                            <span class="place_rating_number">4,8</span>
                        </span>
                        <div class="place_data">
                            <h3 class="place_title">Seychelles</h3>
                            <span class="place_subtitle">Seychelles</span>
                            <span class="place_price">$2000</span>
                        </div>
                    </div>
                    <button class="button button--flex place_button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
                <div class="place_card">
                    <img src="{{asset('assets/imgs/place5.jpg')}}" alt="" class="place_img">
                    <div class="place_content">
                        <span class="place_rating">
                            <i class="ri-star-line place_rating_icon"></i>
                            <span class="place_rating_number">4,8</span>
                        </span>
                        <div class="place_data">
                            <h3 class="place_title">Diani</h3>
                            <span class="place_subtitle">Kenya</span>
                            <span class="place_price">$2000</span>
                        </div>
                    </div>
                    <button class="button button--flex place_button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
            </div>



        </section>
        <section class="subscribe section" id="place"></section>
        <section class="sponsor section" id="place"></section>
    </main>

    <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/web.js')}}"></script>


</body>
</html>