<?php
/**
 * Installation Controller
 */
class InstallController extends AppController {

	public $components = array('RequestHandler');
	//public $layout = 'api';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    public function index() {	
        

    }

}
