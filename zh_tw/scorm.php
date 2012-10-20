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
 * Strings for component 'scorm', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = '啟動';
$string['advanced'] = '進階';
$string['asset'] = '資源';
$string['assetlaunched'] = '已閱讀的資源';
$string['attempt'] = '使用';
$string['attempt1'] = '使用1次';
$string['attempts'] = '次使用';
$string['attemptsx'] = '使用{$a}次';
$string['attr_error'] = '在{$a->tag}標籤中，({$a->attr})的屬性值錯誤';
$string['autocontinue'] = '自動繼續';
$string['autocontinue_help'] = '<p><b>Auto-Continue</b></p>

<p>If Auto-continue is set to Yes, when a SCO calls the "close communication" method, automatically the next available SCO will launched.</p>

<p>If it is set to No, the users must use the "Continue" button to go on.</p>';
$string['averageattempt'] = '平均使用次數';
$string['badmanifest'] = '某些裝載清單錯誤:請看錯誤記錄';
$string['badpackage'] = '包裹/清單中有一些問題。請檢查後重試。';
$string['browse'] = '預覽';
$string['browsed'] = '已瀏覽';
$string['browsemode'] = '瀏覽模式';
$string['browserepository'] = '瀏覽儲藏庫';
$string['chooseapacket'] = '選取或更新scorm包裏';
$string['completed'] = '已完成';
$string['confirmloosetracks'] = '警告：此課程包可能發生了改變或者被修改過了。如果改變了課程包的結構，那麼在更新過程中一些使用追蹤紀錄可能會遺失。';
$string['contents'] = '目錄';
$string['coursepacket'] = '課程包裹';
$string['coursestruct'] = '課程結構';
$string['datadir'] = '檔案系統錯誤：無法建立課程資料目錄';
$string['deleteallattempts'] = '刪除所有SCORM使用紀錄';
$string['details'] = 'SCO 追蹤細節';
$string['directories'] = '顯示目錄連結';
$string['display'] = '顯示';
$string['domxml'] = 'DOMXML外部程式庫';
$string['element'] = '元素';
$string['enter'] = '進入';
$string['entercourse'] = '進入SCORM課程';
$string['errorlogs'] = '錯誤記錄';
$string['everyday'] = '每一天';
$string['everytime'] = '每次使用時';
$string['exit'] = '離開課程';
$string['exitactivity'] = '離開活動';
$string['external'] = '更新外來課程包的時間';
$string['failed'] = '失敗';
$string['firstaccess'] = '第一次存取';
$string['firstattempt'] = '第一次使用';
$string['found'] = '找到裝載清單檔';
$string['frameheight'] = 'SCO架框的預設高度';
$string['framewidth'] = 'SCO架框的預設寬度';
$string['fullscreen'] = '填滿整個畫面';
$string['general'] = '一般資料';
$string['gradeaverage'] = '平均成績';
$string['gradehighest'] = '最高成績';
$string['grademethod'] = '評分方式';
$string['grademethod_help'] = '<p><b>Grade methods</b></p>

<p>The results of a SCORM/AICC activity shown in Grades pages can be rated in several modes:
    <ul>
	<li><b>SCO situation</b><br />This mode shows the number of completed/passed SCOes for the activity. The max value is the number of SCO.</li>
	<li><b>Highest grade</b><br />The grade page will display the highest score obtained by users in all passed SCOes.</li>
	<li><b>Average grade</b><br />If you choose this mode Moodle will calculate the average of all scores.</li>
	<li><b>Sum grade</b><br />With this mode all the scores will be added.</li>
</p>';
$string['gradescoes'] = '分數狀況';
$string['gradesum'] = '加總';
$string['height'] = '高度';
$string['hidden'] = '隱藏';
$string['hidebrowse'] = '停用預覽模式';
$string['hideexit'] = '隱藏退出的超連結';
$string['hidenav'] = '隱藏導覽按鈕';
$string['hidereview'] = '隱藏回顧的按鈕';
$string['hidetoc'] = '課程結構顯示(TOC)';
$string['highestattempt'] = '最高使用次數';
$string['identifier'] = '題目識別碼';
$string['incomplete'] = '不完整';
$string['interactions'] = '互動';
$string['last'] = '最後瀏覽於';
$string['lastaccess'] = '最後瀏覽';
$string['lastattempt'] = '最後使用';
$string['location'] = '顯示位址列';
$string['max'] = '最高分';
$string['maximumattempts'] = '使用次數';
$string['menubar'] = '顯示選單列';
$string['min'] = '最低分';
$string['missing_attribute'] = '{$a->tag}標籤遺漏{$a->attr}屬性';
$string['missingparam'] = '必備的遺失了或發生錯誤';
$string['missing_tag'] = '遺漏{$a->tag}標籤';
$string['mode'] = '模式';
$string['modulename'] = 'SCORM/AICC 課程包';
$string['modulenameplural'] = 'SCORMs/AICCs 課程包';
$string['newattempt'] = '開始新的使用';
$string['next'] = '繼續';
$string['noactivity'] = '沒有報告';
$string['no_attributes'] = '標籤{$a->tag} 必須有屬性';
$string['no_children'] = '標籤{$a->tag} 必須有子類';
$string['nolimit'] = '無限制的使用';
$string['nomanifest'] = '無法找到Manifest清單';
$string['noprerequisites'] = '抱歉，您還沒有達到存取這個學習物件的條件';
$string['noreports'] = '沒有報告';
$string['normal'] = '一般';
$string['noscriptnoscorm'] = '您的瀏覽器不支援 javascript 或是被停用，無法記錄追蹤資料。';
$string['notattempted'] = '未嘗試';
$string['not_corr_type'] = '標籤{$a->tag} 型態不正確';
$string['objectives'] = '目標';
$string['options'] = '選項';
$string['organization'] = '組織';
$string['organizations'] = '組織';
$string['othersettings'] = '額外的設定';
$string['othertracks'] = '其他追蹤項目';
$string['package'] = '包裹的檔案';
$string['packagedir'] = '檔案系統錯誤：無法建立包裝目錄';
$string['packagefile'] = '沒有指定包裹檔案';
$string['package_help'] = '<p><b>Packages file</b></p>

<p>The package is a particular file with <b>zip</b> (or pif) extension that contains
   valid AICC or SCORM course definition files.</p>

<p>A <b>SCORM</b> package must contains in the root of zip a file named <b>imsmanifest.xml</b>
   that define SCORM course structure, resource location and many other things.</p>

<p>An <b>AICC</b> package is defined by several files (from 4 to 7) with defined extensions.
   Here you find the extensions meaning:</p>
   <ul>
	<li>CRS - Course Description file (mandatory)</li>
	<li>AU  - Assignable Unit file (mandatory)</li>
	<li>DES - Descriptor file (mandatory)</li>
	<li>CST - Course Structure file (mandatory)</li>
	<li>ORE - Objective Relationship file (optional)</li>
	<li>PRE - Prerequisites file (optional)</li>
	<li>CMP - Completition Requirements file (optional)</li>
   </ul>';
$string['passed'] = '通過';
$string['php5'] = 'PHP 5 (DOMXML原始函式庫)';
$string['popup'] = '在新視窗中開啟學習物件檔';
$string['popupmenu'] = '在下拉式選單中';
$string['popupopen'] = '在新視窗開啟包裝';
$string['position_error'] = '標籤{$a->tag} 不是{$a->parent}標籤的子標籤';
$string['prev'] = '前一頁';
$string['raw'] = '原始分數';
$string['regular'] = '有規則的Manifest';
$string['report'] = '結果';
$string['resizable'] = '允許調整視窗大小';
$string['result'] = '結果';
$string['review'] = '複習';
$string['reviewmode'] = '複習模式';
$string['scoes'] = '分數';
$string['score'] = '分數';
$string['scormcourse'] = '學習課程';
$string['scorm:savetrack'] = '保存路徑';
$string['scorm:skipview'] = '跳過';
$string['scorm:viewreport'] = '檢視報告';
$string['scorm:viewscores'] = '檢視分數';
$string['scrollbars'] = '允許捲動視窗';
$string['sided'] = '在左邊';
$string['skipview'] = '學生跳過內容結構頁面';
$string['stagesize'] = '頁框/視窗大小';
$string['started'] = '開始';
$string['status'] = '狀態';
$string['statusbar'] = '顯示狀態列';
$string['student_response'] = '回答';
$string['suspended'] = '中止';
$string['syntax'] = '語法錯誤';
$string['tag_error'] = '內容為{$a->value}的({$a->tag})是不知名的標籤';
$string['time'] = '時間';
$string['title'] = '標題';
$string['toolbar'] = '顯示工具列';
$string['too_many_attributes'] = '標籤{$a->tag} 太多屬性了';
$string['too_many_children'] = '標籤{$a->tag} 太多子標籤';
$string['totaltime'] = '時間';
$string['trackingloose'] = '注意：這個課程包的學習追蹤資料將會遺失。';
$string['type'] = '類型';
$string['unziperror'] = '課程包解壓縮時發現一個錯誤';
$string['updatefreq'] = '自動更新頻率';
$string['validateascorm'] = '合法的SCORM包裹';
$string['validation'] = '檢驗結果';
$string['validationtype'] = '此偏好在設定正式版的SCORM所使用的DOMXML函式庫。如果您不清楚，就保留原來的選項。';
$string['value'] = '值';
$string['versionwarning'] = '{$a->tag}標籤出現警告:現存版本比1.3還舊，';
$string['viewallreports'] = '檢視{$a}次的使用報告';
$string['viewalluserreports'] = '檢視{$a}位用戶的報告';
$string['whatgrade'] = '使用評分';
$string['width'] = '寬度';
$string['window'] = '視窗';
