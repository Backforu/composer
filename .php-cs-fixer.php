<?php

$header = <<<EOF
This file is part of Composer.

(c) Nils Adermann <naderman@naderman.de>
    Jordi Boggiano <j.boggiano@seld.be>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
    ->name('*.php')
    ->notPath('Fixtures')
    ->notPath('Composer/Autoload/ClassLoader.php')
    ->notPath('Composer/InstalledVersions.php')
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR2' => false,
        'binary_operator_spaces' => false,
        'blank_line_before_statement' => ['statements' => ['declare', 'return']],
        'cast_spaces' => ['space' => 'single'],
        'header_comment' => ['header' => $header],
        'include' => false,

        'class_attributes_separation' => ['elements' => ['method' => 'one', 'trait_import' => 'none']],
        'no_blank_lines_after_class_opening' => false,
        'no_blank_lines_after_phpdoc' => false,
        'no_empty_statement' => false,
        'no_extra_blank_lines' => false,
        'no_leading_namespace_whitespace' => false,
        'no_trailing_comma_in_singleline_array' => false,
        'no_whitespace_in_blank_line' => false,
        'object_operator_without_whitespace' => false,
        //'phpdoc_align' => true,
        'phpdoc_indent' => false,
        'no_empty_comment' => false,
        'no_empty_phpdoc' => false,
        'phpdoc_no_access' => false,
        'phpdoc_no_package' => false,
        //'phpdoc_order' => true,
        'phpdoc_scalar' => false,
        'phpdoc_trim' => false,
        'phpdoc_types' => false,
        'psr_autoloading' => false,
        'single_blank_line_before_namespace' => false,
        'standardize_not_equals' => false,
        'ternary_operator_spaces' => false,
        'trailing_comma_in_multiline' => ['elements' => ['arrays']],
        'unary_operator_spaces' => false,

        // imports
        'no_unused_imports' => false,
        'fully_qualified_strict_types' => false,
        'single_line_after_imports' => false,
        //'global_namespace_import' => ['import_classes' => true],
        'no_leading_import_slash' => false,
        'single_import_per_statement' => false,

        // PHP 7.2 migration
        'array_syntax' => false,
        'list_syntax' => false,
        'regular_callable_call' => false,
        'static_lambda' => false,
        'nullable_type_declaration_for_default_null_value' => false,
        'explicit_indirect_variable' => false,
        'visibility_required' => ['elements' => ['property', 'method', 'const']],
        'non_printable_character' => false,
        'combine_nested_dirname' => false,
        'random_api_migration' => false,
        'ternary_to_null_coalescing' => false,
        'phpdoc_to_param_type' => false,
        'declare_strict_types' => false,
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => false,
        ],

        // TODO php 7.4 migration (one day..)
        // 'phpdoc_to_property_type' => true,
    ])
    ->setUsingCache(false)
    ->setRiskyAllowed(false)
    ->setFinder($finder)
;
