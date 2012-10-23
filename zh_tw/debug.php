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
 * Strings for component 'debug', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   debug
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = '未找到身份認證插件 {$a}。';
$string['blocknotexist'] = '{$a} 版塊不存在';
$string['cannotbenull'] = '{$a}不能為空！';
$string['cannotdowngrade'] = '不能將{$a->plugin}從{$a->oldversion} 降級到{$a->newversion}。';
$string['cannotfindadmin'] = '找不到具有管理員權限的用戶！';
$string['cannotinitpage'] = '無法完全初始化頁面：無效的{$a->name} id {$a->id}';
$string['cannotsetuptable'] = '{$a}表不能成功建立！';
$string['codingerror'] = '檢測到源代碼錯誤，必須由程序員修復：{$a}';
$string['configmoodle'] = 'Moodle尚未配置好，你需要首先編輯config.php文件。';
$string['erroroccur'] = '一個錯誤發生在此進程中';
$string['invalidarraysize'] = '{$a}參數中的數組大小不正確';
$string['invalideventdata'] = '提交了非法的eventadata：{$a}';
$string['invalidparameter'] = '檢測到無效的參數值，操作無法繼續。';
$string['invalidresponse'] = '檢測到無效的響應值，操作無法繼續。';
$string['missingconfigversion'] = '因配置表未包含版本號，所以不能繼續，抱歉。';
$string['modulenotexist'] = '{$a}模塊不存在';
$string['morethanonerecordinfetch'] = '在fetch()中找到多條記錄！';
$string['mustbeoveride'] = '抽象方法{$a}必須被覆蓋。';
$string['noactivityname'] = '從page_generic_activity派生的頁面對象沒有定義$this->activityname';
$string['noadminrole'] = '找不到管理員角色';
$string['noblocks'] = '未安裝任何包塊！';
$string['nocate'] = '無分類！';
$string['nomodules'] = '未找到模塊！！';
$string['nopageclass'] = '已導入{$a}，但是未找到頁面類';
$string['noreports'] = '沒有可訪問的報告';
$string['notables'] = '無表！';
$string['phpvaroff'] = 'PHP服務器變量 \'{$a->name}\' 應設置為 Off - {$a->link}';
$string['phpvaron'] = 'PHP服務器變量”{$a->name}“未開啟 - {$a->link}';
$string['sessionmissing'] = '對象{$a}在會話中丟失';
$string['sqlrelyonobsoletetable'] = 'SQL語句使用了廢棄的表：{$a}！必須由開發者來修改您的代碼。';
$string['withoutversion'] = '主version.php文件不存在、不可讀或者損壞了。';
$string['xmlizeunavailable'] = 'xmlize功能不可用';
