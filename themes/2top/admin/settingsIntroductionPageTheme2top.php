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
                                        aria-selected="true">Banner
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                        type="button" role="tab" aria-controls="tab2" aria-selected="false">Dịch vụ nổi
                                    bật
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
                                        <h5 class="mb-0">Khối banner</h5>
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
                                                document.getElementById("banner_desktop_introduction").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Banner</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="banner_desktop_introduction"
                                                       id="banner_desktop_introduction"
                                                       value=<?= @$setting['banner_desktop_introduction'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage1();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <textarea type="text" class="form-control"
                                                      name="banner_title_introduction"
                                                      rows="5"><?php echo @$setting['banner_title_introduction'] ?></textarea>
                                        </div>

                                        <script type="text/javascript">
                                            function BrowseServerImage2() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage2;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage2(fileUrl) {
                                                document.getElementById("banner_contain_img_introduction").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Ảnh contain</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="banner_contain_img_introduction"
                                                       id="banner_contain_img_introduction"
                                                       value=<?= @$setting['banner_contain_img_introduction'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage2();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung
                                                contain</label>
                                            <textarea type="text" class="form-control"
                                                      name="banner_contain_text_introduction"
                                                      rows="5"><?php echo @$setting['banner_contain_text_introduction'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <div class="row">
                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối dịch vụ giới thiệu</h5>
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
                                                document.getElementById("img_service_introduction").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Ảnh dịch vụ</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="img_service_introduction" id="img_service_introduction"
                                                       value=<?= @$setting['img_service_introduction'] ?>>
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
                                            <textarea type="text" class="form-control"
                                                      name="service_title_introduction"
                                                      rows="5"><?php echo @$setting['service_title_introduction'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên nút bấm</label>
                                            <input type="text" class="form-control"
                                                   name="name_button_service_introduction"
                                                   value="<?php echo @$setting['name_button_service_introduction']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Link nút bấm</label>
                                            <input type="text" class="form-control"
                                                   name="link_button_service_introduction"
                                                   value="<?php echo @$setting['link_button_service_introduction']; ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối dịch vụ giới thiệu</h5>
                                    </div>
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối about group</h5>
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
                                                document.getElementById("img_about_introduction_2").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Ảnh about group
                                                footer</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="img_about_introduction_2" id="img_about_introduction_2"
                                                       value=<?= @$setting['img_about_introduction_2'] ?>>
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
                                            <input type="text" class="form-control" name="title_about_introduction_2"
                                                   value="<?php echo @$setting['title_about_introduction_2']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="content_about_introduction_2"
                                                      rows="5"><?php echo @$setting['content_about_introduction_2'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối trang trí</h5>
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
                                                document.getElementById("img_decoration_introduction").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Ảnh contain</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="img_decoration_introduction"
                                                       id="img_decoration_introduction"
                                                       value=<?= @$setting['img_decoration_introduction'] ?>>
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
                                            <input type="text" class="form-control" name="title_decoration_introduction"
                                                   value="<?php echo @$setting['title_decoration_introduction']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="content_decoration_introduction"
                                                      rows="5"><?php echo @$setting['content_decoration_introduction'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối about group</h5>
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
                                                document.getElementById("img_about_introduction").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Ảnh about
                                                group</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="img_about_introduction" id="img_about_introduction"
                                                       value=<?= @$setting['img_about_introduction'] ?>>
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
                                            <input type="text" class="form-control" name="title_about_introduction"
                                                   value="<?php echo @$setting['title_about_introduction']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="content_about_introduction"
                                                      rows="5"><?php echo @$setting['content_about_introduction'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên nút bấm</label>
                                            <input type="text" class="form-control"
                                                   name="name_button_about_introduction"
                                                   value="<?php echo @$setting['name_button_about_introduction']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Link nút bấm</label>
                                            <input type="text" class="form-control"
                                                   name="link_button_about_introduction"
                                                   value="<?php echo @$setting['link_button_about_introduction']; ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
