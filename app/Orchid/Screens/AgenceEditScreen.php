<?php

namespace App\Orchid\Screens;

use App\Models\Agences;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Map;
use Orchid\Screen\Fields\Input;


use Orchid\Screen\Actions\Button;

use Orchid\Support\Facades\Layout;

class AgenceEditScreen extends Screen
{
    public $agence;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Agences $agence): iterable
    {
        return [
            'agence'=>$agence
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->agence->exists?"Modification de l'agence":"Création d'une agence";
    }

    /**
     *
     */
    public function description() : ?string{
        return "Les Agences";
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Ajouter une agence')
                ->icon('pencil')
                ->method('CreateOrUpdate')
                ->canSee(!$this->agence->exists),

            Button::make('Modifier')
                ->icon('note')
                ->method('CreateOrUpdate')
                ->canSee($this->agence->exists),

            Button::make('Supprimer')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->agence->exists),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Map::make('agence')
                    ->title('Localisation de l\'agence')
                    ->help('Entrez les coordonnés pour chercher l\'agence  sur la carte')
                    ->required(),

                Input::make('agence.town')
                    ->title('Pays de l\'agence')
                    ->placeholder('Le pays de l\'agence')
                    ->help('Entrez le pays où réside de l\'agence')
                    ->required(),

                Input::make('agence.city')
                    ->title('Ville de l\'agence')
                    ->placeholder('La ville de l\'agence')
                    ->help('Entrez la ville dans laquelle réside l\'agence')
                    ->required(),

                Input::make('agence.phone')
                    ->type('tel')
                    ->title('Numéro')
                    ->placeholder('Entrez le numéro de l\'agence')
                    ->help('Entrez le numéro de l\'agence')
                    ->required(),

                Input::make('agence.email')
                    ->type('email')
                    ->title('Email de l\'agence')
                    ->placeholder('Email de l\'agence')
                    ->help('Entrez l\'adresse email de l\'agence')
                    ->required(),

            ])
        ];
    }
    /**
     * @param Agences $agence
     * @param  Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function CreateOrUpdate(Agences $agence, Request $request){

        $agence->fill($request->get('agence'))->save();
        Alert::info('L\'agence  a été créé avec succès');
        return redirect()->route('platform.agence.list');
    }

    public function remove(Agences $agence){
        $agence->delete();
        Alert::info('Cette agence a été supprimé avec succès');

        return redirect()->route('platform.agence.list');
    }
}
