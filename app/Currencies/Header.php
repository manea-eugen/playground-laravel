<?php

namespace App\Currencies;

class Header
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $Tracer
     */
    protected $Tracer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \App\Currencies\Header
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \App\Currencies\Header
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getTracer()
    {
      return $this->Tracer;
    }

    /**
     * @param string $Tracer
     * @return \App\Currencies\Header
     */
    public function setTracer($Tracer)
    {
      $this->Tracer = $Tracer;
      return $this;
    }

}
