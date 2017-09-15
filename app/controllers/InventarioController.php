<?php
use app\bibliotecas\GeneralClass;

class InventarioController extends BaseController
{

	public function actionStockArtesania()
	{

		$listaStockArtesania = StockArtesania::orderBy('StockActual', 'desc')->get()->toJson();
        print_r($listaStockArtesania);

	}

	public function actionStockCafeteria()
	{
		$listaStockCafeteria = StockCafeterias::orderBy('Sede', 'desc')
								->orderBy('Clase', 'desc')->orderBy('StockActual', 'desc')->get()->toJson();

        print_r($listaStockCafeteria);
	}	




}

?>