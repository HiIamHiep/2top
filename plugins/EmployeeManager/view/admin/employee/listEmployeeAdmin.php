<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Trang <?= $table ?></h4>

        <p><a href="/plugins/admin/EmployeeManager-view-admin-employee-addEmployeeAdmin" class="btn btn-primary"><i class="bx bx-plus"></i> Thêm mới</a></p>

        <!-- Form Search -->
        <form method="get" action="">
            <div class="card mb-4">
                <h5 class="card-header">Tìm kiếm dữ liệu</h5>
                <div class="card-body">
                    <div class="row gx-3 gy-2 align-items-center">
                        <div class="col-md-1">
                            <label class="form-label">ID</label>
                            <input
                                type="text"
                                class="form-control"
                                name="id"
                                value="<?php if(!empty($_GET['id'])) echo $_GET['id'] ?>"
                            >
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Tên nhân sự</label>
                            <input
                                type="text"
                                class="form-control"
                                name="last_name"
                                value="<?php if(!empty($_GET['last_name'])) echo $_GET['last_name'] ?>"
                            >
                        </div>

                        <div class="col-md-1">
                            <label class="form-label">&nbsp;</label>
                            <button type="submit" class="btn btn-primary d-block">Lọc</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--/ Form Search -->

        <!-- Responsive Table -->
        <div class="card">
            <h5 class="card-header"><?= $metaTitleMantan ?></h5>

            <div class="card-body row">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Chức vụ</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($employees)) { ?>
                            <tr>
                                <td colspan="10" align="center">Chưa có nhân sự</td>
                            </tr>
                        <?php } else { ?>
                            <?php foreach ($employees as $employee): ?>
                                <tr>
                                    <td><?= $employee->id ?></td>
                                    <td><?= $employee->first_name ?></td>
                                    <td><?= $employee->last_name ?></td>
                                    <td><?= $employee->position ?>
                                    </td>
                                    <td align="center">
                                        <a class="dropdown-item" href="/plugins/admin/EmployeeManager-view-admin-employee-addEmployeeAdmin/?id=<?= $employee->id ?>">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </a>
                                    </td>
                                    <td align="center">
                                        <a class="dropdown-item" onclick="return confirm('Bạn có chắc chắn muốn xóa bài tuyển dụng này không?');" href="/plugins/admin/EmployeeManager-view-admin-employee-deleteEmployeeAdmin/?id=<?= $employee->id ?>">
                                            <i class="bx bx-trash me-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Phân trang -->
                <div class="demo-inline-spacing">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php
                            if ($totalPage > 0) {
                                if ($page > 5) {
                                    $startPage = $page - 5;
                                } else {
                                    $startPage = 1;
                                }

                                if ($totalPage > $page + 5) {
                                    $endPage = $page + 5;
                                } else {
                                    $endPage = $totalPage;
                                }

                                echo '<li class="page-item first">
                                        <a class="page-link" href="'.$urlPage.'1"
                                          ><i class="tf-icon bx bx-chevrons-left"></i
                                        ></a>
                                      </li>';

                                for ($i = $startPage; $i <= $endPage; $i++) {
                                    $active = ($page == $i) ? 'active' : '';

                                    echo '<li class="page-item '.$active.'">
                                            <a class="page-link" href="'.$urlPage.$i.'">'.$i.'</a>
                                          </li>';
                                }

                                echo '<li class="page-item last">
                                        <a class="page-link" href="'.$urlPage.$totalPage.'"
                                          ><i class="tf-icon bx bx-chevrons-right"></i
                                        ></a>
                                      </li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <!--/ Basic Pagination -->
            </div>
        </div>
        <!--/ Responsive Table -->
    </div>            <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©
                <script>
                    document.write(new Date().getFullYear());
                </script>
                2024
                , TOP TOP DIGITAL SOLUTION
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
</div>
