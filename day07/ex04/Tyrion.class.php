<?php

class Tyrion{
	public function sleepWith($who) {
        if (get_class($who) !== "Sansa")
            print "Not even if I'm drunk !" . PHP_EOL;
        else
            print "Let's do this." . PHP_EOL;
	}
}
?>