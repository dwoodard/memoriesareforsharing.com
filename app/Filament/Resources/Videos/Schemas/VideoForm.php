<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Html;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make()
                    ->schema([
                        Section::make('Video Details')
                            ->columns(1)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Submitter Name')
                                    ->required()
                                    ->maxLength(120),
                                TextInput::make('filename')
                                    ->label('Filename')
                                    ->disabled(),
                                TextInput::make('url')
                                    ->label('Video URL')
                                    ->disabled()
                                    ->columnSpanFull(),
                            ]),
                        Section::make('Video Preview')
                            ->visible(fn ($get) => filled($get('url')))
                            ->schema([
                                Html::make(fn ($get) => '<video width="100%" controls style="max-height: 500px; border-radius: 8px;">
                                                <source src="'.($get('url') ?? '').'" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>'),
                            ]),
                    ]),
            ]);
    }
}
