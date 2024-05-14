<?php
    getHeader();
?>

<main>
    <section id="section-banner-top" class="introduction-pg">
        <div class="container">
            <div class="banner-contain">
                <div>
                    <div class="desktop-banner">
                        <img src="<?= $settingsPageIntroduction['banner_desktop_introduction'] ?>" alt="">
                    </div>
                    <div class="banner-contain-title">
                        <?= $settingsPageIntroduction['banner_title_introduction'] ?>
                    </div>
                </div>

            </div>

            <div class="banner-contain-4">
                <div class="banner-contain-4-background">
                    <img src="<?= $urlThemeActive ?>asset/image/intro-bg.png" alt="">
                    <div class="banner-contain-4-img">
                        <img src="<?= $settingsPageIntroduction['banner_contain_img_introduction'] ?>" alt="">
                    </div>
                </div>
                <div class="banner-contain-4-text">
                    <?= $settingsPageIntroduction['banner_contain_text_introduction'] ?>
                </div>
            </div>
        </div>
    </section>

    <section id="section-about-group-1" class="about-group-2">
        <div class="container">
            <div class="about-group-1">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="about-group-1-left">
                            <?= $settingsPageIntroduction['service_title_introduction'] ?>

                            <ul>
                                <?php foreach ($services as $service): ?>
                                    <li>
                                        <?= $service->name ?>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                            <div>
                                <a href="<?= $settingsPageIntroduction['link_button_service_introduction'] ?>" class="custom-btn" type="submit"><?= $settingsPageIntroduction['name_button_service_introduction'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="about-group-1-right">
                            <img src="<?= $settingsPageIntroduction['img_service_introduction'] ?>" alt="">
                        </div>
                    </div>
                </div>
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

    <section id="section-decoration" class="about-group-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="decoration-media">
                        <img src="<?= $settingsPageIntroduction['img_decoration_introduction'] ?>" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-12 no-padding">
                    <div class="decoration-content">
                        <div class="decoration-title">
                            <h3><?= $settingsPageIntroduction['title_decoration_introduction'] ?></h3>
                        </div>
                        <div class="decoration-detail">
                            <p>
                                <?= $settingsPageIntroduction['content_decoration_introduction'] ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-about-group-1" class="about-group-5">
        <div class="container">
            <div class="about-group-1">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="about-group-1-left">
                            <h4><?= $settingsPageIntroduction['title_about_introduction'] ?></h4>
                            <p><?= $settingsPageIntroduction['content_about_introduction'] ?></p>


                            <div>
                                <a href="<?= $settingsPageIntroduction['link_button_about_introduction'] ?>" class="custom-btn" type="submit"><?= $settingsPageIntroduction['name_button_about_introduction'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="about-group-1-right">
                            <img src="<?= $settingsPageIntroduction['img_about_introduction'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-about-group-6" class="about-group-6">
        <div class="about-group-6-img">
            <img src="<?= $settingsPageIntroduction['img_about_introduction_2'] ?>" alt="">
        </div>

        <div class="about-group-6-content">
            <div class="container">
                <div class="about-group-6-content-box">
                    <h3><?= $settingsPageIntroduction['title_about_introduction_2'] ?></h3>
                    <ul>
                        <li>Sử dụng nhiều ngôn ngữ lập trình</li>
                        <li>Nhiều đối tác liên kết</li>
                        <li>Hệ sinh thái đa dạng</li>
                        <li>Sáng tạo trong thiết kế</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>


</main>

<?php
    getFooter();
?>
