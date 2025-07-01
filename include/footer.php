<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-sec text-center">
                    <a href="index.php">
                        <img src="img/footer-logo.png" alt="Footer logo of The Author Nest">
                    </a>
                    <p>Your Reliable Global Ally in Writing, Publishing, and Marketing Your Book.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="links-sec">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="blogs.php">Blogs</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="terms-and-conditions.php" style="text-decoration:underline !important;">Terms &
                                Conditions</a></li>
                        <li><a href="privacy-policy.php" style="text-decoration:underline !important;">Privacy
                                Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links-sec">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="book-writing.php">Book Writing Service</a></li>
                        <li><a href="book-editing.php">Book Editing Service</a></li>
                        <li><a href="book-publishing.php">Book Publishing Service</a></li>
                        <li><a href="book-marketing.php">Book Marketing Service</a></li>
                        <li><a href="book-printing.php">Book Printing Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links-sec mt-5">
                    <ul>
                        <li><a href="audio-book.php">Audiobook Service</a></li>
                        <li><a href="social-media-for-author.php">Social Media For Author</a></li>
                        <li><a href="ebook-cover-design.php">Ebook Cover Design</a></li>
                        <li><a href="author-website-design.php">Author Website Design</a></li>
                        <li><a href="book-illustration.php">Book Illustration</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logo-sec">
                    <div class="links-sec contact-sec">
                        <h3>Contact</h3>
                        <ul>
                            <li><span class="nitro-lazy"><i class="fa-solid fa-phone"></i></span><a
                                    href="tel:+1 (206) 388 2791">+1 (206) 388 2791</a></li>
                            <li><span><i class="fa-solid fa-envelope"></i></span><a
                                    href="mailto:info@theauthornest.com">info@theauthornest.com</span></a>
                            </li>
                            <li><span><i class="fa-solid fa-location-dot"></i></span><a href="javascript:;">5900, BALCONES DRIVE STE 100, AUSTIN TX 78731</a></li>
                        </ul>
                    </div>
                    <ul class="d-flex">
                        <a href="https://www.facebook.com/share/15oixqdYZF/?mibextid=wwXIfr" target="_blank">
                            <li><i class="fa-brands fa-facebook"></i></li>
                        </a>
                        <a href="https://www.instagram.com/theauthornest1?igsh=MTZ4Z2RhcWpobG41bQ==" target="_blank">
                            <li><i class="fa-brands fa-instagram"></i></li>
                        </a>
                    </ul>
                    <img src="img/card-payment.webp" class="mt-3" alt="Card payment options">
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 copyright-text" style="text-align:center;">
                <p>© 2025. <a href="">The Author Nest</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/form.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Add toggle menu icon to dropdowns
        document.querySelectorAll(".dropdown").forEach(function (dropdown) {
            dropdown.insertAdjacentHTML('beforeend',
                '<span class="toggle-menu"><i class="fas fa-chevron-down"></i></span>');
        });

        // Toggle dropdown menu on icon click
        document.querySelectorAll(".dropdown .toggle-menu").forEach(function (toggleMenu) {
            toggleMenu.addEventListener("click", function () {
                this.parentElement.classList.toggle("active");
                this.classList.toggle("open");
            });
        });

        // Open responsive menu on trigger click
        document.querySelector(".responsive-menu-trigger").addEventListener("click", function () {
            document.querySelector(".header-main .primary-menu").style.transform = "translate(0, 0)";
            document.querySelector(".header-main .primary-menu").style.opacity = 1;
            document.body.classList.add("sidemenu-active");
        });

        // Close responsive menu on close button click
        document.querySelector(".responsive-menu-close").addEventListener("click", function () {
            document.querySelector(".header-main .primary-menu").style.transform = "translate(100%, 0)";
            document.querySelector(".header-main .primary-menu").style.opacity = 0;
            document.body.classList.remove("sidemenu-active");
        });
    });
</script>

<script>
    if (window.innerWidth < 767) {
        $('.ttff').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1399,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false

                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false

                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false
                    }
                }
            ]
        });
    }
</script>

<script>
    $('.reviews-inner').slick({
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 200,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>

<script>
    $('.extra-slide').slick({
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 200,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>

<script>
    $('.logo-slider').slick({
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: true,
        speed: 200,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>

<script>
    $(".cs-link").on("click", function () {
        $(".cs-link").removeClass("active");
        $(this).addClass("active");
        var dataId = $(this).data("id");
        $(".cs-content").removeClass("active");
        $("#" + dataId).addClass("active");
    });
    $(".cs-linkPack").on("click", function () {
        $(".cs-linkPack").removeClass("activePack");
        $(this).addClass("activePack");
        var dataId = $(this).data("id");
        $(".cs-contentPack").removeClass("activePack");
        $("#" + dataId).addClass("activePack");
    });
    $(document).ready(function () {
        if ($(window).width() < 992) {
            $(".process-style").addClass("slick-slider").slick({
                prevArrow: '<i class="fa-solid fa-arrow-left arrow-prev"></i>',
                nextArrow: '<i class="fa-solid fa-arrow-right arrow-next"></i>',
                infinite: true,
                arrows: true,
                draggable: false,
                autoplay: false,
                autoplaySpeed: 3000,
                pauseOnHover: true,
                dots: false,
                slidesToShow: 1,
                adaptiveHeight: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 0,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
            $(".process-style .arrow-prev, .process-style .arrow-next").wrapAll(
                '<div class="slick-arrow-wrap"></div>');
        }
    });
    if ($(".accordion__item__header").length > 0) {
        var active = "active";
        $(".accordion__item__header").click(function () {
            $(this).parents(".accordion__item").toggleClass(active);
            $(this).next("div").slideToggle(300);
        });
    }
</script>

<script>
    $('.market-book-slider').slick({
        dots: true,
        autoplay: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });
</script>

<script>
    $('.reviews-trust').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

<script>
    $('.port').slick({
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 1000,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>

<script>
    $(document).ready(function () {
        $('.timeline-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3, // Number of slides visible at once
            slidesToScroll: 1, // Number of slides to scroll at a time
            arrows: true, // Show navigation arrows
            autoplay: true, // Enable autoplay
            autoplaySpeed: 3000, // Set autoplay interval
            responsive: [{
                    breakpoint: 1024, // For medium screens
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768, // For small screens
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>
<!-- Script -->
<script>
    document.querySelectorAll(".chat").forEach(function (element) {
        element.addEventListener("click", function () {
            if (typeof LC_API !== "undefined") {
                LC_API.open_chat_window();
            } else {
                console.warn("LiveChat not loaded yet.");
            }
        });
    });
</script>
<!-- ✅ START of LiveChat (www.livechat.com) code ✅ -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19197234;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";
    window.__lc.asyncInit = function() {
        LiveChatWidget.on('ready', function() {
            console.log('LiveChat ready - opening chat automatically.');
            LiveChatWidget.call('maximize'); // ✅ auto open on page load
        });
    };

    (function(n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n);
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function() {
                i(["on", c.call(arguments)]);
            },
            once: function() {
                i(["once", c.call(arguments)]);
            },
            off: function() {
                i(["off", c.call(arguments)]);
            },
            get: function() {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)]);
            },
            call: function() {
                i(["call", c.call(arguments)]);
            },
            init: function() {
                var n = t.createElement("script");
                n.async = true;
                n.type = "text/javascript";
                n.src = "https://cdn.livechatinc.com/tracking.js";
                t.head.appendChild(n);
            }
        };
        if (!n._lc || !n._lc.asyncInit) {
            e.init();
        }
        n.LiveChatWidget = n.LiveChatWidget || e;
    })(window, document, [].slice);

    // ✅ SINGLE new_event handler
    function onNewEvent(event) {
        console.log('New event:', event);
        // If agent sends a new message, force open chat
        if (event.type === 'message' && event.author && event.author.type === 'agent') {
            console.log('Agent sent a new message - forcing chat open.');
            LiveChatWidget.call('maximize');
        }
    }

    // ✅ Register new_event once page fully loaded
    window.addEventListener('load', function() {
        LiveChatWidget.on('new_event', onNewEvent);
    });
</script>

<noscript>
    <a href="https://www.livechat.com/chat-with/19197234/" rel="nofollow">Chat with us</a>, powered by
    <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- ✅ END of LiveChat code ✅ -->
</div>
</body>

</html>