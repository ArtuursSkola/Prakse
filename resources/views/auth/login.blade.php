<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Log in
        </div>
    </x-slot:heading>

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 max-w-md mx-auto">
                <div class="grid grid-cols-1 gap-y-8">
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" :value="old('email')" type="email" required />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6 max-w-md mx-auto">

            <div class="text-sm font-semibold text-gray-900">
                <a href="/register" class="text-grey-600 hover:text-purple-900"> Don't have an account?</a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="/" class="text-sm font-semibold text-gray-900">Cancel</a>
                <x-form-button>Log in</x-form-button>
            </div>
        </div>
    </form>
</x-layout>
