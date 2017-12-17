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
// GNU General Public License for meline29 details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Clean theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_clean
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_meline29_get_html_for_settings($OUTPUT, $PAGE);

// Set default (LTR) layout mark-up for a three column page.
$regionmainbox = 'span9';
$regionmain = 'span8 pull-right';
$sidepre = 'span4 desktop-first-column';
$sidepost = 'span3 pull-right';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmainbox = 'span9 pull-right';
    $regionmain = 'span8';
    $sidepre = 'span4 pull-right';
    $sidepost = 'span3 desktop-first-column';
}

// Header Top Phone Number Settings.

$hasphonenumber = (!empty($PAGE->theme->settings->phonenumber));

if (!empty($PAGE->theme->settings->phonenumber)) {
    $phonenumber = $PAGE->theme->settings->phonenumber;
} 

else {
    $phonenumber = ' 011-6782975, 011-8508105';
}
/** Copyright **/

if (!empty($PAGE->theme->settings->copyright)) {
    $hascopyright = $PAGE->theme->settings->copyright;
} 
else {
    $hascopyright = 'www.vidyamantra.com';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <div class="top-login">
       <div class="container-fluid">
       
       <div class="hdcont"><span></span></div>
       
        <div class="login-wrap">
          <?php
             if (isloggedin()) { ?>
            
            
            <?php echo $OUTPUT->login_info(); ?>
            
            <?php
		     }else{
			?>
            <div class="logincont"> 
		       <ul class="nav user-pro">
				  <a href="<?php echo $CFG->wwwroot; ?>/login/signup.php" class="newreg"><?php echo get_string('register', 'theme_meline29'); ?></a>
				  <a href="<?php echo $CFG->contpage; ?>" class="border-right">Help</a>
				  <a href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > <?php echo get_string('login') ?></a> 
			   </ul>
            </div>
            <?php } ?> 
         </div>
       </div>
    </div>
    <nav role="navigation" class="navbar-inner">
      <div class="container-fluid">
          <div class="hdr-wrap"><a href="<?php echo (isloggedin()?$CFG->loginredir:$CFG->wwwroot);?>"><?php echo $OUTPUT->full_header(); ?></a></div>
        <div class="container-fluid men">
            <a class="brand" href="<?php echo (isloggedin()?$CFG->loginredir:$CFG->wwwroot);?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>  
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
             </div>
          </div>
       </div>
    </nav>
</header>

<div id="page-wrap">
      <div class="newnav"><?php echo $OUTPUT->full_header23(); ?></div>
  <div id="page" class="container-fluid">
    <div id="page-content" class="row-fluid">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
    </div>
    </div>
    </div>

    <footer id="page-footer">
        <div class="col-4 wrapper clearfix">
            <div class="col-1 heartfoundation">
                <span>Proudly brought to you by</span>
                <a href="http://heartfoundation.org.nz/" target="_blank"><img src="<?php echo $OUTPUT->pix_url('img1', 'theme'); ?>" alt="Heart Foundation" width="100" height="72"></a>
            </div>
        
            <div class="col-1 clearfix">
	        <div class="title">MINUTES MATTER</div>
	        <p>If you think you might be having a heart attack don’t wait, call 111 now.</p>
	        <br>
	        <a href="http://firststeps.hearthelp.org.nz/home/what-happened-to-me/warning-signs/" class="button" target="blank">View Warning Signs</a>
            </div>
            <div class="col-1 clearfix">
	        <div class="title">FEEDBACK</div>
                If you have a question about Learn HF, we would love to hear from you. Phone our team on: (03) 366 2112 or email us at: <a href="mailto:hearthealthinfo@heartfoundation.org.nz">hearthealthinfo@heartfoundation.org.nz</a>.</p>
            </div>
            <div class="social-sec col-1 clearfix">
	        <span>Follow us</span>
				        <div class="socials">
					        <a href="https://www.facebook.com/HeartNZ" target="_blank"><img src="<?php echo $OUTPUT->pix_url('facebook', 'theme'); ?>" alt="facebook"></a>
					        <a href="https://twitter.com/heartnz" target="_blank"><img src="<?php echo $OUTPUT->pix_url('twitter', 'theme'); ?>" alt="twitter"></a>
					        <a href="https://www.linkedin.com/company/heart-foundation-nz" target="_blank"><img src="<?php echo $OUTPUT->pix_url('linkedin', 'theme'); ?>" alt="linkedin"></a>
				        </div>
			        </div>
        </div>
    </footer>
    
    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</body>
</html>
