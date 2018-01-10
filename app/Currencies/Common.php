<?php

namespace App\Currencies;

class Common
{

    /**
     * @var OutcomeTypes $Outcome
     */
    protected $Outcome = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $Identity
     */
    protected $Identity = null;

    /**
     * @var float $Delay
     */
    protected $Delay = null;

    /**
     * @param OutcomeTypes $Outcome
     * @param float $Delay
     */
    public function __construct($Outcome, $Delay)
    {
      $this->Outcome = $Outcome;
      $this->Delay = $Delay;
    }

    /**
     * @return OutcomeTypes
     */
    public function getOutcome()
    {
      return $this->Outcome;
    }

    /**
     * @param OutcomeTypes $Outcome
     * @return \App\Currencies\Common
     */
    public function setOutcome($Outcome)
    {
      $this->Outcome = $Outcome;
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
     * @return \App\Currencies\Common
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentity()
    {
      return $this->Identity;
    }

    /**
     * @param string $Identity
     * @return \App\Currencies\Common
     */
    public function setIdentity($Identity)
    {
      $this->Identity = $Identity;
      return $this;
    }

    /**
     * @return float
     */
    public function getDelay()
    {
      return $this->Delay;
    }

    /**
     * @param float $Delay
     * @return \App\Currencies\Common
     */
    public function setDelay($Delay)
    {
      $this->Delay = $Delay;
      return $this;
    }

}
