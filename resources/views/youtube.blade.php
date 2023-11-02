<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Clone - Light Mode</title>
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/tailwind.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css">
</head>             
<body>
    <div class="masthead-container container md:block">
        <div id="container" class="style-scope ytd-masthead">  
            <div id="start" class="style-scope ytd-masthead">
                <div class="logo flex items-center">
                    <i class="fas fa-bars" id="menu-icon"></i>
                    <i class="fab fa-youtube ml-2 text-red-500"></i>
                    <span class="ml-1 text-red-500 font-bold">YouTube</span>
                    </div>
            </div>
            <div id="center" class="style-scope ytd-masthead">
                <a href="#">
                    <form id="search-form">
                        <input type="text" class="search-bar" placeholder="Nhập từ bàn nhím">
                        <i class="fas fa-search"></i>
                    </form>
                </a>
            </div>
            <div id="end" class="style-scope ytd-masthead">
                <div id="buttons" class="style-scope ytd-masthead">
                    <div class="create"><i class="fa-solid fa-square-plus"></i></div>
                    <div class="notification"><i class="fa-regular fa-bell"></i></div>
                    <div class="user-profile"><i class="fa-regular fa-user"></i></div>
                </div>
            </div>
        </div>  
    </div>
    <main>
        <nav class="sidebar hidden md:block" id="navigation">
            <ul class="navigation">
              <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
              <li><a href="#"><i class="fas fa-video"></i> Video</a></li>
              <li><a href="#"><i class="fas fa-newspaper"></i> Tin tức</a></li>
              <li><a href="#"><i class="fas fa-list"></i> Danh mục</a></li>
              <li><a href="#"><i class="fas fa-envelope"></i> Liên hệ</a></li>
            </ul>
          </nav>
        <section class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/O8e-2JTo7wk?si=Du4dTOb-jJM9UOxp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
            <h2>Chỉ Cần Có Em</h2>
            <p>Twenty</p>
            <div class="buttons">
                <button class="like-btn">Like</button>
                <button class="dislike-btn">Dislike</button>
            </div>
            <p>Views: 1,000,000</p>
        </section>
            <section class="recommended-videos">
                <h3>Video được đề xuất</h3>
                <ul class="video-list">
                    <li class="video-item">
                        <a href="video1.html">
                            <img src="https://i.ytimg.com/vi/3gNuUcPg1fk/sddefault.jpg?v=6530f4a3" alt="Video 1 Thumbnail">
                            <h4>Binz-Hit me up</h4>
                            <p>Binz</p>
                            <p>Views: 500,000</p>
                        </a>
                    </li>
                    <li class="video-item">
                        <a href="video2.html">
                            <img src="https://i.ytimg.com/vi/i0nd3NPJ4MI/sddefault.jpg?v=643f6a59" alt="Video 2 Thumbnail">
                            <h4>Hieuthuhai- Không thể say</h4>
                            <p>Hieuthuhai</p>
                            <p>Views: 300,000</p>
                        </a>
                    </li>
                    <li class="video-item">
                        <a href="video3.html">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_TdZHH34lpCHNLSzXw5fhbY5uhRPMxag5CXWLCIxr2XIwdWa2E6o8Hd6-c_FcM8w7qME&usqp=CAU" alt="Video 3 Thumbnail">
                            <h4>Lil Wuyn, 16 BrT, 16 Typh - TOKYO Cypher</h4>
                            <p>Lil Wuyn</p>
                            <p>Views: 112,000</p>
                        </a>
                    </li>
                </ul>
            </section>
    </main>

    <footer>
        <div class="footer-links">
            <a href="#">About</a>
            <a href="#">Press</a>
            <a href="#">Copyright</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="language-region">
            <select>
                <option value="en">English</option>
                <option value="es">Tiếng việt</option>
                <option value="es">Español</option>
            </select>
        </div>
    </footer>
    <script src="{{asset('frontend/js/menu.js')}}"></script>
</body>
</html>
