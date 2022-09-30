<?php

namespace App\Orchid\Layouts;

use App\Models\Block;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BlockListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'blocks';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('order','Numéro du bloc'),
            TD::make('title','titre'),
            TD::make('content','contenu')
                ->render(function(Block $block){
                    return Link::make('Modifier le contenu')
                        ->route('platform.block.edit',$block);
                }),

        ];
    }
}
