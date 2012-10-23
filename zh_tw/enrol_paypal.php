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
 * Strings for component 'enrol_paypal', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_paypal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = '分配角色';
$string['businessemail'] = 'PayPal的商業郵件';
$string['businessemail_desc'] = '您商業PayPal賬戶的郵箱地址';
$string['cost'] = '報名費用';
$string['costerror'] = '選課費用不是數字';
$string['costorkey'] = '請在下列註冊方法中選擇一種';
$string['currency'] = '貨幣';
$string['defaultrole'] = '預設的角色分配';
$string['defaultrole_desc'] = '指定使用PayPal選課的使用者的角色';
$string['enrolenddate'] = '終止日期';
$string['enrolenddate_help'] = '如果啟用，只有在此日期後才能新增使用者到此課程。';
$string['enrolenddaterror'] = '選課結束日期不能在開始日期之前';
$string['enrolperiod'] = '保持選課時長';
$string['enrolperiod_desc'] = '預設的保持選課有效的時間長度（單位：秒）。如果設為0，就預設不限制保持選課時長。';
$string['enrolperiod_help'] = '使用者身份有效期長度，從使用者自行加入課程之日算起。禁止此選項意味著使用者身份永久有效。';
$string['enrolstartdate'] = '起始日期';
$string['enrolstartdate_help'] = '如果啟用，使用者只能在此日期之後撤銷選課。';
$string['mailadmins'] = '通知管理員';
$string['mailstudents'] = '通知學生';
$string['mailteachers'] = '通知老師';
$string['messageprovider:paypal_enrolment'] = 'PayPal 選課消息';
$string['nocost'] = '該課程完全免費！';
$string['paypalaccepted'] = 'PayPal 付款成功';
$string['paypal:config'] = '配置PayPal選課實例';
$string['paypal:manage'] = '管理已選課使用者';
$string['paypal:unenrol'] = '從課程刪除已選課使用者';
$string['paypal:unenrolself'] = '撤銷自己對此課程的選課';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'PayPal模組提供付費課程支持。如果您將課程的學費設置為零，學生將免費選擇該課程。您也可以設置全站的學費標準的預設值，也可以對每個課程單獨進行設置。如果對課程單獨設置了收費標準，則課程將依此標準收費。';
$string['sendpaymentbutton'] = '使用Paypal送出款項';
$string['status'] = '啟用PayPal選課';
$string['status_desc'] = '預設允許使用者使用PayPal選課。';
$string['unenrolselfconfirm'] = '您確定要撤銷您自己對「{$a}」課程的選課嗎？';
