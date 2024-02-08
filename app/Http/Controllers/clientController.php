<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact_us;
use App\Models\Enquiry;
use App\Models\Product;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /****************unprotected pages route*****************************/

    public function home(Request $request)
    {
        $category = Category::all();
        return view('client_panel.pages.home' , compact('category'));
    }

    public function store(Request $request)
    {
        $category = Category::all();
        $model = ProductModel::orderBy('id', "desc")->paginate(15);
        $product = Product::select('model' , 'img' , 'category'  )->distinct()->orderBy('id', "desc")->get();
        return view('client_panel.pages.store', compact('model' , 'product', 'category'));
    }

    public function product(Request $request, $slug)
    {
        $category = Category::all();
        $model = ProductModel::where('slug' , "$slug")->first();
        if(isset($model)){
            $product = Product::where('model', "$model->id")->first();
        }
        else{
            $product = Product::where('slug' , "$slug")->first();
        }
        $relatedproduct = Product::Where('model', "$product->model")->get();

        return view('client_panel.pages.product', compact('product', 'relatedproduct' , 'category'));
    }

    public function categoryfilter(Request $request, $slug)
    {
        $category = Category::all();
        $cat = Category::where('cat_slug' , "$slug")->first();
        $product = Product::where('category', "$cat->id")->select('model' , 'img' , 'category')->distinct()->get();
        return view('client_panel.pages.categoryfilter', compact('cat' , 'product', 'category'));
    }

    
    public function about_tejas(Request $request)
    {
        $category = Category::all();
        return view('client_panel.pages.about_tejas' , compact('category'));
    }
    public function about_tejas_ev(Request $request)
    {
        $category = Category::all();
        return view('client_panel.pages.about_tejas_ev' , compact('category'));
    }
    public function about_vision(Request $request)
    {
        $category = Category::all();
        return view('client_panel.pages.about_vision' , compact('category'));
    }
    public function about_office(Request $request)
    {
        $category = Category::all();
        return view('client_panel.pages.about_tejas_office' , compact('category'));
    }
    

    public function privacy_policy(Request $request)
    {
        $category = Category::all();
        return view('client_panel.pages.privacyPolicy' , compact('category'));
    }
    
    public function thanks(Request $request, $slug)
    {
        $category = Category::all();
        if ($slug != 'contact') {
            $product = Product::where('slug', "$slug")->first();
            $message = "Thanks for having interest in $product->title .";
            return view('client_panel.pages.thanks', compact('message' , 'category'));
        } else {
            $message = "Thanks for contacting us.";
            return view('client_panel.pages.thanks', compact('message' , 'category'));
        }
    }

    public function contact(Request $request)
    {
        $category = Category::all();
        return view('client_panel.pages.contact' , compact('category'));
    }

    public function services(Request $request)
    {
        $category = Category::all();
        return view('client_panel.pages.services' , compact('category'));
    }

    public function enquire(Request $request)
    {

        $product = Product::where('title', "$request->model")->first();

        $enquiry = new Enquiry();

        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->model = $product->id;
        $enquiry->message = $request->message;

        $enquiry->save();

        return redirect("/thanks/$product->slug");
    }

    public function get_in_touch(Request $request)
    {
        $contact_us = new Contact_us();

        $contact_us->name = $request->name;
        $contact_us->email = $request->email;
        $contact_us->phone = $request->phone;
        $contact_us->subject = $request->subject;
        $contact_us->message = $request->message;

        $contact_us->save();

        return redirect("/thanks/contact");
    }

    public function developer(Request $request)
    {

        return redirect('//github.com/ti7112');
    }

    // public function categoryfilter(Request $request , $slug){
    //     $category = Category::all();
    //     $cat = Category::where('slug' , "$slug")->first();
    //     $product = Product::where('category' , $cat->id)->orderBy('created_at' , "desc")->paginate(8);
    //     return view('client_panel.pages.categoryfilter' , compact('product' , 'category' , 'cat' , 'category'));
    // }

    // public function product(Request $request , $slug){
    //     $category = Category::all();
    //     $product = Product::where('slug' , "$slug")->first();
    //     $productsuggestion = Product::where('category' , $product->category)->paginate(4);
    //     return view('client_panel.pages.product' , compact('product' , 'category' , 'productsuggestion'  , 'category'));
    // }

}
