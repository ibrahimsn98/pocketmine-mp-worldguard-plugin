<?php
namespace WorldGuard;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

use pocketmine\Player;
use pocketmine\Block;
use pocketmine\Server;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;

class main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getLogger()->info("Plugin Actived.");   
		$this->getServer()->getPluginManager()->registerEvents($this, $this); 
	}
	public function onDisable(){
		$this->getLogger()->info("Plugin Deactived.");        		
	}

	public function onBlockPlace(BlockPlaceEvent $event) {
		$player = $event->getPlayer();
		if(!$player->isOp()) {
			$event->setCancelled(true);
		}
	}
	
	public function onBlockBreak(BlockBreakEvent $event) {
		$player = $event->getPlayer();
		if(!$player->isOp()) {
			$event->setCancelled(true);
		}
	}
}