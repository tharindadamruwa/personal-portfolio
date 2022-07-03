<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tharinda Damruwan | Personal Website</title>

    <!--links-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/res.css">
    <link rel="shortcut icon" href="https://telegra.ph/file/e8ec24f454807d9e3cdd1.png" type="image/x-icon">

</head>

<body>

    <!--header-->
    <header>

        <a href="" class="logo">BB<span>TDP</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">

            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>

    </header>

    <!--start home-->
    <section class="home" id="home">

        <div class="home-text">

            <h5>Hello, I'm</h5>
            <h1>Tharinda</h1>
            <h6>I am Passionate Full-stack <span>Developer.</span></h6>
            <p>
                Website, Mobile-apps, Hacking-tools, Linux-tools, etc programmer and developer.
            </p>

            <a href="#about" class="btn">About Me</a>

        </div>

        <div class="home-img">

            <img src="https://telegra.ph/file/1f7f70fc007624861022c.png" alt="home-img">

        </div>

    </section>

    <!--start about-->
    <section class="about" id="about">

        <div class="about-img">

            <img src="https://telegra.ph/file/54b3f513057347c509470.png" alt="about-img">

        </div>

        <div class="about-text">

            <h3>ABOUT ME</h3>
            <h2>I am front-end back-end developer with 1 year of experience</h2>
            <p>

                My name is
                <span>

                    <font class="td-name">Tharinda Damruwan</font>

                </span>

                and I'm programmer. I'm from Sri Lanka and I can web design, mobile apps develop, logo design,
                grapic design, web apps develop and more...

            </p>

            <div class="count">

                <a target="_blank" href="https://github.com/tharindadamruwan"><span>Go To My GitHub</span></a>

            </div>

            <div class="main-btn">

                <a href="#contact" class="btn">Contact Me</a>

            </div>

        </div>

    </section>

    <!--start skill-->
    <section class="services" id="skill">

        <div class="center">

            <h3>MY SKILLS</h3>

        </div>

        <div class="services-content">

            <div class="row">

                <i class='bx bxl-html5'></i>
                <h3>HTML 5</h3>
                <p>
                    For web design
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-css3'></i>
                <h3>CSS 3</h3>
                <p>
                    For web design
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-javascript'></i>
                <h3>JAVASCRIPT</h3>
                <p>
                    For back-end developing
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-python'></i>
                <h3>PYTHON</h3>
                <p>
                    For back-end developing, Hacking tools programming, Linux tools programming.
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-php'></i>
                <h3>PHP</h3>
                <p>
                    For back-end developing, Hacking tools programming.
                </p>

            </div>

            <div class="row">

                <i class='bx bxs-terminal'></i>
                <h3>BASH</h3>
                <p>
                    For Hacking tools programming, Linux tools programming.
                </p>

            </div>

            <div class="row">

                <i class='bx bxl-adobe'></i>
                <h3>ADOBE PHOTOSHOP</h3>
                <p>
                    For grapic design.
                </p>

            </div>

            <div class="row">

                <i class='bx bx-paint'></i>
                <h3>ADOBE ILLUSTRATOR</h3>
                <p>
                    For grapic design.
                </p>

            </div>


        </div>

    </section>

    <section class="resume" id="projects">

        <div class="center">

            <h3>MY PROJECTS</h3>
            <!-- <a target="_blank" class="admin-btn" href="page/login.php">Admin</a> -->

        </div>

        <div class="resume-content">

            <?php

            $read = fopen("data/projects.txt", "r");

            while (!feof($read)) {
                echo fread($read, 1024);
            }

            fclose($read);

            ?>

        </div>

    </section>

    <!--start contact-->

    <section class="contact" id="contact">

        <div class="center">

            <h3>CONTACT ME</h3>

        </div>

        <div class="con-info">

            <div class="con-text">

                <p><span>Email : </span>suport.bbtdpwebsite@gmail.com</p>
                <p><span>WhatsApp : </span>0740922947</p>
                <p><span>Twitter : </span><a target="_blank" href="https://twitter.com/tharindadamruwa">Go To Twitter
                        profile</a></p>

            </div>

        </div>

    </section>

    <!--start copyright-->
    <div class="copyright">

        <p>Copyright @ 2022 Portfolio. <br> Create by Tharinda Damruwan</p>

    </div>

    <!--link js-->
    <script src="js/script.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</body>

</html>