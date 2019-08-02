<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $lastName;

    /**
     * @ORM\Column(type="integer")
     */
    private $telNumber;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $street;

    /**
     * @ORM\Column(type="integer")
     */
    private $homeNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $comment;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $feedbackDataId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getTelNumber(): ?int
    {
        return $this->telNumber;
    }

    public function setTelNumber(int $telNumber): self
    {
        $this->telNumber = $telNumber;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getHomeNumber(): ?int
    {
        return $this->homeNumber;
    }

    public function setHomeNumber(int $homeNumber): self
    {
        $this->homeNumber = $homeNumber;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getFeedbackDataId(): ?string
    {
        return $this->feedbackDataId;
    }

    public function setFeedbackDataId(string $feedbackDataId): self
    {
        $this->feedbackDataId = $feedbackDataId;

        return $this;
    }
}
