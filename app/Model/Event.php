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


	//The Associations below have been created with all possible keys, those that are not needed can be removed

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
          'vga' => '149x178',
          'thumb' => '128x128',
          'icon' => '82x82'          
        ),
        'thumbnailMethod' => 'php'
      )
    )
  );
}
