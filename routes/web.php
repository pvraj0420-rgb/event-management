<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front;
use App\Http\Controllers\admin;
use App\Http\Controllers\InvoiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Front::class, 'index'])->name('index');
Route::get('/index-2', [Front::class, 'index2'])->name('index-2');

Route::get('/faq', [Front::class, 'faq'])->name('faq');

Route::get('/news', [Front::class, 'news'])->name('news');
Route::get('/news-details', [Front::class, 'newsDetails'])->name('news.details');

Route::get('/news-grid', [Front::class, 'newsGrid'])->name('news.grid');

Route::get('/team', [Front::class, 'team'])->name('speakers');
Route::get('/team-details/{id}', [Front::class, 'teamDetails'])->name('team.details');

Route::get('/pricing', [Front::class, 'pricing'])->name('pricing');

Route::get('/about', [Front::class, 'about'])->name('about');

Route::get('/contact', [Front::class, 'contact'])->name('contact');

Route::get('/event', [Front::class, 'event'])->name('event');
Route::get('/event-details/{id}', [Front::class, 'eventDetails'])->name('event.details');

Route::get('/gallery', [Front::class, 'gallery'])->name('gallery');

Route::get('/404', [Front::class, 'error404'])->name('error.404');

Route::get('/register', [Front::class, 'register'])->name('register');
Route::post('/adddata', [Front::class, 'adddata'])->name('adddata');

Route::get('/login', [Front::class, 'login'])->name('login');
Route::post('/logincheck', [Front::class, 'logincheck'])->name('logincheck');

Route::get('/editprofile', [front::class, 'editprofile'])->name('editprofile');
Route::post('/updatedata', [Front::class, 'updatedata'])->name('updatedata');

Route::get('/booking/{id}',[Front::class,'bookingPage'])->name('booking.page');
Route::post('/book-event',[Front::class,'bookEvent'])->name('book.event');

Route::get('/card-payment', [front::class, 'cardPage'])->name('card.payment.page');
Route::post('/card-payment-process', [front::class, 'cardProcess'])->name('card.payment.process');

Route::get('/my-orders', [front::class, 'myOrders'])->name('my.orders');

Route::get('/download-ticket/{id}', [Front::class, 'downloadTicket'])->name('download.ticket');

Route::get('/user/forgot-password', [Front::class, 'userForgotPassword'])->name('user.forgot.password');

Route::post('/user/forgot-password', [Front::class, 'checkUserForgotPassword'])->name('user.forgot.check');

Route::get('/user/reset-password', [Front::class, 'userResetPasswordPage'])->name('user.reset.password');

Route::post('/user/update-password', [Front::class, 'updateUserPassword'])->name('user.update.password');

Route::get('/logout', [front::class, 'logout'])->name('logout');

/* ADMIN ROUTES */

Route::get('/admin/login', [admin::class, 'login'])->name('admin.login');
Route::post('/admin/checklogin', [admin::class, 'checklogin'])->name('admin.checklogin');

Route::get('/admin/register', [admin::class, 'register'])->name('admin.register');
Route::post('/admin/adddata', [admin::class, 'adddata'])->name('admin.adddata');

Route::get('/admin/dashboard', [admin::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/category', [admin::class, 'category'])->name('admin.category');
Route::post('/admin/addcategory', [admin::class, 'addcategory'])->name('admin.addcategory');
Route::get('/admin/editcategory/{id}', [admin::class, 'editcategory'])->name('admin.editcategory');
Route::get('/admin/deletecategory/{id}', [admin::class, 'deletecategory'])->name('admin.deletecategory');
Route::post('/admin/updatecategory/{id}', [admin::class, 'updatecategory'])->name('admin.updatecategory');
Route::get('/admin/categorylist', [admin::class, 'categorylist'])->name('admin.categorylist');

Route::get('/admin/page-event', [admin::class, 'pageEvent'])->name('admin.page-event');
Route::post('/admin/addevent',[admin::class,'addevent'])->name('admin.addevent');
Route::get('/admin/eventlist',[admin::class,'eventlist'])->name('admin.eventlist');
Route::get('/admin/editevent/{id}',[admin::class,'editevent'])->name('admin.editevent');
Route::get('/admin/deleteevent/{id}',[admin::class,'deleteevent'])->name('admin.deleteevent');
Route::post('/admin/updateevent/{id}', [admin::class,'updateevent'])->name('admin.updateevent');

Route::get('/admin/speaker', [admin::class, 'speaker'])->name('admin.speaker');
Route::post('/admin/addspeaker', [admin::class, 'addspeaker'])->name('admin.addspeaker');
Route::get('/admin/speaker-list', [admin::class, 'speakerlist'])->name('admin.speakerlist');
Route::get('/admin/editspeaker/{id}', [admin::class, 'editspeaker'])->name('admin.editspeaker');
Route::get('/admin/deletespeaker/{id}', [admin::class, 'deletespeaker'])->name('admin.deletespeaker');
Route::post('/admin/updatespeaker/{id}', [admin::class, 'updatespeaker'])->name('admin.updatespeaker');

Route::get('/admin/booking-list',[admin::class,'bookingList'])->name('admin.bookinglist');
Route::delete('/admin/delete-booking/{id}', [admin::class, 'deleteBooking'])->name('admin.deletebooking');

Route::get('/admin/approve-payment/{id}', [admin::class, 'approvePayment'])->name('admin.approve.payment');

Route::get('/admin/forgot-password', [admin::class, 'forgotPassword'])->name('admin.forgot.password');

Route::post('/admin/forgot-password', [admin::class, 'checkForgotPassword'])->name('admin.forgot.check');

Route::get('/admin/reset-password', [admin::class, 'resetPasswordPage'])->name('admin.reset.password');

Route::post('/admin/update-password', [admin::class, 'updatePassword'])->name('admin.update.password');


Route::get('/admin/logout', [admin::class, 'logout'])->name('admin.logout');
Route::get('/invoice/view/{id}', [InvoiceController::class, 'viewInvoiceById']) ->name('invoice.view');
Route::delete('/admin/invoice-delete/{id}', [InvoiceController::class, 'deleteInvoice'])->name('admin.invoice.delete');
Route::get('/admin/invoice-list', [InvoiceController::class, 'adminInvoiceList'])->name('admin.invoice.list');
Route::get('/invoice-download/{id}', [InvoiceController::class, 'download'])->name('invoice.download');