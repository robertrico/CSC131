<?php
App::uses('AppController', 'Controller');
/**
 * StudentJobs Controller
 *
 * @property StudentJob $StudentJob
 * @property PaginatorComponent $Paginator
 */
class StudentJobsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash','Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('Hour');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StudentJob->recursive = 0;
		$this->set('studentJobs', $this->Paginator->paginate());
	}

	public function myEvents() {
		$this->set('studentJobs', $this->Paginator->paginate('StudentJob',array('user_id'=>$this->Session->read('Auth.User.id'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentJob->exists($id)) {
			throw new NotFoundException(__('Invalid student job'));
		}
		$options = array('conditions' => array('StudentJob.' . $this->StudentJob->primaryKey => $id));
		$this->set('studentJob', $this->StudentJob->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($event_id=null) {
		$event = $this->StudentJob->Event->findById($event_id);
		$jobs = Set::combine($event['Job'],'{n}.id','{n}.name');

		if ($this->request->is('post')) {
			$job = $this->StudentJob->Job->findById($this->request->data['StudentJob']['job_id']);	
			$this->Hour->addHour($this->request->data,$event);
			$this->StudentJob->create();

			$this->request->data['StudentJob']['event_id'] = $event_id;
			$this->request->data['StudentJob']['user_id'] = $this->Session->read('Auth.User.id');
			$this->request->data['StudentJob']['total_hours'] = $job['Job']['end_time']-$job['Job']['start_time'];

			if ($this->StudentJob->save($this->request->data)) {
				$this->Flash->success(__('The student job has been saved.'));
				$this->StudentJob->Job->recursive = -1;
				$job['Job']['available_positions']--;
				$this->StudentJob->Job->save($job);
				return $this->redirect('/myEvents');
			} else {
				$this->Flash->error(__('The student job could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('event', 'users', 'jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StudentJob->exists($id)) {
			throw new NotFoundException(__('Invalid student job'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentJob->save($this->request->data)) {
				$this->Flash->success(__('The student job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The student job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentJob.' . $this->StudentJob->primaryKey => $id));
			$this->request->data = $this->StudentJob->find('first', $options);
		}
		$events = $this->StudentJob->Event->find('list');
		$users = $this->StudentJob->User->find('list');
		$jobs = $this->StudentJob->Job->find('list');
		$this->set(compact('events', 'users', 'jobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StudentJob->id = $id;
		if (!$this->StudentJob->exists()) {
			throw new NotFoundException(__('Invalid student job'));
		}
		$this->StudentJob->Job->recursive = -1;
		$job = $this->StudentJob->Job->findById($this->StudentJob->field('job_id'));	
		$this->request->allowMethod('post', 'delete');
		if ($this->StudentJob->delete()) {
			$this->Flash->success(__('The student job has been deleted.'));			
			$job['Job']['available_positions']++;
			$this->StudentJob->Job->save($job);
		} else {
			$this->Flash->error(__('The student job could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
