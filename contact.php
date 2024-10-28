<!doctype html>
<html class="no-js" lang="zxx">

<head>
<?php include 'header.php';?>

</head>

<body>

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-plumbing-service">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Contact Info Area  
==============================-->
    <div class="space-top pb-5 mb-4">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4">
                    <div class="contact-feature">
                        <div class="contact-feature_icon">
                            <img src="assets/img/icon/contact_2_1.svg" alt="icon">
                        </div>
                        <span class="contact-feature_subtitle">OUR OFFICE LOCATION</span>
                        <h3 class="box-title">Ain El Aouda, Morocco</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-feature bg-theme">
                        <div class="contact-feature_icon">
                            <img src="assets/img/icon/contact_2_2.svg" alt="icon">
                        </div>
                        <span class="contact-feature_subtitle">Have A Question?</span>
                        <h3 class="box-title"><a href="tel:+212682267377">+2126 8226 7377</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-feature">
                        <div class="contact-feature_icon">
                            <img src="assets/img/icon/contact_2_3.svg" alt="icon">
                        </div>
                        <div class="contact-feature_content">
                            <span class="contact-feature_subtitle">Email Us On</span>
                            <h3 class="box-title"><a href="mailto:elictriplomb.as@gmail.com">info@plumer.com</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Contact Area  
==============================-->


<!-- ============================ test email by help googlr app scripts-->
<form id="myForm" method="POST" >
        <div class="space-bottom">
                <div class="container">
                    <div class="bg-smoke bg-bottom-right" data-bg-src="assets/img/bg/contact_bg_2.png">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-4">
                                <div class="quote-form-box bg-transparent">
                                    <h4 class="form-title text-center">Get A <span class="text-theme">Free</span> Quote</h4>
                                        <form  method="POST" class="contact-form ajax-contact">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name *"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address *"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number *"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Your Address Location *"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <select name="subject" id="subject" class="form-select *" required>
                                                        <option value="" disabled selected hidden>Select Subject</option>
                                                        <option value="AC Installation">AC Installation</option>
                                                        <option value="Plumbing Service">Plumbing Service</option>
                                                        <option value="AC Repairing">AC Repairing</option>
                                                        <option value="Dust Cleaning">Dust Cleaning</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-12">
                                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message *"  required></textarea>
                                                    <i class="far fa-pencil"></i>
                                                </div>
                                                <div class="form-btn col-12">
                                                    <!-- <button class="themeholy-btn btn-fw">Submit Now</button> -->
                                                    <button class="themeholy-btn btn-fw" type="button" onclick="sendEmail()">Submit Now</button>
                                                    <div id="response-message" style="margin-top: 10px; color: red;"></div> <!-- Message display area -->
                                                </div>
                                            </div>
                                            <p class="form-messages mb-0 mt-3"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-sec">
                    <!-- <iframe src="https://maps.app.goo.gl/gvAxDjt7MYGQ4x7y7" allowfullscreen="" loading="lazy"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24276.971562434548!2d-6.816127629632642!3d33.807016747500114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sma!4v1726502674920!5m2!1sen!2sma" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
    </form>
<!-- ====== -->

<!-- ============================ -->


    <?php include 'footer.php';?>

</body>

</html>