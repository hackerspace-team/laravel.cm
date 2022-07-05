<div class="bg-skin-menu divide-y divide-skin-light">
    <x-layouts.header />
    <div class="max-w-7xl mx-auto px-2 py-3 sm:px-4">
        <nav class="flex items-center space-x-3" aria-label="Global">
            <a href="{{ route('cpanel.home') }}" class="text-sm font-medium rounded-md py-2 px-3 inline-flex items-center {{ active(['cpanel.home'], 'bg-green-50 text-green-800', 'text-skin-base hover:bg-skin-card-muted hover:text-skin-inverted') }}" aria-current="page" x-state:on="Current" x-state:off="Default">
                {{ __('Tableau de bord') }}
            </a>
            <a href="{{ route('cpanel.users.browse') }}" class="text-sm font-medium rounded-md py-2 px-3 inline-flex items-center {{ active(['cpanel.users*'], 'bg-green-50 text-green-800', 'text-skin-base hover:bg-skin-card-muted hover:text-skin-inverted') }}">
                {{ __('Utilisateurs') }}
            </a>
            <a href="#" class="text-sm font-medium rounded-md py-2 px-3 inline-flex items-center {{ active(['categories*'], 'bg-green-50 text-green-800', 'text-skin-base hover:bg-skin-card-muted hover:text-skin-inverted') }}">
                {{ __('Catégories') }}
            </a>
            <a href="#" class="inline-flex text-sm font-medium rounded-md py-2 px-3 inline-flex items-center {{ active(['submissions*'], 'bg-green-50 text-green-800', 'text-skin-base hover:bg-skin-card-muted hover:text-skin-inverted') }}">
                {{ __('Soumissions') }} {{--<span class="ml-2 text-sm leading-5 text-skin-inverted-muted">0</span>--}}
            </a>
            <a href="#" class="inline-flex text-sm font-medium rounded-md py-2 px-3 inline-flex items-center {{ active(['analytics*'], 'bg-green-50 text-green-800', 'text-skin-base hover:bg-skin-card-muted hover:text-skin-inverted') }}">
                {{ __('Analytics') }}
            </a>
        </nav>
    </div>
</div>
