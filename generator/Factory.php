<?php

namespace Thiagorb\Codeship\Generator;

use Thiagorb\ServiceGenerator\Targets\HttpClient\ContractHandler;
use Thiagorb\Codeship\Services\Organizations;
use Thiagorb\Codeship\Contracts\AccountOrganizations;
use Thiagorb\ServiceGenerator\Targets\HttpClient\ContractHandlers\DefaultContract;

class Factory extends \Thiagorb\ServiceGenerator\Targets\HttpClient\Factory
{
    public function makeContractHandler(\Thiagorb\ServiceGenerator\Targets\HttpClient\ContractContext $contractContext): \Thiagorb\ServiceGenerator\Targets\HttpClient\ContractHandler
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
