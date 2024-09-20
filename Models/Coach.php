<?php

namespace App\Models;


/**
 * Represents coach.
 */
class Coach extends Person
{
    

    /**
     * Coach Status
     *

     * @var boolean
     */
    private $active;


    /**
     * Coach tactic
     *
     * @var string
     */
    private $tactic;


    /**
     * Construct a Coach with a name and the status.
     *
     * @param string $name     Coach name
     * @param bool $active  Coach Status
     * @param string $tactic La nueva táctica a implementar
     */

    public function __construct(string $name, bool $active, string $tactic)
    {
        
        $this->active = $active;
        $this->tactic = $tactic;
    }
    /**
     * Get Coach name
     *
     * @return  string
     */
    
    /**
     * Get Coach Status
     *
     * @return  bool
     */
    public function getActive()
    {
        return $this->active;
    }

    public function getTactic()
    {
        return $this->tactic;
    }

    /**
     * Set Coach name in string
     *
     * @param  string  $name is string
     *
     * @return  self
     */
    
    /**
     * Set status in bool
     *
     * @param  bool  $active is true or false
     *
     * @return  self
     */
    public function setActive(bool $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Set Coach name in string
     *
     * @param  string  $tactic is string
     *
     * @return  self
     */
    
}
