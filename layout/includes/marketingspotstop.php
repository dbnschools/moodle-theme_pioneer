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
 * This is built using the bootstrapbase template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
?>
<div class="clearfix"></div>
<div class="row-fluid" id="marketingtop-spots">

<div class="span4">
    <div class="marketwraptop">
        <div class="market-spottop">
            <div class="market-title">
            <h3><?php echo $PAGE->theme->settings->marketingtop1 ?></h3>
            </div>
            <p>
            <?php echo $PAGE->theme->settings->marketingtop1content ?>
            </p> 
            <br>
            <?php if ($PAGE->theme->settings->marketingtop1buttonurl) { ?>
            <div class="marketlink">
            <a href="<?php echo $PAGE->theme->settings->marketingtop1buttonurl ?>" target="<?php echo $PAGE->theme->settings->marketingtop1target ?>" class="button"><span><i class="fa fa-<?php echo $PAGE->theme->settings->marketingtop1icon ?>"></i></span>
            <?php echo $PAGE->theme->settings->marketingtop1buttontext ?>
            </a>
            </div>
            <?php } ?>

        </div>
    </div>
</div>

<div class="span4">
    <div class="marketwraptop">
        <div class="market-spottop">
            <div class="market-title">
            <h3><?php echo $PAGE->theme->settings->marketingtop2 ?></h3>
            </div>
            <p>
            <?php echo $PAGE->theme->settings->marketingtop2content ?>
            </p> 
            <br />
            <?php if ($PAGE->theme->settings->marketingtop2buttonurl) { ?>
            <div class="marketlink">
            <a href="<?php echo $PAGE->theme->settings->marketingtop2buttonurl ?>" target="<?php echo $PAGE->theme->settings->marketingtop2target ?>" class="button"><span><i class="fa fa-<?php echo $PAGE->theme->settings->marketingtop2icon ?>"></i></span>
            <?php echo $PAGE->theme->settings->marketingtop2buttontext ?>
            </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="span4">
    <div class="marketwraptop">
        <div class="market-spottop">
            <div class="market-title">
            <h3><?php echo $PAGE->theme->settings->marketingtop3 ?></h3>
            </div>
            <p>
            <?php echo $PAGE->theme->settings->marketingtop3content ?>
            </p> 
            <br />
            <?php if ($PAGE->theme->settings->marketingtop3buttonurl) { ?>
            <div class="marketlink">
            <a href="<?php echo $PAGE->theme->settings->marketingtop3buttonurl ?>" target="<?php echo $PAGE->theme->settings->marketingtop3target ?>" class="button"><span><i class="fa fa-<?php echo $PAGE->theme->settings->marketingtop3icon ?>"></i></span>
            <?php echo $PAGE->theme->settings->marketingtop3buttontext ?>
            </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

</div>
