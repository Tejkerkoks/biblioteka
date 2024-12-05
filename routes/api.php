use App\Http\Controllers\BookController;

Route::post('/books', [BookController::class, 'store']);
Route::get('/books', [BookController::class, 'index']);