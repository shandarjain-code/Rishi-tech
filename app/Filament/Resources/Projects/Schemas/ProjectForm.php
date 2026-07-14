<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required(),
                TextInput::make('slug')
                    ->helperText('Used for the project details URL. Leave lowercase words separated by hyphens.')
                    ->unique(ignoreRecord: true),
                Textarea::make('short_overview')
                    ->label('Short overview')
                    ->rows(3)
                    ->helperText('Shown on homepage and portfolio cards.')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->label('Full description')
                    ->required()
                    ->rows(7)
                    ->columnSpanFull(),
                FileUpload::make('thumbnail_path')
                    ->label('Thumbnail image')
                    ->image()
                    ->disk('public')
                    ->directory('projects/thumbnails')
                    ->visibility('public')
                    ->maxSize(5120)
                    ->columnSpanFull(),
                Repeater::make('images')
                    ->label('Gallery images')
                    ->relationship()
                    ->schema([
                        FileUpload::make('path')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('projects')
                            ->visibility('public')
                            ->maxSize(5120)
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->orderColumn('sort_order')
                    ->reorderable()
                    ->reorderableWithDragAndDrop()
                    ->collapsible()
                    ->itemLabel(fn (?array $state): ?string => filled($state['path'] ?? null) ? 'Image' : 'New image')
                    ->addActionLabel('Add image')
                    ->columnSpanFull(),
                FileUpload::make('video_path')
                    ->label('Showcase video')
                    ->helperText('Upload any common video file. MP4, WebM, and OGG play directly in most browsers; other formats are still saved and available through the Open video link.')
                    ->disk('public')
                    ->directory('projects/videos')
                    ->visibility('public')
                    ->acceptedFileTypes(['video/*'])
                    ->maxSize(2097152)
                    ->openable()
                    ->downloadable()
                    ->nullable()
                    ->columnSpanFull(),
                TextInput::make('category')
                    ->placeholder('SaaS, API, Mobile App, Automation...'),
                Toggle::make('is_featured')
                    ->label('Featured on homepage')
                    ->default(true),
                TagsInput::make('tech_stack')
                    ->placeholder('Laravel, React, Flutter...')
                    ->columnSpanFull(),
                TagsInput::make('features')
                    ->placeholder('Dashboard analytics, role-based access...')
                    ->columnSpanFull(),
                Textarea::make('challenge')
                    ->rows(4)
                    ->columnSpanFull(),
                Textarea::make('solution')
                    ->rows(4)
                    ->columnSpanFull(),
                Repeater::make('faqs')
                    ->label('Project FAQ')
                    ->schema([
                        TextInput::make('question')->required(),
                        Textarea::make('answer')->required()->rows(3),
                    ])
                    ->collapsible()
                    ->itemLabel(fn (?array $state): ?string => $state['question'] ?? 'FAQ item')
                    ->addActionLabel('Add FAQ')
                    ->columnSpanFull(),
                TextInput::make('live_link')->url(),
                TextInput::make('github_link')->url(),
                TextInput::make('sort_order')->numeric()->default(0),
                TextInput::make('meta_title')->columnSpanFull(),
                Textarea::make('meta_description')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
