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
 * Strings for component 'tool_langimport', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['install'] = '安裝選擇的語言';
$string['installedlangs'] = '已經安裝的語言';
$string['langimport'] = '語言匯入工具';
$string['langimportdisabled'] = '語言匯入功能已經被關閉。

你必須在檔案系統層次以手動方式更新你的語言包。

在你這樣做之後，不要忘記清除字串快取。';
$string['langpackinstalled'] = '語言包{$a}已成功安裝。';
$string['langpackremoved'] = '成功移除語言';
$string['langpackupdateskipped'] = '跳過{$a}語言包的更新';
$string['langpackuptodate'] = '語言包{$a}是最新版本';
$string['langupdatecomplete'] = '語言包更新完成';
$string['missingcfglangotherroot'] = '少了配置值$CFG->langotherroot';
$string['missinglangparent'] = '缺少<em>{$a->lang}</em>的父語系<em>{$a->parent}</em>';
$string['nolangupdateneeded'] = '所有的語言都是最新的，沒有必要更新。';
$string['pluginname'] = '語言包';
$string['purgestringcaches'] = '清除字串快取';
$string['remotelangnotavailable'] = '由於 Moodle 無法連線到 download.moodle.org ，目前無法自動安裝語言包。請透過下面網址下載合適的 zip 格式檔案，手動複製到 {$a} 資料夾並且解壓縮。';
$string['uninstall'] = '移除選擇的語言';
$string['uninstallconfirm'] = '您確認要完整移除語言包{$a}嗎 ？';
$string['updatelangs'] = '更新所有本地語言包';
