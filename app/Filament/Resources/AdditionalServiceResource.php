<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdditionalServiceResource\Pages;
use App\Filament\Resources\AdditionalServiceResource\RelationManagers;
use App\Models\AdditionalService;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdditionalServiceResource extends Resource
{
    protected static ?string $model = AdditionalService::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Section::make('Create Additional Service')
            ->description('Create additional service for the renting system')
                ->schema([
                    Forms\Components\TextInput::make('name')
                    ->string()
                    ->required(),
                    RichEditor::make('description')
                    ->columnSpan(2)
                    ->required(),
                ])->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('price')
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListAdditionalServices::route('/'),
            'create' => Pages\CreateAdditionalService::route('/create'),
            'edit' => Pages\EditAdditionalService::route('/{record}/edit'),
        ];
    }
}
