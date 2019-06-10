<?php get_header(); /* Tells WordPress to include header.php */ ?>



<div class="container-fluid contact">
    <div class="container">
        <div class="row">

            <section class="contactme col-md-7">
                <div class="contact-text">
                    <article id="contactform">
                        <h2>Get in Touch</h2>
                        <p>Email: info@my-domain.com</p>
                        <p>Phone: 123-456-7890</p>

                        <h2>Send Me a Message</h2>
                        <p>Feel free to reach out to place an order or ask any questions regarding my treats.</p>
                        <form>
                            <div>
                                <label class="name" for="fullname">Name (required)</label> <br />
                                <input type="text" name="fullname">
                            </div>
                            <div>
                                <label class="email" for="email">Email (required)</label> <br />
                                <input type="text" name="email">
                            </div>
                            <div>
                                <label class="message" for="message">Message</label> <br />
                                <textarea name="message" rows="4"></textarea>
                            </div>
                        </form>
                    </article>
                </div>
            </section> <!-- End of contact me-->


            <div class="girl-image col-md-5" id="home_right_1">
                <img src="http://localhost/wordpress/wp-content/themes/Teagans-theme/images/girl.png" class="girl" alt=" Teagan" />

            </div>
            <!-- End girl-imager-->

        </div><!-- end of row -->
    </div><!-- Container-->
</div><!-- End fluid contact-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>