<x-layout>

    <div class="main overflow-hidden">
        <x-header/>
        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white text-uppercase mb-3">Blog Single</h2>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white"
                                                               href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-uppercase text-white"
                                                               href="index.html">Pages</a></li>
                                <li class="breadcrumb-item text-white active">Blog - Blog Details Left Sidebar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Blog Area Start ***** -->
        <section id="blog" class="section blog-area ptb_100">
            <div class="container">
                <div class="row">
                    <x-aside/>
                    <div class="col-12 col-lg-9">
                        <!-- Single Blog Details -->
                        <article class="single-blog-details">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="#"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content digimax-blog p-3">
                                <!-- Meta Info -->
                                <div class="meta-info d-flex flex-wrap align-items-center py-2">
                                    <ul>
                                        <li class="d-inline-block p-2">By <a href="#">{{ $ad->owner }}</a></li>
                                        <li class="d-none d-md-inline-block p-2"><a href="#">05 Feb, 2020</a></li>
                                        <li class="d-inline-block p-2"><a href="#">2 Comments</a></li>
                                    </ul>
                                    <!-- Blog Share -->
                                    <div class="blog-share ml-auto d-none d-sm-block">
                                        <!-- Social Icons -->
                                        <div class="social-icons d-flex justify-content-center">
                                            <a class="bg-white facebook" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a class="bg-white twitter" href="#">
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a class="bg-white google-plus" href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Details -->
                                <div class="blog-details">
                                    <h3 class="blog-title py-3"><a href="#">{{ $ad->title }}</a></h3>
                                    <p class="d-none d-sm-block">{{ $ad->content }}</p>
                                </div>
                            </div>
                            <!-- Blog Comments -->
                            <div class="blog-comments p-3">
                                <!-- Admin -->
                                <div class="admin media py-4">
                                    <!-- Admin Thumb -->
                                    <div class="admin-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/avatar/avatar-1.png" alt="">
                                    </div>
                                    <!-- Admin Content -->
                                    <div class="admin-content media-body pl-3 pl-sm-4">
                                        <h4 class="admin-name mb-2"><a href="#">Junaid Hasan</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo eius nam facere
                                            enim, voluptas incidunt officiis molestiae, nostrum dolor? Fugit.</p>
                                    </div>
                                </div>
                                <!-- Comments -->
                                <div class="comments mt-4 mb-3">
                                    <!-- Comments Title -->
                                    <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Recent
                                        Comments</h3>
                                    <!-- Single Comments -->
                                    <div class="single-comments media p-4">
                                        <!-- Comments Thumb -->
                                        <div class="comments-thumb avatar-lg">
                                            <img class="rounded-circle" src="assets/img/avatar/avatar-2.png" alt="">
                                        </div>
                                        <!-- Comments Content -->
                                        <div class="comments-content media-body pl-3">
                                            <h5 class="d-flex mb-2">
                                                <a href="#">Jassica William</a>
                                                <a href="#" class="ml-auto">Reply</a>
                                            </h5>
                                            <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Facere optio ipsum maiores mollitia quisquam.</p>
                                            <p class="d-block d-lg-none">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <!-- Single Comments -->
                                    <div class="single-comments media p-4">
                                        <!-- Comments Thumb -->
                                        <div class="comments-thumb avatar-lg">
                                            <img class="rounded-circle" src="assets/img/avatar/avatar-3.png" alt="">
                                        </div>
                                        <!-- Comments Content -->
                                        <div class="comments-content media-body pl-3">
                                            <h5 class="d-flex mb-2">
                                                <a href="#">Md. Arham</a>
                                                <a href="#" class="ml-auto">Reply</a>
                                            </h5>
                                            <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Facere optio ipsum maiores mollitia quisquam.</p>
                                            <p class="d-block d-lg-none">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Contact -->
                            <div class="blog-contact p-3">
                                <!-- Contact Title -->
                                <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Post your
                                    Comments</h3>
                                <!-- Comment Box -->
                                <div class="contact-box comment-box">
                                    <form method="POST" action="#">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name"
                                                           placeholder="Name" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"
                                                           placeholder="Email" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" placeholder="Message"
                                                              required="required"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-bordered mt-3" type="submit">Send Message
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Blog Area End ***** -->

        <!--====== Footer Area Start ======-->
        <footer class="section footer-area">
            <!-- Footer Top -->
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title text-white text-uppercase mb-2">About Us</h3>
                                <ul>
                                    <li class="py-2"><a class="text-white-50" href="#">Company Profile</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Testimonials</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Careers</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Partners</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Affiliate Program</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title text-white text-uppercase mb-2">Services</h3>
                                <ul>
                                    <li class="py-2"><a class="text-white-50" href="#">Web Application</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Product Management</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">User Interaction Design</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">UX Consultant</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Social Media Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title text-white text-uppercase mb-2">Support</h3>
                                <ul>
                                    <li class="py-2"><a class="text-white-50" href="#">Frequently Asked</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Terms &amp; Conditions</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Privacy Policy</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Help Center</a></li>
                                    <li class="py-2"><a class="text-white-50" href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Footer Items -->
                            <div class="footer-items">
                                <!-- Footer Title -->
                                <h3 class="footer-title text-white text-uppercase mb-2">Follow Us</h3>
                                <p class="text-white-50 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Tenetur, quae.</p>
                                <!-- Social Icons -->
                                <ul class="social-icons list-inline pt-2">
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-google-plus"></i></a>
                                    </li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item px-1"><a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div
                                class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left text-white-50">&copy; Copyrights 2020 Digimax All rights
                                    reserved.
                                </div>
                                <!-- Copyright Right -->
                                <div class="copyright-right text-white-50">Made with <i class="fas fa-heart"></i> By <a
                                        href="#">Themeland</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->

        <!--====== Modal Search Area Start ======-->
        <div id="search" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 align-self-center">
                                <div class="row">
                                    <div class="col-12 pb-3">
                                        <h2 class="search-title mb-3">What are you looking for?</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus,
                                            dapibus sed imperdiet consectetur.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group">
                                        <input type="text" class="form-control" placeholder="Enter your keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group align-self-center">
                                        <button class="btn btn-bordered mt-3">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Search Area End ======-->

        <!--====== Modal Responsive Menu Area Start ======-->
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Responsive Menu Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

</x-layout>
