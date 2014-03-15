<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	/**
 * index method
 *
 * @return void
 */
	public function beforeFilter() {
    parent::beforeFilter();
    if (!empty($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') {
    	$this->redirect(array('controller' => 'users', 'action' => 'login', 'admin' => false));	
    	}
    }

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				return $this->redirect(array('controller' => 'users', 'action' => 'controls'));
			}
			else  {
				$this->Session->setFlash(__('Invalid username or password'));
				$this->redirect(array('action' => 'index', 'admin' => false));
			}
		}
	}

	public function logout() {
		$this->Auth->logout();
		return $this->redirect(array('controller' => 'users', 'action' => 'login'));
	}

	public function controls() {
		$this->layout = 'admin';
	}

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function view($id = null) {
	// 	if (!$this->User->exists($id)) {
	// 		throw new NotFoundException(__('Invalid user'));
	// 	}
	// 	$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
	// 	$this->set('user', $this->User->find('first', $options));
	// }

/**
 * add method
 *
 * @return void
 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->User->create();
	// 		if ($this->User->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The user has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	// 		}
	// 	}
	// }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function edit($id = null) {
	// 	if (!$this->User->exists($id)) {
	// 		throw new NotFoundException(__('Invalid user'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->User->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The user has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
	// 		$this->request->data = $this->User->find('first', $options);
	// 	}
	// }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function delete($id = null) {
	// 	$this->User->id = $id;
	// 	if (!$this->User->exists()) {
	// 		throw new NotFoundException(__('Invalid user'));
	// 	}
	// 	$this->request->onlyAllow('post', 'delete');
	// 	if ($this->User->delete()) {
	// 		$this->Session->setFlash(__('The user has been deleted.'));
	// 	} else {
	// 		$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
	// 	}
	// 	return $this->redirect(array('action' => 'index'));
	// }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
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
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
  }

