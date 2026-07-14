<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('phone'),
                TextInput::make('project_type')->required(),
                TextInput::make('budget')->required(),
                TextInput::make('timeline')->required(),
                Textarea::make('description')->columnSpanFull(),
            ]);
    }
}
