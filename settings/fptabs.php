<?php 

$temp = new admin_settingpage('theme_pioneer_tab', get_string('tabheading', 'theme_pioneer'));

    // This is the descriptor for tab Spot One
    $name = 'theme_pioneer/tab1info';
    $heading = get_string('tab1', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // tab Spot One
    $name = 'theme_pioneer/tab1';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab1content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    // This is the descriptor for tab Spot Two
    $name = 'theme_pioneer/tab2info';
    $heading = get_string('tab2', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // tab Spot Two
    $name = 'theme_pioneer/tab2';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab2content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for tab Spot Three
    $name = 'theme_pioneer/tab3info';
    $heading = get_string('tab3', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // tab Spot Three.
    $name = 'theme_pioneer/tab3';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab3content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for tab Spot One
    $name = 'theme_pioneer/tab4info';
    $heading = get_string('tab4', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // tab Spot One
    $name = 'theme_pioneer/tab4';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab4content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for tab Spot One
    $name = 'theme_pioneer/tab5info';
    $heading = get_string('tab5', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // tab Spot One
    $name = 'theme_pioneer/tab5';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab5content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // This is the descriptor for tab Spot One
    $name = 'theme_pioneer/tab6info';
    $heading = get_string('tab6', 'theme_pioneer');
    $information = get_string('tabinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // tab Spot One
    $name = 'theme_pioneer/tab6';
    $title = get_string('tabtitle', 'theme_pioneer');
    $description = get_string('tabtitledesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/tab6content';
    $title = get_string('tabcontent', 'theme_pioneer');
    $description = get_string('tabcontentdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_pioneer', $temp);