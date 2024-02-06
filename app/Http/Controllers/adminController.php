<?php

namespace App\Http\Controllers;

use App\Models\Contact_us;
use App\Models\Enquiry;
use App\Models\EnquiryRemarks;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class adminController extends Controller
{
    public function homepage(Request $request)
    {
        $sessionUser = User::where('email', $request->session()->get('user'))->where('remember_token', $request->session()->get('token'))->first();
        $contact_us = Contact_us::orderBy('created_at', 'DESC')->limit(5)->get();
        $enquiry = Enquiry::all();

        // line chart logics 

        $year = Date('Y');
        $enquiryReport = [];

        for ($i = 1; $i < 13; $i++) {
            $report = Enquiry::orderBy('created_at', 'DESC')->whereMonth('created_at', "$i")->whereYear('created_at', "$year")->get();
            array_push($enquiryReport, count($report));
        }
        $enquiryReportData = implode(',', $enquiryReport);

        $enquiryResolved = [];

        for ($i = 1; $i < 13; $i++) {
            $resolvedReport = Enquiry::where('status', "resolved")->orderBy('created_at', 'DESC')->whereMonth('created_at', "$i")->whereYear('created_at', "$year")->get();
            array_push($enquiryResolved, count($resolvedReport));
        }
        $enquiryResolvedData = implode(',' ,  $enquiryResolved);

        // last month report

        if (Date('m') > 1) {
            $last_month = Date('m') - 1;
            $last_year = Date('Y');
        } else {
            $last_month = 12;
            $last_year = Date('Y') - 1;
        }
        $last_month_report = Enquiry::orderBy('created_at', 'DESC')->whereMonth('created_at', "$last_month")->whereYear('created_at', "$last_year")->get();
        $last_month_resolved_report = floor((count(Enquiry::where('status', "resolved")->orderBy('created_at', 'DESC')->whereMonth('created_at', "$last_month")->whereYear('created_at', "$last_year")->get()) * 100) / count($last_month_report));
        $total_enquiry_report = floor((count(Enquiry::where('status', "resolved")->get()) * 100) /  count(Enquiry::all()));

        return view('admin_panel.pages.home', compact('sessionUser', 'contact_us', 'enquiry', 'enquiryReportData', 'enquiryResolvedData', 'last_month_resolved_report', 'total_enquiry_report'));
    }

    public function enquiryReport(Request $request)
    {
        $enquiry = Enquiry::orderBy('created_at' , "DESC")->get();
        $sessionUser = User::where('email', $request->session()->get('user'))->where('remember_token', $request->session()->get('token'))->first();
        return view('admin_panel.pages.enquiry' , compact('sessionUser' , 'enquiry'));
    }

    public function get_enquiry_by_id(Request $request)
    {
        $enquiry = Enquiry::where('id' , "$request->id")->first();
        $remarks = EnquiryRemarks::where('enquiry_id' , "$request->id")->get();
        $enquiry->get_remarks = $remarks;
        return $enquiry;
    }
    
    public function update_enquiry(Request $request)
    {
        $enquiry = Enquiry::where('id' , "$request->id")->first();

        $enquiry-> name = $request->username;
        $enquiry-> email = $request->email;
        $enquiry-> phone = $request->phone;
        $enquiry-> status = $request->status;

        $enquiry->save();

        $remark = new EnquiryRemarks();

        if(strlen($request-> remark) > 0){
            $remark->enquiry_id = $enquiry->id;
            $remark->remark = $request->remark;

            $remark -> save();
        }
        return redirect()->back()->with('success' , "Enquiry updated successfully.");
    } 
    
    public function login(Request $request)
    {
        return view('admin_panel.pages.login');
    }

    public function login_auth(Request $request)
    {

        $user = User::where('email', "$request->email")->first();
        if (isset($user)) {
            if ($user->password == md5("$request->password")) {

                $token = Random::generate(16);
                $user->remember_token = $token;
                $user->save();

                $request->session()->put('user', "$user->email");
                $request->session()->put('token', "$user->remember_token");
                return redirect('/admin/dashboard');
            } else {
                return redirect()->back()->with('fail', "You have enter incorrect password");
            }
        } else {
            return redirect()->back()->with('fail', "No user found");
        }
    }

    public function logout()
    {
        session()->pull('user');
        session()->pull('token');
        return redirect('/admin');
    }
}
