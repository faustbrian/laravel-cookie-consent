<?php

declare(strict_types=1);

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
