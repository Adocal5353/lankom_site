<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\TD;
use App\Models\Agences;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class AgenceListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'agences';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('town','Pays')
                ->render(function(Agences $agences){
                    return Link::make($agences->town)
                        ->route('platform.agence.edit',$agences);
                }),

            TD::make('city','Ville'),
            TD::make('email','email'),
            TD::make('phone','numéro de téléphone'),

        ];
    }
}
