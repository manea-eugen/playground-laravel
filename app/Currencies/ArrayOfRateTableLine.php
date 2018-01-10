<?php

namespace App\Currencies;

class ArrayOfRateTableLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RateTableLine[] $RateTableLine
     */
    protected $RateTableLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RateTableLine[]
     */
    public function getRateTableLine()
    {
      return $this->RateTableLine;
    }

    /**
     * @param RateTableLine[] $RateTableLine
     * @return \App\Currencies\ArrayOfRateTableLine
     */
    public function setRateTableLine(array $RateTableLine = null)
    {
      $this->RateTableLine = $RateTableLine;
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
      return isset($this->RateTableLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RateTableLine
     */
    public function offsetGet($offset)
    {
      return $this->RateTableLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RateTableLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RateTableLine[] = $value;
      } else {
        $this->RateTableLine[$offset] = $value;
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
      unset($this->RateTableLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RateTableLine Return the current element
     */
    public function current()
    {
      return current($this->RateTableLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RateTableLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RateTableLine);
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
      reset($this->RateTableLine);
    }

    /**
     * Countable implementation
     *
     * @return RateTableLine Return count of elements
     */
    public function count()
    {
      return count($this->RateTableLine);
    }

}
