<?php namespace DCarbone\PHPConsulAPI\Session;

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

use DCarbone\PHPConsulAPI\AbstractObjectModel;

/**
 * Class SessionEntry
 * @package DCarbone\PHPConsulAPI\Session
 */
class SessionEntry extends AbstractObjectModel
{
    /** @var int */
    public $CreateIndex = 0;
    /** @var string */
    public $ID = '';
    /** @var string */
    public $Name = '';
    /** @var string */
    public $Node = '';
    /** @var string[] */
    public $Checks = array();
    /** @var int */
    public $LockDelay = 0;
    /** @var string */
    public $Behavior = '';
    /** @var string */
    public $TTL = '';
}