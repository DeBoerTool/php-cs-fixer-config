<?php

namespace Dbt\PhpCsFixerConfig;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

final class Loader
{
    /** @var bool */
    private $allowRisky = true;

    /** @var \PhpCsFixer\Finder */
    private $finder;

    /** @var array */
    private $rules;

    public function __construct (Finder $finder, array $rules = [])
    {
        $this->finder = $finder;
        $this->rules = $rules;
    }

    public static function new (Finder $finder, array $rules = []): self
    {
        return new self($finder, $rules);
    }

    public function getConfig (): Config
    {
        return Config::create()
            ->setLineEnding(PHP_EOL)
            ->setFinder($this->getFinder())
            ->setRiskyAllowed($this->getAllowRisky())
            ->setRules($this->getRules());
    }

    public function allowRisky (): void
    {
        $this->allowRisky = true;
    }

    public function disallowRisky (): void
    {
        $this->allowRisky = false;
    }

    private function getAllowRisky (): bool
    {
        return $this->allowRisky;
    }

    private function getFinder (): Finder
    {
        return $this->finder;
    }

    private function getRules (): array
    {
        $rulesFromFile = require __DIR__ . '/rules.php';

        return array_merge($rulesFromFile, $this->rules);
    }
}
