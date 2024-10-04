<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\clothingController;
use App\Http\Controllers\vintagesController;
use App\Http\Controllers\vintageController;
use App\Models\Information;
use App\Models\clothing;
use App\Models\vintages;
use App\Models\vintage;
use App\Models\shoeone;
use App\Models\shoetwo;

use Illuminate\Support\Facades\DB;










Route::get('/regvintage', [RegController::class, 'indexxx'])->name('reg');

// Route for registration form submission
Route::post('/regvintage', [RegController::class, 'submitformreggg'])->name('reg.submit');















Route::get('/regcloth', [RegController::class, 'indexx'])->name('reg');

// Route for registration form submission
Route::post('/regcloth', [RegController::class, 'submitformregg'])->name('reg.submit');






Route::get('/regshoeonedata', [RegController::class, 'shoeindexone'])->name('reg');

// Route for registration form submission
Route::post('/regshoeonedata', [RegController::class, 'shoeonedata'])->name('reg.submit');







Route::get('/regshoetwodata', [RegController::class, 'shoeindextwo'])->name('reg');

// Route for registration form submission
Route::post('/regshoetwodata', [RegController::class, 'shoetwodata'])->name('reg.submit');




Route::get('/regshoethreedata', [RegController::class, 'shoeindexthree'])->name('reg');

// Route for registration form submission
Route::post('/regshoethreedata', [RegController::class, 'shoethreedata'])->name('reg.submit');






Route::get('/regshoefourdata', [RegController::class, 'shoeindexfour'])->name('reg');

// Route for registration form submission
Route::post('/regshoefourdata', [RegController::class, 'shoefourdata'])->name('reg.submit');






Route::get('/regshoefivedata', [RegController::class, 'shoeindexfive'])->name('reg');

// Route for registration form submission
Route::post('/regshoefivedata', [RegController::class, 'shoefivedata'])->name('reg.submit');






Route::get('/regshoesixdata', [RegController::class, 'shoeindexsix'])->name('reg');

// Route for registration form submission
Route::post('/regshoesixdata', [RegController::class, 'shoesixdata'])->name('reg.submit');






Route::get('/regshoesevendata', [RegController::class, 'shoeindexseven'])->name('reg');

// Route for registration form submission
Route::post('/regshoesevendata', [RegController::class, 'shoesevendata'])->name('reg.submit');





Route::get('/regshoeeightdata', [RegController::class, 'shoeindexeight'])->name('reg');

// Route for registration form submission
Route::post('/regshoeeightdata', [RegController::class, 'shoeeightdata'])->name('reg.submit');







Route::get('/regshoeninedata', [RegController::class, 'shoeindexnine'])->name('reg');

// Route for registration form submission
Route::post('/regshoeninedata', [RegController::class, 'shoeninedata'])->name('reg.submit');







Route::get('/regshoetendata', [RegController::class, 'shoeindexten'])->name('reg');

// Route for registration form submission
Route::post('/regshoetendata', [RegController::class, 'shoetendata'])->name('reg.submit');









Route::get('/regshoeelevendata', [RegController::class, 'shoeindexeleven'])->name('reg');

// Route for registration form submission
Route::post('/regshoeelevendata', [RegController::class, 'shoeelevendata'])->name('reg.submit');







Route::get('/regshoetwelvedata', [RegController::class, 'shoeindextwelve'])->name('reg');

// Route for registration form submission
Route::post('/regshoetwelvedata', [RegController::class, 'shoetwelvedata'])->name('reg.submit');








Route::get('/regclothonedata', [RegController::class, 'clothindexone'])->name('reg');

// Route for registration form submission
Route::post('/regclothonedata', [RegController::class, 'clothonedata'])->name('reg.submit');







Route::get('/regclothtwodata', [RegController::class, 'clothindextwo'])->name('reg');

// Route for registration form submission
Route::post('/regclothtwodata', [RegController::class, 'clothtwodata'])->name('reg.submit');











Route::get('/regcloththreedata', [RegController::class, 'clothindexthree'])->name('reg');

// Route for registration form submission
Route::post('/regcloththreedata', [RegController::class, 'cloththreedata'])->name('reg.submit');






Route::get('/regclothfourdata', [RegController::class, 'clothindexfour'])->name('reg');

// Route for registration form submission
Route::post('/regclothfourdata', [RegController::class, 'clothfourdata'])->name('reg.submit');







Route::get('/regclothfivedata', [RegController::class, 'clothindexfive'])->name('reg');

// Route for registration form submission
Route::post('/regclothfivedata', [RegController::class, 'clothfivedata'])->name('reg.submit');








Route::get('/regclothsixdata', [RegController::class, 'clothindexsix'])->name('reg');

// Route for registration form submission
Route::post('/regclothsixdata', [RegController::class, 'clothsixdata'])->name('reg.submit');







Route::get('/regclothsevndata', [RegController::class, 'clothindexsevn'])->name('reg');

// Route for registration form submission
Route::post('/regclothsevndata', [RegController::class, 'clothsevndata'])->name('reg.submit');






Route::get('/regclotheightdata', [RegController::class, 'clothindexeight'])->name('reg');

// Route for registration form submission
Route::post('/regclotheightdata', [RegController::class, 'clotheightdata'])->name('reg.submit');




Route::get('/regclothninedata', [RegController::class, 'clothindexnine'])->name('reg');

// Route for registration form submission
Route::post('/regclothninedata', [RegController::class, 'clothninedata'])->name('reg.submit');







Route::get('/regclothtendata', [RegController::class, 'clothindexten'])->name('reg');

// Route for registration form submission
Route::post('/regclothtendata', [RegController::class, 'clothtendata'])->name('reg.submit');





Route::get('/regclothelevendata', [RegController::class, 'clothindexeleven'])->name('reg');

// Route for registration form submission
Route::post('/regclothelevendata', [RegController::class, 'clothelevendata'])->name('reg.submit');






Route::get('/regclothtwelvedata', [RegController::class, 'clothindextwelve'])->name('reg');

// Route for registration form submission
Route::post('/regclothtwelvedata', [RegController::class, 'clothtwelvedata'])->name('reg.submit');






Route::get('/regvintageonedata', [RegController::class, 'vintageindexone'])->name('reg');

// Route for registration form submission
Route::post('/regvintageonedata', [RegController::class, 'vintageonedata'])->name('reg.submit');









Route::get('/regvintagetwodata', [RegController::class, 'vintageindextwo'])->name('reg');

// Route for registration form submission
Route::post('/regvintagetwodata', [RegController::class, 'vintagetwodata'])->name('reg.submit');







Route::get('/regvintagethreedata', [RegController::class, 'vintageindexthree'])->name('reg');

// Route for registration form submission
Route::post('/regvintagethreedata', [RegController::class, 'vintagethreedata'])->name('reg.submit');








Route::get('/regvintagefourdata', [RegController::class, 'vintageindexfour'])->name('reg');

// Route for registration form submission
Route::post('/regvintagefourdata', [RegController::class, 'vintagefourdata'])->name('reg.submit');








Route::get('/regvintagefivedata', [RegController::class, 'vintageindexfive'])->name('reg');

// Route for registration form submission
Route::post('/regvintagefivedata', [RegController::class, 'vintagefivedata'])->name('reg.submit');










Route::get('/regvintagesixdata', [RegController::class, 'vintageindexsix'])->name('reg');

// Route for registration form submission
Route::post('/regvintagesixdata', [RegController::class, 'vintagesixdata'])->name('reg.submit');









Route::get('/regvintagesevendata', [RegController::class, 'vintageindexseven'])->name('reg');

// Route for registration form submission
Route::post('/regvintagesevendata', [RegController::class, 'vintagesevendata'])->name('reg.submit');








Route::get('/regvintageeightdata', [RegController::class, 'vintageindexeight'])->name('reg');

// Route for registration form submission
Route::post('/regvintageeightdata', [RegController::class, 'vintageeightdata'])->name('reg.submit');








Route::get('/regvintageninedata', [RegController::class, 'vintageindexnine'])->name('reg');

// Route for registration form submission
Route::post('/regvintageninedata', [RegController::class, 'vintageninedata'])->name('reg.submit');









Route::get('/regvintagetendata', [RegController::class, 'vintageindexten'])->name('reg');

// Route for registration form submission
Route::post('/regvintagetendata', [RegController::class, 'vintagetendata'])->name('reg.submit');









Route::get('/regvintageelevendata', [RegController::class, 'vintageindexeleven'])->name('reg');

// Route for registration form submission
Route::post('/regvintageelevendata', [RegController::class, 'vintageelevendata'])->name('reg.submit');








Route::get('/regvintagetwelvedata', [RegController::class, 'vintageindextwelve'])->name('reg');

// Route for registration form submission
Route::post('/regvintagetwelvedata', [RegController::class, 'vintagetwelvedata'])->name('reg.submit');




Route::get('/admin', [RegController::class, 'admin']);

Route::get('/dashboard', [RegController::class, 'dashboard']);
Route::get('/pages', [RegController::class, 'pages']);
Route::get('/homepage', [RegController::class, 'homepage']);
Route::get('/shoepage', [RegController::class, 'shoepage']);
Route::get('/clothpage', [RegController::class, 'clothpage']);
Route::get('/vintagepage', [RegController::class, 'vintagepage']);
Route::get('/product', [RegController::class, 'product']);
Route::get('/shoedetail', [RegController::class, 'shoedetail']);
Route::get('/clothdetail', [RegController::class, 'clothdetails']);
Route::get('/vintagedetail', [RegController::class, 'vintagedetails']);
Route::get('/data', [RegController::class, 'datapage']);








// Route for registration page
Route::get('/regshoes', [RegController::class, 'index'])->name('reg');

// Route for registration form submission
Route::post('/regshoes', [RegController::class, 'submitformreg'])->name('reg.submit');

// Route for fetching records

Route::get('/reditshoe/{id}/edit', [RegController::class, 'recordedit']);
Route::put('/reupdateshoe/{id}/update', [RegController::class, 'recordupdate']);
Route::get('/redeleteshoe/{id}/delete', [RegController::class, 'recorddelete']);
Route::get('/rviewshoe/{id}', [RegController::class, 'recordview']);



Route::get('/reditcloth/{id}/edit', [RegController::class, 'recordeditcloth']);
Route::put('/reupdatecloth/{id}/update', [RegController::class, 'recordupdatecloth']);
Route::get('/redeletecloth/{id}/delete', [RegController::class, 'recorddeletecloth']);



Route::get('/reditvintage/{id}/edit', [RegController::class, 'recordeditvintage']);
Route::put('/reupdatevintage/{id}/update', [RegController::class, 'recordupdatevintage']);
Route::get('/redeletevintage/{id}/delete', [RegController::class, 'recorddeletevintage']);




Route::get('/reditshoeone/{id}/edit', [RegController::class, 'recordeditshoeone']);
Route::put('/reupdateshoeone/{id}/update', [RegController::class, 'recordupdateshoeone']);
Route::get('/eshoeone/{id}/edit', [RegController::class, 'eshoeone']);
Route::put('/simgone/{id}/update', [RegController::class, 'simgone']);
Route::get('/eshoeone2/{id}/edit', [RegController::class, 'eshoeone2']);
Route::put('/simgone2/{id}/update', [RegController::class, 'simgone2']);
Route::get('/eshoeone3/{id}/edit', [RegController::class, 'eshoeone3']);
Route::put('/simgone3/{id}/update', [RegController::class, 'simgone3']);
Route::get('/eshoeone4/{id}/edit', [RegController::class, 'eshoeone4']);
Route::put('/simgone4/{id}/update', [RegController::class, 'simgone4']);
Route::get('/redeleteshoeone/{id}/delete', [RegController::class, 'recorddeleteshoeone']);




Route::get('/reditshoetwo/{id}/edit', [RegController::class, 'recordeditshoetwo']);
Route::put('/reupdateshoetwo/{id}/update', [RegController::class, 'recordupdateshoetwo']);
Route::get('/eshoetwo/{id}/edit', [RegController::class, 'eshoetwo']);
Route::put('/simgtwo/{id}/update', [RegController::class, 'simgtwo']);
Route::get('/eshoetwo2/{id}/edit', [RegController::class, 'eshoetwo2']);
Route::put('/simgtwo2/{id}/update', [RegController::class, 'simgtwo2']);
Route::get('/eshoetwo3/{id}/edit', [RegController::class, 'eshoetwo3']);
Route::put('/simgtwo3/{id}/update', [RegController::class, 'simgtwo3']);
Route::get('/eshoetwo4/{id}/edit', [RegController::class, 'eshoetwo4']);
Route::put('/simgtwo4/{id}/update', [RegController::class, 'simgtwo4']);
Route::get('/redeleteshoetwo/{id}/delete', [RegController::class, 'recorddeleteshoetwo']);




Route::get('/reditshoethree/{id}/edit', [RegController::class, 'recordeditshoethree']);
Route::put('/reupdateshoethree/{id}/update', [RegController::class, 'recordupdateshoethree']);
Route::get('/eshoethree/{id}/edit', [RegController::class, 'eshoethree']);
Route::put('/simgthree/{id}/update', [RegController::class, 'simgthree']);
Route::get('/eshoethree2/{id}/edit', [RegController::class, 'eshoethree2']);
Route::put('/simgthree2/{id}/update', [RegController::class, 'simgthree2']);
Route::get('/eshoethree3/{id}/edit', [RegController::class, 'eshoethree3']);
Route::put('/simgthree3/{id}/update', [RegController::class, 'simgthree3']);
Route::get('/eshoethree4/{id}/edit', [RegController::class, 'eshoethree4']);
Route::put('/simgthree4/{id}/update', [RegController::class, 'simgthree4']);
Route::get('/redeleteshoethree/{id}/delete', [RegController::class, 'recorddeleteshoethree']);




Route::get('/reditshoefour/{id}/edit', [RegController::class, 'recordeditshoefour']);
Route::put('/reupdateshoefour/{id}/update', [RegController::class, 'recordupdateshoefour']);
Route::get('/eshoefour/{id}/edit', [RegController::class, 'eshoefour']);
Route::put('/simgfour/{id}/update', [RegController::class, 'simgfour']);
Route::get('/eshoefour2/{id}/edit', [RegController::class, 'eshoefour2']);
Route::put('/simgfour2/{id}/update', [RegController::class, 'simgfour2']);
Route::get('/eshoefour3/{id}/edit', [RegController::class, 'eshoefour3']);
Route::put('/simgfour3/{id}/update', [RegController::class, 'simgfour3']);
Route::get('/eshoefour4/{id}/edit', [RegController::class, 'eshoefour4']);
Route::put('/simgfour4/{id}/update', [RegController::class, 'simgfour4']);
Route::get('/redeleteshoefour/{id}/delete', [RegController::class, 'recorddeleteshoefour']);





Route::get('/reditshoefive/{id}/edit', [RegController::class, 'recordeditshoefive']);
Route::put('/reupdateshoefive/{id}/update', [RegController::class, 'recordupdateshoefive']);
Route::get('/eshoefive/{id}/edit', [RegController::class, 'eshoefive']);
Route::put('/simgfive/{id}/update', [RegController::class, 'simgfive']);
Route::get('/eshoefive2/{id}/edit', [RegController::class, 'eshoefive2']);
Route::put('/simgfive2/{id}/update', [RegController::class, 'simgfive2']);
Route::get('/eshoefive3/{id}/edit', [RegController::class, 'eshoefive3']);
Route::put('/simgfive3/{id}/update', [RegController::class, 'simgfive3']);
Route::get('/eshoefive4/{id}/edit', [RegController::class, 'eshoefive4']);
Route::put('/simgfive4/{id}/update', [RegController::class, 'simgfive4']);
Route::get('/redeleteshoefive/{id}/delete', [RegController::class, 'recorddeleteshoefive']);




Route::get('/reditshoesix/{id}/edit', [RegController::class, 'recordeditshoesix']);
Route::put('/reupdateshoesix/{id}/update', [RegController::class, 'recordupdateshoesix']);
Route::get('/eshoesix/{id}/edit', [RegController::class, 'eshoesix']);
Route::put('/simgsix/{id}/update', [RegController::class, 'simgsix']);
Route::get('/eshoesix2/{id}/edit', [RegController::class, 'eshoesix2']);
Route::put('/simgsix2/{id}/update', [RegController::class, 'simgsix2']);
Route::get('/eshoesix3/{id}/edit', [RegController::class, 'eshoesix3']);
Route::put('/simgsix3/{id}/update', [RegController::class, 'simgsix3']);
Route::get('/eshoesix4/{id}/edit', [RegController::class, 'eshoesix4']);
Route::put('/simgsix4/{id}/update', [RegController::class, 'simgsix4']);
Route::get('/redeleteshoesix/{id}/delete', [RegController::class, 'recorddeleteshoesix']);






Route::get('/reditshoeseven/{id}/edit', [RegController::class, 'recordeditshoeseven']);
Route::put('/reupdateshoeseven/{id}/update', [RegController::class, 'recordupdateshoeseven']);
Route::get('/eshoeseven/{id}/edit', [RegController::class, 'eshoeseven']);
Route::put('/simgseven/{id}/update', [RegController::class, 'simgseven']);
Route::get('/eshoeseven2/{id}/edit', [RegController::class, 'eshoeseven2']);
Route::put('/simgseven2/{id}/update', [RegController::class, 'simgseven2']);
Route::get('/eshoeseven3/{id}/edit', [RegController::class, 'eshoeseven3']);
Route::put('/simgseven3/{id}/update', [RegController::class, 'simgseven3']);
Route::get('/eshoeseven4/{id}/edit', [RegController::class, 'eshoeseven4']);
Route::put('/simgseven4/{id}/update', [RegController::class, 'simgseven4']);
Route::get('/redeleteshoeseven/{id}/delete', [RegController::class, 'recorddeleteshoeseven']);





Route::get('/reditshoeeight/{id}/edit', [RegController::class, 'recordeditshoeeight']);
Route::put('/reupdateshoeeight/{id}/update', [RegController::class, 'recordupdateshoeeight']);
Route::get('/eshoeeight/{id}/edit', [RegController::class, 'eshoeeight']);
Route::put('/simgeight/{id}/update', [RegController::class, 'simgeight']);
Route::get('/eshoeeight2/{id}/edit', [RegController::class, 'eshoeeight2']);
Route::put('/simgeight2/{id}/update', [RegController::class, 'simgeight2']);
Route::get('/eshoeeight3/{id}/edit', [RegController::class, 'eshoeeight3']);
Route::put('/simgeight3/{id}/update', [RegController::class, 'simgeight3']);
Route::get('/eshoeeight4/{id}/edit', [RegController::class, 'eshoeeight4']);
Route::put('/simgeight4/{id}/update', [RegController::class, 'simgeight4']);
Route::get('/redeleteshoeeight/{id}/delete', [RegController::class, 'recorddeleteshoeeight']);




Route::get('/reditshoenine/{id}/edit', [RegController::class, 'recordeditshoenine']);
Route::put('/reupdateshoenine/{id}/update', [RegController::class, 'recordupdateshoenine']);
Route::get('/eshoenine/{id}/edit', [RegController::class, 'eshoenine']);
Route::put('/simgnine/{id}/update', [RegController::class, 'simgnine']);
Route::get('/eshoenine2/{id}/edit', [RegController::class, 'eshoenine2']);
Route::put('/simgnine2/{id}/update', [RegController::class, 'simgnine2']);
Route::get('/eshoenine3/{id}/edit', [RegController::class, 'eshoenine3']);
Route::put('/simgnine3/{id}/update', [RegController::class, 'simgnine3']);
Route::get('/eshoenine4/{id}/edit', [RegController::class, 'eshoenine4']);
Route::put('/simgnine4/{id}/update', [RegController::class, 'simgnine4']);
Route::get('/redeleteshoenine/{id}/delete', [RegController::class, 'recorddeleteshoenine']);





Route::get('/reditshoeten/{id}/edit', [RegController::class, 'recordeditshoeten']);
Route::put('/reupdateshoeten/{id}/update', [RegController::class, 'recordupdateshoeten']);
Route::get('/eshoeten/{id}/edit', [RegController::class, 'eshoeten']);
Route::put('/simgten/{id}/update', [RegController::class, 'simgten']);
Route::get('/eshoeten2/{id}/edit', [RegController::class, 'eshoeten2']);
Route::put('/simgten2/{id}/update', [RegController::class, 'simgten2']);
Route::get('/eshoeten3/{id}/edit', [RegController::class, 'eshoeten3']);
Route::put('/simgten3/{id}/update', [RegController::class, 'simgten3']);
Route::get('/eshoeten4/{id}/edit', [RegController::class, 'eshoeten4']);
Route::put('/simgten4/{id}/update', [RegController::class, 'simgten4']);
Route::get('/redeleteshoeten/{id}/delete', [RegController::class, 'recorddeleteshoeten']);





Route::get('/reditshoeeleven/{id}/edit', [RegController::class, 'recordeditshoeeleven']);
Route::put('/reupdateshoeeleven/{id}/update', [RegController::class, 'recordupdateshoeeleven']);
Route::get('/eshoeeleven/{id}/edit', [RegController::class, 'eshoeeleven']);
Route::put('/simgeleven/{id}/update', [RegController::class, 'simgeleven']);
Route::get('/eshoeeleven2/{id}/edit', [RegController::class, 'eshoeeleven2']);
Route::put('/simgeleven2/{id}/update', [RegController::class, 'simgeleven2']);
Route::get('/eshoeeleven3/{id}/edit', [RegController::class, 'eshoeeleven3']);
Route::put('/simgeleven3/{id}/update', [RegController::class, 'simgeleven3']);
Route::get('/eshoeeleven4/{id}/edit', [RegController::class, 'eshoeeleven4']);
Route::put('/simgeleven4/{id}/update', [RegController::class, 'simgeleven4']);
Route::get('/redeleteshoeeleven/{id}/delete', [RegController::class, 'recorddeleteshoeeleven']);




Route::get('/reditshoetwelve/{id}/edit', [RegController::class, 'recordeditshoetwelve']);
Route::put('/reupdateshoetwelve/{id}/update', [RegController::class, 'recordupdateshoetwelve']);
Route::get('/eshoetwelve/{id}/edit', [RegController::class, 'eshoetwelve']);
Route::put('/simgtwelve/{id}/update', [RegController::class, 'simgtwelve']);
Route::get('/eshoetwelve2/{id}/edit', [RegController::class, 'eshoetwelve2']);
Route::put('/simgtwelve2/{id}/update', [RegController::class, 'simgtwelve2']);
Route::get('/eshoetwelve3/{id}/edit', [RegController::class, 'eshoetwelve3']);
Route::put('/simgtwelve3/{id}/update', [RegController::class, 'simgtwelve3']);
Route::get('/eshoetwelve4/{id}/edit', [RegController::class, 'eshoetwelve4']);
Route::put('/simgtwelve4/{id}/update', [RegController::class, 'simgtwelve4']);
Route::get('/redeleteshoetwelve/{id}/delete', [RegController::class, 'recorddeleteshoetwelve']);

























Route::get('/reditclothone/{id}/edit', [RegController::class, 'recordeditclothone']);
Route::put('/reupdateclothone/{id}/update', [RegController::class, 'recordupdateclothone']);
Route::get('/eclothone/{id}/edit', [RegController::class, 'eclothone']);
Route::put('/cimgone/{id}/update', [RegController::class, 'cimgone']);
Route::get('/eclothone2/{id}/edit', [RegController::class, 'eclothone2']);
Route::put('/cimgone2/{id}/update', [RegController::class, 'cimgone2']);
Route::get('/eclothone3/{id}/edit', [RegController::class, 'eclothone3']);
Route::put('/cimgone3/{id}/update', [RegController::class, 'cimgone3']);
Route::get('/eclothone4/{id}/edit', [RegController::class, 'eclothone4']);
Route::put('/cimgone4/{id}/update', [RegController::class, 'cimgone4']);
Route::get('/redeleteclothone/{id}/delete', [RegController::class, 'recorddeleteclothone']);




Route::get('/reditclothtwo/{id}/edit', [RegController::class, 'recordeditclothtwo']);
Route::put('/reupdateclothtwo/{id}/update', [RegController::class, 'recordupdateclothtwo']);
Route::get('/eclothtwo/{id}/edit', [RegController::class, 'eclothtwo']);
Route::put('/cimgtwo/{id}/update', [RegController::class, 'cimgtwo']);
Route::get('/eclothtwo2/{id}/edit', [RegController::class, 'eclothtwo2']);
Route::put('/cimgtwo2/{id}/update', [RegController::class, 'cimgtwo2']);
Route::get('/eclothtwo3/{id}/edit', [RegController::class, 'eclothtwo3']);
Route::put('/cimgtwo3/{id}/update', [RegController::class, 'cimgtwo3']);
Route::get('/eclothtwo4/{id}/edit', [RegController::class, 'eclothtwo4']);
Route::put('/cimgtwo4/{id}/update', [RegController::class, 'cimgtwo4']);
Route::get('/redeleteclothtwo/{id}/delete', [RegController::class, 'recorddeleteclothtwo']);




Route::get('/reditcloththree/{id}/edit', [RegController::class, 'recordeditcloththree']);
Route::put('/reupdatecloththree/{id}/update', [RegController::class, 'recordupdatecloththree']);
Route::get('/ecloththree/{id}/edit', [RegController::class, 'ecloththree']);
Route::put('/cimgthree/{id}/update', [RegController::class, 'cimgthree']);
Route::get('/ecloththree2/{id}/edit', [RegController::class, 'ecloththree2']);
Route::put('/cimgthree2/{id}/update', [RegController::class, 'cimgthree2']);
Route::get('/ecloththree3/{id}/edit', [RegController::class, 'ecloththree3']);
Route::put('/cimgthree3/{id}/update', [RegController::class, 'cimgthree3']);
Route::get('/ecloththree4/{id}/edit', [RegController::class, 'ecloththree4']);
Route::put('/cimgthree4/{id}/update', [RegController::class, 'cimgthree4']);
Route::get('/redeletecloththree/{id}/delete', [RegController::class, 'recorddeletecloththree']);




Route::get('/reditclothfour/{id}/edit', [RegController::class, 'recordeditclothfour']);
Route::put('/reupdateclothfour/{id}/update', [RegController::class, 'recordupdateclothfour']);
Route::get('/eclothfour/{id}/edit', [RegController::class, 'eclothfour']);
Route::put('/cimgfour/{id}/update', [RegController::class, 'cimgfour']);
Route::get('/eclothfour2/{id}/edit', [RegController::class, 'eclothfour2']);
Route::put('/cimgfour2/{id}/update', [RegController::class, 'cimgfour2']);
Route::get('/eclothfour3/{id}/edit', [RegController::class, 'eclothfour3']);
Route::put('/cimgfour3/{id}/update', [RegController::class, 'cimgfour3']);
Route::get('/eclothfour4/{id}/edit', [RegController::class, 'eclothfour4']);
Route::put('/cimgfour4/{id}/update', [RegController::class, 'cimgfour4']);
Route::get('/redeleteclothfour/{id}/delete', [RegController::class, 'recorddeleteclothfour']);





Route::get('/reditclothfive/{id}/edit', [RegController::class, 'recordeditclothfive']);
Route::put('/reupdateclothfive/{id}/update', [RegController::class, 'recordupdateclothfive']);
Route::get('/eclothfive/{id}/edit', [RegController::class, 'eclothfive']);
Route::put('/cimgfive/{id}/update', [RegController::class, 'cimgfive']);
Route::get('/eclothfive2/{id}/edit', [RegController::class, 'eclothfive2']);
Route::put('/cimgfive2/{id}/update', [RegController::class, 'cimgfive2']);
Route::get('/eclothfive3/{id}/edit', [RegController::class, 'eclothfive3']);
Route::put('/cimgfive3/{id}/update', [RegController::class, 'cimgfive3']);
Route::get('/eclothfive4/{id}/edit', [RegController::class, 'eclothfive4']);
Route::put('/cimgfive4/{id}/update', [RegController::class, 'cimgfive4']);
Route::get('/redeleteclothfive/{id}/delete', [RegController::class, 'recorddeleteclothfive']);




Route::get('/reditclothsix/{id}/edit', [RegController::class, 'recordeditclothsix']);
Route::put('/reupdateclothsix/{id}/update', [RegController::class, 'recordupdateclothsix']);
Route::get('/eclothsix/{id}/edit', [RegController::class, 'eclothsix']);
Route::put('/cimgsix/{id}/update', [RegController::class, 'cimgsix']);
Route::get('/eclothsix2/{id}/edit', [RegController::class, 'eclothsix2']);
Route::put('/cimgsix2/{id}/update', [RegController::class, 'cimgsix2']);
Route::get('/eclothsix3/{id}/edit', [RegController::class, 'eclothsix3']);
Route::put('/cimgsix3/{id}/update', [RegController::class, 'cimgsix3']);
Route::get('/eclothsix4/{id}/edit', [RegController::class, 'eclothsix4']);
Route::put('/cimgsix4/{id}/update', [RegController::class, 'cimgsix4']);
Route::get('/redeleteclothsix/{id}/delete', [RegController::class, 'recorddeleteclothsix']);






Route::get('/reditclothseven/{id}/edit', [RegController::class, 'recordeditclothseven']);
Route::put('/reupdateclothseven/{id}/update', [RegController::class, 'recordupdateclothseven']);
Route::get('/eclothseven/{id}/edit', [RegController::class, 'eclothseven']);
Route::put('/cimgseven/{id}/update', [RegController::class, 'cimgseven']);
Route::get('/eclothseven2/{id}/edit', [RegController::class, 'eclothseven2']);
Route::put('/cimgseven2/{id}/update', [RegController::class, 'cimgseven2']);
Route::get('/eclothseven3/{id}/edit', [RegController::class, 'eclothseven3']);
Route::put('/cimgseven3/{id}/update', [RegController::class, 'cimgseven3']);
Route::get('/eclothseven4/{id}/edit', [RegController::class, 'eclothseven4']);
Route::put('/cimgseven4/{id}/update', [RegController::class, 'cimgseven4']);
Route::get('/redeleteclothseven/{id}/delete', [RegController::class, 'recorddeleteclothseven']);





Route::get('/reditclotheight/{id}/edit', [RegController::class, 'recordeditclotheight']);
Route::put('/reupdateclotheight/{id}/update', [RegController::class, 'recordupdateclotheight']);
Route::get('/eclotheight/{id}/edit', [RegController::class, 'eclotheight']);
Route::put('/cimgeight/{id}/update', [RegController::class, 'cimgeight']);
Route::get('/eclotheight2/{id}/edit', [RegController::class, 'eclotheight2']);
Route::put('/cimgeight2/{id}/update', [RegController::class, 'cimgeight2']);
Route::get('/eclotheight3/{id}/edit', [RegController::class, 'eclotheight3']);
Route::put('/cimgeight3/{id}/update', [RegController::class, 'cimgeight3']);
Route::get('/eclotheight4/{id}/edit', [RegController::class, 'eclotheight4']);
Route::put('/cimgeight4/{id}/update', [RegController::class, 'cimgeight4']);
Route::get('/redeleteclotheight/{id}/delete', [RegController::class, 'recorddeleteclotheight']);




Route::get('/reditclothnine/{id}/edit', [RegController::class, 'recordeditclothnine']);
Route::put('/reupdateclothnine/{id}/update', [RegController::class, 'recordupdateclothnine']);
Route::get('/eclothnine/{id}/edit', [RegController::class, 'eclothnine']);
Route::put('/cimgnine/{id}/update', [RegController::class, 'cimgnine']);
Route::get('/eclothnine2/{id}/edit', [RegController::class, 'eclothnine2']);
Route::put('/cimgnine2/{id}/update', [RegController::class, 'cimgnine2']);
Route::get('/eclothnine3/{id}/edit', [RegController::class, 'eclothnine3']);
Route::put('/cimgnine3/{id}/update', [RegController::class, 'cimgnine3']);
Route::get('/eclothnine4/{id}/edit', [RegController::class, 'eclothnine4']);
Route::put('/cimgnine4/{id}/update', [RegController::class, 'cimgnine4']);
Route::get('/redeleteclothnine/{id}/delete', [RegController::class, 'recorddeleteclothnine']);





Route::get('/reditclothten/{id}/edit', [RegController::class, 'recordeditclothten']);
Route::put('/reupdateclothten/{id}/update', [RegController::class, 'recordupdateclothten']);
Route::get('/eclothten/{id}/edit', [RegController::class, 'eclothten']);
Route::put('/cimgten/{id}/update', [RegController::class, 'cimgten']);
Route::get('/eclothten2/{id}/edit', [RegController::class, 'eclothten2']);
Route::put('/cimgten2/{id}/update', [RegController::class, 'cimgten2']);
Route::get('/eclothten3/{id}/edit', [RegController::class, 'eclothten3']);
Route::put('/cimgten3/{id}/update', [RegController::class, 'cimgten3']);
Route::get('/eclothten4/{id}/edit', [RegController::class, 'eclothten4']);
Route::put('/cimgten4/{id}/update', [RegController::class, 'cimgten4']);
Route::get('/redeleteclothten/{id}/delete', [RegController::class, 'recorddeleteclothten']);





Route::get('/reditclotheleven/{id}/edit', [RegController::class, 'recordeditclotheleven']);
Route::put('/reupdateclotheleven/{id}/update', [RegController::class, 'recordupdateclotheleven']);
Route::get('/eclotheleven/{id}/edit', [RegController::class, 'eclotheleven']);
Route::put('/cimgeleven/{id}/update', [RegController::class, 'cimgeleven']);
Route::get('/eclotheleven2/{id}/edit', [RegController::class, 'eclotheleven2']);
Route::put('/cimgeleven2/{id}/update', [RegController::class, 'cimgeleven2']);
Route::get('/eclotheleven3/{id}/edit', [RegController::class, 'eclotheleven3']);
Route::put('/cimgeleven3/{id}/update', [RegController::class, 'cimgeleven3']);
Route::get('/eclotheleven4/{id}/edit', [RegController::class, 'eclotheleven4']);
Route::put('/cimgeleven4/{id}/update', [RegController::class, 'cimgeleven4']);
Route::get('/redeleteclotheleven/{id}/delete', [RegController::class, 'recorddeleteclotheleven']);




Route::get('/reditclothtwelve/{id}/edit', [RegController::class, 'recordeditclothtwelve']);
Route::put('/reupdateclothtwelve/{id}/update', [RegController::class, 'recordupdateclothtwelve']);
Route::get('/eclothtwelve/{id}/edit', [RegController::class, 'eclothtwelve']);
Route::put('/cimgtwelve/{id}/update', [RegController::class, 'cimgtwelve']);
Route::get('/eclothtwelve2/{id}/edit', [RegController::class, 'eclothtwelve2']);
Route::put('/cimgtwelve2/{id}/update', [RegController::class, 'cimgtwelve2']);
Route::get('/eclothtwelve3/{id}/edit', [RegController::class, 'eclothtwelve3']);
Route::put('/cimgtwelve3/{id}/update', [RegController::class, 'cimgtwelve3']);
Route::get('/eclothtwelve4/{id}/edit', [RegController::class, 'eclothtwelve4']);
Route::put('/cimgtwelve4/{id}/update', [RegController::class, 'cimgtwelve4']);
Route::get('/redeleteclothtwelve/{id}/delete', [RegController::class, 'recorddeleteclothtwelve']);


























Route::get('/reditvintageone/{id}/edit', [RegController::class, 'recordeditvintageone']);
Route::put('/reupdatevintageone/{id}/update', [RegController::class, 'recordupdatevintageone']);
Route::get('/evintageone/{id}/edit', [RegController::class, 'evintageone']);
Route::put('/vimgone/{id}/update', [RegController::class, 'vimgone']);
Route::get('/evintageone2/{id}/edit', [RegController::class, 'evintageone2']);
Route::put('/vimgone2/{id}/update', [RegController::class, 'vimgone2']);
Route::get('/evintageone3/{id}/edit', [RegController::class, 'evintageone3']);
Route::put('/vimgone3/{id}/update', [RegController::class, 'vimgone3']);
Route::get('/evintageone4/{id}/edit', [RegController::class, 'evintageone4']);
Route::put('/vimgone4/{id}/update', [RegController::class, 'vimgone4']);
Route::get('/redeletevintageone/{id}/delete', [RegController::class, 'recorddeletevintageone']);




Route::get('/reditvintagetwo/{id}/edit', [RegController::class, 'recordeditvintagetwo']);
Route::put('/reupdatevintagetwo/{id}/update', [RegController::class, 'recordupdatevintagetwo']);
Route::get('/evintagetwo/{id}/edit', [RegController::class, 'evintagetwo']);
Route::put('/vimgtwo/{id}/update', [RegController::class, 'vimgtwo']);
Route::get('/evintagetwo2/{id}/edit', [RegController::class, 'evintagetwo2']);
Route::put('/vimgtwo2/{id}/update', [RegController::class, 'vimgtwo2']);
Route::get('/evintagetwo3/{id}/edit', [RegController::class, 'evintagetwo3']);
Route::put('/vimgtwo3/{id}/update', [RegController::class, 'vimgtwo3']);
Route::get('/evintagetwo4/{id}/edit', [RegController::class, 'evintagetwo4']);
Route::put('/vimgtwo4/{id}/update', [RegController::class, 'vimgtwo4']);
Route::get('/redeletevintagetwo/{id}/delete', [RegController::class, 'recorddeletevintagetwo']);




Route::get('/reditvintagethree/{id}/edit', [RegController::class, 'recordeditvintagethree']);
Route::put('/reupdatevintagethree/{id}/update', [RegController::class, 'recordupdatevintagethree']);
Route::get('/evintagethree/{id}/edit', [RegController::class, 'evintagethree']);
Route::put('/vimgthree/{id}/update', [RegController::class, 'vimgthree']);
Route::get('/evintagethree2/{id}/edit', [RegController::class, 'evintagethree2']);
Route::put('/vimgthree2/{id}/update', [RegController::class, 'vimgthree2']);
Route::get('/evintagethree3/{id}/edit', [RegController::class, 'evintagethree3']);
Route::put('/vimgthree3/{id}/update', [RegController::class, 'vimgthree3']);
Route::get('/evintagethree4/{id}/edit', [RegController::class, 'evintagethree4']);
Route::put('/vimgthree4/{id}/update', [RegController::class, 'vimgthree4']);
Route::get('/redeletevintagethree/{id}/delete', [RegController::class, 'recorddeletevintagethree']);




Route::get('/reditvintagefour/{id}/edit', [RegController::class, 'recordeditvintagefour']);
Route::put('/reupdatevintagefour/{id}/update', [RegController::class, 'recordupdatevintagefour']);
Route::get('/evintagefour/{id}/edit', [RegController::class, 'evintagefour']);
Route::put('/vimgfour/{id}/update', [RegController::class, 'vimgfour']);
Route::get('/evintagefour2/{id}/edit', [RegController::class, 'evintagefour2']);
Route::put('/vimgfour2/{id}/update', [RegController::class, 'vimgfour2']);
Route::get('/evintagefour3/{id}/edit', [RegController::class, 'evintagefour3']);
Route::put('/vimgfour3/{id}/update', [RegController::class, 'vimgfour3']);
Route::get('/evintagefour4/{id}/edit', [RegController::class, 'evintagefour4']);
Route::put('/vimgfour4/{id}/update', [RegController::class, 'vimgfour4']);
Route::get('/redeletevintagefour/{id}/delete', [RegController::class, 'recorddeletevintagefour']);





Route::get('/reditvintagefive/{id}/edit', [RegController::class, 'recordeditvintagefive']);
Route::put('/reupdatevintagefive/{id}/update', [RegController::class, 'recordupdatevintagefive']);
Route::get('/evintagefive/{id}/edit', [RegController::class, 'evintagefive']);
Route::put('/vimgfive/{id}/update', [RegController::class, 'vimgfive']);
Route::get('/evintagefive2/{id}/edit', [RegController::class, 'evintagefive2']);
Route::put('/vimgfive2/{id}/update', [RegController::class, 'vimgfive2']);
Route::get('/evintagefive3/{id}/edit', [RegController::class, 'evintagefive3']);
Route::put('/vimgfive3/{id}/update', [RegController::class, 'vimgfive3']);
Route::get('/evintagefive4/{id}/edit', [RegController::class, 'evintagefive4']);
Route::put('/vimgfive4/{id}/update', [RegController::class, 'vimgfive4']);
Route::get('/redeletevintagefive/{id}/delete', [RegController::class, 'recorddeletevintagefive']);




Route::get('/reditvintagesix/{id}/edit', [RegController::class, 'recordeditvintagesix']);
Route::put('/reupdatevintagesix/{id}/update', [RegController::class, 'recordupdatevintagesix']);
Route::get('/evintagesix/{id}/edit', [RegController::class, 'evintagesix']);
Route::put('/vimgsix/{id}/update', [RegController::class, 'vimgsix']);
Route::get('/evintagesix2/{id}/edit', [RegController::class, 'evintagesix2']);
Route::put('/vimgsix2/{id}/update', [RegController::class, 'vimgsix2']);
Route::get('/evintagesix3/{id}/edit', [RegController::class, 'evintagesix3']);
Route::put('/vimgsix3/{id}/update', [RegController::class, 'vimgsix3']);
Route::get('/evintagesix4/{id}/edit', [RegController::class, 'evintagesix4']);
Route::put('/vimgsix4/{id}/update', [RegController::class, 'vimgsix4']);
Route::get('/redeletevintagesix/{id}/delete', [RegController::class, 'recorddeletevintagesix']);






Route::get('/reditvintageseven/{id}/edit', [RegController::class, 'recordeditvintageseven']);
Route::put('/reupdatevintageseven/{id}/update', [RegController::class, 'recordupdatevintageseven']);
Route::get('/evintageseven/{id}/edit', [RegController::class, 'evintageseven']);
Route::put('/vimgseven/{id}/update', [RegController::class, 'vimgseven']);
Route::get('/evintageseven2/{id}/edit', [RegController::class, 'evintageseven2']);
Route::put('/vimgseven2/{id}/update', [RegController::class, 'vimgseven2']);
Route::get('/evintageseven3/{id}/edit', [RegController::class, 'evintageseven3']);
Route::put('/vimgseven3/{id}/update', [RegController::class, 'vimgseven3']);
Route::get('/evintageseven4/{id}/edit', [RegController::class, 'evintageseven4']);
Route::put('/vimgseven4/{id}/update', [RegController::class, 'vimgseven4']);
Route::get('/redeletevintageseven/{id}/delete', [RegController::class, 'recorddeletevintageseven']);





Route::get('/reditvintageeight/{id}/edit', [RegController::class, 'recordeditvintageeight']);
Route::put('/reupdatevintageeight/{id}/update', [RegController::class, 'recordupdatevintageeight']);
Route::get('/evintageeight/{id}/edit', [RegController::class, 'evintageeight']);
Route::put('/vimgeight/{id}/update', [RegController::class, 'vimgeight']);
Route::get('/evintageeight2/{id}/edit', [RegController::class, 'evintageeight2']);
Route::put('/vimgeight2/{id}/update', [RegController::class, 'vimgeight2']);
Route::get('/evintageeight3/{id}/edit', [RegController::class, 'evintageeight3']);
Route::put('/vimgeight3/{id}/update', [RegController::class, 'vimgeight3']);
Route::get('/evintageeight4/{id}/edit', [RegController::class, 'evintageeight4']);
Route::put('/vimgeight4/{id}/update', [RegController::class, 'vimgeight4']);
Route::get('/redeletevintageeight/{id}/delete', [RegController::class, 'recorddeletevintageeight']);




Route::get('/reditvintagenine/{id}/edit', [RegController::class, 'recordeditvintagenine']);
Route::put('/reupdatevintagenine/{id}/update', [RegController::class, 'recordupdatevintagenine']);
Route::get('/evintagenine/{id}/edit', [RegController::class, 'evintagenine']);
Route::put('/vimgnine/{id}/update', [RegController::class, 'vimgnine']);
Route::get('/evintagenine2/{id}/edit', [RegController::class, 'evintagenine2']);
Route::put('/vimgnine2/{id}/update', [RegController::class, 'vimgnine2']);
Route::get('/evintagenine3/{id}/edit', [RegController::class, 'evintagenine3']);
Route::put('/vimgnine3/{id}/update', [RegController::class, 'vimgnine3']);
Route::get('/evintagenine4/{id}/edit', [RegController::class, 'evintagenine4']);
Route::put('/vimgnine4/{id}/update', [RegController::class, 'vimgnine4']);
Route::get('/redeletevintagenine/{id}/delete', [RegController::class, 'recorddeletevintagenine']);





Route::get('/reditvintageten/{id}/edit', [RegController::class, 'recordeditvintageten']);
Route::put('/reupdatevintageten/{id}/update', [RegController::class, 'recordupdatevintageten']);
Route::get('/evintageten/{id}/edit', [RegController::class, 'evintageten']);
Route::put('/vimgten/{id}/update', [RegController::class, 'vimgten']);
Route::get('/evintageten2/{id}/edit', [RegController::class, 'evintageten2']);
Route::put('/vimgten2/{id}/update', [RegController::class, 'vimgten2']);
Route::get('/evintageten3/{id}/edit', [RegController::class, 'evintageten3']);
Route::put('/vimgten3/{id}/update', [RegController::class, 'vimgten3']);
Route::get('/evintageten4/{id}/edit', [RegController::class, 'evintageten4']);
Route::put('/vimgten4/{id}/update', [RegController::class, 'vimgten4']);
Route::get('/redeletevintageten/{id}/delete', [RegController::class, 'recorddeletevintageten']);





Route::get('/reditvintageeleven/{id}/edit', [RegController::class, 'recordeditvintageeleven']);
Route::put('/reupdatevintageeleven/{id}/update', [RegController::class, 'recordupdatevintageeleven']);
Route::get('/evintageeleven/{id}/edit', [RegController::class, 'evintageeleven']);
Route::put('/vimgeleven/{id}/update', [RegController::class, 'vimgeleven']);
Route::get('/evintageeleven2/{id}/edit', [RegController::class, 'evintageeleven2']);
Route::put('/vimgeleven2/{id}/update', [RegController::class, 'vimgeleven2']);
Route::get('/evintageeleven3/{id}/edit', [RegController::class, 'evintageeleven3']);
Route::put('/vimgeleven3/{id}/update', [RegController::class, 'vimgeleven3']);
Route::get('/evintageeleven4/{id}/edit', [RegController::class, 'evintageeleven4']);
Route::put('/vimgeleven4/{id}/update', [RegController::class, 'vimgeleven4']);
Route::get('/redeletevintageeleven/{id}/delete', [RegController::class, 'recorddeletevintageeleven']);




Route::get('/reditvintagetwelve/{id}/edit', [RegController::class, 'recordeditvintagetwelve']);
Route::put('/reupdatevintagetwelve/{id}/update', [RegController::class, 'recordupdatevintagetwelve']);
Route::get('/evintagetwelve/{id}/edit', [RegController::class, 'evintagetwelve']);
Route::put('/vimgtwelve/{id}/update', [RegController::class, 'vimgtwelve']);
Route::get('/evintagetwelve2/{id}/edit', [RegController::class, 'evintagetwelve2']);
Route::put('/vimgtwelve2/{id}/update', [RegController::class, 'vimgtwelve2']);
Route::get('/evintagetwelve3/{id}/edit', [RegController::class, 'evintagetwelve3']);
Route::put('/vimgtwelve3/{id}/update', [RegController::class, 'vimgtwelve3']);
Route::get('/evintagetwelve4/{id}/edit', [RegController::class, 'evintagetwelve4']);
Route::put('/vimgtwelve4/{id}/update', [RegController::class, 'vimgtwelve4']);
Route::get('/redeletevintagetwelve/{id}/delete', [RegController::class, 'recorddeletevintagetwelve']);

























Route::get('/cart', [RegController::class, 'cart']);
Route::get('/buynow', [RegController::class, 'buynow']);
Route::post('/buynow', [RegController::class, 'orders']);
Route::get('/seeorders', [RegController::class, 'seeorders']);
Route::get('/admin', [RegController::class, 'adminmove']);
Route::post('/admins', [RegController::class, 'adminmovesave']);

Route::post('/logout', [RegController::class, 'logout']);










// Authentication routes
Auth::routes();

// Route for the home page after login
Route::get('/home', [HomeController::class, 'index']);
Route::get('/shoes', [HomeController::class, 'shoes']);
Route::get('/clothing', [HomeController::class, 'clothing']);
Route::get('/vintage', [HomeController::class, 'vintage']);
Route::get('/shoeone', [HomeController::class, 'shoeone']);
Route::post('/shoeone', [RegController::class, 'cartsubmitform']);
Route::get('/delcart/{id}/delete', [RegController::class, 'delcart']);
Route::get('/shoetwo', [HomeController::class, 'shoetwo']);
Route::get('/shoethree', [HomeController::class, 'shoethree']);
Route::get('/shoefour', [HomeController::class, 'shoefour']);
Route::get('/shoefive', [HomeController::class, 'shoefive']);
Route::get('/shoesix', [HomeController::class, 'shoesix']);
Route::get('/shoeseven', [HomeController::class, 'shoeseven']);
Route::get('/shoeeight', [HomeController::class, 'shoeeight']);
Route::get('/shoenine', [HomeController::class, 'shoenine']);
Route::get('/shoeten', [HomeController::class, 'shoeten']);
Route::get('/shoeeleven', [HomeController::class, 'shoeeleven']);
Route::get('/shoetwelve', [HomeController::class, 'shoetwelve']);
Route::get('/clothone', [HomeController::class, 'clothone']);
Route::get('/clothtwo', [HomeController::class, 'clothtwo']);
Route::get('/cloththree', [HomeController::class, 'cloththree']);
Route::get('/clothfour', [HomeController::class, 'clothfour']);
Route::get('/clothfive', [HomeController::class, 'clothfive']);
Route::get('/clothsix', [HomeController::class, 'clothsix']);
Route::get('/clothsevn', [HomeController::class, 'clothsevn']);
Route::get('/clotheight', [HomeController::class, 'clotheight']);
Route::get('/clothnine', [HomeController::class, 'clothnine']);
Route::get('/clothten', [HomeController::class, 'clothten']);
Route::get('/clotheleven', [HomeController::class, 'clotheleven']);
Route::get('/clothtwelve', [HomeController::class, 'clothtwelve']);
Route::get('/vintageone', [HomeController::class, 'vintageone']);
Route::get('/vintagetwo', [HomeController::class, 'vintagetwo']);
Route::get('/vintagethree', [HomeController::class, 'vintagethree']);
Route::get('/vintagefour', [HomeController::class, 'vintagefour']);
Route::get('/vintagefive', [HomeController::class, 'vintagefive']);
Route::get('/vintagesix', [HomeController::class, 'vintagesix']);
Route::get('/vintageseven', [HomeController::class, 'vintageseven']);
Route::get('/vintageeight', [HomeController::class, 'vintageeight']);
Route::get('/vintagenine', [HomeController::class, 'vintagenine']);
Route::get('/vintageten', [HomeController::class, 'vintageten']);
Route::get('/vintageeleven', [HomeController::class, 'vintageeleven']);
Route::get('/vintagetwelve', [HomeController::class, 'vintagetwelve']);
Route::get('/aboutus', [HomeController::class, 'aboutus']);
Route::get('/contactus', [HomeController::class, 'contactus']);
Route::get('/terms', [HomeController::class, 'terms']);
Route::get('/terms', [HomeController::class, 'terms']);

Route::get('/adminlog', function () {
    return view('admin/adminlog');
});;















// Route for the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');




// Route for the welcome page


