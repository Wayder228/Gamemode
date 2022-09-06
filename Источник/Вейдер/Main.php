<?php

/*
 ddddd
*/

namespace Wayder;

use pocketmine\plugin\PluginBase;
use pocketmine\command{Command, CommandSender};
use pocketmine\GameMode;
use pocketmine\player\Player;

class Main extends PluginBase
{
	public function onCommand(CommandSender $p, Command $c, string $l, array $args) : bool {
		
		if($c->getName == "gm")
		{
			switch($args[0]->getName())
			{
				case "1":
				$p->setGameMode(GameMode::CREATIVE());
				$p->sendPopup("\n qq ");
				
				break;
				
				case "0":
					
					$p->setGameMode(GameMode::SURVIVAL());
					$p->sendMessage("че");
			}
		}
		
	}
}
