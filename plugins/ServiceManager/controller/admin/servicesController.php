<?php

use Cake\Utility\Text;

function listServiceAdmin($input)
{
    global $controller;
    global $urlCurrent;
    global $metaTitleMantan;

    $metaTitleMantan = 'Danh sách dịch vụ';

    $modelServices = $controller->loadModel('services');

    //get name table
    $tableName = $modelServices->getTable();

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

    if (!empty($_GET['title'])) {
        $conditions['title LIKE'] = '%'.$_GET['title'].'%';
    }

    $services = $modelServices->find()->limit($limit)->page($page)->where($conditions)->order($order)->all()->toList();

    $totalData = $modelServices->find()->where($conditions)->all()->toList();
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

    setVariable('services', $services);
    setVariable('table', $tableName);


}

function addServiceAdmin($input)
{

    global $controller;
    global $isRequestPost;
    global $metaTitleMantan;

    $metaTitleMantan = 'Thông tin dịch vụ';

    $modelService = $controller->loadModel('services');
    $mess = '';

    //get name table
    $tableName = $modelService->getTable();

    // lấy data edit
    if (!empty($_GET['id'])) {
        $data = $modelService->get((int) $_GET['id']);
    } else {
        $data = $modelService->newEmptyEntity();
    }

    if ($isRequestPost) {
        $dataSend = $input['request']->getData();

        if (!empty($dataSend['title'])) {

            $data->title = $dataSend['title'];
            $data->short_description = $dataSend['short_description'];
            $data->content = $dataSend['content'];
            $data->image_url = $dataSend['image_url'];
            $data->updated_at = time();

            //Regex slug
            $slug = strtolower(Text::slug($dataSend['title']));
            $slug = preg_replace('/[^a-zA-Z0-9\s]+/', '-', $slug);
            $slug = preg_replace('/\s+/', '-', $slug);

            $dem = $controller->loadModel('services')
                ->find()
                ->where([
                    'slug' => $slug
                ])
                ->count();

            if($dem > 1) {
                $slug .= '-' . ++$dem;
            }

            $data->slug = $slug;

//            dd($data);
            $modelService->save($data);

            $mess = '<p class="text-success">Lưu dữ liệu thành công</p>';

        } else {
            $mess = '<p class="text-danger">Bạn chưa nhập dữ liệu bắt buộc</p>';
        }
    }

    setVariable('data', $data);
    setVariable('mess', $mess);
    setVariable('table', $tableName);
}

function deleteServiceAdmin($input)
{
    global $controller;

    $modelService = $controller->loadModel('services');

    if (!empty($_GET['id'])) {
        $data = $modelService->get($_GET['id']);

        $modelService->delete($data);
    }

    return $controller->redirect('/plugins/admin/ServiceManager-view-admin-classroom-listServiceAdmin');
}

