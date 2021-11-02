<?php
error_reporting(0);
$source='';
$source=$_GET['utm_source'];
$medium='';
$medium=$_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>School Of Architecture - MTC </title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/cookiealert.css">
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body class="homepage-1">

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="assets/img/logo/mokambika-logo.png" alt="brand-logo">
                    <img class="navbar-brand-sticky" src="assets/img/logo/mokambika-logo.png" alt="sticky brand-logo">
                </a>
                <button class="enq-top d-lg-none" data-toggle="modal" data-target="#exampleModal0">Enquire Now
                </button>

                <div class="navbar-inner">
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area h-90vh d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-12 col-lg-7 pr-100">
                        <div class="welcome-form">
                            <form name="form1" method="post" action="email.php">
                                <div class="form-title">
                                    <h4>To unlock your dreams, Book your seats NOW !</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group form-group-btn">
                                    <input type="hidden" name="esource" value="<?php echo $source;?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                    <input type="submit" value="submit" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Affiliated Area Start ***** -->
        <section class="affiliated-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3" data-aos="fade-up">
                        <div class="afiliated-box">
                            <img src="assets/img/affiliateds/01.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="afiliated-box">
                            <img src="assets/img/affiliateds/02.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="afiliated-box">
                            <img src="assets/img/affiliateds/03.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="afiliated-box">
                            <img src="assets/img/affiliateds/04.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** B Arch Area Start ***** -->
        <section class="b-arch-area section">
            <div class="bg-top"></div>
            <div class="bg-bottom"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="barch-main">
                            <div class="head">
                                <h1>B.Arch</h1>
                                <p>Bachelor of architecture</p>
                                <div class="dots-yellow">
                                    <div class="dots-one"></div>
                                    <div class="dots-two"></div>
                                    <div class="dots-three"></div>
                                </div>
                            </div>
                            <div class="img">
                                <img src="assets/img/b-arch.jpg" alt="">
                            </div>
                            <div class="content">
                                <p>The Bachelor of Architecture is a five-year full time professional degree programme accredited by the Council of 
                                    Architecture, New Delhi - a statutory body of Government of India that regulates Architectural education in India. The focus of the Degree Programme is the teaching of architectural design through studio and community based projects. The projects involve the application and integration of the knowledge and skills acquired from supporting courses. Critic sessions will form part of the studio procedure in teaching. Support courses include formal lectures, followed by seminars, market surveys, site visits, workshops and tutorials. In addition to design, key areas of B.Arch. programme are environmental design, urban design, building technology, computer aided design, 
                                    history and theory landscape architecture, building conservation, project management, 
                                    sustainable development and people/environment studies.</p>
                            </div>
                            <div class="arch-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModal0">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Courses Area Start ***** -->
        <section class="course-section section ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="course-header">
                            <h2>In general the course has two formats of teaching</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="studio-box">
                            <div class="studio-head">
                                <div class="img"><img src="assets/img/01.png" alt=""></div>
                                <div class="name"><h2>Studio</h2></div>
                            </div>
                            <div class="studio-para">
                                <p class="studio-p">The subjects enlisted below are handled as a part of the studio. In a studio the students work hands-on on various projects in the subjects mentioned.</p>
                            </div>
                            <ul class="studio-points">
                                <li>Architectural design</li>
                                <li>Interior design</li>
                                <li>Landscape Architecture</li>    
                                <li>Urban design</li>    
                                <li>Documentation</li>    
                                <li>Basic design</li>    
                                <li>Working Drawings & Detailing</li>    
                                <li>Architectural Graphics</li>    
                                <li>Building materials & construction</li>    
                                <li>Visual Art</li>    
                                <li>Computer Application In Architecture</li>    
                                <li>Workshop</li>    
                                <li>Architectural Photography</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="thory-box">
                            <div class="studio-head">
                                <div class="img"><img src="assets/img/02.png" alt=""></div>
                                <div class="name"><h2>Theory</h2></div>
                            </div>
                            <div class="studio-para">
                                <p class="thoery-p">The theory subjects complement and help alleviate the process of design through out the 5 years.</p>
                            </div>
                            <ul class="studio-points">
                                <li>History Of Architecture</li>
                                <li>Principles Of Traditional Architecture</li>
                                <li>Town Planning</li>
                                <li>Climatology</li>
                                <li>Structural Design</li>
                                <li>Building Services</li>
                                <li>Surveying and Levelling</li>
                                <li>Architectural Acoustics</li>
                                <li>Human Settlements & Study of Sociology, Economics & Culture</li>
                                <li>Estimating, Costing & Specification</li>
                                <li>Building Bye Laws, Code Of Conduct & Professional Practice</li>
                                <li>Constuction Technology & Project Management</li>
                                <li>Design for Disaster Mitigation & Management</li>
                                <li>Sustainable Architecture</li>
                                <li>Architectural Conservation</li>
                                <li>Research Methodology</li>
                                <li>Housing</li>
                                <li>Mathematics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="course-btn">
                            <a href="#">Download Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Facilities Area Start ***** -->
        <section class="facilities-area section ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="fac-head">
                            <h1>Our Facilities</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="fac-mainbox">
                            <div class="fac-box">
                                <div class="fac-icon">
                                    <img src="assets/img/course/library.png" alt="">
                                </div>
                                <div class="fac-text">
                                    <h3>Library</h3>
                                </div>
                            </div>
                            <div class="fac-box">
                                <div class="fac-icon">
                                    <img src="assets/img/course/studio.png" alt="">
                                </div>
                                <div class="fac-text">
                                    <h3>Studio</h3>
                                </div>
                            </div>
                            <div class="fac-box">
                                <div class="fac-icon">
                                    <img src="assets/img/course/creative-space.png" alt="">
                                </div>
                                <div class="fac-text">
                                    <h3>Creative space</h3>
                                </div>
                            </div>
                            <div class="fac-box">
                                <div class="fac-icon">
                                    <img src="assets/img/course/ground.png" alt="">
                                </div>
                                <div class="fac-text">
                                    <h3>Ground</h3>
                                </div>
                            </div>
                            <div class="fac-box fac-box-last">
                                <div class="fac-icon">
                                    <img src="assets/img/course/workshop.png" alt="">
                                </div>
                                <div class="fac-text">
                                    <h3>Workshops</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** About Area Start ***** -->
        <section class="section about-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="about-head">
                                <span>About</span>
                                <h3>School of Architecture</h3>
                            </div>
                            <div class="about-para">
                                <p>One of the best B.Arch colleges in Kerala, the School of Architecture, started with a humble beginning in 2013 in the village Eattappilly, Mannathur P.O,Muvattupuzha, Ernakulam district and now is ranked as one of the topmost Architecture colleges in Ernakulam. Among the best Private Architecture colleges in Kerala, it aspires to establish a system of Quality Assurance which would on a continuous basis evaluate and monitor the quality of education and training imparted at the institute, improve the teaching-learning process, and ultimately, develop the institute as a Centre of Excellence. Privileged to be one of the top Architecture colleges in Kerala, we provide them ample opportunities for giving their expression to their inner literary, creative, and artistic talents as well as sportsmanship. We want our students to be well-educated and well-trained to become responsible citizens.</p>
                            </div>
                            <div class="about-btn">
                                <div class="brochure">
                                    <a href="">
                                        <div class="btn-icon"><i class="fas fa-file-download"></i></div>
                                        <div class="btn-text">
                                            <span>Download</span>
                                            <h4>Brochure</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="apply">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Testimonials Area Start ***** -->
        <section class="testi-area section ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="testi-head">What our Students say</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testi-slider owl-carousel">
                            <div class="single-testi">
                                <div class="testi-quote">
                                    <img src="assets/img/quote.png" alt="">
                                </div>
                                <div class="testi-para">
                                    <p>Its a privilege to be a part of MSA family. My overall experience in college has been beneficial because of our honorable Principal and teachers who made our campus life at MSA a remarkable, fun as well as a very knowledgeable one. Thankful to the mentors who supported us throughout the course.</p>
                                </div>
                                <div class="testi-name">
                                    <p>Anjana A Nair, <span>2013-2018 Batch</span></p>
                                </div>
                                <div class="testi-img">
                                    <img src="assets/img/testimonials/anjana.jpg" alt="">
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-quote">
                                    <img src="assets/img/quote.png" alt="">
                                </div>
                                <div class="testi-para">
                                    <p>I feel so honored to write this review about my college. My all inclusive experience to date has been astounding. The campus is provided with an established infrastructure and facilities. I am so thankful to the opportunities and experience I had been given in the college.</p>
                                </div>
                                <div class="testi-name">
                                    <p>Abin Varghese , <span>2015-2020 Batch</span></p>
                                </div>
                                <div class="testi-img">
                                    <img src="assets/img/testimonials/abinvarghese.jpg" alt="">
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-quote">
                                    <img src="assets/img/quote.png" alt="">
                                </div>
                                <div class="testi-para">
                                    <p>I believe the core concept that defines an institute is the collective knowledge, bequeathed by its teachers and experienced by its students over their time there. The School of Architecture, Mookambika Technical Campus taught me that. From a kid that knew absolutely zilch about Architecture than the mere word itself.</p>
                                </div>
                                <div class="testi-name">
                                    <p>Rishi Govind  , <span>2016-2021 Batch</span></p>
                                </div>
                                <div class="testi-img">
                                    <img src="assets/img/testimonials/rishi.jpg" alt="">
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-quote">
                                    <img src="assets/img/quote.png" alt="">
                                </div>
                                <div class="testi-para">
                                    <p>Mookambika School of Architecture is one of the premier institutes to study B. Arch in Kerala. Here they provide ample opportunities to learn through architectural theories as well as practical learning.</p>
                                </div>
                                <div class="testi-name">
                                    <p>Sara Jose , <span>2016-2021 Batch</span></p>
                                </div>
                                <div class="testi-img">
                                    <img src="assets/img/testimonials/sara.jpg" alt="">
                                </div>
                            </div>
                            <!--<div class="single-testi">
                                <div class="testi-quote">
                                    <img src="assets/img/quote.png" alt="">
                                </div>
                                <div class="testi-para">
                                    <p>The time I spent at Mookambika College of Pharmaceutical Sciences and Research was great and memorable. The mentors helped us to improve our Academic as well as interpersonal skills. So, it’s a promise of great experience from the faculty and really proud to being the part of the institution. I have gained a lot of memories that can cherish our lifelong.</p>
                                </div>
                                <div class="testi-name">
                                    <p>Arathy Babu , <span>2016-2020 Batch</span></p>
                                </div>
                                <div class="testi-img">
                                    <img src="assets/img/testimonials/ararthy.jpg" alt="">
                                </div>
                            </div>-->
                            <!--<div class="single-testi">
                                <div class="testi-quote">
                                    <img src="assets/img/quote.png" alt="">
                                </div>
                                <div class="testi-para">
                                    <p>I have had the privilege to be in the first batch of B.Pharm and it gives me great pleasure to say with pride that I have completed my graduation at MCPSR. The four years spend here were splendid & had helped me to grow better professionally & personally. I would like to thank the Management, the Principal  and all faculties & staff for making me a 'Better Person’.</p>
                                </div>
                                <div class="testi-name">
                                    <p>Adithya K Dharan , <span>2016-2020 Batch</span></p>
                                </div>
                                <div class="testi-img">
                                    <img src="assets/img/testimonials/adithya.jpg" alt="">
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Client Area Start ***** -->
        <section class="cleint-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="client-slider owl-carousel">
                            
                            <div class="single-client">
                                <div class="client-box">
                                    <img src="assets/img/clients/solidz.png" alt="">
                                </div>
                            </div>
                            <div class="single-client">
                                <div class="client-box">
                                    <img src="assets/img/clients/shibusali.png" alt="">
                                </div>
                            </div>
                            <div class="single-client">
                                <div class="client-box">
                                    <img src="assets/img/clients/holy.png" alt="">
                                </div>
                            </div>
                            <div class="single-client">
                                <div class="client-box">
                                    <img src="assets/img/clients/s2.png" alt="">
                                </div>
                            </div>
                            <div class="single-client">
                                <div class="client-box">
                                    <img src="assets/img/clients/01-hites.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Gallery Area Start ***** -->
        <section class="gallery-area section">
            <div class="bg-top bg-top-full"></div>
            <div class="bg-bottom bg-bottom-full"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/01.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/01.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/02.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/02.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/03.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/03.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/04.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/04.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/05.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/05.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/06.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/06.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/07.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/07.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/08.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/08.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/09.jpg" alt="">
                            <div class="gallery-overlay">
                                <a href="assets/img/gallery/09.jpg" data-fancybox="images"><i class="fas fa-images"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Enquiry Area Start ***** -->
        <section class="section enquiry-area ptb_50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="enq-head">
                            <h1>Enquiry</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="contact-box text-center">
                            <form id="contact-form" name="form2" method="post" action="email.php">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" name="esource" value="<?php echo $source;?>">
                                            <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                            <input type="submit" class="form-control" value="submit" name="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-sec">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="footer-ad">
                                        <p>School of Architecture, <br>
                                            Mookambika Technical Campus <br>
                                            Ambika Nagar, Mannathur P O <br>
                                            Muvattupuzha, Ernakulam Dist, <br>
                                            Kerala - 686 667</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-phone">
                                        <h3>Phone:</h3>
                                        <p><a href="tel:+917558942222">755-894-2222</a></p>
                                        <p><a href="tel:+918893914345">889-391-4345</a></p>
                                        <p><a href="tel:+918921373912">892-137-3912</a></p>
                                    </div>
                                </div>
                                <!--<div class="col-md-4">
                                    <div class="social-icons">
                                        <div><h3>Follow Us</h3></div>
                                        <div>
                                            <ul class="social">
                                                <li>
                                                    <a href="" target="_blank" class="text-white-50"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="" class="text-white-50"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="" class="text-white-50"><i class="fab fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="last-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copy-right">
                            <p>&copy; 2021 School of Architecture,MTC. All Rights Reserved <a href="http://www.theviralmafia.com/?utm_source=mookambika" target="_blank"> <img src="assets/img/logo/viralmafia.svg"></a> | <a href="#" data-toggle="modal" data-target="#myModal3">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog log-sign modal-mookambika" role="document">
                                <div class="col-lg-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <h4>Limited Seats Only</h4>
                                        <h3>Get A <span>Free</span> <br> Consultation</h3>
                                        <h4>Our consultant will get in touch with you</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal" aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Enquire Now</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log" id="profile2">
                                                                <form name="form3" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource" value="<?php echo $source;?>">
                                                                                <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                                                                <input type="submit" class="form-control" value="Submit" name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Right Side Bottom Fixed Buttons -->
    <div class="cont_link_box">
        <a id="" href="tel:+917558942222" class="callnow_inte" target="">
        <i class="fas fa-phone-alt" aria-hidden="true"></i>
        </a>
        <a id="" href="https://wa.me/+917558942222" class="whatsapp_inte" target="_blank">
        <i class="fab fa-whatsapp"></i>
        </a>
    </div> 

    <!-- Privacy popup -->
    <div class="modal fade popsec onload_pop" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close pop_button" data-dismiss="modal" aria-label="Close"></button>
                        <div class="privacy_onload">

                            <div class="pop-privacy-box">

                                <h4>Privacy Policy</h4>

                                <p>This privacy policy applies to the website( name). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                                <h4>Cookies Policy</h4>

                                <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                            </div>

                        </div>    
                        
                    </div>

                </div>
            </div>
    </div>


    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="#" data-toggle="modal" data-target="#myModal3">Learn more</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>
    <!-- END Bootstrap-Cookie-Alert -->





    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function() {
                    $("#exampleModal0").modal('show');
                }, 7000);
            });
    </script>

</body>

</html>