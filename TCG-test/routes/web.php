use App\Http\Controllers\CustomerController;

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');

