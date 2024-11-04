<div>
    @if($requestConsent)
        <div x-data="{ open: @entangle('requestConsent') }" x-show="open">
            @includeWhen($style === 'centered', 'cookie-consent::centered')
            @includeWhen($style === 'bottom-left', 'cookie-consent::bottom-left')
            @includeWhen($style === 'bottom-right', 'cookie-consent::bottom-right')
            @includeWhen($style === 'full-width', 'cookie-consent::full-width')
        </div>
    @endif
</div>
