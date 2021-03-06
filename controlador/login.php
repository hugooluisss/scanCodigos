<?php
global $objModulo;
switch($objModulo->getId()){
	case 'logout':
		$_SESSION[SISTEMA] = array();
		session_destroy();
		
		header ("Location: index.php");
	break;
	case 'route':
		global $userSesion;
		print_r($userSesion->getPerfil());
		switch ($userSesion->getPerfil()){
			case '1': header("location: dashboard");break;
		}
	break;
	case 'clogin':
		switch($objModulo->getAction()){
			case 'login':
				$db = TBase::conectaDB();
				$rs = $db->query("select idUsuario, pass from usuario where upper(email) = upper('".$_POST['usuario']."') and visible = true");
				$result = array('band' => false, 'mensaje' => 'Error al consultar los datos');
				
				$row = $rs->fetch_assoc();
				
				if($rs->num_rows == 0)
					$result = array('band' => false, 'mensaje' => 'El usuario no existe');
				elseif(strtoupper($row['pass']) <> strtoupper($_POST['pass']))
					$result = array('band' => false, 'mensaje' => 'Contraseña inválida');
				else{
					$obj = new TUsuario($row['idUsuario']);
					if ($obj->getId() == '')
						$result = array('band' => false, 'mensaje' => 'Acceso denegado', 'tipo' => $obj->getIdTipo());
					else
						$result = array('band' => true);
				}
				
				if($result['band']){
					$obj = new TUsuario($row['idUsuario']);
					$sesion['usuario'] = $obj->getId();
					$sesion['tipo'] = 1;
					
					$_SESSION[SISTEMA] = $sesion;
				}
				
				$result['datos'] = $sesion;
				$smarty->assign("json", $result);
			break;
			case 'logout':
				$_SESSION[SISTEMA] = array();
				session_destroy();
				
				header ("Location: index.php");
			break;
		}
	break;
}
?>