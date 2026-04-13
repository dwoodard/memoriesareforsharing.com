<?php

namespace App\Filament\Resources\Memories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
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
                    ->searchable(),
                TextColumn::make('story')
                    ->label('Story')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('year')
                    ->label('Year')
                    ->searchable(),
                TextColumn::make('relation')
                    ->label('Relation'),
                TextColumn::make('photo_url')
                    ->label('Photo')
                    ->limit(30),
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
