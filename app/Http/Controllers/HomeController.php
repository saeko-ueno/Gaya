<?php



namespace KisMyFt2\Http\Controllers;


use Illuminate\Http\Request;



use Carbon\Carbon;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $dt = Carbon::now();
        $hour=$dt->hour;
        $result='';
        
        if ($hour<12 && 6<$hour){
           $result='<img src="img/ohayo.jpg">';
           
            }
        elseif($hour<18 && 12<=$hour){
           $result='<img src="img/kontiwa.jpg">';
            }
        else{
            $result='<img src="img/oyasumi.jpg">';
            }
    
        return view('home',
        ['hour'=>$hour,
         'result'=>$result]);
    }
    
       public function discography()
    {   
    
        return view('discography'
        );
    }
    
    
    
}
