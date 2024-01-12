<?php

use App\Http\Controllers\clientController;
use App\Models\Feature;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [clientController::class, "home"])->name('home');
Route::get('/store', [clientController::class, "store"])->name('store');
Route::get('/about', [clientController::class, "about"])->name('about');
Route::get('/services', [clientController::class, "services"])->name('services');
Route::get('/contact', [clientController::class, "contact"])->name('contact');
Route::get('/product/{slug}', [clientController::class, "product"])->name('product');
Route::get('/category/{slug}', [clientController::class, "categoryfilter"])->name('categoryfilter');
Route::get('/thanks/{slug}', [clientController::class, "thanks"])->name('thanks');
Route::get('/developer', [clientController::class, "developer"])->name('developer');


Route::post('/get-in-touch', [clientController::class, "get_in_touch"])->name('get_in_touch');
Route::post('/enquire', [clientController::class, "enquire"])->name('enquire');


Route::get('/update', function () {

    // $data = array(
    //     // array("title"=>"EV Scooty Arjun 1.0 PRO" , "code"=>"0138" , "discount"=>"55%" , "price"=>"169936" , "img"=>"arjun.png"),
    //     // array("title"=>"EV Scooty Arjun 2.0" , "code"=>"0139" , "discount"=>"55%" , "price"=>"126114" , "img"=>"arjun.png"),
    //     // array("title"=>"EV Scooty Arjun 2.0 PRO" , "code"=>"0140" , "discount"=>"55%" , "price"=>"183694" , "img"=>"arjun.png"),
    //     // array("title"=>"EV Scooty Arjun 3.0" , "code"=>"0141" , "discount"=>"55%" , "price"=>"125860" , "img"=>"arjun.png"),
    //     array("title"=>"EV Scooty Arjun 3.0 PRO" , "code"=>"0142" , "discount"=>"55%" , "price"=>"198216" , "img"=>"arjun.png"),
    //     array("title"=>"EV Scooty Arjun 4.0" , "code"=>"0143" , "discount"=>"55%" , "price"=>"140000" , "img"=>"arjun.png"),
    //     array("title"=>"EV Scooty Arjun 4.0 PRO" , "code"=>"0144" , "discount"=>"55%" , "price"=>"239745" , "img"=>"arjun.png"),
    //     array("title"=>"EV Scooty Bharat 1.0 PRO" , "code"=>"0145" , "discount"=>"55%" , "price"=>"180127" , "img"=>"bharat.png"),
    //     array("title"=>"EV Scooty Bharat 2.0" , "code"=>"0146" , "discount"=>"55%" , "price"=>"136306" , "img"=>"bharat.png"),
    //     array("title"=>"EV Scooty Bharat 2.0 PRO" , "code"=>"0147" , "discount"=>"55%" , "price"=>"193885" , "img"=>"bharat.png"),
    //     array("title"=>"EV Scooty Bharat 3.0" , "code"=>"0148" , "discount"=>"55%" , "price"=>"136051" , "img"=>"bharat.png"),
    //     array("title"=>"EV Scooty Bharat 3.0 PRO" , "code"=>"0149" , "discount"=>"55%" , "price"=>"208407" , "img"=>"bharat.png"),
    //     array("title"=>"EV Scooty Nickel 1.0 PRO" , "code"=>"0150" , "discount"=>"55%" , "price"=>"177579" , "img"=>"nickle.png"),
    //     array("title"=>"EV Scooty Nickel 2.0" , "code"=>"0151" , "discount"=>"55%" , "price"=>"189554" , "img"=>"nickle.png"),
    //     array("title"=>"EV Scooty Nickel 2.0 PRO" , "code"=>"0152" , "discount"=>"55%" , "price"=>"191337" , "img"=>"nickle.png"),
    //     array("title"=>"EV Scooty Nickel 3.0" , "code"=>"0153" , "discount"=>"55%" , "price"=>"133503" , "img"=>"nickle.png"),
    //     array("title"=>"EV Scooty Nickel 3.0 PRO" , "code"=>"0154" , "discount"=>"55%" , "price"=>"205860" , "img"=>"nickle.png"),
    //     array("title"=>"EV Scooty Nickel 4.0" , "code"=>"0155" , "discount"=>"55%" , "price"=>"147643" , "img"=>"nickle.png"),
    //     array("title"=>"EV Scooty Nickel 4.0 PRO" , "code"=>"0156" , "discount"=>"55%" , "price"=>"247388" , "img"=>"nickle.png"),
    //     array("title"=>"EV Scooty Vector 1.0 PRO" , "code"=>"0157" , "discount"=>"55%" , "price"=>"169936" , "img"=>"vector.png"),
    //     array("title"=>"EV Scooty Vector 2.0" , "code"=>"0158" , "discount"=>"55%" , "price"=>"126114" , "img"=>"vector.png"),
    //     array("title"=>"EV Scooty Vector 2.0 PRO" , "code"=>"0159" , "discount"=>"55%" , "price"=>"183694" , "img"=>"vector.png"),
    //     array("title"=>"EV Scooty Vector 3.0" , "code"=>"0160" , "discount"=>"55%" , "price"=>"125860" , "img"=>"vector.png"),
    //     array("title"=>"EV Scooty Vector 3.0 PRO" , "code"=>"0161" , "discount"=>"55%" , "price"=>"198216" , "img"=>"vector.png"),
    //     array("title"=>"EV Scooty Vector 4.0" , "code"=>"0162" , "discount"=>"55%" , "price"=>"140000" , "img"=>"vector.png"),
    //     array("title"=>"EV Scooty Vector 4.0 PRO" , "code"=>"0163" , "discount"=>"55%" , "price"=>"239745" , "img"=>"vector.png"),
    //     array("title"=>"EV Scooty Gamma 1.0 PRO" , "code"=>"0164" , "discount"=>"55%" , "price"=>"166114" , "img"=>"gamma-pro.png"),
    //     array("title"=>"EV Scooty Gamma 2.0" , "code"=>"0165" , "discount"=>"55%" , "price"=>"122293" , "img"=>"gamma-pro.png"),
    //     array("title"=>"EV Scooty Gamma 2.0 PRO" , "code"=>"0166" , "discount"=>"55%" , "price"=>"179872" , "img"=>"gamma-pro.png"),
    //     array("title"=>"EV Scooty Gamma 3.0" , "code"=>"0167" , "discount"=>"55%" , "price"=>"122038" , "img"=>"gamma-pro.png"),
    //     array("title"=>"EV Scooty Gamma 3.0 PRO" , "code"=>"0168" , "discount"=>"55%" , "price"=>"194395" , "img"=>"gamma-pro.png"),
    //     array("title"=>"EV Loader Volt Load 1.0 PRO" , "code"=>"0169" , "discount"=>"53%" , "price"=>"180127" , "img"=>"voltload.png"),
    //     array("title"=>"EV Loader Volt Load 2.0" , "code"=>"0170" , "discount"=>"53%" , "price"=>"136306" , "img"=>"voltload.png"),
    //     array("title"=>"EV Loader Volt Load 2.0 PRO" , "code"=>"0171" , "discount"=>"53%" , "price"=>"193885" , "img"=>"voltload.png"),
    //     array("title"=>"EV Loader Volt Load 3.0" , "code"=>"0172" , "discount"=>"53%" , "price"=>"136051" , "img"=>"voltload.png"),
    //     array("title"=>"EV Loader Volt Load 3.0 PRO" , "code"=>"0173" , "discount"=>"54%" , "price"=>"208407" , "img"=>"voltload.png"),
    //     array("title"=>"EV Loader Volt Load 4.0" , "code"=>"0174" , "discount"=>"53%" , "price"=>"150191" , "img"=>"voltload.png"),
    //     array("title"=>"EV Loader Volt Load 4.0 PRO" , "code"=>"0175" , "discount"=>"54%" , "price"=>"249936" , "img"=>"voltload.png"),
    //     array("title"=>"EV Loader Mini Volt 1.0 PRO" , "code"=>"0176" , "discount"=>"54%" , "price"=>"147084" , "img"=>"mini-volt.png"),
    //     array("title"=>"EV Loader Mini Volt 2.0" , "code"=>"0177" , "discount"=>"54%" , "price"=>"102856" , "img"=>"mini-volt.png"),
    //     array("title"=>"EV Loader Mini Volt 2.0 PRO" , "code"=>"0178" , "discount"=>"54%" , "price"=>"160968" , "img"=>"mini-volt.png"),
    //     array("title"=>"EV Loader Mini Volt 3.0" , "code"=>"0179" , "discount"=>"54%" , "price"=>"102599" , "img"=>"mini-volt.png"),
    //     array("title"=>"EV Loader Mini Volt 3.0 PRO" , "code"=>"0180" , "discount"=>"54%" , "price"=>"175626" , "img"=>"mini-volt.png"),
    //     array("title"=>"EV Loader Mini Volt 4.0" , "code"=>"0181" , "discount"=>"54%" , "price"=>"116870" , "img"=>"mini-volt.png"),
    //     array("title"=>"EV Loader Mini Volt 4.0 PRO" , "code"=>"0182" , "discount"=>"54%" , "price"=>"217539" , "img"=>"mini-volt.png"),
    //     array("title"=>"EV Scooty Sahara 1.0 PRO" , "code"=>"0183" , "discount"=>"54%" , "price"=>"167654" , "img"=>"sahara.png"),
    //     array("title"=>"EV Scooty Sahara 2.0" , "code"=>"0184" , "discount"=>"54%" , "price"=>"123426" , "img"=>"sahara.png"),
    //     array("title"=>"EV Scooty Sahara 2.0 PRO" , "code"=>"0185" , "discount"=>"54%" , "price"=>"181270" , "img"=>"sahara.png"),
    //     array("title"=>"EV Scooty Sahara 3.0" , "code"=>"0186" , "discount"=>"54%" , "price"=>"127170" , "img"=>"sahara.png"),
    //     array("title"=>"EV Scooty Sahara 3.0 PRO" , "code"=>"0187" , "discount"=>"54%" , "price"=>"196198" , "img"=>"sahara.png"),
    //     array("title"=>"EV Scooty Sahara 4.0" , "code"=>"0188" , "discount"=>"54%" , "price"=>"137440" , "img"=>"sahara.png"),
    //     array("title"=>"EV Scooty Sahara 4.0 PRO" , "code"=>"0189" , "discount"=>"54%" , "price"=>"238111" , "img"=>"sahara.png"),
    // );

    // foreach ($data as $item) {
    //     $product = new Product();
        
    //     $product->title = $item['title'];
    //     $product->slug = strtolower(str_replace(' ' , '-' , $item['title']));
    //     $product->code = $item['code'];
    //     $product->discount = $item['discount'];
    //     $product->Price = $item['price'];
    //     $product->img = $item['img'];
    //     $product->Brand = "TEJAS";

    //     print_r($product->toArray());
        
    //     // $product->save();
    // }


    // $feature = new Feature();

    // $feature->product_id = $product->id;
    // $feature->battery = "lpf";
    // $feature->motor = "250 watt";
    // $feature->capacity = "60v / 30ah";
    // $feature->range = "100 km";
    // $feature->charging_time = "3 hour";
    // $feature->fast_charging_time = "30 min";
    // $feature->battery_swapping = "yes";
    // $feature->front_suspension = "Telescopic";
    // $feature->rear_suspension = "Coil Spring";
    // $feature->brakes_type = "Disc";
    // $feature->loading_capacity = "170 kg";
    // $feature->tyre = "Tubeless";
    // $feature->alloy_type = "Aluminium";
    // $feature->tyre_size = "90-90-10";
    // $feature->head_lights = "Led";
    // $feature->back_light = "Stylish";
    // $feature->mobile_charging = "yes";
    // $feature->anti_theft_alarm = "yes";
    // $feature->keyless_entry = "yes";
    // $feature->ground_clearance = "241 mm";
    // $feature->digital_speedometre = "yes";
    // $feature->central_locking = "yes";
    // $feature->find_my_scooty = "yes";
    // $feature->secure_parking = "yes";
    // $feature->reverse_gear = "yes";
    // $feature->floor_mat = "yes";
    // $feature->tool_kit = "yes";
    // $feature->dimension = "1905mm x 675mm x 1104mm";
    // $feature->water_and_dust_resistance = "yes";
    // $feature->body_type = "ABS";
    // $feature->light = "LED";
    // $feature->speed_mode = "3 MODE";
    // $feature->gradient = "15";
    // $feature->warrenty = "3 year";  

    // $feature -> save();

    // $product = Product::all();
    return "success";
});
