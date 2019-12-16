<?php

    class UnholyFactory
    {
	    private	$army = array();
	    public function absorb($fighter)
	    {
	    	if (is_subclass_of($fighter,'Fighter'))
	    	{
	    		if (!array_key_exists($fighter->_toString(),$this->army))
	    		{
					$this->army[$fighter->_toString()] = $fighter;
					print("(Factory absorbed a fighter of type ". $fighter->_toString().")\n");
		    	}
		    	else
		    	{
		    		print("(Factory already absorbed a fighter of type ". $fighter->_toString().")\n");
		    	}
	    	}
		    else
		    {
		    	print ("(Factory can't absorb this, it's not a fighter)\n");
		    }
    	}
	    public function fabricate($rf)
	    {
	    	if (array_key_exists($rf,$this->army))
	    	{
	    		print("(Factory fabricates a fighter of type ". $rf.")\n");
	    		return $this->army[$rf];
            }
	    	else
	    	{
	    		print("(Factory hasn't absorbed any fighter of type ". $rf.")\n");
	    	}
        }
    }
?>