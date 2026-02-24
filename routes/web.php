<?php

use Illuminate\Support\Facades\Route;

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
/* ------------------- Front End Routes ------------------ */
use App\Http\Controllers\frontEnd\HomeController;
use App\Http\Controllers\frontEnd\ContactController;
use App\Http\Controllers\frontEnd\PrivacyController;
use App\Http\Controllers\frontEnd\TermController;
use App\Http\Controllers\frontEnd\CategoryController;
use App\Http\Controllers\frontEnd\ServiceController;
use App\Http\Controllers\frontEnd\WorkController;
use App\Http\Controllers\frontEnd\TradeController;
use App\Http\Controllers\frontEnd\GuideController;
use App\Http\Controllers\frontEnd\registerBusinessController;
use App\Http\Controllers\frontEnd\RegionController;
use App\Http\Controllers\frontEnd\GalleryController;
use App\Http\Controllers\frontEnd\ComplaintController;
use App\Http\Controllers\frontEnd\signInController;
use App\Http\Controllers\frontEnd\viewProfileController;
use App\Http\Controllers\frontEnd\BlogController;
use App\Http\Controllers\frontEnd\AboutController;
use App\Http\Controllers\frontEnd\TeamController;
use App\Http\Controllers\frontEnd\FaqController;
use App\Http\Controllers\frontEnd\OfferController;
use App\Http\Controllers\frontEnd\successGalleryController;
use App\Http\Controllers\frontEnd\MarketplaceController;
use App\Http\Controllers\frontEnd\HoroscopeController;
use App\Http\Controllers\frontEnd\AstrologyserviceController;
use App\Http\Controllers\frontEnd\CartController;
use App\Http\Controllers\frontEnd\CheckoutController;

/* ------------------- Super Admin Routes ------------------ */
use App\Http\Controllers\superAdmin\authController;
use App\Http\Controllers\superAdmin\DashboardController;
use App\Http\Controllers\superAdmin\SliderController;
use App\Http\Controllers\superAdmin\SettingController;
use App\Http\Controllers\superAdmin\UtilityController;
use App\Http\Controllers\superAdmin\UtilityTypeController;
use App\Http\Controllers\superAdmin\UtilitysubTypeController;
use App\Http\Controllers\superAdmin\ConditionController;
use App\Http\Controllers\superAdmin\PolicyController;
use App\Http\Controllers\superAdmin\StoryController;
use App\Http\Controllers\superAdmin\MediaController;
use App\Http\Controllers\superAdmin\PopupController;
use App\Http\Controllers\superAdmin\StudioController;
use App\Http\Controllers\superAdmin\SquadController;
use App\Http\Controllers\superAdmin\JournalController;
use App\Http\Controllers\superAdmin\QueryController;
use App\Http\Controllers\superAdmin\AssociateController;
use App\Http\Controllers\superAdmin\ReviewController;
use App\Http\Controllers\superAdmin\EndorseController;
use App\Http\Controllers\superAdmin\ConnectController;
use App\Http\Controllers\superAdmin\PageController;
use App\Http\Controllers\superAdmin\ListingController;
use App\Http\Controllers\superAdmin\AreaController;
use App\Http\Controllers\superAdmin\ProfileController;
use App\Http\Controllers\superAdmin\MerchantController;
use App\Http\Controllers\superAdmin\GrievanceController;
use App\Http\Controllers\superAdmin\GrantController;
use App\Http\Controllers\superAdmin\TriumphController;
use App\Http\Controllers\superAdmin\ApproachController;
use App\Http\Controllers\superAdmin\MarketController;
use App\Http\Controllers\superAdmin\PackageController;
use App\Http\Controllers\superAdmin\OfferingController;
use App\Http\Controllers\superAdmin\PoojaController;

Route::resource('/login', authController::class);
Route::get('/register-user', [authController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [authController::class, 'customRegistration'])->name('register.custom');
Route::post('/custom-login', [authController::class, 'customLogin'])->name('login.custom');
Route::get('/signout', [DashboardController::class, 'signOut'])->name('signout');


Route::resource('dashboards', DashboardController::class);
Route::resource('sliders', SliderController::class);
Route::resource('utilities', UtilityController::class);
Route::resource('utilitytypes', UtilityTypeController::class);
Route::resource('utilitysubtypes', UtilitysubTypeController::class);
Route::resource('conditions', ConditionController::class);
Route::resource('policies', PolicyController::class);
Route::resource('settings', SettingController::class);
Route::resource('stories', StoryController::class);
Route::resource('medias', MediaController::class);
Route::resource('popups', PopupController::class);
Route::resource('studios', StudioController::class);
Route::resource('squads', SquadController::class);
Route::resource('journals', JournalController::class);
Route::resource('queries', QueryController::class);
Route::resource('associates', AssociateController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('endorses', EndorseController::class);
Route::resource('connects', ConnectController::class);
Route::resource('pages', PageController::class);
Route::resource('lists', ListingController::class);
Route::resource('areas', AreaController::class);
Route::resource('profile', ProfileController::class);
Route::resource('merchants', MerchantController::class);
Route::resource('grievances', GrievanceController::class);
Route::resource('grants', GrantController::class);
Route::resource('triumphs', TriumphController::class);
Route::resource('approaches', ApproachController::class);
Route::resource('markets', MarketController::class);
Route::resource('packages', PackageController::class);
Route::resource('offerings', OfferingController::class);
Route::resource('poojas', PoojaController::class);


/* ------------------- Front End Routes ------------------ */
Route::resource('/', HomeController::class);
Route::resource('contacts', ContactController::class);
Route::resource('privacy-policy', PrivacyController::class);
Route::resource('terms-conditions', TermController::class);
Route::resource('find/categories', CategoryController::class);
Route::get('/find/categories/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::resource('/find/services', ServiceController::class);
Route::get('/find/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/find/services/{categorySlug}/{slug}', [ServiceController::class, 'show'])->name('service.show');


Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

Route::post('/cart/update-all', [CartController::class, 'updateAll'])->name('cart.updateAll');
Route::resource('checkout', CheckoutController::class);
Route::post('/create-mypay-order', [CheckoutController::class, 'createMyPayOrder'])->name('mypay.create');



Route::resource('/offers', OfferController::class);
Route::get('offers/{slug}', [OfferController::class, 'show'])->name('offer.show');

Route::resource('complaints', ComplaintController::class);

Route::resource('/blogs', BlogController::class);
Route::get('blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::resource('/marketplaces', MarketplaceController::class);
Route::get('marketplaces/{slug}', [MarketplaceController::class, 'show'])->name('marketplaces.show');
Route::resource('horoscopes', HoroscopeController::class);


Route::resource('/gallery', GalleryController::class);
Route::resource('/about-us', AboutController::class);
Route::resource('/our-team', TeamController::class);
Route::get('our-team/{slug}', [TeamController::class, 'show'])->name('teams.show');





Route::resource('/faqs', FaqController::class);
Route::resource('/success-gallery', successGalleryController::class);