<?php

extract($_POST);

# Instancia do objeto XMLWriter
$xml = new XMLWriter;

# Cria memoria para armazenar a saida
$xml->openMemory();

# Inicia o cabeçalho do documento XML
#$xml->startDocument( '1.0' , 'iso-8859-1' );
$xml->startDocument( '1.0' , 'utf-8' );

# Adiciona/Inicia um Elemento / Nó Pai <Garantia>
$xml->startElement("Garantia");
$a = array();
$a[] = 
"$xml->writeElement("Produto", $produto);
$xml->writeElement("Valor", $valor);
$xml->writeElement("DataCompra", $dataCompra);
$xml->writeElement("Loja", $loja);
$xml->writeElement("GarantiaLoja", $garantiaLoja);
$xml->writeElement("GarantiaFabrica", $garantiaFabrica);
"
#  Finaliza o Nó Pai / Elemento <Garantia>
$xml->endElement();

$i++;

# ********* PARA IMPRIMIR NA TELA *********
#  Configura a saida do conteúdo para o formato XML
header( 'Content-type: text/xml' );
# Imprime os dados na tela
print $xml->outputMemory(true);

# ********* SALVANDO ARQUIVOS EM DISCO *********

# retorna erro se o header foi definido
# retorna erro se outputMemory já foi chamado

#$file = fopen('garantia.xml','w+');
#fwrite($file,$xml->outputMemory(true));
#fclose($file);
?>