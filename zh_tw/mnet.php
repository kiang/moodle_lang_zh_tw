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
 * Strings for component 'mnet', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = '關於您的伺服器';
$string['accesslevel'] = '存取等級';
$string['addhost'] = '增加主機';
$string['addnewhost'] = '增加一個新主機';
$string['addtoacl'] = '增加到存取控制';
$string['allhosts'] = '全部主機';
$string['allhosts_no_options'] = '查看多台主機時無可用選項';
$string['allow'] = '允許';
$string['applicationtype'] = '應用類型';
$string['authfail_nosessionexists'] = '認證失敗：mnet連線session不存在。';
$string['authfail_sessiontimedout'] = '認證失敗：mnet連線session逾時。';
$string['authfail_usermismatch'] = '認證失敗：使用者不符合。';
$string['authmnetdisabled'] = 'Moodle網路<em>認證外掛</em>已經被<strong>停用</strong>。';
$string['badcert'] = '這不是合法的證書。';
$string['certdetails'] = '認證細節';
$string['configmnet'] = 'MNet支持此服務器與其它服務器或服務之間的通訊�一';
$string['couldnotgetcert'] = '在<br />{$a} <br />沒有找到證書。主機可能已經當機或是設定錯誤。';
$string['couldnotmatchcert'] = '這和目前web伺服器發佈的證書不符合。';
$string['courses'] = '課程';
$string['courseson'] = '課程在';
$string['currentkey'] = '現在的公鑰';
$string['current_transport'] = '現在的傳輸';
$string['databaseerror'] = '無法將內容寫到這資料庫';
$string['deleteaserver'] = '刪除一個伺服器';
$string['deletedhostinfo'] = '此主機已刪除。如果您想恢復它，就把刪除狀態改為“否”�一';
$string['deletedhosts'] = '已刪除主機：{$一';
$string['deletehost'] = '刪除主機';
$string['deletekeycheck'] = '您確定要刪除這個密鑰嗎？';
$string['deleteoutoftime'] = '60秒刪除密鑰的視窗已經逾時了，請重新開始。';
$string['deleteuserrecord'] = 'SSO ACL：從{$a[1]}中刪除用戶{$a[0]}的記錄。';
$string['deletewrongkeyvalue'] = '發生了一個錯誤。如果您沒有刪除伺服器上的SSL密鑰，則很有可能您已經成為惡意攻擊的對象。未進行任何操作。';
$string['deny'] = '拒絕';
$string['description'] = '描述';
$string['duplicate_usernames'] = '我們未能創造一個索引，在您的用戶表上“ mnethostid ”和“使用者”的欄位中。您複製使用者的在您的用戶表時，可能發生。您的升級應仍順利完成。按一下上面的鏈接，將顯示在一個新視窗來修正此問題。您可以最後再升級。';
$string['enabled_for_all'] = '(這個服務已經對所有網站啟動)。';
$string['enterausername'] = '請輸入一個使用名稱，或是以逗號分隔的使用者清單。';
$string['error7020'] = '這個錯誤通常發生，如果遠端站台為您創造了一個帶有錯誤wwwroot紀錄，例：http://yoursite.com 而非http://www.yoursite.com，你應該與遠端站的管理員聯繫點與您的wwwroot，讓她為您的主機更新她的紀錄';
$string['error7022'] = '您發送到遠程站點的郵件是加密的，但沒有簽名。這是非常意外，您應該在可能的文件的錯誤如果發生這種情況給予盡可能多的訊息，關於moodle版本的問題等';
$string['error7023'] = '遠程站點試圖使用所有的方法將您的訊息解密。他們都失敗了。您或許能夠解決這個問題，使用手動重新鍵控與遠程站點。這是不可能發生的，除非你已經沒有與遠程站點溝通已經數個月';
$string['error7024'] = '您發送未加密的信息到遠端站台，但遠程站點不接受從您的網站的未加密的溝通，這是非常意外，您應該是可能文件的錯誤，如果發生這種情況給予盡可能多的信息，關於moodle版本的問題等';
$string['error7026'] = '關鍵是您的留言已簽署了與不同的關鍵遠程主機已對文件進行了您的伺服器。此外，遠程主機的企圖取得您當前的key，並沒有這樣做，請手動再試一次重新核對與遠程主機';
$string['error709'] = '遠端站台未能從你那邊獲取一個SSL的key';
$string['expired'] = '密鑰過期於';
$string['expires'] = '有效至';
$string['expireyourkey'] = '刪除這個密鑰';
$string['expireyourkeyexplain'] = 'moodle每28天會自動轉移您的密碼（預設)，但你也可以在任何時候選擇手動到期這個密碼。如果您認為此密碼匙已妥協，這將是有益的。更換會立即自動生成。刪去這一密碼將變得不可能為其他moodles與您溝通，直到您手動相互聯繫管理員，並為他們提供與您的新的密碼。';
$string['exportfields'] = '導出字段';
$string['failedaclwrite'] = '對於使用者沒有通知mnet存取控制清單';
$string['findlogin'] = '查找登錄';
$string['forbidden-function'] = '對RPC而言該功能尚未啟用';
$string['forbidden-transport'] = '您正在嘗試使用的傳輸方法是不容許';
$string['forcesavechanges'] = '強迫更改儲存';
$string['helpnetworksettings'] = '配置inter-moodle的傳訊';
$string['hidelocal'] = '隱藏本地端的使用者';
$string['hideremote'] = '隱藏遠端的使用者';
$string['host'] = '主機';
$string['hostcoursenotfound'] = '主機或課程沒有發現';
$string['hostdeleted'] = '好-主機刪除';
$string['hostexists'] = '紀錄已經存在主機和moodle使用ID部署，按此繼續編輯記錄';
$string['hostlist'] = '已聯網主機列表';
$string['hostname'] = '主機名稱';
$string['hostnamehelp'] = '完整合格的遠端主機網域名稱，例：www.example.com';
$string['hostnotconfiguredforsso'] = '對遠端登錄而言，這個遠端的moodle hub是未配置';
$string['hostsettings'] = '主機設定';
$string['http_self_signed_help'] = '在遠端主機上，允許使用自我簽名的DIY SSL認證連接';
$string['https_self_signed_help'] = '允許使用自我簽名的diy的SSL在PHP上連接，對遠端主機超過HTTP';
$string['https_verified_help'] = '允許使用SSL認證在遠程主機的連接';
$string['http_verified_help'] = '允許使用經過在PHP上SSL認證連接，在遠端主機，但超過HTTP（不通過https ）';
$string['id'] = 'ID';
$string['idhelp'] = '這個值是自動分配且不能被改變的';
$string['importfields'] = '導入字段';
$string['inspect'] = '檢查';
$string['installnosuchfunction'] = '源代碼錯誤！正試圖從文件（{$a->file}）安裝mnet xmlrpc函數（{$a->method}），但它並不存在�一';
$string['installnosuchmethod'] = '源代碼錯誤！正試圖安裝類（{$a->class}）中的mnet xmlrpc函數（{$a->method}），但它並不存在�一';
$string['installreflectionclasserror'] = '源代碼錯誤！MNet 反射器調用類“{$a->class}”的“{$a->method}”方法失敗。原始錯誤信息是：“{$a->error}�一';
$string['installreflectionfunctionerror'] = '源代碼錯誤！MNet 反射器調用文件“{$a->file}”中的“{$a->method}”函數失敗。原始錯誤信息是：“{$a->error}�一';
$string['invalidaccessparam'] = '無效的存取參數';
$string['invalidactionparam'] = '無效的動作參數';
$string['invalidhost'] = '您必須提供有效的主機標識';
$string['invalidpubkey'] = '識別碼不是一個有效的SSL識別碼';
$string['invalidurl'] = '無效的URL參數';
$string['ipaddress'] = 'IP 位址';
$string['is_in_range'] = 'IP位址&nbsp;<code>{$a}</code>&nbsp; 代表了一個有效值得信賴的主機';
$string['ispublished'] = '{$a} Moodle 已為您啟用這項服務，';
$string['issubscribed'] = '{$a}Moodle正在您的主機上訂閱該服務。';
$string['keydeleted'] = '您的密碼已成功刪除且被取代';
$string['keymismatch'] = '此主機持有的公鑰是不同於目前公佈的公鑰';
$string['last_connect_time'] = '最後連線時間';
$string['last_connect_time_help'] = '上次連接到主機的時間';
$string['last_transport_help'] = '上次連接到該主機使用的傳輸方式�一';
$string['leavedefault'] = '使用默認的參數代替';
$string['listservices'] = '服務列表';
$string['loginlinkmnetuser'] = '<br/>如果您是 MNet 遠程用戶，可以<a href="{$a}">在這裡確認email地址</a>，您可能重新定向到登錄頁面。<br 一';
$string['logs'] = '日誌';
$string['managemnetpeers'] = '管理同伴';
$string['method'] = '方法';
$string['methodhelp'] = '{$a} 的方法幫助';
$string['methodsavailableonhost'] = '{$a} 的可用方法';
$string['methodsavailableonhostinservice'] = '{$a->host}上可用於{$a->service}的方法';
$string['methodsignature'] = '{$a}的方法簽名';
$string['mnet'] = 'Moodle 網路';
$string['mnet_concatenate_strings'] = '串連（最多)3個字元串及返回結果';
$string['mnetdisabled'] = 'Moodle Network<strong>被關閉</strong>。';
$string['mnetidprovider'] = 'MNet ID 提供者';
$string['mnetidproviderdesc'] = '您可以使用這項功能檢索任意您可以登錄的鏈接網站，如果您能提供正確的郵箱地址來匹配您以前使用過的登錄用戶名�一';
$string['mnetidprovidermsg'] = '您應該在 {$a} 登錄�一';
$string['mnetidprovidernotfound'] = '很抱歉，沒有找到更多信息';
$string['mnetlog'] = 'Logs';
$string['mnetpeers'] = 'Peers';
$string['mnetservices'] = '服務';
$string['mnet_session_prohibited'] = '宿主服務器中的用戶當前不允許進入到{$a}�一';
$string['mnetsettings'] = 'Moodle 網路設定';
$string['moodle_home_help'] = '遠程伺服器中Moodle主頁的路徑，例如：/moodle/.';
$string['name'] = '名稱';
$string['net'] = '網路';
$string['networksettings'] = '網路設定';
$string['never'] = '從不';
$string['noaclentries'] = '在SSO存取控制清單中，沒有任何記錄。';
$string['noaddressforhost'] = '抱歉，此主機名（{$a}）不能被解析�一';
$string['nocurl'] = 'PHP Curl 函數庫沒有安裝';
$string['nolocaluser'] = '沒有對應遠程用戶的本地記錄，並且因為此主機不允許自動創建用戶，所以不能建立記錄。請聯系您的系統管理員�一';
$string['nomodifyacl'] = '您無權修改MNet訪問控制列表�一';
$string['nonmatchingcert'] = '證書主題：<br /><em>{$a->subject}</em><br />和主機中的記錄不匹配：<br /><em>{$a->host}</em>�一';
$string['nopubkey'] = '獲取公共密鑰遇到問題。<br />可能是主機不允許MNet訪問或者密鑰是無效的�一';
$string['nosite'] = '不能找到站點級別的課程';
$string['nosuchfile'] = '文件/函數 {$a}不存在�一';
$string['nosuchfunction'] = '無法找到函數，或者函數禁用RPC�一';
$string['nosuchmodule'] = '函數地址不正確，不能被定位。請使用mod/modulename/lib/函數名 格式�一';
$string['nosuchpublickey'] = '不能獲得符號驗證的公共密鑰�一';
$string['nosuchservice'] = 'RPC在主機上不能運行�一';
$string['nosuchtransport'] = '傳輸ID不存在';
$string['notBASE64'] = '此字符串不是base64編碼，所以它不可能是有效的密鑰�一';
$string['notenoughidpinfo'] = '您的身份提供者沒有提供足夠的信息，不能在本地創建或更新您的賬號。抱歉�一';
$string['not_in_range'] = 'IP地址<code>{$a}</code>不代表一個有效的可信主機�一';
$string['notinxmlrpcserver'] = '沒在 XMLRPC 服務器運行時嘗試訪問 MNet 遠程客戶端';
$string['notmoodleapplication'] = '警告：這不是一個 Moodle 應用，所以一些檢查方法可能不能正常工作�一';
$string['notPEM'] = '密鑰不是以PEM格式，所以無法使用�一';
$string['notpermittedtojump'] = '您沒有權限從該Moodle服務器啟動一個遠程會話�一';
$string['notpermittedtojumpas'] = '您不能在登錄為其它用戶時啟動遠程會話�一';
$string['notpermittedtoland'] = '您沒有權限啟動遠程會話�一';
$string['off'] = '關';
$string['on'] = '開';
$string['options'] = '選項';
$string['peerprofilefielddesc'] = '在這裡，您可以覆蓋創建新用戶時發送和導入哪些個人資料字段的全局設置';
$string['permittedtransports'] = '允許傳輸';
$string['phperror'] = '內部PHP錯誤，阻止了您的請求完成�一';
$string['position'] = '位置';
$string['postrequired'] = '刪除函數需要一個POST請求�一';
$string['profileexportfields'] = '發送字段';
$string['profilefielddesc'] = '在這裡，您可以配置創建或更新賬號時都通過 MNet 發送和接收哪些個人資料字段。您也可以為每個 MNet 伙伴單獨設置這些配置。注意，會永遠發送下面的字段：{$一';
$string['profilefields'] = '字段簡介';
$string['profileimportfields'] = '導入字段';
$string['promiscuous'] = '混雜的';
$string['publickey'] = '公鑰';
$string['publickey_help'] = '公共密鑰從遠程服務器上直接獲得�一';
$string['publickeyrequired'] = '您必須提供一個公鑰�一';
$string['publish'] = '公開';
$string['reallydeleteserver'] = '確定刪除服務器嗎�一';
$string['receivedwarnings'] = '接收到下面的警告';
$string['recordnoexists'] = '記錄不存在';
$string['reenableserver'] = '否，選擇該選項重新激活服務器�一';
$string['registerallhosts'] = '注冊所有主機（混亂模式�一';
$string['registerallhostsexplain'] = '您可以選擇自動注冊所有嘗試連接您的主機。這意味著您的主機中將會出現一個記錄列表，其中包含了所有與您互聯，並請求了您的公鑰的MNet網站。<br />您可以在下面的選項為“所有主機”配置服務。通過啟用一些服務，可以為任意遠程網站提供任何服務�一';
$string['registerhostsoff'] = '現在<b>關閉</b>注冊所有主機';
$string['registerhostson'] = '現在<b>開放</b>注冊所有主機';
$string['remotecourses'] = '遠端的使用者';
$string['remotehost'] = '遠端的中繼站';
$string['remotehosts'] = '遠端的主機';
$string['remoteuserinfo'] = '遠程{$a->remotetype}用戶——個人資料取自<a href="{$a->remoteurl}">{$a->remotename}</一';
$string['requiresopenssl'] = 'Moodle網路需要 OpenSSL 延伸套件';
$string['restore'] = '復原';
$string['returnvalue'] = '返回值';
$string['reviewhostdetails'] = '檢閱主機內容';
$string['reviewhostservices'] = '檢閱主機服務';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP(未加密)';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP(自我簽名)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS(自我簽名)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS(已簽名)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP(已簽名)';
$string['selectaccesslevel'] = '請從列表中選擇訪問級別�一';
$string['selectahost'] = '請選擇一個遠程主機�一';
$string['service'] = '服務名稱';
$string['serviceid'] = '服務一';
$string['servicesavailableonhost'] = '{$a}上的可用服務';
$string['serviceswepublish'] = '服務發布給{$一';
$string['serviceswesubscribeto'] = '訂閱{$a}上的服務';
$string['settings'] = '設定';
$string['showlocal'] = '顯示本地的使用者';
$string['showremote'] = '顯示遠端的使用者';
$string['ssl_acl_allow'] = 'SSO ACL: Allow user {$a}[0] from {$a}[1]';
$string['ssl_acl_deny'] = 'SSO ACL: Deny user {$a}[0] from {$a}[1]';
$string['ssoaccesscontrol'] = 'SSO 存取控制';
$string['ssoacldescr'] = '使用此頁面允許/拒絕從遠程MNet主機來訪的指定用戶。當您為遠程用戶提供SSO服務時，這個功能非常有用。為了控制您的<em>本地</em>用戶漫游到其它MNet主機的能力，使用角色系統分配他們<em>mnetlogintoremote</em>權限�一';
$string['ssoaclneeds'] = '為了讓這個功能起作用，您必須將網絡打開，並啟用MNet認證插件�一';
$string['strict'] = '嚴密的';
$string['subscribe'] = '訂約';
$string['system'] = '系統';
$string['testclient'] = 'MNet 測試客戶端';
$string['testtrustedhosts'] = '測試一個位址';
$string['testtrustedhostsexplain'] = '鍵入一個IP地址，看是否是一個值得信賴的主機�一';
$string['theypublish'] = '他們發布';
$string['theysubscribe'] = '他們訂閱';
$string['transport_help'] = '這些選項是相反的（倒數），因此如果您的主機上有一個簽名的SSL證書，只能強制一個遠程主機使用簽名的SSL證書';
$string['trustedhosts'] = 'XML-RPC主機';
$string['trustedhostsexplain'] = '<p>信任主機機制允許指定的主機通過XML-RPC調用任意的Moodle API。這樣就可以使用腳本控制Moodle的行為，但激活它也是非常危險的。如果感到迷惑不解，可以將其“關閉”。</p>
<p><strong>沒有任何標准的MNet特性需要它！</strong>只在您確切知道您在做什麼的情況下才需要激活它。</p>
<p>激活方法是，在每一行鍵入一個IP地址或網絡的列表。例如：</p>
您的本地主機：<br />127.0.0.1<br />您的本地主機（帶掩碼）：<br />127.0.0.1/32<br />IP地址為192.168.0.7的主機：<br />192.168.0.7/32<br />IP在192.168.0.1到192.168.0.255之間的所有主機：<br />192.168.0.0/24<br />任意主機，管它是啥：<br />192.168.0.0/0<br />顯然，最後一個例子<strong>不是</strong>建議配置�一';
$string['turnitoff'] = '關閉';
$string['turniton'] = '打開';
$string['type'] = '類型';
$string['unknown'] = '未知';
$string['unknownerror'] = '在通信中發生位置錯誤';
$string['usercannotchangepassword'] = '由於您是遠程用戶，所以不能更改密碼�一';
$string['userchangepasswordlink'] = '<br /> 您也許可以在<a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>提供者那裡修改密碼�一';
$string['usernotfullysetup'] = '您的賬號不完整。您需要<a href="{$a}">回到您的信息提供者</a>並確定您在那裡的個人資料是完整的。可能需要您重新登錄才能生效�一';
$string['usersareonline'] = '警告：當前該服務器有{$a}名用戶登錄到您的網站�一';
$string['validated_by'] = '通過網絡驗證： <code>{$a}</cod一';
$string['verifysignature-error'] = '簽名驗證失敗�一';
$string['verifysignature-invalid'] = '簽名驗證失敗�一';
$string['version'] = '版本';
$string['warning'] = '警告';
$string['wrong-ip'] = '您的IP地址與記錄中的地址不匹配';
$string['xmlrpc-missing'] = '您需要在PHP中安裝XML-RPC才能使用這個功能�一';
$string['yourhost'] = '您的主機';
$string['yourpeers'] = '您的夥伴點(Peer)';
