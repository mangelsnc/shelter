<?php

namespace Shelter\Domain\Animal;

class Animal
{
    const SHELTER = 0;
    const HOSTED = 1;
    const ADOPTED = 2;

    private $id;
    private $name;
    private $specie;
    private $breed;
    private $registerDate;
    private $birthMonth;
    private $birthYear;
    private $size;
    private $weight;
    private $color;
    private $mood;
    private $childrenFriendly;
    private $otherSpeciesFriendly;
    private $castrated;
    private $vaccined;
    private $chip;
    private $status;

    protected function __construct()
    {
        $this->registerDate = new \DateTime('now');
        $this->castrated = false;
        $this->vaccined = false;
        $this->chip = false;
        $this->status = self::SHELTER;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Animal;
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Animal;
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
     * Set specie
     *
     * @param string $specie
     * @return Animal;
     */
    public function setSpecie($specie)
    {
        $this->specie = $specie;

        return $this;
    }

    /**
     * Get specie
     *
     * @return string
     */
    public function getSpecie()
    {
        return $this->specie;
    }

    /**
     * Set breed
     *
     * @param string $breed
     * @return Animal;
     */
    public function setBreed($breed)
    {
        $this->breed = $breed;

        return $this;
    }

    /**
     * Get breed
     *
     * @return string
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * Set registerDate
     *
     * @param string $registerDate
     * @return Animal;
     */
    public function setRegisterDate(\DateTime $registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set birthMonth
     *
     * @param int $birthMonth
     * @return Animal;
     */
    public function setBirthMonth($birthMonth)
    {
        $this->birthMonth = intval($birthMonth);

        return $this;
    }

    /**
     * Get birthMonth
     *
     * @return int
     */
    public function getBirthMonth()
    {
        return $this->birthMonth;
    }

    /**
     * Set birthYear
     *
     * @param int $birthYear
     * @return Animal;
     */
    public function setBirthYear($birthYear)
    {
        $this->birthYear = intval($birthYear);

        return $this;
    }

    /**
     * Get birthYear
     *
     * @return int
     */
    public function getBirthYear()
    {
        return $this->birthYear;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return Animal;
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return Animal;
     */
    public function setWeight($weight)
    {
        $this->weight = floatval($weight);

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set color
     *
     * @param array $color
     * @return Animal;
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return array
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set mood
     *
     * @param string $mood
     * @return Animal;
     */
    public function setMood($mood)
    {
        $this->mood = $mood;

        return $this;
    }

    /**
     * Get mood
     *
     * @return string
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * Set childrenFriendly
     *
     * @param boolean $childrenFriendly
     * @return Animal;
     */
    public function setChildrenFriendly($childrenFriendly)
    {
        $this->childrenFriendly = $childrenFriendly;

        return $this;
    }

    /**
     * Get childrenFriendly
     *
     * @return boolean
     */
    public function getChildrenFriendly()
    {
        return $this->childrenFriendly;
    }

    /**
     * Is childrenFriendly
     *
     * @return boolean
     */
    public function isChildrenFriendly()
    {
        return true === $this->childrenFriendly;
    }

    /**
     * Set otherSpeciesFriendly
     *
     * @param boolean $otherSpeciesFriendly
     * @return Animal;
     */
    public function setOtherSpeciesFriendly($otherSpeciesFriendly)
    {
        $this->otherSpeciesFriendly = $otherSpeciesFriendly;

        return $this;
    }

    /**
     * Get otherSpeciesFriendly
     *
     * @return boolean
     */
    public function getOtherSpeciesFriendly()
    {
        return $this->otherSpeciesFriendly;
    }

    /**
     * Is otherSpeciesFriendly
     *
     * @return boolean
     */
    public function isOtherSpeciesFriendly()
    {
        return true === $this->otherSpeciesFriendly;
    }

    /**
     * Set castrated
     *
     * @param boolean $castrated
     * @return Animal;
     */
    public function setCastrated($castrated)
    {
        $this->castrated = $castrated;

        return $this;
    }

    /**
     * Get castrated
     *
     * @return boolean
     */
    public function getCastrated()
    {
        return $this->castrated;
    }

    /**
     * Is castrated
     *
     * @return boolean
     */
    public function isCastrated()
    {
        return true === $this->castrated;
    }

    /**
     * Set vaccined
     *
     * @param boolean $vaccined
     * @return Animal;
     */
    public function setVaccined($vaccined)
    {
        $this->vaccined = $vaccined;

        return $this;
    }

    /**
     * Get vaccined
     *
     * @return boolean
     */
    public function getVaccined()
    {
        return $this->vaccined;
    }

    /**
     * Is vaccined
     *
     * @return boolean
     */
    public function isVaccined()
    {
        return true === $this->vaccined;
    }

    /**
     * Set chip
     *
     * @param boolean $chip
     * @return Animal;
     */
    public function setChip($chip)
    {
        $this->chip = $chip;

        return $this;
    }

    /**
     * Get chip
     *
     * @return boolean
     */
    public function getChip()
    {
        return $this->chip;
    }

    /**
     * Is chip
     *
     * @return boolean
     */
    public function hasChip()
    {
        return true === $this->chip;
    }

    /**
     * Set status
     *
     * @param int $status
     * @return Animal;
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Is at the shelter
     *
     * @return boolean
     */
    public function isAtTheShelter()
    {
        return self::SHELTER === $this->status;
    }

    /**
     * Is hosted
     *
     * @return boolean
     */
    public function isHosted()
    {
        return self::HOSTED === $this->status;
    }

    /**
     * Is adopted
     *
     * @return boolean
     */
    public function isAdopted()
    {
        return self::ADOPTED === $this->status;
    }
}
