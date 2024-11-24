<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Feature\Http\Livewire;

use BaseCodeOy\CookieConsent\Http\Livewire\CookieConsentDialog;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Livewire\Livewire;

it('should render with the "bottom-left" style', function (): void {
    $component = Livewire::test(CookieConsentDialog::class);
    $component->set('style', 'bottom-left');

    $component->assertStatus(200);
    $component->assertSee(trans('cookie-consent::content.message'));
    $component->assertSee(trans('cookie-consent::content.accept'));
    $component->assertSee(trans('cookie-consent::content.reject'));
});

it('should render with the "bottom-right" style', function (): void {
    $component = Livewire::test(CookieConsentDialog::class);
    $component->set('style', 'bottom-right');

    $component->assertStatus(200);
    $component->assertSee(trans('cookie-consent::content.message'));
    $component->assertSee(trans('cookie-consent::content.accept'));
    $component->assertSee(trans('cookie-consent::content.reject'));
});

it('should render with the "centered" style', function (): void {
    $component = Livewire::test(CookieConsentDialog::class);
    $component->set('style', 'centered');

    $component->assertStatus(200);
    $component->assertSee(trans('cookie-consent::content.message'));
    $component->assertSee(trans('cookie-consent::content.accept'));
    $component->assertSee(trans('cookie-consent::content.reject'));
});

it('should render with the "full-width" style', function (): void {
    $component = Livewire::test(CookieConsentDialog::class);
    $component->set('style', 'full-width');

    $component->assertStatus(200);
    $component->assertSee(trans('cookie-consent::content.message'));
    $component->assertSee(trans('cookie-consent::content.accept'));
    $component->assertSee(trans('cookie-consent::content.reject'));
});

it('should accept the terms', function (): void {
    Cookie::shouldReceive('queue')
        ->once()
        ->with(
            Config::get('cookie-consent.cookie_name'),
            '1',
            Config::get('cookie-consent.accept_cookie_lifetime'),
        );

    $component = Livewire::test(CookieConsentDialog::class);
    $component->call('acceptTerms');

    $component->assertStatus(200);
});

it('should reject the terms', function (): void {
    Cookie::shouldReceive('queue')
        ->once()
        ->with(
            Config::get('cookie-consent.cookie_name'),
            '0',
            Config::get('cookie-consent.reject_cookie_lifetime'),
        );

    $component = Livewire::test(CookieConsentDialog::class);
    $component->call('rejectTerms');

    $component->assertStatus(200);
});
