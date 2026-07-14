<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('small_heading'),
                TextInput::make('main_heading_first'),
                TextInput::make('main_heading_second'),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('profile_image')
                    ->image(),
            ]);
    }
}
