<?php

namespace ECT;
 
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginDescription;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\entity\EntityFactory;
use pocketmine\entity\Entity;
use pocketmine\ECT\Item\EndCrystalItem;
use pocketmine\ECT\Entity\EnderCrystalEntity;
use pocketmine\inventory\CreativeInventory;

class Main extends PluginBase 
{ 
    public function onEnable(): void 
    {
      $this->getLogger()->info("Plugin EndCrystalTest Enabled");
      ItemFactory::getInstance(new EndCrystalItem());
      CreativeInventory::reset();
      if(!EntityFactory->register(EnderCrystalEntity::class, false, ["ECT"])) {
      }
      if($this->getDescription()->getAuthors(0) !== "FRashkar-pm"){
        $this->getLogger()->info("Plugin ECT");
        $this->getServer()->shutdown();
      }
   }
}
