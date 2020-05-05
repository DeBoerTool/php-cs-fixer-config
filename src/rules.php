<?php

return [
    '@PhpCsFixer' => true,
    '@PSR2' => true,
    'function_declaration' => false,
    'multiline_whitespace_before_semicolons' => false,
    // This shit, tho.
    'yoda_style' => false,
    // Prefer compact DocBlocks if you need DocBlocks.
    'phpdoc_separation' => false,
    // Prefer $var++ instead of ++$var
    'increment_style' => [
        'style' => 'post',
    ],
    // Don't be fussy with DocBlock alignment.
    'phpdoc_align' => [
        'align' => 'left',
    ],
    // Give concats a little space to breathe.
    'concat_space' => [
        'spacing' => 'one',
    ],
    // because_we_prefer_our_test_names_like_this.
    'php_unit_method_casing' => [
        'case' => 'snake_case',
    ],
];
