<?php declare(strict_types=1);

namespace DCarbone\PHPConsulAPI\Agent;

/*
   Copyright 2016-2020 Daniel Carbone (daniel.p.carbone@gmail.com)

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

use DCarbone\PHPConsulAPI\AbstractModel;
use DCarbone\PHPConsulAPI\HasSettableStringTags;
use DCarbone\PHPConsulAPI\HasStringTags;
use DCarbone\PHPConsulAPI\Hydration;

/**
 * Class AgentServiceRegistration
 * @package DCarbone\PHPConsulAPI\Agent
 */
class AgentServiceRegistration extends AbstractModel
{
    private const FIELD_CHECK  = 'Check';
    private const FIELD_CHECKS = 'Checks';

    use HasSettableStringTags;
    use HasStringTags;

    /** @var string */
    public string $ID = '';
    /** @var string */
    public string $Name = '';
    /** @var int */
    public int $Port = 0;
    /** @var string */
    public string $Address = '';
    /** @var bool */
    public bool $EnableTagOverride = false;
    /** @var array */
    public array $Meta = [];
    /** @var \DCarbone\PHPConsulAPI\Agent\AgentServiceCheck|null */
    public ?AgentServiceCheck $Check = null;
    /** @var \DCarbone\PHPConsulAPI\Agent\AgentServiceCheck[] */
    public array $Checks = [];

    /** @var array[] */
    protected static array $fields = [
        self::FIELD_CHECK => [
            Hydration::FIELD_TYPE => Hydration::OBJECT,
            Hydration::FIELD_CLASS => AgentServiceCheck::class,
        ],
        self::FIELD_CHECKS => [
            Hydration::FIELD_TYPE => Hydration::ARRAY,
            Hydration::FIELD_CLASS => AgentServiceCheck::class,
            Hydration::FIELD_ARRAY_TYPE => Hydration::OBJECT,
        ],
    ];

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @param string $id
     * @return AgentServiceRegistration
     */
    public function setID(string $id): AgentServiceRegistration
    {
        $this->ID = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $name
     * @return AgentServiceRegistration
     */
    public function setName(string $name): AgentServiceRegistration
    {
        $this->Name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->Port;
    }

    /**
     * @param int $port
     * @return AgentServiceRegistration
     */
    public function setPort(int $port): AgentServiceRegistration
    {
        $this->Port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->Address;
    }

    /**
     * @param string $address
     * @return AgentServiceRegistration
     */
    public function setAddress(string $address): AgentServiceRegistration
    {
        $this->Address = $address;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnableTagOverride(): bool
    {
        return $this->EnableTagOverride;
    }

    /**
     * @param bool $enableTagOverride
     * @return AgentServiceRegistration
     */
    public function setEnableTagOverride(bool $enableTagOverride): AgentServiceRegistration
    {
        $this->EnableTagOverride = $enableTagOverride;
        return $this;
    }

    /**
     * @return array
     */
    public function getMeta(): array
    {
        return $this->Meta;
    }

    /**
     * @param array $meta
     * @return AgentServiceRegistration
     */
    public function setMeta(array $meta): AgentServiceRegistration
    {
        $this->Meta = $meta;
        return $this;
    }

    /**
     * @return \DCarbone\PHPConsulAPI\Agent\AgentServiceCheck|null
     */
    public function getCheck(): ?AgentServiceCheck
    {
        return $this->Check;
    }

    /**
     * @param \DCarbone\PHPConsulAPI\Agent\AgentServiceCheck|null $check
     * @return AgentServiceRegistration
     */
    public function setCheck(?AgentServiceCheck $check): AgentServiceRegistration
    {
        $this->Check = $check;
        return $this;
    }

    /**
     * @return \DCarbone\PHPConsulAPI\Agent\AgentServiceCheck[]
     */
    public function getChecks(): array
    {
        return $this->Checks;
    }

    /**
     * @param \DCarbone\PHPConsulAPI\Agent\AgentServiceCheck[] $checks
     * @return AgentServiceRegistration
     */
    public function setChecks(array $checks): AgentServiceRegistration
    {
        $this->Checks = $checks;
        return $this;
    }

    /**
     * @param \DCarbone\PHPConsulAPI\Agent\AgentServiceCheck $check
     * @return AgentServiceRegistration
     */
    public function addCheck(AgentServiceCheck $check): AgentServiceRegistration
    {
        $this->Checks[] = $check;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->Name;
    }
}