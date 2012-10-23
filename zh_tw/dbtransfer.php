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
 * Strings for component 'dbtransfer', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = '正在檢查源表結構';
$string['copyingtable'] = '正在拷貝表{$a}';
$string['copyingtables'] = '正在拷貝表數據';
$string['creatingtargettables'] = '正在目標數據庫建立表';
$string['dbexport'] = '導出數據庫';
$string['dbtransfer'] = '傳送數據庫';
$string['differenttableexception'] = '表{$a}的結構不匹配。';
$string['done'] = '完成';
$string['exportdata'] = '導出數據';
$string['exportschemaexception'] = '當前數據庫的結構不與所有的install.xml一致。<br /> {$a}';
$string['importschemaexception'] = '當前數據庫的結構不與所有的install.xml一致。<br /> {$a}';
$string['importversionmismatchexception'] = '當前版本{$a->currentver}與導出的版本{$a->schemaver}不一致。';
$string['malformedxmlexception'] = '遇到有錯誤的XML數據，無法繼續。';
$string['notargetconectexception'] = '抱歉，無法連接目標數據庫。';
$string['transferdata'] = '傳送數據';
$string['transferdbintro'] = '本腳本將把本數據庫所有的數據都傳送到另一個數據庫服務器。';
$string['transferdbtoserver'] = '傳送Moodle數據庫到另一台服務器';
$string['transferringdbto'] = '傳送數據庫到{$a->host}上的{$a->dbtype}數據庫{$a->dbname}';
$string['unknowntableexception'] = '在導出文件中發現未知的表{$a}。';
