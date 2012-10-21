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
 * Strings for component 'questionnaire', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   questionnaire
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '操作';
$string['additionalinfo'] = '附加信息';
$string['additionalinfo_help'] = '顯示在問卷第一頁頂端的文本。（即，指南，背景信息，等等。�一';
$string['addnewquestion'] = '添加{$a}問題';
$string['addselqtype'] = '添加選中的問題類型';
$string['alignment'] = '對齊單選按鈕';
$string['alignment_help'] = '選擇按鈕對齊類型：垂直對齊（默認）或水平對齊�一';
$string['all'] = '所有';
$string['alreadyfilled'] = '您已經完成我們的問卷調查{$a}，謝謝您的參與�一';
$string['anonymous'] = '匿名的';
$string['average'] = '平均';
$string['averagerank'] = '平均等級';
$string['bodytext'] = '正文文本';
$string['boxesnbexact'] = '恰好{$a}個框�一';
$string['boxesnbmax'] = '最多{$a}個框�一';
$string['boxesnbmin'] = '最少{$a}個框�一';
$string['boxesnbreq'] = '這個問題您必須回答';
$string['by'] = '由';
$string['checkallradiobuttons'] = '請選擇<strong>{$a}</strong>單選按鈕';
$string['checkboxes'] = '復選框';
$string['checkboxes_help'] = '每行填入一個選項，以供用戶選擇其中一個或多個答案�一';
$string['closed'] = '該問卷於{$a}關閉。謝謝�一';
$string['closedate'] = '問卷的結束日期';
$string['closedate_help'] = '您可以在此指定問卷關閉的時間。選中該復選框並指定您想要的關閉日期及時間。
在該日期後，用戶將不能填寫問卷。如果該項未被選中，則問卷永遠不會關閉�一';
$string['confalts'] = '- 或者 - <br />提交的確認頁面';
$string['confirmdelallresp'] = '您確定要刪除該問卷中的所有回答麼�一';
$string['confirmdelgroupresp'] = '您確定要刪除{$a}中的所有回答麼�一';
$string['confirmdelresp'] = '您確定要刪除&nbsp;{$a}&nbsp;的回答嗎�一';
$string['confpage'] = '標題文本';
$string['confpagedesc'] = '用戶完成問卷後顯示的“確認”頁面中的標題（粗體）和正文。（如果存在URL，則其顯示URL的內容。�一';
$string['confpage_help'] = '用戶完成問卷後顯示的“確認”頁面中的標題（粗體）和正文。（如果存在URL，則其優先於確認文本。）如果您保持此項為空，則在完成問卷時，將會顯示默認信息（謝謝您完成該問卷）�一';
$string['contentoptions'] = '問卷創建方式';
$string['couldnotcreatenewsurvey'] = '不能創建新的調查';
$string['couldnotdelresp'] = '不能刪除回答';
$string['createcontent'] = '定義新內容';
$string['createcontent_help'] = '從單選框中選擇問卷建立方式。默認方式是“創建新的問卷”�一';
$string['createnew'] = '創建新的問卷';
$string['crossanalyze'] = '交叉分析';
$string['crosstabulate'] = '交叉制表';
$string['crosstabulation'] = '交叉制表';
$string['date'] = '日期';
$string['dateformatting'] = '使用天/月/年格式，比如1945年3月14日；<strong>14/3/1945</stron一';
$string['date_help'] = '如果您想要回答是正確格式的日期，請使用這種問題類型';
$string['deleteallresponses'] = '刪除所有回答';
$string['deletecurrentquestion'] = '刪除問題{$一';
$string['deletedallgroupresp'] = '刪除在組{a}中的回答';
$string['deletedallresp'] = '刪除所有的回答';
$string['deletedresp'] = '刪除回答';
$string['deleteresp'] = '刪除這個回答';
$string['deletingresp'] = '正在刪除回答';
$string['displaymethod'] = '顯示問題中沒有定義的方法';
$string['download'] = '下載';
$string['downloadtextformat'] = '以文本格式下載';
$string['downloadtextformat_help'] = '該特性允許您將問卷中的所有回答保存到文本文件中（CSV）。
該文件可以在以後被導入到電子表格（例如，MS Excel或Open Office Calc）或者統計軟件中，以進一步處理這些數據�一';
$string['dropdown'] = '下拉框';
$string['dropdown_help'] = '與單選按鈕相比，使用下拉框沒有特別的優勢。
不過下拉框對於較長選項的問題，可以節約屏幕的面積�一';
$string['edit'] = '編輯';
$string['editingquestionnaire'] = '編輯問卷設置';
$string['editquestion'] = '正在編輯{$a}類型問題';
$string['email'] = '電子郵件';
$string['errnewname'] = '抱歉，該名稱已被占用。請選擇一個新名�一';
$string['errorcross'] = '交叉分析錯誤，問題的類型無效�一';
$string['erroropening'] = '打開問卷時發生錯誤�一';
$string['errortable'] = '系統表錯誤';
$string['essaybox'] = '多行文本框';
$string['essaybox_help'] = '這種問題類型將顯示一個x列 y行的純文本框。

如果x,y的值為0（默認值），Moodle的HTML編輯器會按標准的高度和寬度來顯示。（標准的高度和寬度在 課程/用戶的內容和用戶設置中�一';
$string['field'] = '問題{$一';
$string['fieldlength'] = '輸入框的長度';
$string['fieldlength_help'] = '對於**文本框**問題類型，應設置**輸入框長度**和**最大文本長度**。

默認的輸入框長度為20個字符，最大輸入長度為25個字符�一';
$string['grade'] = '提交問卷後的評分';
$string['headingtext'] = '提交確認頁面標題';
$string['horizontal'] = '水平對齊';
$string['id'] = 'ID號';
$string['includechoicecodes'] = '包含選項的代碼';
$string['includechoicetext'] = '包含選項的內容';
$string['incorrectcourseid'] = '課程ID號錯誤';
$string['incorrectmodule'] = '課程模塊的ID號錯誤';
$string['incorrectquestionnaire'] = '調查問題錯誤';
$string['invalidresponse'] = '無效的回答';
$string['invalidresponserecord'] = '無效的回答記錄';
$string['invalidsurveyid'] = '無效的問卷ID號';
$string['kindofratescale'] = '評分量表的類型�一';
$string['kindofratescale_help'] = '請查看Moodle在線文檔幫助';
$string['length'] = '長度';
$string['maxdigitsallowed'] = '最大允許的數字位數';
$string['maxdigitsallowed_help'] = '使用最大數字長度和小數點位數參數，您可以設置數字的位數和小數的位數�一';
$string['maxforcedresponses'] = '強制回答的最大數量';
$string['maxtextlength'] = '文本的最大長度';
$string['minforcedresponses'] = '強制回答的最小數量';
$string['minforcedresponses_help'] = '使用這些參數，強制填寫人必須選擇**最少**和**最多**的選項。如果想強制選擇固定數量的選項，將**最少**和**最多**參數設置為同樣的值。如果只需要最小或者最大值，那就把另一個值空著（默認值**0**）。如果您設置了這些參數（而非默認值**0**），填寫人沒有按要求填寫時，會出現警告。您需要把這些要求通過問卷調查的描述或者問題的文本中向填寫者說明�一';
$string['misconfigured'] = '課程配置錯誤';
$string['missingquestion'] = '您還有未回答的問題';
$string['missingquestions'] = '您還有未回答的問題�一';
$string['modulename'] = '問卷調查';
$string['modulenameplural'] = '問卷調查';
$string['move'] = '移動此問題';
$string['movedn'] = '將問題位置下移';
$string['movehere'] = '將問題移動到此處';
$string['moveup'] = '將問題位置上移';
$string['myresponses'] = '所有您填寫的問卷';
$string['myresponsetitle'] = '我的 {$a} 個回答';
$string['myresults'] = '我的結果';
$string['name'] = '名稱';
$string['next'] = '繼續';
$string['nextpage'] = '下一頁';
$string['noanswer'] = '無回答';
$string['nodata'] = '無數據發布';
$string['noduplicates'] = '無重復選項';
$string['noneinuse'] = '當前暫無問卷內容';
$string['nopublicsurveys'] = '暫無公用調查問卷模板';
$string['noresponsedata'] = '該問題暫沒有回答';
$string['noresponses'] = '無回答';
$string['normal'] = '標准的';
$string['notanumber'] = '<strong>{$a}</strong>的數字不正確';
$string['notapplicable'] = '不適合';
$string['notapplicablecolumn'] = '帶“不適合”選項列';
$string['notavail'] = '此問卷暫時不能使用，請稍後再試�一';
$string['noteligible'] = '您不能參加這個問卷調查';
$string['notemplatesurveys'] = '暫無調查問卷模版';
$string['notopen'] = '該問卷調查到{$a}才開放�一';
$string['num'] = '編號';
$string['numberfloat'] = '您所輸入的數字<strong>{$a->precision}</strong>進行了格式重排或捨入�一';
$string['numberofdecimaldigits'] = '小數的位數<strong>{$a->number}</strong>已使用';
$string['numberscaleitems'] = '評分量表的點數';
$string['numberscaleitems_help'] = '評分量表的點數。通常是3到5個點，默認為：**5**�一';
$string['numeric'] = '數值型';
$string['numeric_help'] = '如果您希望問卷填寫的是一個標准格式的數字，請使用這種問題類型�一';
$string['of'] = '的';
$string['opendate'] = '問卷的開始日期';
$string['opendate_help'] = '您可以在此指定開始問卷調查的時間。選中該復選框並指定您想要的開始日期及時間。在該日期前，用戶不能填寫問卷。如果該項未被選中，則問卷會立即開放�一';
$string['option'] = '選項{$一';
$string['optionalname'] = '問題名稱';
$string['optionalname_help'] = '問題名稱僅用於將回答導出為CSV/Excel格式時。如果您不需要導出到CSV，您根本不用考慮問題名稱。如果您計劃經常將問卷的結果導出為CSV格式，對於問題的命名您有兩個選擇�一';
$string['or'] = '-或一';
$string['order_ascending'] = '遞增順序';
$string['order_default'] = '按默認順序查看';
$string['order_descending'] = '遞減順序';
$string['orderresponses'] = '對回答排序';
$string['orderresponses_help'] = '對於以下四種問題類型，您可以在顯示所有回答時，按回答的數量(平均值)對選項進行排序。

*單選按鈕
*單選下拉列表
*多項選項（復選框）
*量表問題（包括李克特量表）。

在“所有回答”頁面，默認的排序是問卷設計者問題選項的順序。您也可以選擇按遞增或者遞減的順序顯示�一';
$string['osgood'] = '奧斯古德語義差異法';
$string['other'] = '其他�一';
$string['otherempty'] = '如果您選擇該選項，必須在文本框中輸入些文字�一';
$string['overviewnumresplog'] = '回答';
$string['overviewnumresplog1'] = '回答';
$string['overviewnumrespvw'] = '回答';
$string['overviewnumrespvw1'] = '回答';
$string['owner'] = '所有者';
$string['page'] = '頁';
$string['pageof'] = '{$a->totpages}
的{$a->page}頁';
$string['pluginadministration'] = '調查問卷管理';
$string['pluginname'] = '調查問卷';
$string['possibleanswers'] = '問題的選項';
$string['posteddata'] = '向往有提交數據的頁';
$string['preview'] = '這是本問卷的預覽。當您完成預覽後，請點擊本頁面底部的<strong>關閉</strong>按鈕�一';
$string['previewing'] = '正在預覽問卷';
$string['preview_label'] = '預覽';
$string['preview_questionnaire'] = '- 問卷預覽';
$string['previous'] = '向前';
$string['previouspage'] = '前一頁';
$string['print'] = '打印';
$string['printblank'] = '打印空白';
$string['printblanktooltip'] = '在適於打印的窗口打開空白問卷';
$string['printtooltip'] = '在適於打印的窗口打開當前問卷';
$string['private'] = '私有';
$string['public'] = '公用';
$string['qtype'] = '填寫次數限制';
$string['qtypedaily'] = '只能每天填一次';
$string['qtype_help'] = '設置用戶可填寫問卷的次數：一次，每天一次，每周一次，每月一分或者無次數限制（多次）�一';
$string['qtypemonthly'] = '只能每月填一次';
$string['qtypeonce'] = '只能填寫一次';
$string['qtypeunlimited'] = '可多次填寫';
$string['qtypeweekly'] = '只能每周填一次';
$string['questionnaireadministration'] = '調查問卷管理';
$string['questionnairecloses'] = '關閉調查問卷';
$string['questionnaire:copysurveys'] = '復制模版和私有類問卷';
$string['questionnaire:createpublic'] = '創建公用問卷';
$string['questionnaire:createtemplates'] = '創建模版類問卷';
$string['questionnaire:deleteresponses'] = '刪除所有回答';
$string['questionnaire:downloadresponses'] = '導出回答為CSV文件';
$string['questionnaire:editquestions'] = '創建並編輯問題';
$string['questionnaire:manage'] = '創建並編輯問卷';
$string['questionnaireopens'] = '開放調查問卷';
$string['questionnaire:printblank'] = '打印空白問卷';
$string['questionnaire:readallresponseanytime'] = '隨時查看所有的回答';
$string['questionnaire:readallresponses'] = '查看回答小結，包括打開次數';
$string['questionnaire:readownresponses'] = '查看自己的回答';
$string['questionnairereport'] = '調查問卷報告';
$string['questionnaire:submit'] = '完成並提交問卷';
$string['questionnaire:view'] = '查看一個調查問卷';
$string['questionnaire:viewsingleresponse'] = '查看單個完成的問卷';
$string['questionnum'] = '問題編號';
$string['questions'] = '問題';
$string['questiontypes'] = '問題的類型';
$string['questiontypes_help'] = '請查看Moodle在線文檔幫助';
$string['radiobuttons'] = '單選按鈕';
$string['radiobuttons_help'] = '在這種問題類型中，填寫人必須從提供的選項中選項一項�一';
$string['rank'] = '等級';
$string['ratescale'] = '評分量表(1..一';
$string['ratescale_help'] = '請查看Moodle在線文檔幫助';
$string['realm'] = '調查問卷類型';
$string['realm_help'] = '* **調查問卷一共有三種類：**
 * 私有 - 只屬於問卷所在的課程。
 * 模版 - 可被復制和編輯。
 * 公共 - 可在課程間共享�一';
$string['redirecturl'] = '提交問卷之後重定向頁面的URL地址�一';
$string['remove'] = '刪除';
$string['required'] = '是否必須回答';
$string['required_help'] = '如果您選擇***是***，填寫人必須回答這個問題才能提交問卷�一';
$string['requiredparameter'] = '缺少一個必要的參數�一';
$string['reset'] = '重置';
$string['respeligiblerepl'] = '已通過角色重載代替';
$string['respondent'] = '填寫人';
$string['respondenteligible'] = '填寫人資格';
$string['respondenteligibleall'] = '所有的';
$string['respondenteligible_help'] = '設置是否每個人都可以填寫問卷，還是您希望僅由教師或者僅由學生填寫。對於問卷填寫資格選項，可在課程或者活動的級別上進行設置。比如，如果您把調查問卷放在首頁，只想讓教師填寫，那麼您需要讓Moodle知道哪些用戶是教師�一';
$string['respondenteligiblestudents'] = '僅由學生';
$string['respondenteligibleteachers'] = '僅由教師';
$string['respondents'] = '填寫人';
$string['respondenttype'] = '調查問卷類型';
$string['respondenttypeanonymous'] = '匿名';
$string['respondenttypefullname'] = '全名';
$string['respondenttype_help'] = '設置為“全名”將顯示填寫調查的用戶全名。設置為“匿名”可隱藏用戶的標識�一';
$string['response'] = '回答';
$string['responseoptions'] = '填寫問卷選項';
$string['responses'] = '回答';
$string['responseview'] = '學生（角色）查看問卷結果';
$string['responseview_help'] = '您可以設置誰可以查看問卷提交的所有回答（通常是統計表格）�一';
$string['responseviewstudentsalways'] = '可以';
$string['responseviewstudentsnever'] = '不可以';
$string['responseviewstudentswhenanswered'] = '填寫完問卷後可查看';
$string['responseviewstudentswhenclosed'] = '在問卷調查結束之後';
$string['restrictedtoteacher'] = '這些功能只能由教師權限進行編輯';
$string['resume'] = '保存/恢復問卷填寫';
$string['resume_help'] = '是否允許用戶在提交問卷之前保存他們的回答。這樣用戶可以填寫部分問卷，以後再從保存處恢復填寫�一';
$string['resumesurvey'] = '恢復調查問卷';
$string['return'] = '返回';
$string['save'] = '保存';
$string['saveasnew'] = '保存為新問題';
$string['savedprogress'] = '您回答的調查問卷已保存，您可隨時回來繼續填寫問卷。點擊下面{$a}的鏈接。您可能需要輸入用戶名和密碼以便繼續完成問卷�一';
$string['saveeditedquestion'] = '保存問題{$一';
$string['savesettings'] = '保存設置';
$string['section'] = '說明';
$string['sectionbreak'] = '----- 分頁符---一';
$string['sectionbreak_help'] = '----- 分頁符---一';
$string['sectiontext'] = '標簽';
$string['sectiontext_help'] = '這一段介紹系列問題的文字';
$string['selecttheme'] = '為此調查問卷選擇一種主題(css)�一';
$string['sendemail'] = '發送電子郵件';
$string['sendemail_help'] = '每次問卷提交發送一份結果到指定的郵箱。您可以設置多個郵箱接收，郵箱地址之間用逗號隔開。不填則表示不發送郵件�一';
$string['settings'] = '設置';
$string['settingssaved'] = '設置已保存';
$string['strfdate'] = '%d/%m/一';
$string['strfdateformatcsv'] = 'd/m/Y H:i一';
$string['submitoptions'] = '提交問卷的選項';
$string['submitsurvey'] = '提交問卷';
$string['submitted'] = '提交於�一';
$string['subtitle'] = '副標題';
$string['subtitle_help'] = '問卷的副標題。僅在問卷第一頁的標題下面顯示�一';
$string['summary'] = '小結';
$string['surveynotexists'] = '問卷不存在';
$string['surveyowner'] = '您必須是問卷的創建者才能進行該項操作';
$string['surveyresponse'] = '調查問卷的回答';
$string['template'] = '模版';
$string['templatenotviewable'] = '問卷的模版不可查看';
$string['text'] = '問題的內容';
$string['textareacolumns'] = '文本區的寬度';
$string['textareacolumns_help'] = '這種問題類型將顯示一個**x列** **y行**的純文本框。如果x,y的值為0(默認值)，Moodle的HTML編輯器會按標准的高度和寬度來顯示。（標准的高度和寬度在 課程/用戶的內容和用戶設置中�一';
$string['textarearows'] = '文本框的高度';
$string['textbox'] = '文本框';
$string['textbox_help'] = '對於文本框問題類型，應設置輸入框長度和最大文本長度。默認的輸入框長度為20個字符，最大輸入長度為25個字符�一';
$string['textdownloadoptions'] = '文本下載(CSV)的選項';
$string['thank_head'] = '感謝您完成本問卷';
$string['theme'] = '主題';
$string['thismonth'] = '本月';
$string['thisweek'] = '本周';
$string['title'] = '標題';
$string['title_help'] = '問卷的標題，會出現在每頁的頂部。默認的標題就是問卷的名稱，也可修改為您想要的標題�一';
$string['today'] = '今天';
$string['total'] = '小計';
$string['type'] = '問題類型';
$string['undefinedquestiontype'] = '未定義的問題類型�一';
$string['unknown'] = '未知';
$string['unknownaction'] = '未知的問卷動作.一';
$string['url'] = '提交確認頁面的 U一';
$string['url_help'] = '提交問卷之後重定向頁面的URL地址';
$string['usepublic'] = '使用公用問卷';
$string['usetemplate'] = '復制已有的問卷';
$string['vertical'] = '垂直對齊';
$string['view'] = '查看';
$string['viewallresponses'] = '查看所有的回答';
$string['viewallresponses_help'] = '如果問卷調查被設置為 **小組模式**: *可視小組*，或者*分隔小組* 並且當前用戶有訪問所有組的權限，在當前課程中定義了組，那麼用戶可以訪問下拉框中的組。這個下拉框可以讓用戶使用“過濾器”對問卷回答按小組進行分類。如果問卷調查被設置為 **小組模式**: *分隔小組*，那麼沒有訪問所有組權限的用戶(如學生，無權限教師等)只能查看他們所屬小組的回答�一';
$string['viewbyresponse'] = '按回答順序查看';
$string['viewresponses'] = '所有回答({$a一';
$string['viewyourresponses'] = '您填寫的問卷-查看{$一';
$string['warning'] = '警告，遇到了錯誤�一';
$string['wrongdateformat'] = '輸入的日期：<strong>{$a}</strong> 與示例中的格式不符�一';
$string['wrongdaterange'] = '錯誤！年份必須設置在1902-2037之間';
$string['wrongformat'] = '問題存在錯誤:&nbs一';
$string['wrongformats'] = '問題存在錯誤:&nbs一';
$string['yesno'] = '是非';
$string['yesno_help'] = '簡單的是非問題';
