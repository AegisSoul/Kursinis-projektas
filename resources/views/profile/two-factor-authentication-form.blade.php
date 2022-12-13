<x-jet-action-section>
    <x-slot name="title">
        {{ __('Dviejų faktorių autentifikavimas') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Papildomai apsaugokite savo paskyrą naudojant dviejų faktorių autentifikavimą.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                {{ __('Jūs įjungėte dviejų faktorių autentifikavimą.') }}
            @else
                {{ __('Jūs nesate įjunge dviejų faktorių autentifikavimą.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Kai įjungtas dviejų faktorių autentifikavimas, autentifikavimo metu būsite paraginti įvesti saugų atsitiktinį prieigos raktą. Šį prieigos raktą galite gauti iš savo telefono „Google“ autentifikavimo priemonės programos.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Dabar įjungtas dviejų faktorių autentifikavimas. Nuskaitykite šį QR kodą naudodami telefono autentifikavimo programą.') }}
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Išsaugokite šiuos atkūrimo kodus saugioje slaptažodžių tvarkyklėje. Jie gali būti naudojami norint atkurti prieigą prie paskyros, jei pametate dviejų faktorių autentifikavimo įrenginį.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('Įjungti') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Sugeneruoti naujus kodus') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Rodyti atkūrimo kodus') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('Išjungti') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
