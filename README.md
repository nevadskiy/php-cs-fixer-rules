# PHP CS Fixer rules

Made according to the guide: https://laravel-news.com/sharing-php-cs-fixer-rules-across-projects-and-teams


## Installation

1. Register the package repository

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/nevadskiy/php-cs-fixer-rules.git"
    }
]
```


2. Require package

```bash
composer require nevadskiy/php-cs-fixer-rules:dev-master --dev
```

3. Add to .php-cs-fixer.dist.php the following code

```
<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__)
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return Nevadskiy\PhpCsFixerRules\Style::new()->lib($finder);

```
