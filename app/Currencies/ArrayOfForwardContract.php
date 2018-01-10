<?php

namespace App\Currencies;

class ArrayOfForwardContract implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ForwardContract[] $ForwardContract
     */
    protected $ForwardContract = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ForwardContract[]
     */
    public function getForwardContract()
    {
      return $this->ForwardContract;
    }

    /**
     * @param ForwardContract[] $ForwardContract
     * @return \App\Currencies\ArrayOfForwardContract
     */
    public function setForwardContract(array $ForwardContract = null)
    {
      $this->ForwardContract = $ForwardContract;
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
      return isset($this->ForwardContract[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ForwardContract
     */
    public function offsetGet($offset)
    {
      return $this->ForwardContract[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ForwardContract $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ForwardContract[] = $value;
      } else {
        $this->ForwardContract[$offset] = $value;
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
      unset($this->ForwardContract[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ForwardContract Return the current element
     */
    public function current()
    {
      return current($this->ForwardContract);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ForwardContract);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ForwardContract);
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
      reset($this->ForwardContract);
    }

    /**
     * Countable implementation
     *
     * @return ForwardContract Return count of elements
     */
    public function count()
    {
      return count($this->ForwardContract);
    }

}
