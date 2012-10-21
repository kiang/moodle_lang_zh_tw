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
 * Strings for component 'local_qeupgradehelper', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   local_qeupgradehelper
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '動作';
$string['alreadydone'] = '所有一切都轉換完畢';
$string['areyousure'] = '您確定嗎�一';
$string['areyousuremessage'] = '您想升級課程{$a->shortname}的測驗“{$a->name}”中的{$a->numtoconvert}次試答嗎�一';
$string['areyousureresetmessage'] = '課程{$a->shortname}下的測驗“{$a->name}”有{$a->totalattempts}次試答，其中{$a->convertedattempts}次是從舊系統升級的。其中有{$a->resettableattempts}次可以被重置，方便重新轉換。您想這麼做嗎�一';
$string['attemptstoconvert'] = '需要轉換的試答';
$string['backtoindex'] = '回到主頁';
$string['conversioncomplete'] = '轉換結束';
$string['convertattempts'] = '轉換試答';
$string['convertedattempts'] = '已轉換試答';
$string['convertquiz'] = '轉換試答�一';
$string['cronenabled'] = '啟用cr一';
$string['croninstructions'] = '在部分升級之後，您可以讓cron自動完成剩下的升級任務。Cron會在設置的時間段（服務器的本地時間）內運行。每次cron運行時，都會處理處理幾條試答，直到時限用盡，然後再等到下一次cron時運行。即使您設置了cron，它也可能什麼都不做，除非它檢測到向2.1的主要升級已經完成�一';
$string['cronprocesingtime'] = '每次cron處理時間';
$string['cronsetup'] = '配置cr一';
$string['cronsetup_desc'] = '您可以配置cron，讓它自動完成測驗試答數據的升級�一';
$string['cronstarthour'] = '開始時間';
$string['cronstophour'] = '結束時間';
$string['extracttestcase'] = '析出測試用例';
$string['extracttestcase_desc'] = '用數據庫中的例子數據創建測試用例，用來測試升級�一';
$string['gotoindex'] = '返回到可升級的測驗列表';
$string['gotoquizreport'] = '前往此測驗的報告，檢查此次升級';
$string['gotoresetlink'] = '前往可重置的測驗列表';
$string['includedintheupgrade'] = '包含在升級中�一';
$string['invalidquizid'] = '無效的測驗id。此測驗不存在，或者它沒有可轉換的試卷�一';
$string['listpreupgrade'] = '列出測驗和試答';
$string['listpreupgrade_desc'] = '會顯示系統的所有測驗，及它們有多少次試答，幫助您了解有多少升級工作要做�一';
$string['listpreupgradeintro'] = '這是升級您網站時需要處理的試答數量。如果有幾萬個，不用擔心。更應該考慮的，是升級會花多久�一';
$string['listtodo'] = '列出仍需升級的測驗';
$string['listtodo_desc'] = '將顯示一個報表，包含系統中所有有試答且需要升級到新試題引擎的測驗�一';
$string['listtodointro'] = '這是所有有試答且需要轉換的測驗。您可以點擊鏈接轉換試答�一';
$string['listupgraded'] = '列出可重置的已升級測驗';
$string['listupgraded_desc'] = '將顯示一個報表，包含系統中所有試答已升級，但舊數據還存在的測驗。可以重置並重設這些測驗的升級�一';
$string['listupgradedintro'] = '這是全部有試卷且已升級的測驗，但舊數據仍被保留，所以可以重置並重新升級它們�一';
$string['noquizattempts'] = '您的網站沒有任何測驗被試答�一';
$string['nothingupgradedyet'] = '沒有可重置的已升級試答';
$string['notupgradedsiterequired'] = '此腳本只能在網站升級前使用�一';
$string['numberofattempts'] = '測驗試答數';
$string['oldsitedetected'] = '此網站還沒有升級到新試題引擎�一';
$string['outof'] = '{$a->total}中的{$a->some}次';
$string['pluginname'] = '試題引擎升級助手';
$string['pretendupgrade'] = '模擬運行一次試答升級';
$string['pretendupgrade_desc'] = '升級做三件事：從數據庫加載已存在的數據；轉換數據；將轉換過的數據寫入數據庫。此腳本測試此過程中的前兩步�一';
$string['questionsessions'] = '試題會話';
$string['quizid'] = '測驗一';
$string['quizupgrade'] = '測驗升級狀態';
$string['quizzesthatcanbereset'] = '下列測驗有轉換過的試答，而且您可以重置';
$string['quizzestobeupgraded'] = '所有有試答的測驗';
$string['quizzeswithunconverted'] = '下列測驗有需要轉換的試答';
$string['resetcomplete'] = '重置結束';
$string['resetquiz'] = '重置試答�一';
$string['resettingquizattempts'] = '正重置測驗試答';
$string['resettingquizattemptsprogress'] = '重置試答 {$a->done} / {$a->outo一';
$string['upgradedsitedetected'] = '看到此條信息，說明此站已經升級到了新的試題引擎�一';
$string['upgradedsiterequired'] = '此腳本只能在已經升級過的網站使用�一';
$string['upgradingquizattempts'] = '正升級課程{$a->shortname}的測驗“{$a->name}”中的試答';
$string['veryoldattemtps'] = '在從 Moodle 1.4 升級到 Moodle 1.5 的過程中，您的網站有 {$a} 次試卷沒有被正確更新。這些試卷會在主升級之前被處理。您要對額外消耗的時間有心理准備�一';
