<?php

/*Socialwall Settings temp*/
$temp = new admin_settingpage('theme_pioneer_socialwall', get_string('socialwallheading', 'theme_pioneer'));

    // Socialwall add a post bkg color.
    $name = 'theme_pioneer/swaddpost';
    $title = get_string('swaddpost', 'theme_pioneer');
    $description = get_string('swaddpost_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall post color.
    $name = 'theme_pioneer/swpost';
    $title = get_string('swpost', 'theme_pioneer');
    $description = get_string('swpost_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Message color.
    $name = 'theme_pioneer/swmessage';
    $title = get_string('swmessage', 'theme_pioneer');
    $description = get_string('swmessage_desc', 'theme_pioneer');
    $default = '#F0F3F7';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Attachment color.
    $name = 'theme_pioneer/swattach';
    $title = get_string('swattach', 'theme_pioneer');
    $description = get_string('swattach_desc', 'theme_pioneer');
    $default = '#F6FAA0';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Attachment color.
    $name = 'theme_pioneer/swcomment';
    $title = get_string('swcomment', 'theme_pioneer');
    $description = get_string('swcomment_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


$ADMIN->add('theme_pioneer', $temp);
