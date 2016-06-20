<?php 

namespace Wame\GeneralSettingsPlugin\Models;

use Wame\SettingsModule\Models\SettingsType;
use Wame\SettingsModule\Forms\SettingsForm;


class General extends SettingsType
{
	/** @var SettingsForm */
	private $settingsForm;


	public function __construct(
		SettingsForm $settingsForm
	) {
		parent::__construct();
		
		$this->settingsForm = $settingsForm;
	}
	
	
	protected function createComponentSettingsForm()
	{
		$form = $this->settingsForm
						->setType($this)
						->build();
		
		return $form;
	}
	
	
	public function getComponentServices()
	{
		$this->addService($this->createComponentSettingsForm(), 'settingsForm');
		
		return $this;
	}
	
	
	public function getTitle()
	{
		return _('General');
	}

	
}