<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-cloud';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Project Title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\Textarea::make('description')
                    ->label('Short Description')
                    ->required(),
                Forms\Components\Textarea::make('long_description')
                    ->label('Long Description'),
                Forms\Components\TextInput::make('url')
                    ->label('Project URL')
                    ->url()
                    ->required(),
                Forms\Components\TextInput::make('tools_used')
                    ->label('Tools Used')
                    ->placeholder('e.g., Bubble.io, Webflow'),
                Forms\Components\TextInput::make('time_taken')
                    ->label('Time Taken')
                    ->placeholder('e.g., 1 week, 3 days'),
                Forms\Components\Textarea::make('features')
                    ->label('Key Features')
                    ->placeholder('Comma-separated list of features'),
                Forms\Components\FileUpload::make('image_path')
                    ->label('Project Image')
                    ->disk('public')
                    ->directory('projects')
                    ->image() // This ensures it's treated as an image
                    ->required(false), // Optional, set to true if require
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Short Description')
                    ->limit(50),
                Tables\Columns\TextColumn::make('tools_used')
                    ->label('Tools Used')
                    ->sortable(),
                Tables\Columns\TextColumn::make('time_taken')
                    ->label('Time Taken')
                    ->sortable(),
                Tables\Columns\TextColumn::make('url')
                    ->label('Project Link')
                    ->url(fn (Project $record) => $record->url, true)
                    ->openUrlInNewTab(),
            ])
            ->filters([
                // Add any filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
