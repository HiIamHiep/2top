<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Trang <?= $table ?></h4>

        <p><a href="/plugins/admin/ServiceManager-view-admin-service-addServiceAdmin" class="btn btn-primary"><i class="bx bx-plus"></i> Thêm mới</a></p>

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
                            <label class="form-label">Tên dịch vụ</label>
                            <input
                                type="text"
                                class="form-control"
                                name="title"
                                value="<?php if(!empty($_GET['title'])) echo $_GET['title'] ?>"
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
                            <th>Tiêu đề</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($services)) { ?>
                            <tr>
                                <td colspan="10" align="center">Chưa có bài viết</td>
                            </tr>
                        <?php } else { ?>
                            <?php foreach ($services as $service): ?>
                                <tr>
                                    <td><?= $service->id ?></td>
                                    <td><?= $service->title ?></td>
                                    <td align="center">
                                        <a class="dropdown-item" href="/plugins/admin/ServiceManager-view-admin-service-addServiceAdmin/?id=<?= $service->id ?>">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </a>
                                    </td>
                                    <td align="center">
                                        <a class="dropdown-item" onclick="return confirm('Bạn có chắc chắn muốn xóa dịch vụ này không?');" href="/plugins/admin/ServiceManager-view-admin-service-deleteServiceAdmin/?id=<?= $service->id ?>">
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
