

<?php

class Employee
{
    private $first_name;
    private $last_name;
    private $company = array();
    private $email;
    private $phone_number;

    //Setters
    //============================================
    public function setFirstName($first_name)
    {
        $this->first_name = ucwords($first_name);
    }
    public function setLastName($last_name)
    {
        $this->last_name = ucwords($last_name);
    }
    public function setEmail($email)
    {
        $this->email = ucwords($email);
    }
    //============================================

    //Getters
    //============================================
    public function getFirstName()
    {
        return $this->first_name;
    }
    public function getLastName()
    {
        return $this->last_name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    //============================================

    public function addCompany($cName, $cEmail = null, $cLogo = null)
    {
        $this company[] = array (
            "Name" => $cName,
            "Email" => $cEmail,
            "Logo" => $cLogo
        );
    }
}
?>