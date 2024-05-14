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
                                                document.getElementById("banner_service").value = fileUrl;
                                            }
                                        </script>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Banner</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                       aria-describedby="btnGroupAddonUpload1" name="banner_service" id="banner_service"
                                                       value=<?= @$setting['banner_service'] ?>>
                                                <div class="input-group-prepend">
                                                    <div class="btn btn-secondary input-group-text"
                                                         onclick="BrowseServerImage1();"
                                                         id="btnGroupAddonUpload1">Upload
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tên thể loại</label>
                                            <input type="text" class="form-control" name="banner_service_category"
                                                   value="<?php echo @$setting['banner_service_category']; ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
                                            <textarea type="text" class="form-control"
                                                      name="banner_service_title"
                                                      rows="5"><?php echo @$setting['banner_service_title'] ?></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">

                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
