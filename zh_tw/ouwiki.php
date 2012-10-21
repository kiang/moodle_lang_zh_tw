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
 * Strings for component 'ouwiki', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   ouwiki
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = '添加';
$string['addannotation'] = '添加注釋';
$string['addedbegins'] = '[後面是添加的文本一';
$string['addedends'] = '[添加的文本結束一';
$string['addnewsection'] = '為此頁面添加新的小節';
$string['advice_edit'] = '<p>編輯下面的頁面。</p>
<ul>
<li>通過在雙重方括號中輸入頁面的名稱來創建一個指向另一個頁面的鏈接：[[頁面名稱]]。一旦您保存修改，鏈接就能工作。</li>
<li>要創建一個新頁面，首先要像這樣創建一個指向它鏈接。 {$a}</li>
</u一';
$string['advice_history'] = '<p>下表顯示所有對<a href="{$a}">當前頁面</a> 作出的修改。 </p><p>您可以查看所有舊版本，或者查看一個特定的版本中的修改。如果你想比較任何兩個版本，選擇相應的復選框，並單擊“比較選擇項”。 </一';
$string['advice_missingpage'] = '鏈接到此仍未被創建的頁面�一';
$string['advice_missingpages'] = '鏈接到這些仍未被創建的頁面�一';
$string['advice_viewdeleted'] = '您正在查看已經刪除的版本的頁面�一';
$string['advice_viewold'] = '您正在查看的舊版本的頁面�一';
$string['advice_wikirecentchanges_changes'] = '<p>下表列出了對此維基裡任何頁面的所有修改，以最近的修改開始。每個頁面的最新版本突出顯示。</p>
<p>使用這些鏈接來查看一個頁面在特定的修改後的樣子或查看當時的修改。</一';
$string['advice_wikirecentchanges_changes_nohighlight'] = 'p>下表列出了對此維基裡任何頁面的所有修改，以最近的修改開始。</p>
<p>使用這些鏈接來查看一個頁面在特定的修改後的樣子或查看當時的修改。</一';
$string['advice_wikirecentchanges_pages'] = '<p>這個表顯示了維基的每個頁面的添加時間，以最近創建的頁面開始。</一';
$string['annotate'] = '注解';
$string['annotatingpage'] = '正在注解網頁';
$string['annotationmarker'] = '注解標記';
$string['annotations'] = '注解';
$string['annotationsystem'] = '注解系統';
$string['attachments'] = '附件';
$string['cannotlockpage'] = '該頁面無法被鎖定，您的更改尚未保存�一';
$string['changebutton'] = '更改';
$string['changedby'] = '修改者';
$string['changes'] = '更改';
$string['changesnav'] = '更改';
$string['compare'] = '比較';
$string['compareselected'] = '比較選中項';
$string['completionedits'] = '用戶必須進行編輯�一';
$string['completioneditsgroup'] = '需要編輯';
$string['completioneditshelp'] = '需要編輯才能完成';
$string['completionpages'] = '用戶必須創建新頁面�一';
$string['completionpagesgroup'] = '需要新頁面';
$string['completionpageshelp'] = '需要新頁面才能完成';
$string['contributions'] = '<strong>{$a->pages}</strong>  新頁面 {$a->pagesplural}，<strong>{$a->changes}</strong> 其他修改 {$a->changesplural}�一';
$string['contributionsbyuser'] = '用戶的貢獻';
$string['contributionsgrouplabel'] = '小組';
$string['countdowntext'] = '本維基只允許編輯 {$a} 分鍾。在剩余時間（向右）到零以前作出您的修改並點擊保存或取消�一';
$string['countdownurgent'] = '請現在完成或取消您的編輯。如果您在時間用完前不保存，您的修改將會被自動保存�一';
$string['create'] = '創建';
$string['createdbyon'] = '由 {$a->name} 創建於 {$a->dat一';
$string['createlinkedwiki'] = '創建一個新頁面';
$string['createnewpage'] = '創建新頁面';
$string['createpage'] = '創建頁面';
$string['csvdownload'] = '以電子表格格式下載（UTF-8 .csv�一';
$string['current'] = '當前的';
$string['currentversion'] = '當前版本';
$string['currentversionof'] = '當前版本的';
$string['deletedbegins'] = '[刪除的文本一';
$string['deletedends'] = '[刪除的文本結束一';
$string['deleteorphanedannotations'] = '刪除丟失的注解';
$string['deleteversionerror'] = '刪除網頁版本時出現錯誤';
$string['deleteversionerrorversion'] = '不能刪除不存在的網頁版本';
$string['diff_nochanges'] = '本次編輯沒有對實際文本進行修改，因此下面沒有突出顯示出差異。可能會有外觀上的變化�一';
$string['diff_someannotations'] = '本次編輯沒有對實際文本進行修改，因此下面沒有突出顯示出差異，但注解已經被修改。可能也會有外觀上的變化�一';
$string['displayversion'] = 'OU 維基版本: <strong>{$a}</stron一';
$string['duplicatepagetitle'] = '新頁面的標題必須不能和已經存在的頁面的標題相同�一';
$string['editbegin_help'] = '<p>如果您啟用此選項，維基進入只讀模式，直到給定的日期。在只讀模式下，用戶可以瀏覽網頁，在它們之間導航，查看瀏覽歷史，並參與討論，但他們不能編輯頁面。 </一';
$string['editedby'] = '由 {$a} 編輯';
$string['editend_help'] = '如果您啟用此選項，此維基從給定的日期起進入只讀模式�一';
$string['editingpage'] = '正在編輯網頁';
$string['editingsection'] = '正在編輯小節：{$一';
$string['editpage'] = '編輯網頁';
$string['editsection'] = '編輯小節';
$string['emptypagetitle'] = '新頁面的標題不能為空�一';
$string['entirewiki'] = '整個維基';
$string['excelcsvdownload'] = 'Excel 兼容格式的下載（.csv�一';
$string['externaldashboardadd'] = '將維基添加到面板';
$string['externaldashboardremove'] = '將維基從面板移除';
$string['feedalt'] = '訂閱到 Atom 源';
$string['feedchange'] = '由 {$a->name} 修改  (<a href=\'{$a->url}\'>查看修改</a一';
$string['feeddescriptionchanges'] = '列出對本維基進行的所有修改。如果您想每當維基有更改時即時得到更新，請訂閱這個源�一';
$string['feeddescriptionhistory'] = '列出對此單個維基頁面的所有修改。如果您想每當有人編輯此頁面時即時得到更新，請訂閱這個源�一';
$string['feeddescriptionpages'] = '列出此維基的所有新頁面。如果您想每當有人創建新頁面時即時得到更新，請訂閱這個源�一';
$string['feeditemdescriptiondate'] = '{$a->main} 於 {$a->date}�一';
$string['feeditemdescriptionnodate'] = '{$a->main}�一';
$string['feednewpage'] = '由 {$a->name} 創建';
$string['feedsubscribe'] = '您可以訂閱這些信息到源：<a href=\'{$a->atom}\'>Atom</a> 或者 <a href=\'{$a->rss}\'>RSS</a一';
$string['feedtitle'] = '{$a->course} 維基： {$a->name} - {$a->subtitl一';
$string['format_html'] = '在線查看';
$string['format_rtf'] = 'RTF 格式的下載';
$string['format_template'] = '維基模板文件下載';
$string['frompage'] = '來自 {$一';
$string['frompages'] = '來自 {$a}…�一';
$string['lastchange'] = '最後更改： {$a->date} / {$a->userlin一';
$string['linkedfrom'] = '鏈接到此的頁面';
$string['linkedfromsingle'] = '鏈接到此的頁面';
$string['lockcancelled'] = '您的編輯鎖已經被覆蓋，別人正在編輯當前頁面。如果您想保留您的更改，請在點擊取消前選擇並復制他們；然後再次嘗試編輯�一';
$string['lockediting'] = '鎖定 Wiki - 不允許編輯';
$string['lockpage'] = '鎖定頁面';
$string['missingpages'] = '丟失頁面';
$string['modulename'] = 'OU 維基';
$string['modulenameplural'] = 'OU 維基';
$string['mustspecify2'] = '你必須指定兩個版本來進行比較�一';
$string['newerversion'] = '更新的版本';
$string['newpage'] = '第一個版本';
$string['next'] = '更舊的更改';
$string['nextversion'] = '下一個：{$一';
$string['noattachments'] = '沒有附件';
$string['nochanges'] = '沒有作出任何貢獻的用戶';
$string['nojsbrowser'] = '我們向你道歉，但您正使用一個我們不完全支持的瀏覽器�一';
$string['nojsdisabled'] = '您已經在瀏覽器設置裡禁用了 JavaScript�一';
$string['nojswarning'] = '結果是，我們只能為您保持這個頁面 {$a->minutes} 分鍾。請保證您在 {$a->deadline} （現在是 {$a->now}）前保存了您的更改。否則，別人可能會編輯這個頁面，導致您的更改丟失';
$string['nousersingroup'] = '選擇的小組沒有用戶�一';
$string['numedits'] = '{$a} 次編輯';
$string['olderversion'] = '更舊的版本';
$string['oldversion'] = '舊的版本';
$string['orphanedannotations'] = '丟失的注解';
$string['ouwiki:annotate'] = '允許注解';
$string['ouwiki:edit'] = '編輯 wiki 頁面';
$string['ouwiki:lock'] = '允許鎖定和解鎖頁面';
$string['ouwiki:overridelock'] = '覆蓋鎖定的頁面';
$string['ouwiki:view'] = '查看 wi一';
$string['overviewnumentrysince'] = '自上次登錄後的新 wiki 條目�一';
$string['overviewnumentrysince1'] = '自上次登錄後的新 wiki 條目�一';
$string['page'] = '頁面';
$string['pagedeletedinfo'] = '一些已經刪除的版本顯示在了下表裡。這些只對有版本刪除權限的用戶可見。普通用戶完全看不到它們�一';
$string['pagedoesnotexist'] = 'wiki 裡還沒有這個頁面�一';
$string['pagelockeddetails'] = '{$a->name} 從 {$a->lockedat} 開始編輯這個頁面，在 {$a->seenat} 仍在編輯。在他們完成前您不能編輯它�一';
$string['pagelockeddetailsnojs'] = '{$a->name} 從 {$a->lockedat} 開始編輯這個頁面。他們還有 {$a->nojs} 要編輯。在他們完成前您不能編輯它�一';
$string['pagelockedoverride'] = '您有取消他們編輯和解鎖此頁面的特殊權限。
如果您這樣做，他們輸入的任何東西都會丟失！點擊覆蓋按鈕前請仔細想想�一';
$string['pagelockedtimeout'] = '他們的編輯時隙結束於 {$a}�一';
$string['pagelockedtitle'] = '此頁面正在被其他人編輯�一';
$string['pagenameisstartpage'] = '頁面的名稱和起始頁相同。請使用不同的頁面名稱�一';
$string['pagenametoolong'] = '頁面名稱太長。使用較短的頁面名稱�一';
$string['pluginadministration'] = 'OU 維基管理';
$string['pluginname'] = 'OU 維基';
$string['preview'] = '預覽';
$string['previewwarning'] = '下面是您作出但還沒保存的修改的預覽。 <strong>如果您不保存修改，你的工作將會丟失。</strong>使用頁面末尾的按鈕來保存�一';
$string['previous'] = '新的修改';
$string['recentchanges'] = '最後的編輯';
$string['returntohistory'] = '（ <a href=\'{$a}\'>返回到歷史視圖</a> 。�一';
$string['returntopage'] = '返回維基頁面';
$string['returntoview'] = '查看當前頁面';
$string['revert'] = '還原';
$string['reverterrorcapability'] = '您沒有還原到較早的版本的權限';
$string['reverterrorversion'] = '您不能還原一個不存在的網頁版本';
$string['revertversion'] = '還原';
$string['revertversionconfirm'] = '<p>本頁面會回到截止 {$a} 時的狀態，並丟棄自那以後的所有修改。然而，丟棄的修改仍可以在頁面歷史中看到。</p><p>您確定您想要還原到頁面的這個版本嗎？</一';
$string['savefailtitle'] = '頁面無法保存';
$string['savetemplate'] = '保存 wiki 為模板';
$string['search'] = '搜索此 wi一';
$string['seedetails'] = '完整的歷史記錄';
$string['startpage'] = '起始頁';
$string['startpagedoesnotexist'] = '此維基的起始頁還沒有被創建�一';
$string['subwikis_single'] = '課程單獨的 wi一';
$string['summary'] = '摘要';
$string['system'] = '系統';
$string['tab_annotate'] = '注解';
$string['tab_discuss'] = '討論';
$string['tab_edit'] = '編輯';
$string['tab_history'] = '歷史';
$string['tab_index_alpha'] = '按英文字母順序';
$string['tab_index_changes'] = '所有的改動';
$string['tab_index_pages'] = '新的頁面';
$string['tab_index_tree'] = '結構';
$string['tab_view'] = '查看';
$string['template'] = '模板';
$string['thispageislocked'] = '此 wiki 頁面已經鎖定並且不能進行編輯�一';
$string['timelocked_after'] = '此 wiki 當前已經鎖定並且再不能進行編輯�一';
$string['timelocked_before'] = '此 wiki 當前已經鎖定。它從 {$a} 開始可以編輯�一';
$string['timeout'] = '允許的編輯的時間';
$string['timeout_none'] = '無超時';
$string['tryagain'] = '再試一次';
$string['typeinpagename'] = '這裡輸入頁面名稱';
$string['typeinsectionname'] = '這裡輸入小節標題';
$string['undelete'] = '取消刪除';
$string['unlockpage'] = '解鎖頁面';
$string['viewdeletedversionerrorcapability'] = '查看頁面版本出錯';
$string['wikifor'] = '查看 wiki�一';
$string['wikifullchanges'] = '查看完整的改動列表';
$string['wikirecentchanges'] = 'wiki 改動';
$string['wikirecentchanges_from'] = 'wiki 改動（頁面 {$a}�一';
$string['wouldyouliketocreate'] = '您想創建它嗎�一';
