<?php

Route::middleware(['auth:api', 'bindings'])->group(function () {
    Route::prefix('api')->group(function (){
        Route::resource('/academic-years', 'Okotieno\\AcademicYear\\Controllers\\AcademicYearController');
    });

    Route::get('/api/academic-years/all', 'Okotieno\\AcademicYear\\Controllers\\AcademicYearApiController@getAll');

});
