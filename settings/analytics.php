<?php

/*Analytics Settings temp*/
$temp = new admin_settingpage('theme_pioneer_analytics', get_string('analyticsheading', 'theme_pioneer'));

    $name = 'theme_pioneer/analyticsenabled';
    $title = get_string('analyticsenabled', 'theme_pioneer');
    $description = get_string('analyticsenableddesc', 'theme_pioneer');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/analyticstrackingid';
    $title = get_string('analyticstrackingid', 'theme_pioneer');
    $description = get_string('analyticstrackingiddesc', 'theme_pioneer');
    $default = 'UA-XXXXXXXX-X';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/analyticstrackadmin';
    $title = get_string('analyticstrackadmin', 'theme_pioneer');
    $description = get_string('analyticstrackadmindesc', 'theme_pioneer');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/analyticscleanurl';
    $title = get_string('analyticscleanurl', 'theme_pioneer');
    $description = get_string('analyticscleanurldesc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_pioneer', $temp);