<?php

$temp = new admin_settingpage('theme_pioneer_navigation', get_string('navigation', 'theme_pioneer'));
    // Description
    $name = 'theme_pioneer/mycorusesinfo';
    $heading = get_string('mycorusesinfo', 'theme_pioneer');
    $information = get_string('mycorusesinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Toggle courses display in custommenu.
    $name = 'theme_pioneer/displaymycourses';
    $title = get_string('displaymycourses', 'theme_pioneer');
    $description = get_string('displaymycoursesdesc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Set terminology for dropdown course list
    $name = 'theme_pioneer/mycoursetitle';
    $title = get_string('mycoursetitle','theme_pioneer');
    $description = get_string('mycoursetitledesc', 'theme_pioneer');
    $default = 'course';
    $choices = array(
        'course' => get_string('mycourses', 'theme_pioneer'),
        'unit' => get_string('myunits', 'theme_pioneer'),
        'class' => get_string('myclasses', 'theme_pioneer'),
        'module' => get_string('mymodules', 'theme_pioneer')
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/enablethiscourse';
    $title = get_string('enablethiscourse', 'theme_pioneer');
    $description = get_string('enablethiscoursedesc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/toolsmenu';
    $title = get_string('toolsmenu', 'theme_pioneer');
    $description = get_string('toolsmenudesc', 'theme_pioneer');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
$ADMIN->add('theme_pioneer', $temp);