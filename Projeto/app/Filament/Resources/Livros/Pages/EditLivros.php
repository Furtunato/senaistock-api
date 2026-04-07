<?php

namespace App\Filament\Resources\Livros\Pages;

use App\Filament\Resources\Livros\LivrosResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLivros extends EditRecord
{
    protected static string $resource = LivrosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
