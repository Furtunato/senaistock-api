<?php

namespace App\Filament\Resources\Logins\Pages;

use App\Filament\Resources\Logins\LoginResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLogin extends ViewRecord
{
    protected static string $resource = LoginResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
