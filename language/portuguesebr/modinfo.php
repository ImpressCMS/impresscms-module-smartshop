<?php

/**
* $Id: modinfo.php 807 2008-02-07 13:34:51Z fx2024 $
* Module: SmartShop
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path n�o definido");
}

// Module Info
// The name of this module

global $xoopsModule;
define("_MI_SSHOP_MD_NAME", "SmartShop");
define("_MI_SSHOP_MD_DESC", "Simples e flexivel m�dulo de conte�dos");

define("_MI_SSHOP_INDEX", "Index");
define("_MI_SSHOP_CATEGORIES", "Categorias");
define("_MI_SSHOP_ITEMS", "Items");
define("_MI_SSHOP_TRANSACTION", "Transa��es");
define("_MI_SSHOP_CHECKOUT_CONFIG", "Pagina de Checagem");

define("_MI_SSHOP_ITEMSPERPAGE", "P�ginas por categoria");
define("_MI_SSHOP_ITEMSPERPAGE_DSC", "Selecione a quantidade de p�ginas que voc� gostaria que fossem exibidas em cada categoria");

define("_MI_SSHOP_MODMETADESC", "Meta-description do m�dulo");
define("_MI_SSHOP_MODMETADESC_DSC", "Isto ser� usado como meta-description na p�gina principal do m�dulo");
define("_MI_SSHOP_INVENTORY", "Invent�rio");
define("_MI_SSHOP_GLOBAL_CSTMFLDS", "Campos globais personalizados");

define("_MI_SSHOP_SUBMIT_BY_CAT", "Envie um item");
define("_MI_SSHOP_WAIT_APPROVAL", "Items enviados");
define("_MI_SSHOP_CURR_USER_SUB", "Seus envios");
define("_MI_SSHOP_RENEW", "Renovar expirados");

define("_MI_SSHOP_NEW_SEARCH", "Pesquisa");
define("_MI_SSHOP_NEW_ADDS", "Itens recentes");
define("_MI_SSHOP_NEW_SELLERS", "Novos vendedores");

define("_MI_SSHOP_GLOBAL_ITEM_NOTIFY", "Global");
define("_MI_SSHOP_GLOBAL_ITEM_NOTIFY_DSC", "");

define("_MI_SSHOP_ITEM_NOTIFY", "Item");
define("_MI_SSHOP_ITEM_NOTIFY_DSC", "");

define("_MI_SSHOP_ITEM_APPROVED_NOTIFY", "item aprovado");
define("_MI_SSHOP_ITEM_APPROVED_NOTIFY_CAP", "Notifique-me quando este item ser� aprovado");
define("_MI_SSHOP_ITEM_APPROVED_NOTIFY_DSC", "");
define("_MI_SSHOP_ITEM_APPROVED_NOTIFY_SBJ", "Seu item foi aprovado");

define("_MI_SSHOP_ITEM_SUBMITTED_NOTIFY", "Item enviado");
define("_MI_SSHOP_ITEM_SUBMITTED_NOTIFY_CAP", "Notifique-me quando um usu�rio enviar um novo item");
define("_MI_SSHOP_ITEM_SUBMITTED_NOTIFY_DSC", "");
define("_MI_SSHOP_ITEM_SUBMITTED_NOTIFY_SBJ", "Item enviado");

define("_MI_SSHOP_GLOBAL_ITEM_PUBLISHED_NOTIFY", "item publicado");
define("_MI_SSHOP_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "Notifique quando um novo item for aprovado");
define("_MI_SSHOP_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "");
define("_MI_SSHOP_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "Novo item publicado");

define("_MI_SSHOP_CATEGORY_NAV", "Ativar navega��o por categoria");
define("_MI_SSHOP_CATEGORY_NAV_DSC", "Se voc� selecionar 'Sim', uma lista de todas as categorias ser� exibida na p�gina principal do m�dulo.'");
define("_MI_SSHOP_NAV_MODE", "Modo de navega��o'");
define("_MI_SSHOP_NAV_MODE_DSC", "Se voc� selecionar 'Bread crumb', o caminho atual ser� exibido em cada p�gina.<br/>O modo 'Voltar' exibir� um link 'voltar � p�gina anterior' em cada p�gina.");
define("_MI_SSHOP_NAV_MODE_BREAD", "Bread crumb");
define("_MI_SSHOP_NAV_MODE_BACK", "Voltar");
define("_MI_SSHOP_NAV_MODE_NONE", "Nenhum");
define("_MI_SSHOP_CURRENCIES", "Moedas");
define("_MI_SSHOP_CURRENCIES_DSC", "Moedas dispon�veis para os itens.");
define("_MI_SSHOP_CURRENCY_CANDOL", "CDA");
define("_MI_SSHOP_CURRENCY_REAL", "Real");
define("_MI_SSHOP_CURRENCY_USDOL", "USD");
define("_MI_SSHOP_CURRENCY_EURO", "Euro");
define("_MI_SSHOP_DEFEDITOR", "Editor padr�o");
define("_MI_SSHOP_DEFEDITOR_DSC", "");

define("_MI_SSHOP_MAX_SIZE", "Tamanho m�ximo da imagem do item permitida para upload");
define("_MI_SSHOP_MAX_SIZE_DSC", "");
define('_MI_SSHOP_IMG_MAX_WIDTH', "Largura m�xima das imagens:");
define('_MI_SSHOP_IMG_MAX_WIDTH_DSC', "Esta ser� a largura m�xima permitida para o upload de imagens.");
define("_MI_SSHOP_IMG_MAX_HEIGHT", "Altura m�xima das imagens:");
define("_MI_SSHOP_IMG_MAX_HEIGHT_DSC", "Esta ser� a altura m�xima permitida para o upload de imagens.");
define("_MI_SSHOP_DEF_DELAY_EXP", "Prazo padr�o para expirar");
define("_MI_SSHOP_DEF_DELAY_EXP_DSC", "N�mero de dias entre a publica��o e a expira��o de um item. <b>Deve ser um n�mero inteiro.</b> Use '0' para fazer itens que n�o expiram.");
define("_MI_SSHOP_DISPLAY_POSTER", "Exibir nome de quem enviou");
define("_MI_SSHOP_DISPLAY_POSTER_DSC", "");
define("_MI_SSHOP_DISPLAY_DATE_PUB", "Exibir data de publica��o dos itens");
define("_MI_SSHOP_DISPLAY_DATE_PUB_DSC", "");
define("_MI_SSHOP_EXP_MANAGEBY_CRON", "Gerenciamento de expira��o usa cron job?");
define("_MI_SSHOP_EXPMANAGEBYCRONDSC", "Recomendado. Voc� deve executar 'smartshop/_cron_expire.php' atrav�s de um cron job.<br>Caso contr�rio, a checagem de vencimento � feito sempre que um usu�rio entrar no site.");
define("_MI_SSHOP_DEF_AVATAR", "Imagem padr�o dos usu�rios");
define("_MI_SSHOP_DEF_AVATAR_DSC", "Imagem que ser� mostrada em informa��es do usu�rio, no caso de ele n�o possuir um avatar. Deve ser na pasta smartshop/imagens. Deixe em branco para n�o mostrar imagens padr�o.");
define("_MI_SSHOP_DEF_ITEM_PIC", "Imagem padr�o dos itens");
define("_MI_SSHOP_DEF_ITEM_PIC_DSC", "Imagem que ser� mostrada nas informa��es dos itens no caso de n�o ter foto. Deve ser na pasta smartshop/imagens. Deixe em branco para n�o mostrar imagens padr�o.");
define("_MI_SSHOPSUBMIT_INTRO", "Introdu��o da p�gina de envio de itens");
define("_MI_SSHOP_SORT", "Ordenar itens por:");
define("_MI_SSHOP_CAT_SORT", "Ordenar categorias por:");
define("_MI_SSHOP_SORT_DSC", "");
define("_MI_SSHOP_SORT_WEIGHT", "Peso");
define("_MI_SSHOP_SORT_DATE", "Data");
define("_MI_SSHOP_SORT_ALPHA", "Alpha");
define("_MI_SSHOP_DISP_FIELDS", "Campos a exibir");
define("_MI_SSHOP_DISP_FIELDS_DSC", "Campos vis�veis (n�o se aplica a campos personalizados)");
define("_MI_SSHOP_DISP_FIELDS_LINK", "Link Externo");
define("_MI_SSHOP_DISP_FIELDS_DESC", "Descri��o");
define("_MI_SSHOP_DISP_FIELDS_IMG", "Imagem");
define("_MI_SSHOP_DISP_FIELDS_PRICE", "Pre�o");
define("_MI_SSHOP_DISP_FIELDS_COUNT", "Visualiza��es");
define("_MI_SSHOP_DISP_FIELDS_DATE", "Data");
define("_MI_SSHOP_NOTIF_EXP", "Notifica��o de Expira��o");
define("_MI_SSHOP_NOTIF_EXP_DSC", "Selecione quantos dias antes da expira��o voc� deseja notificar o autor");
define("_MI_SSHOP_AUTO_APP", "Itens enviados s�o sempre aprovados");
define("_MI_SSHOP_AUTO_APP_DSC", "Se voc� selecionar 'N�o', um moderador deve aprovar itens enviados ou editados");
define("_MI_SSHOP_NONE", "Sem notifica��o");
define("_MI_SSHOP_ONLY_EXP", "Apenas ao expirar");
define("_MI_SSHOP_ALLWD_GRP", "Grupos que podem enviar");
define("_MI_SSHOP_ALLWD_GRP_DSC", "Selecione os grupos que podem enviar itens.");
define("_MI_SSHOP_INCLUDESEARCH", "Incluir pesquisa");
define("_MI_SSHOP_INCLUDESEARCHDSC", "Incluir pesquisa na parte inferior de todas as p�ginas no m�dulo");
define("_MI_SSHOP_DEFCATVIEWGR", "Permiss�es padr�o para visualiza��o da categoria");
define("_MI_SSHOP_DEFCATVIEWGRDSC", "Grupos que ter�o permiss�o de ver a categoria por padr�o");
define("_MI_SSHOP_SUB_MENU", "Envie um item");
define("_MI_SSHOP_BCRUMB", "Exibir nome do m�dulo no bread crumb");
define("_MI_SSHOP_BCRUMBDSC", "");
define("_MI_SSHOP_INPUTTYPE_SEARCH", "Tipo de campo paras as categorias na busca");
define("_MI_SSHOP_INPUTTYPE_SEARCHDSC", "");
define("_MI_SSHOP_INPUTTYPE_RADIO", "Radio button");
define("_MI_SSHOP_INPUTTYPE_SELECT", "Select box");
define("_MI_SSHOP_CAT_TPL", "Tipo de visualiza��o na p�gina de categorias");
define("_MI_SSHOP_CAT_TPL_DSC", "");
define("_MI_SSHOP_TPL_LIST", "List view");
define("_MI_SSHOP_TPL_TABLE", "Table view");
define("_MI_SSHOP_BASKET", "Carrinho de Compras");
define("_MI_SSHOP_STANDARD", "Vers�o Padr�o");
define("_MI_SSHOP_CUSTOM_VERSION" , "Vers�o do M�dulo");
define("_MI_SSHOP_CUSTOM_VERSIONDSC", "Selecione o nome do seu site ou deixe em branco para 'Padr�o'");

define("_MI_SSHOP_ORDER_MAIL", "Enviar e-mail para os grupos:");
define("_MI_SSHOP_ORDER_MAIL_DSC", "Selecione grupos que ir�o receber e-mails quando um usu�rio solicitar no site.");
define("_MI_SSHOP_EXTRA_EMAILS", "Envie e-mails de solicita��es para o endere�o");
define("_MI_SSHOP_EXTRA_EMAILS_DSC", " Entre com um novo endere�o de e-mail separado por ';'");
define("MI_SSHOP_SIGNATURE", "Assinatura");
define("_MI_SSHOP_SIGNATURE_DSC", "Assinatura para e-mails de confirma��o que ser�o enviados aos usuarios.");
define("_MI_SSHOP_HEADER_PRINT", "Cabe�alho para pagina de impress�o");
define("_MI_SSHOP_HEADER_PRINT_DSC", "");
define("_MI_SSHOP_FOOTER_PRINT", "Rodap� para pagina de impress�o");
define("_MI_SSHOP_FOOTER_PRINT_DSC", "");
define("_MI_SSHOP_MAX_QTY_BASKET", "Quantidade maxima a ser adicionada na cesta");
define("_MI_SSHOP_MAX_QTY_BASKET_DSC", "Digite '1' para mostrar quantidade. Digite '0' para desabilitar os bot�es 'Adicione ao carrinho'. Apenas valores num�ricos.");
define("_MI_SSHOP_TAREA_WIDTH", "# colunas para as areas de texto");
define("_MI_SSHOP_TAREA_WIDTH_DSC", "");
define("_MI_SSHOP_TAREA_HEIGHT", "# linhas para as areas de texto");
define("_MI_SSHOP_TAREA_HEIGHT_DSC", "");
?>