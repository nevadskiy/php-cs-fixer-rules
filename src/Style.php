<?php

namespace Nevadskiy\PhpCsFixerRules;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class Style
{
    public static function apply(Finder $finder, array $rules = []): Config
    {
        return self::config($finder,  array_merge(require __DIR__ . './../rules.php', $rules));
    }

    protected static function config(Finder $finder, array $rules)
    {
        return (new Config())
            ->setRules($rules)
            ->setRiskyAllowed(true)
            ->setFinder($finder);
    }
}
