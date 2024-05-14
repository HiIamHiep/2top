<?php
$menus = array();
$menus[0]['title'] = "Dịch vụ";
$menus[0]['sub'][0] = array(
    'title' => 'Dịch vụ',
    'url' => '/plugins/admin/ServiceManager-view-admin-service-listServiceAdmin',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'listServiceAdmin'
);

addMenuAdminMantan($menus);
