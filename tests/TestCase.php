<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests;

use BaseCodeOy\Crate\TestBench\AbstractPackageTestCase;

/**
 * @internal
 */
abstract class TestCase extends AbstractPackageTestCase
{
    #[\Override()]
    protected function getRequiredServiceProviders(): array
    {
        return [
            \Livewire\LivewireServiceProvider::class,
        ];
    }

    #[\Override()]
    protected function getServiceProviderClass(): string
    {
        return \BaseCodeOy\CookieConsent\ServiceProvider::class;
    }
}
