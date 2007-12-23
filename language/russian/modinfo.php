<?php

/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Translator: LazyBadger <badger@lair.pp.ru> 
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

// A brief description of this module
define("_MI_SF_MD_DESC", "����������� ������� ���������� ���������-�������� ��� ������ XOOPS-�����");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "���������� �&amp;�");
define("_MI_SF_SUB_SMNAME2", "��������� �&amp;�");
define("_MI_SF_SUB_SMNAME3", "�������� �������");
define("_MI_SF_SUB_SMNAME4", "������������� �&amp;�");

// Config options
define("_MI_SF_ALLOWSUBMIT", "�������� �������������:");
define("_MI_SF_ALLOWSUBMITDSC", "��������� ������������� ���������� �&amp;� �� ����� �����?");

define("_MI_SF_ALLOWREQUEST", "������� �������������:");
define("_MI_SF_ALLOWREQUESTDSC", "��������� ������������� ����������� �&amp;� �� ����� �����?");

define("_MI_SF_ANONPOST", "���������� ��������� ����������");
define("_MI_SF_ANONPOSTDSC", "��������� ���������� ������������� ���������� ��� ����������� �&amp;�.");

define('_MI_SF_DATEFORMAT', '������ ����:');
define('_MI_SF_DATEFORMATDSC', '����������� ��������� ����� ����� language/russian/global.php ��� ������ �����. ������: "d-M-Y H:i" ����� ������� ��� "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', '���������� ������������� �������');
define('_MI_SF_DISPLAY_COLLAPSDSC', "�������� '��' ��� ������ ������������� ������ �� ��������� ���������� � ���������.");

define('_MI_SF_DISPLAYTYPE', "��� ������ �&amp;�:");
define('_MI_SF_DISPLAYTYPEDSC', "���� ������ '��������� �����', �� ������ ������, ���� � ���������� ��������� ������� �&amp;� ����� �������� � ��������� ���������. ���� ������ '������ �����', ������ �&amp;� ������ ������ � ��������� ��������� ����� ������� ���������.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "��������� �����");
define('_MI_SF_DISPLAYTYPE_FULL', "������ �����");

define('_MI_SF_DISPLAY_LAST_FAQ', '���������� ������� ��������� �&amp;�?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "�������� '��' ��� ������ ��������� �&amp;� � ������ ��������� �� �������� �������� � ��������� ���������.");

define('_MI_SF_LAST_FAQ_SIZE', '������ ���������� �&amp;�:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "������������� ������������ ������ ������� � ������� ��������� �&amp;�.");

define('_MI_SF_QUESTION_SIZE', "������ �������:");
define('_MI_SF_QUESTION_SIZEDSC', "������������ ������������ ������ ������� ��� ������ ��� ��������� �� �������� ������ �������/������.");

define('_MI_SF_DISPLAY_SBCAT_DSC', '���������� �������� ������������?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "�������� '��' ��� ������ �������� ������������ �� �������� �������� � ��������� ���������.");

define('_MI_SF_ORDERBYDATE', '����������� �&amp;�s �� ����:');
define('_MI_SF_ORDERBYDATEDSC', '���� ��� ����� ����������� � "��", �&amp;� ������ ��������� ����� ����������� �� �������� ����, � ��������� ������ ����� �������������� ���������� �� ����.');

define('_MI_SF_DISPLAY_DATE_COL', "���������� ������� '���� ����������'?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "����� ������ ����� '���������', �������� '��' ��� ������ ������� '���� ����������' � ������� �&amp;� �� �������� �������� � ��������� ���������.");

define('_MI_SF_DISPLAY_HITS_COL', "���������� ������� '���������'?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "����� ������ ����� '���������', �������� '��' ��� ������ ������� '���������' � ������� �&amp;� �� �������� �������� � ��������� ���������.");

define('_MI_SF_USEIMAGENAVPAGE', '������������ ��������� �� ��������� � ����������:');
define('_MI_SF_USEIMAGENAVPAGEDSC', '���� �� ���������� ��� ����� � "��", ��������� �� ��������� ����� �������� � ����������,  ����� - ������� ��������� ����� ������������.');

define('_MI_SF_ALLOWCOMMENTS', '�������������� ����������� �� ������ �&amp;�:');
define('_MI_SF_ALLOWCOMMENTSDSC', '���� �� ���������� ��� ����� � "��", �� ������� ����������� ������ � ��� �&amp;�, ������� �������� checkbox ������������. <br /><br />�������� "No" ��� ���������� ������������� �� ���������� ������ (�������� ���� "������� ���������������".');

define('_MI_SF_ALLOWADMINHITS', '�������� ��������� �������:');
define('_MI_SF_ALLOWADMINHITSDSC', '��������� ������ ������ ��������� � ����������?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', '�������������� ������������ �&amp;�:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', '������������� �������� ������������ �&amp;� ��� ������������� ��������������.');

define('_MI_SF_AUTOAPPROVE_REQUEST', '������������� ����������� �&amp;�:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', '������������� �������� ����������� �&amp;� ��� ������������� ��������������.');

define('_MI_SF_AUTOAPPROVE_ANS', '������������� �������:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', '������������� �������� ������ �� �������� �������.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', '�������������� ��������� ����� �������:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', '������������ ����� ������ ��� �������������� �&amp;�.');

define('_MI_SF_LASTFAQSPERCAT', '������������ ���������� "��������� �&amp;�" � ���������:');
define('_MI_SF_LASTFAQSPERCATDSC', '������������ ����� of �&amp;�, ������������ � ������� ���������� ���������.');

define('_MI_SF_CATPERPAGE', '�������� ��������� �� �������� (���������������� �������):');
define('_MI_SF_CATPERPAGEDSC', '������������ ����� �������� ��������� �� ��������, ������������ �������������.');

define('_MI_SF_PERPAGE', '�������� �&amp;� �� �������� (��������� �������):');
define('_MI_SF_PERPAGEDSC', '������������ ����� �&amp;� �� ��������, ������������ ������������ � �&amp;� �������.');

define('_MI_SF_PERPAGEINDEX', '�������� �&amp;� �� �������� (���������������� �������):');
define('_MI_SF_PERPAGEINDEXDSC', '������������ ����� �&amp;� �� ��������, ������������ ������������ ������������');

define('_MI_SF_INDEXWELCOMEMSG', '������� ����� �� ������� ��������:');
define('_MI_SF_INDEXWELCOMEMSGDSC', '��������������� �����, ������������ �� �������� �������� ������.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "� ���� ������� ����� �� ������� ������ �� ����� ���������� �������, ����� ��� � ������ ��  ������� <b>��� �������...</b> � <b>� ������ ��, ���...</b>. �� ����������� �������������� ����� ������/�����"); 

define('_MI_SF_REQUESTINTROMSG', '������� ��������� ��� �������:');
define('_MI_SF_REQUESTINTROMSGDSC', '���������, ������� ����� �������� �� �������� ������ �&amp;� ������.');
define('_MI_SF_REQUESTINTROMSGDEF', "�� ����� ������ �� ���� ������? �� ��������! ��������� ��� ����� ��� ������� ������ �� ��� ������. ������� ����� ����������� � ��� �  (������ �����) ���������� ������ � ������ '�������� �������', ����� ���-������ ���� ���� �� ���� �����!"); 

define('_MI_SF_OPENINTROMSG', '������� ��������� ������ "�������� �������":');
define('_MI_SF_OPENINTROMSGDSC', '���������, ������� ����� �������� � ������ �������� ������� ������.');
define('_MI_SF_OPENINTROMSGDEF', "��� ������ '�������� ��������', �.�. ��������, ������� ���� ������ ������������ ����� �����, �� �������� ���� ��� �������. �� ������ ������� ����� �� ��������, ���� ������ ������ ��� � ������� �� ����."); 

define('_MI_SF_USEREALNAME', '������������ ��������� ���');
define('_MI_SF_USEREALNAMEDSC', '��� ������ ����� ������������ ������������ �������� ��� ������������, ���� �� ��������� ���');

define('_MI_SF_HELP_PATH_SELECT', "���� � ������� SmartFAQ");
define('_MI_SF_HELP_PATH_SELECT_DSC', "�������� ������ �� ������ ������ ������� �� SmartFAQ. ���� �� ��������� 'SmartFAQ's Help Package' � ��������� ��� � 'modules/smartfaq/doc/', ������ �������� '������ ������'. ��� ������������, �� ������ ������������ ������ � ����������� ����� ��������������� � ����� docs.xoops.org, ������ ���� �������. �� ����� ������ ������� '������������ ����' � �������������� ���������� ����� � ������ � ��������� ����� ������� '������������ ���� � ������� �� SmartFAQ'");

define('_MI_SF_HELP_PATH_CUSTOM', "������������ ���� � ������� �� SmartFAQ");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "���� �� ������� '������������ ����' � ���������� ����� '���� � ������� SmartFAQ', ������� URL � ������ ������������ SmartFAQ � �������: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "������ ������");
define('_MI_SF_HELP_CUSTOM', "������������ ����");

//define('_MI_SF_MODERATORSEDIT', '��������� ������������� �������������');
//define('_MI_SF_MODERATORSEDITDSC', '���� ����� �������� ����������� ������������� ������� � �&amp;� � ����������, �������� ��� ���������. ����� ���������� ����� ������ �������� ��� ��������� ������� � �&amp;�.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "������� ��������");
define("_MI_SF_ADMENU2", "���������");
define("_MI_SF_ADMENU3", "�&amp;�");
define("_MI_SF_ADMENU4", "�������");
define("_MI_SF_ADMENU5", "�����");
define("_MI_SF_ADMENU6", "����� � ������");
define("_MI_SF_ADMENU7", "������� � ������");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "������ ��������� �&amp;�");
define("_MI_SF_ARTSRANDOM_DIDUNO", "� ������ ��, ���...");
define("_MI_SF_ARTSRANDOM_FAQ", "��������� ������!");
define("_MI_SF_ARTSRANDOM_HOW", "��� �������...");
define("_MI_SF_ARTSCONTEXT", "����������� �&amp;�");
define("_MI_SF_RECENTFAQS", "��������� �&amp;� ��������");
define("_MI_SF_RECENT_QUESTIONS", "��������� �������� �������");

// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', '����������');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', '������ ���������� ��� ���� �&amp;�.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', '�&amp;� ���������');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', '������ ���������� ��� ��������� ���������.');

define('_MI_SF_FAQ_NOTIFY', '�&amp;�');
define('_MI_SF_FAQ_NOTIFY_DSC', '������ ���������� ��� ������� �&amp;�.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', '��������� �������� �������');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', '������ ���������� ��� ���� �������� ��������');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', '�&amp;� ���������');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', '������ ���������� ��� ��������� ���������..');

define('_MI_SF_QUESTION_NOTIFY', '�������� �������');
define('_MI_SF_QUESTION_NOTIFY_DSC', '������ ���������� ��� ���������� ��������� �������.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', '����� ���������');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', '���������� ���� � �������� ����� ���������.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', '�������� ���������� � �������� ����� ���������.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ���������');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', '�&amp;� ���������');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', '���������� ����, ����� ����� �&amp;� ��������� � ������� ���������.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', '�������� ����������, ����� ����� �&amp;� ��������� � ������� ���������.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� �&amp;� ���������');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', '����� �&amp;� �����������');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', '���������� ���� � ���������� ������ �&amp;�.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', '�������� ����������, ����� ����� �&amp;� �����������.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� �&amp;� �����������');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', '����� ����� ���������');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '���������� ����, ����� ����� ����� ��������� ���  ������ �&amp;�.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '�������� ����������, ����� ����� ����� ��������� ���  ������ �&amp;�.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ����� ��������� ��� �&amp;�.');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', '����� ����� �����������');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '���������� ����, ����� ����� ����� ����������� ���  ������ �&amp;�.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '�������� ����������, ����� ����� ����� ����������� ���  ������ �&amp;�.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ����� �����������');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', '�&amp;� �������');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', '���������� ����, ����� ����� �&amp;� ������� � ������� ���������.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', '�������� ����������, ����� ����� �&amp;� ������� � ������� ���������.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� �&amp;� ������� � ���������'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', '����� �&amp;� �����������');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', '���������� ����, ����� ����� �&amp;� ����������� � ������� ���������.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', '�������� ����������, ����� ����� �&amp;� ����������� � ������� ���������.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� �&amp;� ����������� � ���������'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', '����� ����� ���������');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '���������� ����, ����� ����� ����� ��������� ���  �&amp;� � ���� ���������');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '�������� ����������, ����� ����� ����� ��������� ��� �&amp;� � ���� ���������');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ����� ���������');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', '����� ����� �����������');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '���������� ����, ����� ����� ����� ����������� ��� �&amp;� � ���� ���������');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '�������� ����������, ����� ����� ����� ����������� ��� �&amp;� � ���� ���������');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ����� �����������');

define('_MI_SF_FAQ_REJECTED_NOTIFY', '����������� �&amp;�');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', '���������� ����, ���� ���� �&amp;� ����� ��������.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', '�������� ����������, ���� ���� �&amp;� ��������.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: �&amp;� ��������'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', '���������� �&amp;�');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', '���������� ����, ����� ���� �&amp;� ����� �������.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', '�������� ����������, ����� ���� �&amp;� ����� �������.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �������������� : �&amp;� �������'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', '����� �������');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', '���������� ����, ����� ���� ����� ����� �������.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', '�������� ����������, ����� ���� ����� ����� �������.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� �������'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', '����� ��������');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', '���������� ����, ���� ���� ����� ����� ��������.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', '�������� ����������, ���� ���� ����� ����� ��������.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ��������'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', '������� ������');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', '���������� ����, ����� ������ ������� � ������� ���������');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', '�������� ����������, ����� ����� ������ ������� � ������� ���������.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ������ �������');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', '����������� ������');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', '���������� ����, ����� ����� ������ ����������� � ������ �������� �������');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', '�������� ����������, ����� ����� ������ ����������� � ������ �������� �������');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������  ����� ������ �����������');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', '��������� �����');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '���������� ����, ����� ��������� ����� ��� ������ ��������� �������.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '�������� ����������, ����� ��������� ����� ��� ������ ��������� �������.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ��������� ��� ��������� �������');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', '������� ������');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', '���������� ����, ����� ������� ������ � ������� ���������');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', '�������� ����������, ����� ������� ������ � ������� ���������');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ������ �������');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', '������ �����������');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', '���������� ����, ����� ����������� ������ � ������� ���������');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', '�������� ����������, ����� ����������� ������ � ������� ���������');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ������ �����������');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', '��������� �����');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '���������� ����, ����� ����� ��������� ��� �������� �������� � ���� ���������.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '�������� ����������, ����� ����� ��������� ��� �������� �������� � ���� ���������.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ���������');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', '������ ��������');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', '���������� ����, ���� ������ ����� ��������.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', '�������� ����������, ���� ������ ��������.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �������������� : ������ ��������');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', '������ �������');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', '���������� ����, ���� ������ �������.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', '�������� ����������, ���� ������ �������.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ������ �������');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', '����� �������');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', '���������� ����, ����� ����� ����� �������.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', '�������� ����������, ����� ����� ����� �������.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� �������');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', '����� ��������');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', '���������� ����, ���� ����� ����� ��������.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', '�������� ����������, ���� ����� ����� ��������.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} ��������������: ����� ��������');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "������������");
define('_MI_SF_DEVELOPER_LEAD', "������� �����������");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "��������(�)");
define('_MI_SF_DEVELOPER_WEBSITE', "Web-����");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "�������");
define('_MI_SF_DEMO_SITE', "����-���� SmartFactory");
define('_MI_SF_MODULE_INFO', "���������� � ���������� ������");
define('_MI_SF_MODULE_STATUS', "������");
define('_MI_SF_MODULE_DEMO', "����-����");
define('_MI_SF_MODULE_SUPPORT', "����������� ���� ���������");
define('_MI_SF_MODULE_BUG', "�������� �� ������ � ������");
define('_MI_SF_MODULE_FEATURE', "���������� ����� ���� ��� ������");
define('_MI_SF_MODULE_DISCLAIMER', "���������");
define('_MI_SF_AUTHOR_WORD', "����� ������");
define('_MI_SF_VERSION_HISTORY', "������� ������");

// Beta
define('_MI_SF_WARNING_BETA', '������ ������������ "As Is", ��� �����-���� ��������. ���� ������ - BETA, ��� ��������, ��� �� � �������� ����������. ���� ����� ������������ <b>������ ��� ����� ������������</b> � �� <b>������������</b> ����������� �� ������������ ��� �� "�����" ����� ��� � ���������������� ��������.');

// RC
define('_MI_SF_WARNING_RC', '������ ������������ "As Is", ��� �����-���� ��������. ���� ������ - �����-�������� � �� ������ �������������� � ���������������� �������� . ������ � ����������, � �� ����������� ��� �� ���� ����� � ����, ��� ������ - ����� ������� � ���� ��� � ������ ����������������.');

// Final
define('_MI_SF_WARNING_FINAL', "������ ������������ 'As Is', ��� �����-���� ��������. ���� ���� ������ � �� ����, �� ��� �� ����� �� ��� � �������� ����������. ���� ����� ����� �������������� �� ����� ������, �� ��� ������������� - ���� ����� ���������������, � �� ������ ����� ������.");

?>
