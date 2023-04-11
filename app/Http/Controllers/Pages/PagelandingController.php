<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PagelandingController extends Controller
{
    public function pagelanding(){
        $basic_by_month=Plan::where('billing_method','Monthly')->where('name','Basic')->first();
        $advanced_by_month=Plan::where('billing_method','Monthly')->where('name','Advanced')->first();
        $regular_by_month=Plan::where('billing_method','Monthly')->where('name','Regular')->first();


         $basic_by_year=Plan::where('billing_method','Yearly')->where('name','Basic')->first();
         $advanced_by_year=Plan::where('billing_method','Yearly')->where('name','Advanced')->first();
         $regular_by_year=Plan::where('billing_method','Yearly')->where('name','Regular')->first();


        //    $user=auth()->user();





        return view('pages.landing',compact('basic_by_month','advanced_by_month','regular_by_month','basic_by_year','advanced_by_year','regular_by_year'));
    }

    public function pricingPage(){

        $basic_by_month=Plan::where('billing_method','Monthly')->where('name','Basic')->first();
        $advanced_by_month=Plan::where('billing_method','Monthly')->where('name','Advanced')->first();
        $regular_by_month=Plan::where('billing_method','Monthly')->where('name','Regular')->first();


         $basic_by_year=Plan::where('billing_method','Yearly')->where('name','Basic')->first();
         $advanced_by_year=Plan::where('billing_method','Yearly')->where('name','Advanced')->first();
         $regular_by_year=Plan::where('billing_method','Yearly')->where('name','Regular')->first();

        return view('pages.inner-pages.pricing',compact('basic_by_month','advanced_by_month','regular_by_month','basic_by_year','advanced_by_year','regular_by_year'));
    }

    public function aboutPage(){
        return view('pages.inner-pages.about');
    }

    public function faqPage(){
        return view('pages.inner-pages.faq');
    }

    public function contactPage(){
        return view('pages.inner-pages.contact');
    }
}
