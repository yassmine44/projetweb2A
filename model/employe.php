<?php
class employe 
{
    private string $lastName;
    private string $firstName; 
    private string $password;
    private int $phone;
    private string $email;
    private string $dOB;

    public function _construct (string $lastName, string $firstName, string $password, int $phone, string $email, string $dOB)
    {
        $this ->lastName=$lastName;
        $this->firstname=$firstName;
        $this->password=$password;
        $this->phone=$phone;
        $this->email=$email;
        $this->dOB = $dOB;


    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of dOB
     */ 
    public function getDOB()
    {
        return $this->dOB;
    }

    /**
     * Set the value of dOB
     *
     * @return  self
     */ 
    public function setDOB($dOB)
    {
        $this->dOB = $dOB;

        return $this;
    }
}