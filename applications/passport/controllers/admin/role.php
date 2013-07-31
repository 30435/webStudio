<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('admin/roleModel');
		$this->form_validation->set_rules('name3', 'ssd', 'trim|min_length[1]|max_length[12]|xss_clean');
		$this->operationMenus = array('viewPriv', 'editPriv', 'edit', 'delete');
	}

	/**
	 * List the role infos
	 *
	 * @return void
	 */
	public function listinfo()
	{
		$this->_listinfo();
	}

	/**
	 * Add a role
	 *
	 * @return void
	 */
	public function add()
	{
        $this->_add();
	}

	/**
	 * Edit a role
	 *
	 * @return void
	 */
	public function edit()
	{
		$this->_listorderExt();
		$this->_edit();
	}

    /**
	 * Delete a role
     *
	 * @return void
	 */
	public function delete()
	{
		$this->_deleteExt();
        $this->_delete();
	}
						
	/**
	 * Format the element of the infos
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		if (is_array($infos) && !empty($infos)) {
			$statusInfos = $this->fieldInfos['status']['infos'];
			foreach ($infos as $key => $info) {
				$info['status'] = isset($statusInfos[$info['status']]) ? $statusInfos[$info['status']] : 0;
				$infos[$key] = $info;
			}
		}

		return $infos;
	}

	/**
	 * Display a role privileges
	 * 
	 * @return void
	 */
	public function editPriv()
	{
		$this->roleId = $this->input->get_post('id');
		if (empty($this->roleId)) {
			$message = $this->lang->line('admin_infonoexist');
			$this->_showMessage($message);
		}
		
		if ($this->form_validation->run() == false) {
			$allMenuInfos = $this->_getMenuInfos(true);
			$privInfos = $this->_getPrivInfos($this->roleId);
			foreach ($allMenuInfos as $menuId => $info) {
				$appName = isset($this->appInfos[$info['app_code']]['name']) ? $this->appInfos[$info['app_code']]['name'] : '';
				$info['app_code'] = !empty($appName) ? $appName : $info['app_code'];
				$displayName = isset($this->fieldInfos['display']['infos'][$info['display']]['value']) ? $this->fieldInfos['display']['infos'][$info['display']]['value'] : '';
				$info['display'] = !empty($displayName) ? $displayName : $info['display'];
				$info['checked'] = in_array($menuId, $privInfos) ? ' checked' : '';
				$info['level'] = $this->_getLevel($menuId, $allMenuInfos);
				$info['parentid_node'] = ($info['parentid'])? ' class="child-of-node-' . $info['parentid'] . '"' : '';			
				$allMenuInfos[$menuId] = $info;
			}

			$menuTree = new CustomTree($allMenuInfos);
			$format  = "<tr id='node-\$id' \$parentid_node>
				<td style='padding-left:30px;'>\$spacer
				<input type='checkbox' name='menuids[]' value='\$id' level='\$level' \$checked onclick='javascript:checknode(this);'> \$name
				</td>
				<td align='center'>\$app_code</td>
				<td align='center'>\$display</td>
				</tr>";
			$this->menusStr = $menuTree->getTree(0, $format);
			
			$this->showSubnav = true;
			
			$this->load->view('admin/role_priv');
		} else {
			$menuIds = $this->input->post('menuids');
			$this->_loadModel($this->appCode, 'admin/privilegeModel');
			$where = array('role_id' => $this->roleId);
			$this->privilegeModel->deleteInfo($where);

			foreach ($menuIds as $menuId) {
				$this->privilegeModel->addInfo(array('role_id' => $this->roleId, 'menu_id' => $menuId));
			}
			
			if ($editResult) {
				$this->_writeLog($menuIds);
			}
			$message = $this->appMenus[$this->method]['name'] . $this->lang->line('seccessful');
			$this->_showMessage($message);
		}
	}

	/**
	 * Get the level of a menu
	 * 
	 * @param int $menuId 
	 * @param array $menuInfos
	 * @param int $level
	 * @return int
	 */
	protected function _getLevel($menuId, $menuInfos, $level = 0)
	{
		foreach($menuInfos as $id => $menu){
			if ($menuId == $id) {
				if ($menu['parentid']== '0') {
					return $level;
				}
				$level++;
				return $this->_getLevel($menu['parentid'], $menuInfos, $level);
			}
		}
	}
}