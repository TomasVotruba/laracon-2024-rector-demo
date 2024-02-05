<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    // example 1 - upgrade PHP
    // version based on composer or specific arg
    ->withPhpSets()

    // example 2 - @todo switch local PHP to 8.0

    // ->withPreparedSets(typeDeclarations: true)
    // new for step by step integration
    // ->withTypeCoverageLevel(25)

    // example 3 - removing dead code
    // remove ValueObject unused property
    ->withDeadCodeLevel(35)
;
