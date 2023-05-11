<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
$containerBuilder
    ->register('stringLength', 'ArrayGenerator')
    ->addArgument('%stringLength%')
    ->addArgument('%arrayLength%');
$containerBuilder->setParameter('stringLength', 7);
$containerBuilder->setParameter('arrayLength', 5);

$containerBuilder = new ContainerBuilder();
$containerBuilder
    ->register('stringLength', 'StringGenerator')
    ->addArgument('%stringLength%');
$containerBuilder->setParameter('stringLength', 7);