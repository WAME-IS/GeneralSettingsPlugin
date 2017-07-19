<?php

namespace Wame\GeneralSettingsPlugin\Vendor\Wame\MenuModule\Components\MenuControl\AdminMenu;

use Nette\Application\LinkGenerator;
use Wame\MenuModule\Models\IMenuItem;
use Wame\MenuModule\Models\Item;

interface IAdminMenuItem
{
	/** @return AdminMenuItem */
	public function create();
}


class AdminMenuItem implements IMenuItem
{	
    /** @var LinkGenerator */
	private $linkGenerator;
	
	
	public function __construct(
		LinkGenerator $linkGenerator
	) {
		$this->linkGenerator = $linkGenerator;
	}
	
	
	public function addItem()
	{
		$item = new Item();
		$item->setName('settings');
		
		$item->addNode($this->settingsGeneral(), 'general');
		
		return $item->getItem();
	}
	
	
	private function settingsGeneral()
	{
		$item = new Item();
		$item->setName('settings-general');
		$item->setTitle(_('General'));
		$item->setLink($this->linkGenerator->link('Admin:GeneralSettings:'));
		
		return $item->getItem();
	}

}
