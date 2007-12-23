<?php

/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Traditional Chinese translator: Conan <www.edogawaconan.com>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

// A brief description of this module
define("_MI_SF_MD_DESC", "給您XOOPS站使用的進階問答管理系統");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "提出一個問答項目");
define("_MI_SF_SUB_SMNAME2", "請求一個問答項目");
define("_MI_SF_SUB_SMNAME3", "開放問題");
define("_MI_SF_SUB_SMNAME4", "管理問答項目");

// Config options
define("_MI_SF_ALLOWSUBMIT", "會員提出的項目:");
define("_MI_SF_ALLOWSUBMITDSC", "允許會員提出問答項目到您的網站?");

define("_MI_SF_ALLOWREQUEST", "會員請求:");
define("_MI_SF_ALLOWREQUESTDSC", "允許會員在您的網站送出問答項目的請求?");

define("_MI_SF_NEWANSWER", "允許發表新的解答:");
define("_MI_SF_NEWANSWERDSC", "選'是'則允許會員提出新的解答到已公佈的問答項目中.");

define("_MI_SF_ANONPOST", "允許訪客發表");
define("_MI_SF_ANONPOSTDSC", "允許非會員提出或請求問答項目.");

define('_MI_SF_DATEFORMAT', '日期格式:');
define('_MI_SF_DATEFORMATDSC', '使用 language/english/global.php 最後一部份來選擇顯示的格式. 例如: "d-M-Y H:i" 即為 "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', '顯示伸展的功能列');
define('_MI_SF_DISPLAY_COLLAPSDSC', "選'是'會在索引及類別頁中使用伸展列.");

define('_MI_SF_DISPLAYTYPE', "問答項目顯示方式:");
define('_MI_SF_DISPLAYTYPEDSC', "若為'摘要模式'則每個問答項目內只有問題及日期與人次在選到的類別中,若為'完整模式'則每問答項目會整個顯示在選到的類別中.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "摘要模式");
define('_MI_SF_DISPLAYTYPE_FULL', "完整模式");

define('_MI_SF_DISPLAY_LAST_FAQ', '列出上個問答項目欄位嗎?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "選'是'則在索引及類別頁面中每個類別顯示上個問答項目.");

define('_MI_SF_DISPLAY_LAST_FAQS', '列出上個問答項目清單嗎?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "選'是'則在索引頁面顯示上個問答項目.");

define('_MI_SF_LAST_FAQ_SIZE', '上個問答項目大小:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "設定上個問答項目最大欄位大小.");

define('_MI_SF_QUESTION_SIZE', "問題大小:");
define('_MI_SF_QUESTION_SIZEDSC', "設定問題在單一問答項目中標題最大顯示大小.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', '在索引顯示次類別');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "選'是'則在索引頁面將顯示次類別.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', '顯示主類別的說明嗎?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "選'是'則主類別在索引及類別頁面中顯示其類別的說明.");

define('_MI_SF_DISPLAY_SBCAT_DSC', '顯示次類別的說明嗎?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "選'是'則次類別在索引及類別頁面中顯示次類別的說明.");

define('_MI_SF_ORDERBYDATE', '依問答項目的日期排序:');
define('_MI_SF_ORDERBYDATEDSC', "若您設此選項為'是'則類別內的問答項目會依日期遞減來排序,否則會依指定順序來排.");

define('_MI_SF_DISPLAY_DATE_COL', "顯示'公佈於'的欄位?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "當使用'摘要'方式顯示時,選'是'則在類別與索引頁中的問答項目會有'公佈於'的日期欄位.");

define('_MI_SF_DISPLAY_HITS_COL', "顯示'閱次'的欄位?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "當使用'摘要'方式顯示時,選'是'則在類別與索引頁中的問答項目會有'閱次'的日期欄位.");

define('_MI_SF_USEIMAGENAVPAGE', '使用圖像的頁面導引:');
define('_MI_SF_USEIMAGENAVPAGEDSC', "若您設此選項為'是'則頁面導引會以圖像方式來表示,否則使用原始的文字頁面導引方式.");

define('_MI_SF_ALLOWCOMMENTS', '在問答項目的意見回覆控制等級:');
define('_MI_SF_ALLOWCOMMENTSDSC', "若您設此選項為'是'則您只會在有它們的意見回覆核取的問答項目中會看見.<br /><br />選'否'則由通用等級來管理(見下方在'意見回覆規則'之下.");

define('_MI_SF_ALLOWADMINHITS', '管理計數閱次:');
define('_MI_SF_ALLOWADMINHITSDSC', '允許管理者納入計數的次數?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', '自動核准提出的問答項目:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', '不需要經過管理者審核即自動核准提出的問答項目.');

define('_MI_SF_AUTOAPPROVE_REQUEST', '自動核准請求的問答項目:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', '不需要經過管理者審核即自動核准請求的問答項目.');

define('_MI_SF_AUTOAPPROVE_ANS', '自動核准解答:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', '自動核准開放問題的解答.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', '自動核准新解答:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', '自動核准已公佈問答項目新提出的解答.');

define('_MI_SF_LASTFAQSPERCAT', '每個類別最多的上個問答項目:');
define('_MI_SF_LASTFAQSPERCATDSC', '顯示在類別中的訊息欄位最多的問答項目.');

define('_MI_SF_CATPERPAGE', '每頁最多類別數(會員):');
define('_MI_SF_CATPERPAGEDSC', '會員端每頁顯示最多主類別數.');

define('_MI_SF_PERPAGE', '每頁最多問答項目(管理者):');
define('_MI_SF_PERPAGEDSC', '管理者端每頁顯示最多問答項目.');

define('_MI_SF_PERPAGEINDEX', '每頁最多問答項目(會員):');
define('_MI_SF_PERPAGEINDEXDSC', '會員端每頁顯示最多問答項目.');

define('_MI_SF_INDEXWELCOMEMSG', '索引頁歡迎訊息:');
define('_MI_SF_INDEXWELCOMEMSGDSC', '本模組在索引頁面顯示的歡迎訊息.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "此模組在本站可讓您找到常見的問題與解答,如同回答<b>我要如何</b>和<b>您知道嗎</b>這樣的問題.請撥冗在任何問答項目中發表您的意見."); 

define('_MI_SF_REQUESTINTROMSG', '請求介紹訊息:');
define('_MI_SF_REQUESTINTROMSGDSC', '介紹訊息顯示在問答項目的請求.');
define('_MI_SF_REQUESTINTROMSGDEF', "您是否找不到您問題的解答?沒關係!只要照這個表格將您的問題填妥,管理者會審核並公佈您請求的問題在開放問題區讓知道的人來解答!"); 

define('_MI_SF_OPENINTROMSG', '開放問題區的介紹訊息:');
define('_MI_SF_OPENINTROMSGDSC', '介紹訊息顯示在開放問題的請求.');
define('_MI_SF_OPENINTROMSGDEF', "這是開放問題的清單,由會員提出的問題但尚未有解答.若您知道問題的解答可以按下這些開放問題協助我們回答."); 

define('_MI_SF_USEREALNAME', '使用會員的本名');
define('_MI_SF_USEREALNAMEDSC', '當顯示會員名稱時,若會員有設定本名即可顯示會員的本名.');

define('_MI_SF_HELP_PATH_SELECT', "SmartFAQ的求助檔案路徑");
define('_MI_SF_HELP_PATH_SELECT_DSC', "選擇您想從哪裡來存取SmartFAQ的求助檔案.若您下載的'SmartFAQ求助套件'且已上傳到'modules/smartfaq/doc/',您可以選為'在模組內'.或是您可以從選項中改為直接從docs.xoops.org來存取求助檔案的位置.您也可以選'自訂路徑'且指定求助檔的路徑並要在下一個'自訂SmartFAQ的求助檔路徑'設定路徑");

define('_MI_SF_HELP_PATH_CUSTOM', "自訂SmartFAQ的求助檔路徑");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "若您在'自訂SmartFAQ的求助檔路徑'中選'自訂路徑',請指定SmartFAQ求助檔案的路徑,格式範例為: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "在模組內");
define('_MI_SF_HELP_CUSTOM', "自訂路徑");

//define('_MI_SF_MODERATORSEDIT', '允許管理者編輯(進階管理)');
//define('_MI_SF_MODERATORSEDITDSC', '此選項可使管理者編輯在類別中的問題與問答項目.否則管理者只可以核准或否決問題請求及問答項目.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "索引");
define("_MI_SF_ADMENU2", "類別");
define("_MI_SF_ADMENU3", "問答項目");
define("_MI_SF_ADMENU4", "問題");
define("_MI_SF_ADMENU5", "權限");
define("_MI_SF_ADMENU6", "區塊及群組");
define("_MI_SF_ADMENU7", "返回模組");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "最新問答項目清單");
define("_MI_SF_ARTSRANDOM_DIDUNO", "您知道嗎?");
define("_MI_SF_ARTSRANDOM_FAQ", "隨機問題!");
define("_MI_SF_ARTSRANDOM_HOW", "我要如何...");
define("_MI_SF_ARTSCONTEXT", "根據上下文問答項目");
define("_MI_SF_RECENTFAQS", "最新問答項目(詳細)");
define("_MI_SF_RECENT_QUESTIONS", "最新開放問題");
define("_MI_SF_MOST_VIEWED", "閱覽最多的問答項目");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', '通用問答項目');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', '通知選項可套用在所有的問答項目.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', '問答項目類別');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', '通知選項可套用在目前的問答項目.');

define('_MI_SF_FAQ_NOTIFY', '問答項目');
define('_MI_SF_FAQ_NOTIFY_DSC', '通知選項可套用在此問答項目.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', '通用開放的問題');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', '通知選項可套用在所有開放的問題');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', '問答項目類別');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', '通知選項可套用在目前的類別.');

define('_MI_SF_QUESTION_NOTIFY', '開放的問題');
define('_MI_SF_QUESTION_NOTIFY_DSC', '通知選項可套用在目前開放的問題.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', '新類別');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', '有新類別建立時通知我.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', '有新類別建立時收到通知.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新類別');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', '提出的問答項目');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', '有任何提出待審的問答項目時通知我.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', '有任何提出待審的問答項目時收到通知.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新上傳的問答項目');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', '新公佈的問答項目');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', '有任何新公佈的問答項目時通知我.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', '有任何新公佈的問答項目收到通知.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新公佈的問答項目');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', '新提出的解答');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '有任何問答項目有新提出的解答時通知我.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '有任何問答項目有新提出的解答時收到通知.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新提出的解答');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', '新公佈的解答');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '有任何問答項目有新公佈的解答時通知我.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '有任何問答項目有新公佈的解答時收到通知.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新公佈的解答');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', '上傳的問答項目');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', '在此類別中有上傳的問答項目時通知我.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', '此類別中有上傳的問答項目時收到通知.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 類別中上傳的問答項目'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', '新公佈的問答項目');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', '在此類別中有新公佈的問答項目時通知我.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', '此類別中有新公佈的問答項目時收到通知.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 類別中新公佈的問答項目'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', '新提出的解答');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '在此類別中有新提出的解答時通知我.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '此類別中有新提出的解答時收到通知.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新提出的解答');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', '新公佈的解答');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '在此類別中有新公佈的解答時通知我.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '此類別中有新公佈的解答時收到通知.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新公佈的解答');

define('_MI_SF_FAQ_REJECTED_NOTIFY', '否決的問答項目');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', '若此問答項目被否決時通知我.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', '此問答項目被否決時收到通知.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 否決的問答項目'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', '核准的問答項目');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', '若此問答項目已核准時通知我.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', '此問答項目已核准時收到通知.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 核准的問答項目'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', '核准的解答');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', '若此解答已核准時通知我.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', '此解答已核准時收到通知.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 核准的解答'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', '否決的解答');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', '若此解答被否決時通知我.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', '此解答被否決時收到通知.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 否決的解答'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', '上傳的問題');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', '有任何待審上傳的問題時通知我.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', '任何待審上傳的問題時收到通知.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新上傳的問題');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', '公佈的問題');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', '在開放問題區有任何公佈的問題時通知我.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', '在開放問題區有任何公佈的問題時收到通知.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新公佈的問題');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', '提出解答');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '任何開放問題有解答提出時通知我.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '任何開放問題有解答提出時收到通知.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 提出新解答');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', '提出問題');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', '在目前類別中有問題提出時通知我.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', '在目前類別中有問題提出時收到通知.');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 提出新問題');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', '公佈的問題');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', '在目前類別中有問題公佈時通知我.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', '在目前類別中有問題公佈時收到通知.');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 新公佈的問題');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', '提出解答');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '在目前類別中開放問題有解答提出時通知我.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '在目前類別中開放問題有解答提出時收到通知.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 提出新解答');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', '否決的問題');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', '此問題被否決時通知我.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', '此問題被否決時收到通知.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 否決的問題');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', '核准的問題');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', '此問題核准時通知我.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', '此問題核准時收到通知.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 核准的問題');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', '核准的解答');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', '此解答核准時通知我.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', '此解答核准時收到通知.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 核准的解答');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', '否決的解答');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', '此解答被否決時通知我.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', '此解答被否決時收到通知.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自動通知: 否決的解答');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "主研發員");
define('_MI_SF_DEVELOPER_LEAD', "研發人員");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "貢獻者");
define('_MI_SF_DEVELOPER_WEBSITE', "網站");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "有功人員");
define('_MI_SF_DEMO_SITE', "SmartFactory展示網站");
define('_MI_SF_MODULE_INFO', "模組研發資訊");
define('_MI_SF_MODULE_STATUS', "狀態");
define('_MI_SF_MODULE_RELEASE_DATE', "發表日期");
define('_MI_SF_MODULE_DEMO', "展示網站");
define('_MI_SF_MODULE_SUPPORT', "官方支援網站");
define('_MI_SF_MODULE_BUG', "回報本模組的錯誤");
define('_MI_SF_MODULE_FEATURE', "建議本模組增加新的功能");
define('_MI_SF_MODULE_DISCLAIMER', "免責聲明");
define('_MI_SF_AUTHOR_WORD', "作者的話");
define('_MI_SF_VERSION_HISTORY', "版本歷史記錄");

// Beta
define('_MI_SF_WARNING_BETA', "本模組如您所見,沒有任何的保證. 
本模組為測試版本,也就是目前仍在研發階段.
此發行用意是在<b>純為測試而已</b>.
且我們<b>強烈的</b>建議您不要用在您現有的網站或是在有產值的環境下.");

// RC
define('_MI_SF_WARNING_RC', "本模組如您所見,沒有任何的保證.
本模組為正式發行前的試用版本,所以最好不要用在有產值的網站中.
本模組還是在發展的階段,所以使用它仍為您自己的責任. 
也就是說作者不需對本模組負任何的責任.");

// Final
define('_MI_SF_WARNING_FINAL', "本模組如您所見,沒有任何的保證.
雖然本模組已不再是測試版,但它依然在研發.
本版本可以用在現有的網站或有產值的環境下.
但使用它仍為您自己的責任,也就是說作者不需對本模組負任何的責任.");

?>
