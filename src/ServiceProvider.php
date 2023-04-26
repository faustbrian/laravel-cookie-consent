<?php

declare(strict_types=1);

namespace BombenProdukt\CookieConsent;

use BombenProdukt\CookieConsent\Http\Livewire\CookieConsentDialog;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;
use Livewire\Livewire;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        Livewire::component('cookie-consent', CookieConsentDialog::class);
    }
}
