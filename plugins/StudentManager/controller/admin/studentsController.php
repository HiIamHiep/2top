<?php

function listStudentAdmin($input)
{
    global $controller;
    global $urlCurrent;
    global $metaTitleMantan;

    $metaTitleMantan = 'Danh sách học sinh';

    $modelStudent = $controller->loadModel('students');

    $conditions = array();
    $limit = 20;
    $page = (!empty($_GET['page']))?(int)$_GET['page']:1;
    if($page<1) $page = 1;
    $order = array('students.id'=>'desc');

    if(!empty($_GET['id'])){
        $conditions['id'] = (int) $_GET['id'];
    }

    if(!empty($_GET['name'])){
        $conditions['name LIKE'] = '%'.$_GET['name'].'%';
    }

    if(!empty($_GET['age'])){
        $conditions['age'] = $_GET['age'];
    }

    $conditions = array();
    $join = [
        [
            'table' => 'classrooms',
            'alias' => 'Classrooms',
            'type' => 'INNER',
            'conditions' => [
                'students.classroom_id = Classrooms.id',
            ],
        ],
    ];

    $students = $modelStudent->find()
        ->join($join)
        ->select([
            'students.id',
            'students.name',
            'students.age',
            'classrooms.id',
            'classrooms.name',
        ])
        ->limit($limit)->page($page)
        ->where($conditions)
        ->order($order)
        ->all()
        ->toList();

    $totalData = $modelStudent->find()->where($conditions)->all()->toList();
    $totalData = count($totalData);

    $balance = $totalData % $limit; // lấy tổng data chia cho limit(20)
    $totalPage = ($totalData - $balance) / $limit; // Tính tổng page
    if ($balance > 0)
        $totalPage+=1;

    $back = $page - 1;
    $next = $page + 1;
    if ($back <= 0)
        $back = 1;
    if ($next >= $totalPage)
        $next = $totalPage;

    if (isset($_GET['page'])) {
        $urlPage = str_replace('&page=' . $_GET['page'], '', $urlCurrent);
        $urlPage = str_replace('page=' . $_GET['page'], '', $urlPage);
    } else {
        $urlPage = $urlCurrent;
    }
    if (strpos($urlPage, '?') !== false) {
        if (count($_GET) >= 1) {
            $urlPage = $urlPage . '&page=';
        } else {
            $urlPage = $urlPage . 'page=';
        }
    } else {
        $urlPage = $urlPage . '?page=';
    }

    setVariable('page', $page);
    setVariable('totalPage', $totalPage);
    setVariable('back', $back);
    setVariable('next', $next);
    setVariable('urlPage', $urlPage);

    setVariable('students', $students);

}

function addStudentAdmin($input)
{
    global $controller;
    global $isRequestPost;
    global $metaTitleMantan;

    $metaTitleMantan = 'Thông tin học sinh';

    $modelStudent = $controller->loadModel('students');
    $mess= '';

    // lấy data edit
    if(!empty($_GET['id'])){
        $data = $modelStudent->get( (int) $_GET['id']);
    }else{
        $data = $modelStudent->newEmptyEntity();
    }

    $modelClassroom = $controller->loadModel('classrooms');

    $classrooms = $modelClassroom
        ->find()
        ->select([
            'id',
            'name',
        ])
        ->all()
        ->toList();

    if ($isRequestPost) {
        $dataSend = $input['request']->getData();

        if(!empty($dataSend['name'])) {

            $data->name = $dataSend['name'];
            $data->age = $dataSend['age'];
            $data->classroom_id = $dataSend['classroom_id'];

            $modelStudent->save($data);

            $mess= '<p class="text-success">Lưu dữ liệu thành công</p>';

        } else {
            $mess= '<p class="text-danger">Bạn chưa nhập dữ liệu bắt buộc</p>';
        }
    }

    setVariable('data', $data);
    setVariable('mess', $mess);
    setVariable('classrooms', $classrooms);
}

function deleteCustomerAdmin($input){
    global $controller;

    $modelStudent = $controller->loadModel('students');

    if(!empty($_GET['id'])){
        $data = $modelStudent->get($_GET['id']);

        if($data){
            $modelStudent->delete($data);
        }
    }

    return $controller->redirect('/plugins/admin/StudentManager-view-admin-student-listStudentAdmin');
}
?>
