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
 * Strings for component 'plagiarism_urkund', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   plagiarism_urkund
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaultsdesc'] = '當在活動模組中啟用 URKUND 時，下列設置是預設設置';
$string['defaultupdated'] = '預設值更新';
$string['filereset'] = '文件已被重置以重新提交給 URKUND';
$string['optout'] = '選擇退出';
$string['pending'] = '該文件正在等待提交到 URKUND';
$string['pluginname'] = 'URKUND 反抄襲外掛';
$string['previouslysubmitted'] = '先前提交為';
$string['processing'] = '該文件以提交至 URKUND，當前正在等待分析可用';
$string['savedconfigfailed'] = '輸入的帳號/密碼組合不正確，URKUND 已被停用，請重試。';
$string['savedconfigsuccess'] = '反抄襲設置已保存';
$string['showwhenclosed'] = '當活動關閉';
$string['similarity'] = 'URKUND';
$string['studentdisclosuredefault'] = '所有的文件都將上傳到抄襲檢測服務 URKUND，如果您不希望您的文檔被該站以外的其他機構用作分析材料，您可以在報告生成後使用選擇退出連結。';
$string['studentdisclosure_help'] = '該文字將在文件上傳頁面上為所有學生可見。';
$string['studentemailcontent'] = '您 {$a->coursename}中提交給{$a->modulename}的文件現在已被反抄襲工具 URKUND 處理。
{$a->modulelink}

如果您不希望您的文檔被該站以外的其他機構用作分析材料，您可以在此連結選擇退出：
{$a->optoutlink}';
$string['studentemailsubject'] = '被 URKUND 處理的文件';
$string['submitondraft'] = '在第一次上傳文件時，提交文件';
$string['submitonfinal'] = '當學生索取分數時，上傳文件';
$string['toolarge'] = '該文件太大以至於 URKUND 無法處理';
$string['unknownwarning'] = '在傳輸該文件至 URKUND 過程中發生錯誤';
$string['unsupportedfiletype'] = 'URKUND 不支持該文件類型';
$string['urkund'] = 'URKUND 反抄襲外掛';
$string['urkund_api'] = 'URKUND 集成地址';
$string['urkund_api_help'] = '此為 URKUND API 地址';
$string['urkunddefaults'] = 'URKUND 預設';
$string['urkund_draft_submit'] = '文件什麼時候提交到 URKUND';
$string['urkundexplain'] = '若想了解更多關於該外掛的資訊，請查看：<a href="http://www.urkund.com/int/en/" target="_blank">http://www.urkund.com/int/en/</a>';
$string['urkund_lang'] = '語言';
$string['urkund_lang_help'] = '由 URKUND 提供的語言代碼';
$string['urkund_password'] = '密碼';
$string['urkund_password_help'] = 'URKUND 提供的用於訪問 API 的密碼';
$string['urkund_receiver'] = '接收者地址';
$string['urkund_receiver_help'] = '這是 URKUND 為教師提供的獨有地址';
$string['urkund_show_student_report'] = '向學生展示相似度報告';
$string['urkund_show_student_report_help'] = '相似度報告指出了提交文件中抄襲的部分以及 URKUND 第一次檢測到抄襲內容的位置。';
$string['urkund_show_student_score'] = '向學生展示相似度分值';
$string['urkund_show_student_score_help'] = '相似度分值是提交文件中與其他提交內容辨識的百分比。';
$string['urkund_studentemail'] = '向學生髮送電子郵件';
$string['urkund_studentemail_help'] = '在文件被處理後會向學生髮送一封電子郵件，來通知他們報告已經生成完畢，該郵件也包含了選擇退出連結。';
$string['urkund_username'] = '帳號';
$string['urkund_username_help'] = 'URKUND 提供的用於訪問 API 的帳號';
$string['useurkund'] = '啟用 URKUND';
