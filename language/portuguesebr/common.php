<?php

/**
* $Id: common.php 807 2008-02-07 13:34:51Z fx2024 $
* Module: SmartShop
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path n�o definido");
}
define("_CO_SOBJECT_SOLD", "Marcar como vendido");
define("_CO_SSHOP_STATUS_OFFLINE", "Desligado");
define("_CO_SSHOP_STATUS_ONLINE", "Ligado");
define("_CO_SSHOP_STATUS_EXPIRED", "Expirado");
define("_CO_SSHOP_STATUS_SUBMITTED", "Enviado");
define("_CO_SSHOP_STATUS_SOLD", "Vendido");
define("_CO_SSHOP_ITEM_NAME", "Nome");
define("_CO_SSHOP_ITEM_DATESUB", "Data de Cria��o");
define("_CO_SSHOP_ITEM_DATESUB_DSC", "Data de Cria��o deste item.");
define("_CO_SSHOP_ITEM_DATE_EXP", "Data de expira��o");
define("_CO_SSHOP_ITEM_DATE_EXP_DSC", "Data de expira��o deste item.");
define("_CO_SSHOP_ITEM_STATUS", "Status");
define("_CO_SSHOP_ITEM_CATEGORY", "Categoria");
define("_CO_SSHOP_ITEM_ID", "Item #");
define("_CO_SSHOP_ITEM_CATEGORY_DSC", "Categoria � qual pertence este item.");
define("_CO_SSHOP_ITEM_TITLE_DSC", "Titulo deste item");
define("_CO_SSHOP_ITEM_SUMMARY", "Resumo");
define("_CO_SSHOP_ITEM_SUMMARY_DSC", "Resumo do item.");
define("_CO_SSHOP_ITEM", "Item");
define("_CO_SSHOP_ITEM_DESC", "Descri��o");
define("_CO_SSHOP_ITEM_DESC_DSC", "Descri��o de um item particular.<br/>A descri��o deve ser de no m�ximo 120 carcteres. The description must be at most 120 characters. Sen�o, o texto extra ser� truncado.");

define("_CO_SSHOP_ITEM_PRICE", "Pre�o");
define("_CO_SSHOP_ITEM_PRICE_DSC", "");

define("_CO_SSHOP_ITEM_CURRENCY", "Moeda");
define("_CO_SSHOP_ITEM_CURRENCY_DSC", "");

define("_CO_SSHOP_ITEM_DATE", "Posted data");
define("_CO_SSHOP_ITEM_DATE_DSC", "");

define("_CO_SSHOP_CAT_HASITEM", "Pode reservar items");
define("_CO_SSHOP_CAT_HASITEM_DSC", "Selecione 'Sim', se items podem ser postados nesta categoria. Selecione 'N�o' Se esta categoria � apenas um recipiente para outras categorias.");

define("_CO_SSHOP_CAT_ISFORSALE", "	Itens da categoria est�o � venda");
define("_CO_SSHOP_CAT_ISFORSALE_DSC", "Se voc� selecionar 'Sim', informa��es sobre o pre�o ser�o exibidas.");

define("_CO_SSHOP_CURRENCY_CANDOL", "CDA");
define("_CO_SSHOP_CURRENCY_REAL", "Real");
define("_CO_SSHOP_CURRENCY_USDOL", "USD");
define("_CO_SSHOP_CURRENCY_EURO", "Euro");
define("_CO_SSHOP_CAT_OPTIONS", "Op��es");
define("_CO_SSHOP_CAT_OPTIONS_DSC", "Se o tipo que voc� selecionou necessita de op��es, Aqui � onde voc� iria inseri-los, separados por uma quebra de linha.<br/>Para definir um valor padr�o, coloque o seguinte prefixo no mesmo '***'. <br/>Ex: para definir a op��o 2 como padr�o, entre:<br/>op��o1<br/>***op��o2<br/>op��o3<br/>");
define("_CO_SSHOP_CAT_OPTIONS_DEPENDCY_DSC", "Entre Digite as op��es deste campo e selecione, para cada op��es, em que op��o da depend�ncia campo est�o linkados.");

define("_CO_SSHOP_CAT_ATTRIBUT_CAT", "Categoria");
define("_CO_SSHOP_CAT_ATTRIBUT_CAT_DSC", "");

define("_CO_SSHOP_CAT_ATT_NAME", "Nome");
define("_CO_SSHOP_CAT_ATT_NAME_DSC", "");

define("_CO_SSHOP_CAT_ATT_TYPE", "Tipo");
define("_CO_SSHOP_CAT_ATT_TYPE_DSC", "");

define("_CO_SSHOP_CAT_ATT_REQ", "Requerido ?");
define("_CO_SSHOP_CAT_ATT_REQ_DSC", "");
define("_CO_SSHOP_NO_USER", "O Vendedor n�o � mais membro da comunidade. Me desculpe pelo incoveniente");
define("_CO_SSHOP_CAT_ATT_DEFAULT", "Padr�o");
define("_CO_SSHOP_CAT_ATT_DEFAULT_DSC", "");

define("_CO_SSHOP_CAT_ATT_SORTABLE", "Classificav�is ?");
define("_CO_SSHOP_CAT_ATT_SORTABLE_DSC", "");

define("_CO_SSHOP_CAT_ATT_SEARCHABLE", "Pesquisaveis ?");
define("_CO_SSHOP_CAT_ATT_SEARCHABLE_DSC", "");

define("_CO_SSHOP_CAT_ATT_DISPLAY", "Exibir na tela de usuario ?");
define("_CO_SSHOP_CAT_ATT_DISPLAY_DSC", "");

define("_CO_SSHOP_ITEM_UID", "Poster");
define("_CO_SSHOP_ITEM_UID_DSC", "Poster deste item.");
define("_CO_SSHOP_ITEM_STATUS_DSC", "Status deste item. Apenas os items 'Ligados' ser�o exibidos na tela de usuario");

define("_CO_SSHOP_CAT_ATT_DESCRIPTION", "Descri��o");
define("_CO_SSHOP_CAT_ATT_DESCRIPTION_DSC", "You can adicionar uma descri��o a este campo para dar mais inform��es ao usuario sobre o significado deste campo.");

define("_CO_SSHOP_TYPE_CHECK", "Checkbox");
define("_CO_SSHOP_TYPE_HTML", "HTML Area");
define("_CO_SSHOP_TYPE_RADIO", "Radio box");
define("_CO_SSHOP_TYPE_SELECT", "Select box");
define("_CO_SSHOP_TYPE_SELECT_MULTI", "lista de Sele��o");
define("_CO_SSHOP_TYPE_TEXT", "Caixa de texto");
define("_CO_SSHOP_TYPE_UPLOAD", "Envio de Arquico");
define("_CO_SSHOP_TYPE_URLLINK", "Link");
define("_CO_SSHOP_TYPE_UPLOADIMG", "Envio de Imagem");
define("_CO_SSHOP_TYPE_YN", "Sim / N�o");
define("_CO_SSHOP_TYPE_TAREA", "Area de Texto");
define("_CO_SSHOP_FORM_SECTION", "Formulario de Se��o");

define("_CO_SSHOP_ITEM_NAME_DSC", "Nome deste item");
define("_CO_SSHOP_POSTER", "Poster");

define("_CO_SSHOP_HITS", "Visualizado");

define("_CO_SSHOP_ITEM_SUBMIT", "Envie um item");
define("_CO_SSHOP_PM", "Mensagem Privada");
define("_CO_SSHOP_EMAIL", "E-mail");
define("_CO_SSHOP_ALL", "Todos");
define("_CO_SSHOP_ITEM_IMAGE", "Logo");
define("_CO_SSHOP_ITEM_IMAGE_DSC", " As imagens precisam ser menores quen %s X %s <br>e menores que %s bytes. Extens�es aceitaveis: GIF, JPG, PNG");
define("_CO_SSHOP_ITEM_LINK_NAME", "Nome do link");
define("_CO_SSHOP_ITEM_LINK_NAME_DSC", "Texto Clicavel");
define("_CO_SSHOP_ITEM_LINK_URL", "Endere�o do link");
define("_CO_SSHOP_ITEM_LINK_URL_DSC", "URL Alvo");
define("_CO_SSHOP_CAT_PUB", "Pub");
define("_CO_SSHOP_CAT_PUB_DSC", "");
define("_CO_SSHOP_ITEM_BILL_ADDR", "Endere�o da conta");
define("_CO_SSHOP_ITEM_BILL_ADDR_DSC", "");
define("_CO_SSHOP_ITEM_TEL", "Telefone");
define("_CO_SSHOP_ITEM_TEL_DSC", "");
define("_CO_SSHOP_ITEM_NO_EXP", "Sem expira��o");
define("_CO_SSHOP_ITEM_NO_EXP_DSC", "Se voc� clicar em 'Sim', A data de expira��o ser� definia abaixo ser� ignorada");

define("_CO_SSHOP_CAT_DEPENDENT_ATT_ID", "Campo dependente");
define("_CO_SSHOP_CAT_DEPENDENT_ATT_ID_DSC", "Se as op��es presentes para este campo customizado �dependente de outro campo existente, por favor selecione este campo aqui.");
define("_CO_SSHOP_NO_DEPENDENCY", "Sem dependencia");

define("_CO_SSHOP_ADD", "Add ");
define("_CO_SSHOP_MORE_OPTIONS", " mais op��es");

define("_CO_SSHOP_TRANS_TRANSACTIONID", "ID da Transa��o");
define("_CO_SSHOP_TRANS_DATE", "Data");
define("_CO_SSHOP_TRANS_DATE_DSC", "");
define("_CO_SSHOP_TRANS_STATUS", "Status");
define("_CO_SSHOP_TRANS_STATUS_DSC", "");
define("_CO_SSHOP_TRANS_ITEMID", "Item");
define("_CO_SSHOP_TRANS_ITEMID_DSC", "");
define("_CO_SSHOP_TRANS_UID", "Usuario");
define("_CO_SSHOP_TRANS_UID_DSC", "");
define("_CO_SSHOP_TRANS_PRICE", "Pre�o");
define("_CO_SSHOP_TRANS_PRICE_DSC", "");
define("_CO_SSHOP_TRANS_CURRENCY", "Moeda");
define("_CO_SSHOP_TRANS_CURRENCY_DSC", "");
define("_CO_SSHOP_TRANS_QUANTITY", "Quantidade");
define("_CO_SSHOP_TRANS_QUANTITY_DSC", "");
define("_CO_SSHOP_CAT_ATT_CAPTION", "Capitulo");
define("_CO_SSHOP_CAT_ATT_CAPTION_DSC", "Capitulo � um campo no formulario de item.");

define("_CO_SSHOP_CAT_ATTRIBUT_EDIT", "Informa��o do campo customizado");
define("_CO_SSHOP_CAT_ATTRIBUT_EDIT_INFO", "Preencha este formulario para solicitar a edi��o das inform��es deste campo customizado.");

define("_CO_SSHOP_TRANS_UNAME", "Nome de Usuario");
define("_CO_SSHOP_TRANS_VENDOR_ADP", "Vendor ADP");
define("_CO_SSHOP_CAT_ATT_SUMMARYDISPLAY", "Exibir no resumo de categoria");
define("_CO_SSHOP_CAT_ATT_SUMMARYDISPLAY_DSC", "Se voc� clicar em 'Sim', este atributo estar� visivel na listagem de item da categoria. 'Exiber na Tela do usuario' precisa estar ativo para o 'Sim' funcionar.");
define("_CO_SSHOP_CAT_ATT_SEARCHDISPLAY", "Exibir o resultado Na pagina de busca ");
define("_CO_SSHOP_CAT_ATT_SEARCHDISPLAY_DSC", "Se voc� clicar em 'Sim', este atributo estar� visivel no resultado da pagina de busca de items. 'Exiber na Tela do usuario' precisa estar ativo para o 'Sim' funcionar.");
define("_CO_SSHOP_CAT_ATT_CHECKOUTDISPLAY", "Exibir na tela de checagem");
define("_CO_SSHOP_CAT_ATT_CHECKOUTDISPLAY_DSC", "Se voc� clicar em 'Sim', este atributo estar� visivel na pagina de checagem. 'Exiber na Tela do usuario' precisa estar ativo para o 'Sim' funcionar.");

define("_CO_SSHOP_CUSTOM_RENDERING", "Renderiza��o de customizados");
define("_CO_SSHOP_CUSTOM_RENDERING_DSC", "N�o implementado na op��o dos campos.<br/>" .
		"Use {URL}, {CAPTION} e {DESCRIPTION} para arquivos e links.<br/>Tamb�m, use {TARGET} para links. <br/>para outros tipos de campo use {VALUE}<br/>Estas tags ser�o substituidas pelo valor atual dos campos.");
define("_CO_SSHOP_CAT_SEARCHABLE", "Exibir no formulario de busca");
define("_CO_SSHOP_CAT_SEARCHABLE_DSC", "Se voc� selecionar 'Sim', usuarios podem selecionar esta categoria em um formulario de busca.  	
Caso contr�rio, os itens ser�o pesquisados, selecionando uma categoria parente no formul�rio de pesquisa");
define("_CO_SSHOP_RESET_VALUES", "Voc� est� pretes a modificar o tipo de um campo customizado que � imcompativel com o anterior. Todos os valores deste campo ser�o perdidos nos items existentes. Continuar? ");
define("_CO_SSHOP_DEFAULT_ERROR", "Voc� precisa definir um valor padr�o para um campo requerido.");
define("_CO_SSHOP_CAT_ATT_SIZE", "Tamanho");
define("_CO_SSHOP_CAT_ATT_SIZE_DSC", "");
define("_CO_SSHOP_CAT_TPL_DEF", "Padr�o");
define("_CO_SSHOP_CAT_TPL_LIST", "Vis�o das Listas");
define("_CO_SSHOP_CAT_TPL_TABLE", "Vis�o das Tabelas");
define("_CO_SSHOP_CAT_TEMPLATE", "Template");
define("_CO_SSHOP_CAT_TEMPLATE_DSC", "Essa op��o permite exibir a esta categoria espec�fica diferente das configura�oes globais das preferencias do m�dulo");
define("_CO_SSHOP_CAT_ATT_UNIQUE", "Unico");
define("_CO_SSHOP_CAT_ATT_UNIQUE_DSC", "");
define("_CO_SSHOP_ERROR_UNIQUE_MSG", " valor j� usado. Necessita ser unico.");
?>