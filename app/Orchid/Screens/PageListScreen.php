<?php

namespace App\Orchid\Screens;

use App\Models\Page;
use App\Orchid\Layouts\PageListLayout;
use Orchid\Screen\Screen;

class PageListScreen extends Screen
{

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "pages"=>Page::Paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Liste des pages';
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
    public function layout(): iterable
    {
        return [
            PageListLayout::class
        ];
    }
}
