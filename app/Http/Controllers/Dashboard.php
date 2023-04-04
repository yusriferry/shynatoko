<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\Request;
use App\Models\Models\Transaction;
use App\Http\Controller\HomeController;
 
class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $income = Transaction::where('transaction_status', 'SUCCESS')->sum('transaction_total');
        $sales = Transaction::count();
        $item = Transaction::orderBy('id', 'DESC')->take(5)->get();
        $pie = [
            'pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'failed' => Transaction::where('transaction_status', 'FAILED')->count(),
            'success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
        ];

        return view('pages.dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'item' => $item,
            'pie' => $pie

        ]);
    }
}
