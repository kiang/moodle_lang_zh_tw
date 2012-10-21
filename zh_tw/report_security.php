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
 * Strings for component 'report_security', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   report_security
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>建議在安裝完成後將config.php文件權限改為web服務器不可寫。
請注意，此度量不會顯著提高服務器的安全性，不過它可能減慢或限制一般的攻擊。</一';
$string['check_configrw_name'] = 'config.php文件可改寫';
$string['check_configrw_ok'] = 'config.php 無法通過 PHP 腳本編輯�一';
$string['check_configrw_warning'] = 'PHP 腳本可以修改 config.php 文件�一';
$string['check_cookiesecure_details'] = '<p>如果您啟用了https通信，那麼建議您也啟用安全cookie。您還應該將 http 永久重定向到https。</一';
$string['check_cookiesecure_error'] = '請啟用安全的 cook一';
$string['check_cookiesecure_name'] = '安全的 cook一';
$string['check_cookiesecure_ok'] = '已啟用安全的 cookie�一';
$string['check_defaultuserrole_details'] = '<p>所有已登錄的用戶都會擁有缺省角色的權限。請確信此角色沒有危險的權限。</p>
<p>缺省用戶對應的舊角色只能是<em>已認證用戶</em>。一定不能有查看課程權限。</一';
$string['check_defaultuserrole_error'] = '默認角色“{$a}”未正確定義�一';
$string['check_defaultuserrole_name'] = '所有用戶的缺省角色';
$string['check_defaultuserrole_notset'] = '缺省角色未設置�一';
$string['check_defaultuserrole_ok'] = '為所有用戶定義的缺省角色是正確的�一';
$string['check_displayerrors_details'] = '<p>不建議在正式網站打開PHP設置<code>display_errors</code>，因為錯誤信息可能會暴露服務器上的一些敏感信息。</一';
$string['check_displayerrors_error'] = '顯示錯誤信息的PHP設置被打開。建議關閉它�一';
$string['check_displayerrors_name'] = '顯示 PHP 錯誤信息';
$string['check_displayerrors_ok'] = '顯示 PHP 錯誤信息已禁用�一';
$string['check_emailchangeconfirmation_details'] = '<p>建議用戶在個人資料中修改email地址後，必須做email確認。如果禁用，可能會有人通過發送垃圾信息來攻擊服務器。</p>
<p>認證插件中可能已經鎖定了email域，這一步在這裡沒有考慮。</一';
$string['check_emailchangeconfirmation_error'] = '用戶可以使用任意 Email 地址�一';
$string['check_emailchangeconfirmation_info'] = '用戶僅能使用特定域名的 Email 地址�一';
$string['check_emailchangeconfirmation_name'] = 'Email 修改確認';
$string['check_emailchangeconfirmation_ok'] = '修改用戶信息中的 Email 時需確認�一';
$string['check_embed_details'] = '<p>毫無限制的對象嵌入是非常危險的——任何注冊用戶都可以發起針對其它用戶的XSS攻擊。此設置在正式網站上應該禁用。</一';
$string['check_embed_error'] = '允許無限制地嵌入對象——對於大多數服務器而言，這非常危險�一';
$string['check_embed_name'] = '允許 EMBED 和 OBJE一';
$string['check_embed_ok'] = '不允許無限制地嵌入對象�一';
$string['check_frontpagerole_details'] = '<p>默認的首頁角色是所有注冊用戶在參與首頁活動時所使用的角色。請確保該角色未被賦予危險的權限。</p>
<p>強烈建議為此創建一個新的角色且不要給它賦予任何傳統角色。</一';
$string['check_frontpagerole_error'] = '檢測到未正確定義的首頁角色“{$a}”�一';
$string['check_frontpagerole_name'] = '首頁角色';
$string['check_frontpagerole_notset'] = '未設置首頁角色�一';
$string['check_frontpagerole_ok'] = '首頁角色定義正確�一';
$string['check_globals_details'] = '<p>注冊全局變量是一個高度不安全的PHP設置。</p>
必須在PHP配置中寫上<p><code>register_globals=off</code>。可以通過編輯<code>php.ini</code>、Apache/IIS配置或<code>.htaccess</code>文件來控制它。</一';
$string['check_globals_error'] = '一定要禁止注冊全局變量。請立刻修改服務器的PHP設置�一';
$string['check_globals_name'] = '注冊全局變量';
$string['check_globals_ok'] = '注冊全局變量已禁用�一';
$string['check_google_details'] = '<p>向Google開放後，搜索引擎就可以以訪客身份進入課程。如果不允許訪客訪問的話，那麼打開這個設置也沒有意義。</一';
$string['check_google_error'] = '搜索引擎可以訪問，但訪客不能訪問�一';
$string['check_google_info'] = '搜索引擎可以作為訪客進入�一';
$string['check_google_name'] = '對谷歌開放';
$string['check_google_ok'] = '不允許搜索引擎訪問';
$string['check_guestrole_details'] = '<p>訪客角色由訪客、未登錄用戶和臨時訪問課程的訪客使用。請確認此角色沒有危險的權限。</p>
<p>訪客用戶對應的舊角色只能是<em>訪客</em>。</一';
$string['check_guestrole_error'] = '訪客角色“{$a}”定義錯誤�一';
$string['check_guestrole_name'] = '訪客角色';
$string['check_guestrole_notset'] = '未設定訪客角色�一';
$string['check_guestrole_ok'] = '訪客角色定義正確�一';
$string['check_mediafilterswf_details'] = '<p>自動嵌入swf非常危險——任何注冊用戶都可能發起針對其它用戶的XSS攻擊。請在正式服務器禁用它。</一';
$string['check_mediafilterswf_error'] = 'Flash 媒體過濾器已經激活——對於大多數服務器而言，這是非常危險的�一';
$string['check_mediafilterswf_name'] = '激活的 .swf 媒體過濾器';
$string['check_mediafilterswf_ok'] = 'Flash 媒體過濾器未激活�一';
$string['check_noauth_details'] = '<p><em>不認證身份</em>插件不是給正式網站設計的。除非這是一個開發測試網站，否則請禁用它。</一';
$string['check_noauth_error'] = '不認證身份插件不能在正式網站使用�一';
$string['check_noauth_name'] = '不認證身份';
$string['check_noauth_ok'] = '不認證身份插件已禁用�一';
$string['check_openprofiles_details'] = '<p>開放用戶個人信息可能會被不良用戶濫用。建議啟用<code>強制用戶登錄後才能訪問個人資料</code>或者<code>強制用戶登錄</code>。</一';
$string['check_openprofiles_error'] = '任何人無須登錄就可以查看用戶的個人信息�一';
$string['check_openprofiles_name'] = '開放用戶個人信息';
$string['check_openprofiles_ok'] = '在查看用戶個人信息前需登錄�一';
$string['check_passwordpolicy_details'] = '<p>建議您設定一個密碼策略，因為猜測密碼是最常見的非法入侵方法。同時您也不要把密碼策略設定的太苛刻，這會導致用戶無法記住他們的密碼以至於忘記密碼或把密碼寫下來。</一';
$string['check_passwordpolicy_error'] = '密碼策略未設置�一';
$string['check_passwordpolicy_name'] = '密碼策略';
$string['check_passwordpolicy_ok'] = '密碼策略已激活�一';
$string['check_passwordsaltmain_details'] = '<p>設置密碼鹽可以極大地降低密碼被盜的風險。</p>
<p>把下面這行代碼加入config.php文件來設置密碼鹽：</p>
<code>$CFG->passwordsaltmain = \'有大量隨機字符的長字符串\';</code>
<p>此隨機字符串應該是字母、數字和其它符號的混合。建議至少要40個字符長。</p>
<p>如果您想修改密碼鹽，請參考<a href="{$a}" target="_blank">密碼鹽文檔</a>。一旦設置，請不要刪除您的密碼鹽，否則您將永遠無法登錄您的網站！</一';
$string['check_passwordsaltmain_name'] = '密碼鹽';
$string['check_passwordsaltmain_ok'] = '密碼鹽正常';
$string['check_passwordsaltmain_warning'] = '未設置密碼鹽';
$string['check_passwordsaltmain_weak'] = '密碼鹽強度較弱';
$string['check_riskadmin_detailsok'] = '<p>請確認下列人員為系統管理員：</p>{$一';
$string['check_riskadmin_detailswarning'] = '<p>請確認下列系統管理員：</p>{$a->admins}
<p>建議只在系統場景下分配管理員角色。下列用戶在其它場景中被分配了管理員角色（不支持）：</p>{$a->unsupporte一';
$string['check_riskadmin_name'] = '管理員';
$string['check_riskadmin_ok'] = '找到了 {$a} 個服務器管理員�一';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} （{$a->email}）評估角色分配</一';
$string['check_riskadmin_warning'] = '找到 {$a->admincount} 個服務器管理員和 {$a->unsupcount} 個不支持的管理員角色分配�一';
$string['check_riskbackup_detailsok'] = '沒有被明確允許備份用戶數據的角色。但是，請注意，有“doanything”權限的管理員仍然可以這麼做�一';
$string['check_riskbackup_details_overriddenroles'] = '<p>這些有效的角色覆蓋使用戶獲得在備份中包含其它用戶數據的權限。請確認此權限是必須的。</p> {$一';
$string['check_riskbackup_details_systemroles'] = '<p>下列系統角色有在備份中包含用戶數據的權限。請確認此權限是必須的。</p> {$一';
$string['check_riskbackup_details_users'] = '<p>因為上面的角色或局部覆蓋，下列用戶現在可以在備份中包含選修他們課程的所有用戶的隱私數據。請確認他們是可信任的，且他們的密碼足夠強壯：</p> {$一';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name}在{$a->contextname}</一';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</一';
$string['check_riskbackup_name'] = '備份用戶數據';
$string['check_riskbackup_ok'] = '沒有被明確允許備份用戶數據的角色';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email})在{$a->contextname}</一';
$string['check_riskbackup_warning'] = '找到 {$a->rolecount} 個角色、{$a->overridecount}個覆蓋和 {$a->usercount} 個用戶有備份用戶數據的權限�一';
$string['check_riskxss_details'] = '<p>有 RISK_XSS 標記的權限是危險的權限，只能允許可信任的用戶使用。</p>
<p>請確認下面的用戶列表，確認此服務器完全信任他們：</p><p>{$a}</一';
$string['check_riskxss_name'] = 'XSS 信任用戶';
$string['check_riskxss_warning'] = 'RISK_XSS——發現 {$a} 個必須被信任的用戶�一';
$string['check_unsecuredataroot_details'] = '<p>dataroot 目錄必須不能通過 web 訪問。使此目錄不可訪問的最好方法是使用在公開 web 目錄之外的目錄。</p>
<p>如果您移動此目錄，您需要相應地更新 <code>config.php</code> 中的 <code>$CFG->dataroot</code> 設置。</一';
$string['check_unsecuredataroot_error'] = '您的數據目錄 <code>{$a}</code> 位置錯誤，它可以直接通過 Web 訪問�一';
$string['check_unsecuredataroot_name'] = '不安全的數據目錄';
$string['check_unsecuredataroot_ok'] = '數據目錄不能通過 Web 直接訪問�一';
$string['check_unsecuredataroot_warning'] = '您的數據目錄 <code>{$a}</code> 位置錯誤，可以從 Web 直接訪問�一';
$string['configuration'] = '配置';
$string['description'] = '描述';
$string['details'] = '細節';
$string['issue'] = '問題';
$string['pluginname'] = '資安概況';
$string['security:view'] = '檢視資安報告';
$string['status'] = '狀態';
$string['statuscritical'] = '危急';
$string['statusinfo'] = '信息';
$string['statusok'] = 'OK';
$string['statusserious'] = '嚴重';
$string['statuswarning'] = '警告';
$string['timewarning'] = '處理數據可能會需要很長時間，請耐心等待.一';
