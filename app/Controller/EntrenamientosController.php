<?php
App::uses('AppController', 'Controller');
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
	public function view($id = null) {
		if (!$this->Entreno->exists($id)) {
			throw new NotFoundException(__('Invalid entreno'));
		}
		$options = array('conditions' => array('Entreno.' . $this->Entreno->primaryKey => $id));
		$this->set('entreno', $this->Entreno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entrenamiento->create();
			if ($this->Entrenamiento->save($this->request->data)) {
				
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Entreno->exists($id)) {
			throw new NotFoundException(__('Invalid entreno'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entreno->save($this->request->data)) {
				return $this->flash(__('The entreno has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Entreno.' . $this->Entreno->primaryKey => $id));
			$this->request->data = $this->Entreno->find('first', $options);
		}
		$autors = $this->Entreno->Autor->find('list');
		$this->set(compact('autors'));
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
	}}
