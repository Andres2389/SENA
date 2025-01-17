<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Instructores;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Text;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Instructores>
 */
class InstructoresResource extends ModelResource
{
    protected string $model = Instructores::class;

    protected string $title = 'Instructores';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Nombre', 'nombre')
                ->required(),
                Text::make('Apellidos', 'apellido')
                ->required(),
                Text::make('Correo', 'email')
                ->required(),
                Text::make('Telefono', 'telefono')
                ->required(),
            ]),
        ];
    }

    /**
     * @param Instructores $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
