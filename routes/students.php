<?php

use Illuminate\Support\Facades\Route;

Route::get('/student/marks', function () {
    return 'Student Marks';
});

Route::get('/student/avg', function () {
    return 'Student AVG';
});

Route::get('/student/gbp', function () {
    return 'Student GPA';
});

Route::get('/student/exams', function () {
    return 'Student Exams';
});
