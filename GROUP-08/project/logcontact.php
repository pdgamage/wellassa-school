<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/navfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 550px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;

        }

        h1 {
            text-align: center;
            color: #333;
        }

        .contact-form {
            display: inline-block;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        button {
            grid-column: span 2;
            background-color: #1b64ad;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 500px;
        }

        button:hover {
            background-color: #3c3d3f;
        }

        .contact-info {
            text-align: center;
            margin-top: 20px;
        }

        .contact-info p {
            color: #777;
        }

        /* Responsive layout for small screens */
        @media (max-width: 768px) {
            .contact-form {
                grid-template-columns: 1fr;
            }

            button {
                grid-column: span 1;
            }
        }
    </style>
</head>

<body>
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
            <a href="event.php" class="nav-item nav-link">Event</a>
            <a href="upcoming information.php" class="nav-item nav-link ">Announcement</a>
            <a href="logabout.php" class="nav-item nav-link ">About</a>
            <a href="logcontact.php" class="nav-item nav-link active">Contact</a>
            <a href="logout.php" class="nav-item nav-link">Logout</a>
            </div>

        </div>
    </nav>
    <br>
    <div class="container">
        <h1>Contact Us</h1>
        <form class="contact-form" action="contanctus_.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
      
        
    </div><br>
    <center><iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.232221977519!2d81.07370807384885!3d6.981900517669081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4618a1a9fec37%3A0x1dd900702229654b!2z4LaM4LeAIOC3gOC3meC2veC3iuC2veC3g-C3iuC3gyDgt4Dgt5Lgt4Hgt4rgt4Ag4LeA4LeS4Lav4LeK4La64LeP4La94La6!5e0!3m2!1ssi!2slk!4v1690160423837!5m2!1ssi!2slk"
        frameborder="0" style="min-height: 200px; border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe></center>
        <div class="contact-info">
            <p>For immediate assistance, please call: 011-4782409</p>
            <p>Email: <a href="mailto:wellassacontact@gmail.com">wellassacontact@gmail.com</a></p>
            <p>123 Main Street, passara road, Badulla</p>
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