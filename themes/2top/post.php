<?php
getHeader();
?>
<main>

    <section id="section-post-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="post-content">
                        <div class="post-breadcrumbs">
                            <p><a href="">Home</a> <i class="fa-solid fa-caret-right" aria-hidden="true"></i> <a
                                    href="">Tin tức</a> <i class="fa-solid fa-caret-right"
                                                           aria-hidden="true"></i><?= $post->title ?></p>
                        </div>

                        <div class="post-title">
                            <h1><?= $post->title ?></h1>

                            <p><i class="fa-regular fa-calendar-days" aria-hidden="true"></i><?= date('d-m-Y',
                                    $post->time) ?></p>
                        </div>

                        <div class="post-content-detail">
                            <?= $post->description ?>
                        </div>

                    </div>

                    <div class="other-post">
                        <div class="other-post-title">
                            <h2>
                                Bài viết liên quan
                            </h2>
                        </div>
                        <div class="list-other-post">
                            <div class="row">
                                <?php foreach ($trendingPosts as $post): ?>
                                    <div class="col-lg-6 col-md-6 col-sm-12 aos-init" data-aos-duration="1000"
                                         data-aos="fade-up-right">
                                        <div class="item-other-post">
                                            <div class="item-other-post-img">
                                                <a href=""><img src="<?= $post->image ?>" alt=""></a>
                                            </div>
                                            <div class="item-other-post-date">
                                                <p><i class="fa-regular fa-calendar-days"
                                                      aria-hidden="true"></i><?= date('d-m-Y', $post->time) ?>
                                                </p>
                                            </div>
                                            <div class="item-other-post-name">
                                                <a href=""><?= $post->title ?></a></div>
                                            <div class="item-other-post-btn">
                                                <a href="<?= $post->slug.'.html' ?>"> Xem chi tiết <i
                                                        class="fa-solid fa-arrow-right-long"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-12">
                    <div class="outstanding-post">
                        <h3>
                            Bài viết nổi bật
                        </h3>

                        <div class="list-outstanding-post">
                            <div class="row">
                                <?php foreach ($trendingPosts as $post): ?>
                                    <div class="item-outstanding-post col-lg-12 no-padding">
                                        <div class="col-lg-5 no-padding outstanding-np">
                                            <div class="outstanding-post-img">
                                                <a href=""><img src="<?= $post->image ?>" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="outstanding-post-info">
                                                <a href=""><?= $post->title ?></a>
                                                <p><i class="fa-regular fa-calendar-days" aria-hidden="true"></i> <?= date('d-m-Y', $post->time) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="post-detail-pg-services fixedsticky">
                        <h3>
                            Dịch vụ tại Top Top
                        </h3>

                        <div class="pg-slide-services">
                            <?php foreach ($services as $service): ?>
                                <div class="pg-item-img">
                                    <img src="https://img.pikbest.com/png-images/qianku/default-avatar_2406311.png!w700wp" alt="<?= $service->title ?>">
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <div class="pg-list-services">
                            <div class="list-pg-services">
                                <div class="row">
                                    <?php foreach ($services as $service): ?>
                                        <div class="item-pg-services col-lg-12 col-md-6 col-sm-12">
                                            <div class="services-block">
                                                <div class="pg-services-img">
                                                    <a href=""><img src="https://img.pikbest.com/png-images/qianku/default-avatar_2406311.png!w700wp" alt="<?= $service->title ?>"></a>
                                                </div>

                                                <div class="pg-services-info">
                                                    <a href="<?= $service->slug . '.html' ?>"><?= $service->short_description ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="all-services-btn">
                            <a href="/dich-vu">Xem thêm tất cả dịch vụ của Top Top <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
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

