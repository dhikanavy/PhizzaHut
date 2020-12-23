<?php

use App\Http\Controllers\CartController;
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

Route::get('/', 'HomeController@view');
Route::get('/register', 'UserController@viewregister');
Route::post('/registerpost', 'UserController@register');
Route::get('/login', 'UserController@viewlogin');
Route::post('/loginpost', 'UserController@login');
Route::get('/pizzadetail/{PizzaID}','PizzaController@ViewPizzaDetail');
Route::get('/updatepizza/{PizzaID}', 'PizzaController@UpdatePizza');
Route::get('/logout', 'UserController@Logout');
Route::get('/search', 'HomeController@search');
Route::post('/addtocart/{PizzaID}', 'CartController@AddtoCart');
Route::get('/viewcart','CartController@ViewCart');
Route::get('/delete/{CartID}','CartController@Delete');
Route::post('/update/{CartID}','CartController@Update');
Route::post('/checkout','CartController@Checkout');
Route::get('/transactionhistory','TransactionController@ViewTransactionHistory');
Route::get('/transactiondetail/{TransactionID}','TransactionController@ViewTransactionDetail');
Route::get('/viewalluser', 'ViewAllUserController@ViewAllUser');
Route::get('/viewaddpizza', 'PizzaController@ViewAddPizza');
Route::post('/addpizza', 'PizzaController@AddPizza');
Route::get('/deletepizza/{PizzaID}', 'PizzaController@DeletePizza');
Route::get('/viewdeletepizza/{PizzaID}', 'PizzaController@ViewDeletePizza');
Route::get('/vieweditpizza/{PizzaID}', 'PizzaController@ViewEditPizza');
Route::post('/editpizza/{PizzaID}', 'PizzaController@EditPizza');
Route::get('/viewalltransaction','ViewAllTransactionController@ViewAllTransaction');