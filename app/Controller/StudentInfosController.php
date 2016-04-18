<?php
App::uses('AppController', 'Controller');
/**
 * StudentInfos Controller
 *
 * @property StudentInfo $StudentInfo
 * @property PaginatorComponent $Paginator
 */
class StudentInfosController extends AppController {

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
		$this->StudentInfo->recursive = 0;
		$this->set('studentInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentInfo->exists($id)) {
			throw new NotFoundException(__('Invalid student info'));
		}
		$options = array('conditions' => array('StudentInfo.' . $this->StudentInfo->primaryKey => $id));
		$this->set('studentInfo', $this->StudentInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentInfo->create();
			if ($this->StudentInfo->save($this->request->data)) {
				$this->Flash->success(__('The student info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The student info could not be saved. Please, try again.'));
			}
		}
		$hours = $this->StudentInfo->Hour->find('list');
		$users = $this->StudentInfo->User->find('list');
		$this->set(compact('hours', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StudentInfo->exists($id)) {
			throw new NotFoundException(__('Invalid student info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentInfo->save($this->request->data)) {
				$this->Flash->success(__('The student info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The student info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentInfo.' . $this->StudentInfo->primaryKey => $id));
			$this->request->data = $this->StudentInfo->find('first', $options);
		}
		$hours = $this->StudentInfo->Hour->find('list');
		$users = $this->StudentInfo->User->find('list');
		$this->set(compact('hours', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StudentInfo->id = $id;
		if (!$this->StudentInfo->exists()) {
			throw new NotFoundException(__('Invalid student info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StudentInfo->delete()) {
			$this->Flash->success(__('The student info has been deleted.'));
		} else {
			$this->Flash->error(__('The student info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
