<?php

namespace daniiltserin\AdwertismentBoardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var int
     */
    private $gender;

    /**
     * @var int
     */
    private $phone;

    /**
     * @var int
     */
    private $phoneWhatsapp;

    /**
     * @var string
     */
    private $phoneViber;

    /**
     * @var string
     */
    private $socialLinks;

    /**
     * @var string
     */
    private $email;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phoneWhatsapp
     *
     * @param integer $phoneWhatsapp
     * @return User
     */
    public function setPhoneWhatsapp($phoneWhatsapp)
    {
        $this->phoneWhatsapp = $phoneWhatsapp;

        return $this;
    }

    /**
     * Get phoneWhatsapp
     *
     * @return integer 
     */
    public function getPhoneWhatsapp()
    {
        return $this->phoneWhatsapp;
    }

    /**
     * Set phoneViber
     *
     * @param string $phoneViber
     * @return User
     */
    public function setPhoneViber($phoneViber)
    {
        $this->phoneViber = $phoneViber;

        return $this;
    }

    /**
     * Get phoneViber
     *
     * @return string 
     */
    public function getPhoneViber()
    {
        return $this->phoneViber;
    }

    /**
     * Set socialLinks
     *
     * @param string $socialLinks
     * @return User
     */
    public function setSocialLinks($socialLinks)
    {
        $this->socialLinks = $socialLinks;

        return $this;
    }

    /**
     * Get socialLinks
     *
     * @return string 
     */
    public function getSocialLinks()
    {
        return $this->socialLinks;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
