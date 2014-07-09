<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class AdminEmployeesControllerCore extends AdminController
{
 	/** @var array profiles list */
	protected $profiles_array = array();

	/** @var array themes list*/
	protected $themes = array();

	/** @var array tabs list*/
	protected $tabs_list = array();
	
	protected $restrict_edition = false;

	public function __construct()
	{
		$this->bootstrap = true;
	 	$this->table = 'employee';
		$this->className = 'Employee';
	 	$this->lang = false;

		$this->addRowAction('edit');
		$this->addRowAction('delete');

		$this->context = Context::getContext();

		$this->bulk_actions = array(
			'delete' => array(
				'text' => $this->l('Delete selected'),
				'confirm' => $this->l('Delete selected items?'),
				'icon' => 'icon-trash'
			)
		);
		/*
		check if there are more than one superAdmin
		if it's the case then we can delete a superAdmin
		*/
		$super_admin = Employee::countProfile(_PS_ADMIN_PROFILE_, true);
		if ($super_admin == 1)
		{
			$super_admin_array = Employee::getEmployeesByProfile(_PS_ADMIN_PROFILE_, true);
			$super_admin_id = array();
			foreach ($super_admin_array as $key => $val)
				$super_admin_id[] = $val['id_employee'];
			$this->addRowActionSkipList('delete', $super_admin_id);
		}

		$profiles = Profile::getProfiles($this->context->language->id);
		if (!$profiles)
			$this->errors[] = Tools::displayError('No profile.');
		else
			foreach ($profiles as $profile)
				$this->profiles_array[$profile['name']] = $profile['name'];

		$this->fields_list = array(
			'id_employee' => array('title' => $this->l('ID'), 'align' => 'center', 'class' => 'fixed-width-xs'),
			'lastname' => array('title' => $this->l('Last Name')),
			'firstname' => array('title' => $this->l('First Name')),
			'email' => array('title' => $this->l('Email address')),
			'profile' => array('title' => $this->l('Profile'), 'type' => 'select', 'list' => $this->profiles_array,
				'filter_key' => 'pl!name', 'class' => 'fixed-width-lg'),
			'active' => array('title' => $this->l('Can log in'), 'align' => 'center', 'active' => 'status',
				'type' => 'bool', 'class' => 'fixed-width-sm'),
		);

		$this->fields_options = array(
			'general' => array(
				'title' =>	$this->l('Employee options'),
				'fields' =>	array(
					'PS_PASSWD_TIME_BACK' => array(
						'title' => $this->l('Password regeneration'),
						'hint' => $this->l('Security: Minimum time to wait between two password changes.'),
						'cast' => 'intval',
						'type' => 'text',
						'suffix' => ' '.$this->l('minutes'),
						'visibility' => Shop::CONTEXT_ALL
					),
					'PS_BO_ALLOW_EMPLOYEE_FORM_LANG' => array(
						'title' => $this->l('Memorize the language used in Admin panel forms'),
						'hint' => $this->l('Allow employees to select a specific language for the Admin panel form.'),
						'cast' => 'intval',
						'type' => 'select',
						'identifier' => 'value',
						'list' => array(
							'0' => array('value' => 0, 'name' => $this->l('No')),
							'1' => array('value' => 1, 'name' => $this->l('Yes')
						)
					), 'visibility' => Shop::CONTEXT_ALL)
				),
				'submit' => array('title' => $this->l('Save'))
			)
		);
		$rtl = $this->context->language->is_rtl ? '_rtl' : '';
		$path = _PS_ADMIN_DIR_.DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR;
		foreach (scandir($path) as $theme)
			if ($theme[0] != '.' && is_dir($path.$theme) && (@filemtime($path.$theme.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'admin-theme.css')))
			{
				$this->themes[] = array('id' => $theme.'|admin-theme'.$rtl.'.css', 'name' => $this->l('Default'));
				if (file_exists($path.$theme.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'schemes'.$rtl))
					foreach (scandir($path.$theme.DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'schemes'.$rtl) as $css)
						if ($css[0] != '.' && preg_match('/\.css$/', $css))
						{
							$name = (strpos($css,'admin-theme-') !== false ? Tools::ucfirst(preg_replace('/^admin-theme-(.*)\.css$/', '$1', $css)) : $css);
							$this->themes[] = array('id' => $theme.'|schemes'.$rtl.'/'.$css, 'name' => $name);
						}
			}

		$home_tab = Tab::getInstanceFromClassName('AdminDashboard', $this->context->language->id);
		$this->tabs_list[$home_tab->id] = array(
			'name' => $home_tab->name,
			'id_tab' => $home_tab->id,
			'children' => array(array(
				'id_tab' => $home_tab->id,
				'name' => $home_tab->name
			))
		);
		foreach (Tab::getTabs($this->context->language->id, 0) as $tab)
		{
			if (Tab::checkTabRights($tab['id_tab']))
			{
				$this->tabs_list[$tab['id_tab']] = $tab;
				foreach (Tab::getTabs($this->context->language->id, $tab['id_tab']) as $children)
					if (Tab::checkTabRights($children['id_tab']))
						$this->tabs_list[$tab['id_tab']]['children'][] = $children;
			}
		}
		parent::__construct();

		// An employee can edit its own profile
		if ($this->context->employee->id == Tools::getValue('id_employee'))
		{
			$this->tabAccess['view'] = '1';
			$this->restrict_edition = true;
			$this->tabAccess['edit'] = '1';
		}
	}

	public function setMedia()
	{
		parent::setMedia();
		$this->addJS(__PS_BASE_URI__.$this->admin_webpath.'/themes/'.$this->bo_theme.'/js/vendor/jquery-passy.js');
		$this->addjQueryPlugin('validate');
		$this->addJS(_PS_JS_DIR_.'jquery/plugins/validate/localization/messages_'.$this->context->language->iso_code.'.js');
	}

	public function initPageHeaderToolbar()
	{
		parent::initPageHeaderToolbar();

		if (empty($this->display))
			$this->page_header_toolbar_btn['new_employee'] = array(
				'href' => self::$currentIndex.'&addemployee&token='.$this->token,
				'desc' => $this->l('Add new employee', null, null, false),
				'icon' => 'process-icon-new'
			);

		if ($this->display == 'edit')
		{
			$obj = $this->loadObject(true);
			if (Validate::isLoadedObject($obj))
			{
				array_pop($this->toolbar_title);
				$this->toolbar_title[] = sprintf($this->l('Edit: %1$s %2$s'), $obj->lastname, $obj->firstname);
				$this->page_header_toolbar_title = implode(' '.Configuration::get('PS_NAVIGATION_PIPE').' ',
					$this->toolbar_title);
			}
		}
	}

	public function renderList()
	{
 		$this->_select = 'pl.`name` AS profile';
		$this->_join = 'LEFT JOIN `'._DB_PREFIX_.'profile` p ON a.`id_profile` = p.`id_profile`
		LEFT JOIN `'._DB_PREFIX_.'profile_lang` pl ON (pl.`id_profile` = p.`id_profile` AND pl.`id_lang` = '
			.(int)$this->context->language->id.')';

		return parent::renderList();
	}

	public function renderForm()
	{
		if (!($obj = $this->loadObject(true)))
			return;

		$available_profiles = Profile::getProfiles($this->context->language->id);

		if ($obj->id_profile == _PS_ADMIN_PROFILE_ && $this->context->employee->id_profile != _PS_ADMIN_PROFILE_)
		{
			$this->errors[] = Tools::displayError('You cannot edit the SuperAdmin profile.');
			return parent::renderForm();
		}

		$this->fields_form = array(
			'legend' => array(
				'title' => $this->l('Employees'),
				'icon' => 'icon-user'
			),
			'input' => array(
				array(
					'type' => 'text',
					'class' => 'fixed-width-xl',
					'label' => $this->l('First Name'),
					'name' => 'firstname',
					'required' => true
				),
				array(
					'type' => 'text',
					'class' => 'fixed-width-xl',
					'label' => $this->l('Last Name'),
					'name' => 'lastname',
					'required' => true
				),
				array(
					'type' => 'html',
					'name' => '<div id="employee-thumbnail"><a style="background-image:url(data:image/png;base64,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)"></a></div>
					<div></div>'
				),
				array(
					'type' => 'text',
					'class'=> 'fixed-width-xxl',
					'prefix' => '<i class="icon-envelope-o"></i>',
					'label' => $this->l('Email address'),
					'name' => 'email',
					'required' => true,
					'autocomplete' => false
				),
			),
		);
		if ($this->restrict_edition)
			$this->fields_form['input'][] = array(
				'type' => 'change-password',
				'label' => $this->l('Password'),
				'name' => 'passwd'
				);
		else
			$this->fields_form['input'][] = array(
				'type' => 'password',
				'label' => $this->l('Password'),
				'hint' => sprintf($this->l('Minimum of %s characters.'), Validate::ADMIN_PASSWORD_LENGTH),
				'name' => 'passwd'
				);


		// if ($this->restrict_edition)
		// 	$this->fields_form['input'][] = array(
		// 		'type' => 'password',
		// 		'label' => $this->l('Current password'),
		// 		'name' => 'old_passwd',
		// 		'hint' => $this->l('Leave this field blank if you do not want to change your password.'),
		// 		//'hint' => sprintf($this->l('Minimum of %s characters.'), Validate::ADMIN_PASSWORD_LENGTH)
		// 		);
			
			
						
		$this->fields_form['input'] = array_merge($this->fields_form['input'], array(
			array(
				'type' => 'switch',
				'label' => $this->l('Connect to PrestaShop'),
				'name' => 'optin',
				'required' => false,
				'is_bool' => true,
				'values' => array(
					array(
						'id' => 'optin_on',
						'value' => 1,
						'label' => $this->l('Yes')
					),
					array(
						'id' => 'optin_off',
						'value' => 0,
						'label' => $this->l('No')
					)
				),
				'hint' => $this->l('PrestaShop can provide you with guidance on a regular basis by sending you tips on how to optimize the management of your store which will help you grow your business. If you do not wish to receive these tips, please uncheck this box.')
			),
			array(
				'type' => 'default_tab',
				'label' => $this->l('Default page'),
				'name' => 'default_tab',
				'hint' => $this->l('This page will be displayed just after login.'),
				'options' => $this->tabs_list
			),
			array(
				'type' => 'select',
				'label' => $this->l('Language'),
				'name' => 'id_lang',
				//'required' => true,
				'options' => array(
					'query' => Language::getLanguages(false),
					'id' => 'id_lang',
					'name' => 'name'
				)
			),
			array(
				'type' => 'select',
				'label' => $this->l('Theme'),
				'name' => 'bo_theme_css',
				'options' => array(
					'query' => $this->themes,
					'id' => 'id',
					'name' => 'name'
				),
				'onchange' => 'var value_array = $(this).val().split("|"); $("link").first().attr("href", "themes/" + value_array[0] + "/css/" + value_array[1]);',
				'hint' => $this->l('Back Office theme.')
			),
			array(
				'type' => 'radio',
				'label' => $this->l('Admin menu orientation'),
				'name' => 'bo_menu',
				'required' => false,
				'is_bool' => true,
				'values' => array(
					array(
						'id' => 'bo_menu_on',
						'value' => 0,
						'label' => $this->l('Top')
					),
					array(
						'id' => 'bo_menu_off',
						'value' => 1,
						'label' => $this->l('Left')
					)
				)
			)
		));

		if ((int)$this->tabAccess['edit'] && !$this->restrict_edition)
		{
			$this->fields_form['input'][] = array(
				'type' => 'switch',
				'label' => $this->l('Status'),
				'name' => 'active',
				'required' => false,
				'is_bool' => true,
				'values' => array(
					array(
						'id' => 'active_on',
						'value' => 1,
						'label' => $this->l('Enabled')
					),
					array(
						'id' => 'active_off',
						'value' => 0,
						'label' => $this->l('Disabled')
					)
				),
				'hint' => $this->l('Allow or disallow this employee to log into the Admin panel.')
			);

			// if employee is not SuperAdmin (id_profile = 1), don't make it possible to select the admin profile
			if ($this->context->employee->id_profile != _PS_ADMIN_PROFILE_)
				 foreach ($available_profiles as $i => $profile)
				 	if ($available_profiles[$i]['id_profile'] == _PS_ADMIN_PROFILE_)
					{
						unset($available_profiles[$i]);
						break;
					}
			$this->fields_form['input'][] = array(
				'type' => 'select',
				'label' => $this->l('Permission profile'),
				'name' => 'id_profile',
				'required' => true,
				'options' => array(
					'query' => $available_profiles,
					'id' => 'id_profile',
					'name' => 'name',
					'default' => array(
						'value' => '',
						'label' => $this->l('-- Choose --')
					)
				)
			);

			if (Shop::isFeatureActive())
			{
				$this->context->smarty->assign('_PS_ADMIN_PROFILE_', (int)_PS_ADMIN_PROFILE_);
				$this->fields_form['input'][] = array(
					'type' => 'shop',
					'label' => $this->l('Shop association'),
					'hint' => $this->l('Select the shops the employee is allowed to access.'),
					'name' => 'checkBoxShopAsso',
				);
			}
		}

		$this->fields_form['submit'] = array(
			'title' => $this->l('Save'),
		);

		$this->fields_value['passwd'] = false;
		$this->fields_value['bo_theme_css'] = $obj->bo_theme.'|'.$obj->bo_css;

		if (empty($obj->id))
			$this->fields_value['id_lang'] = $this->context->language->id;

		return parent::renderForm();
	}

	protected function _childValidation()
	{
		if (!($obj = $this->loadObject(true)))
			return false;
		$email = $this->getFieldValue($obj, 'email');
		if (Validate::isEmail($email) && Employee::employeeExists($email) && (!Tools::getValue('id_employee')
			|| ($employee = new Employee((int)Tools::getValue('id_employee'))) && $employee->email != $email))
			$this->errors[] = Tools::displayError('An account already exists for this email address:').' '.$email;
	}
	
	public function processDelete()
	{
		if (!$this->canModifyEmployee())
			return false;

		return parent::processDelete();
	}
	
	public function processStatus()
	{
		if (!$this->canModifyEmployee())
			return false;
			
		parent::processStatus();
	}
	
	protected function canModifyEmployee()
	{
		if ($this->restrict_edition)
		{
			$this->errors[] = Tools::displayError('You cannot disable or delete your own account.');
			return false;
		}

		$employee = new Employee(Tools::getValue('id_employee'));
		if ($employee->isLastAdmin())
		{
			$this->errors[] = Tools::displayError('You cannot disable or delete the administrator account.');
			return false;
		}

		// It is not possible to delete an employee if he manages warehouses
		$warehouses = Warehouse::getWarehousesByEmployee((int)Tools::getValue('id_employee'));
		if (Tools::isSubmit('deleteemployee') && count($warehouses) > 0)
		{
			$this->errors[] = Tools::displayError('You cannot delete this account because it manages warehouses. Check your warehouses first.');
			return false;
		}
		
		return true;
	}
	
	public function processSave()
	{
		$employee = new Employee((int)Tools::getValue('id_employee'));

		// If the employee is editing its own account
		if ($this->restrict_edition)
		{
			$current_password = Tools::getValue('old_passwd');
			if (Tools::getValue('passwd') && (empty($current_password) || !Validate::isPasswdAdmin($current_password) || !$employee->getByEmail($employee->email, $current_password)))
				$this->errors[] = Tools::displayError('Your current password is invalid.');
			elseif (Tools::getValue('passwd') && (!Tools::getValue('passwd2') || Tools::getValue('passwd') !== Tools::getValue('passwd2')))
				$this->errors[] = Tools::displayError('The confirmation password doesn\'t match.');

			$_POST['id_profile'] = $_GET['id_profile'] = $employee->id_profile;
			$_POST['active'] = $_GET['active'] = $employee->active;
			
			// Unset set shops
			foreach ($_POST as $postkey => $postvalue)
				if (strstr($postkey, 'checkBoxShopAsso_'.$this->table) !== false)
					unset($_POST[$postkey]);
			foreach ($_GET as $postkey => $postvalue)
				if (strstr($postkey, 'checkBoxShopAsso_'.$this->table) !== false)
					unset($_GET[$postkey]);

			// Add current shops associated to the employee
			$result = Shop::getShopById((int)$employee->id, $this->identifier, $this->table);
			foreach ($result as $row)
			{
				$key = 'checkBoxShopAsso_'.$this->table;
				if (!isset($_POST[$key]))
					$_POST[$key] = array();
				if (!isset($_GET[$key]))
					$_GET[$key] = array();
				$_POST[$key][$row['id_shop']] = 1;
				$_GET[$key][$row['id_shop']] = 1;
			}
		}
		else
		{
			$_POST['id_last_order'] = $employee->getLastElementsForNotify('order');;
 			$_POST['id_last_customer_message'] = $employee->getLastElementsForNotify('customer_message');
 			$_POST['id_last_customer'] = $employee->getLastElementsForNotify('customer');
 		}

		//if profile is super admin, manually fill checkBoxShopAsso_employee because in the form they are disabled.
		if ($_POST['id_profile'] == _PS_ADMIN_PROFILE_)
		{
			$result = Db::getInstance()->executeS('SELECT id_shop FROM '._DB_PREFIX_.'shop');
			foreach ($result as $row)
			{
				$key = 'checkBoxShopAsso_'.$this->table;
				if (!isset($_POST[$key]))
					$_POST[$key] = array();
				if (!isset($_GET[$key]))
					$_GET[$key] = array();
				$_POST[$key][$row['id_shop']] = 1;
				$_GET[$key][$row['id_shop']] = 1;
			}
		}

		if ($employee->isLastAdmin())
		{
			if (Tools::getValue('id_profile') != (int)_PS_ADMIN_PROFILE_)
			{
				$this->errors[] = Tools::displayError('You should have at least one employee in the administrator group.');
				return false;
			}

			if (Tools::getvalue('active') == 0)
			{
				$this->errors[] = Tools::displayError('You cannot disable or delete the administrator account.');
				return false;
			}
		}

		if (Tools::getValue('bo_theme_css'))
		{
			$bo_theme = explode('|', Tools::getValue('bo_theme_css'));
			$_POST['bo_theme'] = $bo_theme[0];
			if (!in_array($bo_theme[0], scandir(_PS_ADMIN_DIR_.DIRECTORY_SEPARATOR.'themes')))
			{
				$this->errors[] = Tools::displayError('Invalid theme');
				return false;
			}
			if (isset($bo_theme[1]))
				$_POST['bo_css'] = $bo_theme[1];
		}

		$assos = $this->getSelectedAssoShop($this->table);
		if (!$assos && $this->table = 'employee')
			if (Shop::isFeatureActive() && _PS_ADMIN_PROFILE_ != $_POST['id_profile'])
				$this->errors[] = Tools::displayError('The employee must be associated with at least one shop.');

		if (count($this->errors))
			return false;

		return parent::processSave();
	}

	public function validateRules($class_name = false)
	{
		$employee = new Employee((int)Tools::getValue('id_employee'));

		if (!Validate::isLoadedObject($employee) && !Validate::isPasswd(Tools::getvalue('passwd'), Validate::ADMIN_PASSWORD_LENGTH))
			return !($this->errors[] = sprintf(Tools::displayError('You must specify a password with a minimum of %s characters.'),
				Validate::ADMIN_PASSWORD_LENGTH));

		return parent::validateRules($class_name);
	}

	public function postProcess()
	{
		/* PrestaShop demo mode */
		if ((Tools::isSubmit('submitBulkdeleteemployee') || Tools::isSubmit('submitBulkdisableSelectionemployee') || Tools::isSubmit('deleteemployee') || Tools::isSubmit('status') || Tools::isSubmit('statusemployee') || Tools::isSubmit('submitAddemployee')) && _PS_MODE_DEMO_)
		{
				$this->errors[] = Tools::displayError('This functionality has been disabled.');
				return;
		}

		return parent::postProcess();
	}

	public function initContent()
	{
		if ($this->context->employee->id == Tools::getValue('id_employee'))
			$this->display = 'edit';

		return parent::initContent();
	}

	protected function afterUpdate($object)
	{
		$res = parent::afterUpdate($object);
		// Update cookie if needed
		if (Tools::getValue('id_employee') == $this->context->employee->id && ($passwd = Tools::getValue('passwd'))
			&& $object->passwd != $this->context->employee->passwd)
		{
			$this->context->cookie->passwd = $this->context->employee->passwd = $object->passwd;
			if (Tools::getValue('passwd_send_email'))
			{
				$params = array(
					'{email}' => $object->email,
					'{lastname}' => $object->lastname,
					'{firstname}' => $object->firstname,
					'{passwd}' => $passwd
				);
				Mail::Send($object->id_lang, 'password', Mail::l('Your new password', $object->id_lang), $params, $object->email, $object->firstname.' '.$object->lastname);
			}
		}

		return $res;
	}
	
	protected function ajaxProcessFormLanguage()
	{
		$this->context->cookie->employee_form_lang = (int)Tools::getValue('form_language_id');
		if (!$this->context->cookie->write())
			die ('Error while updating cookie.');
		die ('Form language updated.');
	}
	
	protected function ajaxProcessToggleMenu()
	{
		$this->context->cookie->collapse_menu = (int)Tools::getValue('collapse');
		$this->context->cookie->write();
	}
	public function ajaxProcessGetTabByIdProfile()
	{
		$id_profile = Tools::getValue('id_profile');
		$tabs = Tab::getTabByIdProfile(0, $id_profile);
		$this->tabs_list = array();
		foreach ($tabs as $tab)
		{
			if (Tab::checkTabRights($tab['id_tab']))
			{
				$this->tabs_list[$tab['id_tab']] = $tab;
				foreach (Tab::getTabByIdProfile($tab['id_tab'], $id_profile) as $children)
					if (Tab::checkTabRights($children['id_tab']))
						$this->tabs_list[$tab['id_tab']]['children'][] = $children;
			}
		}
		die(Tools::jsonEncode($this->tabs_list));
	}
}