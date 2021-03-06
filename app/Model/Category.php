<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Event $Event
 */
class Category extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

public $validate = array(
    'name' => array(
        'notEmpty' => array(
            'rule' => 'notEmpty',
            // extra keys like on, required, etc. go here...
        ),
        'isUnique' => array(
            'rule' => 'isUnique',
            'message' => 'Category already exists!'
            // extra keys like on, required, etc. go here...
        )
    )
);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'category_id',
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

	public function findByCategory($data) {
		$this->recursive = 1;
		return $this->find('all', array(
			'conditions' => array(
				'name' => $data
				)
			)
		);
	}

	public function findId($data) {
		return $this->find('all', array(
			'conditions' => array(
				'name' => $data
				),
			'fields' => array(
				'Category.id'
				)
			)
		);
	}

}
