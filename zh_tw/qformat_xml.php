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
 * Strings for component 'qformat_xml', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   qformat_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = '無效的XML檔案---應該有字串(使用CDATA?)';
$string['pluginname'] = 'Moodle XML 格式';
$string['truefalseimporterror'] = '<b>警告</b>：這是非題"{$a->questiontext}"無法正常地匯入，它無法查明正確答案為"是"或"否"。

此試題暫時以答案為"{$a->answer}"匯入，如果不正確，你需要事後再編輯這試題。';
$string['unsupportedexport'] = '在XML匯出時，不支援題型 {$a}';
$string['xml'] = 'Moodle XML 格式';
$string['xml_help'] = '這是一個 Moodle 專用格式，用來導入和導出題目�一';
$string['xmlimportnoname'] = '在XML檔裡，少了試題概念名稱';
$string['xmlimportnoquestion'] = '在XML檔裡，少了試題文字';
$string['xmltypeunsupported'] = '在XML匯入時，不支援題型 {$a}';
