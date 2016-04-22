<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $components = array('Paginator','Session');
/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$this->loadModel('Event');
		$this->loadModel('StudentJob');
		$this->loadModel('Hour');

		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		$options = array(
			'conditions'=>array(
			),
			'fields'=>array(
				'Event.id',
				'Event.name'
			),
			'limit'=>10,
			'order'=>'date ASC'

		);
		$sj_options = array(
			'group' => 'Job.id',
			'order'=>'Event.date ASC',
			'conditions' => array(
				'Event.date >= '=>date('Y-m-d'),
				'StudentJob.user_id'=>$this->Session->read('Auth.User.id')
				), 
			'joins' => array(
				array(
					'table' => 'student_jobs',
					'type' => 'inner',
					'conditions' => array(
						'Event.id = StudentJob.event_id'
					)
				)
			)
		);
		$myjobs = $this->StudentJob->find('all',$sj_options);
		$hours = $this->Hour->findAllByUserId($this->Session->read('Auth.User.id'));

		$this->set('events', $this->Event->find('all',$options));
		$this->set(compact('myjobs', 'hours'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
}
