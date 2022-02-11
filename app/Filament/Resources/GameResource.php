<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Models\Game;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\BelongsToSelect::make('team_id')->relationship('team', 'name'),
                Forms\Components\DatePicker::make('date'),
                Forms\Components\TimePicker::make('time'),
                Forms\Components\Radio::make('field')
                    ->options([
                        'tbd' => 'TBD',
                        'home' => 'Home',
                        'away' => 'Away'
                    ])->inline(),
                Forms\Components\TextInput::make('opponent'),
                Forms\Components\TextInput::make('location'),
                Forms\Components\MarkdownEditor::make('notes'),
                Forms\Components\Radio::make('outcome')
                    ->options([
                        'win' => 'Win',
                        'lose' => 'Lose'
                    ])->inline(),
                Forms\Components\TextInput::make('team_score'),
                Forms\Components\TextInput::make('opponent_score'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('team.name'),
                Tables\Columns\TextColumn::make('date'),
                Tables\Columns\TextColumn::make('opponent'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }
}
