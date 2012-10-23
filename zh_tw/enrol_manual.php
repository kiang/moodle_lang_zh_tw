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
 * Strings for component 'enrol_manual', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = '修改狀態';
$string['altertimeend'] = '修改結束時間';
$string['altertimestart'] = '修改開始時間';
$string['assignrole'] = '分配角色';
$string['confirmbulkdeleteenrolment'] = '您確信要刪除該使用者的選課嗎？';
$string['defaultperiod'] = '預設保持選課時長';
$string['defaultperiod_desc'] = '選課有效的預設時間長度（單位秒）。如果此時間設置為零，選課持續時間將會按預設不加以限制。';
$string['defaultperiod_help'] = '預設的使用者身份有效期長度，從使用者自行加入課程之日算起。禁止此選項意味著預設使用者身份永久有效。';
$string['deleteselectedusers'] = '刪除選中使用者的選課記錄';
$string['editenrolment'] = '編輯選課';
$string['editselectedusers'] = '編輯選中使用者的選課';
$string['enrolledincourserole'] = '在 "{$a->course}" 課程註冊為 "{$a->role}" 角色';
$string['enrolusers'] = '加入使用者';
$string['manual:config'] = '配置人工選課實例';
$string['manual:enrol'] = '加入使用者';
$string['manual:manage'] = '管理使用者選課';
$string['manual:unenrol'] = '撤銷使用者的選課';
$string['manual:unenrolself'] = '撤銷自己的選課';
$string['pluginname'] = '人工選課';
$string['pluginname_desc'] = '通過人工選課外掛，有權限的使用者（例如教師）可以在課程管理設置中的一個連結裏手動為其它使用者選課。此外掛通常都是啟用的，因為有其它外掛（比如自助選課）需要調用它。';
$string['status'] = '啟用人工選課';
$string['status_desc'] = '允許內部選課的使用者訪問課程。大多數情況都應該啟用這個選項。';
$string['statusdisabled'] = '已停用';
$string['statusenabled'] = '已啟用';
$string['status_help'] = '此設置決定使用者是否可以被人工選課。教師等有權限的使用者可以在課程管理設置中的一個連結里人工選擇使用者，加入課程。';
$string['unenrol'] = '撤銷選課';
$string['unenrolselectedusers'] = '撤銷選定使用者的選課';
$string['unenrolselfconfirm'] = '您確定要撤銷您自己對「{$a}」課程的選課嗎？';
$string['unenroluser'] = '您確定要撤銷使用者「{$a->user}」對「{$a->course}」課程的選課嗎？';
$string['unenrolusers'] = '撤銷使用者選課';
$string['wscannotenrol'] = '外掛實例不能手動把一個使用者加入id = {$a->courseid}}的課程';
$string['wsnoinstance'] = '對於課程（id = {$a->courseid}），手動選課外掛實例不存在或者被停用';
$string['wsusercannotassign'] = '您在課程({$a->courseid})中沒有權限為使用者({$a->userid})指定這一角色({$a->roleid})。';
