<?php

namespace App\Filament\Resources;

use App\Domain\UseCases\Commands\MakeEditionCurrentCommand;
use App\Filament\Resources\AssociationEditionResource\RelationManagers\AssociationsRelationManager;
use App\Filament\Resources\EditionResource\Pages;
use App\Filament\Resources\LineupResource\RelationManagers\MembersRelationManager;
use App\Models\Edition;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EditionResource extends Resource
{
    protected static ?string $model = Edition::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                TextInput::make('video')->url()->nullable(),
                FileUpload::make('image')
                    ->image()
                    ->imageEditor()
                    ->nullable(),
                Textarea::make('description')->nullable(),
                DateTimePicker::make('published_at')->nullable(),
                DateTimePicker::make('start_at')->nullable(),
                DateTimePicker::make('end_at')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime('Y/m/d H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_at')
                    ->dateTime('Y/m/d H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_at')
                    ->dateTime('Y/m/d H:i')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_current')
                    ->label('Current')
                    ->beforeStateUpdated(
                        fn(Edition $edition, $state) => app(MakeEditionCurrentCommand::class)->makeCurrent(
                            $edition->id,
                            $state
                        )
                    ),
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
            MembersRelationManager::class,
            AssociationsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEditions::route('/'),
            'create' => Pages\CreateEdition::route('/create'),
            'edit' => Pages\EditEdition::route('/{record}/edit'),
        ];
    }
}
