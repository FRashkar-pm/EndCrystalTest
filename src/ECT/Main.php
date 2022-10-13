<?php

namespace ECT;
 
use pocketmine\plugin\PluginBase;
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
      ItemFactory::getInstance(new EndCrystal());
      CreativeInventory::reset();
      if(!EntityFactory->register(ECT::class, false, ["ECT"])) {
      }
      if($this->getDescription()->getAuthor(0) !== "FRashkar-pm"){
        $this->getLogger()->info("Plugin ECT");
        $this->getServer()->shutdown();
      }
   }
}
