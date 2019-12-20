<?php

declare(strict_types=1);

namespace DigitalFactory\SyliusProductTabErrorMarkPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader;

final class SyliusProductTabErrorMarkPluginExtension extends  Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $config, ContainerBuilder $container): void
{
    $config = $this->processConfiguration($this->getConfiguration([], $container), $config);
    $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

    $loader->load('services.yml');
}
}
