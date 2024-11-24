<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\CookieConsent;

use BaseCodeOy\CookieConsent\Http\Livewire\CookieConsentDialog;
use BaseCodeOy\PackagePowerPack\Package\AbstractServiceProvider;
use Livewire\Livewire;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        Livewire::component('cookie-consent', CookieConsentDialog::class);
    }
}
