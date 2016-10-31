<?php

namespace Wame\GeneralSettingsPlugin\Forms;

use Wame\SettingsModule\Forms\BaseSettingsFormContainer;


interface IKeywordsFormContainerFactory
{
	/** @return KeywordsFormContainer */
	public function create();
}


class KeywordsFormContainer extends BaseSettingsFormContainer
{
	public function getInputName()
	{
		return 'keywords';
	}


	public function getValue($form)
	{
		return $form->getHttpData($form::DATA_TEXT, $this->getInputName());
	}


    protected function configure() 
	{
		$form = $this->getForm();

		$form->addText('keywords', _('Keywords'))
				->setOption('description', _('Main page keywords, that is displayed in the browser header.'))
				->setRequired(_('Please enter keywords'));
    }

}