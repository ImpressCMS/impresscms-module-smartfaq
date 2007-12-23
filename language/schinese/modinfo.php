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
define("_MI_SF_MD_DESC", "����XOOPSվʹ�õĽ����ʴ����ϵͳ");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "���һ���ʴ���Ŀ");
define("_MI_SF_SUB_SMNAME2", "����һ���ʴ���Ŀ");
define("_MI_SF_SUB_SMNAME3", "��������");
define("_MI_SF_SUB_SMNAME4", "�����ʴ���Ŀ");

// Config options
define("_MI_SF_ALLOWSUBMIT", "��Ա�������Ŀ:");
define("_MI_SF_ALLOWSUBMITDSC", "�����Ա����ʴ���Ŀ��������վ?");

define("_MI_SF_ALLOWREQUEST", "��Ա����:");
define("_MI_SF_ALLOWREQUESTDSC", "�����Ա��������վ�ͳ��ʴ���Ŀ������?");

define("_MI_SF_NEWANSWER", "�������µĽ��:");
define("_MI_SF_NEWANSWERDSC", "ѡ'��'�������Ա����µĽ���ѹ������ʴ���Ŀ��.");

define("_MI_SF_ANONPOST", "����ÿͷ���");
define("_MI_SF_ANONPOSTDSC", "����ǻ�Ա����������ʴ���Ŀ.");

define('_MI_SF_DATEFORMAT', '���ڸ�ʽ:');
define('_MI_SF_DATEFORMATDSC', 'ʹ�� language/english/global.php ���һ������ѡ����ʾ�ĸ�ʽ. ����: "d-M-Y H:i" ��Ϊ "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', '��ʾ��չ�Ĺ�����');
define('_MI_SF_DISPLAY_COLLAPSDSC', "ѡ'��'�������������ҳ��ʹ����չ��.");

define('_MI_SF_DISPLAYTYPE', "�ʴ���Ŀ��ʾ��ʽ:");
define('_MI_SF_DISPLAYTYPEDSC', "��Ϊ'ժҪģʽ'��ÿ���ʴ���Ŀ��ֻ�����⼰�������˴���ѡ���������,��Ϊ'����ģʽ'��ÿ�ʴ���Ŀ��������ʾ��ѡ���������.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "ժҪģʽ");
define('_MI_SF_DISPLAYTYPE_FULL', "����ģʽ");

define('_MI_SF_DISPLAY_LAST_FAQ', '�г��ϸ��ʴ���Ŀ��λ��?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "ѡ'��'�������������ҳ����ÿ�������ʾ�ϸ��ʴ���Ŀ.");

define('_MI_SF_DISPLAY_LAST_FAQS', '�г��ϸ��ʴ���Ŀ�嵥��?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "ѡ'��'��������ҳ����ʾ�ϸ��ʴ���Ŀ.");

define('_MI_SF_LAST_FAQ_SIZE', '�ϸ��ʴ���Ŀ��С:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "�趨�ϸ��ʴ���Ŀ�����λ��С.");

define('_MI_SF_QUESTION_SIZE', "�����С:");
define('_MI_SF_QUESTION_SIZEDSC', "�趨�����ڵ�һ�ʴ���Ŀ�б��������ʾ��С.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', '��������ʾ�����');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "ѡ'��'��������ҳ�潫��ʾ�����.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', '��ʾ������˵����?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "ѡ'��'������������������ҳ������ʾ������˵��.");

define('_MI_SF_DISPLAY_SBCAT_DSC', '��ʾ������˵����?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "ѡ'��'�����������������ҳ������ʾ������˵��.");

define('_MI_SF_ORDERBYDATE', '���ʴ���Ŀ����������:');
define('_MI_SF_ORDERBYDATEDSC', "�������ѡ��Ϊ'��'������ڵ��ʴ���Ŀ�������ڵݼ�������,�������ָ��˳������.");

define('_MI_SF_DISPLAY_DATE_COL', "��ʾ'������'����λ?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "��ʹ��'ժҪ'��ʽ��ʾʱ,ѡ'��'�������������ҳ�е��ʴ���Ŀ����'������'��������λ.");

define('_MI_SF_DISPLAY_HITS_COL', "��ʾ'�Ĵ�'����λ?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "��ʹ��'ժҪ'��ʽ��ʾʱ,ѡ'��'�������������ҳ�е��ʴ���Ŀ����'�Ĵ�'��������λ.");

define('_MI_SF_USEIMAGENAVPAGE', 'ʹ��ͼ���ҳ�浼��:');
define('_MI_SF_USEIMAGENAVPAGEDSC', "�������ѡ��Ϊ'��'��ҳ�浼������ͼ��ʽ����ʾ,����ʹ��ԭʼ������ҳ�浼����ʽ.");

define('_MI_SF_ALLOWCOMMENTS', '���ʴ���Ŀ������ظ����Ƶȼ�:');
define('_MI_SF_ALLOWCOMMENTSDSC', "�������ѡ��Ϊ'��'����ֻ���������ǵ�����ظ���ȡ���ʴ���Ŀ�лῴ��.<br /><br />ѡ'��'����ͨ�õȼ�������(���·���'����ظ�����'֮��.");

define('_MI_SF_ALLOWADMINHITS', '��������Ĵ�:');
define('_MI_SF_ALLOWADMINHITSDSC', '�����������������Ĵ���?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', '�Զ���׼������ʴ���Ŀ:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', '����Ҫ������������˼��Զ���׼������ʴ���Ŀ.');

define('_MI_SF_AUTOAPPROVE_REQUEST', '�Զ���׼������ʴ���Ŀ:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', '����Ҫ������������˼��Զ���׼������ʴ���Ŀ.');

define('_MI_SF_AUTOAPPROVE_ANS', '�Զ���׼���:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', '�Զ���׼��������Ľ��.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', '�Զ���׼�½��:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', '�Զ���׼�ѹ����ʴ���Ŀ������Ľ��.');

define('_MI_SF_LASTFAQSPERCAT', 'ÿ����������ϸ��ʴ���Ŀ:');
define('_MI_SF_LASTFAQSPERCATDSC', '��ʾ������е�ѶϢ��λ�����ʴ���Ŀ.');

define('_MI_SF_CATPERPAGE', 'ÿҳ��������(��Ա):');
define('_MI_SF_CATPERPAGEDSC', '��Ա��ÿҳ��ʾ����������.');

define('_MI_SF_PERPAGE', 'ÿҳ����ʴ���Ŀ(������):');
define('_MI_SF_PERPAGEDSC', '�����߶�ÿҳ��ʾ����ʴ���Ŀ.');

define('_MI_SF_PERPAGEINDEX', 'ÿҳ����ʴ���Ŀ(��Ա):');
define('_MI_SF_PERPAGEINDEXDSC', '��Ա��ÿҳ��ʾ����ʴ���Ŀ.');

define('_MI_SF_INDEXWELCOMEMSG', '����ҳ��ӭѶϢ:');
define('_MI_SF_INDEXWELCOMEMSGDSC', '��ģ��������ҳ����ʾ�Ļ�ӭѶϢ.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "��ģ���ڱ�վ�������ҵ���������������,��ͬ�ش�<b>��Ҫ���</b>��<b>��֪����</b>����������.�벦�����κ��ʴ���Ŀ�з����������."); 

define('_MI_SF_REQUESTINTROMSG', '�������ѶϢ:');
define('_MI_SF_REQUESTINTROMSGDSC', '����ѶϢ��ʾ���ʴ���Ŀ������.');
define('_MI_SF_REQUESTINTROMSGDEF', "���Ƿ��Ҳ���������Ľ��?û��ϵ!ֻҪ��������������������,�����߻���˲�����������������ڿ�����������֪�����������!"); 

define('_MI_SF_OPENINTROMSG', '�����������Ľ���ѶϢ:');
define('_MI_SF_OPENINTROMSGDSC', '����ѶϢ��ʾ�ڿ������������.');
define('_MI_SF_OPENINTROMSGDEF', "���ǿ���������嵥,�ɻ�Ա��������⵫��δ�н��.����֪������Ľ����԰�����Щ��������Э�����ǻش�."); 

define('_MI_SF_USEREALNAME', 'ʹ�û�Ա�ı���');
define('_MI_SF_USEREALNAMEDSC', '����ʾ��Ա����ʱ,����Ա���趨����������ʾ��Ա�ı���.');

define('_MI_SF_HELP_PATH_SELECT', "SmartFAQ����������·��");
define('_MI_SF_HELP_PATH_SELECT_DSC', "ѡ���������������ȡSmartFAQ����������.�������ص�'SmartFAQ�����׼�'�����ϴ���'modules/smartfaq/doc/',������ѡΪ'��ģ����'.���������Դ�ѡ���и�Ϊֱ�Ӵ�docs.xoops.org����ȡ����������λ��.��Ҳ����ѡ'�Զ�·��'��ָ����������·����Ҫ����һ��'�Զ�SmartFAQ��������·��'�趨·��");

define('_MI_SF_HELP_PATH_CUSTOM', "�Զ�SmartFAQ��������·��");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "������'�Զ�SmartFAQ��������·��'��ѡ'�Զ�·��',��ָ��SmartFAQ����������·��,��ʽ����Ϊ: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "��ģ����");
define('_MI_SF_HELP_CUSTOM', "�Զ�·��");

//define('_MI_SF_MODERATORSEDIT', '��������߱༭(���׹���)');
//define('_MI_SF_MODERATORSEDITDSC', '��ѡ���ʹ�����߱༭������е��������ʴ���Ŀ.���������ֻ���Ժ�׼�������������ʴ���Ŀ.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "����");
define("_MI_SF_ADMENU2", "���");
define("_MI_SF_ADMENU3", "�ʴ���Ŀ");
define("_MI_SF_ADMENU4", "����");
define("_MI_SF_ADMENU5", "Ȩ��");
define("_MI_SF_ADMENU6", "���鼰Ⱥ��");
define("_MI_SF_ADMENU7", "����ģ��");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "�����ʴ���Ŀ�嵥");
define("_MI_SF_ARTSRANDOM_DIDUNO", "��֪����?");
define("_MI_SF_ARTSRANDOM_FAQ", "�������!");
define("_MI_SF_ARTSRANDOM_HOW", "��Ҫ���...");
define("_MI_SF_ARTSCONTEXT", "�����������ʴ���Ŀ");
define("_MI_SF_RECENTFAQS", "�����ʴ���Ŀ(��ϸ)");
define("_MI_SF_RECENT_QUESTIONS", "���¿�������");
define("_MI_SF_MOST_VIEWED", "���������ʴ���Ŀ");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'ͨ���ʴ���Ŀ');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', '֪ͨѡ������������е��ʴ���Ŀ.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', '�ʴ���Ŀ���');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', '֪ͨѡ���������Ŀǰ���ʴ���Ŀ.');

define('_MI_SF_FAQ_NOTIFY', '�ʴ���Ŀ');
define('_MI_SF_FAQ_NOTIFY_DSC', '֪ͨѡ��������ڴ��ʴ���Ŀ.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'ͨ�ÿ��ŵ�����');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', '֪ͨѡ������������п��ŵ�����');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', '�ʴ���Ŀ���');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', '֪ͨѡ���������Ŀǰ�����.');

define('_MI_SF_QUESTION_NOTIFY', '���ŵ�����');
define('_MI_SF_QUESTION_NOTIFY_DSC', '֪ͨѡ���������Ŀǰ���ŵ�����.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', '�����');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', '���������ʱ֪ͨ��.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', '���������ʱ�յ�֪ͨ.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: �����');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', '������ʴ���Ŀ');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', '���κ����������ʴ���Ŀʱ֪ͨ��.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', '���κ����������ʴ���Ŀʱ�յ�֪ͨ.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ���ϴ����ʴ���Ŀ');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', '�¹������ʴ���Ŀ');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', '���κ��¹������ʴ���Ŀʱ֪ͨ��.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', '���κ��¹������ʴ���Ŀ�յ�֪ͨ.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: �¹������ʴ���Ŀ');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', '������Ľ��');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '���κ��ʴ���Ŀ��������Ľ��ʱ֪ͨ��.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '���κ��ʴ���Ŀ��������Ľ��ʱ�յ�֪ͨ.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ������Ľ��');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', '�¹����Ľ��');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '���κ��ʴ���Ŀ���¹����Ľ��ʱ֪ͨ��.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '���κ��ʴ���Ŀ���¹����Ľ��ʱ�յ�֪ͨ.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: �¹����Ľ��');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', '�ϴ����ʴ���Ŀ');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', '�ڴ���������ϴ����ʴ���Ŀʱ֪ͨ��.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', '����������ϴ����ʴ���Ŀʱ�յ�֪ͨ.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ������ϴ����ʴ���Ŀ'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', '�¹������ʴ���Ŀ');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', '�ڴ���������¹������ʴ���Ŀʱ֪ͨ��.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', '����������¹������ʴ���Ŀʱ�յ�֪ͨ.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ������¹������ʴ���Ŀ'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', '������Ľ��');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '�ڴ��������������Ľ��ʱ֪ͨ��.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '���������������Ľ��ʱ�յ�֪ͨ.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ������Ľ��');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', '�¹����Ľ��');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '�ڴ���������¹����Ľ��ʱ֪ͨ��.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '����������¹����Ľ��ʱ�յ�֪ͨ.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: �¹����Ľ��');

define('_MI_SF_FAQ_REJECTED_NOTIFY', '������ʴ���Ŀ');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', '�����ʴ���Ŀ�����ʱ֪ͨ��.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', '���ʴ���Ŀ�����ʱ�յ�֪ͨ.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ������ʴ���Ŀ'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', '��׼���ʴ���Ŀ');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', '�����ʴ���Ŀ�Ѻ�׼ʱ֪ͨ��.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', '���ʴ���Ŀ�Ѻ�׼ʱ�յ�֪ͨ.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ��׼���ʴ���Ŀ'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', '��׼�Ľ��');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', '���˽���Ѻ�׼ʱ֪ͨ��.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', '�˽���Ѻ�׼ʱ�յ�֪ͨ.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ��׼�Ľ��'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', '����Ľ��');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', '���˽�𱻷��ʱ֪ͨ��.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', '�˽�𱻷��ʱ�յ�֪ͨ.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ����Ľ��'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', '�ϴ�������');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', '���κδ����ϴ�������ʱ֪ͨ��.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', '�κδ����ϴ�������ʱ�յ�֪ͨ.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ���ϴ�������');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', '����������');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', '�ڿ������������κι���������ʱ֪ͨ��.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', '�ڿ������������κι���������ʱ�յ�֪ͨ.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: �¹���������');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', '������');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '�κο��������н�����ʱ֪ͨ��.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '�κο��������н�����ʱ�յ�֪ͨ.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ����½��');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', '�������');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', '��Ŀǰ��������������ʱ֪ͨ��.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', '��Ŀǰ��������������ʱ�յ�֪ͨ.');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ���������');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', '����������');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', '��Ŀǰ����������⹫��ʱ֪ͨ��.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', '��Ŀǰ����������⹫��ʱ�յ�֪ͨ.');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: �¹���������');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', '������');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '��Ŀǰ����п��������н�����ʱ֪ͨ��.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '��Ŀǰ����п��������н�����ʱ�յ�֪ͨ.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ����½��');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', '���������');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', '�����ⱻ���ʱ֪ͨ��.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', '�����ⱻ���ʱ�յ�֪ͨ.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ���������');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', '��׼������');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', '�������׼ʱ֪ͨ��.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', '�������׼ʱ�յ�֪ͨ.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ��׼������');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', '��׼�Ľ��');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', '�˽���׼ʱ֪ͨ��.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', '�˽���׼ʱ�յ�֪ͨ.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ��׼�Ľ��');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', '����Ľ��');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', '�˽�𱻷��ʱ֪ͨ��.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', '�˽�𱻷��ʱ�յ�֪ͨ.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �Զ�֪ͨ: ����Ľ��');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "���з�Ա");
define('_MI_SF_DEVELOPER_LEAD', "�з���Ա");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "������");
define('_MI_SF_DEVELOPER_WEBSITE', "��վ");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "�й���Ա");
define('_MI_SF_DEMO_SITE', "SmartFactoryչʾ��վ");
define('_MI_SF_MODULE_INFO', "ģ���з���Ѷ");
define('_MI_SF_MODULE_STATUS', "״̬");
define('_MI_SF_MODULE_RELEASE_DATE', "��������");
define('_MI_SF_MODULE_DEMO', "չʾ��վ");
define('_MI_SF_MODULE_SUPPORT', "�ٷ�֧Ԯ��վ");
define('_MI_SF_MODULE_BUG', "�ر���ģ��Ĵ���");
define('_MI_SF_MODULE_FEATURE', "���鱾ģ�������µĹ���");
define('_MI_SF_MODULE_DISCLAIMER', "��������");
define('_MI_SF_AUTHOR_WORD', "���ߵĻ�");
define('_MI_SF_VERSION_HISTORY', "�汾��ʷ��¼");

// Beta
define('_MI_SF_WARNING_BETA', "��ģ����������,û���κεı�֤. 
��ģ��Ϊ���԰汾,Ҳ����Ŀǰ�����з��׶�.
�˷�����������<b>��Ϊ���Զ���</b>.
������<b>ǿ�ҵ�</b>��������Ҫ���������е���վ�������в�ֵ�Ļ�����.");

// RC
define('_MI_SF_WARNING_RC', "��ģ����������,û���κεı�֤.
��ģ��Ϊ��ʽ����ǰ�����ð汾,������ò�Ҫ�����в�ֵ����վ��.
��ģ�黹���ڷ�չ�Ľ׶�,����ʹ������Ϊ���Լ�������. 
Ҳ����˵���߲���Ա�ģ�鸺�κε�����.");

// Final
define('_MI_SF_WARNING_FINAL', "��ģ����������,û���κεı�֤.
��Ȼ��ģ���Ѳ����ǲ��԰�,������Ȼ���з�.
���汾�����������е���վ���в�ֵ�Ļ�����.
��ʹ������Ϊ���Լ�������,Ҳ����˵���߲���Ա�ģ�鸺�κε�����.");

?>
