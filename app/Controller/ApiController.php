<?php
/**
 * CAS User Campaign API Controller
 */
class ApiController extends AppController {

	public $components = array('RequestHandler');
	public $layout = 'api';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('view');
    }

    public function index() {	

    }

    public function view($id) {
/*
        $this->Api->id = $id;
        if (!$this->Api->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('api', $this->Api->read(null, $id));
*/
        $return = 0;

        /**
         * Replace "CAS-USER-ID" below with the unique ID returned by the CAS server of a user
         * who should be directed into CaptiveResponse to work on a campaign.
         * This is a dummy API response.
         */
        if($id == 'CAS-USER-ID') { 
        	$return = 1;
        }

        $this->set(array(
            'return' => $return,
            '_serialize' => array('return')
        ));

    }
}
