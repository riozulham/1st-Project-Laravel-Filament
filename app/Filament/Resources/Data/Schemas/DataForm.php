<?php

namespace App\Filament\Resources\Data\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;


class DataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('name')
                ->required(),
            TextArea::make('description')
                ->required(),
            ]);
    }
}
