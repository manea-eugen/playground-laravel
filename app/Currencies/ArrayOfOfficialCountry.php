<?php

namespace App\Currencies;

class ArrayOfOfficialCountry implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OfficialCountry[] $OfficialCountry
     */
    protected $OfficialCountry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OfficialCountry[]
     */
    public function getOfficialCountry()
    {
      return $this->OfficialCountry;
    }

    /**
     * @param OfficialCountry[] $OfficialCountry
     * @return \App\Currencies\ArrayOfOfficialCountry
     */
    public function setOfficialCountry(array $OfficialCountry = null)
    {
      $this->OfficialCountry = $OfficialCountry;
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
      return isset($this->OfficialCountry[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OfficialCountry
     */
    public function offsetGet($offset)
    {
      return $this->OfficialCountry[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OfficialCountry $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OfficialCountry[] = $value;
      } else {
        $this->OfficialCountry[$offset] = $value;
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
      unset($this->OfficialCountry[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OfficialCountry Return the current element
     */
    public function current()
    {
      return current($this->OfficialCountry);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OfficialCountry);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OfficialCountry);
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
      reset($this->OfficialCountry);
    }

    /**
     * Countable implementation
     *
     * @return OfficialCountry Return count of elements
     */
    public function count()
    {
      return count($this->OfficialCountry);
    }

}
