
<div class="fpcustomnav-container">
<header class="fixed-top-nav">
        <nav role="navigation" class="navbar navbar-inner">

        <a href="<?php echo $CFG->wwwroot;?>"><div id="logo"> </div></a>

        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </a>
        
          <div class="nav-collapse collapse">
          <?php if (isloggedin()) { ?>
                <!-- icon navigation-->
           <?php require_once(dirname(__FILE__).'/iconnav.php'); ?>
           <div class="top-search">
           <form action="<?php echo new moodle_url('/course/search.php'); ?>" method="get">
              <input type="text" placeholder="<?php echo get_string('searchcourses'); ?>" name="search" value="">
              <input type="submit" value="Find">
           </form>    
           </div>
           <?php } else { ?>
           <?php } ?>
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
          </div>
        </nav>
</header>
</div>

<div class="clearfix"></div>

