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
 * @package    theme_pioneer
 * @copyright  2015 Chris Kenniburg
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$settings = null;

defined('MOODLE_INTERNAL') || die;
if (is_siteadmin()) {

    global $PAGE;
    $ADMIN->add('themes', new admin_category('theme_pioneer', 'Pioneer'));

    include(dirname(__FILE__) . '/settings/general.php');
    include(dirname(__FILE__) . '/settings/headerimage.php');
    include(dirname(__FILE__) . '/settings/fpdashboard.php');
    include(dirname(__FILE__) . '/settings/fptabs.php');
    include(dirname(__FILE__) . '/settings/navigation.php');
    include(dirname(__FILE__) . '/settings/iconnavigation.php');
    include(dirname(__FILE__) . '/settings/colors.php');
    include(dirname(__FILE__) . '/settings/marketbottom.php');
    include(dirname(__FILE__) . '/settings/markettop.php');
    include(dirname(__FILE__) . '/settings/footerboxes.php');
    include(dirname(__FILE__) . '/settings/socialicons.php');
    include(dirname(__FILE__) . '/settings/socialwall.php');
    include(dirname(__FILE__) . '/settings/googlefont.php');
    include(dirname(__FILE__) . '/settings/analytics.php');
}