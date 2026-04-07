<?php

namespace App\Filament\Resources\Livros\Pages;

use App\Filament\Resources\Livros\LivrosResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLivros extends ViewRecord
{
    protected static string $resource = LivrosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
