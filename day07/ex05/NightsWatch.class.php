<?php

class NightsWatch implements IFighter{
    private $dowho = array();

    public function recruit($who) {
        $this->dowho[] = $who;
    }
    public function fight() {
        foreach($this->dowho as $man){
            $interfaces = class_implements(get_class($man));
            if(method_exists(get_class($man), "fight") && in_array("IFighter", $interfaces))
                $man->fight();
        }
    }
}
?>