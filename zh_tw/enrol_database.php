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
 * Strings for component 'enrol_database', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dbencoding'] = '資料庫編碼';
$string['dbhost'] = '資料庫主機';
$string['dbhost_desc'] = '輸入資料庫伺服器IP地址或域名';
$string['dbname'] = '資料庫名稱';
$string['dbpass'] = '資料庫密碼';
$string['dbsetupsql'] = '資料庫設置命令';
$string['dbsetupsql_desc'] = '設置某些資料庫的SQL命令。通常用來設置通信編碼 — 例如在MySQL和PostgreSQL中：<em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = '使用sybase引號';
$string['dbsybasequoting_desc'] = 'Sybase風格的單引號轉義 — Oracle、MS SQL和其它某些資料庫需要。不要在MySQL上使用！';
$string['dbtype'] = '資料庫型式';
$string['dbtype_desc'] = 'ADOdb資料庫驅動名，也就是外部數據塊引擎的類型。';
$string['dbuser'] = '使用者';
$string['debugdb'] = '調試ADOdb';
$string['debugdb_desc'] = '調試ADOdb與外部資料庫的連結 — 如登錄時顯示空白頁，就使用此選項。不適用於正式使用的網站！';
$string['defaultcategory'] = '預設的新課程類別';
$string['defaultcategory_desc'] = '自動建立的課程的預設類別。當未指定類別id或類別id不存在時使用。';
$string['defaultrole'] = '預設角色';
$string['defaultrole_desc'] = '如果外部表中未指定其它角色，會預設分配此角色。';
$string['ignorehiddencourses'] = '忽略隱藏的課程';
$string['ignorehiddencourses_desc'] = '如果啟用，使用者不會被加入設為學生不可學習的課程。';
$string['localcoursefield'] = '我們用來對照遠端資料庫的課程資料表的欄位';
$string['localrolefield'] = '我們用來比對遠端資料庫資料的角色資料表的欄位名稱（例如：shortname）';
$string['localuserfield'] = '我們用來對照遠端資料庫的使用者資料表的欄位';
$string['newcoursecategory'] = '新課程分類id欄位';
$string['newcoursefullname'] = '新課程的全稱欄位';
$string['newcourseidnumber'] = '新課程編號欄位';
$string['newcourseshortname'] = '新課程簡稱欄位';
$string['newcoursetable'] = '遠程新課程數據表';
$string['newcoursetable_desc'] = '指定一個表名，它應該包含所有要自動新建的課程。留空表示不建立任何課程。';
$string['pluginname'] = '外部資料庫';
$string['pluginname_desc'] = '您可以使用幾乎所有類型的外部資料庫控制您的選課。您的外部資料庫至少要有一個課程ID欄位和一個使用者ID欄位。它們會和本地課程表和使用者表中您選擇的欄位相辨識。';
$string['remotecoursefield'] = '我們用來比對課程資料表的遠端資料表名稱欄位';
$string['remotecoursefield_desc'] = '用來和課程表辨識的遠程表中的欄位名。';
$string['remoteenroltable'] = '遠程使用者選課數據表';
$string['remoteenroltable_desc'] = '指定包含使用者選課資訊的表名。留空表示不同步任何使用者的選課。';
$string['remoterolefield'] = '我們用來比對角色資料表的遠端資料表名稱欄位';
$string['remoterolefield_desc'] = '用來和角色表辨識的遠程表中的欄位名';
$string['remoteuserfield'] = '我們用來比對使用者資料表的遠端資料表名稱欄位';
$string['remoteuserfield_desc'] = '用來和使用者表辨識的遠程表中的欄位名';
$string['settingsheaderdb'] = '外部資料庫連結';
$string['settingsheaderlocal'] = '本地欄位對應';
$string['settingsheadernewcourses'] = '建立新課程';
$string['settingsheaderremote'] = '同步遠程選課';
$string['templatecourse'] = '新課程模板';
$string['templatecourse_desc'] = '可選：自動建立的課程可以從模板課程拷貝設置。在此輸入模板課程的簡稱。';
