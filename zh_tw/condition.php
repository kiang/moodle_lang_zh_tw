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
 * Strings for component 'condition', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   condition
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = '向表單加入 {no} 個活動條件';
$string['addgrades'] = '向表單加入 {no} 個成績條件';
$string['availabilityconditions'] = '縣市連接';
$string['availablefrom'] = '可以瀏覽時間';
$string['availablefrom_help'] = '可以瀏覽的開始結束時間決定了在什麼時間學生可以通過課程頁面的連接瀏覽此活動。

活動的瀏覽時間和開放時間是不同的。在開放時間之外，學生仍然可以查看活動描述。而在可瀏覽時間之外，對活動的瀏覽完全禁止。';
$string['availableuntil'] = '可瀏覽直到';
$string['badavailabledates'] = '無效日期。入果您兩個日期都設定了，那麼可瀏覽時間應該在"直到"時間之前。';
$string['badgradelimits'] = '如果您同時設定了成績上限和下限，那麼上限必須高於下限。';
$string['completion_complete'] = '必須標記為"完成"';
$string['completioncondition'] = '活動完成條件';
$string['completioncondition_help'] = '此設定決定在參加本活動之前，必須先達到那些活動的完成條件。注意，在設定完成條件之前，必須先設定好進度追蹤。

如果需要，也可以設定多條活動完成條件。那麼必須先滿足所有的活動條件，才能參加本活動。';
$string['completion_fail'] = '完成時必須是"不及格"';
$string['completion_incomplete'] = '必須未標記為"完成"';
$string['completion_pass'] = '完成時必須是"及格"';
$string['configenableavailability'] = '啟用後，可以基於條件(日期、成績或完成狀態)
設定活動或資源的可用性。';
$string['enableavailability'] = '啟用條件可用性';
$string['grade_atleast'] = '至少要';
$string['gradecondition'] = '成績條件';
$string['gradecondition_help'] = '此設置決定在參加此活動之前，必須先滿足哪些成績條件。

根據需要，可以設置多個成績條件。所有條件都滿足後才能參加此活動。';
$string['gradeitembutnolimits'] = '您至少要輸入上限和下限中的一個。';
$string['gradelimitsbutnoitem'] = '您必須選擇一個成績項。';
$string['gradesmustbenumeric'] = '最高和最低分必須是數值（或留空）。';
$string['grade_upto'] = '且少於';
$string['none'] = '（無）';
$string['notavailableyet'] = '還不可用';
$string['requires_completion_0'] = '不可用，除非活動<strong>{$a}</strong>未完成。';
$string['requires_completion_1'] = '不可用，直到標記活動<strong>{$a}</strong>為完成。';
$string['requires_completion_2'] = '不可用，直到標記活動<strong>{$a}</strong>為完成且及格。';
$string['requires_completion_3'] = '不可用，除非活動<strong>{$a}</strong>已完成且不及格。';
$string['requires_date'] = '自 {$a} 起可用。';
$string['requires_date_before'] = '直到 {$a} 才可用。';
$string['requires_date_both'] = '從{$a->from}到{$a->until}之間可用。';
$string['requires_grade_any'] = '不可用，直到您在<strong>{$a}</strong>獲得成績。';
$string['requires_grade_max'] = '不可用，除非您在<strong>{$a}</strong>中獲得了適當的分數。';
$string['requires_grade_min'] = '不可用，直到您在<strong>{$a}</strong>中獲得了要求的分數。';
$string['requires_grade_range'] = '不可用，除非您在 <strong>{$a}</strong>中獲得了指定的分數。';
$string['showavailability'] = '活動可用之前';
$string['showavailability_hide'] = '完全隱藏活動';
$string['showavailability_show'] = '活動以暗色顯示，並顯示受限信息';
$string['userrestriction_hidden'] = '限制（完全隱藏，無消息）：“{$a}”';
$string['userrestriction_visible'] = '限制：“{$a}”';
