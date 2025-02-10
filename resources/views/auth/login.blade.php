<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Log in
        </div>
    </x-slot:heading>

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div class="space-y-12 mt-12">

            <!-- Apply border to the whole form container -->
            <div class="border-2 border-gray-300 p-6 rounded-lg max-w-md mx-auto bg-purple-600 bg-opacity-10">
                <div class="grid grid-cols-1 gap-y-3">
                    <x-form-field>
                        <x-form-label class="text-white" for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" :value="old('email')" type="email" required />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label class="text-white" for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                </div>

                <div class="mt-6 flex items-center justify-between gap-x-6">
                    <div class="text-sm font-semibold text-gray-900">
                        <a href="/register" class="text-white hover:text-purple-900"> Don't have an account?</a>
                    </div>

                    <div class="flex items-center space-x-4">
                        <a href="/" class="text-sm font-semibold text-white">Cancel</a>
                        <x-form-button>Log in</x-form-button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-layout>
