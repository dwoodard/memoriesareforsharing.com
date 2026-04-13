<?php

namespace App\Filament\Resources\Memories\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Image;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MemoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make()
                    ->schema([
                        Section::make('Memory Details')
                            ->columns(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Submitter Name')
                                    ->required()
                                    ->maxLength(120),
                                TextInput::make('contact')
                                    ->label('Email or Phone')
                                    ->required()
                                    ->maxLength(200),
                                TextInput::make('year')
                                    ->label('Year of Memory')
                                    ->maxLength(20)
                                    ->nullable(),
                                TextInput::make('relation')
                                    ->label('Relationship to Mellody')
                                    ->maxLength(60)
                                    ->nullable(),
                            ]),
                        Section::make('Memory Story')
                            ->schema([
                                Textarea::make('story')
                                    ->label('Story')
                                    ->required()
                                    ->rows(8)
                                    ->maxLength(10000),
                            ]),
                        Section::make('Photo')
                            ->schema([
                                TextInput::make('photo_url')
                                    ->label('Photo URL')
                                    ->disabled(),
                                Image::make(
                                    fn ($get) => $get('photo_url'),
                                    'Memory photo',
                                )
                                    ->imageHeight('12rem'),
                            ]),
                    ]),
            ]);
    }
}
