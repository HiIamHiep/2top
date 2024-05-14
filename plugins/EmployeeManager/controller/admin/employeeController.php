<?php

use Cake\Utility\Text;
use Cake\View\Helper\UrlHelper;
use Cake\View\View;

function listEmployeeAdmin($input)
{
    global $controller;
    global $urlCurrent;
    global $metaTitleMantan;

    $metaTitleMantan = 'Danh sách nhân sự';

    $modelEmployees = $controller->loadModel('employees');

    //    @todo @pobby Lấy enum từ class employee enum đã tạo sẵn để in ra danh sách cho người dùng lựa chọn
    $positions = new positionLevelEnum();
    $positions = $positions->getStatusOptions();

    //get name table
    $tableName = $modelEmployees->getTable();

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

    if (!empty($_GET['last_name'])) {
        $conditions['last_name LIKE'] = '%'.$_GET['last_name'].'%';
    }

    $employees = $modelEmployees->find()->limit($limit)->page($page)->where($conditions)->order($order)->all()->toList();

    // Xử lí enum chức vụ
    foreach ($employees as $employee) {
        if (array_key_exists($employee->position, $positions)) {
            // Nếu tồn tại, lấy tên của chức vụ từ mảng
            $positionName = $positions[$employee->position];

            $employee->position = $positionName;
        } else {
            $employee->position = "Chưa có chức vụ";
        }
    }

    $totalData = $modelEmployees->find()->where($conditions)->all()->toList();
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

    setVariable('employees', $employees);
    setVariable('positions', $positions);
    setVariable('table', $tableName);
}

function addEmployeeAdmin($input)
{
    global $controller;
    global $isRequestPost;
    global $metaTitleMantan;

    //    @todo @pobby Lấy enum từ class employee enum đã tạo sẵn để in ra danh sách cho người dùng lựa chọn
    $positions = new positionLevelEnum();
    $positions = $positions->getStatusOptions();

    $metaTitleMantan = 'Thông tin nhân sự';

    $modelEmployees = $controller->loadModel('employees');
    $mess = '';

    //get name table
    $tableName = $modelEmployees->getTable();

    // lấy data edit
    if (!empty($_GET['id'])) {
        $data = $modelEmployees->get((int) $_GET['id']);
    } else {
        $data = $modelEmployees->newEmptyEntity();
    }

    if ($isRequestPost) {
        $dataSend = $input['request']->getData();

        if (!empty($dataSend['first_name']) && !empty($dataSend['last_name'])) {

            $data->first_name = $dataSend['first_name'];
            $data->last_name = $dataSend['last_name'];
            $data->position = $dataSend['position'];

            $modelEmployees->save($data);

            $mess = '<p class="text-success">Lưu dữ liệu thành công</p>';

        } else {
            $mess = '<p class="text-danger">Bạn chưa nhập dữ liệu bắt buộc</p>';
        }
    }

    setVariable('data', $data);
    setVariable('mess', $mess);
    setVariable('positions', $positions);
    setVariable('table', $tableName);
}

function deleteEmployeeAdmin($input)
{
    global $controller;

    $modelEmployee = $controller->loadModel('employees');

    if (!empty($_GET['id'])) {
        $data = $modelEmployee->get($_GET['id']);

        $modelEmployee->delete($data);
    }

    return $controller->redirect('/plugins/admin/EmployeeManager-view-admin-employee-listEmployeeAdmin');
}

