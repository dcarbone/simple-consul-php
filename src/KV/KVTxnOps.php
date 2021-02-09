<?php declare(strict_types=1);

namespace DCarbone\PHPConsulAPI\KV;

/*
   Copyright 2016-2021 Daniel Carbone (daniel.p.carbone@gmail.com)

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
use DCarbone\PHPConsulAPI\AbstractModels;

/**
 * Class KVTxnOps
 */
class KVTxnOps extends AbstractModels
{
    /** @var string */
    protected string $containedClass = KVTxnOp::class;

    /**
     * @param array $data
     * @return \DCarbone\PHPConsulAPI\AbstractModel
     */
    protected function newChild(array $data): AbstractModel
    {
        return new KVTxnOp($data);
    }
}
