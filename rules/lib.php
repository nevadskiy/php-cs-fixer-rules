<?php

$appRules = require __DIR__.'/app.php';

return array_merge($appRules, [
    'final_class' => false,
    'final_internal_class' => false,
    'declare_strict_types' => false,
]);
