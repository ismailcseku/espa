<?php

namespace App\Nova;


use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Laravel\Nova\Http\Requests\NovaRequest;
use NumaxLab\NovaCKEditor5Classic\CKEditor5Classic;

class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Course>
     */
    public static $model = \App\Models\Course::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            //ID::make()->sortable(),
            BelongsTo::make('Cycle','degree','App\Nova\Degree'),
            Text::make('Intitulé de la formation','name'),
            Image::make('Photo'),

            //CKEditor5Classic::make('description'),
            NovaTinyMCE::make('description'),
            //Trix::make('Description','description'),
            
            //Textarea::make('Description','description'),

            Number::make('Durée en mois','duration'),
            BelongsTo::make('Lieu','location','App\Nova\Location'),
            BelongsTo::make('Rythme','mode', 'App\Nova\Mode'),
            BelongsTo::make('Modalité', 'modality','App\Nova\Modality'),
            BelongsTo::make('Langue','language','App\Nova\Language'),
            NovaTinyMCE::make('Prérequis et admission','admission'),
            NovaTinyMCE::make('Dossier','dossier'),
            NovaTinyMCE::make('Candidature','candidature'),
            Date::make('Date limite','datelimite'),
            NovaTinyMCE::make('Modaliés de selection','selection'),
            NovaTinyMCE::make('Date rentrée','daterentre'),

            NovaTinyMCE::make('Diplôme','grade'),

            NovaTinyMCE::make('Profile - Compétences','profile'),
            NovaTinyMCE::make('Débouchés','opportunity'),
            NovaTinyMCE::make('Témoignage','review'),


            HasMany::make('programs'),
            
            HasMany::make('downloads'),


            //Date::make('Date limite','datelimite'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}