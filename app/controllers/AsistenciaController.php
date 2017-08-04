<?php
use app\bibliotecas\GeneralClass;

class AsistenciaController extends BaseController
{

	public function actionAsistenciaPersonalDetalle($fecha)
	{

		$stmt = DB::connection('sqlsrv')->getPdo()->prepare('SET NOCOUNT ON;EXEC SMS_EMAILASISTENCIAWS ?');
        $stmt->bindParam(1, $fecha ,PDO::PARAM_STR);
        $stmt->execute();	


		$listaAsistencia = GENEmailAsistenciaEmpleadosWS::get()->toJson();

        print_r($listaAsistencia);

	}

}

?>