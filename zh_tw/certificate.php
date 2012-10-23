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
 * Strings for component 'certificate', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   certificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = '新增另一個鏈結的活動選項';
$string['addlinktitle'] = '擊點可新增另一個鏈結的活動選項';
$string['areaintro'] = '證書介紹';
$string['awarded'] = '榮獲';
$string['awardedto'] = '頒發給';
$string['back'] = '背面';
$string['border'] = '邊界';
$string['borderblack'] = '黑色';
$string['borderblue'] = '藍色';
$string['borderbrown'] = '棕色';
$string['bordercolor'] = '邊界線';
$string['bordercolor_help'] = '由於圖像會大幅增加 pdf 文件的大小，您可以選擇打印邊界線，而不是使用邊界圖像（確保邊界圖像選項設置為否）。邊界線選項將打印一個使用選中顏色的不同寬度的三條線的漂亮邊界。';
$string['bordergreen'] = '綠色';
$string['borderlines'] = '線';
$string['borderstyle'] = '邊界圖像';
$string['borderstyle_help'] = '邊界圖像選項允許您從 certificate/pix/borders 文件夾選擇一個邊界圖像。選擇證書邊緣您想要的圖像或選擇沒有邊框。';
$string['certificate'] = '證書驗證代碼：';
$string['certificate:manage'] = '管理證書';
$string['certificatename'] = '證書名稱';
$string['certificate:printteacher'] = '打印教師';
$string['certificatereport'] = '證書報告';
$string['certificatesfor'] = '證書';
$string['certificate:student'] = '獲取證書';
$string['certificatetype'] = '證書類型';
$string['certificatetype_help'] = '這是您確定證書布局的地方。證書類型文件夾包含了四種默認證書：
A4 嵌入式打印在 A4 大小的紙上，使用嵌入字體。
A4 非嵌入式打印在 A4 大小的紙上，不使用嵌入字體。
信件嵌入式打印在信件大小的紙上，使用嵌入字體。
信件非嵌入式打印在信件大小的紙上，不使用嵌入字體。

非嵌入類型使用 Helvetica 和 Times 字體。如果您擔心您的用戶的電腦上沒有這種字體，或者您的語言使用的字符或符號無法接受Helvetica 和 Times 字體，那麼選擇一種嵌入類型。嵌入類型使用 Dejavusans 和 Dejavuserif 字體。這會使得 PDF 文件變得相當大；因此不建議使用嵌入類型，除非您必須使用。

新類型文件夾可以添加到 certificate/type 文件夾裡。文件夾的名字和新類型使用的任何語言字符串必須添加到證書的語言文件裡。';
$string['certificate:view'] = '查看證書';
$string['certify'] = '這是為了驗證';
$string['code'] = '編碼';
$string['completiondate'] = '課程結業';
$string['course'] = '為了';
$string['coursegrade'] = '課程成績';
$string['coursename'] = '課程';
$string['credithours'] = '學分';
$string['customtext'] = '自定義文本';
$string['customtext_help'] = '如果您想讓證書打印除已經分配為教師以外的不同教師的名字，不要選擇打印教師或除線條圖像以外的任何簽名圖像。在文本框裡以您想要它們出現的形式輸入教師的名字。默認情況下，這個文本被放置在證書的左下角。以下 HTML 標簽可用： <br>，<p>，<b>，<i>，<u>，<img> （src 和 width（或 height）是強制性的），<a>（href 是強制性的），<font> （可能的屬性是：color，（hex color code）, face， (arial，times，courier，helvetica，symbol））。';
$string['date'] = '在';
$string['datefmt'] = '日期格式';
$string['datefmt_help'] = '選擇在證書上打印的日期的格式。或者選擇最後一項來按戶選擇的語言的日期格式來打印日期。';
$string['datehelp'] = '日期';
$string['deletissuedcertificates'] = '刪除頒發的證書';
$string['delivery'] = '交貨';
$string['delivery_help'] = '在這兒選擇您希望您的學生怎麼獲得他們的證書。
在瀏覽器中打開：在瀏覽器新窗口中打開證書。
強制下載：打開瀏覽器下載窗口。
電子郵寄證書：選擇此項來將證書作為電子郵件附件發送給學生。
在用戶收到證書後，如果他們在課程主頁上點擊證書鏈接，他們將看到他們獲得證書的日期並可以查看他們獲得的證書。';
$string['designoptions'] = '設計選項';
$string['download'] = '強制下載';
$string['emailcertificate'] = 'Email(必須也選擇儲存)';
$string['emailothers'] = 'Email給他人';
$string['emailothers_help'] = '在這兒輸入在學生獲得證書時需要收到電子郵件提醒的人的電子郵件地址，由逗號分開。';
$string['emailstudenttext'] = '附件是您在{$a->course}課程獲得的證書。';
$string['emailteachermail'] = '{$a->student} 已收到他們的證書:  {$a->course}的"<i>{$a->certificate}</i>"。


你可以在此檢視它:
{$a->url}。';
$string['emailteachermailhtml'] = '{$a->student} 已收到他們的證書:  {$a->course}的"<i>{$a->certificate}</i>"。


你可以在此檢視它:
 <a href="{$a->url}">證書報告</a>。';
$string['emailteachers'] = '用Email通知教師';
$string['emailteachers_help'] = '如果啟用，那麼當學生獲得證書時，老師會收到一封電子郵件提醒。';
$string['entercode'] = '輸入證書字號進行驗證：';
$string['getcertificate'] = '取得你的證書';
$string['grade'] = '成績';
$string['gradedate'] = '評分日期';
$string['gradefmt'] = '成績格式';
$string['gradefmt_help'] = '如果您選擇在證書上打印成績，有三種可用的格式：

百分比成績：以百分比形式打印成績。
分數成績：以分數值形式打印成績。
信件成績：以信件形式打印百分比成績。';
$string['gradeletter'] = '成績(文字等第)';
$string['gradepercent'] = '成績(百分比)';
$string['gradepoints'] = '成績(百分法分數)';
$string['incompletemessage'] = '要下載您的證書，您必須先完成所有要求完成的活動。請返回到課程並做完您的課程任務。';
$string['intro'] = '介紹';
$string['issued'] = '頒發';
$string['issueddate'] = '頒發日期';
$string['issueoptions'] = '頒發選項';
$string['landscape'] = '風景畫';
$string['lastviewed'] = '您最後得到此證書於：';
$string['letter'] = '信件';
$string['lockingoptions'] = '鎖定選項';
$string['modulename'] = '證書';
$string['modulenameplural'] = '證書';
$string['mycertificates'] = '我的證書';
$string['nocertificates'] = '這兒沒有證書';
$string['nocertificatesissued'] = '這兒沒有證書被頒發';
$string['nocertificatesreceived'] = '還沒收到任何課程的證書';
$string['nogrades'] = '無成績可用';
$string['notapplicable'] = '無法使用';
$string['notfound'] = '這證書字號無法被證實';
$string['notissued'] = '沒有頒發';
$string['notissuedyet'] = '還沒頒發';
$string['notreceived'] = '您還沒有得到此證書';
$string['openbrowser'] = '在新視窗開啟';
$string['opendownload'] = '點擊下面的按鈕把您的證書保存到您的計算機裡。';
$string['openemail'] = '點擊下面的按鈕，您的證書會通過電子郵件附件發給您。';
$string['openwindow'] = '點擊下面的按鈕在一個新的瀏覽器窗口中打開您的證書。';
$string['or'] = '或';
$string['orientation'] = '列印定向';
$string['orientation_help'] = '選擇你的證書是要以肖像畫或風景畫方式列印？';
$string['pluginadministration'] = '證書管理';
$string['pluginname'] = '證書';
$string['portrait'] = '肖像畫';
$string['printdate'] = '列印日期';
$string['printdate_help'] = '如果選擇了打印日期，這個日期將會打印出來。如果選擇了課程結業日期但學生沒有完成課程，將會打印獲得證書的日期。您也可以選擇打印活動評分的日期。如果證書在活動評分前頒發，將會打印獲得證書的日期。';
$string['printerfriendly'] = '列印友善頁面';
$string['printgrade'] = '列印成績';
$string['printgrade_help'] = '您可以從成績單中選擇任何可用的課程成績項，在證書上打印用戶在該項得到的成績。成績項以他們在成績單中的順序排列。在下面選擇成績格式。';
$string['printhours'] = '列印學分數';
$string['printhours_help'] = '輸入要列印在證書上的學分數';
$string['printnumber'] = '列印證書字號';
$string['printnumber_help'] = '證書上會打印一個隨機的字母和數字組成的獨一無二的 10 位號碼。通過和證書報告裡顯示的號碼比較，可以驗證號碼。';
$string['printoutcome'] = '列印核心能力';
$string['printoutcome_help'] = '您可以將任何課程能力名和用戶得到的能力打印在證書上。例如：作業能力：精通。';
$string['printseal'] = '印章或機構標誌圖像';
$string['printseal_help'] = '這個選項允許您從 certificate/pix/seals 文件夾選擇一個印章或標志打印在證書上。默認情況下，這個圖片被放在證書的右下角。';
$string['printsignature'] = '簽名圖像';
$string['printsignature_help'] = '這個選項允許您從  certificate/pix/signatures 文件夾打印一個簽名圖片。您可以打印一個圖形表示的簽名或打印一個用來書寫簽名的直線。默認情況下，這個圖片被放在證書的左下角。';
$string['printteacher'] = '列印教師姓名';
$string['printteacher_help'] = '為在證書上打印教師的名字， 設置教師的角色在模塊水平上。舉例來說，如果您課程裡有不止一個教師，或者您課程裡有不止一個證書，並且您想要在每一個證書上打印不同的教師名字，就要這樣做。點擊編輯證書，然後點擊“本地分配的角色” 選項卡。然後分配角色教師（編輯教師）給證書（他們不一定是此課程中的教師 —— 您可以將角色分配給任何人）。這些名字將會作為教師打印在證書上。';
$string['printwmark'] = '浮水印圖像';
$string['printwmark_help'] = '一個水印文件將會放在證書的背景裡。水印是一個淺色的圖形。水印可以是一個標志、印章、飾章、文字或您想用來作為圖形背景的任何東西。';
$string['receivedcerts'] = '已收到證書';
$string['receiveddate'] = '收到日期';
$string['removecert'] = '頒發的證書已刪除';
$string['report'] = '報告';
$string['reportcert'] = '報告證書';
$string['reportcert_help'] = '如果您這裡選擇了是，那麼證書的接收日期、號碼和課程名稱將會顯示在用戶的證書報告上。如果您選擇了在證書上打印成績，那麼成績也將會顯示在證書報告上。';
$string['reviewcertificate'] = '檢查你的證書';
$string['savecert'] = '儲存證書';
$string['savecert_help'] = '如果您選擇此項，有此證書的每個用戶的證書 pdf 文件的副本將會保存在課程的 moddata 文件夾裡。每個用戶保存的證書的鏈接將會顯示在證書報告裡。';
$string['sigline'] = '線';
$string['statement'] = '已經完成這課程';
$string['summaryofattempts'] = '以前收到的證書的摘要';
$string['textoptions'] = '文字選項';
$string['title'] = '證書';
$string['to'] = '授予';
$string['typeA4_embedded'] = 'A4 嵌入式';
$string['typeA4_non_embedded'] = 'A4 非嵌入式';
$string['typeletter_embedded'] = '信件嵌入式';
$string['typeletter_non_embedded'] = '信件非嵌入式';
$string['userdateformat'] = '用戶語言的日期格式';
$string['validate'] = '驗證';
$string['verifycertificate'] = '驗證證書';
$string['viewcertificateviews'] = '查看{$a}張頒發的證書';
$string['viewed'] = '你收到這一證書是在：';
$string['viewtranscript'] = '查看證書';
