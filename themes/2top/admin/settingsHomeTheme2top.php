<!-- Helpers -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Theme warm - Cài đặt trang chủ</h4>

    <!-- Basic Layout -->
    <p><?php echo @$mess; ?></p>
    <?= $this->Form->create(); ?>
    <div class="row">
        <!-- Khối banner -->
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card mb-4">
                <div class="card-body row ">
                    <div class="mb-3 col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                        aria-selected="true">Đầu trang
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                        type="button" role="tab" aria-controls="tab2" aria-selected="false">Thân
                                    Trang
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                        type="button" role="tab" aria-controls="tab3" aria-selected="false">Chân
                                    Trang
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tab header -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="row">
                            <!-- Khối banner -->
                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối đầu trang</h5>
                                    </div>
                                    <div class="card-body">
                                        <script type="text/javascript">
                                            function BrowseServerImage1() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage1;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage1(fileUrl) {
                                                document.getElementById("brand").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Logo</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1" name="brand" id="brand"
                                                       value=<?= @$setting['brand'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage1();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên nút bấm</label>
                                            <input type="text" class="form-control" name="name_button_header"
                                                   value="<?php echo @$setting['name_button_header']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Link nút bấm</label>
                                            <input type="text" class="form-control" name="link_button_header"
                                                   value="<?php echo @$setting['link_button_header']; ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <div class="row">
                            <!-- Khối banner -->
                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                                <!-- Khối giá trị của công ty -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối giá trị công ty</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <textarea type="text" class="form-control"
                                                      name="title_worth"><?php echo @$setting['title_worth'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên</label>
                                            <textarea class="form-control" name="content_worth"
                                                      rows="5"><?= @$setting['content_worth'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Card 1  -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối card giá trị 1</h5>
                                    </div>
                                    <div class="card-body">

                                        <script type="text/javascript">
                                            function BrowseServerImage3() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage3;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage3(fileUrl) {
                                                document.getElementById("icon_card_worth_1").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Icon</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="icon_card_worth_1" id="icon_card_worth_1"
                                                       value=<?= @$setting['icon_card_worth_1'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage3();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_card_worth_1"
                                                   value="<?php echo @$setting['title_card_worth_1'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="context_card_worth_1"
                                                      rows="5"><?= @$setting['context_card_worth_1'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Card 2  -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối card giá trị 2</h5>
                                    </div>
                                    <div class="card-body">

                                        <script type="text/javascript">
                                            function BrowseServerImage4() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage4;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage4(fileUrl) {
                                                document.getElementById("icon_card_worth_2").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Icon</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="icon_card_worth_2" id="icon_card_worth_2"
                                                       value=<?= @$setting['icon_card_worth_2'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage4();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_card_worth_2"
                                                   value="<?php echo @$setting['title_card_worth_2'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="context_card_worth_2"
                                                      rows="5"><?= @$setting['context_card_worth_2'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Card 3  -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối card giá trị 3</h5>
                                    </div>
                                    <div class="card-body">

                                        <script type="text/javascript">
                                            function BrowseServerImage5() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage5;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage5(fileUrl) {
                                                document.getElementById("icon_card_worth_3").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Icon</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="icon_card_worth_3" id="icon_card_worth_3"
                                                       value=<?= @$setting['icon_card_worth_3'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage5();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_card_worth_3"
                                                   value="<?php echo @$setting['title_card_worth_3'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="context_card_worth_3"
                                                      rows="5"><?= @$setting['context_card_worth_3'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Card 4  -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối card giá trị 4</h5>
                                    </div>
                                    <div class="card-body">

                                        <script type="text/javascript">
                                            function BrowseServerImage6() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage6;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage6(fileUrl) {
                                                document.getElementById("icon_card_worth_4").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Icon</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="icon_card_worth_4" id="icon_card_worth_4"
                                                       value=<?= @$setting['icon_card_worth_4'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage6();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_card_worth_4"
                                                   value="<?php echo @$setting['title_card_worth_4'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="context_card_worth_4"
                                                      rows="5"><?= @$setting['context_card_worth_4'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Card 5  -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối card giá trị 5</h5>
                                    </div>
                                    <div class="card-body">

                                        <script type="text/javascript">
                                            function BrowseServerImage7() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage7;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage7(fileUrl) {
                                                document.getElementById("icon_card_worth_5").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Icon</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="icon_card_worth_5" id="icon_card_worth_5"
                                                       value=<?= @$setting['icon_card_worth_5'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage7();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_card_worth_5"
                                                   value="<?php echo @$setting['title_card_worth_5'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="context_card_worth_5"
                                                      rows="5"><?= @$setting['context_card_worth_5'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Card 6  -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối card giá trị 6</h5>
                                    </div>
                                    <div class="card-body">

                                        <script type="text/javascript">
                                            function BrowseServerImage8() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage8;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage8(fileUrl) {
                                                document.getElementById("icon_card_worth_6").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Icon</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="icon_card_worth_6" id="icon_card_worth_6"
                                                       value=<?= @$setting['icon_card_worth_6'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage8();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_card_worth_6"
                                                   value="<?php echo @$setting['title_card_worth_6'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="context_card_worth_6"
                                                      rows="5"><?= @$setting['context_card_worth_6'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối Slide</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên thương
                                                hiệu</label>
                                            <input type="text" class="form-control" name="name_brand_slide"
                                                   value="<?php echo @$setting['name_brand_slide']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Mô tả
                                                ngắn</label>
                                            <input type="text" class="form-control" name="title_slide"
                                                   value="<?php echo @$setting['title_slide']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="content_slide"
                                                      rows="5"><?= @$setting['content_slide'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Slide id</label>
                                            <input type="text" class="form-control" name="id_slide"
                                                   value="<?php echo @$setting['id_slide']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên nút
                                                bấm</label>
                                            <input type="text" class="form-control" name="name_button_slide"
                                                   value="<?php echo @$setting['name_button_slide']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Đường dẫn nút
                                                bấm</label>
                                            <input type="text" class="form-control" name="link_button_slide"
                                                   value="<?php echo @$setting['link_button_slide']; ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!--Khối học sinh-->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối giới thiệu học sinh</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên</label>
                                            <input type="text" class="form-control" name="name_service"
                                                   value="<?php echo @$setting['name_service']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_service"
                                                   value="<?php echo @$setting['title_service']; ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Khối đối tác công ty -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối đối tác</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên</label>
                                            <input type="text" class="form-control" name="name_partner"
                                                   value="<?php echo @$setting['name_partner'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_partner"
                                                   value="<?php echo @$setting['title_partner'] ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Khối đối feedback -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối Feedback</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên</label>
                                            <input type="text" class="form-control" name="name_feedback"
                                                   value="<?php echo @$setting['name_feedback'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_feedback"
                                                   value="<?php echo @$setting['title_feedback'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Id img
                                                feedback</label>
                                            <input type="text" class="form-control" name="id_feedback"
                                                   value="<?php echo @$setting['id_feedback'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <script type="text/javascript">
                                                function BrowseServerImage2() {
                                                    var finder = new CKFinder();
                                                    finder.basePath = "..";
                                                    finder.selectActionFunction = SetFileFieldImage2;
                                                    finder.popup();
                                                }

                                                function SetFileFieldImage2(fileUrl) {
                                                    document.getElementById("avatar_customer_feedback").value = fileUrl;
                                                }
                                            </script>
                                            <label class="form-label" for="basic-default-fullname">Avatar</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="avatar_customer_feedback" id="avatar_customer_feedback"
                                                       value=<?= @$setting['avatar_customer_feedback'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage2();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Người đánh
                                                giá</label>
                                            <textarea class="form-control" name="customer_company_feedback"
                                                      rows="5"><?= @$setting['customer_company_feedback'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="customer_content_feedback"
                                                      rows="5"><?= @$setting['customer_content_feedback'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!--    Khối bài tin tức    -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối tin tức</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên</label>
                                            <input type="text" class="form-control" name="name_news"
                                                   value="<?php echo @$setting['name_news'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_news"
                                                   value="<?php echo @$setting['title_news'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Content</label>
                                            <input type="text" class="form-control" name="content_news"
                                                   value="<?php echo @$setting['content_news'] ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!--Khối giới thiệu-->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối giới thiệu</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên thương
                                                hiệu</label>
                                            <input type="text" class="form-control" name="name_brand_introduction"
                                                   value="<?php echo @$setting['name_brand_introduction']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_introduction"
                                                   value="<?php echo @$setting['title_introduction']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea class="form-control" name="content_introduction"
                                                      rows="5"><?= @$setting['content_introduction'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên nút
                                                bấm</label>
                                            <input type="text" class="form-control" name="name_button_introduction"
                                                   value="<?php echo @$setting['name_button_introduction']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Đường dẫn nút
                                                bấm</label>
                                            <input type="text" class="form-control" name="link_button_introduction"
                                                   value="<?php echo @$setting['link_button_introduction']; ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <!-- Khối nhân sự -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối thẻ giới thiệu thành viên</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên</label>
                                            <input type="text" class="form-control" name="name_personnel"
                                                   value="<?php echo @$setting['name_personnel'] ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title_personnel"
                                                   value="<?php echo @$setting['title_personnel'] ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <div class="row">
                            <!-- Khối banner -->
                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                                <!-- Khối footer -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối chân trang</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <script type="text/javascript">
                                                function BrowseServerImage9() {
                                                    var finder = new CKFinder();
                                                    finder.basePath = "..";
                                                    finder.selectActionFunction = SetFileFieldImage9;
                                                    finder.popup();
                                                }

                                                function SetFileFieldImage9(fileUrl) {
                                                    document.getElementById("logo_company_footer").value = fileUrl;
                                                }
                                            </script>
                                            <label class="form-label" for="basic-default-fullname">Logo</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="logo_company_footer" id="logo_company_footer"
                                                       value=<?= @$setting['logo_company_footer'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage9();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Lời giới
                                                thiệu</label>
                                            <textarea class="form-control" name="intro_company_footer"
                                                      rows="5"><?= @$setting['intro_company_footer'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Địa chỉ</label>
                                            <textarea class="form-control" name="address_company_footer"
                                                      rows="5"><?= @$setting['address_company_footer'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Dịch vụ</label>
                                            <textarea class="form-control" name="services_company_footer"
                                                      rows="5"><?= @$setting['services_company_footer'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tuyển
                                                dụng</label>
                                            <textarea class="form-control" name="recruitment_company_footer"
                                                      rows="5"><?= @$setting['recruitment_company_footer'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Báo giá dịch
                                                vụ</label>
                                            <textarea class="form-control" name="advise_footer"
                                                      rows="5"><?= @$setting['advise_footer'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Copyright</label>
                                            <input type="text" class="form-control" name="copyright_footer"
                                                   value="<?php echo @$setting['copyright_footer'] ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <!--   Khối footer contact   -->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối chân trang liên hệ</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <textarea class="form-control" name="contact_text_footer"
                                                      rows="3"><?= @$setting['contact_text_footer'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên nút
                                                bấm</label>
                                            <input type="text" class="form-control" name="contact_button_footer"
                                                   value="<?php echo @$setting['contact_button_footer'] ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Tài khoản mạng xã hội</h5>
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Facebook</label>
                                                <input type="text" class="form-control" name="facebook"
                                                       value="<?php echo @$setting['facebook']; ?>"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Youtube</label>
                                                <input type="text" class="form-control" name="youtube"
                                                       value="<?php echo @$setting['youtube']; ?>"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">TikTok</label>
                                                <input type="text" class="form-control" name="tiktok"
                                                       value="<?php echo @$setting['tiktok']; ?>"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Instagram</label>
                                                <input type="text" class="form-control" name="instagram"
                                                       value="<?php echo @$setting['instagram']; ?>"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">LinkedIn</label>
                                                <input type="text" class="form-control" name="linkedIn"
                                                       value="<?php echo @$setting['linkedIn']; ?>"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Twitter</label>
                                                <input type="text" class="form-control" name="twitter"
                                                       value="<?php echo @$setting['twitter']; ?>"/>
                                            </div>
                                        </div>

                                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <button type="submit" class="btn btn-primary">Lưu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
