<?php

function listClassroomAdmin($input)
{
    global $controller;
    global $urlCurrent;
    global $metaTitleMantan;

    $metaTitleMantan = 'Danh sách lớp học';

    $modelClassroom = $controller->loadModel('classrooms');

    $conditions = array();
    $limit = 20;
    $page = (!empty($_GET['page'])) ? (int) $_GET['page'] : 1;
    if ($page < 1) {
        $page = 1;
    }
    $order = array('id' => 'desc');

    if (!empty($_GET['id'])) {
        $conditions['id'] = (int) $_GET['id'];
    }

    if (!empty($_GET['name'])) {
        $conditions['name LIKE'] = '%'.$_GET['name'].'%';
    }

    $classrooms = $modelClassroom->find()->limit($limit)->page($page)->where($conditions)->order($order)->all()->toList();

    $totalData = $modelClassroom->find()->where($conditions)->all()->toList();
    $totalData = count($totalData);

    $balance = $totalData % $limit; // lấy tổng data chia cho limit(20)
    $totalPage = ($totalData - $balance) / $limit; // Tính tổng page
    if ($balance > 0) {
        $totalPage += 1;
    }

    $back = $page - 1;
    $next = $page + 1;
    if ($back <= 0) {
        $back = 1;
    }
    if ($next >= $totalPage) {
        $next = $totalPage;
    }

    if (isset($_GET['page'])) {
        $urlPage = str_replace('&page='.$_GET['page'], '', $urlCurrent);
        $urlPage = str_replace('page='.$_GET['page'], '', $urlPage);
    } else {
        $urlPage = $urlCurrent;
    }
    if (strpos($urlPage, '?') !== false) {
        if (count($_GET) >= 1) {
            $urlPage = $urlPage.'&page=';
        } else {
            $urlPage = $urlPage.'page=';
        }
    } else {
        $urlPage = $urlPage.'?page=';
    }

    setVariable('page', $page);
    setVariable('totalPage', $totalPage);
    setVariable('back', $back);
    setVariable('next', $next);
    setVariable('urlPage', $urlPage);
    setVariable('urlPage', $urlPage);

    setVariable('classrooms', $classrooms);

}

function addClassroomAdmin($input)
{
    global $controller;
    global $isRequestPost;
    global $metaTitleMantan;

    $metaTitleMantan = 'Thông tin lớp học';

    $modelClassroom = $controller->loadModel('classrooms');
    $mess = '';

    // lấy data edit
    if (!empty($_GET['id'])) {
        $data = $modelClassroom->get((int) $_GET['id']);
    } else {
        $data = $modelClassroom->newEmptyEntity();
    }

    if ($isRequestPost) {
        $dataSend = $input['request']->getData();

        if (!empty($dataSend['name'])) {

            $data->name = $dataSend['name'];

            $modelClassroom->save($data);

            $mess = '<p class="text-success">Lưu dữ liệu thành công</p>';

        } else {
            $mess = '<p class="text-danger">Bạn chưa nhập dữ liệu bắt buộc</p>';
        }
    }

    setVariable('data', $data);
    setVariable('mess', $mess);
}

function deleteClassroomAdmin($input)
{
    global $controller;

    $modelClassroom = $controller->loadModel('classrooms');

    if (!empty($_GET['id'])) {
        $data = $modelClassroom->get($_GET['id']);

        if ($data) {
            $modelStudent = $controller->loadModel('students');
            $students = $modelStudent
                ->find()
                ->where([
                    'classroom_id in' => $_GET['id'],
                ])
                ->all()
                ->toList();

            foreach ($students as $student) {
                $modelStudent->delete($student);
            }

            $modelClassroom->delete($data);
        }
    }

    return $controller->redirect('/plugins/admin/StudentManager-view-admin-classroom-listClassroomAdmin');
}

