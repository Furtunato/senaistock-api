<?php

namespace App\Filament\Resources\Livros;

use App\Filament\Resources\Livros\Pages\CreateLivros;
use App\Filament\Resources\Livros\Pages\EditLivros;
use App\Filament\Resources\Livros\Pages\ListLivros;
use App\Filament\Resources\Livros\Pages\ViewLivros;
use App\Models\Livros;
use BackedEnum;
use UnitEnum;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LivrosResource extends Resource
{
    protected static ?string $model = Livros::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Livro';

    protected static ?string $modelLabel = 'Livro';

    protected static ?string $pluralModelLabel = 'Livros';

    protected static string|UnitEnum|null $navigationGroup = 'Administração';

    protected static ?string $recordTitleAttribute = 'titulo';

    public static function form(Schema $schema): Schema
    {
        return $schema
        ->schema([
            TextInput::make('isbn')->label('ISBN'),
            TextInput::make('titulo')->required()->label('Título'),
            TextInput::make('autor')->required()->label('Autor'),
            TextInput::make('editora')->label('Editora'),
            TextInput::make('quantidade')->numeric()->required()->label('Quantidade'),
        ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
        ->schema([
            TextInput::make('isbn')->label('ISBN'),
            TextInput::make('titulo')->label('Título'),
            TextInput::make('autor')->label('Autor'),
            TextInput::make('editora')->label('Editora'),
            TextInput::make('quantidade')->label('Quantidade'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('isbn'),
            TextColumn::make('titulo')->searchable(),
            TextColumn::make('autor')->searchable(),
            TextColumn::make('editora'),
            TextColumn::make('quantidade'),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLivros::route('/'),
            'create' => CreateLivros::route('/create'),
            'view' => ViewLivros::route('/{record}'),
            'edit' => EditLivros::route('/{record}/edit'),
        ];
    }
}