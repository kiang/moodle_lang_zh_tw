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
 * Strings for component 'enrol_mnet', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = '這個主機上已經存在某個MNet選課外掛的實例。 每個主機只能允許有一個實例並且/或「所有主機」共有一個實例也是允許的。';
$string['instancename'] = '選課方法名稱';
$string['instancename_help'] = '您可以選擇重命名本MNet選課方法的實例。如果您保持本欄位為空，則會使用預設的實例名。其中包含遠程主機的名字和指派給它們的使用者的角色名。';
$string['mnet_enrol_description'] = '發布該服務將允許在 {$a} 上的管理員可以選擇自己伺服器上已建課程中學生。<br/><ul><li><em>依賴性</em>：您必須向 {$a} <strong>發布</strong>SSO (Service Provicder) 服務。</li><li><em>依賴性</em>：您也必須<strong>訂閱</strong> {$a} 的 SSO (Identity Provider) 服務。</li></ul><br/>訂閱該服務將可以將 {$a} 課程中的學生註冊進來。<br/><ul><li><em>依賴性</em>：您必須<strong>訂閱</strong> {$a} 的 SSO (Service Provider) 服務。</li><li><em>依賴性</em>：您也必須向 {$a} <strong>發布</strong> SSO (Identity Provider) 服務。</li></ul><br/>';
$string['mnet_enrol_name'] = '遠程選課服務';
$string['pluginname'] = 'MNet遠程選課';
$string['pluginname_desc'] = '允許遠程MNet主機把其使用者加入我們的課程中。';
$string['remotesubscriber'] = '遠程主機';
$string['remotesubscriber_help'] = '選擇「所有主機」，會將此課程開放給所有的我們提供MNet遠程選課的主機。或者選擇只開放給一個主機。';
$string['remotesubscribersall'] = '所有主機';
$string['roleforremoteusers'] = '給他們使用者分配的角色';
$string['roleforremoteusers_help'] = '為來自選定主機的遠程使用者分配的角色。';
