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
 * Strings for component 'filter_mediaplugin', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   filter_mediaplugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['fallbackaudio'] = '聲音鏈結';
$string['fallbackvideo'] = '影片鏈結';
$string['filtername'] = '多媒體插件';
$string['flashanimation'] = 'Flash動畫';
$string['flashanimation_help'] = '擴展名為*.swf的文件。出於安全原因，此過濾器只對可信文本有效。';
$string['flashvideo'] = 'Flash視頻';
$string['flashvideo_help'] = '擴展名為*.flv和*.f4v的文件。使用Flowplayer播放視頻，需要Flash插件和javascript。如果指定了多個源，會使用HTML 5視頻候補方案。';
$string['html5audio'] = 'HTML 5音頻';
$string['html5audio_help'] = '擴展名為*.ogg和*.aac等的文件。只和最新的web瀏覽器兼容，但不幸的是沒有任何一種格式被所有瀏覽器支持。
解決方法是用#分隔多個候補（例如：http://example.org/audio.aac#http://example.org/audio.aac#http://example.org/audio.mp3#）。在舊瀏覽器會使用QuickTime播放器做為候補。候補可以是任意音頻類型。';
$string['html5video'] = 'HTML 5視頻';
$string['html5video_help'] = '擴展名為*.webm、*.m4v、*.ogv和*.mp4等的文件。只和最新的web瀏覽器兼容，但不幸的是沒有任何一種格式被所有瀏覽器支持。
解決方法是用#分隔多個候補（例如：http://example.org/video.m4v#http://example.org/video.acc#http://example.org/video.ogv#d=640x480）。在舊瀏覽器會使用QuickTime播放器做為候補。';
$string['legacyheading'] = '舊的媒體播放器';
$string['legacyheading_help'] = '下列格式不建議在日常使用。它們通常都用在安裝了由中心管理的客戶端的內部網絡。';
$string['legacyquicktime'] = 'QuickTime播放器';
$string['legacyquicktime_help'] = '擴展名是*.mov、*.mp4、*.m4a、*.mp4和*.mpg的文件。需要QuickTime播放器或解碼器。';
$string['legacyreal'] = 'Real媒體播放器';
$string['legacyreal_help'] = '擴展名是*.rm、*.ra、*.ram、*.ra和*.rv的文件。需要RealPlayer。';
$string['legacywmp'] = 'Windows媒體播放器';
$string['legacywmp_help'] = '擴展名是*.avi和*.wmv的文件。和Windows下的Internet Explorer完全兼容，在其它瀏覽器或操作系統上可能有問題。';
$string['mp3audio'] = 'MP3音頻';
$string['mp3audio_help'] = '擴展名是*.mp3的文件。使用Flowplayer播放音頻，需要Flash插件。';
$string['sitevimeo'] = 'Vimeo';
$string['sitevimeo_help'] = 'Vimeo視頻分享網站。';
$string['siteyoutube'] = 'YouTube';
$string['siteyoutube_help'] = 'YouTube視頻分享網站，支持視頻和播放列表';
