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
define("_MI_SF_MD_DESC", "���zXOOPS���ϥΪ��i���ݵ��޲z�t��");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "���X�@�Ӱݵ�����");
define("_MI_SF_SUB_SMNAME2", "�ШD�@�Ӱݵ�����");
define("_MI_SF_SUB_SMNAME3", "�}����D");
define("_MI_SF_SUB_SMNAME4", "�޲z�ݵ�����");

// Config options
define("_MI_SF_ALLOWSUBMIT", "�|�����X������:");
define("_MI_SF_ALLOWSUBMITDSC", "���\�|�����X�ݵ����ب�z������?");

define("_MI_SF_ALLOWREQUEST", "�|���ШD:");
define("_MI_SF_ALLOWREQUESTDSC", "���\�|���b�z�������e�X�ݵ����ت��ШD?");

define("_MI_SF_NEWANSWER", "���\�o��s���ѵ�:");
define("_MI_SF_NEWANSWERDSC", "��'�O'�h���\�|�����X�s���ѵ���w���G���ݵ����ؤ�.");

define("_MI_SF_ANONPOST", "���\�X�ȵo��");
define("_MI_SF_ANONPOSTDSC", "���\�D�|�����X�νШD�ݵ�����.");

define('_MI_SF_DATEFORMAT', '����榡:');
define('_MI_SF_DATEFORMATDSC', '�ϥ� language/english/global.php �̫�@�����ӿ����ܪ��榡. �Ҧp: "d-M-Y H:i" �Y�� "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', '��ܦ��i���\��C');
define('_MI_SF_DISPLAY_COLLAPSDSC', "��'�O'�|�b���ޤ����O�����ϥΦ��i�C.");

define('_MI_SF_DISPLAYTYPE', "�ݵ�������ܤ覡:");
define('_MI_SF_DISPLAYTYPEDSC', "�Y��'�K�n�Ҧ�'�h�C�Ӱݵ����ؤ��u�����D�Τ���P�H���b��쪺���O��,�Y��'����Ҧ�'�h�C�ݵ����ط|�����ܦb��쪺���O��.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "�K�n�Ҧ�");
define('_MI_SF_DISPLAYTYPE_FULL', "����Ҧ�");

define('_MI_SF_DISPLAY_LAST_FAQ', '�C�X�W�Ӱݵ���������?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "��'�O'�h�b���ޤ����O�������C�����O��ܤW�Ӱݵ�����.");

define('_MI_SF_DISPLAY_LAST_FAQS', '�C�X�W�Ӱݵ����زM���?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "��'�O'�h�b���ޭ�����ܤW�Ӱݵ�����.");

define('_MI_SF_LAST_FAQ_SIZE', '�W�Ӱݵ����ؤj�p:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "�]�w�W�Ӱݵ����س̤j���j�p.");

define('_MI_SF_QUESTION_SIZE', "���D�j�p:");
define('_MI_SF_QUESTION_SIZEDSC', "�]�w���D�b��@�ݵ����ؤ����D�̤j��ܤj�p.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', '�b������ܦ����O');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "��'�O'�h�b���ޭ����N��ܦ����O.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', '��ܥD���O��������?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "��'�O'�h�D���O�b���ޤ����O��������ܨ����O������.");

define('_MI_SF_DISPLAY_SBCAT_DSC', '��ܦ����O��������?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "��'�O'�h�����O�b���ޤ����O��������ܦ����O������.");

define('_MI_SF_ORDERBYDATE', '�̰ݵ����ت�����Ƨ�:');
define('_MI_SF_ORDERBYDATEDSC', "�Y�z�]���ﶵ��'�O'�h���O�����ݵ����ط|�̤������ӱƧ�,�_�h�|�̫��w���Ǩӱ�.");

define('_MI_SF_DISPLAY_DATE_COL', "���'���G��'�����?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "��ϥ�'�K�n'�覡��ܮ�,��'�O'�h�b���O�P���ޭ������ݵ����ط|��'���G��'��������.");

define('_MI_SF_DISPLAY_HITS_COL', "���'�\��'�����?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "��ϥ�'�K�n'�覡��ܮ�,��'�O'�h�b���O�P���ޭ������ݵ����ط|��'�\��'��������.");

define('_MI_SF_USEIMAGENAVPAGE', '�ϥιϹ��������ɤ�:');
define('_MI_SF_USEIMAGENAVPAGEDSC', "�Y�z�]���ﶵ��'�O'�h�����ɤ޷|�H�Ϲ��覡�Ӫ��,�_�h�ϥέ�l����r�����ɤޤ覡.");

define('_MI_SF_ALLOWCOMMENTS', '�b�ݵ����ت��N���^�б����:');
define('_MI_SF_ALLOWCOMMENTSDSC', "�Y�z�]���ﶵ��'�O'�h�z�u�|�b�����̪��N���^�Ю֨����ݵ����ؤ��|�ݨ�.<br /><br />��'�_'�h�ѳq�ε��ŨӺ޲z(���U��b'�N���^�гW�h'���U.");

define('_MI_SF_ALLOWADMINHITS', '�޲z�p�ƾ\��:');
define('_MI_SF_ALLOWADMINHITSDSC', '���\�޲z�̯ǤJ�p�ƪ�����?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', '�۰ʮ֭㴣�X���ݵ�����:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', '���ݭn�g�L�޲z�̼f�֧Y�۰ʮ֭㴣�X���ݵ�����.');

define('_MI_SF_AUTOAPPROVE_REQUEST', '�۰ʮ֭�ШD���ݵ�����:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', '���ݭn�g�L�޲z�̼f�֧Y�۰ʮ֭�ШD���ݵ�����.');

define('_MI_SF_AUTOAPPROVE_ANS', '�۰ʮ֭�ѵ�:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', '�۰ʮ֭�}����D���ѵ�.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', '�۰ʮ֭�s�ѵ�:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', '�۰ʮ֭�w���G�ݵ����طs���X���ѵ�.');

define('_MI_SF_LASTFAQSPERCAT', '�C�����O�̦h���W�Ӱݵ�����:');
define('_MI_SF_LASTFAQSPERCATDSC', '��ܦb���O�����T�����̦h���ݵ�����.');

define('_MI_SF_CATPERPAGE', '�C���̦h���O��(�|��):');
define('_MI_SF_CATPERPAGEDSC', '�|���ݨC����̦ܳh�D���O��.');

define('_MI_SF_PERPAGE', '�C���̦h�ݵ�����(�޲z��):');
define('_MI_SF_PERPAGEDSC', '�޲z�̺ݨC����̦ܳh�ݵ�����.');

define('_MI_SF_PERPAGEINDEX', '�C���̦h�ݵ�����(�|��):');
define('_MI_SF_PERPAGEINDEXDSC', '�|���ݨC����̦ܳh�ݵ�����.');

define('_MI_SF_INDEXWELCOMEMSG', '���ޭ��w��T��:');
define('_MI_SF_INDEXWELCOMEMSGDSC', '���Ҳզb���ޭ�����ܪ��w��T��.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "���Ҳզb�����i���z���`�������D�P�ѵ�,�p�P�^��<b>�ڭn�p��</b>�M<b>�z���D��</b>�o�˪����D.�м����b����ݵ����ؤ��o��z���N��."); 

define('_MI_SF_REQUESTINTROMSG', '�ШD���аT��:');
define('_MI_SF_REQUESTINTROMSGDSC', '���аT����ܦb�ݵ����ت��ШD.');
define('_MI_SF_REQUESTINTROMSGDEF', "�z�O�_�䤣��z���D���ѵ�?�S���Y!�u�n�ӳo�Ӫ��N�z�����D��,�޲z�̷|�f�֨ä��G�z�ШD�����D�b�}����D�������D���H�Ӹѵ�!"); 

define('_MI_SF_OPENINTROMSG', '�}����D�Ϫ����аT��:');
define('_MI_SF_OPENINTROMSGDSC', '���аT����ܦb�}����D���ШD.');
define('_MI_SF_OPENINTROMSGDEF', "�o�O�}����D���M��,�ѷ|�����X�����D���|�����ѵ�.�Y�z���D���D���ѵ��i�H���U�o�Ƕ}����D��U�ڭ̦^��."); 

define('_MI_SF_USEREALNAME', '�ϥη|�������W');
define('_MI_SF_USEREALNAMEDSC', '����ܷ|���W�ٮ�,�Y�|�����]�w���W�Y�i��ܷ|�������W.');

define('_MI_SF_HELP_PATH_SELECT', "SmartFAQ���D�U�ɮ׸��|");
define('_MI_SF_HELP_PATH_SELECT_DSC', "��ܱz�Q�q���̨Ӧs��SmartFAQ���D�U�ɮ�.�Y�z�U����'SmartFAQ�D�U�M��'�B�w�W�Ǩ�'modules/smartfaq/doc/',�z�i�H�אּ'�b�Ҳդ�'.�άO�z�i�H�q�ﶵ���אּ�����qdocs.xoops.org�Ӧs���D�U�ɮת���m.�z�]�i�H��'�ۭq���|'�B���w�D�U�ɪ����|�ín�b�U�@��'�ۭqSmartFAQ���D�U�ɸ��|'�]�w���|");

define('_MI_SF_HELP_PATH_CUSTOM', "�ۭqSmartFAQ���D�U�ɸ��|");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "�Y�z�b'�ۭqSmartFAQ���D�U�ɸ��|'����'�ۭq���|',�Ы��wSmartFAQ�D�U�ɮת����|,�榡�d�Ҭ�: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "�b�Ҳդ�");
define('_MI_SF_HELP_CUSTOM', "�ۭq���|");

//define('_MI_SF_MODERATORSEDIT', '���\�޲z�̽s��(�i���޲z)');
//define('_MI_SF_MODERATORSEDITDSC', '���ﶵ�i�Ϻ޲z�̽s��b���O�������D�P�ݵ�����.�_�h�޲z�̥u�i�H�֭�Χ_�M���D�ШD�ΰݵ�����.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "����");
define("_MI_SF_ADMENU2", "���O");
define("_MI_SF_ADMENU3", "�ݵ�����");
define("_MI_SF_ADMENU4", "���D");
define("_MI_SF_ADMENU5", "�v��");
define("_MI_SF_ADMENU6", "�϶��θs��");
define("_MI_SF_ADMENU7", "��^�Ҳ�");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "�̷s�ݵ����زM��");
define("_MI_SF_ARTSRANDOM_DIDUNO", "�z���D��?");
define("_MI_SF_ARTSRANDOM_FAQ", "�H�����D!");
define("_MI_SF_ARTSRANDOM_HOW", "�ڭn�p��...");
define("_MI_SF_ARTSCONTEXT", "�ھڤW�U��ݵ�����");
define("_MI_SF_RECENTFAQS", "�̷s�ݵ�����(�Բ�)");
define("_MI_SF_RECENT_QUESTIONS", "�̷s�}����D");
define("_MI_SF_MOST_VIEWED", "�\���̦h���ݵ�����");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', '�q�ΰݵ�����');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', '�q���ﶵ�i�M�Φb�Ҧ����ݵ�����.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', '�ݵ��������O');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', '�q���ﶵ�i�M�Φb�ثe���ݵ�����.');

define('_MI_SF_FAQ_NOTIFY', '�ݵ�����');
define('_MI_SF_FAQ_NOTIFY_DSC', '�q���ﶵ�i�M�Φb���ݵ�����.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', '�q�ζ}�񪺰��D');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', '�q���ﶵ�i�M�Φb�Ҧ��}�񪺰��D');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', '�ݵ��������O');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', '�q���ﶵ�i�M�Φb�ثe�����O.');

define('_MI_SF_QUESTION_NOTIFY', '�}�񪺰��D');
define('_MI_SF_QUESTION_NOTIFY_DSC', '�q���ﶵ�i�M�Φb�ثe�}�񪺰��D.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', '�s���O');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', '���s���O�إ߮ɳq����.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', '���s���O�إ߮ɦ���q��.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s���O');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', '���X���ݵ�����');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', '�����󴣥X�ݼf���ݵ����خɳq����.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', '�����󴣥X�ݼf���ݵ����خɦ���q��.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s�W�Ǫ��ݵ�����');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', '�s���G���ݵ�����');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', '������s���G���ݵ����خɳq����.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', '������s���G���ݵ����ئ���q��.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s���G���ݵ�����');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', '�s���X���ѵ�');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '������ݵ����ئ��s���X���ѵ��ɳq����.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '������ݵ����ئ��s���X���ѵ��ɦ���q��.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s���X���ѵ�');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', '�s���G���ѵ�');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '������ݵ����ئ��s���G���ѵ��ɳq����.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '������ݵ����ئ��s���G���ѵ��ɦ���q��.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s���G���ѵ�');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', '�W�Ǫ��ݵ�����');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', '�b�����O�����W�Ǫ��ݵ����خɳq����.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', '�����O�����W�Ǫ��ݵ����خɦ���q��.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: ���O���W�Ǫ��ݵ�����'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', '�s���G���ݵ�����');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', '�b�����O�����s���G���ݵ����خɳq����.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', '�����O�����s���G���ݵ����خɦ���q��.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: ���O���s���G���ݵ�����'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', '�s���X���ѵ�');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', '�b�����O�����s���X���ѵ��ɳq����.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', '�����O�����s���X���ѵ��ɦ���q��.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s���X���ѵ�');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', '�s���G���ѵ�');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', '�b�����O�����s���G���ѵ��ɳq����.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', '�����O�����s���G���ѵ��ɦ���q��.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s���G���ѵ�');

define('_MI_SF_FAQ_REJECTED_NOTIFY', '�_�M���ݵ�����');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', '�Y���ݵ����سQ�_�M�ɳq����.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', '���ݵ����سQ�_�M�ɦ���q��.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �_�M���ݵ�����'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', '�֭㪺�ݵ�����');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', '�Y���ݵ����ؤw�֭�ɳq����.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', '���ݵ����ؤw�֭�ɦ���q��.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �֭㪺�ݵ�����'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', '�֭㪺�ѵ�');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', '�Y���ѵ��w�֭�ɳq����.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', '���ѵ��w�֭�ɦ���q��.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �֭㪺�ѵ�'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', '�_�M���ѵ�');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', '�Y���ѵ��Q�_�M�ɳq����.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', '���ѵ��Q�_�M�ɦ���q��.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �_�M���ѵ�'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', '�W�Ǫ����D');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', '������ݼf�W�Ǫ����D�ɳq����.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', '����ݼf�W�Ǫ����D�ɦ���q��.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s�W�Ǫ����D');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', '���G�����D');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', '�b�}����D�Ϧ����󤽧G�����D�ɳq����.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', '�b�}����D�Ϧ����󤽧G�����D�ɦ���q��.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s���G�����D');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', '���X�ѵ�');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '����}����D���ѵ����X�ɳq����.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '����}����D���ѵ����X�ɦ���q��.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: ���X�s�ѵ�');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', '���X���D');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', '�b�ثe���O�������D���X�ɳq����.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', '�b�ثe���O�������D���X�ɦ���q��.');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: ���X�s���D');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', '���G�����D');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', '�b�ثe���O�������D���G�ɳq����.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', '�b�ثe���O�������D���G�ɦ���q��.');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �s���G�����D');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', '���X�ѵ�');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', '�b�ثe���O���}����D���ѵ����X�ɳq����.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', '�b�ثe���O���}����D���ѵ����X�ɦ���q��.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: ���X�s�ѵ�');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', '�_�M�����D');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', '�����D�Q�_�M�ɳq����.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', '�����D�Q�_�M�ɦ���q��.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �_�M�����D');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', '�֭㪺���D');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', '�����D�֭�ɳq����.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', '�����D�֭�ɦ���q��.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �֭㪺���D');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', '�֭㪺�ѵ�');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', '���ѵ��֭�ɳq����.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', '���ѵ��֭�ɦ���q��.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �֭㪺�ѵ�');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', '�_�M���ѵ�');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', '���ѵ��Q�_�M�ɳq����.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', '���ѵ��Q�_�M�ɦ���q��.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} �۰ʳq��: �_�M���ѵ�');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "�D��o��");
define('_MI_SF_DEVELOPER_LEAD', "��o�H��");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "�^�m��");
define('_MI_SF_DEVELOPER_WEBSITE', "����");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "���\�H��");
define('_MI_SF_DEMO_SITE', "SmartFactory�i�ܺ���");
define('_MI_SF_MODULE_INFO', "�Ҳլ�o��T");
define('_MI_SF_MODULE_STATUS', "���A");
define('_MI_SF_MODULE_RELEASE_DATE', "�o����");
define('_MI_SF_MODULE_DEMO', "�i�ܺ���");
define('_MI_SF_MODULE_SUPPORT', "�x��䴩����");
define('_MI_SF_MODULE_BUG', "�^�����Ҳժ����~");
define('_MI_SF_MODULE_FEATURE', "��ĳ���ҲռW�[�s���\��");
define('_MI_SF_MODULE_DISCLAIMER', "�K�d�n��");
define('_MI_SF_AUTHOR_WORD', "�@�̪���");
define('_MI_SF_VERSION_HISTORY', "�������v�O��");

// Beta
define('_MI_SF_WARNING_BETA', "���Ҳզp�z�Ҩ�,�S�����󪺫O��. 
���Ҳլ����ժ���,�]�N�O�ثe���b��o���q.
���o��ηN�O�b<b>�¬����զӤw</b>.
�B�ڭ�<b>�j�P��</b>��ĳ�z���n�Φb�z�{���������άO�b�����Ȫ����ҤU.");

// RC
define('_MI_SF_WARNING_RC', "���Ҳզp�z�Ҩ�,�S�����󪺫O��.
���Ҳլ������o��e���եΪ���,�ҥH�̦n���n�Φb�����Ȫ�������.
���Ҳ��٬O�b�o�i�����q,�ҥH�ϥΥ������z�ۤv���d��. 
�]�N�O���@�̤��ݹ糧�Ҳխt���󪺳d��.");

// Final
define('_MI_SF_WARNING_FINAL', "���Ҳզp�z�Ҩ�,�S�����󪺫O��.
���M���Ҳդw���A�O���ժ�,�����̵M�b��o.
�������i�H�Φb�{���������Φ����Ȫ����ҤU.
���ϥΥ������z�ۤv���d��,�]�N�O���@�̤��ݹ糧�Ҳխt���󪺳d��.");

?>
