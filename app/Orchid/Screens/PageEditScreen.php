<?php

namespace App\Orchid\Screens;

use App\Models\Page;
use App\Models\Block;
use App\Orchid\Layouts\BlockListLayout;
use Orchid\Screen\Screen;

class PageEditScreen extends Screen
{
    public $page;
    public $name;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Page $page): array
    {
        return [
            "blocks"=>$page->block,
            "name"=>$page->name
            // "blocks"=>Block::where('page_id','=',$page->id),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'blocs de la page '.$this->name;
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            BlockListLayout::class
        ];
    }
}
