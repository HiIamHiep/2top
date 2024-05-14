<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a
                href="/plugins/admin/RecruitmentManager-view-admin-recruitment-listRecruitmentAdmin"><?= ucfirst($table) ?></a> /</span>
        Thông tin <?= $table ?>
    </h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-12">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Thông tin đăng bài <?= $table ?></h5>
                </div>
                <div class="card-body">
                    <p><?php echo $mess; ?></p>
                    <?= $this->Form->create(); ?>
                    <div class="row">
                        <!--           left             -->

                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label">Tiêu đề *</label>
                                <input type="text" class="form-control" name="title" value="<?= @$data->title ?>">
                            </div>

                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label">Mô tả ngắn</label>
                                <textarea class="form-control" name="short_description" rows="5"><?= @$data->short_description ?></textarea>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label class="form-label">Min Salary</label>
                                    <input type="number" class="form-control" name="min_salary"
                                           value="<?= @$data->min_salary ?>">
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label class="form-label">Max Salary</label>
                                    <input type="number" class="form-control" name="max_salary"
                                           value="<?= @$data->max_salary ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label class="form-label">Start Date</label>
                                    <input type="date" class="form-control" name="start_date"
                                           value="<?= date('Y-m-d', strtotime(@$data->start_date)) ?>">
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="end_date"
                                           value="<?= date('Y-m-d', strtotime(@$data->end_date)) ?>">
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label">Kinh nghiệm</label>
                                <input type="text" class="form-control" name="experience"
                                       value="<?= @$data->experience ?>">
                            </div>
                        </div>


                        <!--          right              -->
                        <div class="col-12 col-sm-12 col-md-6">
                            <script type="text/javascript">
                                function BrowseServerImage1() {
                                    var finder = new CKFinder();
                                    finder.basePath = "..";
                                    finder.selectActionFunction = SetFileFieldImage1;
                                    finder.popup();
                                }

                                function SetFileFieldImage1(fileUrl) {
                                    document.getElementById("thumb_url").value = fileUrl;
                                }
                            </script>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Thumb</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="" aria-label=""
                                           aria-describedby="btnGroupAddonUpload1" name="thumb_url" id="thumb_url"
                                           value="<?= @$data->thumb_url ?>">
                                    <div class="input-group-prepend">
                                        <div class="btn btn-secondary input-group-text"
                                             onclick="BrowseServerImage1();"
                                             id="btnGroupAddonUpload1">Upload
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row select-location">
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label class="form-label" for="basic-default-email">Thành phố</label>
                                    <div class="input-group input-group-merge">
                                        <select class="form-select select-city" name="city" id="select-city">

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label class="form-label" for="basic-default-email">Quận/Huyện</label>
                                    <div class="input-group input-group-merge">
                                        <select class="form-select select-district" name="district"
                                                id="select-district">

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value="<?= @$data->address ?>">
                            </div>

                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label" for="basic-default-email">Bằng cấp</label>
                                <div class="input-group input-group-merge">
                                    <select class="form-select" name="certificates" id="certificates">
                                        <option value="0">KHÔNG YÊU CẦU</option>
                                        <?php foreach ($certificates as $value => $certificate): ?>
                                            <option
                                                value="<?= $value ?>"
                                                <?php
                                                if (in_array($value, $arr['certificates'])) {
                                                    echo 'selected';
                                                }
                                                ?>
                                            >
                                                <?= $certificate ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label" for="basic-default-email">Level</label>
                                <div class="input-group input-group-merge">
                                    <select class="form-select" name="levels" id="levels">
                                        <?php foreach ($levels as $value => $level): ?>
                                            <option
                                                value="<?= $value ?>"
                                                <?php
                                                    if (in_array($value, $arr['levels'])) {
                                                        echo 'selected';
                                                    }
                                                ?>
                                            >
                                                <?= $level ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label">Số lượng tuyển</label>
                                <input type="text" class="form-control" name="employees_number"
                                       value="<?= @$data->employees_number ?>">
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
</div>
<script>
    async function loadDistrict(parent) {
        parent.find(".select-district").empty();
        const path = parent.find(".select-city option:selected").data("path");
        if (!path) {
            return;
        }

        const response = await fetch('/webroot/locations/' + path);
        const districts = await response.json();
        let string = '';
        const selectedValue = $("#select-district").val();
        $.each(districts.district, function (index, each) {
            if (each.pre === 'Quận' || each.pre === 'Huyện') {
                string += `<option`;
                if (selectedValue === each.name) {
                    string += ` selected `;
                }
                string += `>${each.name}</option>`;
            }
        })
        parent.find(".select-district").append(string);

    }

    $(document).ready(async function () {
        //Select 2
        $('#levels').select2();
        $("#select-city").select2();
        $("#select-district").select2();
        $("#select-city").change(function () {
            loadDistrict($(this).parents('.select-location'));
        })

        // Fetch address
        const response = await fetch('/webroot/locations/index.json');
        const cities = await response.json();

        $.each(cities, function (index, each) {
            $("#select-city")
                .append($(`<option data-path="${each.file_path}">${index}</option>`));
        })
        await loadDistrict($("#select-city").parents('.select-location'));


    });
</script>
