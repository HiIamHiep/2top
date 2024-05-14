<?php
    getHeader();
?>
<style>
    .footer-contact {
        display: none;
    }
</style>

<main>

    <section id="section-banner-top" class="contact">

        <div class="container">
            <div class="banner-contain">
                <div>
                    <div class="desktop-banner">
                        <img src="<?=  $settingsPageContact['banner_desktop_contact'] ?>" alt="">
                    </div>
                    <div class="banner-contain-title">
                        <?= $settingsPageContact['banner_title_contact'] ?>
                    </div>
                </div>

            </div>

            <div class="banner-contain-3">
                <div class="row">
                    <div class="col-lg-6 col-12 no-padding-right">
                        <div class="contact-form">
                            <h4><?= $settingsPageContact['banner_contain_text_introduction'] ?></h4>
                            <form action="">
                                <input type="text" placeholder="Họ và tên *" required>

                                <input type="text" placeholder="Số điện thoại *" required>

                                <input type="email" placeholder="Email *" required>

                                <select name="opp" id="" required>
                                    <option value="opp1">Đối tác</option>
                                    <option value="opp2">Khách hàng</option>
                                </select>

                                <textarea name="" id="" cols="30" rows="5" placeholder="Nội dung tin nhắn *" required></textarea>

                                <div><button class="custom-btn" type="submit"><?= $settingsPageContact['name_button_form_contact'] ?></button></div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 no-padding">
                        <div class="contact-form-img">
                            <img src="<?= $settingsPageContact['banner_contain_img_contact'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="section-company-address">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="company-address">
                        <ul>
                            <li>Email <br> <span><?= $settingsPageContact['email_contact'] ?></span></li>
                            <li>Hotline <br> <span><?= $settingsPageContact['hotline_contact'] ?></li>
                            <li>Trụ sở <br> <span><?= $settingsPageContact['address_contact'] ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="company-address-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.391816728569!2d105.77771597612795!3d20.97692538955525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134530050a89895%3A0x1038921026f5fc65!2sPhoenix%20Building%20-%2018%20Thanh%20B%C3%ACnh!5e0!3m2!1svi!2s!4v1708933628319!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
    getFooter();
?>
