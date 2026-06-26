<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // تنظیمات منو به فارسی
    protected static ?string $navigationLabel = 'پروژه‌ها';
    protected static ?string $pluralLabel = 'پروژه‌ها';
    protected static ?string $modelLabel = 'پروژه';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('اطلاعات اصلی')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('عنوان پروژه')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        
                        Forms\Components\Textarea::make('description')
                            ->label('توضیحات')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                        
                        Forms\Components\TextInput::make('category')
                            ->label('دسته‌بندی')
                            ->default('وب‌اپلیکیشن')
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('لینک‌ها و تصویر')
                    ->schema([
                        Forms\Components\TextInput::make('github_url')
                            ->label('لینک گیت‌هاب')
                            ->url()
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('demo_url')
                            ->label('لینک دمو')
                            ->url()
                            ->maxLength(255),
                        
                        Forms\Components\FileUpload::make('image')
                            ->label('تصویر پروژه')
                            ->image()
                            ->directory('projects')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('تنظیمات')
                    ->schema([
                        Forms\Components\TagsInput::make('technologies')
                            ->label('تکنولوژی‌ها')
                            ->helperText('هر تکنولوژی رو وارد کن و Enter بزن')
                            ->separator(',')
                            ->columnSpanFull(),
                        
                        Forms\Components\Toggle::make('is_published')
                            ->label('منتشر شده')
                            ->default(true),
                        
                        Forms\Components\TextInput::make('sort_order')
                            ->label('ترتیب نمایش')
                            ->numeric()
                            ->default(0),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('شناسه')
                    ->sortable(),
                
                Tables\Columns\ImageColumn::make('image')
                    ->label('تصویر')
                    ->circular(),
                
                Tables\Columns\TextColumn::make('title')
                    ->label('عنوان')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                
                Tables\Columns\TextColumn::make('category')
                    ->label('دسته‌بندی')
                    ->searchable()
                    ->badge()
                    ->color('primary'),
                
                Tables\Columns\IconColumn::make('is_published')
                    ->label('منتشر شده')
                    ->boolean(),
                
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('ترتیب')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('تاریخ ایجاد')
                    ->dateTime('Y/m/d')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('وضعیت انتشار'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('ویرایش'),
                Tables\Actions\DeleteAction::make()->label('حذف'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('حذف گروهی'),
                ]),
            ])
            ->defaultSort('sort_order');
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}