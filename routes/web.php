<?php

use Illuminate\Support\Facades\Route;

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


Route::get('setlocale/{locale}',function($lang){
       \Session::put('locale',$lang);
       return redirect()->back();   
})->name('setlocale');

Route::group(['middleware'=>'language'],function ()
{

	// Admin Routes
	Route::prefix('admin')->group(function () {

		Route::get('/login', 					[App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
		Route::post('/login', 					[App\Http\Controllers\Auth\LoginController::class, 'login_go'])->name('login_go');
		Route::get('/logout', 					[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

		// Admin Authenticated Routes
		Route::group(['middleware' => ['auth']], function() {

			Route::get('/dashboard', 			[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

			// Profile
			Route::get('/profile', 				[App\Http\Controllers\UserController::class, 'profile'])->name('profile');
			Route::post('/profile/update', 		[App\Http\Controllers\UserController::class, 'profile_update'])->name('profile.update');


			// User
			Route::prefix('users')->group(function () {
				Route::get('/index', 			[App\Http\Controllers\UserController::class, 'index'])->name('users.index');
				Route::get('/create', 			[App\Http\Controllers\UserController::class, 'create'])->name('users.create');
				Route::post('/store', 			[App\Http\Controllers\UserController::class, 'store'])->name('users.store');
				Route::get('/edit/{id}', 		[App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
				Route::post('/update/{id}', 	[App\Http\Controllers\UserController::class, 'update'])->name('users.update');
				Route::post('/destroy', 		[App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
				Route::get('/status_update', 	[App\Http\Controllers\UserController::class, 'status_update'])->name('users.status_update');
			});

			// Role
			Route::prefix('roles')->group(function () {
				Route::get('/index', 			[App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
				Route::get('/create', 			[App\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
				Route::post('/store', 			[App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
				Route::get('/edit/{id}', 		[App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
				Route::post('/update/{id}', 	[App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
				Route::post('/destroy', 		[App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');
			});

			// Permission
			Route::prefix('permissions')->group(function () {
				Route::get('/index', 			[App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
				Route::get('/create', 			[App\Http\Controllers\PermissionController::class, 'create'])->name('permissions.create');
				Route::post('/store', 			[App\Http\Controllers\PermissionController::class, 'store'])->name('permissions.store');
				Route::get('/edit/{id}', 		[App\Http\Controllers\PermissionController::class, 'edit'])->name('permissions.edit');
				Route::post('/update/{id}', 	[App\Http\Controllers\PermissionController::class, 'update'])->name('permissions.update');
				Route::post('/destroy', 		[App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissions.destroy');
			});

			
			

			// Setting
			Route::prefix('setting')->group(function () {
				Route::get('/file-manager/index', 	[App\Http\Controllers\FileManagerController::class, 'index'])->name('filemanager.index');
				Route::get('/site-setting/edit', 	[App\Http\Controllers\SettingController::class, 'edit'])->name('settings.site-setting.edit');
				Route::post('/site-setting/update/{id}', 	[App\Http\Controllers\SettingController::class, 'update'])->name('settings.site-setting.update');
			});








			// Article
			Route::prefix('articles')->group(function () {
				Route::get('/index', 			[App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
				Route::get('/create', 			[App\Http\Controllers\ArticleController::class, 'create'])->name('articles.create');
				Route::post('/store', 			[App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
				Route::get('/edit/{id}', 		[App\Http\Controllers\ArticleController::class, 'edit'])->name('articles.edit');
				Route::post('/update/{id}', 	[App\Http\Controllers\ArticleController::class, 'update'])->name('articles.update');
				Route::post('/destroy', 		[App\Http\Controllers\ArticleController::class, 'destroy'])->name('articles.destroy');
				Route::get('/status_update', 	[App\Http\Controllers\ArticleController::class, 'status_update'])->name('articles.status_update');
			});


			// Article Category
			Route::prefix('articlecategories')->group(function () {
				Route::get('/index', 			[App\Http\Controllers\ArticleCategoryController::class, 'index'])->name('articlecategories.index');
				Route::get('/create', 			[App\Http\Controllers\ArticleCategoryController::class, 'create'])->name('articlecategories.create');
				Route::post('/store', 			[App\Http\Controllers\ArticleCategoryController::class, 'store'])->name('articlecategories.store');
				Route::get('/edit/{id}', 		[App\Http\Controllers\ArticleCategoryController::class, 'edit'])->name('articlecategories.edit');
				Route::post('/update/{id}', 	[App\Http\Controllers\ArticleCategoryController::class, 'update'])->name('articlecategories.update');
				Route::post('/destroy', 		[App\Http\Controllers\ArticleCategoryController::class, 'destroy'])->name('articlecategories.destroy');
				Route::get('/status_update', 	[App\Http\Controllers\ArticleCategoryController::class, 'status_update'])->name('articlecategories.status_update');
			});

		});
	});


	



	// Frontend Routes
	Route::get('/', 					[App\Http\Controllers\FrontendController::class, 'index'])->name('home');
	Route::get('/category/{slug}', 			[App\Http\Controllers\FrontendController::class, 'article_category'])->name('article_category');
	Route::get('/article/{slug}', 			[App\Http\Controllers\FrontendController::class, 'article'])->name('article');
	

});








	
