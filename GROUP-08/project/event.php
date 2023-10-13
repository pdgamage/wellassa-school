<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellassa school</title>
    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="css/navfooter.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 36px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .event-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .event-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .event-description {
            color: #555;
        }
    </style>
</head>

<body>
    <!-- navbar start --> 
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
           <h2 class="m-0 text-primary">Wellassa School</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
           <div class="navbar-nav ms-auto p-4 p-lg-0">
           <a href="user_page.php" class="nav-item nav-link ">Home</a>
            <a href="event.php" class="nav-item nav-link active">Event</a>
            <a href="upcoming information.php" class="nav-item nav-link ">upcoming information</a>
            <a href="logabout.php" class="nav-item nav-link">About</a>
            <a href="logcontact.php" class="nav-item nav-link">Contact</a>
            <a href="logout.php" class="nav-item nav-link">Logout</a>
           </div>

        </div>
     </nav>
     <!-- navbar end --> 
     <br><br>
         <!--gallery start-->
    <section class="heading">
        <h3>Event And Student Ability</h3>

    </section>

   
    <div class="gallery">
        <div class="gallery-item">
            <img src="images/event1.jpg" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="images/event2.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/event3.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/event4.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/event5.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/event6.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/event7.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/event8.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/event9.jpg" alt="Image 2">
        </div>
        
        
    </div>

    <!-- Lightbox container -->
    <div class="lightbox" id="lightbox">
        <img src="" alt="Lightbox Image">
    </div>

    <script src="js/gallery.js"></script>

     <br>
    <div class="container">
        <h2>Upcoming Events</h2>
        <div class="event-card">
            <h3 class="event-title">Event 1: Seminar(November 11)</h3>
            <p class="event-description">Seminar is conducted on BCA course.</p>
            <button>Read more</button>
        </div>
        <div class="event-card">
            <h3 class="event-title">Event 2: Seminar(November 14)</h3>
            <p class="event-description">Seminar is conducted on B.com course.</p>
            <button>Read more</button>
        </div>
        <div class="event-card">
            <h3 class="event-title">Event 3: Convocation ceremony(November 17)</h3>
            <p class="event-description">conducted its 2nd convocation ceremony.</p>
            <button>Read more</button>
        </div>
        <div class="event-card">
            <h3 class="event-title">Event 4: Seminar(November 19)</h3>
            <p class="event-description">Seminar is conducted on BCA course.</p>
            <button>Read more</button>
        </div>
        <div class="event-card">
            <h3 class="event-title">Event 5: Annual Meeting(November 23)</h3>
            <p class="event-description">Annual Meeting for Batch of BBA (2018 to 2021) and seminar will be conducted for future growth cand oppurtunity.</p>
            <button>Read more</button>
        </div>

    </div>
    <!--fotter-->
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

</body>

</html>