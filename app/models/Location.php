
<?php

class Location extends Eloquent{
public $timestamps = false;

   public function population()
    {
        return $this->hasOne('Population');
    }
}