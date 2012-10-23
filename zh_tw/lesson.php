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
 * Strings for component 'lesson', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   lesson
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = '權限控管';
$string['actionaftercorrectanswer'] = '回答正確後的動作';
$string['actionaftercorrectanswer_help'] = '　　<p align="center"><b>正確答案之後的行為</b></p>
　　
　　<p>一般情況下是跳到問題所指定的頁面，大多數情況下會顯示下一頁。系統會引領學生以符合邏輯的路徑學習此課，從入口開始，在出口結束。</p>
　　
　　<p>課模組還可以以一種<i>卡片</i>的形式來使用，系統會以隨機的方式把資訊和問題顯示給學生。在這種情形下，沒有固定的入口和出口，只有一系列以不固定順序顯示的卡片一張一張地出現。</p>
　　
　　<p>課模組還有兩個<i>卡片</i>行為的變形，其中“顯示未讀頁面”決不會將一個頁面顯示兩遍(無論學生是否正確回答了頁面上的問題)；另一個是“顯示未回答頁面”，這種情況系統會將學生已經讀過但回答錯誤的頁面重新顯示出來。</p>
　　
　　<p>在上述的各種卡片類型的課中，教師可以決定顯示所有的卡片/頁面或者是只(隨機)顯示其中一部分。這由“顯示多少頁(卡片)”選項來決定。</p>
　　';
$string['actions'] = '活動';
$string['activitylink'] = '連結到活動';
$string['activitylink_help'] = '想在教程結束時顯示一個到課程中其它活動的連結，請在下拉列表中選擇該活動。';
$string['activitylinkname'] = '到：{$a}';
$string['addabranchtable'] = '新增分支表';
$string['addanendofbranch'] = '新增分支的結束頁';
$string['addanewpage'] = '增加一新頁';
$string['addaquestionpage'] = '新增試題頁';
$string['addaquestionpagehere'] = '在此新增試題頁';
$string['addbranchtable'] = '增加一內容頁';
$string['addcluster'] = '新增群集';
$string['addedabranchtable'] = '已增加分支表';
$string['addedanendofbranch'] = '已增加分支的結束頁';
$string['addedaquestionpage'] = '已增加試題頁';
$string['addedcluster'] = '已增加的群集';
$string['addedendofcluster'] = '已增加群集的結束頁';
$string['addendofcluster'] = '新增群集的結束頁';
$string['addpage'] = '新增一頁';
$string['anchortitle'] = '主要內容的起始';
$string['and'] = '和';
$string['answer'] = '答案';
$string['answeredcorrectly'] = '答案正確';
$string['answersfornumerical'] = '回答數值性的問題，應該符答最大和最小值。';
$string['arrangebuttonshorizontally'] = '在幻燈片模式中放置水平分支按鈕';
$string['attempt'] = '嘗試：{$a}';
$string['attempts'] = '嘗試';
$string['attemptsdeleted'] = '已刪除嘗試';
$string['attemptsremaining'] = '您還有{$a}次嘗試機會';
$string['available'] = '開始時間';
$string['averagescore'] = '平均分數';
$string['averagetime'] = '平均時間';
$string['branch'] = '內容';
$string['branchtable'] = '分支表';
$string['cancel'] = '取消';
$string['cannotfindanswer'] = '錯誤：無法找到答案。';
$string['cannotfindattempt'] = '錯誤：：無法找到。';
$string['cannotfindessay'] = '錯誤：：無法找到論文題。';
$string['cannotfindfirstgrade'] = '錯誤：：無法找到分數。';
$string['cannotfindfirstpage'] = '錯誤：無法找到第一頁';
$string['cannotfindgrade'] = '錯誤：無法找到分數';
$string['cannotfindnewestgrade'] = '錯誤：無法找到最新分數';
$string['cannotfindnextpage'] = '錯誤：找不到下一頁(在單元學習輩分)';
$string['cannotfindpagerecord'] = '錯誤：找不到頁面紀錄(在添加分支結尾)';
$string['cannotfindpages'] = '錯誤：無法找到學習單元頁面';
$string['cannotfindpagetitle'] = '錯誤：無法找到頁面標題';
$string['cannotfindpreattempt'] = '錯誤：無法找到前一次作答紀錄';
$string['cannotfindrecords'] = '錯誤：無法找到單元學習紀錄';
$string['cannotfindtimer'] = '錯誤：無法找到單元_時間紀錄';
$string['cannotfinduser'] = '錯誤：無法找到用戶';
$string['canretake'] = '{$a}可以重學';
$string['casesensitive'] = '區分大小寫';
$string['casesensitive_help'] = '　　<p align="center"><b>問題選項</b></p>
　　
　　<p>有些問題有一個可選的以核取方塊啟動的選項，這些問題類型和相應的選項含義描述如下。</p>
　　
　　<ol>
　　<li><p><b>單選題</b>單選題有一個被稱為<b>“多選題”</b>。如果選定了“問題選項”核取方塊，則學生就需要選擇出全部正確的答案。可以告訴學生有<b>多少</b>正確答案，也可以不告訴。例如“下列哪位是美國總統?”就沒有告訴學生正確答案的數目，而“請從以下列表中選出兩位美國總統”則告訴了學生正確答案的數目。正確答案的數目在<b>一</b>到題支數目之間。(只有一個答案的多選題和單選題是<b>不同</b>的，因為在多選題中學生可以選擇多個答案而在單選題中不行。)</p></li>
　　
　　<li><p><b>簡答</b>缺省情況下比較答案時會忽略文字大小寫。但如果“問題選項”被夠選，則答案的比較是大小寫敏感的。</p></li>
　　
　　<p>其他的問題類型並不使用“問題選項”。</p>
　　';
$string['checkbranchtable'] = '檢查分支表';
$string['checkedthisone'] = '檢查這一個';
$string['checknavigation'] = '檢查流程';
$string['checkquestion'] = '檢查題目';
$string['classstats'] = '班級統計';
$string['clicktodownload'] = '點按下面連結下載這個檔案。';
$string['clicktopost'] = '點按此處可以把您的成績發送到最高分排行榜上。';
$string['cluster'] = '群集';
$string['clusterjump'] = '在群集中隱藏的問題';
$string['clustertitle'] = '群集';
$string['collapsed'] = '摺疊的';
$string['comments'] = '您的評語';
$string['completed'] = '已完成';
$string['completederror'] = '完成這單元課程';
$string['completethefollowingconditions'] = '您必須在<b>{$a}</b>單元課程中完成下列要求，才能繼續。';
$string['conditionsfordependency'] = '單元要求條件';
$string['configactionaftercorrectanswer'] = '在回答正確之後的預設動作';
$string['configmaxanswers'] = '每頁預設做多幾個答案';
$string['configmaxhighscores'] = '顯示幾個最高分數';
$string['configmediaclose'] = '在彈出視窗上顯示一個關閉按鈕，用以顯示鏈結的媒體檔案';
$string['configmediaheight'] = '設定彈出視窗的高度，用以顯示鏈結的媒體檔案';
$string['configmediawidth'] = '設定彈出視窗的寬度，用以顯示鏈結的媒體檔案';
$string['configslideshowbgcolor'] = '若啟用，設定這幻燈秀的背景顏色';
$string['configslideshowheight'] = '若啟用，設定這幻燈秀的高度';
$string['configslideshowwidth'] = '若啟用，設定這幻燈秀的寬度';
$string['confirmdelete'] = '刪除頁面';
$string['confirmdeletionofthispage'] = '確認刪除這一頁！！';
$string['congratulations'] = '恭喜！單元課程課學習完畢。';
$string['continue'] = '繼續';
$string['continuetoanswer'] = '繼續更改答案';
$string['continuetonextpage'] = '繼續到下一頁';
$string['correctanswerjump'] = '回答正確則跳轉';
$string['correctanswerscore'] = '回答正確的得分';
$string['correctresponse'] = '正確的回應';
$string['credit'] = '學分';
$string['customscoring'] = '自訂評分規則';
$string['customscoring_help'] = '<p align="center"><b>試題配分</b></p>

<p>這個選項您為每一個試題指定一個分數，這個分數可以是正的或者是負的。匯入的試題，若回答正確得 1分，若錯誤則得 0分，
當然在匯入後可以修改此值。</p>';
$string['deadline'] = '截止時間';
$string['defaultessayresponse'] = '您的申論題將由課程教師評分';
$string['deleteallattempts'] = '刪除所有課程的嘗試';
$string['deletedefaults'] = '刪除{$a}預設課程';
$string['deletedpage'] = '刪除此頁';
$string['deleting'] = '刪除中';
$string['deletingpage'] = '刪除頁面： {$a}';
$string['dependencyon'] = '依靠關聯';
$string['dependencyon_help'] = '此設置基於學生在同一課程中其它教程的表現，限制他們對此教程的訪問權。可以使用花費時間、是否完成或「成績高於」的各種組合。';
$string['description'] = '描述';
$string['detailedstats'] = '詳細統計';
$string['didnotanswerquestion'] = '不回答此問題';
$string['didnotreceivecredit'] = '未收到及格證明';
$string['displaydefaultfeedback'] = '顯示預設回饋';
$string['displaydefaultfeedback_help'] = '如果啟用，當某個特定的問題沒有設定反饋內容時，將顯示預設反饋：「此答案正確」和「此答案錯誤」。 ';
$string['displayhighscores'] = '顯示最高分';
$string['displayinleftmenu'] = '顯示在左側選單？';
$string['displayleftif'] = '並且只顯示如果{$a}成績高過：';
$string['displayleftif_help'] = '此設置決定在看到左側菜單之前是否必須先獲得一定的分數。這將強制學生在第一次訪問時必須瀏覽完整個教程。在達到分數線後，他們就可以使用左側菜單進行複習了。';
$string['displayleftmenu'] = '顯示左側選單';
$string['displayleftmenu_help'] = '　　<p align="center"><b>在左側顯示目錄</b></p>
　　
　　<p>開啟此選項後，會顯示此課中頁面(分支表)的列表。問題頁和簇頁缺省情況下不在其中(可以修改問題頁屬性來顯示它)。</p>';
$string['displayofgrade'] = '向學生顯示成績';
$string['displayreview'] = '顯示回顧按鈕';
$string['displayreview_help'] = '　　<p align="center"><b>顯示檢查按鈕</b></p>
　　
　　<p>開啟此選項後，當學生未能正確回答問題時，即顯示一個按鈕並允許學生重來一次。這個功能與論述型題目並不相容，因此如果您使用論述型題目，請設定此選項為<b>否</b>。</p>';
$string['displayscorewithessays'] = '您在自動評分問題中，獲得{$a->score}分(目前最高等級{$a->tempmaxgrade})。
<br>您的{$a->essayquestions}問答題將會被評分，並將在幾天後加入到您的最後成績中。
<br><br>不包含問答題，您目前的分數是{$a->score}，{$a->grade}等級';
$string['displayscorewithoutessays'] = '您的分數是{$a->score}(在{$a->grade}等級)';
$string['edit'] = '編輯';
$string['editingquestionpage'] = '編輯{$a}試題頁面';
$string['editlessonsettings'] = '編輯此課程的設定';
$string['editpage'] = '編輯頁面內容';
$string['editpagecontent'] = '編輯此網頁內容';
$string['email'] = '電子郵件';
$string['emailallgradedessays'] = '寄出所有已評分過的論文題';
$string['emailgradedessays'] = '寄出已評分過的論文題';
$string['emailsuccess'] = 'Email已經成功寄出';
$string['emptypassword'] = '密碼不可以是空白';
$string['endofbranch'] = '分支結束';
$string['endofcluster'] = '群集結束';
$string['endofclustertitle'] = '群集結尾';
$string['endoflesson'] = '課程結束';
$string['enteredthis'] = '進入';
$string['entername'] = '輸入高分清單的別名';
$string['enterpassword'] = '請輸入密碼';
$string['eolstudentoutoftime'] = '注意:您已經用完此課程的時限。如果您回答的時間是在結束時間之後，也許沒有計算到您最後的回答。';
$string['eolstudentoutoftimenoanswers'] = '您沒有回答任何試題。此課程您將得到0分。';
$string['essay'] = '申論題';
$string['essayemailmessage'] = '<p>申論提示:<blockquote>{$a->question}</blockquote></p><p>您的回答:<blockquote><em>{$a->response}</em></blockquote></p><p>{$a->teacher}的評論:<blockquote><em>{$a->comment}</em></blockquote></p><p>您已經收到{$a->outof} 個這個申論問題中的{$a->earned }.</p><p>您這課的分數已經被修改到{$a->newgrade}%.</p>';
$string['essayemailmessage2'] = '<p>問答題：<blockquote>{$a->question}</blockquote></p><p>您的回答：<blockquote><em>{$a->response}</em></blockquote></p><p>評分人評論：<blockquote><em>{$a->comment}</em></blockquote></p><p>此問答題您得到了{$a->earned}分（滿分{$a->outof}）。</p><p>您此教程的成績已經變為{$a->newgrade}%。</p>';
$string['essayemailsubject'] = '問題{$a}的分數';
$string['essays'] = '申論題';
$string['essayscore'] = '申論題分數';
$string['fileformat'] = '檔案格式';
$string['finish'] = '結束';
$string['firstanswershould'] = '第一個答案應跳至"正確的" 頁面';
$string['firstwrong'] = '不幸地，您無法得分，因為您回答得不正確。
您想要繼續猜嗎?純粹只是學習上樂趣(但是沒有任何分數可得)?';
$string['flowcontrol'] = '流程控管';
$string['full'] = '展開的';
$string['general'] = '一般的';
$string['gotoendoflesson'] = '跳到這單元學習的結束';
$string['grade'] = '成績';
$string['gradebetterthan'] = '成績高於';
$string['gradebetterthanerror'] = '得分高於 {$a} %';
$string['gradeessay'] = '為申論題打分 ({$a->notgradedcount} 沒打分，且 {$a->notsentcount} 沒送出)';
$string['gradeis'] = '成績是{$a}';
$string['gradeoptions'] = '成績選項';
$string['handlingofretakes'] = '如何處理重學成績？';
$string['handlingofretakes_help'] = '　　<p align="center"><b>如何處理重學成績</b></p>
　　
　　<p>當允許學生重學此課時，在成績頁面中，可以顯示多次學習此課取得分數的<b>平均分</b>或者是<b>最高分</b>。</p>
　　
　　<p>可以在任何時候改變這個選項。</p>
　　';
$string['havenotgradedyet'] = '尚未評分';
$string['here'] = '這裡';
$string['highscore'] = '最高分';
$string['highscores'] = '高分';
$string['hightime'] = '最長時間';
$string['importcount'] = '匯入{$a}個問題';
$string['importppt'] = '匯入PowerPoint檔';
$string['importppt_help'] = '將PowerPoint 2003製作的幻燈片另存為web頁面，並用zip打包後，用此功能可以將這些頁面匯入到教程中。';
$string['importquestions'] = '匯入試題';
$string['importquestions_help'] = '<p align="center"><b>匯入新試題</b></p>
<p>這個功能於允許您通過表單上傳外部文字檔案，並導入其中的問題。</p>
<p>它可以支援很多檔格式：</p>
<p><b>GIFT格式</b></p>
<ul>
<p>GIFT是Moodle可以用來從文字檔案導入問題的最複雜的格式。它支援單選題、是非題、簡答題、配合題、
數學題及填空題。在一個單獨的文字檔案中可以混合多種類型的題目，並且這種格式還支援整行注釋、問題名稱、
迴饋和百分比權重的計分方法。下面是一個例子:</p>
<pre>
　　Who\'s buried in Grant\'s tomb?~Grant ~Jefferson =no one}
　　
　　Grant is {~buried =entombed ~living} in Grant\'s tomb.
　　
　　Grant is buried in Grant\'s tomb.{FALSE}
　　
　　Who\'s buried in Grant\'s tomb?{=no one =nobody}
　　
　　When was Ulysses S. Grant born?{#1822}
</pre>
　　
<p align="right"><a href="help.php?file=formatgift.html&module=quiz">"GIFT"格式的更多資訊</a></p>
</ul>

<p><b>Aiken格式</b></p>
<ul>
<p>Aiken格式通常用來編寫單選題，它很簡單也易於讀懂。下面就是這個格式的例子:</p>
<pre>
　What is the purpose of first aid?
　A. To save life, prevent further injury, preserve good health
　B. To provide medical treatment to any injured or wounded person
　C. To prevent further injury
　D. To aid victims who may be seeking help
　ANSWER: A
</pre>
　　
<p align="right"><a href="help.php?file=formataiken.html&module=quiz">"Aiken"格式的更多資訊</a></p>
</ul>
　　
<p><b>Missing Word</b></p>
<ul>
<p>這個格式只支援單選題，答案之間以波浪號(~)分隔，正確答案則以等號為首碼(=)。例子如下:</p>
　　
<blockquote>
    As soon as we begin to explore our body parts as infants
　　we become students of {=anatomy and physiology ~reflexology
　　~science ~experiment}, and in a sense we remain students for life.
</blockquote>
　　
<p align="right"><a href="help.php?file=formatmissingword.html&module=quiz">"Missing Word"格式的更多資訊</a></p>
</ul>
　　
<p><b>AON</b></p>
<ul>
<p>這個格式在多數情況下和Missing Word格式相同，但在導入後，所有簡單題都會被轉為匹配題。</p>
<p>此外，多個答案在導入的過程中其順序會被打亂。</p>
<p>它以一個開發了多種測驗功能的組織命名。</p>
</ul>
　　
<p><b>Blackboard</b></p>
<ul>
<p>這個模組可以導入以Blackboard的導出格式保存的問題。要使用它，PHP必須具備XML處理函數。</p>
　　
<p align="right"><a href="help.php?file=formatblackboard.html&module=quiz">"Blackboard"格式的更多資訊</a></p>
</ul>
　　
<p><b>Course Test Manager</b></p>
<ul>
<p>這個模組可以引入Course Test Manager題庫中的問題。由於題庫保存於Micorsoft Access資料庫中，
它對於訪問題庫的方式特別是Moodle運行在Windows還是Linux伺服器上有比較強的依賴性。</p>
<p>在Windows上，它允許您象上傳其他檔一樣上傳Access資料庫。</p>
<p>在Linux上，在您的網路上必須有一台安裝了Course Test Manager資料庫的Windows電腦，並通過ODBC Socket Server
以XML格式將數據傳到Linux伺服器上。</p>
<p>在使用此功能導入前請仔細閱讀完整的文檔。</p>
　　
<p align="right"><a href="help.php?file=formatctm.html&module=quiz">"CTM"格式的更多資訊</a></p>
</ul>
　　
<p><b>自行定義</b></p>
<ul>
<p>如果您希望以您自己的格式導入問題，請在“mod/quiz/format/custom.php”檔中實現它。</p>

<p>需要編寫的新代碼並不多——只需從給定的文字中分析出試題就可以了。</p>
　　
<p align="right"><a href="help.php?file=formatcustom.html&module=quiz">"自定義"格式的更多資訊</a></p>
</ul>
　　
<p>將來還會有更多的格式，包括WebCT、IMS QTI和任何其他Moodle用戶可以貢獻的格式!</p>
　　';
$string['insertedpage'] = '插入頁面';
$string['invalidfile'] = '無效文件';
$string['invalidid'] = '沒有課程模組ID或教程ID傳入';
$string['invalidlessonid'] = '教程ID不正確';
$string['invalidpageid'] = '無效頁面ID';
$string['jump'] = '跳轉';
$string['jumps'] = '跳轉';
$string['jumps_help'] = '　　<p align="center"><b>“跳轉到”鏈結</b></p>
　　
　　<p>每一個(問題的)答案或(分支頁)的描述都有一個“跳轉到”鏈結。當選擇了一個答案，系統會顯示它的回應資訊，之後則顯示“跳轉到”鏈結所指定的內容。這個鏈結可以是相對的也可以是絕對的。相對鏈結包括<b>本頁</b>和<b>下一頁</b>，<b>本頁</b>表示學生會再次看到當前頁，而<b>下一頁</b>則顯示邏輯順序上的下一頁。絕對鏈結是通過選擇頁面的<b>標題</b>來確定的。</p>
　　<p>用戶應當注意在使用(相對的)<b>下一頁</b>鏈結時，頁面的移動將會導致顯示不同的頁面。而在“跳轉到”鏈結中使用頁面<b>名稱</b>則無論是否移動頁面，都會顯示同一頁。</p>
　　<p>特殊跳轉</p>
　　<p>分支中未讀問題</p>
　　<p>這將跳轉到當前分支表和課程結束頁或分支結束頁之間的任意一個未(被學生)讀的頁面上。</p>
　　
　　<p>分支內的隨機問題</p>
　　<p>跳轉到當前分支表和課程結束頁或分支結束頁之間隨機選定的一個問題上。如果學生已經閱讀了該頁且課程允許的嘗試次數大於1，則學生獲得再次回答該問題的機會。如果課程允許的嘗試次數設定為1，則該問題會被忽略並重新選擇一個問題。</p>
　　
　　<p>隨機的分支表</p>
　　<p>這將跳轉到當前分支表和課程結束頁或分支結束頁之間隨機選定的分支表上。</p>';
$string['jumpsto'] = '跳轉到<em>{$a}</em>';
$string['leftduringtimed'] = '您中斷了計時課程。<br>請按"繼續"重新啟動';
$string['leftduringtimednoretake'] = '您中斷了計時課程，而且<br>不允許您重新繼續這個課程。';
$string['lessonattempted'] = '課程已經嘗試的';
$string['lessonclosed'] = '此課程已於{$a}關閉';
$string['lessoncloses'] = '課程關閉';
$string['lessoncloseson'] = '在{$a} 課程關閉';
$string['lesson:edit'] = '編輯課程活動';
$string['lessonformating'] = '課程格式';
$string['lesson:manage'] = '管理課程活動';
$string['lessonmenu'] = '課程選單';
$string['lessonnotready'] = '這個課程還沒開始，請與{$a}聯繫。';
$string['lessonnotready2'] = '此教程還沒準備。';
$string['lessonopen'] = '此課程將會於{$a}開放';
$string['lessonopens'] = '課程開放';
$string['lessonpagelinkingbroken'] = '找不到第一頁，課程頁面連結應該是出問題了，請聯絡管理員。';
$string['lessonstats'] = '單元課程統計';
$string['linkedmedia'] = '已連結的媒體';
$string['loginfail'] = '登入錯誤，請重試';
$string['lowscore'] = '最低分數';
$string['lowtime'] = '最短時間';
$string['manualgrading'] = '申論題評分';
$string['matchesanswer'] = '比對答案';
$string['matching'] = '辨識題';
$string['matchingpair'] = '辨識對{$a}';
$string['maxgrade'] = '最高分';
$string['maxgrade_help'] = '　　<p align="center"><b>課的成績</b></p>
　　
　　<p>這個值確定了此課的最高分值，範圍是0到100%。這個值可以在任何時候修改，且修改會立即生效，會顯示在分數頁面和其他任何各種顯示成績的列表中。如果設定這個成績為0，則此課不會出現在任何成績頁面上。</p>
　　';
$string['maxhighscores'] = '顯示幾個最高分';
$string['maximumnumberofanswersbranches'] = '最多幾個答案/分支';
$string['maximumnumberofanswersbranches_help'] = '<p align="center"><b>此單元中問題的最大答案數</b></p>

<p>這個值指定了每個問題中教師可以設定的最大答案數，預設值是4。如果此課只使用是非題，則可以將這個值設定為2。</p>

<p>這個值同時指定了分支表中可以使用的最大分支數。</p>

<p>對於已經有內容的單元，修改這個值並不會有問題。事實上，如果您想添加一個有很多選項的問題，或者是很長的分支表
就必須要修改這個值。當增加了這個(特殊的)問題或者分支表之後，可以將這個值減為原先的“標準”值。</p>
　　';
$string['maximumnumberofattempts'] = '最多作答幾次';
$string['maximumnumberofattempts_help'] = '　　<p align="center"><b>(學生)可以嘗試的最大次數</b></p>
　　
　　<p>這個選項定義了在回答此課中的<b>任何</b>問題時學生可以嘗試的最大次數。對於那些沒有標準答案或很難提供標準答案的問題，如簡答和數學題，系統會直接進入下一頁。</p>
　　
　　<p>此選項的缺省值為5，太小的值會導致學生不仔細思考問題，太大的值會帶來比較大的挫折感。</p>
　　
　　<p>設定此選項的值為1，則只給學生一次回答的機會，這和測驗模組比較像，不同之處在於問題是每個頁面只有一個問題。</p>
　　
　　<p>注意這個選項是全局性質的，課中無論哪種類型的題目都會受其影響。</p>
　　
　　<p>注意這個選項並<b>不會</b>影響教師對題目的檢查以及在課中流覽。對於程式次數的檢查是記錄在資料庫中的，教師檢查問題並不會計入其中。</p>
　　';
$string['maximumnumberofattemptsreached'] = '達到嘗試次數上限 - 請進入下一頁';
$string['maxtime'] = '限時(分鐘)';
$string['maxtimewarning'] = '您有{$a}分鐘可以完成此單元。';
$string['mediaclose'] = '顯示關閉按鈕：';
$string['mediafile'] = '彈出檔案或網頁';
$string['mediafile_help'] = '如果想在教程開始時彈出一個視窗，請選擇在視窗裡顯示的文件。每個教程頁面都會有一個重新打開此彈出視窗的連結，可以在需要的時候使用。';
$string['mediafilepopup'] = '點選這裡來觀看這一單元的媒體檔';
$string['mediaheight'] = '視窗高度：';
$string['mediawidth'] = '視窗寬度：';
$string['messageprovider:graded_essay'] = '文章評分通知';
$string['minimumnumberofquestions'] = '最少試題數';
$string['minimumnumberofquestions_help'] = '<p align="center"><b>一單元的最少問題數</b></p>
<p>當一單元中包含了一個或多個分支表時，教師應該設置這個參數。它限定了在計算分數前，學生應當回答了至少多少個問題，
但它並<b>不</b>限制學生在一單元中回答更多問題。</p>

<p>例如將這個參數設定為20則表示學生應當已經閱讀了<b>至少</b>20個問題。假設一個學生只閱讀了課程中一個分支的5個
頁面並回答了相應的問題，接著他就選擇了結束該課。此時若此參數未設定，該生若答對了全部5個問題，他將獲得100%的分數。
然而，如果這個參數設定為20，他只能獲得25%的分數。假設另一個學生閱讀了全部25頁內容並答對了25題中的23道，
那麼它可以獲得92%的分數。</p>

<p>如果使用了此參數，則在開啟課程頁面時將會有如下資訊:</p>
<p><blockquote>在此單元中，您需要回答至少n個問題，當然如果您願意，可以回答更多。然而如果您回答的問題少於n個，
則在計算分數時，會假定您回答了n個問題。</blockquote></p>

<p>當然，"n"將會被此處為此參數設定的數值所代替。</p>
<p>當設定了此參數，系統將告知學生他們所完成的問題，以及至少應該完成多少問題。</p>';
$string['missingname'] = '請輸入暱稱';
$string['modattempts'] = '允許學生回顧';
$string['modattempts_help'] = '　　<p align="center"><b>允許檢查</b></p>
　　
　　<p>開啟此選項即允許學生在此課中回退並修改答案。</p>
　　';
$string['modattemptsnoteacher'] = '學生回顧功能只開放給學生們。';
$string['modulename'] = '單元課程';
$string['modulename_help'] = '<img alt="" src="<?php echo $CFG->wwwroot?>/mod/lesson/icon.gif" /> <b>學習單元(編序教學法)</b>
<ul>
<p>學習單元模組以一種靈活有趣的方式來發佈內容。</P>
<P>它包含一系列的頁面，通常每個頁面的結尾都有一個問題和一系列可選答案，學生讀完後要作答才能進到下一單元。
Moodle系統會根據學生的回答，將他帶入下一頁或者上一頁。</P>
<p>根據要表達材料的不同，學習單元的導覽可以是很簡單，也可以很複雜。</p>
</ul>
　　';
$string['modulenameplural'] = '單元課程';
$string['move'] = '移動頁面';
$string['movedpage'] = '移動頁面';
$string['movepagehere'] = '移動頁面到此';
$string['moving'] = '移動頁面： {$a}';
$string['multianswer'] = '多選題';
$string['multianswer_help'] = '　　<p align="center"><b>問題選項</b></p>
　　
　　<p>有些問題有一個可選的以核取方塊啟動的選項，這些問題類型和相應的選項含義描述如下。</p>
　　
　　<ol>
　　<li><p><b>單選題</b>單選題有一個被稱為<b>“多選題”</b>。如果選定了“問題選項”核取方塊，則學生就需要選擇出全部正確的答案。可以告訴學生有<b>多少</b>正確答案，也可以不告訴。例如“下列哪位是美國總統?”就沒有告訴學生正確答案的數目，而“請從以下列表中選出兩位美國總統”則告訴了學生正確答案的數目。正確答案的數目在<b>一</b>到題支數目之間。(只有一個答案的多選題和單選題是<b>不同</b>的，因為在多選題中學生可以選擇多個答案而在單選題中不行。)</p></li>
　　
　　<li><p><b>簡答</b>缺省情況下比較答案時會忽略文字大小寫。但如果“問題選項”被夠選，則答案的比較是大小寫敏感的。</p></li>
　　
　　<p>其他的問題類型並不使用“問題選項”。</p>
　　';
$string['multichoice'] = '選擇題';
$string['multipleanswer'] = '多個答案';
$string['nameapproved'] = '認證名字';
$string['namereject'] = '對不起，過濾器拒絕您的名字。
<br>請試另一個名字。';
$string['new'] = '新的';
$string['nextpage'] = '下一頁';
$string['noanswer'] = '沒有回答';
$string['noattemptrecordsfound'] = '沒有找到作答記錄：沒有給定成績';
$string['nobranchtablefound'] = '沒有發現分支表';
$string['nocommentyet'] = '還沒有意見';
$string['nocoursemods'] = '找不到活動';
$string['nocredit'] = '沒有學分';
$string['nodeadline'] = '沒有最後期限';
$string['noessayquestionsfound'] = '這個課程沒有申論題。';
$string['nohighscores'] = '沒有最高分數';
$string['nolessonattempts'] = '這個課程還沒有人嘗試。';
$string['nooneansweredcorrectly'] = '沒有正確的回答';
$string['nooneansweredthisquestion'] = '沒有人回答此問題';
$string['noonecheckedthis'] = '沒有人檢核';
$string['nooneenteredthis'] = '沒有人進入';
$string['noonehasanswered'] = '至今沒有人回答過申論題。';
$string['noretake'] = '不允許您重新進入此課程';
$string['normal'] = '一般 - 依單元課程路徑';
$string['notcompleted'] = '未完成';
$string['notdefined'] = '未定義';
$string['nothighscore'] = '您沒有做最高{$a}分數表';
$string['notitle'] = '無標題';
$string['numberofcorrectanswers'] = '答對題數：{$a}';
$string['numberofcorrectmatches'] = '答對題數：{$a}';
$string['numberofpagestoshow'] = '顯示多少頁(卡片)數';
$string['numberofpagestoshow_help'] = '　　<p align="center"><b>顯示多少頁(卡片)</b></p>
　　
　　<p>這個選項只用於卡片形式的課。缺省值0表示此課中所有的頁面/卡片都會顯示出來，而設定此選項為非零值將會顯示相應數目的頁面。在顯示完指定頁面/卡片後，系統會結束此課並將成績顯示出來。</p>
　　
　　<p>如果這個選項的設定值比課中的頁面多，則顯示完全部頁面後此課即會結束。</p>
　　';
$string['numberofpagesviewed'] = '頁面瀏覽數：{$a}';
$string['numberofpagesviewednotice'] = '已回答題數:{$a->nquestions};(您至少要回答{$a->minquestions})';
$string['numerical'] = '計算題';
$string['ongoing'] = '是否顯示累計的分數';
$string['ongoingcustom'] = '目前的{$a->currenthigh}分中，您已獲得{$a->score}分。';
$string['ongoing_help'] = '　　正在建設中';
$string['ongoingnormal'] = '到目前為止的{$a->viewed}問題中，您答對了{$a->correct}題。';
$string['onpostperpage'] = '每個成績只能發布一次';
$string['options'] = '選項';
$string['or'] = '或';
$string['ordered'] = '已排序的';
$string['other'] = '其他';
$string['outof'] = '超過 {$a}';
$string['overview'] = '概要';
$string['overview_help'] = '<p align="center"><b>概覽</b></p>
　　
<ol>
<li>一節課由一系列的<b>頁面</b>和可選的<b>分支表</b>構成。</li>

<li>一個頁面通常包含著一些<b>內容</b>且通常以一個<b>問題</b>結束，因此稱為<b>問題頁</b>。</li>

<li>對於評論型問題，並沒有答案，只有一個分數、反饋和跳轉到的頁面。</li>

<li>每一個答案都有一小段文字與之關聯，當該答案被選擇時系統將會把這段文字顯示給用戶。這段文字被稱為答案的<b>回應</b>。</li>

<li>每一個答案還有一個<b>跳轉到</b>鏈結與之相連。跳轉到鏈結可以是相對的(如本頁、下一頁)或絕對的(課中的指定頁面或課程結束頁)。</li>

<li>預設的情況下，第一個答案會跳到該課的<b>下一頁</b>。後續的答案都跳轉到本頁，也就是說如果學生沒有選擇第一個答案，則系統還是將當前頁面顯示給他們。如果您已經創建了一個有簇，則可以選擇跳轉到簇中的未讀頁面，如果當前您並不在簇中，則看不到這個選項。您可以在任何時刻將一組問題組合成簇。</li>

<li>下一頁指的是該課中<b>邏輯上</b>的下一頁，這也是教師看到每個頁面的順序。在課中移動頁面可以改變這一順序。</li>

<li>課還有一個<b>流覽順序</b>，這是學生看到頁面的順序。這由每個答案的“跳轉到”鏈結決定，並且可能和邏輯順序
有很大的不同。(如果課中“跳轉到”鏈結都使用了缺省值，則二者可能很象。)教師可以檢查流覽順序。</li>

<li>在將答案顯示給學生時，系統會將其順序打亂，即教師看到的答案順序可能和顯示給學生的完全不同。(甚至每一次顯示
給學生的答案都會不同。)有一個例外是匹配題，在這種題目中，答案的順序是和教師輸入的順序一致的。</li>

<li>每一頁上的答案數目可以不同。例如，有些頁面可以以是非題結尾，而其他的則可以以四選一來結尾。</li>

<li>可以設一個沒有任何答案的頁面，在這種情況下學生看到的是<b>繼續</b>鏈結而不是被打亂的答案。</li>

<li>如果“分數定制”選項並未開啟: 為了能夠正確給課程打分，所謂<b>正確</b>的回答就是那些跳轉到<i>後續</i>頁面的
答案，而<b>錯誤</b>則是指跳轉回當前頁或邏輯上較<i>先</i>出現的頁面。因此，如果跳轉<i>並未</i>修改，
則第一個答案是正確的，而其他的則是錯誤的。<br /><br />如果“分數定制”功能開啟了: 成績的分數是由問題的點數
決定的，總成績則是全部點數的百分比，最高是100%。</li>

<li>問題可以有多個正確答案。例如，如果有兩個選項都可以跳轉到下一頁，則它們都是正確答案。
(儘管都顯示了同樣的目的頁面，不同答案的回應是可以完全不同的。)

<li>在教師查看課的內容時，正確答案是以下劃線標注出的。</li>

<li><b>分支表</b>的內容是一系列指向其他頁面的鏈結。通常課都是以<b>目錄</b>開始的，而這一頁正是分支表。</li>

<li>在分支表中的每一項都有兩個部分，分別是描述和跳轉頁面的標題。</li>
　　
<li>一個分支表可以將單元分成數個<b>分支</b>，每個分支可以包含一系列頁面(通常是關於同一主題)。在分支的結尾通常有<b>分支結束</b>頁面。這個頁面是比較特殊的，它通常會把學生帶回到上一個分支頁。(分支結束頁面的"返回"鏈結可以根據需要加以修改。)</li>

<li>在一單元中可以有多個分支表。例如，一單元的每一個主分支都可以有子分支。</li>

<li>告訴學生單元程結束是非常重要的，這可以通過在主分支表中加入“課程結束”項目完成，它跳轉到<b>課程結束</b>頁面。
此外，還可以在課中的最後一個分支(此處的最後指邏輯上的)加入鏈結進入到課程結束頁面，即它<i>不</i>經過分支結束頁面。</li>

<li>當分數定制功能關閉時，當課中包含一個或多個分支表，一種比較明智的選擇是為參數“最小問題數”設定合理的值，
它設定了計算分數時最少應讀的頁面數。沒有這個參數，學生可以在只訪問課程的一個分支並正確回答其中的全部問題後離開，但仍能獲得課的滿分。<br /><br />當分數定制功能開啟時，學生的分數由其獲得的點數占整個課程點數的百分比來決定。</li>

<li>此外，當分數定制功能關閉時，學生可以通過分支表重複訪問一個分支。當然，成績是通過學生所回答的<i>不同</i>的問題數目來計算的，因此重複回答同一組問題並<i>不</i>增加得分。
(實際上，這會得到相反的效果，因為閱讀頁面的總數在計算分數的公式中處於分母的位置。)為了讓學生瞭解到自己在課程進度中的真實情況，系統會將他們正確回答的問題數、已經閱讀的頁面數和當前的分數在每個分支表頁面上顯示出來。<br /> <br />當分數定制功能開啟時，如果可嘗試次數超過1，則學生可以在流覽路徑許可的情況下重複訪問一個問題頁，並重複獲得該問題的得分。為了防止這樣的事情發生，應將嘗試次數設定為1。</li>

<li><b>課程結束</b>可以通過兩種方式到達: 顯式地跳轉和通過在(邏輯上的)最後頁面上點擊下一頁按鈕。
當定制分數關閉時，如果到達了課程結束，則系統會顯示祝賀資訊和學生的成績。成績的計算方法是 (正確回答的問題數/看到的頁面數) * 課程的成績。當定制分數開啟時，成績是獲取的點數占總點數的百分比(如課程總成績為3點，獲取的為3點，則最終成績為3點的100%).最終成績為3點的100%)。</li>

<li>如果在<i>沒有</i>到達課程的結束頁之間學生就離去了，當學生再次返回時，系統會詢問他們是從上次最後答對的地方開始還是從起點重新開始。</li>

<li>對於可以重新學習的課程，教師可以選擇使用最好成績，或者是平均成績作為該課的“最終”成績。這個成績是顯示在如成績頁等頁面上的。</li>

<li>簇頁: 一個簇表示的是一組可以從中隨機選擇的相關頁面。簇應當有一個“簇結束”頁面，否則它將以“課程結束”頁作為結束頁面。通過選擇“簇中的隨機問題”作為“跳轉到”鏈結可以隨機顯示簇中的頁面。在簇中的問題頁可以鏈結到“簇結束頁”以退出簇，或者是跳轉到簇中尚未被閱讀的頁面。This also enables the creation of scenarios with a random element using the lesson module.</li>
</ol>
　　';
$string['page'] = '頁面：{$a}';
$string['pagecontents'] = '頁面內容';
$string['page-mod-lesson-edit'] = '教程編輯頁面';
$string['page-mod-lesson-view'] = '查看或預覽教程頁面';
$string['page-mod-lesson-x'] = '任意教程頁面';
$string['pages'] = '頁數';
$string['pagetitle'] = '頁面標題';
$string['password'] = '密碼';
$string['passwordprotectedlesson'] = '{$a}需要課程密碼';
$string['pleasecheckoneanswer'] = '請查核一個答案';
$string['pleasecheckoneormoreanswers'] = '請檢查一或多個答案';
$string['pleaseenteryouranswerinthebox'] = '請在對話盒輸入您的答案';
$string['pleasematchtheabovepairs'] = '請符合上面的配對數';
$string['pluginadministration'] = '教程管理';
$string['pluginname'] = '單元課程';
$string['pointsearned'] = '得分';
$string['postprocesserror'] = '後處理時發生錯誤！';
$string['postsuccess'] = '張貼成功';
$string['pptsuccessfullimport'] = '從上傳的PowerPoint幻燈片匯入頁面成功';
$string['practice'] = '當作練習不計分';
$string['practice_help'] = '　　<p align="center"><b>實踐課</b></p>
　　
　　<p>實踐課不會顯示在成績冊中。</p>
　　';
$string['preprocesserror'] = '預處理時發生錯誤！';
$string['preview'] = '預覽';
$string['previewlesson'] = '預覽{$a}';
$string['previouspage'] = '上一頁';
$string['processerror'] = '處理是發生錯誤！';
$string['progressbar'] = '進度列';
$string['progressbar_help'] = '如果啟用，在教程頁面底部會顯示一個進度條，以說明完成的百分比。';
$string['progressbarteacherwarning'] = '{$a}不顯示進度列';
$string['progressbarteacherwarning2'] = '因為您可以編輯此教程，所以您看不到進度條';
$string['progresscompleted'] = '您已完成此教程的 {$a}%';
$string['qtype'] = '頁面類型';
$string['question'] = '試題';
$string['questionoption'] = '試題選項';
$string['questiontype'] = '試題類型';
$string['randombranch'] = '隨機取分支網頁';
$string['randompageinbranch'] = '在分支中隨機取問題';
$string['rank'] = '排名';
$string['rawgrade'] = '原始分數';
$string['receivedcredit'] = '及格';
$string['redisplaypage'] = '重新顯示';
$string['report'] = '報表';
$string['reports'] = '報表';
$string['response'] = '回覆';
$string['retakesallowed'] = '允許重試';
$string['retakesallowed_help'] = '<p align="center"><b>允許學生重學此課</b></p>

<p>這個選項設定了學生是否可以多次學習此課。如果教師認為此課中有學生需要完全學會的資料，則應當允許多次學習。如果其中的資料僅僅用於考試等情形，則應當禁止重學此課。</p>

<p>當允許學生重學此課時，其<b>分數</b>可以採用<b>平均分</b>或者<b>最高分</b>，西面的參數就決定了應當使用哪種記分方式。</p>

<p>注意<b>問題分析</b>總是使用第一次回答的答案，重學會被忽略掉。</p>

<p>這個選項的缺省值為<b>是</b>，表示學生可以重學此課。實際上只有一些個別的情況這個值才應當設定為<b>否</b>。</p>
　　';
$string['returnto'] = '回到 {$a}';
$string['returntocourse'] = '回到課程';
$string['review'] = '復習';
$string['reviewlesson'] = '復習課程';
$string['reviewquestionback'] = '是的，我想要再試';
$string['reviewquestioncontinue'] = '不，我只想要繼續下一個問題';
$string['sanitycheckfailed'] = '檢查錯誤：這個嘗試被刪除了。';
$string['savechanges'] = '儲存更新';
$string['savechangesandeol'] = '儲存所有更新並到此課程的終點';
$string['savepage'] = '儲存頁面';
$string['score'] = '分數';
$string['scores'] = '分數';
$string['secondpluswrong'] = '不離開嗎?您想要再試試?';
$string['selectaqtype'] = '選擇一個題目類型';
$string['shortanswer'] = '填空題';
$string['showanunansweredpage'] = '顯示未回答的頁面';
$string['showanunseenpage'] = '顯示未瀏覽的頁面';
$string['singleanswer'] = '單一答案';
$string['skip'] = '略過導覽';
$string['slideshow'] = '以幻燈片展示';
$string['slideshowbgcolor'] = '幻燈片背景顏色';
$string['slideshowheight'] = '幻燈片高度';
$string['slideshow_help'] = '　　<p align="center"><b>幻燈片</b></p>
　　
　　<p>在這種情況下，課以幻燈片的形式來顯示。幻燈片有固定的寬度、高度和可定制的背景顏色。如果頁面的內容超過了指定的寬度和高度，則會顯示基於CSS的捲軸。問題將會“打斷”幻燈片的顯示，缺省情況下只會顯示頁面(分支表)。如果選定了相應的選項，則在頁面的最左或最右將會將會以相應的語言顯示“向前”或“向後”按鈕，而其他的按鈕在幻燈片的中下部顯示。</p>
　　';
$string['slideshowwidth'] = '幻燈片寬度';
$string['startlesson'] = '開始課程';
$string['studentattemptlesson'] = '{$a->lastname}, {$a->firstname}的嘗試次數為{$a->attempt}';
$string['studentname'] = '{$a} 姓名';
$string['studentoneminwarning'] = '警告:您剩下一分鐘或更少的時間來完成此課程。';
$string['studentresponse'] = '{$a}的回應';
$string['submit'] = '提交';
$string['submitname'] = '送出名稱';
$string['teacherjumpwarning'] = '此課程正使用群集{$a->cluster}跳躍，或{$a->unseen}隱藏跳躍。將使用下一頁的跳躍方式來取代。以學生身份登入來測試這些跳躍。';
$string['teacherongoingwarning'] = '正進行中的分數只顯示給學生。以學生身份登入來測試這個進行中的分數。';
$string['teachertimerwarning'] = '計時器只提供給學生。以學生身份登入來測試這個計時器。';
$string['thatsthecorrectanswer'] = '這是正確的答案';
$string['thatsthewronganswer'] = '這是錯誤的答案';
$string['thefollowingpagesjumptothispage'] = '下一頁跳至這頁';
$string['thispage'] = '本頁';
$string['timeremaining'] = '剩餘時間';
$string['timespenterror'] = '至少花費 {$a} 分鐘在這單元';
$string['timespentminutes'] = '用掉時間(分鐘 )';
$string['timetaken'] = '使用時間';
$string['topscorestitle'] = '前{$a}個最高分';
$string['truefalse'] = '判斷題';
$string['unabledtosavefile'] = '無法保存您上傳的文件';
$string['unknownqtypesnotimported'] = '{$a}個題目沒有匯入，因為不支持的它們的題目類型';
$string['unseenpageinbranch'] = '分支中未瀏覽的問題';
$string['unsupportedqtype'] = '不支援的題型({$a})！';
$string['updatedpage'] = '更新頁面';
$string['updatefailed'] = '更新失敗';
$string['usemaximum'] = '使用高標';
$string['usemean'] = '使用均標';
$string['usepassword'] = '密碼保護';
$string['usepassword_help'] = '　　<p align="center"><b>密碼保護此課</b></p>
　　
　　<p>開啟此選項會禁止沒有密碼的學生訪問此課。</p>
　　';
$string['viewgrades'] = '檢視分數';
$string['viewhighscores'] = '檢視最高分數表';
$string['viewreports'] = '檢視{$a->attempts}完成{$a->student}嘗試';
$string['viewreports2'] = '查看{$a}個已完成的試答';
$string['welldone'] = '做的好！';
$string['whatdofirst'] = '您要先做什麼?';
$string['wronganswerjump'] = '跳到錯誤回答';
$string['wronganswerscore'] = '錯誤答案成績';
$string['wrongresponse'] = '錯誤應答';
$string['xattempts'] = '{$a}嘗試';
$string['youhaveseen'] = '您已經瀏覽了該課程的多個頁面。<br />想從最後瀏覽的頁面開始嗎?';
$string['youmadehighscore'] = '恭喜您晉昇Top {$a} 高分排行榜';
$string['youranswer'] = '您的答案';
$string['yourcurrentgradeis'] = '您目前的成績為{$a}';
$string['yourcurrentgradeisoutof'] = '您目前的分數是{$a->grade}（總分{$a->total}）';
$string['youshouldview'] = '您至少應該回答：{$a}';
