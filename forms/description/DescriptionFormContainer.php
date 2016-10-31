<?php

namespace Wame\GeneralSettingsPlugin\Forms;

use Wame\SettingsModule\Forms\BaseSettingsFormContainer;


interface IDescriptionFormContainerFactory
{
	/** @return DescriptionFormContainer */
	public function create();
}


class DescriptionFormContainer extends BaseSettingsFormContainer
{
	public function getInputName()
	{
		return 'description';
	}


	public function getValue($form)
	{
		return $form->getHttpData($form::DATA_TEXT, $this->getInputName());
	}


    protected function configure() 
	{
		$form = $this->getForm();

		$form->addText('description', _('Description'))
				->setOption('description', _('Main page description, that is displayed in the browser header.'))
				->setRequired(_('Please enter description'));
    }

}