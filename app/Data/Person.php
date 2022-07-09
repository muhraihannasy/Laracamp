<?php 

namespace App\Data;

class Person {
    public function __construct(
        private string $username, 
        private string $password, 
    )
    {
        
    }
}