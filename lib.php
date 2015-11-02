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
// GNU General Public License for details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme evolved lib.
 *
 * @package    theme_evolved
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Extra LESS code to inject.
 *
 * This will generate some LESS code from the settings used by the user. We cannot use
 * the {@link theme_evolved_less_variables()} here because we need to create selectors or
 * alter existing ones.
 *
 * @param theme_config $theme The theme config object.
 * @return string Raw LESS code.
 */
function theme_evolved_extra_less($theme) {
    $content = '';
    $imageurl = $theme->setting_file_url('backgroundimage', 'backgroundimage');
    // Sets the background image, and its settings.
    if (!empty($imageurl)) {
        $content .= 'body { ';
        $content .= "background-image: url('$imageurl');";
        if (!empty($theme->settings->backgroundfixed)) {
            $content .= 'background-attachment: fixed;';
        }
        if (!empty($theme->settings->backgroundcover)) {
            $content .= 'background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;';
        }
        if (!empty($theme->settings->backgroundposition)) {
            $content .= 'background-position: ' . str_replace('_', ' ', $theme->settings->backgroundposition) . ';';
        }
        if (!empty($theme->settings->backgroundrepeat)) {
            $content .= 'background-repeat: ' . $theme->settings->backgroundrepeat . ';';
        }
        $content .= ' }';
    }
    // If there the user wants a background for the content, we need to make it look consistent,
    // therefore we need to round its borders, and adapt the border colour.  
    //This also sets the page-content css to make the background color the same as the main content.
    if (!empty($theme->settings->contentbackground)) {
        $content .= '
            #region-main {
                .well;
                background-color: ' . $theme->settings->contentbackground . ';
                border-color: darken(' . $theme->settings->contentbackground . ', 7%);
		border-radius: 7px; }';
    }
    return $content;
}

/**
 * Returns variables for LESS.
 *
 * We will inject some LESS variables from the settings that the user has defined
 * for the theme. No need to write some custom LESS for this.
 *
 * @param theme_config $theme The theme config object.
 * @return array of LESS variables without the @.
 */
function theme_evolved_less_variables($theme) {
    $variables = array();
    if (!empty($theme->settings->bodybackground)) {
        $variables['bodyBackground'] = $theme->settings->bodybackground;
    }
    if (!empty($theme->settings->textcolor)) {
        $variables['textColor'] = $theme->settings->textcolor;
    }
    if (!empty($theme->settings->linkcolor)) {
        $variables['linkColor'] = $theme->settings->linkcolor;
    }
    if (!empty($theme->settings->secondarybackground)) {
        $variables['wellBackground'] = $theme->settings->secondarybackground;
    }
    return $variables;
}

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_evolved_process_css($css, $theme) {
     // Set the background image for the logo.
    $logosmall = $theme->setting_file_url('logosmall', 'logosmall');
    $css = theme_evolved_set_logosmall($css, $logosmall);
    
    // Set the background image for the frontpage.
    $fpbkg = $theme->setting_file_url('fpbkg', 'fpbkg');
    $css = theme_evolved_set_fpbkg($css, $fpbkg);


    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_evolved_set_customcss($css, $customcss);

    // Set the Fonts.
    if ($theme->settings->fontselect ==1) {
        $headingfont = 'Oswald';
        $bodyfont = 'PT Sans';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==2) {
        $headingfont = 'Lobster';
        $bodyfont = 'Cabin';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==3) {
        $headingfont = 'Raelway';
        $bodyfont = 'Goudy Bookletter 1911';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==4) {
        $headingfont = 'Allerta';
        $bodyfont = 'Crimson Text';
        $bodysize = '14px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==5) {
        $headingfont = 'Arvo';
        $bodyfont = 'PT Sans';
        $bodysize = '14px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==6) {
        $headingfont = 'Dancing Script';
        $bodyfont = 'Josefin Sans';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==7) {
        $headingfont = 'Allan';
        $bodyfont = 'Cardo';
        $bodysize = '14px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==8) {
        $headingfont = 'Molengo';
        $bodyfont = 'Lekton';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==9) {
        $headingfont = 'Droid Serif';
        $bodyfont = 'Droid Sans';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==10) {
        $headingfont = 'Corben';
        $bodyfont = 'Nobile';
        $bodysize = '12px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==11) {
        $headingfont = 'Ubuntu';
        $bodyfont = 'Vollkorn';
        $bodysize = '14px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==12) {
        $headingfont = 'Bree Serif';
        $bodyfont = 'Open Sans';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==13) {
        $headingfont = 'Bevan';
        $bodyfont = 'Pontano Sans';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==14) {
        $headingfont = 'Abril Fatface';
        $bodyfont = 'Average';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==15) {
        $headingfont = 'Playfair Display';
        $bodyfont = 'Multi';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==16) {
        $headingfont = 'Sansita one';
        $bodyfont = 'Kameron';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==17) {
        $headingfont = 'Istok Web';
        $bodyfont = 'Lora';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==18) {
        $headingfont = 'Pacifico';
        $bodyfont = 'Arimo';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==19) {
        $headingfont = 'Nixie One';
        $bodyfont = 'Ledger';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==20) {
        $headingfont = 'Cantata One';
        $bodyfont = 'Imprima';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==21) {
        $headingfont = 'Rancho';
        $bodyfont = 'Gudea';
        $bodysize = '13px';
        $bodyweight = '400';
    } else if ($theme->settings->fontselect ==22) {
        $headingfont = 'Helvetica';
        $bodyfont = 'Georgia';
        $bodysize = '17px';
        $bodyweight = '400';
    }
    
    $css = theme_evolved_set_headingfont($css, $headingfont);
    $css = theme_evolved_set_bodyfont($css, $bodyfont);
    $css = theme_evolved_set_bodysize($css, $bodysize);
    $css = theme_evolved_set_bodyweight($css, $bodyweight);

    // Set marketbox CSS.
    if (!empty($theme->settings->marketboxcolor)) {
        $marketboxcolor = $theme->settings->marketboxcolor;
    } else {
        $marketboxcolor = '';
    }
    $css = theme_evolved_set_marketboxcolor($css, $marketboxcolor);

    // Set topic week background CSS.
    if (!empty($theme->settings->topicweekcolor)) {
        $topicweekcolor = $theme->settings->topicweekcolor;
    } else {
        $topicweekcolor = '';
    }
    $css = theme_evolved_set_topicweekcolor($css, $topicweekcolor);

    // Set Socialwall icon and text color CSS.
    if (!empty($theme->settings->swicontext)) {
        $swicontext = $theme->settings->swicontext;
    } else {
        $swicontext = '';
    }
    $css = theme_evolved_set_swicontext($css, $swicontext);

    // Set Socialwall post background color CSS.
    if (!empty($theme->settings->swpost)) {
        $swpost = $theme->settings->swpost;
    } else {
        $swpost = '';
    }
    $css = theme_evolved_set_swpost($css, $swpost);

    // Set Socialwall add post color CSS.
    if (!empty($theme->settings->swaddpost)) {
        $swaddpost = $theme->settings->swaddpost;
    } else {
        $swaddpost = '';
    }
    $css = theme_evolved_set_swaddpost($css, $swaddpost);

    // Set Socialwall message color CSS.
    if (!empty($theme->settings->swmessage)) {
        $swmessage = $theme->settings->swmessage;
    } else {
        $swmessage = '';
    }
    $css = theme_evolved_set_swmessage($css, $swmessage);

    // Set Socialwall attachment color CSS.
    if (!empty($theme->settings->swattach)) {
        $swattach = $theme->settings->swattach;
    } else {
        $swattach = '';
    }
    $css = theme_evolved_set_swattach($css, $swattach);

    // Set Socialwall attachment color CSS.
    if (!empty($theme->settings->swcomment)) {
        $swcomment = $theme->settings->swcomment;
    } else {
        $swcomment = '';
    }
    $css = theme_evolved_set_swcomment($css, $swcomment);

    // Socialwall Labels.
    if (!empty($theme->settings->swlabelpost)) {
        $swlabelpost = $theme->settings->swlabelpost;
    } else {
        $swlabelpost = '';
    }
    $css = theme_evolved_set_swlabelpost($css, $swlabelpost);
    
    // Socialwall Labels.
    if (!empty($theme->settings->swlabelmessage)) {
        $swlabelmessage = $theme->settings->swlabelmessage;
    } else {
        $swlabelmessage = '';
    }
    $css = theme_evolved_set_swlabelmessage($css, $swlabelmessage);

    // Socialwall Labels.
    if (!empty($theme->settings->swlabelcomment)) {
        $swlabelcomment = $theme->settings->swlabelcomment;
    } else {
        $swlabelcomment = '';
    }
    $css = theme_evolved_set_swlabelcomment($css, $swlabelcomment);

    // Socialwall Labels.
    if (!empty($theme->settings->swlabelattachment)) {
        $swlabelattachment = $theme->settings->swlabelattachment;
    } else {
        $swlabelattachment = '';
    }
    $css = theme_evolved_set_swlabelattachment($css, $swlabelattachment);
    
    // Set custom CSS.
    if (!empty($theme->settings->swmultilangcss)) {
        $swmultilangcss = $theme->settings->swmultilangcss;
    } else {
        $swmultilangcss = null;
    }
    $css = theme_evolved_set_swmultilangcss($css, $swmultilangcss);


    return $css;
}


/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_evolved_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = null;
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom background color to marketboxes
function theme_evolved_set_marketboxcolor($css, $marketboxcolor) {
    $tag = '[[setting:marketboxcolor]]';
    $replacement = $marketboxcolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom background color to topics and weeks
function theme_evolved_set_topicweekcolor($css, $topicweekcolor) {
    $tag = '[[setting:topicweekcolor]]';
    $replacement = $topicweekcolor;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Labels
function theme_evolved_set_swlabelpost($css, $swlabelpost) {
    $tag = '[[setting:swlabelpost]]';
    $replacement = $swlabelpost;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Labels
function theme_evolved_set_swlabelmessage($css, $swlabelmessage) {
    $tag = '[[setting:swlabelmessage]]';
    $replacement = $swlabelmessage;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Labels
function theme_evolved_set_swlabelcomment($css, $swlabelcomment) {
    $tag = '[[setting:swlabelcomment]]';
    $replacement = $swlabelcomment;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Labels
function theme_evolved_set_swlabelattachment($css, $swlabelattachment) {
    $tag = '[[setting:swlabelattachment]]';
    $replacement = $swlabelattachment;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Icon and text color
function theme_evolved_set_swicontext($css, $swicontext) {
    $tag = '[[setting:swicontext]]';
    $replacement = $swicontext;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Icon and text color
function theme_evolved_set_swpost($css, $swpost) {
    $tag = '[[setting:swpost]]';
    $replacement = $swpost;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Icon and text color
function theme_evolved_set_swaddpost($css, $swaddpost) {
    $tag = '[[setting:swaddpost]]';
    $replacement = $swaddpost;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall Icon and text color
function theme_evolved_set_swmessage($css, $swmessage) {
    $tag = '[[setting:swmessage]]';
    $replacement = $swmessage;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall attachment color
function theme_evolved_set_swattach($css, $swattach) {
    $tag = '[[setting:swattach]]';
    $replacement = $swattach;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

//Adds custom Socialwall attachment color
function theme_evolved_set_swcomment($css, $swcomment) {
    $tag = '[[setting:swcomment]]';
    $replacement = $swcomment;
        if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_evolved_set_swmultilangcss($css, $swmultilangcss) {
    $tag = '[[setting:swmultilangcss]]';
    $replacement = $swmultilangcss;
    if (is_null($replacement)) {
        $replacement = null;
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_evolved_set_logosmall($css, $logosmall) {
    $tag = '[[setting:logosmall]]';
    $replacement = $logosmall;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_evolved_set_headingfont($css, $headingfont) {
    $tag = '[[setting:headingfont]]';
    $replacement = $headingfont;
    if (is_null($replacement)) {
        $replacement = 'Georgia';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_evolved_set_bodyfont($css, $bodyfont) {
    $tag = '[[setting:bodyfont]]';
    $replacement = $bodyfont;
    if (is_null($replacement)) {
        $replacement = 'Arial';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_evolved_set_bodysize($css, $bodysize) {
    $tag = '[[setting:bodysize]]';
    $replacement = $bodysize;
    if (is_null($replacement)) {
        $replacement = '13';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_evolved_set_bodyweight($css, $bodyweight) {
    $tag = '[[setting:bodyweight]]';
    $replacement = $bodyweight;
    if (is_null($replacement)) {
        $replacement = '400';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Adds the frontpage background to CSS.
 */
function theme_evolved_set_fpbkg($css, $fpbkg) {
    $tag = '[[setting:fpbkg]]';
    $replacement = $fpbkg;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}


/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_evolved_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM && ($filearea === 'logosmall' || $filearea === 'backgroundimage' || $filearea === 'back1' || $filearea === 'back2' || $filearea === 'back3' || $filearea === 'back4' || $filearea === 'fpbkg')) {
        $theme = theme_config::load('evolved');
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

/**
 * Page requires jQuery. */

function theme_evolved_page_init(moodle_page $page) {
$page->requires->jquery_plugin('tab', 'theme_evolved');
}