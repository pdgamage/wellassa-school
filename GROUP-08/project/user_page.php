<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellassa-School | HOME</title>
    

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary">Wellassa School</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="user_page.php" class="nav-item nav-link active">Home</a>
            <a href="event.php" class="nav-item nav-link">Event</a>
            <a href="upcoming information.php" class="nav-item nav-link ">upcoming information</a>
            <a href="logabout.php" class="nav-item nav-link">About</a>
            <a href="logcontact.php" class="nav-item nav-link">Contact</a>
            <a href="logout.php" class="nav-item nav-link">Logout</a>
            </div>

        </div>
    </nav>

    <!-- navbar end -->

    <!-- videoplay started  -->
    <div class="video-container">
        <video autoplay muted loop poster="path-to-poster-image.jpg" id="video-background">
            <source src="images/course-video.mp4" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
    </div>

    <div class="content">

        <h1>
        Learn Anytime, Anywhere<br>and Accelerate Future</h1>
    </div>


    <!--videoplay end -->

    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- categories section starts  -->
  
    <section class="heading">
        <h3>OUR FACILITIES</h3>

    </section>
    <section class="course-3">

        <div class="box">
            <div class="video">
                <i class="fas fa-play"></i>
                <video src="images/about-3.mp4"></video>
            </div>
            <div class="content">
                <h3>Best Study</h3>
                
            </div>
        </div>

        <div class="box">
            <div class="video">
                <i class="fas fa-play"></i>
                <video src="images/about-2.mp4"></video>
            </div>
            <div class="content">
                <h3>Best Library</h3>
                
            </div>
        </div>
        <div class="box">
            <div class="video">
                <i class="fas fa-play"></i>
                <video src="images/about-6.mp4"></video>
            </div>
            <div class="content">
                <h3>Best Sports</h3>
                
            </div>
        </div>



    </section>
    <!-- categories section end  -->

    <!--gallery start-->
    <section class="heading">
        <h3>GALLERY</h3>

    </section>

   
    <div class="gallery">
        <div class="gallery-item">
            <img src="images/childrensday.jpeg" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="images/childrensday.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/childrensday1.jpeg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/english.JPG" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/Englishday1.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/sportmeet (2).jpeg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/sportmeet.jpeg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/Sportmeet.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/sportmeet1.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/vesakpoya.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/vesakpoya1.jpeg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/vesakpoya2.jpg" alt="Image 2">
        </div>
        
    </div>

    <!-- Lightbox container -->
    <div class="lightbox" id="lightbox">
        <img src="" alt="Lightbox Image">
    </div>

    <script src="js/gallery.js"></script>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>

$(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter')

        if(filter == 'all'){
            $('.image').show(400);
        }else{
            $('.image').not('.'+filter).hide(200);
            $('.image').filter('.'+filter).show(400);
        }

    });

    $('.gallery').magnificPopup({

        delegate:'a',
        type:'image',
        gallery:{
            enabled:true
        }

    });

});

</script>
    
    <!--gallery end-->

<!-- footer section started -->
    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>

        <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="https://web.facebook.com/?_rdc=1&_rdr"> <i class="fab fa-facebook-f"></i> facebook </a></li>
            <li class="menu__item"><a class="menu__link" href="https://twitter.com/"> <i class="fab fa-twitter"></i> twitter </a></li>
            <li class="menu__item"><a class="menu__link" href="https://lk.linkedin.com/"> <i class="fab fa-linkedin"></i> linkedin </a></li>
            <li class="menu__item"><a class="menu__link" href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a></li>
            <li class="menu__item"><a class="menu__link" href="https://www.youtube.com/"> <i class="fab fa-youtube"></i> youtube </a></li>
            <li class="menu__item"><a class="menu__link" href="https://github.com/"> <i class="fab fa-github"></i> github </a></li>
        </ul>
        <p>&copy;2023 Wellassa college | All Rights Reserved</p>
    </footer>


    <script>
        function toggleMenu() {
            const menu = document.getElementById('navbarMenu');
            menu.classList.toggle('active');
        }

        
    </script>
    <!-- footer section ends -->


</body>

</html>