<?php

namespace App\Currencies;

class OfficialCurrency
{

    /**
     * @var string $Symbol
     */
    protected $Symbol = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param boolean $Active
     */
    public function __construct($Active)
    {
      $this->Active = $Active;
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
     * @return \App\Currencies\OfficialCurrency
     */
    public function setSymbol($Symbol)
    {
      $this->Symbol = $Symbol;
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
     * @return \App\Currencies\OfficialCurrency
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
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
     * @return \App\Currencies\OfficialCurrency
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
