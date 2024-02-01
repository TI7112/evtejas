<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\clientController;
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
Route::get('/privacy-policy', [clientController::class, "privacy_policy"])->name('privacy_policy');
Route::get('/product/{slug}', [clientController::class, "product"])->name('product');
Route::get('/category/{slug}', [clientController::class, "categoryfilter"])->name('categoryfilter');
Route::get('/thanks/{slug}', [clientController::class, "thanks"])->name('thanks');
Route::get('/developer', [clientController::class, "developer"])->name('developer');


Route::post('/get-in-touch', [clientController::class, "get_in_touch"])->name('get_in_touch');
Route::post('/enquire', [clientController::class, "enquire"])->name('enquire');



// Admin Route

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [adminController::class, "login"])->name('admin_login');
    Route::post('/auth/login', [adminController::class, "login_auth"])->name('admin_login_auth');

    Route::middleware('adminlogin')->group(function () {
        Route::get('/dashboard', [adminController::class, "homepage"])->name('admin_homepage');
        Route::get('/enquiry-report', [adminController::class, "enquiryReport"])->name('admin_enquiry');
        Route::get('/logout', [adminController::class, "logout"])->name('admin_logout');


        Route::post('/get-enquiry', [adminController::class, "get_enquiry_by_id"])->name('get_enquiry_by_id');
        Route::post('/update-enquiry', [adminController::class, "update_enquiry"])->name('update_enquiry');
    });
});


// Route::get('/ayush', function () {
//     $response = Http::get('https://evtejas.com/api/products');
//     $data = $response->json();

//     // $data = array(
//     //     'Arjun' => "3",
//     //     'Bharat' => "3",
//     //     'Nickel' => "3",
//     //     'Vector' => "3",
//     //     'Sahara' => "3",
//     //     'Gamma' => "3",
//     //     'Volt Load' => "3",
//     //     'Mini Volt' => "3",
//     //     'Eco Quick' => "4",
//     //     'Vector Plus' => "4",
//     //     'Eco Nova' => "4",
//     //     'Sun Blaze' => "4",
//     //     'Volt Load Plus' => "4",
//     // );

//     foreach ($data as $value) {
//         # code...
//         $feature = new Feature();

//         $feature->id = $value['id'];
//         $feature->product_id = $value['product_id'];
//         $feature->battery = $value['battery'];
//         $feature->motor = $value['motor'];
//         $feature->speed = $value['speed'];
//         $feature->capacity = $value['capacity'];
//         $feature->range = $value['range'];
//         $feature->charging_time = $value['charging_time'];
//         $feature->fast_charging_time = $value['fast_charging_time'];
//         $feature->front_suspension = $value['front_suspension'];
//         $feature->rear_suspension = $value['rear_suspension'];
//         $feature->brakes_type = $value['brakes_type'];
//         $feature->loading_capacity = $value['loading_capacity'];
//         $feature->tyre = $value['tyre'];
//         $feature->alloy_type = $value['alloy_type'];
//         $feature->tyre_size = $value['tyre_size'];
//         $feature->head_lights = $value['head_lights'];
//         $feature->back_light = $value['back_light'];
//         $feature->ground_clearance = $value['ground_clearance'];
//         $feature->dimension = $value['dimension'];
//         $feature->body_type = $value['body_type'];
//         $feature->light = $value['light'];
//         $feature->speed_mode = $value['speed_mode'];
//         $feature->gradient = $value['gradient'];
//         $feature->warrenty = $value['warrenty'];
//         $feature->additional_features = $value['additional_features'];


//         // print_r($feature->toArray());
//         // $feature->save();
//     }
//     return $data;
// });


// Route::get('/update', function () {

//     $data = array(
//         //     // array("title"=>"EV Scooty Arjun 1.0 PRO" , "code"=>"0138" , "discount"=>"55%" , "price"=>"169936" , "img"=>"arjun.png"),
//         //     // array("title"=>"EV Scooty Arjun 2.0" , "code"=>"0139" , "discount"=>"55%" , "price"=>"126114" , "img"=>"arjun.png"),
//         //     // array("title"=>"EV Scooty Arjun 2.0 PRO" , "code"=>"0140" , "discount"=>"55%" , "price"=>"183694" , "img"=>"arjun.png"),
//         //     // array("title"=>"EV Scooty Arjun 3.0" , "code"=>"0141" , "discount"=>"55%" , "price"=>"125860" , "img"=>"arjun.png"),
//         //     array("title"=>"EV Scooty Arjun 3.0 PRO" , "code"=>"0142" , "discount"=>"55%" , "price"=>"198216" , "img"=>"arjun.png"),
//         //     array("title"=>"EV Scooty Arjun 4.0" , "code"=>"0143" , "discount"=>"55%" , "price"=>"140222" , "img"=>"arjun.png"),
//         //     array("title"=>"EV Scooty Arjun 4.0 PRO" , "code"=>"0144" , "discount"=>"55%" , "price"=>"239745" , "img"=>"arjun.png"),
//         //     array("title"=>"EV Scooty Bharat 1.0 PRO" , "code"=>"0145" , "discount"=>"55%" , "price"=>"180127" , "img"=>"bharat.png"),
//         //     array("title"=>"EV Scooty Bharat 2.0" , "code"=>"0146" , "discount"=>"55%" , "price"=>"136306" , "img"=>"bharat.png"),
//         //     array("title"=>"EV Scooty Bharat 2.0 PRO" , "code"=>"0147" , "discount"=>"55%" , "price"=>"193885" , "img"=>"bharat.png"),
//         //     array("title"=>"EV Scooty Bharat 3.0" , "code"=>"0148" , "discount"=>"55%" , "price"=>"136051" , "img"=>"bharat.png"),
//         //     array("title"=>"EV Scooty Bharat 3.0 PRO" , "code"=>"0149" , "discount"=>"55%" , "price"=>"208407" , "img"=>"bharat.png"),
//         //     array("title"=>"EV Scooty Nickel 1.0 PRO" , "code"=>"0150" , "discount"=>"55%" , "price"=>"177579" , "img"=>"nickle.png"),
//         //     array("title"=>"EV Scooty Nickel 2.0" , "code"=>"0151" , "discount"=>"55%" , "price"=>"189554" , "img"=>"nickle.png"),
//         //     array("title"=>"EV Scooty Nickel 2.0 PRO" , "code"=>"0152" , "discount"=>"55%" , "price"=>"191337" , "img"=>"nickle.png"),
//         //     array("title"=>"EV Scooty Nickel 3.0" , "code"=>"0153" , "discount"=>"55%" , "price"=>"133503" , "img"=>"nickle.png"),
//         //     array("title"=>"EV Scooty Nickel 3.0 PRO" , "code"=>"0154" , "discount"=>"55%" , "price"=>"205860" , "img"=>"nickle.png"),
//         //     array("title"=>"EV Scooty Nickel 4.0" , "code"=>"0155" , "discount"=>"55%" , "price"=>"147643" , "img"=>"nickle.png"),
//         //     array("title"=>"EV Scooty Nickel 4.0 PRO" , "code"=>"0156" , "discount"=>"55%" , "price"=>"247388" , "img"=>"nickle.png"),
//         //     array("title"=>"EV Scooty Vector 1.0 PRO" , "code"=>"0157" , "discount"=>"55%" , "price"=>"169936" , "img"=>"vector.png"),
//         //     array("title"=>"EV Scooty Vector 2.0" , "code"=>"0158" , "discount"=>"55%" , "price"=>"126114" , "img"=>"vector.png"),
//         //     array("title"=>"EV Scooty Vector 2.0 PRO" , "code"=>"0159" , "discount"=>"55%" , "price"=>"183694" , "img"=>"vector.png"),
//         //     array("title"=>"EV Scooty Vector 3.0" , "code"=>"0160" , "discount"=>"55%" , "price"=>"125860" , "img"=>"vector.png"),
//         //     array("title"=>"EV Scooty Vector 3.0 PRO" , "code"=>"0161" , "discount"=>"55%" , "price"=>"198216" , "img"=>"vector.png"),
//         //     array("title"=>"EV Scooty Vector 4.0" , "code"=>"0162" , "discount"=>"55%" , "price"=>"140222" , "img"=>"vector.png"),
//         //     array("title"=>"EV Scooty Vector 4.0 PRO" , "code"=>"0163" , "discount"=>"55%" , "price"=>"239745" , "img"=>"vector.png"),
//         //     array("title"=>"EV Scooty Gamma 1.0 PRO" , "code"=>"0164" , "discount"=>"55%" , "price"=>"166114" , "img"=>"gamma-pro.png"),
//         //     array("title"=>"EV Scooty Gamma 2.0" , "code"=>"0165" , "discount"=>"55%" , "price"=>"122293" , "img"=>"gamma-pro.png"),
//         //     array("title"=>"EV Scooty Gamma 2.0 PRO" , "code"=>"0166" , "discount"=>"55%" , "price"=>"179872" , "img"=>"gamma-pro.png"),
//         //     array("title"=>"EV Scooty Gamma 3.0" , "code"=>"0167" , "discount"=>"55%" , "price"=>"122038" , "img"=>"gamma-pro.png"),
//         //     array("title"=>"EV Scooty Gamma 3.0 PRO" , "code"=>"0168" , "discount"=>"55%" , "price"=>"194395" , "img"=>"gamma-pro.png"),
//         //     array("title"=>"EV Loader Volt Load 1.0 PRO" , "code"=>"0169" , "discount"=>"53%" , "price"=>"180127" , "img"=>"voltload.png"),
//         //     array("title"=>"EV Loader Volt Load 2.0" , "code"=>"0170" , "discount"=>"53%" , "price"=>"136306" , "img"=>"voltload.png"),
//         //     array("title"=>"EV Loader Volt Load 2.0 PRO" , "code"=>"0171" , "discount"=>"53%" , "price"=>"193885" , "img"=>"voltload.png"),
//         //     array("title"=>"EV Loader Volt Load 3.0" , "code"=>"0172" , "discount"=>"53%" , "price"=>"136051" , "img"=>"voltload.png"),
//         //     array("title"=>"EV Loader Volt Load 3.0 PRO" , "code"=>"0173" , "discount"=>"54%" , "price"=>"208407" , "img"=>"voltload.png"),
//         //     array("title"=>"EV Loader Volt Load 4.0" , "code"=>"0174" , "discount"=>"53%" , "price"=>"150191" , "img"=>"voltload.png"),
//         //     array("title"=>"EV Loader Volt Load 4.0 PRO" , "code"=>"0175" , "discount"=>"54%" , "price"=>"249936" , "img"=>"voltload.png"),
//         //     array("title"=>"EV Loader Mini Volt 1.0 PRO" , "code"=>"0176" , "discount"=>"54%" , "price"=>"147084" , "img"=>"mini-volt.png"),
//         //     array("title"=>"EV Loader Mini Volt 2.0" , "code"=>"0177" , "discount"=>"54%" , "price"=>"102856" , "img"=>"mini-volt.png"),
//         //     array("title"=>"EV Loader Mini Volt 2.0 PRO" , "code"=>"0178" , "discount"=>"54%" , "price"=>"160968" , "img"=>"mini-volt.png"),
//         //     array("title"=>"EV Loader Mini Volt 3.0" , "code"=>"0179" , "discount"=>"54%" , "price"=>"102599" , "img"=>"mini-volt.png"),
//         //     array("title"=>"EV Loader Mini Volt 3.0 PRO" , "code"=>"0180" , "discount"=>"54%" , "price"=>"175626" , "img"=>"mini-volt.png"),
//         //     array("title"=>"EV Loader Mini Volt 4.0" , "code"=>"0181" , "discount"=>"54%" , "price"=>"116870" , "img"=>"mini-volt.png"),
//         //     array("title"=>"EV Loader Mini Volt 4.0 PRO" , "code"=>"0182" , "discount"=>"54%" , "price"=>"217539" , "img"=>"mini-volt.png"),
//         //     array("title"=>"EV Scooty Sahara 1.0 PRO" , "code"=>"0183" , "discount"=>"54%" , "price"=>"167654" , "img"=>"sahara.png"),
//         //     array("title"=>"EV Scooty Sahara 2.0" , "code"=>"0184" , "discount"=>"54%" , "price"=>"123426" , "img"=>"sahara.png"),
//         //     array("title"=>"EV Scooty Sahara 2.0 PRO" , "code"=>"0185" , "discount"=>"54%" , "price"=>"181270" , "img"=>"sahara.png"),
//         //     array("title"=>"EV Scooty Sahara 3.0" , "code"=>"0186" , "discount"=>"54%" , "price"=>"127170" , "img"=>"sahara.png"),
//         //     array("title"=>"EV Scooty Sahara 3.0 PRO" , "code"=>"0187" , "discount"=>"54%" , "price"=>"196198" , "img"=>"sahara.png"),
//         //     array("title"=>"EV Scooty Sahara 4.0" , "code"=>"0188" , "discount"=>"54%" , "price"=>"137440" , "img"=>"sahara.png"),
//         //     array("title"=>"EV Scooty Sahara 4.0 PRO" , "code"=>"0189" , "discount"=>"54%" , "price"=>"238111" , "img"=>"sahara.png"),
//         //     array("title"=>"EV Scooty Eco Quick 1.0 PRO" , "code"=>"0220" , "discount"=>"54%" , "price"=>"170225" , "img"=>"eco-quick.png"),
//         //     array("title"=>"EV Scooty Eco Quick 2.0" , "code"=>"0221" , "discount"=>"54%" , "price"=>"125997" , "img"=>"eco-quick.png"),
//         //     array("title"=>"EV Scooty Eco Quick 2.0 PRO" , "code"=>"0222" , "discount"=>"54%" , "price"=>"184112" , "img"=>"eco-quick.png"),
//         //     array("title"=>"EV Scooty Eco Quick 3.0" , "code"=>"0223" , "discount"=>"54%" , "price"=>"125740" , "img"=>"eco-quick.png"),
//         //     array("title"=>"EV Scooty Eco Quick 3.0 PRO" , "code"=>"0224" , "discount"=>"54%" , "price"=>"198769" , "img"=>"eco-quick.png"),
//         //     array("title"=>"EV Scooty Eco Quick 4.0" , "code"=>"0225" , "discount"=>"54%" , "price"=>"140011" , "img"=>"eco-quick.png"),
//         //     array("title"=>"EV Scooty Eco Quick 4.0 PRO" , "code"=>"0226" , "discount"=>"54%" , "price"=>"240683" , "img"=>"eco-quick.png"),
//         //     array("title"=>"EV Scooty Vector+ 1.0 PRO" , "code"=>"0227" , "discount"=>"54%" , "price"=>"185654" , "img"=>"eco-vector+.png"),
//         //     array("title"=>"EV Scooty Vector+ 2.0" , "code"=>"0228" , "discount"=>"54%" , "price"=>"141426" , "img"=>"eco-vector+.png"),
//         //     array("title"=>"EV Scooty Vector+ 2.0 PRO" , "code"=>"0229" , "discount"=>"54%" , "price"=>"199541" , "img"=>"eco-vector+.png"),
//         //     array("title"=>"EV Scooty Vector+ 3.0" , "code"=>"0230" , "discount"=>"54%" , "price"=>"141169" , "img"=>"eco-vector+.png"),
//         //     array("title"=>"EV Scooty Vector+ 3.0 PRO" , "code"=>"0231" , "discount"=>"54%" , "price"=>"214196" , "img"=>"eco-vector+.png"),
//         //     array("title"=>"EV Scooty Vector+ 4.0" , "code"=>"0232" , "discount"=>"54%" , "price"=>"155440" , "img"=>"eco-vector+.png"),
//         //     array("title"=>"EV Scooty Vector+ 4.0 PRO" , "code"=>"0233" , "discount"=>"54%" , "price"=>"256110" , "img"=>"eco-vector+.png"),
//         //     array("title"=>"EV Scooty Eco Nova 1.0 PRO" , "code"=>"0234" , "discount"=>"54%" , "price"=>"186154" , "img"=>"eco-nova.png"),
//         //     array("title"=>"EV Scooty Eco Nova 2.0" , "code"=>"0235" , "discount"=>"54%" , "price"=>"141926" , "img"=>"eco-nova.png"),
//         //     array("title"=>"EV Scooty Eco Nova 2.0 PRO" , "code"=>"0236" , "discount"=>"54%" , "price"=>"200041" , "img"=>"eco-nova.png"),
//         //     array("title"=>"EV Scooty Eco Nova 3.0" , "code"=>"0237" , "discount"=>"54%" , "price"=>"141669" , "img"=>"eco-nova.png"),
//         //     array("title"=>"EV Scooty Eco Nova 3.0 PRO" , "code"=>"0238" , "discount"=>"54%" , "price"=>"214696" , "img"=>"eco-nova.png"),
//         //     array("title"=>"EV Scooty Eco Nova 4.0" , "code"=>"0239" , "discount"=>"54%" , "price"=>"155940" , "img"=>"eco-nova.png"),
//         //     array("title"=>"EV Scooty Eco Nova 4.0 PRO" , "code"=>"0240" , "discount"=>"54%" , "price"=>"256610" , "img"=>"eco-nova.png"),
//         //     array("title" => "EV Scooty Sun Blaze 1.0 PRO", "code" => "0241", "discount" => "54%", "price" => "238111", "img" => "eco-sun-blaze.png"),
//         //     array("title" => "EV Scooty Sun Blaze 2.0", "code" => "0242", "discount" => "54%", "price" => "238111", "img" => "eco-sun-blaze.png"),
//         //     array("title" => "EV Scooty Sun Blaze 2.0 PRO", "code" => "0243", "discount" => "54%", "price" => "238111", "img" => "eco-sun-blaze.png"),
//         //     array("title" => "EV Scooty Sun Blaze 3.0", "code" => "0244", "discount" => "54%", "price" => "238111", "img" => "eco-sun-blaze.png"),
//         //     array("title" => "EV Scooty Sun Blaze 3.0 PRO", "code" => "0245", "discount" => "54%", "price" => "238111", "img" => "eco-sun-blaze.png"),
//         //     array("title" => "EV Scooty Sun Blaze 4.0", "code" => "0246", "discount" => "54%", "price" => "238111", "img" => "eco-sun-blaze.png"),
//         //     array("title" => "EV Scooty Sun Blaze 4.0 PRO", "code" => "0247", "discount" => "54%", "price" => "238111", "img" => "eco-sun-blaze.png"),
//         //     array("title" => "EV Scooty Volt Load+ 1.0 PRO", "code" => "0248", "discount" => "54%", "price" => "238111", "img" => "eco-volt-load+.png"),
//         //     array("title" => "EV Scooty Volt Load+ 2.0", "code" => "0249", "discount" => "54%", "price" => "238111", "img" => "eco-volt-load+.png"),
//         //     array("title" => "EV Scooty Volt Load+ 2.0 PRO", "code" => "0250", "discount" => "54%", "price" => "238111", "img" => "eco-volt-load+.png"),
//         //     array("title" => "EV Scooty Volt Load+ 3.0", "code" => "0251", "discount" => "54%", "price" => "238111", "img" => "eco-volt-load+.png"),
//         //     array("title" => "EV Scooty Volt Load+ 3.0 PRO", "code" => "0252", "discount" => "54%", "price" => "238111", "img" => "eco-volt-load+.png"),
//         //     array("title" => "EV Scooty Volt Load+ 4.0", "code" => "0253", "discount" => "54%", "price" => "238111", "img" => "eco-volt-load+.png"),
//         //     array("title" => "EV Scooty Volt Load+ 4.0 PRO", "code" => "0254", "discount" => "54%", "price" => "238111", "img" => "eco-volt-load+.png"),
//     );

//     // echo "<pre>";

//     // return $data;

//     // foreach ($data as $item) {
//     //     $product = new Product();

//     //     $product->title = $item['title'];
//     //     $product->slug = strtolower(str_replace(' ', '-', $item['title']));
//     //     $product->code = $item['code'];
//     //     $product->discount = $item['discount'];
//     //     $product->Price = $item['price'];
//     //     $product->img = $item['img'];
//     //     $product->Brand = "TEJAS";

//     //     print_r($product->toArray());

//     // $product->save();
//     // }


//     // $feature = new Feature();

//     // $feature->product_id = $product->id;
//     // $feature->battery = "lpf";
//     // $feature->motor = "1500 watt";
//     // $feature->capacity = "60v / 30ah";
//     // $feature->speed = "60km/hr";
//     // $feature->range = "80 km";
//     // $feature->charging_time = "3 hour";
//     // $feature->fast_charging_time = "30 min";
//     // $feature->battery_swapping = "yes";
//     // $feature->front_suspension = "Telescopic";
//     // $feature->rear_suspension = "Coil Spring";
//     // $feature->brakes_type = "Disc";
//     // $feature->loading_capacity = "170 kg";
//     // $feature->tyre = "Tubeless";
//     // $feature->alloy_type = "Aluminium";
//     // $feature->tyre_size = "90-90-10";
//     // $feature->head_lights = "Led";
//     // $feature->back_light = "Stylish";
//     // $feature->mobile_charging = "yes";
//     // $feature->anti_theft_alarm = "yes";
//     // $feature->keyless_entry = "yes";
//     // $feature->ground_clearance = "241 mm";
//     // $feature->digital_speedometre = "yes";
//     // $feature->central_locking = "yes";
//     // $feature->find_my_scooty = "yes";
//     // $feature->secure_parking = "yes";
//     // $feature->reverse_gear = "yes";
//     // $feature->floor_mat = "yes";
//     // $feature->tool_kit = "yes";
//     // $feature->dimension = "1905mm x 675mm x 1104mm";
//     // $feature->water_and_dust_resistance = "yes";
//     // $feature->body_type = "ABS";
//     // $feature->light = "LED";
//     // $feature->speed_mode = "3 MODE";
//     // $feature->gradient = "15";
//     // $feature->warrenty = "3 year";  

//     // $feature -> save();

//     // $product = Product::all();
//     return "success";
// });
