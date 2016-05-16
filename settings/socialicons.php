<?php

$temp = new admin_settingpage('theme_pioneer_socialiconnav', get_string('socialiconheading', 'theme_pioneer'));

    $name = 'theme_pioneer/social1buttonurl';
    $title = get_string('socialicon1', 'theme_pioneer');
    $description = get_string('socialicon1', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social2buttonurl';
    $title = get_string('socialicon2', 'theme_pioneer');
    $description = get_string('socialicon2', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social3buttonurl';
    $title = get_string('socialicon3', 'theme_pioneer');
    $description = get_string('socialicon3', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social4buttonurl';
    $title = get_string('socialicon4', 'theme_pioneer');
    $description = get_string('socialicon4', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social5buttonurl';
    $title = get_string('socialicon5', 'theme_pioneer');
    $description = get_string('socialicon5', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social6buttonurl';
    $title = get_string('socialicon6', 'theme_pioneer');
    $description = get_string('socialicon6', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social7buttonurl';
    $title = get_string('socialicon7', 'theme_pioneer');
    $description = get_string('socialicon7', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/social8buttonurl';
    $title = get_string('socialicon8', 'theme_pioneer');
    $description = get_string('socialicon8', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

//Custom Navigation Icons on homepage
$ADMIN->add('theme_pioneer', $temp);