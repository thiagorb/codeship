<?php

namespace Codeship\Generator;

use ServiceGenerator\Targets\HttpClient\ContractHandler;
use Codeship\Services\Organizations;
use Codeship\Contracts\AccountOrganizations;
use ServiceGenerator\Targets\HttpClient\ContractHandlers\DefaultContract;

class Factory extends \ServiceGenerator\Targets\HttpClient\Factory
{
    public function makeContractHandler(\ServiceGenerator\Targets\HttpClient\ContractContext $contractContext): \ServiceGenerator\Targets\HttpClient\ContractHandler
    {

        if ($contractContext->getContract()->getFullClassName() !== AccountOrganizations::class) {
            return parent::makeContractHandler($contractContext);
        }

        return new class($this, $contractContext) extends DefaultContract implements ContractHandler
        {
            public function getMetaData(): array
            {
                return [
                    'implementation' => Organizations::class,
                ];
            }
        };
    }
}
