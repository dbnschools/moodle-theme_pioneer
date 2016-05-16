<?php

$temp = new admin_settingpage('theme_pioneer_fpdashboard', get_string('fpdashboard', 'theme_pioneer'));

//Custom Navigation Icons on homepage
    // Toggle FP Textbox Spots.
    $name = 'theme_pioneer/toggleiconnav';
    $title = get_string('toggleiconnav' , 'theme_pioneer');
    $description = get_string('toggleiconnav_desc', 'theme_pioneer');
    $bothpositions = get_string('bothpositions', 'theme_pioneer');
    $intopnav = get_string('intopnav', 'theme_pioneer');
    $inmaincontent = get_string('inmaincontent', 'theme_pioneer');
    $dontdisplay = get_string('dontdisplay', 'theme_pioneer');
    $default = '1';
    $choices = array('1'=>$bothpositions, '2'=>$intopnav, '3'=>$inmaincontent, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// Toggle icon navigation and searchbox.
    $name = 'theme_pioneer/fpsearchboxtop';
    $title = get_string('fpsearchboxtop', 'theme_pioneer');
    $description = get_string('fpsearchboxtop_desc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// Toggle icon navigation and searchbox.
    $name = 'theme_pioneer/fpsearchboxmain';
    $title = get_string('fpsearchboxmain', 'theme_pioneer');
    $description = get_string('fpsearchboxmain_desc', 'theme_pioneer');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
// Description
    $name = 'theme_pioneer/coursegradeinfo';
    $heading = get_string('coursegradeinfo', 'theme_pioneer');
    $information = get_string('coursegradeinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

// Show or Hide Course Grades toggle.
    $name = 'theme_pioneer/coursegradetoggle';
    $title = get_string('coursegradetoggle', 'theme_pioneer');
    $description = get_string('coursegradetoggle_desc', 'theme_pioneer');
    $default = 1;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course Grades Button Text.
    $name = 'theme_pioneer/coursegradestext';
    $title = get_string('coursegradestext', 'theme_pioneer');
    $description = get_string('coursegradestext', 'theme_pioneer');
    $default =  get_string('settinggradebutton', 'theme_pioneer');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

 // Show or Hide Frontpage Tabs.
    $name = 'theme_pioneer/tabtoggle';
    $title = get_string('tabtoggle', 'theme_pioneer');
    $description = get_string('tabtoggle_desc', 'theme_pioneer');
    $default = 0;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Tab Button Text.
    $name = 'theme_pioneer/tabbuttontext';
    $title = get_string('tabbuttontext', 'theme_pioneer');
    $description = get_string('tabbuttontextdesc', 'theme_pioneer');
    $default = get_string('settingtabbutton', 'theme_pioneer');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Description
    $name = 'theme_pioneer/fptextboxinfo';
    $heading = get_string('fptextboxinfo', 'theme_pioneer');
    $information = get_string('fptextboxinfodesc', 'theme_pioneer');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Toggle FP Textbox Spots.
    $name = 'theme_pioneer/togglefptextbox';
    $title = get_string('togglefptextbox' , 'theme_pioneer');
    $description = get_string('togglefptextboxdesc', 'theme_pioneer');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_pioneer');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_pioneer');
    $displayafterlogin = get_string('displayafterlogin', 'theme_pioneer');
    $dontdisplay = get_string('dontdisplay', 'theme_pioneer');
    $default = '0';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Frontpage Textbox.
    $name = 'theme_pioneer/fptextbox';
    $title = get_string('fptextbox', 'theme_pioneer');
    $description = get_string('fptextboxdesc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Frontpage Textbox.
    $name = 'theme_pioneer/fpcreatortextbox';
    $title = get_string('fpcreatortextbox', 'theme_pioneer');
    $description = get_string('fpcreatortextbox_desc', 'theme_pioneer');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // TOP FEATURED.
    // Promoted Courses Heading.
    $name = 'theme_pioneer_toppromotedcoursesheading';
    $heading = get_string('toppromotedcoursesheading', 'theme_pioneer');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable / Disable Promoted Courses.
    $name = 'theme_pioneer/toppcourseenable';
    $title = get_string('toppcourseenable', 'theme_pioneer');
    $description = '';
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_pioneer');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_pioneer');
    $displayafterlogin = get_string('displayafterlogin', 'theme_pioneer');
    $dontdisplay = get_string('dontdisplay', 'theme_pioneer');
    $default = '0';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Block title.
    $name = 'theme_pioneer/toppromotedtitle';
    $title = get_string('toppcourses', 'theme_pioneer').' '.get_string('toptitle', 'theme_pioneer');
    $description = get_string('toppromotedtitledesc', 'theme_pioneer');
    $default =  get_string('settingshowtagline', 'theme_pioneer');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Block title.
    $name = 'theme_pioneer/topshowfeatured';
    $title = get_string('topshowfeatured', 'theme_pioneer').' '.get_string('toptitle', 'theme_pioneer');
    $description = get_string('topshowfeatureddesc', 'theme_pioneer');
    $default =  get_string('topshowfeaturedtext', 'theme_pioneer');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Block title.
    $name = 'theme_pioneer/topclosefeatured';
    $title = get_string('topclosefeatured', 'theme_pioneer').' '.get_string('toptitle', 'theme_pioneer');
    $description = get_string('topclosefeatureddesc', 'theme_pioneer');
    $default =  get_string('topclosefeaturedtext', 'theme_pioneer');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Frontpage Image Background spacing setting.
    $name = 'theme_pioneer/toppromotedpadding';
    $title = get_string('fptoppromotedpadding', 'theme_pioneer');
    $description = get_string('fptoppromotedpadding_desc', 'theme_pioneer');;
    $default = '200px';
    $choices = array(
        '125px' => '125px',
        '140px' => '140px',
        '150px' => '150px',
        '160px' => '160px',
        '170px' => '170px',
        '180px' => '180px',
        '190px' => '190px',
        '200px' => '200px',
        '210px' => '210px',
        '225px' => '225px',
        '250px' => '250px',
        '275px' => '275px',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_pioneer/toppromotedcourses';
    $title = get_string('toppcourses', 'theme_pioneer');
    $description = get_string('toppcoursesdesc', 'theme_pioneer');
    $default = array();

    $courses[0] = '';
    $cnt = 0;
    if ($ccc = get_courses('all', 'c.sortorder ASC', 'c.id,c.shortname,c.visible,c.category')) {
        foreach ($ccc as $cc) {
            if ($cc->visible == "0" || $cc->id == "1") {
                continue;
            }
            $cnt++;
            $courses[$cc->id] = $cc->shortname;
            // Set some courses for default option.
            if ($cnt < 6) {
                $default[] = $cc->id;
            }
        }
    }
    $coursedefault = implode(",", $default);
    $setting = new admin_setting_configtextarea($name, $title, $description, $coursedefault);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Top Promoted Courses End.



// Promoted Courses Start.
    // Promoted Courses Heading.
    $name = 'theme_pioneer_promotedcoursesheading';
    $heading = get_string('promotedcoursesheading', 'theme_pioneer');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Enable / Disable Promoted Courses.
    $name = 'theme_pioneer/pcourseenable';
    $title = get_string('pcourseenable', 'theme_pioneer');
    $description = '';
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_pioneer');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_pioneer');
    $displayafterlogin = get_string('displayafterlogin', 'theme_pioneer');
    $dontdisplay = get_string('dontdisplay', 'theme_pioneer');
    $default = '0';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Block title.
    $name = 'theme_pioneer/promotedtitle';
    $title = get_string('pcourses', 'theme_pioneer').' '.get_string('title', 'theme_pioneer');
    $description = get_string('promotedtitledesc', 'theme_pioneer');
    $default =  get_string('settingfeaturedslider', 'theme_pioneer');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Link Text.
    $name = 'theme_pioneer/promotedlinktext';
    $title = get_string('promotedlinktext', 'theme_pioneer');
    $description = get_string('promotedlinktext_desc', 'theme_pioneer');
    $default =  get_string('settingpromotedlinktext', 'theme_pioneer');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Promoted courses Link.
    $name = 'theme_pioneer/promotedlink';
    $title = get_string('promotedlink', 'theme_pioneer');
    $description = get_string('promotedlink_desc', 'theme_pioneer');
    $default =  get_string('settingpromotedlink', 'theme_pioneer');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_pioneer/promotedcourses';
    $title = get_string('pcourses', 'theme_pioneer');
    $description = get_string('pcoursesdesc', 'theme_pioneer');
    $default = array();

    $courses[0] = '';
    $cnt = 0;
    if ($ccc = get_courses('all', 'c.sortorder ASC', 'c.id,c.shortname,c.visible,c.category')) {
        foreach ($ccc as $cc) {
            if ($cc->visible == "0" || $cc->id == "1") {
                continue;
            }
            $cnt++;
            $courses[$cc->id] = $cc->shortname;
            // Set some courses for default option.
            if ($cnt < 12) {
                $default[] = $cc->id;
            }
        }
    }
    $coursedefault = implode(",", $default);
    $setting = new admin_setting_configtextarea($name, $title, $description, $coursedefault);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Promoted Courses End.

$ADMIN->add('theme_pioneer', $temp);