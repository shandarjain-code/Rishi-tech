<?php

namespace App\Filament\Resources\HomepageFaqs;

use App\Filament\Resources\HomepageFaqs\Pages\CreateHomepageFaq;
use App\Filament\Resources\HomepageFaqs\Pages\EditHomepageFaq;
use App\Filament\Resources\HomepageFaqs\Pages\ListHomepageFaqs;
use App\Filament\Resources\HomepageFaqs\Schemas\HomepageFaqForm;
use App\Filament\Resources\HomepageFaqs\Tables\HomepageFaqsTable;
use App\Models\HomepageFaq;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomepageFaqResource extends Resource
{
    protected static ?string $model = HomepageFaq::class;

    protected static ?string $navigationLabel = 'Homepage FAQs';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQuestionMarkCircle;

    public static function form(Schema $schema): Schema
    {
        return HomepageFaqForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomepageFaqsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHomepageFaqs::route('/'),
            'create' => CreateHomepageFaq::route('/create'),
            'edit' => EditHomepageFaq::route('/{record}/edit'),
        ];
    }
}
