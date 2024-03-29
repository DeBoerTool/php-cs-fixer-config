<?php

$rulesets = [
    '@PhpCsFixer' => true,
    '@PSR12' => true,
];

$phpDocRules = [
    // Prefer compact DocBlocks if you need DocBlocks. They're already annoying
    // enough without taking up globs of vertical space.
    'phpdoc_separation' => false,
    // We don't want to turn PHPStorm @noinspection and so forth to get
    // magically transmuted into regular comments, because those annotations
    // are actually useful.
    'phpdoc_to_comment' => false,
    // Don't be fussy with DocBlock alignment.
    'phpdoc_align' => [
        'align' => 'left',
    ],
];

$otherRules = [
    'function_declaration' => false,
    'multiline_whitespace_before_semicolons' => false,
    'yoda_style' => false,
    // Prefer $var++ instead of ++$var
    'increment_style' => [
        'style' => 'post',
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

return array_merge($rulesets, $phpDocRules, $otherRules);
