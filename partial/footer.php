
        <!-- FOOTER -->
        <footer id="footer">


            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="/<?php if($lang != DEFAULT_LANG) echo $lang; ?>"><img src="/images/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="hillter-icon-location"></i> Zrtava Fasizma 136, 85310 Budva, Montenegro</p>
                                        <p><i class="hillter-icon-phone"></i> +49 176 6789 5189</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:office@villa-marisol.me">office@villa-marisol.me</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">&nbsp;</h4>
                                <ul>
                                    <?php if ($lang == DEFAULT_LANG){?>
                                    <li><a href="/"><?php echo $langs['home']; ?></a></li>
                                    <li><a href="/about"><?php echo $langs['about']; ?></a></li>
                                    <li><a href="/gallery"><?php echo $langs['gallery']; ?></a></li>
                                    <?php }else{ ?>
                                    <li><a href="/<?php echo $lang; ?>"><?php echo $langs['home']; ?></a></li>
                                    <li><a href="/<?php echo $lang; ?>/about"><?php echo $langs['about']; ?></a></li>
                                    <li><a href="/<?php echo $lang; ?>/gallery"><?php echo $langs['gallery']; ?></a></li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">&nbsp;</h4>
                                <ul>
                                  <% if (page.lang == DEFAULT_LANG){%>
                                  <li><a href="/budva"><?php echo $langs['budva']; ?></a></li>
                                  <li><a href="/guestbook"><?php echo $langs['guestbook']; ?></a></li>
                                  <li><a href="/contact"><?php echo $langs['contact']; ?></a></li>
                                  <% }else{%>
                                 <li><a href="/<?php echo $lang; ?>/budva"><?php echo $langs['budva']; ?></a></li>
                                  <li><a href="/<?php echo $lang; ?>/guestbook"><?php echo $langs['guestbook']; ?></a></li>
                                  <li><a href="/<?php echo $lang; ?>/contact"><?php echo $langs['contact']; ?></a></li>
                                  <% } %>

                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-3">
                            <div class="widget widget_tripadvisor">
                                <h4 class="widget-title">Tripadvisor</h4>
                                <div class="tripadvisor">
                                    <p><?php echo $langs['hotel_reviews']; ?></p>
                                    <img src="/images/tripadvisor.png" alt="">
                                </div>
                            </div>
                            <a href="http://www.holidaycheck.de/h1443400"><img src="/images/Logo_RoHC_2016.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2016 Villa Marisol Deluxe - All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script src="/js/lib/jquery-1.11.0.min.js"></script>
    <script src="/js/lib/jquery-ui.min.js"></script>
    <script src="/js/lib/bootstrap.min.js"></script>
    <script src="/js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANtIhZo_kGcNqm7TRffaZbRDAhOo6w8kg"></script>
    <script src="/js/lib/isotope.pkgd.min.js"></script>
    <script src="/js/lib/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/lib/jquery.themepunch.tools.min.js"></script>
    <script src="/js/lib/owl.carousel.js"></script>
    <script src="/js/lib/jquery.appear.min.js"></script>
    <script src="/js/lib/jquery.countTo.js"></script>
    <script src="/js/lib/jquery.countdown.min.js"></script>
    <script src="/js/lib/jquery.parallax-1.1.3.js"></script>
    <script src="/js/lib/jquery.magnific-popup.min.js"></script>
    <script src="/js/lib/SmoothScroll.js"></script>
    <!-- validate -->
    <script src="/js/lib/jquery.form.min.js"></script>
    <script src="/js/lib/jquery.validate.min.js"></script>

    <!-- Custom jQuery -->
    <script src="/js/scripts.js"></script>
    <script src="/js/UpdateWeather2.js"></script>
</body>
</html>
