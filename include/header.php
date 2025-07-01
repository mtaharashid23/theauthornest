<!DOCTYPE html>
<html lang="en-US">

<head>
    <title><?php echo isset($title) ? $title : 'Professional Book Writing Services | The Author Nest';  ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.webp" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/style.css" rel="stylesheet">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16459673344"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-16459673344');
    </script>
    <?php
        // ✅ Only add the event on the thank-you page
        if (basename($_SERVER['PHP_SELF']) == 'thank-you.php') :
        ?>
        <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-16459673344/WUG9CKTV4sEZEIDeyqg9',
            'value': 25.0,
            'currency': 'USD'
        });
    </script>
    <?php endif; ?>
    <!-- Event snippet for Email clicks conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-16459673344/4usVCKfV4sEZEIDeyqg9',
            'value': 25.0,
            'currency': 'USD'
        });
    </script>
    <!-- Event snippet for Phone number clicks conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-16459673344/yetOCKrV4sEZEIDeyqg9'});
    </script>
    <!-- Event snippet for Address clicks conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-16459673344/24-gCK3V4sEZEIDeyqg9',
            'value': 25.0,
            'currency': 'USD'
        });
    </script>
    <!-- Event snippet for Book an Appointment conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-16459673344/6l_-CO7r3MQZEIDeyqg9'});
    </script>
</head>

<body id="content">
    <div id="page-home" class="page-wrap">
        <header class="header-main">
            <div class="header-top clearfix nitro-lazy">
                <div class="container">
                    <ul>
                        <li>
                            <span class="nitro-lazy"><i class="fa-solid fa-phone"></i></span>
                            <a href="tel:+1 (206) 388 2791"> +1 (206) 388 2791</a>
                        </li>
                        <span class="line"></span>
                        <li>
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <a href="mailto:info@theauthornest.com" class="nitro-lazy">
                                info@theauthornest.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="site-branding">
                        <a href="index.php" class="responsive-branding hide-mobile">
                            <img alt="logo icon" width="58" height="36" src="img/logo.webp">
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="header-contact hide-desktop">
                            <a href="tel:+1 (206) 388 2791" class="primary-btn">
                                <i class="fa-solid fa-phone"></i> +1 (206) 388 2791
                            </a>
                        </div>
                        <div class="primary-menu menu-style">
                            <div class="responsive_site_branding responsive_menu_close hide-desktop">
                                <a href="index.php" class="responsive-branding hide-desktop">
                                    <img alt="logo icon" width="58" height="36" src="img/logo.webp">
                                </a>
                                <span class="responsive-menu-close">X</span>
                            </div>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li class="dropdown first">Our Services <i class="fas fa-chevron-down"></i>
                                    <ul class="sub-menu dropdown-list">
                                        <li class="first"><a href="book-writing.php">Book Writing
                                                Service</a></li>
                                        <li class="first"><a href="book-editing.php">Book Editing
                                                Service</a></li>
                                        <li class="first"><a href="book-publishing.php">Book Publishing
                                                Service</a></li>
                                        <li class="first"><a href="book-marketing.php">Book Marketing
                                                Service</a>
                                        </li>
                                        <li class="first"><a href="book-printing.php">Book Printing
                                                Service</a>
                                        </li>
                                        <li class="first"><a href="audio-book.php">Audiobook Service</a>
                                        </li>
                                        <li class="first"><a href="social-media-for-author.php">Social Media For
                                                Author</a>
                                        </li>
                                        <li class="first"><a href="ebook-cover-design.php">Ebook Cover
                                                Design</a>
                                        </li>
                                        <li class="first"><a href="author-website-design.php">Author
                                                Website Design</a>
                                        </li>
                                        <li class="first"><a href="book-illustration.php">Book
                                                Illustration</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blogs.php">Blogs</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li class="contact-btn">
                                    <button class="chat">Live Chat</button>
                                </li>
                            </ul>
                        </div>
                        <button type="button" class="responsive-menu responsive-menu-trigger">
                            <span class="menu-span menu-span-1"></span>
                            <span class="menu-span menu-span-2"></span>
                            <span class="menu-span menu-span-3"></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>