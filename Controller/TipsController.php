<?php
App::uses('AppController', 'Controller');
/**
 * Tips Controller
 *
 * @property Tip $Tip
 */
class TipsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tip->recursive = 0;
		$this->set('tips', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tip->id = $id;
		if (!$this->Tip->exists()) {
			throw new NotFoundException(__('Invalid tip'));
		}
		$this->set('tip', $this->Tip->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tip->create();
			if ($this->Tip->save($this->request->data)) {
				$this->Session->setFlash(__('The tip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tip could not be saved. Please, try again.'));
			}
		}
		$users = $this->Tip->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Tip->id = $id;
		if (!$this->Tip->exists()) {
			throw new NotFoundException(__('Invalid tip'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tip->save($this->request->data)) {
				$this->Session->setFlash(__('The tip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tip could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tip->read(null, $id);
		}
		$users = $this->Tip->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Tip->id = $id;
		if (!$this->Tip->exists()) {
			throw new NotFoundException(__('Invalid tip'));
		}
		if ($this->Tip->delete()) {
			$this->Session->setFlash(__('Tip deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tip was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
