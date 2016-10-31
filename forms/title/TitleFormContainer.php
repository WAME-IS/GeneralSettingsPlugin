<?php

namespace Wame\GeneralSettingsPlugin\Forms;

use Wame\SettingsModule\Forms\BaseSettingsFormContainer;


interface ITitleFormContainerFactory
{
	/** @return TitleFormContainer */
	public function create();
}


class TitleFormContainer extends BaseSettingsFormContainer
{
	public function getInputName()
	{
		return 'title';
	}


	public function getValue($form)
	{
		return $form->getHttpData($form::DATA_TEXT, $this->getInputName());
	}


    protected function configure() 
	{
		$form = $this->getForm();

		$form->addText('title', _('Title'))
				->setOption('description', _('Main page title, that is displayed in the browser header.'))
				->setRequired(_('Please enter title'));
    }

}