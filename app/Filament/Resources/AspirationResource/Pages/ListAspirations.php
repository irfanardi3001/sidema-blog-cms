<?php

namespace App\Filament\Resources\AspirationResource\Pages;

use App\Filament\Resources\AspirationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListAspirations extends ListRecords
{
    protected static string $resource = AspirationResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
    // public function getTabs(): array
    // {
    //     return [
    //         'All'=>Tab::make(),
    //         'Accepted'=>Tab::make()->modifyQueryUsing(function(Builder $query){
    //             $query->where('status',true);
    //         }),
    //         'Unaccepted'=>Tab::make()->modifyQueryUsing(function(Builder $query){
    //             $query->where('status',false);
    //         }),
    //     ];
    // }
}
