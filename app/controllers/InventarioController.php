<?php
use app\bibliotecas\GeneralClass;

class InventarioController extends BaseController
{

	public function actionStockArtesania()
	{

		$listaStockArtesania = StockArtesania::orderBy('StockActual', 'desc')->get()->toJson();
        print_r($listaStockArtesania);

	}

	public function actionStockCafeteria($idlocal)
	{
		$listaStockCafeteria = StockCafeterias::orderBy('Sede', 'desc')->where('Id','=',$idlocal)
								->orderBy('Clase', 'desc')->orderBy('StockActual', 'desc')->get()->toJson();

        print_r($listaStockCafeteria);
	}	




}

?>