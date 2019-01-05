<?php
global $objModulo;
switch($objModulo->getId()){
	case 'usuarios':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from perfil";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$datos[$row['idPerfil']] = $row['nombre'];
		}
		
		$smarty->assign("perfiles", $datos);
	break;
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		global $sesion;
		
		$sql = "select * from usuario a where a.visible = true";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cusuarios':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TUsuario();
				
				$rs = $db->query("select idUsuario from usuario where email = '".$_POST['clave']."'");
				
				if ($rs->num_rows > 0){ #si es que encontró la clave
					$row = $rs->fetch_assoc();
					if ($row["idUsuario"] <> $_POST['id']){
						$obj->setId($row['idUsuario']);
						echo json_encode(array("band" => false, "mensaje" => "El correo ya se encuentra registrado con el usuario ".$obj->getNombreCompleto()));
						exit(1);
					}
				}

				$obj = new TUsuario();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setEmail($_POST['email']);
				$obj->setPass($_POST['pass']);
				$obj->setPerfil($_POST['perfil']);
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TUsuario($_POST['usuario']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validarEmail':
				$db = TBase::conectaDB();
				if ($_POST['id'] == '')
					$rs = $db->query("select idUsuario from usuario where upper(email) = upper('".$_POST['txtEmail']."')");
				else
					$rs = $db->query("select idUsuario from usuario where upper(email) = upper('".$_POST['txtEmail']."') and not idUsuario = ".$_POST['id']);
					
				echo $rs->num_rows == 0?"true":"false";
			break;
			case 'savePassword':
				global $sesion;
				
				$obj = new TUsuario();
				$obj->setId($sesion['usuario']);
				$obj->setPass($_POST['pass']);
				
				$smarty->assign("json", array("band" => $obj->guardar()));
			break;
		}
	break;
}
?>