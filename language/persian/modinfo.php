<?php

/**
* $Id$
* Module: SmartFAQ
* Author: marcan <marcan@smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME", "پرسش های همگانی");

// A brief description of this module
define("_MI_SF_MD_DESC", "Advanced Questions and Answers Management System for your XOOPS Site");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "ارسال پرسش و پاسخ");
define("_MI_SF_SUB_SMNAME2", "درخواست برای پاسخ به پرسش");
define("_MI_SF_SUB_SMNAME3", "پرسش های باز");
define("_MI_SF_SUB_SMNAME4", "مدیریت پرسش و پاسخ");

// Config options
define("_MI_SF_ALLOWSUBMIT", "User submissions:");
define("_MI_SF_ALLOWSUBMITDSC", "Allow users to submit Q&amp;A on your website?");

define("_MI_SF_ALLOWREQUEST", "User requests:");
define("_MI_SF_ALLOWREQUESTDSC", "Allow users to request Q&amp;A on your website?");

define("_MI_SF_ANONPOST", "Allow anonymous posting");
define("_MI_SF_ANONPOSTDSC", "Allow anonymous users to submit or request Q&amp;A.");

define('_MI_SF_DATEFORMAT', 'Date format:');
define('_MI_SF_DATEFORMATDSC', 'Use the final part of language/english/global.php to select a display style. Example: "d-M-Y H:i" translates to "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', 'Display collapsable bars');
define('_MI_SF_DISPLAY_COLLAPSDSC', "Select 'Yes' to display the collapsable bar in the index and category page.");

define('_MI_SF_DISPLAYTYPE', "Q&amp;A's display type:");
define('_MI_SF_DISPLAYTYPEDSC', "If 'Summary View' is selected, only the Question, Date and Hits of each Q&amp;A will be displayed in a selected category. If 'Full View' is selected, each Q&amp;A will be entirely displayed in a selected category.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "Summary View");
define('_MI_SF_DISPLAYTYPE_FULL', "Full View");

define('_MI_SF_DISPLAY_LAST_FAQ', 'Display last Q&amp;A column?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "Select 'Yes' to display the last Q&amp;A in each category in the index and category page.");

define('_MI_SF_LAST_FAQ_SIZE', 'Last Q&amp;A size :');
define('_MI_SF_LAST_FAQ_SIZEDSC', "Set the maximum size of the question in the Last Q&amp;A column.");

define('_MI_SF_QUESTION_SIZE', "Question size :");
define('_MI_SF_QUESTION_SIZEDSC', "Set the maximum size of the question as a title in the single Q&amp;A display page.");

define('_MI_SF_DISPLAY_SBCAT_DSC', 'Display sub-categories description?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "Select 'Yes' to display the description of sub-categories in the index and category page.");

define('_MI_SF_ORDERBYDATE', 'Order the Q&amp;As by date :');
define('_MI_SF_ORDERBYDATEDSC', 'If you set this option to "Yes", the Q&amp;As inside a category will be ordered by decending date, otherwise, they will be ordered by their weight.');

define('_MI_SF_DISPLAY_DATE_COL', "Display the 'Published on' column?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "When the 'Summary' display type is selected, select 'Yes' to display a 'Published on' date in the Q&amp;A table on the index and category page.");

define('_MI_SF_DISPLAY_HITS_COL', "Display the 'Hits' column?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "When the 'Summary' display type is selected, select 'Yes' to display the 'Hits' column in the Q&amp;A table on the index and category page.");

define('_MI_SF_USEIMAGENAVPAGE', 'Use the image Page Navigation:');
define('_MI_SF_USEIMAGENAVPAGEDSC', 'If you set this option to "Yes", the Page Navigation will be displayed with image, otherwise, the original Page Naviagation will be used.');

define('_MI_SF_ALLOWCOMMENTS', 'Control comments at the Q&amp;A level:');
define('_MI_SF_ALLOWCOMMENTSDSC', 'If you set this option to "Yes", you\'ll see comments only on those Q&amp;A that have their comment checkbox marked. <br /><br />Select "No" to have comments managed at the global level (look below under the tag "Comment rules".');

define('_MI_SF_ALLOWADMINHITS', 'Admin counter reads:');
define('_MI_SF_ALLOWADMINHITSDSC', 'Allow admin hits for counter stats?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Auto approve submitted Q&amp;A:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', 'Auto approves submitted Q&amp;A without admin intervention.');

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Auto approve requested Q&amp;A:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', 'Auto approves requested Q&amp;A without admin intervention.');

define('_MI_SF_AUTOAPPROVE_ANS', 'Auto approve answers:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', 'Auto approves submitted answers for open questions.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Auto approve new answer:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', 'Auto approves new submitted answers for published Q&amp;A.');

define('_MI_SF_LASTFAQSPERCAT', 'Maximum last Q&amp;A per category:');
define('_MI_SF_LASTFAQSPERCATDSC', 'Maximum number of Q&amp;A to be displayed in the Info column of a category.');

define('_MI_SF_CATPERPAGE', 'Maximum Categories per page (User side):');
define('_MI_SF_CATPERPAGEDSC', 'Maximum number of top categories per page to be displayed at once in the user side.');

define('_MI_SF_PERPAGE', 'Maximum Q&amp;A per page (Admin side):');
define('_MI_SF_PERPAGEDSC', 'Maximum number of Q&amp;A per page to be displayed at once in Q&amp;A Admin.');

define('_MI_SF_PERPAGEINDEX', 'Maximum Q&amp;A per page (User side):');
define('_MI_SF_PERPAGEINDEXDSC', 'Maximum number of Q&amp;A  to be displayed per page in the user side.');

define('_MI_SF_INDEXWELCOMEMSG', 'Index welcome message:');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Welcome message to be displayed in the index page of the module.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "In this area of our site, you will find the answers to the frequently asked questions, as well as answers to <b>How do I</b> and <b>Did you know</b> questions. Please feel free to post a comment on any Q&amp;A."); 

define('_MI_SF_REQUESTINTROMSG', 'Request introduction message:');
define('_MI_SF_REQUESTINTROMSGDSC', 'Introduction message to be displayed in the Request a Q&amp;A page of the module.');
define('_MI_SF_REQUESTINTROMSGDEF', "You did not find the answer to the question you were looking for? No problem! Simply fill the following form in order to request the answer for a new question. The site administrator will review your request and publish this new question in the Open Questions section for someone to answer it!"); 

define('_MI_SF_OPENINTROMSG', 'Open Questions section introduction message:');
define('_MI_SF_OPENINTROMSGDSC', 'Introduction message to be displayed in the Open Questions section of the module.');
define('_MI_SF_OPENINTROMSGDEF', "Here is a list of Open Questions, that is, questions that have been submitted by users of this site but are still without answer. You can click on an open question if you want to help us with an answer."); 

define('_MI_SF_USEREALNAME', 'Use the Real Name of users');
define('_MI_SF_USEREALNAMEDSC', 'When displaying a username, use the real name of that user if he has a set his real name.');

define('_MI_SF_HELP_PATH_SELECT', "Path of SmartFAQ's help files");
define('_MI_SF_HELP_PATH_SELECT_DSC', "Select from where you would like to access SmartFAQ's help files. If you downloaded the 'SmartFAQ's Help Package' and uploaded it in 'modules/smartfaq/doc/', you can select 'Inside the module'. Alternatively, you can access the module's help file directly from docs.xoops.org by chosing this in the selector. You can also select 'Custom Path' and specify yourself the path of the help files in the next config option 'Custom path of SmartFAQ's help files'");

define('_MI_SF_HELP_PATH_CUSTOM', "Custom path of SmartFAQ's help files");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "If you selected 'Custom path' in the previous option 'Path of SmartFAQ's help files', please specify the URL of SmartFAQ's help files, in that format : http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "Inside the module");
define('_MI_SF_HELP_CUSTOM', "Custom Path");

//define('_MI_SF_MODERATORSEDIT', 'Allow moderators to edit (Enhanced moderators)');
//define('_MI_SF_MODERATORSEDITDSC', 'This option will allow moderators to edit questions and Q&amp;A within categories for which they are moderators. Otherwise, moderators can only approve or reject questions and Q&amp;A.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "ص�?حه اصلی مدیریت");
define("_MI_SF_ADMENU2", "شاخه ها");
define("_MI_SF_ADMENU3", "پرسش و پاسخ ها");
define("_MI_SF_ADMENU4", "پرسش ها");
define("_MI_SF_ADMENU5", "دسترسی ها");
define("_MI_SF_ADMENU6", "بلاک ها و گروه ها");
define("_MI_SF_ADMENU7", "برو به ماژول");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "Recent Q&amp;A List");
define("_MI_SF_ARTSRANDOM_DIDUNO", "Did you know?");
define("_MI_SF_ARTSRANDOM_FAQ", "Random question!");
define("_MI_SF_ARTSRANDOM_HOW", "How do I...");
define("_MI_SF_ARTSCONTEXT", "Contextual Q&amp;A");
define("_MI_SF_RECENTFAQS", "Recent Q&amp;A (Detail)");
define("_MI_SF_RECENT_QUESTIONS", "Recent Open Questions");

// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'پرسش و پاسخ  - کلی');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'تنظیمات آگهی رسانی مربوط به همه پرسش و پاسخ ها');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'پرسش و پاسخ - شاخه');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'تنظیمات آگهی رسانی مربوط به این شاخه');

define('_MI_SF_FAQ_NOTIFY', 'پرسش و پاسخ - پرسش و پاسخ');
define('_MI_SF_FAQ_NOTIFY_DSC', 'تنظیمات آگهی رسانی مربوط به این پرسش و پاسخ');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'پرسش های باز - کلی');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'تنظیمات آگهی رسانی مربوط به همه پرسش های باز');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'پرسش های باز - شاخه');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'تنظیمات آگهی رسانی مربوط به این شاخه');

define('_MI_SF_QUESTION_NOTIFY', 'پرسش های باز - پرسش باز');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'تنظیمات آگهی رسانی مربوط به این پرسش باز');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'شاخه جدید');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', 'وقتی شاخه جدیدی ایجاد شد مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'آگهی رسانی در مورد ایجاد یک شاخه جدید');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : شاخه جدید');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'پرسش و پاسخ جدید ارسال شده');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', 'هر پرسش و پاسخی که ارسال شد و منتظر تایید بود مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', 'آگهی رسانی در مورد ارسال پرسش و پاسخ های منتظر برای تایید');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پرسش و پاسخ ارسال شده جدید');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'پرسش و پاسخ جدید قرار گر�?ته');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', 'هر پرسش و پاسخی در سایت قرار گر�?ت مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'آگهی رسانی در مورد قرار گر�?تن پرسش و پاسخ های جدید در سایت');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پرسش و پاسخ جدید قرار گر�?ته در سایت');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'پاسخ جدید ارسال شده');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'هر پاسخی که برای هر کدام از پرسش ها ارسال شد مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'آگهی رسانی در مورد پاسخ ارسال شده به پرسش ها');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پاسخ ارسال شده جدید');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'پاسخ جدید قرار گر�?ته');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'هر پاسخی که برای هر کدام از پرسش ها در سایت قرار گر�?ت مرا با خبر کن');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'آگهی رسانی در مورد پاسخ های قرار گر�?ته برای هر کدام از پرسش ها');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پاسخ قرار گر�?ته جدید');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'پرسش و پاسخ جدید ارسال شده');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'هر پرسش و پاسخی که در این شاخه ارسال شد مرا با خبر کم');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'آگهی رسانی در مورد پرسش و پاسخ ارسال شده به شاخه');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پرسش و پاسخ ارسال شده به شاخه'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'پرسش و پاسخ قرار گر�?ته ');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'هر پرسش و پاسخی که در این شاخه قرار گر�?ت مرا با خبر کن');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'آگهی رسانی در مورد پرسش و پاسخ قرار گر�?ته در شاخه');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : پرسش و پاسخ قرار گر�?ته در شاخه'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'ارسال پاسخ دیگر به جای پاسخ �?علی');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'هر وقت پاسخی به جای پاسخ های موجود در این شاخه ارسال شد مرا با خبر کن');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'آگهی رسانی در مورد پاسخ های ارسال شده به جای پاسخ های �?علی در این شاخه');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : ارسال پاسخ دیگر به جای پاسخ �?علی');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'پاسخ جدید قرار گر�?ته');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'هر وقت پاسخ جدیدی به جای پاسخ های موجود در این شاخه قرار گر�?ت مرا با خبر کن');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'آگهی رسانی در مورد پاسخ های قرار گر�?ته به جای پاسخ های �?علی در این شاخه');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : پاسخ جدید قرار گر�?ته');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'رد کردن پرسش و پاسخ');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'اگر این پرسش و پاسخ رد شد مرا با خبر کن');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'آگهی رسانی در مورد پرسش و پاسخ رد شده');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : پرسش و پاسخ رد شده'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'تایید پرسش و پاسخ');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'هر پرسش و پاسخی تایید شد مرا با خبر کن');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'آگهی رسانی در مورد رسش و پاسخ تایید شده');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : تایید پرسش و پاسخ'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'تایید پاسخ');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'هر پاسخی تایید شد مرا با خبر کن');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'آگهی رسانی در مورد پاسخ تایید شده');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار : تایید پالسخ'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'پاسخ رد شده');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'اگر این پاسخ رد شد مرا با خبر کن');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'آگهی رسانی در مورد رد  شدن  پاسخ');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : رد شدن پاسخ'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'ارسال پرسش');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'هر پرسش ارسال شد و متظر برای تایید قرار گر�?ت مرا با خبر کن');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', ' آکهی رسانی در مورد ارسال پرسش جدید');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : ارسال  پرسش');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'پرسش قرار گر�?ته');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'هر پرسشی که در پرسش های باز قرار گر�?ت مرا با خبر کن');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'آگهی رسانی در مورد قرار گر�?تن پرسش جدید در پرسش های باز');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: پرسش جدید قرار گر�?ته');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'ارسال پاسخ');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'هر پاسخی که برای یک پرسش ارسال شد مرا با خبر کن');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'آگهی رسانی در مورد ارسال پاسخ برای یک پرسش');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: ارسال پاسخ');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'ارسال پرسش');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'هر پرسشی که در این شاخه ارسال شد مرا با خبر کن');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'آگهی رسانی در مورد ارسال پرسش در یک شاخه');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: ارسال یک پرسش');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'پرسش قرار گر�?ته');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'هر پرسشی که در این شاخه قرار گر�?ت مرا با خبر کن');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'آگهی رسانی در مورد قرار گر�?تن پرسش در این شاخه');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: پرسش جدید قرار گر�?ته');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'ارسال پاسخ');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'هر پاسخی که برای یک پرسش  در این شاخه ارسال شد مرا با خبر کن');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'آگهی رسانی در مورد ارسال پاسخ برای یک پرسش در این شاخه');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: ارسال پاسخ');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'پرسش رد شده');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'هر پرسشی رد شد مرا با خبر کن');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'آگهی رسانی در مورد رد شدن پرسش');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار : پرسش رد شده');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'پرسش تایید شده');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'هر پرسشی تایید شد مرا با خبر کن.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'آگهی رسانی در مورد تایید پرسش');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: پرسش تایید شده');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'پاسخ تایید شده');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'هر پاسخی تاید شد مرا با خبر کن');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'آگهی رسانی در مورد تاید پاسخ');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خود کار: پاسخ تایید شده');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'پاسخ رد شده');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'هر پاسخی رد شد مرا با خبر کن');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'آگهی رسانی در مورد رد شدن  پاسخ');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} آگهی رسانی خودکار: پاسخ رد شده');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "اطلاعات در مورد سازندگان ماژول");
define('_MI_SF_AUTHOR_NAME', "سازنده");
define('_MI_SF_AUTHOR_WEBSITE', "وب سایت سازنده");
define('_MI_SF_AUTHOR_EMAIL', "ایمیل سازنده");
define('_MI_SF_AUTHOR_CREDITS', "ا�?راد سازنده");
define('_MI_SF_DEMO_SITE', "سایت دموی ماژول smartfaq");
define('_MI_SF_MODULE_INFO', "اطلاعات در مورد دولاپر های ماژول");
define('_MI_SF_MODULE_STATUS', "وضعیت");
define('_MI_SF_MODULE_DEMO', "سایت دمو");
define('_MI_SF_MODULE_SUPPORT', "سایت رسمی پشتیبانی از ماژول");
define('_MI_SF_MODULE_BUG', "گزارش باگ از این ماژول");
define('_MI_SF_MODULE_FEATURE', "پیشنهاد یک کار جدید برای این ماژول");
define('_MI_SF_MODULE_DISCLAIMER', "شرایط");
define('_MI_SF_AUTHOR_WORD', "حر�? های سازنده");
define('_MI_SF_VERSION_HISTORY', "تاریخچه ورژن های ماژول");

// Beta
define('_MI_SF_WARNING_BETA', "This module comes as is, without any guarantees whatsoever. 
This module is BETA, meaning it is still under active development. This release is meant for
<b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live 
website or in a production environment.");

// RC
define('_MI_SF_WARNING_RC', "This module comes as is, without any guarantees whatsoever. This module 
is a Release Candidate and should not be used on a production web site. The module is still under 
active development and its use is under your own responsibility, which means the author is not responsible.");

// Final
define('_MI_SF_WARNING_FINAL', "This module comes as is, without any guarantees whatsoever. Although this 
module is not beta, it is still under active development. This release can be used in a live website 
or a production environment, but its use is under your own responsibility, which means the author 
is not responsible.");

?>
