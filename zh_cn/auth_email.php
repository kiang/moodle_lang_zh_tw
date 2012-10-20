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
 * Strings for component 'auth_email', language 'zh_cn', branch 'MOODLE_21_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'Email确认是默认的身份认证方法。用户注册时可以选用自己的用户名和密码，然后有一封确认信件发送到该用户的email地址。该信件中有一个私密的链接指向用户确认帐号的页面。以后的登录就只验证在Moodle数据库中储存的用户名和密码。';
$string['auth_emailnoemail'] = '尝试发送给您一封email，但是失败了！';
$string['auth_emailrecaptcha'] = '在Email自助注册页面中增加图像/声音验证。这将有利于保护网站免收垃圾信息发送者的干扰，同时还会对一项有意义的事业做贡献。详情请看：http://www.google.com/recaptcha/learnmore 。<em>需要 PHP cURL 扩展。</em>';
$string['auth_emailrecaptcha_key'] = '激活 reCAPTCHA 元素';
$string['auth_emailsettings'] = '设置';
$string['pluginname'] = '基于email的自助注册';
