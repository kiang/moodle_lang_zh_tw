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
 * Strings for component 'auth_mnet', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = '設定為是時，當遠端使用者第一次登入時會在本地端自動建立一個使用者資料。';
$string['auth_mnetdescription'] = '根據您在 Moodle 網路設定中的信任網站進行使用者認證。';
$string['auth_mnet_roamin'] = '這些主機的使用者可以在您的網站漫遊。';
$string['auth_mnet_roamout'] = '您的使用者可以登入這些主機漫遊。';
$string['auth_mnet_rpc_negotiation_timeout'] = '透過 XMLRPC 傳輸認證的逾時秒數。';
$string['auto_add_remote_users'] = '自動新增遠端使用者';
$string['pluginname'] = 'Moodle 網路認證';
$string['rpc_negotiation_timeout'] = 'PC 交涉逾時';
$string['sso_idp_description'] = '公開此服務允許您的使用者在{$a} Moodle 網站漫遊而無需重新登入。
<ul><li><em>相依性</em>: 您也必須<strong>允諾</strong>在{$a}的SSO (服務提供者) 服務..</li></ul><br />Subscribe to this service to allow authenticated users from {$a} to access your site without having to re-login. <ul><li><em>Dependency</em>: You must also <strong>publish</strong> the SSO (Service Provider) service to {$a}.</li></ul><br />';
$string['sso_idp_name'] = 'SSO (身分識別提供者)';
$string['sso_mnet_login_refused'] = '不允許使用者 {$a}[0] 由 {$a}[1] 登入。';
$string['sso_sp_description'] = '設定此項服務將允許使用者從{$a}網站存取您的站台而毋須重新登入。<ul><li><em>信任關係</em>: 您必須同時在{$a} 單一簽入系統(帳號識別系統)<strong>建立帳號</strong>。</li></ul><br />設定此項服務可讓使用者從{$a} Moodle站台漫遊到本站，毋須重新登入。<ul><li><em>信任關係</em>: 您必須同時在{$a}站台<strong>設定</strong>單一簽入系統(帳號識別系統)。</li></ul><br />';
$string['sso_sp_name'] = 'SSO (服務提供者)';
