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

//Banner settings
$showhidebanner = (empty($PAGE->theme->settings->showhidebanner) ||$PAGE->theme->settings->showhidebanner < 1) ? 0 : 1;
$showhidewelcomeblock = (empty($PAGE->theme->settings->showhidewelcomeblock) ||$PAGE->theme->settings->showhidewelcomeblock < 1) ? 0 : 1;
$showhideblockone = (empty($PAGE->theme->settings->showhideblockone) ||$PAGE->theme->settings->showhideblockone < 1) ? 0 : 1;
$showhideblocktwo = (empty($PAGE->theme->settings->showhideblockone) ||$PAGE->theme->settings->showhideblocktwo < 1) ? 0 : 1;
$showhideblockthree = (empty($PAGE->theme->settings->showhideblockone) ||$PAGE->theme->settings->showhideblockthree < 1) ? 0 : 1;
$showhideblockfour = (empty($PAGE->theme->settings->showhideblockone) ||$PAGE->theme->settings->showhideblockfour < 1) ? 0 : 1;
$showhideblockfive = (empty($PAGE->theme->settings->showhideblockone) ||$PAGE->theme->settings->showhideblockfive < 1) ? 0 : 1;
$showhideblocksix = (empty($PAGE->theme->settings->showhideblockone) ||$PAGE->theme->settings->showhideblocksix < 1) ? 0 : 1;


$hasbannercaption = (!empty($PAGE->theme->settings->bannercaption));
$hasbannerbtnonetxt = (!empty($PAGE->theme->settings->bannerbtnonetxt));
$hasbannerbtnoneurl = (!empty($PAGE->theme->settings->bannerbtnonetxt));
$hasbannerbtntwotxt = (!empty($PAGE->theme->settings->bannerbtntwotxt));
$hasbannerbtntwourl = (!empty($PAGE->theme->settings->bannerbtntwotxt));

if (!empty($PAGE->theme->settings->bannercaption)) {
    $bannercaption = $PAGE->theme->settings->bannercaption;
} 

else {
    $bannercaption = 'ONLINE EDUCATION More Than 1000 COURSES Available';
}

if (!empty($PAGE->theme->settings->bannerbtnonetxt)) {
    $bannerbtnonetxt = $PAGE->theme->settings->bannerbtnonetxt;
} 

else {
    $bannerbtnonetxt = 'Lorem Ipsum'/* 'ONLINE EDUCATION More Than 1000 COURSES Available' */;
}

if (!empty($PAGE->theme->settings->bannerbtnoneurl)) {
    $bannerbtnoneurl = $PAGE->theme->settings->bannerbtnoneurl;
} 

else {
    $bannerbtnoneurl = '#';
}

if (!empty($PAGE->theme->settings->bannerbtntwotxt)) {
    $bannerbtntwotxt = $PAGE->theme->settings->bannerbtntwotxt;
} 

else {
    $bannerbtntwotxt = 'Lorem Ipsum';
}

if (!empty($PAGE->theme->settings->bannerbtntwourl)) {
    $bannerbtntwourl = $PAGE->theme->settings->bannerbtntwourl;
} 

else {
    $bannerbtntwourl = '#';
}
//Welcome block settings

$haswelcometitle = (!empty($PAGE->theme->settings->welcometitle));
$haswelcomecontent = (!empty($PAGE->theme->settings->welcomecontent));

if (!empty($PAGE->theme->settings->welcometitle)) {
    $welcometitle = $PAGE->theme->settings->welcometitle;
} 

else {
    $welcometitle = 'Lorem Ipsum';
}

if (!empty($PAGE->theme->settings->welcomecontent)) {
    $welcomecontent = $PAGE->theme->settings->welcomecontent;
} 

else {
    $welcomecontent = 'Lorem ipsum lacus ut eniascet ingerto aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen lusto dolor ltissim comes cuml ascet. Eismod ictor ut ligulate lusto dolor.';
}

// Main Content Blocks Settings.

// Block One

$hasblockoneimage = (!empty($PAGE->theme->settings->hasblockoneimage));
$hasblockonetitle = (!empty($PAGE->theme->settings->blockonetitle));
$hasblockonelinktxt = (!empty($PAGE->theme->settings->blockonelinktxt));
$hasblockonelinkurl = (!empty($PAGE->theme->settings->blockonelinkurl));
$hasimageonehovertitle = (!empty($PAGE->theme->settings->imageonehovertitle));
$hasimageonehovercontent = (!empty($PAGE->theme->settings->imageonehovercontent));

if (!empty($PAGE->theme->settings->blockoneimage)) {
   $blockoneimage = $PAGE->theme->setting_file_url('blockoneimage', 'blockoneimage');
} else {
    $blockoneimage = $OUTPUT->pix_url('img1', 'theme');
}

if (!empty($PAGE->theme->settings->blockonetitle)) {
    $blockonetitle = $PAGE->theme->settings->blockonetitle;
} 

else {
    $blockonetitle = 'Available Courses';
}

if (!empty($PAGE->theme->settings->blockonelinktxt)) {
    $blockonelinktxt = $PAGE->theme->settings->blockonelinktxt;
} 

else {
    $blockonelinktxt = 'See All Courses';
}

if (!empty($PAGE->theme->settings->blockonelinkurl)) {
    $blockonelinkurl = $PAGE->theme->settings->blockonelinkurl;
} 

else {
    $blockonelinkurl = 'new moodle_url(\'/login/index.php\', array(\'sesskey\'=>sesskey())), get_string(\'login\')';
}

if (!empty($PAGE->theme->settings->imageonehovertitle)) {
    $imageonehovertitle = $PAGE->theme->settings->imageonehovertitle;
} 

else {
    $imageonehovertitle = 'Lorem Tpsum Text.';
}

if (!empty($PAGE->theme->settings->imageonehovercontent)) {
    $imageonehovercontent = $PAGE->theme->settings->imageonehovercontent;
} 

else {
    $imageonehovercontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site.';
}

// Block Two

$hasblocktwoimage = (!empty($PAGE->theme->settings->hasblocktwoimage));
$hasblocktwotitle = (!empty($PAGE->theme->settings->blocktwotitle));
$hasblocktwolinktxt = (!empty($PAGE->theme->settings->blocktwolinktxt));
$hasblocktwolinkurl = (!empty($PAGE->theme->settings->blocktwolinkurl));
$hasimagetwohovertitle = (!empty($PAGE->theme->settings->imagetwohovertitle));
$hasimagetwohovercontent = (!empty($PAGE->theme->settings->imagetwohovercontent));

if (!empty($PAGE->theme->settings->blocktwoimage)) {
   $blocktwoimage = $PAGE->theme->setting_file_url('blocktwoimage', 'blocktwoimage');
} else {
    $blocktwoimage = $OUTPUT->pix_url('img2', 'theme');
}

if (!empty($PAGE->theme->settings->blocktwotitle)) {
    $blocktwotitle = $PAGE->theme->settings->blocktwotitle;
} 

else {
    $blocktwotitle = 'Your Messages';
}

if (!empty($PAGE->theme->settings->blocktwolinktxt)) {
    $blocktwolinktxt = $PAGE->theme->settings->blocktwolinktxt;
} 

else {
    $blocktwolinktxt = 'See Your Messages';
}

if (!empty($PAGE->theme->settings->blocktwolinkurl)) {
    $blocktwolinkurl = $PAGE->theme->settings->blocktwolinkurl;
} 

else {
    $blocktwolinkurl = '#';
}

if (!empty($PAGE->theme->settings->imagetwohovertitle)) {
    $imagetwohovertitle = $PAGE->theme->settings->imagetwohovertitle;
} 

else {
    $imagetwohovertitle = 'Lorem Ipsum Text.';
}

if (!empty($PAGE->theme->settings->imagetwohovercontent)) {
    $imagetwohovercontent = $PAGE->theme->settings->imagetwohovercontent;
} 

else {
    $imagetwohovercontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site.';
}

// Block Three

$hasblockthreeimage = (!empty($PAGE->theme->settings->hasblockthreeimage));
$hasblockthreetitle = (!empty($PAGE->theme->settings->blockthreetitle));
$hasblockthreelinktxt = (!empty($PAGE->theme->settings->blockthreelinktxt));
$hasblockthreelinkurl = (!empty($PAGE->theme->settings->blockthreelinkurl));
$hasimagethreehovertitle = (!empty($PAGE->theme->settings->imagethreehovertitle));
$hasimagethreehovercontent = (!empty($PAGE->theme->settings->imagethreehovercontent));

if (!empty($PAGE->theme->settings->blockthreeimage)) {
   $blockthreeimage = $PAGE->theme->setting_file_url('blockthreeimage', 'blockthreeimage');
} else {
    $blockthreeimage = $OUTPUT->pix_url('img3', 'theme');
}

if (!empty($PAGE->theme->settings->blockthreetitle)) {
    $blockthreetitle = $PAGE->theme->settings->blockthreetitle;
} 

else {
    $blockthreetitle = 'Your Profile';
}

if (!empty($PAGE->theme->settings->blockthreelinktxt)) {
    $blockthreelinktxt = $PAGE->theme->settings->blockthreelinktxt;
} 

else {
    $blockthreelinktxt = 'See Your Profile';
}

if (!empty($PAGE->theme->settings->blockthreelinkurl)) {
    $blockthreelinkurl = $PAGE->theme->settings->blockthreelinkurl;
} 

else {
    $blockthreelinkurl = '#';
}

if (!empty($PAGE->theme->settings->imagethreehovertitle)) {
    $imagethreehovertitle = $PAGE->theme->settings->imagethreehovertitle;
} 

else {
    $imagethreehovertitle = 'Lorem Ipsum Text.';
}

if (!empty($PAGE->theme->settings->imagethreehovercontent)) {
    $imagethreehovercontent = $PAGE->theme->settings->imagethreehovercontent;
} 

else {
    $imagethreehovercontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site.';
}

// Block Four

$hasblockfourimage = (!empty($PAGE->theme->settings->hasblockfourimage));
$hasblockfourtitle = (!empty($PAGE->theme->settings->blockfourtitle));
$hasblockfourlinktxt = (!empty($PAGE->theme->settings->blockfourlinktxt));
$hasblockfourlinkurl = (!empty($PAGE->theme->settings->blockfourlinkurl));
$hasimagefourhovertitle = (!empty($PAGE->theme->settings->imagefourhovertitle));
$hasimagefourhovercontent = (!empty($PAGE->theme->settings->imagefourhovercontent));

if (!empty($PAGE->theme->settings->blockfourimage)) {
   $blockfourimage = $PAGE->theme->setting_file_url('blockfourimage', 'blockfourimage');
} else {
    $blockfourimage = $OUTPUT->pix_url('img4', 'theme');
}

if (!empty($PAGE->theme->settings->blockfourtitle)) {
    $blockfourtitle = $PAGE->theme->settings->blockfourtitle;
} 

else {
    $blockfourtitle = 'Custom Box.1';
}

if (!empty($PAGE->theme->settings->blockfourlinktxt)) {
    $blockfourlinktxt = $PAGE->theme->settings->blockfourlinktxt;
} 

else {
    $blockfourlinktxt = 'Custom Box Link';
}

if (!empty($PAGE->theme->settings->blockfourlinkurl)) {
    $blockfourlinkurl = $PAGE->theme->settings->blockfourlinkurl;
} 

else {
    $blockfourlinkurl = '#';
}

if (!empty($PAGE->theme->settings->imagefourhovertitle)) {
    $imagefourhovertitle = $PAGE->theme->settings->imagefourhovertitle;
} 

else {
    $imagefourhovertitle = 'Lorem Ipsum Text.';
}

if (!empty($PAGE->theme->settings->imagefourhovercontent)) {
    $imagefourhovercontent = $PAGE->theme->settings->imagefourhovercontent;
} 

else {
    $imagefourhovercontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site.';
}

// Block Five

$hasblockfiveimage = (!empty($PAGE->theme->settings->hasblockfiveimage));
$hasblockfivetitle = (!empty($PAGE->theme->settings->blockfivetitle));
$hasblockfivelinktxt = (!empty($PAGE->theme->settings->blockfivelinktxt));
$hasblockfivelinkurl = (!empty($PAGE->theme->settings->blockfivelinkurl));
$hasimagefivehovertitle = (!empty($PAGE->theme->settings->imagefivehovertitle));
$hasimagefivehovercontent = (!empty($PAGE->theme->settings->imagefivehovercontent));

if (!empty($PAGE->theme->settings->blockfiveimage)) {
   $blockfiveimage = $PAGE->theme->setting_file_url('blockfiveimage', 'blockfiveimage');
} else {
    $blockfiveimage = $OUTPUT->pix_url('img5', 'theme');
}

if (!empty($PAGE->theme->settings->blockfivetitle)) {
    $blockfivetitle = $PAGE->theme->settings->blockfivetitle;
} 

else {
    $blockfivetitle = 'Custom Box.2';
}

if (!empty($PAGE->theme->settings->blockfivelinktxt)) {
    $blockfivelinktxt = $PAGE->theme->settings->blockfivelinktxt;
} 

else {
    $blockfivelinktxt = 'Custom Box Link';
}

if (!empty($PAGE->theme->settings->blockfivelinkurl)) {
    $blockfivelinkurl = $PAGE->theme->settings->blockfivelinkurl;
} 

else {
    $blockfivelinkurl = '#';
}

if (!empty($PAGE->theme->settings->imagefivehovertitle)) {
    $imagefivehovertitle = $PAGE->theme->settings->imagefivehovertitle;
} 

else {
    $imagefivehovertitle = 'Lorem Ipsum Text.';
}

if (!empty($PAGE->theme->settings->imagefivehovercontent)) {
    $imagefivehovercontent = $PAGE->theme->settings->imagefivehovercontent;
} 

else {
    $imagefivehovercontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site.';
}

// Block Six

$hasblocksiximage = (!empty($PAGE->theme->settings->hasblocksiximage));
$hasblocksixtitle = (!empty($PAGE->theme->settings->blocksixtitle));
$hasblocksixlinktxt = (!empty($PAGE->theme->settings->blocksixlinktxt));
$hasblocksixlinkurl = (!empty($PAGE->theme->settings->blocksixlinkurl));
$hasimagesixhovertitle = (!empty($PAGE->theme->settings->imagesixhovertitle));
$hasimagesixhovercontent = (!empty($PAGE->theme->settings->imagesixhovercontent));

if (!empty($PAGE->theme->settings->blocksiximage)) {
   $blocksiximage = $PAGE->theme->setting_file_url('blocksiximage', 'blocksiximage');
} else {
    $blocksiximage = $OUTPUT->pix_url('img6', 'theme');
}

if (!empty($PAGE->theme->settings->blocksixtitle)) {
    $blocksixtitle = $PAGE->theme->settings->blocksixtitle;
} 

else {
    $blocksixtitle = 'Custom Box.3';
}

if (!empty($PAGE->theme->settings->blocksixlinktxt)) {
    $blocksixlinktxt = $PAGE->theme->settings->blocksixlinktxt;
} 

else {
    $blocksixlinktxt = 'Custom Box Link';
}

if (!empty($PAGE->theme->settings->blocksixlinkurl)) {
    $blocksixlinkurl = $PAGE->theme->settings->blocksixlinkurl;
} 

else {
    $blocksixlinkurl = '#';
}

if (!empty($PAGE->theme->settings->imagesixhovertitle)) {
    $imagesixhovertitle = $PAGE->theme->settings->imagesixhovertitle;
} 

else {
    $imagesixhovertitle = 'Lorem Ipsum Text.';
}

if (!empty($PAGE->theme->settings->imagesixhovercontent)) {
    $imagesixhovercontent = $PAGE->theme->settings->imagesixhovercontent;
} 

else {
    $imagesixhovercontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site.';
}

// Feature Block Settings.

$showhidethemefeature = (empty($PAGE->theme->settings->showhidethemefeature) ||$PAGE->theme->settings->showhidethemefeature < 1) ? 0 : 1;


$hasfeatureblocktopcontent = (!empty($PAGE->theme->settings->featureblocktopcontent));

if (!empty($PAGE->theme->settings->featureblocktopcontent)) {
    $featureblocktopcontent = $PAGE->theme->settings->featureblocktopcontent;
} 

else {
    $featureblocktopcontent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum site amet eismod ictor ut .';
}

// Block One

$hasfeatureoneimage = (!empty($PAGE->theme->settings->hasfeatureoneimage));
$hasfeatureonetitle = (!empty($PAGE->theme->settings->featureonetitle));
$hasfeatureonecontent = (!empty($PAGE->theme->settings->featureonecontent));

if (!empty($PAGE->theme->settings->featureoneimage)) {
   $featureoneimage = $PAGE->theme->setting_file_url('featureoneimage', 'featureoneimage');
} else {
    $featureoneimage = $OUTPUT->pix_url('1', 'theme');
}

if (!empty($PAGE->theme->settings->featureonetitle)) {
    $featureonetitle = $PAGE->theme->settings->featureonetitle;
} 

else {
    $featureonetitle = 'EEASY TO CUSTOMIZE';
}

if (!empty($PAGE->theme->settings->featureonecontent)) {
    $featureonecontent = $PAGE->theme->settings->featureonecontent;
} 

else {
    $featureonecontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen.';
}

// Block Two

$hasfeaturetwoimage = (!empty($PAGE->theme->settings->hasfeaturetwoimage));
$hasfeaturetwotitle = (!empty($PAGE->theme->settings->featuretwotitle));
$hasfeaturetwocontent = (!empty($PAGE->theme->settings->featuretwocontent));

if (!empty($PAGE->theme->settings->featuretwoimage)) {
   $featuretwoimage = $PAGE->theme->setting_file_url('featuretwoimage', 'featuretwoimage');
} else {
    $featuretwoimage = $OUTPUT->pix_url('2', 'theme');
}

if (!empty($PAGE->theme->settings->featuretwotitle)) {
    $featuretwotitle = $PAGE->theme->settings->featuretwotitle;
} 

else {
    $featuretwotitle = 'FULLY RESPONSIVE';
}

if (!empty($PAGE->theme->settings->featuretwocontent)) {
    $featuretwocontent = $PAGE->theme->settings->featuretwocontent;
} 

else {
    $featuretwocontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen.';
}

// Block Three

$hasfeaturethreeimage = (!empty($PAGE->theme->settings->hasfeaturethreeimage));
$hasfeaturethreetitle = (!empty($PAGE->theme->settings->featurethreetitle));
$hasfeaturethreecontent = (!empty($PAGE->theme->settings->featurethreecontent));

if (!empty($PAGE->theme->settings->featurethreeimage)) {
   $featurethreeimage = $PAGE->theme->setting_file_url('featurethreeimage', 'featurethreeimage');
} else {
    $featurethreeimage = $OUTPUT->pix_url('3', 'theme');
}

if (!empty($PAGE->theme->settings->featurethreetitle)) {
    $featurethreetitle = $PAGE->theme->settings->featurethreetitle;
} 

else {
    $featurethreetitle = 'DEDICATED SUPPORT';
}

if (!empty($PAGE->theme->settings->featurethreecontent)) {
    $featurethreecontent = $PAGE->theme->settings->featurethreecontent;
} 

else {
    $featurethreecontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen.';
}

// Block Four

$hasfeaturefourimage = (!empty($PAGE->theme->settings->hasfeaturefourimage));
$hasfeaturefourtitle = (!empty($PAGE->theme->settings->featurefourtitle));
$hasfeaturefourcontent = (!empty($PAGE->theme->settings->featurefourcontent));

if (!empty($PAGE->theme->settings->featurefourimage)) {
   $featurefourimage = $PAGE->theme->setting_file_url('featurefourimage', 'featurefourimage');
} else {
    $featurefourimage = $OUTPUT->pix_url('4', 'theme');
}

if (!empty($PAGE->theme->settings->featurefourtitle)) {
    $featurefourtitle = $PAGE->theme->settings->featurefourtitle;
} 

else {
    $featurefourtitle = 'CREATIVE DESIGN';
}

if (!empty($PAGE->theme->settings->featurefourcontent)) {
    $featurefourcontent = $PAGE->theme->settings->featurefourcontent;
} 

else {
    $featurefourcontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen.';
}

// Site News Block Settings.

$hassitenewsblocktitle = (!empty($PAGE->theme->settings->sitenewsblocktitle));
$hassitenewsblockcontent = (!empty($PAGE->theme->settings->sitenewsblockcontent));

if (!empty($PAGE->theme->settings->sitenewsblocktitle)) {
    $sitenewsblocktitle = $PAGE->theme->settings->sitenewsblocktitle;
}
else {
    $sitenewsblocktitle = 'SITE NEWS';
}

if (!empty($PAGE->theme->settings->sitenewsblockcontent)) {
    $sitenewsblockcontent = $PAGE->theme->settings->sitenewsblockcontent;
}
else {
    $sitenewsblockcontent = '“Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen.”';
}

// News Event Block Setting.

$showhideeventsblock = (empty($PAGE->theme->settings->showhideeventsblock) ||$PAGE->theme->settings->showhideeventsblock < 1) ? 0 :

$hasneweventstxt = (!empty($PAGE->theme->settings->neweventstxt));
$hasneweventslinktxt = (!empty($PAGE->theme->settings->neweventslinktxt));
$hasneweventslinkurl = (!empty($PAGE->theme->settings->neweventslinkurl));

if (!empty($PAGE->theme->settings->neweventstxt)) {
    $neweventstxt = $PAGE->theme->settings->neweventstxt;
} 

else {
    $neweventstxt = 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. LOREM IPSUM SITE ……';
}

if (!empty($PAGE->theme->settings->neweventslinktxt)) {
    $neweventslinktxt = $PAGE->theme->settings->neweventslinktxt;
} 

else {
    $neweventslinktxt = 'NEW EVENTS';
}

if (!empty($PAGE->theme->settings->neweventslinkurl)) {
    $neweventslinkurl = $PAGE->theme->settings->neweventslinkurl;
} 

else {
    $neweventslinkurl = '#';
}

// Testimonials Block Setting.

$showhidetestimonialsblock = (empty($PAGE->theme->settings->showhidetestimonialsblock) ||$PAGE->theme->settings->showhidetestimonialsblock < 1) ? 0 :

$hastestimonialblocktitle = (!empty($PAGE->theme->settings->testimonialblocktitle));
$hastestimonialblockcontent = (!empty($PAGE->theme->settings->testimonialblockcontent));

if (!empty($PAGE->theme->settings->testimonialblocktitle)) {
    $testimonialblocktitle = $PAGE->theme->settings->testimonialblocktitle;
} 

else {
    $testimonialblocktitle = 'Education Experts Says';
}

if (!empty($PAGE->theme->settings->testimonialblockcontent)) {
    $testimonialblockcontent = $PAGE->theme->settings->testimonialblockcontent;
} 

else {
    $testimonialblockcontent = '“Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen.”';
}
 
// Block One.

$hastestimonialonecontent = (!empty($PAGE->theme->settings->testimonialonecontent));
$hastestimonialoneuserpic = (!empty($PAGE->theme->settings->testimonialoneuserpic));
$hastestimonialoneuser = (!empty($PAGE->theme->settings->testimonialoneuser));
$hastestimonialoneuserroll = (!empty($PAGE->theme->settings->testimonialoneuserroll));

if (!empty($PAGE->theme->settings->testimonialonecontent)) {
    $testimonialonecontent = $PAGE->theme->settings->testimonialonecontent;
} 

else {
    $testimonialonecontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen.';
}

if (!empty($PAGE->theme->settings->testimonialoneuserpic)) {
   $testimonialoneuserpic = $PAGE->theme->setting_file_url('testimonialoneuserpic', 'testimonialoneuserpic');
} else {
    $testimonialoneuserpic = $OUTPUT->pix_url('t1', 'theme');
}

if (!empty($PAGE->theme->settings->testimonialoneuser)) {
    $testimonialoneuser = $PAGE->theme->settings->testimonialoneuser;
} 

else {
    $testimonialoneuser = 'Jonathan Doe';
}

if (!empty($PAGE->theme->settings->testimonialoneuserroll)) {
    $testimonialoneuserroll = $PAGE->theme->settings->testimonialoneuserroll;
} 

else {
    $testimonialoneuserroll = 'User Roll';
}

// Block Two.

$hastestimonialtwocontent = (!empty($PAGE->theme->settings->testimonialtwocontent));
$hastestimonialtwouserpic = (!empty($PAGE->theme->settings->testimonialtwouserpic));
$hastestimonialtwouser = (!empty($PAGE->theme->settings->testimonialtwouser));
$hastestimonialtwouserroll = (!empty($PAGE->theme->settings->testimonialtwouserroll));

if (!empty($PAGE->theme->settings->testimonialtwocontent)) {
    $testimonialtwocontent = $PAGE->theme->settings->testimonialtwocontent;
} 

else {
    $testimonialtwocontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen.';
}

if (!empty($PAGE->theme->settings->testimonialtwouserpic)) {
   $testimonialtwouserpic = $PAGE->theme->setting_file_url('testimonialtwouserpic', 'testimonialtwouserpic');
} else {
    $testimonialtwouserpic = $OUTPUT->pix_url('t1', 'theme');
}

if (!empty($PAGE->theme->settings->testimonialtwouser)) {
    $testimonialtwouser = $PAGE->theme->settings->testimonialtwouser;
} 

else {
    $testimonialtwouser = 'Jonathan Doe';
}

if (!empty($PAGE->theme->settings->testimonialtwouserroll)) {
    $testimonialtwouserroll = $PAGE->theme->settings->testimonialtwouserroll;
} 

else {
    $testimonialtwouserroll = 'User Roll';
}

// Block Three.

$hastestimonialtwocontent = (!empty($PAGE->theme->settings->testimonialthreecontent));
$hastestimonialthreeuserpic = (!empty($PAGE->theme->settings->testimonialthreeuserpic));
$hastestimonialthreeuser = (!empty($PAGE->theme->settings->testimonialthreeuser));
$hastestimonialthreeuserroll = (!empty($PAGE->theme->settings->testimonialthreeuserroll));

if (!empty($PAGE->theme->settings->testimonialthreecontent)) {
    $testimonialthreecontent = $PAGE->theme->settings->testimonialthreecontent;
} 

else {
    $testimonialthreecontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen.';
}

if (!empty($PAGE->theme->settings->testimonialthreeuserpic)) {
   $testimonialthreeuserpic = $PAGE->theme->setting_file_url('testimonialthreeuserpic', 'testimonialthreeuserpic');
} else {
    $testimonialthreeuserpic = $OUTPUT->pix_url('t1', 'theme');
}

if (!empty($PAGE->theme->settings->testimonialthreeuser)) {
    $testimonialthreeuser = $PAGE->theme->settings->testimonialthreeuser;
} 

else {
    $testimonialthreeuser = 'Jonathan Doe';
}

if (!empty($PAGE->theme->settings->testimonialthreeuserroll)) {
    $testimonialthreeuserroll = $PAGE->theme->settings->testimonialthreeuserroll;
} 

else {
    $testimonialthreeuserroll = 'User Roll';
}

// Block Four.

$hastestimonialfourcontent = (!empty($PAGE->theme->settings->testimonialfourcontent));
$hastestimonialfouruserpic = (!empty($PAGE->theme->settings->testimonialfouruserpic));
$hastestimonialfouruser = (!empty($PAGE->theme->settings->testimonialfouruser));
$hastestimonialfouruserroll = (!empty($PAGE->theme->settings->testimonialfouruserroll));

if (!empty($PAGE->theme->settings->testimonialfourcontent)) {
    $testimonialfourcontent = $PAGE->theme->settings->testimonialfourcontent;
} 

else {
    $testimonialfourcontent = 'Lorem ipsum site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum site amet eismod ligulate ameti dapibus ticdu nt mtsen. Lorem ipsum ameti dapibus ticdu nt mtsen.';
}

if (!empty($PAGE->theme->settings->testimonialfouruserpic)) {
   $testimonialfouruserpic = $PAGE->theme->setting_file_url('testimonialfouruserpic', 'testimonialfouruserpic');
} else {
    $testimonialfouruserpic = $OUTPUT->pix_url('t1', 'theme');
}

if (!empty($PAGE->theme->settings->testimonialfouruser)) {
    $testimonialfouruser = $PAGE->theme->settings->testimonialfouruser;
} 

else {
    $testimonialfouruser = 'Jonathan Doe';
}

if (!empty($PAGE->theme->settings->testimonialfouruserroll)) {
    $testimonialfouruserroll = $PAGE->theme->settings->testimonialfouruserroll;
} 

else {
    $testimonialfouruserroll = 'User Roll';
}

/** Copyright **/

if (!empty($PAGE->theme->settings->copyright)) {
    $hascopyright = $PAGE->theme->settings->copyright;
} 
else {
    $hascopyright = 'www.vidyamantra.com';
}

/** Contact Form Setting **/

$showhidecontactfrm = (empty($PAGE->theme->settings->showhidecontactfrm) ||$PAGE->theme->settings->showhidecontactfrm < 1) ? 0 : 1;

// End settings content.

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
            
             <?php echo $OUTPUT->user_menu(); ?>
            
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
<div id="banner">
  <div class="container-fluid">
  
             <?php

            if (isloggedin()) { ?>
            <?php  if ($showhidebanner) { ?> 
            <div id="aditional-frontpage-content">
				<!-- Start Slideshow -->
				<?php require_once(dirname(__FILE__).'/includes/slideshow.php'); ?>
				<!-- End Slideshow -->
			</div>
			<?php } ?>
				
	       <?php }else{?>
	            
	            <div class="login-wrapp">
	              <div class="span8">
                          <p>KIA ORA, Welcome to </br> the <span>HEART FOUNDATION'S</span> <nobr>e-learning</nobr> website</p>
	                <div class="bnr-links"><a href="<?php echo $bannerbtnoneurl ?>" class="lnk1"><?php echo $bannerbtnonetxt ?></a> <a href="<?php echo $bannerbtntwourl ?>" class="lnk2"><?php echo $bannerbtntwotxt ?></a></div>
	                
	              </div>
                  <div class="loginbox span4"><?php include("login_form.php"); ?></div>
                </div>
	            
	  <?php } ?>
    
  </div>
</div>

<div id="page-wrap">
  
  <?php  if ($showhidewelcomeblock) { ?>
  <div id="page-wtop">
    <div class="container-fluid">
      <h1><?php echo $welcometitle ?></h1>
      <p><?php echo $welcomecontent ?></p>
    </div>
  </div>
  <?php } ?>
  
  <?php

    if (isloggedin()) { ?>
            
      <div id="page" class="container-fluid">
        <div id="page-content" class="row-fluid">
          <div id="<?php echo $regionbsid ?>" class="span9">
             <div class="row-fluid">

             <!-- box-1 -->
             
             <?php  if ($showhideblockone) { ?>
         <div class="span4 margin-right" style="height:350px">
          <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blockoneimage ?>" alt="img1" />
			  <span class="caption full-caption">
                <a href="<?php echo "{$CFG->wwwroot}/$blockonelinkurl" ?>">
                    <h3><?php echo $imageonehovertitle ?></h3>
                    <p><?php echo $imageonehovercontent ?></p>
                </a>
			  </span>
		    </div>
	       </div>
	       <div id="box-content">
	        
	         <div class="hd boxlink" style="color: #ffffff;"><a class="blockanch" href="<?php echo $blockonelinkurl ?>" style="color: #ffffff;"><?php echo $blockonelinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>
	    
	    <!-- box-2 -->
	    
	     <?php  if ($showhideblocktwo) { ?>
        <div class="span4 margin-right">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blocktwoimage ?>" alt="img2" />
			  <span class="caption full-caption">
                <a href="<?php echo "{$CFG->wwwroot}/$blocktwolinkurl" ?>">
                    <h3><?php echo $imagetwohovertitle ?></h3>
                    <p><?php echo $imagetwohovercontent ?></p>
                </a>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         
	         <div class="hd boxlink" style="color: #ffffff;"><a class="blockanch" href="<?php echo $blocktwolinkurl ?>" style="color: #ffffff;"><?php echo $blocktwolinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>
	    
	    <!-- box-3 -->
	    
	     <?php  if ($showhideblockthree) { ?>
        <div class="span4">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blockthreeimage ?>" alt="img3" />
			  <span class="caption full-caption">
				<h3><?php echo $imagethreehovertitle ?></h3>
				<p><?php echo $imagethreehovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         
	         <div class="hd boxlink" style="color: #ffffff;"><a class="blockanch" href="<?php echo $blockthreelinkurl ?>" style="color: #ffffff;"><?php echo $blockthreelinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>

	   <!-- box-4 -->
	   
	   <?php  if ($showhideblockfour) { ?>
        <div class="span4 margin-right">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blockfourimage ?>" alt="img4" />
			  <span class="caption full-caption">
				<h3><?php echo $imagefourhovertitle ?></h3>
				<p><?php echo $imagefourhovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         <div class="hd"><?php echo $blockfourtitle ?></div>
	         <div class="lnk"><a href="#"><?php echo $blockfourlinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>

	    
	    <!-- box-5 -->
	    
	    <?php  if ($showhideblockfive) { ?>
        <div class="span4 margin-right">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blockfiveimage ?>" alt="img5" />
			  <span class="caption full-caption">
				<h3><?php echo $imagefivehovertitle ?></h3>
				<p><?php echo $imagefivehovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         <div class="hd"><?php echo $blockfivetitle ?></div>
	         <div class="lnk"><a href="#"><?php echo $blockfivelinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>
	    
	    <!-- box-6 -->
	    
	    <?php  if ($showhideblocksix) { ?>
        <div class="span4">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blocksiximage ?>" alt="img6" />
			  <span class="caption full-caption">
				<h3><?php echo $imagesixhovertitle ?></h3>
				<p><?php echo $imagesixhovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         <div class="hd"><?php echo $blocksixtitle ?></div>
	         <div class="lnk"><a href="#"><?php echo $blocksixlinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>

             
                <section id="region-main" class="span8 pull-right">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', 'span4 desktop-first-column'); ?>
              </div>
            </div>
          <?php echo $OUTPUT->blocks('side-post', 'span3'); ?>
         </div>
       </div>
            
    <?php }else{?>

    <div id="page" class="container-fluid">
      <div id="page-content" class="row-fluid"> 
             
              <!-- box-1 -->
             
             <?php  if ($showhideblockone) { ?>
         <div class="span4 margin-right" style="height:350px;">
          <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blockoneimage ?>" alt="img1" />
			  <span class="caption full-caption">
				<h3><?php echo $imageonehovertitle ?></h3>
				<p><?php echo $imageonehovercontent ?></p>
			  </span>
		    </div>
	       </div>
             
               <div id="box-content">
	         
                   <div class="hd boxlink" style="color: #ffffff;"><p><a class="blockanch" href="<?php echo $blockonelinkurl ?>"><?php echo $blockonelinktxt ?></a></p></div>
	       </div>
             
            </div>
            
	    <?php } ?>
	    
	    <!-- box-2 -->
	    
	     <?php  if ($showhideblocktwo) { ?>
        <div class="span4 margin-right">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blocktwoimage ?>" alt="img2" />
			  <span class="caption full-caption">
				<h3><?php echo $imagetwohovertitle ?></h3>
				<p><?php echo $imagetwohovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         
	         <div class="hd boxlink" style="color: #ffffff;"><a class="blockanch" href="<?php echo $blocktwolinkurl ?>" style="color: #ffffff;"><?php echo $blocktwolinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>
	    
	    <!-- box-3 -->
	    
	     <?php  if ($showhideblockthree) { ?>
        <div class="span4">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blockthreeimage ?>" alt="img3" />
			  <span class="caption full-caption">
				<h3><?php echo $imagethreehovertitle ?></h3>
				<p><?php echo $imagethreehovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         
	         <div class="hd boxlink" style="color: #ffffff;"><a class="blockanch" href="<?php echo $blockthreelinkurl ?>" style="color: #ffffff;"><?php echo $blockthreelinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>

	   <!-- box-4 -->
	   
	   <?php  if ($showhideblockfour) { ?>
        <div class="span4 margin-right">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blockfourimage ?>" alt="img4" />
			  <span class="caption full-caption">
				<h3><?php echo $imagefourhovertitle ?></h3>
				<p><?php echo $imagefourhovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         <div class="hd boxlink"><?php echo $blockfourtitle ?></div>
	         <div class="lnk"><a href="#"><?php echo $blockfourlinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>

	    
	    <!-- box-5 -->
	    
	    <?php  if ($showhideblockfive) { ?>
        <div class="span4 margin-right">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blockfiveimage ?>" alt="img5" />
			  <span class="caption full-caption">
				<h3><?php echo $imagefivehovertitle ?></h3>
				<p><?php echo $imagefivehovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         <div class="hd"><?php echo $blockfivetitle ?></div>
	         <div class="lnk"><a href="#"><?php echo $blockfivelinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>
	    
	    <!-- box-6 -->
	    
	    <?php  if ($showhideblocksix) { ?>
        <div class="span4">
        <div id="mainwrapper">
		
		   <div id="box-2" class="box">
			  <img id="image-2" src="<?php echo $blocksiximage ?>" alt="img6" />
			  <span class="caption full-caption">
				<h3><?php echo $imagesixhovertitle ?></h3>
				<p><?php echo $imagesixhovercontent ?></p>
			  </span>
		    </div>
	      </div>
	      <div id="box-content">
	         <div class="hd"><?php echo $blocksixtitle ?></div>
	         <div class="lnk"><a href="#"><?php echo $blocksixlinktxt ?></a></div>
	       </div>
	    </div>
	    <?php } ?>	    
	    

<div class="row-fluid">
               <!--
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                -->
                <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
            </div>
         </div>
     </div>
    <?php } ?>
    </div>
    
<!-- About Block Start -->

<?php  if ($showhidethemefeature) { ?>

<div id="about-wrap">
  <div id="about-top">
    <div class="container-fluid">
      <?php echo $featureblocktopcontent ?>
    </div>
  </div>

<div id="about" class="container-fluid">
    <div id="page-content" class="row-fluid">        
	    
	    <!-- box-1 -->
	    	    
        <div class="span6">
          <div id="abt-box" class="box-1">
            <div class="abt1-img">
			  <img id="image-2" src="<?php echo $featureoneimage ?>" alt="img1" />
			</div>
		    <div class="box-cont">
			   <h3><?php echo $featureonetitle ?></h3>
			   <p><?php echo $featureonecontent ?></p>
		    </div>
		  </div>
	    </div>

	    <!-- box-2 -->
	    	    
        <div class="span6">
          <div id="abt-box2" class="box-2">
            <div class="abt2-img">
			  <img id="image-2" src="<?php echo $featuretwoimage ?>" alt="img2" />
			</div>
		    <div class="box-cont">
			   <h3><?php echo $featuretwotitle ?></h3>
			   <p><?php echo $featuretwocontent ?></p>
		    </div>
		  </div>
	    </div>
	    
	    <!-- box-3 -->
	        
        <div class="span6">
          <div id="abt-box3" class="box-3">
            <div class="abt3-img">
			  <img id="image-2" src="<?php echo $featurethreeimage ?>" alt="img3" />
			</div>
		    <div class="box-cont">
			   <h3><?php echo $featurethreetitle ?></h3>
			   <p><?php echo $featurethreecontent ?></p>
		    </div>
		  </div>
	    </div>
	    
	    <!-- box-4 -->
	    	    
        <div class="span6">
          <div id="abt-box4" class="box-4">
            <div class="abt4-img">
			  <img id="image-2" src="<?php echo $featurefourimage ?>" alt="img4" />
			</div>
		    <div class="box-cont">
			   <h3><?php echo $featurefourtitle ?></h3>
			   <p><?php echo $featurefourcontent ?></p>
		    </div>
		  </div>
	    </div>
	    
        <!-- about box end -->
      </div>
    </div>
    </div>
    <?php } ?>

<!-- About Block End -->

<!-- Site News Forum Block Stars -->

   <?php
        if (isloggedin()) { ?>

  <div id="sitenews-wrap">
     <div id="sitenews-top">
        <div class="container-fluid">
           <h1><?php echo $sitenewsblocktitle ?></h1>
           <p><?php echo $sitenewsblockcontent ?></p>
       </div>
     </div>
     <div id="sitenews-cont"></div>
   </div>
   <?php }else{?>
	    <div> </div>
   <?php } ?>

<!-- New Events Block Starts -->   

  <?php  if ($showhideeventsblock) { ?>	
  <div id="spl-wrap">
    <div class="container-fluid">
     <div class="spl-cont"><?php echo $neweventstxt ?></div>
     <div class="spl-link"><a href="<?php echo $neweventslinkurl ?>"><?php echo $neweventslinktxt ?></a></div>
    </div>
  </div>
  <?php } ?>
  
  <!-- Comments starts -->
  
    <?php  if ($showhidetestimonialsblock) { ?>	
    <div id="testimonial-wrap">
       <div id="testimonial-top">
                  <div class="container-fluid">
                    <h1><?php echo $testimonialblocktitle ?></h1>
                    <p><?php echo $testimonialblockcontent ?></p>
                  </div>
               </div>
                    <div id="testimonial" class="container-fluid"> 
                        <div class="span6">
                            <div class="testimonial box-1">
                                <p><?php echo $testimonialonecontent ?></p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="<?php echo $testimonialoneuserpic ?>" alt="User Picture" />
                                    <div class="testmuser"><span><?php echo $testimonialoneuser ?></span> </br><?php echo $testimonialoneuserroll ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="testimonial box-2">
                                <p><?php echo $testimonialtwocontent ?></p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="<?php echo $testimonialtwouserpic ?>" alt="User Picture" />
                                    <div class="testmuser"><span><?php echo $testimonialtwouser ?></span> </br><?php echo $testimonialtwouserroll ?></div>
                                </div>
                            </div>
                        </div>
                        
               </div>
      </div>
      <?php } ?>
                        
   <!-- Comments end -->
   
   <!-- Contacts start -->
     
     <div id="contact-wrap">
       <div id="contact-top">
         <div class="container-fluid">
            <h1>Let’s Get In Touch</h1> 
            
            <?php require_once(dirname(__FILE__).'/includes/socialicons.php'); ?>
            
         </div>
       </div>
       
       <?php  if ($showhidecontactfrm) { ?>
       
       <div id="contact" class="container-fluid">
     
         <div class="col-md-9 col-xs-12 forma">
                    <h3>Say Hello ! Bia Message</h3> 
					<form>
						<input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Name *'/></br>
						<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='Email *'/></br>
						<input type="text" class="col-md-12 col-xs-12 Subject" name='Subject' placeholder='Subject'/></br>
						<textarea type="text" class="col-md-12 col-xs-12 Message" name='Message' placeholder='Message *'></textarea>
						<div class="sendmess">
						   <ul>
							  <li class="send"><a href="#"><i class="fa fa-share"></i>Send Message</a></li>
						   </ul>
						</div>
					</form>
				</div> <!-- form end -->
	    </div>
	    
	    <?php } ?>
	    
	  </div>
     
   <!-- Contacts end -->
    
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
                <p> If you have a question about Learn HF, we would love to hear from you. Phone our team on: (03) 366 2112 or email us at: <a href="mailto:hearthealthinfo@heartfoundation.org.nz">hearthealthinfo@heartfoundation.org.nz</a>.</p>
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
    
    <script type="text/javascript">
$( "#sitenews-cont" ).prepend( $( "#site-news-forum" ) );
</script>

</body>
</html>
