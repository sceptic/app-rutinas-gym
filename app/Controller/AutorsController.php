<?php
App::uses('AppController', 'Controller');
/**
 * Autors Controller
 *
 * @property Autor $Autor
 * @property PaginatorComponent $Paginator
 */
class AutorsController extends AppController {


	public function beforeFilter() {
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
			$this->request->data['Autor']['password'] = md5(sha1($this->request->data['Autor']['password']));
			$this->request->data['Autor']['token'] = md5(sha1(time().$this->request->data['Autor']['password'].$this->request->data['Autor']['password']));
			$this->Autor->create();
			if ($this->Autor->save($this->request->data)) {
				$this->redirect('/');
			}
		}
	}

}
