<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */



 // Answer!!!
 class Nama{

  //PROPERTIES
  public $name;
  private $address;

  //METHOD
  public function name()
  {
      echo "\nRaditya Fajar Bayu Pamungkas";
  }

  // STATIC METHOD
  public static function names()
  {
      echo "\nSMK BINA UTAMA KENDAL\n";
  }

  //SETTERS
  public function setAddress($address)
  {
      $this->address=$address;
  }

  //GETTERS
  public function getAddress()
  {
      return $this->address;
  }
}


$student=new Nama();// INSTANTIATED CLASS

$student->name();// INVOKE METHOD

// INVOKE STATIC METHOD

Nama::names();

// INVOKE SETTERS & GETTERS

$student->setAddress("Sukomulyo,Kaliwungu Selatan,Kendal"); // set

echo $student->getAddress();  //get