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
 * Strings for component 'assignment', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission'] = '添加提交';
$string['allowdeleting'] = '是否允許學生刪除作業';
$string['allowdeleting_help'] = '<p>如果啟用，在送交老師打成績之前，學生都可以刪除已上傳的檔案。</p>';
$string['allowmaxfiles'] = '允許上傳檔案的最大數目';
$string['allowmaxfiles_help'] = '<p>Maximum number of files each participant may upload,
this number is not shown to students, please write the actual number
of requested files in assignment description.</p>';
$string['allownotes'] = '是否允許加上註解';
$string['allownotes_help'] = '如果啟用，學生可以在一個文本框裡輸入備注，和在線文本作業類似�一';
$string['allowresubmit'] = '是否允許重新繳交';
$string['allowresubmit_help'] = '<p align="center"><b>重新交作業</b></p>

<p>預設情況下，一旦教師對作業評了分，學生就不能重交作業了。</p>

<p>如果開啟這個選項，學生們就可以在作業評分後，重新交作業(交給教師重新評分)。如果教師希望學生能夠以循序漸進的方式把作業做得更好，這個選項就是非常有用的。</p>

<p>很顯然，對於離線作業，這個選項沒什麼用處。</p>
　　';
$string['alreadygraded'] = '您的作業已經評分完畢，不允許重新繳交！';
$string['assignmentdetails'] = '作業詳細說明';
$string['assignment:exportownsubmission'] = '導出自己的作業';
$string['assignment:exportsubmission'] = '導出作業';
$string['assignment:grade'] = '作業評分';
$string['assignmentmail'] = '{$a->teacher} 老師對您的作業 {$a->assignment} 給了意見回饋。

您可以在作業後面看到它。網址如下：

{$a->url}';
$string['assignmentmailhtml'] = '{$a->teacher}老師對您的作業 "<i>{$a->assignment}</i>"給了意見回饋。<br /><br />　您可以在　<a href="{$a->url}">您的作業</a>　後面看到這些回饋。';
$string['assignmentmailsmall'] = '{$a->teacher}對您在\'{$a->assignment}\'提交的作業寫了一些反饋，可以在您的作業的後面看到';
$string['assignmentname'] = '作業名稱';
$string['assignmentsubmission'] = '提交的作業';
$string['assignment:submit'] = '繳交作業';
$string['assignmenttype'] = '作業類型';
$string['assignment:view'] = '檢視作業';
$string['availabledate'] = '開始日期';
$string['cannotdeletefiles'] = '發生錯誤！無法刪除檔案';
$string['cannotviewassignment'] = '您不能查看此作業';
$string['comment'] = '評閱';
$string['commentinline'] = '線上評閱';
$string['commentinline_help'] = '<p align="center"><b>線上寫評語</b></p>
<p>如果選擇了這個選項，打分時原先提交的內容將會被拷貝到填寫迴饋的區域中，這對於評語(使用不同顏色)或直接
修改原文是很有用處的。</p>
　　';
$string['configitemstocount'] = '學生繳交線上作業的計數單位';
$string['configmaxbytes'] = '本網站對所有作業的預設最大作業檔案上傳限制。';
$string['configshowrecentsubmissions'] = '在最新活動報告中，所有人都可以看到作業繳交通知。';
$string['confirmdeletefile'] = '您確定要刪除這個檔案嗎？<br /><strong>{$a}</strong>';
$string['coursemisconf'] = '課程配置不正確';
$string['currentgrade'] = '成績單中的當前成績';
$string['deleteallsubmissions'] = '刪除所有作業';
$string['deletefilefailed'] = '檔案刪除失敗。';
$string['description'] = '說明';
$string['downloadall'] = '下載所有作業的zip包';
$string['draft'] = '草稿';
$string['due'] = '作業截止日期';
$string['duedate'] = '截止日期';
$string['duedateno'] = '未過期';
$string['early'] = '{$a} 之前';
$string['editmysubmission'] = '修改繳交的作業';
$string['editthesefiles'] = '編輯這些文件';
$string['editthisfile'] = '更新此文件';
$string['emailstudents'] = '用電子郵件提醒學生';
$string['emailteachermail'] = '{$a->username}已經更新他繳交的"{$a->assignment}"作業

可以在點按下列網址查閱：

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username}已經更新<i>"{$a->assignment}"</i>作業。新的內容可以 <a href="{$a->url}">點按此處</a> 查閱。';
$string['emailteachers'] = '電子郵件通知教師';
$string['emailteachers_help'] = '<p align="center"><b>發送Email通知教師</b></p>

<p>如果開啟，當學生上傳或更新作業時，教師都會收到一封提醒的郵件。</p>

<p>只有有權為這次作業打分的教師才會收到郵件。因此，如果課程使用了獨立小組，則某個小組的教師不會收到其他小組學生繳交作業的通知。</p>

<p>當然對於離線的活動，永遠都不會有郵件通知。</p>
　　';
$string['emptysubmission'] = '您尚未繳交任何作業';
$string['enablenotification'] = '寄發通知郵件';
$string['enablenotification_help'] = '如果啟用，那麼評分後，學生能收到Email通知�一';
$string['errornosubmissions'] = '沒有可下載的作業';
$string['existingfiledeleted'] = '目前的檔案 {$a} 已被刪除。';
$string['failedupdatefeedback'] = '更新使用者 {$a} 的回饋時失敗';
$string['feedback'] = '回饋';
$string['feedbackfromteacher'] = '{$a} 給予的回饋';
$string['feedbackupdated'] = '替 {$a} 個人更新繳交後的回饋';
$string['finalize'] = '已無作業';
$string['finalizeerror'] = '發生錯誤!作業繳交未完成';
$string['graded'] = '已評分';
$string['guestnosubmit'] = '抱歉，訪客不允許上傳作業。在上傳答案前，您須先登入或註冊。';
$string['guestnoupload'] = '抱歉，訪客無上傳權限。';
$string['helpoffline'] = '<p>當作業是在Moodle外完成時，這項功能是非常有用的。它可以在網站的其他地方或者是師生面對面的方式進行。</p><p>學生可以看到作業的描述，但是不能上傳檔案或其他資料。評分功能仍可正常使用，而且學生也會收到評分的通知。<p>';
$string['helponline'] = '<p>這個作業型式要求使用者編輯一份文件，使用一般的編輯工具。教師可以線上評分，甚至在文件中加入註解或修改。</p>
<p>(如果您對舊版的Moodle熟悉的話，這個作業型態和舊的期刊模組處理的事情是相同的。)</p>';
$string['helpupload'] = '<p>這種類型的作業允許每個參與者上傳任何類型的一個或多個文件。它們可以是Word文件，圖片，打包了的網站，或者任何您想讓他們提交的。</p> <p>此類作業也允許您上傳多個反饋文件。反饋文件也可以在作業提交前就上傳，這樣可以給每個參與者不同的文件。</p> <p>參與者們也可以輸入註釋來說明提交的文件、進度狀況或任何其它文字資訊。</p> <p>此類作業的提交必由參與者手工設定為結束。您可以在任何時間檢查當前的狀態，未完成的作業會被標記為草稿。您可以把任何未打分的作業恢復成草稿的狀態。</p>';
$string['helpuploadsingle'] = '<p>這個作業型態允許每個參與者上傳任何檔案類型的單一檔案。</p> <p>也許是一份Word文書處理文件，或者一張圖，一個壓縮成的網站，或您要求他們繳交的任何資料。</p>';
$string['hideintro'] = '在開始日期前隱藏作業說明';
$string['hideintro_help'] = '如果啟用，在“開放時間”未到時，會隱藏作業描述，只顯示作業名�一';
$string['invalidassignment'] = '作業無效';
$string['invalidfileandsubmissionid'] = '缺少文件或提交一';
$string['invalidid'] = '作業ID無效';
$string['invalidsubmissionid'] = '提交ID無效';
$string['invalidtype'] = '作業類型無效';
$string['invaliduserid'] = '無效的用戶一';
$string['itemstocount'] = '計算';
$string['lastgrade'] = '最後評分';
$string['late'] = '{$a}之後';
$string['maximumgrade'] = '最高得分';
$string['maximumsize'] = '檔案大小限制';
$string['maxpublishstate'] = '截止時間之前博客的最大可見范圍';
$string['messageprovider:assignment_updates'] = '作業通知';
$string['modulename'] = '作業 (2.2)';
$string['modulename_help'] = '<p><img alt="" src="<?php echo $CFG->wwwroot?>/mod/assignment/icon.gif" />&nbsp;<b>作業</b></p>
<div class="indent">
<p>作業模組允許教師分配任務給學生，讓學生準備一份(任意格式的)電子文檔，並上傳到伺服器上。</p>
<p>常見的作業形式包括論文、試題和報告等等。</p>
<p>這個模組包括了計分功能。</p>
</div>
　　';
$string['modulenameplural'] = '作業';
$string['newsubmissions'] = '作業已繳交';
$string['noassignments'] = '尚未有作業';
$string['noattempts'] = '尚未有任何嘗試';
$string['noblogs'] = '您沒有要提交的博客文章�一';
$string['nofiles'] = '沒有上傳任何檔案';
$string['nofilesyet'] = '還沒有上傳檔案';
$string['nomoresubmissions'] = '不允許進一步繳交作業';
$string['norequiregrading'] = '沒有需要評分的作業';
$string['nosubmisson'] = '沒有已提交的作業';
$string['notavailableyet'] = '很抱歉，此作業還未啟動。<br />下面的日期後，將會在此顯示作業說明。';
$string['notes'] = '註釋';
$string['notesempty'] = '沒有資料';
$string['notesupdateerror'] = '更新註釋時發生錯誤';
$string['notgradedyet'] = '尚未評分';
$string['notsubmittedyet'] = '尚未繳交作業';
$string['onceassignmentsent'] = '一旦作業交出去評分，您將無法再刪除或附加檔案。您確定要繼續嗎？';
$string['operation'] = '操作';
$string['optionalsettings'] = '可選設置';
$string['overwritewarning'] = '警告: 如果重新再上傳作業，將會取代您已經繳交的作業';
$string['page-mod-assignment-submissions'] = '作業模塊評分頁';
$string['page-mod-assignment-view'] = '作業模塊主頁';
$string['page-mod-assignment-x'] = '任意作業模塊頁面';
$string['pagesize'] = '每頁顯示的作業份數';
$string['pluginadministration'] = '作業管理';
$string['pluginname'] = '作業 (2.2)';
$string['popupinnewwindow'] = '在彈出窗口中打開';
$string['preventlate'] = '禁止遲交';
$string['quickgrade'] = '允許快速評分';
$string['quickgrade_help'] = '<p align="center"><b>Quick Grade</b></p>

<p>With quickgrading enabled you can quickly grade multiple assignments on one page.</p>

<p>Just change the grades and comments and use the Save button at the bottom to save
   all your changes for that page at once.</p>

<p>The normal grading buttons on the right still work too in case you need more space.
   Your quickgrading preference is saved and will apply to all assignments in all courses.</p>';
$string['requiregrading'] = '請求評分';
$string['responsefiles'] = '回應的檔案';
$string['reviewed'] = '已檢視的';
$string['saveallfeedback'] = '儲存所有回饋';
$string['selectblog'] = '選擇提交哪篇博客文章';
$string['sendformarking'] = '繳交給老師評分';
$string['showrecentsubmissions'] = '顯示最近的作業';
$string['submission'] = '繳交';
$string['submissiondraft'] = '繳交的草稿';
$string['submissionfeedback'] = '繳交後的回饋';
$string['submissions'] = '繳交';
$string['submissionsaved'] = '您的修改已經儲存';
$string['submissionsnotgraded'] = '{$a}繳交未評分';
$string['submitassignment'] = '請利用本表單繳交作業';
$string['submitedformarking'] = '作業正在等待評分，不能再修改了';
$string['submitformarking'] = '最後繳交作業以評分';
$string['submitted'] = '已繳交';
$string['submittedfiles'] = '繳交的檔案';
$string['subplugintype_assignment'] = '作業類型';
$string['subplugintype_assignment_plural'] = '作業類型';
$string['trackdrafts'] = '是否發送評分請求';
$string['trackdrafts_help'] = '通過“發送評分請求”按鈕，學生可以通知教師他們已經完成了作業。如需要，教師可以將作業恢復到草稿狀態（比如，該作業還需進一步完善）�一';
$string['typeblog'] = '博客發布';
$string['typeoffline'] = '離線作業';
$string['typeonline'] = '線上文字';
$string['typeupload'] = '進階檔案上傳';
$string['typeuploadsingle'] = '上傳一個檔案';
$string['unfinalize'] = '還原為草稿';
$string['unfinalizeerror'] = '發生錯誤！此作業無法回復為草稿';
$string['unfinalize_help'] = '恢復到草稿狀態使學生可以對作業做進一步更新';
$string['uploadafile'] = '上傳一個文件';
$string['uploadbadname'] = '檔案名稱包含奇怪的字元，無法上傳';
$string['uploadedfiles'] = '已上傳的檔案';
$string['uploaderror'] = '在伺服器儲存檔案時發生錯誤';
$string['uploadfailnoupdate'] = '檔案上傳成功，但是無法更新作業繳交資料！';
$string['uploadfiles'] = '上傳文件';
$string['uploadfiletoobig'] = '抱歉，檔案太大（不能超過 {$a} 位元組）';
$string['uploadnofilefound'] = '沒有發現任何檔案―您能確定已選取了一個檔案來上傳嗎?';
$string['uploadnotregistered'] = '{$a} 上傳成功，但是尚未登記！';
$string['uploadsuccess'] = '上傳 {$a} 成功';
$string['usermisconf'] = '用戶配置錯誤';
$string['usernosubmit'] = '抱歉，您沒有提交作業的權限�一';
$string['viewfeedback'] = '檢視作業成績和回饋';
$string['viewmysubmission'] = '查看我提交的作業';
$string['viewsubmissions'] = '檢視 {$a} 份已繳交的作業';
$string['yoursubmission'] = '個人已繳交的作業';
