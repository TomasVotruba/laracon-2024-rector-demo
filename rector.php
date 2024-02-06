<?php

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    // example 1 - upgrade PHP
    // version based on composer or specific arg
    //->withPhpSets()

    // example 2 - @todo switch local PHP to 8.0
    // ->withPreparedSets(typeDeclarations: true)
    // new for step by step integration
    //->withTypeCoverageLevel(20)

    // example 3 - removing dead code
    // remove ValueObject unused property
    // ->withDeadCodeLevel(40)

    // example 4 - dispatch func call rename
    // create custom rule + register here
     ->withRules([
         \Utils\Rector\Rector\DispatchNowToSyncRector::class,
     ])

    // @todo switch local PHP to 8.2
    // example 5 - make use of community packages
    // ->withSets([
    //     \RectorLaravel\Set\LaravelSetList::LARAVEL_100,
    // ])
;
