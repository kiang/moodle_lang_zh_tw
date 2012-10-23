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
 * Strings for component 'feedback', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = '新增問題到回饋單中';
$string['add_items'] = '新增問題到回饋單中';
$string['add_pagebreak'] = '新增一個分頁';
$string['adjustment'] = '調整';
$string['after_submit'] = '輸入後語';
$string['allowfullanonymous'] = '允許全匿名';
$string['analysis'] = '分析回饋單';
$string['anonymous'] = '匿名';
$string['anonymous_edit'] = '記錄使用者名稱';
$string['anonymous_entries'] = '匿名輸入';
$string['anonymous_user'] = '匿名使用者';
$string['append_new_items'] = '附加新的項目';
$string['autonumbering'] = '每一個問題自動編號';
$string['autonumbering_help'] = '允許或禁止對每個問題自動編號';
$string['average'] = '平均數';
$string['bold'] = '粗體';
$string['cancel_moving'] = '取消移動';
$string['cannotmapfeedback'] = '資料庫問題，無法對應反饋到課程';
$string['cannotsavetempl'] = '不允許保存模板';
$string['cannotunmap'] = '資料庫問題，無法取消鏡像';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = '驗證碼未設置。';
$string['check'] = '選擇題 - 複選';
$string['checkbox'] = '選擇題 - 複選 (核取方塊)';
$string['check_values'] = '可能的回應';
$string['choosefile'] = '第一步:選擇檔案';
$string['chosen_feedback_response'] = '選擇回饋回應';
$string['completed'] = '完成';
$string['completed_feedbacks'] = '已回答';
$string['complete_the_form'] = '填寫回饋單...';
$string['completionsubmit'] = '提交反饋後顯示為已完成';
$string['configallowfullanonymous'] = '如果設為「是」，那麼不需要登錄就可以參與反饋活動。這個選項隻影響首頁的反饋。';
$string['confirmdeleteentry'] = '您確定要刪除使用者的回應嗎？';
$string['confirmdeleteitem'] = '您確定要刪除這個項目嗎？';
$string['confirmdeletetemplate'] = '您確定要刪除這個樣版嗎？';
$string['confirmusetemplate'] = '您確定要使用這個樣版嗎？';
$string['continue_the_form'] = '繼續表單';
$string['count_of_nums'] = '計數';
$string['courseid'] = '課程識別編號';
$string['creating_templates'] = '儲存這些問題在新的樣版中';
$string['delete_entry'] = '刪除';
$string['delete_item'] = '刪除問題';
$string['delete_old_items'] = '刪除舊有項目';
$string['delete_template'] = '刪除樣版';
$string['delete_templates'] = '刪除樣版...';
$string['depending'] = '依賴的問題';
$string['depending_help'] = '依賴性使問題的顯示取決於對其它問題的回答。<br />
<strong>這裡有一個使用例子：</strong>
<br />
<ul>
<li>首先建立一條其它問題要依賴的題。</li>
<li>然後新增一個分頁符。</li>
<li>接著新增一條依賴於上面那道題的題。<br />
在建立問題表單中的「依賴於問題」列表中選擇那道題，並將需要的值填入「依賴值」文字框中。</li>
</ul>
<strong>結構應該像下面這樣：</strong>
<ol>
<li>問題：您有汽車嗎？回答：有/沒有</li>
<li>分頁符</li>
<li>問題：您的車是什麼顏色的？<br />
（此題當問題1選擇「有」時才顯示）</li>
<li>問題：您為什麼沒有車？<br />
（此題當問題1選擇「沒有」時才顯示）</li>
<li> ……其它問題</li>
</ol>
就是這樣。祝您使用愉快！';
$string['dependitem'] = '依賴的問題';
$string['dependvalue'] = '依賴值';
$string['description'] = '前言';
$string['do_not_analyse_empty_submits'] = '不分析空提交';
$string['dropdown'] = '選擇題 - 單選 (下拉選單)';
$string['dropdownlist'] = '選擇題 - 單選 (下拉)';
$string['dropdownrated'] = '下拉選單 (評分)';
$string['dropdown_values'] = '回答';
$string['drop_feedback'] = '移除這個課程的表單';
$string['edit_item'] = '編輯問題';
$string['edit_items'] = '編輯問題...';
$string['emailnotification'] = 'email通知';
$string['email_notification'] = '電子郵件通知';
$string['emailnotification_help'] = '如果啟用，有反饋被提交後，管理員會收到email通知';
$string['emailteachermail'] = '{$a->username} 已完成回饋活動 : \'{$a->feedback} \'
您可以在這裡查看它: {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} 已完成回饋活動 :
<i>\'{$a}-feedback\'</i><br /><br />
您可以在 <a href="{$a->url}">這裡</a> 查看它.';
$string['entries_saved'] = '您的回答已經儲存， 感謝您。';
$string['export_questions'] = '匯出回饋單';
$string['export_to_excel'] = '匯出到Excel';
$string['feedbackclose'] = '回饋單關閉在';
$string['feedbackcloses'] = '回饋單關閉';
$string['feedback:complete'] = '完成回饋單';
$string['feedback:createprivatetemplate'] = '建立私人的樣版';
$string['feedback:createpublictemplate'] = '建立公用的樣版';
$string['feedback:deletesubmissions'] = '刪除完成的提交';
$string['feedback:deletetemplate'] = '刪除樣版';
$string['feedback:edititems'] = '編輯項目';
$string['feedback_is_not_for_anonymous'] = '此反饋不能匿名參加';
$string['feedback_is_not_open'] = '這個回饋單還沒有開啟';
$string['feedback:mapcourse'] = '向全球的回饋繪製課程地圖';
$string['feedbackopen'] = '開放回饋單在';
$string['feedbackopens'] = '開放回饋單';
$string['feedback_options'] = '回饋選項';
$string['feedback:receivemail'] = '收到電子郵件通知';
$string['feedback:view'] = '檢視一個回饋';
$string['feedback:viewanalysepage'] = '提交後查看分析頁面';
$string['feedback:viewreports'] = '檢視報告';
$string['file'] = '檔案';
$string['filter_by_course'] = '課程過濾器';
$string['handling_error'] = '回饋模組處理時發生錯誤';
$string['hide_no_select_option'] = '不顯示「未選擇」選項';
$string['horizontal'] = '水平';
$string['importfromthisfile'] = '第二步:確定';
$string['import_questions'] = '匯入回饋單';
$string['import_successfully'] = '匯入成功';
$string['info'] = '資訊';
$string['infotype'] = '資訊的類型';
$string['insufficient_responses'] = '問卷數不夠';
$string['insufficient_responses_for_this_group'] = '不充足的回應';
$string['insufficient_responses_help'] = '此小組的回答數量不足。

為了保證反饋的匿名性，至少需要兩個以上的回答。';
$string['item_label'] = '標籤';
$string['item_name'] = '問題';
$string['items_are_required'] = '必答.';
$string['label'] = '標籤';
$string['line_values'] = '評分';
$string['mapcourse'] = '課程地圖';
$string['mapcourse_help'] = '預設情況下，在您的主頁建立的反饋表全站可用，並且會在所有使用了反饋版塊的課程中出現。您可以把反饋表設成粘性版塊來強制它出現，或者通過將它對應到指定的課程來限制此反饋表出現的課程。';
$string['mapcourseinfo'] = '這是對所有課程使用回饋塊是可供使用的的一種sitewide回饋。你能然而限制它將透過繪製地圖他們出現的課程。搜尋課程並且向這種回饋繪製地圖它。';
$string['mapcoursenone'] = '沒有課程繪製地圖。對所有課程可供使用的回饋';
$string['mapcourses'] = '在課程中繪製回饋地圖';
$string['mapcourses_help'] = '如果您在搜索中選擇了相關的課程，您可以使用對應課程將它們與本反饋關聯。按住Apple或Ctrl鍵點擊課程名，可以選擇多個課程。任何時候都可以取消課程和反饋的關聯。';
$string['mappedcourses'] = '繪製地圖課程';
$string['max_args_exceeded'] = 'Max 6個爭論能被處理，贊成的太多的意見';
$string['maximal'] = '最大的';
$string['messageprovider:message'] = '反饋提醒';
$string['messageprovider:submission'] = '反饋通知';
$string['mode'] = '模式';
$string['modulename'] = '回饋單';
$string['modulename_help'] = '反饋模組可以建立自訂的問卷調查';
$string['modulenameplural'] = '回饋單';
$string['movedown_item'] = '向下移動這個問題';
$string['move_here'] = '移到這裡';
$string['move_item'] = '移動這個問題';
$string['moveup_item'] = '向上移動這個問題';
$string['multichoice'] = '選擇題';
$string['multichoicerated'] = '選擇題(評分)';
$string['multichoicetype'] = '選擇題的樣式';
$string['multichoice_values'] = '選擇題的選項';
$string['multiplesubmit'] = '多次提交';
$string['multiple_submit'] = '多重提交<br /><small>因為匿名的民意測驗允許無限擔保所有的使用者。<br/>對於使用者名稱被記錄的民意測驗允許使用者在那裡再提交回答。</small>';
$string['multiplesubmit_help'] = '如果對匿名調查也啟用，那麼使用者就可以無限次提交反饋。';
$string['name'] = '名稱';
$string['name_required'] = '要求輸入名稱';
$string['next_page'] = '下一頁';
$string['no_handler'] = '沒有行動管理者存在為了';
$string['no_itemlabel'] = '無標籤';
$string['no_itemname'] = '沒有項目名稱';
$string['no_items_available_yet'] = '沒有問題目前已被建立';
$string['non_anonymous'] = '使用者的名稱將被記錄和顯示回答';
$string['non_anonymous_entries'] = '具名輸入';
$string['non_respondents_students'] = '未答覆的學生';
$string['notavailable'] = '本反饋不可用';
$string['not_completed_yet'] = '目前未完成';
$string['no_templates_available_yet'] = '目前樣版不存在';
$string['not_selected'] = '點選適當的選項';
$string['not_started'] = '還未答題';
$string['numeric'] = '數字答案';
$string['numeric_range_from'] = '範圍從';
$string['numeric_range_to'] = '範圍到';
$string['of'] = '屬於';
$string['oldvaluespreserved'] = '儲存所有舊的問題和設定值';
$string['oldvalueswillbedeleted'] = '刪除目前的問題和所有使用者的回應';
$string['only_one_captcha_allowed'] = '反饋中只可以有一個驗證碼';
$string['overview'] = '概要';
$string['page'] = '頁';
$string['page_after_submit'] = '後語';
$string['pagebreak'] = '分頁';
$string['page-mod-feedback-x'] = '任意反饋模組頁';
$string['parameters_missing'] = '從遺失的參數';
$string['picture'] = '圖片';
$string['picture_file_list'] = '圖片清單';
$string['picture_values'] = '選擇一個或更多<br />來自清單的圖片檔案:';
$string['pluginadministration'] = '反饋管理';
$string['pluginname'] = '回饋單';
$string['position'] = '位置';
$string['preview'] = '預覽';
$string['preview_help'] = '在預覽中可以修改問題的順序。';
$string['previous_page'] = '上一頁';
$string['public'] = '公開樣版';
$string['question'] = '問題';
$string['questions'] = '問題';
$string['radio'] = '選擇題 - 單選';
$string['radiobutton'] = '選擇題 - 單選 (選項按鈕)';
$string['radiobutton_rated'] = '選項按鈕 (評分)';
$string['radiorated'] = '選項按鈕 (評分)';
$string['radio_values'] = '回應';
$string['ready_feedbacks'] = '準備好回饋';
$string['relateditemsdeleted'] = '刪除所有這個問題的所有使用者的回應';
$string['required'] = '必答';
$string['resetting_data'] = '重設回饋回應';
$string['resetting_feedbacks'] = '重新設定回饋';
$string['response_nr'] = '回應 Nr.';
$string['responses'] = '回應';
$string['responsetime'] = '回應的時間';
$string['save_as_new_item'] = '另存為新問題';
$string['save_as_new_template'] = '儲存';
$string['save_entries'] = '送出並結束';
$string['save_item'] = '儲存';
$string['saving_failed'] = '儲存失敗';
$string['saving_failed_because_missing_or_false_values'] = '儲存失敗因為遺失或者錯誤值';
$string['search_course'] = '搜尋課程';
$string['searchcourses'] = '搜索課程';
$string['searchcourses_help'] = '搜索您想和此反饋關聯的課程名稱或代碼';
$string['selected_dump'] = '選擇索引的 $SESSION 變數顯示下方:';
$string['send'] = '發送';
$string['send_message'] = '發送消息';
$string['separator_decimal'] = '.';
$string['separator_thousand'] = ',';
$string['show_all'] = '全部顯示';
$string['show_analysepage_after_submit'] = '提交後顯示分析頁';
$string['show_entries'] = '顯示回應';
$string['show_entry'] = '顯示回應';
$string['show_nonrespondents'] = '顯示未答覆者';
$string['site_after_submit'] = '完成後的網站';
$string['sort_by_course'] = '課程分類';
$string['start'] = '開始';
$string['started'] = '已經開始';
$string['stop'] = '結束';
$string['subject'] = '主題';
$string['switch_group'] = '交換群組';
$string['switch_item_to_not_required'] = '轉換到: 不要求回答';
$string['switch_item_to_required'] = '轉換到: 要求回答';
$string['template'] = '樣版';
$string['templates'] = '樣版';
$string['template_saved'] = '儲存樣版';
$string['textarea'] = '問答題';
$string['textarea_height'] = '行數';
$string['textarea_width'] = '寬度';
$string['textfield'] = '簡答題';
$string['textfield_maxlength'] = '最多輸入多少字元';
$string['textfield_size'] = '文字框的寬度';
$string['there_are_no_settings_for_recaptcha'] = '沒有captcha的設置';
$string['this_feedback_is_already_submitted'] = '您\'已經完成這種活動。';
$string['timeclose'] = '關閉時間';
$string['timeclose_help'] = '您可以指定什麼時間使用者可以開始答題。如果不勾選複選框，就沒有時間限制';
$string['timeopen'] = '開放時間';
$string['timeopen_help'] = '您可以指定什麼時間使用者可以開始答題。如果不勾選複選框，就沒有時間限制';
$string['typemissing'] = '缺少"type"值';
$string['update_item'] = '儲存';
$string['url_for_continue'] = '繼續按鈕的URL';
$string['url_for_continue_button'] = '繼續按鈕的URL';
$string['url_for_continue_help'] = '提交反饋後，繼續按鈕的目標預設是課程頁面。您可以在這裡定義另一個目標URL。';
$string['use_one_line_for_each_value'] = '<br />一行只能有一個選項!<br />（選項和選項之間要換行）';
$string['use_this_template'] = '確定';
$string['using_templates'] = '使用樣版';
$string['vertical'] = '垂直';
$string['viewcompleted'] = '已完成的反饋';
$string['viewcompleted_help'] = '您可以查看已完成的反饋表。可以通過課程或問題查詢。
對反饋的答覆可以匯出到Excel。';
