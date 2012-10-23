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
$string['accessnotallowed'] = '不允許訪問網路服務';
$string['actwebserviceshhdr'] = '可用的網路服務協議';
$string['addaservice'] = '新增服務';
$string['addcapabilitytousers'] = '檢查使用者權限';
$string['addcapabilitytousersdescription'] = '使用者應該有兩個權限—— webservice:createtoken，還有與使用的協議相辨識的權限，例如 webservice/rest:use、webservice/soap:use。要分配這些權限，可以建立一個擁有這些權限的網路服務角色，並將它做為系統角色分配給網路服務使用者。';
$string['addfunction'] = '新增函數';
$string['addfunctionhelp'] = '選擇要新增到此服務的函數。';
$string['addfunctions'] = '新增函數';
$string['addfunctionsdescription'] = '為新建立的服務選擇必需函數。';
$string['addrequiredcapability'] = '分配/取消必備的權限';
$string['addservice'] = '新增新服務：{$a->name}（id：{$a->id}）';
$string['addservicefunction'] = '向服務「{$a}」新增函數';
$string['allusers'] = '所有使用者';
$string['amftestclient'] = 'AMF 測試客戶端';
$string['apiexplorer'] = 'API 瀏覽器';
$string['apiexplorernotavalaible'] = 'API 瀏覽器還不可用。';
$string['arguments'] = '參數';
$string['authmethod'] = '認證方法';
$string['cannotcreatetoken'] = '沒有為服務{$a}建立網路服務令牌的權限。';
$string['checkusercapability'] = '檢查使用者權限';
$string['checkusercapabilitydescription'] = '使用者應該有與使用的協議相辨識的權限，例如 webservice/rest:use、webservice/soap:use。要分配這些權限，可以建立一個擁有這些權限的網路服務角色，並將它做為系統角色分配給網路服務使用者。';
$string['configwebserviceplugins'] = '為保障安全，應該只啟用使用中的協議。';
$string['context'] = '場景';
$string['createservicedescription'] = '服務是網路服務函數的集合。您將允許此使用者訪問一個新的服務。在<strong>新增服務</strong>頁面勾選「啟用」和「只服務授權使用者」選項。選擇「沒有需要的權限」。';
$string['createserviceforusersdescription'] = '服務是網路服務函數的集合。您將允許使用者訪問一個新的服務。在<strong>新增服務</strong>頁面勾選「啟用」，不勾選「只服務授權使用者」選項。選擇「沒有需要的權限」。';
$string['createtoken'] = '建立令牌';
$string['createtokenforuser'] = '為使用者建立令牌';
$string['createtokenforuserauto'] = '為使用者自動建立令牌';
$string['createtokenforuserdescription'] = '為網路服務使用者建立令牌。';
$string['createuser'] = '建立一個特殊使用者';
$string['createuserdescription'] = '需要一個網路服務使用者來代表系統控制 Moodle。';
$string['default'] = '預設為「{$a}」';
$string['deleteaservice'] = '刪除服務';
$string['deleteservice'] = '刪除服務： {$a->name}（id：{$a->id}）';
$string['deleteserviceconfirm'] = '刪除一個服務也會刪除與之有關的令牌。您真的要刪除對外服務「{$a}」嗎？';
$string['deletetokenconfirm'] = '您確認要刪除<strong>{$a->user}</strong>使用<strong>{$a->service}</strong>服務的網路服務令牌嗎？';
$string['disabledwarning'] = '所有網路服務協議都被停用。在高級特性中有「啟用網路服務」選項。';
$string['doc'] = '文檔';
$string['docaccessrefused'] = '您未被批准查看此令牌的參考文檔';
$string['documentation'] = '網路服務參考文檔';
$string['editaservice'] = '修改服務';
$string['editservice'] = '編輯服務：{$a->name}（id：{$a->id}）';
$string['enabled'] = '啟用';
$string['enabledocumentation'] = '啟用開發者參考文檔';
$string['enabledocumentationdescription'] = '為啟用的網路服務協議提供細緻的文檔。';
$string['enablemobilewsoverview'] = '訪問{$a->manageservicelink}管理頁面，勾選「{$a->enablemobileservice}」設置並保存。一切都會為您準備好，所有網站使用者都將可以使用官方 Moodle 應用。當前狀態：{$a->wsmobilestatus}';
$string['enableprotocols'] = '啟用協議';
$string['enableprotocolsdescription'] = '至少應啟用一個協議。為保障安全，應該只啟用要使用的協議。';
$string['enablews'] = '啟用網路服務';
$string['enablewsdescription'] = '必須在高級特性中啟用網路服務。';
$string['entertoken'] = '輸入密鑰/令牌。';
$string['error'] = '錯誤：{$a}';
$string['errorcatcontextnotvalid'] = '您不能在類別場景（類別 id：{$a->catid}）中執行函數。場景的錯誤資訊是：{$a->message}';
$string['errorcodes'] = '錯誤資訊';
$string['errorcoursecontextnotvalid'] = '您不能在課程場景（課程 id：{$a->courseid}）中執行函數。場景錯誤資訊是：{$a->message}';
$string['errorinvalidparam'] = '參數「{$a}」無效。';
$string['errorinvalidparamsapi'] = '無效的外部 api 參數';
$string['errorinvalidparamsdesc'] = '無效的外部 api 描述';
$string['errorinvalidresponseapi'] = '無效的外部 api 應答';
$string['errorinvalidresponsedesc'] = '無效的外部 api 應答描述';
$string['errormissingkey'] = '在單個結構中缺少必須的 key：{$a}';
$string['errornotemptydefaultparamarray'] = '名為「{$a}」的網路服務描述參數是一個或多個結構。預設值只能是空數組。請檢查網路服務描述。';
$string['erroronlyarray'] = '只接受數組。';
$string['erroroptionalparamarray'] = '名為「{$a}」的網路服務描述參數是一個或多個結構。它不能被設為 VALUE_OPTIONAL。請檢查網路服務描述。';
$string['errorresponsemissingkey'] = '應答中有錯誤——在單個結構中缺少下列必須的 key：{$a}';
$string['errorscalartype'] = '需要標量類型，但收到數組或對象。';
$string['errorunexpectedkey'] = '在參數數組中檢測到不需要的 key（{$a}）';
$string['execute'] = '執行';
$string['executewarnign'] = '警告：如果您點了執行按鈕，您的資料庫會被修改，且不能自動恢復這些變化！';
$string['externalservice'] = '對外服務';
$string['externalservicefunctions'] = '對外服務函數';
$string['externalservices'] = '對外服務';
$string['externalserviceusers'] = '外部服務使用者';
$string['failedtolog'] = '存日誌失敗';
$string['filenameexist'] = '文件名已存在：{$a}';
$string['forbiddenwsuser'] = '不能建立令牌，可能因為使用者還未確認、已刪除、已停用或者是訪客。';
$string['function'] = '函數';
$string['functions'] = '函數';
$string['generalstructure'] = '通用結構';
$string['information'] = '資訊';
$string['installexistingserviceshortnameerror'] = '以「{$a}」為簡稱的網路服務已存在。不能安裝或者升級使用相同此簡稱的不同的網路服務。';
$string['installserviceshortnameerror'] = '源代碼錯誤：服務的簡稱「{$a}」應該只包含數字、字母和_-..。';
$string['invalidextparam'] = '無效的外部 api 參數：{$a}';
$string['invalidextresponse'] = '無效的外部 api 應答：{$a}';
$string['invalidiptoken'] = '無效令牌——不支持您的IP';
$string['invalidtimedtoken'] = '無效令牌——令牌過期';
$string['invalidtoken'] = '無效令牌——找不到令牌';
$string['invalidtokensession'] = '無效的基於會話的令牌——找不到會話或已過期';
$string['iprestriction'] = 'IP限制';
$string['iprestriction_help'] = '此使用者將只能從列出的 IP 訪問網路服務';
$string['key'] = '密鑰';
$string['keyshelp'] = '密鑰用來從外部程序訪問您的 Moodle 賬號。';
$string['manageprotocols'] = '管理協議';
$string['managetokens'] = '管理令牌';
$string['missingcaps'] = '缺少權限';
$string['missingcaps_help'] = '此服務必需，但所選使用者不具有的權限。如果要使用此服務，必須為使用者所屬的角色新增缺少的權限。';
$string['missingpassword'] = '缺少密碼';
$string['missingrequiredcapability'] = '必須有 {$a} 權限。';
$string['missingusername'] = '缺少帳號';
$string['missingversionfile'] = '源代碼錯誤：組件 {$a} 缺少 version.php 文件';
$string['mobilewsdisabled'] = '停用';
$string['mobilewsenabled'] = '啟用';
$string['nofunctions'] = '此服務沒有函數。';
$string['norequiredcapability'] = '沒有需要的權限';
$string['notoken'] = '令牌列表為空。';
$string['onesystemcontrolling'] = '允許外部系統控制 Moodle';
$string['onesystemcontrollingdescription'] = '下面步驟幫助配置 Moodle 網路服務，讓外部系統可以與 Moodle 交互。包括設置令牌（安全密鑰）認證方法。';
$string['operation'] = '操作';
$string['optional'] = '可選';
$string['passwordisexpired'] = '密碼已過期。';
$string['phpparam'] = 'XML-RPC（PHP 結構）';
$string['phpresponse'] = 'XML-RPC（PHP 結構）';
$string['postrestparam'] = 'PHP 的 REST（POST 請求）源代碼';
$string['potusers'] = '未授權使用者';
$string['potusersmatching'] = '辨識的未授權使用者';
$string['print'] = '全部列印';
$string['protocol'] = '協議';
$string['removefunction'] = '刪除';
$string['removefunctionconfirm'] = '您確信要從服務「{$a->service}」刪除函數「{$a->function}」嗎？';
$string['requireauthentication'] = '此方法需要用 xxx 權限認證。';
$string['required'] = '必須';
$string['requiredcapability'] = '需要權限';
$string['requiredcapability_help'] = '如果設置，只有有相應權限的使用者才能訪問此服務。';
$string['requiredcaps'] = '需要權限';
$string['resettokenconfirm'] = '您確信要重置<strong>{$a->user}</strong>的<strong>{$a->service}</strong>服務的網路服務密鑰嗎？';
$string['resettokenconfirmsimple'] = '您想重置這個密鑰嗎？所有使用舊密鑰的連結都將失效。';
$string['response'] = '應答';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = '恢復的賬號在獲得令牌前需要重置密碼。';
$string['restparam'] = 'REST（POST 參數）';
$string['restrictedusers'] = '只服務授權使用者';
$string['restrictedusers_help'] = '使用者可以在他們的安全密鑰頁面為此服務建立令牌。此設置決定是所有有權建立網路服務令牌的使用者都可以這麼做，還是只有授權使用者可以。';
$string['securitykey'] = '安全密鑰（令牌）';
$string['securitykeys'] = '安全密鑰';
$string['selectauthorisedusers'] = '選擇授權使用者';
$string['selectedcapability'] = '已選擇';
$string['selectedcapabilitydoesntexit'] = '當前設置的必備權限（{$a}）已不再存在。請修改並保存。';
$string['selectservice'] = '選擇一個服務';
$string['selectspecificuser'] = '選擇一個特殊使用者';
$string['selectspecificuserdescription'] = '將網路服務使用者加為授權使用者。';
$string['service'] = '服務';
$string['servicehelpexplanation'] = '服務是一個函數集合。可以讓所有人或只讓指定的使用者訪問服務。';
$string['servicename'] = '服務名';
$string['servicenotavailable'] = '網路服務不可用（它不存在或者已停用）';
$string['servicesbuiltin'] = '內置服務';
$string['servicescustom'] = '自訂服務';
$string['serviceusers'] = '已授權使用者';
$string['serviceusersettings'] = '使用者設置';
$string['serviceusersmatching'] = '授權使用者辨識';
$string['serviceuserssettings'] = '修改授權使用者的設置';
$string['simpleauthlog'] = '簡單認證登錄';
$string['step'] = '步驟';
$string['testauserwithtestclientdescription'] = '用網路服務測試客戶端模擬外部訪問。在開始之前，先要用有 moodle/webservice:createtoken 權限的使用者並通過我的個人資料設置獲得密鑰（令牌）。您將在測試客戶端使用此令牌。在測試客戶端中，用令牌認證選擇一個已啟用的協議。<strong>警告：您測試的函數會被真的執行，所以小心選擇測試什麼！</strong>';
$string['testclient'] = '網路服務測試客戶端';
$string['testclientdescription'] = '* 此網路服務測試客戶端會<strong>真的執行</strong>被測函數。不要測試您不了解的函數。<br />
* 此測試客戶端並沒有實現所有的網路服務。<br />
* 您可以通過測試一些停用的函數來檢查使用者是否能訪問它們。 <br />
* 要看到更清晰的錯誤資訊，到「{$a->atag}」頁面把調試狀態設為<strong>{$a->mode}</strong><br />
* 訪問 {$a->amfatag}。';
$string['testwithtestclient'] = '測試服務';
$string['testwithtestclientdescription'] = '用網路服務測試客戶端模擬外部訪問。用令牌認證，使用一個已啟用的協議。<strong>警告：您測試的函數會被真的執行，所以小心選擇測試什麼！</strong>';
$string['token'] = '令牌';
$string['tokenauthlog'] = '令牌認證';
$string['tokencreatedbyadmin'] = '管理員不能重置（*）';
$string['tokencreator'] = '建立人';
$string['updateusersettings'] = '更新';
$string['userasclients'] = '把使用者當做有令牌的客戶端';
$string['userasclientsdescription'] = '下面步驟幫助您面向使用者設置 Moodle 的網路服務。這些步驟也幫助您設置建議採用的令牌（安全密鑰）認證方法。在這種情況下，使用者可以在我的個人資料設置中的安全密鑰頁面生成他的令牌。';
$string['usermissingcaps'] = '缺少權限：{$a}';
$string['usernameorid'] = '帳號 / 使用者 id';
$string['usernameorid_help'] = '輸入帳號或使用者 ID。';
$string['usernameoridnousererror'] = '未能找到該帳號/使用者 ID 的使用者。';
$string['usernameoridoccurenceerror'] = '使用此帳號的使用者使用者不唯一，請輸入使用者 ID。';
$string['usernotallowed'] = '此使用者不可以使用此服務。首先，您需要在{$a}的允許使用者管理頁面允許此使用者使用。';
$string['usersettingssaved'] = '使用者設置已保存';
$string['validuntil'] = '有效期至';
$string['validuntil_help'] = '如果設置，此日期之後，此服務就會對此使用者失效。';
$string['webservice'] = '網路服務';
$string['webservices'] = '網路服務';
$string['webservicesoverview'] = '概述';
$string['webservicetokens'] = '網路服務令牌';
$string['wrongusernamepassword'] = '錯誤的帳號或密碼';
$string['wsaccessuserdeleted'] = '拒絕訪問網路服務，因為帳號已刪除：{$a}';
$string['wsaccessuserexpired'] = '拒絕訪問網路服務，因為密碼過期，帳號：{$a}';
$string['wsaccessusernologin'] = '拒絕訪問網路服務，因為未登錄認證，帳號：{$a}';
$string['wsaccessusersuspended'] = '拒絕訪問網路服務，因為使用者已停用：{$a}';
$string['wsaccessuserunconfirmed'] = '拒絕訪問網路服務，因為使用者未確認：{$a}';
$string['wsauthmissing'] = '網路服務認證外掛缺失。';
$string['wsauthnotenabled'] = '網路服務認證外掛已停用。';
$string['wsclientdoc'] = 'Moodle 網路服務客戶端文檔';
$string['wsdocapi'] = 'API 文檔';
$string['wsdocumentation'] = '網路服務文檔';
$string['wsdocumentationdisable'] = '網路服務參考文檔已關閉。';
$string['wsdocumentationintro'] = '要編寫一個客戶端，我們建議您閱讀{$a->doclink}';
$string['wsdocumentationlogin'] = '或者輸入您的網路服務帳號和密碼：';
$string['wspassword'] = '網路服務密碼';
$string['wsusername'] = '網路服務帳號';
