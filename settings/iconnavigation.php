<?php

/* Icon navigation*/
    $temp = new admin_settingpage('theme_pioneer_iconnav', get_string('iconnavheading', 'theme_pioneer'));
    
    // This is the descriptor for icon One
    $name = 'theme_pioneer/navicon1info';
    $heading = get_string('navicon1', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // icon One
    $name = 'theme_pioneer/nav1icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav1buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = 'My Home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav1buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '/my/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon One
    $name = 'theme_pioneer/navicon2info';
    $heading = get_string('navicon2', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav2icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = 'calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav2buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = 'Calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav2buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '/calendar/view.php?view=month';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon three
    $name = 'theme_pioneer/navicon3info';
    $heading = get_string('navicon3', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav3icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = 'bookmark';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav3buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = 'Badges';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav3buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '/badges/mybadges.php';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon four
    $name = 'theme_pioneer/navicon4info';
    $heading = get_string('navicon4', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav4icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = 'book';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav4buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = 'All Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav4buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '/course/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon four
    $name = 'theme_pioneer/navicon5info';
    $heading = get_string('navicon5', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav5icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav5buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav5buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon six
    $name = 'theme_pioneer/navicon6info';
    $heading = get_string('navicon6', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav6icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav6buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav6buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon seven
    $name = 'theme_pioneer/navicon7info';
    $heading = get_string('navicon7', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav7icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav7buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav7buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for icon eight
    $name = 'theme_pioneer/navicon8info';
    $heading = get_string('navicon8', 'theme_pioneer');
    $information = get_string('navicondesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_pioneer/nav8icon';
    $title = get_string('navicon', 'theme_pioneer');
    $description = get_string('navicondesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav8buttontext';
    $title = get_string('naviconbuttontext', 'theme_pioneer');
    $description = get_string('naviconbuttontextdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/nav8buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_pioneer');
    $description = get_string('naviconbuttonurldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_pioneer', $temp);