<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Facades\Auth;
use App\Models\clothing;
use App\Models\vintage;
use App\Models\vintages;
use App\Models\shoeone;
use App\Models\shoetwo;
use App\Models\shoethree;
use App\Models\shoefour;
use App\Models\shoefours;
use App\Models\shoefives;
use App\Models\shoefive;
use App\Models\shoesix;
use App\Models\shoeseven;
use App\Models\shoeeight;
use App\Models\shoenine;
use App\Models\shoeten;
use App\Models\shoeeleven;
use App\Models\shoetwelve;
use App\Models\clothone;
use App\Models\clothtwo;
use App\Models\cloththree;
use App\Models\clothfour;
use App\Models\clothfive;
use App\Models\clothsix;
use App\Models\clothsevn;
use App\Models\clotheight;
use App\Models\clothnine;
use App\Models\clothten;
use App\Models\clotheleven;
use App\Models\clothtwelve;
use App\Models\vintageone;
use App\Models\vintagetwo;
use App\Models\vintagethree;
use App\Models\vintagefour;
use App\Models\vintagefive;
use App\Models\vintagesix;
use App\Models\vintageseven;
use App\Models\vintageeight;
use App\Models\vintagenine;
use App\Models\vintageten;
use App\Models\vintageeleven;
use App\Models\vintagetwelve;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $info = Information::all();
        $infos = clothing::all();
        $infoss = vintage::all();

        // Fetch data for firstHalf from position 1 to 4
        $firstHalf = $info->slice(0, 4); // Slices from position 0 to 4 (total 4 items)
        // Fetch data for secondHalf from position 4 to 5
        $secondHalf = $info->slice(4,4); // Slices from position 4 to 5 (total 1 item)

        // Similarly, adjust clothing and vintage data as needed
        $firsthalfclothing = $infos->slice(0, 4);
        $secondhalfclothing = $infos->slice(4, 4);

        $firsthalfvintage = $infoss->slice(0, 4);
        $secondhalfvintage = $infoss->slice(4, 4);

        // Get the currently authenticated user
        $user = Auth::user();

        // Pass the data to the view
        return view('home', [
            'firstHalf' => $firstHalf,
            'secondHalf' => $secondHalf,
            'firsthalfclothing' => $firsthalfclothing,
            'secondhalfclothing' => $secondhalfclothing,
            'firsthalfvintage' => $firsthalfvintage,
            'secondhalfvintage' => $secondhalfvintage,
            'user' => $user
        ]);
    }

    /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoes()
    {
        $shoe = Information::all();
        return view('shoes', ['shoe' => $shoe]);
    }
     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothing()
    {
        $cloth = clothing::all();
        return view('cloth', ['cloth' => $cloth]);
    }
     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintage()
    {
        $vintage = vintage::all();
        return view('vintage', ['vintage' => $vintage]);
    }
     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoeone()
    {
        $data = shoeone::all();
       
        return view('shoeone', ['data' => $data]);
    }


     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoetwo()
    {
        $data = shoetwo::all();
        return view('shoetwo', ['data' => $data]);
    }






     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoethree()
    {
        $data = shoethree::all();
        return view('shoethree', ['data' => $data]);
    }











     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoefour()
    {
        $data = shoefour::all();
        return view('shoefour', ['data' => $data]);
    }





    /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoefive()
    {
        $data = shoefive::all();
        return view('shoefive', ['data' => $data]);
    }




    /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoesix()
    {
        $data = shoesix::all();
        return view('shoesix', ['data' => $data]);
    }






     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoeseven()
    {
        $data = shoeseven::all();
        return view('shoeseven', ['data' => $data]);
    }






     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoeeight()
    {
        $data = shoeeight::all();
        return view('shoeeight', ['data' => $data]);
    }








     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoenine()
    {
        $data = shoenine::all();
        return view('shoenine', ['data' => $data]);
    }












     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoeten()
    {
        $data = shoeten::all();
        return view('shoeten', ['data' => $data]);
    }







      /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoeeleven()
    {
        $data = shoeeleven::all();
        return view('shoeeleven', ['data' => $data]);
    }







       /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoetwelve()
    {
        $data = shoetwelve::all();
        return view('shoetwelve', ['data' => $data]);
    }









       /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothone()
    {
        $data = clothone::all();
        return view('clothone', ['data' => $data]);
    }






        /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothtwo()
    {
        $data = clothtwo::all();
        return view('clothtwo', ['data' => $data]);
    }









        /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cloththree()
    {
        $data = cloththree::all();
        return view('cloththree', ['data' => $data]);
    }







         /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothfour()
    {
        $data = clothfour::all();
        return view('clothfour', ['data' => $data]);
    }







            /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothfive()
    {
        $data = clothfive::all();
        return view('clothfive', ['data' => $data]);
    }







               /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothsix()
    {
        $data = clothsix::all();
        return view('clothsix', ['data' => $data]);
    }







                /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothsevn()
    {
        $data = clothsevn::all();
        return view('clothsevn', ['data' => $data]);
    }






                    /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clotheight()
    {
        $data = clotheight::all();
        return view('clotheight', ['data' => $data]);
    }







                        /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothnine()
    {
        $data = clothnine::all();
        return view('clothnine', ['data' => $data]);
    }









                           /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothten()
    {
        $data = clothten::all();
        return view('clothten', ['data' => $data]);
    }










                              /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clotheleven()
    {
        $data = clotheleven::all();
        return view('clotheleven', ['data' => $data]);
    }





                                 /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clothtwelve()
    {
        $data = clothtwelve::all();
        return view('clothtwelve', ['data' => $data]);
    }











                                     /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintageone()
    {
        $data = vintageone::all();
        return view('vintageone', ['data' => $data]);
    }









                                         /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintagetwo()
    {
        $data = vintagetwo::all();
        return view('vintagetwo', ['data' => $data]);
    }










                                             /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintagethree()
    {
        $data = vintagethree::all();
        return view('vintagethree', ['data' => $data]);
    }









                                                 /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintagefour()
    {
        $data = vintagefour::all();
        return view('vintagefour', ['data' => $data]);
    }









                                                    /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintagefive()
    {
        $data = vintagefive::all();
        return view('vintagefive', ['data' => $data]);
    }









                                                        /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintagesix()
    {
        $data = vintagesix::all();
        return view('vintagesix', ['data' => $data]);
    }










                                                            /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintageseven()
    {
        $data = vintageseven::all();
        return view('vintageseven', ['data' => $data]);
    }









                                                                /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintageeight()
    {
        $data = vintageeight::all();
        return view('vintageeight', ['data' => $data]);
    }









                                                                    /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintagenine()
    {
        $data = vintagenine::all();
        return view('vintagenine', ['data' => $data]);
    }








                                                                        /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintageten()
    {
        $data = vintageten::all();
        return view('vintageten', ['data' => $data]);
    }









                                                                            /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintageeleven()
    {
        $data = vintageeleven::all();
        return view('vintageeleven', ['data' => $data]);
    }












                                                                                /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vintagetwelve()
    {
        $data = vintagetwelve::all();
        return view('vintagetwelve', ['data' => $data]);
    }













                                                                                   /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutus()
    {
        
        return view('aboutus');
    }








                                                                                      /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactus()
    {
        
        return view('contactus');
    }







                                                                                          /**
     * Show the shoes view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms()
    {
        
        return view('terms');
    }


















   
    
}
