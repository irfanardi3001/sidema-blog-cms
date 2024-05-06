<?php

namespace App\Filament\Resources\QnaResource\Pages;

use App\Filament\Resources\QnaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQnas extends ListRecords
{
    protected static string $resource = QnaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
