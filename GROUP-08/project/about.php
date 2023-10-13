<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/navfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Wellassa school</title>
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
            <a href="index.php" class="nav-item nav-link ">Home</a>
            <a href="about.php" class="nav-item nav-link active">About</a>
                <a href="contact.php" class="nav-item nav-link ">Contact</a>
                <a href="login_form.php" class="nav-item nav-link">Login</a>
            </div>

        </div>
    </nav>
    <!-- navbar end --> 
    <br><br>
    <center><img src="images/school.jpg" width="500 px" height="300 px"> </center>
    <section id="about">
        <div class="about-content">
            <br>
            <p><b>Wellassa School Which Is Located 8km Away Of Badulla City, Was Started On 21st Of July 1990.
                Mr.K.J.M.Manathunga Was The Poineer For Starting Our School. And He Was The First Principal Of Our
                Wellassa School.There Were Only 1 Building And 2 Classrooms When The Begun Of Our School.Our School Has
                Improved Over Time And Currently Consists Of 4 Buildings And 38 Classrooms. And Also There Is An Office
                Complex Which Is Consisted Of Principal's Office, Vice Principal Office, Documentary
                Maintenance,Stationary Maintenance Room And Two Staff Rooms.
                In Other Hand, There Were 11 Students And Two Teachers For The Whole School When This Is Begun. But Now,
                There Are 1215 Students And A Staff With 89 Teachers. This Is A School With Grade 1 To 13 Students, And
                Also There Are 5 Main Subject Categories For A/L Students That Are; Maths, Science, Art, Commerce And
                Technology Stream.

            </p>
            <p>We are dedicated to providing high-quality education and fostering a culture of learning.</b></p>
        </div>
    </section>

    <section id="courses">
        <div class="courses-content">
            <br><br><br><br>
            <div class="course">
                <h2>Our Mission</h2>
                <h4>Our mission is to create a place where everyone is appreciated and valued. The preparedness of kids
                    for college and careers is a top priority for the entire team, working in collaboration with parents
                    and families. Students are given the resources they need to take on present and future problems in
                    order to improve personally and socially.</h4>
            </div>
            <br>
            <div class="course">
                <h2>Our Vision</h2>
                <h4>By instilling in them critical thinking abilities, a global perspective, and a respect for essential
                    values like honesty, loyalty, perseverance, and compassion, our mission is to equip and inspire our
                    students for a constantly changing world. Students will succeed in the present and be ready for the
                    future.</h4>
            </div>
            
        </div>
    </section>
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
            <li class="menu__item"><a class="menu__link" href="#https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a></li>
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