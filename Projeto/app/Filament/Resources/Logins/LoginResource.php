<?php

namespace App\Filament\Resources\Logins;

use App\Filament\Resources\Logins\Pages\CreateLogin;
use App\Filament\Resources\Logins\Pages\EditLogin;
use App\Filament\Resources\Logins\Pages\ListLogins;
use App\Filament\Resources\Logins\Pages\ViewLogin;
use App\Filament\Resources\Logins\Schemas\LoginForm;
use App\Filament\Resources\Logins\Schemas\LoginInfolist;
use App\Filament\Resources\Logins\Tables\LoginsTable;
use App\Models\Login;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LoginResource extends Resource
{
    protected static ?string $model = Login::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Login';

    public static function form(Schema $schema): Schema
    {
        return LoginForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LoginInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LoginsTable::configure($table);
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
            'index' => ListLogins::route('/'),
            'create' => CreateLogin::route('/create'),
            'view' => ViewLogin::route('/{record}'),
            'edit' => EditLogin::route('/{record}/edit'),
        ];
    }
}
