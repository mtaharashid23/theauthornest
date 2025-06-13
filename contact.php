<?php include "include/header.php"; ?>
<section class="section home-banner" style="background-image:none !important; background-color:#231f20;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 left-side">
                <div class="footer-rfp form-style">
                    <div class="heading" data-aos="fade-down" data-aos-duration="2000">
                        <h2 style="color:#fff;">Contact Form</h2>
                        <p style="color:#fff;">Have a concern or query? Fill out the form below, and you’ll get
                            a swift response.</p>
                    </div>
                    <div class="form-body" id="hero-form" data-aos="fade-right" data-aos-duration="2000">
                        <form class="entryform">
                            <div class="form-group">
                                <div class="group-item">
                                    <input type="text" id="name" name="name" class="input-field"
                                        placeholder="Enter Full Name" required>
                                </div>
                                <div class="group-item">
                                    <input type="email" id="email" name="email" class="input-field"
                                        placeholder="Enter Email Here" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="group-item">
                                    <input type="tel" id="phone" name="phone" class="input-field"
                                        placeholder="Enter Phone Number" required>
                                </div>
                                <div class="group-item select-icon">
                                    <select class="form-control" name="services" id="service" required>
                                        <option value="" selected>Select Service</option>
                                        <option value="Book Marketing">Book Marketing</option>
                                        <option value="Book Editing">Book Editing</option>
                                        <option value="Book Writing">Book Writing</option>
                                        <option value="Book Publishing">Book Publishing</option>
                                        <option value="Book Printing">Book Printing</option>
                                        <option value="Audiobook">Audiobook Service</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="message" name="message" class="input-field" rows="3"
                                    placeholder="Tell Us What You’re Looking For"></textarea>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="form-btn" id="signupBtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7 right-side">
                <h2 data-aos="fade-down" data-aos-duration="2000">Contact Details</h2>
                <ul class="contact-details" data-aos="fade-left" data-aos-duration="2000">
                    <li>
                        <div class="icon">
                            <img src="img/contact-ic1.webp">
                        </div>
                        <div class="details">
                            <span class="det-head">Email:</span>
                            <span class="det-head-sub"><a href="mailto:info@theauthornest.com">
                                    info@theauthornest.com</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="img/contact-ic2.webp">
                        </div>
                        <div class="details">
                            <span class="det-head">Phone:</span>
                            <span class="det-head-sub"> <a href="tel:+1 (323) 916 8484">+1 (323) 916
                                    8484</a></span>

                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="img/contact-ic3.webp">
                        </div>
                        <div class="details">
                            <span class="det-head">Address:</span>
                            <span class="det-head-sub">117 E Broadway, Glendale, CA 91205</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include "include/footer.php"; ?>