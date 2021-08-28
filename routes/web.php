<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('menuDirectora', function () {
    return view('directora.menuDirectora');
});

Route::get('directoraEstudiantes', function () {
    return view('directora.estudiantes');
})->name('directoraEstudiantes');

Route::get('directoraTutores', function () {
    return view('directora.tutores');
})->name('directoraTutores');

Route::get('directoraRegistrarTutores', function () {
    return view('directora.registrarTutores');
})->name('directoraRegistrarTutores');

Route::get('directoraAgregarAlumno', function () {
    return view('directora.agregarAlumno');
})->name('directoraAgregarAlumno');


Route::get('directoraCrearGrupo', function () {
    return view('directora.crearGrupo');
})->name('directoraCrearGrupo');

Route::get('directoraDocentes', function () {
    return view('directora.docentes');
})->name('directora.directoraDocentes');

Route::get('directoraRegistrarDocentes', function () {
    return view('directora.registrarDocentes');
})->name('directora.registrarDocentes');


Route::get('menuDocente', function () {
    return view('docente.menuDocente');
})->name('menuDocente');

Route::get('menuTutor', function () {
    return view('tutor.menuTutor');
})->name('menuTutor');

Route::get('menuTutorObservaciones', function () {
    return view('tutor.observaciones');
})->name('menuTutorObservaciones');

Route::get('menuContador', function () {
    return view('contador.menuContador');
})->name('menuContador');

Route::get('menuContadorHistorialDePagos', function () {
    return view('contador.historialDePagos');
})->name('menuContadorHistorialDePagos');

Route::get('menuContadorHistorialDePagosReciente', function () {
    return view('contador.historialDePagosReciente');
})->name('menuContadorHistorialDePagosReciente');