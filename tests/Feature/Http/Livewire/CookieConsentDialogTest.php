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
    $testable = Livewire::test(CookieConsentDialog::class);
    $testable->set('style', 'bottom-left');

    $testable->assertStatus(200);
    $testable->assertSee(trans('cookie-consent::content.message'));
    $testable->assertSee(trans('cookie-consent::content.accept'));
    $testable->assertSee(trans('cookie-consent::content.reject'));
});

it('should render with the "bottom-right" style', function (): void {
    $testable = Livewire::test(CookieConsentDialog::class);
    $testable->set('style', 'bottom-right');

    $testable->assertStatus(200);
    $testable->assertSee(trans('cookie-consent::content.message'));
    $testable->assertSee(trans('cookie-consent::content.accept'));
    $testable->assertSee(trans('cookie-consent::content.reject'));
});

it('should render with the "centered" style', function (): void {
    $testable = Livewire::test(CookieConsentDialog::class);
    $testable->set('style', 'centered');

    $testable->assertStatus(200);
    $testable->assertSee(trans('cookie-consent::content.message'));
    $testable->assertSee(trans('cookie-consent::content.accept'));
    $testable->assertSee(trans('cookie-consent::content.reject'));
});

it('should render with the "full-width" style', function (): void {
    $testable = Livewire::test(CookieConsentDialog::class);
    $testable->set('style', 'full-width');

    $testable->assertStatus(200);
    $testable->assertSee(trans('cookie-consent::content.message'));
    $testable->assertSee(trans('cookie-consent::content.accept'));
    $testable->assertSee(trans('cookie-consent::content.reject'));
});

it('should accept the terms', function (): void {
    Cookie::shouldReceive('queue')
        ->once()
        ->with(
            Config::get('cookie-consent.cookie_name'),
            '1',
            Config::get('cookie-consent.accept_cookie_lifetime'),
        );

    $testable = Livewire::test(CookieConsentDialog::class);
    $testable->call('acceptTerms');

    $testable->assertStatus(200);
});

it('should reject the terms', function (): void {
    Cookie::shouldReceive('queue')
        ->once()
        ->with(
            Config::get('cookie-consent.cookie_name'),
            '0',
            Config::get('cookie-consent.reject_cookie_lifetime'),
        );

    $testable = Livewire::test(CookieConsentDialog::class);
    $testable->call('rejectTerms');

    $testable->assertStatus(200);
});
