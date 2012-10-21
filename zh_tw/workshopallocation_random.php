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
 * Strings for component 'workshopallocation_random', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   workshopallocation_random
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = '添加自我評價';
$string['allocationaddeddetail'] = '要完成的新評價：<strong>{$a->reviewername}</strong>要評價 <strong>{$a->authorname}</strong>的作業';
$string['allocationdeallocategraded'] = '不能解除分配已評分的評價：評價人 <strong>{$a->reviewername}</strong>，作業作者：<strong>{$a->authorname}</stron一';
$string['allocationreuseddetail'] = '重用評價：<strong>{$a->reviewername}</strong>繼續做 <strong>{$a->authorname}</strong>的評價人';
$string['allocationsettings'] = '分配設置';
$string['assessmentdeleteddetail'] = '已解除分配的評價: <strong>{$a->reviewername}</strong> 不再評價 <strong>{$a->authorname} 的作業';
$string['assesswosubmission'] = '不交作業也可以評價';
$string['confignumofreviews'] = '默認隨機分配作業的個數';
$string['excludesamegroup'] = '防止在同一組的同學互相評價';
$string['noallocationtoadd'] = '不需添加分配';
$string['nogroupusers'] = '<p>警告：如果互動評價處在“可視小組”模式或者“分隔小組”模式，那麼用戶必須至少屬於一個組，才能用此工具向他們分配評價任務。不屬於任何組的用戶仍然可以做自我評價或者刪除已有的評價。</p> <p>這些用戶目前還未被加入任何組：{$a}</一';
$string['numofdeallocatedassessment'] = '解除分配 {$a} 個評價';
$string['numofrandomlyallocatedsubmissions'] = '隨機分配 {$a} 個作業';
$string['numofreviews'] = '評價次數';
$string['numofselfallocatedsubmissions'] = '自我分配 {$a} 個作業';
$string['numperauthor'] = '每個作業';
$string['numperreviewer'] = '每個評價人';
$string['pluginname'] = '隨機分配';
$string['randomallocationdone'] = '隨機分配完成';
$string['removecurrentallocations'] = '刪除當前分配方案';
$string['resultnomorepeers'] = '沒有可用的人員';
$string['resultnomorepeersingroup'] = '在此分隔小組中沒有足夠的人員可用';
$string['resultnotenoughpeers'] = '沒有足夠的人員可用';
$string['resultnumperauthor'] = '嘗試為每個作者分配 {$a} 個評價人';
$string['resultnumperreviewer'] = '嘗試為每個評價人分配 {$a} 個評價任務';
$string['stats'] = '當前分配情況';
