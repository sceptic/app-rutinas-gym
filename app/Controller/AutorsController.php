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



	public function registro() {
		if ($this->request->is('post')) {
			$data = $this->request->data;
			

			$existMail= $this->Autor->findByEmail($data['Autor']['email']);

			if(!$existMail)
			{

				$data['Autor']['password'] = md5(sha1($data['Autor']['password']));
				$data['Autor']['token'] = md5(sha1(time().$data['Autor']['password'].$data['Autor']['password']));
				$this->Autor->create();
				if ($this->Autor->save($data)) {
					
					//Enviar email para confirmar cuenta
					$cakeEmail = new CakeEmail('gmail');
					$cakeEmail->template('contacto')
					->emailFormat('html')
					->subject('Activar cuenta')
					->to($data['Autor']['email'])
					->from('adriswbm@gmail.com');
					$cakeEmail->viewVars(
					array('message' => FULL_BASE_URL.'/'.'autors/active/'.$data['Autor']['nombre'].'/'.$data['Autor']['token'],
					)
					);

					$cakeEmail->send();

				}
					$this->redirect('/');
				}else{
				
					$this->set('error', '1');
			}	
		}
	}



}//endClass

