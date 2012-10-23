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
 * Strings for component 'xmldb', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = '實際';
$string['aftertable'] = '放在此表後：';
$string['back'] = '後退';
$string['backtomainview'] = '返回主視圖';
$string['binaryincorrectlength'] = '二進制字段的長度不正確';
$string['cannotuseidfield'] = '不能插入“id”字段。它是自動編號的列';
$string['change'] = '更改';
$string['charincorrectlength'] = '字符字段的不正確長度';
$string['checkbigints'] = '檢查bigint類型數據';
$string['check_bigints'] = '查詢不正確 DB 整數';
$string['checkdefaults'] = '檢查默認值';
$string['check_defaults'] = '查找不一致的默認值';
$string['checkforeignkeys'] = '檢查外鍵';
$string['check_foreign_keys'] = '搜索無效的外鍵';
$string['checkindexes'] = '檢查索引';
$string['check_indexes'] = '查找缺失的數據庫索引';
$string['completelogbelow'] = '查看下面的完整日志';
$string['confirmcheckbigints'] = '本功能將在您的Moodle服務器搜索<a href="http://tracker.moodle.org/browse/MDL-11038">潛在的整數字段錯誤</a>，自動生成（而不是執行！）正確定義您數據庫中的整數的SQL語句。<br /><br />
您可以拷貝這些語句到您慣用的SQL界面中安全地執行（不要忘記在此之前備份您的數據）。<br /><br />
在搜索之前，強烈建議使用您的Moodle發行版（1.8、1.9、2.x……）的最新版（帶+的版本）。<br /><br />
此功能不會對數據庫做任何寫操作（只是讀取），所以任何時候運行它都是安全的。';
$string['confirmcheckdefaults'] = '本功能將在您Moodle服務器上搜索不一致的默認值，自動生成（而不是執行！）設置正確默認值的SQL語句。<br /><br />
您可以拷貝這些語句到您慣用的SQL界面中安全地執行（不要忘記在此之前備份您的數據）。<br /><br />
在搜索之前，強烈建議使用您的Moodle發行版（1.8、1.9、2.x……）的最新版（帶+的版本）。<br /><br />
此功能不會對數據庫做任何寫操作（只是讀取），所以任何時候運行它都是安全的。';
$string['confirmcheckforeignkeys'] = '本功能會掃描install.xml中定義的外鍵，尋找潛在的問題。（Moodle目前並不在數據庫中生成實際的外鍵限制，這就導致可能有無效的數據。）<br /><br />
在搜索之前，強烈建議使用您的Moodle發行版（1.8、1.9、2.x……）的最新版（帶+的版本）。<br /><br />
此功能不會對數據庫做任何寫操作（只是讀取），所以任何時候運行它都是安全的。';
$string['confirmcheckindexes'] = '本功能將查找您Moodle服務器上潛在的缺失索引，自動生成（而不是執行！）修復這些問題的SQL語句。<br /><br />
您可以拷貝這些語句到您慣用的SQL界面中安全地執行（不要忘記在此之前備份您的數據）。<br /><br />
在查找之前，強烈建議使用您的Moodle發行版（1.8、1.9、2.x……）的最新版（帶+的版本）。<br /><br />
此功能不會對數據庫做任何寫操作（只是讀取），所以任何時候運行它都是安全的。';
$string['confirmdeletefield'] = '您是否非常確信要刪除此字段：';
$string['confirmdeleteindex'] = '您是否非常確信要刪除此索引：';
$string['confirmdeletekey'] = '您是否非常確信要刪除此鍵值：';
$string['confirmdeletetable'] = '您是否非常確信要刪除此表：';
$string['confirmdeletexmlfile'] = '您是否非常確信要刪除此文件：';
$string['confirmrevertchanges'] = '您是否非常確信要恢復對此所做的改變：';
$string['create'] = '創建';
$string['createtable'] = '創建表：';
$string['defaultincorrect'] = '不正確的缺省值';
$string['delete'] = '刪除';
$string['delete_field'] = '刪除字段';
$string['delete_index'] = '刪除索引';
$string['delete_key'] = '刪除鍵值';
$string['delete_table'] = '刪除表';
$string['delete_xml_file'] = '刪除 XML 文件';
$string['doc'] = '文檔';
$string['docindex'] = '文檔索引：';
$string['documentationintro'] = '本文檔從XMLDB數據庫定義中直接生成。它只有英文版。';
$string['down'] = '向下';
$string['duplicate'] = '復制';
$string['duplicatefieldname'] = '已存在一個同名的字段';
$string['duplicatefieldsused'] = '使用了重復的字段';
$string['duplicatekeyname'] = '有同名鍵值已經存在';
$string['duplicatetablename'] = '已經有同名的表';
$string['edit'] = '編輯';
$string['edit_field'] = '編輯字段';
$string['edit_field_save'] = '保存字段';
$string['edit_index'] = '編輯索引';
$string['edit_index_save'] = '保存索引';
$string['edit_key'] = '編輯鍵值';
$string['edit_key_save'] = '保存鍵值';
$string['edit_table'] = '編輯表';
$string['edit_table_save'] = '保存表';
$string['edit_xml_file'] = '編輯 XML 文件';
$string['enumvaluesincorrect'] = '枚舉字段中不正確的值';
$string['expected'] = '預期';
$string['extensionrequired'] = '抱歉 - 此動作需要調用PHP擴展“{$a}”。如果您要使用此特性，請安裝此擴展。';
$string['field'] = '字段';
$string['fieldnameempty'] = '字段名為空';
$string['fields'] = '字段';
$string['fieldsnotintable'] = '字段在表中不存在';
$string['fieldsusedinindex'] = '此字段被用做索引';
$string['fieldsusedinkey'] = '此字段被用作主鍵。';
$string['filenotwriteable'] = '文件不可寫';
$string['fkviolationdetails'] = '表{$a->tablename}的{$a->numrows}行數據中，有{$a->numviolations}行的外鍵{$a->keyname}是無效的。';
$string['float2numbernote'] = '注意：雖然XMLDB完全支持“float”字段，但仍建議用“number”字段代替它。';
$string['floatincorrectdecimals'] = '浮點字段的小數位數不正確';
$string['floatincorrectlength'] = '浮點字段的長度不正確';
$string['generate_all_documentation'] = '所有文檔';
$string['generate_documentation'] = '文檔';
$string['gotolastused'] = '定位到上次使用的文件';
$string['incorrectfieldname'] = '不正確的名字';
$string['incorrectkeyname'] = '鍵名有錯';
$string['incorrecttablename'] = '表名不正確';
$string['index'] = '索引';
$string['indexes'] = '索引';
$string['integerincorrectlength'] = '整數字段的長度不正確';
$string['key'] = '鍵值';
$string['keynameempty'] = '鍵名不可為空';
$string['keys'] = '鍵值';
$string['listreservedwords'] = '保留字列表<br/>（用來保持 <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB 保留字</a>的更新)';
$string['load'] = '載入';
$string['main_view'] = '主視圖';
$string['masterprimaryuniqueordernomatch'] = '您的外鍵中的所有字段的定義順序，都必須與它們在對應的表中的 UNIQUE KEY 中的定義順序相同。';
$string['missing'] = '缺失';
$string['missingindexes'] = '發現缺失的索引';
$string['mustselectonefield'] = '您必須選擇一個字段來查看與字段相關的動作！';
$string['mustselectoneindex'] = '您必須選擇一個索引來查看與索引相關的動作！';
$string['mustselectonekey'] = '您必須選擇一個鍵值來查看與鍵值相關的動作！';
$string['mysqlextracheckbigints'] = '如使用 MySQL 數據庫，它還將查找不正確的大整數標記。';
$string['newfield'] = '新建字段';
$string['newindex'] = '新建索引';
$string['newkey'] = '新建鍵值';
$string['newtable'] = '創建新表';
$string['newtablefrommysql'] = '從 MySQL 建新表';
$string['new_table_from_mysql'] = '從 MySQL 建新表';
$string['nofieldsspecified'] = '未指定任何字段';
$string['nomasterprimaryuniquefound'] = '您的外鍵對應的字段必須是對應表中的主鍵或唯一鍵。注意，字段只是 UNIQUE INDEX 是不夠的。';
$string['nomissingindexesfound'] = '沒有發現缺失的索引，您的數據庫不需要做任何操作。';
$string['noreffieldsspecified'] = '為指定任何對應字段';
$string['noreftablespecified'] = '未找到對應字段';
$string['noviolatedforeignkeysfound'] = '未發現無效的外鍵';
$string['nowrongdefaultsfound'] = '沒有發現不一致的默認值。';
$string['nowrongintsfound'] = '沒發現整數錯誤。';
$string['numberincorrectdecimals'] = '數字字段的小數位數不正確';
$string['numberincorrectlength'] = '數字字段的長度不正確';
$string['pendingchanges'] = '注意：您已經修改了此文件。它隨時都可能被保存。';
$string['pendingchangescannotbesaved'] = '此文件有修改，但不能保存！請確認Web服務器對目錄和它裡面的install.xml文件都有寫權限。';
$string['pendingchangescannotbesavedreload'] = '此文件有修改，但不能保存！請確認Web服務器對目錄和它裡面的install.xml文件都有寫權限。然後重新加載此頁，您就能保存這些變化了。';
$string['primarykeyonlyallownotnullfields'] = '主鍵不能為 null';
$string['reserved'] = '保留';
$string['reservedwords'] = '保留字';
$string['revert'] = '恢復';
$string['revert_changes'] = '恢復變化';
$string['save'] = '保存';
$string['searchresults'] = '查找結果';
$string['selectaction'] = '選擇動作：';
$string['selectdb'] = '選擇數據庫：';
$string['selectfieldkeyindex'] = '選擇字段/主鍵/索引：';
$string['selectonecommand'] = '為了查看 PHP 代碼，請在列表中選擇一個動作';
$string['selectonefieldkeyindex'] = '為了查看 PHP 代碼，請在列表中選擇一個字段/主鍵/索引';
$string['selecttable'] = '選擇表：';
$string['table'] = '表';
$string['tablenameempty'] = '表名不可為空';
$string['tables'] = '表';
$string['textincorrectlength'] = '文本字段的長度不正確';
$string['unload'] = '卸載';
$string['up'] = '向上';
$string['view'] = '查看';
$string['viewedited'] = '查看編輯過的';
$string['vieworiginal'] = '查看原始代碼';
$string['viewphpcode'] = '查看 PHP 代碼';
$string['view_reserved_words'] = '查看保留字';
$string['viewsqlcode'] = '查看 SQL 代碼';
$string['view_structure_php'] = '查看結構化 PHP';
$string['view_structure_sql'] = '查看結構化 SQL';
$string['view_table_php'] = '查看表 PHP';
$string['view_table_sql'] = '查看表 SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = '無效的外鍵';
$string['violatedforeignkeysfound'] = '發現無效的外鍵';
$string['violations'] = '違例';
$string['wrong'] = '錯誤';
$string['wrongdefaults'] = '錯誤的默認值';
$string['wrongints'] = '錯誤的整型數';
$string['wronglengthforenum'] = '枚舉字段的長度不正確';
$string['wrongnumberofreffields'] = '對應字段個數有誤';
$string['wrongreservedwords'] = '當前使用的保留字<br />（表名如果使用{$CFG->prefix}，就不用留意這個問題）';
$string['yesmissingindexesfound'] = '在數據庫中發現了缺失的索引。以下是詳細，需要執行 SQL 命令來修正(注意先備份)。<br /><br />我們強烈建議您在修改完成後，重新用此工具進行檢查以確認再沒有缺失的索引。';
$string['yeswrongdefaultsfound'] = '在數據庫中已經發現了不一致的默認值。以下是詳細資料，需要執行 SQL 命令來修正(注意先備份)。<br /><br />我們強烈建議您在修改完成後，重新用此工具進行檢查以確認沒有其它錯誤。';
$string['yeswrongintsfound'] = '在數據庫中已經發現了整形錯誤。以下是詳細資料，需要執行 SQL 命令來修正(注意先備份)。<br /><br />我們強烈建議您在修改完成後，重新用此工具進行檢查以確認沒有其它錯誤。';
