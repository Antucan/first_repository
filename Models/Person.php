<?php

namespace App\Models;

/**
 * Represents any person.
 */
class Person
{
  /**
     * Person name
     *
     * @var string
     */
    private $name;
    public function getName()
    {
        return $this->name;
    }
/**
   * age of person
   *
   * @var int
   */
  private $age;
  
  /**
   * Get age of person
   *
   * @return  int
   */ 
  public function getAge()
  {
    return $this->age;
  }

  /**
   * Set age of person
   *
   * @param  int  $age  age of person
   *
   * @return  self
   */ 
  public function setAge(int $age)
  {
      $this->age = $age;
      
      return $this;
    }
    function run(){
      echo "running";
    }
}