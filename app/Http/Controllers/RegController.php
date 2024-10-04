<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information; // Ensure this is the correct model namespace
use App\Modvining;
use App\Models\vintages;
use App\Models\vintage;
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
use App\Models\user;
use App\Models\clothing;
use Illuminate\Support\Facades\Storage;
use App\Models\cart;
use App\Models\orders;
use App\Models\hello;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class RegController extends Controller
{






    public function shoeindexone()
    {
        return view('registrationform');
    }


    public function shoeonedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . '.' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  '.' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  '..'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = '...' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoeone; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


















    public function shoeindextwo()
    {
        return view('registrationform');
    }


    public function shoetwodata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'st' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'stone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'sttwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'stthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoetwo; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function shoeindexthree()
    {
        return view('registrationform');
    }


    public function shoethreedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'sth' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'sthone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'sthtwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'sththree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoethree; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }





















    public function shoeindexfour()
    {
        return view('registrationform');
    }


    public function shoefourdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'sf' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'sfone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'sftwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'sfthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoefour; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }























    public function shoeindexfive()
    {
        return view('registrationform');
    }


    public function shoefivedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'sfi' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'sfione' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'sfitwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'sfithree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoefive; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }




















    public function shoeindexsix()
    {
        return view('registrationform');
    }


    public function shoesixdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'ss' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'ssone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'sstwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'ssthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoesix; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function shoeindexseven()
    {
        return view('registrationform');
    }


    public function shoesevendata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'sse' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'sseone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'ssetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'ssethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoeseven; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }
















    public function shoeindexeight()
    {
        return view('registrationform');
    }


    public function shoeeightdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'se' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'seone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'setwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'sethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoeeight; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function shoeindexnine()
    {
        return view('registrationform');
    }


    public function shoeninedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'sn' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'snone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'sntwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'snthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoenine; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }





























    public function shoeindexten()
    {
        return view('registrationform');
    }


    public function shoetendata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'ste' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'steone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'stetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'stethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoeten; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }
































    public function shoeindexeleven()
    {
        return view('registrationform');
    }


    public function shoeelevendata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'sel' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'selone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'seltwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'selthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoeeleven; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }






















    public function shoeindextwelve()
    {
        return view('registrationform');
    }


    public function shoetwelvedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'stwe' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'stweone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'stwetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'stwethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new shoetwelve; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }






























    public function clothindexone()
    {
        return view('registrationform');
    }


    public function clothonedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'co' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'coone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'cotwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'cothree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothone; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function clothindextwo()
    {
        return view('registrationform');
    }


    public function clothtwodata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'ct' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'ctone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'cttwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'ctthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothtwo; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }































    public function clothindexthree()
    {
        return view('registrationform');
    }


    public function cloththreedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'cth' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'cthone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'cthtwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'cththree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new cloththree; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }





























    public function clothindexfour()
    {
        return view('registrationform');
    }


    public function clothfourdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'cf' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'cfone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'cftwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'cfthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothfour; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }



























    public function clothindexfive()
    {
        return view('registrationform');
    }


    public function clothfivedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'cfi' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'cfione' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'cfitwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'cfithree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothfive; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function clothindexsix()
    {
        return view('registrationform');
    }


    public function clothsixdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'cs' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'csone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'cstwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'csthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothsix; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function clothindexsevn()
    {
        return view('registrationform');
    }


    public function clothsevndata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'cse' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'cseone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'csetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'csethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothsevn; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function clothindexeight()
    {
        return view('registrationform');
    }


    public function clotheightdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'ce' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'ceone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'cetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'cethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clotheight; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }




























    public function clothindexnine()
    {
        return view('registrationform');
    }


    public function clothninedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'cn' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'cnone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'cntwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'cnthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothnine; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function clothindexten()
    {
        return view('registrationform');
    }


    public function clothtendata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'cte' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'cteone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'ctetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'ctethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothten; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function clothindexeleven()
    {
        return view('registrationform');
    }


    public function clothelevendata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'cel' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'celone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'celtwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'celthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clotheleven; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }



























    public function clothindextwelve()
    {
        return view('registrationform');
    }


    public function clothtwelvedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'ctw' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'ctwone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'ctwtwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'ctwthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new clothtwelve; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }





























    public function vintageindexone()
    {
        return view('registrationform');
    }


    public function vintageonedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'v' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vtone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vthtwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vfthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintageone; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindextwo()
    {
        return view('registrationform');
    }


    public function vintagetwodata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vtwo' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vtwoone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vtwotwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vtwothree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintagetwo; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindexthree()
    {
        return view('registrationform');
    }


    public function vintagethreedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vthree' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vthreeone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vthreetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vthreethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintagethree; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindexfour()
    {
        return view('registrationform');
    }


    public function vintagefourdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vfour' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vfourone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vfourtwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vfourthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintagefour; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindexfive()
    {
        return view('registrationform');
    }


    public function vintagefivedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vfive' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vfiveone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vfivetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vfivethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintagefive; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindexsix()
    {
        return view('registrationform');
    }


    public function vintagesixdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vsix' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vsixone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vsixtwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vsixthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintagesix; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }
    

























    public function vintageindexseven()
    {
        return view('registrationform');
    }


    public function vintagesevendata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vseven' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vsevenone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vseventwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vseventhree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintageseven; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























        public function vintageindexeight()
    {
        return view('registrationform');
    }


    public function vintageeightdata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'veight' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'veightone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'veighttwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'veightthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintageeight; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindexnine()
    {
        return view('registrationform');
    }


    public function vintageninedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vnine' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vnineone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vninetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vninethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintagenine; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindexten()
    {
        return view('registrationform');
    }


    public function vintagetendata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vten' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vtenone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vtentwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vtenthree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintageten; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindexeleven()
    {
        return view('registrationform');
    }


    public function vintageelevendata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'veleven' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'velevenone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'veleventwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'veleventhree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintageeleven; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }


























    public function vintageindextwelve()
    {
        return view('registrationform');
    }


    public function vintagetwelvedata(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . 'vtwelve' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        $imagetwo =  'vtwelveone' . $req->imagetwo->extension();
        $req->imagetwo->move(public_path('freesociety'), $imagetwo);

        $imagethree =  'vtwelvetwo'.$req->imagethree->extension();
        $req->imagethree->move(public_path('freesociety'), $imagethree);

        $imagefour = 'vtwelvethree' . $req->imagefour->extension();
        $req->imagefour->move(public_path('freesociety'), $imagefour);

        

        // Save the data
        $mttt = new vintagetwelve; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->imagetwo = $imagetwo;
        $mttt->imagethree = $imagethree;
        $mttt->imagefour = $imagefour;
        
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }















































































































    public function indexxx()
    {
        return view('registrationformm');
    }

    public function submitformreggg(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . '.' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        // Save the data
        $mttt = new vintage; 
        $mttt->textstwo = $req->brand;
        $mttt->texts = $req->details; 
        $mttt->textsthree = $req->price;
        $mttt->image = $image;
        $mttt->links = $req->links;
        $mttt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }






























    public function indexx()
    {
        return view('registrationformm');
    }

    public function submitformregg(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . '.' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        // Save the data
        $mtt = new clothing; 
        $mtt->textstwo = $req->brand;
        $mtt->texts = $req->details; 
        $mtt->textsthree = $req->price;
        $mtt->image = $image;
        $mtt->links = $req->links;
        $mtt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }
















    // Display the registration form
    public function index()
    {
        return view('registrationformm');
    }

    // Handle form submission
    public function submitformreg(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);

        // Handle the image upload
        $image = time() . '.' . $req->image->extension();
        $req->image->move(public_path('freesociety'), $image);

        // Save the data
        $mt = new Information; 
        $mt->textstwo = $req->brand;
        $mt->texts = $req->details; 
        $mt->textsthree = $req->price;
        $mt->image = $image;
        $mt->links = $req->links;
        $mt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect()->back()->withErrors(['msg'=>'neqw records!']);
    }

    // Fetch and display records
    public function recordfetch()
    {
        $details = Information::all(); // Fetch all records
        return view('fetchrecord', ['details' => $details]); // Ensure 'details' matches the view variable name
        
    }
    

    


    public function recorddelete($id){
        $cli = Information::where('id', $id)->first();
        $cli->delete();
        return redirect('/rnew');
    }










    public function recordview(){
        
        return view('shoes');
    }



    public function recordedit($id){
        $records = Information::where('id',$id)->first();
        return view('edit',['records'=>$records]);
    }


    public function recordupdate(Request $req, $id){
        $req->validate(
            [
            
                'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= Information::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        $cli->image = $image;
        $cli->save();
        return redirect('/homepage');
    }
    






























    public function dashboard(){
        
        return view('dashboard');
    }







    public function homepage()
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
        

        // Pass the data to the view
        return view('homepage', [
            'firstHalf' => $firstHalf,
            'secondHalf' => $secondHalf,
            'firsthalfclothing' => $firsthalfclothing,
            'secondhalfclothing' => $secondhalfclothing,
            'firsthalfvintage' => $firsthalfvintage,
            'secondhalfvintage' => $secondhalfvintage,
            
        ]);
        
    }








 public function pages(){
        
        return view('pages');
    }





    public function shoepage(){
        
        $shoe = Information::all();
        return view('shoepage', ['shoe' => $shoe]);
    }















    public function recordeditcloth($id){
        $records = clothing::where('id',$id)->first();
        return view('editcloth',['records'=>$records]);
    }


    public function recordupdatecloth(Request $req, $id){
        $req->validate(
            [
            
                'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
         
            ]
            
        );
        $cli= clothing::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        $cli->image = $image;
        $cli->links = $req->links;
        $cli->save();
        return redirect('/homepage');
    }
    public function recorddeletecloth($id){
        $cli = clothing::where('id', $id)->first();
        $cli->delete();
        return redirect('/homepage');
    }

































    public function recordeditvintage($id){
        $records = vintage::where('id',$id)->first();
        return view('editvintage',['records'=>$records]);
    }


    public function recordupdatevintage(Request $req, $id){
        $req->validate(
            [
            
                'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
         
            ]
            
        );
        $cli= vintage::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        $cli->image = $image;
        $cli->links = $req->links;
        $cli->save();
        return redirect('/homepage');
    }
    public function recorddeletevintage($id){
        $cli = vintage::where('id', $id)->first();
        $cli->delete();
        return redirect('/homepage');
    }





    public function clothpage(){
        
        $shoe = clothing::all();
        return view('clothingpage', ['shoe' => $shoe]);
    }


    public function vintagepage(){
        
        $shoe = vintage::all();
        return view('vintagepage', ['shoe' => $shoe]);
    }






    public function product(){
        
        return view('product');
    }







    public function shoedetail(){
        
        $data = shoeone::all();
        $datatwo = shoetwo::all();
        $datathree = shoethree::all();
        $datafour = shoefour::all();
        $datafive = shoefive::all();
        $datasix = shoesix::all();
        $dataseven = shoeseven::all();
        $dataeight = shoeeight::all();
        $datanine = shoenine::all();
        $dataten = shoeten::all();
        $dataeleven = shoeeleven::all();
        $datatwelve = shoetwelve::all();
       
        return view('shoedetail', [
            'data' => $data
            ,'datatwo' => $datatwo
            ,'datathree' => $datathree
            ,'datafour' => $datafour
            ,'datafive' => $datafive
            ,'datasix' => $datasix
            ,'dataseven' => $dataseven
            ,'dataeight' => $dataeight
            ,'datanine' => $datanine
            ,'dataten' => $dataten
            ,'dataeleven' => $dataeleven
            ,'datatwelve' => $datatwelve
    ]);
    }













    public function recordeditshoeone($id){
        $records = shoeone::where('id',$id)->first();
        return view('editshoeone',['records'=>$records]);
    }


    public function recordupdateshoeone(Request $req, $id){
        $req->validate(
            [
            
                'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
         
            ]
            
        );
        $cli= shoeone::where('id',$id)->first();
    
       
         
        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }


    public function recorddeleteshoeone($id){
        $cli = shoeone::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }




















    public function eshoeone($id){
        $records = shoeone::where('id',$id)->first();
        return view('eshoeone',['records'=>$records]);
    }



    public function simgone(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoeone::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeone2($id){
        $records = shoeone::where('id',$id)->first();
        return view('eshoeone2',['records'=>$records]);
    }



    public function simgone2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeone::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's2' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeone3($id){
        $records = shoeone::where('id',$id)->first();
        return view('eshoeone3',['records'=>$records]);
    }



    public function simgone3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeone::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeone4($id){
        $records = shoeone::where('id',$id)->first();
        return view('eshoeone4',['records'=>$records]);
    }



    public function simgone4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeone::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }














    public function recordeditshoetwo($id){
        $records = shoetwo::where('id',$id)->first();
        return view('editshoetwo',['records'=>$records]);
    }


    public function recordupdateshoetwo(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= shoetwo::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }





    



















    public function eshoetwo($id){
        $records = shoetwo::where('id',$id)->first();
        return view('eshoetwo',['records'=>$records]);
    }



    public function simgtwo(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoetwo::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoetwo2($id){
        $records = shoetwo::where('id',$id)->first();
        return view('eshoetwo2',['records'=>$records]);
    }



    public function simgtwo2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoetwo::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's2' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoetwo3($id){
        $records = shoetwo::where('id',$id)->first();
        return view('eshoetwo3',['records'=>$records]);
    }



    public function simgtwo3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoetwo::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoetwo4($id){
        $records = shoetwo::where('id',$id)->first();
        return view('eshoetwo4',['records'=>$records]);
    }



    public function simgtwo4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoetwo::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }






    public function recorddeleteshoetwo($id){
        $cli = shoetwo::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }

























    public function recordeditshoethree($id){
        $records = shoethree::where('id',$id)->first();
        return view('editshoethree',['records'=>$records]);
    }


    public function recordupdateshoethree(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',

        ]);
        $cli= shoethree::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }






    



















    public function eshoethree($id){
        $records = shoethree::where('id',$id)->first();
        return view('eshoethree',['records'=>$records]);
    }



    public function simgthree(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoethree::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoethree2($id){
        $records = shoethree::where('id',$id)->first();
        return view('eshoethree2',['records'=>$records]);
    }



    public function simgthree2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoethree::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's2' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoethree3($id){
        $records = shoethree::where('id',$id)->first();
        return view('eshoethree3',['records'=>$records]);
    }



    public function simgthree3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoethree::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoethree4($id){
        $records = shoethree::where('id',$id)->first();
        return view('eshoethree4',['records'=>$records]);
    }



    public function simgthree4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoethree::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }







    public function recorddeleteshoethree($id){
        $cli = shoethree::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }


























    public function recordeditshoefour($id){
        $records = shoefour::where('id',$id)->first();
        return view('editshoefour',['records'=>$records]);
    }


    public function recordupdateshoefour(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',

        ]);
        $cli= shoefour::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }
    





    



















    public function eshoefour($id){
        $records = shoefour::where('id',$id)->first();
        return view('eshoefour',['records'=>$records]);
    }



    public function simgfour(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoefour::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoefour2($id){
        $records = shoefour::where('id',$id)->first();
        return view('eshoefour2',['records'=>$records]);
    }



    public function simgfour2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoefour::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's2' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoefour3($id){
        $records = shoefour::where('id',$id)->first();
        return view('eshoefour3',['records'=>$records]);
    }



    public function simgfour3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoefour::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoefour4($id){
        $records = shoefour::where('id',$id)->first();
        return view('eshoefour4',['records'=>$records]);
    }



    public function simgfour4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoefour::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }







    public function recorddeleteshoefour($id){
        $cli = shoefour::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }


























    public function recordeditshoefive($id){
        $records = shoefive::where('id',$id)->first();
        return view('editshoefive',['records'=>$records]);
    }


    public function recordupdateshoefive(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= shoefive::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }
        





    



















    public function eshoefive($id){
        $records = shoefive::where('id',$id)->first();
        return view('eshoefive',['records'=>$records]);
    }



    public function simgfive(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoefive::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoefive2($id){
        $records = shoefive::where('id',$id)->first();
        return view('eshoefive2',['records'=>$records]);
    }



    public function simgfive2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoefive::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's2' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoefive3($id){
        $records = shoefive::where('id',$id)->first();
        return view('eshoefive3',['records'=>$records]);
    }



    public function simgfive3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoefive::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoefive4($id){
        $records = shoefive::where('id',$id)->first();
        return view('eshoefive4',['records'=>$records]);
    }



    public function simgfive4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoefive::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }


































    public function recorddeleteshoefive($id){
        $cli = shoefive::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }
























    public function recordeditshoesix($id){
        $records = shoesix::where('id',$id)->first();
        return view('editshoesix',['records'=>$records]);
    }


    public function recordupdateshoesix(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= shoesix::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }
            





    



















    public function eshoesix($id){
        $records = shoesix::where('id',$id)->first();
        return view('eshoesix',['records'=>$records]);
    }



    public function simgsix(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoesix::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoesix2($id){
        $records = shoesix::where('id',$id)->first();
        return view('eshoesix2',['records'=>$records]);
    }



    public function simgsix2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoesix::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's2' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoesix3($id){
        $records = shoesix::where('id',$id)->first();
        return view('eshoesix3',['records'=>$records]);
    }



    public function simgsix3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoesix::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoesix4($id){
        $records = shoesix::where('id',$id)->first();
        return view('eshoesix4',['records'=>$records]);
    }



    public function simgsix4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoesix::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }


























































    public function recorddeleteshoesix($id){
        $cli = shoesix::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }



























    public function recordeditshoeseven($id){
        $records = shoeseven::where('id',$id)->first();
        return view('editshoeseven',['records'=>$records]);
    }


    public function recordupdateshoeseven(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);

        $cli= shoeseven::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }

            





    



















    public function eshoeseven($id){
        $records = shoeseven::where('id',$id)->first();
        return view('eshoeseven',['records'=>$records]);
    }



    public function simgseven(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoeseven::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeseven2($id){
        $records = shoeseven::where('id',$id)->first();
        return view('eshoeseven2',['records'=>$records]);
    }



    public function simgseven2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeseven::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's2' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeseven3($id){
        $records = shoeseven::where('id',$id)->first();
        return view('eshoeseven3',['records'=>$records]);
    }



    public function simgseven3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeseven::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeseven4($id){
        $records = shoeseven::where('id',$id)->first();
        return view('eshoeseven4',['records'=>$records]);
    }



    public function simgseven4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeseven::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }



























































    public function recorddeleteshoeseven($id){
        $cli = shoeseven::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }


























    public function recordeditshoeeight($id){
        $records = shoeeight::where('id',$id)->first();
        return view('editshoeeight',['records'=>$records]);
    }


    public function recordupdateshoeeight(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);

        $cli= shoeeight::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }
    
            





    



















    public function eshoeeight($id){
        $records = shoeeight::where('id',$id)->first();
        return view('eshoeeight',['records'=>$records]);
    }



    public function simgeight(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoeeight::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeeight2($id){
        $records = shoeeight::where('id',$id)->first();
        return view('eshoeeight2',['records'=>$records]);
    }



    public function simgeight2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeeight::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeeight3($id){
        $records = shoeeight::where('id',$id)->first();
        return view('eshoeeight3',['records'=>$records]);
    }



    public function simgeight3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeeight::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeeight4($id){
        $records = shoeeight::where('id',$id)->first();
        return view('eshoeeight4',['records'=>$records]);
    }



    public function simgeight4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeeight::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }



























































    public function recorddeleteshoeeight($id){
        $cli = shoeeight::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }




























    public function recordeditshoenine($id){
        $records = shoenine::where('id',$id)->first();
        return view('editshoenine',['records'=>$records]);
    }


    public function recordupdateshoenine(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= shoenine::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }
        
            





    



















    public function eshoenine($id){
        $records = shoenine::where('id',$id)->first();
        return view('eshoenine',['records'=>$records]);
    }



    public function simgnine(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoenine::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoenine2($id){
        $records = shoenine::where('id',$id)->first();
        return view('eshoenine2',['records'=>$records]);
    }



    public function simgnine2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoenine::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoenine3($id){
        $records = shoenine::where('id',$id)->first();
        return view('eshoenine3',['records'=>$records]);
    }



    public function simgnine3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoenine::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoenine4($id){
        $records = shoenine::where('id',$id)->first();
        return view('eshoenine4',['records'=>$records]);
    }



    public function simgnine4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoenine::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }













    public function recorddeleteshoenine($id){
        $cli = shoenine::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }


























    public function recordeditshoeten($id){
        $records = shoeten::where('id',$id)->first();
        return view('editshoeten',['records'=>$records]);
    }


    public function recordupdateshoeten(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= shoeten::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }

            
            





    



















    public function eshoeten($id){
        $records = shoeten::where('id',$id)->first();
        return view('eshoeten',['records'=>$records]);
    }



    public function simgten(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoeten::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeten2($id){
        $records = shoeten::where('id',$id)->first();
        return view('eshoeten2',['records'=>$records]);
    }



    public function simgten2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeten::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeten3($id){
        $records = shoeten::where('id',$id)->first();
        return view('eshoeten3',['records'=>$records]);
    }



    public function simgten3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeten::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeten4($id){
        $records = shoeten::where('id',$id)->first();
        return view('eshoeten4',['records'=>$records]);
    }



    public function simgten4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeten::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }














    public function recorddeleteshoeten($id){
        $cli = shoeten::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }


























    public function recordeditshoeeleven($id){
        $records = shoeeleven::where('id',$id)->first();
        return view('editshoeeleven',['records'=>$records]);
    }


    public function recordupdateshoeeleven(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= shoeeleven::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }
    
            
            





    



















    public function eshoeeleven($id){
        $records = shoeeleven::where('id',$id)->first();
        return view('eshoeeleven',['records'=>$records]);
    }



    public function simgeleven(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoeeleven::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeeleven2($id){
        $records = shoeeleven::where('id',$id)->first();
        return view('eshoeeleven2',['records'=>$records]);
    }



    public function simgeleven2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeeleven::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeeleven3($id){
        $records = shoeeleven::where('id',$id)->first();
        return view('eshoeeleven3',['records'=>$records]);
    }



    public function simgeleven3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeeleven::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoeeleven4($id){
        $records = shoeeleven::where('id',$id)->first();
        return view('eshoeeleven4',['records'=>$records]);
    }



    public function simgeleven4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoeeleven::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }














    public function recorddeleteshoeeleven($id){
        $cli = shoeeleven::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }


























    public function recordeditshoetwelve($id){
        $records = shoetwelve::where('id',$id)->first();
        return view('editshoetwelve',['records'=>$records]);
    }


    public function recordupdateshoetwelve(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= shoeeleven::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/shoedetail');
    }
       
            
            





    



















    public function eshoetwelve($id){
        $records = shoetwelve::where('id',$id)->first();
        return view('eshoetwelve',['records'=>$records]);
    }



    public function simgtwelve(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= shoetwelve::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoetwelve2($id){
        $records = shoetwelve::where('id',$id)->first();
        return view('eshoetwelve2',['records'=>$records]);
    }



    public function simgtwelve2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoetwelve::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoetwelve3($id){
        $records = shoetwelve::where('id',$id)->first();
        return view('eshoetwelve3',['records'=>$records]);
    }



    public function simgtwelve3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoetwelve::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }

























    public function eshoetwelve4($id){
        $records = shoetwelve::where('id',$id)->first();
        return view('eshoetwelve4',['records'=>$records]);
    }



    public function simgtwelve4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= shoetwelve::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/shoedetail');
    }














    public function recorddeleteshoetwelve($id){
        $cli = shoetwelve::where('id', $id)->first();
        $cli->delete();
        return redirect('/shoedetail');
    }





































    public function clothdetails(){
        
        $data = clothone::all();
        $datatwo = clothtwo::all();
        $datathree = cloththree::all();
        $datafour = clothfour::all();
        $datafive = clothfive::all();
        $datasix = clothsix::all();
        $dataseven = clothsevn::all();
        $dataeight = clotheight::all();
        $datanine = clothnine::all();
        $dataten = clothten::all();
        $dataeleven = clotheleven::all();
        $datatwelve = clothtwelve::all();
       
        return view('clothdetail', [
            'data' => $data
            ,'datatwo' => $datatwo
            ,'datathree' => $datathree
            ,'datafour' => $datafour
            ,'datafive' => $datafive
            ,'datasix' => $datasix
            ,'dataseven' => $dataseven
            ,'dataeight' => $dataeight
            ,'datanine' => $datanine
            ,'dataten' => $dataten
            ,'dataeleven' => $dataeleven
            ,'datatwelve' => $datatwelve
    ]);
    }







    public function recordeditclothone($id){
        $records = clothone::where('id',$id)->first();
        return view('editclothone',['records'=>$records]);
    }


    public function recordupdateclothone(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clothone::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
           
            
            





    



















    public function eclothone($id){
        $records = clothone::where('id',$id)->first();
        return view('eclothone',['records'=>$records]);
    }



    public function cimgone(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothone::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothone2($id){
        $records = clothone::where('id',$id)->first();
        return view('eclothone2',['records'=>$records]);
    }



    public function cimgone2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothone::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothone3($id){
        $records = clothone::where('id',$id)->first();
        return view('eclothone3',['records'=>$records]);
    }



    public function cimgone3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothone::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothone4($id){
        $records = clothone::where('id',$id)->first();
        return view('eclothone4',['records'=>$records]);
    }



    public function cimgone4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothone::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }














    public function recorddeleteclothone($id){
        $cli = clothone::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function recordeditclothtwo($id){
        $records = clothtwo::where('id',$id)->first();
        return view('editclothtwo',['records'=>$records]);
    }


    public function recordupdateclothtwo(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clothtwo::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
                
            





    



















    public function eclothtwo($id){
        $records = clothtwo::where('id',$id)->first();
        return view('eclothtwo',['records'=>$records]);
    }



    public function cimgtwo(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothtwo::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothtwo2($id){
        $records = clothtwo::where('id',$id)->first();
        return view('eclothtwo2',['records'=>$records]);
    }



    public function cimgtwo2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothtwo::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothtwo3($id){
        $records = clothtwo::where('id',$id)->first();
        return view('eclothtwo3',['records'=>$records]);
    }



    public function cimgtwo3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothtwo::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothtwo4($id){
        $records = clothtwo::where('id',$id)->first();
        return view('eclothtwo4',['records'=>$records]);
    }



    public function cimgtwo4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothtwo::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }














    public function recorddeleteclothtwo($id){
        $cli = clothtwo::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function recordeditcloththree($id){
        $records = cloththree::where('id',$id)->first();
        return view('editcloththree',['records'=>$records]);
    }


    public function recordupdatecloththree(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= cloththree::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }


                    
            





    



















    public function ecloththree($id){
        $records = cloththree::where('id',$id)->first();
        return view('ecloththree',['records'=>$records]);
    }



    public function cimgthree(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= cloththree::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function ecloththree2($id){
        $records = cloththree::where('id',$id)->first();
        return view('ecloththree2',['records'=>$records]);
    }



    public function cimgthree2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= cloththree::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function ecloththree3($id){
        $records = cloththree::where('id',$id)->first();
        return view('ecloththree3',['records'=>$records]);
    }



    public function cimgthree3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= cloththree::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function ecloththree4($id){
        $records = cloththree::where('id',$id)->first();
        return view('ecloththree4',['records'=>$records]);
    }



    public function cimgthree4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= cloththree::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

















    public function recorddeletecloththree($id){
        $cli = cloththree::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function recordeditclothfour($id){
        $records = clothfour::where('id',$id)->first();
        return view('editclothfour',['records'=>$records]);
    }


    public function recordupdateclothfour(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clothfour::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }




    

                    
            





    



















    public function eclothfour($id){
        $records = clothfour::where('id',$id)->first();
        return view('eclothfour',['records'=>$records]);
    }



    public function cimgfour(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothfour::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothfour2($id){
        $records = clothfour::where('id',$id)->first();
        return view('eclothfour2',['records'=>$records]);
    }



    public function cimgfour2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothfour::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothfour3($id){
        $records = clothfour::where('id',$id)->first();
        return view('eclothfour3',['records'=>$records]);
    }



    public function cimgfour3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothfour::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothfour4($id){
        $records = clothfour::where('id',$id)->first();
        return view('eclothfour4',['records'=>$records]);
    }



    public function cimgfour4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothfour::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }





















    public function recorddeleteclothfour($id){
        $cli = clothfour::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function recordeditclothfive($id){
        $records = clothfive::where('id',$id)->first();
        return view('editclothfive',['records'=>$records]);
    }


    public function recordupdateclothfive(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clothfive::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
                        
            





    



















    public function eclothfive($id){
        $records = clothfive::where('id',$id)->first();
        return view('eclothfive',['records'=>$records]);
    }



    public function cimgfive(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothfive::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothfive2($id){
        $records = clothfive::where('id',$id)->first();
        return view('eclothfive2',['records'=>$records]);
    }



    public function cimgfive2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothfive::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothfive3($id){
        $records = clothfive::where('id',$id)->first();
        return view('eclothfive3',['records'=>$records]);
    }



    public function cimgfive3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothfive::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothfive4($id){
        $records = clothfive::where('id',$id)->first();
        return view('eclothfive4',['records'=>$records]);
    }



    public function cimgfive4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothfive::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }





















    public function recorddeleteclothfive($id){
        $cli = clothfive::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }
























    public function recordeditclothsix($id){
        $records = clothsix::where('id',$id)->first();
        return view('editclothsix',['records'=>$records]);
    }


    public function recordupdateclothsix(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clothsix::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
                            
            





    



















    public function eclothsix($id){
        $records = clothsix::where('id',$id)->first();
        return view('eclothsix',['records'=>$records]);
    }



    public function cimgsix(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothsix::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothsix2($id){
        $records = clothsix::where('id',$id)->first();
        return view('eclothsix2',['records'=>$records]);
    }



    public function cimgsix2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothsix::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothsix3($id){
        $records = clothsix::where('id',$id)->first();
        return view('eclothsix3',['records'=>$records]);
    }



    public function cimgsix3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothsix::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothsix4($id){
        $records = clothsix::where('id',$id)->first();
        return view('eclothsix4',['records'=>$records]);
    }



    public function cimgsix4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothsix::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }





















    public function recorddeleteclothsix($id){
        $cli = clothsix::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }



























    public function recordeditclothseven($id){
        $records = clothsevn::where('id',$id)->first();
        return view('editclothseven',['records'=>$records]);
    }


    public function recordupdateclothseven(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            'links' => 'Required',
        ]);
        $cli= clothsevn::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    
    }


                                
            





    



















    public function eclothseven($id){
        $records = clothsevn::where('id',$id)->first();
        return view('eclothseven',['records'=>$records]);
    }



    public function cimgseven(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothsevn::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothseven2($id){
        $records = clothsevn::where('id',$id)->first();
        return view('eclothseven2',['records'=>$records]);
    }



    public function cimgseven2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothsevn::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothseven3($id){
        $records = clothsevn::where('id',$id)->first();
        return view('eclothseven3',['records'=>$records]);
    }



    public function cimgseven3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothsevn::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothseven4($id){
        $records = clothsevn::where('id',$id)->first();
        return view('eclothseven4',['records'=>$records]);
    }



    public function cimgseven4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothsevn::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }























    public function recorddeleteclothseven($id){
        $cli = clothsevn::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function recordeditclotheight($id){
        $records = clotheight::where('id',$id)->first();
        return view('editclotheight',['records'=>$records]);
    }


    public function recordupdateclotheight(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clotheight::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
                                    
            





    



















    public function eclotheight($id){
        $records = clotheight::where('id',$id)->first();
        return view('eclotheight',['records'=>$records]);
    }



    public function cimgeight(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clotheight::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclotheight2($id){
        $records = clotheight::where('id',$id)->first();
        return view('eclotheight2',['records'=>$records]);
    }



    public function cimgeight2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clotheight::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclotheight3($id){
        $records = clotheight::where('id',$id)->first();
        return view('eclotheight3',['records'=>$records]);
    }



    public function cimgeight3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clotheight::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclotheight4($id){
        $records = clotheight::where('id',$id)->first();
        return view('eclotheight4',['records'=>$records]);
    }



    public function cimgeight4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clotheight::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }























    public function recorddeleteclotheight($id){
        $cli = clotheight::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }




























    public function recordeditclothnine($id){
        $records = clothnine::where('id',$id)->first();
        return view('editclothnine',['records'=>$records]);
    }


    public function recordupdateclothnine(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clothnine::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
                                        
            





    



















    public function eclothnine($id){
        $records = clothnine::where('id',$id)->first();
        return view('eclothnine',['records'=>$records]);
    }



    public function cimgnine(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothnine::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothnine2($id){
        $records = clothnine::where('id',$id)->first();
        return view('eclothnine2',['records'=>$records]);
    }



    public function cimgnine2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothnine::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothnine3($id){
        $records = clothnine::where('id',$id)->first();
        return view('eclothnine3',['records'=>$records]);
    }



    public function cimgnine3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothnine::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothnine4($id){
        $records = clothnine::where('id',$id)->first();
        return view('eclothnine4',['records'=>$records]);
    }



    public function cimgnine4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothnine::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }























    public function recorddeleteclothnine($id){
        $cli = clothnine::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function recordeditclothten($id){
        $records = clothten::where('id',$id)->first();
        return view('editclothten',['records'=>$records]);
    }


    public function recordupdateclothten(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clothten::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
                                            
            





    



















    public function eclothten($id){
        $records = clothten::where('id',$id)->first();
        return view('eclothten',['records'=>$records]);
    }



    public function cimgten(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothten::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothten2($id){
        $records = clothten::where('id',$id)->first();
        return view('eclothten2',['records'=>$records]);
    }



    public function cimgten2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothten::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothten3($id){
        $records = clothten::where('id',$id)->first();
        return view('eclothten3',['records'=>$records]);
    }



    public function cimgten3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothten::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothten4($id){
        $records = clothten::where('id',$id)->first();
        return view('eclothten4',['records'=>$records]);
    }



    public function cimgten4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothten::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }























    public function recorddeleteclothten($id){
        $cli = clothten::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function recordeditclotheleven($id){
        $records = clotheleven::where('id',$id)->first();
        return view('editclotheleven',['records'=>$records]);
    }


    public function recordupdateclotheleven(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clotheleven::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
                                                
            





    



















    public function eclotheleven($id){
        $records = clotheleven::where('id',$id)->first();
        return view('eclotheleven',['records'=>$records]);
    }



    public function cimgeleven(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clotheleven::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclotheleven2($id){
        $records = clotheleven::where('id',$id)->first();
        return view('eclotheleven2',['records'=>$records]);
    }



    public function cimgeleven2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clotheleven::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclotheleven3($id){
        $records = clotheleven::where('id',$id)->first();
        return view('eclotheleven3',['records'=>$records]);
    }



    public function cimgeleven3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clotheleven::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclotheleven4($id){
        $records = clotheleven::where('id',$id)->first();
        return view('eclotheleven4',['records'=>$records]);
    }



    public function cimgeleven4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clotheleven::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }























    public function recorddeleteclotheleven($id){
        $cli = clotheleven::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function recordeditclothtwelve($id){
        $records = clothtwelve::where('id',$id)->first();
        return view('editclothtwelve',['records'=>$records]);
    }


    public function recordupdateclothtwelve(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= clothtwelve::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/clothdetail');
    }
                                                    
            





    



















    public function eclothtwelve($id){
        $records = clothtwelve::where('id',$id)->first();
        return view('eclothtwelve',['records'=>$records]);
    }



    public function cimgtwelve(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= clothtwelve::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothtwelve2($id){
        $records = clothtwelve::where('id',$id)->first();
        return view('eclothtwelve2',['records'=>$records]);
    }



    public function cimgtwelve2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothtwelve::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothtwelve3($id){
        $records = clothtwelve::where('id',$id)->first();
        return view('eclothtwelve3',['records'=>$records]);
    }



    public function cimgtwelve3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothtwelve::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }

























    public function eclothtwelve4($id){
        $records = clothtwelve::where('id',$id)->first();
        return view('eclothtwelve4',['records'=>$records]);
    }



    public function cimgtwelve4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= clothtwelve::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/clothdetail');
    }























    public function recorddeleteclothtwelve($id){
        $cli = clothtwelve::where('id', $id)->first();
        $cli->delete();
        return redirect('/clothdetail');
    }


























    public function vintagedetails(){
        
        $data = vintageone::all();
        $datatwo = vintagetwo::all();
        $datathree = vintagethree::all();
        $datafour = vintagefour::all();
        $datafive = vintagefive::all();
        $datasix = vintagesix::all();
        $dataseven = vintageseven::all();
        $dataeight = vintageeight::all();
        $datanine = vintagenine::all();
        $dataten = vintageten::all();
        $dataeleven = vintageeleven::all();
        $datatwelve = vintagetwelve::all();
       
        return view('vintagedetail', [
            'data' => $data
            ,'datatwo' => $datatwo
            ,'datathree' => $datathree
            ,'datafour' => $datafour
            ,'datafive' => $datafive
            ,'datasix' => $datasix
            ,'dataseven' => $dataseven
            ,'dataeight' => $dataeight
            ,'datanine' => $datanine
            ,'dataten' => $dataten
            ,'dataeleven' => $dataeleven
            ,'datatwelve' => $datatwelve
    ]);
    }


























    public function recordeditvintageone($id){
        $records = vintageone::where('id',$id)->first();
        return view('editvintageone',['records'=>$records]);
    }


    public function recordupdatevintageone(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintageone::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                        
            





    



















    public function evintageone($id){
        $records = vintageone::where('id',$id)->first();
        return view('evintageone',['records'=>$records]);
    }



    public function vimgone(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintageone::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageone2($id){
        $records = vintageone::where('id',$id)->first();
        return view('evintageone2',['records'=>$records]);
    }



    public function vimgone2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageone::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageone3($id){
        $records = vintageone::where('id',$id)->first();
        return view('evintageone3',['records'=>$records]);
    }



    public function vimgone3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageone::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageone4($id){
        $records = vintageone::where('id',$id)->first();
        return view('evintageone4',['records'=>$records]);
    }



    public function vimgone4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageone::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }























    public function recorddeletevintageone($id){
        $cli = vintageone::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function recordeditvintagetwo($id){
        $records = vintagetwo::where('id',$id)->first();
        return view('editvintagetwo',['records'=>$records]);
    }


    public function recordupdatevintagetwo(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintagetwo::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                            
            





    



















    public function evintagetwo($id){
        $records = vintagetwo::where('id',$id)->first();
        return view('evintagetwo',['records'=>$records]);
    }



    public function vimgtwo(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintagetwo::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagetwo2($id){
        $records = vintagetwo::where('id',$id)->first();
        return view('evintagetwo2',['records'=>$records]);
    }



    public function vimgtwo2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagetwo::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagetwo3($id){
        $records = vintagetwo::where('id',$id)->first();
        return view('evintagetwo3',['records'=>$records]);
    }



    public function vimgtwo3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagetwo::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagetwo4($id){
        $records = vintagetwo::where('id',$id)->first();
        return view('evintagetwo4',['records'=>$records]);
    }



    public function vimgtwo4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagetwo::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }























    public function recorddeletevintagetwo($id){
        $cli = vintagetwo::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function recordeditvintagethree($id){
        $records = vintagethree::where('id',$id)->first();
        return view('editvintagethree',['records'=>$records]);
    }


    public function recordupdatevintagethree(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintagethree::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }


                                                                
            





    



















    public function evintagethree($id){
        $records = vintagethree::where('id',$id)->first();
        return view('evintagethree',['records'=>$records]);
    }



    public function vimgthree(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintagethree::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagethree2($id){
        $records = vintagethree::where('id',$id)->first();
        return view('evintagethree2',['records'=>$records]);
    }



    public function vimgthree2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagethree::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagethree3($id){
        $records = vintagethree::where('id',$id)->first();
        return view('evintagethree3',['records'=>$records]);
    }



    public function vimgthree3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagethree::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagethree4($id){
        $records = vintagethree::where('id',$id)->first();
        return view('evintagethree4',['records'=>$records]);
    }



    public function vimgthree4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagethree::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function recorddeletevintagethree($id){
        $cli = vintagethree::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function recordeditvintagefour($id){
        $records = vintagefour::where('id',$id)->first();
        return view('editvintagefour',['records'=>$records]);
    }


    public function recordupdatevintagefour(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintagefour::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                    
            





    



















    public function evintagefour($id){
        $records = vintagefour::where('id',$id)->first();
        return view('evintagefour',['records'=>$records]);
    }



    public function vimgfour(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintagefour::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagefour2($id){
        $records = vintagefour::where('id',$id)->first();
        return view('evintagefour2',['records'=>$records]);
    }



    public function vimgfour2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagefour::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagefour3($id){
        $records = vintagefour::where('id',$id)->first();
        return view('evintagefour3',['records'=>$records]);
    }



    public function vimgfour3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagefour::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagefour4($id){
        $records = vintagefour::where('id',$id)->first();
        return view('evintagefour4',['records'=>$records]);
    }



    public function vimgfour4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagefour::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function recorddeletevintagefour($id){
        $cli = vintagefour::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function recordeditvintagefive($id){
        $records = vintagefive::where('id',$id)->first();
        return view('editvintagefive',['records'=>$records]);
    }


    public function recordupdatevintagefive(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintagefive::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                        
            





    



















    public function evintagefive($id){
        $records = vintagefive::where('id',$id)->first();
        return view('evintagefive',['records'=>$records]);
    }



    public function vimgfive(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintagefive::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagefive2($id){
        $records = vintagefive::where('id',$id)->first();
        return view('evintagefive2',['records'=>$records]);
    }



    public function vimgfive2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagefive::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagefive3($id){
        $records = vintagefive::where('id',$id)->first();
        return view('evintagefive3',['records'=>$records]);
    }



    public function vimgfive3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagefive::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagefive4($id){
        $records = vintagefive::where('id',$id)->first();
        return view('evintagefive4',['records'=>$records]);
    }



    public function vimgfive4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagefive::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function recorddeletevintagefive($id){
        $cli = vintagefive::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }
























    public function recordeditvintagesix($id){
        $records = vintagesix::where('id',$id)->first();
        return view('editvintagesix',['records'=>$records]);
    }


    public function recordupdatevintagesix(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintagesix::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                            
            





    



















    public function evintagesix($id){
        $records = vintagesix::where('id',$id)->first();
        return view('evintagesix',['records'=>$records]);
    }



    public function vimgsix(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintagesix::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagesix2($id){
        $records = vintagesix::where('id',$id)->first();
        return view('evintagesix2',['records'=>$records]);
    }



    public function vimgsix2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagesix::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagesix3($id){
        $records = vintagesix::where('id',$id)->first();
        return view('evintagesix3',['records'=>$records]);
    }



    public function vimgsix3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagesix::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagesix4($id){
        $records = vintagesix::where('id',$id)->first();
        return view('evintagesix4',['records'=>$records]);
    }



    public function vimgsix4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagesix::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function recorddeletevintagesix($id){
        $cli = vintagesix::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }



























    public function recordeditvintageseven($id){
        $records = vintageseven::where('id',$id)->first();
        return view('editvintageseven',['records'=>$records]);
    }


    public function recordupdatevintageseven(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
           
        ]);
        $cli= vintageseven::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                                
            





    



















    public function evintageseven($id){
        $records = vintageseven::where('id',$id)->first();
        return view('evintageseven',['records'=>$records]);
    }



    public function vimgseven(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintageseven::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageseven2($id){
        $records = vintageseven::where('id',$id)->first();
        return view('evintageseven2',['records'=>$records]);
    }



    public function vimgseven2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageseven::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageseven3($id){
        $records = vintageseven::where('id',$id)->first();
        return view('evintageseven3',['records'=>$records]);
    }



    public function vimgseven3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageseven::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageseven4($id){
        $records = vintageseven::where('id',$id)->first();
        return view('evintageseven4',['records'=>$records]);
    }



    public function vimgseven4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageseven::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function recorddeletevintageseven($id){
        $cli = vintagesevn::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function recordeditvintageeight($id){
        $records = vintageeight::where('id',$id)->first();
        return view('editvintageeight',['records'=>$records]);
    }


    public function recordupdatevintageeight(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintageeight::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                                    
            





    



















    public function evintageeight($id){
        $records = vintageeight::where('id',$id)->first();
        return view('evintageeight',['records'=>$records]);
    }



    public function vimgeight(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintageeight::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageeight2($id){
        $records = vintageeight::where('id',$id)->first();
        return view('evintageeight2',['records'=>$records]);
    }



    public function vimgeight2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageeight::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageeight3($id){
        $records = vintageeight::where('id',$id)->first();
        return view('evintageeight3',['records'=>$records]);
    }



    public function vimgeight3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageeight::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageeight4($id){
        $records = vintageeight::where('id',$id)->first();
        return view('evintageeight4',['records'=>$records]);
    }



    public function vimgeight4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageeight::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function recorddeletevintageeight($id){
        $cli = vintageeight::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }




























    public function recordeditvintagenine($id){
        $records = vintagenine::where('id',$id)->first();
        return view('editvintagenine',['records'=>$records]);
    }


    public function recordupdatevintagenine(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintagenine::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                                        
            





    



















    public function evintagenine($id){
        $records = vintagenine::where('id',$id)->first();
        return view('evintagenine',['records'=>$records]);
    }



    public function vimgnine(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintagenine::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagenine2($id){
        $records = vintagenine::where('id',$id)->first();
        return view('evintagenine2',['records'=>$records]);
    }



    public function vimgnine2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagenine::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagenine3($id){
        $records = vintagenine::where('id',$id)->first();
        return view('evintagenine3',['records'=>$records]);
    }



    public function vimgnine3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagenine::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagenine4($id){
        $records = vintagenine::where('id',$id)->first();
        return view('evintagenine4',['records'=>$records]);
    }



    public function vimgnine4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagenine::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }
























    public function recorddeletevintagenine($id){
        $cli = vintagenine::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function recordeditvintageten($id){
        $records = vintageten::where('id',$id)->first();
        return view('editvintageten',['records'=>$records]);
    }


    public function recordupdatevintageten(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintageten::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                                            
            





    



















    public function evintageten($id){
        $records = vintageten::where('id',$id)->first();
        return view('evintageten',['records'=>$records]);
    }



    public function vimgten(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintageten::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageten2($id){
        $records = vintageten::where('id',$id)->first();
        return view('evintageten2',['records'=>$records]);
    }



    public function vimgten2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageten::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageten3($id){
        $records = vintageten::where('id',$id)->first();
        return view('evintageten3',['records'=>$records]);
    }



    public function vimgten3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageten::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageten4($id){
        $records = vintageten::where('id',$id)->first();
        return view('evintageten4',['records'=>$records]);
    }



    public function vimgten4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageten::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }
























    public function recorddeletevintageten($id){
        $cli = vintageten::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function recordeditvintageeleven($id){
        $records = vintageeleven::where('id',$id)->first();
        return view('editvintageeleven',['records'=>$records]);
    }


    public function recordupdatevintageeleven(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintageeleven::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                                                
            





    



















    public function evintageeleven($id){
        $records = vintageeleven::where('id',$id)->first();
        return view('evintageeleven',['records'=>$records]);
    }



    public function vimgeleven(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintageeleven::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageeleven2($id){
        $records = vintageeleven::where('id',$id)->first();
        return view('evintageeleven2',['records'=>$records]);
    }



    public function vimgeleven2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageeleven::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageeleven3($id){
        $records = vintageeleven::where('id',$id)->first();
        return view('evintageeleven3',['records'=>$records]);
    }



    public function vimgeleven3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageeleven::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintageeleven4($id){
        $records = vintageeleven::where('id',$id)->first();
        return view('evintageeleven4',['records'=>$records]);
    }



    public function vimgeleven4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintageeleven::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }
























    public function recorddeletevintageeleven($id){
        $cli = vintageeleven::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function recordeditvintagetwelve($id){
        $records = vintagetwelve::where('id',$id)->first();
        return view('editvintagetwelve',['records'=>$records]);
    }


    public function recordupdatevintagetwelve(Request $req, $id){
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);
        $cli= vintagetwelve::where('id',$id)->first();

        $cli->textstwo = $req->brand;
        $cli->texts = $req->details; 
        $cli->textsthree = $req->price;
        
        $cli->save();
        return redirect('/vintagedetail');
    }
                                                                                                    
            





    



















    public function evintagetwelve($id){
        $records = vintagetwelve::where('id',$id)->first();
        return view('evintagetwelve',['records'=>$records]);
    }



    public function vimgtwelve(Request $req, $id){
        $req->validate(
            [
            
              
            'image' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            
         
            ]
            
        );
        $cli= vintagetwelve::where('id',$id)->first();
    
        if(isset($req->image)){
            $image=time(). '.' .$req->image->extension();
            $req->image->move(public_path('freesociety'),$image);
            $cli->image =$image;
        }
         
        
        $cli->image = $image;
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagetwelve2($id){
        $records = vintagetwelve::where('id',$id)->first();
        return view('evintagetwelve2',['records'=>$records]);
    }



    public function vimgtwelve2(Request $req, $id){
        $req->validate(
            [
            
            'imagetwo' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagetwelve::where('id',$id)->first();
    
        if(isset($req->imagetwo)){
            $imagetwo=time(). 's8' .$req->imagetwo->extension();
            $req->imagetwo->move(public_path('freesociety'),$imagetwo);
            $cli->imagetwo =$imagetwo;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagetwelve3($id){
        $records = vintagetwelve::where('id',$id)->first();
        return view('evintagetwelve3',['records'=>$records]);
    }



    public function vimgtwelve3(Request $req, $id){
        $req->validate(
            [
            
            'imagethree' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagetwelve::where('id',$id)->first();
    
        if(isset($req->imagethree)){
            $imagethree=time(). 'so3' .$req->imagethree->extension();
            $req->imagethree->move(public_path('freesociety'),$imagethree);
            $cli->imagethree =$imagethree;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }

























    public function evintagetwelve4($id){
        $records = vintagetwelve::where('id',$id)->first();
        return view('evintagetwelve4',['records'=>$records]);
    }



    public function vimgtwelve4(Request $req, $id){
        $req->validate(
            [
            
            'imagefour' => 'Required|image|mimes:jpeg,jfif,png,jpg,gif,svg|max:2048',
            

            ]
            
        );
        $cli= vintagetwelve::where('id',$id)->first();
    
        if(isset($req->imagefour)){
            $imagefour=time(). 'so4' .$req->imagefour->extension();
            $req->imagefour->move(public_path('freesociety'),$imagefour);
            $cli->imagefour =$imagefour;
        }
         
        
        
        
        $cli->save();
        return redirect('/vintagedetail');
    }
























    public function recorddeletevintagetwelve($id){
        $cli = vintagetwelve::where('id', $id)->first();
        $cli->delete();
        return redirect('/vintagedetail');
    }


























    public function datapage()
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
        

        // Pass the data to the view
        return view('datapage', [
            'firstHalf' => $firstHalf,
            'secondHalf' => $secondHalf,
            'firsthalfclothing' => $firsthalfclothing,
            'secondhalfclothing' => $secondhalfclothing,
            'firsthalfvintage' => $firsthalfvintage,
            'secondhalfvintage' => $secondhalfvintage,
            
        ]);
        
    }
































    public function cartsubmitform(Request $req)
    {
        // Validate the request
        $req->validate([
            'brand' => 'Required',
            'details' => 'Required',
            'price' => 'Required',
            
        ]);



        // Save the data
        $mt = new cart; 
        $mt->textstwo = $req->brand;
        $mt->texts = $req->details; 
        $mt->textsthree = $req->price;
        $mt->image = $req->image;
        $mt->quantity = $req->quantity;
        $mt->save();
        $message = "Your registration has been submitted successfully. Thank you!";

        // Redirect with a success message
        return redirect('/cart');
    }




public function cart(){
    $data = cart::all();
    return view('cart', ['data' => $data]);
}

public function delcart($id){
    $mt = cart::where('id', $id)->first();
    $mt->delete();
    return redirect('/cart');
}

public function buynow(){
    $data = cart::all();
    return view('buynow', ['data' => $data]);
}


















public function orders(Request $reqq)
{



    // Save the data
    $mt = new orders; 
    $mt->name = $reqq->name;
    $mt->address = $reqq->address; 
    $mt->email = $reqq->email;
    $mt->phone = $reqq->phone;
    $mt->save();
    $message = "Your registration has been submitted successfully. Thank you!";

    // Redirect with a success message
    return redirect('/seeorders');
}





public function seeorders(){
    $data = cart::all();
    $info = orders::all();
    return view('orders', ['data' => $data,'info' => $info]);
}



public function adminmove(){
   return view('adminlog');
}




public function adminmovesave(Request $reqq)
{



    // Save the data
    $user = hello::where('email', $reqq->email)->first();

    // Check if user exists and password matches
    if ($user && $user->password === $reqq->password) {
        // Credentials match, return the dashboard view
        return view('dashboard');
    } else {
        // Credentials do not match, redirect back with an error message
        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    }



    // Redirect with a success message
    
}



public function logout(){
    
    return view('adminlog');
}

    




}
