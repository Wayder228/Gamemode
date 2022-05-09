<?php
//* Мой первый плагин ByWayder
*//

namespace Wayder;

use pocketmine\plugin\PluginBase;
use pocketmine\command{Command, CommandSender};
use pocketmine\GameMode;
use pocketmine\player\Player;

class Main extends PluginBase
{
    function onCommand(CommandSender $p, Command $c, string $label, array $args) : bool{
        switch($c->getName())
        {
            case "gm":
                if($p->hasPermission("gm.use"))
                {
                    if($p->isSurival)
                    {
                        $p->setGamemode(GameMode::CREATIVE());
                        $p->sendMessage("Вы включили гм 1");
                    } else {
                        $p->setGamemode(GameMode::SURIVAL);
                        $p->sendMessage("Вы выключили гм 1");
                    }
                } else {
                    $p->sendPopup("У вас нету прав!");
                }
        }
    }
}
