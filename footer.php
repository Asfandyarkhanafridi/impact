            
            <!-- Footer -->
            <footer class="page-section bg-gray-lighter footer pb-100 pb-sm-50">
                <div class="container">
                    
                    <!-- Social Links -->
                    <div class="footer-social-links mb-90 mb-xs-40">
                        <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i> <span class="sr-only">Facebook profile</span></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i> <span class="sr-only">Twitter profile</span></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fab fa-vimeo-v"></i> <span class="sr-only">Vimeo profile</span></a>
                        <a href="#" title="Behance" target="_blank"><i class="fab fa-behance"></i> <span class="sr-only">Behance profile</span></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fab fa-pinterest"></i> <span class="sr-only">Pinterest profile</span></a>
                    </div>
                    <!-- End Social Links -->
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy">
                            <a href="index.html">© Rhythm 2021</a>.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            Made with love for great people.
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="link-to-top-icon"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Footer -->

        
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.viewport.mini.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/jquery.lazyload.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/morphext.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/all.js"></script>
        <script src="js/contact-form.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/objectFitPolyfill.min.js"></script>
        <script src="js/splitting.min.js"></script>   
        <script>
            // https://api.jquery.com/jQuery.ajax
            $.ajax({
                method: 'POST',
                url: 'https://formsubmit.co/ajax/info@impact-enterprises.co',
                dataType: 'json',
                accepts: 'application/json',
                data: {
                    name: "FormSubmit",
                    message: "I'm from Impact Enterprises"
                },
                success: (data) => console.log(data),
                error: (err) => console.log(err)
            });
        </script>
    </body>
</html>