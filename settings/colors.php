<?php
$temp = new admin_settingpage('theme_pioneer_colorheading', get_string('colorheading', 'theme_pioneer'));

        // @textColor setting.
    $name = 'theme_pioneer/textcolor';
    $title = get_string('textcolor', 'theme_pioneer');
    $description = get_string('textcolor_desc', 'theme_pioneer');
    $default = '#333366';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @linkColor setting.
    $name = 'theme_pioneer/linkcolor';
    $title = get_string('linkcolor', 'theme_pioneer');
    $description = get_string('linkcolor_desc', 'theme_pioneer');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // course title background color.
    $name = 'theme_pioneer/coursetitlebkg';
    $title = get_string('coursetitlebkg', 'theme_pioneer');
    $description = get_string('coursetitlebkg_desc', 'theme_pioneer');
    $default = 'rgba(255,255,255,0.8)';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // course title text color.
    $name = 'theme_pioneer/coursetitletxt';
    $title = get_string('coursetitletxt', 'theme_pioneer');
    $description = get_string('coursetitletxt_desc', 'theme_pioneer');
    $default = '#000000';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @login button color.
    $name = 'theme_pioneer/loginbuttoncolor';
    $title = get_string('loginbuttoncolor', 'theme_pioneer');
    $description = get_string('loginbuttoncolor_desc', 'theme_pioneer');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Tab slider button color.
    $name = 'theme_pioneer/tabbuttoncolor';
    $title = get_string('tabbuttoncolor', 'theme_pioneer');
    $description = get_string('tabbuttoncolor_desc', 'theme_pioneer');
    $default = 'rgba(255,101,0, 0.8)';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Tab slider button hover color.
    $name = 'theme_pioneer/tabbuttonhovercolor';
    $title = get_string('tabbuttonhovercolor', 'theme_pioneer');
    $description = get_string('tabbuttonhovercolor_desc', 'theme_pioneer');
    $default = 'rgba(255, 255, 255, 1)';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // block Header
    $name = 'theme_pioneer/blocktitlecolor';
    $title = get_string('blocktitlecolor', 'theme_pioneer');
    $description = get_string('blocktitlecolor_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // block Header
    $name = 'theme_pioneer/blockheadercolor';
    $title = get_string('blockheadercolor', 'theme_pioneer');
    $description = get_string('blockheadercolor_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // block border
    $name = 'theme_pioneer/blockbordercolor';
    $title = get_string('blockbordercolor', 'theme_pioneer');
    $description = get_string('blockbordercolor_desc', 'theme_pioneer');
    $default = '#273844';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     // block background
    $name = 'theme_pioneer/blockcolor';
    $title = get_string('blockcolor', 'theme_pioneer');
    $description = get_string('blockcolor_desc', 'theme_pioneer');
    $default = '#DCE0E5';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @Marketing Box background color setting.
    $name = 'theme_pioneer/marketboxcolor';
    $title = get_string('marketboxcolor', 'theme_pioneer');
    $description = get_string('marketboxcolor_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @Marketing Box background color setting.
    $name = 'theme_pioneer/marketboxcontentcolor';
    $title = get_string('marketboxcontentcolor', 'theme_pioneer');
    $description = get_string('marketboxcontentcolor_desc', 'theme_pioneer');
    $default = 'rgba(255,255,255,0.8)';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Content Background
    $name = 'theme_pioneer/contentbackgroundcolor';
    $title = get_string('contentbackgroundcolor', 'theme_pioneer');
    $description = get_string('contentbackgroundcolor_desc', 'theme_pioneer');
    $default = '#F2F5FB';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // icon navigation Background
    $name = 'theme_pioneer/iconnavbackgroundcolortop';
    $title = get_string('iconnavbackgroundcolortop', 'theme_pioneer');
    $description = get_string('iconnavbackgroundcolortop_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // icon navigation Background
    $name = 'theme_pioneer/iconnavbackgroundcolor';
    $title = get_string('iconnavbackgroundcolor', 'theme_pioneer');
    $description = get_string('iconnavbackgroundcolor_desc', 'theme_pioneer');
    $default = '#DCE0E5';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     // radial animation Background
    $name = 'theme_pioneer/radialboxbackground';
    $title = get_string('radialboxbackground', 'theme_pioneer');
    $description = get_string('radialboxbackground_desc', 'theme_pioneer');
    $default = 'rgba(255,255,255,0.4)';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main navigation Background
    $name = 'theme_pioneer/navbkgcolor';
    $title = get_string('navbkgcolor', 'theme_pioneer');
    $description = get_string('navbkgcolor_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Breadcrumb bar color
    $name = 'theme_pioneer/breadcrumbcolor';
    $title = get_string('breadcrumbcolor', 'theme_pioneer');
    $description = get_string('breadcrumbcolor_desc', 'theme_pioneer');
    $default = '#DCE0E5';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Activity Background setting.
    $name = 'theme_pioneer/activitybackground';
    $title = get_string('activitybackground', 'theme_pioneer');
    $description = get_string('activitybackground_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Topic and Week Background setting.
    $name = 'theme_pioneer/topicweekcolor';
    $title = get_string('topicweekcolor', 'theme_pioneer');
    $description = get_string('topicweekcolor_desc', 'theme_pioneer');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Description
    $name = 'theme_pioneer/backgroundimageinfo';
    $heading = get_string('backgroundimageinfo', 'theme_pioneer');
    $information = get_string('backgroundimageinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // @bodyBackground setting.
    $name = 'theme_pioneer/bodybackground';
    $title = get_string('bodybackground', 'theme_pioneer');
    $description = get_string('bodybackground_desc', 'theme_pioneer');
    $default = '#d6d6d6';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background image setting.
    $name = 'theme_pioneer/backgroundimage';
    $title = get_string('backgroundimage', 'theme_pioneer');
    $description = get_string('backgroundimage_desc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background repeat setting.
    $name = 'theme_pioneer/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_pioneer');
    $description = get_string('backgroundrepeat_desc', 'theme_pioneer');;
    $default = 'repeat';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_pioneer'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_pioneer'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_pioneer'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_pioneer'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background position setting.
    $name = 'theme_pioneer/backgroundposition';
    $title = get_string('backgroundposition', 'theme_pioneer');
    $description = get_string('backgroundposition_desc', 'theme_pioneer');
    $default = '0';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_pioneer'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_pioneer'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_pioneer'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_pioneer'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_pioneer'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_pioneer'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_pioneer'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_pioneer'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_pioneer'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background fixed setting.
    $name = 'theme_pioneer/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_pioneer');
    $description = get_string('backgroundfixed_desc', 'theme_pioneer');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_pioneer', $temp);