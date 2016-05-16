<?php if (isloggedin() ) { ?> 
<div class="fpstartwrap">
<div class="fpstart">
    <div class="iconset">
		<?php if ($PAGE->theme->settings->nav1icon) { ?>
            <div class="fpicon">
                <a href="<?php echo $PAGE->theme->settings->nav1buttonurl ?>" target="_self" id="button">
                <div class="navicon" align="center">
                    <i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav1icon ?>"></i>
                </div>
                <?php echo $PAGE->theme->settings->nav1buttontext ?></a>
            </div>
        <?php } ?>
        <?php if ($PAGE->theme->settings->nav2icon) { ?>
            <div class="fpicon">
                <a href="<?php echo $PAGE->theme->settings->nav2buttonurl ?>" target="_self" id="button">
                <div class="navicon" align="center">
                    <i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav2icon ?>"></i>
                </div>
                <?php echo $PAGE->theme->settings->nav2buttontext ?></a>
            </div>        
        <?php } ?>
        <?php if ($PAGE->theme->settings->nav3icon) { ?>
            <div class="fpicon">
                <a href="<?php echo $PAGE->theme->settings->nav3buttonurl ?>" target="_self" id="button">
                <div class="navicon" align="center">
                    <i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav3icon ?>"></i>
                </div>
                <?php echo $PAGE->theme->settings->nav3buttontext ?></a>
            </div>
        <?php } ?>
		<?php if ($PAGE->theme->settings->nav4icon) { ?>
            <div class="fpicon">
                <a href="<?php echo $PAGE->theme->settings->nav4buttonurl ?>" target="_self" id="button">
                <div class="navicon" align="center">
                    <i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav4icon ?>"></i>
                </div>
                <?php echo $PAGE->theme->settings->nav4buttontext ?></a>
            </div>
        <?php } ?>
		<?php if ($PAGE->theme->settings->nav5icon) { ?>
            <div class="fpicon">
                <a href="<?php echo $PAGE->theme->settings->nav5buttonurl ?>" target="_self" id="button">
                <div class="navicon" align="center">
                    <i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav5icon ?>"></i>
                </div>
                <?php echo $PAGE->theme->settings->nav5buttontext ?></a>
            </div>
        <?php } ?>
        <?php if ($PAGE->theme->settings->nav6icon) { ?>
            <div class="fpicon">
                <a href="<?php echo $PAGE->theme->settings->nav6buttonurl ?>" target="_self" id="button">
                <div class="navicon" align="center">
                    <i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav6icon ?>"></i>
                </div>
                <?php echo $PAGE->theme->settings->nav6buttontext ?></a>
            </div>
        <?php } ?>
		<?php if ($PAGE->theme->settings->nav7icon) { ?>
            <div class="fpicon">
                <a href="<?php echo $PAGE->theme->settings->nav7buttonurl ?>" target="_self" id="button">
                <div class="navicon" align="center">
                    <i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav7icon ?>"></i>
                </div>
                <?php echo $PAGE->theme->settings->nav7buttontext ?></a>
            </div>
        <?php } ?>
        <?php if ($PAGE->theme->settings->nav8icon) { ?>
            <div class="fpicon">
                <a href="<?php echo $PAGE->theme->settings->nav8buttonurl ?>" target="_self" id="button">
                <div class="navicon" align="center">
                    <i class="fa fa-3x fa-<?php echo $PAGE->theme->settings->nav8icon ?>"></i>
                </div>
                <?php echo $PAGE->theme->settings->nav8buttontext ?></a>
            </div>
        <?php } ?>
    </div>
    <?php if($PAGE->theme->settings->fpsearchboxmain) { ?>
        <div class="fpsearch">
            <?php require(dirname(__FILE__).'/searchbox.php'); ?>
        </div> 
    <?php } ?>
</div>
</div>
<div style="clear:both;"></div>
<?php } else { ?>
    
<?php } ?>

