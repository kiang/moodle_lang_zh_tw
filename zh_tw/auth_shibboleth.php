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
 * Strings for component 'auth_shibboleth', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_method'] = '認證方法的名稱';
$string['auth_shib_auth_method_description'] = '給Shibboleth驗證方法起一個用戶熟悉的名字。可以是您的Shibboleth組織的名字，比如<tt>SWITCHaai 登陸</tt> 或者 <tt>InCommon 登陸</tt> 或者其他類似的名字�一';
$string['auth_shibboleth_contact_administrator'] = '若您無法與該組織連繫，而您需要存取此網站的課程，請與管理者連繫。';
$string['auth_shibbolethdescription'] = '這個方法，用戶的建立和驗證是使用<a href="http://shibboleth.internet2.edu/" target="_blank">Shibboleth</a>.<br>請閱讀 <a href="../auth/shibboleth/README.txt" target="_blank">README</a> 幫助您了解如何設定Moodle 來使用Shibboleth';
$string['auth_shibboleth_errormsg'] = '請選您所屬的組織';
$string['auth_shibboleth_login'] = 'Shibboleth登入';
$string['auth_shibboleth_login_long'] = '透過Shibboleth登入Moodle';
$string['auth_shibboleth_manual_login'] = '手動登入';
$string['auth_shibboleth_select_member'] = '我是...的成員';
$string['auth_shibboleth_select_organization'] = '透過Shibboleth認證，請在下拉式清單中選擇您的組織:';
$string['auth_shib_changepasswordurl'] = '變更密碼網址';
$string['auth_shib_convert_data'] = '資料修改API';
$string['auth_shib_convert_data_description'] = '您可以使用API去修改由Shibboleth提供的資料。要瞭解細節，請參考<a href="../auth/shibboleth/README.txt" target="_blank">README</a>。';
$string['auth_shib_convert_data_warning'] = '此檔不存在或無法被Web伺服器讀取！';
$string['auth_shib_idp_list'] = '身份提供者';
$string['auth_shib_idp_list_description'] = '提供身份提供者的 entityID 列表，供用戶在登錄頁面選擇。<br />每行都必須是一個半角逗號分隔的二元組，一個是 IdP（在Shibboleth 元數據文件中）的 entityID，另一個是顯示在下拉列表中的 IdP 的名字。<br />如果您的 Moodle 是多聯邦配置的一部分，那麼會使用可選的第三個參數，那是 Shibboleth 會話起始器的位置�一';
$string['auth_shib_instructions'] = '如果您的學校支援Shibboleth，可以使用<a href="{$a}">Shibboleth登入</a>來存取它。<br />否則請使用這標準登入表單。';
$string['auth_shib_instructions_help'] = '應當在此為您的用戶提供關於Shibboleth的解釋。在登入畫面上，將會顯示這些提示。其中應包含一個指“<b>{$a}< /b>”的連結，這樣Shibboleth用戶可以輕鬆登入。如果您空白，預設的指示資訊將會被使用(不是Shibboleth特定的)。';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF 服務';
$string['auth_shib_integrated_wayf_description'] = '如果選中這一項，Moodle將會使用自己的WAYF服務代替原先為Shibboleth所配置的服務。Moodle會在這個新的登錄頁面上顯示一個下拉列表以供用戶選擇自己的身份提供者�一';
$string['auth_shib_logout_return_url'] = '備用的登出返回U一';
$string['auth_shib_logout_return_url_description'] = '請提供Shibboleth用戶注銷後跳轉頁面的URL。<br/>用戶將會被重定向到Moodle默認的重定向地址�一';
$string['auth_shib_logout_url'] = 'Shibboleth服務提供商退出處理U一';
$string['auth_shib_logout_url_description'] = '提供指向Shibboleth服務提供商退出處理的URL。一般形如<tt>/Shibboleth.sso/Logout</t一';
$string['auth_shib_no_organizations_warning'] = '如果您欲使用整合的WAYF服務，您必須提供實體提供者entityIDs的清單(以逗號區隔，他們的名字和連線創建者）';
$string['auth_shib_only'] = '只用Shibboleth';
$string['auth_shib_only_description'] = '如果只是用Shibboleth認證方式，請設定此選項。';
$string['auth_shib_username_description'] = '用在Moodle中當作用戶名稱的Shibboleth環境變數';
$string['pluginname'] = 'Shibboleth';
$string['shib_no_attributes_error'] = '您似乎以Shibboleth認證，但是Moodle並未收到任何使用者的資料。請檢查您的身份認證資料提供者是否提供了必要的資料({$a})給服務提供者Moodle，或者通知此伺服器的管理者。';
$string['shib_not_all_attributes_error'] = 'Moodle需要必要的Shibboleth資料，而未存在您的資料中。這些資料是:{$a}<br />請與此伺服器管理員或您的身份認證資料提供者連繫。';
$string['shib_not_set_up_error'] = 'Shibboleth認證並未正確設定，因為沒有Shibboleth環境變數出現在此頁面上。請閱讀<a href="README.txt">說明檔</a> 進一步瞭解如何設定Shibboleth認證或此Moodle安裝的網站管理員。';
