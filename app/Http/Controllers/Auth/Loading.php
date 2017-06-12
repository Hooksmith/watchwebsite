 <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Clans;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use DB;

    class ClansController extends Controller
    {
        public function index(){
            \DB::connection()->disableQueryLog();

            $clan = Clans::paginate(100,['id', 'clanid', 'name', 'level', 'exp', 'warwinpercent', 'warswon', 'playercount', 'score']);

            \DB::connection()->enableQueryLog();


            return view('clans.index')->with('clan', $clan);
        }



        public function order($orderby){
            \DB::connection()->disableQueryLog();

            if($orderby == "level"){
                $clan = Clans::orderBy('level', 'DESC')
                ->orderBy('exp', 'DESC')
                ->paginate(100,['id', 'clanid', 'name', 'level', 'exp', 'warwinpercent', 'warswon', 'playercount', 'score']);
            }elseif($orderby == "score"){
                $clan = Clans::orderBy('score', 'DESC')
                ->paginate(100,['id', 'clanid', 'name', 'level', 'exp', 'warwinpercent', 'warswon', 'playercount', 'score']);
            }elseif($orderby == "warwinpercent"){
                $clan = Clans::orderBy('warwinpercent', 'DESC')
                ->where('warswon', '>=', '100')
                ->paginate(100,['id', 'clanid', 'name', 'level', 'exp', 'warwinpercent', 'warswon', 'playercount', 'score']);
            }else
                $clan = Clans::paginate(100,['id', 'clanid', 'name', 'level', 'exp', 'warwinpercent', 'warswon', 'playercount', 'score']);

            \DB::connection()->enableQueryLog();

            return view('clans.index')->with('clan', $clan);
        }


        public function showclan($id){
            $clan = Clans::find($id);

            return view('clans.clan' , compact('clan'));
        }


    }