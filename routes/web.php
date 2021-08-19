<?php

use Illuminate\Support\Facades\Route;

  
  Route::get('/', 'PagesController@index')->name('index');
  Route::get('/about', 'PagesController@about')->name('about');
  Route::get('/careers', 'PagesController@careers')->name('careers');
  Route::get('/contact', 'PagesController@contact')->name('contact');
  Route::get('/policies', 'PagesController@policies')->name('policies');
  Route::get('/pricing', 'PagesController@pricing')->name('pricing');
  Route::get('/term', 'PagesController@term')->name('term');
  Route::get('contact-us', 'ContactController@getContact')->name('getcontact');
  Route::post('contact-us', 'ContactController@saveContact')->name('savecontact');


  Route::get('/property', 'PagesController@showProperty')->name('property.show');
  Route::get('/property/details/{property}', 'PagesController@propertyDetail')->name('property.detail');
  Route::get('/dropdownlist','DropdownController@index');
  Route::get('/get-state-list','DropdownController@getStateList');
  Route::get('/get-city-list','DropdownController@getCityList');
  Route::get('/blog', 'PagesController@blogCategories')->name('blog.categories');
  Route::get('/blog/single_blog/{id}', 'PagesController@singleBlog')->name('single_blog');

Route::group(['middleware' => ['auth', 'is_admin']], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('/admin/country', 'CountryController');
    
    Route::get('/admin/state', 'StateController@index')->name('state.index');
    Route::get('/admin/state/create', 'StateController@create' )->name('state.create');
    Route::post('/admin/state/', 'StateController@store' )->name('state.store');
    Route::get('/admin/state/{state}/edit', 'StateController@edit')->name('state.edit');
    Route::PATCH('/admin/state/{state}', 'StateController@update')->name('state.update');
    Route::delete('/admin/state/{state}', 'StateController@destroy')->name('state.destroy');

    Route::get('/admin/city', 'CityController@index')->name('city.index');
    Route::get('/admin/city/create', 'CityController@create' )->name('city.create');
    Route::post('/admin/city/', 'CityController@store' )->name('city.store');
    Route::get('/admin/city/{city}/edit', 'CityController@edit')->name('city.edit');
    Route::PATCH('/admin/city/{city}', 'CityController@update')->name('city.update');
    Route::delete('/admin/city/{city}', 'CityController@destroy')->name('city.destroy');

    Route::get('/admin/amenity', 'AmenityController@index')->name('amenity.index');
    Route::get('/admin/amenity/create', 'AmenityController@create' )->name('amenity.create');
    Route::post('/admin/amenity/', 'AmenityController@store' )->name('amenity.store');
    Route::get('/admin/amenity/{amenity}/edit', 'AmenityController@edit')->name('amenity.edit');
    Route::PATCH('/admin/amenity/{amenity}', 'AmenityController@update')->name('amenity.update');
    Route::delete('/admin/amenity/{amenity}', 'AmenityController@destroy')->name('amenity.destroy');

    Route::get('/admin/property', 'PropertyController@index')->name('property.index');
    Route::get('/admin/property/create', 'PropertyController@create' )->name('property.create');
    Route::post('/admin/property/', 'PropertyController@store' )->name('property.store'); 
    Route::get('/admin/property/{property}/edit', 'PropertyController@edit')->name('property.edit');
    Route::PATCH('/admin/property/{property}', 'PropertyController@update')->name('property.update');
    Route::delete('/admin/property/{property}', 'PropertyController@destroy')->name('property.destroy');
    Route::get('propertyvirified', 'PropertyController@verified')->name('property.verified');
    Route::get('propertysold', 'PropertyController@sold')->name('property.sold');

    Route::get('/admin/banner', 'BannerController@index')->name('banner.index');
    Route::get('/admin/banner/create', 'BannerController@create' )->name('banner.create');
    Route::post('/admin/banner/', 'BannerController@store' )->name('banner.store'); 
    Route::get('/admin/banner/{banner}/edit', 'BannerController@edit')->name('banner.edit');
    Route::PATCH('/admin/banner/{banner}', 'BannerController@update')->name('banner.update');
    Route::delete('/admin/banner/{banner}', 'BannerController@destroy')->name('banner.destroy');

    Route::get('/admin/category', 'CategoryController@index')->name('category.index');
    Route::get('/admin/category/create', 'CategoryController@create' )->name('category.create');
    Route::post('/admin/category/', 'CategoryController@store' )->name('category.store');
    Route::get('/admin/category/{category}/edit', 'CategoryController@edit')->name('category.edit');
    Route::PATCH('/admin/category/{category}', 'CategoryController@update')->name('category.update');
    Route::delete('/admin/category/{category}', 'CategoryController@destroy')->name('category.destroy');

    Route::get('/admin/post', 'PostController@index')->name('post.index');
    Route::get('/admin/post/create', 'PostController@create' )->name('post.create');
    Route::post('/admin/post/', 'PostController@store' )->name('post.store');
    Route::get('/admin/post/{post}/edit', 'PostController@edit')->name('post.edit');
    Route::PATCH('/admin/post/{post}', 'PostController@update')->name('post.update');
    Route::delete('/admin/post/{post}', 'PostController@destroy')->name('post.destroy');
    
    Route::get('/edit-profile', 'ProfileController@edit')->name('profile.edit');
    Route::PATCH('/edit-profile/{user}', 'ProfileController@update')->name('profile.update');
    Route::get('/admin/password-change', 'DashboardController@changepassword')->name('admin.changepassword');
    Route::post('/admin/password-update', 'DashboardController@Passwordupdate')->name('admin.update.password');
    Route::delete('/dashboard/{user}', 'DashboardController@destroy')->name('user.destroy');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
  Route::get('account', 'UserController@account')->name('user.account');
  Route::get('user/builder', 'Builder\BuilderController@create')->name('builder.create');
  Route::post('user/store', 'Builder\BuilderController@store' )->name('builder.store');

  // Route::get('qrcode', function () {
  //      return QrCode::size(200)
  //         ->generate('A basic example of QR code! Nicesnippets.com');
  //  });
  Route::get('profile', 'ProfileController@profile')->name('profile');
  Route::get('user', 'UserController@user')->name('user');
  Route::get('password-change', 'HomeController@changepassword')->name('changepassword');
  Route::post('password-update', 'HomeController@Passwordupdate')->name('update.password');
  Route::post('/pages/blog/single_blog', 'CommentController@store')->name('comment.add');
});