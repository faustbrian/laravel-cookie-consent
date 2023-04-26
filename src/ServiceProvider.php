<?php

declare(strict_types=1);

namespace BombenProdukt\CookieConsent;

use Livewire\Livewire;
use BombenProdukt\CookieConsent\Http\Livewire\CookieConsentDialog;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        Livewire::component('cookie-consent', CookieConsentDialog::class);
    }
}
