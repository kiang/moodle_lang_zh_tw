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
 * Strings for component 'filters', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   filters
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actfilterhdr'] = '使用中的篩選條件';
$string['addfilter'] = '新增篩選條件';
$string['anycategory'] = '任何類別';
$string['anycourse'] = '任何課程';
$string['anyfield'] = '任何欄位';
$string['anyrole'] = '任何角色';
$string['anyvalue'] = '不限';
$string['applyto'] = '應用到';
$string['categoryrole'] = '類別角色';
$string['contains'] = '包含';
$string['content'] = '內容';
$string['contentandheadings'] = '內容和標題';
$string['courserole'] = '課程角色';
$string['courserolelabel'] = '課程類別：{$a->categoryname} 課程名稱：{$a->coursename} 角色名：{$a->rolename} 名字：{$a->label}';
$string['courserolelabelerror'] = '{$a->label} 錯誤，課程：{$a->coursename} 不存在';
$string['datelabelisafter'] = '{$a->label} 晚於 {$a->after}';
$string['datelabelisbefore'] = '{$a->label} 早於 {$a->before}';
$string['datelabelisbetween'] = '{$a->label} 在 {$a->after} 與 {$a->before} 之間';
$string['defaultx'] = '預設（{$a}）';
$string['disabled'] = '停用';
$string['doesnotcontain'] = '不包含';
$string['endswith'] = '結尾是';
$string['filterallwarning'] = '對標題和內容使用過濾器會大大增加您的伺服器的負荷。請謹慎使用「應用到」設置。其主要用途是針對multilang過濾器。';
$string['filtersettings'] = '過濾器設置';
$string['filtersettingsforin'] = '在{$a->context}中過濾器{$a->filter}的設置';
$string['filtersettings_help'] = '本頁使您可以在本站指定部分打開或關閉過濾器。

可能有些過濾器允許您做局部設置，在它們的名字後面會有一個設置連結。';
$string['filtersettingsin'] = '{$a}中的過濾器設置';
$string['firstaccess'] = '第一次登入';
$string['globalrolelabel'] = '{$a->label} 是 {$a->value}';
$string['includenever'] = '包括「從未」';
$string['isactive'] = '啟用？';
$string['isafter'] = '晚於';
$string['isanyvalue'] = '任意值';
$string['isbefore'] = '早於';
$string['isdefined'] = '已定義';
$string['isempty'] = '空的';
$string['isequalto'] = '等於';
$string['isnotdefined'] = '未定義';
$string['isnotequalto'] = '不等於';
$string['neveraccessed'] = '從未訪問';
$string['nevermodified'] = '從未修改';
$string['newfilter'] = '篩選';
$string['nofiltersenabled'] = '本站沒有打開任何過濾器外掛。';
$string['off'] = '關閉';
$string['offbutavailable'] = '關閉，但是可以使用';
$string['on'] = '打開';
$string['profilelabel'] = '<b>{$a->label}</b>: <b>{$a->profile}</b> <b>{$a->operator}</b> <b>{$a->value}</b>';
$string['profilelabelnovalue'] = '<b>{$a->label}</b>: <b>{$a->profile}</b> <b>{$a->operator}</b>';
$string['removeall'] = '移除所有的篩選條件';
$string['removeselected'] = '移除勾選的條件';
$string['selectlabel'] = '{$a->label} {$a->operator} {$a->value}';
$string['startswith'] = '開頭是';
$string['tablenosave'] = '上表中的更改已自動儲存';
$string['textlabel'] = '{$a->label} {$a->operator} {$a->value}';
$string['textlabelnovalue'] = '{$a->label} {$a->operator}';
