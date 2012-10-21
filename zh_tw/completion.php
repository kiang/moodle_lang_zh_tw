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
 * Strings for component 'completion', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = '完成的成績';
$string['activities'] = '活動';
$string['activitiescompleted'] = '活動已完成';
$string['activitycompletion'] = '活動進度';
$string['addcourseprerequisite'] = '先修課程';
$string['afterspecifieddate'] = '指定日期後';
$string['aggregationmethod'] = '匯總方法';
$string['all'] = '全部';
$string['any'] = '任意';
$string['approval'] = '認可';
$string['badautocompletion'] = '當您選擇了自動完成時，您還必須激活至少一個前提（在下面）�一';
$string['completed'] = '已完成';
$string['completedunlocked'] = '完成選項已解鎖';
$string['completedunlockedtext'] = '保存修改後，所有學生的完成狀態都會被刪除。如果您改變了主意，就不要保存此表單�一';
$string['completedwarning'] = '完成選項已鎖定';
$string['completedwarningtext'] = '一個或多個學生（{$a}）已經標記這項活動為完成。改變完成選項會刪除他們的完成狀態記錄，有可能導致混亂。因此，這些選項已被加鎖。除非絕對必要，請不要解鎖�一';
$string['completion'] = '進度跟蹤';
$string['completion-alt-auto-enabled'] = '系統根據條件“{$a}”標記此項為完成';
$string['completion-alt-auto-fail'] = '已完成：{$a}（未及格�一';
$string['completion-alt-auto-n'] = '未完成：{$一';
$string['completion-alt-auto-pass'] = '已完成：{$a}（及格�一';
$string['completion-alt-auto-y'] = '已完成：{$一';
$string['completion-alt-manual-enabled'] = '學生可以手工標記此項為完成：{$一';
$string['completion-alt-manual-n'] = '未完成：{$a}。點擊標記為完成�一';
$string['completion-alt-manual-y'] = '已完成：{$a}。點擊標記為未完成�一';
$string['completion_automatic'] = '當條件都滿足時，將活動標為完成';
$string['completiondisabled'] = '禁用，不在活動設置頁面顯示';
$string['completionenabled'] = '啟用，通過進度和活動設置來控制';
$string['completionexpected'] = '預期完成時間';
$string['completionexpected_help'] = '此選項設置此活動預期的完成日期。這個日期只顯示在活動進度報告中，不會顯示給學生�一';
$string['completion-fail'] = '已完成（未及格�一';
$string['completion_help'] = '如果啟用，將基於給定的條件，人工或自動跟蹤活動的完成狀態。如需要，可以設置多個條件，那麼只有所有條件都滿足時活動才被看作已完成。

在課程頁面，當活動已完成時，活動名後面會有一個標記�一';
$string['completionicons'] = '完成狀態標記框';
$string['completionicons_help'] = '當活動已完成時，活動名後面會有一個標記。

如果顯示的是一個圓點標記，那麼當您覺得已經完成此活動時，就勾選它。（如果您改變了主意，就再點它一下來取消勾選。）此動作並不是必須做的，它只是跟蹤您課程學習進度的一個簡單方法。

如果顯示的是一個空的標記框，那麼當你達到了教師為此活動設定的條件時，它會自動被標記�一';
$string['completion_manual'] = '學生可以手工標記此活動為完成';
$string['completionmenuitem'] = '學習進度';
$string['completion-n'] = '未完成';
$string['completion_none'] = '不標示活動完成狀態';
$string['completionnotenabled'] = '進度跟蹤功能未啟用';
$string['completionnotenabledforcourse'] = '本課程未開啟進度跟蹤功能';
$string['completionnotenabledforsite'] = '本站未開啟進度跟蹤功能';
$string['completiononunenrolment'] = '撤銷選課時記為完成';
$string['completion-pass'] = '已完成（及格�一';
$string['completionsettingslocked'] = '完成設置已鎖定';
$string['completionstartonenrol'] = '在選課時開始跟蹤進度';
$string['completionstartonenrolhelp'] = '在選課後開始跟蹤學生在課程中的進度';
$string['completion-title-manual-n'] = '標記為完成：{$一';
$string['completion-title-manual-y'] = '標記為未完成：{$一';
$string['completionusegrade'] = '必須有成績';
$string['completionusegrade_desc'] = '學生必須獲得成績才能完成此活動';
$string['completionusegrade_help'] = '如果激活，此活動在學生獲得成績時被標記為完成。如果活動設置了及格線，那麼會顯示及格或未及格圖標�一';
$string['completionview'] = '必須瀏覽';
$string['completionview_desc'] = '學生必須瀏覽此活動，才能完成它';
$string['completion-y'] = '已完成';
$string['configenablecompletion'] = '啟用後，您就可以在課程級別使用進度跟蹤功能�一';
$string['confirmselfcompletion'] = '確認自設完成';
$string['coursealreadycompleted'] = '你已經完成了這門課程';
$string['coursecomplete'] = '課程進度';
$string['coursecompleted'] = '課程已完成';
$string['coursegrade'] = '課程成績';
$string['courseprerequisites'] = '先修課程';
$string['coursesavailable'] = '可用的課程';
$string['coursesavailableexplaination'] = '<i>課程完成條件必須先設置，才能出現在此列表中</一';
$string['criteria'] = '條件';
$string['criteriagradenote'] = '請注意，更新這裡的及格線不會改變此課程的及格線�一';
$string['criteriagroup'] = '條件組';
$string['criteriarequiredall'] = '必須滿足以下條件';
$string['criteriarequiredany'] = '必須滿足下列任一條件';
$string['csvdownload'] = '以電子表格格式（UTF-8.csv）下載';
$string['datepassed'] = '通過日期';
$string['days'] = '天數';
$string['daysafterenrolment'] = '選課後天數';
$string['deletecoursecompletiondata'] = '刪除課程進度數據';
$string['durationafterenrolment'] = '選課後期限';
$string['editcoursecompletionsettings'] = '編輯課程進度跟蹤設置';
$string['enablecompletion'] = '啟用進度跟蹤';
$string['enrolmentduration'] = '剩余天數';
$string['err_noactivities'] = '沒有任何活動啟用了完成信息，所以什麼都不能顯示。您可以通過修改活動設置來啟用完成信息�一';
$string['err_nocourses'] = '沒有其它課程啟用課程進度跟蹤功能，所以沒有可顯示的。您可以在課程設置中啟用課程進度跟蹤功能�一';
$string['err_nograde'] = '此課程還未設置及格分數線。要想啟用這種策略，您必須先為此課程創建及格數線�一';
$string['err_noroles'] = '課程中沒有任何角色有“moodle/course:markcomplete”權限。您可以通過給角色分配此權限來啟用這種條件類型�一';
$string['err_nousers'] = '課程或小組中沒有可以顯示完成信息的學生。（缺省情況下，只顯示學生的完成信息，所以沒有學生的話，您就會看到這個錯誤。管理員可以修改此選項。�一';
$string['err_settingslocked'] = '一個或多個學生已經完成了某條件，所以此設置被加鎖。解鎖完成條件設置將刪除全部已有的用戶數據，有可能造成困擾�一';
$string['err_system'] = '進度跟蹤系統內部發生錯誤。（系統管理員可以激活調試信息來查看更多細節。�一';
$string['excelcsvdownload'] = '用Excel兼容格式（.csv）下載';
$string['fraction'] = '分數';
$string['graderequired'] = '及格線';
$string['gradexrequired'] = '至少得 {$一';
$string['inprogress'] = '處理中';
$string['manualcompletionby'] = '可手動標記完成';
$string['manualselfcompletion'] = '手動自設完成';
$string['markcomplete'] = '標為完成';
$string['markedcompleteby'] = '由{$a}標記為完成';
$string['markingyourselfcomplete'] = '標記您自己為完成';
$string['moredetails'] = '更多細節';
$string['nocriteriaset'] = '本課程未設置完成條件';
$string['notcompleted'] = '未完成';
$string['notenroled'] = '您沒有加入此課程';
$string['notyetstarted'] = '還未開始';
$string['overallcriteriaaggregation'] = '所有條件類型匯總';
$string['pending'] = '等待中';
$string['periodpostenrolment'] = '選課後';
$string['prerequisites'] = '先決條件';
$string['prerequisitescompleted'] = '完成先決條件';
$string['progress'] = '學生進度';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->dat一';
$string['recognitionofpriorlearning'] = '確認先修課程';
$string['remainingenroledfortime'] = '保持選課達到規定時間長度';
$string['remainingenroleduntildate'] = '在指定日期前保持選課';
$string['reportpage'] = '顯示從{$a->from}到{$a->to}的用戶（共{$a->total}人）�一';
$string['requiredcriteria'] = '必備條件';
$string['restoringcompletiondata'] = '寫入進度數據';
$string['saved'] = '保存';
$string['seedetails'] = '查看細節';
$string['self'] = '自己';
$string['selfcompletion'] = '自設完成';
$string['showinguser'] = '顯示用戶';
$string['unenrolingfromcourse'] = '從課程注銷選課';
$string['unenrolment'] = '注銷選課';
$string['unit'] = '單元';
$string['unlockcompletion'] = '解鎖完成選項';
$string['unlockcompletiondelete'] = '解鎖完成選項並刪除用戶進度數據';
$string['usealternateselector'] = '使用替代的課程選擇器';
$string['usernotenroled'] = '用戶沒有加入此課程';
$string['viewcoursereport'] = '查看課程報告';
$string['viewingactivity'] = '查看 {$一';
$string['writingcompletiondata'] = '寫入進度數據';
$string['xdays'] = '{$a}天';
$string['yourprogress'] = '您的進度';
