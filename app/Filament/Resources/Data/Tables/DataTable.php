<?php

namespace App\Filament\Resources\Data\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class DataTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('name'),
            TextColumn::make('description')->limit(50),
            TextColumn::make('created_at')->dateTime()
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
