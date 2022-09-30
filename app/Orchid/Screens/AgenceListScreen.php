<?php

namespace App\Orchid\Screens;

use App\Models\Agences;
use App\Orchid\Layouts\AgenceListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class AgenceListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     *
     * @param Post $post
     *
     */
    public function query(): array
    {
        return [
            'agences'=> Agences::paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des agences';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Ajouter un nouveau')
                ->icon('plus')
                ->route('platform.agence.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            AgenceListLayout::class
        ];
    }
}
