<?php

namespace daniiltserin\AdwertismentBoardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdwertismentSingle
 */
class AdwertismentSingle
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $authorId;

    /**
     * @var string
     */
    private $header;

    /**
     * @var int
     */
    private $price;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $map;

    /**
     * @var int
     */
    private $rooms;

    /**
     * @var int
     */
    private $phone;

    /**
     * @var int
     */
    private $mark;

    /**
     * @var int
     */
    private $floor;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var int
     */
    private $qGender;


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
     * Set authorId
     *
     * @param integer $authorId
     * @return AdwertismentSingle
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set header
     *
     * @param string $header
     * @return AdwertismentSingle
     */
    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Get header
     *
     * @return string 
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return AdwertismentSingle
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return AdwertismentSingle
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return AdwertismentSingle
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return AdwertismentSingle
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set map
     *
     * @param string $map
     * @return AdwertismentSingle
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return string 
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set rooms
     *
     * @param integer $rooms
     * @return AdwertismentSingle
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Get rooms
     *
     * @return integer 
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return AdwertismentSingle
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
     * Set mark
     *
     * @param integer $mark
     * @return AdwertismentSingle
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return integer 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set floor
     *
     * @param integer $floor
     * @return AdwertismentSingle
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return integer 
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return AdwertismentSingle
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set qGender
     *
     * @param integer $qGender
     * @return AdwertismentSingle
     */
    public function setQGender($qGender)
    {
        $this->qGender = $qGender;

        return $this;
    }

    /**
     * Get qGender
     *
     * @return integer 
     */
    public function getQGender()
    {
        return $this->qGender;
    }
}
