<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADGA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@900&family=IBM+Plex+Mono:wght@200;300;500&family=Lato:wght@300;400&family=Nunito:wght@300&family=Open+Sans:wght@400;600&family=Quicksand:wght@300;400&family=Victor+Mono:wght@100&family=Ysabeau+SC:wght@100;300;500&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.bundle.css?time=<?php echo time() ?>">
</head>

<body>
<div id="main">
    <header>
        <div class="logo">
            <img src="images/adg-ani-1-B.gif" alt="Logo">
            <p id="tagP">Reflecting your tech needs with an edge of creativity and expertise</p>
        </div>

        <ul class="menu">
            <li><span data-href="#about-us">About Us</span></li>
            <li><span data-href="#services">Services</span></li>
            <li><span data-href="#why-us">Why Us</span></li>
            <li><span data-href="#contact">Contact</span></li>
            <li class="slider"></li>
        </ul>
    </header>

    <div class="section" id="about-us">
        <div class="content">
            <h2>We Are ...</h2>
            <div class="flip-container" data-flip-loop="false">
                <p class="sub-title">
                    Need a technical ally for creativity
                </p>
                <p class="sub-title">
                    That's us!
                </p>
                <div class=intro-text>
                    <p>
                        An experienced U.S. based firm, we hold a unique position in serving the technical needs of
                        leading
                        Advertising and Design Agencies across the nation.
                    </p>
                    <p>
                        With over 15 years of collective experience, our team is accustomed to navigating high-profile
                        projects, meeting tight deadlines, and adapting to shifting priorities seamlessly.
                    </p>
                    <p>
                        At ADGA, we understand the essence of creativity and its cultural nuances within the American
                        context.
                    </p>
                    <p>
                        Our mission is simple yet ambitious: to shoulder your technical complexities
                        and translate your creative vision into highly tailored application and web development
                        solutions.
                    </p>
                    <p>
                        Our expertise spans across a wide spectrum, from building comprehensive websites on WordPress to
                        designing captivating splash pages, to providing immediate programming support when your
                        technical
                        requirements demand it.
                    </p>
                    <p>
                        Your project will be handled by seasoned professionals committed to your success,
                        and dedicated to offering consistent support beyond project completion.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="section" id="services">
        <div class="content">
            <h2>Services</h2>
            <div class="flip-container" data-flip-loop="false">
                <p class="sub-title">Want tech solutions that fit your needs?</p>
                <p class="sub-title">We custom-craft solutions!</p>
                <div class="intro-text">
                    <p>
                        Our diverse range of services reflects our commitment to being your all-inclusive tech
                        partner.
                    </p>
                    <p>
                        From WordPress web design to custom application development, we cater to your unique needs,
                        ensuring your creative vision is translated seamlessly into the digital realm.
                    </p>
                    <p>For more on our services, feel free to get in touch.</p>
                    <ul>
                        <li>Full WordPress site builds</li>
                        <li>UI/UX Design and Consultation</li>
                        <li>Landing and Splash Pages</li>
                        <li>Responsive Design for mobile platforms</li>
                        <li>Custom QR Codes</li>
                        <li>Logo Design</li>
                        <li>Web Scraping</li>
                        <li>E-commerce Solutions</li>
                        <li>Hourly Support</li>
                        <li>And any digital burden you'd rather not bear!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="section" id="why-us">
        <div class="content">
            <h2>Why Us</h2>
            <div class="flip-container" data-flip-loop="false">
                <p class="sub-title">Seeking a tech partner who gets America?</p>
                <p class="sub-title">We're homegrown!</p>
                <div class="intro-text">
                    <p>Our dedication to your success is unwavering.</p>
                    <p>
                        We work around the clock to ensure that your projects are executed to perfection,
                        your deadlines are met,
                        and your vision is brought to life without any technical hurdles.
                    </p>
                    <p>
                        By choosing ADGA, you're choosing a partner who values your partnership,
                        responds promptly to your queries, and is committed to helping you excel in your creative
                        endeavors.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="section" id="contact">
        <h2>Contact</h2>
        <div class="content">
            <div class="row">
                <div class="col-12 col-sm-7 order-md-last d-none d-sm-block">
                    <div class="flip-container">
                        <p class="sub-title">Want more creative vision, less tech hassle?</p>
                        <p class="sub-title">Free your creativity with us!</p>
                    </div>
                </div>

                <div class="col-12 col-sm-5 order-md-first">
                    <form id="contact-form" action="https://formspree.io/f/mnqknvyn" method="POST">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                      placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="particles-js"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" defer></script>
<!--<script src="scripts/stats.min.js" defer></script>-->
<script src="scripts/particles.min.js" defer></script>
<script src="scripts/part.js" defer></script>
<script src="scripts/main.js?time=<?php echo time() ?>" defer></script>
</body>

</html>