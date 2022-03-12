<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

//Front
Route::get('/FrontDocument', 'FrontDocumentController@index')->name('FrontDocument');
Route::get('/FrontDocument/create', 'FrontDocumentController@create');
Route::post('/FrontDocument/store', 'FrontDocumentController@store')->name('FrontDocument.store');
Route::get('/FrontDocument/{post}', 'FrontDocumentController@show')->name('FrontDocument.show');
Route::get('/FrontDocument/{post}/edit', 'FrontDocumentController@edit')->name('FrontDocument.edit');
Route::patch('/FrontDocument/{post}', 'FrontDocumentController@update')->name('FrontDocument.update');
Route::delete('/FrontDocument/{post}', 'FrontDocumentController@destroy')->name('FrontDocument.destroy');

Route::get('/Front', 'FrontController@index')->name('Front');
Route::get('/Front/create', 'FrontController@create')->name('Front.create');
Route::get('/Front/update', 'FrontController@update')->name('Front.update');
Route::get('/Front/delete', 'FrontController@delete')->name('Front.delete');
Route::get('/Front/firstOrCreate', 'FrontController@firstOrCreate')->name('Front.firstOrCreate');
Route::get('/Front/updateOrCreate', 'FrontController@updateOrCreate')->name('Front.updateOrCreate');

//-----------------------------------------------------------------------------------------------------------------------//
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Currencies
    Route::delete('currencies/destroy', 'CurrencyController@massDestroy')->name('currencies.massDestroy');
    Route::resource('currencies', 'CurrencyController');

    // Transactiontypes
    Route::delete('transaction-types/destroy', 'TransactionTypeController@massDestroy')->name('transaction-types.massDestroy');
    Route::resource('transaction-types', 'TransactionTypeController');

    // Incomesources
    Route::delete('income-sources/destroy', 'IncomeSourceController@massDestroy')->name('income-sources.massDestroy');
    Route::resource('income-sources', 'IncomeSourceController');

    // Clientstatuses
    Route::delete('client-statuses/destroy', 'ClientStatusController@massDestroy')->name('client-statuses.massDestroy');
    Route::resource('client-statuses', 'ClientStatusController');

    // Projectstatuses
    Route::delete('project-statuses/destroy', 'ProjectStatusController@massDestroy')->name('project-statuses.massDestroy');
    Route::resource('project-statuses', 'ProjectStatusController');

    // Clients
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientController');

    // Projects
    Route::delete('projects/destroy', 'ProjectController@massDestroy')->name('projects.massDestroy');
    Route::resource('projects', 'ProjectController');

    // Notes
    Route::delete('notes/destroy', 'NoteController@massDestroy')->name('notes.massDestroy');
    Route::resource('notes', 'NoteController');

    // Documents
    Route::delete('documents/destroy', 'DocumentController@massDestroy')->name('documents.massDestroy');
    Route::post('documents/media', 'DocumentController@storeMedia')->name('documents.storeMedia');
    Route::resource('documents', 'DocumentController');

    // Transactions
    Route::delete('transactions/destroy', 'TransactionController@massDestroy')->name('transactions.massDestroy');
    Route::resource('transactions', 'TransactionController');

    // Clientreports
    Route::delete('client-reports/destroy', 'ClientReportController@massDestroy')->name('client-reports.massDestroy');
    Route::resource('client-reports', 'ClientReportController');
});
