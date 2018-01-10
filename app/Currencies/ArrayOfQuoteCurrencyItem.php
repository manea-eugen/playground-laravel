<?php

namespace App\Currencies;

class ArrayOfQuoteCurrencyItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteCurrencyItem[] $QuoteCurrencyItem
     */
    protected $QuoteCurrencyItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteCurrencyItem[]
     */
    public function getQuoteCurrencyItem()
    {
      return $this->QuoteCurrencyItem;
    }

    /**
     * @param QuoteCurrencyItem[] $QuoteCurrencyItem
     * @return \App\Currencies\ArrayOfQuoteCurrencyItem
     */
    public function setQuoteCurrencyItem(array $QuoteCurrencyItem = null)
    {
      $this->QuoteCurrencyItem = $QuoteCurrencyItem;
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
      return isset($this->QuoteCurrencyItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteCurrencyItem
     */
    public function offsetGet($offset)
    {
      return $this->QuoteCurrencyItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteCurrencyItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteCurrencyItem[] = $value;
      } else {
        $this->QuoteCurrencyItem[$offset] = $value;
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
      unset($this->QuoteCurrencyItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteCurrencyItem Return the current element
     */
    public function current()
    {
      return current($this->QuoteCurrencyItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteCurrencyItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteCurrencyItem);
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
      reset($this->QuoteCurrencyItem);
    }

    /**
     * Countable implementation
     *
     * @return QuoteCurrencyItem Return count of elements
     */
    public function count()
    {
      return count($this->QuoteCurrencyItem);
    }

}
