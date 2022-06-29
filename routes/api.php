<?php

use App\Http\Controllers\Auth\RegisterController;

//use App\Http\Controllers\CompanyController;

use App\Http\Controllers\BookguideController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\companyReview2Controller;
use App\Http\Controllers\companyReviewController;
use App\Http\Controllers\GetAllGuideController;
use App\Http\Controllers\GetBookGuideController;
use App\Http\Controllers\GetBookTripController;
use App\Http\Controllers\GetCityController;
use App\Http\Controllers\GetCompanyController;
use App\Http\Controllers\GetCompTripController;
use App\Http\Controllers\GetLocationController;
use App\Http\Controllers\GetPaymentController;
use App\Http\Controllers\GetSingTripController;
use App\Http\Controllers\GetTravellerController;
use App\Http\Controllers\GetTripsController;
use App\Http\Controllers\GSearchController;

use App\Http\Controllers\Guide\langcerController;
use App\Http\Controllers\Guide\signupController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\guideReview2Controller;
use App\Http\Controllers\guideReviewController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TravellerController;
use App\Http\Controllers\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('registeration', [RegisterController::class, 'ٌRegisteration']);



Route::post('login',[\App\Http\Controllers\Auth\AuthController::class,'Login']);

Route::get('search',[SearchController::class,'search']);
Route::get('search2',[GSearchController::class,'search2']);


Route::middleware(['auth:sanctum'])->group(function () {

});
//Payment
Route::post('pay',[PaymentController::class,'pay']);

//GetPayment
Route::get('getpay',[GetPaymentController::class,'getpay']);

//Traveller
Route::post('trav',[TravellerController::class,'trav']);

//GetTraveller
Route::get('gettrav',[GetTravellerController::class,'gettrav']);

//PostGuide
Route::post('gui',[signupController::class,'gui']);

//GetGuide
Route::get('getgui',[GuideController::class,'getgui']);

//GetAllGuide
Route::get('getallgui',[GetAllGuideController::class,'getallgui']);

//Trip
Route::post('tri',[TripController::class,'tri']);

//GetTrip
Route::get('gettri',[GetTripsController::class,'gettri']);

//GetSingleTrip
Route::get('getsingtri',[GetSingTripController::class,'getsingtri']);

//Company
Route::post('comp',[CompanyController::class,'comp']);

//GetCompany
Route::get('getcom',[GetCompanyController::class,'getcom']);

//GetCompanyTrips
Route::get('getcomptri',[GetCompTripController::class,'getcomptri']);

//Lanuage
Route::get('lang',[LanguageController::class,'lang']);

//Certificate
Route::get('cer',[CertificateController::class,'cer']);

//PostCompanyReview
Route::post('comprev',[companyReviewController::class,'comprev']);

//GetCompanyReview
Route::get('comprev2',[companyReview2Controller::class,'comprev2']);

//PostGuideReview
Route::post('guirev',[guideReviewController::class,'guirev']);

//GetGuideReview
Route::get('guirev2',[guideReview2Controller::class,'guirev2']);

//BookTrip
Route::post('booktrip',[BookingController::class,'booktrip']);

//GetBookTrip
Route::get('getbooktri',[GetBookTripController::class,'getbooktri']);

//BookGuide
Route::post('bookgui',[BookguideController::class,'bookgui']);

//GetBookGuide
Route::get('getbookgui',[GetBookguideController::class,'getbookgui']);

//City
Route::post('cit',[CityController::class,'cit']);

//GetCity
Route::get('getcit',[GetCityController::class,'getcit']);

//Location
Route::post('locat',[LocationController::class,'locat']);

//GetLocation
Route::get('getlocat',[GetLocationController::class,'getlocat']);




