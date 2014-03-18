<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 * @property Category $Category
 */
class Event extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, thoegse that are not needed can be removed



  public $validate = array(
    'name' => array(
        'rule' => 'notEmpty'
        ),
    'category_id' => array(
      'rule' => 'notEmpty'
      ),
    'description' => array(
      'rule' => 'notEmpty'
      ),
    'date' => array(
      'rule' => 'notEmpty'
      ),
    'result' => array(
      'rule' => 'notEmpty'
      )
    );


/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $actsAs = array(
    'Upload.Upload' => array(
      'image' => array(
        'fields' => array(
          'dir' => 'dir'
        ),
      'thumbnailSizes' => array(
          'xvga' => '1024x768',
          'sbp' => '220x150',
          'dis' => '420x250',
          'vga' => '149x178',
          'thumb' => '128x128',
          'icon' => '82x82'          
        ),
        'thumbnailMethod' => 'php'
      )
    )
  );

  public function featuredEvents() {
    return $this->find('all', array(
      'conditions' => array(
        'is_enabled' => 1
        )
      )
    );
  }

  public function findAllEvents() {
    return $this->find('all');
  }
}
