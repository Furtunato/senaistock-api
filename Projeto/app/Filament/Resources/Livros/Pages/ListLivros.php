<?php

namespace App\Filament\Resources\Livros\Pages;

use App\Filament\Resources\Livros\LivrosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLivros extends ListRecords
{
    protected static string $resource = LivrosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
