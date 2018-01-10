<?php

namespace App\Currencies;

class ArrayOfChartBar implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChartBar[] $ChartBar
     */
    protected $ChartBar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChartBar[]
     */
    public function getChartBar()
    {
      return $this->ChartBar;
    }

    /**
     * @param ChartBar[] $ChartBar
     * @return \App\Currencies\ArrayOfChartBar
     */
    public function setChartBar(array $ChartBar = null)
    {
      $this->ChartBar = $ChartBar;
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
      return isset($this->ChartBar[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChartBar
     */
    public function offsetGet($offset)
    {
      return $this->ChartBar[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChartBar $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ChartBar[] = $value;
      } else {
        $this->ChartBar[$offset] = $value;
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
      unset($this->ChartBar[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChartBar Return the current element
     */
    public function current()
    {
      return current($this->ChartBar);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChartBar);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChartBar);
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
      reset($this->ChartBar);
    }

    /**
     * Countable implementation
     *
     * @return ChartBar Return count of elements
     */
    public function count()
    {
      return count($this->ChartBar);
    }

}
