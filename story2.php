<?php
    // echo "dana is stupid!";
    //require('includes/connect.php');
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

    <!-- Vue links -->
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

    <title>#I am Part of the Cure</title>
</head>
<main>
    <!-- HEADER  -->
    <header id="header-story2">
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
                    <li><a href="stories.php" id="stories">STORIES</a></li>
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
            <h1>LIVING AS AN HIV-POSITIVE TEEN</h1>
        </div>
    </header>
    <!-- BODY -->
    <body>
        <!-- Story 2 video -->
        <section id="stories-video">
            <h1 class="hidden">Video Story 1</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/p1GCffwYjM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls></iframe>
        </section>

        <!-- Story 2 info -->
        <section id="stories-info">
            <h1 class="hidden">Story 2 information</h1>
            <!-- <h1>FACING STIGMA TOGETHER</h1> -->
            <article>
                “I found out I was HIV positive when I was 7 years old,” says Ashley Rose Murphy, EGPAF Ambassador. “When my parents told me, they sat me down and they said, ‘Ashley, the reason why you take all of these medications and why you go to all these doctor appointments is because you have a virus called HIV. <br> <br>
                Her parents and doctors told her she shouldn’t tell anybody, but Murphy didn’t understand why. “I asked, ‘Why do I need to keep it a secret? I didn’t do anything wrong.’” <br> <br>
                Since then, Murphy has spoken to thousands of people, hoping to help educate others and reduce the stigma around HIV. <br> <br>
                <img src="images/stories-2-1.jpg" alt="Ashley Rose Murphy">
                Murphy says the widespread fear of HIV stems from a lack of knowledge, which is why she speaks so openly about it. She speaks at school and conferences to educate both kids and adults about the virus so they understand what it is and what it’s like to live with it. <br> <br>
                She started speaking at medical conferences in Canada (her home country) when she was 10 along with other kids she had grown up with in the medical system in Toronto. She attended a support group for children with HIV, and they occasionally went to speak with groups of medical professionals. "The other kids wouldn't speak if there was media," Murphy recalls, “but I didn’t really care." <br> <br>
                Her mother tells SELF it was hard at first to see her daughter exposed like that, but Ashley was always comfortable. “I’ve always loved performing and singing, so being in front of people doesn’t scare me at all,” Murphy says. <br> <br>
                Last year, she went to speak to her brother’s kindergarten class about HIV/AIDS, per the teacher’s request. “I talked to the first group of kids and then after I was done speaking, I got confronted by the principal and he said, ‘Can you not use the word HIV in your next presentation?’ That really hurt,” Murphy says. “It’s crazy because that’s discrimination right there. I was asked to speak at the school, and here I am facing it.” It's kind of tough to raise awareness and have an honest conversation about something like HIV when you're not allowed to even say the word. <br> <br>
                <img src="images/stories-2-2.jpg" alt="Ashley Rose Murphy speaking in public">
                Murphy doesn’t announce her HIV status to the grocery store cashier or to new acquaintances out of the blue like she did as a kid, but she does stand in front of crowds and openly talk about having HIV. Her status is right there in her social media bios. She’s upfront and honest about it with friends and classmates at York University in Toronto, where she studies theater. “It’s not really a secret. Pretty much with anyone I meet I’m really open about it now,” she says. Murphy credits growing up in a family of 10 kids, all with differing special needs, and extremely supportive parents, for how she’s been able to live without shame or fear. “They’ve always taught us the importance of being yourself and loving yourself and being comfortable with who you are and to not be ashamed. And so I kind of took their sayings and ran with it.” <br> <br>
                She hopes that by using her voice and living as an example, she can help the world be a more understanding place for those who are afraid to speak about having HIV, so they can let go of the shame and feel comfortable in their own skin. 
                
            </article>
        </section>

        <!-- More stories -->
        <section id="more-stories">
            <h1 class="hidden">Choose more stories to read.</h1>

            <!-- Next story -->
            <div id="stories-parent">
                <img src="images/stories-3-1.jpg" alt="Man sitting alone looking at the sunset.">
                <h2>IT DIDN'T SEEM LIKE A BIG DEAL</h2>
                <button><a href="story3.php"></a>Read More</button>
            </div>

            <!-- Next next story -->
            <div id="stories-parent">
                <img src="images/stories-1-1.jpg" alt="Afro-American kids playing on school's backyard.">
                <h2>FACING STIGMA TOGETHER</h2>
                <button><a href="story1.php"></a>Read More</button>
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
                <li><a href="stories.php">STORIES</a></li>
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