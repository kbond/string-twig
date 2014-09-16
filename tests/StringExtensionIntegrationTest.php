<?php

namespace Zenstruck\String\Bridge\Twig;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class StringExtensionIntegrationTest extends \Twig_Test_IntegrationTestCase
{
    protected function getExtensions()
    {
        return array(
            new StringExtension()
        );
    }

    protected function getFixturesDir()
    {
        return __DIR__.'/fixtures';
    }
}
