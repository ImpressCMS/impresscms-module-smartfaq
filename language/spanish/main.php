<?php
//Traducci�n inicial por w4z004; actualizaci�n para posteriores versiones del m�dulo por Riosoft
/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_MD_SF_ACTION", "Acci�n");
define("_MD_SF_ALL", "Todos");
define("_MD_SF_ADMIN_PAGE", ":: Secci�n Administrativa ::");
define("_MD_SF_ALLOWCOMMENTS", "� Permitir comentarios ?");
define("_MD_SF_ANSWERED", "Respondido");
define("_MD_SF_ANSWERQUESTION", "[Enviar una respuesta]");
define("_MD_SF_ANSWER_FAQ", "Respuesta");
define("_MD_SF_ANSWER_FAQ_DSC", "Respuesta detallada a la pregunta realizada.");
define("_MD_SF_APPROVE", "Aprobar");
define("_MD_SF_ARTBODY", "Respuesta detallada");
define("_MD_SF_ARTICLES", " Q&A.");
define("_MD_SF_BACK2CAT", "Regresar a la categor�a");
define("_MD_SF_CATEGORY_SUMMARY", "Sumario de Categor�as");
define("_MD_SF_CATEGORY_SUMMARY_INFO", "Aqu� encontrar� informaci�n relacionada a esta categor�a.");
define("_MD_SF_CATEGORY_EDIT", "Editar categor�a");
define("_MD_SF_CANCEL", "Cancelar");
define("_MD_SF_CLEAR", "Limpiar");
define("_MD_SF_COMMENTS", "Comentario(s)");
define("_MD_SF_CONTEXTMODULELINK", "Contextualmente enlazar este m�dulo");
define("_MD_SF_CONTEXTMODULELINK_FAQ", "Contextualmente enlazado a este m�dulo");
define("_MD_SF_CONTEXTMODULELINK_FAQ_DSC", "Seleccione el m�dulo para el cual este Q&A ser� enlazado. Si el bloque de Q&A contextual esta visible sobre este m�dulo, el 'como hago' de este Q&A ser� mostrado.");
define("_MD_SF_CONTEXTPAGE", "Contextualmente enlazar este URL");
define("_MD_SF_CONTEXTPAGEDEF", "P�gina Contextual");
define("_MD_SF_CONTEXTPAGEDEF_DSC", "P�gina para la cual este Q&A necesita una explicaci�n <b>Ejemplo :</b> modules/newbb");
define("_MD_SF_CREATE", "Enviar el Q&A");
define("_MD_SF_CATEGORY", "Categor�a");
define("_MD_SF_CATEGORY_FAQ", "Categor�a");
define("_MD_SF_CATEGORY_FAQ_DSC", "Seleccione una categor�a para esta Pregunta y Respuesta.");
define("_MD_SF_CATEGORY_QUESTION", "Categor�a");
define("_MD_SF_CATEGORY_QUESTION_DSC", "Seleccione una categor�a para esta Pregunta.");
define("_MD_SF_DATE", "Fecha");
define("_MD_SF_DATESUB", "Publicado el");
define("_MD_SF_DESCRIPTION", "Descripci�n");
define("_MD_SF_DELETE", "Borrar Q&A");
define("_MD_SF_DIDUNO", "� Conoc�a usted ?");
define("_MD_SF_DIDUNO_FAQ", "� Conoc�a usted ?");
define("_MD_SF_DIDUNO_FAQ_DSC", "Este ser� usado en el bloque � Conoc�a usted ?.");
define("_MD_SF_DOHTML", "Habilitar HTML ");
define("_MD_SF_DOSMILEY", "Habilitar Caritas ");
define("_MD_SF_DOXCODE", "Habilitar XOOPS bbcode");
define("_MD_SF_EDIT", "Editar Q&A");
define("_MD_SF_ERROR_ANSWER_NOT_SAVED", "Un error ha ocurrido. La respuesta no ha sido guardada en la base de datos.");
define("_MD_SF_ERROR_FAQ_NOT_SAVED", "Un error ha ocurrido. La Q&A no ha sido guardada en la base de datos.");
define("_MD_SF_ERRORSAVINGDB", "ERROR: Base de datos NO ha sido Actualizada debido a un Error!");
define("_MD_SF_EXACTURL", "� URL exacto ?");
define("_MD_SF_EXACTURL_DSC", "Si se configura en 'SI', el 'URL espec�fico' puede necesitar<br />que coincida el actual URL para el <br />Q&A a ser mostrado. Si se configura en 'No', el<br />Q&A podr� ser mostrado si el 'URL espec�fico'<br />coincide en parte con el actual URL. ej. modules/newbb/*.php");
define("_MD_SF_FAQ_NEW_ANSWER_NEED_APPROBATION", "Su respuesta ha sido enviada y esta aguardando a que un moderador la revise.");
define("_MD_SF_FAQ_NEW_ANSWER_PUBLISHED", "Su respuesta ha sido enviada satisfactoriamente y autom�ticamente ser� publicada en la secci�n Q&A, como un reemplazo a la respuesta original.");
define("_MD_SF_FAQCOMEFROM", "Este Q&A fu� encontrado en ");
define("_MD_SF_FINDFAQHERE", "Encontrar este Q&A aqu� : ");
define("_MD_SF_GOODDAY", "Hola, ");
define("_MD_SF_HITS", "Hits");
define("_MD_SF_HITSDETAIL", "Este Q&A ha sido le�do");
define("_MD_SF_HOME", "Inicio");
define("_MD_SF_HOWDOI", "Como hago...");
define("_MD_SF_HOWDOI_FAQ", "Como hago...");
define("_MD_SF_HOWDOI_FAQ_DSC", "Esto le permite ser usado en el bloque de Q&A Contextual. Esta deber�a ser una versi�n corta de la pregunta.");
define("_MD_SF_INDEX_CATEGORIES_SUMMARY", "Sumario de Categorias");
define("_MD_SF_INDEX_CATEGORIES_SUMMARY_INFO", "Aqu� hay una lista de las categor�as top y sus Sub-categor�as. Seleccione una categor�a para ver las Preguntas y Respuestas.");
define("_MD_SF_INDEX_CATEGORIES_QUESTIONS_SUMMARY_INFO", "Aqu� hay una lista de las categor�as top y sus Sub-categor�as. Seleccione una categor�a para ver las preguntas abiertas.");
define("_MD_SF_INDEX_FAQS", "Ultimas Preguntas y Respuestas publicadas");
define("_MD_SF_INDEX_FAQS_INFO", "Aqu� hay una lista de las �ltimas Preguntas y Respuestas que han sido publicados.");
define("_MD_SF_INDEX_QUESTIONS", "Ultimas preguntas publicadas");
define("_MD_SF_INDEX_QUESTIONS_INFO", "Aqu� hay una lista de las �ltimas preguntas abiertas han sido publicadas.");
define("_MD_SF_INTARTFOUND", "Aqu� hay un Q&A interesante que he encontrado en %s");
define("_MD_SF_INTARTICLE", "Ojear este Q&A en %s");
define("_MD_SF_MAIL", "Enviar Q&A");
define("_MD_SF_MAINHEAD", "Bienvenido a '");
define("_MD_SF_MAININTRO", "En este �rea del sitio, usted puede encontrar respuestas a preguntas frecuentes. Cada tema es puesto dentro de una categor�a para una busqueda m�s facil. Si usted no puede encontrar la respuesta a una pregunta en particular no dude en <a href='".XOOPS_URL."/forms/askus/form.php'>Realizar una consulta !</a>");
define("_MD_SF_MAINNOSELECTCAT", "Usted no seleccion� una categor�a v�lida");
define("_MD_SF_MAINNOFAQS", "No hay Q&A en esta categor�a");
define("_MD_SF_MODERATION_MAIN_HEAD", "Selecci�n de Moderaci�n de ");
define("_MD_SF_MODERATION_MAIN_INTRO", "Como un moderador, Usted tiene permitido aprobar y rechazar pedidos, preguntas y Q&A.");
define("_MD_SF_MODERATIONPAGE", "Moderaci�n");
define("_MD_SF_MODERATION_PUBLISHED_NEW_ANSWER", "Q&A publicados con nuevas respuestas enviadas");
define("_MD_SF_NO", "No");
define("_AM_SF_NO_CAT_PERMISSIONS", "Lo lamento, usted no tiene los permisos suficientes para acceder a este �rea.");
define("_AM_SF_NO_CAT_EXISTS", "Lo lamento, aqu� no se han definido categor�as a�n.<br />Por favor contacte al administrador del sitio e informele acerca de este error.");
define("_MD_SF_NO_OPEN_QUESTION", "Actualmente no hay preguntas en la secci�n Preguntas Abiertas.");
define("_AM_SF_NO_TOP_PERMISSIONS", "Lo lamento, aqu� no hay Q&A para mostrar.");
define("_MD_SF_NONE", "Ninguno");
define("_MD_SF_NOQUESTIONSYET", "No hay preguntas para mostrar.");
define("_MD_SF_NOTIFY", "� Notificarme al publicarlo ?");
define("_MD_SF_NOFAQS_INFO", "No hay actualmente Q&A para mostrar");
define("_MD_SF_NOCATEGORYSELECTED", "Usted no seleccion� una categor�a v�lida !");
define("_MD_SF_NOFAQSELECTED", "Usted no seleccion� un Q&A v�lido !");
define("_MD_SF_OF", "de");
define("_MD_SF_ON", "el");
define("_MD_SF_OPEN_ANSWER_NEED_APPROBATION", "Su respuesta ha sido enviada y podr� ser publicada en la secci�n Q&A cuando un moderador la apruebe.");
define("_MD_SF_OPEN_SECTION", "Preguntas Abiertas");
define("_MD_SF_OPENED_INFO", "Hay preguntas abiertas en esta categor�a. Si usted conoce la respuesta a cualquier pregunta, por favor, sientase libre de responderla presuinando en el t�tulo de la pregunta.");
define("_MD_SF_OPENED_QUESTIONS", "Preguntas Abiertas");
define("_MD_SF_OPTIONS", "Opciones");
define("_MD_SF_ORIGINAL_ANSWER", "Respuesta original");
define("_MD_SF_POSTED", "Publicado");
define("_MD_SF_POSTEDBY", "Publicado por");
define("_MD_SF_PREVIEW", "Vista previa");
define("_MD_SF_PRINT", "Imprimir Q&A");
define("_MD_SF_PRINTERFRIENDLY", "Imprimir este  Q&A en un formato de impresi�n amigable");
define("_MD_SF_QNA_RECEIVED_NEED_APPROVAL", "Su Q&A ha sido enviado y puede ser publicado luego de ser aprobado por un moderador.<br />Gracias por su contribuci�n !");
define("_MD_SF_QNA_RECEIVED_AND_PUBLISHED", "Su Q&A ha sido enviado y autom�ticamente publicado. Gracias por su contribuci�n !");
define("_MD_SF_QUESTION", "Pregunta");
define("_MD_SF_QUESTIONCOMEFROM", "Esta pregunta ha sido encontrada en ");
define("_MD_SF_QUESTIONS", "Preguntas");
define("_MD_SF_READS", "lecturas");
define("_MD_SF_REQUEST", "Realizar una nueva consulta");
define("_MD_SF_REQUEST_ERROR", "Un error ha ocurrido. Su pedido no ha sido enviado.");
define("_MD_SF_REQUEST_INTRO", "� Usted no encuentra la respuesta a una inquietud ? No hay problemas ! <br />Simplemente complete el siguiente formulario para solicitar una respuesta a su pregunta. El administrador del sitio revisar� este pedido y publicar� esta nueva pregunta en 'Preguntas Abiertas' para que alguien la responda !<br /><br />");
define("_MD_SF_REQUEST_RECEIVED_NEED_APPROVAL", "Su pedido ha sido enviado y puede ser publicado en la secci�n Preguntas Abiertas una vez aprobada por un moderador.<br />Gracias por su contribuci�n !");
define("_MD_SF_REQUEST_RECEIVED_AND_PUBLISHED", "Su pedido ha sido enviado y autom�ticamente publicado en la secci�n Preguntas Abiertas. Gracias por su contribuci�n !");
define("_MD_SF_REQUESTED", "Solicitado");
define("_MD_SF_REQUESTEDBY", "Solicitada por %s el %s");
define("_MD_SF_REQUESTEDANDANSWERED", "Preguntado y Respondido por %s el %s");
define("_MD_SF_REQUESTEDBYANDANSWEREDBY", "Preguntado por %s y respondido por %s el %s");
define("_MD_SF_RETURN", "Regresar");
define("_MD_SF_RETURN2INDEX", "Regresar al �ndice del m�dulo");
define("_MD_SF_SMARTFAQS", "Q&A");
define("_MD_SF_SPECIFIC_URL_SELECT", "Especificar URL...");
define("_MD_SF_SENDSTORY", "Enviar este Q&A a un amigo");
define("_MD_SF_SPECIFIC_URL", "Especificar URL");
define("_MD_SF_SPECIFIC_URL_DSC", "Si usted configura 'Contextualmente enlazar este m�dulo' en <i>" . _MD_SF_SPECIFIC_URL_SELECT . "</i>, por favor especifique el URL.<br />\n<b>Ejemplo :</b> modules/newbb");
define("_MD_SF_SUB_INTRO", "por favor complete este formulario para enviar su Pregunta y Respuesta. El administrador del sitio podr� revisarlo y entonces publicarlo lo antes posible. <br /> Gracias por su contribuci�n.<br /><br />" );
define("_MD_SF_SUB_SNEWNAME", "Enviar un Q&A");
define("_MD_SF_SUB_SMNAME", "Enviar un Q&A");
define("_MD_SF_SUBMIT_ERROR", "Un error ha ocurrido. Su Q&A no ha sido enviado.");
define("_MD_SF_SUBMITANSWER", "Enviar respuesta");
define("_MD_SF_SUBMITANSWERTO", "Enviar una respuesta a %s");
define("_MD_SF_SUBMITANSWER_INTRO", "por favor complete este formulario para enviar una respuesta para esta pregunta. El administrador del sitio revisar� este pedido y publicar� lo antes posible. Gracias por su contribuci�n.<br /><br />");
define("_MD_SF_SUBMITANSWERBUTTON", "Enviar la respuesta");
define("_MD_SF_SUBMITAPPROVED", "La respuesta que usted ha enviado ha sido recibida. La opci�n de auto-aprobaci�n est� encendida, la respuesta ha sido aceptada y el Q&A ha sido publicado.");
define("_MD_SF_SUBMIT_FROM_ADMIN", "Puesto que usted es un admin del m�dulo, el Q&A se public� autom�ticamente con todos los permisos.");
define("_MD_SF_LAST_QUESTION", "Ultima pregunta publicada");
define("_MD_SF_LAST_SMARTFAQ", "Ultimas publicaciones");
define("_MD_SF_SUBMITRECEIVED", "La respuesta que usted ha enviado ha sido recibida. Lo revisaremos lo antes posible.");
define("_MD_SF_SMARTFAQS_INFO", "Hay publicadas Preguntas y Respuestas en esta categor�a.");
define("_MD_SF_SUBMITART", "Enviar un Q&A");
define("_MD_SF_THE", "el");
define("_MD_SF_TOTAL_SMARTFAQS", "Total Q&As");
define("_MD_SF_TOTAL_QUESTIONS", "Total Preguntas");
define("_MD_SF_TIMES", "veces");
define("_MD_SF_FAQ", "Q&A");
define("_MD_SF_UNKNOWNERROR", "ERROR.  Regresando, error desconocido!");
define("_MD_SF_WEIGHT", "Posici�n");
define("_MD_SF_OPEN_WELCOME", "bienvenido a la secci�n Preguntas Abiertas de %s");
define("_MD_SF_YES", "S�");
?>
