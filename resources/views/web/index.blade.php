<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{asset('assets/css/web.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

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
        <section class="about section" id="about"></section>
        <section class="discover section" id="discover"></section>
        <section class="place section" id="place"></section>
    </main>


    <script src="{{asset('assets/js/web.js')}}"></script>
</body>
</html>