<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CurrencyRequest;
/**
 * @ORM\Entity(repositoryClass="App\Repository\FinansbankRepository")
 */
class Finansbank
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $euro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gbp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsd(): ?string
    {
        return $this->usd;
    }

    public function setUsd(string $usd): self
    {
        $this->usd = $usd;

        return $this;
    }

    public function getEuro(): ?string
    {
        return $this->euro;
    }

    public function setEuro(string $euro): self
    {
        $this->euro = $euro;

        return $this;
    }

    public function getGbp(): ?string
    {
        return $this->gbp;
    }

    public function setGbp(string $gbp): self
    {
        $this->gbp = $gbp;

        return $this;
    }


}
