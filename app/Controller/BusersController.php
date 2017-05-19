<?php
App::uses('AppController', 'Controller');
/**
 * Busers Controller
 *
 * @property Buser $Buser
 * @property PaginatorComponent $Paginator
 */
class BusersController extends AppController {

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
		$this->Buser->recursive = 0;
		$this->set('busers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Buser->exists($id)) {
			throw new NotFoundException(__('Invalid buser'));
		}
		$options = array('conditions' => array('Buser.' . $this->Buser->primaryKey => $id));
		$this->set('buser', $this->Buser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Buser->create();
			if ($this->Buser->save($this->request->data)) {
				$this->Flash->success(__('The buser has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The buser could not be saved. Please, try again.'));
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
		if (!$this->Buser->exists($id)) {
			throw new NotFoundException(__('Invalid buser'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Buser->save($this->request->data)) {
				$this->Flash->success(__('The buser has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The buser could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Buser.' . $this->Buser->primaryKey => $id));
			$this->request->data = $this->Buser->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Buser->id = $id;
		if (!$this->Buser->exists()) {
			throw new NotFoundException(__('Invalid buser'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Buser->delete()) {
			$this->Flash->success(__('The buser has been deleted.'));
		} else {
			$this->Flash->error(__('The buser could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
