<?php // Xoops Spanish Support (http://www.esxoops.com)

/**
* $Id$
* Module: SmartFAQ
* Author: w4z004 <http://www.esxoops.com>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

// A brief description of this module
define("_MI_SF_MD_DESC", "Sistema Avanzado de Preguntas y Respuestas (FAQ) para su sitio XOOPS");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "Enviar Q&amp;A");
define("_MI_SF_SUB_SMNAME2", "Solicitar Q&amp;A");
define("_MI_SF_SUB_SMNAME3", "Preguntas abiertas");
define("_MI_SF_SUB_SMNAME4", "Moderar Q&amp;A");

// Config options
define("_MI_SF_ALLOWSUBMIT", "Envios de Usuario:");
define("_MI_SF_ALLOWSUBMITDSC", "� Permitir a los usuarios enviar Q&amp;A?");

define("_MI_SF_ALLOWREQUEST", "Pedidos de Usuario:");
define("_MI_SF_ALLOWREQUESTDSC", "� Permitir a los usuarios pedir Q&amp;A?");

define("_MI_SF_ANONPOST", "Permitir el env�o an�nimo");
define("_MI_SF_ANONPOSTDSC", "� Permitir a los usuarios an�nimos el envio de un pedido o requerir un nuevo Q&amp;A?");

define('_MI_SF_DATEFORMAT', 'Formato de la fecha:');
define('_MI_SF_DATEFORMATDSC', 'Usa la parte final de language/english/global.php para elegir un estilo. Ejemplo: "d-M-Y H:i" significa "23-Mar-2004 22:35"');

define('_MI_SF_DISPLAYTYPE', 'Tipo de visualizaci�n de los Q&amp;A:');
define('_MI_SF_DISPLAYTYPEDSC', "Si 'Ver Sumario' es seleccionado, solamente la pregunta, Fecha y Hits de cada Q&amp;A ser�n mostrados en una categor�a seleccionada. <br />Si 'Ver Todo' es seleccionado, cada Q&amp;A puede ser enteramente visualizado en una categor�a seleccionada.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "Ver Sumario");
define('_MI_SF_DISPLAYTYPE_FULL', "Ver Todo");

define('_MI_SF_ORDERBYDATE', 'Ordenar las preguntas y respuestas por fecha :');
define('_MI_SF_ORDERBYDATEDSC', 'Si usted configura esta opci�n a "SI", las preguntas y respuestas dentro de una categor�a podr�n ser ordenadas por fecha en forma descendente, sino, podr�n ser ordenadas por su orden actual.');

define('_MI_SF_USEIMAGENAVPAGE', 'Utilizar el Navegador de P�ginas gr�fico:');
define('_MI_SF_USEIMAGENAVPAGEDSC', 'Si configura esta opci�n a "SI", el Navegador de P�ginas se mostrar� en formato gr�fico, sino, el Navegador de P�ginas original ser� utilizado.');

define('_MI_SF_ALLOWCOMMENTS', 'Controlar los comentarios en el nivel del Q&amp;A:');
define('_MI_SF_ALLOWCOMMENTSDSC', 'Si fij� esta opci�n en "SI", usted ver� solamente los comentarios sobre los Q&amp;A que tengan sus comentarios marcados. <br /><br />Seleccione "No" para tener los comentarios manejados en el nivel global (ver a continuaci�n bajo el item "Reglas de comentarios".');

define('_MI_SF_ALLOWADMINHITS', 'Contabilizar lecturas del Administrador:');
define('_MI_SF_ALLOWADMINHITSDSC', '� Permitir que los hits del administrados sean contabilizados?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Auto aprobar los Q&amp;A enviados:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', ' � Auto aprobar Q&amp;A enviados sin la intervenci�n del administrador?');

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Auto aprobar pedidos de Q&amp;A:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', '� Auto aprobar pedidos de Q&amp;A sin la intervenci�n del administrador?');

define('_MI_SF_AUTOAPPROVE_ANS', 'Auto aprobar respuestas:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', '� Auto aprobar respuestas enviadas para Preguntas Abiertas?');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Auto aprobar nuevas respuestas:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', '� Auto aprobar respuestas enviadas a ser publicadas en Q&amp;A?.');

define('_MI_SF_LASTFAQSPERCAT', 'M�ximo Q&amp;A por categor�a:');
define('_MI_SF_LASTFAQSPERCATDSC', 'M�ximo n�mero de Q&amp;A a ser visualizado en la columna de informaci�n de una categor�a.');

define('_MI_SF_CATPERPAGE', 'M�ximo de Categorias por p�gina (Lado usuario):');
define('_MI_SF_CATPERPAGEDSC', 'M�ximo n�mero de categor�as top por p�gina a ser mostrados a la vez en el lado del usuario.');

define('_MI_SF_PERPAGE', 'M�ximo Q&amp;A por p�gina (lado Administrador):');
define('_MI_SF_PERPAGEDSC', '� M�ximo n�mero de Q&amp;A por p�gina a ser visualizados a la vez en el lado del Administrador? ');

define('_MI_SF_PERPAGEINDEX', 'M�ximo de Q&amp;A por p�gina (lado Usuario):');
define('_MI_SF_PERPAGEINDEXDSC', '� M�ximo n�mero de Q&amp;A por p�gina a ser visualizados del lado del usuario?');

define('_MI_SF_INDEXWELCOMEMSG', 'Mensaje de bienvenida del �ndice:');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Mensaje de bienvenida a ser mostrado en la p�gina de inicio del m�dulo.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "En esta �rea de nuestro sitio, usted encontrar� las respuestas a las preguntas hechas frecuentemente, como as� tambien respuestas a las preguntas '� C�mo hago?' y '� Conoc�a usted?'. Por favor sientase libre de enviar un comentario sobre cualquier Q&amp;A.");

define('_MI_SF_REQUESTINTROMSG', 'Requerir mensaje de introducci�n:');
define('_MI_SF_REQUESTINTROMSGDSC', 'Mensaje de introducci�n a ser mostrado en la p�gina de "Solicitar Q&amp;A" del m�dulo.');
define('_MI_SF_REQUESTINTROMSGDEF', "� Usted no encuentra la respuesta a una inquietud? No hay problemas! <br />Simplemente complete el siguiente formulario para solicitar una respuesta a su pregunta. El administrador del sitio revisar� este pedido y publicar� esta nueva pregunta en la secci�n 'Preguntas Abiertas' para que alguien la responda!");

define('_MI_SF_OPENINTROMSG', 'Mensaje de introducci�n para la secci�n Preguntas Abiertas:');
define('_MI_SF_OPENINTROMSGDSC', 'Mensaje de introducci�n a ser mostrado en la secci�n "Preguntas Abiertas" del m�dulo.');
define('_MI_SF_OPENINTROMSGDEF', "Aqu� hay una lista de las preguntas en espera, es decir, las enviadas por usuarios del sitio que, por alguna raz�n, a�n no tienen respuesta. Puede hacer clic en la liga de abajo a la derecha, 'Solicitar Q&amp;A', si quiere la respuesta a una pregunta. Tambi�n puede hacer clic en una pregunta en espera si quiere ayudarnos con la respuesta.");

define('_MI_SF_USEREALNAME', '� Usar el Nombre real de los usuarios?');
define('_MI_SF_USEREALNAMEDSC', 'Cuando muestra un nombre de usuario, usar el nombre real si este ha configurado su nombre real.');

define('_MI_SF_HELP_PATH_SELECT', "Ruta de los archivos de ayuda de SmartFAQ");
define('_MI_SF_HELP_PATH_SELECT_DSC', "Seleccione desde donde quiere acceder a los archivos de ayuda de SmartFAQ. Si descarga el 'paquete de ayuda SmartFAQ' y subido en 'modules/smartfaq/doc/', usted puede seleccionar 'Dentro del m�dulo'.  Alternativamente, usted puede acceder al archivo de ayuda del m�dulo desde docs.xoops.org eligiendo esta opcion en el selector. Usted puede tambien seleccionar 'Ruta personalizada' y especificar la ruta de los archivos de ayuda en la pr�xima opci�n de configuraci�n 'Ruta personalizada de los archivos de ayuda de SmartFAQ'");

define('_MI_SF_HELP_PATH_CUSTOM', "Ruta personalizada de los archivos de ayuda de SmartFAQ");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "Si usted selecciona 'Ruta personalizada' en la opci�n anterior 'Path of SmartFAQ's help files', por favor especifique el URL de los archivos de ayuda de SmartFAQ, en el formato : http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "Dentro del m�dulo");
define('_MI_SF_HELP_CUSTOM', "Ruta personalizada");

//define('_MI_SF_MODERATORSEDIT', 'Permitir a los moderadores editar (Moderadores Avanzados)');
//define('_MI_SF_MODERATORSEDITDSC', 'Esta opci�n le permitir� a los moderadores editar preguntas y Q&amp;A en las categor�as para las cuales sean moderadores. De otra manera, los moderadores pueden solamente aprobar o rechazar preguntas y Q&amp;A.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "Indice");
define("_MI_SF_ADMENU2", "Categor�as");
define("_MI_SF_ADMENU3", "Q&amp;A");
define("_MI_SF_ADMENU4", "Preguntas");
define("_MI_SF_ADMENU5", "Permisos");
define("_MI_SF_ADMENU6", "Bloques y Grupos");
define("_MI_SF_ADMENU7", "IR al m�dulo");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "Lista de Q&amp;A recientes");
define("_MI_SF_ARTSRANDOM_DIDUNO", "� Conoc�a usted?");
define("_MI_SF_ARTSRANDOM_FAQ", "Pregunta al azar!");
define("_MI_SF_ARTSRANDOM_HOW", "� C�mo hago ...?");
define("_MI_SF_ARTSCONTEXT", "Q&amp;A Contextual");
define("_MI_SF_RECENTFAQS", "Q&amp;A recientes (detalle)");
define("_MI_SF_RECENT_QUESTIONS", "Preguntas Abiertas");

// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'Global Q&amp;A');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'Opciones de Notificaci�n que se aplicaran a todos los Q&amp;A.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'Categor�a Q&amp;A');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'Opciones de Notificaci�n que se aplican a la categor�a actual.');

define('_MI_SF_FAQ_NOTIFY', 'Q&amp;A');
define('_MI_SF_FAQ_NOTIFY_DSC', 'Opciones de Notificaci�n que se aplican a este Q&amp;A.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'Preguntas Abiertas Global');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'Opciones de Notificaci�n que se aplicaran a todas las Preguntas Abiertas.');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'Categor�a Q&amp;A');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'Opciones de Notificaci�n que se aplican a la categor�a actual.');

define('_MI_SF_QUESTION_NOTIFY', 'Preguntas Abiertas');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'Opciones de Notificaci�n que se aplican a la categor�a actual Pregunta Abierta.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'Nueva categor�a');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', 'Notificarme cuando una nueva categor�a es creada.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'Recibir notificaci�n cuando una categor�a es creada.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva categor�a');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'Q&amp;A enviado');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', 'Notificarme cuando cualquier nuevo Q&amp;A es enviado (aguardando aprobaci�n).');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', 'Recibir una notificaci�n cuando cualquier Q&amp;A nuevo es enviado (aguardando aprobaci�n).');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo Q&amp;A enviado');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'Nuevo Q&amp;A publicado');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando cualquier nuevo Q&amp;A es publicado.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'Recibir una notificaci�n cuando cualquier Q&amp;A nuevo es publicado.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo Q&amp;A publicado');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nueva respuesta propuesta');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Notificarme cuando una nueva respuesta es propuesta para cualquier Q&amp;A.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Recibir una notificaci�n cuando una nueva respuesta es propuesta para cualquier Q&amp;A.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva respuesta propuesta');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nueva respuesta publicada');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando una nueva respuesta es publicada para cualquier Q&amp;A.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Recibir una notificaci�n cuando una nueva respuesta es publicada para cualquier Q&amp;A.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva respuesta publicada');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'Q&amp;A enviado');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'Notificarme cuando un nuevo Q&amp;A es enviado en la categor�a actual.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Recibir una notificaci�n cuando un nuevo Q&amp;A es enviado en la categor�a actual.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo Q&amp;A enviado en categor�a');

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'Nuevo Q&amp;A publicado');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando un nuevo Q&amp;A es publicado en la categor�a actual.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Recibir una notificaci�n cuando un nuevo Q&amp;A es publicado en la categor�a actual.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo Q&amp;A publicado en categor�a');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nueva respuesta propuesta');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Notificarme cuando una nueva respuesta es propuesta para un Q&amp;A en esta categor�a.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Recibir una notificaci�n cuando una nueva respuesta sea propuesta para un Q&amp;A en esta categor�a.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva respuesta propuesta');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nueva respuesta publicada');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando una nueva respuesta es publicada para un Q&amp;A en esta categor�a.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Recibir una notificaci�n cuando una nueva respuesta es publicada para un Q&amp;A en esta categor�a.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva respuesta publicada');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'Q&amp;A rechazada');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'Notificarme si esta Q&amp;A es rechazada.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Recibir una notificaci�n si esta Q&amp;A es rechazada.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n :  Q&amp;A rechazada');

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'Q&amp;A aprobada');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'Notificarme cuando esta Q&amp;A es aprobada.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Recibir una notificaci�n cuando esta Q&amp;A es aprobada.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Q&amp;A aprobada');

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'Respuesta aprobada');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'Notificarme cuando esta respuesta es aprobada.');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Recibir una notificaci�n cuando esta respuesta es aprobada');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Respuesta aprobada');

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'Respuesta rechazada');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'Notificarme si esta respuesta es rechazada.');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Recibir una notificaci�n si esta respuesta es rechazada.');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Respuesta rechazada');

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Pregunta enviada');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'Notificarme cuando cualquier nueva pregunta sea enviada (aguardando aprobaci�n).');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', 'Recibir una notificaci�n cuando cualquier nueva pregunta sea enviada (aguardando aprobaci�n).');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva Pregunta enviada');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Pregunta publicada');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando cualquier nueva pregunta sea pulicada en la secci�n Preguntas Abiertas.');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'Recibir una notificaci�n cuando cualquier nueva pregunta sea pulicada en la secci�n Preguntas Abiertas.');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva Pregunta publicada');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Respuesta propuesta');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Notificarme cuando una respuesta es propuesta para cualquier pregunta abierta.');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Recibir una notificaci�n cuando una respuesta es propuesta para cualquier pregunta abierta.');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva Respuesta propuesta');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Pregunta enviada');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'Notificarme cuando una pregunta es enviada en la categor�a actual.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Recibir una notificaci�n cuando una pregunta es enviada en la categor�a actual.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva Pregunta enviada');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Pregunta publicada');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'Notificarme cuando una pregunta es publicada en la categor�a actual.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Recibir una notificaci�n cuando una pregunta es publicada en la categor�a actual.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva Pregunta publicada');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Respuesta propuesta');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Notificarme cuando una respuesta es propuesta para una pregunta abierta en esta categor�a.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Recibir una notificaci�n cuando una respuesta es propuesta para una pregunta abierta en esta categor�a.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva Respuesta propuesta');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Pregunta rechazada');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'Notificarme si esta pregunta es rechazada.');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Recibir una notificaci�n si esta pregunta es rechazada.');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Pregunta rechazada');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Pregunta aprobada');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'Notificarme si esta pregunta es aprobada.');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'Recibir una notificaci�n si esta pregunta es aprobada.');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Pregunta aprobada');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'Respuesta aprobada');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'Notificarme cuando esta respuesta sea aprobada.');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Recibir una notificaci�n cuando esta respuesta sea aprobada.');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Respuesta aprobada');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'Respuesta rechazada');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'Notificarme si esta respuesta es rechazada.');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Recibir una notificaci�n si esta respuesta es rechazada.');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Respuesta rechazada');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "Informaci�n del  Autor");
define('_MI_SF_AUTHOR_NAME', "Autor");
define('_MI_SF_AUTHOR_WEBSITE', "Sitio web del Autor");
define('_MI_SF_AUTHOR_EMAIL', "email del Autor");
define('_MI_SF_AUTHOR_CREDITS', "Creditos");
define('_MI_SF_DEMO_SITE', "SmartFactory Sitio Demo");
define('_MI_SF_MODULE_INFO', "Informaci�n del desarrollo del m�dulo ");
define('_MI_SF_MODULE_STATUS', "Estado");
define('_MI_SF_MODULE_DEMO', "Sitio de demostraci�n");
define('_MI_SF_MODULE_SUPPORT', "Sitio de soporte oficial");
define('_MI_SF_MODULE_BUG', "Reportar un bug para este m�dulo");
define('_MI_SF_MODULE_FEATURE', "Sugerir una nueva mejora para �ste m�dulo");
define('_MI_SF_MODULE_DISCLAIMER', "Condiciones de uso");
define('_MI_SF_AUTHOR_WORD', "La Palabra Del Autor");
define('_MI_SF_WARNING', "Este modulo viene asi como est�, sin ninguna garant�a. Aunque este m�dulo no es beta , est� bajo un continuo desarrollo.
Esta versi�n puede ser utilizada en un sitio de producci�n, pero es bajo su propia responsabilidad, lo cual significa que el autor no es responsable de su uso.");
?>