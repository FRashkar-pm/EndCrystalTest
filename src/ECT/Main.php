<?php

namespace ECT
 
use pocketmine\plugin\PLuginBase;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\entity\Entity;
use pocketmine\ECT\Item\EndCrystalItem;
use pocketmine\ECT\Entity\EnderCrystalEntity;

class Main extends PluginBase {
  
  
    public function onEnable(): void {
      $this->getLogger()->info("Plugin EndCrystalTest");
      ItemFactory::registerItem(new EndCrystal());
      CreativeInventory::reset();
      if(!EntityFactory->register(ECT::class, false, ["ECT"])) {
      }
      if($this->getDescription()->getAuthors(0) !== "FRashkar-pm"){
        $this->getLogger()->info("Plugin ECT");
        $this->getServer()->shutdown();
      }
   }
}
