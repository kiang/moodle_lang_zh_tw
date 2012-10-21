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
 * Strings for component 'message', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   message
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontact'] = '增加聯絡人';
$string['addsomecontacts'] = '要發簡訊給某人或在此頁面增加快捷連結，可以使用上方的<a href="{$a}">搜索</a>功能。';
$string['addsomecontactsincoming'] = '發送簡訊的人不在您的通訊錄中。如果您要將他加入通訊錄，請點擊他們姓名旁邊的"加入通訊錄”的圖示。';
$string['ago'] = '{$a}之前';
$string['ajax_gui'] = 'Ajax 聊天室';
$string['allmine'] = '我發送或接收的全部簡訊';
$string['allstudents'] = '參與課程的所有學生的全部簡訊';
$string['allusers'] = '所有使用者的簡訊';
$string['backupmessageshelp'] = '如果啟動，即時簡訊將會在網站自動備份時一併納入。';
$string['beepnewmessage'] = '收到簡訊時，發出提醒聲音(需要瀏覽器支援)';
$string['blockcontact'] = '黑名單';
$string['blockedmessages'] = '{$a}條來自或發送給黑名單的簡訊';
$string['blockedusers'] = '被封鎖的用戶 ({$a})';
$string['blocknoncontacts'] = '僅接收通訊錄中的使用者所發送的簡訊。(其他都拒收)';
$string['contactlistempty'] = '您的通訊錄是空的';
$string['contacts'] = '通訊錄';
$string['context'] = '內容';
$string['couldnotfindpreference'] = '無法加載偏好 {$a}。您傳遞給 message_send() 的 component 和 name 能與 message_providers 中的某行匹配嗎？消息提供者必須出現在數據庫中，這樣用戶才能配置當收到消息時該怎樣被通知�一';
$string['defaultmessageoutputs'] = '預設簡訊輸出';
$string['defaults'] = '預設';
$string['deletemessagesdays'] = '多少天前的舊簡訊應當被自動刪除';
$string['disableall'] = '暫時關閉通知';
$string['disableall_help'] = '臨時禁用所有通知，除了被網站管理員設為“強制”的以外';
$string['disabled'] = '傳簡訊在本站是被關閉的';
$string['disallowed'] = '不允許的';
$string['discussion'] = '互動';
$string['editmymessage'] = '傳簡訊';
$string['emailmessages'] = '當我離線時，將簡訊寄至我的電子郵件信箱';
$string['emailtagline'] = '這封郵件是在 "{$a}" 上傳送給您的簡訊副本';
$string['emptysearchstring'] = '您必須提供要搜尋的資料';
$string['errorcallingprocessor'] = '調用定義的處理器出錯';
$string['errortranslatingdefault'] = '轉化插件的缺省設置出錯，改為使用系統缺省設置�一';
$string['forced'] = '強制的';
$string['formorethan'] = '超過';
$string['gotomessages'] = '看消息去';
$string['guestnoeditmessage'] = '訪客用戶不能編輯簡訊選項';
$string['guestnoeditmessageother'] = '訪客用戶不能編輯用戶簡訊選項';
$string['includeblockedusers'] = '包括黑名單';
$string['incomingcontacts'] = '新的聯絡人 ({$a})';
$string['keywords'] = '關鍵字';
$string['keywordssearchresults'] = '搜尋結果: 找到{$a}條簡訊';
$string['keywordssearchresultstoomany'] = '找到多於{$a}條簡訊，改進你的搜尋。';
$string['loggedin'] = '線上';
$string['loggedindescription'] = '當我登入時';
$string['loggedoff'] = '不在線上';
$string['loggedoffdescription'] = '當我離線時';
$string['mailsent'] = '將透過電子郵件發送簡訊';
$string['managecontacts'] = '管理我的通訊錄';
$string['managemessageoutputs'] = '管理簡訊輸出';
$string['maxmessages'] = '最多顯示多少條互動歷史簡訊';
$string['message'] = '簡訊';
$string['messagehistory'] = '歷史簡訊';
$string['messagehistoryfull'] = '過去全部簡訊';
$string['messageoutputs'] = '簡訊輸出';
$string['messages'] = '簡訊';
$string['messaging'] = '傳簡訊';
$string['messagingdisabled'] = '網站中已禁用簡訊功能，將以電子郵件發送來取代。';
$string['mostrecent'] = '新近的簡訊';
$string['mostrecentconversations'] = '新進的對話';
$string['mostrecentnotifications'] = '新近的通知';
$string['mycontacts'] = '我的通訊錄';
$string['newonlymsg'] = '只顯示新的';
$string['newsearch'] = '新的搜尋';
$string['noframesjs'] = '沒有頁框和JavaScript 的版本';
$string['nomessages'] = '沒有簡訊';
$string['nomessagesfound'] = '沒有找到簡訊';
$string['noreply'] = '不要回覆這個簡訊';
$string['nosearchresults'] = '您的搜尋沒有結果';
$string['notpermitted'] = '不允許';
$string['offline'] = '離線';
$string['offlinecontacts'] = '離線中的聯絡人 ({$a})';
$string['online'] = '在線上';
$string['onlinecontacts'] = '在線上的聯絡人 ({$a})';
$string['onlyfromme'] = '我傳送的簡訊';
$string['onlymycourses'] = '只有在我的課程中';
$string['onlytome'] = '給我的簡訊';
$string['outputdisabled'] = '輸出被關閉';
$string['outputdoesnotexist'] = '簡訊輸出不存在';
$string['outputenabled'] = '輸出已經啟用';
$string['outputnotavailable'] = '無法使用';
$string['outputnotconfigured'] = '沒有設置';
$string['page-message-x'] = '任何簡訊頁面';
$string['pagerefreshes'] = '這個頁面每{$a}秒自動更新一次';
$string['permitted'] = '允許的';
$string['private_config'] = '彈出式簡訊視窗';
$string['processortag'] = '目的地';
$string['providers_config'] = '為進入的簡訊設定通知方式';
$string['providerstag'] = '來源';
$string['readmessages'] = '{$a}條已讀取的簡訊';
$string['recent'] = '新近';
$string['removecontact'] = '刪除聯絡人';
$string['savemysettings'] = '保存我的設定';
$string['search'] = '搜尋';
$string['searchcombined'] = '搜尋人員和簡訊';
$string['searchforperson'] = '搜尋人員';
$string['searchmessages'] = '搜尋簡訊';
$string['sendingvia'] = '經由 "{$a->processor}"傳送 "{$a->provider}"';
$string['sendingviawhen'] = '當 {$a->state}時，經由 "{$a->processor}"傳送 "{$a->provider}"';
$string['sendmessage'] = '傳送簡訊';
$string['sendmessageto'] = '傳送簡訊給{$a}';
$string['sendmessagetopopup'] = '傳送簡訊給{$a} - 新視窗';
$string['settings'] = '設定';
$string['settingssaved'] = '您的設定已經保存';
$string['showmessagewindow'] = '當有新簡訊到來時自動顯示訊息視窗(您的瀏覽器需要進行設定，使其不會阻擋這個網站的彈出視窗)。';
$string['strftimedaydatetime'] = '%A, %d %B %Y, %I:%M %p';
$string['thisconversation'] = '這一對話';
$string['timenosee'] = '已經離線多少分鐘';
$string['timesent'] = '傳送時間';
$string['touserdoesntexist'] = '你不能傳送簡訊給一個不存在的用戶(ID{$a})';
$string['unblockcontact'] = '不再封鎖聯絡人';
$string['unreadmessages'] = '{$a}條未讀取的簡訊';
$string['unreadnewmessage'] = '來自{$a}的新簡訊';
$string['unreadnewmessages'] = '新簡訊({$a})';
$string['unreadnewnotification'] = '新通知';
$string['unreadnewnotifications'] = '新通知({$a})';
$string['userisblockingyou'] = '這個使用者阻擋了您傳送給他的簡訊';
$string['userisblockingyounoncontact'] = '這個使用者只接收通訊錄中的人所發的簡訊，而您不在其中。';
$string['userssearchresults'] = '搜尋結果：找到{$a}個使用者';
