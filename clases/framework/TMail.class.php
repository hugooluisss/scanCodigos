<?php
/**
* TMail
* Interfaz que permite conectar a un servidor SMTP por medio de la libreria PHPMAILER
* Extrae los datos del servidor
* PHP 5
* @author     Hugo Luis Santiago Altamirano hugooluisss@gmail.com
* @license    openSource
* @version    1.0, 1/agosto/2008
**/

class TMail{
	private $phpMailer;
	private $permitir = true;
	private $sandbox = true;
	
/**
* Metodo Constructor
* Llama al constructor padre para hacer las conexiones
*/
	public function __construct(){
		global $ini;
		$this->phpMailer = new PHPMailer(true);
		$this->phpMailer->SMTPDebug = 4;
		
		#$this->phpMailer->CharSet("UTF8");
		$this->empresa['nombreCorto'] = utf8_decode($ini['sistema']['nombreEmpresa']);
		#$this->phpMailer->IsSMTP();
		$this->phpMailer->Port = $ini['mail']['port'];
		$this->phpMailer->Host = $ini['mail']['server'];
		#$this->phpMailer->Host = "localhost";
		
		$this->phpMailer->SMTPAuth = true;
		$this->phpMailer->Username = $ini['mail']['user'];
		$this->phpMailer->Password = $ini['mail']['pass'];
		$this->phpMailer->IsHTML(true);
		$this->phpMailer->FromName = utf8_decode($ini['sistema']['nombreEmpresa']);
		$this->setDirOrigen($ini['mail']['user']);
		$this->phpMailer->SMTPSecure = "ssl";
		
		if ($ini['mail']['contestarA'] <> '')
			$this->phpMailer->AddReplyTo($ini['mail']['contestarA']);
			
		#if (file_exists("templates/img/logomail.png"))
		#	$this->addLogo("templates/img/logomail.png");
	}
	
	public function setUser($val){
		$this->phpMailer->Username = $val;
	}
	
	public function setPassword($val){
		$this->phpMailer->Password = $val;
	}

/**
* Establece el cuerpo del mensaje
* @param string $msg Mensaje
*/	
	public function setBodyHTML($msg){
		$this->phpMailer->MsgHTML = ($msg);
		$this->phpMailer->Body = ($msg);
		$this->phpMailer->AltBody = ($msg);
	}
	
	public function adjuntar($archivo, $nombre){
		return $this->phpMailer->addAttachment($archivo, $nombre);
	}

/**
* Establece el tema del correo
* @param string $tema Tema
*/		
	public function setTema($tema){
		$this->phpMailer->Subject = utf8_decode($tema);
	}

/**
* Agrega una direccion de correo (Detinatario)
* @param string $mail Direccion
* @param string $nombre Nombre de la persona
*/		
	public function setDestino($mail = "", $nombre = ""){
		if ($this->sandbox){
			#$this->phpMailer->AddAddress("hugooluisss@hotmail.com");
			$this->phpMailer->AddAddress("hugooluisss@gmail.com");
		}else
			$this->phpMailer->AddAddress($mail, $nombre);
	}
	
/**
* Agrega una direccion de correo (Detinatario)
* @param string $mail Direccion
* @param string $nombre Nombre de la persona
*/		
	public function addDestino($mail, $nombre = ""){
		$this->setDestino($mail, $nombre);
	}

/**
* Envia el correo
* @return Boolean True si lo envio
*/		
	public function send(){
		if (!$this->permitir)
			return true;
		else{
			if ($this->phpMailer->send()){
				return true;
			}else{
				ErrorSistema($this->phpMailer->ErrorInfo);			
				return false;
			}
		}
	}

/**
* Remplaza las etiquetas declaradas en el texto por etiquetas validas de los datos
* @param string $texto Cuerpo del texto/mensaje
* @param Object $datos Datos a cambiar
*/		
	public function construyeMail($texto, $datos){
		global $ini;
		$datos['sitio.url'] = $ini['sistema']['url'];
		foreach($datos as $indice => $valor)
			$texto = str_replace('[*'.$indice.'*]', $datos[$indice], $texto);
		
		$this->setBodyHTML(utf8_decode($texto));
		return $texto;
	}
	
/**
* Remplaza las etiquetas declaradas en el texto por etiquetas validas de los datos
* @param string $texto Cuerpo del texto/mensaje
* @param Object $datos Datos a cambiar
*/		
	public function construyeMailFile($archivo, $datos){
		$texto = file_get_contents($archivo);
		
		return $this->construyeMail($texto, $datos);
	}

/**
* Indica si se permite el envio de mails
*/
	
	public function allowed(){
		return $this->permitir;
	}
	
/**
* Establece la dirección de origen
* @param String $dir Direccion de origen
* @return boolean true Siempre
*/
	public function setDirOrigen($dir){
		$this->phpMailer->From = $dir;
		
		return true;
	}
	
	public function addLogo($file){
		$this->phpMailer->AddEmbeddedImage($file, "logo", "logo.png");
		return true;
	}
	
	public function addImg($file, $nombre, $nombreArchivo){
		$this->phpMailer->AddEmbeddedImage($file, $nombre, $nombreArchivo);
		
		return true;
	}
}
?>