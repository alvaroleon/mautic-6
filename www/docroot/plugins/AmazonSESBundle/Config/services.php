<?php

declare(strict_types=1);

use Mautic\CoreBundle\DependencyInjection\MauticCoreExtension;
use MauticPlugin\AmazonSESBundle\Transport\MauticSesTransportFactory;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $configurator): void {
    $services = $configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    $excludes = [
        'Services',
    ];

    $services->load('MauticPlugin\\AmazonSESBundle\\', '../')
        ->exclude('../{' . implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, $excludes)) . '}');

    // Registrar nuestro factory personalizado de SES con prioridad alta
    // para que reemplace el factory estándar de Symfony
    $services->set(MauticSesTransportFactory::class)
        ->tag('mailer.transport_factory', ['priority' => 100]);
};
