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
 * Strings for component 'auth_cas', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_cas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesCAS'] = 'CAS 用戶';
$string['accesNOCAS'] = '其他用戶';
$string['auth_cas_auth_user_create'] = '在外部建立用戶';
$string['auth_cas_baseuri'] = '伺服器的URI<br />例如，如果CAS伺服器位於 host.domain.tw/CAS/ 那麼<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = '在沒有更改密碼前，您無法繼續使用。可是沒有修改密碼的頁面可以使用，請聯絡您的Moodle管理人員';
$string['auth_cas_cantconnect'] = 'CAS模組的LDAP部份無法連線到伺服器：{$a}';
$string['auth_cas_casversion'] = '版本';
$string['auth_cas_certificate_check'] = '如果您要驗證服務器的證書，請選“是�一';
$string['auth_cas_certificate_check_key'] = '服務器驗證';
$string['auth_cas_certificate_path'] = '驗證服務器證書的CA鏈文件（PEM格式）的路徑';
$string['auth_cas_certificate_path_empty'] = '如果您打開了服務器驗證，那麼您需要指定證書路徑';
$string['auth_cas_certificate_path_key'] = '證書路徑';
$string['auth_cas_changepasswordurl'] = '修改密碼的網址';
$string['auth_cas_create_user'] = '如果您希望將CAS認證用戶加入到Moodle資料庫中，請開啟。否則只有Moodle資料庫中的用戶可以登入。';
$string['auth_cas_create_user_key'] = '建立用戶';
$string['auth_casdescription'] = '這個方法使用CAS伺服器(中央認證服務)來認證Single Sing On(SSO)環境中的用戶。您也可以使用LDAP認證。如果給定的用戶名稱和密碼在CAS中有效，Moodle會在資料庫中建立新用戶登錄資料，並從LDAP 中取出必要屬性資料。在後續的登入中，只檢查用戶名稱和密碼。';
$string['auth_cas_enabled'] = '如果您希望使用CAS認證，請開啟此選項。';
$string['auth_cas_hostname'] = 'CAS伺服器主機名稱<br />例如: host.domain.tw';
$string['auth_cas_hostname_key'] = '伺服器的名稱';
$string['auth_cas_invalidcaslogin'] = '對不起，您登入失敗——無法對您進行認證。';
$string['auth_cas_language'] = '選擇的語言';
$string['auth_cas_language_key'] = '語言';
$string['auth_cas_logincas'] = '安全連線存取';
$string['auth_cas_logoutcas'] = '如果您希望從 Moodle 離線時同時登出 CAS ，請啟用這個項目';
$string['auth_cas_logoutcas_key'] = '登出 CAS';
$string['auth_cas_multiauth'] = '如果您希望使用多重認證（ CAS 加上其他認證），請將此選項設為"是"。';
$string['auth_cas_multiauth_key'] = 'Multi-authentication';
$string['auth_casnotinstalled'] = '無法使用 CAS 認證，PHP 的 LDAP 模組未安裝。';
$string['auth_cas_port'] = 'CAS伺服器的連接埠';
$string['auth_cas_port_key'] = '連接埠';
$string['auth_cas_proxycas'] = '如果您使用 CAS 於代理模式，請啟用這個項目';
$string['auth_cas_proxycas_key'] = 'Proxy 模式';
$string['auth_cas_server_settings'] = 'CAS伺服器的配置';
$string['auth_cas_text'] = '安全連線';
$string['auth_cas_use_cas'] = '使用CAS';
$string['auth_cas_version'] = 'CAS版本';
$string['CASform'] = '認證選擇';
$string['noldapserver'] = 'CAS沒有配置LDAP服務器！因此同步被禁用�一';
$string['pluginname'] = '使用CAS伺服器(SSO)';
