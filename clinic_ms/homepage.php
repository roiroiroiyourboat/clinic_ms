<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BulSU-SC Infirmary</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link href="https://unpkg.com/css.gg/icons/icons.css" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-hrmPO4HCmSpvwyuLWHX5z5xXkz8TjJU5pXcFpFQwqfOeG8Bl/5+PtcO87NNb5O4" crossorigin="anonymous">
        <link rel="stylesheet" href = "homepage.css" />
    </head>

    <body>
        <!--Header -->
        <header class="header">
            <nav class = "nav">
                <a href="#home" class="nav_logo"><b>BSU-SC</b></a> 
                <ul class="nav_items">
                    <li class="nav_item">
                        <a href="#aboutUs" class="nav_link">About Us</a>
                        <a href="#footer" class="nav_link">Contact</a>
                    </li>
                </ul>
                <a href="#home" class="nav_link">
                    <button class="button" id="form_open">Login</button>
                </a>
            </nav>
            <div class="progress"></div>
        </header>

        <!--home-->
        <section class="home" id="home">
            <div class="text">
                <center>
                <h1 style="color:#f6ea8c; font-size: 55px"><b>Basic health and health related services</b></h1>
                <h5>to students, faculty 
                    members & non-teaching personnel of BSU-SC.</h4>
                </center>
            </div>
            <div class="form_container">
                <i class="gg-close form_close"></i> 
                <!--log in form-->

                <div class = "form login_form">
                    <div class="logo_header">
                        <header>
                            <!--<img src="BulSU Logo.png" alt="logo">-->
                            <img src="BulSU-SC Logo.png" alt="logo">      
                        </header>
                        <p>Log in</p>
                    </div>
                    
                    <form action="login_config.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="form-label">E-mail address:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col">
                                <label for="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                            
                            <div class="input-box">
                                <input type="submit" class="btn" value="Log in">
                            </div>

                            <div class="links">
                                <span>Don't have an account?
                                <a href=".sign_form" id="signup">Sign Up</a></span>
                                <span><a href="#">Forgot Password? </a></span>
                        </div>

                    </form>
                </div>

                    <!--signup-->
                <div class="form sign_form">
                    <div class="logo_header">
                        <header>
                            <!--<img src="BulSU Logo.png" alt="logo">-->
                            <img src="BulSU-SC Logo.png" alt="logo">
                        </header>
                        <p>Sign Up</p>
                    </div>

                    <form action="config.php" method="post">
                        <div class="row">
                            <div class = "col">
                                <label for="form-label">First Name:</label>
                                <input type="text" class="form-control" id="fname" name="fname" autocomplete="off" required> 
                            </div>

                            <div class = "col">
                                <label for="form-label">Last Name:</label>
                                <input type="text" class="form-control" id="lname" name="lname" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="form-label">E-mail address:</label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <label for="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" minlength="8" autocomplete="off" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <label for="for-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword" autocomplete="off" required>
                            </div>
                        </div>
                        
                        <div class="input-box">
                            <input type="submit" class="btn" name="signup"value="Sign Up">
                        </div>

                        <div class="links">
                            <span>Already have an account?
                            <a href=".login_form" id="login">Log in</a></span>
                        </div>
                    </form>
                </div>
            </div>

        </section>

        <div class="container-fluid" id="aboutUs">
            <center>
                <div class="container">
                    <h1 style="font-size:40px; color:white"><b>ABOUT US</b></h1>
                </div>
            </center>

            <div class="container-md">
                <div class="container-sm">
                    <center><img src="icon-vision.png" alt="icon-vision"></center>
                    <h2 style="font-size:35px; color:#a6172d"><b>Vision</b></h2>
                    <div class="vis">The Bulacan State University Infirmary will be the
                    premier of excellence in SUC of Region III in 
                    providing quality health care for stuedents, faculty, non-teaching 
                    personnel and members of the academic 
                    community, with state of the art health facilities and 
                    giving a best healthy living environment for every member 
                    of the school society.
                    </div>
                </div>

                <div class="container-sm">
                    <center><img src="icon-mission.png" alt="icon-mission" title=""></center>
                    <h2 style="font-size:35px; color:#181842"><b>Mission</b></h2>
                    <div class="mis">
                        The Bulacan State University Infirmary shall
                        implement plans and strategies, health and health related
                        programs and activities develop a comprehensive health
                        information management system and full range of
                        medical and dental care and intervention for students,
                        faculty and community. 
                    </div>
                </div>

                <div class="container-sm">
                    <center><img src="icon-goals.png" alt="icon-goals"></center>
                    <h2 style="font-size:35px; color:#a6172d"><b>Goals</b></h2>
                    <div class="goals">
                        The following goals are the center of responsibilities of
                        the University Infirmary:
                        <ul>
                            <li>
                                Promote the mission of the university and office
                                student affairs and services
                            </li>
                            <li>
                                Deliver services that focus on commitement and excellence
                            </li>
                            <li>
                                Focus health promotion and disease prevention
                            </li>
                            <li>
                                Promote healthy lifestyle, proper nutrition and physical activities
                            </li>
                            <li>
                                Promote health and health related activities
                            </li>
                            <li>
                                Develop health related programs for students, faculty and non-teaching personnel
                            </li>
                            <li>
                                Keeps pertinent records for patient and other health related documents
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
        <footer class="footer" id="footer">
            <div class="container-footer">
                <div class="footer-logo">
                    <img src="BulSU-SC Logo.png" alt="BSU">
                    <p><b>Bulacan State University - Sarmiento Campus</b> <br>
                    Health Services</p>
                    <a href="https://www.google.com/search?q=San+Jose+del+Monte%2C+Philippines&sourceid=chrome&ie=UTF-8#e
                    im=CAEQDBoKMTQuODE0MjYyNiISMTIxLjA3MjUzMTk5OTk5OTk4" target="_blank">
                        <p> <i class='bx bx-current-location' style='color:#0e0e0e'  ></i> San Jose del Monte, Philippines </p>
                    </a>
                </div>

                <div class="footer-contact">
                    <p><b>Contact us:</b></p>
                    <p><i class='bx bxs-envelope' style='color:#0e0e0e'  ></i> ericpaul.yambao@bulsu.edu.ph</p>
                    <p><i class='bx bxs-phone' style='color:#0e0e0e' ></i> 0922 378 9023</p>
                </div>

                <div class="footer-social">
                    <p><b>Follow us on:</b></p>
                    <a href="https://m.facebook.com/people/BulSU-Sarmiento-Campus-Health-Services/100057332385234/" target="_blank">
                    <img src="facebook-circle-logo-48.png" alt="facebook">
                    </a>
                </div>    
            </div> 
        </footer>


        <!--pop-up form log in-->
        <script>
            const openForm = document.querySelector("#form_open"),
            home = document.querySelector(".home"),
            formContainer = document.querySelector(".form_container"),
            formClose = document.querySelector(".form_close"),
            signUp = document.querySelector("#signup"),
            logIn = document.querySelector("#login");

            openForm.addEventListener("click", () => home.classList.add("show"))
            formClose.addEventListener("click", () => home.classList.remove("show"))

            signUp.addEventListener("click", (e) => {
                e.preventDefault();
                formContainer.classList.add("active");
            });

            logIn.addEventListener("click", (e) => {
                e.preventDefault();
                formContainer.classList.remove("active");
            });

            //scroll
            window.addEventListener('scroll', () => {
                document.body.style.setProperty('--scroll',window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
            }, false);
        </script>
    </body>

    
</html>