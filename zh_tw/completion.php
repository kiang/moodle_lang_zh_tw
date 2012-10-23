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
$string['activitiescompleted'] = '已經完成活動';
$string['activitycompletion'] = '活動進度';
$string['addcourseprerequisite'] = '先修課程';
$string['afterspecifieddate'] = '指定日期後';
$string['aggregationmethod'] = '彙總方法';
$string['all'] = '全部';
$string['any'] = '任意';
$string['approval'] = '贊同';
$string['badautocompletion'] = '當您選擇了自動完成時，您必續啟動至少一個條件(在下面)。';
$string['completed'] = '已完成';
$string['completedunlocked'] = '完成選項已經解鎖';
$string['completedunlockedtext'] = '儲存修改後，所有學生的完成狀態都會被刪除。如果您改變了主意，就不要儲存此表單。';
$string['completedwarning'] = '完成選項已經鎖定';
$string['completedwarningtext'] = '一位或多位學生（{$a}）已經標記這項活動為完成。改變完成選項會刪除他們的完成狀態紀錄，有可能會導致混亂。因此，這些選項已經被鎖定。除非學隊必要，請不要解鎖。';
$string['completion'] = '追蹤進度';
$string['completion-alt-auto-enabled'] = '系統根據條件"{$a}"標記此項為完成';
$string['completion-alt-auto-fail'] = '已完成：{$a} (不及格)';
$string['completion-alt-auto-n'] = '尚未完成：{$a}';
$string['completion-alt-auto-pass'] = '已經完成：{$a} (及格)';
$string['completion-alt-auto-y'] = '已經完成：{$a}';
$string['completion-alt-manual-enabled'] = '學生可以自己標記此項目為完成：{$a}';
$string['completion-alt-manual-n'] = '未完成：{$a} 。點選標記為完成。';
$string['completion-alt-manual-y'] = '已完成：{$a} 。點選標記為未完成。';
$string['completion_automatic'] = '當條件都滿足時，將活動標記完成';
$string['completiondisabled'] = '停用，不在活動設定頁面顯示';
$string['completionenabled'] = '啟用，透過進度和活動設定來控制';
$string['completionexpected'] = '預計完成時間';
$string['completionexpected_help'] = '此選項用於設定此活動預期的完成日期。這個日期只顯示在活動進度報告中，不會顯示給學生。';
$string['completion-fail'] = '已完成(不及格)';
$string['completion_help'] = '如果啟用，將基於給定的條件，手動或自動追蹤活動的完成狀態。如果需要，可以設定多個條件，那麼只有所有條件都滿足時活動才被看作已完成。

在課程頁面，當活動已完成時，活動名稱後面會具有一個標記。';
$string['completionicons'] = '完成狀態標記框';
$string['completionicons_help'] = '當活動已經完成時，活動名稱後面會有一個標記。

如果顯示的是一個圓圈標記，那麼當您覺得已經完成此活動時，就勾選它。(如果您改變了主意，就再點它一下來取消勾選。)此動作並不是必須做的，它只是追蹤您學習進度的一個簡單方法。

如果顯示的是一個空的標記框，那麼當您達到了教師為此活動設定的條件時，它會自動被標記。';
$string['completion_manual'] = '學生可以手動標記此活動為完成';
$string['completionmenuitem'] = '學習進度';
$string['completion-n'] = '未完成';
$string['completion_none'] = '不標示活動完成狀態';
$string['completionnotenabled'] = '進度追蹤功能尚未啟用';
$string['completionnotenabledforcourse'] = '本課程尚未開啟進度追蹤功能';
$string['completionnotenabledforsite'] = '本站尚未開啟進度追蹤功能';
$string['completiononunenrolment'] = '完成時取消選課';
$string['completion-pass'] = '已經完成(及格)';
$string['completionsettingslocked'] = '完成設定已經鎖定';
$string['completionstartonenrol'] = '在選課時開始追蹤進度';
$string['completionstartonenrolhelp'] = '在選課後開始追蹤學生在課程中的進度';
$string['completion-title-manual-n'] = '標記為完成：{$a}';
$string['completion-title-manual-y'] = '標記為未完成：{$a}';
$string['completionusegrade'] = '必須要有成績';
$string['completionusegrade_desc'] = '學生必須取得成績才能完成此活動';
$string['completionusegrade_help'] = '如果啟動，此活動在學生取得成績時被標記為完成。如果活動設定了及格線，那麼會顯示及格或是不及格的圖示。';
$string['completionview'] = '必須瀏覽';
$string['completionview_desc'] = '學生必須瀏覽此活動，才能完成它';
$string['completion-y'] = '已經完成';
$string['configenablecompletion'] = '啟用後，您就可以在課程等級使用進度追蹤功能。';
$string['confirmselfcompletion'] = '確認後設為完成';
$string['coursealreadycompleted'] = '您已經完成了這門課程';
$string['coursecomplete'] = '課程進度';
$string['coursecompleted'] = '課程已經完成';
$string['coursegrade'] = '課程成績';
$string['courseprerequisites'] = '先修課程';
$string['coursesavailable'] = '可選的課程';
$string['coursesavailableexplaination'] = '<i>課程完成條件必須先設定，才能出現在此列表中</i>';
$string['criteria'] = '條件';
$string['criteriagradenote'] = '請注意，更新這裡的及格線不會改變此課程的及格線。';
$string['criteriagroup'] = '條件組';
$string['criteriarequiredall'] = '必須滿足以下條件';
$string['criteriarequiredany'] = '必須滿足下列任一條件';
$string['csvdownload'] = '以試算表格式（UTF-8.csv）下載';
$string['datepassed'] = '通過日期';
$string['days'] = '天數';
$string['daysafterenrolment'] = '選課後天數';
$string['deletecoursecompletiondata'] = '刪除課程進度資料';
$string['durationafterenrolment'] = '選課後期限';
$string['editcoursecompletionsettings'] = '編輯課程進度追蹤設定';
$string['enablecompletion'] = '啟用進度追蹤';
$string['enrolmentduration'] = '剩下天數';
$string['err_noactivities'] = '沒有任何活動啟用了完成訊息，所以什麼都不能顯示。您可以透過修改活動設定來啟用完成訊息。';
$string['err_nocourses'] = '沒有其他射程啟用課程進度追蹤功能，所以沒有可顯示的。您可以在課程設定中啟用課程進度追蹤功能。';
$string['err_nograde'] = '此課程還尚未設定及格分數線。要想起用這種策略，您必須先為此課程建立及格數線。';
$string['err_noroles'] = '課程中沒有任何角色
有「moodle/course:markcomplete」權限。您可以透過給角色分配此權限來啟用這種條件類型。';
$string['err_nousers'] = '課程或小組中沒有顯示完成訊息的學生。（預設狀況下，只顯示學生的完成訊息，所以沒有學生的話，您就會看到這個錯誤。管理員可以修改此選項。）';
$string['err_settingslocked'] = '一位或多位學生已經完成了某個條件，所以此設定被上鎖。解鎖完成條件設定將刪除全部已經有的使用者數據，有可能會造成困擾。';
$string['err_system'] = '進度追蹤系統內部發生錯誤。(系統管理員可以啟動除錯訊息來瀏覽更多細節。)';
$string['excelcsvdownload'] = '用Excel相容模式(.csv)下載';
$string['fraction'] = '分數';
$string['graderequired'] = '及格線';
$string['gradexrequired'] = '至少得{$a}';
$string['inprogress'] = '處裡中';
$string['manualcompletionby'] = '可手動標記完成';
$string['manualselfcompletion'] = '手動設定完成';
$string['markcomplete'] = '標為完成';
$string['markedcompleteby'] = '由{$a}標記為完成';
$string['markingyourselfcomplete'] = '標記您自己為完成';
$string['moredetails'] = '更多細節';
$string['nocriteriaset'] = '本課程尚未設定完成條件';
$string['notcompleted'] = '未完成';
$string['notenroled'] = '您沒有加入此課程';
$string['notyetstarted'] = '尚未開始';
$string['overallcriteriaaggregation'] = '所有條件類型彙總';
$string['pending'] = '等待中';
$string['periodpostenrolment'] = '選課後';
$string['prerequisites'] = '先決條件';
$string['prerequisitescompleted'] = '完成先決條件';
$string['progress'] = '學生進度';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['recognitionofpriorlearning'] = '確認先修課程';
$string['remainingenroledfortime'] = '保持選課達到規定時間長度';
$string['remainingenroleduntildate'] = '在指定日期之前保留選課';
$string['reportpage'] = '顯示從{$a->from}到{$a->to}的使用者（共{$a->total}人）。';
$string['requiredcriteria'] = '必要條件';
$string['restoringcompletiondata'] = '寫入進度資料';
$string['saved'] = '儲存';
$string['seedetails'] = '瀏覽細節';
$string['self'] = '自己';
$string['selfcompletion'] = '自設完成';
$string['showinguser'] = '顯示使用者';
$string['unenrolingfromcourse'] = '從課程取消選課';
$string['unenrolment'] = '取消選課';
$string['unit'] = '單元';
$string['unlockcompletion'] = '解鎖完成選項';
$string['unlockcompletiondelete'] = '解鎖完成選項並刪除使用者進度資料';
$string['usealternateselector'] = '使用替代的課程選擇棄';
$string['usernotenroled'] = '使用者沒有加入此課程';
$string['viewcoursereport'] = '查看課程報告';
$string['viewingactivity'] = '查看{$a}';
$string['writingcompletiondata'] = '寫入進度資料';
$string['xdays'] = '{$a}天';
$string['yourprogress'] = '您的進度';
