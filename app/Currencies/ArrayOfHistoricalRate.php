<?php

namespace App\Currencies;

class ArrayOfHistoricalRate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var HistoricalRate[] $HistoricalRate
     */
    protected $HistoricalRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HistoricalRate[]
     */
    public function getHistoricalRate()
    {
      return $this->HistoricalRate;
    }

    /**
     * @param HistoricalRate[] $HistoricalRate
     * @return \App\Currencies\ArrayOfHistoricalRate
     */
    public function setHistoricalRate(array $HistoricalRate = null)
    {
      $this->HistoricalRate = $HistoricalRate;
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
      return isset($this->HistoricalRate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return HistoricalRate
     */
    public function offsetGet($offset)
    {
      return $this->HistoricalRate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param HistoricalRate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HistoricalRate[] = $value;
      } else {
        $this->HistoricalRate[$offset] = $value;
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
      unset($this->HistoricalRate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return HistoricalRate Return the current element
     */
    public function current()
    {
      return current($this->HistoricalRate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HistoricalRate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HistoricalRate);
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
      reset($this->HistoricalRate);
    }

    /**
     * Countable implementation
     *
     * @return HistoricalRate Return count of elements
     */
    public function count()
    {
      return count($this->HistoricalRate);
    }

}
