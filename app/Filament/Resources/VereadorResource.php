<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VereadorResource\Pages;
use App\Models\Vereador;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;

class VereadorResource extends Resource
{
    protected static ?string $model = Vereador::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';
    protected static ?string $navigationLabel = 'Vereadores';
    protected static ?string $pluralLabel = 'Vereadores';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->label('Nome')
                    ->maxLength(255),
                Forms\Components\TextInput::make('partido')
                    ->required()
                    ->label('Partido')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->directory('vereadores')
                    ->imagePreviewHeight('250')
                    ->columnSpan('full'),
                Forms\Components\Textarea::make('bio')
                    ->label('Biografia')
                    ->rows(5)
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->circular(),
                Tables\Columns\TextColumn::make('nome')
                    ->label('Nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('partido')
                    ->label('Partido')
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
            'index' => Pages\ListVereadors::route('/'),
            'create' => Pages\CreateVereador::route('/create'),
            'edit' => Pages\EditVereador::route('/{record}/edit'),
        ];
    }
}
