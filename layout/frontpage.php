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
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The two column layout.
 *
 * @package   theme_clean
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_pioneer_get_html_for_settings($OUTPUT, $PAGE);
$courserenderer = $PAGE->get_renderer('core', 'course');
$PAGE->requires->jquery(); 
// Set default (LTR) layout mark-up for a two column page (side-pre-only).
$regionmain = 'span9 pull-left';
$sidepre = 'span3 pull-right desktop-first-column';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmain = 'span9';
    $sidepre = 'span3 pull-right';
}

echo $OUTPUT->doctype() ?>

<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google web fonts -->
    <?php require_once(dirname(__FILE__).'/includes/fonts.php'); ?>
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php require_once(dirname(__FILE__).'/includes/alerts.php'); ?>

<div id="page" class="container-fluid">
<div class="fpcustomnav-container">
        <nav role="navigation" class="navbar navbar-inner">
          <div id="logo"> </div>
                <!-- icon navigation-->
    <?php require_once(dirname(__FILE__).'/includes/iconnav.php'); ?>
            <?php echo $OUTPUT->custom_menu(); ?>
            <?php if (isloggedin()) { ?>
            <div class="top-search">
           <form action="<?php echo new moodle_url('/course/search.php'); ?>" method="get">
              <input type="text" placeholder="<?php echo get_string('searchcourses'); ?>" name="search" value="">
              <input type="submit" value="Find">
           </form>    
            </div>
            <?php } else { ?>
            <?php } ?>
        </nav>
</div>
        <div class="clearfix"></div>

    <div id="page-content" class="row-fluid">
        <?php if (!isloggedin()) { ?>
        <div id="header-image-box-logout">
        <div class="header-image">
            <div class="course-title">
            <?php echo $html->heading; ?>
           </div>
           
           <div id="course-header">      
                <?php echo $OUTPUT->course_header(); ?>
           </div>

    <div class="wrap">
        <div class="avatarlogin">
        <img src="<?php echo $OUTPUT->pix_url('avatar', 'theme'); ?>" alt="Login" />
       </div>
        <form action="<?php echo new moodle_url('/login/index.php'); ?>" method="post" id="login"  >
                    <a href="<?php echo new moodle_url('/login/signup.php'); ?>" class="create_link"><?php echo get_string('signuplogin' , 'theme_pioneer'); ?></a>

        <input type="text" name="username" placeholder="<?php echo get_string('lginuser' , 'theme_pioneer'); ?>" required>
        <div class="bar">
            <i></i>
       </div>
        <input type="password" name="password" placeholder="<?php echo get_string('lginpass' , 'theme_pioneer'); ?>" required>
        <a href="<?php echo new moodle_url('/login/forgot_password.php'); ?>" class="forgot_link"><?php echo get_string('lginforgot' , 'theme_pioneer'); ?></a>
        <button>
            <?php echo get_string('lginlogin' , 'theme_pioneer'); ?>
        </button>
        </form>
    </div>
    <?php } else { ?>
     <div id="header-image-box">
            <div class="header-image">
                <div class="header-spacer">
                <div class="course-title">
                    <?php echo $html->heading; ?>
                </div>
                <div id="course-header">      
                <?php echo $OUTPUT->course_header(); ?>
                </div>
            </div>
    <?php } ?>
        </div>
        </div>
        <div id="breadcrumb-container" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav> <?php echo $OUTPUT->user_menu(); ?>
        </div>
        <div id="editbutton">
                <?php echo $OUTPUT->page_heading_button(); ?>
        </div>
        <section id="region-main" class="<?php echo $regionmain; ?>">
            
    <?php 
        if($PAGE->theme->settings->togglefptextbox==1) {
            require_once(dirname(__FILE__).'/includes/fptextbox.php');
        } else if($PAGE->theme->settings->togglefptextbox==2 && !isloggedin()) {
            require_once(dirname(__FILE__).'/includes/fptextbox.php');
        } else if($PAGE->theme->settings->togglefptextbox==3 && isloggedin()) {
            require_once(dirname(__FILE__).'/includes/fptextbox.php');
        } 
    ?>

            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>

        <div class="clearfix"></div>
        <?php echo $courserenderer->promoted_courses(); ?>
                    <!-- Start Marketing Spots -->
    <?php 
        if($PAGE->theme->settings->togglemarketing==1) {
            require_once(dirname(__FILE__).'/includes/marketingspots.php');
        } else if($PAGE->theme->settings->togglemarketing==2 && !isloggedin()) {
            require_once(dirname(__FILE__).'/includes/marketingspots.php');
        } else if($PAGE->theme->settings->togglemarketing==3 && isloggedin()) {
            require_once(dirname(__FILE__).'/includes/marketingspots.php');
        } 
    ?>
    <!-- End Marketing Spots -->
    </div>

        <?php require_once(dirname(__FILE__).'/includes/socialicons.php'); ?>

    <footer id="page-footer">
    <!-- Start Marketing Spots -->
    <?php 
        if($PAGE->theme->settings->togglemarketing==1) {
            require_once(dirname(__FILE__).'/includes/marketingspots.php');
        } else if($PAGE->theme->settings->togglemarketing==2 && !isloggedin()) {
            require_once(dirname(__FILE__).'/includes/marketingspots.php');
        } else if($PAGE->theme->settings->togglemarketing==3 && isloggedin()) {
            require_once(dirname(__FILE__).'/includes/marketingspots.php');
        } 
    ?>
    <!-- End Marketing Spots -->
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>
    
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</body>
</html>
