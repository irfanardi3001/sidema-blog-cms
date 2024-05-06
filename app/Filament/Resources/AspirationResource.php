<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Aspiration;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AspirationResource\Pages;
use App\Filament\Resources\AspirationResource\RelationManagers;

class AspirationResource extends Resource
{
    protected static ?string $model = Aspiration::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';
    protected static ?string $navigationGroup = 'SI DEMA';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('sender')->required()->disabled(),
                        TextInput::make('class')->required()->disabled(),
                        TextInput::make('title')->required(),
                        Textarea::make('content')->required(),
                        Textarea::make('reply')->required()->autosize(),
                        Select::make('status')
                            ->options([
                                '0'=>'Unaccepted',
                                '1'=>'Accepted',
                            ]),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sender'),
                TextColumn::make('class'),
                TextColumn::make('title'),
                TextColumn::make('content')->wrap(),
                TextColumn::make('Reply')->wrap(),
                SelectColumn::make('status')
                ->options([
                    '0'=>'Unaccepted',
                    '1'=>'Accepted',
                ])
                ->action(function($record, $column){
                    $sender = $column->getSender();
                    $record->update([
                        $sender => !$record->$sender
                    ]);
                })
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAspirations::route('/'),
            'create' => Pages\CreateAspiration::route('/create'),
            'edit' => Pages\EditAspiration::route('/{record}/edit'),
        ];
    }
}
