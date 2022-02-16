<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TournamentResource\Pages;
use App\Filament\Resources\TournamentResource\RelationManagers;
use App\Models\Tournament;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TournamentResource extends Resource
{
    protected static ?string $model = Tournament::class;

    protected static ?string $navigationIcon = 'heroicon-o-lightning-bolt';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(['default' => 3])
                    ->schema([
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\BelongsToSelect::make('team_id')->relationship('team', 'name'),
                                Forms\Components\TextInput::make('name'),
                                Forms\Components\TextInput::make('field_name'),
                                Forms\Components\TextInput::make('address'),
                                Forms\Components\TextInput::make('city'),
                                Forms\Components\TextInput::make('state'),
                                Forms\Components\TextInput::make('zip_code'),
                                Forms\Components\TextInput::make('outcome'),
                                Forms\Components\MarkdownEditor::make('notes')
                            ])
                            ->columnSpan(['default' => 1]),
                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\Repeater::make('games')
                                    ->schema([
                                        Forms\Components\DatePicker::make('date')->format('F d, Y')->weekStartsOnSunday(),
                                        Forms\Components\TimePicker::make('time')->withoutSeconds(),
                                        Forms\Components\TextInput::make('field_number')->label('Field Number'),
                                        Forms\Components\TextInput::make('opponent'),
                                        Forms\Components\Select::make('home_away')
                                            ->options([
                                                'tbd' => 'TBD',
                                                'home' => 'Home',
                                                'away' => 'Away'
                                            ])->label('Home/Away'),
                                        Forms\Components\TextInput::make('team_score')->label('Team Score'),
                                        Forms\Components\TextInput::make('opponent_score')->label('Opponent Score'),
                                        Forms\Components\Select::make('outcome')
                                            ->options([
                                                'win' => 'Win',
                                                'lose' => 'Lose',
                                                'tie' => 'Tie'
                                            ])
                                    ])
                                    ->columns(2)
                                    ->createItemButtonLabel('Add Game')
                            ])
                            ->columnSpan(['default' => 2])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('team.name')->sortable(),
                Tables\Columns\TextColumn::make('field_name')->label('Field'),
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
            'index' => Pages\ListTournaments::route('/'),
            'create' => Pages\CreateTournament::route('/create'),
            'edit' => Pages\EditTournament::route('/{record}/edit'),
        ];
    }
}
