<?php

namespace Sonata\SeoBundle\Tests\DependencyInjection;

use Sonata\SeoBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Yaml\Yaml;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{

    private function getDefaultConfiguration()
    {
        return array(
            'encoding' => 'UTF-8',
            'page' => array(
                'default' => 'sonata.seo.page.default',
                'head' => array(),
                'metas' => array(),
                'separator' => ' - ',
                'title' => 'Sonata Project',
            ),
            'sitemap' => array(
                'doctrine_orm' => array(),
                'services' => array(),
            ),
        );
    }

    private function processConfiguration(array $configs)
    {
        $configuration = new Configuration();
        $processor = new Processor();

        return $processor->processConfiguration($configuration, $configs);
    }

    public function testDefaultConfiguration()
    {
        $config = $this->processConfiguration(array(array()));

        $expected = $this->getDefaultConfiguration();

        $this->assertEquals($expected, $config);
    }

    public function testKeysAreNotNormalized()
    {
        $values = array(
            'page' => array(
                'head' => array('data-example' => 'abc-123'),
                'metas' => array(
                    'http-equiv' => array(
                        'Content-Type' => 'text/html; charset=utf-8',
                    ),
                ),
            ),
        );

        $config = $this->processConfiguration(array($values));

        $expected = array_merge_recursive(
            $this->getDefaultConfiguration(),
            $values
        );

        $this->assertEquals($expected, $config);
    }

    public function testWithYamlConfig()
    {
        $values = Yaml::parse(__DIR__ . '/data/config.yml', true);

        $config = $this->processConfiguration(array($values));

        $expected = array_merge_recursive(
            $this->getDefaultConfiguration(),
            $values
        );

        $this->assertEquals($expected, $config);

        $this->assertEquals('website', $config['page']['metas']['property']['og:type']);

    }

}
