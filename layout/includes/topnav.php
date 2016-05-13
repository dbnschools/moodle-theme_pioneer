
<nav class="fpcustomnav-container">
<div class="fixed-top-nav">
        <div role="navigation" class="navbar navbar-inner">

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
          <div id="editbutton-top"><?php echo $OUTPUT->page_heading_button(); ?></div>
        <?php echo $OUTPUT->user_menu(); ?>
        
            <div class="nav-collapse collapse">
          
                <?php echo $OUTPUT->navigation_menu(); ?>
                
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        
        </div>
</div>
</nav>

