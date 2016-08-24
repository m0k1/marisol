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



                <div class="col-md-6 col-lg-6 col-lg-offset-3">
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
