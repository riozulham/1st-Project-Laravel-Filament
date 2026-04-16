<?php

namespace App\Filament\Resources\LandingPages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;


class LandingPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('title')->required(),
            Textarea::make('description'),
            FileUpload::make('hero_image')
                ->disk('public')
                ->directory('landing')
                ->image()
            ]);
    }
}
