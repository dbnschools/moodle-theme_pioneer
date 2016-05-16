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

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . "/course/renderer.php");

class theme_pioneer_core_course_renderer extends core_course_renderer {
    public function frontpage_available_courses() {
        /* available courses */
        global $CFG, $OUTPUT, $PAGE;
        require_once($CFG->libdir. '/coursecatlib.php');

        $chelper = new coursecat_helper();
        $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->set_courses_display_options(array(
            'recursive' => true,
            'limit' => $CFG->frontpagecourselimit,
            'viewmoreurl' => new moodle_url('/course/index.php'),
            'viewmoretext' => new lang_string('fulllistofcourses')
        ));

        $chelper->set_attributes(array('class' => 'frontpage-course-list-all'));
        $courses = coursecat::get(0)->get_courses($chelper->get_courses_display_options());
        $totalcount = coursecat::get(0)->get_courses_count($chelper->get_courses_display_options());

        $rcourseids = array_keys($courses);
        $acourseids = array_chunk($rcourseids, 5);
        $newcourse = get_string('availablecourses');

        $header = '<div id="frontpage-course-list">
        <h2>'.$newcourse.'</h2>
        <div class="courses frontpage-course-list-all">';

        $footer = '
        </div>
        </div>';

        $content = '';

        if (count($rcourseids) > 0) {
            foreach ($acourseids as $courseids) {
                $content .= '<div class="row-fluid">';
                $rowcontent = '';

                foreach ($courseids as $courseid) {
                    $course = get_course($courseid);

                    $no = get_config('theme_pioneer', 'patternselect');
                    $nimgp = (empty($no)||$no == "default") ? 'no-image' : 'cs0'.$no.'/no-image';

                    $summary = theme_pioneer_strip_html_tags($course->summary);
                    $summary = theme_pioneer_course_trim_char($summary, 20);
                    $trimtitle = theme_pioneer_course_trim_char($course->fullname, 25);

                    $noimgurl = $OUTPUT->pix_url($nimgp, 'theme');
                    $courseurl = new moodle_url('/course/view.php', array('id' => $courseid ));

                    if ($course instanceof stdClass) {
                        require_once($CFG->libdir. '/coursecatlib.php');
                        $course = new course_in_list($course);
                    }

                    $imgurl = '';
                    $context = context_course::instance($course->id);

                    foreach ($course->get_course_overviewfiles() as $file) {
                        $isimage = $file->is_valid_image();
                        $imgurl = file_encode_url("$CFG->wwwroot/pluginfile.php",
                            '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                            $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
                        if (!$isimage) {
                            $imgurl = $noimgurl;
                        }
                    }

                    if (empty($imgurl)) {
                        $imgurl = $PAGE->theme->setting_file_url('headerbackgroundimage', 'headerbackgroundimage', true);
                        if (!$imgurl) {
                            $imgurl = $noimgurl;
                        }
                    }

                    $rowcontent .= '
                        <div style="background-image: url('.$imgurl.');background-repeat: no-repeat;background-size:cover; background-position:center;" class="fp-avail-courses">
                        <div class="fp-coursebox">
                        <div class="fp-courseinfo">
                        <p><a href="'.$courseurl.'" id="button" data-toggle="tooltip" data-placement="top" title="'.$course->fullname.'" >'.$trimtitle.'</a></p>
                        </div>
                        </div>
                        </div>
                        ';
                }
                $content .= $rowcontent;
                $content .= '</div>';
            }
        }

        $coursehtml = $header.$content.$footer;
        echo $coursehtml;

        if (!$totalcount && !$this->page->user_is_editing() && has_capability('moodle/course:create', context_system::instance())) {
            // Print link to create a new course, for the 1st available category.
            echo $this->add_new_course_button();
        }
    }

    public function promoted_courses() {
        global $CFG, $OUTPUT, $DB, $PAGE;

       

        $featuredcontent = '';
        /* Get Featured courses id from DB */
        $featuredids = theme_pioneer_get_setting('promotedcourses');
        $rcourseids = (!empty($featuredids)) ? explode(",", $featuredids, 12) : array();
        if (empty($rcourseids)) {
            return false;
        }

        $hcourseids = theme_pioneer_hidden_courses_ids();

        if (!empty($hcourseids)) {
            foreach ($rcourseids as $key => $val) {
                if (in_array($val, $hcourseids)) {
                    unset($rcourseids[$key]);
                }
            }
        }

        foreach ($rcourseids as $key => $val) {
            $ccourse = $DB->get_record('course', array('id' => $val));
            if (empty($ccourse)) {
                unset($rcourseids[$key]);
                continue;
            }
        }

        if (empty($rcourseids)) {
            return false;
        }

        $fcourseids = array_chunk($rcourseids, 12);
        $totalfcourse = count($fcourseids);
        $promotedtitle = theme_pioneer_get_setting('promotedtitle', 'format_text');
        $promotedtitle = theme_pioneer_lang($promotedtitle);

        $featuredheader = '<div class="custom-courses-list" id="Promoted-Courses">
							  <div class="container-fluid">
								<div class="titlebar with-felements">
									<h2>'.$promotedtitle.'</h2>
									<div class="clearfix"></div>
								</div>
								<div class="promoted_courses" data-crow="'.$totalfcourse.'">';

        $featuredfooter = ' </div>
                            </div>
                            </div>';

        if (!empty($fcourseids)) {
            foreach ($fcourseids as $courseids) {
                $rowcontent = '<div><div class="row-fluid carousel">';

                foreach ($courseids as $courseid) {
                    $course = get_course($courseid);
                    $no = get_config('theme_pioneer', 'patternselect');
                    $nimgp = (empty($no)|| $no == "default") ? 'no-image' : 'cs0'.$no.'/no-image';

                    $noimgurl = $OUTPUT->pix_url($nimgp, 'theme');

                    $courseurl = new moodle_url('/course/view.php', array('id' => $courseid ));

                    if ($course instanceof stdClass) {
                        require_once($CFG->libdir. '/coursecatlib.php');
                        $course = new course_in_list($course);
                    }

                    $imgurl = '';

                    $summary = theme_pioneer_strip_html_tags($course->summary);
                    $summary = theme_pioneer_course_trim_char($summary, 125);
                    $trimtitle = theme_pioneer_course_trim_char($course->fullname, 25);

                    $context = context_course::instance($course->id);
                    $nostudents = count_role_users(5, $context);

                    foreach ($course->get_course_overviewfiles() as $file) {
                        $isimage = $file->is_valid_image();
                        $imgurl = file_encode_url("$CFG->wwwroot/pluginfile.php",
                        '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                        $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
                        if (!$isimage) {
                            $imgurl = $noimgurl;
                        }
                    }

                    if (empty($imgurl)) {
                        $imgurl = $PAGE->theme->setting_file_url('headerbackgroundimage', 'headerbackgroundimage', true);
                        if (!$imgurl) {
                            $imgurl = $noimgurl;
                        }
                    }

                        $coursehtml = '
                        <div class="promowrap">
                        <div class="fp-coursebox">
                        <div class="fp-coursethumb">
                        <a href="'.$courseurl.'">
                        <img src="'.$imgurl.'" width="100%" height="125" title="'.$course->fullname.'">
                        </a>
                        <div class="fp-courseinfo">
                        <h5><a href="'.$courseurl.'" id="button" data-toggle="tooltip" data-placement="bottom" title="'.$course->fullname.'" >'.$trimtitle.'</a></h5>
                        </div>
                        <div class="promo-summary">'.$summary.'</div>
                        </div>
                        </div>
                        </div>';

                        $rowcontent .= $coursehtml;

                }

                    $rowcontent .= '</div></div>';
                    $featuredcontent .= $rowcontent;
            }

        }

        $featuredcourses = $featuredheader.$featuredcontent.$featuredfooter;
        return $featuredcourses;
    }

    public function top_promoted_courses() {
        global $CFG, $OUTPUT, $DB, $PAGE;

        $featuredcontent = '';
        /* Get Featured courses id from DB */
        $featuredids = theme_pioneer_get_setting('toppromotedcourses');

        $rcourseids = (!empty($featuredids)) ? explode(",", $featuredids, 6) : array();
       
        if (empty($rcourseids)) {
            return false;
        }

        $hcourseids = theme_pioneer_hidden_courses_ids();

        if (!empty($hcourseids)) {
            foreach ($rcourseids as $key => $val) {
                if (in_array($val, $hcourseids)) {
                    unset($rcourseids[$key]);
                }
            }
        }

        foreach ($rcourseids as $key => $val) {
            $ccourse = $DB->get_record('course', array('id' => $val));
            if (empty($ccourse)) {
                unset($rcourseids[$key]);
                continue;
            }
        }

        if (empty($rcourseids)) {
            return false;
        }

        $fcourseids = array_chunk($rcourseids, 6);
        $totalfcourse = count($fcourseids);
        $promotedtitle = theme_pioneer_get_setting('toppromotedtitle', 'format_text');
        $promotedtitle = theme_pioneer_lang($promotedtitle);
        $closelisting = theme_pioneer_get_setting('topclosefeatured', 'format_text');
        $topshowfeatured = theme_pioneer_get_setting('topshowfeatured', 'format_text');

        $featuredheader = '<div class="custom-courses-list" id="topPromoted-Courses">
                              <div class="container-fluid">
                             <div class="promoted_courses" data-crow="'.$totalfcourse.'">';

        $featuredfooter = ' </div>
                            </div>
                            </div>';
        
        if (!empty($fcourseids)) {
            echo '<div id="featured-listing" class="collapse out">';
            echo '<div data-toggle="collapse" data-target="#featured-listing" class="btn-link"style="text-align:center;">'.$closelisting.'</div>';
            foreach ($fcourseids as $courseids) {
                $rowcontent = '<div><div class="row-fluid topcarousel">';

                foreach ($courseids as $courseid) {
                    $course = get_course($courseid);
                    $no = get_config('theme_pioneer', 'toppatternselect');
                    $nimgp = (empty($no)|| $no == "default") ? 'no-image' : 'cs0'.$no.'/no-image';

                    $noimgurl = $OUTPUT->pix_url($nimgp, 'theme');
                    $courseurl = new moodle_url('/course/view.php', array('id' => $courseid ));

                    if ($course instanceof stdClass) {
                        require_once($CFG->libdir. '/coursecatlib.php');
                        $course = new course_in_list($course);
                    }

                    $imgurl = '';

                    $summary = theme_pioneer_strip_html_tags($course->summary);
                    $summary = theme_pioneer_course_trim_char($summary, 125);
                    $trimtitle = theme_pioneer_course_trim_char($course->fullname, 90);

                    $context = context_course::instance($course->id);
                    $nostudents = count_role_users(5, $context);
                    

                    foreach ($course->get_course_overviewfiles() as $file) {
                        $isimage = $file->is_valid_image();
                        $imgurl = file_encode_url("$CFG->wwwroot/pluginfile.php",
                        '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                        $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
                        if (!$isimage) {
                            $imgurl = $noimgurl;
                        }
                    }

                    if (empty($imgurl)) {
                        $imgurl = $PAGE->theme->setting_file_url('headerbackgroundimage', 'headerbackgroundimage', true);
                        if (!$imgurl) {
                            $imgurl = $noimgurl;
                        }
                    }

                    $listitems = '
                    <div class="row-fluid">
                    <div class="span3">
                    <img src="'.$imgurl.'" width="100%" height="75px" alt="'.$course->fullname.'">
                    </div>
                    <div class="span5">
                    <h5><a href="'.$courseurl.'" >'.$trimtitle.'</a></h5>
                    </div>
                    <div class="span4">
                    <p>'.$summary.'</p>
                    </div>
                    </div>';

                        $coursehtml = '
                        <div style="background-image: url('.$imgurl.');background-repeat: no-repeat;background-size:cover; background-position:center;" class="promowrap">
                            <div class="fp-coursebox">
                                <div class="fp-courseinfo">
                                    <p style="font-size:24px;font-weight:bold;"><a href="'.$courseurl.'" id="button" data-toggle="tooltip" data-placement="bottom"title="'.$summary.'" >'.$trimtitle.'</a></p>
                                <div class="titlebar"> <h5>'.$promotedtitle.'</h5> </div>
                                <div data-toggle="collapse" data-target="#featured-listing" class="btn-link">'.$topshowfeatured.'</div>
                                </div>
                            </div>
                        </div>';
                        $rowcontent .= $coursehtml;
                        echo ($listitems);
                }

                    $rowcontent .= '</div></div> ';
                    $featuredcontent .= $rowcontent;
            }
            echo "</div>";
        }

        $featuredcourses = $featuredheader.$featuredcontent.$featuredfooter;
        return $featuredcourses;
    }

    /**
     * Frontpage course list
     *
     * @return string
     */
    public function frontpage_my_courses() {
        global $USER, $CFG, $DB;
        $output = '';
        if (!isloggedin() or isguestuser()) {
            return '';
        }

        $courses = block_course_overview_get_sorted_courses();
        list($sortedcourses, $sitecourses, $totalcourses) = block_course_overview_get_sorted_courses();
        if (!empty($sortedcourses) || !empty($rcourses) || !empty($rhosts)) {

            $chelper = new coursecat_helper();
            if (count($courses) > $CFG->frontpagecourselimit) {
                // There are more enrolled courses than we can display, display link to 'My courses'.
                $totalcount = count($sortedcourses);
                $courses = array_slice($sortedcourses, 0, $CFG->frontpagecourselimit, true);
                $chelper->set_courses_display_options(array(
                        'viewmoreurl' => new moodle_url('/my/'),
                        'viewmoretext' => new lang_string('mycourses')
                    ));
            } else {
                // All enrolled courses are displayed, display link to 'All courses' if there are more courses in system.
                $chelper->set_courses_display_options(array(
                        'viewmoreurl' => new moodle_url('/course/index.php'),
                        'viewmoretext' => new lang_string('fulllistofcourses')
                    ));
                $totalcount = $DB->count_records('course') - 1;
            }
            $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED)->set_attributes(
                    array('class' => 'frontpage-course-list-enrolled'));
            $output .= $this->coursecat_courses($chelper, $sortedcourses, $totalcount);

            if (!empty($rcourses)) {
                $output .= html_writer::start_tag('div', array('class' => 'courses'));
                foreach ($rcourses as $course) {
                    $output .= $this->frontpage_remote_course($course);
                }
                $output .= html_writer::end_tag('div');
            } else if (!empty($rhosts)) {
                $output .= html_writer::start_tag('div', array('class' => 'courses'));
                foreach ($rhosts as $host) {
                    $output .= $this->frontpage_remote_host($host);
                }
                $output .= html_writer::end_tag('div');
            }
        }
        return $output;
    }

}
