<?php
namespace PHPMVC\Controllers;
use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\privilegesModel;
use PHPMVC\Models\UserGroupprivilegeModel;


class PrivilegesController extends AbstractController{
    use InputFilter;
    use Helper;

	public function defaultAction(){
        $this->_language->load('template.common');
        $this->_language->load('privileges.default');
        $this->_data['privileges'] = privilegesModel::getAll();
		$this->_view();
	}
    public function createAction(){
        $this->_language->load('template.common');
        $this->_language->load('privileges.labels');
        $this->_language->load('privileges.create');
        if (isset($_POST['submit'])){
            $privilege = new privilegesModel();
            $privilege->PrivilegeTitle = $this->filterString($_POST['PrivilegeTitle']);
            $privilege->Privilege      = $this->filterString($_POST['Privilege']);
            if ($privilege->save()){
                $this->redirect('/mvc/public/privileges');
            }
        }
        $this->_view();
    }

    public function editAction(){

        $id = $this->filterInt($this->_params[0]);
        $privilege =  privilegesModel::getByPK($id);

        if ($privilege === false){
            $this->redirect('/mvc/public/privileges');
        }

        $this->_language->load('template.common');
        $this->_language->load('privileges.labels');
        $this->_language->load('privileges.edit');

        $this->_data['privilege'] =$privilege;


        if (isset($_POST['submit'])){
            $privilege->PrivilegeTitle = $this->filterString($_POST['PrivilegeTitle']);
            $privilege->Privilege      = $this->filterString($_POST['Privilege']);
            if ($privilege->save()){
                $this->redirect('/mvc/public/privileges');
            }
        }
        $this->_view();
    }

    public function deleteAction(){

        $id = $this->filterInt($this->_params[0]);
        $privilege =  privilegesModel::getByPK($id);

        if ($privilege === false){
            $this->redirect('/mvc/public/privileges');
        }

        $groupprivileges = UserGroupprivilegeModel::getBy(['PrivilegeId' => $privilege->PrivilegeId]);

        if (false !== $groupprivileges){
            foreach ($groupprivileges as $deletedgroupprivilege){
                $deletedgroupprivilege->delete();
            }
        }
        if ($privilege->delete()){
            $this->redirect('/mvc/public/privileges');
        }


    }
}