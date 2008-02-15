<?php

/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

// A brief description of this module
define("_MI_SF_MD_DESC", "Sistema Avanzado de Preguntas y Respuestas (FAQ) para su sitio XOOPS");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "Enviar Q&A");
define("_MI_SF_SUB_SMNAME2", "Solicitar Q&A");
define("_MI_SF_SUB_SMNAME3", "Preguntas abiertas");
define("_MI_SF_SUB_SMNAME4", "Moderar Q&A");

// Config options
define("_MI_SF_ALLOWSUBMIT", "Envios de Usuario:");
define("_MI_SF_ALLOWSUBMITDSC", "¿ Permitir a los usuarios enviar Q&A ?");

define("_MI_SF_ALLOWREQUEST", "Pedidos de Usuario:");
define("_MI_SF_ALLOWREQUESTDSC", "¿ Permitir a los usuarios pedir Q&A ?");

define("_MI_SF_NEWANSWER", "Permitir publicar nueva respuesta:");
define("_MI_SF_NEWANSWERDSC", "Elija 'Sí' para permitir a los usuarios añadir nuevas respuestas a las Q&A ya publicadas.");

define("_MI_SF_ANONPOST", "Permitir el envío anónimo");
define("_MI_SF_ANONPOSTDSC", "¿ Permitir a los usuarios anónimos el envio de un pedido o requerir un nuevo Q&A ?");

define('_MI_SF_DATEFORMAT', 'Formato de la fecha:');
define('_MI_SF_DATEFORMATDSC', 'Usa la parte final de language/english/global.php para elegir un estilo. Ejemplo: "d-M-Y H:i" significa "23-Mar-2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', 'Mostrar barras colapsables');
define('_MI_SF_DISPLAY_COLLAPSDSC', "Elija 'Sí' para mostrar la barra colapsable en el índice y en la pag. de la categoría.");

define('_MI_SF_DISPLAYTYPE', 'Tipo de visualización de los Q&A:');
define('_MI_SF_DISPLAYTYPEDSC', "Si 'Ver Sumario' es seleccionado, solamente la pregunta, Fecha y Hits de cada Q&A serán mostrados en una categoría seleccionada. <br />Si 'Ver Todo' es seleccionado, cada Q&A puede ser enteramente visualizado en una categoría seleccionada.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "Ver Sumario");
define('_MI_SF_DISPLAYTYPE_FULL', "Ver Todo");

define('_MI_SF_DISPLAY_LAST_FAQ', '¿ Mostrar última columna Q&A ?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "Elija 'Sí' para mostrar la última Q&A en cada categoría en el índice y pag. de la categoría.");

define('_MI_SF_DISPLAY_LAST_FAQS', '¿ Mostrar lista con la última Q&amp;As ?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "Elija 'Sí' para mostrar una lista con la última Q&A en la pag. de Inicio.");

define('_MI_SF_LAST_FAQ_SIZE', 'Tamaño última Q&amp;A :');
define('_MI_SF_LAST_FAQ_SIZEDSC', "Indique el tamaño max. de la pregunta en la columna de última Q&A.");

define('_MI_SF_QUESTION_SIZE', "Tamaño de la pregunta :");
define('_MI_SF_QUESTION_SIZEDSC', "Indique el tamaño max. de la pregunta como título en la página simple de Q&A.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', 'Mostrar sub-categorías en el índice');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "Elija 'Sí' para mostrar subcategorías en el índice.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', '¿Mostrar descripción de las categorías principales ?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "Elija 'Sí' para mostrar la descripción de las categorías principales en el índice de la página de categoría.");

define('_MI_SF_DISPLAY_SBCAT_DSC', '¿ Mostrar sub-descripción de las categorías ?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "Elija 'Sí' para mostrar la descripción de las sub-categorías en el índice de la pag. de categoría.");

define('_MI_SF_ORDERBYDATE', 'Ordenar las preguntas y respuestas por fecha :');
define('_MI_SF_ORDERBYDATEDSC', 'Si usted configura esta opción a "SI", las preguntas y respuestas dentro de una categoría podrán ser ordenadas por fecha en forma descendente, sino, podrán ser ordenadas por su orden actual.');

define('_MI_SF_DISPLAY_DATE_COL', "¿ Mostrar columna 'Publicado el' ?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "Cuando selecciona el tipo de visualización 'Sumario' elija 'Sí' para mostrar 'publicado el' en la tabla de Q&amp;A en el índice de la pag. de categoría.");

define('_MI_SF_DISPLAY_HITS_COL', "¿ Mostrar columna 'Hits' ?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "Cuando elije la vista 'sumario', elija 'sí' para mostrar la columna 'Hits' en la tabla Q&A del índice de la pag. de categoría.");

define('_MI_SF_USEIMAGENAVPAGE', 'Utilizar el Navegador de Páginas gráfico:');
define('_MI_SF_USEIMAGENAVPAGEDSC', 'Si configura esta opción a "SI", el Navegador de Páginas se mostrará en formato gráfico, sino, el Navegador de Páginas original será utilizado.');

define('_MI_SF_ALLOWCOMMENTS', 'Controlar los comentarios en el nivel del Q&A:');
define('_MI_SF_ALLOWCOMMENTSDSC', 'Si fijó esta opción en "SI", usted verá solamente los comentarios sobre los Q&A que tengan sus comentarios marcados. <br /><br />Seleccione "No" para tener los comentarios manejados en el nivel global (ver a continuación bajo el item "Reglas de comentarios".');

define('_MI_SF_ALLOWADMINHITS', 'Contabilizar lecturas del Administrador:');
define('_MI_SF_ALLOWADMINHITSDSC', '¿ Permitir que los hits del administrados sean contabilizados ?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Auto aprobar los Q&A enviados:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', ' ¿ Auto aprobar Q&A enviados sin la intervención del administrador ?');

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Auto aprobar pedidos de Q&A:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', '¿ Auto aprobar pedidos de Q&A sin la intervención del administrador ?');

define('_MI_SF_AUTOAPPROVE_ANS', 'Auto aprobar respuestas:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', '¿ Auto aprobar respuestas enviadas para Preguntas Abiertas ?');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Auto aprobar nuevas respuestas:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', '¿ Auto aprobar respuestas enviadas a ser publicadas en Q&A ?.');

define('_MI_SF_LASTFAQSPERCAT', 'Máximo Q&A por categoría:');
define('_MI_SF_LASTFAQSPERCATDSC', 'Máximo número de Q&A a ser visualizado en la columna de información de una categoría.');

define('_MI_SF_CATPERPAGE', 'Máximo de Categorias por página (Lado usuario):');
define('_MI_SF_CATPERPAGEDSC', 'Máximo número de categorías top por página a ser mostrados a la vez en el lado del usuario.');

define('_MI_SF_PERPAGE', 'Máximo Q&A por página (lado Administrador):');
define('_MI_SF_PERPAGEDSC', '¿ Máximo número de Q&A por página a ser visualizados a la vez en el lado del Administrador ? ');

define('_MI_SF_PERPAGEINDEX', 'Máximo de Q&A por página (lado Usuario):');
define('_MI_SF_PERPAGEINDEXDSC', '¿ Máximo número de Q&A por página a ser visualizados del lado del usuario ?');

define('_MI_SF_INDEXWELCOMEMSG', 'Mensaje de bienvenida del índice:');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Mensaje de bienvenida a ser mostrado en la página de inicio del módulo.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "En esta área de nuestro sitio, usted encontrará las respuestas a las preguntas hechas frecuentemente, como así tambien respuestas a las preguntas '¿ Cómo hago ?' y '¿ Conocía usted ?'. Por favor sientase libre de enviar un comentario sobre cualquier Q&A.");

define('_MI_SF_REQUESTINTROMSG', 'Requerir mensaje de introducción:');
define('_MI_SF_REQUESTINTROMSGDSC', 'Mensaje de introducción a ser mostrado en la página de "Solicitar Q&A" del módulo.');
define('_MI_SF_REQUESTINTROMSGDEF', "¿ Usted no encuentra la respuesta a una inquietud ? No hay problemas ! <br />Simplemente complete el siguiente formulario para solicitar una respuesta a su pregunta. El administrador del sitio revisará este pedido y publicará esta nueva pregunta en la sección 'Preguntas Abiertas' para que alguien la responda !");

define('_MI_SF_OPENINTROMSG', 'Mensaje de introducción para la sección Preguntas Abiertas:');
define('_MI_SF_OPENINTROMSGDSC', 'Mensaje de introducción a ser mostrado en la sección "Preguntas Abiertas" del módulo.');
define('_MI_SF_OPENINTROMSGDEF', "Aquí hay una lista de las preguntas en espera, es decir, las enviadas por usuarios del sitio que, por alguna razón, aún no tienen respuesta. Puede hacer clic en la liga de abajo a la derecha, 'Solicitar Q&A', si quiere la respuesta a una pregunta. También puede hacer clic en una pregunta en espera si quiere ayudarnos con la respuesta.");

define('_MI_SF_USEREALNAME', '¿ Usar el Nombre real de los usuarios ?');
define('_MI_SF_USEREALNAMEDSC', 'Cuando muestra un nombre de usuario, usar el nombre real si este ha configurado su nombre real.');

define('_MI_SF_HELP_PATH_SELECT', "Ruta de los archivos de ayuda de SmartFAQ");
define('_MI_SF_HELP_PATH_SELECT_DSC', "Seleccione desde donde quiere acceder a los archivos de ayuda de SmartFAQ. Si descarga el 'paquete de ayuda SmartFAQ' y subido en 'modules/smartfaq/doc/', usted puede seleccionar 'Dentro del módulo'.  Alternativamente, usted puede acceder al archivo de ayuda del módulo desde docs.xoops.org eligiendo esta opcion en el selector. Usted puede tambien seleccionar 'Ruta personalizada' y especificar la ruta de los archivos de ayuda en la próxima opción de configuración 'Ruta personalizada de los archivos de ayuda de SmartFAQ'");

define('_MI_SF_HELP_PATH_CUSTOM', "Ruta personalizada de los archivos de ayuda de SmartFAQ");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "Si usted selecciona 'Ruta personalizada' en la opción anterior 'Path of SmartFAQ's help files', por favor especifique el URL de los archivos de ayuda de SmartFAQ, en el formato : http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "Dentro del módulo");
define('_MI_SF_HELP_CUSTOM', "Ruta personalizada");

//define('_MI_SF_MODERATORSEDIT', 'Permitir a los moderadores editar (Moderadores Avanzados)');
//define('_MI_SF_MODERATORSEDITDSC', 'Esta opción le permitirá a los moderadores editar preguntas y Q&A en las categorías para las cuales sean moderadores. De otra manera, los moderadores pueden solamente aprobar o rechazar preguntas y Q&A.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "Indice");
define("_MI_SF_ADMENU2", "Categorías");
define("_MI_SF_ADMENU3", "Q&A");
define("_MI_SF_ADMENU4", "Preguntas");
define("_MI_SF_ADMENU5", "Permisos");
define("_MI_SF_ADMENU6", "Bloques y Grupos");
define("_MI_SF_ADMENU7", "IR al módulo");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "Lista de Q&A recientes");
define("_MI_SF_ARTSRANDOM_DIDUNO", "¿ Conocía usted ?");
define("_MI_SF_ARTSRANDOM_FAQ", "Pregunta al azar !");
define("_MI_SF_ARTSRANDOM_HOW", "¿ Cómo hago ...?");
define("_MI_SF_ARTSCONTEXT", "Q&A Contextual");
define("_MI_SF_RECENTFAQS", "Q&A recientes (detalle)");
define("_MI_SF_RECENT_QUESTIONS", "Preguntas Abiertas");
define("_MI_SF_MOST_VIEWED", "Las Q&A más vistas como");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'Global Q&A');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'Opciones de Notificación que se aplicaran a todos los Q&A.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'Categoría Q&A');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'Opciones de Notificación que se aplican a la categoría actual.');

define('_MI_SF_FAQ_NOTIFY', 'Q&A');
define('_MI_SF_FAQ_NOTIFY_DSC', 'Opciones de Notificación que se aplican a este Q&A.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'Preguntas Abiertas Global');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'Opciones de Notificación que se aplicaran a todas las Preguntas Abiertas.');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'Categoría Q&A');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'Opciones de Notificación que se aplican a la categoría actual.');

define('_MI_SF_QUESTION_NOTIFY', 'Preguntas Abiertas');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'Opciones de Notificación que se aplican a la categoría actual Pregunta Abierta.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'Nueva categoría');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', 'Notificarme cuando una nueva categoría es creada.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'Recibir notificación cuando una categoría es creada.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva categoría');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'Q&A enviado');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', 'Notificarme cuando cualquier nuevo Q&A es enviado (aguardando aprobación).');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', 'Recibir una notificación cuando cualquier Q&A nuevo es enviado (aguardando aprobación).');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nuevo Q&A enviado');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'Nuevo Q&A publicado');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando cualquier nuevo Q&A es publicado.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'Recibir una notificación cuando cualquier Q&A nuevo es publicado.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nuevo Q&A publicado');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nueva respuesta propuesta');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Notificarme cuando una nueva respuesta es propuesta para cualquier Q&A.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Recibir una notificación cuando una nueva respuesta es propuesta para cualquier Q&A.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva respuesta propuesta');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nueva respuesta publicada');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando una nueva respuesta es publicada para cualquier Q&A.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Recibir una notificación cuando una nueva respuesta es publicada para cualquier Q&A.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva respuesta publicada');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'Q&A enviado');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'Notificarme cuando un nuevo Q&A es enviado en la categoría actual.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Recibir una notificación cuando un nuevo Q&A es enviado en la categoría actual.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nuevo Q&A enviado en categoría');

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'Nuevo Q&A publicado');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando un nuevo Q&A es publicado en la categoría actual.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Recibir una notificación cuando un nuevo Q&A es publicado en la categoría actual.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nuevo Q&A publicado en categoría');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nueva respuesta propuesta');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Notificarme cuando una nueva respuesta es propuesta para un Q&A en esta categoría.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Recibir una notificación cuando una nueva respuesta sea propuesta para un Q&A en esta categoría.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva respuesta propuesta');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nueva respuesta publicada');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando una nueva respuesta es publicada para un Q&A en esta categoría.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Recibir una notificación cuando una nueva respuesta es publicada para un Q&A en esta categoría.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva respuesta publicada');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'Q&A rechazada');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'Notificarme si esta Q&A es rechazada.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Recibir una notificación si esta Q&A es rechazada.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación :  Q&A rechazada');

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'Q&A aprobada');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'Notificarme cuando esta Q&A es aprobada.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Recibir una notificación cuando esta Q&A es aprobada.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Q&A aprobada');

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'Respuesta aprobada');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'Notificarme cuando esta respuesta es aprobada.');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Recibir una notificación cuando esta respuesta es aprobada');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Respuesta aprobada');

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'Respuesta rechazada');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'Notificarme si esta respuesta es rechazada.');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Recibir una notificación si esta respuesta es rechazada.');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Respuesta rechazada');

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Pregunta enviada');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'Notificarme cuando cualquier nueva pregunta sea enviada (aguardando aprobación).');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', 'Recibir una notificación cuando cualquier nueva pregunta sea enviada (aguardando aprobación).');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva Pregunta enviada');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Pregunta publicada');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando cualquier nueva pregunta sea pulicada en la sección Preguntas Abiertas.');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'Recibir una notificación cuando cualquier nueva pregunta sea pulicada en la sección Preguntas Abiertas.');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva Pregunta publicada');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Respuesta propuesta');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Notificarme cuando una respuesta es propuesta para cualquier pregunta abierta.');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Recibir una notificación cuando una respuesta es propuesta para cualquier pregunta abierta.');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva Respuesta propuesta');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Pregunta enviada');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'Notificarme cuando una pregunta es enviada en la categoría actual.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Recibir una notificación cuando una pregunta es enviada en la categoría actual.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva Pregunta enviada');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Pregunta publicada');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando una pregunta es publicada en la categoría actual.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Recibir una notificación cuando una pregunta es publicada en la categoría actual.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva Pregunta publicada');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Respuesta propuesta');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Notificarme cuando una respuesta es propuesta para una pregunta abierta en esta categoría.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Recibir una notificación cuando una respuesta es propuesta para una pregunta abierta en esta categoría.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Nueva Respuesta propuesta');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Pregunta rechazada');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'Notificarme si esta pregunta es rechazada.');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Recibir una notificación si esta pregunta es rechazada.');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Pregunta rechazada');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Pregunta aprobada');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'Notificarme si esta pregunta es aprobada.');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'Recibir una notificación si esta pregunta es aprobada.');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Pregunta aprobada');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'Respuesta aprobada');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'Notificarme cuando esta respuesta sea aprobada.');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Recibir una notificación cuando esta respuesta sea aprobada.');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Respuesta aprobada');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'Respuesta rechazada');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'Notificarme si esta respuesta es rechazada.');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Recibir una notificación si esta respuesta es rechazada.');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Respuesta rechazada');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "Información del  Autor");
define('_MI_SF_DEVELOPER_LEAD', "Desarrolladores");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "Colaboradores");
define('_MI_SF_DEVELOPER_WEBSITE', "Website");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "Créditos");
define('_MI_SF_DEMO_SITE', "Sitio Demo");
define('_MI_SF_MODULE_INFO', "Información del desarrollo del módulo ");
define('_MI_SF_MODULE_STATUS', "Estado");
define('_MI_SF_MODULE_RELEASE_DATE', "Fecha de Lanzamiento");
define('_MI_SF_MODULE_DEMO', "Sitio de demostración");
define('_MI_SF_MODULE_SUPPORT', "Sitio de soporte oficial");
define('_MI_SF_MODULE_BUG', "Reportar un bug para este módulo");
define('_MI_SF_MODULE_FEATURE', "Sugerir una nueva mejora para éste módulo");
define('_MI_SF_MODULE_DISCLAIMER', "Condiciones de uso");
define('_MI_SF_AUTHOR_WORD', "La Palabra Del Autor");
define('_MI_SF_VERSION_HISTORY', "Historia de la Versión");

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