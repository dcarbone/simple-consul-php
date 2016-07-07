<?php namespace DCarbone\PHPConsulAPI;

/*
   Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

/**
 * Class AbstractDefinedCollection
 * @package DCarbone\PHPConsulAPI\Base
 */
abstract class AbstractDefinedStrictCollection extends AbstractDefinedCollection
{
    /**
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset An offset to check for.
     * @return boolean true on success or false on failure.
     */
    public function offsetExists($offset)
    {
        return isset($this->_definition[$offset]) || array_key_exists($offset, $this->_definition);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset The offset to retrieve.
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {
        if (isset($this[$offset]))
            return $this->{sprintf('get%s', $offset)}();

        throw $this->_createOutOfBoundsException($offset);
    }

    /**
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset The offset to assign the value to.
     * @param mixed $value The value to set.
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (isset($this[$offset]))
        {
            if (null === $value)
                $this->_storage[$offset] = null;
            else
                $this->{sprintf('set%s', $offset)}($value);
        }
        else
        {
            throw $this->_createOutOfBoundsException($offset);
        }
    }

    /**
     * @param mixed $key
     * @return \OutOfBoundsException
     */
    protected function _createOutOfBoundsException($key)
    {
        $matches = $this->_findKeyMatches($key);
        if (0 === count($matches))
        {
            return new \OutOfBoundsException(sprintf(
                '%s - "%s" is not a property on this object.',
                get_class($this),
                is_string($key) ? $key : gettype($key)
            ));
        }

        return new \OutOfBoundsException(sprintf(
            '%s - "%s" is not a property on this object. Did you mean one of the following: ["%s"]?',
            get_class($this),
            $key,
            implode('", "', $matches)
        ));
    }
}