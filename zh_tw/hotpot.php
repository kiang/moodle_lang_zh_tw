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
 * Strings for component 'hotpot', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   hotpot
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = '放棄';
$string['activitycloses'] = '活動關閉';
$string['activitygrade'] = '活動成績';
$string['activityopens'] = '活動開啟';
$string['added'] = '已經新增';
$string['addquizchain'] = '新增一系列測驗';
$string['addquizchain_help'] = '新增所有測驗鏈中的測驗嗎？

**不**
: 只新增一個測驗

**是**
: 如果源文件是個**測驗文件**，該文件將被當作測驗鏈的起始，該鏈上所有的測驗都會被以相同的設置新增到此課程。鏈上的每個測驗都必須包含指向下一個測驗的連結。

如果源文件是個**文件夾**，該文件夾下所有能夠被識別出來的測驗都會被以相同的設置新增進來，並形成一個測驗鏈。

如果源文件是個**單位文件**，比如說Hot Potatoes masher （熱土豆碾子）文件或者index.html，該單位文件所列出的所有測驗會被以相同的設置新增進來，並形成一個測驗鏈。';
$string['allowreview'] = '允許評論';
$string['allowreview_help'] = '如啟用，學生在測驗關閉以後可以回顧他們是如何作答的。';
$string['analysisreport'] = '項目分析';
$string['attemptlimit'] = '答題限制';
$string['attemptlimit_help'] = '一個學生可以在此 HotPot 活動中進行的答題的最大次數';
$string['attemptnumber'] = '答題次數';
$string['attempts'] = '答卷';
$string['attemptscore'] = '答卷分數';
$string['attemptsunlimited'] = '無限制的答題';
$string['average'] = '平均';
$string['averagescore'] = '平均成績';
$string['cacherecords'] = 'HotPot緩存記錄';
$string['canrestartquiz'] = '您當前的結果將會被保存，並且您可以稍後重做測試「{$a}」。';
$string['canrestartunit'] = '您當前的結果會被保存，但如果想以後重做一次，您必須再從頭開始。';
$string['canresumequiz'] = '您當前的結果將會被保存，並且您可以稍後繼續進行測試「{$a}」。';
$string['checks'] = '檢查';
$string['checksomeboxes'] = '請查檢某些框';
$string['clearcache'] = '清空HotPot的緩存';
$string['cleardetails'] = '清空HotPot的內容';
$string['clearedcache'] = 'HotPot的緩存已被清空';
$string['cleareddetails'] = 'HotPot的內容已被清空';
$string['clickreporting'] = '可以點按報告';
$string['clickreporting_help'] = '如果啟用該設定，則每次點擊「提示」，「線索」或者「檢查」按鈕時，都會保留一個單獨的記錄。這使得教師可以看到一個非常詳細的，顯示每次點擊時的測試狀態的報告。若不啟用，則測試只在每次提交時，才存儲一個記錄。';
$string['closed'] = '該活動已經關閉。';
$string['clues'] = '線索';
$string['completed'] = '已完成';
$string['configenablecache'] = '保留HotPot測驗的緩存能極大地提高學生訪問測驗的速度。';
$string['configenablecron'] = '指定HotPot的cron指令在您所在時區的幾點鐘運行';
$string['configenablemymoodle'] = '此選項設置HotPot是否會列在「我的Moodle」頁面上';
$string['configenableobfuscate'] = '在javascript代碼不可讀的方式下，插入媒體播放器會使確定文件名和文件位置變得更加困難。';
$string['configenableswf'] = '允許嵌入SWF文件到HotPot活動中。如果啟用，該設定會重寫filter_mediaplugin_enable_swf。';
$string['configfile'] = '配置文件';
$string['configframeheight'] = '當測驗顯示時帶有邊框，該值代表頂框的高度（以像素為單位），其中頂框包含了Moodle導航欄。';
$string['configlocation'] = '配置文件位置';
$string['configlockframe'] = '若啟用該設定，則導航欄（若使用）將被鎖定，從而變得不能滾動，不能調整大小，也沒有邊框';
$string['configmaxeventlength'] = '如果一個HotPot既指定了開啟也指定了關閉時間，且兩個時間的差大於此處指定的天數，則將會新增兩個單獨的日曆事件到課程日曆中。對於時間差小於指定日期數，或者只指定了一個時間的情況，只新增一個日曆事件。如果兩個時間均未被指定，將不會新增日曆事件。';
$string['configstoredetails'] = '若啟用該設置，則HotPot測驗中的原始XML細節將會存儲在hotpot_details表中。這允許提交的測驗答案可以在以後重新評分，以反映HotPot測驗評分系統中的變化。然而，如果在一個繁忙的網站上啟用該選項，hotpot_details表中的數據會增長得非常快。';
$string['confirmdeleteattempts'] = '您真的要刪除這些提交么？';
$string['confirmstop'] = '您確定要離開此頁面嗎？';
$string['correct'] = '正確';
$string['couldnotinsertsubmissionform'] = '無法插入提交表單';
$string['delay1'] = '延遲 1';
$string['delay1_help'] = '第一次和第二次答題間的最小延遲。';
$string['delay1summary'] = '試卷一與試卷二之間的時間延遲';
$string['delay2'] = '延遲2';
$string['delay2_help'] = '試卷二後，試卷間的最小時間延遲。';
$string['delay2summary'] = '後續試卷間的時間延遲';
$string['delay3'] = '延遲3';
$string['delay3afterok'] = '等待學生點擊確定';
$string['delay3disable'] = '不要自動繼續';
$string['delay3_help'] = '該設定規定了完成測試與將顯示控制交還給Moodle之間的延遲。

**使用特定的時間（以秒為單位）**
：經過指定的秒數後，控制權將會被交還給Moodle。


**使用源/模板文件中的設置**
：經過源文件或模板文件對於該輸出格式規定的秒數後，控制權將會被交還給Moodle。


**直到學生點擊「好」**
：在學生點擊了測試中完成消息框上的「好」按鈕後，控制權將會被交還給Moodle。


**不要自動繼續**
：測試結束後，控制權將會被交還給Moodle。學生可以從測試頁面自由轉去其它頁面。

注意，無論該設置如何設定，測試結果總是在測試完成或放棄後立即返回給Moodle。';
$string['delay3specific'] = '使用特定的時間（以秒為單位）';
$string['delay3summary'] = '測試結束處的時間延遲';
$string['delay3template'] = '使用源文件或模板文件中的設置';
$string['deleteallattempts'] = '刪除所有嘗試';
$string['deleteattempts'] = '刪除試卷';
$string['detailsrecords'] = 'HotPot 詳情記錄';
$string['d_index'] = '區分度指數';
$string['duration'] = '持續時間';
$string['enablecache'] = '啟用HotPot緩存';
$string['enablecron'] = '啟用 HotPot 計劃任務';
$string['enablemymoodle'] = '在我的Moodle上顯示HotPots';
$string['enableobfuscate'] = '啟用媒體播放器代碼混淆';
$string['enableswf'] = '允許HotPot活動中嵌入SWF文件';
$string['entry_attempts'] = '試卷';
$string['entrycm'] = '之前的活動';
$string['entrycmcourse'] = '本課程上次活動';
$string['entrycm_help'] = '該設置指定了一個Moodle活動與在嘗試該Quizport前，必須達到的最小等級。

教師可以選擇一個特定的活動，
或者下面這些通用目的設置之一：

*該課程之前的活動
*該節之前的活動
*該課程之前的HotPot
*該節之前的HotPot';
$string['entrycmsection'] = '本節的上次活動';
$string['entrycompletionwarning'] = '在開始本項活動之前，您必須查看{$a}。';
$string['entry_dates'] = '日期';
$string['entrygrade'] = '以前的活動成績';
$string['entrygradewarning'] = '您在 {$a->entryactivity} 中得到 {$a->entrygrade}% 分數前您不能開始此活動。 目前您該活動的成績是 {$a->usergrade}%';
$string['entry_grading'] = '評分';
$string['entryhotpotcourse'] = '此課程中以前的 HotPot';
$string['entryhotpotsection'] = '此課程小節中以前的 HotPot';
$string['entryoptions'] = '入口頁面選項';
$string['entryoptions_help'] = '這些複選框啟用和停用 HotPot 入口頁面上顯示的項目。.

**單元名稱作為標題**
：如果選中，單元的名稱將會作為入口頁面的標題顯示。

**評分**
：如果選中，HotPot 的評分資訊將會顯示在入口頁面上。

**日期**
：如果選中，HotPot 的開始和關閉的日期將會顯示在入口頁面上。

**答卷**
：如果選中，一個顯示使用者以前在此 HotPot 的答卷詳細資訊的表格將會顯示在入口頁面上。答卷如果中斷，在最右邊的欄里將會顯示一個繼續按鈕。';
$string['entrypage'] = '顯示入口頁面';
$string['entrypagehdr'] = '入口頁面';
$string['entrypage_help'] = '在開始使用 HotPot 前應該給學生顯示一個初始頁面嗎？

**是**
：在開始使用 HotPot 前將會給學生顯示一個入口頁面。入口頁面的內容是由 HotPot 入口頁面選項決定的。

**否**
：將不會給學生顯示入口頁面，並立即開始使用 HotPot。

為了能訪問報告和編輯測驗頁面，入口頁面將會始終顯示給老師';
$string['entrytext'] = '入口頁面文字';
$string['entry_title'] = '單元名稱作為標題';
$string['exit_areyouok'] = '您好，您還在嗎？';
$string['exit_attemptscore'] = '您的那次答捲成績是 {$a}';
$string['exitcm'] = '下一項活動';
$string['exitcmcourse'] = '本課程的下次活動';
$string['exitcm_help'] = '此設置指定在 Quizport 完成後需要進行的 Moodle 活動。

教師可以選擇一個特定的活動，或者下面幾個通用設置之一：

* 此課程的下一項活動
* 此小節的下一項活動
* 此課程的下一個 HotPot
* 此小節的下一個 HotPot

如果其他退出頁面選項被停用了，學生將會直接進入下一項活動。否則將會給學生顯示一個連結，當他們準備好時可以帶他們進入下一項活動。';
$string['exitcmsection'] = '本節的下次活動';
$string['exit_course'] = '課程';
$string['exit_course_text'] = '返回課程主頁';
$string['exit_encouragement'] = '鼓勵';
$string['exit_excellent'] = '好極了！';
$string['exit_feedback'] = '退出頁面反饋';
$string['exit_feedback_help'] = '這些選項啟用和停用 HotPot 退出頁面上顯示的反饋項。

**單元名稱作為標題**
：如果選中，單元名稱將會作為退出頁面的標題顯示。

**鼓勵**
：如果選中，退出頁面將會顯示一些鼓勵。鼓勵依賴於 HotPot 成績：
： **> 90%**：好極了！
： **> 60%**：做得好
：**> 0%**：良好的嘗試
： **= 0%**：您還好嗎？

**單元答捲成績**
：如果選中，剛剛完成的單元答卷的成績將會顯示在退出頁面上。

**單元成績**
：如果選中，HotPot 成績將會顯示在退出頁面上。

另外，如果單元評分方式是最高的，將會顯示一條消息，告訴使用者最新的答卷是等於還是優於前次。';
$string['exit_goodtry'] = '良好的嘗試！';
$string['exit_grades'] = '成績';
$string['exit_grades_text'] = '查看此課程您目前為止的成績';
$string['exithotpotcourse'] = '此課程的下一個 HotPot';
$string['exit_hotpotgrade'] = '您這項活動的成績是 {$a}';
$string['exit_hotpotgrade_average'] = '您這項活動目前的平均成績是 {$a}';
$string['exit_hotpotgrade_highest'] = '您這項活動目前的最高成績是 {$a}';
$string['exit_hotpotgrade_highest_equal'] = '這項活動您平了以前的最好成績！';
$string['exit_hotpotgrade_highest_previous'] = '您這項活動以前的最高成績是 {$a}';
$string['exit_hotpotgrade_highest_zero'] = '您這項活動的成績還沒有高於 {$a}';
$string['exithotpotsection'] = '此課程小節的下一個 HotPot';
$string['exit_index'] = '索引';
$string['exit_index_text'] = '去活動的索引';
$string['exit_links'] = '退出頁面連結';
$string['exit_links_help'] = '這些選項開啟和停用 HotPot 退出頁面上某些導航連結的顯示。

**重試**
：如果此 HotPot 允許多次答題並且學生還有一些剩餘機會，將會顯示一個允許學生重試 HotPot 的連結。

**索引**
如果選中，將會顯示一個指向 HotPot 索引頁面的連結。

**課程**
：如果選中，將會顯示一個指向 Moodle 課程頁面的連結。

**成績**
如果選中，將會顯示一個指向 Moodle 成績冊的連結。';
$string['exit_next'] = '下一個';
$string['exit_next_text'] = '嘗試下一項活動';
$string['exit_noscore'] = '您已經成功完成此活動！';
$string['exitoptions'] = '退出頁面選項';
$string['exitpage'] = '顯示退出頁面';
$string['exitpagehdr'] = '退出頁面';
$string['exitpage_help'] = '在 HotPot 測驗完成後應該顯示一個退出頁面嗎？

**是**
：當 HotPot 測驗完成後會給學生顯示一個退出頁面。退出頁面的內容是由 HotPot 退出頁面反饋和連結的設置來決定的。

**否**
：將不向學生顯示退出頁面。相反，他們將會直接進入下一項活動或者返回 Moodle 課程頁面。';
$string['exit_retry'] = '重試';
$string['exit_retry_text'] = '重試此活動';
$string['exittext'] = '退出頁面文字';
$string['exit_welldone'] = '做得好！';
$string['exit_whatnext_0'] = '您想下一步想要做什麼？';
$string['exit_whatnext_1'] = '選擇您的目的地……';
$string['exit_whatnext_default'] = '請從下面選擇其一：';
$string['feedbackdiscuss'] = '在論壇里討論這個測驗';
$string['feedbackformmail'] = '回饋單';
$string['feedbackmoodleforum'] = 'Moodle 討論區';
$string['feedbackmoodlemessaging'] = 'Moodle 簡訊';
$string['feedbacknone'] = '無';
$string['feedbacksendmessage'] = '給您的導師發送一條資訊';
$string['feedbackwebpage'] = '網頁';
$string['firstattempt'] = '第一份答卷';
$string['forceplugins'] = '強制使用媒體外掛';
$string['forceplugins_help'] = '如果啟用，兼容 Moodle 的媒體播放器將會播放 avi、mpeg、mpg、mp3、mov 和 wmv 等文件。否則，Moodle 不會修改測驗里任何媒體播放器的設置。';
$string['frameheight'] = '框高度';
$string['giveup'] = '放棄';
$string['grademethod'] = '評分方法';
$string['grademethod_help'] = '此設置定義 HotPot 成績是怎麼從答卷分數中計算出來的。

**最高分數**
：成績將會被設置為此 HotPot 活動的一次答卷可得的最高分數。

**平均分數**
：成績將會被設置為此 HotPot 活動的答卷的平均分數。

**第一份答卷**
：成績將會被設置為此 HotPot 活動的第一份答卷的分數。

**最後的答卷**
：成績將會被設置為此 HotPot 活動的最後的答卷的成績。';
$string['gradeweighting'] = '成績加權';
$string['gradeweighting_help'] = '這項 HotPot 活動的成績將會在 Moodle 成績冊中調整到此分數。';
$string['highestscore'] = '最高分數';
$string['hints'] = '提示';
$string['hotpot:attempt'] = '做測驗';
$string['hotpot:deleteallattempts'] = '刪除一項 HotPot 活動里任何使用者的答卷';
$string['hotpot:deletemyattempts'] = '刪除自己在一項 HotPot 活動里的答卷';
$string['hotpot:ignoretimelimits'] = '忽略一項 HotPot 活動的時間限制';
$string['hotpot:manage'] = '修改一項 HotPot 活動的設置';
$string['hotpotname'] = 'HotPot 活動名稱';
$string['hotpot:preview'] = '預覽一個 HotPot 活動';
$string['hotpot:reviewallattempts'] = '查看一項 HotPot 活動里任何使用者的答卷';
$string['hotpot:reviewmyattempts'] = '查看自己在一項 HotPot 活動里的答卷';
$string['hotpot:view'] = '使用測驗';
$string['ignored'] = '忽略';
$string['inprogress'] = '處理中';
$string['isgreaterthan'] = '大於';
$string['islessthan'] = '小於';
$string['lastaccess'] = '最後的訪問';
$string['lastattempt'] = '最後的答題';
$string['lockframe'] = '鎖定框';
$string['maxeventlength'] = '單個日曆事件的最大天數';
$string['mediafilter_hotpot'] = 'HotPot 媒體過濾器';
$string['mediafilter_moodle'] = 'Moodle 的標準媒體過濾器';
$string['migratingfiles'] = '遷移 Hot Potatoes 測驗文件';
$string['missingsourcetype'] = 'HotPot 記錄遺失了源類型';
$string['modulename'] = 'Hot Potatoes 測驗';
$string['modulenameplural'] = 'Hot Potatoes 測驗';
$string['nameadd'] = '名稱';
$string['nameadd_help'] = '名稱可以是由教師輸入的特定的文字或是自動生成的。

**從源文件里獲得**
：名稱從源文件中提取。

**使用源文件名**
：使用源文件名作為名稱。

**使用源文件路徑**
：使用源文件路徑作為名稱。路徑中的任何斜杠將被空格替換。

**特定的文字**
：由教師輸入的特定的文字將作為名稱。';
$string['nameedit'] = '名稱';
$string['nameedit_help'] = '把具體的文字顯示給學生';
$string['navigation'] = '導覽';
$string['navigation_embed'] = '嵌入的網頁';
$string['navigation_frame'] = 'Moodle 導覽頁框';
$string['navigation_give_up'] = '單一個 &quot;放棄&quot; 按鈕';
$string['navigation_help'] = '此設置指定了在測驗中使用的導航：

**Moodle 導航欄**
：Moodle 導航欄將和測驗顯示在同一個視窗中並處於頁面的頂部

**Moodle 導航框**
：Moodle 導航欄將顯示在單獨的框中並處於測驗的頂部

**嵌入的網頁**
：Moodle 導航欄將和 Hot Potatoes 測驗一起顯示在嵌入視窗中

**原始導航標誌**
：測驗將會和導航按鈕一起顯示。如果有的話，會在測驗中定義

**單個 "放棄" 按鈕**
：測驗將會和單個「放棄「一起顯示在頁面頂部

**無**
：測驗將會以沒有任何導航標誌方式顯示。當所有問題已經正確回答，依賴於「顯示下一個測驗嗎？」的設置，Moodle 將會回到課程頁面或者顯示下一個測驗';
$string['navigation_moodle'] = '標準 Moodle 導航欄（頂部和側邊）';
$string['navigation_none'] = '無';
$string['navigation_original'] = '原始導航標誌';
$string['navigation_topbar'] = '僅頂部 Moodle 導航欄（沒有側邊欄）';
$string['noactivity'] = '沒有活動';
$string['nohotpots'] = '沒有發現 HotPot';
$string['nomoreattempts'] = '對不起，您在此活動里沒有剩餘答題次數了';
$string['noresponses'] = '沒有找到關於個人的問題和回應的資訊';
$string['noreview'] = '對不起，您不能查看本測驗答卷的詳情。';
$string['noreviewafterclose'] = '對不起，本測驗已經關閉。您再也不能查看本測驗答卷的詳情了。';
$string['noreviewbeforeclose'] = '對不起，在 {$a} 前您不能查看本測驗答卷的詳情';
$string['nosourcefilesettings'] = 'HotPot 記錄遺失源文件資訊';
$string['notavailable'] = '對不起，此活動當前對您不可用。';
$string['outputformat'] = '匯出格式';
$string['outputformat_best'] = '最佳化';
$string['outputformat_help'] = '輸出格式指定了內容將怎樣呈現給學生。

可用的輸出格式依賴於源文件的類型。有些類型的源文件只有一種輸出格式，然而別的類型的源文件有幾中輸出格式。

「最佳」設置將會為學生的瀏覽器使用最佳輸出格式顯示內容。';
$string['outputformat_html_xhtml'] = '標準 HTML 文件';
$string['overviewreport'] = '概覽';
$string['penalties'] = '倒扣';
$string['percent'] = '百分比';
$string['pluginadministration'] = 'HotPot 管理';
$string['pluginname'] = 'Hot Potatoes 測驗';
$string['pressoktocontinue'] = '按 「確定」 繼續，按 「取消」 停留在當前頁面。';
$string['questionshort'] = '題目-{$a}';
$string['quizname_help'] = '測驗名稱的幫助文字';
$string['quizzes'] = '測驗';
$string['removegradeitem'] = '刪除成績項';
$string['removegradeitem_help'] = '此活動的成績項應該移除嗎？

**否**
：此活動在 Moodle 成績冊中的成績將不會移除

**是**
：如果此 HotPot 活動最高成績或成績加權設置為零，那麼此活動在 Moodle 成績冊中的成績將會被移除';
$string['responsesreport'] = '回復';
$string['score'] = '分數';
$string['scoresreport'] = '分數';
$string['selectattempts'] = '選擇答卷';
$string['showerrormessage'] = 'HotPot 錯誤：{$a}';
$string['sourcefile'] = '源文件名';
$string['sourcefilenotfound'] = '源文件遺失（或為空）：{$a}';
$string['status'] = '狀態';
$string['stopbutton'] = '顯示停止按鈕';
$string['stopbutton_help'] = '如果此設置啟用，一個停止按鈕將會插入到測驗中。

如果學生點擊停止按鈕，目前已經有的結果將會被送到 Moodle 並且這次測驗答卷的狀態將會標記為丟棄。

停止按鈕上顯示的文字可以是 Moodle 語言包中預設的短語之一，或者教師可以為按鈕指定他們想要的文字。';
$string['stopbutton_langpack'] = '來自語言包';
$string['stopbutton_specific'] = '使用特定的文字';
$string['stoptext'] = '停止按鈕上的文字';
$string['storedetails'] = '存儲 HotPot 測驗答卷的原始 XML 詳情';
$string['studentfeedback'] = '學生的回饋';
$string['submits'] = '提交';
$string['subplugintype_hotpotattempt'] = '輸出格式';
$string['subplugintype_hotpotattempt_plural'] = '輸出格式';
$string['subplugintype_hotpotreport'] = '報告';
$string['subplugintype_hotpotreport_plural'] = '報告';
$string['subplugintype_hotpotsource'] = '源文件';
$string['subplugintype_hotpotsource_plural'] = '源文件';
$string['textsourcefile'] = '從源文件獲得';
$string['textsourcefilename'] = '使用檔案名稱';
$string['textsourcefilepath'] = '使用檔案路徑';
$string['textsourcequiz'] = '從測驗取得';
$string['textsourcespecific'] = '特定的文字';
$string['timeclose'] = '可用至';
$string['timedout'] = '逾時';
$string['timelimit'] = '時間限制';
$string['timelimitexpired'] = '這次答卷的時間已經超出了限制';
$string['timelimitspecific'] = '使用特定的時間';
$string['timelimitsummary'] = '一次答題的時間限制';
$string['timelimittemplate'] = '使用源/模板文件';
$string['timeopen'] = '開始可用於';
$string['timeopenclose'] = '開始和關閉的時間';
$string['timeopenclose_help'] = '在人們可以訪問測驗並進行答題時您可以指定時間。在開始以前和關閉以後，測驗將不可用。';
$string['title'] = '標題';
$string['unitname_help'] = '單元名稱的幫助文字';
$string['updated'] = '已經更新';
$string['usefilters'] = '使用過濾器';
$string['usefilters_help'] = '如果此設置開啟，內容在被發送到使用者的瀏覽器以前將會通過 Moodle 的過濾器。';
$string['useglossary'] = '使用詞彙表';
$string['useglossary_help'] = '如果此設置啟用，內容在被發送到瀏覽器前會通過 Moodle\'s Glossary Auto-linking 過濾器。

注意此設置會覆蓋網站管理設置來開啟或停用 Moodle\'s Glossary Auto-linking 過濾器。';
$string['usemediafilter'] = '使用媒體過濾器';
$string['utilitiesindex'] = 'HotPot 應用程序索引';
$string['viewreports'] = '查看 {$a} 個使用者的報告';
$string['views'] = '瀏覽次數';
$string['weighting'] = '加權';
$string['wrong'] = '錯誤';
$string['zeroduration'] = '沒有持續時間';
$string['zeroscore'] = '零分';
