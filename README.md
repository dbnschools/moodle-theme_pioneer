# Moodle-theme_pioneer
Pioneer is a beautiful, responsive theme loaded with great features from custom tabs and a course gradebook slider to the ability for teachers to upload their own header image in course summary files! Each of the main elements in the theme can be customized from the theme settings page.  Pioneer is Made in Michigan at Dearborn Public Schools.

##Pioneer v1.2.6
* Moved User Menu up to top navigation bar next to my courses dropdown.
* Moved top icon nav next to course search box on right side of screen.

##Pioneer v1.2.5
* Added frontpage enhancement. If you utilize the frontpage textbox you will now see the same icons with tooltips located in the top navigation but they will be quit larger and it also includes the course search bar.  We discovered that most people prefer the larger icon navigation on the homepage with the custom text box.  This allows the site admin to provide instructions and key navigational links as the first thing someone sees upon logging in.  
* When a new header image is uploaded in theme settings it will also be used for courses with no-image when Featured or displayed as Available Courses on the frontpage. This fixes the issue of having to FTP a no-image.jpg up to the server in the theme pix folder.  This was first introduced in version 1.2.3 and a bug was found.  This has been fixed and reinstated.  

##Pioneer v1.2.4
* Removed frontpage featured courses from using an uploaded header image. Found a bug which displays no image if the course doesn't have an image and there is no header image uploaded in settings.  It should default to an image in the pix folder but it does not.  I need more time with the code to make it work.
* Added custom colog for the frontpage login button.  

##Pioneer v1.2.3
* When a new header image is uploaded in theme settings it will also be used for courses with no-image when Featured or displayed as Available Courses on the frontpage. This fixes the issue of having to FTP a no-image.jpg up to the server in the theme pix folder. 
* Course title no longer appears as a black bar across the whole top of the page.  It is centered and paddded to only fill the space of the text. This allows the header image to be more visible without a distracting black bar across the full width. 
* Marketing Box buttons now appear right aligned. Somehow this got changed in 1.2.2 but is now corrected.
* Some css cleanup for Mybadges page to hide the fptextbox and tabbutton/tabs due to mybadges using Mydashboard layout.

##Pioneer v1.2.2
* Fixed IPad buttons not working for frontpage tabs and view course grades.
* Fixed marketing spots full width when not enough text to fill space.
* Custom Text for Course Grades Button.
* Create New and Forgot Password text on the custom login can now be shown or hidden via settings toggle.
* Fixed Language string
* Increased max width of button text for frontpage tabs and course grades to 500px.
* Numerous css fixes.

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
