<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Checkout extends Component implements HasForms
{
    use InteractsWithForms;

    public $data;

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function render()
    {
        return view('livewire.checkout');
    }

    public function init(): void
    {
        //$this->dispatchBrowserEvent('open-modal', ['id' => 'checkout']);
    }

    public function mount(): void
    {
        $this->form->fill([
            'email' => fake()->email(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'postal_code' => '01001-000',
            'number' => 11,
            'payment_method' => 'credit_card',
            'card_number' => fake()->creditCardNumber(formatted: true),
            'name_on_card' => fake()->name(),
            'expiration_date' => fake()->month().'/24',
            'cvv' => '123',
        ]);
    }

    protected function getFormSchema(): array
    {
        return [

            Wizard::make([
                Step::make('account')->schema([
                    TextInput::make('email')
                        ->email()
                        ->required(),
                    TextInput::make('first_name')
                        ->required(),
                    TextInput::make('last_name')
                        ->required(),
                ]),
                Step::make('shipping')
                    ->schema([
                        TextInput::make('postal_code')
                            ->extraAlpineAttributes(['x-mask' => '99999-999'])
                            ->required()
                            ->columnSpan(2)
                            ->suffixAction(function ($state, $livewire, $component, $set) {
                                return Action::make('search')
                                    ->icon('heroicon-o-search')
                                    ->action(function () use ($state, $livewire, $component, $set) {

                                        $fieldName = $component->getStatePath();
                                        $validate = $livewire->validateOnly($fieldName);

                                        $request = Http::get("viacep.com.br/ws/$state/json/")->json();

                                        throw_if(
                                            Arr::has($request, 'erro'),
                                            ValidationException::withMessages([$fieldName => 'CEP não encontrado.'])
                                        );

                                        $set('street', data_get($request, 'logradouro'));
                                        $set('complement', data_get($request, 'complemento'));
                                        $set('district', data_get($request, 'bairro'));
                                        $set('city', data_get($request, 'localidade'));
                                        $set('state', data_get($request, 'uf'));
                                    });
                            }),
                        TextInput::make('street')
                            ->required()
                            ->columnSpan(4),
                        TextInput::make('number')
                            ->required()
                            ->columnSpan(2),
                        TextInput::make('complement')
                            ->columnSpan(4),
                        TextInput::make('district')
                            ->required()
                            ->columnSpan(3),
                        TextInput::make('city')
                            ->required()
                            ->columnSpan(3),
                        Select::make('state')
                            ->searchable()
                            ->options(File::json(public_path('data/states.json')))
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(6),
                Step::make('payment')
                    ->schema([
                        Radio::make('payment_method')
                            ->options([
                                'credit_card' => 'Credit Card',
                                'paypal' => 'PayPal',
                            ])
                            ->reactive()
                            ->inline(true)
                            ->required(),

                        Fieldset::make('credit_card')->schema([
                            TextInput::make('card_number')
                                ->required()
                                ->extraAlpineAttributes(['x-mask' => '9999-9999-9999-9999']),
                            TextInput::make('name_on_card')
                                ->required(),
                            TextInput::make('expiration_date')
                                ->required()
                                ->extraAlpineAttributes(['x-mask' => '99/99']),
                            TextInput::make('cvv')
                                ->required()
                                ->extraAlpineAttributes(['x-mask' => '999']),
                        ])
                            ->label('Credit Card')
                            ->visible(fn ($get): bool => $get('payment_method') === 'credit_card'),

                        Fieldset::make('paypal')->schema([
                            TextInput::make('paypal_email')
                                ->email()
                                ->required()
                                ->columnSpanFull(),
                        ])
                            ->label('PayPal')
                            ->visible(fn ($get): bool => $get('payment_method') === 'paypal'),
                    ]),
            ])
                ->submitAction(view('components.checkout-submit')),
            //  ->startOnStep(3)
        ];
    }

    public function submit(): void
    {
        sleep(1);
        $data = $this->form->getState();
        $this->dispatchBrowserEvent('close-modal', ['id' => 'checkout']);

        Notification::make()
            ->title('Sucesso!')
            ->body($data['first_name'].', seu pedido foi enviado com sucesso!')
            ->success()
            ->send();
    }
}
