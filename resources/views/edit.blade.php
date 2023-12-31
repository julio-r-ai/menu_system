<title><?php echo "Editar Produto" ?></title>

@section('content')

<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="/edit/{{ $products->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <h1>Editando o Produto:  {{ $products->description }} </h1>
            </div>

            <div>
                <x-label for="description" value="{{ __('Descricao') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="description" :value="old('nome')" required autofocus autocomplete="neme" value="{{ $products->description }}" />
            </div>

            <div>
                <x-label for="price" value="{{ __('Preço') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="price" :value="old('name')" required autofocus autocomplete="name" value="{{ $products->price }}"/>
            </div>

            <div>
                <x-label for="category" value="{{ __('Categoria') }}" />
                <select name="category" id="category">
                    <option selected disabled>Selecione</option>
                    <option value="Cerveja">Cerveja</option>
                    <option value="Coquetel">Coquetel</option>
                    <option value="Diversos">Diversos</option>
                    <option value="Drinks">Drinks</option>
                    <option value="Energético">Energético</option>
                    <option value="Petiscos">Petiscos</option>
                    <option value="Refrigerantes">Refrigerantes</option>
                    <option value="Sobremesa">Sobremesa</option>
                    <option value="Suco">Suco</option>
                    <option value="Sushi">Sushi</option>
                    <option value="Vinho">Vinho</option>
                </select>
            </div>

            <div>
                <x-label for="img" value="{{ __('Carregue uma Imagem') }}" />
                <x-input id="name" class="block mt-1 w-full" type="file" name="img" :value="old('img')" required autofocus autocomplete="img" value="{{ $products->img }}" />
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
                    {{ __('Editar Produto') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
