<?php

namespace App\Orchid\Layouts;

use App\Models\Social_network;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class Social_linkListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'social_networks';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name','nom'),
            TD::make('link','lien'),
            TD::make('font_awesome','icône'),
            TD::make('Modifier')
                ->render(function(Social_network $social_network){
                    return Link::make('Action')
                        ->route('platform.social_network.edit',$social_network);
                })
        ];
    }
}
