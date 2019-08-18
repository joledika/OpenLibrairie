<?php

    function set_active_route($route)
    {
        return Route::is($route)?'active':'';
    }
