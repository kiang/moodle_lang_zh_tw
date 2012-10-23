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
 * Strings for component 'qtype_multianswer', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   qtype_multianswer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingmultianswer'] = '新增內嵌答案(完形填空)題';
$string['confirmquestionsaveasedited'] = '我確認我要把這試題儲存為已經編輯過';
$string['confirmsave'] = '確認然後儲存{$a}';
$string['correctanswer'] = '正確答案';
$string['correctanswerandfeedback'] = '正確答案和回饋';
$string['decodeverifyquestiontext'] = '解碼並驗證這題目文字';
$string['editingmultianswer'] = '修改內嵌答案(完形填空)';
$string['layout'] = '版面配置';
$string['layouthorizontal'] = '以單選按鈕排成橫列';
$string['layoutselectinline'] = '在文字行裡的下拉選單';
$string['layoutundefined'] = '未定義的版面配置';
$string['layoutvertical'] = '直式單選按鈕';
$string['multianswer'] = '內嵌答案(完形填空)';
$string['multianswer_help'] = '內嵌答案(完形填空)題是一段文字，中間可以夾雜多道題目，例如選擇題、填空題。';
$string['multianswersummary'] = '這種類型的題目非常靈活，但建立題目時必須輸入特殊代碼。可以內嵌的題目包括選擇題、填空題和數字題。';
$string['nooptionsforsubquestion'] = '無法取得用於試題部件# {$a->sub} (question->id={$a->id})的選項';
$string['noquestions'] = '這一克漏字試題"<strong>{$a}</strong>"沒有包含任何題目';
$string['qtypenotrecognized'] = '試題型態 {$a} 無法識別';
$string['questiondefinition'] = '題目定義';
$string['questiondeleted'] = '試題已被刪除';
$string['questioninquiz'] = '<ul>
  <li>新增或刪除試題， </li>
  <li>在文章中更改試題順序，</li>
  <li>更改它們的題型 (數值題、簡答題、選擇題)。 </li></ul>';
$string['questionnadded'] = '題目已新增';
$string['questionnotfound'] = '無法找到的試題部件 #{$a}的試題';
$string['questionsaveasedited'] = '這試題會儲存成編輯過形式';
$string['questionsless'] = '在這克漏字題中，少於{$a} 個試題儲存在資料庫中';
$string['questionsmissing'] = '這試題的文字必須至少包含一個空白';
$string['questionsmore'] = '在這克漏字題中，多於{$a} 個試題儲存在資料庫中';
$string['questiontypechanged'] = '題型已經改變';
$string['questiontypechangedcomment'] = '至少有一種題型曾經被更改過。<br>你是否新增、刪除、或移動一個試題？';
$string['questionusedinquiz'] = '這一試題是用在 {$a->nb_of_quiz} 測驗卷上，總作答次為 : {$a->nb_of_attempts}';
$string['storedqtype'] = '已經儲存的試題類型{$a}';
$string['subqresponse'] = '部件{$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = '未知的題型：題目部件# {$a->sub} 的 {$a->type}';
$string['warningquestionmodified'] = '<b>警告</b>';
$string['youshouldnot'] = '<b>你不可以</b>';
