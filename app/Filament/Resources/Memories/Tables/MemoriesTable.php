<?php

namespace App\Filament\Resources\Memories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MemoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('contact')
                    ->label('Contact')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('story')
                    ->label('Story')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('year')
                    ->label('Year')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('relation')
                    ->label('Relation')
                    ->sortable(),
                ImageColumn::make('photo_url')
                    ->label('Photo')
                    ->imageHeight(60)
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Submitted')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
