
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
                    <?php include 'home.php'; ?>
                    
                    <!-- about section -->
                    <?php include 'about.php'; ?>
                    
                    <!-- Divider -->
                    <hr class="mt-0 mb-0" />
                    <!-- End Divider -->
                    
                    <!-- services section -->
                    <?php include 'service.php'; ?>

                    <!-- call Action section -->
                    <?php include 'callAction.php'; ?>

                    <!-- Portfolio -->
                    <?php include 'portfolio.php'; ?>

                    <!-- process -->
                    <?php include 'process.php'; ?>
                    
                    <!-- Divider -->
                    <hr class="mt-0 mb-0"/>
                    <!-- End Divider -->
                    
                    <!-- Why Us -->
                    <?php include 'whyUs.php'; ?>
                    
                    <!-- Divider -->
                    <hr class="mt-0 mb-0"/>
                    <!-- End Divider -->
                    
                    <!-- testimonials section -->
                    <?php include 'testimonial.php'; ?>
                    
                    <!-- Contact us -->
                    <?php include 'contactUs.php'; ?>
                    
                    <!-- Maps -->
                    <?php include 'map.php'; ?>
                    
                </main>

<?php include 'footer.php'; ?>