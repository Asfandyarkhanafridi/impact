<?php

if(isset($_POST['email']) && $_POST['email'] != '')
{
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
    {
        $name = $_POST['name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $to = "masfandy9@gmail.com";
        $body = "";
        
        $body .= "From: ".$name. "\r\n";
        $body .= "Email: ".$email. "\r\n";
        $body .= "Message: ".$message. "\r\n";
        $body .= "Phone: ".$phone. "\r\n";
        
        mail($to,$subject,$body);
        
        echo '<script>alert("Email Sent Successful")</script>';    
        redirect('index.php');        
}
}
?>
<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container relative">
        
        <div class="text-center mb-80 mb-sm-50">
            <h2 class="section-title">Contact</h2>
            <p class="section-title-descr">
                We’re available for the new projects
            </p>
        </div>
        
        <div class="row mb-60 mb-xs-40">
            
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    
                    <!-- Phone -->
                    <div class="col-sm-6 col-lg-4 pb-20">
                        <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                            <div class="ci-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ci-title">
                                Call Us
                            </div>
                            <div class="ci-text">
                                +9203218002390
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->
                    
                    <!-- Address -->
                    <div class="col-sm-6 col-lg-4 pb-20">
                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".1s" data-wow-duration="1s">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ci-title">
                                Address
                            </div>
                            <div class="ci-text">
                            Wafa Road, Near Ismail Masjid, Quetta
                             </div>
                            <div class="ci-link">
                                <a href="https://goo.gl/maps/7Vw1PBhxx5BaXStr8" target="_blank">See on the Map</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->
                    
                    <!-- Email -->
                    <div class="col-sm-6 col-lg-4 pb-20">
                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="ci-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ci-title">
                                Email
                            </div>
                            <div class="ci-text">
                                info@impact-enterprises.co
                            </div>
                            <div class="ci-link">
                                <a href="mailto:info@impact-enterprises.co">Say Hello</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->
                  </div>
            </div>
         </div>
        
        <!-- Contact Form -->                            
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form class="form contact-form wow fadeInUpShort" data-wow-delay=".5s" id="contact_form" action="contactUs.php" method="POST">
                       <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="Enter your name" pattern=".{3,100}" required>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <!-- Company Name -->
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input type="text" name="company" id="company" class="input-lg round form-control" placeholder="Enter your company" pattern=".{5,100}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="Enter your email" pattern=".{5,100}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- phone -->
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" id="phone" class="input-lg round form-control" placeholder="Enter your phone" pattern=".{5,100}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="subject">Message Subject</label>
                                <input type="text" name="subject" id="subject" class="input-lg round form-control" placeholder="Enter your subject" pattern=".{3,100}" required>
                            </div>
                        </div>
                    </div>
                    <!-- Message -->
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="input-lg round form-control" style="height: 130px;" placeholder="Enter your message" required></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="" style="text-align: right;">
                            <!-- Send Button -->
                            <div class="text-end pt-10">
                                <button type="submit" class="submit_btn btn btn-mod btn-large btn-round">
                                    Submit Message
                                </button>
                            </div>
                        </div>
                    </div>
                   <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>
                </form>
             </div>
        </div>
        <!-- End Contact Form -->
    </div>
</section>
<!-- End Contact Section -->