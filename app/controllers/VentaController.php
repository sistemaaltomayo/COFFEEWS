<?php
use app\bibliotecas\GeneralClass;

class VentaController extends BaseController
{

	public function actionVentaTotales()
	{

		$hoy = date('Y-m-d');
		
		$listaVentas = GenLocalMovil::leftJoin('Ven.Venta', function ($join) use ($hoy) {
				            $join->on('Ven.Venta.IdLocal', '=', 'Gen.LocalMovil.IdLocal')
				            ->where('Ven.Venta.fecha', '=', $hoy)
				            ->where('Ven.Venta.Activo ', '=', 1);
				        	})
							->where('Gen.LocalMovil.Activo', '=', 1)
							->where('Gen.LocalMovil.IdLocal', '<>', 'LIM01CEN000000000000')
							->selectRaw('SUM(Ven.Venta.TotalOriginal) as Total  , Gen.LocalMovil.Descripcion ,Gen.LocalMovil.IdLocal')
							->groupBy('Gen.LocalMovil.Descripcion')->groupBy('Gen.LocalMovil.IdLocal')->get()->toJson();

        print_r($listaVentas);

	}

}

?>