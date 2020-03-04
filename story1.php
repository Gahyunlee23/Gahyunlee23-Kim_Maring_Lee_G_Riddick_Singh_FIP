<?php
    // echo "dana is stupid!";
    require('includes/connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo_o.ico">

   <!-- CSS links -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Fonts links -->
    <link rel="stylesheet" href="https://use.typekit.net/qmt1wjz.css">

    <title>#I am Part of the Cure</title>
</head>
<main>
    <!-- HEADER  -->
    <header id="header-story1">
        <div id="logo-header">
            <a href="index.html">
                <img src="images/logo-blue.svg" alt="Blue Logo">
            </a>
        </div>
        <!-- Hamburger Menu -->
        <div class="menu-collapsed">
            <div class="bar"></div>
            <!-- menu options -->
            <nav>
                <ul>
                    <li><a href="index.html" id="home">HOME</a></li>
                    <li><a href="about.html" id="about">ABOUT</a></li>
                    <li><a href="stories.html" id="stories">STORIES</a></li>
                    <li><a href="info.html" id="info">INFO</a></li>
                    <li><a href="contact.html" id="contact">CONTACT</a></li>
                </ul>
                <!-- Donate now button -->
                <button id="donate-button">donate now</button>
                    <!-- Social Media Header -->
                <div id="social-media-header">
                    <a href="facebook.com"><img src="images/facebook-white.svg" alt="Facebook"></a>
                    <a href="instagram.com"><img src="images/instagram-white.svg" alt="Instagram"></a>
                    <a href="snapchat.com"><img src="images/snap-white.svg" alt="Snapchap"></a>
                    <a href="tiktok.com"><img src="images/tiktok-white.svg" alt="TikTok"></a>
                </div>
            </nav>
        </div>
        <!-- Hero Text + Buttons -->
        <div id="hero-text">
            <h1>FACING STIGMA</h1>
        </div>
    </header>
    <!-- BODY -->
    <body>
        <!-- Story 1 video -->
        <section id="stories-video">
            <h1 class="hidden">Video Story 1</h1>
            <iframe src="https://player.vimeo.com/video/201308564" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen controls></iframe>
        </section>

        <!-- Story 1 info -->
        <section id="stories-info">
            <h1 class="hidden">Story 1 information</h1>
            <!-- <h1>FACING STIGMA TOGETHER</h1> -->
            <article>
                “When I was still in primary school, one of my classmates was HIV-positive,” says Collins, a 16-year-old living in Homabay, Kenya. “Since everyone knew he was HIV-positive, people were talking about him. He felt stigma [because of his HIV status] and he rejected his treatment. He did not want to take the drugs.”
                <br> <br> “Eventually he died,” continues Collins grimly, “…last year.” Collins, who is also living with HIV, keeps his own status secret. He does not want to face the same rejection. <br> <br>
                <img src="images/stories-1-1.jpg" alt="Afro-american kids playing on school's backyard">
                The one place at which Collins can talk openly about HIV and other hardships is with his peers at the Kandiege Health Center (supported by the Elizabeth Glaser Pediatric AIDS Foundation), where he picks up his medication. Once a week, Collins attends the Kandiege Ariel Club, a psychosocial support group with about two-dozen other adolescents living with HIV. Together, they learn about HIV—what it is, how to treat it, how to live with it. The group gives them space to share their experiences and emotions with peers who fully understand many of their difficulties and triumphs. <br> <br>
                <img src="images/stories-1-2.jpg" alt="Afro-american kids attending a meeting at the Kandiege Health Centre">
                “I came to know about my HIV status from my grandmother,” says Collins. “When I was about 2 years old, my mother died. Then eventually, I fell sick. When I was about 5 years old, I was diagnosed as HIV-positive here at Kandiege. I continued to live with my grandmother until I reached Class 7 [age 12]. <br> <br>
                “Then my grandmother died, and I lived with my uncle and his wife. They are farmers—they plant crops like maize, beans, and ground nuts. They have tried their best, but they still have not reached good conditions [financially], so I have been sent home for lack of school fees. I have been away from school for some time.” <br> <br>
                Collins would like to go to college and eventually become an electrical engineer, but as an orphan living with HIV, he is feeling dejected at the moment. His friendships at the Ariel Club are vital. Along with the stigma of living with HIV, other group members know what it is like to grow up without parents and are also experiencing financial insecurity. <br> <br>
                <img src="images/stories-1-3.jpg" alt="Afro-american kid holding hands">
                Grace is a 15-year-old who was infected with HIV at the age of 8 when she was raped. “I suffered a lot,” says Grace. “I was afraid. I just kept quiet.” Grace secretly bore the trauma of her sexual assault until she was finally diagnosed with HIV at the age of 12 and received counseling at Kandiege. <br> <br>
                Support at home is limited. Grace lives with her grandmother and four younger siblings. Her father died of pneumonia when she was a little girl and her mother left shortly after “for greener pastures” in Nairobi. <br> <br>
                “My grandmother is very old. She just stays at home. I am the one who—after school—I look out for the family. Grandmother is not able to sustain our lives, so I fetch firewood and sell it to buy food. I am in school, but for the past two weeks I was sent home for lack of school fees.” <br> <br>
                Grace is determined to make it back to school. “I want to be a journalist,” she says, “so that I can teach other girls through the media how to take care of themselves.” <br> <br>
                
            </article>
        </section>

        <!-- More stories -->
        <section id="more-stories">
            <h1 class="hidden">Choose more stories to read.</h1>

            <!-- Next story -->
            <div id="stories-parent">
                <img src="images/information-illustration1.svg" alt="Story 2">
                <h2>SARAH IN 10 YEARS</h2>
                <button><a href="story2.html"></a>Read More</button>
            </div>

            <!-- Next next story -->
            <div id="stories-parent">
                <img src="images/information-illustration2.svg" alt="Story 3">
                <h2>SARAH IN 10 YEARS</h2>
                <button><a href="story3.html"></a>Read More</button>
            </div>
        </section>
    </body>
    <!-- FOOTER -->
    <footer>
        <a href="index.html">
            <img id="logo-footer" src="images/logo-blue.svg" alt="Blue Logo">
        </a>
        <!-- Footer menu -->
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="stories.html">STORIES</a></li>
                <li><a href="info.html">INFO</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
        <!-- Footer Social Media -->
        <div id="social-media-footer">
            <a href="facebook.com"><img src="images/facebook-blue.svg" alt="Facebook"></a>
            <a href="instagram.com"><img src="images/instagram-blue.svg" alt="Instagram"></a>
            <a href="snapchat.com"><img src="images/snap-blue.svg" alt="Snapchap"></a>
            <a href="tiktok.com"><img src="images/tiktok-blue.svg" alt="TikTok"></a>
        </div>
        <!-- Footer Copyrights -->
        <div id="copyrights">
            <h3>In association with <a href="hivaidsconnection.com">HIV/AIDS Connection</a></h3>
            <h3>I am Part Of the Cure &copy; 2020</h3>
        </div>
    </footer>
    <script src="js/main.js" type="module"></script>
</main>
</html>