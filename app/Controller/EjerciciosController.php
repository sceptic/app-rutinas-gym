<?php
App::uses('AppController', 'Controller');
/**
 * Ejercicios Controller
 *
 * @property Ejercicio $Ejercicio
 * @property PaginatorComponent $Paginator
 */
class EjerciciosController extends AppController {

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
		$this->Ejercicio->recursive = 0;
		$this->set('ejercicios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ejercicio->exists($id)) {
			throw new NotFoundException(__('Invalid ejercicio'));
		}
		$options = array('conditions' => array('Ejercicio.' . $this->Ejercicio->primaryKey => $id));
		$this->set('ejercicio', $this->Ejercicio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			if ($this->request->data['Ejercicio']['img']) {
				
				$file = new File($this->request->data['Ejercicio']['img']['tmp_name'], true, 0644);
				$path_parts = pathinfo($this->request->data['Ejercicio']['img']['name']);
				$ext = $path_parts['extension'];
				
				
				if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
					$this->render();
				} else {
					$date = $this->request->data['Ejercicio']['img']['name'];
					$filename =$date;
					
					$data = $file->read();
					$file->close();
					
					$file = new File(WWW_ROOT.'/img/ejercicios/'.$filename,true);
					$file->write($data);
					$file->close();
				}
			}
			//Fin subir imagenes
			
			$this->request->data['Ejercicio']['img'] = $this->request->data['Ejercicio']['img']['name'];



			$this->Ejercicio->create();
			if ($this->Ejercicio->save($this->request->data)) {
				$success = 'The ejercicio has been saved.';
				//return $this->redirect(array('action' => 'index'));
			} else {
				$error = 'The ejercicio could not be saved. Please, try again.';
			}
		}
		$autors = $this->Ejercicio->Autor->find('list');
		$this->set(compact('autors', 'error', 'success'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ejercicio->exists($id)) {
			throw new NotFoundException(__('Invalid ejercicio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ejercicio->save($this->request->data)) {
				$this->Session->setFlash(__('The ejercicio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ejercicio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ejercicio.' . $this->Ejercicio->primaryKey => $id));
			$this->request->data = $this->Ejercicio->find('first', $options);
		}
		$autors = $this->Ejercicio->Autor->find('list');
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
		$this->Ejercicio->id = $id;
		if (!$this->Ejercicio->exists()) {
			throw new NotFoundException(__('Invalid ejercicio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ejercicio->delete()) {
			$this->Session->setFlash(__('The ejercicio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ejercicio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
