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
 * Strings for component 'report_customlang', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   report_customlang
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = '保存字元串到語言包';
$string['checkout'] = '打開語言包並編輯';
$string['checkoutdone'] = '語言包已加載';
$string['checkoutinprogress'] = '正加載語言包';
$string['confirmcheckin'] = '即將把修改過的字元串保存到您本地語言包中。這將從翻譯器匯出自訂的字元串到數據目錄中，然後Moodle會開始使用這些修改過的字元串。按「繼續」按鈕開始保存。';
$string['customlang:edit'] = '編輯本地翻譯';
$string['customlang:view'] = '查看本地翻譯';
$string['filter'] = '過濾字元串';
$string['filtercomponent'] = '顯示這些組件的字元串';
$string['filtercustomized'] = '只顯示自訂的';
$string['filtermodified'] = '只顯示修改過的';
$string['filteronlyhelps'] = '只顯示幫助';
$string['filtershowstrings'] = '顯示字元串';
$string['filterstringid'] = '字元串標識符';
$string['filtersubstring'] = '顯示的字元串包含';
$string['headingcomponent'] = '組件';
$string['headinglocal'] = '本地自訂';
$string['headingstandard'] = '標準文字';
$string['headingstringid'] = '字元串';
$string['markinguptodate'] = '標記此自訂為最新';
$string['markinguptodate_help'] = '如果在您自訂字元串後，原始的英文或主翻譯有修改，那麼自訂的翻譯就過期了。請重新審查此自訂翻譯。如果您認為它是最新的，就點此複選框。否則，就編輯它。';
$string['markuptodate'] = '標記為最新';
$string['modifiedno'] = '沒有需要保存的已改動字元串。';
$string['modifiednum'] = '有 {$a} 條修改過的字元串。您想把它們保存到您本地的語言包嗎？';
$string['nostringsfound'] = '未找到字元串，請修改過濾器設置';
$string['placeholder'] = '替換符號';
$string['placeholder_help'] = '替換符號是字元串中的一些特定符號，比如「{$a}」或「{$a->something}」。當字元串最終被輸出時，它們會被替換為其它值。

一定要保持它們本來的樣子。不要翻譯它們。';
$string['placeholderwarning'] = '有替換符號的字元串';
$string['pluginname'] = '定製語言';
$string['savecheckin'] = '保存修改到語言包';
$string['savecontinue'] = '生效修改並繼續編輯';
