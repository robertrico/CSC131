<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('Role');
		// Allow users to register and logout.
		$this->Auth->allow('add', 'logout');
	}

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$role_id = $this->Session->read('Auth.User.role_id');
				$cur_role = $this->Role->findById($role_id);
				$this->Session->write('Auth.Role',$cur_role['Role']);
				return $this->redirect('/');
			}
			$this->Session->setFlash(__('Invalid username or password, try again'));
		}
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;

		$users = $this->Paginator->paginate();
		foreach($users as $index => $user){
			if($user['User']['username'] == 'Rob'){
				$users[$index]['User']['email'] = 'Not Available';	
			}
		}
		$this->set('users', $users);
		$this->set('label', 'Ham');

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($role=false) {

		if($role == 2){
			$this->Session->setFlash("You cannot do that.",'default',array('class'=>'alert alert-danger'));
			return $this->redirect($this->referer());
		}

		$role = $this->Role->findById($role);

		$this->set('student',!$role['Role']['student_control']);

		if ($this->request->is('post')) {
			$this->request->data['User']['role_id'] = $role['Role']['id'];
			$this->request->data['User']['active'] = 0;

			$this->User->create();
			if ($this->User->save($this->request->data)) {
				if(!$role['Role']['student_control']){
					$this->loadModel('StudentInfo');
					$info = array();
					$info['StudentInfo'] = array(
						'studentid'=>$this->request->data['User']['studentid'],
						'user_id'=>$this->User->getLastInsertId(),
						'major'=>$this->request->data['User']['major']
					);
					$this->StudentInfo->save($info);
				}
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('roles', $this->Role->find('list'));
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

