<?php

namespace App\Currencies;

class ArrayOfOfficialCurrency implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OfficialCurrency[] $OfficialCurrency
     */
    protected $OfficialCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OfficialCurrency[]
     */
    public function getOfficialCurrency()
    {
      return $this->OfficialCurrency;
    }

    /**
     * @param OfficialCurrency[] $OfficialCurrency
     * @return \App\Currencies\ArrayOfOfficialCurrency
     */
    public function setOfficialCurrency(array $OfficialCurrency = null)
    {
      $this->OfficialCurrency = $OfficialCurrency;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->OfficialCurrency[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OfficialCurrency
     */
    public function offsetGet($offset)
    {
      return $this->OfficialCurrency[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OfficialCurrency $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OfficialCurrency[] = $value;
      } else {
        $this->OfficialCurrency[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OfficialCurrency[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OfficialCurrency Return the current element
     */
    public function current()
    {
      return current($this->OfficialCurrency);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OfficialCurrency);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OfficialCurrency);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->OfficialCurrency);
    }

    /**
     * Countable implementation
     *
     * @return OfficialCurrency Return count of elements
     */
    public function count()
    {
      return count($this->OfficialCurrency);
    }

}
