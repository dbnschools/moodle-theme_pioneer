<?php
/* Custom Footer Text Settings temp*/
$temp = new admin_settingpage('theme_pioneer_footertextboxes', get_string('footertextboxes', 'theme_pioneer'));
    
    $name = 'theme_pioneer/fullfootertext';
    $title = get_string('fullfootertext', 'theme_pioneer');
    $description = get_string('fullfootertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/footertext1';
    $title = get_string('footertext1', 'theme_pioneer');
    $description = get_string('footertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/footertext2';
    $title = get_string('footertext2', 'theme_pioneer');
    $description = get_string('footertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/footertext3';
    $title = get_string('footertext3', 'theme_pioneer');
    $description = get_string('footertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/footertext4';
    $title = get_string('footertext4', 'theme_pioneer');
    $description = get_string('footertext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //Topic and Weekly Section Titles Icon
    $name = 'theme_pioneer/copyrighttext';
    $title = get_string('copyrighttext','theme_pioneer');
    $description = get_string('copyrighttext_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_pioneer', $temp);