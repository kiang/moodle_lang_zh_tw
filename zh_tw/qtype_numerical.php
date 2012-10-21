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
 * Strings for component 'qtype_numerical', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   qtype_numerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = '可接受的誤差';
$string['addingnumerical'] = '添加一道數字題';
$string['addmoreanswerblanks'] = '增加 {no} 個空白答案';
$string['addmoreunitblanks'] = '再增加 {no} 個空白單位';
$string['answermustbenumberorstar'] = '答案必須是數字，比如 -1.234 或 3e8，或是 \' * \'。';
$string['answerno'] = '答案 {$a}';
$string['decfractionofquestiongrade'] = '試題配分的百分比(0-1)';
$string['decfractionofresponsegrade'] = '答案配分的百分比(0-1)';
$string['decimalformat'] = '小數';
$string['editableunittext'] = '可編輯單位文字';
$string['editingnumerical'] = '編輯數字題';
$string['errornomultiplier'] = '您必須指定這個單位的乘數。';
$string['errorrepeatedunit'] = '不能有兩個相同名稱的單位。';
$string['geometric'] = '幾何的';
$string['invalidnumber'] = '你必須輸入一有效的數字';
$string['invalidnumbernounit'] = '您必須輸入一有效數字，答案中不要包含單位';
$string['invalidnumericanswer'] = '在您輸入的答案之中，有一個不是有效數值。';
$string['invalidnumerictolerance'] = '在您輸入的容忍度之中，有一個不是有效數值。';
$string['leftexample'] = '放在左邊，例如 $1.00 或 £1.00';
$string['manynumerical'] = '是否輸入單位是自行決定的，若有輸入單位，它會在評分之前用來轉換答案到單位1。';
$string['multiplier'] = '乘數';
$string['nominal'] = '類別的';
$string['noneditableunittext'] = '單位1沒有可編輯的文字';
$string['nonvalidcharactersinnumber'] = '在數字中沒有有效的字元';
$string['notenoughanswers'] = '您必須至少輸入一個答案。';
$string['nounitdisplay'] = '沒有顯示單位';
$string['numerical'] = '數字題';
$string['numerical_help'] = '從學生角度看，數字題很像填空題。區別是，數字題可以設置可接受的誤差范圍，這樣若干個不同的答案都可被看做是一個答案。例如，如果答案是10，可接受的誤差是2，那麼所有8到12之間的數字都被認為是正確的�一';
$string['numericalmultiplier'] = '乘數';
$string['numericalmultiplier_help'] = '乘數是用來乘以答案，以進行單位換算用的。

單位1的預設乘數是1
，因此如果正確的數值答案答案是5500，而你在單位1設定W做為單位，那麼正確答案是5500W。

如果你在單位2加上一個新單位kW，而乘數為0.001，這表示另一個正確答案是5.5kW。

注意，可接受的誤差也 需要換算，因此允許誤差如果是100W，那換算成另一個單位就是0.1kW。';
$string['numericalsummary'] = '答案為數字，可以包含單位。通過和多種標准答案比較來自動評分，有一定的容錯能力�一';
$string['oneunitshown'] = '單位1是自動顯示在答案方格旁邊';
$string['onlynumerical'] = '完全沒有使用單位。只有數值會被計分。';
$string['pleaseenterananswer'] = '請輸入一答案';
$string['pleaseenteranswerwithoutthousandssep'] = '請輸入你的答案，不要使用千位的分隔符號 ({$a})';
$string['relative'] = '相對的';
$string['rightexample'] = '在右邊，例如1.00cm 或 1.00km';
$string['selectunit'] = '選擇一個單位';
$string['selectunits'] = '選擇單位';
$string['studentunitanswer'] = '單位輸入時使用';
$string['tolerancetype'] = '容忍度類型';
$string['unit'] = '單位';
$string['unitappliedpenalty'] = '這些分數包含單位錯誤的扣分 {$a}';
$string['unitchoice'] = '有多種單位可選擇';
$string['unitedit'] = '編輯單位';
$string['unitgraded'] = '必須要寫出單位，並會被評分';
$string['unithandling'] = '單位處裡';
$string['unithdr'] = '單位 {$a}';
$string['unitincorrect'] = '你沒有寫出正確的單位';
$string['unitmandatory'] = '強制的';
$string['unitmandatory_help'] = '*答案將會依據寫出的單位來評分。

*若單位欄是空白的，將會使用單位錯誤扣分。';
$string['unitnotselected'] = '你必須選擇一種單位';
$string['unitonerequired'] = '你必須輸入至少一種單位';
$string['unitoptional'] = '可選用的單位';
$string['unitoptional_help'] = '*若單位欄位不是空白的，這回答將會以這單位來計分。

*單位是錯誤或不明的，這回答將會視為無效。';
$string['unitpenalty'] = '單位錯誤扣分';
$string['unitpenalty_help'] = '單位扣分是應用在：

*把錯誤的單位名稱輸入到單位的位置上。

*把單位輸入到數值的位置上。';
$string['unitposition'] = '單位放在';
$string['unitselect'] = '下拉選單';
$string['validnumberformats'] = '有效數值格式';
$string['validnumberformats_help'] = '一般數字13500.67, 13 500.67, 13500,67 或 13 500,67 <br/>
*若你使用千位數的分隔符號，就要記得要加上小數點，13,500.67 : 13,500.<br />
* 就指數形式，比如 1.350067 * 10<sup>4</sup>, 就使用 1.350067 E4 或 1.350067 E04';
$string['validnumbers'] = '13500.67,
13 500.67,
13,500.67,
13500,67,
13 500,67,
1.350067 E4 or 1.350067 E04';
