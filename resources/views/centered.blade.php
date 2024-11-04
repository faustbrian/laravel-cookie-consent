<div class="pointer-events-none fixed inset-x-0 bottom-0 px-6 pb-6">
    <div class="pointer-events-auto mx-auto max-w-xl rounded-xl bg-white p-6 shadow-lg ring-1 ring-gray-900/10">
        <p class="text-sm leading-6 text-gray-900">
            @lang('cookie-consent::content.message')
        </p>

        <div class="mt-4 flex items-center gap-x-5">
            <button wire:click="acceptTerms" type="button" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">
                @lang('cookie-consent::content.accept')
            </button>

            <button wire:click="rejectTerms" type="button" class="text-sm font-semibold leading-6 text-gray-900">
                @lang('cookie-consent::content.reject')
            </button>
        </div>
    </div>
</div>
