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
 * Strings for component 'dbtransfer', language 'zh_cn', branch 'MOODLE_21_STABLE'
 *
 * @package   dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = '正在检查源表结构';
$string['copyingtable'] = '正在拷贝表{$a}';
$string['copyingtables'] = '正在拷贝表数据';
$string['creatingtargettables'] = '正在目标数据库建立表';
$string['dbexport'] = '导出数据库';
$string['dbtransfer'] = '传送数据库';
$string['differenttableexception'] = '表{$a}的结构不匹配。';
$string['done'] = '完成';
$string['exportdata'] = '导出数据';
$string['exportschemaexception'] = '当前数据库的结构不与所有的install.xml一致。<br /> {$a}';
$string['importschemaexception'] = '当前数据库的结构不与所有的install.xml一致。<br /> {$a}';
$string['importversionmismatchexception'] = '当前版本{$a->currentver}与导出的版本{$a->schemaver}不一致。';
$string['malformedxmlexception'] = '遇到有错误的XML数据，无法继续。';
$string['notargetconectexception'] = '抱歉，无法连接目标数据库。';
$string['transferdata'] = '传送数据';
$string['transferdbintro'] = '本脚本将把本数据库所有的数据都传送到另一个数据库服务器。';
$string['transferdbtoserver'] = '传送Moodle数据库到另一台服务器';
$string['transferringdbto'] = '传送数据库到{$a->host}上的{$a->dbtype}数据库{$a->dbname}';
$string['unknowntableexception'] = '在导出文件中发现未知的表{$a}。';
