<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a href="/plugins/admin/StudentManager-view-admin-student-listStudentAdmin">Học sinh</a> /</span>
        Thông tin học sinh
    </h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-12">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Thông tin lớp học</h5>
                </div>
                <div class="card-body">
                    <p><?php echo $mess; ?></p>
                    <?= $this->Form->create(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-phone">Tên học sinh (*)</label>
                                    <input required type="text" class="form-control phone-mask" name="name" id="name"
                                           value="<?php echo @$data->name; ?>"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-phone">Tuổi</label>
                                    <input required type="text" class="form-control phone-mask" name="age" id="age"
                                           value="<?php echo @$data->age; ?>"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Thành phố</label>
                                    <div class="input-group input-group-merge">
                                        <select class="form-select" name="classroom_id" id="id_city">
                                            <?php foreach ($classrooms as $classroom): ?>
                                            <option value="<?= $classroom->id ?>">
                                                <?= $classroom->name ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
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
