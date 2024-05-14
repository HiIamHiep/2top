<?php
$menus = array();
$menus[0]['title'] = "Học sinh";
$menus[0]['sub'][0] = array(
    'title' => 'Học sinh',
    'url' => '/plugins/admin/StudentManager-view-admin-student-listStudentAdmin',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'listStudentAdmin'
);
$menus[0]['sub'][1] = array(
    'title' => 'Lớp học',
    'url' => '/plugins/admin/StudentManager-view-admin-classroom-listClassroomAdmin',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'istClassroomAdmin'
);

addMenuAdminMantan($menus);
