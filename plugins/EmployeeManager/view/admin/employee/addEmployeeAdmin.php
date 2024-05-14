<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a
                href="/plugins/admin/EmployeeManager-view-admin-employee-listEmployeeAdmin"><?= ucfirst($table) ?></a> /</span>
        Thông tin <?= $table ?>
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
                        <!--           left             -->

                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="row">
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label class="form-label">Họ</label>
                                    <input type="text" class="form-control" name="first_name" value="<?= @$data->first_name ?>">
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label class="form-label">Tên</label>
                                    <input type="text" class="form-control" name="last_name" value="<?= @$data->last_name ?>">
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-sm-12 col-md-12">
                                <label class="form-label" for="basic-default-email">Chức vụ</label>
                                <div class="input-group input-group-merge">
                                    <select class="form-select" name="position" id="position">
                                        <?php foreach ($positions as $value => $position): ?>
                                            <option
                                                value="<?= $value ?>"
                                                <?=
                                                    @$data->position == $value ? 'selected' : '';
                                                ?>
                                            >
                                                <?= $position ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!--          right              -->
                        <div class="col-12 col-sm-12 col-md-6">

                        </div>

                        <div class="col-12 col-sm-12 col-md-12">

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
    $(document).ready(async function () {
        //Select 2
        $('#position').select2();
    });
</script>
