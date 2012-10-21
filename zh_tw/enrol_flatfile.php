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
 * Strings for component 'enrol_flatfile', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filelockedmail'] = '您所使用註冊課程的文字檔({$a}) 無法被排程程序刪除,這通常是權限上的錯誤,請修正權限,讓moodle可以刪除這個檔案,否則它會被一直重複處理';
$string['filelockedmailsubject'] = '重大錯誤: 註冊檔';
$string['location'] = '檔案位置';
$string['mailadmin'] = '用電子郵件通知管理者';
$string['mailstudents'] = '通過 Email 提醒學生';
$string['mailteachers'] = '通過 Email 提醒教師';
$string['mapping'] = '文本文件映射';
$string['messageprovider:flatfile_enrolment'] = '文本文件選課消息';
$string['pluginname'] = '文本文件（CSV�一';
$string['pluginname_desc'] = '該方法會反復在您指定的位置檢查和處理一個特殊格式的文本文件。此文件每行應有四個或六個用逗號分隔的字段：

<pre class="informationbox">
*  operation, role, idnumber(用戶), idnumber(課程) [, starttime, endtime]
其中：
*  operation        = add | del
*  role             = student | teacher | teacheredit
*  idnumber(用戶)   = 用戶表中的學號（不是id）
*  idnumber(課程) = 課程表中的編號（不是id）
*  starttime        = 開始時間（從epoch以來的秒數）- 可選
*  endtime          = 結束時間（從epoch以來的秒數）- 可選
</pre>
例如：
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pr一';
