<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Entrenos Controller
 *
 * @property Entreno $Entreno
 * @property PaginatorComponent $Paginator
 */
class EntrenamientosController extends AppController {



	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('entrenamiento');
	}





	public function entrenamiento($id) {

		$data = $this->Entrenamiento->read(null, $id);

		//if(!$data) $this->redirect('/');

		$this->set('d', $data['Entrenamiento']);
		$this->set('data', $data);

		$params = array(
            'download' => false,
            'name' => 'entrenamiento_'.$id.'.pdf',
            'paperOrientation' => 'portrait',
            'paperSize' => 'legal'
        );
        $this->layout = 'default'; 
        $this->set($params);	
	}




	public function misRutinas(){

		$conditions = array('Entrenamiento.autor_id'=> $this->current_user_id);
		$rutinas = $this->Entrenamiento->find('all', array('conditions'=>$conditions));

		if(!$rutinas) $empty = 1;

		$this->set(compact('rutinas', 'empty'));
		
	}






	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Entrenamiento']['autor_id'] = $this->current_user_id;
			$this->Entrenamiento->set($this->request->data);
			if ($this->Entrenamiento->save()) {
				$this->set('data', '');
				$this->set('save', 1);
			}else{
				 $errors = $this->Entrenamiento->invalidFields(); 
				 $this->set('errors', $errors);
			}
		}
		$this->render('info');
	}





	public function edit($id = null) {
		if (!$this->Entrenamiento->exists($id)) {
			$this->redirect('/');
		}

		$conditions=array('autor_id'=>$this->current_user_id, 'Entrenamiento.id'=>$id);
		$data = $this->Entrenamiento->find('first', array('conditions'=> $conditions ));

		if ($data){
			if($this->request->is('post'))
			{
				$this->Entrenamiento->read(null, $id);
				$this->Entrenamiento->set($this->request->data);
				if ($this->Entrenamiento->save()) {
					//$this->set('data', '');
					$save = 2;
					$data = $this->request->data;
				}else{
					 $errors = $this->Autor->invalidFields(); 
				 	 $this->set('errors', $errors);
				}

			}
		}else{
			$this->redirect('/');
		}
		$this->set(compact('data','save'));
		$this->render('info');
	}





	public function delete($id = null) {
		if (!$this->Entrenamiento->exists($id)) {
			$this->redirect('/');
		}

		$conditions=array('autor_id'=>$this->current_user_id, 'Entrenamiento.id'=>$id);
		$data = $this->Entrenamiento->find('first', array('conditions'=> $conditions ));

		if ($data){
			$this->Entrenamiento->read(null, $id);
			if ($this->Entrenamiento->delete()) {
				$this->redirect('/mis-rutinas');
			} else {
				$this->redirect('/mis-rutinas');
			}
		}
		$this->render('mis_rutinas');
	}





}
