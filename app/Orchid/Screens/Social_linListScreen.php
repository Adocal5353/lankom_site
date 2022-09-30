<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Social_network;
use App\Orchid\Layouts\Social_linkListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

class Social_linListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "social_networks"=>Social_network::Paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Les réseaux sociaux';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Ajouter un réseau social')
                ->icon('plus')
                ->route('platform.social_network.edit'),
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
            Social_linkListLayout::class
        ];
    }
}
