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
        <nav class="nav contaner">
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
    <script src="{{asset('assets/js/web.js')}}"></script>
</body>
</html>