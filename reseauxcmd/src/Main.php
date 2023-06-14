<?php

declare(strict_types=1);

namespace wax_dev\reseauxcmd;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\server\CommandEvent;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    private static $grosfeuj = [];

    function onEnable (): void
    {
        $this->getServer ()->getPluginManager ()->registerEvents ($this, $this);
        $this->getLogger ()->info("plugin active");
        self::$grosfeuj = $this;
    }


    public function onCommand ( CommandSender $sender,Command $command,string $label,array $args ) : bool
    {
        $commandName = $command->getName ();
        if($commandName == 'site'){
            if($sender instanceof Player){
                $sender->sendMessage ("§aNotre Site §f> §4§l??");
            }
        }

        $mongroszeub = $command->getName ();
        if($mongroszeub == 'discord'){
            if($sender instanceof Player){
                $sender->sendMessage ("§1Notre Discord §f> §4§l??");
            }
        }
        return true;
    }

    protected function getInstance(){
        return self::$grosfeuj;
    }
}
