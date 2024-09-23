<?php

namespace App\Filament\Resources\MesaDiretoraResource\Pages;

use App\Filament\Resources\MesaDiretoraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMesaDiretoras extends ListRecords
{
    protected static string $resource = MesaDiretoraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
