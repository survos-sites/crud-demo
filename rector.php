<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\Symfony\Set\SensiolabsSetList;
return RectorConfig::configure()
    ->withPaths([
//        __DIR__ . '/config',
//        __DIR__ . '/public',
        __DIR__ . '/src',
    ])

    // uncomment to reach your current PHP version
     ->withPhpSets()
    ->withSets([
        DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
        SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES
    ])
    ->withRules([
        AddVoidReturnTypeWhereNoReturnRector::class,
    ]);
