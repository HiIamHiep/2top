<!-- Helpers -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Theme2top - Cài đặt trang recuitment page</h4>

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
                                        <h5 class="mb-0">Top Banner</h5>
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
                                                document.getElementById("banner_desktop").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Banner Top</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1" name="banner_desktop"
                                                       id="banner_desktop"
                                                       value=<?= @$setting['banner_desktop'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage1();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Slogan</label>
                                            <textarea type="text" class="form-control"
                                                      name="banner_contain_title"
                                                      rows="5"><?php echo @$setting['banner_contain_title'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                            </div>

                            <!-- Layout right-->
                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <!--   Banner 2-->
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Banner 2</h5>
                                    </div>
                                    <div class="card-body">
                                        <script type="text/javascript">
                                            function BrowseServerImage2() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage2;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage2(fileUrl) {
                                                document.getElementById("banner_contain_2_img").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Banner 2</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="banner_contain_2_img" id="banner_contain_2_img"
                                                       value=<?= @$setting['banner_contain_2_img'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage2();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="banner_contain_2_content"
                                                      rows="5"><?php echo @$setting['banner_contain_2_content'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên nút bấm</label>
                                            <input type="text" class="form-control" name="banner_contain_2_btn"
                                                   value="<?php echo @$setting['banner_contain_2_btn']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Link nút bấm</label>
                                            <input type="text" class="form-control" name="banner_contain_2_link"
                                                   value="<?php echo @$setting['banner_contain_2_link']; ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <div class="row">
                            <!-- Khối văn hóa công ty -->
                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối văn hóa doanh nghiệp</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="company_culture_title"
                                                   value="<?php echo @$setting['company_culture_title']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Mô tả ngắn</label>
                                            <textarea type="text" class="form-control"
                                                      name="company_culture_short_description"
                                                      rows="5"><?php echo @$setting['company_culture_short_description'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ văn hóa 1</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="item_company_culture_num_1"
                                                   value="<?php echo @$setting['item_company_culture_num_1']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="item_company_culture_name_1"
                                                   value="<?php echo @$setting['item_company_culture_name_1']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="item_company_culture_detail_1"
                                                      rows="5"><?php echo @$setting['item_company_culture_detail_1'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ văn hóa 2</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="item_company_culture_num_2"
                                                   value="<?php echo @$setting['item_company_culture_num_2']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="item_company_culture_name_2"
                                                   value="<?php echo @$setting['item_company_culture_name_2']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="item_company_culture_detail_2"
                                                      rows="5"><?php echo @$setting['item_company_culture_detail_2'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ văn hóa 3</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="item_company_culture_num_3"
                                                   value="<?php echo @$setting['item_company_culture_num_3']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="item_company_culture_name_3"
                                                   value="<?php echo @$setting['item_company_culture_name_3']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="item_company_culture_detail_3"
                                                      rows="5"><?php echo @$setting['item_company_culture_detail_3'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ văn hóa 4</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="item_company_culture_num_4"
                                                   value="<?php echo @$setting['item_company_culture_num_4']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="item_company_culture_name_4"
                                                   value="<?php echo @$setting['item_company_culture_name_4']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="item_company_culture_detail_4"
                                                      rows="5"><?php echo @$setting['item_company_culture_detail_4'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ văn hóa 5</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="item_company_culture_num_5"
                                                   value="<?php echo @$setting['item_company_culture_num_5']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="item_company_culture_name_5"
                                                   value="<?php echo @$setting['item_company_culture_name_5']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="item_company_culture_detail_5"
                                                      rows="5"><?php echo @$setting['item_company_culture_detail_5'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ văn hóa 6</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="item_company_culture_num_6"
                                                   value="<?php echo @$setting['item_company_culture_num_6']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="item_company_culture_name_6"
                                                   value="<?php echo @$setting['item_company_culture_name_6']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="item_company_culture_detail_6"
                                                      rows="5"><?php echo @$setting['item_company_culture_detail_6'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối chiêu mộ vị trí</h5>
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
                                                document.getElementById("jobs_banner").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Banner</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="jobs_banner" id="jobs_banner"
                                                       value=<?= @$setting['jobs_banner'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage3();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="jobs_content_title"
                                                      rows="5"><?php echo @$setting['jobs_content_title'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối quyền lợi</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="benefit_title"
                                                   value="<?php echo @$setting['benefit_title']; ?>"/>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ lợi ích 1</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="benefit_num_1"
                                                   value="<?php echo @$setting['benefit_num_1']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="benefit_name_1"
                                                   value="<?php echo @$setting['benefit_name_1']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="benefit_detail_1"
                                                      rows="5"><?php echo @$setting['benefit_detail_1'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ lợi ích 2</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="benefit_num_2"
                                                   value="<?php echo @$setting['benefit_num_2']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="benefit_name_2"
                                                   value="<?php echo @$setting['benefit_name_2']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="benefit_detail_2"
                                                      rows="5"><?php echo @$setting['benefit_detail_2'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ lợi ích 1</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="benefit_num_3"
                                                   value="<?php echo @$setting['benefit_num_3']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="benefit_name_3"
                                                   value="<?php echo @$setting['benefit_name_3']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="benefit_detail_3"
                                                      rows="5"><?php echo @$setting['benefit_detail_3'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ lợi ích 4</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="benefit_num_4"
                                                   value="<?php echo @$setting['benefit_num_4']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="benefit_name_4"
                                                   value="<?php echo @$setting['benefit_name_4']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="benefit_detail_4"
                                                      rows="5"><?php echo @$setting['benefit_detail_4'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ lợi ích 5</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="benefit_num_5"
                                                   value="<?php echo @$setting['benefit_num_5']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="benefit_name_5"
                                                   value="<?php echo @$setting['benefit_name_5']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="benefit_detail_5"
                                                      rows="5"><?php echo @$setting['benefit_detail_5'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Thẻ lợi ích 6</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Số hiệu thẻ</label>
                                            <input type="text" class="form-control" name="benefit_num_6"
                                                   value="<?php echo @$setting['benefit_num_6']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="benefit_name_6"
                                                   value="<?php echo @$setting['benefit_name_6']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="benefit_detail_6"
                                                      rows="5"><?php echo @$setting['benefit_detail_6'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <div class="row">

                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối trang trí</h5>
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
                                                document.getElementById("decoration_media").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Banner</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="decoration_media" id="decoration_media"
                                                       value=<?= @$setting['decoration_media'] ?>>
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
                                            <input type="text" class="form-control" name="decoration_title"
                                                   value="<?php echo @$setting['decoration_title']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nội dung</label>
                                            <textarea type="text" class="form-control"
                                                      name="decoration_detail"
                                                      rows="5"><?php echo @$setting['decoration_detail'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                registration-form-img
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Khối form ứng tuyển</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <input type="text" class="form-control" name="registration-title"
                                                   value="<?php echo @$setting['registration-title']; ?>"/>
                                        </div>

                                        <script type="text/javascript">
                                            function BrowseServerImage5() {
                                                var finder = new CKFinder();
                                                finder.basePath = "..";
                                                finder.selectActionFunction = SetFileFieldImage5;
                                                finder.popup();
                                            }

                                            function SetFileFieldImage5(fileUrl) {
                                                document.getElementById("registration_form_img").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Ảnh</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1"
                                                       name="registration_form_img" id="registration_form_img"
                                                       value=<?= @$setting['registration_form_img'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage5();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
    <?= $this->Form->end() ?>
</div>
