<?php get_header(); /* Tells WordPress to include header.php */ ?>

<div id="myCarousel" class="carousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="http://localhost/wordpress/wp-content/themes/Teagans-theme/images/header1.jpg" alt="girl" class="img-responsive">
           >

        </div>

        <div class="item">
            <img src="http://localhost/wordpress/wp-content/themes/Teagans-theme/images/header2.jpg" alt="Dog biscuits" class="img-responsive">
        </div>

        <div class="item">
            <img src="http://localhost/wordpress/wp-content/themes/Teagans-theme/images/header3.jpg" alt="board" class="img-responsive">
        </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>


</div><!-- End of images slides -->
<!-- End of header-->


<div class="container-fluid aboutme">
    <div class="container">
        <div class="row">
            <section class="main_text">
                <h1> About Me</h1>
                <artcile class="Teagan">
                    <p> My name is Teagan Mason and I make and sell dog biscuits. I have a rare disability called Prader–Willi Syndrome however this does not define me. I love animals and caring for my dog, Smudge. You'll find me with Smudge most of the time. So follow me and learn more about my yummy dog biscuit creations.</p>
                    <button class="button2" onclick="window.location.href='#';">More Info</button>
                </artcile>


            </section><!-- main text-->

        </div><!-- row -->

    </div><!-- container-->

</div> <!-- End of about me -->


<div class="container-fluid Dogtreats">
    <div class="container">
        <div class="row">

            <div class="col-md-7"></div>



            <aside class=" col-md-5 sidebar">

                <section class="aside_elements">
                    <h2>Miss T's Dog Treats</h2>
                    <p>My dog treats are all healthy and homemade, made
                        primarily to give dogs a little happiness every day.<br><br>

                        My dog, Smudge, goes crazy for them and thinks they are
                        super tasty. It’s the love and care I have put in that will
                        make my treats your dog’s favourite to eat.</p>
                </section><!-- aside_elements-->
                <button class="button" onclick="window.location.href='#';">View All</button>
            </aside><!-- sidebar-->


        </div><!-- row-->
    </div><!-- container-->
</div><!-- dogtreats-->


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
                <img src=" http://localhost/wordpress/wp-content/themes/Teagans-theme/images/girl.png" class="girl" alt=" Teagan" />

            </div>
            <!-- End girl-imager-->

        </div><!-- end of row -->
    </div><!-- Container-->
</div><!-- End fluid contact-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>