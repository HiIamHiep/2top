<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a
                href="/plugins/admin/ServiceManager-view-admin-service-listServiceAdmin"><?= ucfirst($table) ?></a> /</span>
        Thông tin dịch vụ
    </h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-12">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Thông tin <?= $table ?></h5>
                </div>
                <div class="card-body">
                    <p><?php echo $mess; ?></p>
                    <?= $this->Form->create(); ?>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label">Tiêu đề *</label>
                                <input type="text" class="form-control" name="title" value="<?= @$data->title ?>">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Mô tả ngắn</label>
                                    <textarea style="border: 1px solid #abadb3;height: auto;" name="short_description"
                                              id="short_description"><?= @$data->short_description ?></textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.replace("short_description", {
                                            allowedContent: true,
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">

                            <script type="text/javascript">
                                function BrowseServerImage1() {
                                    var finder = new CKFinder();
                                    finder.basePath = "..";
                                    finder.selectActionFunction = SetFileFieldImage1;
                                    finder.popup();
                                }

                                function SetFileFieldImage1(fileUrl) {
                                    document.getElementById("image_url").value = fileUrl;
                                }
                            </script>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Logo</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="" aria-label=""
                                           aria-describedby="btnGroupAddonUpload1" name="image_url" id="image_url"
                                           value="<?= @$data->image_url ?>">
                                    <div class="input-group-prepend">
                                        <div class="btn btn-secondary input-group-text"
                                             onclick="BrowseServerImage1();"
                                             id="btnGroupAddonUpload1">Upload
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Nội dung bải viết</label>
                                <textarea style="border: 1px solid #abadb3;height: auto;" name="content"
                                          id="content"><?= @$data->content ?></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace("content", {
                                        allowedContent: true,
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
