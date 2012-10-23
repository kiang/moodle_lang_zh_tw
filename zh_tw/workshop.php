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
 * Strings for component 'workshop', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = '存取控制';
$string['aggregategrades'] = '重新計算成績';
$string['aggregation'] = '成績彙總';
$string['allocate'] = '分配作業';
$string['allocatedetails'] = '預計：{$a->expected}<br />已繳交：{$a->submitted}<br />待分配：{$a->allocate}';
$string['allocation'] = '分配作業';
$string['allocationdone'] = '分配完成';
$string['allocationerror'] = '分配錯誤';
$string['allsubmissions'] = '所有的作業';
$string['alreadygraded'] = '已評分';
$string['areainstructauthors'] = '作業指示';
$string['areainstructreviewers'] = '評價的指引';
$string['areasubmissionattachment'] = '作業附件';
$string['areasubmissioncontent'] = '作業文字';
$string['assess'] = '評價';
$string['assessedexample'] = '已評價的作業範例';
$string['assessedsubmission'] = '已評價的作業';
$string['assessingexample'] = '評價中的作業範例';
$string['assessingsubmission'] = '評價中的作業';
$string['assessment'] = '評價';
$string['assessmentby'] = '由<a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = '由{$a} 評價';
$string['assessmentbyyourself'] = '您的評價';
$string['assessmentdeleted'] = '評價分配解除';
$string['assessmentend'] = '評價截止時間';
$string['assessmentenddatetime'] = '評價截止日期：{$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a}（評價截止）';
$string['assessmentform'] = '評價表格';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">評價</a> of <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = '參考評價';
$string['assessmentreferenceconflict'] = '您已經為此作業範例提供了一份參考評價，不可能再評價它。';
$string['assessmentreferenceneeded'] = '您必須先為此範例提供一套參考評價。點按「繼續」按鈕開始評價作業。';
$string['assessmentsettings'] = '評價設定';
$string['assessmentstart'] = '評價開始時間';
$string['assessmentstartdatetime'] = '評價開始時間 {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a}（開始評價）';
$string['assessmentweight'] = '評價權重';
$string['assignedassessments'] = '需要評價的作業';
$string['assignedassessmentsnone'] = '您沒有需要評價的作業';
$string['backtoeditform'] = '回到修改表單';
$string['byfullname'] = '由<a href="{$a->url}">{$a->name}</a>';
$string['calculategradinggrades'] = '計算評價成績';
$string['calculategradinggradesdetails'] = '預計：{$a->expected}<br />已計算：{$a->calculated}';
$string['calculatesubmissiongrades'] = '計算作業成績';
$string['calculatesubmissiongradesdetails'] = '預計：{$a->expected}<br />已計算：{$a->calculated}';
$string['chooseuser'] = '選擇使用者...';
$string['clearaggregatedgrades'] = '清除所有已彙總的成績';
$string['clearaggregatedgradesconfirm'] = '您確定要清除已計算的作業成績和評價成績？';
$string['clearaggregatedgrades_help'] = '已彙總的作業成績和評價成績將被重設。您可以在成績核定階段重新計算這些成績。';
$string['clearassessments'] = '清除評價';
$string['clearassessmentsconfirm'] = '您確定要清除所有評價成績？清除後，您不能自己要回這些資訊，必須等評閱人重新評價這分配的作業。';
$string['clearassessments_help'] = '已計算的作業成績和評價成績將被重置。評價表格已填寫的資訊仍然保留，但是所有評閱人必須再次打開評價表格並再次儲存才能讓成績重新計算。';
$string['configexamplesmode'] = '在工作坊的範例評價的預設模式';
$string['configgrade'] = '工作坊預設作業的最高分';
$string['configgradedecimals'] = '顯示成績時小數點後預設顯示的位數。';
$string['configgradinggrade'] = '工作坊評價預設的評價最高分';
$string['configmaxbytes'] = '網站所有工作坊預設的最大上傳檔案大小（受限於課程限制和其它本地設定）';
$string['configstrategy'] = '工作坊的預設評分策略';
$string['createsubmission'] = '繳交';
$string['daysago'] = '{$a} 天以前';
$string['daysleft'] = '剩下 {$a} 天';
$string['daystoday'] = '今天';
$string['daystomorrow'] = '明天';
$string['daysyesterday'] = '昨天';
$string['deadlinesignored'] = '時間限制對您無效';
$string['editassessmentform'] = '編輯評價表';
$string['editassessmentformstrategy'] = '編輯評價表 ({$a})';
$string['editingassessmentform'] = '正在編輯評價表';
$string['editingsubmission'] = '正在編輯作業';
$string['editsubmission'] = '編輯作業';
$string['err_multiplesubmissions'] = '編輯此表單的時候，作業的另一個版本已經被保存。每個使用者只可以提交一次。';
$string['err_removegrademappings'] = '無法刪除未使用的成績對應';
$string['evaluategradeswait'] = '請耐心等待，正在核定評價、計算成績。';
$string['evaluation'] = '成績核定';
$string['evaluationmethod'] = '成績核定方法';
$string['evaluationmethod_help'] = '成績核定方法決定如何計算評價的成績。當前只有一個選項：與最佳評價進行比較。';
$string['example'] = '作業範例';
$string['exampleadd'] = '增加作業範例';
$string['exampleassess'] = '評價作業範例';
$string['exampleassessments'] = '需評價的作業範例';
$string['exampleassesstask'] = '評價範例';
$string['exampleassesstaskdetails'] = '預計：{$a->expected}<br />已評：{$a->assessed}';
$string['examplecomparing'] = '正在比較作業範例的評價';
$string['exampledelete'] = '刪除範例';
$string['exampledeleteconfirm'] = '您確定要刪除下面的作業範例？按「繼續」按鈕將刪除此作業。';
$string['exampleedit'] = '編輯範例';
$string['exampleediting'] = '正在編輯範例';
$string['exampleneedassessed'] = '您必須先評價所有作業範例';
$string['exampleneedsubmission'] = '您必須先提交作業並評價所有作業範例';
$string['examplesbeforeassessment'] = '在提交自己的作業後，範例將生效，而且必須在評價同學的作業之前完成對範例的評價';
$string['examplesbeforesubmission'] = '必須在交作業前完成對範例的評價';
$string['examplesmode'] = '評價範例模式';
$string['examplesubmissions'] = '作業範例';
$string['examplesvoluntary'] = '作業範例的評價是自發性的';
$string['feedbackauthor'] = '給作者回饋';
$string['feedbackby'] = '{$a}的回饋';
$string['feedbackreviewer'] = '給評閱人回饋';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = '給出的分數';
$string['gradecalculated'] = '已計算的作業成績';
$string['gradedecimals'] = '成績的小數位數';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = '成績：{$a->received}/{$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (評價)';
$string['gradeitemsubmission'] = '{$a->workshopname} (作業)';
$string['gradeover'] = '覆蓋作業成績';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = '工作坊的成績報告';
$string['gradinggrade'] = '評價成績';
$string['gradinggradecalculated'] = '已計算的評價成績';
$string['gradinggrade_help'] = '此設定指定了作業評價可能獲得的最高成績。';
$string['gradinggradeof'] = '評價成績（最高分 {$a}）';
$string['gradinggradeover'] = '覆蓋評價成績';
$string['gradingsettings'] = '成績的設定';
$string['iamsure'] = '是的，我確定';
$string['info'] = '資訊';
$string['instructauthors'] = '作業指示';
$string['instructreviewers'] = '評價的指引';
$string['introduction'] = '說明';
$string['latesubmissions'] = '遲交';
$string['latesubmissionsallowed'] = '允許遲交';
$string['latesubmissions_desc'] = '允許截止後仍能繳交';
$string['latesubmissions_help'] = '如果啟用，作者可以在截止日期後或在互評階段提交作業。但不能編輯遲交的作業。';
$string['maxbytes'] = '檔案大小限制';
$string['modulename'] = '工作坊';
$string['modulenameplural'] = '工作坊';
$string['mysubmission'] = '我的作業';
$string['nattachments'] = '最多幾個附件';
$string['noexamples'] = '此工作坊還沒有範例';
$string['noexamplesformready'] = '在上傳作業範例之前您必須先設計評價表格';
$string['nogradeyet'] = '還沒有成績';
$string['nosubmissionfound'] = '沒找到此使用者的作業';
$string['nosubmissions'] = '此工作坊還未收到作業';
$string['notassessed'] = '尚未評價';
$string['nothingtoreview'] = '沒有可評閱的';
$string['notoverridden'] = '不覆蓋';
$string['noworkshops'] = '這個課程中沒有工作坊活動';
$string['noyoursubmission'] = '您還沒有繳交作品';
$string['nullgrade'] = '-';
$string['page-mod-workshop-x'] = '任何工作坊模組頁面';
$string['participant'] = '參與者';
$string['participantrevierof'] = '參與者是誰的評閱人';
$string['participantreviewedby'] = '參與者由誰評閱';
$string['phaseassessment'] = '互評階段';
$string['phaseclosed'] = '關閉';
$string['phaseevaluation'] = '成績核定階段';
$string['phasesetup'] = '設定階段';
$string['phasesubmission'] = '繳交階段';
$string['pluginadministration'] = '工作坊管理';
$string['pluginname'] = '工作坊';
$string['prepareexamples'] = '準備作業範例';
$string['previewassessmentform'] = '預覽';
$string['publishedsubmissions'] = '已發佈的作業';
$string['publishsubmission'] = '發佈作業';
$string['publishsubmission_help'] = '當互工作坊關閉後，其他人仍可以看到已發佈的作業。';
$string['reassess'] = '重新評價';
$string['receivedgrades'] = '收到的分數';
$string['recentassessments'] = '工作坊評價：';
$string['recentsubmissions'] = '工作坊的作業：';
$string['saveandclose'] = '儲存後關閉';
$string['saveandcontinue'] = '儲存並繼續編輯';
$string['saveandpreview'] = '儲存並預覽';
$string['selfassessmentdisabled'] = '停用自評';
$string['someuserswosubmission'] = '至少有一人尚未繳交作業';
$string['sortasc'] = '升冪排序';
$string['sortdesc'] = '降冪排序';
$string['strategy'] = '評分策略';
$string['strategyhaschanged'] = '在編輯表格期間，此互動評價的評分策略已被修改。';
$string['strategy_help'] = '評分策略決定了使用哪個評價表格和給作業評分的方法。這裡有4個選項：

* 累計評分 - 針對指定的觀點給予評論和分數

* 評語 - 針對指定的觀點給予評予，但是不給分數

* 錯誤數 - 針對指定的主張給予評語和「是/否」的評價

* 規準 - 按照設定的標準給予分級的評價';
$string['submission'] = '作業';
$string['submissionattachment'] = '附件';
$string['submissionby'] = '{$a} 的作業';
$string['submissioncontent'] = '作業內容';
$string['submissionend'] = '繳交截止時間';
$string['submissionenddatetime'] = '繳交截止日期：{$-> daydatetime的}（{$ distanceday}）';
$string['submissionendevent'] = '{$a}（繳交截止）';
$string['submissiongrade'] = '作業成績';
$string['submissiongrade_help'] = '此設定指定了繳交的作業可獲得的最高成績。';
$string['submissiongradeof'] = '作業的分數( {$a} 的)';
$string['submissionsettings'] = '繳交作業的設定';
$string['submissionstart'] = '作業開始時間';
$string['submissionstartdatetime'] = '打開提交的{$ A-> daydatetime}（{$ A-> distanceday}）';
$string['submissionstartevent'] = '{$a}（作業開始）';
$string['submissiontitle'] = '作業標題';
$string['subplugintype_workshopallocation'] = '作業分配方法';
$string['subplugintype_workshopallocation_plural'] = '作業分配方法';
$string['subplugintype_workshopeval'] = '成績核定方法';
$string['subplugintype_workshopeval_plural'] = '成績核定方法';
$string['subplugintype_workshopform'] = '評分策略';
$string['subplugintype_workshopform_plural'] = '評分策略';
$string['switchingphase'] = '正在切換階段';
$string['switchphase'] = '切換階段';
$string['switchphase10info'] = '您將切換此工作坊到<strong>設定階段</strong>。在此階段，使用者不能修改作業和評價。教師可利用這個階段修改互動評價的設定、評分策略或評價表格。';
$string['switchphase20info'] = '您將切換此工作坊到<strong>繳交階段</strong>。在此階段學生可以上傳作業（在作業讀取控制日期內，如果設定了的話）。教師可分配同學間互評。';
$string['switchphase30info'] = '您將切換此工作坊到<strong>互評階段</strong>。在這個階段，評閱人可以評價已分配給他們的作業（在評價存取控制日期內，如果已經設定的話）。';
$string['switchphase40info'] = '您將切換此工作坊到<strong>成績核定階段</strong>。 在這個階段，使用者無法修改他們的作業和評價。教師可以使用評分核定工具計算最終成績，並給評閱人回饋。';
$string['switchphase50info'] = '您即將關閉此工作坊。這會使計算過的成績顯示在成績單上。學生們可以查看他們的作業和作業的評價。';
$string['taskassesspeers'] = '評價同學的作業';
$string['taskassesspeersdetails'] = '總數：{$a->total}<br />待評：{$a->todo}';
$string['taskassessself'] = '自我評價';
$string['taskinstructauthors'] = '提供作業指示';
$string['taskinstructreviewers'] = '提供評價的指引';
$string['taskintro'] = '設定工作坊的說明';
$string['tasksubmit'] = '繳交您的作品';
$string['toolbox'] = '工作坊的工具箱';
$string['undersetup'] = '工作坊正在設定中。請等待，直到活動轉入下一階段。';
$string['useexamples'] = '使用範例';
$string['useexamples_desc'] = '提供作業範例做為練習評價用';
$string['useexamples_help'] = '如果啟用，使用者可以試著評價一或多件範例作業，並且把他們的評價與參考評價進行比較。這個成績不計算在評價成績中。';
$string['usepeerassessment'] = '使用同儕互評';
$string['usepeerassessment_desc'] = '學生們可以評價其他人的作業';
$string['usepeerassessment_help'] = '如果啟用，可以分配其他使用者的作業給任意使用者評價。而且使用者除了自己的作業成績外，還會獲得一個評價的成績。';
$string['userdatecreated'] = '繳交時間是 <span>{$a}</span>';
$string['userdatemodified'] = '修改時間是 <span>{$a}</span>';
$string['userplan'] = '工作坊計劃表';
$string['userplan_help'] = '工作坊計劃表列出此活動的所有階段和每個階段的任務。不同顏色高亮顯示的是目前階段，並以勾號表示任務完成。';
$string['useselfassessment'] = '使用自評';
$string['useselfassessment_desc'] = '學生們可以評價他們自己的作業';
$string['useselfassessment_help'] = '如果啟用，使用者自己的作業可能會被分配給自己評價。並且，使用者除了自己的作業成績外，還會獲得一個評價成績。';
$string['weightinfo'] = '權重：{$a}';
$string['withoutsubmission'] = '審閱評閱人未上傳自己的作業';
$string['workshop:allocate'] = '分配作業受審閱';
$string['workshop:editdimensions'] = '編輯評價表格';
$string['workshopfeatures'] = '工作坊特點';
$string['workshop:ignoredeadlines'] = '忽略時間限制';
$string['workshop:manageexamples'] = '管理作業範例';
$string['workshopname'] = '工作坊名稱';
$string['workshop:overridegrades'] = '覆蓋已計算的成績';
$string['workshop:peerassess'] = '同儕互評';
$string['workshop:publishsubmissions'] = '發佈作業';
$string['workshop:submit'] = '繳交';
$string['workshop:switchphase'] = '切換階段';
$string['workshop:view'] = '查看工作坊';
$string['workshop:viewallassessments'] = '查看所有評價';
$string['workshop:viewallsubmissions'] = '查看所有作業';
$string['workshop:viewauthornames'] = '查看作者姓名';
$string['workshop:viewauthorpublished'] = '查看已發佈作業的作者';
$string['workshop:viewpublishedsubmissions'] = '發表的意見書';
$string['workshop:viewreviewernames'] = '查看評閱人姓名';
$string['yourassessment'] = '您的評價';
$string['yoursubmission'] = '您的作業';
