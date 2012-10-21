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
$string['activityloading'] = '您將會被自動轉入到活動中，該活動位於';
$string['activitypleasewait'] = '活動載入中，請稍候.一';
$string['advanced'] = '進階';
$string['allowapidebug'] = '激活 API 調試與跟蹤（用 apidebugmask 設置捕獲掩碼�一';
$string['allowtypeexternal'] = '啟用外部包類型';
$string['allowtypeimsrepository'] = '啟用 IMS 包類型';
$string['allowtypelocalsync'] = '啟用可下載包類型';
$string['apidebugmask'] = 'API 調試捕獲掩碼——對 &lt;username&gt;:&lt;activityname&gt; 使用簡單的正則表達式。例如：admin:.* 會只調試管理員用戶';
$string['areacontent'] = '內容文件';
$string['areapackage'] = '包文件';
$string['asset'] = '資源';
$string['assetlaunched'] = '已閱讀的資源';
$string['attempt'] = '使用';
$string['attempt1'] = '使用1次';
$string['attempts'] = '次使用';
$string['attemptsx'] = '使用{$a}次';
$string['attr_error'] = '在{$a->tag}標籤中，({$a->attr})的屬性值錯誤';
$string['autocontinue'] = '自動繼續';
$string['autocontinuedesc'] = '此選項設置活動默認情況下是否會自動繼續';
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
$string['cannotfindsco'] = '找不到 S一';
$string['chooseapacket'] = '選取或更新scorm包裏';
$string['completed'] = '已完成';
$string['confirmloosetracks'] = '警告：此課程包可能發生了改變或者被修改過了。如果改變了課程包的結構，那麼在更新過程中一些使用追蹤紀錄可能會遺失。';
$string['contents'] = '目錄';
$string['coursepacket'] = '課程包裹';
$string['coursestruct'] = '課程結構';
$string['currentwindow'] = '當前窗口';
$string['datadir'] = '檔案系統錯誤：無法建立課程資料目錄';
$string['deleteallattempts'] = '刪除所有SCORM使用紀錄';
$string['deleteattemptcheck'] = '您確定要完全刪除所有嘗試記錄嗎�一';
$string['details'] = 'SCO 追蹤細節';
$string['directories'] = '顯示目錄連結';
$string['disabled'] = '不顯示';
$string['display'] = '顯示';
$string['displayattemptstatus'] = '顯示嘗試狀態';
$string['displayattemptstatusdesc'] = '此選項設置顯示嘗試狀態設置的缺省值';
$string['displayattemptstatus_help'] = '如果打開，以前嘗試所得的分數和評級會顯示在SCORM概要頁面�一';
$string['displaycoursestructure'] = '在進入頁面顯示課程結構';
$string['displaycoursestructuredesc'] = '此選項設置進入頁面顯示課程結構設置的缺省值';
$string['displaycoursestructure_help'] = '如果允許，課件內容的列表會顯示在SCORM概要頁面上�一';
$string['displaydesc'] = '活動默認情況下是否顯示包';
$string['domxml'] = 'DOMXML外部程式庫';
$string['duedate'] = '截止日';
$string['element'] = '元素';
$string['enter'] = '進入';
$string['entercourse'] = '進入SCORM課程';
$string['errorlogs'] = '錯誤記錄';
$string['everyday'] = '每一天';
$string['everytime'] = '每次使用時';
$string['exceededmaxattempts'] = '您已經達到最大嘗試次數�一';
$string['exit'] = '離開課程';
$string['exitactivity'] = '離開活動';
$string['expired'] = '抱歉，本活動已於{$a}關閉，已不再可用�一';
$string['external'] = '更新外來課程包的時間';
$string['failed'] = '失敗';
$string['finishscorm'] = '如果您已完成查看本資源，{$一';
$string['finishscormlinkname'] = '點擊此處返回課程主頁';
$string['firstaccess'] = '第一次存取';
$string['firstattempt'] = '第一次使用';
$string['forcecompleted'] = '強制為完成';
$string['forcecompleteddesc'] = '該參數設置強制完成的默認值';
$string['forcecompleted_help'] = '如果打開，當前訪問的狀態會強制變為“完全的”。該項設置僅適用於SCORM1.2課件包。如果SCORM包在查看惑或瀏覽模式不能正確處理再次訪問，或者不能正確處理完成狀態時，非常有用�一';
$string['forcejavascript'] = '強制用戶打開JavaScri一';
$string['forcejavascript_desc'] = '如果設置為打開（推薦），在用戶瀏覽器不支持或者關閉JavaScript時，拒絕對SCORM內容的訪問。如果設置為標上，用戶仍可以查看SCORM的內容，但是API不能通訊，SCORM課件成績等信息不能保存到系統中�一';
$string['forcejavascriptmessage'] = '需要Javascript支持，請您打開瀏覽器中的JavaScript設置，然後再試一次�一';
$string['forcenewattempt'] = '強制為新嘗試';
$string['forcenewattemptdesc'] = '該參數設置強制為新嘗試的默認值';
$string['forcenewattempt_help'] = '如果打開，每次訪問SCORM包都被記作一次新的瀏覽�一';
$string['found'] = '找到裝載清單檔';
$string['frameheight'] = 'SCO架框的預設高度';
$string['framewidth'] = 'SCO架框的預設寬度';
$string['fullscreen'] = '填滿整個畫面';
$string['general'] = '一般資料';
$string['gradeaverage'] = '平均成績';
$string['gradeforattempt'] = '嘗試的得分';
$string['gradehighest'] = '最高成績';
$string['grademethod'] = '評分方式';
$string['grademethoddesc'] = '活動的默認評分方法';
$string['grademethod_help'] = '<p><b>Grade methods</b></p>

<p>The results of a SCORM/AICC activity shown in Grades pages can be rated in several modes:
    <ul>
	<li><b>SCO situation</b><br />This mode shows the number of completed/passed SCOes for the activity. The max value is the number of SCO.</li>
	<li><b>Highest grade</b><br />The grade page will display the highest score obtained by users in all passed SCOes.</li>
	<li><b>Average grade</b><br />If you choose this mode Moodle will calculate the average of all scores.</li>
	<li><b>Sum grade</b><br />With this mode all the scores will be added.</li>
</p>';
$string['gradereported'] = '成績報告';
$string['gradescoes'] = '分數狀況';
$string['gradesum'] = '加總';
$string['height'] = '高度';
$string['hidden'] = '隱藏';
$string['hidebrowse'] = '停用預覽模式';
$string['hidebrowsedesc'] = '活動默認是否允許預覽模式';
$string['hidebrowse_help'] = '預覽模式允許學生在進入課件之前先進行瀏覽。如果預覽模式被禁止，預覽按鈕會被隱藏';
$string['hideexit'] = '隱藏退出的超連結';
$string['hidenav'] = '隱藏導覽按鈕';
$string['hidenavdesc'] = '活動面哦人是否顯示導航按鈕';
$string['hidereview'] = '隱藏回顧的按鈕';
$string['hidetoc'] = '課程結構顯示(TOC)';
$string['hidetocdesc'] = '在 SCORM 播放器中默認顯示還是隱藏課程結構（目錄�一';
$string['hidetoc_help'] = '該項設置設置內容列表出現在SCORM播放器中的位置';
$string['highestattempt'] = '最高使用次數';
$string['identifier'] = '題目識別碼';
$string['incomplete'] = '不完整';
$string['info'] = '信息';
$string['interactions'] = '互動';
$string['invalidactivity'] = 'Scorm 活動不正確';
$string['last'] = '最後瀏覽於';
$string['lastaccess'] = '最後瀏覽';
$string['lastattempt'] = '最後使用';
$string['lastattemptlock'] = '在最後一次嘗試後鎖定';
$string['lastattemptlockdesc'] = '該參數設置在最後一次嘗試後鎖定的默認值';
$string['lastattemptlock_help'] = '如果打開，學生用完了分配給他們的嘗試次數，學生將不能再打開SCORM播放器';
$string['location'] = '顯示位址列';
$string['max'] = '最高分';
$string['maximumattempts'] = '使用次數';
$string['maximumattemptsdesc'] = '活動默認的學習次數';
$string['maximumattempts_help'] = '這裡定義了允許用戶嘗試的次數。該設置僅支持SCORM1.2和AICC的課件包�一';
$string['maximumgradedesc'] = '活動默認的最高分';
$string['menubar'] = '顯示選單列';
$string['min'] = '最低分';
$string['missing_attribute'] = '{$a->tag}標籤遺漏{$a->attr}屬性';
$string['missingparam'] = '必備的遺失了或發生錯誤';
$string['missing_tag'] = '遺漏{$a->tag}標籤';
$string['mode'] = '模式';
$string['modulename'] = 'SCORM/AICC 課程包';
$string['modulename_help'] = 'SCORM和AICC是一套基於Web學習內容的規范，具有互用性、輔助性和復用性。通過SCORM/AICC模塊可將SCORM/AICC課件包加入到課程中�一';
$string['modulenameplural'] = 'SCORMs/AICCs 課程包';
$string['navigation'] = '導航';
$string['newattempt'] = '開始新的使用';
$string['next'] = '繼續';
$string['noactivity'] = '沒有報告';
$string['noattemptsallowed'] = '允許嘗試的次數';
$string['noattemptsmade'] = '您已經嘗試的次數';
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
$string['notopenyet'] = '抱歉，這個活動直到{$a}才能進行';
$string['objectives'] = '目標';
$string['onchanges'] = '當它發生變化時';
$string['optallstudents'] = '全部用戶';
$string['optattemptsonly'] = '學習過的用戶';
$string['options'] = '選項';
$string['optnoattemptsonly'] = '未學習過的用戶';
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
$string['packageurl'] = 'U一';
$string['packageurl_help'] = '通過此設置可以提供指定 SCORM 課件的 URL，而不是選擇一個文件�一';
$string['page-mod-scorm-x'] = '任意 SCORM 模塊頁面';
$string['pagesize'] = '頁面大小';
$string['passed'] = '通過';
$string['php5'] = 'PHP 5 (DOMXML原始函式庫)';
$string['pluginadministration'] = 'SCORM/AICC課件管理';
$string['pluginname'] = 'SCORM 課件';
$string['popup'] = '在新視窗中開啟學習物件檔';
$string['popupmenu'] = '在下拉式選單中';
$string['popupopen'] = '在新視窗開啟包裝';
$string['popupsblocked'] = '彈出式窗口被阻攔了，使 scorm 模塊不能播放。請檢查您的瀏覽器設置，然後再開始�一';
$string['position_error'] = '標籤{$a->tag} 不是{$a->parent}標籤的子標籤';
$string['preferencespage'] = '此頁的參數設置';
$string['preferencesuser'] = '此報告的參數設置';
$string['prev'] = '前一頁';
$string['raw'] = '原始分數';
$string['regular'] = '有規則的Manifest';
$string['report'] = '結果';
$string['reportcountallattempts'] = '{$a->nbusers} 名用戶的 {$a->nbattempts} 次學習，共 {$a->nbresults} 個結果';
$string['reportcountattempts'] = '{$a->nbresults} 個結果（{$a->nbusers} 名用戶�一';
$string['resizable'] = '允許調整視窗大小';
$string['result'] = '結果';
$string['results'] = '結果';
$string['review'] = '複習';
$string['reviewmode'] = '複習模式';
$string['scoes'] = '分數';
$string['score'] = '分數';
$string['scormclose'] = '直到';
$string['scormcourse'] = '學習課程';
$string['scorm:deleteresponses'] = '刪除 SCORM 學習記錄';
$string['scormloggingoff'] = 'API 日志已關閉';
$string['scormloggingon'] = 'API 日志已開啟';
$string['scormopen'] = '開放';
$string['scormresponsedeleted'] = '刪除用戶學習記錄';
$string['scorm:savetrack'] = '保存路徑';
$string['scorm:skipview'] = '跳過';
$string['scormtype'] = '類型';
$string['scormtype_help'] = '此設置決定課件如何放入課程。有 4 中選項：

* 上傳課件 - 通過文件選取器選擇 SCORM 課件
* 外部 SCORM manifest - 指定一個 imsmanifest.xml 網址。注意：如果此 URL 與您的網站域名不同，那麼最好用“下載課件”，否則不能保存成績。
* 下載課件 - 指定一個課件 URL。課件會被解壓縮並保存在本地，並隨著外部 SCORM 課件更新而更新。
* 本地 IMS 內容容器 - 通過 IMS 容器選擇一個課件';
$string['scorm:viewreport'] = '檢視報告';
$string['scorm:viewscores'] = '檢視分數';
$string['scrollbars'] = '允許捲動視窗';
$string['selectall'] = '全部選擇';
$string['selectnone'] = '全不選擇';
$string['show'] = '顯示';
$string['sided'] = '在左邊';
$string['skipview'] = '學生跳過內容結構頁面';
$string['skipviewdesc'] = '默認何時會跳過內容結構頁面';
$string['skipview_help'] = '此設置決定是否內容結構頁面應該被跳過（不顯示）。如果課件只包含一個學習對象，內容結果頁面就總是被跳過�一';
$string['slashargs'] = '警告：此網站關閉了反斜線參數，此對象可能不能正常工作�一';
$string['stagesize'] = '頁框/視窗大小';
$string['stagesize_help'] = '這兩個設置用來限定學習對象的框架/窗口的高度和寬度�一';
$string['started'] = '開始';
$string['status'] = '狀態';
$string['statusbar'] = '顯示狀態列';
$string['student_response'] = '回答';
$string['suspended'] = '中止';
$string['syntax'] = '語法錯誤';
$string['tag_error'] = '內容為{$a->value}的({$a->tag})是不知名的標籤';
$string['time'] = '時間';
$string['timerestrict'] = '課件的有效日期';
$string['title'] = '標題';
$string['toc'] = '目錄';
$string['toolbar'] = '顯示工具列';
$string['too_many_attributes'] = '標籤{$a->tag} 太多屬性了';
$string['too_many_children'] = '標籤{$a->tag} 太多子標籤';
$string['totaltime'] = '時間';
$string['trackingloose'] = '注意：這個課程包的學習追蹤資料將會遺失。';
$string['type'] = '類型';
$string['typeexternal'] = '外部 SCORM manife一';
$string['typeimsrepository'] = '本地 IMS 內容容器';
$string['typelocal'] = '上傳的課件';
$string['typelocalsync'] = '下載的課件';
$string['unziperror'] = '課程包解壓縮時發現一個錯誤';
$string['updatefreq'] = '自動更新頻率';
$string['updatefreqdesc'] = '默認的自動更新頻率';
$string['updatefreq_help'] = '自動下載和更新外部課件';
$string['validateascorm'] = '合法的SCORM包裹';
$string['validation'] = '檢驗結果';
$string['validationtype'] = '此偏好在設定正式版的SCORM所使用的DOMXML函式庫。如果您不清楚，就保留原來的選項。';
$string['value'] = '值';
$string['versionwarning'] = '{$a->tag}標籤出現警告:現存版本比1.3還舊，';
$string['viewallreports'] = '檢視{$a}次的使用報告';
$string['viewalluserreports'] = '檢視{$a}位用戶的報告';
$string['whatgrade'] = '使用評分';
$string['whatgradedesc'] = '默認的多次學習評分策略';
$string['whatgrade_help'] = '如果允許多次答題，那麼此設置決定是將最高分、平均分、第一次得分還是最後一次完成的得分記入成績單。

對多次答題的處理

* 開始新試答的選項是一個復選框，它在內容結構頁的進入按鈕上面。因此，如果您想允許多次答題的話，一定要允許用戶訪問此頁。
* 有些scorm包能智能處理新試答，有些則不能。這意味著如果學習者重新進入一個已有的試答，當該SCORM沒有避免舊試答被覆蓋的邏輯時，它們就可能被覆蓋，哪怕這些試答已經“完成”或者“通過”。
* “強制完成”、“強制新試答”和“結束試答後鎖定”三個設置提供了進一步的多次答題管理功能�一';
$string['width'] = '寬度';
$string['window'] = '視窗';
$string['zlibwarning'] = '警告：此網站啟用了 PHP Zlib 壓縮。在某些瀏覽器中，用戶打開 SCORM 對象時可能會遇到問題�一';
