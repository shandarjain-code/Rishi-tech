<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                Select::make('category')
                    ->options([
                        'Frontend' => 'Frontend',
                        'Backend' => 'Backend',
                        'Mobile' => 'Mobile',
                        'Database' => 'Database',
                        'Tools' => 'Tools',
                        'Other' => 'Other',
                    ])
                    ->required(),
                TextInput::make('proficiency_percentage')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->default(0),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
