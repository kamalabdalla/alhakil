<?php
        include("./include/header.php");
            ?>


    <?php
        include("./include/nav.php");
            ?>

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Quick Contact</h5>
                        </div>
                        <h1 class="display-5 mb-4">Have Questions? Don't Hesitate to Contact Us</h1>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat totam deserunt tempora. Tempore neque necessitatibus corporis error earum sint quae?</p>
                        <div class="d-flex border-bottom mb-4 pb-4">
                            <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                            <div class="ps-3">
                                <h5>Location</h5>
                                <p>123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-tty fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">Quick Contact</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Phone:</h6>
                                            <a href="#" class="fs-5 text-primary">+012 3456 7890</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Email:</h6>
                                            <a href="#" class="fs-5 text-primary">travisa@example.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-clone fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">Opening Hrs</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Mon - Friday:</h6>
                                            <a href="#" class="fs-5 text-primary">09.00 am to 07.00 pm</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Satday:</h6>
                                            <a href="#" class="fs-5 text-primary">10.00 am to 05.00 pm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <div class="me-4">
                                <div class="bg-light d-flex align-items-center justify-content-center" style="width: 90px; height: 90px; border-radius: 10px;"><i class="fas fa-share fa-3x text-primary"></i></div>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-secondary border-secondary me-2 p-0" href="">facebook <i class="fas fa-chevron-circle-right"></i></a>
                                <a class="btn btn-secondary border-secondary mx-2 p-0" href="">twitter <i class="fas fa-chevron-circle-right"></i></a>
                                <a class="btn btn-secondary border-secondary mx-2 p-0" href="">instagram <i class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Let’s Connect</h5>
                        </div>
                        <h1 class="display-5 mb-4">Send Your Message</h1>
                        <p class="mb-3">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form>
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="project" placeholder="Project">
                                        <label for="project">Your Project</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="office pt-5">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Worlwide Offices</h5>
                        </div>
                        <h1 class="display-5 mb-4">Explore Our Office Worldwide</h1>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-2.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Australia</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">+123.456.7890</a>
                                    <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                                    <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-1.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Canada</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">(012) 0345 6789</a>
                                    <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                                    <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-3.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">United Kingdom</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">01234.567.890</a>
                                    <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                                    <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-4.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">India</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">+123.45.67890</a>
                                    <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                                    <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-5 wow zoomIn" data-wow-delay="0.1s">
                            <div class="rounded h-100">
                                <iframe class="rounded w-100" 
                                style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        
        <?php
        include("./include/footer.php");
            ?>