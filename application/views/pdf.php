<?php
defined('BASEPATH') OR exit('No direct script access allowed');

			// Instancia a classe mPDF
			$mpdf = new \Mpdf\Mpdf();
			// Ao invés de imprimir a view 'welcome_message' na tela, passa o código
			// HTML dela para a variável $html
			$html = '<title>gerou pdf</title>';
			// Define um Cabeçalho para o arquivo PDF
			$mpdf->SetHeader('Gerando PDF no CodeIgniter com a biblioteca mPDF');
			// Define um rodapé para o arquivo PDF, nesse caso inserindo o número da
			// página através da pseudo-variável PAGENO
			$mpdf->SetFooter('{PAGENO}');
			// Insere o conteúdo da variável $html no arquivo PDF
			$mpdf->writeHTML($html);
			// Cria uma nova página no arquivo
			//$mpdf->AddPage();
			// Insere o conteúdo na nova página do arquivo PDF
			$mpdf->WriteHTML('<p><b>data de hoje: ' . date('d/m/Y')  . '</b></p>');
			// Gera o arquivo PDF
			$mpdf->Output();
   ?>
