<div>
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/profile/dashboard" wire:navigate
                    class="inline-flex items-center text-sm font-medium text-body hover:text-fg-brand">
                    <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                    </svg>
                    Home
                </a>
            </li>

            @php $currentUrl = ''; @endphp

            @foreach ($segments as $segment)
                @php
                    $currentUrl .= '/' . $segment;

                    // SKIP visualisasi jika segmen adalah 'profile' atau 'dashboard'
                    // Karena sudah diwakili oleh tombol "Home" di atas
                    if ($segment == 'profile' || $segment == 'dashboard') {
                        continue;
                    }
                @endphp

                <li @if ($loop->last) aria-current="page" @endif>
                    <div class="flex items-center space-x-1.5">
                        <svg class="w-3.5 h-3.5 rtl:rotate-180 text-body" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>

                        @if (!$loop->last)
                            <a href="{{ $currentUrl }}" wire:navigate
                                class="inline-flex items-center text-sm font-medium text-body hover:text-fg-brand capitalize">
                                {{ str_replace('-', ' ', $segment) }}
                            </a>
                        @else
                            <span class="inline-flex items-center text-sm font-medium text-body-subtle capitalize">
                                {{ str_replace('-', ' ', $segment) }}
                            </span>
                        @endif
                    </div>
                </li>
            @endforeach
        </ol>
    </nav>
</div>
