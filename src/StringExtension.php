<?php

namespace Zenstruck\String\Bridge\Twig;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class StringExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('remove_whitespace', 'remove_whitespace'),
            new \Twig_SimpleFilter('null_trim', 'null_trim'),
            new \Twig_SimpleFilter('truncate_word', 'truncate_word'),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'zenstruck_string';
    }
}
