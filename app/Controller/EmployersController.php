<?php 

class EmployersController extends AppController {

	public $helpers = array('Html', 'Form');

	public function index() {
		$this->layout = 'sidebarLayout';
		$this->set('title_for_layout', 'Employer Jobs');
		// $this->set('posts', $this->Post->find('all'));
	}

	public function edit() {
		$this->layout = 'sidebarLayout';
		$this->set('title_for_layout', 'Edit Jobs');
		// $this->set('posts', $this->Post->find('all'));
	}

}