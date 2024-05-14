<?php
getHeader();
?>
<main>
    <section id="banner">
        <div class="container">
            <div class="list-banner row">
                <div class="banner-sub col-lg-6 col-md-6 col">
                    <?php foreach ($slide_home as $slide) { ?>
                        <div class="item-banner-sub">
                            <h4><?= @$settingThemes['name_brand_slide'] ?></h4>
                            <h5><?= @$settingThemes['title_slide'] ?></h5>
                            <p><?= @$settingThemes['content_slide'] ?></p>
                            <button class="advise-button"><?= @$settingThemes['name_button_slide'] ?><i
                                    class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    <?php } ?>
                </div>

                <div class="banner-img col-lg-6 col-md-6 col">
                    <?php foreach ($slide_home as $slide) { ?>
                        <div class="item-banner-img">
                            <img src="<?= $slide['image'] ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="section-introduction">
        <div class="container">
            <div class="introduction-bg" data-aos="zoom-in-left">
                <img src="<?= $urlThemeActive ?>/asset/image/Asset1.png" alt="">
            </div>
            <div class="section-title" data-aos="zoom-in-up">
                <h3><?= $settingThemes['name_brand_introduction'] ?></h3>
            </div>
            <div class="introduction-content" data-aos="zoom-in-up">
                <h3 data-aos="zoom-in-up">
                    <?= $settingThemes['title_introduction'] ?>
                </h3>
                <p data-aos="zoom-in-up">
                    <?= $settingThemes['content_introduction'] ?>
                </p>
            </div>
            <div class="introduction-btn">
                <a href="<?= $settingThemes['link_button_introduction'] ?>"
                   data-aos="zoom-out"><?= $settingThemes['name_button_introduction'] ?></a>
            </div>

        </div>
    </section>

    <section id="advise">

        <!-- Popup Container -->
        <div class="popup-overlay" id="popupOverlay">
            <div class="popup">
                <button class="close-button" id="closeButton"><i class="fa-solid fa-xmark"></i></button>
                <div class="advise-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col top-contact">
                            <div class="absolute-arrow">
                                <img src="<?= $urlThemeActive ?>/asset/image/arrow.png" alt="">
                            </div>
                            <div class="top-info">
                                <h3>Kết nối ngay với TOP TOP</h3>
                                <p>Chúng tôi luôn sẵn sàng lắng nghe và đưa ra giải pháp phù hợp nhất cho vấn đề của
                                    bạn.</p>
                            </div>
                            <div class="top-img">
                                <img src="<?= $urlThemeActive ?>/asset/image/banner2.png" alt="">
                            </div>
                            <div class="top-contact-btn">
                                <a href="#">
                                    <div><i class="fa-solid fa-phone fa-beat"></i></div>
                                    <p><span>Hotline</span>0968-951-277</p>
                                </a>
                                <a href="#">
                                    <div><i class="fa-solid fa-envelope-open-text fa-beat"></i></div>
                                    <p><span>Email</span>info@toptop.com.vn</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col top-form">
                            <form>
                                <label for="">
                                    <input type="text" placeholder="Họ và tên *" required>
                                </label>
                                <label for="">
                                    <input type="text" placeholder="Địa chỉ e-mail *" required>
                                </label>
                                <label for="">
                                    <input type="text" placeholder="Số điện thoại *" required>
                                </label>
                                <label for="">
                                    <input type="text" placeholder="Địa chỉ *" required>
                                </label>
                                <label for="">
                                    <input type="text" placeholder="Yêu cầu dịch vụ *" required>
                                </label>
                                <label for="">
                                    <textarea cols="30" rows="10" placeholder="Nội dung yêu cầu ..."></textarea>
                                </label>

                                <button>Gửi yêu cầu <i class="fa-solid fa-play"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="section-title" data-aos="zoom-in-up">
                <p><?= @$settingThemes['name_service'] ?></p>
                <h3 class="animate__animated animate__bounce"><?= @$settingThemes['title_service'] ?></h3>
            </div>
            <div class="list-services row">
                <?php foreach ($students as $student) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="item-services" data-aos="zoom-in-up">
                            <div class="services-img">
                                <a href=""><img src="<?= $urlThemeActive ?>/asset/image/toptop-pen.jpg" alt=""></a>
                            </div>
                            <div class="services-name">
                                <a href=""><?= $student->name ?></a>
                                <p><?= $student->classrooms['name'] ?></p>
                            </div>
                            <div class="services-btn">
                                <a href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="section-personnel">
        <div class="container no-padding">
            <div class="background-image-overlay"></div>
            <div class="section-title aos-init aos-animate" data-aos="zoom-in-up">
                <p><?= @$settingThemes['name_personnel'] ?></p>
                <h3><?= @$settingThemes['title_personnel'] ?></h3>
            </div>
            <div class="personnel-content" data-aos="zoom-in-up" id="scrollableDiv">
                <div class="person-grid">
                    <?php foreach ($employees as $employee): ?>
                        <div class="person">
                            <div class="person__background person-animation-1">
                                <img src="<?= $urlThemeActive ?>/asset/image/toptop-car.jpg" alt="">
                            </div>
                            <div class="person__content">
                                <p class="person__category"><?= $employee->position ?></p>
                                <h3 class="person__heading"><?= $employee->first_name . ' ' . $employee->last_name ?></h3>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>

    <section id="section-worth">
        <div class="container">
            <div class="row">
                <div class="worth-content col-lg-4 col-md-12 col-sm-12">
                    <?= $settingThemes['title_worth'] ?>
                    <?= $settingThemes['content_worth'] ?>
                </div>
                <div class="worth-detail col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <?php for ($i = 1; $i <= 6; $i++) { ?>
                            <div class="item-worth col-lg-4 col-md-6 col-sm-12">
                                <div class="worth-card card-1 aos-init aos-animate" data-aos="fade-right">
                                    <div class="imageBox">
                                        <img src="<?= $settingThemes['icon_card_worth_'.$i] ?>">
                                    </div>
                                    <div class="contentBox">
                                        <h2><?= $settingThemes['title_card_worth_'.$i] ?></h2>
                                        <div class="description">
                                            <p><?= $settingThemes['context_card_worth_'.$i] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="partner">
        <div class="container">
            <div class="section-title" data-aos="zoom-in-up">
                <p><?= $settingThemes['name_partner'] ?></p>
                <h3><?= $settingThemes['title_partner'] ?></h3>
            </div>
            <div class="list-partner" data-aos="zoom-in-up">
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner1.png" alt="">
                </div>
                <div class="partner-logo">
                    <div class="partner-dot dot1">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <img src="<?= $urlThemeActive ?>/asset/image/partner2.png" alt="">
                </div>

            </div>
        </div>
    </section>

    <section id="section-feedback">
        <div class="container">
            <div class="feedback-content">
                <div class="row">
                    <div class="col-lg-5 col-12 no-padding-right">
                        <div class="section-title" data-aos="zoom-in-up">
                            <p><?= $settingThemes['name_feedback'] ?></p>
                            <h3><?= $settingThemes['title_feedback'] ?></h3>
                        </div>

                        <div class="fb-slide-1">
                            <?php if (!empty($feedback_imgs)) { ?>
                                <?php for ($i = 0; $i < count($feedback_imgs); $i++) { ?>
                                    <div class="item-slide-1">
                                        <div class="customer-info">
                                            <div class="customer-img">
                                                <img src="<?= $settingThemes['avatar_customer_feedback'] ?>" alt="">
                                            </div>
                                            <div class="customer-company">
                                                <p><?= $settingThemes['customer_company_feedback'] ?></p>
                                            </div>
                                        </div>

                                        <div class="fedback-text">
                                            <p><?= $settingThemes['customer_company_feedback'] ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>


                    </div>
                    <div class="col-lg-7 col-12 no-padding">
                        <div class="fb-slide-2">
                            <?php foreach ($feedback_imgs as $feedback_img): ?>
                                <div class="item-slide-2">
                                    <img src="<?= $feedback_img->image ?>" alt="">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>

                <div class="sldie-feedback-center">
                    <div class="sldie-feedback-center-content">
                        <div class="macbook-img">
                            <img src="<?= $urlThemeActive ?>/asset/image/macbook.webp" alt="">
                        </div>
                        <div class="list-slide-feedback-center">
                            <div class="fb-slide-3">
                                <div class="item-slide-3">
                                    <div class="item-slide-3-img">
                                        <img src="<?= $urlThemeActive ?>/asset/image/cardvisit.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item-slide-3">
                                    <div class="item-slide-3-img">
                                        <img src="<?= $urlThemeActive ?>/asset/image/toptop-car.jpg" alt="">
                                    </div>
                                </div>
                                <div class="item-slide-3">
                                    <div class="item-slide-3-img">
                                        <img src="<?= $urlThemeActive ?>/asset/image/toptop-helmet.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </section>

    <section id="news">
        <div class="container">
            <div class="section-title" data-aos="zoom-in-up">
                <p><?= @$settingThemes['name_news'] ?></p>
                <h3><?= @$settingThemes['title_news'] ?></h3>
                <h5><?= @$settingThemes['content_news'] ?></h5>
            </div>

            <div class="news-content" data-aos="zoom-in-up">
                <div class="slide-news">
                    <?php if (!empty($posts)) { ?>
                        <?php foreach ($posts as $post) { ?>
                            <div class="item-slide-news">
                                <div class="card-news">
                                    <div class="news-img">
                                        <a href=""><img src="<?= $post->image ?>" alt="<?= $post->title ?>"></a>
                                    </div>
                                    <div class="news-detail">
                                        <div class="news-timepost">
                                            <i class="fa-regular fa-calendar-days"></i>
                                            <p><?= date('d-m-Y', $post->time) ?></p>
                                        </div>
                                        <div class="news-title">
                                            <a href="<?= $post->slug ?>"><?= $post->title ?></a>
                                        </div>
                                        <div class="news-text">
                                            <p><?= $post->description ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>

                </div>
            </div>


        </div>
    </section>

</main>

<?php getFooter(); ?>
