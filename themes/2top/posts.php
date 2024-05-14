<?php
    getHeader();
?>

<main>
    <section id="section-banner-top">
        <div class="container">
            <div class="banner-contain">
                <div class="desktop-banner">
                    <img src="<?= $urlThemeActive ?>/asset/image/teamwork.png" alt="">
                </div>
                <div class="banner-contain-title">
                    <p>Dịch vụ</p>
                    <h3>Những <span>dịch vụ</span> chúng tôi <br> cung cấp cho khách hàng</h3>
                </div>


            </div>
        </div>
    </section>

    <section id="section-all-posts">
        <div class="container">
            <div class="list-post">
                <div class="row">
                    <?php foreach ($posts as $post): ?>
                    <div class="item-post col-lg-4 col-md-6 col-sm-12">
                        <div class="post-content">
                            <div class="post-img">
                                <a href="<?= $post->slug . '.html' ?>"><img src="<?= $post->image ?>" alt=""></a>
                            </div>

                            <div class="post-detail">
                                <div class="post-timepost">
                                    <i class="fa-regular fa-calendar-days" aria-hidden="true"></i>
                                    <p><?= date("d-m-Y", $post->time) ?></p>
                                </div>
                                <div class="post-title">
                                    <a href="<?= $post->slug . '.html' ?>" tabindex="0"><?= $post->title ?></a>
                                </div>
                                <div class="post-text">
                                    <p>
                                        <?= $post->description ?>
                                    </p>
                                </div>
                                <div class="post-btn">
                                    <a href="<?= $post->slug ?>">Xem chi tiết <i class="fa-solid fa-arrow-right-long"
                                                               aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div class="post-pagenation">
                    <?php
                    if ($totalPage > 0) {
                        if ($page > 5) {
                            $startPage = $page - 5;
                        } else {
                            $startPage = 1;
                        }

                        if ($totalPage > $page + 5) {
                            $endPage = $page + 5;
                        } else {
                            $endPage = $totalPage;
                        }

                        echo '<div class="pagenation-arrow pagenation-prev">
                                   <button><a class="page-link" href="'.$urlPage.'1"><i class="fa-solid fa-chevron-left" aria-hidden="true"></i></a>
                                   </button>
                              </div>';

                        for ($i = $startPage; $i <= $endPage; $i++) {
                            $active = ($page == $i) ? 'active' : '';

                            echo '<div class="page-number">
                                    <button '.$active.'">
                                            <a class="page-link" href="'.$urlPage.$i.'  ">'.$i.'</a>
                                    </button>
                                  </div>';
                        }

                        echo '<div class="pagenation-arrow pagenation-next">
                                    <button>
                                    <a class="page-link" href="'.$urlPage.$totalPage.'"
                                                          ><i class="fa-solid fa-chevron-right" aria-hidden="true"></i></a></button>
                                    </div>
                                </button>
                               </div>';
                    }
                    ?>


            </div>
        </div>

    </section>

</main>

<?php getFooter(); ?>
