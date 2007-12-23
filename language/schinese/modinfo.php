<?php

/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Simplified Chinese translator: Conan <www.edogawaconan.com>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

// A brief description of this module
define("_MI_SF_MD_DESC", "给您XOOPS站使用的进阶问答管理系统");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "提出一个问答项目");
define("_MI_SF_SUB_SMNAME2", "请求一个问答项目");
define("_MI_SF_SUB_SMNAME3", "开放问题");
define("_MI_SF_SUB_SMNAME4", "管理问答项目");

// Config options
define("_MI_SF_ALLOWSUBMIT", "会员提出的项目:");
define("_MI_SF_ALLOWSUBMITDSC", "允许会员提出问答项目到您的网站?");

define("_MI_SF_ALLOWREQUEST", "会员请求:");
define("_MI_SF_ALLOWREQUESTDSC", "允许会员在您的网站送出问答项目的请求?");

define("_MI_SF_NEWANSWER", "允许发表新的解答:");
define("_MI_SF_NEWANSWERDSC", "选'是'则允许会员提出新的解答到已公布的问答项目中.");

define("_MI_SF_ANONPOST", "允许访客发表");
define("_MI_SF_ANONPOSTDSC", "允许非会员提出或请求问答项目.");

define('_MI_SF_DATEFORMAT', '日期格式:');
define('_MI_SF_DATEFORMATDSC', '使用 language/english/global.php 最后一部份来选择显示的格式. 例如: "d-M-Y H:i" 即为 "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', '显示伸展的功能列');
define('_MI_SF_DISPLAY_COLLAPSDSC', "选'是'会在索引及类别页中使用伸展列.");

define('_MI_SF_DISPLAYTYPE', "问答项目显示方式:");
define('_MI_SF_DISPLAYTYPEDSC', "若为'摘要模式'则每个问答项目内只有问题及日期与人次在选到的类别中,若为'完整模式'则每问答项目会整个显示在选到的类别中.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "摘要模式");
define('_MI_SF_DISPLAYTYPE_FULL', "完整模式");

define('_MI_SF_DISPLAY_LAST_FAQ', '列出上个问答项目栏位吗?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "选'是'则在索引及类别页面中每个类别显示上个问答项目.");

define('_MI_SF_DISPLAY_LAST_FAQS', '列出上个问答项目清单吗?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "选'是'则在索引页面显示上个问答项目.");

define('_MI_SF_LAST_FAQ_SIZE', '上个问答项目大小:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "设定上个问答项目最大栏位大小.");

define('_MI_SF_QUESTION_SIZE', "问题大小:");
define('_MI_SF_QUESTION_SIZEDSC', "设定问题在单一问答项目中标题最大显示大小.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', '在索引显示次类别');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "选'是'则在索引页面将显示次类别.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', '显示主类别的说明吗?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "选'是'则主类别在索引及类别页面中显示其类别的说明.");

define('_MI_SF_DISPLAY_SBCAT_DSC', '显示次类别的说明吗?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "选'是'则次类别在索引及类别页面中显示次类别的说明.");

define('_MI_SF_ORDERBYDATE', '依问答项目的日期排序:');
define('_MI_SF_ORDERBYDATEDSC', "若您设此选项为'是'则类别内的问答项目会依日期递减来排序,否则会依指定顺序来排.");

define('_MI_SF_DISPLAY_DATE_COL', "显示'公布于'的栏位?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "当使用'摘要'方式显示时,选'是'则在类别与索引页中的问答项目会有'公布于'的日期栏位.");

define('_MI_SF_DISPLAY_HITS_COL', "显示'阅次'的栏位?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "当使用'摘要'方式显示时,选'是'则在类别与索引页中的问答项目会有'阅次'的日期栏位.");

define('_MI_SF_USEIMAGENAVPAGE', '使用图像的页面导引:');
define('_MI_SF_USEIMAGENAVPAGEDSC', "若您设此选项为'是'则页面导引会以图像方式来表示,否则使用原始的文字页面导引方式.");

define('_MI_SF_ALLOWCOMMENTS', '在问答项目的意见回覆控制等级:');
define('_MI_SF_ALLOWCOMMENTSDSC', "若您设此选项为'是'则您只会在有它们的意见回覆核取的问答项目中会看见.<br /><br />选'否'则由通用等级来管理(见下方在'意见回覆规则'之下.");

define('_MI_SF_ALLOWADMINHITS', '管理计数阅次:');
define('_MI_SF_ALLOWADMINHITSDSC', '允许管理者纳入计数的次数?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', '自动核准提出的问答项目:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', '不需要经过管理者审核即自动核准提出的问答项目.');

define('_MI_SF_AUTOAPPROVE_REQUEST', '自动核准请求的问答项目:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', '不需要经过管理者审核即自动核准请求的问答项目.');

define('_MI_SF_AUTOAPPROVE_ANS', '自动核准解答:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', '自动核准开放问题的解答.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', '自动核准新解答:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', '自动核准已公布问答项目新提出的解答.');

define('_MI_SF_LASTFAQSPERCAT', '每个类别最多的上个问答项目:');
define('_MI_SF_LASTFAQSPERCATDSC', '显示在类别中的讯息栏位最多的问答项目.');

define('_MI_SF_CATPERPAGE', '每页最多类别数(会员):');
define('_MI_SF_CATPERPAGEDSC', '会员端每页显示最多主类别数.');

define('_MI_SF_PERPAGE', '每页最多问答项目(管理者):');
define('_MI_SF_PERPAGEDSC', '管理者端每页显示最多问答项目.');

define('_MI_SF_PERPAGEINDEX', '每页最多问答项目(会员):');
define('_MI_SF_PERPAGEINDEXDSC', '会员端每页显示最多问答项目.');

define('_MI_SF_INDEXWELCOMEMSG', '索引页欢迎讯息:');
define('_MI_SF_INDEXWELCOMEMSGDSC', '本模组在索引页面显示的欢迎讯息.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "此模组在本站可让您找到常见的问题与解答,如同回答<b>我要如何</b>和<b>您知道吗</b>这样的问题.请拨冗在任何问答项目中发表您的意见."); 

define('_MI_SF_REQUESTINTROMSG', '请求介绍讯息:');
define('_MI_SF_REQUESTINTROMSGDSC', '介绍讯息显示在问答项目的请求.');
define('_MI_SF_REQUESTINTROMSGDEF', "您是否找不到您问题的解答?没关系!只要照这个表格将您的问题填妥,管理者会审核并公布您请求的问题在开放问题区让知道的人来解答!"); 

define('_MI_SF_OPENINTROMSG', '开放问题区的介绍讯息:');
define('_MI_SF_OPENINTROMSGDSC', '介绍讯息显示在开放问题的请求.');
define('_MI_SF_OPENINTROMSGDEF', "这是开放问题的清单,由会员提出的问题但尚未有解答.若您知道问题的解答可以按下这些开放问题协助我们回答."); 

define('_MI_SF_USEREALNAME', '使用会员的本名');
define('_MI_SF_USEREALNAMEDSC', '当显示会员名称时,若会员有设定本名即可显示会员的本名.');

define('_MI_SF_HELP_PATH_SELECT', "SmartFAQ的求助档案路径");
define('_MI_SF_HELP_PATH_SELECT_DSC', "选择您想从哪里来存取SmartFAQ的求助档案.若您下载的'SmartFAQ求助套件'且已上传到'modules/smartfaq/doc/',您可以选为'在模组内'.或是您可以从选项中改为直接从docs.xoops.org来存取求助档案的位置.您也可以选'自订路径'且指定求助档的路径并要在下一个'自订SmartFAQ的求助档路径'设定路径");

define('_MI_SF_HELP_PATH_CUSTOM', "自订SmartFAQ的求助档路径");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "若您在'自订SmartFAQ的求助档路径'中选'自订路径',请指定SmartFAQ求助档案的路径,格式范例为: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "在模组内");
define('_MI_SF_HELP_CUSTOM', "自订路径");

//define('_MI_SF_MODERATORSEDIT', '允许管理者编辑(进阶管理)');
//define('_MI_SF_MODERATORSEDITDSC', '此选项可使管理者编辑在类别中的问题与问答项目.否则管理者只可以核准或否决问题请求及问答项目.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "索引");
define("_MI_SF_ADMENU2", "类别");
define("_MI_SF_ADMENU3", "问答项目");
define("_MI_SF_ADMENU4", "问题");
define("_MI_SF_ADMENU5", "权限");
define("_MI_SF_ADMENU6", "区块及群组");
define("_MI_SF_ADMENU7", "返回模组");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "最新问答项目清单");
define("_MI_SF_ARTSRANDOM_DIDUNO", "您知道吗?");
define("_MI_SF_ARTSRANDOM_FAQ", "随机问题!");
define("_MI_SF_ARTSRANDOM_HOW", "我要如何...");
define("_MI_SF_ARTSCONTEXT", "根据上下文问答项目");
define("_MI_SF_RECENTFAQS", "最新问答项目(详细)");
define("_MI_SF_RECENT_QUESTIONS", "最新开放问题");
define("_MI_SF_MOST_VIEWED", "阅览最多的问答项目");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', '通用问答项目');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', '通知选项可套用在所有的问答项目.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', '问答项目类别');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', '通知选项可套用在目前的问答项目.');

define('_MI_SF_FAQ_NOTIFY', '问答项目');
define('_MI_SF_FAQ_NOTIFY_DSC', '通知选项可套用在此问答项目.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', '通用开放的问题');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', '通知选项可套用在所有开放的问题');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', '问答项目类别');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', '通知选项可套用在目前的类别.');

define('_MI_SF_QUESTION_NOTIFY', '开放的问题');
define('_MI_SF_QUESTION_NOTIFY_DSC', '通知选项可套用在目前开放的问题.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', '新类别');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', '有新类别建立时通知我.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', '有新类别建立时收到通知.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新类别');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', '提出的问答项目');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', '有任何提出待审的问答项目时通知我.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', '有任何提出待审的问答项目时收到通知.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新上传的问答项目');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', '新公布的问答项目');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', '有任何新公布的问答项目时通知我.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', '有任何新公布的问答项目收到通知.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新公布的问答项目');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', '新提出的解答');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '有任何问答项目有新提出的解答时通知我.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '有任何问答项目有新提出的解答时收到通知.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新提出的解答');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', '新公布的解答');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '有任何问答项目有新公布的解答时通知我.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '有任何问答项目有新公布的解答时收到通知.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新公布的解答');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', '上传的问答项目');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', '在此类别中有上传的问答项目时通知我.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', '此类别中有上传的问答项目时收到通知.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 类别中上传的问答项目'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', '新公布的问答项目');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', '在此类别中有新公布的问答项目时通知我.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', '此类别中有新公布的问答项目时收到通知.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 类别中新公布的问答项目'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', '新提出的解答');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '在此类别中有新提出的解答时通知我.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '此类别中有新提出的解答时收到通知.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新提出的解答');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', '新公布的解答');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '在此类别中有新公布的解答时通知我.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '此类别中有新公布的解答时收到通知.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新公布的解答');

define('_MI_SF_FAQ_REJECTED_NOTIFY', '否决的问答项目');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', '若此问答项目被否决时通知我.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', '此问答项目被否决时收到通知.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 否决的问答项目'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', '核准的问答项目');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', '若此问答项目已核准时通知我.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', '此问答项目已核准时收到通知.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 核准的问答项目'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', '核准的解答');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', '若此解答已核准时通知我.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', '此解答已核准时收到通知.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 核准的解答'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', '否决的解答');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', '若此解答被否决时通知我.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', '此解答被否决时收到通知.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 否决的解答'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', '上传的问题');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', '有任何待审上传的问题时通知我.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', '任何待审上传的问题时收到通知.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新上传的问题');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', '公布的问题');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', '在开放问题区有任何公布的问题时通知我.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', '在开放问题区有任何公布的问题时收到通知.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新公布的问题');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', '提出解答');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '任何开放问题有解答提出时通知我.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '任何开放问题有解答提出时收到通知.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 提出新解答');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', '提出问题');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', '在目前类别中有问题提出时通知我.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', '在目前类别中有问题提出时收到通知.');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 提出新问题');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', '公布的问题');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', '在目前类别中有问题公布时通知我.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', '在目前类别中有问题公布时收到通知.');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 新公布的问题');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', '提出解答');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '在目前类别中开放问题有解答提出时通知我.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '在目前类别中开放问题有解答提出时收到通知.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 提出新解答');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', '否决的问题');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', '此问题被否决时通知我.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', '此问题被否决时收到通知.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 否决的问题');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', '核准的问题');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', '此问题核准时通知我.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', '此问题核准时收到通知.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 核准的问题');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', '核准的解答');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', '此解答核准时通知我.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', '此解答核准时收到通知.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 核准的解答');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', '否决的解答');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', '此解答被否决时通知我.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', '此解答被否决时收到通知.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} 自动通知: 否决的解答');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "主研发员");
define('_MI_SF_DEVELOPER_LEAD', "研发人员");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "贡献者");
define('_MI_SF_DEVELOPER_WEBSITE', "网站");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "有功人员");
define('_MI_SF_DEMO_SITE', "SmartFactory展示网站");
define('_MI_SF_MODULE_INFO', "模组研发资讯");
define('_MI_SF_MODULE_STATUS', "状态");
define('_MI_SF_MODULE_RELEASE_DATE', "发表日期");
define('_MI_SF_MODULE_DEMO', "展示网站");
define('_MI_SF_MODULE_SUPPORT', "官方支援网站");
define('_MI_SF_MODULE_BUG', "回报本模组的错误");
define('_MI_SF_MODULE_FEATURE', "建议本模组增加新的功能");
define('_MI_SF_MODULE_DISCLAIMER', "免责声明");
define('_MI_SF_AUTHOR_WORD', "作者的话");
define('_MI_SF_VERSION_HISTORY', "版本历史记录");

// Beta
define('_MI_SF_WARNING_BETA', "本模组如您所见,没有任何的保证. 
本模组为测试版本,也就是目前仍在研发阶段.
此发行用意是在<b>纯为测试而已</b>.
且我们<b>强烈的</b>建议您不要用在您现有的网站或是在有产值的环境下.");

// RC
define('_MI_SF_WARNING_RC', "本模组如您所见,没有任何的保证.
本模组为正式发行前的试用版本,所以最好不要用在有产值的网站中.
本模组还是在发展的阶段,所以使用它仍为您自己的责任. 
也就是说作者不需对本模组负任何的责任.");

// Final
define('_MI_SF_WARNING_FINAL', "本模组如您所见,没有任何的保证.
虽然本模组已不再是测试版,但它依然在研发.
本版本可以用在现有的网站或有产值的环境下.
但使用它仍为您自己的责任,也就是说作者不需对本模组负任何的责任.");

?>
