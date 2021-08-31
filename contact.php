<!-- INCLUEING-HEADER  -->
<?php include "header.php"; ?>

<main id="college.php">
    <!-- INCLUEING-NAVBAR  -->
    <?php include "navbar.php"; ?>

    <!-- SECTTION ONE (FORM AREA) -->
    <section id="contact-section-1">
        <div class="container contact-body">
            <h1 class="text-center">Have a questatin?</h1>
            <p class="text-center">We’re here to help and answer any question <br> you might have. We look forward to
                hearing
                from you </p>
            <div class="form-area">
                <div class="row">
                    <!-- FORM IMAGE -->
                    <div class="col-md-6 form-img-area">
                        <img class="form-img" src="img/background/mail-icon-1.png" alt="">
                    </div>

                    <div class="col-md-6 mail-from-area">
                        <!-- BOOTSTRAP FORM START  -->
                        <form>
                            <div class="mb-3">
                                <input type="email" placeholder="Enter your name" class="form-control singel-input"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Enter your subject" class="form-control singel-input">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Enter your message"
                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </form>
                        <!-- BOOTSTRAP FORM START  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
<?php include "footer.php"; ?>