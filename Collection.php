<?php
  // Basic collection for adding and removing items
  class Collection {
    private $arrayOfItems = array();

    // Can either add a single item with or without a key.
    public function add($value, $key=null){
      if($key == null){
        $this->arrayOfItems[] = $value;
      } else {
        if(array_key_exists($key, $this->arrayOfItems)){
          $this->arrayOfItems[$key][] = $value;
        } else {
          $this->arrayOfItems[$key][] = $value;
        }
      }
    }

    // Deletes item if key exists.
    public function delete($key){
      if(isset($this->arrayOfItems[$key])){
        unset($this->arrayOfItems[$key]);
      } else {
        throw new Exception("Invalid key $key.");
      }
    }

    public function getValue($key){
      if(isset($this->arrayOfItems[$key])){
        return $this->arrayOfItems[$key];
      }else {
        throw new Exception("Invalid key $key.");
      }
    }

  }
?>
