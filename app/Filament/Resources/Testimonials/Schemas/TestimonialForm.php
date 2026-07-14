<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(120),
                Textarea::make('feedback')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
                Select::make('rating')
                    ->label('Rating (optional)')
                    ->options([
                        5 => '5 stars',
                        4 => '4 stars',
                        3 => '3 stars',
                        2 => '2 stars',
                        1 => '1 star',
                    ])
                    ->native(false)
                    ->placeholder('No rating')
                    ->nullable(),
                FileUpload::make('image_path')
                    ->label('Client photo')
                    ->image()
                    ->disk('public')
                    ->directory('testimonials')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->imageEditor()
                    ->nullable()
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_published')
                    ->label('Published')
                    ->default(true),
            ]);
    }
}
