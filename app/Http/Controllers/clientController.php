<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class clientController extends Controller
{
        /****************unprotected pages route*****************************/
    
        public function home(Request $request){
            return view('client_panel.pages.home' );
        }
    
        public function store(Request $request){
            $product = Product::orderBy('id', "desc")->paginate(15);
            $category = Product::select('category')->distinct('category')->get();
            return view('client_panel.pages.store' , compact('product' , 'category'));
        }
    
        public function product(Request $request , $slug){

            $product = Product::where('slug' , "$slug")->first();
            $relatedproduct = Product::Where('category',"$product->category")->get();
            return view('client_panel.pages.product' , compact('product' , 'relatedproduct'));
        }
        
        public function categoryfilter(Request $request, $slug)
        {
            $product = Product::where('category', "$slug")->paginate(15);
            $category = Product::select('category')->distinct('category')->get();
            return view('client_panel.pages.categoryfilter', compact('product' , 'category'));
        }
    
        public function enquire(Request $request){

            return $request;
            return view('client_panel.pages.store' , compact('product' , 'category'));
        }

        public function about(Request $request){

            return view('client_panel.pages.about');
        }

        public function contact(Request $request){

            return view('client_panel.pages.contact');
        }

        public function services(Request $request){

            return view('client_panel.pages.services');
        }
        
        public function get_in_touch(Request $request){

            return $request;
            return view('client_panel.pages.contact');
        }
        
        public function developer(Request $request){

            return redirect('//github.com/ti7112');
        }
        
        // public function categoryfilter(Request $request , $slug){
        //     $category = Category::all();
        //     $cat = Category::where('slug' , "$slug")->first();
        //     $product = Product::where('category' , $cat->id)->orderBy('created_at' , "desc")->paginate(8);
        //     return view('client_panel.pages.categoryfilter' , compact('product' , 'category' , 'cat'));
        // }
        
        // public function product(Request $request , $slug){
        //     $category = Category::all();
        //     $product = Product::where('slug' , "$slug")->first();
        //     $productsuggestion = Product::where('category' , $product->category)->paginate(4);
        //     return view('client_panel.pages.product' , compact('product' , 'category' , 'productsuggestion' ));
        // }
    
}
