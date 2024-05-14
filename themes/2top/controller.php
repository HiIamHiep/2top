<?php

include_once './plugins/RecruitmentManager/controller/enum/recruitmentLevelEnum.php';
include_once './plugins/RecruitmentManager/controller/enum/certificateLevelEnum.php';
include_once './plugins/EmployeeManager/controller/enum/positionLevelEnum.php';

function settingsHomeTheme2top($input)
{
    global $modelOptions;
    global $metaTitleMantan;
    global $isRequestPost;

    $metaTitleMantan = 'Cài đặt giao diện trang chủ';
    $mess= '';

    $conditions = array('key_word' => 'settingsHomeTheme2top');
    $data = $modelOptions->find()->where($conditions)->first();

    if(empty($data)){
        $data = $modelOptions->newEmptyEntity();
    }

    if($isRequestPost){
        $dataSend = $input['request']->getData();

        $value = array(
            'brand' => $dataSend['brand'],
            'name_button_header' => $dataSend['name_button_header'],
            'link_button_header' => $dataSend['link_button_header'],

            'name_brand_slide' => $dataSend['name_brand_slide'],
            'title_slide' => $dataSend['title_slide'],
            'content_slide' => $dataSend['content_slide'],
            'id_slide' => $dataSend['id_slide'],
            'name_button_slide' => $dataSend['name_button_slide'],
            'link_button_slide' => $dataSend['link_button_slide'],

            'name_brand_introduction' => $dataSend['name_brand_introduction'],
            'title_introduction' => $dataSend['title_introduction'],
            'content_introduction' => $dataSend['content_introduction'],
            'name_button_introduction' => $dataSend['name_button_introduction'],
            'link_button_introduction' => $dataSend['link_button_introduction'],


            'name_service' => $dataSend['name_service'],
            'title_service' => $dataSend['title_service'],

            'name_personnel' => $dataSend['name_personnel'],
            'title_personnel' => $dataSend['title_personnel'],

            'title_worth' => $dataSend['title_worth'],
            'content_worth' => $dataSend['content_worth'],

            'icon_card_worth_1' => $dataSend['icon_card_worth_1'],
            'title_card_worth_1' => $dataSend['title_card_worth_1'],
            'context_card_worth_1' => $dataSend['context_card_worth_1'],

            'icon_card_worth_2' => $dataSend['icon_card_worth_2'],
            'title_card_worth_2' => $dataSend['title_card_worth_2'],
            'context_card_worth_2' => $dataSend['context_card_worth_2'],

            'icon_card_worth_3' => $dataSend['icon_card_worth_3'],
            'title_card_worth_3' => $dataSend['title_card_worth_3'],
            'context_card_worth_3' => $dataSend['context_card_worth_3'],

            'icon_card_worth_4' => $dataSend['icon_card_worth_4'],
            'title_card_worth_4' => $dataSend['title_card_worth_4'],
            'context_card_worth_4' => $dataSend['context_card_worth_4'],

            'icon_card_worth_5' => $dataSend['icon_card_worth_5'],
            'title_card_worth_5' => $dataSend['title_card_worth_5'],
            'context_card_worth_5' => $dataSend['context_card_worth_5'],

            'icon_card_worth_6' => $dataSend['icon_card_worth_6'],
            'title_card_worth_6' => $dataSend['title_card_worth_6'],
            'context_card_worth_6' => $dataSend['context_card_worth_6'],

            'name_news' => $dataSend['name_news'],
            'title_news' => $dataSend['title_news'],
            'content_news' => $dataSend['content_news'],

            'name_partner' => $dataSend['name_partner'],
            'title_partner' => $dataSend['title_partner'],

            'name_feedback' => $dataSend['name_feedback'],
            'title_feedback' => $dataSend['title_feedback'],
            'id_feedback' => $dataSend['id_feedback'],
            'avatar_customer_feedback' => $dataSend['avatar_customer_feedback'],
            'customer_company_feedback' => $dataSend['customer_company_feedback'],
            'customer_content_feedback' => $dataSend['customer_content_feedback'],

            'contact_text_footer' => $dataSend['contact_text_footer'],
            'contact_button_footer' => $dataSend['contact_button_footer'],
            'logo_company_footer' => $dataSend['logo_company_footer'],
            'intro_company_footer' => $dataSend['intro_company_footer'],
            'address_company_footer' => $dataSend['address_company_footer'],
            'services_company_footer' => $dataSend['services_company_footer'],
            'recruitment_company_footer' => $dataSend['recruitment_company_footer'],
            'advise_footer' => $dataSend['advise_footer'],
            'copyright_footer' => $dataSend['copyright_footer'],

            'facebook' => $dataSend['facebook'],
            'youtube' => $dataSend['youtube'],
            'tiktok' => $dataSend['tiktok'],
            'instagram' => $dataSend['instagram'],
            'linkedIn' => $dataSend['linkedIn'],
            'twitter' => $dataSend['twitter'],
        );

        $data->key_word = 'settingsHomeTheme2top';
        $data->value = json_encode($value);

        $modelOptions->save($data);

        $mess= '<p class="text-success">Lưu dữ liệu thành công</p>';
    }

    $data_value = array();
    if(!empty($data->value)){
        $data_value = json_decode($data->value, true);
    }

    setVariable('setting', $data_value);
    setVariable('mess', $mess);
}

function settingsRecutmentPageTheme2top($input)
{
    global $modelOptions;
    global $metaTitleMantan;
    global $isRequestPost;

    $metaTitleMantan = 'Cài đặt giao diện trang chủ';
    $mess= '';

    $conditions = array('key_word' => 'settingsPageRecuitment');
    $data = $modelOptions->find()->where($conditions)->first();

    if(empty($data)){
        $data = $modelOptions->newEmptyEntity();
    }

    if($isRequestPost){
        $dataSend = $input['request']->getData();

        $value = array(
            'banner_desktop' => $dataSend['banner_desktop'],
            'banner_contain_title' => $dataSend['banner_contain_title'],
            'banner_contain_2_img' => $dataSend['banner_contain_2_img'],
            'banner_contain_2_content' => $dataSend['banner_contain_2_content'],
            'banner_contain_2_btn' => $dataSend['banner_contain_2_btn'],
            'banner_contain_2_link' => $dataSend['banner_contain_2_link'],

            'company_culture_title' => $dataSend['company_culture_title'],
            'company_culture_short_description' => $dataSend['company_culture_short_description'],

            'item_company_culture_num_1' => $dataSend['item_company_culture_num_1'],
            'item_company_culture_name_1' => $dataSend['item_company_culture_name_1'],
            'item_company_culture_detail_1' => $dataSend['item_company_culture_detail_1'],

            'item_company_culture_num_2' => $dataSend['item_company_culture_num_2'],
            'item_company_culture_name_2' => $dataSend['item_company_culture_name_2'],
            'item_company_culture_detail_2' => $dataSend['item_company_culture_detail_2'],

            'item_company_culture_num_3' => $dataSend['item_company_culture_num_3'],
            'item_company_culture_name_3' => $dataSend['item_company_culture_name_3'],
            'item_company_culture_detail_3' => $dataSend['item_company_culture_detail_3'],

            'item_company_culture_num_4' => $dataSend['item_company_culture_num_4'],
            'item_company_culture_name_4' => $dataSend['item_company_culture_name_4'],
            'item_company_culture_detail_4' => $dataSend['item_company_culture_detail_4'],

            'item_company_culture_num_5' => $dataSend['item_company_culture_num_5'],
            'item_company_culture_name_5' => $dataSend['item_company_culture_name_5'],
            'item_company_culture_detail_5' => $dataSend['item_company_culture_detail_5'],

            'item_company_culture_num_6' => $dataSend['item_company_culture_num_6'],
            'item_company_culture_name_6' => $dataSend['item_company_culture_name_6'],
            'item_company_culture_detail_6' => $dataSend['item_company_culture_detail_6'],

            'jobs_banner' => $dataSend['jobs_banner'],
            'jobs_content_title' => $dataSend['jobs_content_title'],

            'benefit_num_1' => $dataSend['benefit_num_1'],
            'benefit_name_1' => $dataSend['benefit_name_1'],
            'benefit_detail_1' => $dataSend['benefit_detail_1'],

            'benefit_num_2' => $dataSend['benefit_num_2'],
            'benefit_name_2' => $dataSend['benefit_name_2'],
            'benefit_detail_2' => $dataSend['benefit_detail_2'],

            'benefit_num_3' => $dataSend['benefit_num_3'],
            'benefit_name_3' => $dataSend['benefit_name_3'],
            'benefit_detail_3' => $dataSend['benefit_detail_3'],

            'benefit_num_4' => $dataSend['benefit_num_4'],
            'benefit_name_4' => $dataSend['benefit_name_4'],
            'benefit_detail_4' => $dataSend['benefit_detail_4'],

            'benefit_num_5' => $dataSend['benefit_num_5'],
            'benefit_name_5' => $dataSend['benefit_name_5'],
            'benefit_detail_5' => $dataSend['benefit_detail_5'],

            'benefit_num_6' => $dataSend['benefit_num_6'],
            'benefit_name_6' => $dataSend['benefit_name_6'],
            'benefit_detail_6' => $dataSend['benefit_detail_6'],

            'decoration_media' => $dataSend['decoration_media'],
            'decoration_title' => $dataSend['decoration_title'],
            'decoration_detail' => $dataSend['decoration_detail'],

            'registration-title' => $dataSend['registration-title'],
            'registration_form_img' => $dataSend['registration_form_img'],

        );

        $data->key_word = 'settingsPageRecuitment';
        $data->value = json_encode($value);

        $modelOptions->save($data);

        $mess= '<p class="text-success">Lưu dữ liệu thành công</p>';
    }

    $data_value = array();
    if(!empty($data->value)){
        $data_value = json_decode($data->value, true);
    }

    setVariable('setting', $data_value);
    setVariable('mess', $mess);
}

function settingsServicePageTheme2top($input)
{
    global $modelOptions;
    global $metaTitleMantan;
    global $isRequestPost;

    $metaTitleMantan = 'Cài đặt giao diện trang dịch vụ';
    $mess= '';

    $conditions = array('key_word' => 'settingsPageService');
    $data = $modelOptions->find()->where($conditions)->first();

    if(empty($data)){
        $data = $modelOptions->newEmptyEntity();
    }

    if($isRequestPost){
        $dataSend = $input['request']->getData();

        $value = array(
            'banner_service' => $dataSend['banner_service'],
            'banner_service_category' => $dataSend['banner_service_category'],
            'banner_service_title' => $dataSend['banner_service_title'],
        );

        $data->key_word = 'settingsPageService';
        $data->value = json_encode($value);

        $modelOptions->save($data);

        $mess= '<p class="text-success">Lưu dữ liệu thành công</p>';
    }

    $data_value = array();
    if(!empty($data->value)){
        $data_value = json_decode($data->value, true);
    }

    setVariable('setting', $data_value);
    setVariable('mess', $mess);
}

function indexTheme($input)
{

    global $modelAlbuminfos;
    global $settingThemes;
    global $urlThemeActive;
    global $controller;

    // SLIDE HOME
    $slide_home = [];
    if(!empty($settingThemes['id_slide'])){
        $slide_home = $modelAlbuminfos->find()->where(['id_album'=>(int) $settingThemes['id_slide']])->all()->toList();
    }

    $feedback_imgs = [];
    if(!empty($settingThemes['id_feedback'])){
        $feedback_imgs = $modelAlbuminfos->find()->where(['id_album'=>(int) $settingThemes['id_feedback']])->all()->toList();
    }

    $join = [
        [
            'table' => 'classrooms',
            'alias' => 'Classrooms',
            'type' => 'INNER',
            'conditions' => [
                'students.classroom_id = Classrooms.id',
            ],
        ]
    ];

    $posts = $controller->loadModel('posts')->find()
        ->where([
            'type' => 'post'
        ])
        ->limit(6)
        ->all()
        ->toList();

    $employees = $controller->loadModel('employees')->find()
        ->limit(4)
        ->all()
        ->toList();

    //    @todo @pobby Lấy enum từ class employee enum đã tạo sẵn để in ra danh sách cho người dùng lựa chọn
    $positions = new positionLevelEnum();
    $positions = $positions->getStatusOptions();

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


    setVariable('slide_home', $slide_home);
    setVariable('employees', $employees);
    setVariable('feedback_imgs', $feedback_imgs);
    setVariable('posts', $posts);
    setVariable('settingThemes', $settingThemes);
    setVariable('urlThemeActive', $urlThemeActive);
}

function settingsIntroductionPageTheme2top($input)
{
    global $modelOptions;
    global $metaTitleMantan;
    global $isRequestPost;

    $metaTitleMantan = 'Cài đặt giao diện trang giới thiệu';
    $mess= '';

    $conditions = array('key_word' => 'settingsIntroductionPageTheme2top');
    $data = $modelOptions->find()->where($conditions)->first();

    if(empty($data)){
        $data = $modelOptions->newEmptyEntity();
    }

    if($isRequestPost){
        $dataSend = $input['request']->getData();

        $value = array(
            'banner_desktop_introduction' => $dataSend['banner_desktop_introduction'],
            'banner_title_introduction' => $dataSend['banner_title_introduction'],
            'banner_contain_img_introduction' => $dataSend['banner_contain_img_introduction'],
            'banner_contain_text_introduction' => $dataSend['banner_contain_text_introduction'],

            'img_service_introduction' => $dataSend['img_service_introduction'],
            'service_title_introduction' => $dataSend['service_title_introduction'],
            'name_button_service_introduction' => $dataSend['name_button_service_introduction'],
            'link_button_service_introduction' => $dataSend['link_button_service_introduction'],

            'img_decoration_introduction' => $dataSend['img_decoration_introduction'],
            'content_decoration_introduction' => $dataSend['content_decoration_introduction'],
            'title_decoration_introduction' => $dataSend['title_decoration_introduction'],

            'img_about_introduction' => $dataSend['img_about_introduction'],
            'title_about_introduction' => $dataSend['title_about_introduction'],
            'content_about_introduction' => $dataSend['content_about_introduction'],
            'name_button_about_introduction' => $dataSend['name_button_about_introduction'],
            'link_button_about_introduction' => $dataSend['link_button_about_introduction'],

            'img_about_introduction_2' => $dataSend['img_about_introduction_2'],
            'title_about_introduction_2' => $dataSend['title_about_introduction_2'],
            'content_about_introduction_2' => $dataSend['content_about_introduction_2'],

        );

        $data->key_word = 'settingsIntroductionPageTheme2top';
        $data->value = json_encode($value);

        $modelOptions->save($data);

        $mess= '<p class="text-success">Lưu dữ liệu thành công</p>';
    }

    $data_value = array();
    if(!empty($data->value)){
        $data_value = json_decode($data->value, true);
    }

    setVariable('setting', $data_value);
    setVariable('mess', $mess);
}

function settingsContactPageTheme2top($input)
{
    global $modelOptions;
    global $metaTitleMantan;
    global $isRequestPost;

    $metaTitleMantan = 'Cài đặt giao diện trang liên hệ';
    $mess= '';

    $conditions = array('key_word' => 'settingsContactPageTheme2top');
    $data = $modelOptions->find()->where($conditions)->first();

    if(empty($data)){
        $data = $modelOptions->newEmptyEntity();
    }

    if($isRequestPost){
        $dataSend = $input['request']->getData();

        $value = array(
            'banner_desktop_contact' => $dataSend['banner_desktop_contact'],
            'banner_title_contact' => $dataSend['banner_title_contact'],
            'banner_contain_img_contact' => $dataSend['banner_contain_img_contact'],
            'banner_contain_text_introduction' => $dataSend['banner_contain_text_introduction'],
            'name_button_form_contact' => $dataSend['name_button_form_contact'],
            'link_button_form_contact' => $dataSend['link_button_form_contact'],

            'email_contact' => $dataSend['email_contact'],
            'hotline_contact' => $dataSend['hotline_contact'],
            'address_contact' => $dataSend['address_contact'],

        );

        $data->key_word = 'settingsContactPageTheme2top';
        $data->value = json_encode($value);

        $modelOptions->save($data);

        $mess= '<p class="text-success">Lưu dữ liệu thành công</p>';
    }

    $data_value = array();
    if(!empty($data->value)){
        $data_value = json_decode($data->value, true);
    }

    setVariable('setting', $data_value);
    setVariable('mess', $mess);
}

function postTheme($input)
{
    global $controller;

    $trendingPosts = $controller->loadModel('posts')->find()->limit(4)->all()->toList();

    $services = $controller->loadModel('services')->find()->limit(4)->all()->toList();

    setVariable('trendingPosts', $trendingPosts);
    setVariable('services', $services);
}

function searchTheme($input)
{

}

function categoryPostTheme($input)
{

}

function categoryAlbumTheme($input)
{

}

function categoryVideoTheme($input)
{

}

function albumTheme($input)
{

}

function videoTheme($input)
{

}

function posts($input)
{
    global $urlCurrent;
    global $controller;

    $limit = 20;
    $page = (!empty($_GET['page'])) ? (int) $_GET['page'] : 1;
    if ($page < 1) {
        $page = 1;
    }

    $posts = $controller->loadModel('posts')->find()->limit($limit)->page($page)->all()->toList();

    $totalData = $controller->loadModel('posts')->find()->all()->toList();
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

    setVariable('posts', $posts);

    setVariable('page', $page);
    setVariable('totalPage', $totalPage);
    setVariable('back', $back);
    setVariable('next', $next);
    setVariable('urlPage', $urlPage);
    setVariable('urlPage', $urlPage);

}

function recruitment() {
    global $urlThemeActive;
    global $controller;
    global $settingPageRecuitment;

    //get URL
    $url = $_SERVER['REQUEST_URI'];
    $pattern = "~^/tuyen-dung/(.+)$~"; // Regex pattern
    $result = '';
    if (preg_match($pattern, $url, $matches)) {
        $result = $matches[1]; // Lưu giá trị sau "/tuyen-dung/" vào biến $result
    }

    if (!empty($result)) {
        $controller->autoRender = false;

        $recruitment = $controller->loadModel('recruitments')
            ->find()
            ->where([
                'slug' => $result
            ])
            ->first();

        $arr['levels'] = explode(', ', $recruitment->levels);

        $levelsEnum = (new RecuitmentLevelEnum())->getStatusOptions();
        $levels = '';

        foreach ( $arr['levels'] as $level ) {
            if(array_key_exists($level, $levelsEnum)) {
                $levels .= $levelsEnum[$level] . ' ';
            }
        }

        //Render levels to object
        $recruitment->levels = $levels;

        $arr['certificates'] = explode(', ', $recruitment->certificates);

        $certificatesEnum = (new CertificateLevelEnum())->getArrCertificates();

        $certificates = '';

        foreach ( $arr['certificates'] as $certificate ) {
            if(array_key_exists($certificate, $certificatesEnum)) {
                $string = str_replace('_', ' ', $certificatesEnum[$certificate]);
                $certificates .= $string . ' ';
            }
        }

        //Render certificates to object
        $recruitment->certificates = $certificates;

        $recruitmentsTrending = $controller->loadModel('recruitments')
            ->find()
            ->order(['created_at' => 'DESC'])
            ->limit(5)
            ->toList();

        setVariable('recruitment', $recruitment);
        setVariable('recruitmentsTrending', $recruitmentsTrending);

        include 'recruiment_detail.php';
    } else {
        $recruitments = $controller->loadModel('recruitments')
            ->find()
            ->limit(4)
            ->all()
            ->toList();

        setVariable('recruitments', $recruitments);
        setVariable('settingPageRecuitment', $settingPageRecuitment);
        setVariable('urlThemeActive', $urlThemeActive);
    }
}

function services()
{
    global $controller;
    global $modelAlbuminfos;
    global $settingThemes;
    global $urlThemeActive;
    global $modelOptions;
    global $settingPageService;


    $services = $controller->loadModel('services')->find()->limit(11)->toList();

    $feedback_imgs = [];
    if(!empty($settingThemes['id_feedback'])){
        $feedback_imgs = $modelAlbuminfos->find()->where(['id_album'=>(int) $settingThemes['id_feedback']])->all()->toList();
    }

    setVariable('services', $services);
    setVariable('feedback_imgs', $feedback_imgs);
    setVariable('settingThemes', $settingThemes);
    setVariable('urlThemeActive', $urlThemeActive);
    setVariable('settingPageService', $settingPageService);
}

function introduction()
{
    global $settingThemes;
    global $controller;
    global $settingsPageIntroduction;

    $join = [
        [
            'table' => 'classrooms',
            'alias' => 'Classrooms',
            'type' => 'INNER',
            'conditions' => [
                'students.classroom_id = Classrooms.id',
            ],
        ]
    ];

    $students = $controller->loadModel('students')->find()
        ->join($join)
        ->select([
            'students.id',
            'students.name',
            'students.age',
            'classrooms.id',
            'classrooms.name',
        ])
        ->limit(3)
        ->all()
        ->toList();

    $classrooms = $controller->loadModel('classrooms')->find()
        ->limit(4)
        ->all()
        ->toList();

    $services = $controller->loadModel('categories')->find()->limit(4)->all()->toList();

    $employees = $controller->loadModel('employees')->find()->limit(4)->all()->toList();

    //    @todo @pobby Lấy enum từ class employee enum đã tạo sẵn để in ra danh sách cho người dùng lựa chọn
    $positions = new positionLevelEnum();
    $positions = $positions->getStatusOptions();

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

    setVariable('settingThemes', $settingThemes);
    setVariable('employees', $employees);
    setVariable('services', $services);
    setVariable('settingsPageIntroduction', $settingsPageIntroduction);
}

function contact()
{
    global $settingsPageContact;

    setVariable('settingsPageContact', $settingsPageContact);
}

