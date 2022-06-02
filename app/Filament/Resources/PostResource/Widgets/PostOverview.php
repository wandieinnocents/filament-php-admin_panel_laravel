<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

class PostOverview extends Widget
{
    protected static string $view = 'filament.resources.post-resource.widgets.post-overview';
    public ?Model $record = null;
    public  $fetchStat = "wandie";

    
}
