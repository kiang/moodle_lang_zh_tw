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
 * Strings for component 'question', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '動作';
$string['addanotherhint'] = '再增加一個提示';
$string['addcategory'] = '新建類別';
$string['adminreport'] = '報告試題資料庫中，可能產生的問題。';
$string['answer'] = '答案';
$string['answersaved'] = '答案已保存';
$string['attemptfinished'] = '答題結束';
$string['attemptfinishedsubmitting'] = '正在完成提交中�一';
$string['availableq'] = '可以使用�一';
$string['badbase'] = '**前的基數無效：{$a}一';
$string['behaviour'] = '行為';
$string['behaviourbeingused'] = '使用“{$a}”行為';
$string['broken'] = '這是"失效的連結"，它指向一個不存在的檔案。';
$string['byandon'] = '由 <em>{$a->user}</em> 在 <em>{$a->time}</em>';
$string['cannotcopybackup'] = '無法復制備份文件';
$string['cannotcreate'] = '無法在question_attempts表中建新項';
$string['cannotcreatepath'] = '無法建立路徑：{$一';
$string['cannotdeletebehaviourinuse'] = '您不能刪除行為“{$a}”。有試卷正使用它�一';
$string['cannotdeletecate'] = '這是本場景的缺省類別，您不能刪除它�一';
$string['cannotdeletemissingbehaviour'] = '您不能卸載“丟失的行為”。系統依賴它�一';
$string['cannotdeletemissingqtype'] = '您不能刪除缺失的題目類型。這是系統所需要的�一';
$string['cannotdeleteneededbehaviour'] = '不能刪除題目行為“{$a}”。有其它已安裝的行為依賴它�一';
$string['cannotdeleteqtypeinuse'] = '您不能刪除題目類型\'“{$a}”。題庫中有這種類型的題目�一';
$string['cannotdeleteqtypeneeded'] = '您不能刪除題目類型\'“{$a}”。還有其他已經安裝的題目類型依賴於它�一';
$string['cannotenable'] = '祝能直接建立題目類型{$一';
$string['cannotenablebehaviour'] = '不能直接使用題目行為“{$a}”。它只能內部使用�一';
$string['cannotfindcate'] = '找不到類別記錄';
$string['cannotfindquestionfile'] = '在zip中找不到題目數據文件';
$string['cannotgetdsfordependent'] = '一個依賴於數據集的題目找不到對應的數據集！（題目：{$a->id}，數據集：{$a->item}�一';
$string['cannotgetdsforquestion'] = '一個計算類題目找不到對應的數據集！（題目：{$a}�一';
$string['cannothidequestion'] = '不能隱藏題目';
$string['cannotimportformat'] = '抱歉，這種格式的導入功能還未實現�一';
$string['cannotinsertquestion'] = '無法插入新題目�一';
$string['cannotinsertquestioncatecontext'] = '無法插入新題目類別{$a->cat}，非法的場景{$a->ct一';
$string['cannotloadquestion'] = '無法加載題目';
$string['cannotmovequestion'] = '此腳本不能移動與其它地方的文件有關聯的題目�一';
$string['cannotopenforwriting'] = '不能以寫模式打開：{$一';
$string['cannotpreview'] = '您不能預覽這些題目�一';
$string['cannotread'] = '無法讀取匯入的檔案(或許檔案是空的)';
$string['cannotretrieveqcat'] = '無法獲取題目類別';
$string['cannotunhidequestion'] = '取消題目隱藏失敗�一';
$string['cannotunzip'] = '不能解壓縮zip文件�一';
$string['cannotwriteto'] = '無法把導出的題目寫入{$一';
$string['category'] = '類別';
$string['categorycurrent'] = '目前類別';
$string['categorycurrentuse'] = '使用此類別';
$string['categorydoesnotexist'] = '這個類別不存在';
$string['categoryinfo'] = '類別信息';
$string['categorymove'] = '類別\'{$a->name}\'中有{$a->count}個題目(有些題目可能比較舊、被隱藏，正被存在的測驗使用)。<br />請選擇另一個類別來轉移它們。';
$string['categorymoveto'] = '儲存在類別中';
$string['categorynamecantbeblank'] = '類別名不能為空�一';
$string['changeoptions'] = '修改選項';
$string['changepublishstatuscat'] = '{$a->coursename}課程}中<a href="{$a->caturl}">類別“{$a->name}”</a>可以將共享狀態從<strong>{$a->changefrom}</strong>改變為<strong>{$a->changeto}</strong>。';
$string['check'] = '檢查';
$string['chooseqtypetoadd'] = '選擇要添加哪種類型的題目';
$string['clearwrongparts'] = '清空不正確的答案';
$string['clicktoflag'] = '點擊標記此題目';
$string['clicktounflag'] = '點擊取消此題目的標記';
$string['closepreview'] = '關閉預覽';
$string['combinedfeedback'] = '組合反饋';
$string['comment'] = '評語';
$string['commented'] = '評論：{$一';
$string['commentormark'] = '寫評語或修改得分';
$string['comments'] = '評論';
$string['commentx'] = '評語：{$一';
$string['complete'] = '完成';
$string['contexterror'] = '如果您正在將一個類別移動到其它場景，您不應該來到這裡�一';
$string['copy'] = '從{$a}複製並更改變連結。';
$string['correct'] = '正確';
$string['correctfeedback'] = '給任意正確答案';
$string['created'] = '已建立';
$string['createdby'] = '創建者';
$string['createdmodifiedheader'] = '已建立/最後儲存的';
$string['createnewquestion'] = '新建一道題.一';
$string['cwrqpfs'] = '從次分類的題庫中隨機選取題目';
$string['cwrqpfsinfo'] = '<p>在升級到 1.9 版後，我們將試題類別分離到不同的情境中。一些試題類別和試題將必須改變共享狀態。在測驗中如果存在從共享和不共享類別中選擇的一個或多個隨機試題這種情況，這種情況很少發生。而常發生在子類別和一個或多個子類別中有與父類別共享狀態不同時。</一';
$string['cwrqpfsnoprob'] = '您的網站沒有題目類別受到“隨機題目從子類別中選擇題目”問題的影響�一';
$string['decimalplacesingrades'] = '成績中小數點後位數';
$string['defaultfor'] = '預設{$a}';
$string['defaultinfofor'] = '課程：{$a}所分享的試題類別。';
$string['defaultmark'] = '缺省分數';
$string['deletebehaviourareyousure'] = '刪除行為{$a}：您確信�一';
$string['deletebehaviourareyousuremessage'] = '您將完全刪除題目行為“{$a}”。這會把數據庫中與之有關的所有數據都完全刪除。您確定要繼續嗎�一';
$string['deletecoursecategorywithquestions'] = '題庫中有試題與本課程類別關聯，如果繼續，該試題將刪除。你可以先使用題庫界面移走它們�一';
$string['deleteqtypeareyousure'] = '您確信要刪除題目類型“{$a}�一';
$string['deleteqtypeareyousuremessage'] = '您正要完全刪除題目類型“{$a}”。您確信要卸載它嗎�一';
$string['deletequestioncheck'] = '您非常確定要刪除“{$a}”嗎�一';
$string['deletequestionscheck'] = '您絕對確信您要刪除下列題目嗎？<br /><br />{$一';
$string['deletingbehaviour'] = '正刪除題目行為“{$a}�一';
$string['deletingqtype'] = '正在刪除題目類型“{$a}�一';
$string['didnotmatchanyanswer'] = '[與任何答案都不匹配一';
$string['disabled'] = '停用';
$string['disterror'] = '{$a} 分布引發了故障';
$string['donothing'] = '不要複製或移動檔案或改變連結';
$string['editcategories'] = '編輯類別';
$string['editcategories_help'] = '為了不將所有題目都放在一個大列表中，可以創建類別和子類別來管理它們。

每個類別都有一個場景，決定類別中的題目可以在哪裡使用：

* 活動場景 - 題目只在活動模塊中可用
* 課程場景 - 題目在課程中所有活動模塊中可用
* 課程分類場景 - 題目在指定課程類別中的所有課程和活動模塊中可用
* 系統場景 - 題目在網站中所有的課程和活動中可用

隨機題目也使用類別。它從指定的類別中隨機選擇題目�一';
$string['editcategory'] = '修改分類';
$string['editingcategory'] = '編輯類別';
$string['editingquestion'] = '編輯一道題目';
$string['editquestion'] = '編輯題目';
$string['editquestions'] = '編輯題目';
$string['editthiscategory'] = '編輯此類別';
$string['emptyxml'] = '未知錯誤 - 空的imsmanifest.xml文件';
$string['enabled'] = '啟用';
$string['erroraccessingcontext'] = '無法使用內容';
$string['errordeletingquestionsfromcategory'] = '從類別{$a}中刪除試題時發生錯誤。';
$string['errorduringpost'] = '後處理過程中發生錯誤�一';
$string['errorduringpre'] = '預處理過程中發生錯誤�一';
$string['errorduringproc'] = '處理過程中發生錯誤�一';
$string['errorduringregrade'] = '無法對題目{$a->qid}重新評分，切換到狀況{$a->stateid}�一';
$string['errorfilecannotbecopied'] = '錯誤！不能複製檔案{$a}。';
$string['errorfilecannotbemoved'] = '錯誤！不能移動檔案{$a}。';
$string['errorfileschanged'] = '錯誤！連結到試題的檔案已經被更動了。';
$string['errormanualgradeoutofrange'] = '試題 {$a->name} 的成績 {$a->grade} 不在 0 和 {$a->maxgrade} 之間，得分和評價未保存�一';
$string['errormovingquestions'] = '移動ID為{$a}的題目時出錯�一';
$string['errorpostprocess'] = '後處理過程中出錯�一';
$string['errorpreprocess'] = '預處理過程中出錯�一';
$string['errorprocess'] = '處理過程中出錯�一';
$string['errorprocessingresponses'] = '處理您的回答（{$a}）時發生錯誤。點擊繼續返回剛才的頁面，然後再試一次�一';
$string['errorsavingcomment'] = '向數據庫保存試題 {$a->name} 的評價時出錯';
$string['errorsavingflags'] = '保存標記狀態出錯�一';
$string['errorupdatingattempt'] = '更新數據庫中的試卷 {$a->id} 時出錯�一';
$string['exportcategory'] = '匯出類別';
$string['exportcategory_help'] = '此設置決定導出的題目來自哪個類別。

一些導入格式，例如 GIFT 和 Moodle XML 格式，允許將類別和場景數據包含在導出文件中，這樣在導入時可以重新創建類別（可選）。如果需要此功能，請勾選對應的選擇框�一';
$string['exporterror'] = '導出過程發生錯誤�一';
$string['exportfilename'] = 'quiz';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = '導出題目到文件';
$string['exportquestions_help'] = '　　<p align="center"><b>從類別中導出試題</b></p>
　　
　　<p>這個選項允許您從一個類別中將試題全部導出到一個文字檔案中。</p>
　　
　　<p>注意，很多檔格式都會導致試題的某些資訊丟失，這是因為大多數格式都無法支援Moodle中試題的全部功能。因此當匯出並重新導入試題後，可能它們並不會完全相同。而且有些檔格式是不支持匯出的。</p>

<p>我們建議您在一個實際的環境中使用匯出的資料時要對其進行檢查。</p>';
$string['feedback'] = '反饋';
$string['filecantmovefrom'] = '題目文件不能被移動，這是因為您在源位置沒有刪除文件的權限�一';
$string['filecantmoveto'] = '題目文件不能被移動或拷貝，這是因為您沒有在目的位置新建文件的權限�一';
$string['fileformat'] = '文件格式';
$string['filesareacourse'] = '課程檔案區';
$string['filesareasite'] = '網站檔案區';
$string['filestomove'] = '移動/複製檔案至 {$a}？';
$string['fillincorrect'] = '填入正確答案';
$string['flagged'] = '已標記';
$string['flagthisquestion'] = '標記此題';
$string['formquestionnotinids'] = '表單包含不在questionids中的題目';
$string['fractionsnomax'] = '答案之一的成績應該要設定為100%。';
$string['generalfeedback'] = '通用反饋';
$string['generalfeedback_help'] = '通用反饋會在答題後顯示給學生。與反饋不同，後者隨題目類型和學生答案的不同而變化，而前者對所有學生都是一樣的。

您可以通過通用反饋提供一些背景給學生，比如此題是考查什麼知識點的；或者通過鏈接告訴他們更多信息，供他們不理解題目時參考�一';
$string['getcategoryfromfile'] = '從檔案中得到類別名稱';
$string['getcontextfromfile'] = '從檔案中得到內文';
$string['hidden'] = '隱藏';
$string['hintn'] = '提示{n一';
$string['hinttext'] = '提示內容';
$string['howquestionsbehave'] = '題目行為';
$string['howquestionsbehave_help'] = '學生可以和此測驗中的題目有多種交互方式。例如，您可能希望學生輸入每道題的答案後再提交整個測驗，然後才評分和顯示反饋。那麼就應該用“延遲反饋”模式。再比如，您可能希望學生在答題過程中每題都提交一下，並獲得立即的反饋；如果他們沒有答對，還有機會再次嘗試，但只能得到較低的分數。那麼就應該用“交互式多次嘗試”模式�一';
$string['ignorebroken'] = '忽略已破壞的連結';
$string['importcategory'] = '導入類別';
$string['importcategory_help'] = '此設置決定導入的題目將被歸入哪個類別。

一些導入格式（例如 GIFT 和 Moodle XML 格式）可能會在文件中包含分類和場景數據。如果要利用這些數據，而不是所選的類別，應該勾選相應的選擇框。如果文件指定的類別不存在，將會被自動創建�一';
$string['importerror'] = '導入過程中發生錯誤';
$string['importerrorquestion'] = '導入題目出錯';
$string['importfromcoursefiles'] = '... 或選擇一個課程文件來導入�一';
$string['importfromupload'] = '選擇上傳的文件�一';
$string['importingquestions'] = '從文件中導入 {$a} 道試題';
$string['importparseerror'] = '解析導入文件時發現錯誤。沒能導入任何題目。要導入無錯的題，請重試，並把“遇錯中止”設為“否�一';
$string['importquestions'] = '從文件導入題目';
$string['importquestions_help'] = '此功能可以從文本文件導入不同格式的題目。但請注意，文件必須是UTF-8編碼�一';
$string['importwrongfiletype'] = '您選定的文件類型（{$a->actualtype}）與此次導入使用的格式（{$a->expectedtype}）不匹配�一';
$string['impossiblechar'] = '尋找括號字符時遇到不應該出現的字符 {$一';
$string['includesubcategories'] = '顯示子類別的題目';
$string['incorrect'] = '不正確';
$string['incorrectfeedback'] = '給任意錯誤答案';
$string['information'] = '說明';
$string['invalidanswer'] = '答案不完成';
$string['invalidarg'] = '沒有有效的參數，或服務器配置不正確';
$string['invalidcategoryidforparent'] = '父類別 id 無效�一';
$string['invalidcategoryidtomove'] = '要移動的類別id無效�一';
$string['invalidconfirm'] = '確認字符串不正確';
$string['invalidcontextinhasanyquestions'] = '傳給question_context_has_any_questions的場景無效�一';
$string['invalidpenalty'] = '無效罰分';
$string['invalidwizardpage'] = '有錯，或未指定向導頁面�一';
$string['lastmodifiedby'] = '最後修改人';
$string['linkedfiledoesntexist'] = '連結的檔案 {$a} 不存在';
$string['makechildof'] = '“{$a}”的子文件';
$string['makecopy'] = '克隆一份';
$string['maketoplevelitem'] = '移至頂層';
$string['manualgradeoutofrange'] = '此成績在有效范圍之外�一';
$string['manuallygraded'] = '人工評為{$a->mark}分，評語：{$a->commen一';
$string['mark'] = '得分';
$string['markedoutof'] = '滿分';
$string['markedoutofmax'] = '滿分{$一';
$string['markoutofmax'] = '獲得{$a->max}分中的{$a->mark}分';
$string['marks'] = '得分';
$string['matcherror'] = '成績與成績選項不匹配——此題跳過';
$string['matchgrades'] = '匹配成績';
$string['matchgradeserror'] = '如果不在列表中，出錯';
$string['matchgrades_help'] = '導入的成績必須是此列表的成績之一才有效——100、90、80、75、70、66.666、60、50、40、33.333、30、25、20、16.666、14.2857、12.5、11.111、10、5、0（也包括負值）。如果不是，那麼有兩個選擇：

* 顯示錯誤 - 如果一個題目使用了列表中沒有的分數，那麼將顯示錯誤信息，並且該題目不會被導入
* 使用最接近的成績 - 如果某個分數不在列表中，那麼這個分數就會被改成列表中最接近的值�一';
$string['matchgradesnearest'] = '如果不在列表中，使用最接近的成績';
$string['missingcourseorcmid'] = 'print_question 需要 courseid 或 cm一';
$string['missingcourseorcmidtolink'] = 'get_question_edit_link 需要 courseid 或 cm一';
$string['missingimportantcode'] = '這題型缺少重要的符號：{$a}。';
$string['missingoption'] = '完形題{$a}缺少選項';
$string['modified'] = '最後儲存的';
$string['move'] = '從 {$a} 移動並更改鏈接�一';
$string['movecategory'] = '搬移類別';
$string['movedquestionsandcategories'] = '將題目和題目類別從 {$a->oldplace} 移至 {$a->newplace}�一';
$string['movelinksonly'] = '只變更連結指，而不移動或複製檔案';
$string['moveq'] = '搬移試題';
$string['moveqtoanothercontext'] = '搬移試題至其他context';
$string['moveto'] = '移動到 一';
$string['movingcategory'] = '移動類別';
$string['movingcategoryandfiles'] = '您確定要移動類別“{$a->name}”和所有子類別至“{$a->contextto}”嗎？<br />已經檢測到{$a->urlcount} 個文件與 {$a->fromareaname}中的題目相鏈接。您想要復制或移動它們到 {$a->toareaname} 嗎�一';
$string['movingcategorynofiles'] = '您確定要移動類別“{$a->name}”和所有子類別到“{$a->contextto}”嗎�一';
$string['movingquestions'] = '移動試題和所有檔案';
$string['movingquestionsandfiles'] = '您確定要移動題目“{$a->questions}”到<strong>“{$a->tocontext}”</strong>場景嗎？<br />已經檢測到 <strong>{$a->urlcount}個文件</strong>與{$a->fromareaname}中的題目鏈接。您確定要復制或移動它們到{$a->toareaname}嗎�一';
$string['movingquestionsnofiles'] = '您確定要移動題目“{$a->questions}”到<strong>“{$a->tocontext}”</strong>嗎？<br />在“{$a->fromareaname}”中<strong>沒有任何文件</strong>鏈接到這些題目�一';
$string['needtochoosecat'] = '您需要選擇一個將此題移入的類別，或者點“取消”�一';
$string['nocate'] = '沒有類別{$a}�一';
$string['nopermissionadd'] = '您無權限在此新增試題。';
$string['nopermissionmove'] = '您無權將題目從此處移走。您只能把該題保存在這個類別中，或者將其存為一個新題�一';
$string['noprobs'] = '在試題庫中沒發現問題。';
$string['noquestions'] = '未找到可導出的題。請確認您要導出的類別包含題目�一';
$string['noquestionsinfile'] = '匯入的檔案沒有題目';
$string['noresponse'] = '[未回答一';
$string['notanswered'] = '未回答';
$string['notenoughanswers'] = '此種類型的題目要有至少 {$a} 個答案';
$string['notenoughdatatoeditaquestion'] = '沒有指定題目編號，也沒有類別編號或題型。';
$string['notenoughdatatomovequestions'] = '您需要提供要移動題目的 ID�一';
$string['notflagged'] = '未標記';
$string['notgraded'] = '未評分';
$string['notshown'] = '不顯示';
$string['notyetanswered'] = '還未回答';
$string['notyourpreview'] = '此回顧不屬於您';
$string['novirtualquestiontype'] = '題目類型{$a}沒有虛擬題目類型';
$string['numqas'] = '答題次數';
$string['numquestions'] = '題目數';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} 隱藏一';
$string['options'] = '選項';
$string['page-question-category'] = '題目分類頁面';
$string['page-question-edit'] = '題目編輯頁面';
$string['page-question-export'] = '題目導出頁面';
$string['page-question-import'] = '題目導入頁面';
$string['page-question-x'] = '任意題目頁面';
$string['parent'] = '家長';
$string['parentcategory'] = '父類別';
$string['parentcategory_help'] = '新建類別會被放置在父類別中。“頂級”意味著該類別不屬於任何其它類別。類別場景以粗體顯示。每個場景中至少要有一個類別�一';
$string['parenthesisinproperclose'] = '在 {$a}** 中，** 之前的括號沒有正確結束';
$string['parenthesisinproperstart'] = '在 {$a}** 中，** 之前的括號沒有正確開始';
$string['parsingquestions'] = '從導入文件解析題目�一';
$string['partiallycorrect'] = '部分正確';
$string['partiallycorrectfeedback'] = '給任意部分正確答案';
$string['penaltyfactor'] = '倒扣條件';
$string['penaltyfactor_help'] = '　　<p align="center"><b>扣分因素</b></p>
　　
　　<p>您可以指定每次錯誤的反應都將從最終分數裏扣除多少分。這只對允許學生多次做答的適性模式下的測驗有效。罰分因素應該是0到1之間的數字。扣分因素設若為1，意味著學生必須在第一次就解答正確，才能得到分數(第一次答錯，就會扣光該題全部分數)。扣分因素設若為0，表示絕不扣分，學生可以嘗試任意次，仍能得到該題的滿分。</p>
　　';
$string['penaltyforeachincorrecttry'] = '每次回答錯誤的罰分';
$string['penaltyforeachincorrecttry_help'] = '當您想讓學生可以通過多次答題而獲知正確答案，於是使用“交互式多次嘗試”或“自適應模式”做為題目的行為時，那麼此選項控制錯誤答題罰分多少。

罰分只占題目總分的一定比例。因此，如果題目是3分，罰分是0.3333333，那麼當學生第一次就答對時能獲得3分，第二次才答對能獲得2分，第三次才答對就只能得到1分�一';
$string['permissionedit'] = '編輯試題';
$string['permissionmove'] = '搬移試題';
$string['permissionsaveasnew'] = '儲存為新試題';
$string['permissionto'] = '您有權限做：';
$string['previewquestion'] = '預覽題目：{$一';
$string['published'] = '共享的';
$string['qbehaviourdeletefiles'] = '所有與題目行為“{$a->behaviour}”有關的數據都已從數據庫刪除。要完成刪除（阻止此行為再次自行安裝），您應馬上從服務器刪除這個目錄：{$a->director一';
$string['qtypedeletefiles'] = '與題目類型“{$a->filter}”有關的所有數據都已從數據庫刪除。為了徹底刪除（並阻止此題目類型自己重新安裝），您現在應該在服務器上刪除此目錄：{$a->director一';
$string['qtypeveryshort'] = '型';
$string['questionaffected'] = '<a href="{$a->qurl}">題目“{$a->name}” ({$a->qtype})</a>在此題目類別中，但是正被另一課程“{$a->coursename}”的<a href="{$a->qurl}">測驗“{$a->quizname}”</a>使用�一';
$string['questionbank'] = '題庫';
$string['questionbehaviouradminsetting'] = '題目行為設置';
$string['questionbehavioursdisabled'] = '要禁用的題目行為';
$string['questionbehavioursdisabledexplained'] = '輸入您不希望出現在下拉框中的行為，用半角逗號分隔';
$string['questionbehavioursorder'] = '題目行為順序';
$string['questionbehavioursorderexplained'] = '按您希望在下拉菜單看到的順序輸入各個行為，用半角逗號分隔';
$string['questioncategory'] = '試題類別';
$string['questioncatsfor'] = '{$a}的試題類別';
$string['questiondoesnotexist'] = '這題目不存在';
$string['questionidmismatch'] = '題目 id 不匹配';
$string['questionname'] = '題目名稱';
$string['questionno'] = '題目{$一';
$string['questions'] = '題目';
$string['questionsaveerror'] = '保存題目時出錯 - （{$a}�一';
$string['questionsinuse'] = '（* 標記星號的題目是已經被某些測驗使用的題目。這些題目不會從測驗中刪除，但會從分類列表中刪除。�一';
$string['questionsmovedto'] = '移動到“{$a}”的題目仍在父課程類別中被使用�一';
$string['questionsrescuedfrom'] = '場景{$a}的題目已保存�一';
$string['questionsrescuedfrominfo'] = '即便刪除場景{$a}，這些題目（有些可能被隱藏）仍將被保存。因為仍有一些測驗或其它活動使用它們�一';
$string['questiontext'] = '題干';
$string['questiontype'] = '題目類型';
$string['questionuse'] = '在這活動使用試題';
$string['questionvariant'] = '題目變種';
$string['questionx'] = '題目{$一';
$string['requiresgrading'] = '需要評分';
$string['responsehistory'] = '答題歷史';
$string['restart'] = '重新開始';
$string['restartwiththeseoptions'] = '用這些選項重新開始';
$string['reviewresponse'] = '檢查答案';
$string['rightanswer'] = '標准答案';
$string['saved'] = '保存：{$一';
$string['saveflags'] = '保存這些標記的狀態';
$string['selectacategory'] = '選擇一個類別�一';
$string['selectaqtypefordescription'] = '選擇一個題目類型來查看詳細描述�一';
$string['selectcategoryabove'] = '從上方選擇一個類別';
$string['selectquestionsforbulk'] = '選擇批量操作的題目';
$string['settingsformultipletries'] = '多次嘗試設置';
$string['shareincontext'] = '在{$a}中共享';
$string['showhidden'] = '顯示舊題目';
$string['showmarkandmax'] = '顯示得分和滿分';
$string['showmaxmarkonly'] = '只顯示滿分';
$string['shown'] = '顯示';
$string['shownumpartscorrect'] = '顯示正確答案數';
$string['shownumpartscorrectwhenfinished'] = '題目結束後顯示正確答案數';
$string['showquestiontext'] = '在題目列表中顯示題干';
$string['specificfeedback'] = '特殊反饋';
$string['started'] = '開始';
$string['state'] = '狀態';
$string['step'] = '步驟';
$string['stoponerror'] = '遇錯中止';
$string['stoponerror_help'] = '此設置決定發生錯誤時，是停止導入（這將導致沒有題目被導入），還是忽略所有有錯的題，導入所有有效的題�一';
$string['submissionoutofsequence'] = '訪問順序亂了。在處理測驗題目的時候，請不要點擊後退按鈕�一';
$string['submissionoutofsequencefriendlymessage'] = '您輸入的數據在正常順序之外。這可能是因為您使用了瀏覽器的“後退”或“前進”按鈕。在測驗過程中請不要使用它們。也可能是因為您在頁面加載過程中點擊了什麼。點擊<strong>繼續</strong>可恢復正常�一';
$string['submit'] = '提交';
$string['submitandfinish'] = '提交並結束';
$string['submitted'] = '提交：{$一';
$string['tofilecategory'] = '將類別寫入檔案';
$string['tofilecontext'] = '將內文寫入檔案';
$string['uninstallbehaviour'] = '卸載此題目行為�一';
$string['uninstallqtype'] = '卸載此題目類型�一';
$string['unknown'] = '未知的';
$string['unknownbehaviour'] = '未知行為：{$a}�一';
$string['unknownquestion'] = '未知題目：{$a}�一';
$string['unknownquestioncatregory'] = '未知題目類別：{$a}�一';
$string['unknownquestiontype'] = '不明的題型：{$a}';
$string['unknowntolerance'] = '未知容錯類型 {$一';
$string['unpublished'] = '不共享';
$string['upgradeproblemcategoryloop'] = '在升級題目類別時遇到問題。題目類別樹中存在循環引用，受影響的類別ID有 {$a}�一';
$string['upgradeproblemcouldnotupdatecategory'] = '無法升級題目類別 {$a->name} ({$a->id一';
$string['upgradeproblemunknowncategory'] = '在升級題目類別時遇到問題。類別 {$a->id} 有父類別 {$a->parent}，但該類別已經不存在了。已通過修改父類別糾正了錯誤�一';
$string['whethercorrect'] = '是否正確';
$string['withselected'] = '對所選題目';
$string['wrongprefix'] = '錯誤格式化的名前綴 {$一';
$string['xoutofmax'] = '{$a->mark}（滿分{$a->max}�一';
$string['yougotnright'] = '您已經做對了 {$a->num} 個�一';
$string['youmustselectaqtype'] = '您必須選擇一個題目類型�一';
$string['yourfileshoulddownload'] = '您的匯出檔案應該很快就開始下載，如果沒有動靜，請 <a href="<b>{$a}</b>">點按這裡</a> 手動下載。';
