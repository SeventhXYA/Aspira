<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IntervalController;
use App\Http\Controllers\DailySdController;
use App\Http\Controllers\DailyBpController;
use App\Http\Controllers\DailyKlController;
use App\Http\Controllers\DailyIcController;
use App\Http\Controllers\EvaluateController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonthlyController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

    Route::get('forget', [LoginController::class, 'forget'])->name('login.forget');
    Route::post('forget', [LoginController::class, 'sendResetEmail'])->name('login.sendemail');

    Route::get('reset', [LoginController::class, 'reset'])->name('reset');
    Route::post('reset', [LoginController::class, 'resetPassword'])->name('resetPassword');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/store', [ProfileController::class, 'updatePicture'])->name('profile.store');
    Route::get('profile/edit', [ProfileController::class, 'editData'])->name('profile.edit');
    Route::post('profile/update', [ProfileController::class, 'updateData'])->name('profile.update');

    Route::group(['middleware' => ['cekUserLogin:1,2']], function () {
        Route::get('monthly/viewadmin', [MonthlyController::class, 'viewadmin'])->name('monthly.viewadmin');
        Route::get('dailysd/viewadmin', [DailySdController::class, 'viewadmin'])->name('dailysd.viewadmin');
        Route::get('dailybp/viewadmin', [DailyBpController::class, 'viewadmin'])->name('dailybp.viewadmin');
        Route::get('dailykl/viewadmin', [DailyKlController::class, 'viewadmin'])->name('dailykl.viewadmin');
        Route::get('dailyic/viewadmin', [DailyIcController::class, 'viewadmin'])->name('dailyic.viewadmin');
        Route::get('weekly/viewadmin', [WeeklyController::class, 'viewadmin'])->name('weekly.viewadmin');
        Route::get('evaluate/viewadmin', [EvaluateController::class, 'viewadmin'])->name('evaluate.viewadmin');
        Route::get('intervalpomodoro/viewadmin', [IntervalController::class, 'viewadmin'])->name('intervalpomodoro.viewadmin');

        Route::delete('dailysd/delete/{dailysd}', [DailySdController::class, 'destroy'])->name('dailysd.delete');
        Route::delete('dailybp/delete/{dailybp}', [DailyBpController::class, 'destroy'])->name('dailybp.delete');
        Route::delete('dailykl/delete/{dailykl}', [DailyKlController::class, 'destroy'])->name('dailykl.delete');
        Route::delete('dailyic/delete/{dailyic}', [DailyIcController::class, 'destroy'])->name('dailyic.delete');
        Route::delete('evaluate/delete/{evaluate}', [EvaluateController::class, 'destroy'])->name('evaluate.delete');
        Route::delete('interval/delete/{interval}', [IntervalController::class, 'destroy'])->name('interval.delete');

        Route::get('datapengguna', [UserController::class, 'index'])->name('datapengguna');
        Route::get('datapengguna/user/{id}', [UserController::class, 'viewUser'])->name('datapengguna.user');
        Route::get('datapengguna/edit/{id}', [UserController::class, 'editUser'])->name('datapengguna.edit');
        Route::get('datapengguna/create', [UserController::class, 'create'])->name('datapengguna.create');
        Route::post('datapengguna/store', [UserController::class, 'store'])->name('datapengguna.store');
        Route::post('datapengguna/update', [UserController::class, 'updateUser'])->name('datapengguna.update');
        Route::delete('datapengguna/{user}', [UserController::class, 'destroy'])->name('datapengguna.delete');

        Route::post('admin/approval', [MonthlyController::class, 'approval'])->name('admin.approval');
        Route::get('admin/pending', [MonthlyController::class, 'pending'])->name('admin.pending');
        Route::get('admin/approved', [MonthlyController::class, 'approved'])->name('admin.approved');
        Route::get('admin/declined', [MonthlyController::class, 'declined'])->name('admin.declined');

        Route::get('recordinterval', [IntervalController::class, 'recordinterval'])->name('recordinterval');
        Route::get('statistik', [UserController::class, 'statistik'])->name('statistik');

        Route::get('pomodororecord', [IntervalController::class, 'pomodoroExport'])->name('pomodororecord');
        Route::get('downloadpdf', [PDFController::class, 'MonthlyPDF'])->name('downloadpdf');

        Route::get('recordintervalpdf', [PDFController::class, 'recordIntervalPDF'])->name('recordintervalpdf');
        Route::get('dailysdnowpdf', [PDFController::class, 'dailysdNowPDF'])->name('dailysdnowpdf');
        Route::get('dailybpnowpdf', [PDFController::class, 'dailybpNowPDF'])->name('dailybpnowpdf');
        Route::get('dailyklnowpdf', [PDFController::class, 'dailyklNowPDF'])->name('dailyklnowpdf');
        Route::get('dailyicnowpdf', [PDFController::class, 'dailyicNowPDF'])->name('dailyicnowpdf');
        Route::get('evaluatenowpdf', [PDFController::class, 'evaluateNowPDF'])->name('evaluatenowpdf');

        Route::get('intervalpdf', [PDFController::class, 'intervalPDF'])->name('intervalpdf');
        Route::get('dailysdpdf/{tglawal}/{tglakhir}', [PDFController::class, 'dailysdPDF'])->name('dailysdpdf');
        Route::get('dailybppdf/{tglawal}/{tglakhir}', [PDFController::class, 'dailybpPDF'])->name('dailybppdf');
        Route::get('dailyklpdf/{tglawal}/{tglakhir}', [PDFController::class, 'dailyklPDF'])->name('dailyklpdf');
        Route::get('dailyicpdf/{tglawal}/{tglakhir}', [PDFController::class, 'dailyicPDF'])->name('dailyicpdf');
        Route::get('evaluatepdf/{tglawal}/{tglakhir}', [PDFController::class, 'evaluatePDF'])->name('evaluatepdf');

        Route::get('dailysdpdf', [PDFController::class, 'dailysdPDF'])->name('dailysdpdf');
        Route::get('dailybppdf', [PDFController::class, 'dailybpPDF'])->name('dailybppdf');
        Route::get('dailyklpdf', [PDFController::class, 'dailyklPDF'])->name('dailyklpdf');
        Route::get('dailyicpdf', [PDFController::class, 'dailyicPDF'])->name('dailyicpdf');
    });

    Route::group(['middleware' => ['cekUserLogin:3']], function () {

        Route::get('monthly', [MonthlyController::class, 'index'])->name('monthly');
        Route::get('monthly/create', [MonthlyController::class, 'create'])->name('monthly.create');
        Route::post('monthly/store', [MonthlyController::class, 'store'])->name('monthly.store');
        Route::get('monthly/delete/{id}', [MonthlyController::class, 'delete'])->name('monthly.delete');
        Route::get('monthly/edit/{id}', [MonthlyController::class, 'edit'])->name('monthly.edit');
        Route::post('monthly/update/{id}', [MonthlyController::class, 'update'])->name('monthly.update');
        Route::get('monthly/evaluate/{id}', [MonthlyController::class, 'evaluate'])->name('monthly.evaluate');
        Route::get('monthly/pending', [MonthlyController::class, 'usrpending'])->name('monthly.pending');
        Route::get('monthly/approved', [MonthlyController::class, 'usrapproved'])->name('monthly.approved');
        Route::get('monthly/declined', [MonthlyController::class, 'usrdeclined'])->name('monthly.declined');

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

        Route::get('interval', [IntervalController::class, 'interval'])->name('interval');
        Route::get('interval/create', [IntervalController::class, 'create'])->name('interval.create');
        Route::post('interval/store', [IntervalController::class, 'store'])->name('interval.store');
        Route::get('interval/edit', [IntervalController::class, 'edit'])->name('interval.edit');
        Route::put('interval', [IntervalController::class, 'update'])->name('interval.update');

        Route::get('weeklyhistory', [HistoryController::class, 'weekly'])->name('weeklyhistory');

        Route::get('dailysd/history', [DailySdController::class, 'history'])->name('dailysd.history');
        Route::get('dailybp/history', [DailyBpController::class, 'history'])->name('dailybp.history');
        Route::get('dailykl/history', [DailyKlController::class, 'history'])->name('dailykl.history');
        Route::get('dailyic/history', [DailyIcController::class, 'history'])->name('dailyic.history');
        Route::get('evaluate/history', [EvaluateController::class, 'history'])->name('evaluate.history');

        Route::get('dailysd', [DailySdController::class, 'index'])->name('dailysd');
        Route::get('dailysd/create', [DailySdController::class, 'create'])->name('dailysd.create');
        Route::post('dailysd/store', [DailySdController::class, 'store'])->name('dailysd.store');
        Route::get('dailysd/edit/{id}', [DailySdController::class, 'edit'])->name('dailysd.edit');
        Route::post('dailysd/update/{id}', [DailySdController::class, 'update'])->name('dailysd.update');
        Route::get('dailysd/history/edit/{id}', [DailySdController::class, 'editHistory'])->name('dailysd.edithistory');
        Route::post('dailysd/history/update/{id}', [DailySdController::class, 'updateHistory'])->name('dailysd.updatehistory');

        Route::get('dailybp', [DailyBpController::class, 'index'])->name('dailybp');
        Route::get('dailybp/create', [DailyBpController::class, 'create'])->name('dailybp.create');
        Route::post('dailybp/store', [DailyBpController::class, 'store'])->name('dailybp.store');
        Route::get('dailybp/edit/{id}', [DailyBpController::class, 'edit'])->name('dailybp.edit');
        Route::post('dailybp/update/{id}', [DailyBpController::class, 'update'])->name('dailybp.edit');
        Route::get('dailybp/history/edit/{id}', [DailyBpController::class, 'editHistory'])->name('dailybp.edithistory');
        Route::post('dailybp/history/update/{id}', [DailyBpController::class, 'updateHistory'])->name('dailybp.updatehistory');

        Route::get('dailykl', [DailyKlController::class, 'index'])->name('dailykl');
        Route::get('dailykl/create', [DailyKlController::class, 'create'])->name('dailykl.create');
        Route::post('dailykl/store', [DailyKlController::class, 'store'])->name('dailykl.store');
        Route::get('dailykl/edit/{id}', [DailyKlController::class, 'edit'])->name('dailykl.edit');
        Route::post('dailykl/update/{id}', [DailyKlController::class, 'update'])->name('dailykl.edit');
        Route::get('dailykl/history/edit/{id}', [DailyKlController::class, 'editHistory'])->name('dailykl.edithistory');
        Route::post('dailykl/history/update/{id}', [DailyKlController::class, 'updateHistory'])->name('dailykl.updatehistory');

        Route::get('dailyic', [DailyIcController::class, 'index'])->name('dailyic');
        Route::get('dailyic/create', [DailyIcController::class, 'create'])->name('dailyic.create');
        Route::post('dailyic/store', [DailyIcController::class, 'store'])->name('dailyic.store');
        Route::get('dailyic/edit/{id}', [DailyIcController::class, 'edit'])->name('dailyic.edit');
        Route::post('dailyic/update/{id}', [DailyIcController::class, 'update'])->name('dailyic.edit');
        Route::get('dailyic/history/edit/{id}', [DailyIcController::class, 'editHistory'])->name('dailyic.edithistory');
        Route::post('dailyic/history/update/{id}', [DailyIcController::class, 'updateHistory'])->name('dailyic.updatehistory');

        Route::get('evaluate', [EvaluateController::class, 'index'])->name('evaluate');
        Route::get('evaluate/create', [EvaluateController::class, 'create'])->name('evaluate.create');
        Route::post('evaluate/store', [EvaluateController::class, 'store'])->name('evaluate.store');
        Route::get('evaluate/edit/{id}', [EvaluateController::class, 'edit'])->name('evaluate.edit');
        Route::post('evaluate/update/{id}', [EvaluateController::class, 'update'])->name('evaluate.edit');
        Route::get('evaluate/history/edit/{id}', [EvaluateController::class, 'editHistory'])->name('evaluate.edithistory');
        Route::post('evaluate/history/update/{id}', [EvaluateController::class, 'updateHistory'])->name('evaluate.updatehistory');
    });
});
