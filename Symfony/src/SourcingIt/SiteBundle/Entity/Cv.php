<?php

namespace SourcingIt\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SourcingIt\SiteBundle\Entity\CvRepository")
 */
class Cv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=255)
     */
    private $phone_number;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_phone_number", type="string", length=255)
     */
    private $mobile_phone_number;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="text")
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="formation", type="text")
     */
    private $formation;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="string", length=255)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="availability", type="string", length=255)
     */
    private $availability;

    /**
     * @var string
     *
     * @ORM\Column(name="mobility", type="text")
     */
    private $mobility;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="text")
     */
    private $skills;


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
     * Set firstname
     *
     * @param string $firstname
     * @return Cv
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Cv
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
     * Set phone_number
     *
     * @param string $phoneNumber
     * @return Cv
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;
    
        return $this;
    }

    /**
     * Get phone_number
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set mobile_phone_number
     *
     * @param string $mobilePhoneNumber
     * @return Cv
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobile_phone_number = $mobilePhoneNumber;
    
        return $this;
    }

    /**
     * Get mobile_phone_number
     *
     * @return string 
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobile_phone_number;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cv
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

    /**
     * Set experience
     *
     * @param string $experience
     * @return Cv
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    
        return $this;
    }

    /**
     * Get experience
     *
     * @return string 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set formation
     *
     * @param string $formation
     * @return Cv
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
    
        return $this;
    }

    /**
     * Get formation
     *
     * @return string 
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Cv
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set profile
     *
     * @param string $profile
     * @return Cv
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    
        return $this;
    }

    /**
     * Get profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set availability
     *
     * @param string $availability
     * @return Cv
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    
        return $this;
    }

    /**
     * Get availability
     *
     * @return string 
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set mobility
     *
     * @param string $mobility
     * @return Cv
     */
    public function setMobility($mobility)
    {
        $this->mobility = $mobility;
    
        return $this;
    }

    /**
     * Get mobility
     *
     * @return string 
     */
    public function getMobility()
    {
        return $this->mobility;
    }

    /**
     * Set skills
     *
     * @param string $skills
     * @return Cv
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
    
        return $this;
    }

    /**
     * Get skills
     *
     * @return string 
     */
    public function getSkills()
    {
        return $this->skills;
    }
}
