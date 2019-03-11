<?php

declare(strict_types=1);

namespace Depot\Contract;

final class Contract
{
    /**
     * @var string
     */
    private $contractName;

    /**
     * @var string
     */
    private $className;

    public function __construct(string $contractName, string $className)
    {
        $this->contractName = $contractName;
        $this->className = $className;
    }

    public function getContractName(): string
    {
        return $this->contractName;
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    public function __toString(): string
    {
        return '['.$this->contractName.']['.$this->className.']';
    }
}
