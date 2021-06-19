<?php

namespace Nevadskiy\PhpCsFixerRules;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class Style
{
    public static function new()
    {
        return (new static);
    }

    public function app(Finder $finder, array $rules = []): Config
    {
        return $this->config($finder,  array_merge(require __DIR__.'./../rules/app.php', $rules));
    }

    public function lib(Finder $finder, array $rules = []): Config
    {
        return $this->config($finder,  array_merge(require __DIR__.'./../rules/lib.php', $rules));
    }

    protected function config(Finder $finder, array $rules)
    {
        return (new Config())
            ->setRules($rules)
            ->setRiskyAllowed(true)
            ->setFinder($finder);
    }
}
