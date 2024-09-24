<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Planeaciones;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Planeaciones>
 */
class PlaneacionesResource extends ModelResource
{
    protected string $model = Planeaciones::class;

    protected string $title = 'Planeaciones';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Nombre', 'nombre'),
                Image::make(__('arhivo'), 'archivo')
                ->showOnExport()
                ->disk(config('moonshine.disk', 'public'))
                ->dir('moonshine_users')
                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif']),  
            ]),
        ];
    }

    /**
     * @param Planeaciones $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
