<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ContactuserController;
use App\Http\Controllers\demopageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CookieConsentController;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactusersExport;
use App\Exports\NewslettersExport;
use App\Exports\DemopagesExport;


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

Route::redirect('/', '/index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register']);

// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');
require __DIR__.'/auth.php';
Route::get('/index', [ViewsController::class, 'index'])->name('index');
Route::get('/about', [ViewsController::class, 'about'])->name('about');
Route::get('/team', [ViewsController::class, 'team'])->name('team');
// Route::get('/admin', [ViewsController::class, 'admin'])->name('admin');

// route::view('admin','admin');
Route::get('/testimonials', [ViewsController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [ViewsController::class, 'contact'])->name('contact');
Route::get('/demo', [ViewsController::class, 'demo'])->name('demo');
Route::get('/pricing', [ViewsController::class, 'pricing'])->name('pricing');
Route::get('/services', [ViewsController::class, 'services'])->name('services');
Route::get('/blog_single', [ViewsController::class, 'blog-single'])->name('blog_single');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
Route::post('/demoenregistrer', [demopageController::class, 'enregistrer'])->name('enregistrer');
Route::post('/saveuser', [contactuserController::class, 'saveuser'])->name('saveuser');
Route::get('/layout', [ViewsController::class, 'layout'])->name('layout');
Route::get('/testpage', [ViewsController::class, 'testpage'])->name('testpage');
Route::get('/TPE', [ViewsController::class, 'TPE'])->name('TPE');
Route::post('/cookie-consent/store', [CookieConsentController::class, 'store'])->name('cookie-consent.store');
Route::get('/confidentialite', [ViewsController::class, 'confidentialite'])->name('confidentialite');

Route::get('/calendar', [demopageController::class, 'calendar'])->name('calendar');
// Route::get('/calendar', [demopageController::class, 'index'])->name('calendar');

Route::get('/widgets', [ViewsController::class, 'widgets'])->name('widgets');


Route::get('/page404', [ViewsController::class, 'page404'])->name('page404');
Route::get('/page505', [ViewsController::class, 'page505'])->name('page505');
Route::get('/advanced', [ViewsController::class, 'advanced'])->name('advanced');
Route::get('/blank', [ViewsController::class, 'blank'])->name('blank');
Route::get('/boxed', [ViewsController::class, 'boxed'])->name('boxed');
Route::get('/chartjs', [ContactuserController::class, 'chartjs'])->name('chartjs');
Route::get('/collapsed-sidebar', [ViewsController::class, 'collapsed-sidebar'])->name('collapsed-sidebar');
Route::get('/compose', [NewsletterController::class, 'compose'])->name('compose');
Route::get('/contact-us', [ViewsController::class, 'contact-us'])->name('contact-us');
Route::get('/contacts', [UserController::class, 'contacts'])->name('contacts');
Route::get('/data', [ViewsController::class, 'data'])->name('data');
Route::get('/e-commerce', [ViewsController::class, 'e-commerce'])->name('e-commerce');
Route::get('/editors', [ViewsController::class, 'editors'])->name('editors');
Route::get('/enhanced-results', [ViewsController::class, 'enhanced-results'])->name('enhanced-results');
Route::get('/enhanced', [ViewsController::class, 'enhanced'])->name('enhanced');
Route::get('/faq', [ViewsController::class, 'faq'])->name('faq');
Route::get('/fixed-footer ', [ViewsController::class, 'fixed-footer'])->name('fixed-footer');
Route::get('/fixed-sidebar-custom', [ViewsController::class, 'fixed-sidebar-custom'])->name('fixed-sidebar-custom');
Route::get('/fixed-sidebar', [ViewsController::class, 'fixed-sidebar'])->name('fixed-sidebar');
Route::get('/fixed-topnav', [ViewsController::class, 'fixed-topnav'])->name('fixed-topnav');
  Route::get('/flot', [ViewsController::class, 'flot'])->name('flot');
Route::get('/forgot-passsword-v2', [ViewsController::class, 'forgot-passsword-v2'])->name('forgot-passsword-v2');
Route::get('/forgot-passsword', [ViewsController::class, 'forgot-passsword'])->name('forgot-passsword');
Route::get('/gallery', [ViewsController::class, 'gallery'])->name('gallery');
Route::get('/general', [ViewsController::class, 'general'])->name('general');
Route::get('/icons', [ViewsController::class, 'icons'])->name('icons');
Route::get('/inline', [ViewsController::class, 'inline'])->name('inline');
Route::get('/invoice-print', [ViewsController::class, 'invoice-print'])->name('invoice-print');
Route::get('/invoice', [ViewsController::class, 'invoice'])->name('invoice');
Route::get('/jsgrid', [ViewsController::class, 'jsgrid'])->name('jsgrid');
Route::get('/kanban', [ViewsController::class, 'kanban'])->name('kanban');
Route::get('/legacy-user-menu', [ViewsController::class, 'legacy-user-menu'])->name('legacy-user-menu');
Route::get('/language-menu', [ViewsController::class, 'language-menu'])->name('fixlanguage-menued');
Route::get('/lockscreen', [ViewsController::class, 'lockscreen'])->name('lockscreen');
Route::get('/login-v2', [ViewsController::class, 'login-v2'])->name('login-v2');
Route::get('/login', [ViewsController::class, 'login'])->name('login');
Route::get('/mailbox', [ViewsController::class, 'mailbox'])->name('mailbox');
Route::get('/modals', [ViewsController::class, 'modals'])->name('modals');
Route::get('/navbar', [ViewsController::class, 'navbar'])->name('navbar');
Route::get('/pace', [ViewsController::class, 'pace'])->name('pace');
// Route::get('/profile', [ViewsController::class, 'profile'])->name('profile');
Route::get('/project-add', [ViewsController::class, 'project-add'])->name('project-add');
Route::get('/project-detail', [ViewsController::class, 'project-detail'])->name('project-detail');
Route::get('/project-edit', [ViewsController::class, 'fixed'])->name('fixed');
Route::get('/projects', [ViewsController::class, 'projects'])->name('projects');
Route::get('/read-mail', [ViewsController::class, 'read-mail'])->name('read-mail');
Route::get('/recover-password-v2', [ViewsController::class, 'fixed'])->name('fixed');
Route::get('/recover-password', [ViewsController::class, 'recover-password'])->name('recover-password');
Route::get('/register-v2', [ViewsController::class, 'register-v2'])->name('register-v2');
Route::get('/register', [ViewsController::class, 'register'])->name('register');
Route::get('/ribons', [ViewsController::class, 'ribons'])->name('ribons');
Route::get('/simple-results', [ViewsController::class, 'simple-results'])->name('simple-results');
Route::get('/simple', [ViewsController::class, 'simple'])->name('simple');
Route::get('/sliders', [ViewsController::class, 'sliders'])->name('sliders');
Route::get('/timeline', [ViewsController::class, 'timeline'])->name('timeline');
Route::get('/top-nav-sidebar', [ViewsController::class, 'top-nav-sidebar'])->name('top-nav-sidebar');
Route::get('/top-nav', [ViewsController::class, 'top-nav'])->name('top-nav');
Route::get('/uplot', [ViewsController::class, 'uplot'])->name('uplot');
Route::get('/validation', [ViewsController::class, 'validation'])->name('validation');
Route::get('/index2', [ViewsController::class, 'index2'])->name('index2');

Route::get('/index3', [ViewsController::class, 'index3'])->name('index3');


Route::get('/admin/newlettersrequestlist', [NewsletterController::class, 'index'])->name('newlettersrequest.index');
Route::get('/admin/contactrequestlist', [ContactuserController::class, 'index'])->name('contactrequestlist.index');
Route::get('/admin/demorequestlist', [demopageController::class, 'index'])->name('demorequestlist.index');


Route::get('export-contactusers', function () {
    return Excel::download(new ContactusersExport, 'contactusers.xlsx');
});
Route::get('export-newsletters', function () {
    return Excel::download(new NewslettersExport, 'newsletters.xlsx');
});
Route::get('export-demopages', function () {
    return Excel::download(new DemopagesExport, 'demopages.xlsx');
});

Route::post('update-status', [DemopageController::class, 'updateStatus'])->name('update-status');

