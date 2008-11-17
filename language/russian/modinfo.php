<?php

/**
* $Id$ Russian translation. Charset: utf-8 (without BOM)
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

// A brief description of this module
define("_MI_SF_MD_DESC", "Продвинутая система управления вопросами-ответами для вашего XOOPS-сайта");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "Предложить В&amp;О");
define("_MI_SF_SUB_SMNAME2", "Запросить В&amp;О");
define("_MI_SF_SUB_SMNAME3", "Открытые вопросы");
define("_MI_SF_SUB_SMNAME4", "Модерирование В&amp;О");

// Config options
define("_MI_SF_ALLOWSUBMIT", "Постинги пользователей:");
define("_MI_SF_ALLOWSUBMITDSC", "Позволять пользователям предлагать В&amp;О на вашем сайте?");

define("_MI_SF_ALLOWREQUEST", "Запросы пользователей:");
define("_MI_SF_ALLOWREQUESTDSC", "Позволять пользователям запрашивать В&amp;О на вашем сайте?");

define("_MI_SF_ANONPOST", "Разрешение анонимных публикаций");
define("_MI_SF_ANONPOSTDSC", "Разрещать аноннимным пользователям предлагать или запрашивать В&amp;О.");

define('_MI_SF_DATEFORMAT', 'Формат даты:');
define('_MI_SF_DATEFORMATDSC', 'Используйте финальную часть файла language/russian/global.php для выбора стиля. Пример: "d-M-Y H:i" будет показан как "30-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', 'Показывать сворачиваемые линейки');
define('_MI_SF_DISPLAY_COLLAPSDSC', "Выберите 'Да' для показа сворачиваемых линеек на страницах содержания и категорий.");

define('_MI_SF_DISPLAYTYPE', "Тип показа В&amp;О:");
define('_MI_SF_DISPLAYTYPEDSC', "Если выбран 'Суммарный показ', то только вопрос, дата и количество прочтений каждого В&amp;О будут показаны в выбранной категории. Если выбран 'Полный показ', каждый В&amp;О каждый вопрос в выбранной категории будет показан полностью.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "Суммарный показ");
define('_MI_SF_DISPLAYTYPE_FULL', "Полный показ");

define('_MI_SF_DISPLAY_LAST_FAQ', 'Показывать колонку Последние В&amp;О?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "Выберите 'Да' для показа последних В&amp;О в каждой категории на основной странице и страницах категорий.");

define('_MI_SF_LAST_FAQ_SIZE', 'Размер последнего В&amp;О:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "Устанавливает максимальный размер вопроса в колонке Последние В&amp;О.");

define('_MI_SF_QUESTION_SIZE', "Размер вопроса:");
define('_MI_SF_QUESTION_SIZEDSC', "Устаавливает максимальный размер вопроса для показа как заголовок на странице показа Вопроса/Ответа.");

define('_MI_SF_DISPLAY_SBCAT_DSC', 'Показывать описания подкатегорий?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "Выберите 'Да' для показа описания подкатегорий на основной странице и страницах категорий.");

define('_MI_SF_ORDERBYDATE', 'Упорядочить В&amp;Оs по дате:');
define('_MI_SF_ORDERBYDATEDSC', 'Если эта опция установлена в "Да", В&amp;О внутри категории будут упорядочены по убыванию даты, в противном случае будет использоваться сортировка по весу.');

define('_MI_SF_DISPLAY_DATE_COL', "Показывать колонку 'Дата публикации'?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "Когда выбран режим 'Суммарный', выберите 'Да' для показа колонки 'Дата публикации' в таблице В&amp;О на основной странице и страницах категорий.");

define('_MI_SF_DISPLAY_HITS_COL', "Показывать колонку 'Просмотры'?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "Когда выбран режим 'Суммарный', выберите 'Да' для показа колонки 'Просмотры' в таблице В&amp;О на основной странице и страницах категорий.");

define('_MI_SF_USEIMAGENAVPAGE', 'Использовать навигацию по страницам с картинками:');
define('_MI_SF_USEIMAGENAVPAGEDSC', 'Если вы установите эту опцию в "Да", навигация по страницам будет показана с картинками,  иначе - обычная навигация будет использована.');

define('_MI_SF_ALLOWCOMMENTS', 'Контролировать комментарии на уровне В&amp;О:');
define('_MI_SF_ALLOWCOMMENTSDSC', 'Если вы установите эту опцию в "Да", вы увидите комментарии только у тех В&amp;О, которые пометили checkbox комментариев. <br /><br />Выберите "No" для управления комментариями на глобальном уровне (смотрите ниже "Правила комментирования".');

define('_MI_SF_ALLOWADMINHITS', 'Накрутка счетчиков админом:');
define('_MI_SF_ALLOWADMINHITSDSC', 'Позволять показы админу учитывать в статистике?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Авторазрешение предложенных В&amp;О:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', 'Автоматически одобрять предложенные В&amp;О без вмешательства администратора.');

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Автоодобрение запрошенных В&amp;О:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', 'Автоматически одобрять запрошенные В&amp;О без вмешательства администратора.');

define('_MI_SF_AUTOAPPROVE_ANS', 'Автоодобрение ответов:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', 'Автоматически одобрять ответы на Открытые Вопросы.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Автоматическое одобрение новых ответов:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', 'Автоодобрять новые ответы для опубликованных В&amp;О.');

define('_MI_SF_LASTFAQSPERCAT', 'Максимальное количество "Последние В&amp;О" в категории:');
define('_MI_SF_LASTFAQSPERCATDSC', 'Максимальное число of В&amp;О, показываемых в колонке Информация категории.');

define('_MI_SF_CATPERPAGE', 'Максимум категорий на страницу (Пользовательская сторона):');
define('_MI_SF_CATPERPAGEDSC', 'Максимальное число корневых категорий на странице, показываемое пользователям.');

define('_MI_SF_PERPAGE', 'Максимум В&amp;О на странице (Админская сторона):');
define('_MI_SF_PERPAGEDSC', 'Максимальное число В&amp;О на страницу, показываемых одновременно в В&amp;О Админке.');

define('_MI_SF_PERPAGEINDEX', 'Максимум В&amp;О на странице (Пользовательская сторона):');
define('_MI_SF_PERPAGEINDEXDSC', 'Максимальное число В&amp;О на страницу, показываемых одновременно пользователю');

define('_MI_SF_INDEXWELCOMEMSG', 'Вводный текст на главной странице:');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Пригласительный текст, показываемый на основной странице модуля.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "В этом разделе сайта вы найдете ответы на ЧАсто задаваемые ВОпросы, также как и ответы на  вопросы <b>Как сделать...</b> и <b>А знаете ли, что...</b>. Не стесняйтесь комментировать любой вопрос/ответ"); 

define('_MI_SF_REQUESTINTROMSG', 'Вводное сообщение для запроса:');
define('_MI_SF_REQUESTINTROMSGDSC', 'Сообщение, которое будет показано на странице Запрос В&amp;О модуля.');
define('_MI_SF_REQUESTINTROMSGDEF', "Не нашли ответа на свой вопрос? Не проблема! Заполните эту форму для запроса ответа на ваш вопрос. Команда сайта ознакомится с ним и  (скорее всего) опубликует вопрос в секции 'Открытые вопросы', чтобы кто-нибудь смог дать на него ответ!"); 

define('_MI_SF_OPENINTROMSG', 'Вводное сообщение секции "Открытые вопросы":');
define('_MI_SF_OPENINTROMSGDSC', 'Сообщение, которое будет показано в секции Открытые Вопросы модуля.');
define('_MI_SF_OPENINTROMSGDEF', "Это список 'Открытых вопросов', т.е. вопросов, которые были заданы посетителями этого сайта, но остались пока без ответов. Вы можете выбрать любой из вопросов, если хотите помочь нам с ответом на него."); 

define('_MI_SF_USEREALNAME', 'Использовать настоящее имя');
define('_MI_SF_USEREALNAMEDSC', 'При показе имени пользователя использовать реальное имя пользователя, если он установил его');

define('_MI_SF_HELP_PATH_SELECT', "Путь к справке SmartFAQ");
define('_MI_SF_HELP_PATH_SELECT_DSC', "Выберите откуда вы хотите читать справку по SmartFAQ. Если вы загрузили 'SmartFAQ's Help Package' и выгрузмлм его в 'modules/smartfaq/doc/', можете выбирать 'Внутри модуля'. Как альтернативу, вы можете использовать доступ к справочному файлу непосредственно с сайта docs.xoops.org, выбрав этот вариант. Вы также можете выбрать 'Произвольный путь' и самостоятельно определить пусть к файлам в следующей опции конфига 'Произвольный путь к справке по SmartFAQ'");

define('_MI_SF_HELP_PATH_CUSTOM', "Произвольный путь к справке по SmartFAQ");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "Если вы выбрали 'Произвольный путь' в предыдущей опции 'Путь к справке SmartFAQ', укажите URL к файлам документации SmartFAQ в формате: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "Внутри модуля");
define('_MI_SF_HELP_CUSTOM', "Произвольный путь");

//define('_MI_SF_MODERATORSEDIT', 'Позволить Модераторорам редактировать');
//define('_MI_SF_MODERATORSEDITDSC', 'Этот режим позволит модераторам редактировать вопросы и В&amp;О в категориях, которыми они управляют. Иначе модераторы могут только одобрять или отвергать вопросы и В&amp;О.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "Главная страница");
define("_MI_SF_ADMENU2", "Категории");
define("_MI_SF_ADMENU3", "В&amp;О");
define("_MI_SF_ADMENU4", "Вопросы");
define("_MI_SF_ADMENU5", "Права");
define("_MI_SF_ADMENU6", "Блоки и группы");
define("_MI_SF_ADMENU7", "Переход к модулю");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "Список последних В&amp;О");
define("_MI_SF_ARTSRANDOM_DIDUNO", "А знаете ли, что...");
define("_MI_SF_ARTSRANDOM_FAQ", "Случайный вопрос!");
define("_MI_SF_ARTSRANDOM_HOW", "Как сделать...");
define("_MI_SF_ARTSCONTEXT", "Контекстный В&amp;О");
define("_MI_SF_RECENTFAQS", "Последние В&amp;О подробно");
define("_MI_SF_RECENT_QUESTIONS", "Последние Открытые Вопросы");

// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'Глобальные');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'Режимы оповещения для всех В&amp;О.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'В&amp;О Категории');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'Режимы оповещения для выбранной категории.');

define('_MI_SF_FAQ_NOTIFY', 'В&amp;О');
define('_MI_SF_FAQ_NOTIFY_DSC', 'Режимы оповещения для данного В&amp;О.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'Глобально Открытые Вопросы');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'Режимы оповещения для всех открытых вопросов');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'В&amp;О Категории');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'Режимы оповещения для выбранной категории..');

define('_MI_SF_QUESTION_NOTIFY', 'Открытые вопросы');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'Режимы оповещения для выбранного Открытого Вопроса.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'Новая категория');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', 'Оповестить меня о создании новой категории.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'Получать оповещения о создании новых категорий.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новая категория');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'В&amp;О предложен');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', 'Оповестить меня, когда любой В&amp;О предложен и ожидает одобрения.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', 'Получать оповещения, когда любой В&amp;О предложен и ожидает одобрения.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый В&amp;О предложен');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'Новый В&amp;О опубликован');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', 'Оповестить меня о публикации любого В&amp;О.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'Получать оповещения, когда любой В&amp;О опубликован.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый В&amp;О опубликован');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'Новый ответ предложен');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Оповестить меня, когда новый ответ предложен для  любого В&amp;О.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Получать оповещения, когда новый ответ предложен для  любого В&amp;О.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый ответ предложен для В&amp;О.');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Новый ответ опубликован');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Оповестить меня, когда новый ответ опубликован для  любого В&amp;О.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Получать оповещения, когда новый ответ опубликован для  любого В&amp;О.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый ответ опубликован');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'В&amp;О прислан');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'Оповестить меня, когда новый В&amp;О прислан в текущую категорию.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Получать оповещения, когда новый В&amp;О прислан в текущую категорию.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый В&amp;О прислан в категорию'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'Новый В&amp;О опубликован');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'Оповестить меня, когда новый В&amp;О опубликован в текущей категории.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Получать оповещения, когда новый В&amp;О опубликован в текущей категории.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый В&amp;О опубликован в категории'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'Новый ответ предложен');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Оповестить меня, когда новый ответ предложен для  В&amp;О в этой категории');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Получать оповещения, когда новый ответ предложен для В&amp;О в этой категории');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый ответ предложен');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Новый ответ опубликован');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Оповестить меня, когда новый ответ опубликован для В&amp;О в этой категории');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Получать оповещения, когда новый ответ опубликован для В&amp;О в этой категории');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый ответ опублткован');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'Отклоненные В&amp;О');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'Оповестить меня, если этот В&amp;О будет отклонен.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Получить оповещение, если этот В&amp;О отклонен.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: В&amp;О отклонен'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'Одобренные В&amp;О');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'Оповестить меня, когда этот В&amp;О будет одобрен.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Получить оповещение, когда этот В&amp;О будет одобрен.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : В&amp;О одобрен'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'Ответ одобрен');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'Оповестить меня, когда этот ответ будет одобрен.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Получить оповещение, когда этот ответ будет одобрен.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Ответ одобрен'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'Ответ отклонен');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'Оповестить меня, если этот ответ будет отклонен.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Получить оповещение, если этот ответ будет отклонен.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Ответ отклонен'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Прислан вопрос');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'Оповестить меня, когда вопрос прислан и ожидает одобрения');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', 'Получать оповещения, когда любой вопрос прислан и ожидает одобрения.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый вопрос прислан');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Опубликован вопрос');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'Оповестить меня, когда любой вопрос опубликован в секции Открытые Вопросы');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'Получать оповещения, когда любой вопрос опубликован в секции Открытые Вопросы');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение  Новый вопрос опубликован');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Предложен ответ');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Оповестить меня, когда предложен ответ для любого Открытого Вопроса.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Получать оповещения, когда предложен ответ для любого Открытого Вопроса.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Ответ предложен для Открытого Вопроса');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Прислан вопрос');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'Оповестить меня, когда прислан вопрос в текущую категорию');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Получать оповещения, когда прислан вопрос в текущую категорию');      
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый вопрос прислан');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Вопрос опубликован');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'Оповестить меня, когда опубликован вопрос в текущей категории');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Получать оповещения, когда опубликован вопрос в текущей категории');      
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Новый вопрос опубликован');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Предложен ответ');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Оповестить меня, когда ответ предложен для Открытых Вопросов в этой категории.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Получать оповещения, когда ответ предложен для Открытых Вопросов в этой категории.');      
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Ответ предложен');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Вопрос отклонен');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'Оповестить меня, если вопрос будет отклонен.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Получить оповещение, если вопрос отклонен.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение : Вопрос отклонен');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Вопрос одобрен');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'Оповестить меня, если вопрос одобрен.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'Получить оповещение, если вопрос одобрен.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Вопрос одобрен');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'Ответ одобрен');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'Оповестить меня, когда ответ будет одобрен.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Получить оповещение, когда ответ будет одобрен.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Ответ одобрен');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'Ответ отклонен');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'Оповестить меня, если ответ будет отклонен.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Получить оповещение, если ответ будет отклонен.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} автооповещение: Ответ отклонен');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "Разработчики");
define('_MI_SF_DEVELOPER_LEAD', "Ведущий разработчик");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "Помощник(и)");
define('_MI_SF_DEVELOPER_WEBSITE', "Web-сайт");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "Кредиты");
define('_MI_SF_DEMO_SITE', "Демо-сайт SmartFactory");
define('_MI_SF_MODULE_INFO', "Информация о разработке модуля");
define('_MI_SF_MODULE_STATUS', "Статус");
define('_MI_SF_MODULE_DEMO', "Демо-сайт");
define('_MI_SF_MODULE_SUPPORT', "Официальный сайт поддержки");
define('_MI_SF_MODULE_BUG', "Сообщить об ошибке в модуле");
define('_MI_SF_MODULE_FEATURE', "Предложить новую идею для модуля");
define('_MI_SF_MODULE_DISCLAIMER', "Заявление");
define('_MI_SF_AUTHOR_WORD', "Слово Автора");
define('_MI_SF_VERSION_HISTORY', "История версий");

// Beta
define('_MI_SF_WARNING_BETA', 'Модуль поставляется "As Is", без каких-либо гарантий. Этот модуль - BETA, что означает, что он в активной разработке. Этот релиз предназначен <b>только для целей тестирования</b> и мы <b>настоятельно</b> рекомендуем не использовать его на "живом" сайте или в производственных условиях.');

// RC
define('_MI_SF_WARNING_RC', 'Модуль поставляется "As Is", без каких-либо гарантий. Этот модуль - Релиз-Кандидат и не должен использоваться в производственных серверах . Модуль в разработке, и Вы используете его на свой страх и риск, что значит - автор снимает с себя всю и всякую ответствкенность.');

// Final
define('_MI_SF_WARNING_FINAL', "Модуль поставляется 'As Is', без каких-либо гарантий. Хотя этот модуль и не бета, он тем не менее ве еще в активной разработке. Этот релиз может использоваться на живых сайтах, но его использование - зона Вашей ответственности, а не автора этого модуля.");

?>
