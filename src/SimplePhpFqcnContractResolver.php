<?php

declare(strict_types=1);

namespace Depot\Contract;

final class SimplePhpFqcnContractResolver implements ContractResolver
{
    public function resolveFromContractName($contractName): Contract
    {
        return new Contract($contractName, str_replace('.', '\\', $contractName));
    }

    public function resolveFromClassName($className): Contract
    {
        $className = trim($className, '\\');

        return new Contract(str_replace('\\', '.', $className), $className);
    }

    public function resolveFromObject($object = null): ?Contract
    {
        if (is_null($object)) {
            return null;
        }

        return $this->resolveFromClassName(get_class($object));
    }
}
