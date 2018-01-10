<?php

namespace App\Currencies;

class Currency
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Plural
     */
    protected $Plural = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var boolean $Digital
     */
    protected $Digital = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var ArrayOfCountry $Countries
     */
    protected $Countries = null;

    /**
     * @param boolean $Active
     * @param boolean $Digital
     */
    public function __construct($Active, $Digital)
    {
      $this->Active = $Active;
      $this->Digital = $Digital;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->Symbol;
    }

    /**
     * @param string $Symbol
     * @return \App\Currencies\Currency
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\Currencies\Currency
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlural()
    {
      return $this->Plural;
    }

    /**
     * @param string $Plural
     * @return \App\Currencies\Currency
     */
    public function setPlural($Plural)
    {
      $this->Plural = $Plural;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \App\Currencies\Currency
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDigital()
    {
      return $this->Digital;
    }

    /**
     * @param boolean $Digital
     * @return \App\Currencies\Currency
     */
    public function setDigital($Digital)
    {
      $this->Digital = $Digital;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \App\Currencies\Currency
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return ArrayOfCountry
     */
    public function getCountries()
    {
      return $this->Countries;
    }

    /**
     * @param ArrayOfCountry $Countries
     * @return \App\Currencies\Currency
     */
    public function setCountries($Countries)
    {
      $this->Countries = $Countries;
      return $this;
    }

}
