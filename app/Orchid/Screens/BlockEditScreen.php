<?php

namespace App\Orchid\Screens;

use App\Models\Block;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BlockEditScreen extends Screen
{

    public $block;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Block $block): iterable
    {
        return [
            "block"=>$block
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Modifier le texte';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Modifier le block')
                ->icon('pencil')
                ->method('Update'),
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
                Input::make('block.title')
                    ->title('Titre du block')
                    ->canSee(!is_null($this->block->title)),
                Quill::make('block.content')
                    ->title('Modifiez le contenu du bloc')
            ])
        ];
    }

    public function Update(Block $block, Request $request)
    {
        $block->fill($request->get('block'))->save();
        Alert::info('Le contenu a été modifié avec succès');
        return redirect()->route('platform.page.edit',$block->page);
    }
}
