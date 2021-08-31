<!-- INCLUDEING HEADER 
----------------------------------------- -->
<?php include "header.php"; ?>

<main id="home">

    <!-- INCLUDEING NAVBAR -->
    <?php include "navbar.php"; ?>

    <!-- SECITON ONE (HERO AREA) -->
    <section id="section-1">
        <div class="hero-area">
            <div class="content">
                <h1>Headway Engineering Institute</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium officiis <br> debitis
                    voluptas
                    reiciendis asperiores.</p>
                <div class="button_area">
                    <a href="gallery/gallery.html" class="button">Visit our Campus </a>
                </div>
            </div>
        </div>
    </section>
    <!-- SECITON ONE (HERO AREA) END-->

    <!-- ALERT AREA START  -->
    <div class="alart-section">
        <div class="alert alert-warning container" role="alert">
            <marquee behavior="scroll" scrollamount="6" direction="left">Lorem ipsum dolor sit amet consectetur
                adipisicing elit.
                Quos similique mollitia quaerat earum, fuga rem exercitationem expedita laboriosam non doloremque
                veritatis. Repudiandae optio quos eius reiciendis quasi sapiente recusandae at!</marquee>
        </div>
    </div>
    <!-- ALERT AREA END  -->

    <!--SECTION TWO START (DEPARTMENTS AREA)
    ------------------------------------------------->
    <section id="section-2">
        <div class="container">
            <h2 class="section_heading">DEPARTMENTS</h2>

            <!-- BOOTSTRAP CARD CUSTOMIZAION -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body card-1">
                            <img src="img/card-icons/computer.png" alt="">
                            <h5 class="card-title">Computer Engineering</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body card-2">
                            <img src="img/card-icons/electrical.png" alt="">
                            <h5 class="card-title">Electrical Engineering</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body card-3">
                            <img src="img/card-icons/civil.png" alt="">
                            <h5 class="card-title">Civil Engineering</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body card-4">
                            <img src="img/card-icons/sketch.png" alt="">
                            <h5 class="card-title">Architecture Engineering</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body card-5">
                            <img src="img/card-icons/tshirt.png" alt="">
                            <h5 class="card-title">Texstyle Engineering</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION THREE START (ABOUT COLLEGE)
    ------------------------------------------------->
    <section id="section-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 video_area">
                    <img src="img/vid-thumb/thumbnail.png" class="img-thumbnail" alt="...">
                </div>
                <div class="col-lg-6 content_area">
                    <h2>Limitless learning, more possibilities</h2>
                    <p>The University of Rochester is one of the country's top-tier research universities. Our
                        campuses are
                        home to 200 academic majors, more than 2,000 faculty and instructional staff, and some
                        10,000
                        students—approximately half of whom are women.</p>
                    <p>
                        Learning at the University of Rochester is also on a very personal scale. Rochester remains
                        one of
                        the smallest and most collegiate among top research universities, with smaller classes, a
                        low 10:1
                        student to teacher ratio, and increased interactions with faculty.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION FOUR START (FORM AREA)
    ------------------------------------------------->
    <section id="section-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="apply-content-area">
                        <h3>Are you interesded in engineering ?</h3>
                        <p>Join our academy <span>( Headway Engineering Instite )</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="apply-form-area">
                        <div class="login-box">
                            <h2>Apply Now</h2>
                            <form>
                                <div class="user-box">
                                    <input type="text" name="" required="">
                                    <label>First Name</label>
                                </div>
                                <div class="user-box">
                                    <input type="text" name="" required="">
                                    <label>Lest Name</label>
                                </div>
                                <div class="user-box">
                                    <input type="text" name="" required="">
                                    <label>Email Address</label>
                                </div>
                                <div class="user-box">
                                    <input type="password" name="" required="">
                                    <label>Chose Password</label>
                                </div>
                                <div class="user-box">
                                    <input type="password" name="" required="">
                                    <label>Confirm Password</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree with the terms
                                        and
                                        conditions</label>
                                </div>
                                <a class="submit-btn" type="submit" href="#"><span>Apply Now</span></a>

                                <a class="login_ancher" href="">I already have an account</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION FIVEE START (RECENT NEWS AREA)
    ------------------------------------------------->
    <section id="section-5">
        <div class="container">

            <!-- RECENT POSTS -->
            <h3 class="section_heading">RECENT NEWS</h3>
            <div class="post-section row">
                <div class="content_area col-md-8">
                    <a href="">Our University News</a>
                    <a href="">A hundred thousand grateful loves to your dear papa and mamma. Is your poor brother
                        recovered of
                        his rack-punch? Oh, dear! Oh, dear! How men should beware of wicked punch!</a>
                </div>
                <div class="button_area col-md-4">
                    <a href="">All New Posts</a>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- INCLUEING-FOOTER  -->
<?php include "footer.php"; ?>