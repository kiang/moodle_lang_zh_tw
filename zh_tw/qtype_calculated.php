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
 * Strings for component 'qtype_calculated', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   qtype_calculated
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingcalculated'] = '增加一道計算題';
$string['additem'] = '添加題目';
$string['addmoreanswerblanks'] = '增加另一個答案空格';
$string['addmoreunitblanks'] = '再增加 {$a} 個單位空格';
$string['addsets'] = '添加集合';
$string['answerhdr'] = '答案';
$string['answerstoleranceparam'] = '答案誤差容忍度參數';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = '任何數值';
$string['atleastoneanswer'] = '您至少要提供一個答案。';
$string['atleastonerealdataset'] = '這裡至少要有一真實資料集在試題文字中。';
$string['atleastonewildcard'] = '這裡至少要有一個變數符號在答案計算公式或試題文字中。';
$string['calcdistribution'] = '分佈';
$string['calclength'] = '小數點';
$string['calcmax'] = '最大';
$string['calcmin'] = '最小';
$string['calculated'] = '計算題';
$string['calculated_help'] = '在計算題中，每道題都可以使用通配符（放在大括號中），而在答題時通配符會被替換。例如，題目是“長為{l}寬為{w}的長方形面積是多少？”的正確答案計算公式是“{l}*{w}”（ * 表示乘法）�一';
$string['calculatedsummary'] = '計算題和數字題類似，但在答題時，題目中的數可以從一個集合中隨機選擇�一';
$string['choosedatasetproperties'] = '選擇變數資料集的性能';
$string['choosedatasetproperties_help'] = '資料集是一個數值的集合，這數值是用來插入變數符號的地方。<br/>
你可以為一個特定的試題建立一私人資料集，或建立一共用的資料集，讓它可用於這一類別中的其他計算題。';
$string['correctanswerformula'] = '正確答案公式';
$string['correctanswershows'] = '顯示正確的答案';
$string['correctanswershowsformat'] = '格式';
$string['correctfeedback'] = '給任何正確的回答';
$string['dataitemdefined'] = '有{$a} 個數值已經被界定，可以使用。';
$string['datasetrole'] = '這變數 <strong>{x..}</strong>將會被一數值所取代，而這數值是取自它們的資料集。';
$string['decimals'] = '{$a}位小數';
$string['deleteitem'] = '刪除題目';
$string['deletelastitem'] = '刪除最後題目';
$string['editdatasets'] = '編輯變數用的資料集';
$string['editdatasets_help'] = '你可以藉由在每一變數欄位上輸入一數字，然後點選"新增"按鈕來產生變數值。

要自動產生10個或更多個數值，選擇所需要的數值的數目，然後點擊“新增”按鈕。

一個均勻(uniform)分佈是指在兩界線之間的任何數值，都有相同的出現機率；而對數均勻(loguniform)分佈意味著愈靠近下限的數值會有更高的出現機率。';
$string['editingcalculated'] = '編輯計算題';
$string['existingcategory1'] = '會將使用一個已經存在的共用資料集';
$string['existingcategory2'] = '來自現有檔案集的一個檔案，它也被這一類目的其他試題所使用。';
$string['existingcategory3'] = '來自現有鏈結集的一個鏈結，它也被這一類目的其他試題所使用。';
$string['forceregeneration'] = '強制再產生';
$string['forceregenerationall'] = '所有的變數都強制再產生';
$string['forceregenerationshared'] = '只有非共用的變數強制再產生';
$string['functiontakesatleasttwo'] = '這函數{$a} 至少需要有兩個引數';
$string['functiontakesnoargs'] = '這函數{$a} 沒有使用任何引數';
$string['functiontakesonearg'] = '這函數{$a} 必須剛好有一個引數';
$string['functiontakesoneortwoargs'] = '這函數{$a} 必須有一個或兩個引數';
$string['functiontakestwoargs'] = '這函數{$a} 必須剛好有兩個引數';
$string['generatevalue'] = '產生一新數值介於';
$string['getnextnow'] = '現在取得"要添加的試題"';
$string['hexanotallowed'] = '在資料集 <strong>{$a->name}</strong>中，不可以使用十六進制格式的數值 {$a->value}';
$string['illegalformulasyntax'] = '以"{$a}"開始的不合規定的公式語法';
$string['incorrectfeedback'] = '給任何不正確的回答';
$string['itemno'] = '試題 {$a}';
$string['itemscount'] = '題目<br />數量';
$string['itemtoadd'] = '要新增的題目';
$string['keptcategory1'] = '將使用之前相同的共享資料集';
$string['keptcategory2'] = '同以前，將使用取自同一分類可重複使用檔案集合的檔案';
$string['keptcategory3'] = '同以前，將使用取自同一分類可重複使用鏈結集合的鏈結';
$string['keptlocal1'] = '同以前，將使用同一個現有私人資料集';
$string['keptlocal2'] = '同以前，將使用取自同一私人檔案集合的檔案';
$string['keptlocal3'] = '同以前，將使用取自同一私人鏈結集合的鏈結';
$string['loguniform'] = 'Loguniform對數均勻分佈';
$string['loguniformbit'] = '數字，來自loguniform 分佈';
$string['makecopynextpage'] = '下一頁 (新試題)';
$string['mandatoryhdr'] = '強制讓變數呈現在答案中';
$string['max'] = '最大';
$string['min'] = '最小';
$string['minmax'] = '數值的範圍';
$string['missingformula'] = '少了公式';
$string['missingname'] = '少了試題概念名稱';
$string['missingquestiontext'] = '少了試題文字';
$string['mustbenumeric'] = '您必須在這裡輸入數字。';
$string['mustenteraformulaorstar'] = '你必須輸入一公式或"*"';
$string['mustnotbenumeric'] = '不能輸入數字。';
$string['newcategory1'] = '將使用一個新的共享資料集';
$string['newcategory2'] = '使用新檔案集合中的一個檔案，它也可能被這類別的其他試題所使用。';
$string['newcategory3'] = '使用新鏈結集合中的一個電節，它也可能被這類別的其他試題所使用。';
$string['newlocal1'] = '將使用一個新的私人資料集';
$string['newlocal2'] = '來自新檔案集合的一個檔案，它只能用於這個試題';
$string['newlocal3'] = '來自新鏈結集合的一個鏈結，它只能用於這個試題';
$string['newsetwildcardvalues'] = '變數值的新集合';
$string['nextitemtoadd'] = '下一個“要新增的試題”';
$string['nextpage'] = '下一頁';
$string['nocoherencequestionsdatyasetcategory'] = '問題ID {$ A-> QID}，類別ID {$ A-> qcat共享外卡{$ A->名稱}類別ID {$ A-> sharedcat}}是不是相同。編輯的問題。';
$string['nocommaallowed'] = '不能使用英文逗點","，請像在0.013或1.3E-2中使用英文的句點"."。';
$string['nodataset'] = '沒有 -  它不是一個變數';
$string['nosharedwildcard'] = '這個類別沒有共用的變數';
$string['notvalidnumber'] = '變數值不是一個有效的數字';
$string['oneanswertrueansweroutsidelimits'] = '至少有一個正確答案超出真正值的限制。<br />
請在進階參數中修改答案的容許誤差';
$string['param'] = '參數 {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = '給任何只有部分正確的回答';
$string['possiblehdr'] = '可能只在此試題文字中出現的萬用字元';
$string['questiondatasets'] = '試題資料集';
$string['questiondatasets_help'] = '變數符號的資料集，它將被使用在每一個別的試題';
$string['questionstoredname'] = '試題存儲所用的名稱';
$string['replacewithrandom'] = '以一個隨機數值替換';
$string['reuseifpossible'] = '若可以，重複使用先前的數值';
$string['setno'] = '集合 {$a}';
$string['setwildcardvalues'] = '變數值的集合';
$string['sharedwildcard'] = '共用的變數符號{<strong>{$} </ stong>}';
$string['sharedwildcardname'] = '共用的變數符號';
$string['sharedwildcards'] = '共用的變數';
$string['showitems'] = '顯示';
$string['significantfigures'] = '{$a}位有效數字';
$string['significantfiguresformat'] = '有效位數';
$string['synchronize'] = '將來自共用資料集的資料，與同一測驗卷的其他試題同步化，';
$string['synchronizeno'] = '不要同步化';
$string['synchronizeyes'] = '同步化';
$string['synchronizeyesdisplay'] = '同步化，並顯示以這共用資料集的名稱作為試題名稱的字首。';
$string['tolerance'] = '容許誤差 &plusmn;';
$string['trueanswerinsidelimits'] = '正確答案 : {$a->correct} 在正確值{$a->true}的界線之內';
$string['trueansweroutsidelimits'] = '<span class="error">錯誤!
答案 : {$a->correct} 超出正確值{$a->true}的界線之外</span>';
$string['uniform'] = '均勻(Uniform)分佈';
$string['uniformbit'] = '小數，來自一個均勻(uniform)分佈';
$string['unsupportedformulafunction'] = '不支援公式函數{$a}';
$string['updatecategory'] = '更新題庫';
$string['updatedatasetparam'] = '更新資料集合的參數';
$string['updatetolerancesparam'] = '更新答案容許誤差的參數';
$string['updatewildcardvalues'] = '更新變數數值';
$string['useadvance'] = '使用進階按鈕來看這錯誤';
$string['usedinquestion'] = '被使用在試題中';
$string['wildcard'] = '變數 {<strong>{$a}</strong>}';
$string['wildcardparam'] = '用來產生這些數值的變數參數';
$string['wildcardrole'] = '變數<strong>{x..}</strong>將會被依數值所取代，這數值是由產生的數值';
$string['wildcards'] = '變數符號 {a}...{z}';
$string['wildcardvalues'] = '變數數值';
$string['wildcardvaluesgenerated'] = '變數數值已經產生';
$string['youmustaddatleastoneitem'] = '在你可以儲存這個試題之前，你必須添加至少一個資料集合的項目。';
$string['youmustaddatleastonevalue'] = '在你可以儲存這個試題之前，你必須添加至少一個變數數值的集合。';
$string['youmustenteramultiplierhere'] = '你必須在這裡輸入一個乘數。';
$string['zerosignificantfiguresnotallowed'] = '正確答案的有效數字不能為零！';
