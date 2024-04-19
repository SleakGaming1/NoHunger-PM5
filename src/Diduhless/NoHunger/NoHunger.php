<?php

declare(strict_types=1);

namespace Diduhless\NoHunger;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;

class NoHunger extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        $this->getLogger()->info("§8[§6NoHunger§8] NoHunger has been enabled!");
    }

    /**
     * @param PlayerExhaustEvent $event
     */
    public function onPlayerExhaust(PlayerExhaustEvent $event): void {
        $event->cancel();
    }

}
