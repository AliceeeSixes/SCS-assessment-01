<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="css/application.css" />




    <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
</head>



<body>
    <?php require_once("inc/db-connection.php"); ?>
    
    <!-- Page Wrapper -->
    <div class="wrapper">


        <div id="mainpage">
            <div id="sideNavModal"></div>
            <div id="top-sticky">
                <!-- Header -->
                <?php include("inc/header.php"); ?>

                <!-- Top Navbar (Desktop Only) -->
                <?php include("inc/top-nav.php"); ?>
            </div>

            <div class="overflow-container">


                
                <!-- Main page content sections -->
                <main>
                    <!-- Contact Section -->
                    <section>
                        <div class="section__topbar">
                            <div class="section__topbar--inner">
                                <a href="index.php">Home</a>
                                <span> / Our Offices </span>
                            </div>
                        </div>

                        <div class="contact">
                            <div class="section__header container">
                                <h1>Our Offices</h1>
                                <h1></h1>
                            </div>
                            <div class="contact__card--container container">

                                <div class="contact__card">
                                    <a class="contact__card--image">
                                        <img src="img/offices/cambridge.jpg"/>
                                    </a>
                                    <div class="contact__card--info">
                                        <h4>Cambridge Office</h4>
                                        <p>
                                            Unit 1.31,
                                            <br>St John's Innovation Centre,
                                            <br>Cowley Road, Milton,
                                            <br>Cambridge,
                                            <br>CB4 0WS
                                        </p>
                                        <h3 class="contact__phone--number">01223 37 57 72</h3>
                                        <a class="contact__card--button" href="#">View More</a>
                                    </div>
                                </div>

                                <div class="contact__card">
                                    <a class="contact__card--image">
                                        <img src="img/offices/wymondham.jpg"/>
                                    </a>
                                    <div class="contact__card--info">
                                        <h4>Wymondham Office</h4>
                                        <p>
                                            Unit 15,
                                            <br>Penfold Drive,
                                            <br>Gateway 11 Business Park,
                                            <br>Wymondham, Norfolk,
                                            <br>NR18 0WZ
                                        </p>
                                        <h3 class="contact__phone--number">01603 70 40 20</h3>
                                        <a class="contact__card--button" href="#">View More</a>
                                    </div>
                                </div>

                                <div class="contact__card">
                                    <a class="contact__card--image">
                                        <img src="img/offices/yarmouth-2.jpg"/>
                                    </a>
                                    <div class="contact__card--info">
                                        <h4>Great Yarmouth Office</h4>
                                        <p>
                                            Suite F23,
                                            <br>Beacon Innovation Centre,
                                            <br>Beacon Park, Garleston,
                                            <br>Great Yarmouth, Norfolk,
                                            <br>NR31 7RA
                                        </p>
                                        <h3 class="contact__phone--number">01493 60 32 04</h3>
                                        <a class="contact__card--button" href="#">View More</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </section>

                    <!-- Form Section -->
                    <section>
                        <div class="contact__form--section container">
                            <div class="contact__form">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" onsubmit="return validateForm()" novalidate>
                                    <?php
                                        if (isset($_POST)) {
                                            $name = htmlspecialchars($_POST["name"]);
                                            $company = htmlspecialchars($_POST["company"]);
                                            $email = htmlspecialchars($_POST["email"]);
                                            $tel = htmlspecialchars($_POST["phone"]);
                                            $message = htmlspecialchars($_POST["message"]);

                                            storeMessage($name, $company, $email, $tel, $message);
                                            echo "Form submitted";
                                        }
                                        unset($_POST);
                                    ?>
                                    <div class="contact-div-wide" id="contact-response"></div>
                                    <div class="contact-div">
                                        <label class="required">Your Name</label>
                                        <input type="text" name="name" id="name" required />
                                    </div>

                                    <div class="contact-div">
                                        <label>Company Name</label>
                                        <input type="text" name="company" id="company"/>
                                    </div>

                                    <div class="contact-div">
                                        <label class="required">Your Email</label>
                                        <input type="email" name="email" id="email" required />
                                    </div>

                                    <div class="contact-div">
                                        <label class="required">Your Telephone Number</label>
                                        <input type="text" name="phone" id="phone" required />
                                    </div>

                                    <div class="contact-div-wide">
                                        <label class="required">Message</label>
                                        <textarea name="message" cols="50" row="10" id="message"></textarea>
                                    </div>

                                    <div class="contact-div-privacy">
                                        <div class="checkbox">
                                            <input type="checkbox" />
                                        </div>
                                        <span class="contact-checkbox-text">Please tick this box if you wish to recieve marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe</span>
                                    </div>

                                    <div class="contact-div-wide">
                                        <span class="contact-small-text">This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.
                                    </div>

                                    <div class="contact-submit-div">
                                        <input type="submit" value="SEND ENQUIRY"/>
                                        <span><span class="red-text">*</span> Fields Required</span>
                                    </div>

                                </form>
                            </div>

                            <div class="contact__details">
                                <h4>Email us on:</h4>
                                <a><h3>sales@netmatters.com</h3></a>

                                <h4>Speak to Sales on:</h4>
                                <a><h3>01603 515007</h3></a>

                                <h4>Business hours:</h4>
                                <h4>Monday - Friday 07:00 - 18:00</h4>

                                <h4 id="out-of-hours-toggle">Out of Hours IT Support<i class="fa fa-chevron-down"></i></h4>
                                <div id="out-of-hours-text">
                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                    <h4>Monday - Friday 18:00 22:00</h4>
                                    <h4>Saturday 08:00 - 16:00</h4>
                                    <h4>Sunday 10:00 - 18:00</h4>
                                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call</p>
                                </div>
                            </div>
                        </div>
                    </section>



                   



                    
                </main>
            </div>

            <!-- Footer Section -->
            <?php include("inc/footer.php"); ?>

        </div>

        <!-- Side Navbar (Toggleable Both Views, will be enabled using JS) -->
        <?php include("inc/side-nav.php"); ?>

    </div>






    <?php include("inc/cookies.php"); ?>



    <!-- JavaScript Imports -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/form.js"></script>

</body>



</html>