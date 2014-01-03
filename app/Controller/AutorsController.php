<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Autors Controller
 *
 * @property Autor $Autor
 * @property PaginatorComponent $Paginator
 */
class AutorsController extends AppController {


	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}


	public function active($name= null, $token = null) {
		
			//
		$autor = $this->Autor->find('first', array('conditions'=>array('Autor.nombre'=>$name, 'Autor.token'=> $token)));
		if(!$autor) $this->redirect('/');
		else{
			$this->Autor->read(null, $autor['Autor']['id']);
			$this->Autor->set('active', 1);
			$this->Autor->save();
		}
		$this->set('autor',$autor);
	}


	/**
	* Resgistro de usuario, envia un email para confirmar el correo electronico
	*/
	public function registro() {
		
		if ($this->request->is('post')) {
			$data = $this->request->data;		

			$existMail= $this->Autor->findByEmail($data['Autor']['email']);

			if(!$existMail)
			{

				//CODIFICAR PASSWORD
				$data['Autor']['password'] = md5(sha1($data['Autor']['password']));
				//CODIGO ACTIVACION
				$data['Autor']['token'] = md5(sha1(time().$data['Autor']['password'].$data['Autor']['password']));

					//GUARDAR USUARIO
					$this->Autor->set($data);
					if ($this->Autor->save()) {
						
						$ruta_enlace = FULL_BASE_URL.'/'.'autors/active/'.$data['Autor']['nombre'].'/'.$data['Autor']['token'];
						$enlace = '<a href="'.$ruta_enlace.'">ACTIVAR CUENTA</a>';
						$msg = "Te has registrado en apps.phpymas.com. Para activar la cuenta sigue el enlace. ".$enlace;


						/*
							ENVIAR CORREOS DE ACTIVACION VIA SMTP O VIA FNC MAIL()
						*/
						if (array_key_exists('SERVER_ADDR', $_SERVER)){
							if($_SERVER['SERVER_ADDR'] =='127.0.0.1'){
								//Enviar email para confirmar cuenta
								$cakeEmail = new CakeEmail('gmail');
								$cakeEmail->template('contacto')
								->emailFormat('html')
								->subject('Activar cuenta')
								->to($data['Autor']['email'])
								->from('adriswbm@gmail.com');
								$cakeEmail->viewVars(
								array('message' => $msg,
								)
								);

								if($cakeEmail->send())	
								{
									$this->redirect('/home/comprobar-correo');
								}

							}else{
								$headers   = array();
								$headers[] = "MIME-Version: 1.0";
								$headers[] = "Content-type: text/html; charset=UTF-8";
								$headers[] = "From: apps phpymas.com <adrian@phpymas.com>";
								$headers[] = "Reply-To: {$data['Autor']['email']}";
								$headers[] = "Subject: Activar cuenta";
								$headers[] = "X-Mailer: PHP/".phpversion();
								
								if(mail($data['Autor']['email'], 'Activar cuenta', $msg, implode("\r\n", $headers)))
								{
									$this->redirect('/home/comprobar-correo');
								}		
							}
						}

					}				   
				 else {
				    
				    $errors = $this->Autor->invalidFields(); 
				    $this->set('errors', $errors);
				}

				
					
				}else{
					$this->set('error', '1');
			}	
		}
	}


	public function restPassword(){
		/*
		recuperar datos form
		recuperar usuario
		guardar datos
		*/
	}


	public function olvidoPassword(){
		/*
		enviar email con token activacion
		*/
	}


}//endClass

