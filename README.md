# Moodle-theme_pioneer
The Moodle Pioneer theme is a responsive bootstrap theme for Moodle. Highly customizable and loaded with great features.  This theme is ideal for educational institutions and businesses alike.  Pioneer is focused on simplicity and providing an intuitive user experience.
## Top Features of Pioneer
* Teachers can upload an image into Course Summary Files and the theme will utilize that image in the Header of the page.  This slight customization allows the learner to distinguish between courses while still maintaining a standard look and feel.  This must be turned on in General Settings of the theme.  
* My Courses drop down displays enrolled courses at top of page.
* Custom Fontawesome Icons allows site admin to create up to 8 special icon links at the top of the page. Each icon has a bootstrap tooltip and custom link.
* Featured Courses allow the site admin to promote and highlight courses by ID number on the frontpage. The courses are displayed with an image and course title as a block.
* Moodle Blocks utilize special styling to create separation for the learner from the course content.  This is achieved by special styling and placement of the block title in a vertical position.
* Unique styling creates separation of week and topic course formats using a custom background color to make each topic/week stand out visually for the learner.
* Fully integrated with the Moodle Socialwall Course Format to allow you to customize the user experience of the Socialwall.
* Unlimited Google Fonts.  Theme allows for inserting any of the Google Fonts via the site admin area.
* Beautiful custom login on the frontpage is displayed for logged out users. Utilizes a large custom image.
* Three stylish marketing spots allow for special notices and promotions to be displayed via a toggle.
* Special HTML Alerts on the frontpage
* Frontpage HTML Text Box allows instructions and special notices to be displayed.
* Social Icons display neatly at the bottom of the page.
* Custom Logo and Images
* Custom Colors

##Pioneer v1.2.1
* Six custom frontpage tabs which are displayed via a slider button.  Add a title and content text for each tab.  Tabs fade in and out with content.
* Found bug for SSL and login with featured courses enabled.  Fix is to force users to login before seeing featured courses.
* When using the default Moodle login page featured courses is not displayed.  This is to fix a bug with featured courses.  If your site uses SSL for login only, please click in Site Admin to Force Login.
* Seeking input for best way to fix the SSL and featured courses bug. Alternative is to make featured courses only visible when logged in.


##Pioneer v1.2.0
* Social Icons Links open in new window
* Chnaged styling of Marketing spots to be a little less "shocking" as one teacher put it. 
* Made footer and social icons merge at the bottom of the page. Looks cleaner. 
* Default logo is more generic.  Simple arrow-head and text.

##Pioneer v1.1.9
* Fixed Language string mis-spelling
* On Dashboard Page enhanced the course overview block to remove the verticle block title.  If you move it to the sidebar it will regain it's verticle block title.
* Styling and CSS improvements.
* Added custom font awesome icon to the section headers of topic and weekly course formats.  Users can add unicode setting in theme admin to pick their own icon.  Default is book.
* At the request of our teachers we switched back to a horizontal alignment for the side block titles.  However, we kept the border width on the left of the blocks to create a visual separation.
* Each block has a fontawesome icon and color background next to the title.  
* Social icons bar at bottom is now full width.  This replaces just showing them in the bottom right.  It will also allow for future items to be placed in this bar.

##Pioneer v1.1.8
* Worked to make theme better for translations into other languages.  Removed hard coded text where identified.  
* Improved descriptions in Theme Settings pages.
* Found and fixed a couple of missing language strings. 

##Pioneer v1.1.7
* Accidently removed a closing div tag.  Fixed. 
* Initial release for Moodle 3.0.  Performed testing and initial results indicate it works. 

##Pioneer v1.1.6
* Fixed PDF Assignment Editing where some icons were cut off when leaving comments. 
* Socialwall fixes for the latest version.  Simplified coloring and styling.
* Removed some CSS fontawesome icons for socialwall and opted for a more simple look for users.
* Fixed small issue with frontpage login image when logged out.

##Pioneer v1.1.5
* Added better logic to displaying header images on course pages.  Will not show default image while loading course image.  The image swap effect when the course image loaded was annoying.
* Added toggle to turn on or off using course header images.  Use one image for entire site or allow teachers to customize.  Default is use one image.
* CSS fixes and better explainations in language files


##Pioneer v1.1.4
* Fixed General Frontpage Alert not showing on moodle default login page
* Fixed top navigation bar for logged out users.
* More mobile menu adjustments

##Pioneer v1.1.3
* Fixed css issue with small screen sizes and top navigation bar and changed when mobile menu appears
* At 979px the course search box is hidden.  At 679px the mobile menu is displayed.
* Added Icon Navigation to the mobile menu
* Fixed Frontpage alert being hidden by top navigation bar
* Fixed styling when blocks are docked to remain full-width and proper padding on the left
* Better overall responsive styling

##Pioneer v1.1.2
* Fixed css issue with small screen sizes and top navigation bar
* Added featured courses to the moodle default login page

##Pioneer v1.1.1
* Made theme full screen in width at request of teachers
* Made top navigation stick to top of screen
* Moved top navigation into a single include file
* Fixed css and language strings
* Full screen gradebook view


##Pioneer v1.1
* Fixed css and language strings
* Added Course Grades drop down toggle.  This allows students to see all their grades while in a course by a simple toggle show and hide
