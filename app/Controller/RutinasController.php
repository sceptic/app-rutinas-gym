<?php
App::uses('AppController', 'Controller');
/**
 * Rutinas Controller
 *
 * @property Rutina $Rutina
 * @property PaginatorComponent $Paginator
 */
class RutinasController extends AppController {

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
		$this->Rutina->recursive = 0;
		$this->set('rutinas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rutina->exists($id)) {
			throw new NotFoundException(__('Invalid rutina'));
		}
		$options = array('conditions' => array('Rutina.' . $this->Rutina->primaryKey => $id));
		$this->set('rutina', $this->Rutina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Ejercicio');
		if ($this->request->is('post')) {
			$this->Rutina->create();
			if ($this->Rutina->save($this->request->data)) {
				return $this->flash(__('The rutina has been saved.'), array('action' => 'index'));
			}
		}
		$autors = $this->Rutina->Autor->find('list');
		$ejercicios = $this->Ejercicio->find('list');
		$this->set(compact('autors', 'ejercicios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->loadModel('Ejercicio');
		if (!$this->Rutina->exists($id)) {
			throw new NotFoundException(__('Invalid rutina'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rutina->save($this->request->data)) {
				return $this->flash(__('The rutina has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Rutina.' . $this->Rutina->primaryKey => $id));
			$this->request->data = $this->Rutina->find('first', $options);
		}
		$autors = $this->Rutina->Autor->find('list');
		$ejercicios = $this->Rutina->Ejercicio->find('list');
		$this->set(compact('autors', 'ejercicios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->loadModel('Ejercicio');
		$this->Rutina->id = $id;
		if (!$this->Rutina->exists()) {
			throw new NotFoundException(__('Invalid rutina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rutina->delete()) {
			return $this->flash(__('The rutina has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The rutina could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}}
