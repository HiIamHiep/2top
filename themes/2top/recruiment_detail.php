<?php
getHeader();
?>

<main>
    <style>
        .footer-contact {
            display: none;
        }
    </style>
    <section id="section-recruitment-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="recruitment-content">
                        <div class="recruitment-breadcrumbs">
                            <p><a href="">Home</a> <i class="fa-solid fa-caret-right" aria-hidden="true"></i> <a href="">Tuyển dụng</a> <i class="fa-solid fa-caret-right" aria-hidden="true"></i> <?= $recruitment->title ?></p>
                        </div>
                        <div class="recruitment-banner">
                            <img src="<?= $recruitment->thumb_url ?>" alt="<?= $recruitment->title ?>">
                        </div>

                        <div class="recruitment-title">
                            <h1><?= $recruitment->title ?></h1>

                            <p><i class="fa-regular fa-calendar-days" aria-hidden="true"></i> <?= date('d-m-Y', strtotime($recruitment->created_at)) ?></p>
                        </div>

                        <div class="recruitment-content-detail">
                            <?= $recruitment->content ?>

                            <h3>Cách thức ứng tuyển:</h3>
                            <p>Gửi CV theo form bên dưới hoặc về địa chỉ <span>tuyendung@toptop.vn</span></p>
                        </div>

                        <div class="recruitment-registration-form" id="recruitment-form">

                            <h3>CHÚNG TÔI LUÔN CHÀO ĐÓN BẠN GIA NHẬP TOP TOP</h3>

                            <div class="registration-form-content">
                                <form action="">
                                    <select name="position" id="position" required="">
                                        <option value="position-1">Chọn chức vụ</option>
                                        <option value="position-2">Trưởng phòng IT</option>
                                        <option value="position-3">Trưởng phòng Marketing</option>
                                        <option value="position-4">Thực tập sinh IT</option>
                                    </select>

                                    <input type="text" placeholder="Họ và tên *" required="">

                                    <input type="text" placeholder="Số điện thoại *" required="">

                                    <input type="text" placeholder="Email *" required="">

                                    <input type="file" required="">

                                    <div>
                                        <button class="custom-btn" type="submit">Gửi</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="recruitment-right-site">
                        <div class="recruitment-job-info">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="td-strong">Nơi làm việc:</td>
                                    <td><?= $recruitment->address ?></td>
                                </tr>
                                <tr>
                                    <td class="td-strong">Cấp bậc:</td>
                                    <td><?= ucfirst(strtolower($recruitment->levels)) ?></td>
                                </tr>
                                <tr>
                                    <td class="td-strong">Bằng cấp:</td>
                                    <td><?= $recruitment->certificates ?></td>
                                </tr>
                                <tr>
                                    <td class="td-strong">Kinh nghiệm:</td>
                                    <td><?= $recruitment->experience ?></td>
                                </tr>
                                <tr>
                                    <td class="td-strong">Mức lương:</td>
                                    <td><?= number_format($recruitment->min_salary) ?> - <?= number_format($recruitment->max_salary) ?> tr</td>
                                </tr>
                                <tr>
                                    <td class="td-strong">Số lượng tuyển:</td>
                                    <td><?= $recruitment->employees_number ?></td>
                                </tr>
                                <tr>
                                    <td class="td-strong">Hạn nộp hồ sơ:</td>
                                    <td><?= date('d-m-Y', strtotime($recruitment->end_date)) ?></td>
                                </tr>
                                </tbody>
                            </table>

                            <div>
                                <a href="#recruitment-form">Ứng tuyển ngay</a>
                            </div>

                        </div>

                        <div class="recruitment-other-jobs">
                            <h3>
                                Các vị trí tuyển dụng khác
                            </h3>

                            <div class="list-recruitment-other-jobs">
                                <?php foreach ($recruitmentsTrending as $recruitment) ?>
                                <div class="item-recruitment-other-jobs">
                                    <div class="other-jobs-date">
                                        <p><?= date('d-m-Y', strtotime($recruitment->created_at)) ?></p>
                                    </div>

                                    <div class="other-jobs-name">
                                        <a href="/tuyen-dung/<?= $recruitment->slug ?>"><?= $recruitment->title ?></a>
                                    </div>

                                    <div class="other-jobs-description">
                                        <?= $recruitment->short_description ?>
                                    </div>

                                    <div class="other-jobs-btn">
                                        <a href="/tuyen-dung/<?= $recruitment->slug ?>">Xem chi tiết <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i></a>
                                    </div>
                                </div>

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
