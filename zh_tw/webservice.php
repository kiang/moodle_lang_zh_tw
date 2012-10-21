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
 * Strings for component 'webservice', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   webservice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = '訪問控制異常';
$string['accessnotallowed'] = '不允許訪問網絡服務';
$string['actwebserviceshhdr'] = '可用的網絡服務協議';
$string['addaservice'] = '添加服務';
$string['addcapabilitytousers'] = '檢查用戶權限';
$string['addcapabilitytousersdescription'] = '用戶應該有兩個權限—— webservice:createtoken，還有與使用的協議相匹配的權限，例如 webservice/rest:use、webservice/soap:use。要分配這些權限，可以創建一個擁有這些權限的網絡服務角色，並將它做為系統角色分配給網絡服務用戶�一';
$string['addfunction'] = '添加函數';
$string['addfunctionhelp'] = '選擇要添加到此服務的函數�一';
$string['addfunctions'] = '添加函數';
$string['addfunctionsdescription'] = '為新創建的服務選擇必需函數�一';
$string['addrequiredcapability'] = '分配/取消必備的權限';
$string['addservice'] = '添加新服務：{$a->name}（id：{$a->id}�一';
$string['addservicefunction'] = '向服務“{$a}”添加函數';
$string['allusers'] = '所有用戶';
$string['amftestclient'] = 'AMF 測試客戶端';
$string['apiexplorer'] = 'API 瀏覽器';
$string['apiexplorernotavalaible'] = 'API 瀏覽器還不可用�一';
$string['arguments'] = '參數';
$string['authmethod'] = '認證方法';
$string['cannotcreatetoken'] = '沒有為服務{$a}創建網絡服務令牌的權限�一';
$string['checkusercapability'] = '檢查用戶權限';
$string['checkusercapabilitydescription'] = '用戶應該有與使用的協議相匹配的權限，例如 webservice/rest:use、webservice/soap:use。要分配這些權限，可以創建一個擁有這些權限的網絡服務角色，並將它做為系統角色分配給網絡服務用戶�一';
$string['configwebserviceplugins'] = '為保障安全，應該只激活使用中的協議�一';
$string['context'] = '場景';
$string['createservicedescription'] = '服務是網絡服務函數的集合。您將允許此用戶訪問一個新的服務。在<strong>添加服務</strong>頁面勾選“啟用”和“只服務授權用戶”選項。選擇“沒有需要的權限”�一';
$string['createserviceforusersdescription'] = '服務是網絡服務函數的集合。您將允許用戶訪問一個新的服務。在<strong>添加服務</strong>頁面勾選“啟用”，不勾選“只服務授權用戶”選項。選擇“沒有需要的權限”�一';
$string['createtoken'] = '創建令牌';
$string['createtokenforuser'] = '為用戶創建令牌';
$string['createtokenforuserauto'] = '為用戶自動創建令牌';
$string['createtokenforuserdescription'] = '為網絡服務用戶創建令牌�一';
$string['createuser'] = '創建一個特殊用戶';
$string['createuserdescription'] = '需要一個網絡服務用戶來代表系統控制 Moodle�一';
$string['default'] = '默認為“{$a}�一';
$string['deleteaservice'] = '刪除服務';
$string['deleteservice'] = '刪除服務： {$a->name}（id：{$a->id}�一';
$string['deleteserviceconfirm'] = '刪除一個服務也會刪除與之有關的令牌。您真的要刪除對外服務“{$a}”嗎�一';
$string['deletetokenconfirm'] = '您確認要刪除<strong>{$a->user}</strong>使用<strong>{$a->service}</strong>服務的網絡服務令牌嗎�一';
$string['disabledwarning'] = '所有網絡服務協議都被禁用。在高級特性中有“啟用網絡服務”選項�一';
$string['doc'] = '文檔';
$string['docaccessrefused'] = '你未被批准查看此令牌的參考文檔';
$string['documentation'] = '網絡服務參考文檔';
$string['editaservice'] = '修改服務';
$string['editservice'] = '編輯服務：{$a->name}（id：{$a->id}�一';
$string['enabled'] = '啟用';
$string['enabledocumentation'] = '啟用開發者參考文檔';
$string['enabledocumentationdescription'] = '為啟用的網絡服務協議提供細致的文檔�一';
$string['enablemobilewsoverview'] = '訪問{$a->manageservicelink}管理頁面，勾選“{$a->enablemobileservice}”設置並保存。一切都會為您准備好，所有網站用戶都將可以使用官方 Moodle 應用。當前狀態：{$a->wsmobilestatu一';
$string['enableprotocols'] = '啟用協議';
$string['enableprotocolsdescription'] = '至少應啟用一個協議。為保障安全，應該只激活要使用的協議�一';
$string['enablews'] = '啟用網絡服務';
$string['enablewsdescription'] = '必須在高級特性中啟用網絡服務�一';
$string['entertoken'] = '輸入密鑰/令牌�一';
$string['error'] = '錯誤：{$一';
$string['errorcatcontextnotvalid'] = '您不能在類別場景（類別 id：{$a->catid}）中執行函數。場景的錯誤信息是：{$a->messag一';
$string['errorcodes'] = '錯誤信息';
$string['errorcoursecontextnotvalid'] = '您不能在課程場景（課程 id：{$a->courseid}）中執行函數。場景錯誤信息是：{$a->messag一';
$string['errorinvalidparam'] = '參數“{$a}”無效�一';
$string['errorinvalidparamsapi'] = '無效的外部 api 參數';
$string['errorinvalidparamsdesc'] = '無效的外部 api 描述';
$string['errorinvalidresponseapi'] = '無效的外部 api 應答';
$string['errorinvalidresponsedesc'] = '無效的外部 api 應答描述';
$string['errormissingkey'] = '在單個結構中缺少必須的 key：{$一';
$string['errornotemptydefaultparamarray'] = '名為“{$a}”的網絡服務描述參數是一個或多個結構。缺省值只能是空數組。請檢查網絡服務描述�一';
$string['erroronlyarray'] = '只接受數組�一';
$string['erroroptionalparamarray'] = '名為“{$a}”的網絡服務描述參數是一個或多個結構。它不能被設為 VALUE_OPTIONAL。請檢查網絡服務描述�一';
$string['errorresponsemissingkey'] = '應答中有錯誤——在單個結構中缺少下列必須的 key：{$一';
$string['errorscalartype'] = '需要標量類型，但收到數組或對象�一';
$string['errorunexpectedkey'] = '在參數數組中檢測到不需要的 key（{$a}�一';
$string['execute'] = '執行';
$string['executewarnign'] = '警告：如果您點了執行按鈕，您的數據庫會被修改，且不能自動恢復這些變化�一';
$string['externalservice'] = '對外服務';
$string['externalservicefunctions'] = '對外服務函數';
$string['externalservices'] = '對外服務';
$string['externalserviceusers'] = '外部服務用戶';
$string['failedtolog'] = '存日志失敗';
$string['filenameexist'] = '文件名已存在：{$一';
$string['forbiddenwsuser'] = '不能創建令牌，可能因為用戶還未確認、已刪除、已停用或者是訪客�一';
$string['function'] = '函數';
$string['functions'] = '函數';
$string['generalstructure'] = '通用結構';
$string['information'] = '信息';
$string['installexistingserviceshortnameerror'] = '以“{$a}”為簡稱的網絡服務已存在。不能安裝或者升級使用相同此簡稱的不同的網絡服務�一';
$string['installserviceshortnameerror'] = '源代碼錯誤：服務的簡稱“{$a}”應該只包含數字、字母和_-..�一';
$string['invalidextparam'] = '無效的外部 api 參數：{$一';
$string['invalidextresponse'] = '無效的外部 api 應答：{$一';
$string['invalidiptoken'] = '無效令牌——不支持您的一';
$string['invalidtimedtoken'] = '無效令牌——令牌過期';
$string['invalidtoken'] = '無效令牌——找不到令牌';
$string['invalidtokensession'] = '無效的基於會話的令牌——找不到會話或已過期';
$string['iprestriction'] = 'IP限制';
$string['iprestriction_help'] = '此用戶將只能從列出的 IP 訪問網絡服務';
$string['key'] = '密鑰';
$string['keyshelp'] = '密鑰用來從外部程序訪問您的 Moodle 賬號�一';
$string['manageprotocols'] = '管理協議';
$string['managetokens'] = '管理令牌';
$string['missingcaps'] = '缺少權限';
$string['missingcaps_help'] = '此服務必需，但所選用戶不具有的權限。如果要使用此服務，必須為用戶所屬的角色添加缺少的權限�一';
$string['missingpassword'] = '缺少密碼';
$string['missingrequiredcapability'] = '必須有 {$a} 權限�一';
$string['missingusername'] = '缺少用戶名';
$string['missingversionfile'] = '源代碼錯誤：組件 {$a} 缺少 version.php 文件';
$string['mobilewsdisabled'] = '禁用';
$string['mobilewsenabled'] = '啟用';
$string['nofunctions'] = '此服務沒有函數�一';
$string['norequiredcapability'] = '沒有需要的權限';
$string['notoken'] = '令牌列表為空�一';
$string['onesystemcontrolling'] = '允許外部系統控制 Mood一';
$string['onesystemcontrollingdescription'] = '下面步驟幫助配置 Moodle 網絡服務，讓外部系統可以與 Moodle 交互。包括設置令牌（安全密鑰）認證方法�一';
$string['operation'] = '操作';
$string['optional'] = '可選';
$string['passwordisexpired'] = '密碼已過期�一';
$string['phpparam'] = 'XML-RPC（PHP 結構�一';
$string['phpresponse'] = 'XML-RPC（PHP 結構�一';
$string['postrestparam'] = 'PHP 的 REST（POST 請求）源代碼';
$string['potusers'] = '未授權用戶';
$string['potusersmatching'] = '匹配的未授權用戶';
$string['print'] = '全部打印';
$string['protocol'] = '協議';
$string['removefunction'] = '刪除';
$string['removefunctionconfirm'] = '您確信要從服務“{$a->service}”刪除函數“{$a->function}”嗎�一';
$string['requireauthentication'] = '此方法需要用 xxx 權限認證�一';
$string['required'] = '必須';
$string['requiredcapability'] = '需要權限';
$string['requiredcapability_help'] = '如果設置，只有有相應權限的用戶才能訪問此服務�一';
$string['requiredcaps'] = '需要權限';
$string['resettokenconfirm'] = '您確信要重置<strong>{$a->user}</strong>的<strong>{$a->service}</strong>服務的網絡服務密鑰嗎�一';
$string['resettokenconfirmsimple'] = '您想重置這個密鑰嗎？所有使用舊密鑰的鏈接都將失效�一';
$string['response'] = '應答';
$string['restcode'] = 'RE一';
$string['restexception'] = 'RE一';
$string['restoredaccountresetpassword'] = '恢復的賬號在獲得令牌前需要重置密碼�一';
$string['restparam'] = 'REST（POST 參數�一';
$string['restrictedusers'] = '只服務授權用戶';
$string['restrictedusers_help'] = '用戶可以在他們的安全密鑰頁面為此服務創建令牌。此設置決定是所有有權創建網絡服務令牌的用戶都可以這麼做，還是只有授權用戶可以�一';
$string['securitykey'] = '安全密鑰（令牌�一';
$string['securitykeys'] = '安全密鑰';
$string['selectauthorisedusers'] = '選擇授權用戶';
$string['selectedcapability'] = '已選擇';
$string['selectedcapabilitydoesntexit'] = '當前設置的必備權限（{$a}）已不再存在。請修改並保存�一';
$string['selectservice'] = '選擇一個服務';
$string['selectspecificuser'] = '選擇一個特殊用戶';
$string['selectspecificuserdescription'] = '將網絡服務用戶加為授權用戶�一';
$string['service'] = '服務';
$string['servicehelpexplanation'] = '服務是一個函數集合。可以讓所有人或只讓指定的用戶訪問服務�一';
$string['servicename'] = '服務名';
$string['servicenotavailable'] = '網絡服務不可用（它不存在或者已禁用�一';
$string['servicesbuiltin'] = '內置服務';
$string['servicescustom'] = '自定義服務';
$string['serviceusers'] = '已授權用戶';
$string['serviceusersettings'] = '用戶設置';
$string['serviceusersmatching'] = '授權用戶匹配';
$string['serviceuserssettings'] = '修改授權用戶的設置';
$string['simpleauthlog'] = '簡單認證登錄';
$string['step'] = '步驟';
$string['testauserwithtestclientdescription'] = '用網絡服務測試客戶端仿真外部訪問。在開始之前，先要用有 moodle/webservice:createtoken 權限的用戶並通過我的個人資料設置獲得密鑰（令牌）。您將在測試客戶端使用此令牌。在測試客戶端中，用令牌認證選擇一個已啟用的協議。<strong>警告：您測試的函數會被真的執行，所以小心選擇測試什麼！</stron一';
$string['testclient'] = '網絡服務測試客戶端';
$string['testclientdescription'] = '* 此網絡服務測試客戶端會<strong>真的執行</strong>被測函數。不要測試您不了解的函數。<br />
* 此測試客戶端並沒有實現所有的網絡服務。<br />
* 您可以通過測試一些禁用的函數來檢查用戶是否能訪問它們。 <br />
* 要看到更清晰的錯誤信息，到“{$a->atag}”頁面把調試狀態設為<strong>{$a->mode}</strong><br />
* 訪問 {$a->amfatag}�一';
$string['testwithtestclient'] = '測試服務';
$string['testwithtestclientdescription'] = '用網絡服務測試客戶端仿真外部訪問。用令牌認證，使用一個已啟用的協議。<strong>警告：您測試的函數會被真的執行，所以小心選擇測試什麼！</stron一';
$string['token'] = '令牌';
$string['tokenauthlog'] = '令牌認證';
$string['tokencreatedbyadmin'] = '管理員不能重置（*�一';
$string['tokencreator'] = '創建人';
$string['updateusersettings'] = '更新';
$string['userasclients'] = '把用戶當做有令牌的客戶端';
$string['userasclientsdescription'] = '下面步驟幫助您面向用戶設置 Moodle 的網絡服務。這些步驟也幫助您設置建議采用的令牌（安全密鑰）認證方法。在這種情況下，用戶可以在我的個人資料設置中的安全密鑰頁面生成他的令牌�一';
$string['usermissingcaps'] = '缺少權限：{$一';
$string['usernameorid'] = '用戶名 / 用戶 一';
$string['usernameorid_help'] = '輸入用戶名或用戶 ID�一';
$string['usernameoridnousererror'] = '未能找到該用戶名/用戶 ID 的用戶�一';
$string['usernameoridoccurenceerror'] = '使用此用戶名的用戶用戶不唯一，請輸入用戶 ID�一';
$string['usernotallowed'] = '此用戶不可以使用此服務。首先，您需要在{$a}的允許用戶管理頁面允許此用戶使用�一';
$string['usersettingssaved'] = '用戶設置已保存';
$string['validuntil'] = '有效期至';
$string['validuntil_help'] = '如果設置，此日期之後，此服務就會對此用戶失效�一';
$string['webservice'] = '網絡服務';
$string['webservices'] = '網絡服務';
$string['webservicesoverview'] = '概述';
$string['webservicetokens'] = '網絡服務令牌';
$string['wrongusernamepassword'] = '錯誤的用戶名或密碼';
$string['wsaccessuserdeleted'] = '拒絕訪問網絡服務，因為用戶名已刪除：{$一';
$string['wsaccessuserexpired'] = '拒絕訪問網絡服務，因為密碼過期，用戶名：{$一';
$string['wsaccessusernologin'] = '拒絕訪問網絡服務，因為未登錄認證，用戶名：{$一';
$string['wsaccessusersuspended'] = '拒絕訪問網絡服務，因為用戶已禁用：{$一';
$string['wsaccessuserunconfirmed'] = '拒絕訪問網絡服務，因為用戶未確認：{$一';
$string['wsauthmissing'] = '網絡服務認證插件缺失�一';
$string['wsauthnotenabled'] = '網絡服務認證插件已禁用�一';
$string['wsclientdoc'] = 'Moodle 網絡服務客戶端文檔';
$string['wsdocapi'] = 'API 文檔';
$string['wsdocumentation'] = '網絡服務文檔';
$string['wsdocumentationdisable'] = '網絡服務參考文檔已關閉�一';
$string['wsdocumentationintro'] = '要編寫一個客戶端，我們建議您閱讀{$a->doclin一';
$string['wsdocumentationlogin'] = '或者輸入您的網絡服務用戶名和密碼�一';
$string['wspassword'] = '網絡服務密碼';
$string['wsusername'] = '網絡服務用戶名';
