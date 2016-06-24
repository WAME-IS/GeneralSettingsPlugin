<?php

namespace Wame\GeneralSettingsPlugin\Forms;

use Wame\SettingsModule\Forms\BaseSettingsFormContainer;


interface ISiteTitleFormContainerFactory
{
	/** @return SiteTitleFormContainer */
	public function create();
}


class SiteTitleFormContainer extends BaseSettingsFormContainer
{
	public function getInputName()
	{
		return 'siteTitle';
	}


	public function getValue($form)
	{
		return $form->getHttpData($form::DATA_TEXT, $this->getInputName());
	}


    protected function configure() 
	{
		$form = $this->getForm();

		$form->addText('siteTitle', _('Site title'))
				->setOption('description', _('Main page title, that is displayed in the browser header.'))
				->setRequired(_('Please enter site title'));
    }

}