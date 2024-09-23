<?php

namespace App\Filament\Resources\VereadorResource\Pages;

use App\Filament\Resources\VereadorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVereadors extends ListRecords
{
    protected static string $resource = VereadorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
