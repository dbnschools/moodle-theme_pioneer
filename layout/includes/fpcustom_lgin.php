<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>
<?php echo $OUTPUT->standard_top_of_body_html() ?>
<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?>">
   <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">

<?php require_once(dirname(__FILE__).'/alerts.php'); ?>

    <header id="page-header" class="clearfix">
        <div id="page-navbar" class="clearfix">
            <div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
            <nav class="breadcrumb-button logosmall"></nav>
        </div>
    </header>

    <div id="page-content" class="row-fluid">
        <?php if (!$left) { ?>
    <section id="region-main" class="span9 pull-left">
        <?php } else { ?>
    <section id="region-main" class="span9">
        <?php } ?>

    <div class="course-title">
        <div id="editbutton">
            <?php echo $OUTPUT->page_heading_button(); ?>
        </div>
    <?php echo $html->heading; ?>
    </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
<div class="block">
    <div class="fpcustomnav">
        <div class="fpicon">
        <div class="navicon" align="center">
            <a href="<?php echo $PAGE->theme->settings->nav1buttonurl ?>" target="_self" id="button">
            <h5><span><i class="fa fa-2x fa-<?php echo $PAGE->theme->settings->nav1icon ?>"></i></span></h5>
            <p align="center">
                    <?php echo $PAGE->theme->settings->nav1buttontext ?>
                </a>
            </p>
        </div>
        </div>
        <div class="fpicon">
        <div class="navicon" align="center">
            <a href="<?php echo $PAGE->theme->settings->nav2buttonurl ?>" target="_self" id="button">
            <h5><span><i class="fa fa-2x fa-<?php echo $PAGE->theme->settings->nav2icon ?>"></i></span></h5>
            <p align="center">
                    <?php echo $PAGE->theme->settings->nav2buttontext ?>
                </a>
            </p>
        </div>
        </div>
        <div class="fpicon">
        <div class="navicon" align="center">
            <a href="<?php echo $PAGE->theme->settings->nav3buttonurl ?>" target="_self" id="button">
            <h5><span><i class="fa fa-2x fa-<?php echo $PAGE->theme->settings->nav3icon ?>"></i></span></h5>
            <p align="center">
                    <?php echo $PAGE->theme->settings->nav3buttontext ?>
                </a>
            </p>
        </div>
        </div>
        <div class="fpicon">
        <div class="navicon" align="center">
            <a href="<?php echo $PAGE->theme->settings->nav4buttonurl ?>" target="_self" id="button">
            <h5><span><i class="fa fa-2x fa-<?php echo $PAGE->theme->settings->nav4icon ?>"></i></span></h5>
            <p align="center">
                    <?php echo $PAGE->theme->settings->nav4buttontext ?>
                </a>
            </p>
        </div>
        </div>
        <div class="fpicon">
        <div class="navicon" align="center">
            <a href="<?php echo $PAGE->theme->settings->nav5buttonurl ?>" target="_self" id="button">
            <h5><span><i class="fa fa-2x fa-<?php echo $PAGE->theme->settings->nav5icon ?>"></i></span></h5>
            <p align="center">
                    <?php echo $PAGE->theme->settings->nav5buttontext ?>
                </a>
            </p>
        </div>
        </div>
        <div class="fpicon">
        <div class="navicon" align="center">
            <a href="<?php echo $PAGE->theme->settings->nav6buttonurl ?>" target="_self" id="button">
            <h5><span><i class="fa fa-2x fa-<?php echo $PAGE->theme->settings->nav6icon ?>"></i></span></h5>
            <p align="center">
                    <?php echo $PAGE->theme->settings->nav6buttontext ?>
                </a>
            </p>
        </div>
        </div>
        <div class="fpicon">
        <div class="navicon" align="center">
            <a href="<?php echo $PAGE->theme->settings->nav7buttonurl ?>" target="_self" id="button">
            <h5><span><i class="fa fa-2x fa-<?php echo $PAGE->theme->settings->nav7icon ?>"></i></span></h5>
            <p align="center">
                    <?php echo $PAGE->theme->settings->nav7buttontext ?>
                </a>
            </p>
        </div>
        </div>
        <div class="fpicon">
        <div class="navicon" align="center">
            <a href="<?php echo $PAGE->theme->settings->nav8buttonurl ?>" target="_self" id="button">
            <h5><span><i class="fa fa-2x fa-<?php echo $PAGE->theme->settings->nav8icon ?>"></i></span></h5>
            <p align="center">
                    <?php echo $PAGE->theme->settings->nav8buttontext ?>
                </a>
            </p>
        </div>
        </div>
        <div class="fpsearch" >
        <form action="<?php echo new moodle_url('/course/search.php'); ?>" method="get"><fieldset><strong><?php echo get_string('fpsearch', 'theme_evolved'); ?></strong><br><input type="text" size="20" name="search" value="" /><input type="submit" value="Go" /></fieldset></form>
        </div>
    </div>
</div>
    <div style="clear:both;"></div>
    <?php
    if ($PAGE->theme->settings->fpslideshow==1 && isloggedin()) { ?>
        <div class="slider">
            <input type="radio" name="slide_switch" id="id1" checked="checked" onClick="SetSlide(1);" />
            <label for="id1">
                <img src="<?php echo $PAGE->theme->setting_file_url('back1', 'back1', true); ?>" onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
            </label>
            <img src="<?php echo $PAGE->theme->setting_file_url('back1', 'back1', true); ?>"  onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
           
            <!--Lets show the second image by default on page load-->
            <input type="radio" name="slide_switch" id="id2" onClick="SetSlide(2);" />
            <label for="id2">
                <img src="<?php echo $PAGE->theme->setting_file_url('back2', 'back2', true); ?>"  onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
            </label>
            <img class="slidemain" src="<?php echo $PAGE->theme->setting_file_url('back2', 'back2', true); ?>"  onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
           
            <input type="radio" name="slide_switch" id="id3" onClick="SetSlide(3);" />
            <label for="id3">
                <img src="<?php echo $PAGE->theme->setting_file_url('back3', 'back3', true); ?>" onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
            </label>
            <img class="slidemain" src="<?php echo $PAGE->theme->setting_file_url('back3', 'back3', true); ?>"  onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
           
            <input type="radio" name="slide_switch" id="id4" onClick="SetSlide(4);" />
            <label for="id4">
                <img src="<?php echo $PAGE->theme->setting_file_url('back4', 'back4', true); ?>" onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
            </label>
            <img class="slidemain" src="<?php echo $PAGE->theme->setting_file_url('back4', 'back4', true); ?>" onMouseOver="StopPlaying();" onMouseOut="StartPlaying();" />
        </div>
<SCRIPT TYPE="text/javascript">
    var playingslideno = 1;
    var playingslide = true;
    var slidertimer;
    function PlayNextSlide() {
       if (playingslide == true) {
          playingslideno = playingslideno + 1;
          if (playingslideno > 4) playingslideno = 1;
          document.getElementById('id'+playingslideno).checked = true;
          slidertimer = setTimeout(function() { PlayNextSlide(); }, 3000);
       }
    }
   function StopPlaying() {
       playingslide = false;
       clearTimeout(slidertimer);
   }
   function StartPlaying() {
       playingslide = true;
       playingslideno = playingslideno - 1;
       PlayNextSlide();
   }
   function SetSlide(n) {
      playingslideno = n;
   }
   slidertimer = setTimeout(function() { PlayNextSlide(); }, 3000);
</SCRIPT>

<div style="clear:both;"></div>
    <?php } else { ?>
    <br>
    <?php } ?>
    <br>
    <p>
    <?php echo $PAGE->theme->settings->fptext ?>
    </p>
    </section>
        <?php echo $OUTPUT->blocks('side-pre', 'span3'); ?>
        <?php echo $OUTPUT->blocks('side-post', 'span3 pull-right'); ?>
    </div>

<hidden style="display:none;">
        <?php
        echo $OUTPUT->course_content_header();
        echo $OUTPUT->main_content();
        echo $OUTPUT->course_content_footer();
        ?>
</hidden>