<?php
// "geneictemp" settingpage
    $temp = new admin_settingpage('theme_pioneer_generic',  get_string('geneicsettings', 'theme_pioneer'));

// Description
    $name = 'theme_pioneer/blocks';
    $heading = get_string('blocksinfo', 'theme_pioneer');
    $information = get_string('blocksdesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Block alignment
    $name = 'theme_pioneer/blockposition';
    $title = get_string('blockposition', 'theme_pioneer');
    $description = get_string('blockposition_desc', 'theme_pioneer');;
    $default = 'pull-right';
    $choices = array(
        'pull-left' => get_string('blocksleft', 'theme_pioneer'),
        'pull-right' => get_string('blocksright', 'theme_pioneer'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
// Description
    $name = 'theme_pioneer/customlogininfo';
    $heading = get_string('customlogininfo', 'theme_pioneer');
    $information = get_string('customlogindesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
// Show hide login form toggle
    $name = 'theme_pioneer/showlogin';
     $title = get_string('showlogintoggle', 'theme_pioneer');
     $description = get_string('showlogintoggle_desc', 'theme_pioneer');
     $default = 1;
     $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
     $setting->set_updatedcallback('theme_reset_all_caches');
     $temp->add($setting);

 // Show hide toggle.
    $name = 'theme_pioneer/createuser';
    $title = get_string('createusertoggle', 'theme_pioneer');
    $description = get_string('createusertoggle_desc', 'theme_pioneer');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     // Show hide toggle.
    $name = 'theme_pioneer/forgotpass';
    $title = get_string('forgotpasstoggle', 'theme_pioneer');
    $description = get_string('forgotpasstoggle_desc', 'theme_pioneer');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



    // Description
    $name = 'theme_pioneer/stylinginfo';
    $heading = get_string('stylinginfo', 'theme_pioneer');
    $information = get_string('stylinginfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Logo file setting.
    $name = 'theme_pioneer/logo';
    $title = get_string('logo','theme_pioneer');
    $description = get_string('logodesc', 'theme_pioneer');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    //Topic and Weekly Section Titles Icon
    $name = 'theme_pioneer/sectionheadericon';
    $title = get_string('sectionheadericon','theme_pioneer');
    $description = get_string('sectionheadericondesc', 'theme_pioneer');
    $default = '\f02d';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Custom CSS file.
    $name = 'theme_pioneer/customcss';
    $title = get_string('customcss', 'theme_pioneer');
    $description = get_string('customcssdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // generalalert setting.
    $name = 'theme_pioneer/generalalert';
    $title = get_string('generalalert', 'theme_pioneer');
    $description = get_string('generalalertdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $ADMIN->add('theme_pioneer', $temp);