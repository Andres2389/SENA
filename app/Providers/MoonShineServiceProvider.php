<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
//use App\Moonshine\Resources\AsignarResource;
//use App\Moonshine\Resources\BitacorasResource;
//use App\Moonshine\Resources\ImportarResource;
use App\Moonshine\Resources\FichasResource;
use App\Moonshine\Resources\AprendicesResource;
use App\Moonshine\Resources\InstructoresResource;
use App\Moonshine\Resources\BitacorasAprendicesResource;
use App\Moonshine\Resources\PlaneacionesResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
{
    return [
        
       MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
            MenuItem::make(
                static fn() => __('Users'),
                new MoonShineUserResource()
            ),
            MenuItem::make(
                static fn () => __('moonshine::ui.resource.role_title'),
                new MoonShineUserRoleResource()
            )->icon('heroicons.user-plus')->canSee(static fn () => auth()->user()->moonshine_user_role_id === 1),
        ])->canSee(static fn () => auth()->user()->moonshine_user_role_id === 1),
       

        MenuItem::make(
            static fn () => __('Fichas'),
            new FichasResource()
        )->icon('heroicons.identification')->canSee(static fn () => auth()->user()->moonshine_user_role_id === 1),

        MenuItem::make('Aprendices', new  AprendicesResource)->icon('heroicons.identification')
        ->canSee(static fn () => auth()->user()->moonshine_user_role_id === 1),
        MenuItem::make('Instructores', new  InstructoresResource)->icon('heroicons.identification')
        ->canSee(static fn () => auth()->user()->moonshine_user_role_id === 1),

        MenuItem::make('Bitacoras', new  BitacorasAprendicesResource)->icon('heroicons.identification')
        ->canSee(static fn () => auth()->user()->moonshine_user_role_id === 3),

        MenuItem::make('Momentos', new  PlaneacionesResource)->icon('heroicons.identification')
        ->canSee(static fn () => auth()->user()->moonshine_user_role_id === 3),
       


        
    ];

    
}



    public function boot(): void
    {
        parent::boot();

        moonshineAssets()->add(['/vendor/moonshine/assets/minimalistic.css']);

        moonshineColors()
            ->primary('#39A900')
            ->secondary('#385C57')
            ->body('255, 255, 255')
            ->dark('204, 204, 204', 'DEFAULT')
            ->dark('249, 250, 251', 50)
            ->dark('243, 244, 246', 100)
            ->dark('229, 231, 235', 200)
            ->dark('209, 213, 219', 300)
            ->dark('156, 163, 175', 400)
            ->dark('107, 114, 128', 500)
            ->dark('75, 85, 99', 600)
            ->dark('55, 65, 81', 700)
            ->dark('31, 41, 55', 800)
            ->dark('17, 24, 39', 900)
            ->successBg('209, 255, 209')
            ->successText('15, 99, 15')
            ->warningBg('255, 246, 207')
            ->warningText('92, 77, 6')
            ->errorBg('203, 119, 102')
            ->errorText('203, 119, 102')
            ->infoBg('196, 224, 255')
            ->infoText('34, 65, 124');

        moonshineColors()
            ->body('0, 49, 77', dark: false)
            ->dark('83, 103, 132', 50, dark: false)
            ->dark('74, 90, 121', 100, dark: false)
            ->dark('65, 81, 114', 200, dark: false)
            ->dark('53, 69, 103', 300, dark: false)
            ->dark('48, 61, 93', 400, dark: false)
            ->dark('41, 53, 82', 500, dark: false)
            ->dark('40, 51, 78', 600, dark: false)
            ->dark('39, 45, 69', 700, dark: false)
            ->dark('27, 37, 59', 800, dark: false)
            ->dark('15, 23, 42', 900, dark: false)
            ->successBg('17, 157, 17', dark: false)
            ->successText('178, 255, 178', dark: false)
            ->warningBg('225, 169, 0', dark: false)
            ->warningText('255, 255, 199', dark: false)
            ->errorBg('190, 10, 10', dark: false)
            ->errorText('255, 197, 197', dark: false)
            ->infoBg('38, 93, 205', dark: false)
            ->infoText('179, 220, 255', dark: false);
    }

    protected function theme(): array
    {
        return [];
    }
}