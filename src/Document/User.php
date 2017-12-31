<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(repositoryClass="App\Repository\UserRepository") */
class User
{
    /**
     * @ODM\Id
     * @var string
     */
    protected $id;

    /**
     * @ODM\Field(type="string")
     * @var string
     */
    protected $firstname;

    /**
     * @ODM\Field(type="string")
     * @var string
     */
    protected $lastname;

    /**
     * @ODM\Field(type="string")
     * @var string
     */
    protected $email;

    /**
     * @ODM\Field(type="string")
     * @var string
     */
    protected $job;

    /**
     * Get the value of id
     *
     * @return  string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of firstname
     *
     * @return  string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param  string  $firstname
     *
     * @return  self
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of Lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of Lastname
     *
     * @param string lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param string email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set the value of Job
     *
     * @param string job
     *
     * @return self
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

}
