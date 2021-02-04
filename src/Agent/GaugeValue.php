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

/**
 * Class GaugeValue
 * @package DCarbone\PHPConsulAPI\Agent
 */
class GaugeValue extends AbstractModel
{
    /** @var string */
    public string $Name = '';
    /** @var float */
    public float $Value = 0.0;
    /** @var array */
    public array $Labels = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $name
     * @return GaugeValue
     */
    public function setName(string $name): GaugeValue
    {
        $this->Name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->Value;
    }

    /**
     * @param float $value
     * @return GaugeValue
     */
    public function setValue(float $value): GaugeValue
    {
        $this->Value = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getLabels(): array
    {
        return $this->Labels;
    }

    /**
     * @param array $labels
     * @return GaugeValue
     */
    public function setLabels(array $labels): GaugeValue
    {
        $this->Labels = $labels;
        return $this;
    }
}