<?php

/* Frontpage Settings temp*/
    $temp = new admin_settingpage('theme_pioneer_googleheading', get_string('googleheading', 'theme_pioneer'));

    // Google fonts Heading,body,size,weight
    $name = 'theme_pioneer/gheadingimporturl';
    $title = get_string('gheadingimporturl','theme_pioneer');
    $description = get_string('gheadingimporturldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/headingfont';
    $title = get_string('headingfont','theme_pioneer');
    $description = get_string('headingfontdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/gbodyimporturl';
    $title = get_string('gbodyimporturl','theme_pioneer');
    $description = get_string('gbodyimporturldesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/bodyfont';
    $title = get_string('bodyfont','theme_pioneer');
    $description = get_string('bodyfontdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/bodysize';
    $title = get_string('bodysize','theme_pioneer');
    $description = get_string('bodysizedesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_pioneer/bodyweight';
    $title = get_string('bodyweight','theme_pioneer');
    $description = get_string('bodyweightdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $ADMIN->add('theme_pioneer', $temp);