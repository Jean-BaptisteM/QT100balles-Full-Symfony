<?php

namespace App\Service;

// Creation of a service to store methods related to files
class FileService
{
    // Declaration of a protected property which 
    // contains our wiring
    protected $picturePath;

    // Declaration of a constructor that will be called automatically during class
    // instantiation, with the wiring property as an argument
    public function __construct(string $picturePath)
    {   
        $this->picturePath = $picturePath;
    }

    // Creation of a method that allows to check if the file exists or not
    public function exist(string $fileName) {
        // Use of the native php file_exists () function to which we pass as argument
        // the wiring contained in picturePath concatenated with the $filename.
        if(file_exists($this->picturePath.$fileName)){
            return true;
        } else {
            return false;
        }
    }
}