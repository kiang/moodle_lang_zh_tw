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
 * Strings for component 'portfolio_mahara', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   portfolio_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = '啟用 Leap2A 公文包支持（需要 Mahara 1.3 或更高版本�一';
$string['err_invalidhost'] = '無效的 MNet 主機';
$string['err_invalidhost_help'] = '此插件的配置錯誤地指向了一個無效（或已刪除）的 MNet 主機。此插件依賴發布了 SSO IDP、訂閱了 SSO_SP 和 訂閱<b>且</b>發布了雲存儲的 Moodle 網絡伙伴�一';
$string['err_networkingoff'] = 'MNet 關閉';
$string['err_networkingoff_help'] = 'MNet 被完全關閉。請在配置此插件前啟用它。在修正之前，此插件的所有實例都會隱藏。您需要手工設置它們為可見。此前它們都不能使用';
$string['err_nomnetauth'] = 'MNet 認證插件已禁用';
$string['err_nomnetauth_help'] = 'MNet 認證插件已禁用，但此服務需要它';
$string['err_nomnethosts'] = '依賴 MN一';
$string['err_nomnethosts_help'] = '此插件要求 MNet 伙伴要發布 SSO IDP、訂閱 SSO SP、發布雲存儲服務<b>並且</b>也訂閱了MNet認證插件。在條件不都滿足之前，此插件的所有實例都會隱藏。需要手工設置它們為可見�一';
$string['failedtojump'] = '與遠程服務器通信失敗';
$string['failedtoping'] = '與遠程服務器通信失敗：{$一';
$string['mnethost'] = 'MNet 主機';
$string['mnet_nofile'] = '傳送對象中沒有文件——詭異的錯誤';
$string['mnet_nofilecontents'] = '傳送對象中有文件，但是讀不到內容——詭異的錯誤：{$一';
$string['mnet_noid'] = '找不到與此令牌相匹配的傳送記錄';
$string['mnet_notoken'] = '找不到與此次傳送匹配的令牌';
$string['mnet_wronghost'] = '遠程主機與此令牌的傳送記錄不匹配';
$string['pf_description'] = '允許用戶推送 Moodle 內容到此主機<br />訂閱<b>並</b>發布此服務可以讓此網站的認證用戶推送內容到{$a}<br /><ul><li><em>相關</em>：您必須也<strong>發布</strong> SSO（身份提供者）服務到{$a}。.</li><li><em>相關</em>：您必須也<strong>訂閱</strong>{$a}的 SSO（身份提供者）服務</li><li><em>相關</em>：您必須也啟用 MNet 認證插件。</li></ul><br 一';
$string['pf_name'] = '雲存儲服務';
$string['pluginname'] = 'Mahara ePortfol一';
$string['senddisallowed'] = '您現在不能向 Mahara 傳送文件';
$string['url'] = 'U一';
