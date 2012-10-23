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
 * Strings for component 'simpletest', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   simpletest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = '為配置文件新增前綴';
$string['all'] = '全部';
$string['codecoverageanalysis'] = '進行代碼覆蓋分析。';
$string['codecoveragecompletereport'] = '（查看代碼覆蓋完整報告）';
$string['codecoveragedisabled'] = '不能在此伺服器做代碼覆蓋測試（缺少xdebug擴展）。';
$string['codecoveragelatestdetails'] = '（{$a->date}，{$a->files}個文件，覆蓋了{$a->percentage}）';
$string['codecoveragelatestreport'] = '查看最新代碼覆蓋完整報告';
$string['confignonwritable'] = 'config.php 文件對 web 伺服器不可寫。或者修改它的權限，或者用適當的使用者編輯它，並在 php 結束標籤前新增下面這行：<br />
$CFG->unittestprefix = \'tst_\' // Change tst_ to a prefix of your choice, different from $CFG->prefix';
$string['coveredlines'] = '已覆蓋的行';
$string['coveredpercentage'] = '整體代碼覆蓋';
$string['deletingnoninsertedrecord'] = '嘗試刪除一行不是這些單元測試用例插入的數據（在表{$a->table}中，id是{$a->id}）';
$string['deletingnoninsertedrecords'] = '試圖刪除 {$a->table} 表中非本單元測試插入的記錄。';
$string['droptesttables'] = '刪除測試表';
$string['exception'] = '異常';
$string['executablelines'] = '可執行的行';
$string['fail'] = '失敗';
$string['ignorefile'] = '忽略文件中的測試';
$string['ignorethisfile'] = '忽略此測試文件，重新運行測試。';
$string['installtesttables'] = '安裝測試表';
$string['moodleunittests'] = 'Moodle單元測試：{$a}';
$string['notice'] = '注意';
$string['onlytest'] = '測試只運行於';
$string['pass'] = '通過';
$string['pathdoesnotexist'] = '路徑「{$a}」不存在。';
$string['prefix'] = '單元測試表前綴';
$string['prefixnotset'] = '未配置單元測試資料庫表前綴。填寫並提交此表單，把它新增到config.php中。';
$string['reinstalltesttables'] = '重新安裝測試表';
$string['retest'] = '重新運行測試。';
$string['retestonlythisfile'] = '只重新運行此測試文件。';
$string['runall'] = '運行來自全部測試文件的測試。';
$string['runat'] = '在{$a}上運行。';
$string['runonlyfile'] = '在此文件中只運行測試';
$string['runonlyfolder'] = '在此目錄中只運行測試';
$string['runtests'] = '運行測試';
$string['rununittests'] = '運行單元測試';
$string['showpasses'] = '既顯示通過也顯示失敗。';
$string['showsearch'] = '顯示用於測試文件的搜索。';
$string['skip'] = '跳過';
$string['stacktrace'] = '棧跟蹤：';
$string['summary'] = '{$a->run}/{$a->total} 測試用例完成：
<strong>{$a->passes}</strong>個通過，<strong>{$a->fails}</strong>個失敗和<strong>{$a->exceptions}</strong>個異常。';
$string['tablesnotsetup'] = '單元測試表還未生成。您想現在生成嗎？';
$string['testdboperations'] = '測試資料庫操作';
$string['testtablescsvfileunwritable'] = '測試表的CSV文件不可寫（{$a->filename}）';
$string['testtablesneedupgrade'] = '測試資料庫表需要升級。您想現在就升級嗎？';
$string['testtablesok'] = '測試資料庫表已成功安裝。';
$string['thorough'] = '運行整個測試（可能會很慢）。';
$string['timetakes'] = '花費時間：{$a}。';
$string['totallines'] = '總行數';
$string['uncaughtexception'] = '未捕獲在[{$a->getFile()}:{$a->getLine()}]中發生的異常[{$a->getMessage()}]。測試異常中斷。';
$string['uncoveredlines'] = '未覆蓋的行';
$string['unittestprefixsetting'] = '單元測試前綴：<strong>{$a->unittestprefix}</strong>（編輯 config.php 做修改）';
$string['unittests'] = '單元測試';
$string['updatingnoninsertedrecord'] = '嘗試更新一行不是這些單元測試用例插入的數據（在表{$a->table}中，id是{$a->id}）';
$string['version'] = '使用<a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> {$a}版。';
