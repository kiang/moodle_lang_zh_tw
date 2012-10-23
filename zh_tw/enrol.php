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
 * Strings for component 'enrol', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = '可選的選課外掛';
$string['addinstance'] = '新增方法';
$string['ajaxnext25'] = '下25個...';
$string['ajaxoneuserfound'] = '找到1個使用者';
$string['ajaxxusersfound'] = '找到{$a}個使用者';
$string['assignnotpermitted'] = '您無權或不能在此課程分配角色。';
$string['bulkuseroperation'] = '批量使用者操作';
$string['configenrolplugins'] = '請選擇所有需要的外掛並按適當的順序排列它們。';
$string['custominstancename'] = '自訂實例名';
$string['defaultenrol'] = '向新課程新增實例';
$string['defaultenrol_desc'] = '預設情況下可以把這些外掛新增到所有新課程。';
$string['deleteinstanceconfirm'] = '您確信要刪除「{$a->name}」選課外掛實例？已有{$a->users}名使用者通過它選課。';
$string['durationdays'] = '{$a}天';
$string['enrol'] = '選課';
$string['enrolcandidates'] = '未選課使用者';
$string['enrolcandidatesmatching'] = '辨識的未選課使用者';
$string['enrolcohort'] = '群組選課';
$string['enrolcohortusers'] = '加入使用者';
$string['enrollednewusers'] = '{$a}名新使用者選課成功';
$string['enrolledusers'] = '已選課使用者';
$string['enrolledusersmatching'] = '辨識的已選課使用者';
$string['enrolme'] = '將我加入此課程';
$string['enrolmentinstances'] = '選課方法';
$string['enrolmentnew'] = '{$a}中新註冊的';
$string['enrolmentnewuser'] = '{$a->user}已經註冊"{$a->course}"這個課程';
$string['enrolmentoptions'] = '選課選項';
$string['enrolments'] = '選課方式';
$string['enrolnotpermitted'] = '您無權或不允許向此課程新增使用者';
$string['enrolperiod'] = '修課期限';
$string['enroltimeend'] = '選課結束';
$string['enroltimestart'] = '選課開始';
$string['enrolusage'] = '實例/人數';
$string['enrolusers'] = '加入使用者';
$string['errajaxfailedenrol'] = '新增使用者失敗';
$string['errajaxsearch'] = '搜索使用者時出錯';
$string['erroreditenrolment'] = '嘗試修改使用者的選課資訊時出錯了';
$string['errorenrolcohort'] = '在此課程中建立群組同步選課實例出錯。';
$string['errorenrolcohortusers'] = '群組成員選修此課出錯。';
$string['errorwithbulkoperation'] = '批量更改選課時出錯了。';
$string['extremovedaction'] = '外部撤銷選課動作';
$string['extremovedaction_help'] = '請選擇，當外部選課源中的使用者選課消失時如何應對。請注意，在撤銷選課過程中，一些使用者數據和設置會被清理。';
$string['extremovedkeep'] = '保留已選課使用者';
$string['extremovedsuspend'] = '停用選課';
$string['extremovedsuspendnoroles'] = '停用選課並刪除角色';
$string['extremovedunenrol'] = '撤銷選課';
$string['finishenrollingusers'] = '結束';
$string['invalidenrolinstance'] = '無效的選課實例';
$string['invalidrole'] = '無效角色';
$string['manageenrols'] = '管理選課外掛';
$string['manageinstance'] = '管理';
$string['nochange'] = '無變化';
$string['noexistingparticipants'] = '沒有任何人加入';
$string['noguestaccess'] = '訪客不能訪問此課程，請嘗試登錄。';
$string['none'] = '無';
$string['notenrollable'] = '這個課程目前不能登記選課。';
$string['notenrolledusers'] = '其它使用者';
$string['otheruserdesc'] = '下列使用者未選課，但有繼承的或分配的角色。';
$string['participationactive'] = '活動的';
$string['participationstatus'] = '狀態';
$string['participationsuspended'] = '已暫停';
$string['periodend'] = '直到{$a}';
$string['periodstart'] = '從{$a}';
$string['periodstartend'] = '從{$a->start}到{$a->end}';
$string['recovergrades'] = '儘可能恢復使用者的舊成績';
$string['rolefromcategory'] = '{$a->role}（繼承自課程分類）';
$string['rolefrommetacourse'] = '{$a->role}（繼承自父課程）';
$string['rolefromsystem'] = '{$a->role}（網站級的分配）';
$string['rolefromthiscourse'] = '{$a->role}（課程內的分配）';
$string['startdatetoday'] = '今天';
$string['synced'] = '已同步';
$string['totalenrolledusers'] = '{$a}名已選課使用者';
$string['totalotherusers'] = '{$a}名其他使用者';
$string['unassignnotpermitted'] = '您沒有在此課程撤銷角色的權限';
$string['unenrol'] = '退出課程';
$string['unenrolconfirm'] = '您確定要從課程「{$a->course}」撤銷使用者「{$a->user}」的選課嗎？';
$string['unenrolme'] = '將我從 {$a} 課程中退出';
$string['unenrolnotpermitted'] = '您無權或不能撤銷此使用者的選課。';
$string['unenrolroleusers'] = '沒註冊的用戶';
$string['uninstallconfirm'] = '您將要完全刪除選課外掛「{$a}」。這將完全刪除資料庫中所有與之有個的數據。您確定要繼續嗎？';
$string['uninstalldeletefiles'] = '與選課外掛「{$a->plugin}」相關的所有數據都已從資料庫刪除。要徹底完成刪除（阻止此外掛自己重新安裝），您要馬上在伺服器上刪除此目錄：{$a->directory}';
$string['unknowajaxaction'] = '未知的動作請求';
$string['unlimitedduration'] = '無限';
$string['usersearch'] = '搜索';
$string['withselectedusers'] = '對所選使用者';
