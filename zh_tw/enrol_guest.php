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
 * Strings for component 'enrol_guest', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_guest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowguests'] = '本課程允許無帳號者進入';
$string['guest:config'] = '配置訪客訪問實例';
$string['password'] = '密碼';
$string['password_help'] = '設定密碼可以限定只有知道密碼的訪客才能訪問課程。訪客每次訪問此課程都會被要求輸入密碼。';
$string['passwordinvalid'] = '密碼不正確，請重試';
$string['passwordinvalidhint'] = '密碼不正確，請重試<br />
（小提示：密碼以“{$a}”開頭）';
$string['pluginname'] = '訪客可訪問';
$string['pluginname_desc'] = '訪客訪問插件只給用戶臨時訪問課程的權限，並不會真的給用戶選課。';
$string['requirepassword'] = '必須有訪客訪問密碼';
$string['requirepassword_desc'] = '要求新課程必須設置訪問密碼，並禁止已有課程刪除密碼。';
$string['showhint'] = '顯示提示';
$string['showhint_desc'] = '顯示訪客密碼的第一個字符。';
$string['status'] = '允許訪客訪問';
$string['status_desc'] = '缺省允許訪客臨時訪問。';
$string['status_help'] = '這項設置決定使用者是否可以不經選課，直接以訪客身份進入課程。';
$string['usepasswordpolicy'] = '使用密碼策略';
$string['usepasswordpolicy_desc'] = '使用標准密碼策略約束訪客密碼。';
