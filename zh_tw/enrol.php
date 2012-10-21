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

$string['actenrolshhdr'] = '可選的選課插件';
$string['addinstance'] = '添加方法';
$string['ajaxnext25'] = '下25個.一';
$string['ajaxoneuserfound'] = '找到1個用戶';
$string['ajaxxusersfound'] = '找到{$a}個用戶';
$string['assignnotpermitted'] = '您無權或不能在此課程分配角色�一';
$string['bulkuseroperation'] = '批量用戶操作';
$string['configenrolplugins'] = '請選擇所有需要的插件並按適當的順序排列它們�一';
$string['custominstancename'] = '自定義實例名';
$string['defaultenrol'] = '向新課程添加實例';
$string['defaultenrol_desc'] = '缺省情況下可以把這些插件添加到所有新課程�一';
$string['deleteinstanceconfirm'] = '您確信要刪除“{$a->name}”選課插件實例？已有{$a->users}名用戶通過它選課�一';
$string['durationdays'] = '{$a}天';
$string['enrol'] = '選課';
$string['enrolcandidates'] = '未選課用戶';
$string['enrolcandidatesmatching'] = '匹配的未選課用戶';
$string['enrolcohort'] = '群組選課';
$string['enrolcohortusers'] = '加入用戶';
$string['enrollednewusers'] = '{$a}名新用戶選課成功';
$string['enrolledusers'] = '已選課用戶';
$string['enrolledusersmatching'] = '匹配的已選課用戶';
$string['enrolme'] = '將我加入此課程';
$string['enrolmentinstances'] = '選課方法';
$string['enrolmentnew'] = '{$a}中新註冊的';
$string['enrolmentnewuser'] = '{$a->user}已經註冊"{$a->course}"這個課程';
$string['enrolmentoptions'] = '選課選項';
$string['enrolments'] = '選課方式';
$string['enrolnotpermitted'] = '您無權或不允許向此課程添加用戶';
$string['enrolperiod'] = '修課期限';
$string['enroltimeend'] = '選課結束';
$string['enroltimestart'] = '選課開始';
$string['enrolusage'] = '實例/人數';
$string['enrolusers'] = '加入用戶';
$string['errajaxfailedenrol'] = '添加用戶失敗';
$string['errajaxsearch'] = '搜索用戶時出錯';
$string['erroreditenrolment'] = '嘗試修改用戶的選課信息時出錯了';
$string['errorenrolcohort'] = '在此課程中創建群組同步選課實例出錯�一';
$string['errorenrolcohortusers'] = '群組成員選修此課出錯�一';
$string['errorwithbulkoperation'] = '批量更改選課時出錯了�一';
$string['extremovedaction'] = '外部撤銷選課動作';
$string['extremovedaction_help'] = '請選擇，當外部選課源中的用戶選課消失時如何應對。請注意，在撤銷選課過程中，一些用戶數據和設置會被清理�一';
$string['extremovedkeep'] = '保留已選課用戶';
$string['extremovedsuspend'] = '禁用選課';
$string['extremovedsuspendnoroles'] = '禁用選課並刪除角色';
$string['extremovedunenrol'] = '撤銷選課';
$string['finishenrollingusers'] = '結束';
$string['invalidenrolinstance'] = '無效的選課實例';
$string['invalidrole'] = '無效角色';
$string['manageenrols'] = '管理選課插件';
$string['manageinstance'] = '管理';
$string['nochange'] = '無變化';
$string['noexistingparticipants'] = '沒有任何人加入';
$string['noguestaccess'] = '訪客不能訪問此課程，請嘗試登錄�一';
$string['none'] = '無';
$string['notenrollable'] = '這個課程目前不能登記選課。';
$string['notenrolledusers'] = '其它用戶';
$string['otheruserdesc'] = '下列用戶未選課，但有繼承的或分配的角色�一';
$string['participationactive'] = '活動的';
$string['participationstatus'] = '狀態';
$string['participationsuspended'] = '已暫停';
$string['periodend'] = '直到{$一';
$string['periodstart'] = '從{$一';
$string['periodstartend'] = '從{$a->start}到{$a->en一';
$string['recovergrades'] = '盡可能恢復用戶的舊成績';
$string['rolefromcategory'] = '{$a->role}（繼承自課程分類�一';
$string['rolefrommetacourse'] = '{$a->role}（繼承自父課程�一';
$string['rolefromsystem'] = '{$a->role}（網站級的分配�一';
$string['rolefromthiscourse'] = '{$a->role}（課程內的分配�一';
$string['startdatetoday'] = '今天';
$string['synced'] = '已同步';
$string['totalenrolledusers'] = '{$a}名已選課用戶';
$string['totalotherusers'] = '{$a}名其他用戶';
$string['unassignnotpermitted'] = '您沒有在此課程撤銷角色的權限';
$string['unenrol'] = '退出課程';
$string['unenrolconfirm'] = '您確定要從課程“{$a->course}”撤銷用戶“{$a->user}”的選課嗎�一';
$string['unenrolme'] = '將我從 {$a} 課程中退出';
$string['unenrolnotpermitted'] = '您無權或不能撤銷此用戶的選課�一';
$string['unenrolroleusers'] = '沒註冊的用戶';
$string['uninstallconfirm'] = '您將要完全刪除選課插件“{$a}”。這將完全刪除數據庫中所有與之有個的數據。您確定要繼續嗎�一';
$string['uninstalldeletefiles'] = '與選課插件“{$a->plugin}”相關的所有數據都已從數據庫刪除。要徹底完成刪除（阻止此插件自己重新安裝），您要馬上在服務器上刪除此目錄：{$a->director一';
$string['unknowajaxaction'] = '未知的動作請求';
$string['unlimitedduration'] = '無限';
$string['usersearch'] = '搜索';
$string['withselectedusers'] = '對所選用戶';
