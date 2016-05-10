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
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_pioneer_get_html_for_settings($OUTPUT, $PAGE);
$courserenderer = $PAGE->get_renderer('core', 'course');
$PAGE->requires->jquery(); 
$PAGE->requires->jquery_plugin('slick', 'theme_pioneer');
$PAGE->requires->jquery_plugin('promo', 'theme_pioneer');
$PAGE->requires->jquery_plugin('fpslider', 'theme_pioneer');
// Set default (LTR) layout mark-up for a two column page (side-pre-only).

$blockposition = $PAGE->theme->settings->blockposition;
$regionposition = ($blockposition == 'pull-left' ? 'pull-right' : 'pull-left');
$regionmain = "span9 $regionposition";
$sidepre = "span3 $blockposition desktop-first-column";
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmain = 'span9 pull-right';
    $sidepre = 'span3 pull-left desktop-first-column';
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
    <?php if($PAGE->theme->settings->analyticsenabled==1) { ?>  <?php require_once(dirname(__FILE__).'/includes/guniversal.php'); ?> <?php } ?>
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page" class="container-fluid">
    <div id="page-content" class="row-fluid">

    <header>
        <?php if ($PAGE->theme->settings->showlogin == 1 && !isloggedin()) { ?>
        <div id="header-image-box-logout">
            <div id="course-header">      
                <?php echo $OUTPUT->course_header(); ?>
            </div>
            <div class="course-titlewrap">
            <div class="course-title">
            <?php echo $html->heading; ?>
            <div class="logintools">
            <ul>
            <?php if($PAGE->theme->settings->createuser==1) { ?><li><a href="<?php echo new moodle_url('/login/signup.php'); ?>"><?php echo get_string('signuplogin' , 'theme_pioneer'); ?></a></li><?php } ?>
            <?php if($PAGE->theme->settings->forgotpass==1) { ?><li><a href="<?php echo new moodle_url('/login/forgot_password.php'); ?>"><?php echo get_string('lginforgot' , 'theme_pioneer'); ?></li></a><?php } ?>
            </ul>
            </div>
            <div class="customlogin">
            <form action="<?php echo new moodle_url('/login/index.php'); ?>" method="post" id="login"  >
            <input type="text" name="username" placeholder="<?php echo get_string('lginuser' , 'theme_pioneer'); ?>" required>
            <input type="password" name="password" placeholder="<?php echo get_string('lginpass' , 'theme_pioneer'); ?>" required>
            <button>
            <?php echo get_string('lginlogin' , 'theme_pioneer'); ?>
            </button>
            </form>
            </div>
            </div>
            </div>
        </div>

    <?php } else { ?>
    <div id="header-image-box">
    <div class="header-image">
        <div class="top-icon-search">
        <?php if(isloggedin()) { ?> 
            <?php 
              if($PAGE->theme->settings->toggleiconnav==1) {
              require_once(dirname(__FILE__).'/includes/iconnav.php');
              } else if($PAGE->theme->settings->toggleiconnav==2) {
              require_once(dirname(__FILE__).'/includes/iconnav.php');
              }
            ?>
            <div class="top-search">
            <?php if($PAGE->theme->settings->fpsearchboxtop) { ?>
            <?php require(dirname(__FILE__).'/includes/searchbox.php'); ?>
            <?php } ?>
           </div>
           </div>
           <?php } else { ?>
        </div>
        <?php } ?>
                <div class="header-spacer">

                <div id="course-header">      
                <?php echo $OUTPUT->course_header(); ?>
                </div>
                <div class="course-titlewrap">
            <div class="course-title">
            <?php echo $html->heading; ?>
            <?php if($PAGE->theme->settings->tabtoggle==1) { ?>
            
            <div class="coursegradewrap">        
            <div data-toggle="collapse" data-target="#frontpagetabs" class="coursegradebtn btn-link"><i class="fa fa-arrow-circle-down"></i>  <?php echo $PAGE->theme->settings->tabbuttontext ?> </div>
            </div>
            <?php } ?>
            </div>
            
            </div>
           </div>
            </div>
        <?php if($PAGE->theme->settings->tabtoggle==1) { ?>
            <div id="frontpagetabs" class="collapse out">
                <?php require_once(dirname(__FILE__).'/includes/tabs.php'); ?>
            </div>
        <?php } ?>
            </div>       
        <?php } ?>

    </header>

        <?php require_once(dirname(__FILE__).'/includes/topnav.php'); ?>

    <div class="breadcrumbcenter">
        <div id="breadcrumb-container" class="clearfix">
            <breadcrumb class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></breadcrumb>
        </div>
    </div>
        <div id="editbutton">
            <?php echo $OUTPUT->page_heading_button(); ?>
        </div>

        <?php require_once(dirname(__FILE__).'/includes/alerts.php'); ?>
        <!-- Start Marketing Spots -->
    <?php 
        if($PAGE->theme->settings->togglemarketingtop==1) {
            require_once(dirname(__FILE__).'/includes/marketingspotstop.php');
        } else if($PAGE->theme->settings->togglemarketingtop==2 && !isloggedin()) {
            require_once(dirname(__FILE__).'/includes/marketingspotstop.php');
        } else if($PAGE->theme->settings->togglemarketingtop==3 && isloggedin()) {
            require_once(dirname(__FILE__).'/includes/marketingspotstop.php');
        } 
    ?>
<!-- End Marketing Spots -->

        <section id="region-main" class="<?php echo $regionmain; ?>">

        <?php echo $OUTPUT->course_content_header(); ?>
        <?php require_once(dirname(__FILE__).'/includes/fptextbox.php'); ?>
        <?php echo $OUTPUT->course_content_footer(); ?>
        </section>

        <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>

        <div class="clearfix"></div>
        <?php 
        if($PAGE->theme->settings->pcourseenable==1) {
            echo $courserenderer->promoted_courses();
        } else if($PAGE->theme->settings->pcourseenable==2 && !isloggedin()) {
            echo $courserenderer->promoted_courses();
        } else if($PAGE->theme->settings->pcourseenable==3 && isloggedin()) {
            echo $courserenderer->promoted_courses();
        } 
        ?>
        
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
        <?php require_once(dirname(__FILE__).'/includes/footertext.php'); ?>
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>
    
</div>

<script>

</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

</body>
</html>