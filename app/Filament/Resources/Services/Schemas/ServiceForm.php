<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required(),
                Textarea::make('description')->required()->columnSpanFull(),
                TextInput::make('icon')->placeholder('Heroicon name or SVG'),
                TextInput::make('sort_order')->numeric()->default(0),
            ]);
    }
}
