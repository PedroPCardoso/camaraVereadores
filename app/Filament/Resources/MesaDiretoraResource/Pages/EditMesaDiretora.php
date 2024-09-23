<?php

namespace App\Filament\Resources\MesaDiretoraResource\Pages;

use App\Filament\Resources\MesaDiretoraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMesaDiretora extends EditRecord
{
    protected static string $resource = MesaDiretoraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
