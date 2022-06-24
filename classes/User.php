<!-- classe de User -->

<?php

class User {

  protected $id = null;
  protected $username = null;
  protected $passwd = null;
  protected $email = null;
  protected $userType = null;
  protected $dateAdded = null;
  
 
 

  public function getId() {
    return $this->id;
  }

  public function getUserType() {
    return $this->userType;
  }

  public function getUsername() {
    return $this->username;
  }

  public function getEmail() {
    return $this->email;
  }

  public function isAdmin() {
    return $this->userType === 'admin';
  }
  
  

}
