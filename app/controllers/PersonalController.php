<?php
use app\bibliotecas\GeneralClass;

class PersonalController extends BaseController
{

	public function actionCerrarSolicitud()
	{

		$generalclass        		 	    = new GeneralClass();
		$idsolicitud  	 	 	     		= Input::get('idsolicitud');
		$estadosolicitud  	 	 	     	= 'CE';
		$id 								= $generalclass->getDecodificarId($idsolicitud);

		$tcabecera            				= PERSolicitud::find($id); 
		$tcabecera->Estado    				= $estadosolicitud;
		$tcabecera->save();


	}


	public function actionAceptarRechazarSolicitud()
	{

		$generalclass        		 	    = new GeneralClass();

		$idsolicitud  	 	 	     		= Input::get('idsolicitud');
		$estadosolicitud  	 	 	     	= Input::get('estadosolicitud');
		$id 								= $generalclass->getDecodificarId($idsolicitud);

		$tcabecera            				= PERSolicitud::find($id); 
		$tcabecera->Estado    				= $estadosolicitud;
		$tcabecera->save();



	}


	public function actionPrueba()
	{

		$zona = GENLocalMovil::where('Activo','=',1)->first(); 
		print_r($zona->Zona);


	}





}

?>