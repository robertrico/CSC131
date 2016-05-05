<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 */
class EventsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash','Session');


	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('User');
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Event->recursive = 0;
		$this->set('events', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$event = $this->Event->find('first', $options);
		$student_jobs = array();
		$jobs = $event['Job'];
		foreach($event['StudentJob'] as $student_job){
			$this->Event->Job->id = $student_job['job_id'];
			
			$job = array();
			$job['user'] = array('id'=>$student_job['user_id'], 'name'=>$this->User->getFullName($student_job['user_id']));
			$job['job'] = array('id'=>$this->Event->Job->id,'name'=>$this->Event->Job->field('name'));
			$job['start'] = date('g:i a',strtotime($this->Event->Job->field('start_time')));
			$job['end'] = date('g:i a',strtotime($this->Event->Job->field('end_time')));
			$job['hours'] = $this->Event->Job->field('end_time') - $this->Event->Job->field('start_time');
			$student_jobs[] = $job;
		}

		$this->set(compact('event','student_jobs', 'jobs'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Event']['date'] = date("Y-m-d H:i:s",strtotime($this->request->data['Event']['date']));
			$this->Event->create();
			if ($this->Event->save($this->request->data)) {
				$this->Flash->success(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The event could not be saved. Please, try again.'));
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
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Event']['time'] = date("Y-m-d H:i:s",strtotime($this->request->data['Event']['time']));
			$this->Event->id = $id;
			if ($this->Event->save($this->request->data)) {
				$this->Flash->success(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The event could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->request->data = $this->Event->find('first', $options);
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
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Event->delete()) {
			$this->Flash->success(__('The event has been deleted.'));
		} else {
			$this->Flash->error(__('The event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function generateReport($event_id=null) {
		$this->autoRender = false;

		$event_options = array(
				'conditions' => array(
					'Event.id' => $event_id
				)
			);


		$data = ClassRegistry::init('Event')->find('first',$event_options); 
		$event = $data['Event'];
		$jobs = Hash::combine($data['Job'], '{n}.id', '{n}');
		$users = Hash::combine($data['StudentJob'], '{n}.user_id', '{n}');
		$attached_users = array();
		unset($data);

		foreach($users as $index => $job){
			$attached_users[] = $index;
		}

		$s_options = array(
			'conditions' => array(
				'User.id' => $attached_users
			)
		);

		$students_info = ClassRegistry::init('StudentInfo')->find('all',$s_options); 
		$students_info = Hash::combine($students_info, '{n}.User.id', '{n}');
		unset($attached_users);

		$csv = array();

		$header_row = array('StudentId','Name','Email','Event','Hours');
		$csv_file = fopen('php://output', 'w');

		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename="'.$event['name'].'.csv"');

		fputcsv($csv_file,$header_row,',','"');

		foreach($users as $id => $field) {
			$row = array(
				$students_info[$id]['StudentInfo']['studentid'],
				$students_info[$id]['User']['firstname'].' '.$students_info[$id]['User']['lastname'],
				$students_info[$id]['User']['email'],
				$event['name'],
				$field['total_hours']
			);

			fputcsv($csv_file,$row,',','"');
		}
		fclose($csv_file);
		exit(1);
	}
}
