<?php

function dataBR($data)
{

	if ($data == 0 || !$data) {
		$dataBr = 'Data não informada';
		echo $dataBr;
	} else {
		$explodeData1 = explode('-', $data);
		$dia = $explodeData1[2];
		$mes = $explodeData1[1];
		$ano = $explodeData1[0];

		$dataBr = $dia . "/" . $mes . "/" . $ano;

		return $dataBr;
	}
}
