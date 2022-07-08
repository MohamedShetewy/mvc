<?php
namespace PHPMVC\Controllers;
use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\privilegesModel;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserGroupprivilegeModel;


class UsersGroupsController extends AbstractController{
    use InputFilter;
    use Helper;

	public function defaultAction(){
        $this->_language->load('template.common');
        $this->_language->load('usersgroups.default');
        $this->_data['groups'] = UserGroupModel::getAll();
		$this->_view();
	}

    public function createAction(){
        $this->_language->load('template.common');
        $this->_language->load('usersgroups.labels');
        $this->_language->load('usersgroups.create');
        $this->_data['privileges'] = privilegesModel::getAll();
        if(isset($_POST['submit'])){
            $group = new UserGroupModel();
            $group->GroupName = $this->filterString($_POST['GroupName']);

            if ($group->save()){

                if (isset($_POST['privileges']) && is_array($_POST['privileges'])){
                    foreach ($_POST['privileges'] as $privilegeid){
                        $groupprivilege = new UserGroupprivilegeModel();
                        $groupprivilege->GroupId = $group->GroupId;
                        $groupprivilege->PrivilegeId = $privilegeid;
                        $groupprivilege->save();
                    }
                }

                $this->redirect('/mvc/public/usersgroups');
            }
        }
        $this->_view();
    }
    public function editAction(){
        $id = $this->filterInt($this->_params[0]);
        $group = UserGroupModel::getByPK($id);
        if ($group === false){
            $this->redirect('/mvc/public/usersgroups');
        }

        $this->_language->load('template.common');
        $this->_language->load('usersgroups.labels');
        $this->_language->load('usersgroups.edit');

        $this->_data['group'] = $group;
        $this->_data['privileges'] = privilegesModel::getAll();

        $groupprivileges = UserGroupprivilegeModel::getBy(['GroupId' => $group->GroupId]);
        $extractedprivilegeids = [];
        if (false !== $groupprivileges){
            foreach ($groupprivileges as $privilege){
                $extractedprivilegeids[] = $privilege->PrivilegeId;
            }
        }

        $this->_data['groupprivileges'] =  $extractedprivilegeids;


        if(isset($_POST['submit'])){

            $group->GroupName = $this->filterString($_POST['GroupName']);
            if ($group->save()){

                if (isset($_POST['privileges']) && is_array($_POST['privileges'])){
                    $privilegesIdsToBeDeleted = array_diff($extractedprivilegeids,$_POST['privileges']);
                    $privilegesIdsToBeAdded = array_diff($_POST['privileges'],$extractedprivilegeids);

                    //Deleted the unwanted privileges
                    foreach ($privilegesIdsToBeDeleted as $deletedprivilege){
                        $unwantedprivilage = UserGroupprivilegeModel::getBy(['GroupId' => $group->GroupId,'PrivilegeId' => $deletedprivilege]);
                        $unwantedprivilage->current()->delete();
                    }

                    // Add new privileges

                    foreach ($privilegesIdsToBeAdded as $privilegeid){
                        $groupprivilege = new UserGroupprivilegeModel();
                        $groupprivilege->GroupId = $group->GroupId;
                        $groupprivilege->PrivilegeId = $privilegeid;
                        $groupprivilege->save();
                    }
                }

               $this->redirect('/mvc/public/usersgroups');
            }
        }
        $this->_view();
    }

    public function deleteAction(){
        $id = $this->filterInt($this->_params[0]);
        $group = UserGroupModel::getByPK($id);

        if ($group === false){
            $this->redirect('/mvc/public/usersgroups');
        }


        $groupprivileges = UserGroupprivilegeModel::getBy(['GroupId' => $group->GroupId]);
        if (false !== $groupprivileges){
            foreach ($groupprivileges as $deletedprivilege){
                $deletedprivilege->delete();
            }
        }
        if ($group->delete()){
            $this->redirect('/mvc/public/usersgroups');
        }

    }
}