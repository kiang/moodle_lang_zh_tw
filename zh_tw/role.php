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
 * Strings for component 'role', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = '新建一個角色';
$string['addingrolebycopying'] = '基於{$a}新建一個角色';
$string['addrole'] = '增加一個新角色';
$string['advancedoverride'] = '高級修改角色';
$string['allow'] = '允許';
$string['allowassign'] = '允許指派角色';
$string['allowed'] = '允許';
$string['allowoverride'] = '允許覆蓋角色';
$string['allowroletoassign'] = '允許屬於角色{$a->fromrole}的用戶分配{$a->targetrole}角色';
$string['allowroletooverride'] = '允許屬於角色{$a->fromrole}的用戶修改{$a->targetrole}角色';
$string['allowroletoswitch'] = '允許屬於角色{$a->fromrole}的用戶切換到角色{$a->targetrole}';
$string['allowswitch'] = '允許角色切換';
$string['allsiteusers'] = '網站全部用戶';
$string['archetype'] = '角色原型';
$string['archetypecoursecreator'] = '原型：課程創建者';
$string['archetypeeditingteacher'] = '原型：有編輯權教師';
$string['archetypefrontpage'] = '原型：首頁的已認證用戶';
$string['archetypeguest'] = '原型：訪客';
$string['archetype_help'] = '角色原型決定一個角色被重置到缺省時的權限。它還決定網站升級時為角色創建哪些新權限。';
$string['archetypemanager'] = '原型：管理員';
$string['archetypestudent'] = '原型：學生';
$string['archetypeteacher'] = '原型：無編輯權教師';
$string['archetypeuser'] = '原型：已認證用戶';
$string['assignanotherrole'] = '分配另一個角色';
$string['assignedroles'] = '已分配角色';
$string['assignerror'] = '分配角色{$a->role}給用戶{$a->user}時發生錯誤。';
$string['assignglobalroles'] = '指派全網站角色';
$string['assignmentcontext'] = '分配場景';
$string['assignmentoptions'] = '分配選項';
$string['assignrole'] = '分配角色';
$string['assignrolenameincontext'] = '在{$a->context}中分配“{$a->role}”角色';
$string['assignroles'] = '指派角色';
$string['assignroles_help'] = '通過在某個場景中分配角色給某個用戶，您可以給予用戶該角色擁有的權限，但只限在當前場景和所有它包含的低級場景中。例如，如果一個用戶在某課程中被分配為學生角色，那麼他在課程的所有活動和版塊中的角色都是學生。';
$string['assignrolesin'] = '指派在{$a}的角色';
$string['assignrolesrelativetothisuser'] = '分配針對此用戶的角色';
$string['backtoallroles'] = '回到所有角色列表';
$string['backup:anonymise'] = '備份時隱去用戶數據';
$string['backup:backupactivity'] = '備份活動';
$string['backup:backupcourse'] = '備份課程';
$string['backup:backupsection'] = '備份小節';
$string['backup:backuptargethub'] = '面向hub備份';
$string['backup:backuptargetimport'] = '面向導入備份';
$string['backup:configure'] = '配置備份選項';
$string['backup:downloadfile'] = '從備份區下載文件';
$string['backup:userinfo'] = '備份用戶數據';
$string['block:edit'] = '編輯版塊設置';
$string['block:view'] = '檢視區塊';
$string['blog:associatecourse'] = '關聯博客與課程';
$string['blog:associatemodule'] = '關聯博客和活動模塊';
$string['blog:create'] = '新增部落格內容';
$string['blog:manageentries'] = '編輯和管理內容';
$string['blog:manageexternal'] = '編輯和管理外部博客';
$string['blog:manageofficialtags'] = '管理公定的標籤';
$string['blog:managepersonaltags'] = '管理個人的標籤';
$string['blog:search'] = '搜索博客';
$string['blog:view'] = '瀏覽部落格內容';
$string['blog:viewdrafts'] = '查看博客草稿';
$string['calendar:manageentries'] = '管理任何日曆內容';
$string['calendar:managegroupentries'] = '管理群組日曆內容';
$string['calendar:manageownentries'] = '管理自己的日曆內容';
$string['capabilities'] = '能力';
$string['capability'] = '能力';
$string['category:create'] = '建立類別';
$string['category:delete'] = '刪除類別';
$string['category:manage'] = '管理類別';
$string['category:update'] = '更新類別';
$string['category:viewhiddencategories'] = '查看隱藏類別';
$string['category:visibility'] = '查看隱藏的類別';
$string['checkglobalpermissions'] = '檢查系統權限';
$string['checkpermissions'] = '檢查權限';
$string['checkpermissionsin'] = '檢查{$a}的權限';
$string['checksystempermissionsfor'] = '檢查{$a->fullname}的系統權限';
$string['checkuserspermissionshere'] = '檢查{$a->fullname}在此{$a->contextlevel}中擁有的權限';
$string['chooseroletoassign'] = '請選擇一個要分配的角色';
$string['cohort:assign'] = '添加/刪除群組成員';
$string['cohort:manage'] = '建立、刪除和移動群組';
$string['cohort:view'] = '查看全站群組';
$string['comment:delete'] = '刪除評論';
$string['comment:post'] = '發表評論';
$string['comment:view'] = '閱讀評論';
$string['community:add'] = '使用社區版塊搜索課程中心尋找課程';
$string['community:download'] = '從社區版塊下載課程';
$string['confirmaddadmin'] = '您真的要讓用戶<strong>{$a}</strong>成為新的網站管理員嗎？';
$string['confirmdeladmin'] = '您真的要取消用戶<strong>{$a}</strong>的網站管理員資格嗎？';
$string['confirmroleprevent'] = '您確定要不允許角色<strong>{$a->role}</strong>在“{$a->context}”中使用{$a->cap}權限嗎？';
$string['confirmroleunprohibit'] = '您確定要從禁止在場景{$a->context}中使用{$a->cap}權限的角色列表中刪除角色<strong>{$a->role}</strong>嗎？';
$string['confirmunassign'] = '您確定要從此用戶身上刪除此角色嗎？';
$string['confirmunassignno'] = '放棄';
$string['confirmunassigntitle'] = '確認角色改變';
$string['confirmunassignyes'] = '刪除';
$string['context'] = '場景';
$string['course:activityvisibility'] = '隱藏/顯示活動';
$string['course:bulkmessaging'] = '可發送訊息給多人';
$string['course:changecategory'] = '修改課程分類';
$string['course:changefullname'] = '修改課程全稱';
$string['course:changeidnumber'] = '修改課程編號';
$string['course:changeshortname'] = '修改課程簡稱';
$string['course:changesummary'] = '修改課程簡介';
$string['course:create'] = '建立課程';
$string['course:delete'] = '刪除課程';
$string['course:enrolconfig'] = '配置課程中的選課實例';
$string['course:enrolreview'] = '審查選課';
$string['course:manageactivities'] = '管理活動';
$string['course:managefiles'] = '管理檔案';
$string['course:managegrades'] = '管理成績';
$string['course:managegroups'] = '管理群組';
$string['course:managescales'] = '管理量尺';
$string['course:markcomplete'] = '課程完成時標記用戶為完成';
$string['course:publish'] = '將課程發布到hub';
$string['course:request'] = '申請創建新課程';
$string['course:reset'] = '課程歸零';
$string['course:sectionvisibility'] = '控制單元可見性';
$string['course:setcurrentsection'] = '設定當前單元';
$string['course:update'] = '更新課程設定';
$string['course:useremail'] = '使email地址有效/無效';
$string['course:view'] = '檢視課程';
$string['course:viewcoursegrades'] = '檢視課程成績';
$string['course:viewhiddenactivities'] = '檢視隱藏的活動';
$string['course:viewhiddencourses'] = '檢視隱藏的課程';
$string['course:viewhiddensections'] = '瀏覽隱藏的單元';
$string['course:viewhiddenuserfields'] = '檢視隱藏的使用者資料欄位';
$string['course:viewparticipants'] = '檢視課程參與者';
$string['course:viewscales'] = '檢視量尺';
$string['course:visibility'] = '隱藏/顯示課程';
$string['createrolebycopying'] = '復制{$a}為一個新角色';
$string['createthisrole'] = '創建這個角色';
$string['currentcontext'] = '現在的環境';
$string['currentrole'] = '現在的角色';
$string['defaultrole'] = '預設的角色';
$string['defaultx'] = '缺省：{$a}';
$string['defineroles'] = '定義角色';
$string['deletecourseoverrides'] = '刪除課程中所有置換的角色';
$string['deletelocalroles'] = '刪除所有本地角色的指派';
$string['deleterolesure'] = '您確定要刪除角色“{$a->name} ({$a->shortname})”嗎？</p><p>目前此角色已經指派給{$a->count}個使用者了。';
$string['deletexrole'] = '刪除{$a}角色';
$string['duplicaterole'] = '複製角色';
$string['duplicaterolesure'] = '您確定要複製角色“{$a->name} ({$a->shortname})”嗎？</p>';
$string['editingrolex'] = '正在編輯角色“{$a}”';
$string['editrole'] = '編輯角色';
$string['editxrole'] = '編輯{$a}角色';
$string['errorbadrolename'] = '不正確的角色名稱';
$string['errorbadroleshortname'] = '不正確的角色名稱';
$string['errorexistsrolename'] = '角色名稱已經存在';
$string['errorexistsroleshortname'] = '角色名稱已經存在';
$string['existingadmins'] = '當前網站管理員';
$string['existingusers'] = '已經有{$a}位使用者';
$string['explanation'] = '解釋';
$string['extusers'] = '已有用戶';
$string['extusersmatching'] = '符合“{$a}”的已有用戶';
$string['filter:manage'] = '管理本地過濾器設置';
$string['frontpageuser'] = '首頁已認證用戶';
$string['frontpageuserdescription'] = '首頁課程中所有已經登錄的用戶。';
$string['globalrole'] = '系統角色';
$string['globalroleswarning'] = '警告！您在此頁指派的任何角色都將成為該使用者的全網站角色，在整個網站都有效，包括首頁和所有課程。';
$string['gotoassignroles'] = '跳轉到為此{$a->contextlevel}分配角色';
$string['gotoassignsystemroles'] = '跳轉到分配系統角色';
$string['grade:edit'] = '編修成績簿';
$string['grade:export'] = '匯出成績簿';
$string['grade:hide'] = '隱藏/顯示 成績或項目';
$string['grade:import'] = '匯入成績簿';
$string['grade:lock'] = '鎖定成績和項目';
$string['grade:manage'] = '管理成績項目';
$string['grade:manageletters'] = '管理字母等第';
$string['grade:manageoutcomes'] = '管理成績簿的核心能力';
$string['grade:override'] = '置換成績';
$string['grade:unlock'] = '解除成績或項目的鎖定';
$string['grade:view'] = '檢視自己的成績簿';
$string['grade:viewall'] = '檢視其他人的成績';
$string['grade:viewhidden'] = '檢視當事人隱藏的成績';
$string['hidden'] = '隱藏';
$string['highlightedcellsshowdefault'] = '下表中被選擇的權限是上面所選角色原型的缺省權限。';
$string['highlightedcellsshowinherit'] = '下表中高亮顯示的權限是繼承來的權限。除了確實要修改的權限以外，都應該設為繼承。';
$string['inactiveformorethan'] = '沒有活動超過 {$a->timeperiod}';
$string['ingroup'] = '在這"{$a->group}"群組';
$string['inherit'] = '繼承';
$string['legacy:admin'] = '原角色：網站管理員';
$string['legacy:coursecreator'] = '原角色：課程管理員';
$string['legacy:editingteacher'] = '原角色：教師（有編輯權）';
$string['legacy:guest'] = '原角色：訪客';
$string['legacy:student'] = '原角色：學生';
$string['legacy:teacher'] = '原角色：教師（無編輯權）';
$string['legacytype'] = '原角色類型';
$string['legacy:user'] = '原角色：認證的使用者';
$string['listallroles'] = '列出全部角色';
$string['localroles'] = '本地委派的角色';
$string['manageadmins'] = '管理網站管理員';
$string['manager'] = '管理員';
$string['managerdescription'] = '管理員可以訪問並修改課程，但他們通常不參與課程。';
$string['manageroles'] = '管理角色';
$string['maybeassignedin'] = '可分配此角色的場景';
$string['morethan'] = '超過{$a} 位';
$string['multipleroles'] = '多重角色';
$string['my:configsyspages'] = '配置我的Moodle頁面的系統模板';
$string['my:manageblocks'] = '管理 My Moodle 頁面區塊';
$string['neededroles'] = '有權限的角色';
$string['nocapabilitiesincontext'] = '在此環境中沒有有效的能力';
$string['noneinthisx'] = '此{$a}中沒有用戶';
$string['noneinthisxmatching'] = '在{$a->contexttype}中沒有用戶匹配“{$a->search}”';
$string['noroleassignments'] = '此用戶在本站任何地方都沒有被分配任何角色。';
$string['noroles'] = '沒有角色';
$string['notabletoassignroleshere'] = '您不能在此分配任何角色';
$string['notabletooverrideroleshere'] = '您不能在這裡覆蓋任何角色的權限';
$string['notes:manage'] = '管理筆記';
$string['notes:view'] = '檢視筆記';
$string['notset'] = '未設定';
$string['overrideanotherrole'] = '修改另一個角色';
$string['overridecontext'] = '修改場景';
$string['overridepermissions'] = '置換權限';
$string['overridepermissionsforrole'] = '修改角色“{$a->role}”在{$a->context}中的權限';
$string['overridepermissions_help'] = '通過修改權限可以在指定的場景中允許或阻止做某件事情。';
$string['overridepermissionsin'] = '在{$a}中置換權限';
$string['overrideroles'] = '置換角色';
$string['overriderolesin'] = '在{$a}中置換角色';
$string['overrides'] = '置換';
$string['overridesbycontext'] = '腐敗（按場景）';
$string['permission'] = '權限';
$string['permission_help'] = '權限是關於能力的設置。有四個選項：

* 無設置
* 允許 - 有使用此能力的權限
* 阻止 - 無使用此能力的權限，即使在更高級的環境中被允許
* 禁止 - 權限被完全禁止使用，並且在任何低級別（更特定）的環境中都不能覆蓋這個設置';
$string['permissions'] = '權限';
$string['permissionsforuser'] = '用戶{$a}的權限';
$string['permissionsincontext'] = '{$a}中的權限';
$string['portfolio:export'] = '導出到portfolio';
$string['potentialusers'] = '{$a}位潛在的使用者';
$string['potusers'] = '可選用戶';
$string['potusersmatching'] = '匹配“{$a}”的潛在用戶';
$string['prevent'] = '防止';
$string['prohibit'] = '禁止';
$string['prohibitedroles'] = '禁止';
$string['question:add'] = '增加新試題';
$string['question:config'] = '設置試題類型';
$string['question:editall'] = '編輯所有試題';
$string['question:editmine'] = '編輯自己的試題';
$string['question:flag'] = '試答時標記題目';
$string['question:managecategory'] = '管理試題類別';
$string['question:moveall'] = '搬移所有試題';
$string['question:movemine'] = '搬移自己的試題';
$string['question:useall'] = '使用所有試題';
$string['question:usemine'] = '使用自己的試題';
$string['question:viewall'] = '查看所有試題';
$string['question:viewmine'] = '查看自己的試題';
$string['rating:rate'] = '添加評分';
$string['rating:view'] = '查看收到的總評分';
$string['rating:viewall'] = '查看每個評分的原始數據';
$string['rating:viewany'] = '查看每個人收到的總評分';
$string['resetrole'] = '重新設定回預設狀態';
$string['resetrolenolegacy'] = '清除權限';
$string['resetrolesure'] = '您確定您要重新設定 "{$a->name} ({$a->shortname})"為預設值嗎？<p></p>這個預設值來至所選擇的({$a->legacytype})的原有能力。';
$string['resetrolesurenolegacy'] = '您確定您要清除這個 "{$a->name }({$a->shortname})" 角色的權限定義嗎？';
$string['restore:configure'] = '配置恢復選項';
$string['restore:createuser'] = '恢復時創建用戶';
$string['restore:restoreactivity'] = '恢復活動';
$string['restore:restorecourse'] = '恢復課程';
$string['restore:restoresection'] = '恢復小節';
$string['restore:restoretargethub'] = '從面向中心服務器的文件恢復';
$string['restore:restoretargetimport'] = '從面向導入的文件恢復';
$string['restore:rolldates'] = '允許在恢復時回滾活動配置日期';
$string['restore:uploadfile'] = '上傳文件到備份區';
$string['restore:userinfo'] = '恢復用戶數據';
$string['restore:viewautomatedfilearea'] = '從自動備份中恢復課程';
$string['risks'] = '風險';
$string['roleallowheader'] = '允許角色：';
$string['roleallowinfo'] = '選擇一個角色，將其加入到允許在場景“{$a->context}”使用“{$a->cap}”權限的角色列表中：';
$string['role:assign'] = '分配角色給用戶';
$string['roleassignments'] = '分配角色';
$string['roledefinitions'] = '角色定義';
$string['rolefullname'] = '名稱';
$string['role:manage'] = '建立和管理角色';
$string['role:override'] = '置換其他角色的權限';
$string['roleprohibitheader'] = '禁止角色';
$string['roleprohibitinfo'] = '選擇一個角色，將其加入到禁止在場景“{$a->context}”使用“{$a->cap}”權限的角色列表中：';
$string['role:review'] = '檢查其他人的權限';
$string['roles'] = '角色';
$string['role:safeoverride'] = '修改其它用戶的安全的權限';
$string['roleselect'] = '選擇角色';
$string['roles_help'] = '角色是系統權限的集合，通過角色可以將特定情境下的一組權限指派給一組特定的用戶。';
$string['roleshortname'] = '課程簡稱';
$string['role:switchroles'] = '切換到其他角色';
$string['roletoassign'] = '要指派的角色：';
$string['roletooverride'] = '被置換的角色';
$string['safeoverridenotice'] = '警告：因您只能修改安全的權限，高危權限已被鎖定。';
$string['selectanotheruser'] = '選擇另一個用戶';
$string['selectauser'] = '選擇一個用戶';
$string['selectrole'] = '選擇一個角色';
$string['showallroles'] = '顯示所有角色';
$string['showthisuserspermissions'] = '顯示該用戶的權限';
$string['site:accessallgroups'] = '讀取所有群組';
$string['siteadministrators'] = '網站管理員';
$string['site:approvecourse'] = '審核開課申請';
$string['site:backup'] = '備份課程';
$string['site:config'] = '改變網站環境配置';
$string['site:doanything'] = '可以做任何事';
$string['site:doclinks'] = '顯示連結到網站外的文件';
$string['site:import'] = '將其他課程匯入課程中';
$string['site:manageblocks'] = '管理網站層級的區塊';
$string['site:mnetloginfromremote'] = '從遠端的Moodle站登入';
$string['site:mnetlogintoremote'] = '漫遊到遠端的Moodle站';
$string['site:readallmessages'] = '讀取網站上的全部訊息';
$string['site:restore'] = '還原課程';
$string['site:sendmessage'] = '傳送訊息給任何人';
$string['site:trustcontent'] = '信任發送的內容';
$string['site:uploadusers'] = '從檔案上傳新用戶';
$string['site:viewfullnames'] = '總是可以看到使用者的全名';
$string['site:viewparticipants'] = '瀏覽課程參與名單';
$string['site:viewreports'] = '檢視報表';
$string['tag:create'] = '建立新標籤';
$string['tag:edit'] = '編輯存在的標籤';
$string['tag:editblocks'] = '在標籤頁中編輯區塊';
$string['tag:manage'] = '管理所有標籤';
$string['thisusersroles'] = '此用戶分配的角色';
$string['unassignarole'] = '撤銷{$a}角色';
$string['unassignconfirm'] = '您確定要刪除用戶“{$a->user}”的“{$a->role}”角色嗎？';
$string['unassignerror'] = '取消用戶{$a->user}的{$a->role}角色時出錯。';
$string['user:changeownpassword'] = '修改自己的密碼';
$string['user:create'] = '建立使用者';
$string['user:delete'] = '刪除使用者';
$string['user:editmessageprofile'] = '修改用戶消息傳遞方式';
$string['user:editownmessageprofile'] = '編輯自己的用戶消息檔案';
$string['user:editownprofile'] = '編輯個人資料';
$string['user:editprofile'] = '編輯使用者資料';
$string['user:loginas'] = '變身登入系統';
$string['user:manageblocks'] = '管理其他用戶個人資料頁的版塊';
$string['user:manageownblocks'] = '管理自己的公開個人資料頁的版塊';
$string['user:manageownfiles'] = '在私人文件區管理文件';
$string['user:managesyspages'] = '配置公開個人資料頁的缺省布局';
$string['user:readuserblogs'] = '檢視全部使用者的部落格';
$string['user:readuserposts'] = '檢視全部使用者的張貼';
$string['usersfrom'] = '來自{$a}的用戶';
$string['usersfrommatching'] = '來自{$a->contextname}與“{$a->search}”匹配的用戶';
$string['usersinthisx'] = '此{$a}中的用戶';
$string['usersinthisxmatching'] = '在{$a->contexttype}中匹配“{$a->search}”的用戶';
$string['userswithrole'] = '所有用戶加以一個角色';
$string['userswiththisrole'] = '屬於此角色的用戶';
$string['user:update'] = '更新使用者資料';
$string['user:viewalldetails'] = '查看用戶詳細信息';
$string['user:viewdetails'] = '檢視使用者資料';
$string['user:viewhiddendetails'] = '檢視使用者隱藏的資料';
$string['user:viewuseractivitiesreport'] = '檢視使用者活動報告';
$string['user:viewusergrades'] = '檢視使用者成績';
$string['useshowadvancedtochange'] = '用“顯示高級選項”修改';
$string['viewingdefinitionofrolex'] = '查看角色“{$a}”的定義';
$string['viewrole'] = '檢視角色詳細資訊';
$string['webservice:createmobiletoken'] = '為移動設備創建網絡服務令牌';
$string['webservice:createtoken'] = '創建一個網絡服務密鑰';
$string['whydoesuserhavecap'] = '為什麼{$a->fullname}在場景{$a->context}中有{$a->capability}權限？';
$string['whydoesusernothavecap'] = '為什麼{$a->fullname}在場景{$a->context}中沒有{$a->capability}權限？';
$string['xroleassignments'] = '給{$a}分配的角色';
$string['xuserswiththerole'] = '具有"{$a->role}"角色權限的人數：{$a->number}';
