<?php

$finder = \PhpCsFixer\Finder::create()
    ->in([
        __DIR__.'/app',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new \PhpCsFixer\Config())
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        '@Symfony' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
        ],
        'phpdoc_no_empty_return' => false,
        'phpdoc_no_package' => false,
        'no_superfluous_phpdoc_tags' => false,
        'single_trait_insert_per_statement' => false,
        'single_line_throw' => false,
        'phpdoc_to_comment' => [
            'ignored_tags' => [
                'var',
                'deprecated',
            ],
        ],
    ])->setFinder($finder);
