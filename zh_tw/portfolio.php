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
 * Strings for component 'portfolio', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   portfolio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = '解決活動的導出';
$string['activeportfolios'] = '可選的雲存儲';
$string['addalltoportfolio'] = '全部導出到雲存儲';
$string['addnewportfolio'] = '添加一個新的雲存儲';
$string['addtoportfolio'] = '導出到雲存儲';
$string['alreadyalt'] = '已經在導出——請點擊此處解決傳送';
$string['alreadyexporting'] = '您此次會話已經有一個活動的雲存儲導出。在繼續之前，您必須完成此導出，或者放棄它。您要繼續導出嗎？（“否”會放棄它�一';
$string['availableformats'] = '可選的導出格式';
$string['callbackclassinvalid'] = '給定的回調類無效，或它不是繼承自portfolio_call一';
$string['callercouldnotpackage'] = '導出前進行數據打包時發生錯誤：原始錯誤是{$一';
$string['cannotsetvisible'] = '無法設為可見 - 因為配置錯誤，此插件被完全禁用';
$string['commonportfoliosettings'] = '通用雲存儲設置';
$string['commonsettingsdesc'] = '<p>一次傳送要花費的時間被視作“適中”還是“大量”決定了用戶是否可以等待傳送結束。</p><p>小於“適度”閾值的文件會被立刻傳送，不會詢問用戶。而“中度”和“大量”的傳送會先給用戶選項，並警告他們這可能會消耗一些時間。</p><p>另外，某些雲存儲插件會完全忽略此選項，強制所有傳送必須排隊。</一';
$string['configexport'] = '配置導出的數據';
$string['configplugin'] = '配置雲存儲插件';
$string['configure'] = '配置';
$string['confirmcancel'] = '您確定要放棄本次導出�一';
$string['confirmexport'] = '請確認本次導出';
$string['confirmsummary'] = '您的導出概要';
$string['continuetoportfolio'] = '訪問您的雲存儲';
$string['deleteportfolio'] = '刪除雲存儲實例';
$string['destination'] = '目的地';
$string['disabled'] = '抱歉，但是本站沒有啟用雲存儲導出功能';
$string['disabledinstance'] = '已禁用';
$string['displayarea'] = '導出區域';
$string['displayexpiry'] = '傳送過期時間';
$string['displayinfo'] = '導出信息';
$string['dontwait'] = '不等';
$string['enabled'] = '啟用雲存儲';
$string['enableddesc'] = '啟用後，管理員可以配置供用戶導出內容的遠程系統';
$string['err_uniquename'] = '每個插件的雲存儲名必須唯一';
$string['exportalreadyfinished'] = '雲存儲導出成功�一';
$string['exportalreadyfinisheddesc'] = '雲存儲導出結束�一';
$string['exportcomplete'] = '雲存儲導出成功�一';
$string['exportedpreviously'] = '以前的導出';
$string['exportexceptionnoexporter'] = '活動會話拋出 portfolio_export_exception，但是沒有導出人對象';
$string['exportexpired'] = '已過期的雲存儲導出';
$string['exportexpireddesc'] = '您曾反復嘗試導出某些信息，或者啟動一個空的導出。正確的操作是，回退到原始位置並重新開始。發生此種情況一般是因為在導出結束後，您按了返回按鈕，或者收藏了一個不正確的url�一';
$string['exporting'] = '正在向雲存儲導出';
$string['exportingcontentfrom'] = '正在從 {$a} 導出內容';
$string['exportingcontentto'] = '正在向 {$a} 導出內容';
$string['exportqueued'] = '已成功將雲存儲導出放入傳送隊列';
$string['exportqueuedforced'] = '已成功將雲存儲導出放入傳送隊列（遠程系統要求必須將傳送排隊�一';
$string['failedtopackage'] = '找不到要打包的文件';
$string['failedtosendpackage'] = '將您的數據發往您選擇的雲存儲系統時出錯：原始錯誤信息是{$一';
$string['filedenied'] = '文件訪問被拒絕';
$string['filenotfound'] = '找不到文件';
$string['fileoutputnotsupported'] = '此格式不支持重寫文件輸出';
$string['format_document'] = '文檔';
$string['format_file'] = '文件';
$string['format_image'] = '圖片';
$string['format_leap2a'] = 'Leap2A 公文包格式';
$string['format_mbkp'] = 'Moodle備份格式';
$string['format_pdf'] = 'P一';
$string['format_plainhtml'] = 'HT一';
$string['format_presentation'] = '幻燈片';
$string['format_richhtml'] = '帶附件的HT一';
$string['format_spreadsheet'] = '電子表格';
$string['format_text'] = '純文本';
$string['format_video'] = '視頻';
$string['hidden'] = '隱藏';
$string['highdbsizethreshold'] = '大量傳送數據大小';
$string['highdbsizethresholddesc'] = '數據庫記錄數超過多少將被認為會使用大量傳送時間';
$string['highfilesizethreshold'] = '大量傳送文件大小';
$string['highfilesizethresholddesc'] = '大小超過此閾值的文件將被認為會使用大量傳送時間';
$string['insanebody'] = '您好！因為您是{$a->sitename}的管理員，所以您會收到此信息。

因為配置錯誤，一些雲存儲插件被自動禁用。這意味著用戶現在不能向這些雲存儲導出數據。

被禁用的雲存儲插件有：

{$a->textlist}

請即刻訪問 {$a->fixurl} ，馬上修正此問題�一';
$string['insanebodyhtml'] = '<p>您好！因為您是{$a->sitename}的管理員，所以您會收到此信息。</p>
<p>因為配置錯誤，一些雲存儲插件被自動禁用。這意味著用戶現在不能向這些雲存儲導出數據。</p>
<p>被禁用的雲存儲插件有：</p>
{$a->htmllist}
<p>請即刻訪問<a href="{$a->fixurl}">雲存儲配置頁</a> ，馬上修正此問題。</一';
$string['insanebodysmall'] = '您好！因為您是{$a->sitename}的管理員，所以您會收到此信息。因為配置錯誤，一些雲存儲插件被自動禁用。這意味著用戶現在不能向這些雲存儲導出數據。請即刻訪問 {$a->fixurl} ，馬上修正此問題�一';
$string['insanesubject'] = '某些雲存儲實例已被自動禁用';
$string['instancedeleted'] = '成功刪除雲存儲';
$string['instanceismisconfigured'] = '雲存儲實例配置不正確，跳過。錯誤是：{$一';
$string['instancenotdelete'] = '刪除雲存儲失敗';
$string['instancenotsaved'] = '保存雲存儲出錯';
$string['instancesaved'] = '雲存儲成功保存';
$string['invalidaddformat'] = '傳遞給 portfolio_add_button 的添加格式無效。（{$a}）必須是 PORTFOLIO_ADD_XXX 中的一個';
$string['invalidbuttonproperty'] = '找不到 portfolio_button 的屬性（{$a}�一';
$string['invalidconfigproperty'] = '找不到配置屬性（{$a->class} 的 {$a->property}�一';
$string['invalidexportproperty'] = '找不到導出配置屬性（{$a->class} 的 {$a->property}�一';
$string['invalidfileareaargs'] = '傳遞給 set_file_and_format_data  的文件區域參數無效 — 必須包含 contextid、component、fileare 和 item一';
$string['invalidformat'] = '正在導出無效格式，{$一';
$string['invalidinstance'] = '找不到該雲存儲實例';
$string['invalidpreparepackagefile'] = '調用 prepare_package_file 無效 — 必須設置 single 或 multifil一';
$string['invalidproperty'] = '找不到屬性（{$a->class} 的 {$a->property}�一';
$string['invalidsha1file'] = '調用 get_sha1_file 無效 — 必須設置 single 或 multifil一';
$string['invalidtempid'] = '無效的導出 id。可能它已過期';
$string['invaliduserproperty'] = '找不到用戶配置屬性（{$a->class} 的 {$a->property}�一';
$string['leap2a_emptyselection'] = '未算做必填的值';
$string['leap2a_entryalreadyexists'] = '您嘗試添加的 id 為 {$a} 的 Leap2A 項在種子中已存在';
$string['leap2a_feedtitle'] = '為 {$a} 從 Moodle 導出 Leap一';
$string['leap2a_filecontent'] = '試圖設置 Leap2A 項的內容到文件，而不是使用文件子類';
$string['leap2a_invalidentryfield'] = '您試圖設置一個不存在的項字段（{$a}），或者您不能直接設置';
$string['leap2a_invalidentryid'] = '您試圖用一個不存在的 id 訪問一個項（{$a}�一';
$string['leap2a_missingfield'] = '缺少必須的 Leap2A 項字段 {$一';
$string['leap2a_nonexistantlink'] = '一個 Leap2A 項（{$a->from}）試圖用 rel {$a->rel} 鏈接到一個不存在的項（{$a->to}�一';
$string['leap2a_overwritingselection'] = '在 make_selection 中覆蓋項（{$a}）的原始類型為選擇類型';
$string['leap2a_selflink'] = '一個 Leap2A 項（{$a->id}）試圖用 rel {$a->rel} 鏈接自己';
$string['logs'] = '傳送日志';
$string['logsummary'] = '已成功的傳送';
$string['manageportfolios'] = '管理雲存儲';
$string['manageyourportfolios'] = '管理您的雲存儲';
$string['mimecheckfail'] = '雲存儲插件 {$a->plugin} 不支持文檔類型 {$a->mimetyp一';
$string['missingcallbackarg'] = '缺少給類 {$a->class} 的回調參數 {$a->ar一';
$string['moderatedbsizethreshold'] = '適中傳送數據大小';
$string['moderatedbsizethresholddesc'] = '個數超過此閾值的數據庫記錄將被認為會使用適中傳送時間';
$string['moderatefilesizethreshold'] = '適中傳送文件大小';
$string['moderatefilesizethresholddesc'] = '大小超過此閾值的文件將被認為會使用適中傳送時間';
$string['multipleinstancesdisallowed'] = '試圖用不支持多實例的插件創建多個實例（{$a}�一';
$string['mustsetcallbackoptions'] = '您必須在 portfolio_add_button 的構造器或使用 set_callback_options 方法設置回調選項';
$string['noavailableplugins'] = '抱歉，沒有您可用的雲存儲，無法導出';
$string['nocallbackclass'] = '找不到可用的回調類（{$a}�一';
$string['nocallbackfile'] = '你正試圖從中導出的模塊有些問題——找不到請求的文件（{$a}�一';
$string['noclassbeforeformats'] = '您在調用 portfolio_button 的 set_formats 之前必須設置回調類';
$string['nocommonformats'] = '調用者 {$a->location} 和可用的雲存儲插件之間沒有共同支持的格式（調用者支持{$a->formates}�一';
$string['noinstanceyet'] = '未被選擇';
$string['nologs'] = '沒有可顯示的日志�一';
$string['nomultipleexports'] = '抱歉，目標雲存儲（{$a->plugin}）不支持同時進行多個導出。請<a href="{$a->link}">先完成當前的</a>再重新嘗試';
$string['nonprimative'] = '傳遞到 portfolio_add_button 的回調參數不是原始值。拒絕繼續。參數的 key 是 {$a->key}，值是 {$a->valu一';
$string['nopermissions'] = '對不起，你在這個區域裡沒有導出文件的權限';
$string['notexportable'] = '抱歉，您要導出的內容類型不可導出';
$string['notimplemented'] = '抱歉，您要導出的內容的格式還未實現（{$a}�一';
$string['notyetselected'] = '還未選擇';
$string['notyours'] = '您正試圖繼續一個不屬於您的雲存儲導出�一';
$string['nouploaddirectory'] = '不能創建用來打包數據的臨時目錄';
$string['off'] = '啟用但隱藏';
$string['on'] = '啟用且可見';
$string['plugin'] = 'portfolio插件';
$string['plugincouldnotpackage'] = '為導出而打包您的數據時出錯：原始錯誤是{$一';
$string['pluginismisconfigured'] = '雲存儲插件配置錯誤，跳過。錯誤是：{$一';
$string['portfolio'] = '公文包';
$string['portfolios'] = '雲存儲';
$string['queuesummary'] = '當前傳送隊列';
$string['returntowhereyouwere'] = '回到之前頁面';
$string['save'] = '保存';
$string['selectedformat'] = '選擇導出格式';
$string['selectedwait'] = '等待嗎�一';
$string['selectplugin'] = '選擇目標';
$string['singleinstancenomultiallowed'] = '只有一個可用的雲存儲插件實例，它不支持每次會話多次導出，並且已經有一個處於活動狀態的導出正在該插件的會話中�一';
$string['somepluginsdisabled'] = '有些雲存儲插件已完全禁用，因為它們配置錯誤或依賴於別的什麼�一';
$string['sure'] = '您確信要刪除“{$a}”嗎？此操作不可逆�一';
$string['thirdpartyexception'] = '雲存儲導出時拋出了一個第三方異常（{$a}）。已捕獲並重新拋出，但這個一定要修復';
$string['transfertime'] = '傳送時間';
$string['unknownplugin'] = '未知（可能管理員已刪除�一';
$string['wait'] = '等';
$string['wanttowait_high'] = '不建議您一直等到傳送結束，但是如果您確信且明白這意味著什麼，您可以等�一';
$string['wanttowait_moderate'] = '您想等待傳送結束嗎？這可能會用幾分鍾時間';
