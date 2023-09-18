<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADGA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;900&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bundle/styles.bundle.css?time=<?php echo time() ?>">
</head>

<body>
<div id="main">
    <header>
        <div class="logo">
            <img src="images/logo.svg" alt="Logo" width="150" height="90">
        </div>

        <ul class="menu">
            <li><span data-href="#about-us">About Us</span></li>
            <li><span data-href="#services">Services</span></li>
            <li><span data-href="#why-us">Why Us</span></li>
            <li><span data-href="#faq">FAQ</span></li>
            <li><span data-href="#contact">Contact<span class="hide-320">&nbsp;Us</span></span></li>
            <li class="slider"></li>
        </ul>
    </header>

    <div>
        <div class="section" id="about-us">
            <div class="content">
                <div class="content-container">
                    <h1>About Us</h1>

                    <h2>Powering Agencies with Expert Programming</h2>
                    <p>
                        At APT, we pride ourselves on being the bridge between vibrant creativity and precise programming.
                        Our commitment is to ensure that your designs translate into interactive experiences seamlessly.
                        By partnering with us, your agency harnesses the strength of a dedicated programming team without the logistical challenges of maintaining one.
                    </p>

                    <button class="btn btn-action">Schedule a Conversation and Elevate Your Agency's Portfolio</button>
                </div>
            </div>
        </div>


        <div class="section" id="services">
            <div class="content">
                <div class="content-container">
                    <h1>Our Services</h1>

                    <h2>Extend Your Agency's Reach. Offer Seamless Web Programming</h2>
                    <p>Partner with APT to add robust, in-house web programming to your creative arsenal.</p>

                    <h2>Web Programming</h2>
                    <p>
                        Our coding expertise is designed to make your creative visions come alive on the web.
                        Whether you specialize in minimalist designs or intricate web architectures,
                        we ensure a smooth transition from design to functionality across platforms like Webflow, WordPress, and more.
                    </p>
                    <button class="btn btn-action">Bring Your Designs to Life with APT</button>

                    <h2>Custom Integrations</h2>
                    <p>
                        Today's web users expect more. With our custom integration services,
                        your websites will not just look good but will also offer functionalities tailored for your client's specific audience,
                        ensuring memorable user experiences.
                    </p>
                    <button class="btn btn-action">Go Beyond the Ordinary; Integrate with Precision</button>

                    <h2>Ongoing Maintenance</h2>
                    <p>
                        In the digital realm, consistency is key.
                        Our maintenance services ensure that your client's websites remain updated,
                        secure, and high-performing, reflecting the quality your agency stands for.
                    </p>

                    <button class="btn btn-action">Maintain Excellence with APT's Expertise</button>
                </div>
            </div>
        </div>


        <div class="section" id="why-us">
            <div class="content">
                <div class="content-container">
                    <h1>Why Us</h1>

                    <h2>Why Partner with APT for Your Programming Needs?</h2>
                    <p>
                        Beyond just coding, we understand the nuances of turning creative concepts into digital realities.
                        We are constantly updated with the latest web trends and technologies,
                        ensuring that your agency remains at the forefront of innovation.
                        With APT, you get more than a service provider; you gain a partner dedicated to your success.
                    </p>
                    <button class="btn btn-action">Connect with Us and Transform Your Web Offerings</button>

                    <h2>Programming Pioneers at Your Service</h2>
                    <p>
                        Behind every successful project at APT is a team of seasoned programmers, each bringing specialized skills and experiences.
                        With a collaborative approach, we ensure that your designs are translated into code
                        that's both efficient and effective, meeting the high standards of today's digital landscape.
                    </p>
                    <button class="btn btn-action">Discover Our Team and Expand Your Capabilities</button>
                </div>
            </div>
        </div>


        <div class="section" id="faq">
            <div class="content">
                <div class="content-container">
                    <h1>FAQ</h1>

                    <div class="faq-section">
                        <h2>Q: What programming languages and platforms does APT support?</h2>
                        <p>
                            From the foundational trio of HTML, CSS, and JavaScript to the rhythmic beats of WordPress and Webflow,
                            we dance to all the digital tunes. What's your jam? Let's jam together!
                        </p>
                    </div>

                    <div class="faq-section">
                        <h2>Q: How can APT amplify my agency's web offerings?</h2>
                        <p>
                            Think of APT as the backstage crew to your rockstar agency.
                            We set the stage, handle the tech, and let you take the spotlight.
                            Together, we'll make sure your agency's web gig is a sold-out show!
                        </p>
                    </div>

                    <div class="faq-section">
                        <h2>Q: What's the process once we partner with APT?</h2>
                        <p>
                            Picture this: a cozy coffee chat to understand your dreams,
                            followed by a master plan handcrafted just for you.
                            We're all about harmonizing our code with your creativity.
                        </p>
                    </div>

                    <div class="faq-section">
                        <h2>Q: Do you offer support post-launch?</h2>
                        <p>
                            The show must go on, right?
                            Even after the curtains drop, we're behind the scenes,
                            ensuring your digital masterpiece keeps getting standing ovations!
                        </p>
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

                        <h2>Feel free to contact me at: <a href="mailto:ryan.meade@agencypt.com" target="_blank">ryan.meade@agencypt.com</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p><b>Copyright</b>: © 2023 APT. All rights reserved</p>
    </footer>
</div>

<div id="particles-js"></div>

<div id="canvasContainer">
    <canvas id="myCanvas"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script>
<script src="scripts/particles.min.js" defer></script>
<script src="scripts/part.js" defer></script>
<script src="scripts/main.js?time=<?php echo time() ?>" defer></script>
</body>

</html>
