<?php 

namespace Wame\GeneralSettingsPlugin\Registers;

use Wame\SettingsModule\Registers\Types\SettingsGroup;
use Wame\SettingsModule\Forms\SettingsForm;


class General extends SettingsGroup
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