<?php

declare(strict_types=1);

namespace Depot\Contract;

interface ContractResolver
{
    /**
     * @param $contractName
     *
     * @return Contract
     */
    public function resolveFromContractName($contractName): Contract;

    /**
     * @param $className
     *
     * @return Contract
     */
    public function resolveFromClassName($className): Contract;

    /**
     * @param $object
     *
     * @return Contract|null
     */
    public function resolveFromObject($object = null): ?Contract;
}
