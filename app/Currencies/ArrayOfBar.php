<?php

namespace App\Currencies;

class ArrayOfBar implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Bar[] $Bar
     */
    protected $Bar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Bar[]
     */
    public function getBar()
    {
      return $this->Bar;
    }

    /**
     * @param Bar[] $Bar
     * @return \App\Currencies\ArrayOfBar
     */
    public function setBar(array $Bar = null)
    {
      $this->Bar = $Bar;
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
      return isset($this->Bar[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Bar
     */
    public function offsetGet($offset)
    {
      return $this->Bar[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Bar $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Bar[] = $value;
      } else {
        $this->Bar[$offset] = $value;
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
      unset($this->Bar[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Bar Return the current element
     */
    public function current()
    {
      return current($this->Bar);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Bar);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Bar);
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
      reset($this->Bar);
    }

    /**
     * Countable implementation
     *
     * @return Bar Return count of elements
     */
    public function count()
    {
      return count($this->Bar);
    }

}
