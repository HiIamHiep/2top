<?php

$menus = [];
$menus[0]['title'] = 'Settings themes';
$menus[0]['sub']['0'] = [
    'title' => 'Cài đặt giao diện homepage',
    'url' => '/plugins/admin/2top-admin-settingsHomeTheme2top',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'settingsHomeTheme2top'
];
$menus[0]['sub']['1'] = [
    'title' => 'Cài đặt giao diện recuitment page',
    'url' => '/plugins/admin/2top-admin-settingsRecutmentPageTheme2top',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'settingsRecutmentPageTheme2top'
];
$menus[0]['sub']['2'] = [
    'title' => 'Cài đặt giao diện service page',
    'url' => '/plugins/admin/2top-admin-settingsServicePageTheme2top',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'settingsServicePageTheme2top'
];

$menus[0]['sub']['3'] = [
    'title' => 'Cài đặt giao diện introduction page',
    'url' => '/plugins/admin/2top-admin-settingsIntroductionPageTheme2top',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'settingsIntroductionPageTheme2top'
];

$menus[0]['sub']['4'] = [
    'title' => 'Cài đặt giao diện contact page',
    'url' => '/plugins/admin/2top-admin-settingsContactPageTheme2top',
    'classIcon' => 'bx bxs-user-detail',
    'permission' => 'settingsContactPageTheme2top'
];

addMenuAdminMantan($menus);

global $modelOptions;
global $settingThemes;
global $settingPageService;
global $settingPageRecuitment;
global $settingsPageIntroduction;
global $settingsPageContact;

// Render configs
$conditions = array('key_word' => 'settingsHomeTheme2top');
$data = $modelOptions->find()->where($conditions)->first();

$settingThemes = array();
if(!empty($data->value)){
    $settingThemes = json_decode($data->value, true);
}

// Render configs service page
$conditions = array('key_word' => 'settingsPageService');
$data = $modelOptions->find()->where($conditions)->first();

$settingPageService = array();
if(!empty($data->value)){
    $settingPageService = json_decode($data->value, true);
}

// Render configs recuitment page
$conditions = array('key_word' => 'settingsPageRecuitment');
$data = $modelOptions->find()->where($conditions)->first();

$settingPageRecuitment = array();
if(!empty($data->value)){
    $settingPageRecuitment = json_decode($data->value, true);
}

// Render configs recuitment page
$conditions = array('key_word' => 'settingsIntroductionPageTheme2top');
$data = $modelOptions->find()->where($conditions)->first();

$settingsPageIntroduction = array();
if(!empty($data->value)){
    $settingsPageIntroduction = json_decode($data->value, true);
}

// Render configs contact page
$conditions = array('key_word' => 'settingsContactPageTheme2top');
$data = $modelOptions->find()->where($conditions)->first();

$settingsPageContact = array();
if(!empty($data->value)){
    $settingsPageContact = json_decode($data->value, true);
}






