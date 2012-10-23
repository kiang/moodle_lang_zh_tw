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
 * Strings for component 'auth_ldap', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = '無法在Active Directory建立新的帳號。請確認您符合此動作的所有要求（LDAPS連結等等）';
$string['auth_ldap_attrcreators'] = '群組或內容的列表，其成員可以建立屬性。利用";"區分多個群組， 通常會寫得像\'cn=teachers,ou=staff,o=myorg\'。';
$string['auth_ldap_attrcreators_key'] = '建立者屬性';
$string['auth_ldap_auth_user_create_key'] = '透過外部建立用戶';
$string['auth_ldap_bind_dn'] = '如果您想用綁定使用者來搜索使用者，在此指定。就像：‘cn=ldapuser,ou=public,o=org’';
$string['auth_ldap_bind_dn_key'] = '辨識名稱';
$string['auth_ldap_bind_pw'] = '繫結使用者的密碼。';
$string['auth_ldap_bind_pw_key'] = '密碼';
$string['auth_ldap_bind_settings'] = '繫結的設定';
$string['auth_ldap_changepasswordurl_key'] = '變更密碼的網址';
$string['auth_ldap_contexts'] = '使用者背景列表。以‘;’分隔。例如：‘ou=users,o=org; ou=others,o=org’';
$string['auth_ldap_contexts_key'] = '條件';
$string['auth_ldap_create_context'] = '如果您允許根據email資訊創建用戶，請指定創建用戶的條件。該值基於安全問題應該有別於別的用戶者。您不需將此條件加到LDAP條件變數，Moodle以此條件搜尋用戶。<br /><b>注意!</b> 您必須變更auth/ldap/auth.php檔案中的user_create()方法以使建立用戶的工作能運作。';
$string['auth_ldap_create_context_key'] = '新用戶的條件';
$string['auth_ldap_create_error'] = '在LDAP中建立使用者時發生錯誤';
$string['auth_ldap_creators'] = '列出可建立新課程的群組.用;分割多個群組';
$string['auth_ldap_creators_key'] = '建立者';
$string['auth_ldapdescription'] = '該方法利用一個外部的LDAP伺服器進行身份驗證。 如果使用者名和密碼是有效的，本系統據此在資料庫中創建一個新使用者。 該模組可以從LDAP中讀取使用者屬性，並把指定的欄位預先填入本系統資料庫。 此後的登錄只需檢驗使用者名和密碼。';
$string['auth_ldap_expiration_desc'] = '要取消密碼過期檢查就按否,或者直接從LDAP讀取過期時間';
$string['auth_ldap_expiration_key'] = '有效期限';
$string['auth_ldap_expiration_warning_desc'] = '發出密碼過期警告的日數';
$string['auth_ldap_expiration_warning_key'] = '過期警告';
$string['auth_ldap_expireattr_desc'] = '選項:覆寫儲存的ldap屬性';
$string['auth_ldap_expireattr_key'] = '過期屬性';
$string['auth_ldapextrafields'] = '這些欄位是可選的。您可以在此指定這些<B>LDAP欄位</B>複製到本系統的資料庫中。 <P>如果您不選，將使用本系統預設值。<P>無論以上何種情況，使用者在登錄之後都可以修改這些欄位。';
$string['auth_ldap_graceattr_desc'] = '選項:覆寫寬容登入屬性';
$string['auth_ldap_gracelogin_key'] = '寬容登入屬性';
$string['auth_ldap_gracelogins_desc'] = '啟用LDAP gracelogin 支援';
$string['auth_ldap_gracelogins_key'] = '寬容登入';
$string['auth_ldap_groupecreators'] = '群組或內容的列表，其成員可以建立屬性。利用";"區分多個群組， 通常會寫得像\'cn=teachers,ou=staff,o=myorg\'。';
$string['auth_ldap_groupecreators_key'] = '群組建立者';
$string['auth_ldap_host_url'] = '以URL形式指定LDAP主機，類似於：‘ldap://ldap.myorg.com/’或‘ldaps://ldap.myorg.com/’or ldaps://ldap.myorg.com/';
$string['auth_ldap_host_url_key'] = '主機網址';
$string['auth_ldap_ldap_encoding'] = '指定 LDAP 伺服器使用的編碼，通常是 utf-8，MS AD v2 使用預設平台編碼，像是 cp1252、cp1250 等。';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP編碼';
$string['auth_ldap_login_settings'] = '登入設定';
$string['auth_ldap_memberattribute'] = '指定從屬於某個組的使用者屬性,一般是"會員"';
$string['auth_ldap_memberattribute_isdn'] = '選填：覆蓋會員屬性值處理， 0 或 1';
$string['auth_ldap_memberattribute_isdn_key'] = '會員屬性使用 dn';
$string['auth_ldap_memberattribute_key'] = '會員屬性';
$string['auth_ldap_noconnect'] = 'LDAP 模組無法連線伺服器： {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP 模組無法連線到任何伺服器： {$a}';
$string['auth_ldap_noextension'] = '警告： PHP 的 LDAP 模組似乎不存在，請確認是否已經安裝及啟用。';
$string['auth_ldap_no_mbstring'] = '您需要mbstring延伸集才能在Active Directory建立使用者。';
$string['auth_ldapnotinstalled'] = '無法使用 LDAP 認證，PHP 的 LDAP 模組未安裝。';
$string['auth_ldap_objectclass'] = '用來搜尋使用者的過濾器,預設使是objectClass=*,將從LDAP伺服器傳回所有物件';
$string['auth_ldap_objectclass_key'] = '物件類別';
$string['auth_ldap_opt_deref'] = '決定ldap在搜尋時的別名:選擇:"否" (LDAP_DEREF_NEVER) 或 "是" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = '不同的代稱';
$string['auth_ldap_passtype'] = '指定在 LDAP 伺服器新增或修改密碼的格式';
$string['auth_ldap_passtype_key'] = '密碼格式';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP 密碼過期設定';
$string['auth_ldap_preventpassindb'] = '選擇"是" 可以防止密碼被儲存到Moodle的資料庫中';
$string['auth_ldap_preventpassindb_key'] = '隱藏密碼';
$string['auth_ldap_search_sub'] = '從次級上下文中搜索用戶';
$string['auth_ldap_search_sub_key'] = '搜尋子條件';
$string['auth_ldap_server_settings'] = 'LDAP 伺服器設定';
$string['auth_ldap_unsupportedusertype'] = '認證： ldap user_create() 不支援選擇的用戶類型："{$a}" (..還沒)';
$string['auth_ldap_update_userinfo'] = '從LDAP向本系統更新用戶資訊（姓名、位址……）要查看映射資訊，請看/auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = '用於命名/搜索使用者的屬性。通常為‘cn’。';
$string['auth_ldap_user_attribute_key'] = '用戶屬性';
$string['auth_ldap_user_exists'] = 'LDAP使用者名稱已經存在。';
$string['auth_ldap_user_settings'] = '用戶搜尋設定';
$string['auth_ldap_user_type'] = '選擇使用者儲存在LDAP的方法,此設定同時也指定可登入時間,grace 登入和用者建立等功能';
$string['auth_ldap_user_type_key'] = '用戶類型';
$string['auth_ldap_usertypeundefined'] = 'config.user_type 未定義或是函式 ldap_expirationtime2unix 不支援選擇的類型！';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type 未定義或是函式 ldap_unixi2expirationtime 不支援選擇的類型！';
$string['auth_ldap_version'] = '您目前LDAP 伺服器的使用版本';
$string['auth_ldap_version_key'] = '版本';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = '設定為\'是\'，以使用NTLM領域來Single Sign On。<strong>注意:</strong>此動作需在網站伺服器做額外安裝，請參見<a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = '啟用';
$string['auth_ntlmsso_ie_fastpath'] = '設為是來啟用NTLM單點登錄快速路徑（將跳過某些步驟，但只在客戶端瀏覽器為微軟Internet Explorer時生效）。';
$string['auth_ntlmsso_ie_fastpath_key'] = '微軟IE快速路徑？';
$string['auth_ntlmsso_subnet'] = '如果設定，將只在此子網路中的客戶端使用SSO。格式：xxx.xxx.xxx.xxx/遮罩位元';
$string['auth_ntlmsso_subnet_key'] = '子網';
$string['auth_ntlmsso_type'] = 'Web伺服器中設置的使用者認證方法（如果不知道該添什麼，就選NTLM）';
$string['auth_ntlmsso_type_key'] = '認證類型';
$string['connectingldap'] = '正在連結LDAP伺服器...';
$string['creatingtemptable'] = '正在建立臨時表{$a}';
$string['didntfindexpiretime'] = 'password_expire()未找到過期時間。';
$string['didntgetusersfromldap'] = '沒有從LDAP獲得任何使用者——出錯？——退出中';
$string['gotcountrecordsfromldap'] = '從LDAP獲得{$a}條記錄';
$string['morethanoneuser'] = '詭異！在LDAP中找到多於一條的使用者記錄。只使用第一條。';
$string['needbcmath'] = '您需要安裝BCMath外掛才能使用活動目錄中的寬限登錄';
$string['needmbstring'] = '您需要安裝mbstring外掛才能使用活動目錄中的寬限登錄';
$string['nodnforusername'] = 'user_update_password()出錯。{$a->username}沒有DN';
$string['noemail'] = '嘗試寄送郵件給您時發生錯誤！';
$string['notcalledfromserver'] = '不應從web伺服器調用！';
$string['noupdatestobedone'] = '沒有更新可做';
$string['nouserentriestoremove'] = '沒有可刪除的使用者項';
$string['nouserentriestorevive'] = '沒有可恢復的使用者項';
$string['nouserstobeadded'] = '沒有可新增的使用者';
$string['ntlmsso_attempting'] = '透過NTLM進行Single Sign On';
$string['ntlmsso_failed'] = '自動登入失敗，請使用一般登入頁面。';
$string['ntlmsso_isdisabled'] = 'NTLM SSO無效。';
$string['ntlmsso_unknowntype'] = '未知的ntlmsso類型！';
$string['pluginname'] = '使用一個LDAP伺服器';
$string['pluginnotenabled'] = '外掛未啟用！';
$string['renamingnotallowed'] = 'LDAP不允許使用者重命名';
$string['rootdseerror'] = '活動牡蠣查詢rootDSE出錯';
$string['updatepasserror'] = 'user_update_password()出錯。錯誤代碼：{$a->errno}；錯誤資訊：{$a->errstring}';
$string['updatepasserrorexpire'] = 'user_update_password()讀取密碼期限時出錯。錯誤代碼：{$a->errno}；錯誤資訊：{$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'user_update_password()修改密碼期限和/或寬限登錄時出錯。錯誤代碼：{$a->errno}；錯誤資訊：{$a->errstring}';
$string['updateremfail'] = '更新LDAP記錄出錯。錯誤代碼：{$a->errno}；錯誤資訊：{$a->errstring}<br />鍵值（{$a->key}）- 舊moodle值：「{$a->ouvalue}」，新值：「{$a->nuvalue}」';
$string['updateremfailamb'] = '無法使用不明確的欄位{$a->key}更新LDAP - 舊moodle值：「{$a->ouvalue}」，新值：「{$a->nuvalue}」';
$string['updateusernotfound'] = '在外部更新時找不到使用者。細節資訊：搜索基：「{$a->userdn}」；搜索過濾器：「(objectClass=*)」；搜索屬性：{$a->attribs}';
$string['useracctctrlerror'] = '獲得{$a}的userAccountControl時出錯';
$string['user_activatenotsupportusertype'] = '認證：ldap user_activate()不支持所選的使用者類型：{$a}';
$string['user_disablenotsupportusertype'] = '認證：ldap user_disable()不支持所選的使用者類型：{$a}';
$string['userentriestoadd'] = '要新增的使用者項：{$a}';
$string['userentriestoremove'] = '要刪除的使用者項：{$a}';
$string['userentriestorevive'] = '要恢復的使用者項：{$a}';
$string['userentriestoupdate'] = '要更新的使用者項：{$a}';
$string['usernotfound'] = '未在LDAP中找到使用者';
