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
 * This is built using the Clean template to allow for new theme's using
 * meline29 framework
 *
 *
 * @package   theme_meline29
 * @copyright 2014 Eduardo Ramos
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$slideshowenabled = 
        ($PAGE->theme->settings->toggleslideshow == 1 
            || ($PAGE->theme->settings->toggleslideshow == 2 && !isloggedin()) 
            || ($PAGE->theme->settings->toggleslideshow == 3 && isloggedin()))
        ;

$slideshowheight = isset($PAGE->theme->settings->slideshowheight) ? $PAGE->theme->settings->slideshowheight : '300px';
$slideshowautoplay = isset($PAGE->theme->settings->slideshowautoplay) ? $PAGE->theme->settings->slideshowautoplay : true;
$slideshowanimation = isset($PAGE->theme->settings->slideshowanimation) ? $PAGE->theme->settings->slideshowanimation : 'swipe';
$slideshowkenburns = isset($PAGE->theme->settings->slideshowkenburns) ? $PAGE->theme->settings->slideshowkenburns : false;

if ($slideshowenabled) {

    function theme_meline29_get_slide_html(&$PAGE, $i) {
        $titleSetting = "slide$i";
        $captionSetting = "slide{$i}caption";
        $urlSetting = "slide{$i}url";
        $urlTextSetting = "slide{$i}urltext";
        $captionPlacementSetting= "slide{$i}captionplacement";

        $title = $PAGE->theme->settings->$titleSetting;
        $caption = $PAGE->theme->settings->$captionSetting;
        $url = $PAGE->theme->settings->$urlSetting;
        $urlText = $PAGE->theme->settings->$urlTextSetting;
        $image = $PAGE->theme->setting_file_url("slide{$i}image", "slide{$i}image");
        $slideshowbuttontype = empty($PAGE->theme->settings->slideshowbuttontype) ? '' : $PAGE->theme->settings->slideshowbuttontype;
        $slideshowcaptionplacement = empty($PAGE->theme->settings->$captionPlacementSetting) ? 'center' : $PAGE->theme->settings->$captionPlacementSetting;

        if (!empty($title) || !empty($caption) || !empty($url) || !empty($image)) {
            $html = '<li class="slide-'.$i.'">';
            if (!empty($image)) {
                $html .= '<img src="' . $image . '" alt="' . $title . '">';
            }
            $html .= '<div class="uk-caption uk-caption-'.$slideshowcaptionplacement.' uk-caption-panel uk-animation-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">';
            $html .= '<div>';
            if (!empty($title)) {
                $html .= '<h2>' . $title . '</h2>';
            }
            if (!empty($caption)) {
                $html .= '<p>' . $caption . '</p>';
            }
            if (!empty($url)) {
                if (empty($urlText)) {
                    $urlText = get_string('readmore', 'theme_meline29');
                }
                $html .= '<a href="' . $url . '" class="uk-button uk-button-small '.$slideshowbuttontype.'">' . $urlText . '</a>';
            }
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</li>';
        } else {
            $html = '';
        }

        return $html;
    }

    $slidesHtml = '';
    $slides = isset($PAGE->theme->settings->slideshownumber) ? $PAGE->theme->settings->slideshownumber : 4;
    $slidesWithInfoCount = 0;
    foreach (range(1, $slides) as $i) {
        $slide = theme_meline29_get_slide_html($PAGE, $i);
        if(!empty($slide)){
            $slidesHtml .= $slide;
            $slidesWithInfoCount++;
        }
    }

    if(!empty($slidesHtml)){
        ?>
        <div id="thememeline29-slideshow" class="uk-slidenav-position uk-margin-bottom" data-uk-slideshow="{height: '<?php echo $slideshowheight; ?>', autoplay: <?php echo $slideshowautoplay ? 'true' : 'false'; ?>, animation: '<?php echo $slideshowanimation; ?>', kenburns: <?php echo $slideshowkenburns ? 'true' : 'false'?>}">
            <ul class="uk-slideshow">
                <?php echo $slidesHtml; ?>
            </ul>
            <?php if($slidesWithInfoCount > 1){ ?>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center uk-hidden-small">
                    <?php foreach (range(0, $slidesWithInfoCount - 1) as $i) { ?>
                        <li data-uk-slideshow-item="<?php echo $i; ?>"><a href=""></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <?php
    }
}
