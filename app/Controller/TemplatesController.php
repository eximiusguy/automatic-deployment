<?php
class TemplatesController extends AppController {
    public $helpers = array('Html', 'Form');
    public function index() {
        $this->set('templates', $this->Template->find('all'));
    }
}
?>