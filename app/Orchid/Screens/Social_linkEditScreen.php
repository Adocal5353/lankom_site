<?php

namespace App\Orchid\Screens;

use App\Models\Social_network;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class Social_linkEditScreen extends Screen
{
    public $social_network;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Social_network $social_network): iterable
    {
        return [
            "social_network"=>$social_network
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->social_network->exists?'Modifications':'Ajout';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Modifier')
                ->icon('pencil')
                ->method('CreateOrUpdate')
                ->canSee($this->social_network->exists),

            Button::make('Ajouter')
                ->icon('note')
                ->method('CreateOrUpdate')
                ->canSee(!$this->social_network->exists),

            Button::make('Supprimer')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->social_network->exists),
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
                Input::make('social_network.name')
                    ->title('Nom du réseau social')
                    ->required(),

                Input::make('social_network.link')
                    ->type('link')
                    ->title('Lien vers la page')
                    ->required(),

                Input::make('social_network.font_awesome')
                    ->title('Icône (font-awesome) du réseau social')
                    ->required()
            ])
        ];
    }

    public function CreateOrUpdate(Social_network $social_network,Request $request){
        $social_network->fill($request->get('social_network'))->save();
        Alert::info('Enrégistrement effectué');
        return redirect()->route('platform.social_network.list');

    }

    public function Remove(Social_network $social_network){
        $social_network->delete();
        Alert::info('Le réseau a bien été supprimé');
        return redirect()->route('platform.social_network.list');
    }
}
