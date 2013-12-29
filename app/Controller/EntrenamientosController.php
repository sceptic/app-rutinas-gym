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

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Entreno->recursive = 0;
		$this->set('entrenos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function entrenamiento($id = null) {

		$data = $this->Entrenamiento->read(null, $id);

		if(!$data) $this->redirect('/');

		$this->set('d', $data['Entrenamiento']);

		$params = array(
            'download' => false,
            'name' => 'entrenamiento.pdf',
            'paperOrientation' => 'portrait',
            'paperSize' => 'legal'
        );
        $this->layout = 'default'; 
        $this->set($params);	
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Entrenamiento']['autor_id'] = $this->current_user_id;
			$this->Entrenamiento->create();
			if ($this->Entrenamiento->save($this->request->data)) {
				$this->set('data', '');
				$this->set('save', 1);
			}
		}
		$this->render('info');
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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
				if ($this->Entrenamiento->save($this->request->data)) {
					//$this->set('data', '');
					$save = 2;
					$data = $this->request->data;
				}

			}
		}else{
			$this->redirect('/');
		}
		$this->set(compact('data','save'));
		$this->render('info');
	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Entreno->id = $id;
		if (!$this->Entreno->exists()) {
			throw new NotFoundException(__('Invalid entreno'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Entreno->delete()) {
			return $this->flash(__('The entreno has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The entreno could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}





}
