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
 * Strings for component 'rating', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = '平均分';
$string['aggregatecount'] = '評分總數';
$string['aggregatemax'] = '最高分';
$string['aggregatemin'] = '最低分';
$string['aggregatenone'] = '無評分';
$string['aggregatesum'] = '評分總和';
$string['aggregatetype'] = '匯總類型';
$string['aggregatetype_help'] = '匯總類型定義了各個評分如何在成績單中匯總為最終成績。

* 平均分 - 所有評分的平均值
* 評分總數 - 被評分的項目數成為最終成績。注意，該成績不會超過活動設定的最高分。
* 最大值 - 最高的評分成為最終成績
* 最小值 - 最低的評分成為最終成績
* 總和 - 所有評分被加到一起。注意，該成績不會超過活動設定的最高分。

如果選擇“無評分”，那麼此活動不會出現在成績單中�一';
$string['allowratings'] = '可以給項目評分嗎�一';
$string['allratingsforitem'] = '所以已提交的評分';
$string['capabilitychecknotavailable'] = '在活動被保存之前，不能檢查權限';
$string['couldnotdeleteratings'] = '抱歉，因為已經有人參與了評分，所以不能刪除';
$string['norate'] = '項目評分功能沒有打開�一';
$string['noratings'] = '沒有已提交的評分';
$string['noviewanyrate'] = '您只能查看您創造的條目的結果';
$string['noviewrate'] = '您沒有查看評分的權限';
$string['rate'] = '評分';
$string['ratepermissiondenied'] = '您沒有對此項評分的權限';
$string['rating'] = '評分';
$string['ratinginvalid'] = '評分無效';
$string['ratings'] = '評分';
$string['ratingtime'] = '限制只能在此時間段內評分�一';
$string['rolewarning'] = '有評分權的角色';
$string['rolewarning_help'] = '要提交評分的用戶必須具有moodle/rating:rate權限和模塊定義的相關權限。分配到如下角色的用戶應該能評分。在版塊設置頁面裡的權限鏈接裡可以修改這個角色列表�一';
