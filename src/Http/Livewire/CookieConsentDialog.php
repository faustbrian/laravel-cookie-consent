<?php

declare(strict_types=1);

namespace BaseCodeOy\CookieConsent\Http\Livewire;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;
use Livewire\Component;

final class CookieConsentDialog extends Component
{
    public string $style = 'bottom-right';

    public bool $requestConsent;

    public function mount(): void
    {
        $this->requestConsent = Cookie::get(Config::get('cookie-consent.cookie_name'), '0') === '0';
    }

    public function acceptTerms(): void
    {
        Cookie::queue(
            Config::get('cookie-consent.cookie_name'),
            '1',
            Config::get('cookie-consent.accept_cookie_lifetime'),
        );

        $this->requestConsent = false;
    }

    public function rejectTerms(): void
    {
        Cookie::queue(
            Config::get('cookie-consent.cookie_name'),
            '0',
            Config::get('cookie-consent.reject_cookie_lifetime'),
        );

        $this->requestConsent = false;
    }

    public function render(): View
    {
        return view('cookie-consent::dialog');
    }
}
