<?php
App::uses('AppController', 'Controller');
/**
 * EventRequests Controller
 *
 * @property EventRequest $EventRequest
 * @property PaginatorComponent $Paginator
 */
class EventRequestsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventRequest->recursive = 0;
		$this->set('eventRequests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventRequest->exists($id)) {
			throw new NotFoundException(__('Invalid event request'));
		}
		$options = array('conditions' => array('EventRequest.' . $this->EventRequest->primaryKey => $id));
		$this->set('eventRequest', $this->EventRequest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventRequest->create();
			if ($this->EventRequest->save($this->request->data)) {
				$this->Flash->success(__('The event request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The event request could not be saved. Please, try again.'));
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
		if (!$this->EventRequest->exists($id)) {
			throw new NotFoundException(__('Invalid event request'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventRequest->save($this->request->data)) {
				$this->Flash->success(__('The event request has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The event request could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventRequest.' . $this->EventRequest->primaryKey => $id));
			$this->request->data = $this->EventRequest->find('first', $options);
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
		$this->EventRequest->id = $id;
		if (!$this->EventRequest->exists()) {
			throw new NotFoundException(__('Invalid event request'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EventRequest->delete()) {
			$this->Flash->success(__('The event request has been deleted.'));
		} else {
			$this->Flash->error(__('The event request could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
