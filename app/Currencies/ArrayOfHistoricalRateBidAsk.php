<?php

namespace App\Currencies;

class ArrayOfHistoricalRateBidAsk implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var HistoricalRateBidAsk[] $HistoricalRateBidAsk
     */
    protected $HistoricalRateBidAsk = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HistoricalRateBidAsk[]
     */
    public function getHistoricalRateBidAsk()
    {
      return $this->HistoricalRateBidAsk;
    }

    /**
     * @param HistoricalRateBidAsk[] $HistoricalRateBidAsk
     * @return \App\Currencies\ArrayOfHistoricalRateBidAsk
     */
    public function setHistoricalRateBidAsk(array $HistoricalRateBidAsk = null)
    {
      $this->HistoricalRateBidAsk = $HistoricalRateBidAsk;
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
      return isset($this->HistoricalRateBidAsk[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return HistoricalRateBidAsk
     */
    public function offsetGet($offset)
    {
      return $this->HistoricalRateBidAsk[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param HistoricalRateBidAsk $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HistoricalRateBidAsk[] = $value;
      } else {
        $this->HistoricalRateBidAsk[$offset] = $value;
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
      unset($this->HistoricalRateBidAsk[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return HistoricalRateBidAsk Return the current element
     */
    public function current()
    {
      return current($this->HistoricalRateBidAsk);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HistoricalRateBidAsk);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HistoricalRateBidAsk);
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
      reset($this->HistoricalRateBidAsk);
    }

    /**
     * Countable implementation
     *
     * @return HistoricalRateBidAsk Return count of elements
     */
    public function count()
    {
      return count($this->HistoricalRateBidAsk);
    }

}
