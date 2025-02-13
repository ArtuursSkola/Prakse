<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-center">
            Registration
        </div>
    </x-slot:heading>

    <div class="flex justify-center items-center min-h-screen">
        <form method="POST" action="/register" class="w-full max-w-lg">
            @csrf
            <div class="border-2 border-gray-300 p-6 rounded-lg max-w-md mx-auto bg-purple-600 bg-opacity-10">
            <div class="space-y-5">

                <div class="border-b border-gray-900/10 pb-12">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-3">

                        <x-form-field class="sm:col-span-3">
                            <x-form-label class="text-white" for="first_name">First name</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="first_name" :value="old('first_name')" id="first_name" required />
                                <x-form-error name="first_name" />
                            </div>
                        </x-form-field>

                        <x-form-field class="sm:col-span-3">
                            <x-form-label class="text-white" for="last_name">Last Name</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="last_name" :value="old('last_name')" id="last_name" required />
                                <x-form-error name="last_name" />
                            </div>
                        </x-form-field>

                        <x-form-field class="sm:col-span-3">
                            <x-form-label class="text-white" for="email">Email</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="email" id="email" :value="old('email')" type="email" required />
                                <x-form-error name="email" />
                            </div>
                        </x-form-field>

                        <x-form-field class="sm:col-span-3">
                            <x-form-label class="text-white" for="password">Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="password" id="password" type="password" required />
                                <x-form-error name="password" />
                            </div>
                        </x-form-field>

                        <x-form-field class="sm:col-span-3">
                            <x-form-label class="text-white" for="password_confirmation">Confirm Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="password_confirmation" id="password_confirmation" type="password" required />
                                <x-form-error name="password_confirmation" />
                            </div>
                        </x-form-field>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex justify-between items-center">
                <a href="/" class="text-sm font-semibold text-white">Cancel</a>
                <x-form-button>Register</x-form-button>
            </div>
        </form>
    </div>
</x-layout>
