<?php
$temp = new admin_settingpage('theme_pioneer_headerimage', get_string('headerimagepage', 'theme_pioneer'));
// Description
    $name = 'theme_pioneer/headerimageinfo';
    $heading = get_string('headerimageinfo', 'theme_pioneer');
    $information = get_string('headerimageinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);


    // Frontpage Image Background spacing setting.
    $name = 'theme_pioneer/fpheaderimagepadding';
    $title = get_string('fpheaderimagepadding', 'theme_pioneer');
    $description = get_string('fpheaderimagepadding_desc', 'theme_pioneer');;
    $default = '260px';
    $choices = array(
        '10px' => '10px',
        '20px' => '20px',
        '40px' => '40px',
        '60px' => '60px',
        '80px' => '80px',
        '100px' => '100px',
        '120px' => '120px',
        '140px' => '140px',
        '160px' => '160px',
        '180px' => '180px',
        '200px' => '200px',
        '220px' => '220px',
        '240px' => '240px',
        '260px' => '260px',
        '280px' => '280px',
        '300px' => '300px',
        '350px' => '350px',
        '400px' => '400px',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Background spacing setting.
    $name = 'theme_pioneer/headerimagepadding';
    $title = get_string('headerimagepadding', 'theme_pioneer');
    $description = get_string('headerimagepadding_desc', 'theme_pioneer');;
    $default = '140px';
    $choices = array(
        '10px' => '10px',
        '20px' => '20px',
        '40px' => '40px',
        '60px' => '60px',
        '80px' => '80px',
        '100px' => '100px',
        '120px' => '120px',
        '140px' => '140px',
        '160px' => '160px',
        '180px' => '180px',
        '200px' => '200px',
        '220px' => '220px',
        '240px' => '240px',
        '260px' => '260px',
        '280px' => '280px',
        '300px' => '300px',
        '350px' => '350px',
        '400px' => '400px',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Background spacing setting.
    $name = 'theme_pioneer/headerincourseimagepadding';
    $title = get_string('headerincourseimagepadding', 'theme_pioneer');
    $description = get_string('headerincourseimagepadding_desc', 'theme_pioneer');;
    $default = '40px';
    $choices = array(
        '10px' => '10px',
        '20px' => '20px',
        '40px' => '40px',
        '60px' => '60px',
        '80px' => '80px',
        '100px' => '100px',
        '120px' => '120px',
        '140px' => '140px',
        '160px' => '160px',
        '180px' => '180px',
        '200px' => '200px',
        '220px' => '220px',
        '240px' => '240px',
        '260px' => '260px',
        '280px' => '280px',
        '300px' => '300px',
        '350px' => '350px',
        '400px' => '400px',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // allow or disallow teacher header images.
    $name = 'theme_pioneer/headerbackgroundtoggle';
    $title = get_string('headerbackgroundtoggle', 'theme_pioneer');
    $description = get_string('headerbackgroundtoggle_desc', 'theme_pioneer');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Background image setting.
    $name = 'theme_pioneer/headerbackgroundimage';
    $title = get_string('headerbackgroundimage', 'theme_pioneer');
    $description = get_string('headerbackgroundimage_desc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'headerbackgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $ADMIN->add('theme_pioneer', $temp);