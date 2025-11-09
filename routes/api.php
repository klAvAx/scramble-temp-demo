<?php

use Illuminate\Support\Facades\Route;

Route::get('eloquentModelNonResource', function () {
    return (new \App\Models\EloquentModel())->all();
});
Route::get('eloquentModelResource', function () {
    return \App\Http\Resources\EloquentModelResource::collection(
        (new \App\Models\EloquentModel())->all()
    );
});



Route::get('regularModelNonResource', function () {
    return \App\Models\RegularModel::getAll();
});
Route::get('regularModelResource', function () {
    return \App\Http\Resources\RegularModelResource::collection(
        \App\Models\RegularModel::getAll()
    );
});



Route::get('dataObjectNonResource', function () {
    return new \App\DataObjects\SomeDataObject();
});
Route::get('dataObjectResource', function () {
    return new \App\Http\Resources\DataObjectResource(
        new \App\DataObjects\SomeDataObject()
    );
});
