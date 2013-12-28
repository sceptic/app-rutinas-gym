<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $viewClass  = 'TwigView.Twig';
	public $components = array(
	'DebugKit.Toolbar',
	'RequestHandler',
	'Session',
	'Auth' => array(
		'loginAction' => '/',
		'loginRedirect' => array('controller' => 'Entrenamientos', 'action' => 'add'), 
		'logoutRedirect' => '/',
	'authenticate' => array(
	'Form' => array(
	'userModel' => 'Autor'
	)
	)
	)
	);

    protected $current_user;
	protected $current_user_id;

	public function rrmdir($dir) { 
	  foreach(glob($dir . '/*') as $file) { 
	    if(is_dir($file)) $this->rrmdir($file); else unlink($file); 
	  } @rmdir($dir); 
	}

	public function beforeFilter() {
		$dir= APP .'Plugin' . DS . 'TwigView' . DS . 'tmp' . DS . 'views';  
    	$this->rrmdir($dir);; 
    	parent::beforeFilter();

		$this->loadModel('Autor');
    	if ($this->request->is('post')) {
			$data = $this->request->data;
			if(isset($data['email_login']) && isset($data['password_login']))
			{
				
				$user= $this->Autor->find('first', array('conditions'=>array('Autor.password'=> md5(sha1($data['password_login'])), 'Autor.email' => $data['email_login'])));
				$this->set(compact('data'));	
				$this->Auth->login($user);
			}
		}

		$myUser =  $this->Auth->user();
		if(isset($myUser['Autor']))
		{
			$user=$this->Autor->findById($myUser['Autor']['id']);
			$this->current_user = $user;
			$this->current_user_id=$user['Autor']['id'];
			$this->set('user_logged',$this->current_user);
		}
        
  	}

	

	public function afterFilter() {
		
    }


}
