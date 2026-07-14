<?php

namespace App\Filament\Resources\SocialLinks\Schemas;

use App\Models\SocialLink;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SocialLinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('platform')
                    ->options(SocialLink::PLATFORMS)
                    ->required()
                    ->native(false)
                    ->unique(ignoreRecord: true),
                TextInput::make('label')
                    ->maxLength(120)
                    ->placeholder('Optional display label'),
                TextInput::make('url')
                    ->label('Platform URL')
                    ->url()
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
