<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use App\Models\Fichas;
use App\Models\Nivel;

use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Resources\ModelResource;
use App\MoonShine\Resources\NivelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Text;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Fichas>
 */
class FichasResource extends ModelResource
{
    protected string $model = Fichas::class;

    protected string $title = 'Fichas';


    protected bool $createInModal = true;
    protected bool $editInModal = true;

    public function redirectAfterSave(): string
    {   
        $referer = Request::header('referer');
        return  $referer ?: '/';
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Numero de ficha', 'numero_ficha')
                    ->required(),
                Text::make('Nombre del programa', 'nombre')
                ->required(),
                BelongsTo::make(
                    'Nivel', 
                    'Nivel', 
                    static fn (Nivel $model) => $model->nombre, 
                    new NivelResource()
                    )->badge('purple'),
                    Text::make('Fecha inicio del programa', 'fecha_inicio')
                    ->required(),
                    Text::make('Fecha final del programa', 'fecha_final')
                    ->required(),
                   
                    ]),
                    
        ];
    }

    /**
     * @param Fichas $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
