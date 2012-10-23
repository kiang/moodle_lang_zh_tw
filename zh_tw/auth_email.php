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
 * Strings for component 'auth_email', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '以電子郵件確認帳號是系統預設認證方式。當使用者申請帳號時，選擇帳號名稱與密碼，系統將以電子郵件送出確認訊息。申請者須閱讀電子郵件後按下內容內確認連結後啟動帳號使用權。以上動作只要一次即可，之後可要帳號名稱與密碼相符便可登入。';
$string['auth_emailnoemail'] = '嘗試寄送郵件給您時發生錯誤！';
$string['auth_emailrecaptcha'] = '針對以電子郵件註冊的使用者，在登入的頁面中，增加一個視覺/聲音確認的表單元件，提供一個圖形或語音驗證的服務，防範惡意註冊與濫用攻擊。詳細說明請參見http://recaptcha.net/learnmore.html<br />，<em>需要安裝PHP cURL 延伸套件</em>。';
$string['auth_emailrecaptcha_key'] = '啟動reCAPTCHA元件';
$string['auth_emailsettings'] = '設定';
$string['pluginname'] = '電子郵件確認';
