<?php
$menus = array();
$menus[0]['title'] = "Tuyển dụng";
$menus[0]['sub'][0] = array(
    'title' => 'Tuyển dụng',
    'url' => '/plugins/admin/RecruitmentManager-view-admin-recruitment-listRecruitmentAdmin',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'listEmployeeAdmin'
);

addMenuAdminMantan($menus);
