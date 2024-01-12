<?php

namespace App\Http\Controllers;

use App\Models\Contact_us;
use App\Models\Enquiry;
use App\Models\Product;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /****************unprotected pages route*****************************/

    public function home(Request $request)
    {
        $menu_category = Product::select('category')->distinct('category')->get();
        return view('client_panel.pages.home' , compact('menu_category'));
    }

    public function store(Request $request)
    {
        $menu_category = Product::select('category')->distinct('category')->get();
        $product = Product::orderBy('id', "desc")->paginate(15);
        $category = Product::select('category')->distinct('category')->get();
        return view('client_panel.pages.store', compact('product', 'category' , 'menu_category'));
    }

    public function product(Request $request, $slug)
    {
        $menu_category = Product::select('category')->distinct('category')->get();
        $product = Product::where('slug', "$slug")->first();
        $relatedproduct = Product::Where('category', "$product->category")->get();
        return view('client_panel.pages.product', compact('product', 'relatedproduct' , 'menu_category'));
    }

    public function categoryfilter(Request $request, $slug)
    {
        $menu_category = Product::select('category')->distinct('category')->get();
        $product = Product::where('category', "$slug")->paginate(15);
        $category = Product::select('category')->distinct('category')->get();
        return view('client_panel.pages.categoryfilter', compact('product', 'category' , 'menu_category'));
    }

    
    public function about(Request $request)
    {
        $menu_category = Product::select('category')->distinct('category')->get();
        return view('client_panel.pages.about');
    }

    public function thanks(Request $request, $slug)
    {
        $menu_category = Product::select('category')->distinct('category')->get();
        if ($slug != 'contact') {
            $product = Product::where('slug', "$slug")->first();
            $message = "Thanks for having interest in $product->title .";
            return view('client_panel.pages.thanks', compact('message' , 'menu_category'));
        } else {
            $message = "Thanks for contacting us.";
            return view('client_panel.pages.thanks', compact('message' , 'menu_category'));
        }
    }

    public function contact(Request $request)
    {
        $menu_category = Product::select('category')->distinct('category')->get();
        return view('client_panel.pages.contact' , compact('menu_category'));
    }

    public function services(Request $request)
    {
        $menu_category = Product::select('category')->distinct('category')->get();
        return view('client_panel.pages.services' , compact('menu_category'));
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
    //     return view('client_panel.pages.categoryfilter' , compact('product' , 'category' , 'cat' , 'menu_category'));
    // }

    // public function product(Request $request , $slug){
    //     $category = Category::all();
    //     $product = Product::where('slug' , "$slug")->first();
    //     $productsuggestion = Product::where('category' , $product->category)->paginate(4);
    //     return view('client_panel.pages.product' , compact('product' , 'category' , 'productsuggestion'  , 'menu_category'));
    // }

}
