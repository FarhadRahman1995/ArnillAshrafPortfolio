<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyExportImportController;

/*
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('home');
Route::get('/notice', 'NoticePagesController@index')->name('notice');
Route::get('/notice-single/{id}', 'NoticePagesController@show')->name('notice-single');

Route::get('/socialmedia', 'SocialMediaPagesController@index')->name('socialmedia');

Route::get('/blog', 'BlogPagesController@index')->name('blog');
Route::get('/blog-single/{id}', 'BlogPagesController@show')->name('blog-single');

Route::prefix('admin')->group(function(){
Route::get('/', 'PagesController@dashboard')->name('admin.dashboard');
Route::get('/contacts', 'ContactFormController@index')->name('admin.contact');
Route::delete('/contacts/destroy/{id}', 'ContactFormController@destroy')->name('admin.contact.destroy');


Route::get('/main', 'MainPagesController@index')->name('admin.main');
Route::put('/main', 'MainPagesController@update')->name('admin.main.update');

Route::get('/about', 'AboutPagesController@index')->name('admin.about');
Route::put('/about', 'AboutPagesController@update')->name('admin.about.update');

Route::get('/notices/create', 'NoticePagesController@create')->name('admin.notices.create');
Route::put('/notices/create', 'NoticePagesController@store')->name('admin.notices.store');
Route::get('/notices/list', 'NoticePagesController@list')->name('admin.notices.list');
Route::get('/notices/edit/{id}', 'NoticePagesController@edit')->name('admin.notices.edit');
Route::post('/notices/update/{id}', 'NoticePagesController@update')->name('admin.notices.update');
Route::delete('/notices/destroy/{id}', 'NoticePagesController@destroy')->name('admin.notices.destroy');

Route::get('/socialmedia/create', 'SocialMediaPagesController@create')->name('admin.socialmedia.create');
Route::put('/socialmedia/create', 'SocialMediaPagesController@store')->name('admin.socialmedia.store');
Route::get('/socialmedia/list', 'SocialMediaPagesController@list')->name('admin.socialmedia.list');
Route::get('/socialmedia/edit/{id}', 'SocialMediaPagesController@edit')->name('admin.socialmedia.edit');
Route::post('/socialmedia/update/{id}', 'SocialMediaPagesController@update')->name('admin.socialmedia.update');
Route::delete('/socialmedia/destroy/{id}', 'SocialMediaPagesController@destroy')->name('admin.socialmedia.destroy');

Route::get('/blogs/create', 'BlogPagesController@create')->name('admin.blogs.create');
Route::put('/blogs/create', 'BlogPagesController@store')->name('admin.blogs.store');
Route::get('/blogs/list', 'BlogPagesController@list')->name('admin.blogs.list');
Route::get('/blogs/edit/{id}', 'BlogPagesController@edit')->name('admin.blogs.edit');
Route::post('/blogs/update/{id}', 'BlogPagesController@update')->name('admin.blogs.update');
Route::delete('/blogs/destroy/{id}', 'BlogPagesController@destroy')->name('admin.blogs.destroy');

});

Route::post('/contacts', 'ContactFormController@createForm')/*->name('contact.store')*/;
Route::post('/contact', 'ContactFormController@ContactUsForm')->name('contact.store');

// Export Controller
Route::get('exports', [ MyExportImportController::class, 'importExportView' ]);
Route::get('export', [ MyExportImportController::class, 'export' ])->name('export');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
