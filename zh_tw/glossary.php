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
 * Strings for component 'glossary', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   glossary
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = '新增註解';
$string['addentry'] = '新增條目';
$string['addingcomment'] = '增加一條註解';
$string['alias'] = '關鍵詞';
$string['aliases'] = '關鍵字(詞)';
$string['aliases_help'] = '<p align="center"><b>同義字(別名)</b></p>
<p>辭彙表中的每一個詞條都可以有一系列相關的同義字(或別名)。</p>
<p><b>每行輸入一個同義字(或別名)</b> (不是以逗號分割).</p>
<p>同義字和別名提供了訪問詞條的另外一種方式。例如，如果您使用辭彙表自動鏈結篩檢程式，則在決定哪些字詞會被自動鏈結時，同義字也會(和主名稱一樣)被使用。</p>';
$string['allcategories'] = '所有類別';
$string['allentries'] = '全部';
$string['allowcomments'] = '允許加註';
$string['allowcomments_help'] = '　　<p align="center"><b>允許評論詞條</b></p>
　　
　　<p>允許學生向詞條添加評論。</p>
　　
　　<p>您可以選擇是否開啟這個選項。</p>
　　
　　<p>教師總是可以對詞條加以評論的。</p>';
$string['allowduplicatedentries'] = '允許重複的條目';
$string['allowduplicatedentries_help'] = '　　<p align="center"><b>允許詞條重複</b></p>
　　
　　<p>如果此選項開啟，則多個詞條可以使用相同的名稱。</p>';
$string['allowprintview'] = '允許列印檢視';
$string['allowprintview_help'] = '　　<p align="center"><b>允許列印視圖</b></p>
　　
　　<p>允許學生使用列印視圖查看辭彙表。</p>
　　
　　<p>您可以選擇是否開啟自功能。</p>
　　
　　<p>教師總是可以使用列印視圖。</p>';
$string['andmorenewentries'] = '還有 {$a} 個新詞條。';
$string['answer'] = '答案';
$string['approve'] = '核准';
$string['areyousuredelete'] = '您確定要刪除這條目嗎？';
$string['areyousuredeletecomment'] = '您確定要刪除這註解嗎？';
$string['areyousureexport'] = '您確定要匯出這條目到';
$string['ascending'] = '遞增排序';
$string['attachment'] = '附件';
$string['attachment_help'] = '<p align="center"><b>詞條的附件</b></p>
<p>您可以給每個詞條添加“一個”附件。請把這附件檔案上傳到伺服器上，並和詞條一起顯示。</p>
<p>當您想要分享一個圖片或Word文檔時，這個功能是很有用的。</p>
<p>這個檔案可以是任何類型，當然它最好使用標準的3字母副檔名，如.doc、.jpg和.png等等。這會讓別人下載它時更加方便。</p>
<p>如果您修改了詞條，並上傳了新的檔案，則該詞條原先的檔案將會被替換。</p>
<p>如果您修改了一個有附件的詞條，且將此項留空，則原先的附件會被保留。</p>';
$string['author'] = '作者';
$string['authorview'] = '依作者瀏覽';
$string['back'] = '返回';
$string['cantinsertcat'] = '不能加入類別';
$string['cantinsertrec'] = '不能加入記錄';
$string['cantinsertrel'] = '不能加入類別-條目 關係';
$string['casesensitive'] = '這個條目區分字母大小寫';
$string['casesensitive_help'] = '<p align="center"><b>大小寫敏感</b></p>
<p>此選項設定了當對此詞條產生自動鏈結時，是否要求兩者大小寫完全符合。</p>
<p>例如，如果開啟此項，則討論區中的“html”將不會鏈結到辭彙表中的詞條“HTML”。</p>';
$string['cat'] = '類別';
$string['categories'] = '類別';
$string['category'] = '類別';
$string['categorydeleted'] = '類別已被刪除';
$string['categoryview'] = '依類別瀏覽';
$string['changeto'] = '變換為{$a}';
$string['cnfallowcomments'] = '在條目處是否允許對辭典進行評論';
$string['cnfallowdupentries'] = '是否允許辭典有重複的條目';
$string['cnfapprovalstatus'] = '設定預設的學生所提交的條目的待審狀態';
$string['cnfcasesensitive'] = '設定條目被連結時，字母大小區分是否如預設值';
$string['cnfdefaulthook'] = '選擇預設的選項，來顯示當辭典第一次被觀看時。';
$string['cnfdefaultmode'] = '選擇辭典第一次被瀏覽時的預設顯示框架';
$string['cnffullmatch'] = '設定當超連結時，目標文字應符合預設值設定';
$string['cnflinkentry'] = '設定條目是否被自動超連結';
$string['cnflinkglossaries'] = '設定辭典是否被自動超連結';
$string['cnfrelatedview'] = '選擇自動超連結和項目瀏覽時的顯示格式。';
$string['cnfshowgroup'] = '指明當群組被打散時，顯示或不顯示';
$string['cnfsortkey'] = '選擇預設的排列主鍵';
$string['cnfsortorder'] = '選擇預設的排序方式.';
$string['cnfstudentcanpost'] = '設定學生是否能發表詞彙提交登錄';
$string['comment'] = '註解';
$string['commentdeleted'] = '註解已經被刪除';
$string['comments'] = '註解';
$string['commentson'] = '註解在';
$string['commentupdated'] = '註解已經更新';
$string['completionentries'] = '學生必須創建條目：';
$string['completionentriesgroup'] = '必建詞條';
$string['concept'] = '概念';
$string['concepts'] = '概念';
$string['configenablerssfeeds'] = '此設定將啟動辭典的RSS功能,您可以在每個辭典中分別設定';
$string['current'] = '目前的排列 {$a}';
$string['currentglossary'] = '目前的辭典';
$string['date'] = '日期';
$string['dateview'] = '按日期瀏覽';
$string['defaultapproval'] = '預設的審核狀態';
$string['defaultapproval_help'] = '　　<p align="center"><b>缺省審核狀態</b></p>
　　
　　<p>這個選項允許教師設定學生所提交詞條的缺省狀態。它可以是自動處於已審核狀態(可以被所有人查閱)，或者需要教師逐一審核。</p>';
$string['defaulthook'] = '默認鉤子';
$string['defaultmode'] = '預設模式';
$string['defaultsortkey'] = '預設的排序值';
$string['defaultsortorder'] = '預設的排序順序';
$string['definition'] = '定義';
$string['definitions'] = '定義';
$string['deleteentry'] = '刪除條目';
$string['deletenotenrolled'] = '由未選課的用戶刪除條目';
$string['deletingcomment'] = '刪除註解';
$string['deletingnoneemptycategory'] = '刪除這個類別將不會一併刪除包含的詞彙，這些內容將被標示成未分類。';
$string['descending'] = '遞減排序';
$string['destination'] = '目的地';
$string['destination_help'] = '　　<p align="center"><b>定義導入詞條的目標</b></p>
　　
　　<p>您可以指定將詞條導入到何處：</p>
　　<ul>
　　<li><strong>當前辭彙表：</strong>將導入的詞條添加到當前開啟的辭彙表之中。</li>
　　<li><strong>新辭彙表：</strong>創建一個新的辭彙表，其資訊取自要導入的檔，而導入的詞條會添加到新辭彙表當中。</li>
　　</ul>';
$string['displayformat'] = '顯示格式';
$string['displayformatcontinuous'] = '連續顯示且不要作者';
$string['displayformatdictionary'] = '簡明模式,字典風格';
$string['displayformatencyclopedia'] = '百科全書';
$string['displayformatentrylist'] = '條目列表';
$string['displayformatfaq'] = '常見問題';
$string['displayformatfullwithauthor'] = '全文(含作者)';
$string['displayformatfullwithoutauthor'] = '全文(不含作者)';
$string['displayformat_help'] = '<p align="center"><b>詞條的顯示格式</b></p>

<p>這個選項設定了辭彙表中詞條的顯示方式。可選的預設格式有：</p>
<blockquote>
<dl>
<dt><b>簡單字典</b>:</dt>
<dd>看上去像一部傳統的字典，其中有多個不相干條目。不顯示作者，且附件顯示為一個鏈結。</dd>

<dt><b>連續</b>:</dt>
<dd>逐一顯示詞條，其間不加任何分割，但會顯示編輯圖示。</dd>

<dt><b>詳細資訊(含作者)</b>:</dt>
<dd>如論壇一樣的顯示格式，包括了作者資訊。附件顯示為一個鏈結。</dd>

<dt><b>詳細資訊(不含作者)</b>:</dt>
<dd>如論壇一樣的顯示格式，不包含作者資訊。附件顯示為一個鏈結。</dd>

<dt><b>百科全書</b>:</dt>
<dd>同“詳細資訊(含作者)”類似，但附件中的圖片會直接顯示出來。</dd>

<dt><b>常見問題</b>:</dt>
<dd>對於顯示一系列常見問題很有用。它自動添加“問題”和“答案”等字樣。</dd>
</dl>
</blockquote>

<hr />
<p>Moodle管理員可以創建新的格式，方法請參考<b>mod/glossary/formats/README.txt</b>中內容。</p>';
$string['displayformats'] = '顯示格式';
$string['displayformatssetup'] = '顯示格式設定';
$string['duplicatecategory'] = '類別重名';
$string['duplicateentry'] = '副本項目';
$string['editalways'] = '隨時編輯';
$string['editalways_help'] = '<p align="center"><b>總可以編輯</b></p>

<p>此選項允許您設置是否總是允許學生修改他們的詞條。</p>

<p>您可以選擇：</p>

<ul>
<li><b>是：</b>詞條總是可以編輯的。</li>
　
<li><b>否：</b>詞條只在一定時間內可編輯。</li>
</ul>';
$string['editcategories'] = '編輯類別';
$string['editentry'] = '編輯條目';
$string['editingcomment'] = '編輯評論';
$string['entbypage'] = '頁顯示的登錄個數';
$string['entries'] = '條目';
$string['entrieswithoutcategory'] = '未分類條目';
$string['entry'] = '條目';
$string['entryalreadyexist'] = '條目已存在';
$string['entryapproved'] = '該條目已通過審核';
$string['entrydeleted'] = '條目被刪除';
$string['entryexported'] = '條目成功導出';
$string['entryishidden'] = '(該條目目前被隱藏)';
$string['entryleveldefaultsettings'] = '列表預設值';
$string['entrysaved'] = '這條目已經儲存';
$string['entryupdated'] = '這條目已經更新';
$string['entryusedynalink'] = '這條目將被自動連結';
$string['entryusedynalink_help'] = '<p align="center"><b>啟動詞條的自動鏈結</b></p>
<p>啟動這個功能，將允許課程中其他部分的內容，若出現與語詞條相同的辭彙時，會自動加上指向該詞條的鏈結。這範圍包括了討論區的貼文、內部資源、每週總結、心得報告等等。</p>
<p>如果您不希望某一部分文字(如討論區的貼文)被自動鏈結，則需在文字前後添加<nolink>和</nolink>標記。</p>
<p>若要開啟此功能，整體辭彙表級的自動鏈結選項也必須同時被開啟。</p>
　　';
$string['errcannoteditothers'] = '您無法編輯其他使用者的條目資料';
$string['errconceptalreadyexists'] = '這個概念已經存在，這個辭典不允許重複。';
$string['errdeltimeexpired'] = '您不能刪除它。時限已到！';
$string['erredittimeexpired'] = '這條目的編輯時間已經超過。';
$string['errorparsingxml'] = '解析檔案時發生錯誤，請確認 XML 語法正確。';
$string['explainaddentry'] = '新增條目到目前的辭典。<br> 概念和定義是必填的欄位';
$string['explainall'] = '在一頁中顯示所有條目';
$string['explainalphabet'] = '通過此索引瀏覽辭典';
$string['explainexport'] = '所有檔案已經被建立。<BR> 請將它下載並安全的保存。您可以匯入它們，當您需要的時候或匯入其他的課程。';
$string['explainimport'] = '您必須指明檔名來匯入，並且定義流程標準。<p> 送出您的請求，來檢視結果。</p>';
$string['explainspecial'] = '顯示沒有由英文字母開頭的條目';
$string['exportedentry'] = '匯出的條目';
$string['exportentries'] = '匯出條目';
$string['exportentriestoxml'] = '匯出條目為XML檔案';
$string['exportfile'] = '將條目匯出到檔案';
$string['exportglossary'] = '匯出辭典';
$string['exporttomainglossary'] = '匯出到主要辭典';
$string['filetoimport'] = '從檔案匯入';
$string['filetoimport_help'] = '　　<p align="center"><b>要導入的文件</b></p>
　　
　　<p>選擇您自己電腦上的包含著詞條的XML檔，並將其導入。</p>';
$string['fillfields'] = '概念和定義是必要的欄位';
$string['filtername'] = '辭典自動超連結';
$string['fullmatch'] = '僅符點全部詞語';
$string['fullmatch_help'] = '<p align="center"><b>整個詞彙符合</b></p>
<p>如果開啟了自動鏈結功能，再開啟此功能，將導致只有整個詞彙都完全符合時才會創建鏈結。</p>
<p>例如，辭彙表中雖有詞條“construct”，但系統不會在“constructivism”這字彙上創建指向它的鏈結。</p>';
$string['glossary:approve'] = '核准未批准的條目';
$string['glossary:comment'] = '建立評論';
$string['glossary:export'] = '匯出條目';
$string['glossary:exportentry'] = '導出單個詞條';
$string['glossary:exportownentry'] = '導出您的單個詞條';
$string['glossary:import'] = '匯入條目';
$string['glossaryleveldefaultsettings'] = '全域辭典設定';
$string['glossary:managecategories'] = '管理類別';
$string['glossary:managecomments'] = '管理評論';
$string['glossary:manageentries'] = '管理條目';
$string['glossary:rate'] = '條目評比';
$string['glossarytype'] = '辭典類型';
$string['glossarytype_help'] = '　　<p align="center"><b>定義課程的主辭彙表</b></p>
　　
　　<p>辭彙表系統允許您從任何二級辭彙表中導出辭彙到課程的主辭彙表中。</p>
　　
　　<p>為了完成這一點，您應當指定哪個辭彙表作為主辭彙表是用。</p>
　　
　　<p>注意：每門課程只能擁有一個主辭彙表，並且只有教師才能更新它。</p>';
$string['glossary:view'] = '檢視辭典';
$string['glossary:viewallratings'] = '查看所有人給的原始評分';
$string['glossary:viewanyrating'] = '查看每個人收到的總評分';
$string['glossary:viewrating'] = '檢視評比';
$string['glossary:write'] = '建立新條目';
$string['guestnoedit'] = '訪客不能編輯詞匯表';
$string['importcategories'] = '匯入類別';
$string['importedcategories'] = '匯入的類別';
$string['importedentries'] = '匯入的條目';
$string['importentries'] = '匯入條目';
$string['importentriesfromxml'] = '從 XML 檔案匯入條目';
$string['includegroupbreaks'] = '包含分組';
$string['isglobal'] = '設定為全域辭典?';
$string['isglobal_help'] = '　　<p align="center"><b>定義全局辭彙表</b></p>
　　
　　<p>管理員可以定義全局辭彙表</p>
　　
　　<p>這些辭彙表可以是任何課程的一部分(但通常是在首頁上)。</p>
　　
　　<p>全局辭彙表與普通的本地辭彙表之間的差別主要在於自動鏈結時全局辭彙表是針對整個站點的(而不僅僅是辭彙表所述的課程)。</p>';
$string['letter'] = '字母';
$string['linkcategory'] = '自動連結該類別';
$string['linkcategory_help'] = '　　<p align="center"><b>自動鏈結該類別</b></p>
　　
　　<p>您可以設定您是否想要此類別名稱被自動鏈結。</p>
　　
　　<p>注意：對類別名稱的自動鏈結總是大小寫敏感且整詞匹配的。</p>';
$string['linking'] = '自動連結';
$string['mainglossary'] = '主辭典';
$string['maxtimehaspassed'] = '抱歉, 已超過了修改該評論 ({$a}) 的最大時限!';
$string['modulename'] = '辭典';
$string['modulename_help'] = '詞匯模塊能讓使用者創建和維護像字典一樣的定義列表。無論詞名出現在課程的哪裡，都可以被自動鏈接到對應的詞條。';
$string['modulenameplural'] = '辭典';
$string['newentries'] = '新辭典條目';
$string['newglossary'] = '新辭典';
$string['newglossarycreated'] = '建立新辭典';
$string['newglossaryentries'] = '新辭典條目：';
$string['nocomment'] = '未找到註解';
$string['nocomments'] = '（未找到註解）';
$string['noconceptfound'] = '沒有找到概念或定義';
$string['noentries'] = '在此單元中門沒找到相關條目';
$string['noentry'] = '沒找到條目';
$string['nopermissiontodelcomment'] = '您不能刪除其他人的評論！';
$string['nopermissiontodelinglossary'] = '您不能在評論此詞匯表！';
$string['nopermissiontoviewresult'] = '您只能看您自己的詞條的結果';
$string['notapproved'] = '詞條還未被接受。';
$string['notcategorised'] = '未分類';
$string['numberofentries'] = '條目數';
$string['onebyline'] = '(每行一個)';
$string['page-mod-glossary-edit'] = '詞匯表添加/編輯詞條頁面';
$string['page-mod-glossary-view'] = '查看詞匯表編輯頁面';
$string['page-mod-glossary-x'] = '任意詞匯表模塊頁面';
$string['pluginadministration'] = '詞匯表管理';
$string['pluginname'] = '辭典';
$string['popupformat'] = '彈出窗口格式';
$string['printerfriendly'] = '友善列印';
$string['printviewnotallowed'] = '不允許列印檢視';
$string['question'] = '問題';
$string['rejectedentries'] = '已拒絕條目';
$string['rejectionrpt'] = '拒絕條目報告';
$string['resetglossaries'] = '刪除條目由';
$string['resetglossariesall'] = '從所有辭典中刪除條目';
$string['rssarticles'] = 'RSS 中最近文章個數';
$string['rssarticles_help'] = '　　<p align="center"><b>RSS新文章數目</b></p>
　　
　　<p>這個選項允許您設定包含在RSS種子中的文章數目。</p>
　　
　　<p>對於大多數辭彙表來說，5到20之間的數位都是可以的。如果您的辭彙表經常更新，可以增加這個數字。</p>';
$string['rsssubscriberss'] = '顯示概念“{$a}”的RSS匯集';
$string['rsstype'] = '此活動的 RSS 種子';
$string['rsstype_help'] = '<p align="center"><b>辭彙表的RSS種子</b></p>
　　
<p>這個選項允許您啟動辭彙表的RSS種子。</p>
　　
<p>您可以選擇兩種種子：</p>
<ul>
<li><b>有作者資訊：</b>生成的種子會包含每篇文章的作者資訊。</li>
　　
<li><b>無作者資訊：</b>生成的種子不包含每篇文章的作者資訊。</li>
</ul>';
$string['searchindefinition'] = '全文檢索';
$string['secondaryglossary'] = '副辭典';
$string['showall'] = '顯示 全部連結';
$string['showall_help'] = '　　<p align="center"><b>字元系統相關的流覽選項</b></p>
　　
　　<p>您可以定制用戶流覽辭彙表的方式。流覽和搜索總是可以是用的，但還可以定義三個額外選項：</p>
　　
　　<p><b>特殊字元</b> 通過特殊字元如@、#等啟動或關閉流覽功能。</p>
　　
　　<p><b>首字母流覽</b> 啟動或關閉以首字元排序流覽的功能呢個.</p>
　　
　　<p><b>流覽全部</b> 啟動或關閉同時流覽全部詞條的功能。</p>';
$string['showalphabet'] = '顯示字母表';
$string['showalphabet_help'] = '　　<p align="center"><b>字元系統相關的流覽選項</b></p>
　　
　　<p>您可以定制用戶流覽辭彙表的方式。流覽和搜索總是可以是用的，但還可以定義三個額外選項：</p>
　　
　　<p><b>特殊字元</b> 通過特殊字元如@、#等啟動或關閉流覽功能。</p>
　　
　　<p><b>首字母流覽</b> 啟動或關閉以首字元排序流覽的功能呢個.</p>
　　
　　<p><b>流覽全部</b> 啟動或關閉同時流覽全部詞條的功能。</p>';
$string['showspecial'] = '顯示特殊連結';
$string['showspecial_help'] = '　　<p align="center"><b>字元系統相關的流覽選項</b></p>
　　
　　<p>您可以定制用戶流覽辭彙表的方式。流覽和搜索總是可以是用的，但還可以定義三個額外選項：</p>
　　
　　<p><b>特殊字元</b> 通過特殊字元如@、#等啟動或關閉流覽功能。</p>
　　
　　<p><b>首字母流覽</b> 啟動或關閉以首字元排序流覽的功能呢個.</p>
　　
　　<p><b>流覽全部</b> 啟動或關閉同時流覽全部詞條的功能。</p>';
$string['sortby'] = '排序方式：';
$string['sortbycreation'] = '按建立日期';
$string['sortbylastupdate'] = '按更新日期';
$string['sortchronogically'] = '依時間先後順序';
$string['special'] = '特殊';
$string['standardview'] = '依字母順序瀏覽';
$string['studentcanpost'] = '允許學生登錄';
$string['totalentries'] = '條目總數';
$string['usedynalink'] = '自動連結辭典條目';
$string['usedynalink_help'] = '　　<p align="center"><b>啟動辭彙表的自動鏈結</b></p>
　　
　　<p>啟動這個功能則允許課程中其他部分的內容出現詞條中辭彙的名稱時自動添加指向詞條的鏈結。這包括了論壇的帖子、內部資源、每週總結、心得報告等等。</p>
　　
　　<p>注意啟動辭彙表的自動鏈結功能並不意味著鏈結每個詞條——要使用自動鏈結，還要對每個詞條單獨設置。</p>
　　
　　<p>如果您不希望某一部分文字(如論壇的帖子)被自動鏈結，則需在文字周圍添加&lt;nolink&gt;和&lt;/nolink&gt;標記。</p>
　　
　　<p>注意分類名稱也會自動鏈結。</p>
　　';
$string['waitingapproval'] = '待審';
$string['warningstudentcapost'] = '(僅適用於非主辭彙)';
$string['withauthor'] = '概念(含作者)';
$string['withoutauthor'] = '概念(不含作者)';
$string['writtenby'] = '作者是';
$string['youarenottheauthor'] = '您不是該評論的作者, 故您無權編輯它.';
