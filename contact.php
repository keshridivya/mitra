<?php
include('header.php');
?>

<div class="load-wrapp loadhide">
<div class="page-loader6">
	<div class="spinner6"></div>
	<div class="txt6">Uploading Your Data, Please Wait<br>This Might take some time</div>
</div>
  </div>
<section class="page_breadcrumbs background_cover color_overlay section_padding_top_150 section_padding_bottom_100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class='text-white'>Contact</h2>
                <ol class="breadcrumb big-spacing darklinks">
                    <li> <a href="index.php ">
                            Home
                        </a> </li>/
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_75 section_padding_bottom_100">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_small"> <i class="rt-icon2-phone5"></i> </div>
                    <p> <span class="grey">Phone:</span> +91 86920 23982<br> 
                    <!-- <span class="grey">Fax:</span>
                        +12 345 678 9123 -->
                     </p>
                </div>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_small"> <i class="rt-icon2-location2"></i> </div>
                    <p><span class="grey">Office no.</span> 312/313,<br>
                  C Wing,Disma Complex,<br>Kalamboli. </p>
                </div>
            </div>
            <div class="col-sm-4 to_animate" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_small"> <i class="fa fa-envelope"></i> </div>
                    <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="4e262f3d262d2127200e2b362f233e222b602d2123"><span class="grey">Email: </span>info@mitraeducation.com</a>
                    </p>
                    <!-- <p> <a href="#" class="social-icon color-icon soc-twitter"></a> <a href="#"
                            class="social-icon color-icon soc-facebook"></a> <a href="#"
                            class="social-icon color-icon soc-google"></a> <a href="#"
                            class="social-icon color-icon soc-pinterest"></a> </p> -->
                </div>
            </div>
        </div>
        <div class="row topmargin_60">
            <div class="col-sm-12 to_animate cs_bg">
                <form class="contact-form1 columns_padding_5" id='contact-form' method="post">
                        <div class="col-sm-6">
                            <p class="form-group"> <label for="name">Full Name <span class="required">*</span></label>
                                <i class="fa fa-user blue" aria-hidden="true"></i> <input type="text"
                                    aria-required="true" size="30" value="" name="name" id="name" class="form-control"
                                    placeholder="Full Name"> </p>
                                    </div>
                        <div class="col-sm-6">
                            <p class="form-group"> <label for="email">Email address<span
                                        class="required">*</span></label> <i class="fa fa-envelope blue"
                                    aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value=""
                                    name="email" id="email" class="form-control" placeholder="Email Address"> </p>
                                    </div>
                        <div class="col-sm-6">
                            <p class="form-group"> <label for="subject">Subject<span class="required">*</span></label>
                                <i class="fa fa-flag blue" aria-hidden="true"></i> <input type="text"
                                    aria-required="true" size="30" value="" name="subject" id="subject"
                                    class="form-control" placeholder="Subject"> </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="form-group"> <label for="contact">Contact<span class="required">*</span></label>
                                <i class="fa fa-flag blue" aria-hidden="true"></i> <input type="text"
                                    aria-required="true" size="30" value="" name="contact" id="contact"
                                    class="form-control" placeholder="Contact"> </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="contact-form-message form-group"> <label for="message">Message</label>
                                <i class="fa fa-comment blue" aria-hidden="true"></i> <textarea aria-required="true"
                                    rows="3" cols="45" name="message" id="message" class="form-control"
                                    placeholder="Message"></textarea> </p>
                        </div>
                        
                    
                        <div class="col-sm-12 ">
                            <p class=" text-center topmargin_30"> <button type="submit"
                                    id="" name="contact_submit" class="theme_button button_submit">Send
                                    Message</button> </p>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>