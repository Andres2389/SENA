<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\BitacorasAprendices;
use App\Models\Planeaciones;
use App\Models\NumeroBitacoras; // Asegúrate de importar este modelo
use App\MoonShine\Resources\NumeroBitacorasResource; // Y el recurso correspondiente

use MoonShine\Resources\ModelResource;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<BitacorasAprendices>
 */
class BitacorasAprendicesResource extends ModelResource
{
    protected string $model = BitacorasAprendices::class;

    protected string $title = 'Bitacoras';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),

                BelongsTo::make(
                    'Numero Bitacoras', 
                    'NumeroBitacora', // Asegúrate de que esta clave concuerde con la relación en tu modelo
                    static fn (NumeroBitacoras $model) => $model->nombre, 
                    new NumeroBitacorasResource()
                )->badge('purple'), 
                
                Image::make(__('bitacora'), 'bitacora')
                    ->showOnExport()
                    ->disk(config('moonshine.disk', 'public'))
                    ->dir('moonshine_users')
                    ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif','pdf','xlsx']),
                    
                BelongsTo::make(
                    'Planeaciones', 
                    'planear', 
                    static fn (Planeaciones $model) => $model->nombre, 
                    new PlaneacionesResource()
                )->badge('purple'),
                
               
            ]),
        ];
    }

    /**
     * @param BitacorasAprendices $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
