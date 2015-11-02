<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for evolved details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme evolved temp.
 *
 * Each setting that is defined in the parent theme Clean should be
 * defined here too, and use the exact same config name. The reason
 * is that theme_evolved does not define any layout files to re-use the
 * ones from theme_clean. But as those layout files use the function
 * {@link theme_clean_get_html_for_temp} that belong to Clean,
 * we have to make sure it works as expected by having the same temp
 * in our theme.
 *
 * @see        theme_clean_get_html_for_temp
 * @package    theme_evolved
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$settings = null;

defined('MOODLE_INTERNAL') || die;


	$ADMIN->add('themes', new admin_category('theme_evolved', 'evolve-D'));

    // "geneictemp" settingpage
    $temp = new admin_settingpage('theme_evolved_generic',  get_string('geneicsettings', 'theme_evolved'));
    // Font Selector.
    $name = 'theme_evolved/fontselect';
    $title = get_string('fontselect' , 'theme_evolved');
    $description = get_string('fontselectdesc', 'theme_evolved');
    $default = '1';
    $choices = array(
    	'1'=>'Oswald & PT Sans', 
    	'2'=>'Lobster & Cabin', 
    	'3'=>'Raleway & Goudy', 
    	'4'=>'Allerta & Crimson Text', 
    	'5'=>'Arvo & PT Sans',
    	'6'=>'Dancing Script & Josefin Sans',
    	'7'=>'Allan & Cardo',
    	'8'=>'Molengo & Lekton',
    	'9'=>'Droid Serif & Droid Sans',
    	'10'=>'Corbin & Nobile',
    	'11'=>'Ubuntu & Vollkorn',
    	'12'=>'Bree Serif & Open Sans', 
    	'13'=>'Bevan & Pontano Sans', 
    	'14'=>'Abril Fatface & Average', 
    	'15'=>'Playfair Display and Muli', 
    	'16'=>'Sansita One & Kameron',
    	'17'=>'Istok Web & Lora',
    	'18'=>'Pacifico & Arimo',
    	'19'=>'Nixie One & Ledger',
    	'20'=>'Cantata One & Imprima',
    	'21'=>'Rancho & Gudea',
    	'22'=>'DISABLE Google Fonts');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Invert Navbar to dark background.
    $name = 'theme_evolved/invert';
    $title = get_string('invert', 'theme_evolved');
    $description = get_string('invertdesc', 'theme_evolved');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo file setting.
    $name = 'theme_evolved/logosmall';
    $title = get_string('logo','theme_evolved');
    $description = get_string('logodesc', 'theme_evolved');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logosmall');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Custom CSS file.
    $name = 'theme_evolved/customcss';
    $title = get_string('customcss', 'theme_evolved');
    $description = get_string('customcssdesc', 'theme_evolved');
    $default = null;
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // General Alert setting
    $name = 'theme_evolved/generalalert';
    $title = get_string('generalalert','theme_evolved');
    $description = get_string('generalalertdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Snow Alert setting
    $name = 'theme_evolved/snowalert';
    $title = get_string('snowalert','theme_evolved');
    $description = get_string('snowalertdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Footnote setting.
    $name = 'theme_evolved/footnote';
    $title = get_string('footnote', 'theme_evolved');
    $description = get_string('footnotedesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_evolved', $temp);

    $temp = new admin_settingpage('theme_evolved_themecolors',  get_string('themecolorsettings', 'theme_evolved'));

 // @textColor setting.
    $name = 'theme_evolved/textcolor';
    $title = get_string('textcolor', 'theme_evolved');
    $description = get_string('textcolor_desc', 'theme_evolved');
    $default = '#3d3d3d';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // @linkColor setting.
    $name = 'theme_evolved/linkcolor';
    $title = get_string('linkcolor', 'theme_evolved');
    $description = get_string('linkcolor_desc', 'theme_evolved');
    $default = '#415FFB';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	 // Main content background color.
    $name = 'theme_evolved/contentbackground';
    $title = get_string('contentbackground', 'theme_evolved');
    $description = get_string('contentbackground_desc', 'theme_evolved');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Secondary background color.
    $name = 'theme_evolved/secondarybackground';
    $title = get_string('secondarybackground', 'theme_evolved');
    $description = get_string('secondarybackground_desc', 'theme_evolved');
    $default = '#CAD9E8';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Topic and Week Background setting.
    $name = 'theme_evolved/topicweekcolor';
    $title = get_string('topicweekcolor', 'theme_evolved');
    $description = get_string('topicweekcolor_desc', 'theme_evolved');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // @bodyBackground setting.
    $name = 'theme_evolved/bodybackground';
    $title = get_string('bodybackground', 'theme_evolved');
    $description = get_string('bodybackground_desc', 'theme_evolved');
    $default = '#0370A5';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background image setting.
    $name = 'theme_evolved/backgroundimage';
    $title = get_string('backgroundimage', 'theme_evolved');
    $description = get_string('backgroundimage_desc', 'theme_evolved');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background repeat setting.
    $name = 'theme_evolved/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_evolved');
    $description = get_string('backgroundrepeat_desc', 'theme_evolved');;
    $default = 'repeat-x';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_evolved'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_evolved'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_evolved'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_evolved'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background position setting.
    $name = 'theme_evolved/backgroundposition';
    $title = get_string('backgroundposition', 'theme_evolved');
    $description = get_string('backgroundposition_desc', 'theme_evolved');
    $default = 'left_bottom';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_evolved'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_evolved'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_evolved'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_evolved'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_evolved'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_evolved'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_evolved'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_evolved'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_evolved'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Background fixed setting.
    $name = 'theme_evolved/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_evolved');
    $description = get_string('backgroundfixed_desc', 'theme_evolved');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Background cover setting.
    $name = 'theme_evolved/backgroundcover';
    $title = get_string('backgroundcover', 'theme_evolved');
    $description = get_string('backgroundcover_desc', 'theme_evolved');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_evolved', $temp);

    /* Custom Menu temp */
    $temp = new admin_settingpage('theme_evolved_custommenu', get_string('custommenuheading', 'theme_evolved'));

    // Toggle courses display in custommenu.
    $name = 'theme_evolved/displaymycourses';
    $title = get_string('displaymycourses', 'theme_evolved');
    $description = get_string('displaymycoursesdesc', 'theme_evolved');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Set terminology for dropdown course list
	$name = 'theme_evolved/mycoursetitle';
	$title = get_string('mycoursetitle','theme_evolved');
	$description = get_string('mycoursetitledesc', 'theme_evolved');
	$default = 'course';
	$choices = array(
		'course' => get_string('mycourses', 'theme_evolved'),
		'unit' => get_string('myunits', 'theme_evolved'),
		'class' => get_string('myclasses', 'theme_evolved'),
		'module' => get_string('mymodules', 'theme_evolved')
	);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
/*
    // Toggle dashboard display in custommenu.
    $name = 'theme_evolved/displaymydashboard';
    $title = get_string('displaymydashboard', 'theme_evolved');
    $description = get_string('displaymydashboarddesc', 'theme_evolved');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
*/
$ADMIN->add('theme_evolved', $temp);

    /* Marketing Spot Settings temp*/
    $temp = new admin_settingpage('theme_evolved_marketing', get_string('marketingheading', 'theme_evolved'));

    // @Marketing Box background color setting.
    $name = 'theme_evolved/marketboxcolor';
    $title = get_string('marketboxcolor', 'theme_evolved');
    $description = get_string('marketboxcolor_desc', 'theme_evolved');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Toggle Marketing Spots.
    $name = 'theme_evolved/togglemarketing';
    $title = get_string('togglemarketing' , 'theme_evolved');
    $description = get_string('togglemarketingdesc', 'theme_evolved');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_evolved');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_evolved');
    $displayafterlogin = get_string('displayafterlogin', 'theme_evolved');
    $dontdisplay = get_string('dontdisplay', 'theme_evolved');
    $default = 'display';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for Marketing Spot One
    $name = 'theme_evolved/marketing1info';
    $heading = get_string('marketing1', 'theme_evolved');
    $information = get_string('marketinginfodesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Marketing Spot One
    $name = 'theme_evolved/marketing1';
    $title = get_string('marketingtitle', 'theme_evolved');
    $description = get_string('marketingtitledesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing1icon';
    $title = get_string('marketingicon', 'theme_evolved');
    $description = get_string('marketingicondesc', 'theme_evolved');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing1content';
    $title = get_string('marketingcontent', 'theme_evolved');
    $description = get_string('marketingcontentdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing1buttontext';
    $title = get_string('marketingbuttontext', 'theme_evolved');
    $description = get_string('marketingbuttontextdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing1buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_evolved');
    $description = get_string('marketingbuttonurldesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing1target';
    $title = get_string('marketingurltarget' , 'theme_evolved');
    $description = get_string('marketingurltargetdesc', 'theme_evolved');
    $target1 = get_string('marketingurltargetself', 'theme_evolved');
    $target2 = get_string('marketingurltargetnew', 'theme_evolved');
    $target3 = get_string('marketingurltargetparent', 'theme_evolved');
    $default = 'target1';
    $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for Marketing Spot Two
    $name = 'theme_evolved/marketing2info';
    $heading = get_string('marketing2', 'theme_evolved');
    $information = get_string('marketinginfodesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Marketing Spot Two.
    $name = 'theme_evolved/marketing2';
    $title = get_string('marketingtitle', 'theme_evolved');
    $description = get_string('marketingtitledesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing2icon';
    $title = get_string('marketingicon', 'theme_evolved');
    $description = get_string('marketingicondesc', 'theme_evolved');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing2content';
    $title = get_string('marketingcontent', 'theme_evolved');
    $description = get_string('marketingcontentdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing2buttontext';
    $title = get_string('marketingbuttontext', 'theme_evolved');
    $description = get_string('marketingbuttontextdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing2buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_evolved');
    $description = get_string('marketingbuttonurldesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing2target';
    $title = get_string('marketingurltarget' , 'theme_evolved');
    $description = get_string('marketingurltargetdesc', 'theme_evolved');
    $target1 = get_string('marketingurltargetself', 'theme_evolved');
    $target2 = get_string('marketingurltargetnew', 'theme_evolved');
    $target3 = get_string('marketingurltargetparent', 'theme_evolved');
    $default = 'target1';
    $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // This is the descriptor for Marketing Spot Three
    $name = 'theme_evolved/marketing3info';
    $heading = get_string('marketing3', 'theme_evolved');
    $information = get_string('marketinginfodesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Marketing Spot Three.
    $name = 'theme_evolved/marketing3';
    $title = get_string('marketingtitle', 'theme_evolved');
    $description = get_string('marketingtitledesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing3icon';
    $title = get_string('marketingicon', 'theme_evolved');
    $description = get_string('marketingicondesc', 'theme_evolved');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing3content';
    $title = get_string('marketingcontent', 'theme_evolved');
    $description = get_string('marketingcontentdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing3buttontext';
    $title = get_string('marketingbuttontext', 'theme_evolved');
    $description = get_string('marketingbuttontextdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing3buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_evolved');
    $description = get_string('marketingbuttonurldesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/marketing3target';
    $title = get_string('marketingurltarget' , 'theme_evolved');
    $description = get_string('marketingurltargetdesc', 'theme_evolved');
    $target1 = get_string('marketingurltargetself', 'theme_evolved');
    $target2 = get_string('marketingurltargetnew', 'theme_evolved');
    $target3 = get_string('marketingurltargetparent', 'theme_evolved');
    $default = 'target1';
    $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_evolved', $temp);



/* Frontpage Settings temp*/
    $temp = new admin_settingpage('theme_evolved_frontpage', get_string('frontpageheading', 'theme_evolved'));


// Toggle custom frontpage on or off.
    $name = 'theme_evolved/togglefp';
    $title = get_string('togglefp' , 'theme_evolved');
    $description = get_string('togglefpdesc', 'theme_evolved');
    $fpon = get_string('fpon', 'theme_evolved');
    $fpoff = get_string('fpoff', 'theme_evolved');
    $default = '2';
    $choices = array('1'=>$fpon, '2'=>$fpoff);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// Frontpage fullscreen image  file setting.
    $name = 'theme_evolved/fpbkg';
    $title = get_string('fpbkg','theme_evolved');
    $description = get_string('fpbkgdesc', 'theme_evolved');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'fpbkg');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
// Slide Show Background Images for Login Page
    // fullscreen image slideshow file setting.
    // Toggle custom frontpage on or off.
    $name = 'theme_evolved/fpslideshow';
    $title = get_string('fpslideshow' , 'theme_evolved');
    $description = get_string('fpslideshowdesc', 'theme_evolved');
    $fpslideshowon = get_string('fpslideshowon', 'theme_evolved');
    $fpslideshowoff = get_string('fpslideshowoff', 'theme_evolved');
    $default = '2';
    $choices = array('1'=>$fpslideshowon, '2'=>$fpslideshowoff);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_evolved/back1';
    $title = get_string('back1','theme_evolved');
    $description = get_string('backdesc', 'theme_evolved');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'back1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // fullscreen image slideshow file setting.
    $name = 'theme_evolved/back2';
    $title = get_string('back2','theme_evolved');
    $description = get_string('backdesc', 'theme_evolved');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'back2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // fullscreen image slideshow file setting.
    $name = 'theme_evolved/back3';
    $title = get_string('back3','theme_evolved');
    $description = get_string('backdesc', 'theme_evolved');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'back3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // fullscreen image slideshow file setting.
    $name = 'theme_evolved/back4';
    $title = get_string('back4','theme_evolved');
    $description = get_string('backdesc', 'theme_evolved');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'back4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// CustomFP Text setting.
    $name = 'theme_evolved/fptext';
    $title = get_string('fptext', 'theme_evolved');
    $description = get_string('fptextdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

//Custom Navigation Icons on homepage
    
    // This is the descriptor for icon One
    $name = 'theme_evolved/navicon1info';
    $heading = get_string('navicon1', 'theme_evolved');
    $information = get_string('navicondesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // icon One
    $name = 'theme_evolved/nav1icon';
    $title = get_string('navicon', 'theme_evolved');
    $description = get_string('navicondesc', 'theme_evolved');
    $default = 'home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav1buttontext';
    $title = get_string('naviconbuttontext', 'theme_evolved');
    $description = get_string('naviconbuttontextdesc', 'theme_evolved');
    $default = 'My Home';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav1buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_evolved');
    $description = get_string('naviconbuttonurldesc', 'theme_evolved');
    $default = 'my/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // icon two
    // This is the descriptor for icon One
    $name = 'theme_evolved/navicon2info';
    $heading = get_string('navicon2', 'theme_evolved');
    $information = get_string('navicondesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_evolved/nav2icon';
    $title = get_string('navicon', 'theme_evolved');
    $description = get_string('navicondesc', 'theme_evolved');
    $default = 'calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav2buttontext';
    $title = get_string('naviconbuttontext', 'theme_evolved');
    $description = get_string('naviconbuttontextdesc', 'theme_evolved');
    $default = 'Calendar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav2buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_evolved');
    $description = get_string('naviconbuttonurldesc', 'theme_evolved');
    $default = 'calendar/view.php?view=month';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // icon three
    // This is the descriptor for icon three
    $name = 'theme_evolved/navicon3info';
    $heading = get_string('navicon3', 'theme_evolved');
    $information = get_string('navicondesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_evolved/nav3icon';
    $title = get_string('navicon', 'theme_evolved');
    $description = get_string('navicondesc', 'theme_evolved');
    $default = 'bookmark';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav3buttontext';
    $title = get_string('naviconbuttontext', 'theme_evolved');
    $description = get_string('naviconbuttontextdesc', 'theme_evolved');
    $default = 'Badges';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav3buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_evolved');
    $description = get_string('naviconbuttonurldesc', 'theme_evolved');
    $default = 'badges/mybadges.php';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Marketing Spot Four
    // This is the descriptor for icon four
    $name = 'theme_evolved/navicon4info';
    $heading = get_string('navicon4', 'theme_evolved');
    $information = get_string('navicondesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_evolved/nav4icon';
    $title = get_string('navicon', 'theme_evolved');
    $description = get_string('navicondesc', 'theme_evolved');
    $default = 'book';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav4buttontext';
    $title = get_string('naviconbuttontext', 'theme_evolved');
    $description = get_string('naviconbuttontextdesc', 'theme_evolved');
    $default = 'Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav4buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_evolved');
    $description = get_string('naviconbuttonurldesc', 'theme_evolved');
    $default = 'course/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

        // Marketing Spot five
    // This is the descriptor for icon four
    $name = 'theme_evolved/navicon5info';
    $heading = get_string('navicon5', 'theme_evolved');
    $information = get_string('navicondesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_evolved/nav5icon';
    $title = get_string('navicon', 'theme_evolved');
    $description = get_string('navicondesc', 'theme_evolved');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav5buttontext';
    $title = get_string('naviconbuttontext', 'theme_evolved');
    $description = get_string('naviconbuttontextdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav5buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_evolved');
    $description = get_string('naviconbuttonurldesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

        // Marketing Spot six
    // This is the descriptor for icon six
    $name = 'theme_evolved/navicon6info';
    $heading = get_string('navicon6', 'theme_evolved');
    $information = get_string('navicondesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_evolved/nav6icon';
    $title = get_string('navicon', 'theme_evolved');
    $description = get_string('navicondesc', 'theme_evolved');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav6buttontext';
    $title = get_string('naviconbuttontext', 'theme_evolved');
    $description = get_string('naviconbuttontextdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav6buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_evolved');
    $description = get_string('naviconbuttonurldesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

        // Marketing Spot Seven
    // This is the descriptor for icon seven
    $name = 'theme_evolved/navicon7info';
    $heading = get_string('navicon7', 'theme_evolved');
    $information = get_string('navicondesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_evolved/nav7icon';
    $title = get_string('navicon', 'theme_evolved');
    $description = get_string('navicondesc', 'theme_evolved');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav7buttontext';
    $title = get_string('naviconbuttontext', 'theme_evolved');
    $description = get_string('naviconbuttontextdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav7buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_evolved');
    $description = get_string('naviconbuttonurldesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

        // Marketing Spot eight
    // This is the descriptor for icon eight
    $name = 'theme_evolved/navicon8info';
    $heading = get_string('navicon8', 'theme_evolved');
    $information = get_string('navicondesc', 'theme_evolved');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $name = 'theme_evolved/nav8icon';
    $title = get_string('navicon', 'theme_evolved');
    $description = get_string('navicondesc', 'theme_evolved');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav8buttontext';
    $title = get_string('naviconbuttontext', 'theme_evolved');
    $description = get_string('naviconbuttontextdesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_evolved/nav8buttonurl';
    $title = get_string('naviconbuttonurl', 'theme_evolved');
    $description = get_string('naviconbuttonurldesc', 'theme_evolved');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_evolved', $temp);


/*Socialwall Settings temp*/
$temp = new admin_settingpage('theme_evolved_socialwall', get_string('socialwallheading', 'theme_evolved'));

    // Label Post
    $name = 'theme_evolved/swlabelpost';
    $title = get_string('swlabelpost','theme_evolved');
    $description = get_string('swlabelpost_desc', 'theme_evolved');
    $default = '\f086  Post';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Label Message
    $name = 'theme_evolved/swlabelmessage';
    $title = get_string('swlabelmessage','theme_evolved');
    $description = get_string('swlabelmessage_desc', 'theme_evolved');
    $default = '\f0e5  Message';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Label comment
    $name = 'theme_evolved/swlabelcomment';
    $title = get_string('swlabelcomment','theme_evolved');
    $description = get_string('swlabelcomment_desc', 'theme_evolved');
    $default = '\f0e6  Comments';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Label Attachment
    $name = 'theme_evolved/swlabelattachment';
    $title = get_string('swlabelattachment','theme_evolved');
    $description = get_string('swlabelattachment_desc', 'theme_evolved');
    $default = '\f0c6  Attachments';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);


    // Socialwall add a post bkg color.
    $name = 'theme_evolved/swaddpost';
    $title = get_string('swaddpost', 'theme_evolved');
    $description = get_string('swaddpost_desc', 'theme_evolved');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall post color.
    $name = 'theme_evolved/swpost';
    $title = get_string('swpost', 'theme_evolved');
    $description = get_string('swpost_desc', 'theme_evolved');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Message color.
    $name = 'theme_evolved/swmessage';
    $title = get_string('swmessage', 'theme_evolved');
    $description = get_string('swmessage_desc', 'theme_evolved');
    $default = '#F0F3F7';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Attachment color.
    $name = 'theme_evolved/swattach';
    $title = get_string('swattach', 'theme_evolved');
    $description = get_string('swattach_desc', 'theme_evolved');
    $default = '#F6FAA0';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Attachment color.
    $name = 'theme_evolved/swcomment';
    $title = get_string('swcomment', 'theme_evolved');
    $description = get_string('swcomment_desc', 'theme_evolved');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Socialwall Icon and text color.
    $name = 'theme_evolved/swicontext';
    $title = get_string('swicontext', 'theme_evolved');
    $description = get_string('swicontext_desc', 'theme_evolved');
    $default = '#A83116';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Multilanguage CSS.
    $name = 'theme_evolved/swmultilangcss';
    $title = get_string('swmultilangcss', 'theme_evolved');
    $description = get_string('swmultilangcss_desc', 'theme_evolved');
    $default = '.lang-es.format-socialwall ul.section.tl-postattachment:before { content: "\f0c6  Anexos"; }
.lang-es.format-socialwall .tl-comments:before { content: "\f0e6  Comentarios"; }
.lang-es.format-socialwall .tl-posttext:before{ content: "\f0e5  Mensaje"; }
.lang-es.format-socialwall .tl-post:before{ content: "\f086  Publicación" }

.lang-de.format-socialwall ul.section.tl-postattachment:before { content: "\f0c6  Zubehör"; }
.lang-de.format-socialwall .tl-comments:before { content: "\f0e6  Comments"; }
.lang-de.format-socialwall .tl-posttext:before{ content: "\f0e5  Nachricht"; }
.lang-de.format-socialwall .tl-post:before{ content: "\f086  Post" }

.lang-es_mx.format-socialwall ul.section.tl-postattachment:before { content: "\f0c6  Anexos"; }
.lang-es_mx.format-socialwall .tl-comments:before { content: "\f0e6  Comentarios"; }
.lang-es_mx.format-socialwall .tl-posttext:before{ content: "\f0e5  Mensaje"; }
.lang-es_mx.format-socialwall .tl-post:before{ content: "\f086  Publicación" }

.lang-fr.format-socialwall ul.section.tl-postattachment:before { content: "\f0c6  Pièces jointes"; }
.lang-fr.format-socialwall .tl-comments:before { content: "\f0e6  Commentaires"; }
.lang-fr.format-socialwall .tl-posttext:before{ content: "\f0e5  Message"; }
.lang-fr.format-socialwall .tl-post:before{ content: "\f086  Poste" }

.lang-it.format-socialwall ul.section.tl-postattachment:before { content: "\f0c6  Allegati"; }
.lang-it.format-socialwall .tl-comments:before { content: "\f0e6  Commenti"; }
.lang-it.format-socialwall .tl-posttext:before{ content: "\f0e5  Messaggio"; }
.lang-it.format-socialwall .tl-post:before{ content: "\f086  Posta" }';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_evolved', $temp);