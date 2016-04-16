<?php
App::uses('AppModel', 'Model');
/**
 * Hour Model
 *
 * @property User $User
 * @property StudentInfo $StudentInfo
 */
class Hour extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'StudentInfo' => array(
			'className' => 'StudentInfo',
			'foreignKey' => 'hour_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	public function addHour($data=null,$event=null){
		$options = array(
			'conditions'=>array(
				'user_id' => CakeSession::read('Auth.User.id'),
				'semester'=>$event['Event']['semester'],
				'year'=>$event['Event']['year']
			)
		);
		$current = $this->find('first',$options);
		$cur_job = array();
		foreach($event['Job'] as $job){
			if($job['id'] == $data['StudentJob']['job_id']){
				$cur_job = $job;
				break;
			}
		}
		$hours = array();
		if(empty($current)){
			$hours = array(
				'user_id' => CakeSession::read('Auth.User.id'),
				'semester'=>$event['Event']['semester'],
				'year'=>$event['Event']['year'],
				'total_hours' => $cur_job['end_time'] - $cur_job['start_time']
			);
		}else{
			$hours = $current['Hour'];
			$hours['total_hours'] += $cur_job['end_time'] - $cur_job['start_time'];
		}
		return $this->save($hours);


	}

}
