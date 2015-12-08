<div class="fpcustomnav-container">
<header class="fixed-top-nav">
        <nav role="navigation" class="navbar navbar-inner">

        <?php if ($PAGE->theme->settings->logo) { ?><a href="<?php echo $CFG->wwwroot;?>"><div id="logo"> </div></a>
        <?php } else { ?>
                <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
        <?php } ?> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </a>
          
        <?php echo $OUTPUT->user_menu(); ?>
          
        <div class="nav-collapse collapse">
        <?php if (isloggedin()) { ?>
          <div>
          <div class="top-search">
           <form action="<?php echo new moodle_url('/course/search.php'); ?>" method="get">
              <input type="text" placeholder="<?php echo get_string('topsearch' , 'theme_pioneer'); ?>" name="search" value="">
              <input type="submit" value="<?php echo get_string('topsearchbutton' , 'theme_pioneer'); ?>">
           </form>    
           </div>
           
          <?php require_once(dirname(__FILE__).'/iconnav.php'); ?>
           
           </div>
           <?php } else { ?>
           <?php } ?>
           
                <?php echo $OUTPUT->navigation_menu(); ?>
                <?php echo $OUTPUT->custom_menu(); ?>

                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
          </div>
        </nav>
</header>
</div>

<div class="clearfix"></div>