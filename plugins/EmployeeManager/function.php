<?php
$menus = array();
$menus[0]['title'] = "Nhân sự";
$menus[0]['sub'][0] = array(
    'title' => 'Nhân sự',
    'url' => '/plugins/admin/EmployeeManager-view-admin-employee-listEmployeeAdmin',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'listEmployeeAdmin'
);

addMenuAdminMantan($menus);
