<?php
global $objModulo;
switch($objModulo->getId()){
	case 'logout':
		$_SESSION[SISTEMA] = array();
		session_destroy();
		
		header ("Location: index.php");
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
				echo json_encode($result);
			break;
			case 'loginclientes':
				$db = TBase::conectaDB();
				$rs = $db->query("select idCliente, pass from cliente where upper(correo) = upper('".$_POST['usuario']."') and visible = true");
				$result = array('band' => false, 'mensaje' => 'Error al consultar los datos');
				
				$row = $rs->fetch_assoc();
				
				if($rs->num_rows == 0)
					$result = array('band' => false, 'mensaje' => 'El usuario no existe');
				elseif(strtoupper($row['pass']) <> strtoupper($_POST['pass']))
					$result = array('band' => false, 'mensaje' => 'Contraseña inválida');
				else{
					$obj = new TCliente($row['idCliente']);
					if ($obj->getId() == '')
						$result = array('band' => false, 'mensaje' => 'Acceso denegado');
					else
						$result = array('band' => true);
				}
				
				if($result['band']){
					$rs = $db->query("select *, '' as pass from cliente where idCliente = ".$row['idCliente']);
					$sesion = $rs->fetch_assoc();
					
					$obj = new TCliente($row['idCliente']);
					$sesion['usuario'] = $obj->getId();
					$sesion['tipo'] = 2;
					
					$_SESSION[SISTEMA] = $sesion;
				}
				
				$result['datos'] = $sesion;
				echo json_encode($result);
			break;
			case 'loginrunners':
				$db = TBase::conectaDB();
				$rs = $db->query("select idRunner, pass from runner where upper(correo) = upper('".$_POST['usuario']."') and visible = true and situacion = 1");
				$result = array('band' => false, 'mensaje' => 'Error al consultar los datos');
				
				$row = $rs->fetch_assoc();
				
				if($rs->num_rows == 0)
					$result = array('band' => false, 'mensaje' => 'El usuario no existe');
				elseif(strtoupper($row['pass']) <> strtoupper($_POST['pass']))
					$result = array('band' => false, 'mensaje' => 'Contraseña inválida');
				else{
					$obj = new TRunner($row['idRunner']);
					if ($obj->getId() == '')
						$result = array('band' => false, 'mensaje' => 'Acceso denegado');
					else
						$result = array('band' => true, "idUsuario" => $row['idRunner']);
				}
				
				if($result['band']){
					$rs = $db->query("select *, '' as pass from runner where idRunner = ".$row['idRunner']);
					$sesion = $rs->fetch_assoc();
					
					$obj = new TRunner($row['idRunner']);
					$sesion['idUsuario'] = $obj->getId();
					$sesion['tipo'] = 3;
				}
				
				$result['datos'] = $sesion;
				echo json_encode($result);
			break;
			case 'logout':
				$_SESSION[SISTEMA] = array();
				session_destroy();
				echo 'asdf';
				
				header ("Location: index.php");
			break;
		}
	break;
}
?>