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
 * Strings for component 'forum', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   forum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = '新增一個討論主題';
$string['addanewquestion'] = '新增一個問題';
$string['addanewtopic'] = '新增一個主題';
$string['advancedsearch'] = '進階搜尋';
$string['allforums'] = '所有討論區';
$string['allowdiscussions'] = '設定學生張貼權限';
$string['allowsallsubscribe'] = '這個討論區允許每個人自由選擇要訂閱或是不要';
$string['allowsdiscussions'] = '本討論區允許每個人新增討論主題.';
$string['allsubscribe'] = '訂閱所有討論區';
$string['allunsubscribe'] = '取消所有討論區的訂閱';
$string['alreadyfirstpost'] = '這已經是本話題的第一帖';
$string['anyfile'] = '任何檔案';
$string['attachment'] = '附件';
$string['attachment_help'] = '您可以向一個帖子附加一個或多個文件。圖片附件會在正文後顯示。';
$string['attachmentnopost'] = '您不能匯出沒有帖子id的附件';
$string['attachments'] = '附件';
$string['blockafter'] = '執行阻擋的限定篇數';
$string['blockafter_help'] = '此項設置決定使用者在指定的時長內最多允許發幾個帖子。有mod/forum:postwithoutthrottling權限的使用者不受此限。';
$string['blockperiod'] = '限定的期間';
$string['blockperioddisabled'] = '不要阻擋';
$string['blockperiod_help'] = '學生如果在指定的時長內發了達到指定數量的帖子，會被阻止繼續發帖。有mod/forum:postwithoutthrottling權限的使用者不受此限。';
$string['blogforum'] = '部落格形式的標準討論區';
$string['bynameondate'] = '由{$a->name}發表於{$a->date}';
$string['cannotadd'] = '不能向此討論區新增此話題';
$string['cannotadddiscussion'] = '必須是群組成員才能參與這個討論區';
$string['cannotadddiscussionall'] = '您沒有權限新增討論主題給所有參與者。';
$string['cannotaddsubscriber'] = '不能向此討論區新增id為{$a}的訂閱人！';
$string['cannotaddteacherforumto'] = '不能在課程的第0節新增轉換過的教師討論區';
$string['cannotcreatediscussion'] = '不能建立新話題';
$string['cannotcreateinstanceforteacher'] = '不能建立新的教師討論區模組實例';
$string['cannotdeleteforummodule'] = '您不能刪除討論區模組。';
$string['cannotdeletepost'] = '您不能刪除此帖！';
$string['cannoteditposts'] = '您不能編輯他人的帖子！';
$string['cannotfinddiscussion'] = '本討論區中找不到這個話題';
$string['cannotfindfirstpost'] = '找不到討論區的第一個帖子';
$string['cannotfindorcreateforum'] = '無法找到或建立網站的主新聞討論區';
$string['cannotfindparentpost'] = '無法找到帖子{$a}的祖先';
$string['cannotmovefromsingleforum'] = '不能從單個話題討論區移動話題';
$string['cannotmovenotvisible'] = '討論區不可見';
$string['cannotmovetonotexist'] = '您不能移動到那個討論區 - 它不存在';
$string['cannotmovetonotfound'] = '課程中找不到目標討論區';
$string['cannotmovetosingleforum'] = '不能將話題移動到單個簡單話題討論區';
$string['cannotpurgecachedrss'] = '無法清理目標或源討論區的RSS來源緩存 - 檢查您的文件permissionsforums';
$string['cannotremovesubscriber'] = '不能從此討論區刪除id為{$a}的訂閱人！';
$string['cannotreply'] = '您不能回復此帖';
$string['cannotsplit'] = '此討論區的話題不能被分割';
$string['cannotsubscribe'] = '抱歉，您必須是小組成員才能訂閱。';
$string['cannottrack'] = '無法停止對該討論區的跟蹤';
$string['cannotunsubscribe'] = '不能取消您對該討論區的訂閱';
$string['cannotupdatepost'] = '您不能更新這個帖子';
$string['cannotviewpostyet'] = '因為您還未張貼發表過，所以不能讀取其他學生張貼於這討論區的問題。';
$string['cannotviewusersposts'] = '您能查看的帖子里沒有此使用者發表的。';
$string['cleanreadtime'] = '以閱讀完的時數為標準標記舊文章';
$string['completiondiscussions'] = '學生必須開啟話題：';
$string['completiondiscussionsgroup'] = '必須開話題';
$string['completiondiscussionshelp'] = '開新話題後才算完成';
$string['completionposts'] = '學生必須發布話題或回帖：';
$string['completionpostsgroup'] = '必須發帖';
$string['completionpostshelp'] = '開新話題或回帖後才算完成';
$string['completionreplies'] = '學生必須回帖：';
$string['completionrepliesgroup'] = '必須回帖';
$string['completionreplieshelp'] = '回帖後才算完成';
$string['configcleanreadtime'] = '設定時間清除\'已閱讀\'的舊文章';
$string['configdigestmailtime'] = '系統每天會給那些希望以文摘形式接受郵件的人發送文摘。這個選項控制著每日發送文摘郵件的時間(下一個在此時間後運行的cron程序將會發出這些信件)。';
$string['configdisplaymode'] = '若未選擇顯示，將採用預設的顯示模式';
$string['configenablerssfeeds'] = '這個功能可以設定討論區的RSS連結功能,您只要在每個討論區設定中把它打開';
$string['configenabletimedposts'] = '如果您想允許張貼新的討論時可以設定顯示期間，請設為 \'是\'。(實驗功能，尚未完全測試)';
$string['configlongpost'] = '任何的發表文章超過這個長度，將被認定為太長';
$string['configmanydiscussions'] = '每頁最大顯示文章筆數';
$string['configmaxattachments'] = '每個帖子預設允許的最大附件數。';
$string['configmaxbytes'] = '預設的最大附件檔案容量大小';
$string['configoldpostdays'] = '在這些天數之後的文章會被視為已閱讀';
$string['configreplytouser'] = '當討論區的文章寄出後,要不要包含張貼者的電子郵件信箱,這樣收件人可以私下回信,不必透過討論區,如果設為"是",使用者依舊可以在他們的個人設定中將他們的電子郵件設為隱藏';
$string['configshortpost'] = '任何的文章發表小於這個長度，將被認為過短，有灌水之嫌';
$string['configtrackreadposts'] = '如果您想要提供每個使用者追蹤已閱讀或未閱讀,請設定.';
$string['configusermarksread'] = '如果設為\'是\',使用者必須手動將讀過的文章標記為已讀,如果設為\'否\',被讀過的文章將會自動標記為己讀.';
$string['confirmsubscribe'] = '您確定要訂閱討論區「{$a}」嗎？';
$string['confirmunsubscribe'] = '您確定要取消訂閱討論區「{$a}」嗎？';
$string['couldnotadd'] = '由於不明錯誤, 無法張貼您的討論內容';
$string['couldnotdeletereplies'] = '抱歉, 本討論主題已經有人回應, 故無法刪除';
$string['couldnotupdate'] = '由於不明錯誤,無法更新您的張貼';
$string['delete'] = '刪除';
$string['deleteddiscussion'] = '這個討論主題已被刪除';
$string['deletedpost'] = '這個張貼內容已被刪除';
$string['deletedposts'] = '這些張貼內容已刪除';
$string['deletesure'] = '確定要刪除這篇嗎?';
$string['deletesureplural'] = '您確定要刪除本篇文章和回應嗎?({$a}篇張貼)';
$string['digestmailheader'] = '這是每天{$a->sitename}網站討論區的新討論摘要。要變更您的討論區設定，請到{$a->userprefs}。';
$string['digestmailprefs'] = '您的個人資料';
$string['digestmailsubject'] = '{$a} : 論壇摘要';
$string['digestmailtime'] = '寄送摘要郵件頻率（小時）';
$string['digestsentusers'] = '電子郵件摘要成功寄給{$a} 個使用者';
$string['disallowsubscribe'] = '不允許訂閱';
$string['disallowsubscribeteacher'] = '不允許訂閱(老師除外)';
$string['discussion'] = '討論';
$string['discussionmoved'] = '這個討論區被移至 {$a}';
$string['discussionmovedpost'] = '此話題已經移到</a>討論區<a href="{$a->forumhref}">{$a->forumname}</a>中<a href="{$a->discusshref}">這裡了';
$string['discussionname'] = '討論區名稱';
$string['discussions'] = '討論';
$string['discussionsstartedby'] = '本討論由{$a} 發起';
$string['discussionsstartedbyrecent'] = '最近的討論由{$a}所發起';
$string['discussionsstartedbyuserincourse'] = '{$a->fullname}在{$a->coursename}中發起的話題';
$string['discussthistopic'] = '討論本主題';
$string['displayend'] = '顯示的結束時間';
$string['displayend_help'] = '<p align="center"><b>討論區顯示時期</b></p>

<p>可以選擇是否將討論區帖子在一定的時間顯示。</p>

<p>啟用選項後可以選擇開始和結束的日期。</p>

<p>注意：管理員使用者可以看到所有帖子，無論是在開始前還是過期後。</p>
<span style="font-weight: bold;">翻譯者：況亮</span><br style="font-weight: bold;" /><span style="font-weight: bold;">Email：kuangliang12345@163.com</span><br style="font-weight: bold;" /><span style="font-weight: bold;">翻譯日期：2007年3月4日</span><br />';
$string['displaymode'] = '顯示模式';
$string['displayperiod'] = '顯示的期間';
$string['displaystart'] = '顯示的開始時間';
$string['displaystart_help'] = '<p align="center"><b>討論區顯示時期</b></p>

<p>可以選擇是否將討論區帖子在一定的時間顯示。</p>

<p>啟用選項後可以選擇開始和結束的日期。</p>

<p>注意：管理員使用者可以看到所有帖子，無論是在開始前還是過期後。</p>
<span style="font-weight: bold;">翻譯者：況亮</span><br style="font-weight: bold;" /><span style="font-weight: bold;">Email：kuangliang12345@163.com</span><br style="font-weight: bold;" /><span style="font-weight: bold;">翻譯日期：2007年3月4日</span><br />';
$string['eachuserforum'] = '每人僅限發表一主題';
$string['edit'] = '編輯';
$string['editedby'] = '編修者: {$a->name}-原發表於{$a->date}';
$string['editing'] = '編輯中';
$string['emptymessage'] = '留言內容有誤.  若非空白便是附件檔案過大.  您的修改並未被儲存(更新).';
$string['erroremptymessage'] = '帖子正文不能為空';
$string['erroremptysubject'] = '帖子標題不能為空。';
$string['errorenrolmentrequired'] = '您必須先選修此課才能訪問此內容';
$string['errorwhiledelete'] = '刪除記錄時發生錯誤。';
$string['everyonecanchoose'] = '每個人可選擇是否要訂閱';
$string['everyonecannowchoose'] = '現在每個人可選擇是否要訂閱';
$string['everyoneisnowsubscribed'] = '現在每個人都訂閱了這個討論區';
$string['everyoneissubscribed'] = '每人都被設定訂閱本討論區';
$string['existingsubscribers'] = '目前的訂閱者';
$string['exportdiscussion'] = '匯出整個話題';
$string['forcessubscribe'] = '這個討論區強迫每個人都訂閱';
$string['forum'] = '討論區';
$string['forum:addnews'] = '新增消息';
$string['forumauthorhidden'] = '作者(隱藏)';
$string['forumblockingalmosttoomanyposts'] = '您快到達張貼的篇數限制，在過去 {$a->blockperiod}期限內，您已經張貼了{$a->numposts}篇，而上限為{$a->blockafter}篇。';
$string['forumbodyhidden'] = '也許因為您尚未在這討論區張貼發表，所以這篇您不能看。';
$string['forum:createattachment'] = '建立附加檔案';
$string['forum:deleteanypost'] = '刪除任何文章（任何時間）';
$string['forum:deleteownpost'] = '刪除自己的文章（在截止時間之內）';
$string['forum:editanypost'] = '編輯任何文章';
$string['forum:exportdiscussion'] = '匯出整個話題';
$string['forum:exportownpost'] = '匯出自己的帖子';
$string['forum:exportpost'] = '匯出帖子';
$string['forum:initialsubscriptions'] = '初始訂閱';
$string['forumintro'] = '討論區簡介';
$string['forum:managesubscriptions'] = '管理訂閱';
$string['forum:movediscussions'] = '移動文章';
$string['forumname'] = '討論區名稱';
$string['forumposts'] = '討論區文章';
$string['forum:postwithoutthrottling'] = '不受發帖閾值限制';
$string['forum:rate'] = '文章評分';
$string['forum:replynews'] = '回覆到新聞';
$string['forum:replypost'] = '回覆到討論';
$string['forums'] = '討論區';
$string['forum:splitdiscussions'] = '分割主題';
$string['forum:startdiscussion'] = '開始新主題';
$string['forumsubjecthidden'] = '主題(隱藏)';
$string['forum:throttlingapplies'] = '調節申請';
$string['forumtracked'] = '追蹤未閱讀文章';
$string['forumtrackednot'] = '不追蹤未閱讀文章';
$string['forumtype'] = '討論區型態';
$string['forumtype_help'] = '　　<p align="center"><b>討論區類型</b></p>
　　
　　<p>有幾種不同類型的討論區供選擇：</p>
　　
　　<p><b>單個簡單話題</b> - 一個簡單的話題，全部在一頁上。對於簡短、集中的討論很有用處。</p>
　　
　　<p><b>一般用途的標準討論區</b> - 一個開放的討論區，任何人都可以隨時開始一個新的話題。這是最好的通用討論區。</p>
　　
　　<p><b>每個人發表一個話題</b> - 每個人都可以發表一個帖子(其他人可以發表回復)。當您希望每個人都能夠發表一個話題，如談談他們自己的想法同時允許其他人回復時，這種方式比較有用。</p>
　　
　　<p>(在未來版本中會有更多功能。)</p>
　　';
$string['forum:viewallratings'] = '查看所有由個人給出的原始評分';
$string['forum:viewanyrating'] = '檢視任何的評比';
$string['forum:viewdiscussion'] = '檢視討論';
$string['forum:viewhiddentimedposts'] = '檢視隱藏的定時張貼';
$string['forum:viewqandawithoutposting'] = '始終可看問題和回答的內容';
$string['forum:viewrating'] = '檢視評比';
$string['forum:viewsubscribers'] = '檢視訂閱者';
$string['generalforum'] = '一般用途的標準討論區';
$string['generalforums'] = '一般型討論區';
$string['inforum'] = '在{$a} 裡';
$string['introblog'] = '本討論區的帖子自動拷貝自課程的部落格使用者。那些部落格將不能再使用。';
$string['intronews'] = '一般消息與公告';
$string['introsocial'] = '一個開放可隨意聊聊的討論區';
$string['introteacher'] = '僅限教師可參與討論區';
$string['invalidaccess'] = '本頁面沒有被正確訪問';
$string['invaliddiscussionid'] = '話題ID不正確或不再存在';
$string['invalidforcesubscribe'] = '無效的強制訂閱模式';
$string['invalidforumid'] = '討論區ID錯誤';
$string['invalidparentpostid'] = '父帖子的ID錯誤';
$string['invalidpostid'] = '無效的帖子ID - {$a}';
$string['lastpost'] = '最新文章';
$string['learningforums'] = '學習型討論區';
$string['longpost'] = '長篇文章';
$string['mailnow'] = '立刻寄給訂閱者';
$string['manydiscussions'] = '每頁的討論話題數';
$string['markalldread'] = '將此討論的所有文章標示為己閱讀';
$string['markallread'] = '將此討論區的所有所有文章標示為已閱讀';
$string['markread'] = '標示為已閱讀';
$string['markreadbutton'] = '標示為<br />已閱讀';
$string['markunread'] = '標示為未閱讀';
$string['markunreadbutton'] = '標示為<br />未閱讀';
$string['maxattachments'] = '附件個數上限';
$string['maxattachments_help'] = '此項設置決定了一個帖子可以擁有的最大附件數。';
$string['maxattachmentsize'] = '最大附件大小';
$string['maxattachmentsize_help'] = '　　<p align="center"><b>最大附件尺寸</b></p>
　　
　　<p>附件的檔尺寸是可以限制的，建立討論區的人可以設置它。</p>
　　
　　<p>有時，您可以提交一個比這個尺寸大的檔，但這個檔不會被保存下來，且您會看到一個錯誤資訊。</p>
　　';
$string['maxtimehaspassed'] = '抱歉, 超過可編輯本篇內容({$a})的時限!';
$string['message'] = '訊息';
$string['messageprovider:digests'] = '訂閱討論區摘要';
$string['messageprovider:posts'] = '訂閱的討論區帖子';
$string['missingsearchterms'] = '下面的搜尋字串將只對應此訊息中的HTML標示語言.';
$string['modeflatnewestfirst'] = '表列回應內容, 最新張貼在前';
$string['modeflatoldestfirst'] = '表列回應內容, 早先張貼在前';
$string['modenested'] = '回應訊息將往右縮排';
$string['modethreaded'] = '回應訊息以樹狀結構呈現';
$string['modulename'] = '討論區';
$string['modulename_help'] = '<p><img alt="" src="<?php echo $CFG->wwwroot?>/mod/forum/icon.gif" />&nbsp;<b>討論區</b></p>
<div class="indent">
<p>這個活動非常重要——在這裡進行著大多數的討論活動。討論區可以按照多種不同的方式加以組織，
還可以對每個貼文進行相互評等。貼文可以用多種不同的格式瀏覽，也可以包含附件。</p>
<p>訂閱一個討論區後，訂閱者可以透過電子郵件接受到每一個新的貼文。教師也可以為某課程的所有學生訂閱討論區。</p>
</div>
　　';
$string['modulenameplural'] = '討論區';
$string['more'] = '還有';
$string['movedmarker'] = '（移動）';
$string['movethisdiscussionto'] = '搬移這個討論主題至 ...';
$string['mustprovidediscussionorpost'] = '匯出時，您必須提供一個話題id或帖子id';
$string['namenews'] = '公佈欄';
$string['namenews_help'] = '新聞討論區，是一個用來發布消息的特別討論區，在課程建立時會被自動建立。每門課程只能有一個新聞討論區。只有教師和管理員可以在新聞討論區發帖。「最近新聞」版塊會顯示新聞討論區最近的討論。';
$string['namesocial'] = '公開討論區';
$string['nameteacher'] = '教師專屬討論區';
$string['newforumposts'] = '討論區最新張貼';
$string['noattachments'] = '此帖沒有附件';
$string['nodiscussions'] = '本討論區尚未有任何討論主題';
$string['nodiscussionsstartedby'] = '這個使用者沒有發起討論主題';
$string['nodiscussionsstartedbyyou'] = '您還沒有發起任何話題';
$string['noguestpost'] = '抱歉, 訪客身分無法留言';
$string['noguesttracking'] = '抱歉,訪客不能設定追蹤選項';
$string['nomorepostscontaining'] = '沒有搜尋到包含"{$a}"的文章';
$string['nonews'] = '目前沒有新發表的內容';
$string['noonecansubscribenow'] = '現在開始禁止訂閱';
$string['nopermissiontosubscribe'] = '您沒有查看討論區訂閱者的權限';
$string['nopermissiontoview'] = '您沒有查看此帖子的權限';
$string['nopostforum'] = '抱歉，您未被允許在此討論區發表文章。';
$string['noposts'] = '沒有任何發表';
$string['nopostscontaining'] = '找不到包含"{$a}"的發表';
$string['nopostsmadebyuser'] = '{$a}沒有發過貼';
$string['nopostsmadebyyou'] = '您還沒發過任何帖子';
$string['noquestions'] = '這個討論區目前沒有張貼問題';
$string['nosubscribers'] = '尚未有人訂閱本討論區';
$string['notexists'] = '話題已不存在';
$string['nothingnew'] = '{$a}中沒有新的內容';
$string['notingroup'] = '抱歉，您必需是這個群組的成員才可看這個討論區';
$string['notinstalled'] = '討論區模組沒有被安裝';
$string['notpartofdiscussion'] = '此帖不是話題的一部分';
$string['notrackforum'] = '不要追蹤未閱讀的訊息';
$string['noviewdiscussionspermission'] = '您沒有權限檢視這個討論區的內容';
$string['nowallsubscribed'] = '所有{$a}中的討論區都已經訂閱';
$string['nowallunsubscribed'] = '所有{$a}中的討論區都沒有訂閱';
$string['nownotsubscribed'] = '{$a->name}將<B>不會</B>收到{$a->forum}張貼內容的電子郵件。';
$string['nownottracking'] = '{$a->name}不再追蹤"{$a->forum}"論壇。';
$string['nowsubscribed'] = '{$a->name}將<B>會</B>收到{$a->forum}張貼內容的電子郵件。';
$string['nowtracking'] = '{$a->name}正追蹤"{$a->forum}"中.。';
$string['numposts'] = '{$a}則張貼';
$string['olderdiscussions'] = '過期討論';
$string['oldertopics'] = '過期的主題';
$string['oldpostdays'] = '多少天後可以閱讀';
$string['openmode0'] = '不能新增主題或回應留言';
$string['openmode1'] = '不能新增主題, 但可以回應留言';
$string['openmode2'] = '允許新增主題或回應留言';
$string['overviewnumpostssince'] = '自從上次登入後篇數';
$string['overviewnumunread'] = '總共未讀篇數';
$string['page-mod-forum-discuss'] = '討論區模組話題頁';
$string['page-mod-forum-view'] = '討論區模組主頁';
$string['page-mod-forum-x'] = '任意討論區模組頁面';
$string['parent'] = '顯示上層文章';
$string['parentofthispost'] = '本留言回應的上一篇討論';
$string['pluginadministration'] = '討論區管理';
$string['pluginname'] = '討論區';
$string['postadded'] = '您張貼的內容已經成功地加入討論區.<P>您有 {$a}可以做任何的修改.';
$string['postaddedsuccess'] = '您的文章已經發表成功';
$string['postaddedtimeleft'] = '如果想再變更內容，您有{$a}的時間可以再編輯它。';
$string['postincontext'] = '檢視本留言內容';
$string['postmailinfo'] = '這是張貼在{$a}網站的一篇發表內容。請按以下連結以便可以在網站上回應。';
$string['postmailnow'] = '<p>您張貼的這篇內容將立刻寄出給所有的訂閱者.</p>';
$string['postrating1'] = '極端獨立型';
$string['postrating2'] = '折衷型';
$string['postrating3'] = '極端交流型';
$string['posts'] = '張貼';
$string['postsmadebyuser'] = '{$a}的帖子';
$string['postsmadebyuserincourse'] = '{$a->fullname}在{$a->coursename}中的帖子';
$string['posttoforum'] = '張貼到論壇中';
$string['postupdated'] = '已經更新您的留言';
$string['potentialsubscribers'] = '潛在的訂閱者';
$string['processingdigest'] = '正在為使用者{$a}處理郵件摘要';
$string['processingpost'] = '正在處理張貼{$a}';
$string['prune'] = '分割';
$string['prunedpost'] = '新討論已經建立';
$string['pruneheading'] = '分割討論區並且移動此文章到新討論區';
$string['qandaforum'] = 'Q & A 型討論區';
$string['qandanotify'] = '這是一個 問題與回答 型的討論區，為了看到這些問題的其他回應，您必須先張貼您的回答';
$string['re'] = '回應:';
$string['readtherest'] = '閱覽本區其他留言';
$string['replies'] = '回覆';
$string['repliesmany'] = '至今有 {$a} 篇回應';
$string['repliesone'] = '至今有 {$a} 篇回應';
$string['reply'] = '回應';
$string['replyforum'] = '回覆文章';
$string['replytouser'] = '使用電子郵件信箱回覆';
$string['resetforums'] = '移除這些討論區的所有張貼內容';
$string['resetforumsall'] = '刪除所有的張貼';
$string['resetsubscriptions'] = '移除訂閱資料';
$string['resettrackprefs'] = '刪除討論區中的所追蹤閱讀參數';
$string['rssarticles'] = 'RSS最近文章數';
$string['rssarticles_help'] = '　　<p align="center"><b>在RSS中包含的文章數目</b></p>
　　
　　<p>這個選項允許您設置在RSS來源中包含的文章數目。</p>
　　
　　<p>對於大多數討論區來說，5至20之間就可以了，如果您的討論區使用者真的很多，可以設大一些。</p>
　　';
$string['rsssubscriberssdiscussions'] = '顯示"{$a}"討論區中的RSS連結';
$string['rsssubscriberssposts'] = '顯示"{$a}"張貼的RSS連結';
$string['rsstype'] = '本活動的RSS來源';
$string['rsstype_help'] = '　　<p align="center"><b>討論區的RSS來源</b></p>
　　
　　<p>這個選項允許您開啟這個討論區的RSS來源。</p>
　　
　　<p>您可以選擇兩種類型：</p>
　　
　　<ul>
　　<li><b>話題：</b>在這種情況下，RSS來源中會包括新的話題。</li>
　　
　　<li><b>帖子：</b>在這種情況下，RSS來源中會包含每一篇新的帖子。</li>
　　</ul>
　　
　　';
$string['search'] = '搜尋';
$string['searchdatefrom'] = '張貼內容必須比這個新';
$string['searchdateto'] = '張貼內容必須比這個舊';
$string['searchforumintro'] = '請在下方一或多個欄位輸入搜尋字串';
$string['searchforums'] = '搜尋討論區';
$string['searchfullwords'] = '這些字要被視為一個完整的字句';
$string['searchnotwords'] = '不要包括這些字';
$string['searcholderposts'] = '搜尋文章';
$string['searchphrase'] = '字串要完全符合';
$string['searchresults'] = '搜尋結果';
$string['searchsubject'] = '這些字要出現在主旨中';
$string['searchuser'] = '這個名字要與作者符合';
$string['searchuserid'] = '作者的Moodle帳號';
$string['searchwhichforums'] = '請選擇要搜尋的討論區';
$string['searchwords'] = '這些文字可以在任何位置出現';
$string['seeallposts'] = '檢視這個使用者的所有張貼文章';
$string['shortpost'] = '簡短張貼';
$string['showsubscribers'] = '顯示訂閱者';
$string['singleforum'] = '單一簡單討論主題';
$string['smallmessage'] = '{$a->user}在{$a->forumname}發帖';
$string['startedby'] = '開始於';
$string['subject'] = '主題';
$string['subscribe'] = '訂閱本討論區';
$string['subscribeall'] = '全部訂閱本討論區';
$string['subscribed'] = '訂閱';
$string['subscribeenrolledonly'] = '抱歉，只有已選課使用者才能訂閱討論區帖子通知。';
$string['subscribenone'] = '取消所有人的訂閱';
$string['subscribers'] = '訂閱者';
$string['subscribersto'] = '訂閱"{$a}"者';
$string['subscribestart'] = '寄回討論區文章至我的電子郵件信箱';
$string['subscribestop'] = '我不想要將張貼內容的副本寄到電子郵件信箱';
$string['subscription'] = '訂閱';
$string['subscriptionauto'] = '自動訂閱';
$string['subscriptiondisabled'] = '禁止訂閱';
$string['subscriptionforced'] = '強制訂閱';
$string['subscription_help'] = '<p align="center"><b>Forum Subscription</b></p>

<p>When a person is subscribed to a forum it means that
they will be sent email copies of every post in that forum
(posts are sent about <?php echo $CFG->maxeditingtime/60 ?> minutes
after the post was first written).

<p>People can usually choose whether or not they want to be
subscribed to each forum.

<p>However, if a teacher forces subscription on a particular forum
then this choice is taken away and everyone in the class will get
email copies.

<p>This is especially useful in the News forum and in forums
towards the beginning of the course (before everyone has
worked out that they can subscribe to these emails themselves).';
$string['subscriptionmode'] = '訂閱模式';
$string['subscriptionmode_help'] = '　　<p align="center"><b>訂閱討論區</b></p>
　　
　　<p>當使用者訂閱了討論區時，他們會在電子郵箱中收到討論區中每一個新的帖子(帖子會在它第一次被發表之後的<?php echo $CFG->maxeditingtime/60 ?>分之後被發出。</p>
　　
　　<p>人們通常可以單獨選擇他們是否想要訂閱某一個論壇。</p>
　　
　　<p>當然，如果您設定了強制每一個使用者訂閱某討論區，則課程的所有使用者都會自動訂閱該l討論區，包括在您設定之後選課的那些人。</p>
　　
　　<p>這對於新聞討論區和課程剛剛開始的時候還是非常有效的(在所有人學會自己訂閱討論區之前。</p>
　　
　　<p>如果您選擇了「是的，開始」，則所有現在的和將來的課程使用者都會直接訂閱這個討論區，但他們可以隨時取消對討論區的訂閱。如果您選擇了「是的，永遠」，則他們不能取消對討論區的訂閱。</p>
　　
　　<p>需要注意「是的，開始」在您更新已有的討論區時會有什麼樣的效果：將「是的，開始」改為「否」，並不會讓已有使用者取消對討論區的訂閱，他只會影響後來參與課程的使用者。同樣，將其他設置改為「是的，開始」，也不會讓已經存在的課程使用者訂閱討論區，只有之後才參與的使用者才會訂閱。</p>
　　';
$string['subscriptionoptional'] = '可選訂閱';
$string['subscriptions'] = '訂閱';
$string['thisforumisthrottled'] = '這個討論區有一個張貼篇數的限制：在限定的期間內，限制張貼篇數。目前的設定為 {$a->blockperiod}期限內可張貼{$a->blockafter}篇。';
$string['timedposts'] = '定時張貼';
$string['timestartenderror'] = '結束時間不可能比開始時間早';
$string['trackforum'] = '追蹤未閱讀的訊息';
$string['tracking'] = '追蹤';
$string['trackingoff'] = '關閉';
$string['trackingon'] = '開啟';
$string['trackingoptional'] = '使用者自訂';
$string['trackingtype'] = '是否追蹤閱讀情況？';
$string['trackingtype_help'] = '<p align="center"><b>Forum Tracking Type</b></p>

<p>If \'read tracking\' for forums is enabled, users can
track read and unread messages in forums and discussions.
The instructor can choose to force a tracking type on
a forum using this setting.
</p>

<p>There are three choice for this setting:</p>
<ul>
<li> Optional [default]: students can turn tracking on or
off for the forum at their discretion.</li>
<li>On: Tracking is always on.</li>
<li>Off: Tracking is always off.</li>
</ul>';
$string['unread'] = '未閱讀';
$string['unreadposts'] = '未閱讀';
$string['unreadpostsnumber'] = '{$a}篇未閱讀';
$string['unreadpostsone'] = '1 篇未閱讀';
$string['unsubscribe'] = '取消訂閱 本討論區';
$string['unsubscribeall'] = '取消全部討論區的訂閱';
$string['unsubscribeallconfirm'] = '您目前訂閱了{$a}。您確認要取消所有討論區的訂閱，並禁止自動訂閱嗎？';
$string['unsubscribealldone'] = '已為您取消所有可選的訂閱，但仍能收到強制訂閱的通知。到「我的個人資料」設置中的消息頁面管理討論區通知。';
$string['unsubscribeallempty'] = '您沒有訂閱任何討論區。到「我的個人資料」設置中的消息頁面可以設置不接收本站的任何通知。';
$string['unsubscribed'] = '訂閱已取消';
$string['unsubscribeshort'] = '取消訂閱';
$string['usermarksread'] = '手動標記閱讀訊息';
$string['viewalldiscussions'] = '查看所有話題';
$string['warnafter'] = '顯示警告的限定篇數';
$string['warnafter_help'] = '當學生將達到某一時長內允許的最大發帖數時，會被警告。此項設置決定了發多少個帖子後會被警告。有mod/forum:postwithoutthrottling權限的使用者不受此限。';
$string['warnformorepost'] = '警告！此討論區有不只一個話題——正使用最新話題';
$string['yournewquestion'] = '您的新問題';
$string['yournewtopic'] = '您的新討論主題';
$string['yourreply'] = '您的回應內容';
