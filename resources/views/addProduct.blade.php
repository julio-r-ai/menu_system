    <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('dashboard') }}">
            @csrf
            <div>
                <h1>Adicionar Produto</h1>
            </div>
            <div>
                <x-label for="name" value="{{ __('URL da Imagem') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="img" :value="old('img')" required autofocus autocomplete="img" />
            </div>

            <div class="mt-4">
                <x-label for="description" value="{{ __('Descrição') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="description" :value="old('name')" required autocomplete="name" />
            </div>

            <div>
                <x-label for="price" value="{{ __('Preço') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="price" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="category" value="{{ __('Categoria') }}" />
                <select name="category" id="category">
                    <option selected disabled>Selecione</option>
                    <option value="0">Cerveja</option>
                    <option value="1">Coquetel</option>
                    <option value="2">Diversos</option>
                    <option value="3">Drinks</option>
                    <option value="4">Energético</option>
                    <option value="5">Petiscos</option>
                    <option value="6">Refrigerantes</option>
                    <option value="7">Sobremesa</option>
                    <option value="8">Suco</option>
                    <option value="9">Sushi</option>
                    <option value="10">Vinho</option>
                </select>
            </div>

            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4" type="submit">
                    {{ __('Adicionar Produto') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
