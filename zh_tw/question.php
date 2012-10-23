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
 * Strings for component 'question', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = '報告試題資料庫中，可能產生的問題。';
$string['broken'] = '這是"失效的連結"，它指向一個不存在的檔案。';
$string['byandon'] = '由 <em>{$a->user}</em> 在 <em>{$a->time}</em>';
$string['cannotread'] = '無法讀取匯入的檔案(或許檔案是空的)';
$string['categorycurrent'] = '目前類別';
$string['categorycurrentuse'] = '使用此類別';
$string['categorydoesnotexist'] = '這個類別不存在';
$string['categorymove'] = '類別\'{$a->name}\'中有{$a->count}個題目(有些題目可能比較舊、被隱藏，正被存在的測驗使用)。<br />請選擇另一個類別來轉移它們。';
$string['categorymoveto'] = '儲存在類別中';
$string['changepublishstatuscat'] = '{$a->coursename}課程}中<a href="{$a->caturl}">類別“{$a->name}”</a>可以將共享狀態從<strong>{$a->changefrom}</strong>改變為<strong>{$a->changeto}</strong>。';
$string['copy'] = '從{$a}複製並更改變連結。';
$string['created'] = '已建立';
$string['createdmodifiedheader'] = '已建立/最後儲存的';
$string['cwrqpfs'] = '從次分類的題庫中隨機選取題目';
$string['defaultfor'] = '預設{$a}';
$string['defaultinfofor'] = '課程：{$a}所分享的試題類別。';
$string['donothing'] = '不要複製或移動檔案或改變連結';
$string['editingcategory'] = '編輯類別';
$string['editingquestion'] = '編輯一道題目';
$string['erroraccessingcontext'] = '無法使用內容';
$string['errordeletingquestionsfromcategory'] = '從類別{$a}中刪除試題時發生錯誤。';
$string['errorfilecannotbecopied'] = '錯誤！不能複製檔案{$a}。';
$string['errorfilecannotbemoved'] = '錯誤！不能移動檔案{$a}。';
$string['errorfileschanged'] = '錯誤！連結到試題的檔案已經被更動了。';
$string['exportcategory'] = '匯出類別';
$string['exportfilename'] = 'quiz';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions_help'] = '　　<p align="center"><b>從類別中導出試題</b></p>
　　
　　<p>這個選項允許您從一個類別中將試題全部導出到一個文字檔案中。</p>
　　
　　<p>注意，很多檔格式都會導致試題的某些資訊丟失，這是因為大多數格式都無法支援Moodle中試題的全部功能。因此當匯出並重新導入試題後，可能它們並不會完全相同。而且有些檔格式是不支持匯出的。</p>

<p>我們建議您在一個實際的環境中使用匯出的資料時要對其進行檢查。</p>';
$string['filesareacourse'] = '課程檔案區';
$string['filesareasite'] = '網站檔案區';
$string['filestomove'] = '移動/複製檔案至 {$a}？';
$string['fractionsnomax'] = '答案之一的成績應該要設定為100%。';
$string['getcategoryfromfile'] = '從檔案中得到類別名稱';
$string['getcontextfromfile'] = '從檔案中得到內文';
$string['ignorebroken'] = '忽略已破壞的連結';
$string['linkedfiledoesntexist'] = '連結的檔案 {$a} 不存在';
$string['maketoplevelitem'] = '移至頂層';
$string['missingimportantcode'] = '這題型缺少重要的符號：{$a}。';
$string['modified'] = '最後儲存的';
$string['movecategory'] = '搬移類別';
$string['movelinksonly'] = '只變更連結指，而不移動或複製檔案';
$string['moveq'] = '搬移試題';
$string['moveqtoanothercontext'] = '搬移試題至其他context';
$string['movingcategory'] = '移動類別';
$string['movingquestions'] = '移動試題和所有檔案';
$string['nopermissionadd'] = '您無權限在此新增試題。';
$string['noprobs'] = '在試題庫中沒發現問題。';
$string['noquestionsinfile'] = '匯入的檔案沒有題目';
$string['notenoughdatatoeditaquestion'] = '沒有指定題目編號，也沒有類別編號或題型。';
$string['penaltyfactor'] = '倒扣條件';
$string['penaltyfactor_help'] = '　　<p align="center"><b>扣分因素</b></p>
　　
　　<p>您可以指定每次錯誤的反應都將從最終分數裏扣除多少分。這只對允許學生多次做答的適性模式下的測驗有效。罰分因素應該是0到1之間的數字。扣分因素設若為1，意味著學生必須在第一次就解答正確，才能得到分數(第一次答錯，就會扣光該題全部分數)。扣分因素設若為0，表示絕不扣分，學生可以嘗試任意次，仍能得到該題的滿分。</p>
　　';
$string['permissionedit'] = '編輯試題';
$string['permissionmove'] = '搬移試題';
$string['permissionsaveasnew'] = '儲存為新試題';
$string['permissionto'] = '您有權限做：';
$string['published'] = '共享的';
$string['questionbank'] = '題庫';
$string['questioncategory'] = '試題類別';
$string['questioncatsfor'] = '{$a}的試題類別';
$string['questiondoesnotexist'] = '這題目不存在';
$string['questionuse'] = '在這活動使用試題';
$string['selectcategoryabove'] = '從上方選擇一個類別';
$string['shareincontext'] = '在{$a}中共享';
$string['tofilecategory'] = '將類別寫入檔案';
$string['tofilecontext'] = '將內文寫入檔案';
$string['unknown'] = '未知的';
$string['unknownquestiontype'] = '不明的題型：{$a}';
$string['unpublished'] = '不共享';
$string['yourfileshoulddownload'] = '您的匯出檔案應該很快就開始下載，如果沒有動靜，請 <a href="<b>{$a}</b>">點按這裡</a> 手動下載。';
