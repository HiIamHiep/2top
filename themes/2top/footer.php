<?php
    global $settingThemes;
    global $urlThemeActive;
?>
<footer>
    <section id="footer">
        <div class="container">

            <div class="footer-contact-absolute">
                <div class="footer-contact">
                    <div class="footer-contact-text">
                        <p><?= $settingThemes['contact_text_footer'] ?></p>
                    </div>

                    <div class="footer-contact-btn">
                        <button class="advise-button" data-aos="zoom-in"><?= $settingThemes['contact_button_footer'] ?></button>
                    </div>

                </div>
            </div>

            <div class="footer-contact-wave">
                <img src="<?= $urlThemeActive ?>/asset/image/wave.webp" alt="">
            </div>


            <div class="row">
                <div class="col-lg-4 col-12" data-aos="fade-right">
                    <div class="footer-company-info">
                        <div class="footer-company-intro">
                            <div class="footer-company-logo">
                                <img src="<?= $settingThemes['logo_company_footer'] ?>" alt="">
                            </div>
                            <p>
                                <?= $settingThemes['intro_company_footer'] ?>
                            </p>
                        </div>

                        <div class="footer-company-address">
                            <?= $settingThemes['address_company_footer'] ?>

                        </div>

                        <div class="footer-company-icons-contact">
                            <h4>Kết nối với chúng tôi</h4>
                            <ul>

                                <?php if (!empty($settingThemes['facebook'])) { ?>
                                    <li><a href="<?= $settingThemes['facebook'] ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($settingThemes['youtube'])) { ?>
                                    <li><a href="<?= $settingThemes['youtube'] ?>"><i class="fa-brands fa-youtube"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($settingThemes['instagram'])) { ?>
                                    <li><a href="<?= $settingThemes['instagram'] ?>"><i class="fa-brands fa-instagram"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($settingThemes['linkedIn'])) { ?>
                                    <li><a href="<?= $settingThemes['linkedIn'] ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <?php } ?>

                                <?php if (!empty($settingThemes['tiktok'])) { ?>
                                    <li><a href="<?= $settingThemes['tiktok'] ?>"><i class="fa-brands fa-tiktok"></i></a></li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12" data-aos="fade-up">
                    <div class="footer-company-services">
                        <?= $settingThemes['services_company_footer'] ?>
                    </div>
                    <div class="footer-company-recruitment">
                        <?= $settingThemes['recruitment_company_footer'] ?>
                    </div>
                </div>

                <div class="col-lg-5 col-12" data-aos="fade-up-left">
                    <div class="footer-advise">
                        <div class="footer-advise-title">
                            <?= $settingThemes['advise_footer'] ?>
                        </div>
                        <div class="footer-advise-form">
                            <form action="">
                                <div class="flex-input">
                                    <input type="text" placeholder="Họ và tên *" required>
                                    <input type="text" placeholder="Email *" required>
                                </div>
                                <input type="text" placeholder="Số điện thoại *" required>
                                <input type="text" placeholder="Dịch vụ cần tư vấn *" required>
                                <textarea name="" id="" rows="6" placeholder="Nội dung tin nhắn"></textarea>

                                <div class="footer-advise-form-btn">
                                    <button type="submit">Gửi</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="copy-right">
        <p>
            <?php if(!empty($settingThemes['copyright_footer'])) { ?>
                <?= $settingThemes['copyright_footer'] ?>
            <?php } ?>
        </p>
    </section>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?= $urlThemeActive ?>/asset/js/main.js"></script>
</body>

</html>
