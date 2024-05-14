<?php
getHeader();
?>

<main>
    <section id="section-banner-top">
        <div class="container">
            <div class="banner-contain">
                <div class="desktop-banner">
                    <img src="<?= $settingPageService['banner_service'] ?>" alt="">
                </div>
                <div class="banner-contain-title">
                    <p><?= $settingPageService['banner_service_category'] ?></p>
                    <h3><?= $settingPageService['banner_service_title'] ?></h3>
                </div>


            </div>
        </div>
    </section>

    <section id="section-all-services">
        <div class="container">
            <div class="sg-list-services">
                <div class="row">
                    <?php $count = 1 ?>
                    <?php foreach ($services as $service): ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="sg-item-services">
                                <div class="item-services-illustration">
                                    <img src="<?= $service->image_url ?>" alt="">
                                    <p><?= $count ?>/<?= count($services); ?></p>
                                </div>
                                <div class="item-services-name">
                                    <h4><?= $service->title ?></h4>
                                </div>
                                <div class="item-services-content">
                                    <?= $service->short_description ?>
                                </div>
                                <div class="item-services-btn">
                                    <a href="/dich-vu/<?= $service->slug ?>">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    <?php $count++ ?>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>

    </section>

    <section id="section-feedback" class="list-services-page">
        <div class="container">
            <div class="feedback-content">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 no-padding-right">
                        <div class="section-title" data-aos="zoom-in-up">
                            <h3>Khách hàng <br> <span>nói gì</span> về TOP TOP</h3>
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
                                                <?= $settingThemes['customer_company_feedback'] ?>
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
                    <div class="col-lg-7 col-md-12 col-sm-12 col-12 no-padding">
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
                            <img src="<?= $urlThemeActive ?>asset/image/macbook.webp" alt="">
                        </div>
                        <div class="list-slide-feedback-center">
                            <div class="fb-slide-3">
                                <?php foreach ($feedback_imgs as $feedback_img): ?>
                                <div class="item-slide-3">
                                    <div class="item-slide-3-img">
                                        <img src="<?= $feedback_img->image ?>" alt="">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

</main>

<?php
getFooter();
?>
