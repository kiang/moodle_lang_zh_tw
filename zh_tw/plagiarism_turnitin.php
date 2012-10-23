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
 * Strings for component 'plagiarism_turnitin', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   plagiarism_turnitin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminlogin'] = '以管理員身份登錄到 Turnitin';
$string['compareinstitution'] = '將提交的文件和提交給機構的文件進行比較';
$string['compareinstitution_help'] = '此選項只有在您設置和購買了一個定製節點才可用。如果不確定就應該設置為 「否」。';
$string['compareinternet'] = '將提交的文件與網路內容相對比';
$string['compareinternet_help'] = '這一選項允許將提交的文件與 Turnitin 當前索引的網路內容相比較';
$string['comparejournals'] = '將提交的文件與期刊，文獻相比較';
$string['comparejournals_help'] = '這一選項允許將提交的文件與 Turnitin 當前索引的期刊，文獻相比較';
$string['comparestudents'] = '將提交的文件與其他學生提交的文件相比較';
$string['comparestudents_help'] = '這一選項允許將提交的文件與其他學生提交的文件相比較';
$string['configdefault'] = '這是作業建立頁面的預設設置。只有擁有 plagiarism/turnitin:enableturnitin 權限的使用者可以對個人作業更改這一設置';
$string['configusetiimodule'] = '啟用 Turnitin 提交。';
$string['defaultsdesc'] = '當在活動模組中啟用 Turnitin 時，下列設置是預設設置';
$string['defaultupdated'] = 'Turnitin 預設設置已經更新';
$string['draftsubmit'] = '該文件何時應被提交到 Turnitin';
$string['excludebiblio'] = '忽略參考文獻';
$string['excludebiblio_help'] = '在查看原創性報告時，書目材料也可以包含進去或排除掉。在第一個文件提交後，此設置不能再修改。';
$string['excludematches'] = '排除小的辨識';
$string['excludematches_help'] = '您可以按百分比或字數來忽略小規模的雷同-選擇您所希望使用的標準，並將百分比或者字數輸入到下面的框中。';
$string['excludequoted'] = '忽略引用材料';
$string['excludequoted_help'] = '在查看原創性報告時，引用的材料也可以包含進去或排除掉。在第一個文件提交後，此設置不能再修改。';
$string['file'] = '文件';
$string['filedeleted'] = '從隊列中刪除的文件';
$string['fileresubmitted'] = '排隊等待重新提交的文件';
$string['module'] = '模組';
$string['name'] = '名稱';
$string['percentage'] = '百分比';
$string['pluginname'] = 'Turnitin 反抄襲外掛';
$string['reportgen'] = '什麼時候生成原創性報告';
$string['reportgenduedate'] = '在截止日期';
$string['reportgen_help'] = '此選項可讓您選擇什麼時候應該生成原創性報告';
$string['reportgenimmediate'] = '立即（第一份報告就是最終的）';
$string['reportgenimmediateoverwrite'] = '立即（可以覆蓋報告）';
$string['resubmit'] = '重新提交';
$string['savedconfigfailure'] = '無法連結 / 驗證到 Turnitin —— 您可能有一個不正確的 密鑰 / 帳號 ID 組合或此伺服器不能連結到該 API';
$string['savedconfigsuccess'] = 'Turnitin 設置已經保存，並且已經建立教師帳號';
$string['showstudentsreport'] = '向學生展示相似性報告';
$string['showstudentsreport_help'] = '相似性報告給出一個關於提交的哪些部分是抄襲的和 Turnitin 首先看到這些內容的位置的統計分析';
$string['showstudentsscore'] = '向學生顯示相似度分值';
$string['showstudentsscore_help'] = '相似度分值是所提交的文件與其他材料雷同的百分比——高的分值通常是不好的。';
$string['showwhenclosed'] = '當活動關閉時';
$string['similarity'] = '相似度';
$string['status'] = '狀態';
$string['studentdisclosuredefault'] = '所有上傳的文件將會被提交到抄襲檢測服務 Turnitin.com';
$string['studentdisclosure_help'] = '該文字將會在文件上傳頁面上展示給所有學生。';
$string['submitondraft'] = '第一次上傳時提交文件';
$string['submitonfinal'] = '當學生髮送來評分時提交文件';
$string['teacherlogin'] = '以教師身份登錄到 Turnitin';
$string['tii'] = 'Turnitin';
$string['tiiaccountid'] = 'Turnitin 賬戶 ID';
$string['tiiaccountid_help'] = '這是由 Turnitin.com 所提供的您的賬戶ID';
$string['tiiapi'] = 'Turnitin API';
$string['tiiapi_help'] = '這是 Turnitin API 的地址——通常是 https://api.turnitin.com/api.asp';
$string['tiiconfigerror'] = '在嘗試將該文件傳輸到 Turnitin 時發生了網站配置錯誤';
$string['tiiemailprefix'] = '學生電子郵件前綴';
$string['tiiemailprefix_help'] = '如果您不希望學生能登錄到 turnitin.com 網站並查看完整的報告，您必須設置此項。';
$string['tiienablegrademark'] = '啟用 Grademark (試驗性)';
$string['tiienablegrademark_help'] = 'Grademark 是 Turnitin 的一個可選功能 —— 要使用它，您必須在您的 Turnitin 訂閱里包括這 個。啟用這個將會造成查看提交頁面時加載緩慢。';
$string['tiierror'] = 'TII 錯誤：';
$string['tiierror1007'] = 'Turnitin 不能處理這個文件，因為它太過龐大';
$string['tiierror1008'] = '當嘗試發送此文件到 Turnitin 時發生了一個錯誤';
$string['tiierror1009'] = 'Turnitin 不能處理這個文件 —— 這是一個不支持的文件類型。有效的文件類型是 MS Word，Acrobat PDF，Postscript，文字，HTML，WordPerfect 和 RTF 格式';
$string['tiierror1010'] = 'Turnitin 不能處理這個文件 —— 它必須包含多於 100 個非空白字元';
$string['tiierror1011'] = 'Turnitin 不能處理這個文件 —— 它的格式不正確，問題似乎是因為每兩個字母間有空格';
$string['tiierror1012'] = 'Turnitin 不能處理這個文件 ——  它的長度超出了 Turnitin 的限制';
$string['tiierror1013'] = 'Turnitin 不能處理這個文件 —— 它必須包含多於 20 個詞語';
$string['tiierror1020'] = 'Turnitin 不能處理這個文件 —— 它包含不支持的字符集中的字元';
$string['tiierror1023'] = 'Turnitin 不能處理這個文件 —— 確保它沒有密碼保護並且包含可以選擇的文字而不是掃描的圖片';
$string['tiierror1024'] = 'Turnitin 不能處理這個文件 —— 它不符合 Turnitin 合法文件的標準';
$string['tiierrorpaperfail'] = 'Turnitin 無法處理該文件。';
$string['tiierrorpending'] = '文件等待提交到 Turnitin';
$string['tiiexplain'] = 'Turnitin 是一個商業產品，您必須付費訂閱才能使用這項服務；詳細資訊請參閱 <a href="http://docs.moodle.org/en/Turnitin_administration">http://docs.moodle.org/en/Turnitin_administration</a>';
$string['tiiexplainerrors'] = '此頁面顯示任何已經提交到 Turnitin 並且目前處於錯誤狀態的文件。 Turnitin 的錯誤代碼及其描述的列表可以在這裡找到： :<a href="http://docs.moodle.org/en/Turnitin_errors">docs.moodle.org/en/Turnitin_errors</a><br/>當文件重置後，計劃程序將會嘗試再次將文件提交到 Turnitin。<br/>當文件在此頁面被刪除後，他們將再也不能被重新提交到 Turnitin，並且也不會向教師和學生顯示錯誤';
$string['tiisecretkey'] = 'Turnitin 密鑰';
$string['tiisecretkey_help'] = '以您網站的管理員身份登錄 Turnitin.com 來獲取這個。';
$string['tiisenduseremail'] = '發送電子郵件給使用者';
$string['tiisenduseremail_help'] = '給每個學生髮送一個 TII 系統建立的包含登錄到 www.turnitin.com 的連結和臨時密碼的電子郵件';
$string['turnitin'] = 'Turnitin';
$string['turnitin_attemptcodes'] = '自動重新提交的錯誤代碼';
$string['turnitin_attemptcodes_help'] = 'Turnitin 能接受第二次提交的錯誤代碼（這個域的修改可能導致伺服器負載加重）';
$string['turnitin_attempts'] = '重試的次數';
$string['turnitin_attempts_help'] = '代碼指定的重新提交到  Turnitin 的次數，一次重試的意思是帶有此錯誤代碼的文件將會被提交兩次。';
$string['turnitindefaults'] = 'Turnitin 的預設值';
$string['turnitin:enable'] = '允許教師在 Moodle 里開啟 / 停用 Turnitin';
$string['turnitinerrors'] = 'Turnitin 錯誤';
$string['turnitin_institutionnode'] = '啟用機構節點';
$string['turnitin_institutionnode_help'] = '如果您已經使用您的帳號 設置 / 購買了一個機構節點，開啟這個並在建立作業時允許選中節點。注意：如果您沒有機構節點，啟用此設置會導致您的文件提交失敗。';
$string['turnitin:viewfullreport'] = '允許教師查看 Turnitin 返回的完整報告';
$string['turnitin:viewsimilarityscore'] = '允許教師查看Turnitin 返回的相似性分數';
$string['useturnitin'] = '啟用 Turnitin';
$string['wordcount'] = '字數統計';
