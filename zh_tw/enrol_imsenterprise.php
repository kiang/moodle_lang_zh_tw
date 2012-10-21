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
 * Strings for component 'enrol_imsenterprise', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   enrol_imsenterprise
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = '當您儲存了設定，您也許想要';
$string['allowunenrol'] = '允許 IMS 資料來<strong>退選</strong>學生/教師';
$string['allowunenrol_desc'] = '如果允許此項，企業數據裡特別指定的選課會被刪除�一';
$string['basicsettings'] = '基本設定';
$string['coursesettings'] = '課程資料設定';
$string['createnewcategories'] = '如果在Moodle中沒有找到，就建立一個新的（隱藏的）課程種類';
$string['createnewcategories_desc'] = '如果<org><orgunit>出現在課程的導入數據中，並且課程為新建，那麼它的內容會被替換為指定的分類。此插件不會對已有課程進行重新分類。

如果沒有名字匹配的分類，那麼會建立一個隱藏分類�一';
$string['createnewcourses'] = '如果在Moodle中沒有找到，就建立一個新的（隱藏的）課程';
$string['createnewcourses_desc'] = '如果允許此項，IMS企業級注冊插件能建立在IMS數據中而不在Moodle數據庫中的所有課程。所有新建的課程初始都是隱藏的�一';
$string['createnewusers'] = '如果找不到就建立新的使用者';
$string['createnewusers_desc'] = 'IMS企業選課數據典型地描述一組用戶。如果啟用，會為任何在Moodle數據庫中找不到的用戶創建帳號。

首先通過"學號"查找用戶，然後再用“用戶名”。密碼不是通過IMS企業插件導入的。建議使用身份認證插件驗證用戶�一';
$string['cronfrequency'] = '處理頻率';
$string['deleteusers'] = 'IMS 資料指定時刪除使用者帳號';
$string['deleteusers_desc'] = '如果啟用，IMS企業選課數據可以刪除用戶帳號（當" recstatus" 的值設為3時，表示刪除這一帳號）。其實在Moodle中，用戶記錄並沒有真的從 Moodle數據庫刪除，而是用一個標記來表示已刪除�一';
$string['doitnow'] = '馬上進行一次IMS企業導入';
$string['filelockedmail'] = '您在IMS文件基礎上用的文本文件登陸({$a}) 不能被程序刪除。這通常意味著它的許可發生錯誤了。請確定許可使Moodle可以刪除文件，否則程序可能會重復';
$string['filelockedmailsubject'] = '重大錯誤：登陸文件';
$string['fixcasepersonalnames'] = '在標題上更改個人姓名';
$string['fixcaseusernames'] = '對低的情況更改個人姓名';
$string['ignore'] = '忽略';
$string['importimsfile'] = '導入IMS企業文件';
$string['imsrolesdescription'] = 'IMS計劃規范包括8個截然不同的角色類型。請您選擇在Moodle中如何分配這些角色，包括應該忽略那些角色�一';
$string['location'] = '檔案位置';
$string['logtolocation'] = '日志文件輸出到本地（空白表示沒有日志文件�一';
$string['mailadmins'] = '電子郵件通知管理員';
$string['mailusers'] = '電子郵件通知用戶';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS 企業選課消息';
$string['miscsettings'] = '雜項';
$string['pluginname'] = 'IMS企業文件';
$string['pluginname_desc'] = '此方法將會反復檢查並且處理您指定路徑的特殊格式的文本文件。該文件必須符合IMS企業接口規范，包含個人，組，成員等XML元素�一';
$string['processphoto'] = '添加用戶照片數據';
$string['processphotowarning'] = '警告：圖象程序好象將要為服務器添加一個重大的任務。如果有大量的學生等待被處理推薦您不要激活這個選項�一';
$string['restricttarget'] = '如果後面的對象是列入清單只有程序數據';
$string['restricttarget_desc'] = 'IMS企業數據文件可以供多個目標使用，例如不同的LMSes，不同的學校系統。通過<target> 裡的<properties>標簽對目標系統命名，可以在企業管理系統文件中指定數據，這些數據供一個或者更多的已命名的目標系統使用。

在很多情況下，您不需要擔心這些。您可以不更改默認配置，不論這個目標是否已經指定，MOODLE總是會處理文件，否則，您就在<target>中輸入准確的名字�一';
$string['roles'] = '角色';
$string['sourcedidfallback'] = '用"來源" 對一個人的用戶名如果"userid" 沒有找到域';
$string['sourcedidfallback_desc'] = '在IMS數據中，<sourcedid>域代表了源系統中用戶的永久ID碼。而<userid>域是一個單獨的域，它包含用戶登錄時使用的ID碼。雖然在許多情況下這兩個碼可能是相同的，但是它們並不是一直相同。

有時，一些學生信息系統不能輸出<userid>域。在這種情況下，您應啟用這一設定來允許將<sourcedid>用作Moodle用戶ID。而如果可以輸出<userid>域，則禁用該設定�一';
$string['truncatecoursecodes'] = '對這個長度截去課程代碼';
$string['truncatecoursecodes_desc'] = '在一些情境中，您可能想在處理程序前把課程代碼截斷到指定的長度，那麼請在這個對話框中輸入需要截斷的字符數，如果不想截斷，就不需要在對話框中輸入數字�一';
$string['usecapitafix'] = '如果用"Capita"選擇這個框（他們的XML格式有錯誤�一';
$string['usecapitafix_desc'] = '我們發現在Capita編輯的學生數據系統中，XML文件輸出有一些小問題。如果您使用此項功能，請激活這個選項；否則，不選擇�一';
$string['usersettings'] = '用戶的資料選項';
$string['zeroisnotruncation'] = '0 預示沒有切斷';
