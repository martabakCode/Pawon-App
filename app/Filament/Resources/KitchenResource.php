<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KitchenResource\Pages;
use App\Filament\Resources\KitchenResource\RelationManagers;
use App\Models\Kitchen;
use App\Models\Status;
use App\Models\Building;
use App\Models\AdditionalService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KitchenResource extends Resource
{
    protected static ?string $model = Kitchen::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Section::make('Create Kitchen')
            ->description('Create kitchen for the renting system')
                ->schema([
                    Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                    Forms\Components\Select::make('building_id')
                    ->options(function (){
                        return Building::get()->pluck('name','id');
                    })
                    ->label('Building')
                    ->required(),

                    Forms\Components\FileUpload::make('photos')
                    ->columnSpan(2)
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                    ])
                    ->required(),

                    Forms\Components\RichEditor::make('description')
                    ->columnSpan(2)
                    ->required(),

                    Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->maxLength(255),
                    Forms\Components\Select::make('status_id')
                    ->options(function (){
                        return Status::get()->pluck('status','id');
                    })
                    ->label('Status')
                    ->required(),
                    Forms\Components\Repeater::make('kitchen_additional_services')
                    ->columnSpan(2)
                    ->relationship('kitchen_additional_services')
                    ->schema([
                        Forms\Components\Select::make('additional_service_id')
                        ->options(function (){
                            return AdditionalService::get()->pluck('name','id');
                        })
                        ->label('Additional Service')
                        ->required(),
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photos')
                ->label('Photos'),
                Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('price')
                ->money('IDR')
                ->searchable(),
                Tables\Columns\SelectColumn::make('status_id')
                ->options(function (){
                    return Status::get()->pluck('status','id');
                })
                ->label('Status')
                ->searchable()
                ->sortable(),

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
            'index' => Pages\ListKitchens::route('/'),
            'create' => Pages\CreateKitchen::route('/create'),
            'edit' => Pages\EditKitchen::route('/{record}/edit'),
        ];
    }
}
