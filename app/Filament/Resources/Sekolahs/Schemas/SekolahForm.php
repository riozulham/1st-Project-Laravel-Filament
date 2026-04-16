<?php

namespace App\Filament\Resources\Sekolahs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;



class SekolahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Select::make('data_id')
            ->relationship('data','name'),
            TextInput::make('sekolah')
                ->required(),
            ]);
    }
}
