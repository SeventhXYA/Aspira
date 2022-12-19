<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PomodoroController;
use App\Http\Controllers\DailySdController;
use App\Http\Controllers\DailyBpController;
use App\Http\Controllers\DailyKlController;
use App\Http\Controllers\DailyIcController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntervalPomodoroController;
use App\Http\Controllers\LongTermController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\WeeklyBpController;
use App\Http\Controllers\WeeklyIcController;
use App\Http\Controllers\WeeklyKlController;
use App\Http\Controllers\WeeklySdController;

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

Route::group(['middleware' => ['guest']], function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::get('longterm/viewadmin', [LongTermController::class, 'viewadmin'])->name('longterm.viewadmin');
        Route::get('dailysd/viewadmin', [DailySdController::class, 'viewadmin'])->name('dailysd.viewadmin');
        Route::get('dailybp/viewadmin', [DailyBpController::class, 'viewadmin'])->name('dailybp.viewadmin');
        Route::get('dailykl/viewadmin', [DailyKlController::class, 'viewadmin'])->name('dailykl.viewadmin');
        Route::get('dailyic/viewadmin', [DailyIcController::class, 'viewadmin'])->name('dailyic.viewadmin');
        Route::get('weekly/viewadmin', [WeeklyController::class, 'viewadmin'])->name('weekly.viewadmin');

        Route::get('datapengguna', [UserController::class, 'index'])->name('datapengguna');
        Route::get('datapengguna/create', [UserController::class, 'create'])->name('datapengguna.create');
        Route::post('datapengguna/store', [UserController::class, 'store'])->name('datapengguna.store');

        Route::post('admin/approval', [LongTermController::class, 'approval'])->name('admin.approval');
        Route::get('admin/pending', [LongTermController::class, 'pending'])->name('admin.pending');
        Route::get('admin/approved', [LongTermController::class, 'approved'])->name('admin.approved');
        Route::get('admin/declined', [LongTermController::class, 'declined'])->name('admin.declined');

        Route::get('recordinterval', [PomodoroController::class, 'recordinterval'])->name('recordinterval');
        Route::get('statistik', [UserController::class, 'statistik'])->name('statistik');

        Route::get('pomodororecord', [PomodoroController::class, 'pomodoroExport'])->name('pomodororecord');
        Route::get('downloadpdf', [PDFController::class, 'longtermPDF'])->name('downloadpdf');
        Route::get('recordintervalpdf', [PDFController::class, 'recordIntervalPDF'])->name('recordintervalpdf');
        // Route::get('dailysdpdf', [PDFController::class, 'dailysdPDF'])->name('dailysdpdf');
        Route::get('dailysdnowpdf', [PDFController::class, 'dailysdNowPDF'])->name('dailysdnowpdf');
        Route::get('dailybpnowpdf', [PDFController::class, 'dailybpNowPDF'])->name('dailybpnowpdf');
        Route::get('dailyklnowpdf', [PDFController::class, 'dailyklNowPDF'])->name('dailyklnowpdf');
        Route::get('dailyicnowpdf', [PDFController::class, 'dailyicNowPDF'])->name('dailyicnowpdf');
    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::get('pomodoro', [PomodoroController::class, 'pomodoro'])->name('pomodoro');
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('profile/store', [ProfileController::class, 'store'])->name('profile.store');

        Route::get('longterm', [LongTermController::class, 'index'])->name('longterm');
        Route::get('longterm/create', [LongTermController::class, 'create'])->name('longterm.create');
        // Route::get('longterm/evaluate', [LongTermController::class, 'evaluate'])->name('longterm.evaluate');
        Route::post('longterm/store', [LongTermController::class, 'store'])->name('longterm.store');
        // Route::get('longterm/history', [LongTermController::class, 'history'])->name('longterm.history');
        Route::get('longterm/delete/{id}', [LongTermController::class, 'delete'])->name('longterm.delete');
        Route::get('longterm/edit/{id}', [LongTermController::class, 'edit'])->name('longterm.edit');
        Route::post('longterm/update/{id}', [LongTermController::class, 'update'])->name('longterm.update');

        Route::get('longterm/pending', [LongTermController::class, 'usrpending'])->name('longterm.pending');
        Route::get('longterm/approved', [LongTermController::class, 'usrapproved'])->name('longterm.approved');
        Route::get('longterm/declined', [LongTermController::class, 'usrdeclined'])->name('longterm.declined');

        Route::get('charts', [IntervalPomodoroController::class, 'charts'])->name('charts');

        Route::get('weekly', [WeeklyController::class, 'index'])->name('weekly');

        Route::post('weeklysd/store', [WeeklySdController::class, 'store'])->name('weeklysd.store');
        Route::get('weeklysd/history', [WeeklySdController::class, 'history'])->name('weeklysd.history');
        Route::get('weeklysd/delete/{id}', [WeeklySdController::class, 'delete'])->name('weeklysd.delete');
        Route::post('weeklysd/update/{id}', [WeeklySdController::class, 'update'])->name('weeklysd.update');
        Route::get('weeklysd/evaluate', [WeeklySdController::class, 'evaluate'])->name('weeklysd.evaluate');

        Route::post('weeklybp/store', [WeeklyBpController::class, 'store'])->name('weeklybp.store');
        Route::get('weeklybp/history', [WeeklyBpController::class, 'history'])->name('weeklybp.history');
        Route::get('weeklybp/delete/{id}', [WeeklyBpController::class, 'delete'])->name('weeklybp.delete');
        Route::post('weeklybp/update/{id}', [WeeklyBpController::class, 'update'])->name('weeklybp.update');
        Route::get('weeklybp/evaluate', [WeeklyBpController::class, 'evaluate'])->name('weeklybp.evaluate');

        Route::post('weeklykl/store', [WeeklyKlController::class, 'store'])->name('weeklykl.store');
        Route::get('weeklykl/history', [WeeklyKlController::class, 'history'])->name('weeklykl.history');
        Route::get('weeklykl/delete/{id}', [WeeklyKlController::class, 'delete'])->name('weeklykl.delete');
        Route::post('weeklykl/update/{id}', [WeeklyKlController::class, 'update'])->name('weeklykl.update');
        Route::get('weeklykl/evaluate', [WeeklyKlController::class, 'evaluate'])->name('weeklykl.evaluate');

        Route::post('weeklyic/store', [WeeklyIcController::class, 'store'])->name('weeklyic.store');
        Route::get('weeklyic/history', [WeeklyIcController::class, 'history'])->name('weeklyic.history');
        Route::get('weeklyic/delete/{id}', [WeeklyIcController::class, 'delete'])->name('weeklyic.delete');
        Route::post('weeklyic/update/{id}', [WeeklyIcController::class, 'update'])->name('weeklyic.update');
        Route::get('weeklyic/evaluate', [WeeklyIcController::class, 'evaluate'])->name('weeklyic.evaluate');

        Route::post('pomodoro/interval', [IntervalPomodoroController::class, 'store'])->name('pomodoro.interval');

        Route::get('dailyhistory', [HistoryController::class, 'daily'])->name('dailyhistory');
        Route::get('weeklyhistory', [HistoryController::class, 'weekly'])->name('weeklyhistory');

        Route::get('dailysd', [DailySdController::class, 'index'])->name('dailysd');
        Route::get('dailysd/create', [DailySdController::class, 'create'])->name('dailysd.create');
        Route::post('dailysd/store', [DailySdController::class, 'store'])->name('dailysd.store');
        Route::get('dailysd/history', [DailySdController::class, 'history'])->name('dailysd.history');
        Route::get('dailysd/delete/{id}', [DailySdController::class, 'delete'])->name('dailysd.delete');
        Route::get('dailysd/edit/{id}', [DailySdController::class, 'edit'])->name('dailysd.edit');
        Route::post('dailysd/update/{id}', [DailySdController::class, 'update'])->name('dailysd.edit');

        Route::get('dailybp', [DailyBpController::class, 'index'])->name('dailybp');
        Route::get('dailybp/create', [DailyBpController::class, 'create'])->name('dailybp.create');
        Route::post('dailybp/store', [DailyBpController::class, 'store'])->name('dailybp.store');
        Route::get('dailybp/history', [DailyBpController::class, 'history'])->name('dailybp.history');
        Route::get('dailybp/delete/{id}', [DailyBpController::class, 'delete'])->name('dailybp.delete');
        Route::get('dailybp/edit/{id}', [DailyBpController::class, 'edit'])->name('dailybp.edit');
        Route::post('dailybp/update/{id}', [DailyBpController::class, 'update'])->name('dailybp.edit');

        Route::get('dailykl', [DailyKlController::class, 'index'])->name('dailykl');
        Route::get('dailykl/create', [DailyKlController::class, 'create'])->name('dailykl.create');
        Route::post('dailykl/store', [DailyKlController::class, 'store'])->name('dailykl.store');
        Route::get('dailykl/history', [DailyKlController::class, 'history'])->name('dailykl.history');
        Route::get('dailykl/delete/{id}', [DailyKlController::class, 'delete'])->name('dailykl.delete');
        Route::get('dailykl/edit/{id}', [DailyKlController::class, 'edit'])->name('dailykl.edit');
        Route::post('dailykl/update/{id}', [DailyKlController::class, 'update'])->name('dailykl.edit');

        Route::get('dailyic', [DailyIcController::class, 'index'])->name('dailyic');
        Route::get('dailyic/create', [DailyIcController::class, 'create'])->name('dailyic.create');
        Route::post('dailyic/store', [DailyIcController::class, 'store'])->name('dailyic.store');
        Route::get('dailyic/history', [DailyIcController::class, 'history'])->name('dailyic.history');
        Route::get('dailyic/delete/{id}', [DailyIcController::class, 'delete'])->name('dailyic.delete');
        Route::get('dailyic/edit/{id}', [DailyIcController::class, 'edit'])->name('dailyic.edit');
        Route::post('dailyic/update/{id}', [DailyIcController::class, 'update'])->name('dailyic.edit');
    });
});
