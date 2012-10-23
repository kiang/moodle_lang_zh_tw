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
 * Strings for component 'grades', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = '活動';
$string['addcategory'] = '新增類別';
$string['addcategoryerror'] = '無法新增類別';
$string['addexceptionerror'] = '錯誤發生在新增使用者帳號例外的處理時:評分項目';
$string['addfeedback'] = '加入回饋';
$string['addgradeletter'] = '增加一個等第';
$string['addidnumbers'] = '加入ID 號碼';
$string['additem'] = '加入評分項目';
$string['addoutcome'] = '增加一核心能力';
$string['addoutcomeitem'] = '加入核心能力項目';
$string['addscale'] = '增加一量尺';
$string['aggregateextracreditmean'] = '所有成績的平均值(含額外評分)';
$string['aggregatemax'] = '最高分數';
$string['aggregatemean'] = '所有分數的平均數';
$string['aggregatemedian'] = '所有分數的中位數';
$string['aggregatemin'] = '最低分數';
$string['aggregatemode'] = '分數的眾數';
$string['aggregateonlygraded'] = '只有不是空白的分數才彙整統計';
$string['aggregateonlygraded_help'] = '空白分數是指在成績簿上找不到的分數。

它可能是來自提交的作業尚未評分，或來自尚未作答的測驗等等。

這一設定將決定，空白分數是要排除在彙整統計之外，或以最低分計算，例如，作業分數是介於0和100之間，則以0分計算。';
$string['aggregateoutcomes'] = '把核心能力包含在彙整統計中';
$string['aggregateoutcomes_help'] = '如果啟用，核心能力都包含在彙整統計。

這可能會導致一個意想不到的類別總分。';
$string['aggregatesonly'] = '只彙整統計';
$string['aggregatesubcats'] = '彙整統計包含子類別分數';
$string['aggregatesubcats_help'] = '此設定決定在下層類別的分數是否要包含在彙整統計中。';
$string['aggregatesum'] = '累加總分';
$string['aggregateweightedmean'] = '所有分數的加權平均數';
$string['aggregateweightedmean2'] = '所有分數的簡單加權平均數';
$string['aggregation'] = '彙整統計';
$string['aggregationcoef'] = '彙整係數';
$string['aggregationcoefextra'] = '額外評分';
$string['aggregationcoefextra_help'] = '如果彙整統計是所有分數的合計，或是簡單加權平均數，且額外評分勾選方格已經被勾選，這計分項目的最大分數沒有加到類別的最大分數，

會導致這一類別的所有計分項目沒有最大分數。


如果彙整統計是所有分數的平均數(有額外評分)，且額外評分加權量被設成一個大於零的數值，這額外評分要先乘上加權量之後，才加入平均數成為總分。';
$string['aggregationcoefextrasum'] = '額外評分';
$string['aggregationcoefextrasum_help'] = '';
$string['aggregationcoefextraweight'] = '額外評分的加權量';
$string['aggregationcoefextraweight_help'] = '如果額外評分的加權量被設成一個大於零的數值，這分數要先乘上額外評分之後，才加入平均數成為總分。';
$string['aggregationcoefweight'] = '項目加權';
$string['aggregationcoefweight_help'] = '權重在成績匯總時被使用，它能影響同一分類下不同成績項的重要性。';
$string['aggregation_help'] = '這彙整統計決定如何將在同一類別的分數加以結合，例如：<br/>
*平均數--所有分數總合除以總次數 <br/>
*中位數--依大小排列後，位於最中間的數字<br/>
*最低分數<br/>
*最高分數<br/>
*眾數--出現次數最多的數字<br/>
*總和--所有分數的累加和，但量尺分數被忽略。';
$string['aggregationposition'] = '彙整統計位置';
$string['aggregationposition_help'] = '此設置決定類別和成績的總分是顯示在成績單的第一列還是最後一列。';
$string['aggregationsvisible'] = '可用的彙整統計類型';
$string['aggregationsvisiblehelp'] = '選擇所有的彙整統計類型，它必須是可用的。按住Ctrl鍵，可以選擇多項。';
$string['allgrades'] = '依類別分類的所有分數';
$string['allstudents'] = '所有學生';
$string['allusers'] = '所有用戶';
$string['autosort'] = '自動排序';
$string['availableidnumbers'] = '可使用的ID編號';
$string['average'] = '平均';
$string['averagesdecimalpoints'] = '欄平均數的小數點位數';
$string['averagesdecimalpoints_help'] = '此設定決定了每一個平均數在顯示時，小數點的位數。
或者是要使用（繼承）為這類別或評分項目的整體的小數點設定。';
$string['averagesdisplaytype'] = '平均分數欄位顯示方式';
$string['averagesdisplaytype_help'] = '此設定決定這平均數是要顯示成實得分數、百分比、或文字等第，或者是這類別或計分項目所用（繼承）的顯示方式。';
$string['backupwithoutgradebook'] = '備分無法包含成績簿的配置';
$string['badgrade'] = '提供的分數是無效的';
$string['badlyformattedscale'] = '請輸入一個以逗點隔開的數值清單(至少需要兩個數值)。';
$string['baduser'] = '提供的用戶是無效的';
$string['bonuspoints'] = '加分';
$string['bulkcheckboxes'] = '大量的核取方塊';
$string['calculatedgrade'] = '計算過的成績';
$string['calculation'] = '計算方法';
$string['calculationadd'] = '增加計算方法';
$string['calculationedit'] = '編輯計算方法';
$string['calculation_help'] = '分數計算是以一個公式來決定分數。

公式應該開始以等號（=）開頭，並使用常見的數學運算子，例如max，min和sum。

如果需要的話，其他計分項目(在雙方括號中輸入ID號碼)可以被包含在計算中。';
$string['calculationsaved'] = '計算方法已存檔';
$string['calculationview'] = '檢視計算方法';
$string['cannotaccessgroup'] = '不能存取指定組別的成績，抱歉。';
$string['categories'] = '類別';
$string['categoriesanditems'] = '類別和項目';
$string['categoriesedit'] = '編修類別和項目';
$string['category'] = '類別';
$string['categoryedit'] = '編輯類別';
$string['categoryname'] = '類別名稱';
$string['categorytotal'] = '類別總計';
$string['categorytotalfull'] = '{$a->category} 總計';
$string['categorytotalname'] = '類別總計名稱';
$string['changedefaults'] = '更改預設值';
$string['changereportdefaults'] = '更改報表預設值';
$string['chooseaction'] = '選擇一個動作...';
$string['choosecategory'] = '選擇類別';
$string['combo'] = '分頁和下拉選單';
$string['compact'] = '精簡';
$string['contract'] = '學習契約類別';
$string['controls'] = '控制';
$string['courseavg'] = '課程平均';
$string['coursegradecategory'] = '課程成績類別';
$string['coursegradedisplaytype'] = '課程成績顯示類型';
$string['coursegradedisplayupdated'] = '課程成績顯示類型已經被更改';
$string['coursegradesettings'] = '課程成績設定';
$string['coursename'] = '課程名稱';
$string['coursescales'] = '課程量尺';
$string['coursesettings'] = '課程設定';
$string['coursesettingsexplanation'] = '課程設定能決定這成績簿將會如何顯現給這課程的所有參與者。';
$string['coursetotal'] = '所有課程';
$string['createcategory'] = '建立類別';
$string['createcategoryerror'] = '無法建立一個新的類別';
$string['creatinggradebooksettings'] = '建立成績單的設定';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = '當前上層彙整統計';
$string['curveto'] = '轉向';
$string['decimalpoints'] = '總計小數點位數';
$string['decimalpoints_help'] = '此設置指定顯示在每個成績中的小數位數。成績計算仍按照5位小數的精度進行，不受此設置影響。';
$string['default'] = '預設';
$string['defaultprev'] = '預設({$a})';
$string['deletecategory'] = '刪除類別';
$string['disablegradehistory'] = '停用成績的歷史紀錄';
$string['disablegradehistory_help'] = '關閉成績相關資料表中的修改歷程追蹤史。

這樣作可以些微加快伺服器的速度，以及節省資料庫的空間。';
$string['displaylettergrade'] = '顯示成績等第';
$string['displaypercent'] = '顯示百分比';
$string['displaypoints'] = '顯示分數';
$string['displayweighted'] = '顯示加權過的分數';
$string['dropdown'] = '下拉選單';
$string['droplow'] = '丟棄最低值';
$string['droplow_help'] = '這一設定，讓你能夠指定要有幾個最低分數，從彙整統計中排除。';
$string['dropped'] = '丟棄的';
$string['dropxlowest'] = '丟棄X個最低值';
$string['dropxlowestwarning'] = '提醒: 如果您要使用丟棄x個最低值，則此類別的所有項目要使用相同的分數值。

假若分數值彼此有不同，其統計結果將無法預測。';
$string['duplicatescale'] = '複製量尺';
$string['edit'] = '編輯';
$string['editcalculation'] = '編輯計算結果';
$string['editcalculationverbose'] = '編輯計算{$a->category}$a->itemmodule {$a->itemname}';
$string['editfeedback'] = '編修回饋';
$string['editgrade'] = '編修成績';
$string['editgradeletters'] = '編輯文字等第';
$string['editoutcome'] = '編輯核心能力';
$string['editoutcomes'] = '編輯核心能力';
$string['editscale'] = '編輯量尺';
$string['edittree'] = '類別和項目';
$string['editverbose'] = '編輯{$a->category}$a->itemmodule {$a->itemname}';
$string['enableajax'] = '啟用AJAX';
$string['enableajax_help'] = '新增一個AJAZ功能層到成績報表，簡化及加速共用的操作。使用者瀏覽器Javascript功能要打開。';
$string['enableoutcomes'] = '啟用核心能力';
$string['enableoutcomes_help'] = '核心能力';
$string['encoding'] = '編碼';
$string['errorcalculationnoequal'] = '公式必須由等號開始(=1+2)';
$string['errorcalculationunknown'] = '無效的公式';
$string['errorgradevaluenonnumeric'] = '收到非數值的評分';
$string['errornocalculationallowed'] = '計算結果不能被這個項目接受';
$string['errornocategorisedid'] = '無法取得未分類id';
$string['errornocourse'] = '無法取得課程資訊';
$string['errorreprintheadersnonnumeric'] = '收到非數值的重印標題';
$string['errorsavegrade'] = '無法儲存分數，抱歉。';
$string['errorupdatinggradecategoryaggregateonlygraded'] = '在更新ID為{$a->id}的成績類別的“只匯總非空成績”設置時出錯';
$string['errorupdatinggradecategoryaggregateoutcomes'] = '在更新ID為{$a->id}的成績類別的“匯總中包括能力”設置時出錯';
$string['errorupdatinggradecategoryaggregatesubcats'] = '在更新ID為{$a->id}的成績類別的“匯總中包含子類別”設置時出錯';
$string['errorupdatinggradecategoryaggregation'] = '在更新ID為{$a->id}的成績類別時出錯';
$string['errorupdatinggradeitemaggregationcoef'] = '在更新ID為{$a->id}的成績項的匯總系數（權重或額外加分）時出錯';
$string['excluded'] = '排除';
$string['excluded_help'] = '如果被勾選，此分數將不會包含到彙整統計。';
$string['expand'] = '展開類別';
$string['export'] = '匯出';
$string['exportalloutcomes'] = '匯出所有核心能力';
$string['exportfeedback'] = '匯出時包含回饋資訊';
$string['exportplugins'] = '匯出外掛';
$string['exportsettings'] = '匯出設定值';
$string['exportto'] = '匯出到';
$string['extracreditwarning'] = '提醒:設定一類別中所有項目為額外評分，將從分數總計中排除它們。此後將沒有分數加總。';
$string['feedback'] = '回饋';
$string['feedbackadd'] = '增加回饋';
$string['feedbackedit'] = '編輯回饋';
$string['feedback_help'] = '這方格是用來對此分數加上任何評論';
$string['feedbacksaved'] = '回饋已儲存';
$string['feedbackview'] = '觀看回饋';
$string['finalgrade'] = '最終成績';
$string['finalgrade_help'] = '如果覆蓋選擇框被勾選，那麼可以直接添加或修正成績。';
$string['fixedstudents'] = '釘住學生欄';
$string['fixedstudents_help'] = '讓學生信息列靜止，這樣就可以水平滾動成績單，而不會看不到學生信息列。';
$string['forceoff'] = '強制：關';
$string['forceon'] = '強制：開';
$string['forelementtypes'] = '給選擇的{$a}';
$string['forstudents'] = '給學生';
$string['full'] = '全部';
$string['fullmode'] = '全部檢視';
$string['fullview'] = '全部檢視';
$string['generalsettings'] = '一般設定';
$string['grade'] = '成績';
$string['gradeadministration'] = '成績簿管理';
$string['gradebook'] = '成績單';
$string['gradebookhiddenerror'] = '成績單目前設定為對學生隱藏所有項目';
$string['gradebookhistories'] = '成績紀錄';
$string['gradeboundary'] = '文字等第的分數分界';
$string['gradeboundary_help'] = '這一設定決定在分數在幾分到幾分之間，應該指派到哪一個文字等第(A、B、C)。';
$string['gradecategories'] = '成績類別';
$string['gradecategory'] = '成績類別';
$string['gradecategoryonmodform'] = '成績類別';
$string['gradecategoryonmodform_help'] = '此設置控制此活動的成績放在成績單的哪個類別中。';
$string['gradecategorysettings'] = '成績類別設定';
$string['gradedisplay'] = '成績顯示';
$string['gradedisplaytype'] = '成績顯示類型';
$string['gradedisplaytype_help'] = '此設置決定在評分人和用戶報表中如何顯示成績。

* 分數 - 確切的分值
* 百分比
* 分數段 - 用來表示分數所處范圍的文字';
$string['gradedon'] = '分數：{$a}';
$string['gradeexport'] = '匯出成績';
$string['gradeexportdecimalpoints'] = '輸出成績小數點位數';
$string['gradeexportdecimalpoints_desc'] = '輸出報表顯示小數點位數，可在輸出時另外設定。';
$string['gradeexportdisplaytype'] = '輸出成績顯示模式';
$string['gradeexportdisplaytype_desc'] = '在匯出時，成績可以顯示成真實分數、百分比成績(參照最高分及最低分的位置)或者文字等第(A、B、C等)。

這些可在匯出時加以覆蓋。';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradehelp'] = '評分說明';
$string['gradehistorylifetime'] = '舊成績保留時間';
$string['gradehistorylifetime_help'] = '指定保留歷史成績相關資料的時間，建議保留越久越好。如果碰到效能降低問題或者資料庫空間限制，可嘗試調低數值。';
$string['gradeimport'] = '成績導入';
$string['gradeitem'] = '評分項目';
$string['gradeitemaddusers'] = '排除評分';
$string['gradeitemadvanced'] = '進階成績設定選項';
$string['gradeitemadvanced_help'] = '選擇編輯成績項目時應顯示的全部物件';
$string['gradeitemislocked'] = '此活動已經被成績簿鎖定，改變這個成績值將不會被複製到成績簿，除非先在成績簿內解除鎖定。';
$string['gradeitemlocked'] = '評分已鎖定';
$string['gradeitemmembersselected'] = '排除評分';
$string['gradeitemnonmembers'] = '加入評分';
$string['gradeitemremovemembers'] = '加入評分';
$string['gradeitems'] = '評分項目';
$string['gradeitemsettings'] = '成績項目設定';
$string['gradeitemsinc'] = '將包含的成績項目';
$string['gradeletter'] = '成績文字等第';
$string['gradeletter_help'] = '文字等第是以英文字母，如，A，B，C，...，或文字，如，優，甲，乙，丙，...等來代表各種層次的分數。';
$string['gradeletternote'] = '要刪除一個等第，只需要清空上面三項中的任何一項，再送出即可。';
$string['gradeletters'] = '成績文字等第';
$string['gradelocked'] = '成績文字等第已鎖定';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = '最高成績';
$string['grademax_help'] = '此設置決定使用數值成績類型時的最高分。基於活動的成績項的最高分在活動設置頁面設置。';
$string['grademin'] = '最低成績';
$string['grademin_help'] = '此設置決定使用數值成績類型時的最低分';
$string['gradeoutcomeitem'] = '核心能力項目成績';
$string['gradeoutcomes'] = '核心能力';
$string['gradeoutcomescourses'] = '課程核心能力';
$string['gradepass'] = '及格分數';
$string['gradepass_help'] = '這個設定決定了通過所需要的最低分數。

這數值被用於在活動和課程完成時，且在成績簿中，及格的分數以綠色顯示，而不及格的分數則以紅色顯示。';
$string['gradepreferences'] = '成績簿使用偏好';
$string['gradepreferenceshelp'] = '成績簿使用偏好的輔助說明';
$string['gradepublishing'] = '啟用成績發佈功能';
$string['gradepublishing_help'] = '啟用輸出和輸入的發佈：不需要登入Moodle網站，輸出的成績即可藉由URL來作存取。成績可以藉由URL來作輸入(意思是一個Moodle網站可以輸入另一個網站發佈的成績)。預設只有網站管理員能夠使用這種功能；在賦予需要的權限給其他的角色之前，請先教導使用者(分享書籤和下載加速器的危險性，IP的限制等等)。';
$string['gradereport'] = '成績報告';
$string['graderreport'] = '評分者報告';
$string['grades'] = '成績';
$string['gradesforuser'] = '{$a->user}的成績';
$string['gradesonly'] = '僅成績';
$string['gradessettings'] = '成績設定';
$string['gradetype'] = '成績類型';
$string['gradetype_help'] = '有4種成績類型：

*無 - 無等級可能<br/>
*數值 - 具有最大和最小的數值<br/>
*量尺- 在一個列表中依大小排列的項目<br/>
*文字 - 只用於回饋


只有數值和量尺分數可以做彙整統計。

源自於活動的計分項目的分數類型，要在活動設定頁上設定。';
$string['gradeview'] = '檢視成績';
$string['gradeweighthelp'] = '評分加權說明';
$string['groupavg'] = '群組平均';
$string['hidden'] = '隱藏';
$string['hiddenasdate'] = '以顯示"提交日期"來替代"隱藏的分數"';
$string['hiddenasdate_help'] = '如果用戶無法看到隱藏的分數，則顯示提交日期以代替"-"。';
$string['hidden_help'] = '如勾選，成績會對學生隱藏。如需要，可以設置隱藏期限，這樣評分結束後就可以向學生公布成績。';
$string['hiddenuntil'] = '隱藏到';
$string['hiddenuntildate'] = '隱藏到：{$a}';
$string['hideadvanced'] = '隱藏進階功能';
$string['hideaverages'] = '隱藏平均分數';
$string['hidecalculations'] = '隱藏計算方法';
$string['hidecategory'] = '隱藏';
$string['hideeyecons'] = '隱藏（顯示／隱藏）圖示';
$string['hidefeedback'] = '隱藏回饋';
$string['hideforcedsettings'] = '隱藏強制設定';
$string['hideforcedsettings_help'] = '在評分介面上不要顯示強制設定';
$string['hidegroups'] = '隱藏群組';
$string['hidelocks'] = '隱藏鎖定';
$string['hidenooutcomes'] = '顯示核心能力';
$string['hidequickfeedback'] = '隱藏快速回饋';
$string['hideranges'] = '隱藏分數全距';
$string['hidetotalifhiddenitems'] = '隱藏總分，如果在總分中包含了隱藏項目。';
$string['hidetotalifhiddenitems_help'] = '此設定指定是否將包含隱藏項目的總分顯示給學生看或以連字符（ - ）取代。

如果要顯示，那這總分到底要以排除或包含隱藏項目來計算。

如果隱藏的項目被排除在外，這總分會不同於老師所看到的總分，因為老師總是能看到以所有項目計算的總分，不管是隱藏的或非隱藏的。

如果隱藏的項目都包括在內，學生可能會去推算隱藏的項目的分數。';
$string['hidetotalshowexhiddenitems'] = '顯示總分，不包含隱藏項目';
$string['hidetotalshowinchiddenitems'] = '顯示總分，包含隱藏項目';
$string['hideverbose'] = '隱藏 {$a->category}$a->itemmodule 中的{$a->itemname}';
$string['highgradeascending'] = '最高分數遞增排序';
$string['highgradedescending'] = '最高分數遞減排序';
$string['highgradeletter'] = '高';
$string['identifier'] = '辨認用戶按';
$string['idnumbers'] = 'ID 號碼';
$string['import'] = '匯入';
$string['importcsv'] = '匯入 CSV';
$string['importcustom'] = '匯入成特定核心能力（僅針對這個課程）';
$string['importerror'] = '發生一個錯誤，這個程式碼呼叫參數錯誤。';
$string['importfailed'] = '匯入失敗';
$string['importfeedback'] = '匯入回饋';
$string['importfile'] = '匯入檔案';
$string['importfilemissing'] = '沒有接收到檔案，請回到表單，並確定上傳一個有效的檔案';
$string['importfrom'] = '匯入從';
$string['importoutcomenofile'] = '上傳的檔案是空的或者已損壞。請確認這是個正確的檔案。偵測出問題在第{$a}行；可能是第一行的表頭（header）資料沒有足夠的欄位或輸入的檔案沒有表頭（header）。請參考輸出檔案範例的表頭。';
$string['importoutcomes'] = '匯入核心能力';
$string['importoutcomes_help'] = '可以從csv文件導入能力。文件格式和能力導出的csv文件一致。';
$string['importoutcomesuccess'] = '匯入核心能力 "{$a->name}" 編號#{$a->id}';
$string['importplugins'] = '匯入外掛';
$string['importpreview'] = '預覽匯入';
$string['importsettings'] = '匯入設定值';
$string['importskippednomanagescale'] = '您沒有足夠權限新增等級，所以核心能力 "{$a}" 若需要建立等級的話，將被省略。';
$string['importskippedoutcome'] = '核心能力的簡稱 "{$a}" 已經存在。檔案匯入後這個值將被忽略。';
$string['importstandard'] = '匯入作為標準的核心能力';
$string['importsuccess'] = '成績匯入成功';
$string['importxml'] = '匯入XML';
$string['includescalesinaggregation'] = '在整合中包含等級';
$string['includescalesinaggregation_help'] = '您可以更改是否將量尺當作數字，包含在所有課程的所有成績簿中。

警告：若更改此設定，將會強制所有的彙整統計被重新計算。';
$string['incorrectcourseid'] = '課程代碼不正確';
$string['incorrectcustomscale'] = '(不正確的自訂量尺，請修改)';
$string['incorrectminmax'] = '最小值應該低於最大值';
$string['inherit'] = '延續設定';
$string['intersectioninfo'] = '學生/分數訊息';
$string['item'] = '項目';
$string['iteminfo'] = '項目資訊';
$string['iteminfo_help'] = '這設定提供空間來輸入有關這項目的資訊。這資訊不會顯示在其他地方。';
$string['itemname'] = '項目名稱';
$string['itemnamehelp'] = '此項目的名稱，由模組帶入';
$string['items'] = '項目';
$string['itemsedit'] = '編輯計分項目';
$string['keephigh'] = '保留最高分數';
$string['keephigh_help'] = '若設定，這個選項將只保留X個最高分數，X是這個設定的值。';
$string['keymanager'] = '關鍵字管理器';
$string['lessthanmin'] = '鍵入的{$a->username}的{$a->itemname} 成績低於最低分。';
$string['letter'] = '文字等第';
$string['lettergrade'] = '文字等第成績';
$string['lettergradenonnumber'] = '非數字性的低分和(或)高分';
$string['letterpercentage'] = '文字等第(百分比)';
$string['letterreal'] = '文字等第(實得分數)';
$string['letters'] = '文字等第';
$string['linkedactivity'] = '已連結的活動';
$string['linkedactivity_help'] = '此一設定指定到這一成果項目與活動。

這可以用來以判斷規準衡量學生的表現，而不是以活動分數來評量。';
$string['linktoactivity'] = '鏈結到 {$a->name} 活動';
$string['lock'] = '鎖定';
$string['locked'] = '已被鎖定';
$string['locked_help'] = '若勾選，分數不再會被相關的活動自動更新。';
$string['locktime'] = '鎖定從';
$string['locktimedate'] = '從{$a}之後被鎖定';
$string['lockverbose'] = '鎖定{$a->category}$a->itemmodule {$a->itemname}';
$string['lowest'] = '最低';
$string['lowgradeletter'] = '低';
$string['manualitem'] = '手動項目';
$string['mapfrom'] = '對應來自';
$string['mappings'] = '計分項目對應';
$string['mapto'] = '對應到';
$string['max'] = '最高分';
$string['maxgrade'] = '評分最大值';
$string['meanall'] = '全部成績';
$string['meangraded'] = '非空的成績';
$string['meanselection'] = '那些成績計算欄平均成績';
$string['meanselection_help'] = '是否沒有成績的儲存格應該在計算每欄的平均值時被一起包含進來。';
$string['median'] = '中位數';
$string['min'] = '最低分';
$string['missingscale'] = '必須選擇量尺';
$string['mode'] = 'Mode';
$string['morethanmax'] = '你所鍵入{$a->username} 的{$a->itemname} 分數高於允許的最高分。';
$string['moveselectedto'] = '移動選出的項目到';
$string['movingelement'] = '搬移{$a}';
$string['multfactor'] = '加權倍數';
$string['multfactor_help'] = '該成績項中的所有分數將被乘以此系數，但不會超過設定的最大值。例如，如果系數設為2，最高分為100，那麼所有低於50的分數會被乘以2，而所有大於等於50的分數會變成100。';
$string['mypreferences'] = '我的偏好';
$string['myreportpreferences'] = '我的報表參數';
$string['navmethod'] = '導覽方法';
$string['neverdeletehistory'] = '永遠不刪除歷史記錄';
$string['newcategory'] = '新類別';
$string['newitem'] = '新計分項目';
$string['newoutcomeitem'] = '新核心能力項目';
$string['no'] = '否';
$string['nocategories'] = '此課程中無法新增或找到評分類別';
$string['nocategoryname'] = '未輸入類別名稱';
$string['nocategoryview'] = '沒有類別可檢視';
$string['nocourses'] = '目前沒有課程';
$string['noforce'] = '不強制';
$string['nogradeletters'] = '沒有評語集';
$string['nogradesreturned'] = '沒有成績資料';
$string['noidnumber'] = '沒有ID號碼';
$string['nolettergrade'] = '沒有評語';
$string['nomode'] = '無';
$string['nonnumericweight'] = '收到非數字評分';
$string['nonunlockableverbose'] = '這個成績無法啟用，除非先啟用{$a->itemname}成績。';
$string['nonweightedpct'] = '非加權%';
$string['nooutcome'] = '沒有核心能力';
$string['nooutcomes'] = '核心能力項目必須鏈結到一課程核心能力，但是這一課程並沒有核心能力。你想要添加一個嗎？';
$string['nopublish'] = '不公佈';
$string['norolesdefined'] = '沒有角色被定義在 管理>成績簿>一般設定>計分的角色';
$string['noscales'] = '核心能力必須被鏈結到一課程量尺或整體量尺，但是這裡沒有量尺，你想要添加一個嗎？';
$string['noselectedcategories'] = '沒有選擇類別';
$string['noselecteditems'] = '沒有選擇項目';
$string['notteachererror'] = '您必須是教師才能使用這項功能';
$string['nousersloaded'] = '沒有用戶被上載';
$string['numberofgrades'] = '成績的數目';
$string['onascaleof'] = '以{$a->grademin} 到 {$a->grademax}的量尺。';
$string['operations'] = '操作';
$string['options'] = '選項';
$string['outcome'] = '核心能力';
$string['outcomeassigntocourse'] = '指派其他核心能力到這課程。';
$string['outcomecategory'] = '在類別建立核心能力';
$string['outcomecategorynew'] = '新類別';
$string['outcomeconfirmdelete'] = '你確定你要刪除這核心能力 "{$a}"？';
$string['outcomecreate'] = '添加一新核心能力';
$string['outcomedelete'] = '刪除核心能力';
$string['outcomefullname'] = '完整名稱';
$string['outcome_help'] = '這設定決定那些核心能力會出現在成績簿上。

只有站台啟用的及和課程相關的核心能力，才可以使用。';
$string['outcomeitem'] = '核心能力項目';
$string['outcomeitemsedit'] = '編輯核心能力項目';
$string['outcomereport'] = '核心能力報表';
$string['outcomes'] = '核心能力';
$string['outcomescourse'] = '課程中已使用的核心能力';
$string['outcomescoursecustom'] = '自訂使用的(無法移除)';
$string['outcomescoursenotused'] = '未被使用的標準';
$string['outcomescourseused'] = '已使用的標準無法移除）';
$string['outcomescustom'] = '自訂核心能力';
$string['outcomeshortname'] = '課程簡稱';
$string['outcomesstandard'] = '標準核心能力';
$string['outcomesstandardavailable'] = '可用的標準核心能力';
$string['outcomestandard'] = '標準核心能力';
$string['outcomestandard_help'] = '一個標準核心能力是可用於整個網站的，給所有課程用的。';
$string['overallaverage'] = '總平均';
$string['overridden'] = '已經覆蓋';
$string['overridden_help'] = '如果打勾，分數就不能再相關的活動內被改變。

當一個分數，在評分者報告上，被編輯時，覆蓋的勾選框就會被自動勾選。

然而，它是可以取消勾選的，以允許分數通過相關的活動加以更改。';
$string['overriddennotice'] = '你在這個活動中的最後成績，是經過手動調整的。';
$string['overridesitedefaultgradedisplaytype'] = '覆蓋網站預設值';
$string['overridesitedefaultgradedisplaytype_help'] = '勾選後，課程的分數段和分數范圍可以被自由更改，而不是使用網站的缺省設置。';
$string['parentcategory'] = '父類別';
$string['pctoftotalgrade'] = '總分的%';
$string['percent'] = '百分比';
$string['percentage'] = '百分比';
$string['percentageletter'] = '百分比(文字等第)';
$string['percentagereal'] = '百分比(實得分數)';
$string['percentascending'] = '依百分比遞增排序';
$string['percentdescending'] = '依百分比遞減排序';
$string['percentshort'] = '%';
$string['plusfactor'] = '平移';
$string['plusfactor_help'] = '平移是一個數字，在應用乘數之後，它被添加到這一計分項目的每一分數上。例如，
X*4+2，這個"2"就是平移。';
$string['points'] = '點數';
$string['pointsascending'] = '依點數遞增排序';
$string['pointsdescending'] = '依點數遞增排序';
$string['positionfirst'] = '首';
$string['positionlast'] = '末';
$string['preferences'] = '偏好';
$string['prefgeneral'] = '一般';
$string['prefletters'] = '文字等第和分數界線';
$string['prefrows'] = '特別列';
$string['prefshow'] = '顯示/隱藏 切換';
$string['previewrows'] = '預覽行數';
$string['profilereport'] = '用戶個人報表';
$string['profilereport_help'] = '成績報表被使用在用戶個人資料頁。';
$string['publishing'] = '公佈';
$string['quickfeedback'] = '快速回饋';
$string['quickgrading'] = '快速評分';
$string['quickgrading_help'] = '如果啟用，當開啟編輯功能時，會為每個分數出現一個文本輸入框，讓很多分數可以在同一時間編輯。

當點擊更新按鈕被時，更改會被儲存和強調。需要注意的是一年級時，

注意，當分數在評分者報告中被編輯時，就會設立一覆蓋的旗幟，以表示這分數不再能從
這相關的活動中更改。';
$string['range'] = '全距';
$string['rangedecimals'] = '全距的小數點';
$string['rangedecimals_help'] = '全距要顯示幾位小數';
$string['rangesdecimalpoints'] = '被顯示在全距中的小數';
$string['rangesdecimalpoints_help'] = '這一設定決定在顯示每個分數的全距時，小數點之後要有幾位小數，或者是要採用(繼承)類別或計分項目的整體小數點設定。';
$string['rangesdisplaytype'] = '全距顯示型式';
$string['rangesdisplaytype_help'] = '此設置確定是否真正的成績，百分比或字母顯示範圍，或是否為類別或等級項目的顯示類型（繼承）。';
$string['rank'] = '排名';
$string['rawpct'] = '原始%';
$string['real'] = '實得的';
$string['realletter'] = '實得(文字等第)';
$string['realpercentage'] = '實得(百分比)';
$string['regradeanyway'] = '不管怎樣重新評分';
$string['removeallcoursegrades'] = '刪除所有成績';
$string['removeallcourseitems'] = '刪除所有成績項和成績類別';
$string['report'] = '報表';
$string['reportdefault'] = '報表的預設{$a}';
$string['reportplugins'] = '報表外掛';
$string['reportsettings'] = '報表設定';
$string['reprintheaders'] = '每隔幾行重印表格標題列';
$string['respectingcurrentdata'] = '留下目前的組態而不修改';
$string['rowpreviewnum'] = '預覽行數';
$string['savechanges'] = '儲存修正';
$string['savepreferences'] = '儲存偏好';
$string['scaleconfirmdelete'] = '你確定你要刪除這一量尺 "{$a}"？';
$string['scaledpct'] = '量尺 %';
$string['seeallcoursegrades'] = '觀看所有的課程成績';
$string['selectalloroneuser'] = '選擇全部或單一用戶';
$string['selectauser'] = '選擇一用戶';
$string['selectdestination'] = '選擇{$a}的目標';
$string['separator'] = '分隔符號';
$string['sepcomma'] = '逗號';
$string['septab'] = '標籤';
$string['setcategories'] = '設定類別';
$string['setcategorieserror'] = '您必須先在您的課程中設定各種類別，才能給予它們不同的加權量。';
$string['setgradeletters'] = '設定文字等第';
$string['setpreferences'] = '設定偏好';
$string['setting'] = '設定';
$string['settings'] = '設定';
$string['setweights'] = '設定加權';
$string['showactivityicons'] = '顯示活動的圖示';
$string['showactivityicons_help'] = '若啟動，活動圖示會顯示在活動名稱的旁邊。';
$string['showallhidden'] = '顯示所有隱藏';
$string['showallstudents'] = '顯示所有學生';
$string['showaverage'] = '顯示平均數';
$string['showaverage_help'] = '要顯示平均數欄？如果是從一個小群體計算平均數，學生可以估計其他學生的分數。

為了效能方面的原因，平均數是採近似值，如果它是有賴於任何隱藏的計分項目。';
$string['showaverages'] = '顯示直欄的平均分數';
$string['showaverages_help'] = '若啟用，這評分者報告將會包含一外加橫列，以顯示每一類別和計分項目的平均數。';
$string['showcalculations'] = '顯示計算方法';
$string['showcalculations_help'] = '若啟用，且開啟編輯功能時，一個計算器圖示會出現在每個計分項目和類別中。

它是用來提供對計算項目的說明，以及標明這一欄是已經計算過的。';
$string['showeyecons'] = '顯示（ 顯示/隱藏）圖示';
$string['showeyecons_help'] = '若啟用，且開啟編輯功能時，一個顯示/隱藏 圖示會顯示在每一個分數旁邊，用以控制學生能否看見這分數。';
$string['showfeedback'] = '顯示回饋';
$string['showfeedback_help'] = '顯示回饋欄？';
$string['showgrade'] = '顯示分數';
$string['showgrade_help'] = '顯示這分數欄？';
$string['showgroups'] = '顯示群組';
$string['showhiddenitems'] = '顯示隱藏項目';
$string['showhiddenitems_help'] = '指定被隱藏的成績項目之顯示方法。如果設定為隱藏，就會被完全被隱藏起來。如果設定為顯示，則被隱藏的成績項目會顯示為灰色，而成績會被完全被隱藏起來。如果設定為"只隱藏直到"，則成績項目會顯示為灰色，而成績會被完全被隱藏起來，直到所設定的日期之後，才將整個項目顯示出來。';
$string['showhiddenuntilonly'] = '僅隱藏至';
$string['showlettergrade'] = '顯示文字等第';
$string['showlettergrade_help'] = '顯示文字等第欄？';
$string['showlocks'] = '顯示鎖定';
$string['showlocks_help'] = '是否在成績旁邊顯示鎖定或未鎖定的圖示';
$string['shownohidden'] = '不顯示隱藏項目';
$string['shownooutcomes'] = '不顯示核心能力';
$string['shownumberofgrades'] = '顯示此平均數是用幾個分數算出來的';
$string['shownumberofgrades_help'] = '是否在計算平均成績時，在括弧中顯示總共統計了幾個分數，如 45(34)，表示34個成績平均45分。';
$string['showpercentage'] = '顯示百分比';
$string['showpercentage_help'] = '每一計分項目顯示百分比值？';
$string['showquickfeedback'] = '顯示快速回饋';
$string['showquickfeedback_help'] = '若啟用，當編輯功能打開時，每一個分數會出現一個回饋文字輸入方格，允許您同時編輯每個分數的回饋訊息。然後您可以按更新鈕一次儲存所有的變更，取代每次只能編輯一個回饋。

當點選更新按鈕，更改會被儲存且以強調方式顯示出來。

注意，當回饋在評分者報告中被編輯過，就會設立一個覆蓋的旗幟，表示這回饋不能再從相關活動內被更改。';
$string['showrange'] = '顯示分數全距';
$string['showrange_help'] = '顯示全距欄？';
$string['showranges'] = '顯示全距';
$string['showranges_help'] = '若啟用，評分者報告將會包含額外新增的橫列，用來顯示每一類別和計分項目的分數全距。';
$string['showrank'] = '顯示排名';
$string['showrank_help'] = '是否在每個分數項目中，顯示使用者相關課程。';
$string['showuseridnumber'] = '顯示用戶學號';
$string['showuseridnumber_help'] = '是否在一個單獨的列中顯示用戶學號。';
$string['showuserimage'] = '顯示用戶個人照片';
$string['showuserimage_help'] = '是否要在評分者報告中的姓名欄位後顯示用戶照片。';
$string['showverbose'] = '顯示{$a->category}$a->itemmodule {$a->itemname}';
$string['showweight'] = '顯示加權量';
$string['showweight_help'] = '顯示分數加權量欄？';
$string['simpleview'] = '簡單檢視';
$string['sitewide'] = '適用於整個網站';
$string['sort'] = '排序';
$string['sortasc'] = '以遞增方式排序';
$string['sortbyfirstname'] = '以名字排序';
$string['sortbylastname'] = '以姓氏排序';
$string['sortdesc'] = '以遞減方式排序';
$string['standarddeviation'] = '標準差';
$string['stats'] = '統計';
$string['statslink'] = '統計';
$string['student'] = '學生';
$string['studentsperpage'] = '每頁顯示的學生數';
$string['studentsperpage_help'] = '這設定決定評分者報告中，每一頁要顯示的學生數。';
$string['subcategory'] = '一般類別';
$string['submissions'] = '提交';
$string['submittedon'] = '已提交{$a}';
$string['switchtofullview'] = '切換到完整檢視';
$string['switchtosimpleview'] = '切換到簡單檢視';
$string['tabs'] = '分頁';
$string['topcategory'] = '最高的類別';
$string['total'] = '總計';
$string['totalweight100'] = '總加權等於100';
$string['totalweightnot100'] = '總加權不等於100';
$string['turnfeedbackoff'] = '關閉回饋';
$string['turnfeedbackon'] = '啟動回饋';
$string['typenone'] = '無';
$string['typescale'] = '量尺';
$string['typescale_help'] = '這設定能決定當使用以量尺計分時，所該使用的量尺。

在以活動為基礎的計分項目中，所用的量尺是在活動設定頁上決定。';
$string['typetext'] = '文字類型';
$string['typevalue'] = '值';
$string['uncategorised'] = '未分類';
$string['unchangedgrade'] = '成績未改變';
$string['unenrolledusersinimport'] = '本次匯入資料包含下列使用者成績但未登入這個課程：{$a}';
$string['unlimitedgrades'] = '無限制的分數';
$string['unlimitedgrades_help'] = '在預設下，分數是受限於計分項目的最高和最低值。

啟用此設定會移除此限制，並允許教師在成績簿上直接輸入超過100％的分數。

建議在離峰時間才啟用此設定，因為所有的分數將被重新計算，它可能導致伺服器的負載飆高。';
$string['unlock'] = '解除鎖定';
$string['unlockverbose'] = '解除鎖定{$a->category}$a->itemmodule {$a->itemname}';
$string['unused'] = '未使用過的';
$string['updatedgradesonly'] = '僅匯出新的或更新過的分數';
$string['uploadgrades'] = '上傳成績';
$string['useadvanced'] = '使用進階功能';
$string['usedcourses'] = '已使用的課程';
$string['usedgradeitem'] = '已使用的計分項目';
$string['usenooutcome'] = '不使用核心能力';
$string['usenoscale'] = '不使用量尺';
$string['usepercent'] = '使用百分比';
$string['user'] = '用戶';
$string['userenrolmentsuspended'] = '用戶被停權(休學)';
$string['usergrade'] = '用戶{$a->fullname} ({$a->useridnumber}) 在試題{$a->gradeidnumber}';
$string['userpreferences'] = '用戶偏好';
$string['useweighted'] = '使用加權';
$string['verbosescales'] = '詳細的量尺';
$string['viewbygroup'] = '群組';
$string['viewgrades'] = '檢視成績';
$string['warningexcludedsum'] = '警告：排除某些分數會無法與累加彙整統計相容';
$string['weight'] = '加權';
$string['weightcourse'] = '為課程使用加權成績';
$string['weightedascending'] = '依加權百分比遞增排序';
$string['weighteddescending'] = '依加權百分比遞減排序';
$string['weightedpct'] = '加權%';
$string['weightedpctcontribution'] = '加權%貢獻度';
$string['weightorextracredit'] = '加權或額外計分';
$string['weights'] = '加權量';
$string['weightsedit'] = '編輯加權量和額外計分';
$string['weightuc'] = '加權量';
$string['writinggradebookinfo'] = '寫入成績簿設定';
$string['xml'] = 'XML';
$string['yes'] = '是';
$string['yourgrade'] = '您的成績';
