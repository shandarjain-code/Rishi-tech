<?php

namespace App\Filament\Resources\Projects\Tables;

use App\Models\Project;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')
                    ->label('Image')
                    ->getStateUsing(fn (Project $record): ?string => $record->thumbnail_path ?: $record->images->first()?->path)
                    ->disk('public')
                    ->height(56)
                    ->extraImgAttributes(['class' => 'object-cover rounded-md']),
                TextColumn::make('title')->searchable(),
                TextColumn::make('category')->badge()->searchable(),
                TextColumn::make('tech_stack')->badge(),
                TextColumn::make('is_featured')
                    ->label('Featured')
                    ->badge(),
                TextColumn::make('sort_order')->sortable(),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
