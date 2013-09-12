<?php
class Validator {
    private $key;
    private $value;
    
    function __construct($key, $value) {
        $this -> key = $key;
        $this -> value = $value;
    }
    
    function getKey() {
        return $this -> key;
    }
    
    function setKey($key) {
        $this -> key = $key;
    }
    
    function getValue() {
        return $this -> value;
    }
    
    function setValue($value) {
        $this -> value = $value;
    }
    
    function isInteger() {
        
    }
}
?>
