<?php
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('vendor')
    ->exclude('view')
    ->exclude('config')
    ->exclude('assets')
    ->exclude('bin')
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/spec')
    ->notName('atlassian-ide-plugin.xml');
$config = Symfony\CS\Config\Config::create();
$config->fixers(Symfony\CS\FixerInterface::PSR2_LEVEL);
$config->finder($finder);
return $config;
