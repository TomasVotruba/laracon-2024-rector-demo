<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    // version based on composer or specific arg
    // example 1
    ->withPhpSets()

    // example 2 - @todo switch local PHP to 8.0

    // ->withPreparedSets(typeDeclarations: true)
    // new for step by step integration
    // ->withTypeCoverageLevel(25)
;