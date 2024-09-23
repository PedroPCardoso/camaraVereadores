<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MesaDiretoraResource\Pages;
use App\Models\MesaDiretora;
use App\Models\Vereador;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class MesaDiretoraResource extends Resource
{
    protected static ?string $model = MesaDiretora::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';
    protected static ?string $navigationLabel = 'Mesa Diretora';
    protected static ?string $pluralLabel = 'Mesa Diretora';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('vereador_id')
                    ->label('Vereador')
                    ->options(Vereador::all()->pluck('nome', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('cargo')
                    ->label('Cargo')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cargo')
                    ->label('Cargo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vereador.nome')
                    ->label('Vereador')
                    ->searchable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Defina relacionamentos, se necessário
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMesaDiretoras::route('/'),
            'create' => Pages\CreateMesaDiretora::route('/create'),
            'edit' => Pages\EditMesaDiretora::route('/{record}/edit'),
        ];
    }
}
