<?php

namespace Codecept\_support\PageObject;

use AcceptanceTester;

abstract class BasePageObject
{
    protected string $url;
    protected AcceptanceTester $I;

    public function __construct(AcceptanceTester $I)
    {
        $this->I = $I;
    }

    abstract public function goPage(): void;
}