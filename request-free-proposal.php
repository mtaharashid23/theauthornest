<?php include "include/header.php"; ?>
        <section class="section s2" style="padding: 0 0 80px 0px;">
            <div class="container">
                <div class="form-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="div-img aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000">
                                <img alt="Request A Free Proposal" width="436" height="463" src="img/request-1.webp">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-head text-center">
                                <h2>Request Your <span>Free Proposal </span>Now</h2>
                            </div>
                            <div class="footer-rfp form-style aos-init aos-animate" data-aos="fade-left"
                                data-aos-duration="2000">
                                <div class="form-body">
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
                    </div>
                </div>
            </div>
        </section>
        <?php include "include/footer.php"; ?>