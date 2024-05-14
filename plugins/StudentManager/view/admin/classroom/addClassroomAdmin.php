<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a href="/plugins/admin/StudentManager-view-admin-classroom-listClassroomAdmin">Lớp học</a> /</span>
        Thông tin lớp học
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
                                    <label class="form-label" for="basic-default-phone">Tên lớp học (*)</label>
                                    <input required type="text" class="form-control phone-mask" name="name" id="name"
                                           value="<?php echo @$data->name; ?>"/>
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
