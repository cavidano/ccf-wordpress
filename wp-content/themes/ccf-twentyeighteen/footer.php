<footer>

    <?php if( have_rows('footer_features', 'option') ): ?>

    <section class="row no-gutters" id="touts">

        <?php while( have_rows('footer_features', 'option') ): the_row();
    
        $image = get_sub_field('image');
        $link = get_sub_field('link');

        ?>

        <div class="featured-block col-lg-4">

            <div class="card">

                <div class="overlay-gradient-y-black">
                    <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>

                <div class="card-img-overlay d-flex p-md-3">
                    <div class="align-self-end">
                        <a class="btn btn-block btn-primary" href="<?php echo $link['url']; ?>" title="Resource Library"><?php echo $link['title']; ?></a>
                    </div>
                </div>

            </div>
            <!-- .card -->

        </div>

        <?php endwhile; ?>

    </section>
    
    <?php endif; /* footer_features */ ?>
    
    <div class="container-fluid wide" id="all-links">

        <div class="wide px-lg-2 py-6">

            <nav class="row">

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list">
                        <li>
                            <span class="font-weight-bold mb-2">What We Do</span>
                        </li>
                        <li>
                            <a href="#">Research</a>
                        </li>
                        <li>
                            <a href="#">Education</a>
                        </li>
                        <li>
                            <a href="#">Conservation</a>
                        </li>
                        <li>
                            <a href="#">International Cheetah Day</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list">
                        <li>
                            <span class="font-weight-bold mb-2">Who We Are</span>
                        </li>
                        <li>
                            <a href="#">Mission and Vision</a>
                        </li>
                        <li>
                            <a href="#">Dr. Laurie Marker</a>
                        </li>
                        <li>
                            <a href="#">Our Centre</a>
                        </li>
                        <li>
                            <a href="#">Staff and Board</a>
                        </li>
                        <li>
                            <a href="#">International Affiliates</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list">
                        <li>
                            <span class="font-weight-bold mb-2">Take Action</span>
                        </li>
                        <li>
                            <a href="#">Ways to Give</a>
                        </li>
                        <li>
                            <a href="#">Volunteer Locally</a>
                        </li>
                        <li>
                            <a href="#">Volunteer in Namibia</a>
                        </li>
                        <li>
                            <a href="#">Visit CCF</a>
                        </li>
                        <li>
                            <a href="#">Share</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list">
                        <li>
                            <span class="font-weight-bold mb-2">Learn</span>
                        </li>
                        <li>
                            <a href="#">Resource Library</a>
                        </li>
                        <li>
                            <a href="#">About Cheetahs</a>
                        </li>
                        <li>
                            <a href="#">Human Wildlife Conflict</a>
                        </li>
                        <li>
                            <a href="#">Illegal Pet Trade</a>
                        </li>
                        <li>
                            <a href="#">Habitat Loss</a>
                        </li>
                        <li>
                            <a href="#">CCF Videos</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list">
                        <li>
                             <span class="font-weight-bold mb-2">News</span>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Press Releases</a>
                        </li>
                        <li>
                            <a href="#">Press Kit</a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

                <div class="col-sm-10 col-lg-4 col-xl-2 mb-3 mb-xl-0 mx-auto">

                    <ul class="link-list">
                        <li>
                            <a href="#" title="Events">
                                <span class="font-weight-bold mb-2">Events</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="link-list px-0">
                        <li>
                            <a href="#" title="For Kids">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ccf-kids-logo.svg" alt="Placeholder">
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- .col-* -->

            </nav>
            <!-- .row -->

        </div>

    </div>

    <div class="container-fluid bg-light">

        <div class="wide px-lg-2 py-6">

            <div class="row">

                <div class="col-sm-10 col-lg-6 col-xl-3 mb-4 mb-xl-0 mx-auto">
                    <h5>Cheetah Conservation Fund</h5>
                    <p class="fs-md">Our Research and Education Centre is located in Otjiwarongo, Namibia. We encourage
                        visitors to see our facilities in person.</p>
                    <p class="fs-md"><a class="blended-link" href="/about-us/who-we-are/ccf-global.php">Come Join Us!</a></p>
                </div>
                <!-- .col -->

                <div class="col-sm-10 col-lg-6 col-xl-3 mb-4 mb-xl-0 mx-auto">

                    <h5>Where We Work</h5>
                    <p class="fs-md">Cheetah Conservation Fund is an international non-profit organization with fundraising
                        operations located in: Australia, Canada, Italy, United Kingdom, and United States, working
                        in cooperation with staff and partners around the world.</p>
                    <p class="fs-md">
                        <a class="blended-link" href="/about-us/who-we-are/ccf-global.php">Contact Us</a>
                    </p>

                </div>
                <!-- .col -->

                <div class="col-sm-10 col-lg-6 col-xl-3 mb-4 mb-xl-0 mx-auto">

                    <h5>Keep Up With the Cheetahs</h5>
                    <p class="fs-md">Never miss an update. Follow us on social media and recieve our newsletters.</p>

                    <ul class="link-list horizontal fs-lg">
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fab fa-instagram"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fab fa-youtube"></span>
                            </a>
                        </li>
                        <li>
                            <a class="text-body" href="#">
                                <span class="fab fa-pinterest"></span>
                            </a>
                        </li>
                    </ul>


                    <a class="btn btn-outline-dark" href="#">
                        <span class="far fa-envelope-open"></span>
                        <span class="mx-1">Join our Newletters</span>
                    </a>


                </div>
                <!-- .col -->

                <div class="col-sm-10 col-lg-6 col-xl-3 mx-auto">
                    <h5>Support CCF</h5>
                    <p class="fs-md">You can help save the cheetah from exinction!</p>

                    <div class="row matrix-border">

                        <div class="col-sm">
                            <a class="btn btn-block btn-primary" href="#" title="Donate">Donate</a>
                        </div>
                        <!-- .col -->

                        <div class="col-sm">
                            <a class="btn btn-block btn-primary" href="#" title="Sponsor a Cheetah">Sponsor a Cheetah</a>
                        </div>
                        <!-- .col -->

                    </div>
                    <!-- .row -->

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .wide -->

    </div>



    <div class="container-fluid bg-dark">
        <div class="wide py-2">
            <p class="fs-md text-white">
                <span class="d-block d-sm-inline-block">© 2019 Cheetah Conservation Fund</span>
                <span class="d-none d-sm-inline-block mx-1">•</span>
                <a class="blended-link" href="#">Privacy Policy</a>
            </p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>