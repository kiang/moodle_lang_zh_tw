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
 * Strings for component 'auth', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = '可用的認證外掛程式';
$string['alternatelogin'] = '如果您在此輸入一個URL，它將被用於本站的登入頁。這個頁面上應當有一個表單，表單的action一項應設定為<strong>「{$a}」 </strong>，並且返回的欄位中應當有<strong>username</strong>和< strong>password</strong>。<br />小心不要輸入錯誤的URL，否則您可能會被鎖在網站之外。<br />如果要使用預設登入頁面，此設定請留空白。';
$string['alternateloginurl'] = '其他的登入網址';
$string['auth_changepasswordhelp'] = '變更密碼說明';
$string['auth_changepasswordhelp_expl'] = '顯示密碼遺失說明給遺失{$a} 密碼的使用者。它將顯示 <strong>變更密碼網址</strong>或Moodle內部的密碼變更。';
$string['auth_changepasswordurl'] = '變更密碼網址';
$string['auth_changepasswordurl_expl'] = '指定網址給遺失密碼{$a}的使用者。設定<strong>使用標準變更密碼網頁</strong> 為 <strong>否</strong>.';
$string['auth_changingemailaddress'] = '您要求變更電子郵件信箱，由原本的{$a->oldemail} 改為 {$a->newemail}。基於安全的的考量，我們寄發一封郵件到您新的電子郵件信箱，以便確認信箱屬於您的，且填寫無誤。當您開啟該封信件並點按確認網址後，很快地，電子郵件信箱資料就會更新。';
$string['auth_common_settings'] = '一般設定';
$string['auth_data_mapping'] = '資料對應';
$string['authenticationoptions'] = '身份驗證選項';
$string['auth_fieldlock'] = '鎖定值';
$string['auth_fieldlock_expl'] = '<p><b>鎖定值：</b> 如果啟動，Moodle使用者和管理員將不能直接修改欄位的值。如果您正在維護外部資料庫的資料，請選擇此項。';
$string['auth_fieldlocks'] = '鎖定使用者欄位';
$string['auth_fieldlocks_help'] = '您可以鎖定使用者資料欄位。當管理者在編輯使用者紀錄或使用"上傳使用者"的功能時，這對網站很有幫助。</p> 若您是藉由Moodle來要求鎖住欄位，請確定您在建立使用者帳號時，有提供必要的資料，否則該帳號將無法使用。 </p><p>考慮設定封鎖模式為\'若空白則解除封鎖\'以避免這個問題。</p>';
$string['authinstructions'] = '您可以在這裡提供自訂的登入指示給您的使用者。您在這裡輸入的文字將出現在登入頁面。

如果留空不填，登入頁面將會使用系統預設的登入指示。';
$string['auth_invalidnewemailkey'] = '錯誤:Email網址不正確,請複製正確格式';
$string['auth_multiplehosts'] = '多個不同的主機可以被指定(例如host1.com;host2.com;host3.com)';
$string['auth_outofnewemailupdateattempts'] = '您已經超過可修改Email位址的允許次數，您的要求已經被取消。';
$string['auth_passwordisexpired'] = '您的密碼已過期，您現在要變更您的密碼嗎?';
$string['auth_passwordwillexpire'] = '您的密碼將在{$a}天後過期，您要現在變更您的密碼嗎?';
$string['auth_remove_delete'] = '內部完全刪除';
$string['auth_remove_keep'] = '保留內部';
$string['auth_remove_suspend'] = '停用內部';
$string['auth_remove_user'] = '當從遠端來的使用者在大量移除時，內部使用者帳號要執行的動作。唯使用者再次出現在外部來源時，該停用使用者才會自動重新啟用。';
$string['auth_remove_user_key'] = '移除的外部使用者';
$string['auth_sync_script'] = '定期執行程式同步指令';
$string['auth_updatelocal'] = '更新本地資料';
$string['auth_updatelocal_expl'] = '<p><b>更新本地資料:</b>啟用時,每次使用者登入或使用者進行同步化時欄位將被更新(從外部認證),欄位設為本地更新時會被鎖定.</p>';
$string['auth_updateremote'] = '更新外部資料';
$string['auth_updateremote_expl'] = '<p><b>更新外部資料:</b>啟用時,使用者資料更新時外部認證資料也會更新,欄位必須設為解除鎖定才能編輯.</p>';
$string['auth_updateremote_ldap'] = '<p><b>注恴:</b>更新外部LDAP 資料需要設定binddn和bindpw 到一個綁定的使用者,並開放所有對使用者進行編輯的權限,它目前無法儲存多重屬性,多餘的資料在更新時會被移除 </p>';
$string['auth_user_create'] = '啟動使用者建立功能';
$string['auth_user_creation'] = '新的(匿名)使用者可以在外部身份驗證源中建立新使用者帳號，並通過email確認。如果您啟動了這個功能，請記住同時也為使用者建立功能設置一下模組特定選項';
$string['auth_usernameexists'] = '選中的帳號已經存在。請選擇一個新的。';
$string['auto_add_remote_users'] = '自動新增遠端使用者';
$string['changepassword'] = '更改密碼的網址';
$string['changepasswordhelp'] = '請輸入當使用者忘記自己的帳號稱/密碼時，可以找回或更改它們的網址。

此網址將以按鈕形式提供於登入頁面和他們的使用者頁面上，若您未提供網址，則不會出現此按鈕。';
$string['chooseauthmethod'] = '選擇一個身份驗證方法：';
$string['chooseauthmethod_help'] = '<p align="center"><b>改變認證方法</b></p>

<p>這個功能表允許您改變對於特定使用者的認證方法。</p>

<p>請注意，這依賴於這個網站已經安裝能夠使用的認證方法，以及您對它們所進行的設定。</p>

<p>此處的錯誤設定，可能會導致使用者無法登入，甚至刪除其帳號，所以使用時請小心。</p>';
$string['createpasswordifneeded'] = '如果需要則建立密碼';
$string['emailchangecancel'] = '取消變更Email';
$string['emailchangepending'] = '變更進行中。開啟連結向您送出 {$a->preference_newemail}';
$string['emailnowexists'] = '您試著輸入到個人資料中的Email位址已經有人使用。所以您的Email網址變更請求現在取消，但您可以再次嘗試使用不同的網址';
$string['emailupdate'] = 'Email地址更新';
$string['emailupdatemessage'] = '親愛的 {$a->fullname}您好，您已經在t{$a->site}變更您帳號的E-mail位址，請在瀏覽器開啟下列網址確認這個變更。';
$string['emailupdatesuccess'] = '使用者<em>{$a->fullname}</em> 已經成功的更新它的Email 位址 <em>{$a->email}</em>.';
$string['emailupdatetitle'] = '確認變更{$a->site}網站的Email地址';
$string['enterthenumbersyouhear'] = '輸入您聽到的數字';
$string['enterthewordsabove'] = '輸入您在上方看到的單字';
$string['errormaxconsecutiveidentchars'] = '密碼必須含有{$a}個連續一樣的字母';
$string['errorminpassworddigits'] = '密碼至少需要有{$a}位數字。';
$string['errorminpasswordlength'] = '密碼至少需要有{$a}個字元。';
$string['errorminpasswordlower'] = '密碼至少需要有{$a}位小寫字元。';
$string['errorminpasswordnonalphanum'] = '密碼至少需要有{$a}位非阿拉伯數字字元';
$string['errorminpasswordupper'] = '密碼至少需要有{$a}位大寫字元';
$string['errorpasswordupdate'] = '更新密碼時發生錯誤，密碼沒有修改';
$string['forcechangepassword'] = '強制變更密碼';
$string['forcechangepasswordfirst_help'] = '強制使用者在第一次登入時變更密碼';
$string['forcechangepassword_help'] = '強制使用者在下次登入時變更密碼';
$string['forgottenpassword'] = '若您在此輸入一個位址，它將用於此網址遺失密碼的回覆網頁中。此意謂網站的密碼管理完全在Moodle之外。若要使用預設的密碼回覆方式，此處請空白。';
$string['forgottenpasswordurl'] = '密碼遺忘時網址';
$string['getanaudiocaptcha'] = '聽聲音的字詞驗證';
$string['getanimagecaptcha'] = '看圖片的字詞驗證';
$string['getanothercaptcha'] = '換一個字詞';
$string['guestloginbutton'] = '訪客登入按鈕';
$string['incorrectpleasetryagain'] = '不正確。請重試。';
$string['infilefield'] = '在檔案中需要的欄位';
$string['informminpassworddigits'] = '至少{$a}個數字';
$string['informminpasswordlength'] = '至少{$a}個字母';
$string['informminpasswordlower'] = '最少要有 {$a}個小寫字母';
$string['informminpasswordnonalphanum'] = '最少要有 {$a}個非英文字元';
$string['informminpasswordupper'] = '最少要有 {$a}個大寫字母';
$string['informpasswordpolicy'] = '密碼必須包含 {$a}';
$string['instructions'] = '使用說明';
$string['internal'] = '內部的';
$string['locked'] = '已鎖定';
$string['md5'] = 'MD5加密';
$string['nopasswordchange'] = '密碼不能夠修改';
$string['nopasswordchangeforced'] = '沒有修改密碼前您無法處理，這裡沒有提供可以變更的頁面，請聯絡您的Moodle管理員。';
$string['noprofileedit'] = '不能編輯個人資料';
$string['ntlmsso_attempting'] = '透過NTLM進行Single Sign On';
$string['ntlmsso_failed'] = '自動登入失敗，請使用正常登入頁面。';
$string['ntlmsso_isdisabled'] = 'NTLM SSO被關閉。';
$string['passwordhandling'] = '密碼欄位處裡中';
$string['plaintext'] = '純文字';
$string['pluginnotenabled'] = '認證外掛 \'{$a}\' 未啟用。';
$string['pluginnotinstalled'] = '認證外掛 \'{$a}\' 未安裝。';
$string['potentialidps'] = '使用您的帳號登入在：';
$string['recaptcha'] = '重新字詞驗證';
$string['recaptcha_help'] = '圖片驗證碼用來防止網站被自動程式濫用。只需要在輸入框中按順序輸入這些字，用一個空格分隔。

如果您不確定這些詞是什麼，可以嘗試再獲得一個圖片驗證碼或撥放聲音驗證碼。';
$string['selfregistration'] = '自行註冊';
$string['selfregistration_help'] = '若選擇一個認證外掛，比如，用email，或自我註冊，那將讓潛在使用者能自行註冊和建立帳號。

這可能讓亂貼垃圾廣告者建立帳號來濫用討論區或部落格來放置廣告。

為了避免這些風險，自我註冊應該關閉，或以<em>允許的email域</em>來加以限制。';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = '您可以選擇登入網頁中是否顯示訪客登入按鈕.';
$string['stdchangepassword'] = '使用變更密碼的標準頁面';
$string['stdchangepassword_expl'] = '如果這外部認證系統允許透過moodle變更密碼，將此功能設為啟動，這個設定將會覆寫"變更密碼網址"欄位。';
$string['stdchangepassword_explldap'] = '注意：如果LDAP 伺服器是在遠端，強烈建議您經由 SSL加密通道(ldaps://) 來使用LDAP。';
$string['unlocked'] = '已解除鎖定';
$string['unlockedifempty'] = '如果留空，則解除鎖定';
$string['update_never'] = '從不';
$string['update_oncreate'] = '建立時';
$string['update_onlogin'] = '每次登入時';
$string['update_onupdate'] = '更新時';
$string['user_activatenotsupportusertype'] = '認證：Idap的user_activate()不支援所選的使用者類型：{$a}';
$string['user_disablenotsupportusertype'] = '認證：Idap的user_activate()不支援所選的使用者類型(現在尚未支援)';
