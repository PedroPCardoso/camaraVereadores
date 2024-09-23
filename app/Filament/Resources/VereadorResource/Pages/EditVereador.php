<?php

namespace App\Filament\Resources\VereadorResource\Pages;

use App\Filament\Resources\VereadorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVereador extends EditRecord
{
    protected static string $resource = VereadorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
