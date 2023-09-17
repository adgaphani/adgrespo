<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADGA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;900&family=Lato:wght@400;900&family=Open+Sans:wght@400;900&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bundle/styles.bundle.css?time=<?php echo time() ?>">
</head>

<body>
<div id="main">
    <header>
        <div class="logo">
            <img src="images/logo.gif" alt="Logo">
            <p id="tagP">Reflecting your tech needs with an edge of creativity and expertise</p>
        </div>

        <ul class="menu">
            <li><span data-href="#home">Home</span></li>
            <li><span data-href="#services">Services</span></li>
            <li><span data-href="#about-us">About Us</span></li>
            <li><span data-href="#faq">FAQ</span></li>
            <li><span data-href="#contact">Contact<span class="hide-320">&nbsp;Us</span></span></li>
            <li class="slider"></li>
        </ul>
    </header>

    <div class="section" id="home">
        <div class="content">
            <h1>
                Extend Your Agency's Reach.
                Offer Seamless Web Programming.
            </h1>
            <h2>
                Partner with APT and bring robust, in-house web programming capabilities to your agency's offerings.
            </h2>
            <div>
                <a class="btn btn-action">Explore Our Expertise and Unleash Creativity</a>
            </div>
        </div>
    </div>


    <div class="section" id="services">
        <div class="content">
            <div class="content-container">
                <h1>Our Services</h1>

                <h2>Web Programming</h2>
                <p>
                    Transform your creative visions into functional websites with our expert coding services.
                    We support various CMS platforms, including Webflow, WordPress, and more.
                </p>

                <h2>Custom Integrations</h2>
                <p>
                    Elevate website functionalities with tailor-made integrations designed to meet your clients' unique needs.
                </p>

                <h2>Ongoing Maintenance</h2>
                <p>
                    Ensure your clients' websites run like clockwork with our comprehensive maintenance services.
                    We handle updates, performance checks, and more.
                </p>

                <button class="btn btn-action">Code Your Dreams into Reality with Us</button>
            </div>
        </div>
    </div>


    <div class="section" id="about-us">
        <div class="content">
            <div class="content-container">
                <h1>About Us</h1>

                <h2>Powering Agencies with Expert Programming</h2>
                <p>
                    At APT, we're your secret weapon for exceptional web programming services.
                    Our team's expertise ensures your designs come alive flawlessly,
                    enhancing your agency's offerings without the overheads of an in-house team.
                </p>

                <h2>Why Design Agencies Trust APT for Programming?</h2>
                <p>
                    At APT, we eat, breathe, and sleep programming, ensuring that every project is handled
                    with precision, expertise, and an unwavering passion for the web's intricacies.
                </p>

                <h2>Programming Pioneers at Your Service</h2>
                <p>
                    The APT team brings together top-notch programmers,
                    ensuring that every piece of code is optimized, clean, and fully aligned with modern web standards.
                </p>

                <button class="btn btn-action">Schedule a Conversation and Elevate Your Agency</button>
            </div>
        </div>
    </div>


    <div class="section" id="faq">
        <div class="content">
            <div class="content-container">
                <h1>Frequently Asked Questions</h1>

                <div class="faq-section">
                    <p><b>Question:</b> What programming languages and platforms does APT support?</p>
                    <p><b>Answer:</b> We support almost all contemporary web development technologies.</p>
                </div>

                <div class="faq-section">
                    <p><b>Question:</b> How can APT enhance my agency's web offerings?</p>
                    <p><b>Answer:</b> Our expertise empowers you to turn creative visions into functional websites seamlessly, expanding your agency's capabilities.</p>
                </div>

                <div class="faq-section">
                    <p><b>Question:</b> What's the process once we partner with APT?</p>
                    <p><b>Answer:</b> Let's talk about your specific needs and customize a partnership process tailored just for you.</p>
                </div>

                <div class="faq-section">
                    <p><b>Question:</b> Do you offer support post-launch?</p>
                    <p><b>Answer:</b> Yes, our world-class team will be at your fingertips to ensure your success.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="section" id="contact">
        <h1>Contact Us</h1>
        <div class="content">
            <div class="row">
                <div class="col-12 col-md-6">
                    <form id="contact-form" action="https://formspree.io/f/xgejzznn" method="POST">
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
                        <div id="form-result"></div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <h2>Feel free to contact me at: <a href="mailto:rmeade07@gmail.com" target="_blank">rmeade07@gmail.com</a></h2>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Copyright: © 2023 APT. All rights reserved</p>
    </footer>
</div>

<div id="particles-js"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" defer></script>
<script src="scripts/particles.min.js" defer></script>
<script src="scripts/part.js" defer></script>
<script src="scripts/main.js?time=<?php echo time() ?>" defer></script>
</body>

</html>
