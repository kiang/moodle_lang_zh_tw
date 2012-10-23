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
 * Strings for component 'url', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = '選擇一個變量...';
$string['clicktoopen'] = '點擊{$a}鏈接打開資源。';
$string['configdisplayoptions'] = '選擇所有可以使用的選項。已有的設置不會改變。按住CTRL鍵選擇多個域。';
$string['configframesize'] = '當在框架內顯示web頁面或上傳的文件時，此值為頂層框架（包括導航欄）的高度（單位：像素）。';
$string['configrolesinparams'] = '如果您希望用本地化過的角色名做可選的參數變量，就啟用';
$string['configsecretphrase'] = '此秘密短語被用來生成加密的代碼。此代碼可以當做參數發送給某些服務器。加密的代碼是當前用戶的IP地址和您的秘密短語的md5值。即，code = md5(IP.秘密短語)。請注意，因為IP地址會變化，且經常在不同計算機之間共享，所以並不可靠。';
$string['contentheader'] = '內容';
$string['displayoptions'] = '可用的顯示選項';
$string['displayselect'] = '顯示';
$string['displayselectexplain'] = '選擇顯示類型，但並不是所有類型都適合所有URL。';
$string['displayselect_help'] = '此設置，URL文件的類型，及瀏覽器是否允許嵌入，一起決定如何顯示文件。選項可能包括：

* 自動 - 對類型可以自動選擇的文件，這是最好的選項
* 嵌入 - 在導航欄下的頁面中顯示文件、文件描述和各種版塊
* 強制下載 - 用戶會被提示下載此文件
* 打開 - 只在瀏覽器窗口中顯示此文件
* 在彈出窗口中 - 在一個無菜單和地址欄的新窗口中顯示文件
* 在框架中 - 在導航欄和文件描述下方的框架裡顯示文件
* 新窗口 - 在有菜單和地址欄的新窗口中顯示文件
';
$string['externalurl'] = '外部URL';
$string['framesize'] = '框架高度';
$string['invalidstoredurl'] = '不能顯示此資源，URL 無效。';
$string['invalidurl'] = '輸入的 URL 無效';
$string['modulename'] = 'URL';
$string['modulenameplural'] = 'URL';
$string['neverseen'] = '從未查看';
$string['optionsheader'] = '選項';
$string['page-mod-url-x'] = '任意URL模塊頁面';
$string['parameterinfo'] = '&amp;參數=變量';
$string['parametersheader'] = '參數';
$string['parametersheader_help'] = '可以將一些Moodle內部變量自動附加到URL上。在每個文本框中輸入參數名，然後選擇配套的變量。';
$string['pluginadministration'] = 'URL模塊管理';
$string['pluginname'] = 'URL';
$string['popupheight'] = '彈出窗口高度（單位：像素）';
$string['popupheightexplain'] = '指定彈出窗口的缺省高度。';
$string['popupwidth'] = '彈出窗口寬度（單位：像素）';
$string['popupwidthexplain'] = '指定彈出窗口的缺省寬度。';
$string['printheading'] = '顯示URL名';
$string['printheadingexplain'] = '在內容上方顯示URL名？某些顯示類型就算開啟此選項也不會顯示URL名。';
$string['printintro'] = '顯示URL描述';
$string['printintroexplain'] = '在內容下方顯示 URL 描述？某些顯示類型就算開啟此選項也不會顯示描述。';
$string['rolesinparams'] = '在參數中包含角色名';
$string['serverurl'] = '服務器URL';
$string['url:view'] = '查看URL';
