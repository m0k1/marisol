<!-- SUB BANNER -->
<section class="section-sub-banner awe-parallax bg-9">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
              &nbsp;
            </div>
        </div>

    </div>

</section>
<!-- END / SUB BANNER -->

<!-- CONTACT -->
<section class="section-contact">
    <div class="container">
        <div class="contact">
            <div class="row">

                <div class="col-md-6 col-lg-5">

                    <div class="text">
                        <h2><?php echo $langs['contact']; ?></h2>
                        <p><?php echo $langs['contact_intro']; ?></p>
                        <ul>
                            <li><i class="icon hillter-icon-location"></i> Zrtava Fasizma 136, 85310 Budva, Montenegro</li>
                            <li><i class="icon hillter-icon-phone"></i> +49 176 6789 5189</li>
                            <li><i class="icon fa fa-envelope-o"></i> office@villa-marisol.me</li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-6 col-lg-6 col-lg-offset-1">
                    <div class="contact-form">
                        <form id="send-contact-form" action="/api.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="field-text"  name="name" placeholder="<?php echo $langs['name']; ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="field-text" name="email" placeholder="<?php echo $langs['email']; ?>">
                                </div>
                                <div class="col-sm-12">
                                    <textarea cols="30" rows="10" name="message"  class="field-textarea" placeholder="<?php echo $langs['message_intro']; ?>"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="awe-btn awe-btn-13"><?php echo $langs['send']; ?></button>
                                </div>
                            </div>
                            <div id="contact-content"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END / CONTACT -->

<!-- MAP -->
<section class="section-map">
    <div class="contact-map">
        <div id="map" data-locations="42.291301,18.849841" data-center="42.291301,18.849841"></div>
    </div>
</section>
<!-- END / MAP -->
