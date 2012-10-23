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
 * Strings for component 'chat', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajax'] = '使用Ajax的版本';
$string['autoscroll'] = '自動捲動';
$string['beep'] = '呼叫';
$string['cantlogin'] = '無法登錄到聊天室！！';
$string['chat:chat'] = '參與聊天';
$string['chat:deletelog'] = '刪除聊天記錄';
$string['chat:exportparticipatedsession'] = '導出您參加過的聊天會話';
$string['chat:exportsession'] = '導出所有聊天會話';
$string['chatintro'] = '簡介文字';
$string['chatname'] = '聊天室名稱';
$string['chat:readlog'] = '讀取聊天記錄';
$string['chatreport'] = '聊天話題';
$string['chat:talk'] = '發言';
$string['chattime'] = '下次聊天時間';
$string['configmethod'] = '正常的聊天方法需要client端不斷地更新伺服器資訊,並不需要設定即可正常運作,但當使用者較多時它可能會對伺服器造成相當大的負載,使用伺服daemon 需要存取unix介面,但可以得到比較好的效能';
$string['confignormalupdatemode'] = '聊天室的更新一般是使用HTTP 1.1的<em>保持連線</em>特色。但它對伺服器來說負荷相當重。另一進階的方法是使用<em>串流</em>策略。使用<em>串流</em>模式會比較好一些，但也許您的伺服器不支援。';
$string['configoldping'] = '使用者多久不發言多久時間後(以秒計)，將認定為離線了？';
$string['configrefreshroom'] = '聊天室自動更新時間(秒),如果太短將耗費大量伺服器資源';
$string['configrefreshuserlist'] = '使用者列表自動更新時間(秒)';
$string['configserverhost'] = '聊天伺服器daemon 的電腦名稱';
$string['configserverip'] = '與上面伺服器名稱相符的ip位址';
$string['configservermax'] = '最大允許人數';
$string['configserverport'] = '伺服器daemon 的連接埠';
$string['currentchats'] = '使用者列表自動更新時間(秒)';
$string['currentusers'] = '當前使用者';
$string['deletesession'] = '刪除該會談';
$string['deletesessionsure'] = '確定刪除該會談嗎?';
$string['donotusechattime'] = '不顯示聊天時間';
$string['enterchat'] = '點選這裡進入聊天室';
$string['errornousers'] = '沒有該使用者';
$string['explaingeneralconfig'] = '這些設定<strong>總是</strong> 有效';
$string['explainmethoddaemon'] = '這些設定<strong>只有</strong>當您選擇聊天室模式為聊天伺服器daemon 才有效';
$string['explainmethodnormal'] = '這些設定<strong>只有</strong>當您選擇聊天室模式為普通模式才有效';
$string['generalconfig'] = '一般設定';
$string['idle'] = '閒置';
$string['inputarea'] = '輸入區';
$string['invalidid'] = '找不到聊天室！';
$string['list_all_sessions'] = '列出所有會話。';
$string['list_complete_sessions'] = '列出剛結束的會話。';
$string['listing_all_sessions'] = '列出所有會話。';
$string['messagebeepseveryone'] = '{$a} 呼叫所有人';
$string['messagebeepsyou'] = '{$a} 呼叫您';
$string['messageenter'] = '{$a} 加入該聊天';
$string['messageexit'] = '{$a} 退出該聊天';
$string['messages'] = '訊息';
$string['messageyoubeep'] = '您呼叫了{$a}';
$string['method'] = '聊天方式';
$string['methodajax'] = 'Ajax方式';
$string['methoddaemon'] = '聊天伺服器daemon';
$string['methodnormal'] = '普通模式';
$string['modulename'] = '聊天室';
$string['modulename_help'] = '在聊天室模塊中，參與者可以通過web進行實時、同步的討論。與異步的討論區相比，聊天室模式完全不同，對增進了解、深入話題很有幫助。';
$string['modulenameplural'] = '聊天室';
$string['neverdeletemessages'] = '從未刪除訊息';
$string['nextsession'] = '下一個討論主題';
$string['nochat'] = '無聊天記錄';
$string['no_complete_sessions_found'] = '未找到已結束的會話。';
$string['noguests'] = '該聊天室未對訪客開放';
$string['nomessages'] = '尚無訊息';
$string['nopermissiontoseethechatlog'] = '沒有查看聊天歷史的權限。';
$string['normalkeepalive'] = '保持連線';
$string['normalstream'] = '串流';
$string['noscheduledsession'] = '沒有已安排會議';
$string['notallowenter'] = '您無權進入聊天室。';
$string['notlogged'] = '您沒有登錄！';
$string['oldping'] = '逾時斷線';
$string['page-mod-chat-x'] = '任意聊天模塊頁面';
$string['pastchats'] = '過去的聊天內容';
$string['pluginadministration'] = '聊天室管理員';
$string['pluginname'] = '聊天室';
$string['refreshroom'] = '更新聊天室';
$string['refreshuserlist'] = '更新用戶列表';
$string['removemessages'] = '刪除所有訊息';
$string['repeatdaily'] = '每天的此刻';
$string['repeatnone'] = '無回覆';
$string['repeattimes'] = '回覆主題';
$string['repeatweekly'] = '每週的此刻';
$string['saidto'] = '對';
$string['savemessages'] = '保存過去的聊天內容';
$string['seesession'] = '查看聊天內容';
$string['send'] = '發送';
$string['sending'] = '正在發送';
$string['serverhost'] = '伺服器名稱';
$string['serverip'] = '伺服器IP';
$string['servermax'] = '最大用戶數';
$string['serverport'] = '伺服器連接埠';
$string['sessions'] = '聊天內容';
$string['sessionstart'] = '聊天會話開始時間：{$a}';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = '所有人都可查看過去的聊天內容';
$string['studentseereports_help'] = '如果選否，那麼只有具有mod/chat:readlog權限的用戶可以看到聊天歷史';
$string['talk'] = '交談';
$string['updatemethod'] = '更新方式';
$string['updaterate'] = '更新速率：';
$string['userlist'] = '用戶列表';
$string['usingchat'] = '使用聊天室';
$string['usingchat_help'] = '<p align="center"><b>聊天</b></p>
<p>聊天室模組提供了如下模組以讓聊天更加有趣。</p>
<dl>
<dt><b>表情臉型</b></dt>
<dd>所有您可以在Moodle中其他地方使用的表情臉型(情緒圖示)都可以用在聊天室中，它們都能夠被正常顯示出來。例如，:-) = <img alt src="pix/s/smiley.gif" />  </dd>
　　
<dt><b>鏈結</b></dt>
<dd>輸入的Internet位址會自動被轉換為鏈結。</dd>
　　
<dt><b>誇張表情</b></dt>
<dd>在行首添加“/me”或者“:”可以將這行變成誇張表情描述。例如，如果假設您叫Kim，並且您輸入了“:laughs!”或者“/me laughs!”，則所有人都會看到“Kim laughs!”</dd>
　　
<dt><b>喚醒</b></dt>
<dd>您可以通過點擊別人姓名旁的“beep”鏈結來喚醒他。要想一下子喚醒所有的人，可以輸入“beep all”。</dd>
　　
<dt><b>HTML</b></dt>
<dd>如果您知道如何是用HTML，您可以在您輸入的文字中加入HTML，這樣就可以插入圖片、播放聲音或者創建不同顏色和大小的文字。</dd>
　　
</dl>
　　
　　';
$string['viewreport'] = '看過去的聊天內容';
