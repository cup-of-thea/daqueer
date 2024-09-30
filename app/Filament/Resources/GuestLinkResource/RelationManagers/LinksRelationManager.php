<?php

namespace App\Filament\Resources\GuestLinkResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class LinksRelationManager extends RelationManager
{
    protected static string $relationship = 'links';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->options([
                        'twitter' => 'Twitter',
                        'facebook' => 'Facebook',
                        'linkedin' => 'LinkedIn',
                        'instagram' => 'Instagram',
                        'blue_sky' => 'BlueSky',
                        'mastodon' => 'Mastodon',
                        'threads' => 'Threads',
                        'twitch' => 'Twitch',
                        'discord' => 'Discord',
                        'patreon' => 'Patreon',
                        'ko_fi' => 'Ko-fi',
                        'paypal' => 'PayPal',
                        'only_fans' => 'OnlyFans',
                        'youtube' => 'YouTube',
                        'tiktok' => 'TikTok',
                        'website' => 'Website',
                        'other' => 'Other',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->url()
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('type')
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
