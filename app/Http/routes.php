<?php

/****************   Model binding into route **************************/
Route::model('article', 'App\Article');

Route::model('procedure', 'App\Procedure');
Route::model('procedurecategory', 'App\ProcedureCategory');

Route::model('articlecategory', 'App\ArticleCategory');
Route::model('language', 'App\Language');
Route::model('photoalbum', 'App\PhotoAlbum');
Route::model('photo', 'App\Photo');
Route::model('user', 'App\User');
Route::model('nav', 'App\Nav');
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);

Route::get('products', ['as' => 'product', 'uses' => 'ProductsController@categories']);
Route::get('products/{category}', ['as' => 'products', 'uses' => 'ProductsController@categories']);

Route::get('facility', ['as' => 'facility', 'uses' => 'PagesController@facility']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::post('about', ['as' => 'contact_store', 'uses' => 'AboutController@store']);

Route::get('procedure', ['as' => 'procedure', 'uses' => 'HomeController@index']);
Route::get('procedures/{category}', 'ProceduresController@categories');
Route::get('procedures/{category}', ['as' => 'procedures', 'uses' => 'ProceduresController@categories']);
Route::get('procedures/{category}/{name}', 'ProceduresController@getProcedures');

//Route::get('contact', 'PagesController@contact');
//Route::post('contact', ['as' => 'contact_store', 'uses' => 'AboutController@store']);
Route::get('articles', 'ArticlesController@index');
Route::get('article/{slug}', 'ArticlesController@show');
Route::get('video/{id}', 'VideoController@show');
Route::get('photo/{id}', 'PhotoController@show');
Route::get('privacy', 'PagesController@privacy');
Route::get('gallery', 'PagesController@gallery');
Route::get('videos', 'PagesController@videos');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/***************    Admin routes  **********************************/
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {

    # Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');

    # Language
    Route::get('language/data', 'Admin\LanguageController@data');
    Route::get('language/{language}/show', 'Admin\LanguageController@show');
    Route::get('language/{language}/edit', 'Admin\LanguageController@edit');
    Route::get('language/{language}/delete', 'Admin\LanguageController@delete');
    Route::resource('language', 'Admin\LanguageController');

    # Article category
    Route::get('articlecategory/data', 'Admin\ArticleCategoriesController@data');
    Route::get('articlecategory/{articlecategory}/show', 'Admin\ArticleCategoriesController@show');
    Route::get('articlecategory/{articlecategory}/edit', 'Admin\ArticleCategoriesController@edit');
    Route::get('articlecategory/{articlecategory}/delete', 'Admin\ArticleCategoriesController@delete');
    Route::get('articlecategory/reorder', 'ArticleCategoriesController@getReorder');
    Route::resource('articlecategory', 'Admin\ArticleCategoriesController');

    # Articles
    Route::get('article/data', 'Admin\ArticleController@data');
    Route::get('article/{article}/show', 'Admin\ArticleController@show');
    Route::get('article/{article}/edit', 'Admin\ArticleController@edit');
    Route::get('article/{article}/delete', 'Admin\ArticleController@delete');
    Route::get('article/reorder', 'Admin\ArticleController@getReorder');
    Route::resource('article', 'Admin\ArticleController');

    # Products
    Route::get('products/data', 'Admin\ProductController@data');
    Route::get('products/{article}/show', 'Admin\ProductController@show');
    Route::get('products/{article}/edit', 'Admin\ProductController@edit');
    Route::get('products/{article}/delete', 'Admin\ProductController@delete');
    Route::get('products/reorder', 'Admin\ProductController@getReorder');
    Route::resource('products', 'Admin\ProductController');

    # Photo Album
    Route::get('photoalbum/data', 'Admin\PhotoAlbumController@data');
    Route::get('photoalbum/{photoalbum}/show', 'Admin\PhotoAlbumController@show');
    Route::get('photoalbum/{photoalbum}/edit', 'Admin\PhotoAlbumController@edit');
    Route::get('photoalbum/{photoalbum}/delete', 'Admin\PhotoAlbumController@delete');
    Route::resource('photoalbum', 'Admin\PhotoAlbumController');

    # Photo
    Route::get('photo/data', 'Admin\PhotoController@data');
    Route::get('photo/{photo}/show', 'Admin\PhotoController@show');
    Route::get('photo/{photo}/edit', 'Admin\PhotoController@edit');
    Route::get('photo/{photo}/delete', 'Admin\PhotoController@delete');
    Route::resource('photo', 'Admin\PhotoController');

    # Users
    Route::get('user/data', 'Admin\UserController@data');
    Route::get('user/{user}/show', 'Admin\UserController@show');
    Route::get('user/{user}/edit', 'Admin\UserController@edit');
    Route::get('user/{user}/delete', 'Admin\UserController@delete');
    Route::resource('user', 'Admin\UserController');
});
