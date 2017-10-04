<?php
namespace XmlResourceRetrieverTests;

use XmlResourceRetriever\AbstractRetriever;

class CommonRetriever extends AbstractRetriever
{
    protected function searchNamespace(): string
    {
        return 'http://example.com/ns';
    }

    protected function searchElements(): array
    {
        return [
            ['element' => 'resource', 'attribute' => 'href'],
        ];
    }
}
