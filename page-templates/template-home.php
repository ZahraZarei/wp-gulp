<?php

/**
 * Template Name: Home Page Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<div class="home-banner">
    <div class="container">
        <h1 class="slogan">A Dining Experience</h1>
    </div>
</div>
<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="call">
                    <img class="call-to-action call-to-action-secondary" src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-1.png">
                    <a href="#" class="badge badge-bottom badge-accent">
                        Dinner Menu
                    </a>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="call">
                    <img class="call-to-action call-to-action-accent" src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-2.png">
                    <a href="#" class="badge badge-bottom badge-primary">
                        Lunch Menu
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="call">
                    <img class="call-to-action call-to-action-primary" src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-3.png">
                    <a href="#" class="badge badge-bottom badge-secondary">
                        Functions
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-welcome">
    <div class="container">
        <h2 class="welcome-header">
            <span>Welcome to </span>
            the BackBeach eating House
        </h2>
        <div class="row welcome-content">
            <div class="col-lg-8">
                <p class="tagline">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis necessitatibus recusandae fugit quas dolorum obcaecati rem beatae inventore,
                    velit magnam quisquam, commodi quibusdam omnis atque? Tempora rerum dicta repudiandae at.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis necessitatibus recusandae fugit quas dolorum obcaecati rem beatae inventore,
                    velit magnam quisquam, commodi quibusdam omnis atque? Tempora rerum dicta repudiandae at.</p>
            </div>
            <div class="col-lg-4"><a class="btn btn-primary" href="#">Read more</i></a></div>
        </div>

    </div>
</div>

<div class="home-call-to-action news">
    <div class="bg-image"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="call col-">
                <img class="call-to-action call-to-action-primary" src="<?php echo get_template_directory_uri(); ?>/img/news-placeholder.png">
                <a href="#" class="badge badge-top badge-op badge-secondary">
                    What's On
                </a>
                <div class="badge badge-bottom  badge-accent badge-op">
                    10.6.2020
                </div>
            </div>
            <div class="col-lg-6 news-body">
                <h2 class="news-header">Mothers's Day</h2>
                <p class="news-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis dolor facilis molestias esse quos fugit dolore sequi delectus dicta minima....
                </p>
                <a class="btn btn-primary" href="#">Read more</i></a>
            </div>
        </div>
    </div>
</div>

<div class="home-about">
    <div class="container">
        <h2 class="about-header">
            <span>Served fresh</span>
            from the paddock to the plates
        </h2>
        <div class="row welcome-content">
            <div class="col-lg-8">
                <p class="tagline">Lorem ipsum dolor,dipisicing elit. Corporis necessitatibus recusandae fugit quas dolorum obcaecati rem beatae inventore,
                    velit magnam quisquam, commodi dicta repudiandae at.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis necessitatibus recusandae fugit quas dolorum obcaecati rem beatae inventore,
                    velit magnam quisquam, commodi quibusdam rerum dicta repudiandae at.</p>
            </div>
            <div class="col-lg-4"><a class="btn btn-secondary" href="#">Read more</i></a></div>
        </div>

    </div>
</div>

<div class="testimonials">
    <!-- <div class="container">
        <div class="home-call-to-action">
            <div class="row">
                <div class="col-lg-4">
                    <div class="call">
                        <img class="call-to-action call-to-action-secondary" src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-1.png">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="call">
                        <img class="call-to-action call-to-action-accent" src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-2.png">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="call">
                        <img class="call-to-action call-to-action-primary" src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-3.png">
                    </div>
                </div>
            </div>
        </div>

    </div> -->

    <div class="testimonial">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <div class="testimonial-header">
                        <h2>Happy Customers</h2>
                    </div>
                    <div class="testimonial-body">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Delectus quasi quaerat repellendus tenetur atque incidunt neque.
                            Eos perferendis ab minus quibusdam, quis dolorum iusto corporis
                            facilis ad voluptas aliquid reiciendis?
                        </p>
                        <div class="testimonial-footer">
                            <h3>Saad Uilds</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="home-welcome subscribe">
    <div class="container">
        <h2 class="welcome-header">
            <span>Sign up</span>
            Subscribe to our newsletter
        </h2>
        <div class="welcome-content">


            <form action="#">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-3">
                        <input type="text" name="name" placeholder="Your Name">
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <input type="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="col-md-10 col-lg-4">
                        <button type="submit" class="btn btn-secondary"> subscribe</button>
                    </div>
                </div>

            </form>


        </div>

    </div>
</div>

<div class="home-welcome social">
    <div class="container">
        <h2 class="welcome-header">
            <span>Social</span>
            Follow Us on facebook & instagram
        </h2>
        <div class="social-content">

            <h3><i class="fa fa-facebook-square"></i>What's new on facebook</h3>
            <div class="row">
                <div class="col-md-7">
                    <img class="social-image" src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-1.png" alt="what's new on facebook">
                </div>
                <div class="col-md-5">
                    <div class="social-info">
                        <span><i class="fa fa-calendar"></i>Posted 31 Jun</span>
                        <span><i class="fa fa-thumbs-o-up"></i>24 likes</span>
                    </div>
                    <div class="social-text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam minima ratione quia voluptatem libero odio,
                            tenetur recusandae porro ea eum possimus cupiditate ut, voluptatum non sint placeat dignissimos provident architecto!
                        </p>
                    </div>
                    <a class="btn btn-primary" href="#">Read on facebook</i></a>
                </div>
            </div>


        </div>

        <div class="social-footer">
            <i class="fa fa-instagram"></i>
            <h2>

                @backbeachcafe
            </h2>
        </div>

    </div>
</div>


<div class="home-welcome contact">
    <div class="container">
        <h2 class="welcome-header">
            <span>Contact</span>
            Send us a message below
        </h2>
        <div class="welcome-content">
            <form action="#">
                <div class="contact-form">
                    <div class="name">
                        <input type="text" name="name" placeholder="Your Name">
                    </div>
                    <div class="phone">
                        <input type="text" name="phone" placeholder="Your Phone">
                    </div>
                    <div class="email">
                        <input type="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="message">
                        <textarea name="message" rows="3" placeholder="Your message"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-secondary"> Send </button>
                    </div>
                </div>

            </form>

            <div class="copy-right">
                <p><i>&COPY;</i> Copyright The Back Beach Eating House-All Rights Reserved</p>
            </div>
        </div>

    </div>
</div>

<?php
get_footer();
