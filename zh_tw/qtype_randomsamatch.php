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
 * Strings for component 'qtype_randomsamatch', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingrandomsamatch'] = '新增一道隨機填空辨識題';
$string['editingrandomsamatch'] = '編輯隨機填空辨識題';
$string['nosaincategory'] = '您選擇的這個\'{$a->catname}\'題目類別中，沒有簡答題。請選擇一個不同類別，並製作一些題目。';
$string['notenoughsaincategory'] = '您選擇的這個\'{$a->catname}\'題目類別中，只有 {$a->nosaquestions}題簡答題。請選擇一個不同類別，並製作更多題目，或是減少您的待選題目數。';
$string['randomsamatch'] = '隨機填空辨識題';
$string['randomsamatch_help'] = '從學生的角度看，很像辨識題。區別是，名詞和短句（問題）列表是從當前類別的填空題中隨機抽取的。此類別中必須有足夠數量的還未使用的填空題，否則會顯示錯誤資訊。';
$string['randomsamatchsummary'] = '很像辨識題，不過是用指定類別中的填空題隨機生成的。';
