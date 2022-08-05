<?php 
namespace App\Http\Controllers;

use Faker\Provider\ar_EG\Person;
// use Illuminate\Support\Facades\DB;
// use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HelloController extends Controller{
    public function index(Request $request){
        $user = Auth::user();
        $sort = $request->sort;
        // $items = Person::orderBy($sort,'asc')->simplePaginate(5);
        // $param = ['items'=>$items,'sort'=>$sort,'user'=>$user];
        // return view('hello.index',$param);
    }
    
}