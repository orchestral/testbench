<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->files()
    ->in(__DIR__.'/src')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers([
        '-psr0',
        'concat_without_spaces',
        'duplicate_semicolon',
        'empty_return',
        'extra_empty_lines',
        'unused_use',
        'single_array_no_trailing_comma',
        'remove_leading_slash_use',
        'remove_lines_between_uses',
        'short_array_syntax',
        'spaces_cast',
        'whitespacy_lines',
    ])
    ->finder($finder);
