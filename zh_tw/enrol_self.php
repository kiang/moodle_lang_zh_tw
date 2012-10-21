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
 * Strings for component 'enrol_self', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customwelcomemessage'] = '自定義歡迎信息';
$string['defaultrole'] = '缺省分配的角色';
$string['defaultrole_desc'] = '選擇用戶自助選課後被分配的角色';
$string['editenrolment'] = '編輯選課';
$string['enrolenddate'] = '結束日期';
$string['enrolenddate_help'] = '如果啟用，用戶只能在此日期前自行加入此課程�一';
$string['enrolenddaterror'] = '選課的結束日期不可以早於開始日期。';
$string['enrolme'] = '將我加入';
$string['enrolperiod'] = '保持選課時長';
$string['enrolperiod_desc'] = '缺省的保持選課有效的時間長度（單位：秒）。如果設為0，就默認不限制保持選課時長�一';
$string['enrolperiod_help'] = '用戶身份有效期長度，從用戶自行加入課程之日算起。禁止此選項意味著用戶身份永久有效�一';
$string['enrolstartdate'] = '開始日期';
$string['enrolstartdate_help'] = '如果啟用，用戶只能在此日期後自行加入此課程�一';
$string['groupkey'] = '使用分組選課密碼';
$string['groupkey_desc'] = '缺省使用分組選課密碼�一';
$string['groupkey_help'] = '除了只限知道密碼的用戶訪問課程以外，還可以讓用戶在選課時輸入分組密碼，這樣他就能被自動加入到小組中。

要使用分組選課密碼，必須在組設置中設定組密碼的同時，在課程設置中設定選課密碼�一';
$string['longtimenosee'] = '多久不活動就撤銷選課';
$string['longtimenosee_help'] = '如果用戶很長時間沒有訪問課程，那麼可以自動撤銷他們的選課。此參數決定這個時限�一';
$string['maxenrolled'] = '最大選課用戶數';
$string['maxenrolled_help'] = '指定可以自助選課的最大用戶數。0表示無限制�一';
$string['maxenrolledreached'] = '已經達到自助選課用戶數上限�一';
$string['password'] = '選課密碼';
$string['password_help'] = '只有知道選課密碼的人才能訪問課程。

如果此處留空，那麼任何人都可以隨意選課。

指定選課密碼後，任何想選課的用戶都必須輸入這個密碼。不過，他們只需要輸入一次�一';
$string['passwordinvalid'] = '選課密碼錯誤，請重試';
$string['passwordinvalidhint'] = '所輸入的選課密碼不正確, 請重新輸入<br />(提示 - 以{$a}為開頭)';
$string['pluginname'] = '自助選課';
$string['pluginname_desc'] = '通過自助選課插件，用戶可以自己選擇想參加的課程。可以通過選課密碼保護課程。選課過程是通過人工選課插件完成得，所以必須在課程中激活這個插件�一';
$string['requirepassword'] = '必須設選課密碼';
$string['requirepassword_desc'] = '新課程必須設選課密碼，舊課程不能刪除已有的選課密碼�一';
$string['role'] = '缺省分配的角色';
$string['self:config'] = '配置自助選課實例';
$string['self:manage'] = '管理已選課用戶';
$string['self:unenrol'] = '撤銷已選課用戶';
$string['self:unenrolself'] = '撤銷自己的選課';
$string['sendcoursewelcomemessage'] = '傳送課程的歡迎訊息';
$string['sendcoursewelcomemessage_help'] = '選擇該項，用戶自助選課時會收到一封歡迎郵件�一';
$string['showhint'] = '顯示提示';
$string['showhint_desc'] = '顯示訪客密碼的首字母�一';
$string['status'] = '允許自助選課';
$string['status_desc'] = '默認允許用戶自己選課�一';
$string['status_help'] = '此設置決定用戶是否能自助選課（如果他們有相應的權限，也可以自己撤銷選課）�一';
$string['unenrol'] = '撤銷選課';
$string['unenrolselfconfirm'] = '您確定要撤銷您自己對“{$a}”課程的選課嗎�一';
$string['unenroluser'] = '您確定要撤銷用戶“{$a->user}”對“{$a->course}”課程的選課嗎�一';
$string['usepasswordpolicy'] = '使用密碼策略';
$string['usepasswordpolicy_desc'] = '對選課密碼使用標准的密碼策略�一';
$string['welcometocourse'] = '歡迎到 {$a}';
$string['welcometocoursetext'] = '歡迎進入 {$a->coursename}!

您所需處理的第一件事是先修改個人設定 以便他人可以多了解您:

  {$a->profileurl}';
