<?php

use Cake\Utility\Text;
use Cake\View\Helper\UrlHelper;
use Cake\View\View;

function listRecruitmentAdmin($input)
{
    global $controller;
    global $urlCurrent;
    global $metaTitleMantan;

    $metaTitleMantan = 'Danh sách bài tuyển dụng';

    $modelRecuitments = $controller->loadModel('recruitments');

    //get name table
    $tableName = $modelRecuitments->getTable();

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

    $recruitments = $modelRecuitments->find()->limit($limit)->page($page)->where($conditions)->order($order)->all()->toList();

    $totalData = $modelRecuitments->find()->where($conditions)->all()->toList();
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

    setVariable('recruitments', $recruitments);
    setVariable('table', $tableName);
}

function addRecruitmentAdmin($input)
{
    global $controller;
    global $isRequestPost;
    global $metaTitleMantan;

    //    @todo @pobby Lấy enum từ class recruitmentenum đã tạo sẵn để in ra danh sách cho người dùng lựa chọn
    $levels = new RecuitmentLevelEnum();
    $levels = $levels->getStatusOptions();

    //    @todo @pobby Lấy enum từ class certificate enum đã tạo sẵn để in ra danh sách cho người dùng lựa chọn
    $certificates = new CertificateLevelEnum();
    $certificates = $certificates->getArrCertificates();

    $certificates = array_map(function($certificate) {
        return str_replace('_', ' ', $certificate);
    }, $certificates);

    $metaTitleMantan = 'Thông tin bài tuyển dụng';

    $modelRecruitments = $controller->loadModel('recruitments');
    $mess = '';

    //get name table
    $tableName = $modelRecruitments->getTable();

    // lấy data edit
    if (!empty($_GET['id'])) {
        $data = $modelRecruitments->get((int) $_GET['id']);

    } else {
        $data = $modelRecruitments->newEmptyEntity();
    }

    if ($isRequestPost) {
        $dataSend = $input['request']->getData();

        if (!empty($dataSend['title'])) {
            //Regex slug
            $arr = [];
            $arr['levels'] = explode(", ",$data->levels);
            $arr['certificates'] = explode(", ",$data->certificates);

            $slug = strtolower(Text::slug($dataSend['title']));
            $slug = preg_replace('/[^a-zA-Z0-9\s]+/', '-', $slug);
            $slug = preg_replace('/\s+/', '-', $slug);

            $dem = $controller->loadModel('recruitments')
                ->find()
                ->where([
                    'slug' => $slug
                ])
                ->count();

            if($dem > 1) {
                $slug .= '-' . ++$dem;
            }

            $data->title = $dataSend['title'];
            $data->slug = $slug;
            $data->thumb_url = $dataSend['thumb_url'];
            $data->short_description = $dataSend['short_description'];
            $data->content = $dataSend['content'];
            $data->levels = $dataSend['levels'];
            $data->certificates = $dataSend['certificates'];
            $data->experience = $dataSend['experience'];
            $data->district = $dataSend['district'];
            $data->city = $dataSend['city'];
            $data->address = $dataSend['address'];
            $data->min_salary = $dataSend['min_salary'];
            $data->max_salary = $dataSend['max_salary'];
            $data->start_date = date('Y-m-d H:i:s', strtotime($dataSend['start_date']));
            $data->end_date = date('Y-m-d H:i:s', strtotime($dataSend['end_date']));
            $data->employees_number = $dataSend['employees_number'];

            $modelRecruitments->save($data);

            $mess = '<p class="text-success">Lưu dữ liệu thành công</p>';

        } else {
            $mess = '<p class="text-danger">Bạn chưa nhập dữ liệu bắt buộc</p>';
        }
    }

    $arr = [];
    $arr['levels'] = explode(", ",$data->levels);
    $arr['certificates'] = explode(", ",$data->certificates);

    setVariable('data', $data);
    setVariable('mess', $mess);
    setVariable('levels', $levels);
    setVariable('certificates', $certificates);
    setVariable('arr', $arr);
    setVariable('table', $tableName);
}

function deleteRecruitmentAdmin($input)
{
    global $controller;

    $modelRecruitment = $controller->loadModel('recruitments');

    if (!empty($_GET['id'])) {
        $data = $modelRecruitment->get($_GET['id']);

        $modelRecruitment->delete($data);
    }

    return $controller->redirect('/plugins/admin/RecruitmentManager-view-admin-recruitment-listRecruitmentAdmin');
}

