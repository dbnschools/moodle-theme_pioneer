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
$PAGE->requires->jquery();

require('includes/courseimage.php'); 
// Set default (LTR) layout mark-up for a two column page (side-pre-only).
$blockposition = $PAGE->theme->settings->blockposition;
$regionposition = ($blockposition == 'pull-left' ? 'pull-right' : 'pull-left');
$regionmain = "span9 $regionposition";
$sidepre = "span3 $blockposition desktop-first-column";
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
    <?php if($PAGE->theme->settings->analyticsenabled==1) { ?>  <?php require_once(dirname(__FILE__).'/includes/guniversal.php'); ?> <?php } ?>
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page" class="container-fluid">
<div id="page-content" class="row-fluid">
    <header>
        <div id="header-image-box">
            <?php if($PAGE->theme->settings->headerbackgroundtoggle==1 && $courseimage) { ?>
            <div class="header-image-custom" style="background-image: url('<?php echo $courseimage ?>');">
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
        <?php } else { ?>
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
        <?php } ?>
        <div class="header-spacer">
            <div id="course-header">      
            <?php echo $OUTPUT->course_header(); ?>  
            </div>
        </div>

        <div class="course-titlewrap">
        <div class="course-title">
            <?php echo $html->heading; ?>
            <?php if($PAGE->theme->settings->coursegradetoggle==1 && $PAGE->course->showgrades==1) { ?>
            <div class="coursegradewrap">
            <div data-toggle="collapse" data-target="#coursegrades" class="coursegradebtn btn-link"><i class="fa fa-graduation-cap"></i>  <?php echo $PAGE->theme->settings->coursegradestext ?></div>
            </div>
            <?php } ?>
            </div>
            </div>
        </div>
        </div>
        <div>
        <?php if($PAGE->theme->settings->coursegradetoggle==1 && $PAGE->course->showgrades==1) { ?>
        <div id="coursegrades" class="collapse out">
            <?php require_once(dirname(__FILE__).'/includes/coursegrade.php'); ?>
        </div>
        <?php } ?>
        </div>
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


    <section id="region-main" class="<?php echo $regionmain; ?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
    </section>

        <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>

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
<?php if($PAGE->theme->settings->coursecomplete==1 && $PAGE->course->enablecompletion==1) {require_once(dirname(__FILE__).'/includes/progress.php'); } ?>

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<script type="text/javascript">
$(window).scroll(function(x) {
    var viewport_top = $(window).scrollTop();
    var closest = null;
    var closest_offset = null;

    $('.section.main').each(function(e, f) {
        var this_offset = $(f).offset().top;
        
        if ($(closest).offset()) {
            closest_offset = $(closest).offset().top;
        }
        if (closest == null || Math.abs(this_offset - viewport_top) < Math.abs(closest_offset - viewport_top)) {
            closest = f;
        }
    }); 
    
    window.sessionStorage.setItem('closest_id', closest.id);
    window.sessionStorage.setItem('closest_delta', viewport_top - $(closest).offset().top);
});
$(document).ready(function() {
    var closest_id = window.sessionStorage.getItem('closest_id');
    var closest_delta = window.sessionStorage.getItem('closest_delta');

    if (closest_id && closest_delta) {
        var closest = $('#' + closest_id);
        $(window).scrollTop(closest.offset().top + parseInt(closest_delta));
    }
});
</script>
</body>

</html>
