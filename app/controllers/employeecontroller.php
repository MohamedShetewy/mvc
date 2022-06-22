<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Helper;

class EmployeeController extends AbstractController {
	use InputFilter;
	use Helper;
	public function defaultAction(){
        $this->_language->load('employee.default');
		$this->_data['employees'] = EmployeeModel::getALL() ;

		$this->_view();
	}
	public function addAction(){
		if (isset($_POST['submit'])) {
			
			$emp = new EmployeeModel();
			$emp->name    = $this->filterString($_POST['name']);
			$emp->age     = $this->filterInt($_POST['age']);
			$emp->address = $this->filterString($_POST['address']);
			$emp->tax     = $this->filterFloat($_POST['tax']);
			$emp->salary  = $this->filterFloat($_POST['salary']);

			if ($emp->save()) {
				$_SESSION['msg'] = 'Employee Add success ' ;
				$this->redirect('/employee');
			}
		}
		$this->_view();
	}

	public function editAction(){
      
		$id = $this->filterInt($this->_params[0]);
		
		$emp = EmployeeModel::getByPK($id);
		
		if ($emp === false) {
			$this->redirect('/employee');
		}
		$this->_data['employee'] = $emp;

		if (isset($_POST['submit'])) {
			
			
			$emp->name    = $this->filterString($_POST['name']);
			$emp->age     = $this->filterInt($_POST['age']);
			$emp->address = $this->filterString($_POST['address']);
			$emp->tax     = $this->filterFloat($_POST['tax']);
			$emp->salary  = $this->filterFloat($_POST['salary']);

			if ($emp->save()) {
				$_SESSION['msg'] = 'Employee Update success ' ;
				$this->redirect('/employee');
			}
		}
		$this->_view();
	}

	public function deleteAction(){
      
		$id = $this->filterInt($this->_params[0]);
		
		$emp = EmployeeModel::getByPK($id);
		
		if ($emp === false) {
			$this->redirect('/employee');
		}
		if ($emp->delete()) {
				$_SESSION['msg'] = 'Employee Delete success ' ;
				$this->redirect('/employee');
			}
	}
}