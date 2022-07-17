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
        
        $to = "info@impact-enterprises.co";
        $body = "";
        
        $body .= "From: ".$name. "\r\n";
        $body .= "Email: ".$email. "\r\n";
        $body .= "Message: ".$message. "\r\n";
        $body .= "Phone: ".$phone. "\r\n";
        
        mail($to,$subject,$body);
        
        echo '<script>alert("Email Sent Successful")</script>';    
        header('index.php');
    }
}
?>
<?php include 'header.php'; ?>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
            
            <!-- Page Wrap -->
            <div class="page" id="top">
                
                <!-- navigation -->
                <?php include 'nav.php'; ?>
                
                <!-- main -->
                <main id="main">    

                    <!-- home section -->
                   <!-- Fullwidth Slider -->

                    <div class="home-section fullwidth-slider bg-dark light-content" id="home">
                        <!-- Slide Item -->
                        <section class="home-section bg-scroll bg-dark-alfa-50 light-content" data-background="images/full-width-images/section-bg-3.jpg">
                            <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100">
                                
                                <!-- Hero Content -->
                                <div class="home-content">
                                    <h2 class="hs-line-7 mb-30 mb-xs-40 wow fadeInUpShort" data-wow-delay=".1s">Impact Enterprises</h2>
                                    <h1 class="hs-line-4 mb-90 mb-xs-20 wow fadeInUpShort" data-wow-delay=".2s">Tax Consultant, General Order Supplier, Website Development and Event Management</h1>
                                </div>
                                <!-- End Hero Content -->
                                
                            </div>
                        </section>
                        <!-- End Slide Item -->
                        
                        <!-- Slide Item -->
                        <section class="home-section bg-scroll bg-dark-alfa-50 light-content" data-background="images/full-width-images/section-bg-1.jpeg">
                            <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100">
                                
                                <!-- Hero Content -->
                                <div class="home-content">
                                    <h2 class="hs-line-7 mb-60 mb-xs-40">Tax Consultancy</h2>
                                </div>
                                <!-- End Hero Content -->
                                
                            </div>
                        </section>
                        <!-- End Slide Item -->
                        
                        <!-- Slide Item -->
                        <section class="home-section bg-scroll bg-dark-alfa-50 light-content" data-background="images/full-width-images/section-bg-19.jpg">
                            <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100">
                                
                                <!-- Hero Content -->
                                <div class="home-content">
                                    <h2 class="hs-line-7 mb-60 mb-xs-40">General order Supplier</h2>
                                </div>
                                <!-- End Hero Content -->
                                
                            </div>
                        </section>
                        <!-- End Slide Item -->

                        <!-- Slide Item -->
                        <section class="home-section bg-scroll bg-dark-alfa-50 light-content" data-background="images/full-width-images/section-bg-4.jpg">
                            <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100">
                                
                                <!-- Hero Content -->
                                <div class="home-content">
                                    <h2 class="hs-line-7 mb-60 mb-xs-40">Website Development</h2>
                                </div>
                                <!-- End Hero Content -->
                                
                            </div>
                        </section>
                        <!-- End Slide Item -->

                        <!-- Slide Item -->
                            <section class="home-section bg-scroll bg-dark-alfa-50 light-content" data-background="images/full-width-images/section-bg-6.jpg">
                            <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100">
                                
                                <!-- Hero Content -->
                                <div class="home-content">
                                    <h2 class="hs-line-7 mb-60 mb-xs-40">Event Management</h2>
                                </div>
                                <!-- End Hero Content -->
                            </div>
                        </section>
                        <!-- End Slide Item -->
                    </div>
                    <!-- End Fullwidth Slider -->
                    
                    <!-- about section -->
                    <!-- About Section -->
                        <section class="page-section" id="about">
                            <div class="container relative">
                                
                                <div class="mb-140 mb-sm-70">
                                    <div class="row section-text">
                                    
                                        <div class="col-md-12 col-lg-4 mb-md-50 mb-xs-30">
                                            <div class="lead-alt wow linesAnimIn" data-splitting="lines">
                                                About Impact Enterprises.
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-lg-4 mb-sm-50 mb-xs-30 wow linesAnimIn" data-splitting="lines">
                                        Impact Enterprises, a dynamic outfit, formed by two professionals in August, 2014 and started its business from Quetta.
                                        We have already expanded our team and services to achieve new heights, standards and goals. Our firm is organized as under.
                                        </div>
                                        
                                        <div class="col-md-6 col-lg-4 mb-sm-50 mb-xs-30 wow linesAnimIn" data-splitting="lines">
                                        We work to satisfy our customers to their demands by putting our best strength and resources.
                                        We endeavor to provide cost efficient procurement on a larger scale, straight from the source solutions and services in the most demanding environments where lead times and supply locations are challenging.
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="row">
                                    
                                    <!-- Team item -->
                                    <div class="col-md-4 mb-xs-30">
                                        <div class="team-item-wrap wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1.2s">
                                            <div class="team-item-decoration" style="background-image: url(images/team/team-decoration-1.jpg);"></div>
                                            <div class="team-item">
                                                <div class="team-item-image">
                                                    <img src="images/team/team-1.jpg" alt=""/>
                                                    <div class="team-item-detail">
                                                        <div class="team-social-links">
                                                            <a href="#" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">Facebook profile</span></a>
                                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">Twitter profile</span></a>
                                                            <a href="https://www.linkedin.com/in/fawad-ahmed-98715510/" target="_blank"><i class="fab fa-linkedin"></i><span class="sr-only">LinkedIn profile</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="team-item-descr">
                                                    <div class="team-item-name">
                                                        Fawad Ahmed
                                                    </div>
                                                    <div class="team-item-role">
                                                        Chief Executive Officer
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Team item -->
                                    
                                    <!-- Team item -->
                                    <div class="col-md-4 mb-xs-30">
                                        <div class="team-item-wrap wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.2s">
                                            <div class="team-item-decoration" style="background-image: url(images/team/team-decoration-1.jpg);"></div>
                                            <div class="team-item">
                                                <div class="team-item-image">
                                                    <img src="images/team/team-2.jpg" alt="" />
                                                    <div class="team-item-detail">
                                                        <div class="team-social-links">
                                                            <a href="#" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">Facebook profile</span></a>
                                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">Twitter profile</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="team-item-descr">
                                                    <div class="team-item-name">
                                                        AsadUllah Khan
                                                    </div>
                                                    <div class="team-item-role">
                                                        Director
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Team item -->
                                    
                                    <!-- Team item -->
                                    <div class="col-md-4 mb-xs-30">
                                        <div class="team-item-wrap wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                                            <div class="team-item-decoration" style="background-image: url(images/team/team-decoration-1.jpg);"></div>
                                            <div class="team-item">
                                                <div class="team-item-image">
                                                    <img src="images/team/team-3.jpg" alt="" />
                                                    <div class="team-item-detail">
                                                        <div class="team-social-links">
                                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">Twitter profile</span></a>
                                                            <a href="#" target="_blank"><i class="fab fa-linkedin"></i><span class="sr-only">LinkedIn profile</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="team-item-descr">
                                                    <div class="team-item-name">
                                                        Engr. Asfand Afridi
                                                    </div>
                                                    <div class="team-item-role">
                                                        Website Developer
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Team item -->
                                    
                                </div>
                            
                            </div>
                        </section>
                        <!-- End About Section -->
                    
                    <!-- Divider -->
                    <hr class="mt-0 mb-0" />
                    <!-- End Divider -->
                    
                    <!-- services section -->
                    <!-- Services Section -->
                    <section class="page-section" id="services">
                        <div class="container relative">
                            
                            <div class="text-center mb-80 mb-sm-50">
                                <h2 class="section-title">Our Services</h2>
                                <p class="section-title-descr">
                                    We provide dynamic outfits.
                                </p>
                            </div>
                            
                            <!-- Services Grid -->
                            <div class="row services-grid">
                                
                                <!-- Services Item -->
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="services-item text-center wow fadeIn" data-wow-delay=".0s" data-wow-duration="1.5s">
                                        <div class="services-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                                <path d="M13.5 20c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-10.551 4c-.598 0-2.429-1.754-2.747-4.304-.424-3.414 2.124-5.593 4.413-5.87.587-1.895 2.475-4.684 6.434-4.77.758-1.982 3.409-4.507 6.84-3.186 1.647.634 3.101 2.101 3.705 3.737.231.624-.71.965-.937.347-.51-1.378-1.737-2.615-3.127-3.151-2.577-.99-4.695.731-5.422 2.298 1.107.12 2.092.455 2.755.889.909.594 1.473 1.558 1.508 2.577.031.889-.33 1.687-.991 2.187-.654.496-1.492.643-2.298.404-.966-.286-1.748-1.076-2.143-2.169-.287-.793-.384-1.847-.178-2.921-3.064.185-4.537 2.306-5.075 3.742 1.18.102 2.211.574 2.831 1.012.959.676 1.497 1.6 1.513 2.599.015.859-.363 1.664-1.011 2.155-.608.46-1.535.599-2.363.348-.961-.289-1.7-1.041-2.079-2.118-.255-.723-.375-1.776-.204-2.919-1.631.361-3.512 1.995-3.178 4.685.18 1.448 1.008 2.888 2.015 3.502.43.261.242.926-.261.926zm10.551-1c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1zm8.011-6.801l2.489.459-1.744 1.833.333 2.509-2.283-1.092-2.283 1.092.333-2.509-1.744-1.833 2.489-.459 1.205-2.225 1.205 2.225zm-1.759.897l-1.143.21.801.843-.153 1.152 1.049-.501 1.049.501-.153-1.152.801-.843-1.143-.21-.554-1.022-.554 1.022zm-14.345-2.3c-.202 1.024-.128 1.993.113 2.678.347.984.966 1.355 1.424 1.492.604.183 1.175.036 1.472-.187.388-.294.624-.808.614-1.34-.011-.673-.398-1.313-1.09-1.801-.545-.385-1.479-.803-2.533-.842zm6.373-4.716c-.226 1.018-.11 1.99.099 2.569.287.79.828 1.356 1.486 1.55.501.148 1.014.06 1.411-.242.398-.301.615-.795.596-1.355-.025-.705-.409-1.353-1.056-1.775-.511-.334-1.448-.657-2.536-.747zm-5.812-7.369l3.032.558-2.124 2.234.405 3.057-2.781-1.331-2.781 1.331.405-3.057-2.124-2.234 3.032-.558 1.468-2.711 1.468 2.711zm-2.285.897l-1.686.31 1.182 1.243-.226 1.7 1.547-.74 1.547.74-.226-1.7 1.182-1.243-1.686-.31-.817-1.508-.817 1.508zm17.817-3.608c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5zm0 4c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5z"/>
                                            </svg>
                                        </div>
                                        <h3 class="services-title">Tax Consultancy</h3>
                                        <div class="services-descr">
                                        Tax consulting helps people make informed decisions about tax-related issues. Tax consultants use their expertise to help clients comply with tax regulations and take advantage of adjustments, deductions, and credits that let them keep more of their money.
                                        </div>
                                
                                    </div>
                                </div>
                                <!-- End Services Item -->
                                
                                <!-- Services Item -->
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="services-item text-center wow fadeIn" data-wow-delay=".1s" data-wow-duration="1.5s">
                                        <div class="services-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                                <path d="M5 22h4v-3h-9v-18h24v18h-10v3h4v1h-13v-1zm5-3v3h3v-3h-3zm13-17h-22v16h22v-16z"/>
                                            </svg>
                                        </div>
                                        <h3 class="services-title">Web Application Development</h3>
                                        <div class="services-descr">
                                            Full-cycle & custom web application development with UI/UX web design.
                                            With our years of website production and experience, we are ready to deliver the perfect web design and development solutions.
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- End Services Item -->
                                
                                <!-- Services Item -->
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="services-item text-center wow fadeIn" data-wow-delay=".2s" data-wow-duration="1.5s">
                                        <div class="services-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                                <path d="M24 23h-20c-2.208 0-4-1.792-4-4v-15.694c.313-1.071 1.285-2.306 3-2.306 1.855 0 2.769 1.342 2.995 2.312l.005 1.688h18v18zm-1-17h-17v13s-.665-1-2-1c-1.104 0-2 .896-2 2s.896 2 2 2h19v-16zm-18-2.68c-.427-.971-1.327-1.325-2-1.32-.661.005-1.568.3-2 1.32v16.178c.394-1.993 2.245-2.881 4-2.401v-13.777zm15 15.68h-12v-10h12v10zm-8-9h-3v8h10v-4h-2v3h-1v-3h-3v3h-1v-7zm7 0h-6v3h6v-3z"/>
                                            </svg>
                                        </div>
                                        <h3 class="services-title">Construction & General Order Supplies</h3>
                                        <div class="services-descr">
                                            Our aim is to provide cost efficient construction / procurement on a larger scale, straight from the source & offer civil works / supply solutions in the most demanding environments where lead times and supply locations are challenging. 
                                        </div>
                                    
                                    </div>
                                </div>
                                <!-- End Services Item -->
                                
                                <!-- Services Item -->
                                <div class="col-sm-6 col-md-4 col-lg-4" style="margin-left: 33%;" >
                                    <div class="services-item text-center wow fadeIn" data-wow-delay=".0s" data-wow-duration="1.5s">
                                        <div class="services-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                                <path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z"/>
                                            </svg>
                                        </div>
                                        <h3 class="services-title">Event Management</h3>
                                        <div class="services-descr">
                                        We Provide project management to the creation and development of small and/or large-scale personal or corporate events such as festivals, conferences, ceremonies, weddings, formal parties, concerts, or conventions. It involves studying the brand, identifying its target audience, devising the event concept, and coordinating the technical aspects before actually launching the event.
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- End Services Item -->
                            </div>
                            <!-- End Services Grid -->
                        </div>
                    </section>
                    <!-- End Services Section -->
                    
                    <!-- Divider -->
                    <hr class="mt-0 mb-0"/>
                    <!-- End Divider -->
                    
                    <!-- Divider -->
                    <hr class="mt-0 mb-0"/>
                    <!-- End Divider -->
                    
                    <!-- Contact us -->
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
                                    <form class="form contact-form wow fadeInUpShort" data-wow-delay=".5s" id="contact_form" action="index.php" method="POST">
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
                    
                    <!-- Maps -->
                    <!-- <?//php include 'map.php'; ?> -->
                    
                </main>

<?php include 'footer.php'; ?>