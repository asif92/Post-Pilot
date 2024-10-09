<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function sales_dashboard()
    {
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.sales.dashboard')->with(['page_title' => 'Dashboard']);
        }
        return redirect()->route('logout');
    }
    public function pipeline()
    {
        $sales_pipeline = [ 
            [ "id" => random_int(100000, 999999), "stage_slug" => "new_lead", "stage_title" => "New Lead", "stage_deals" => [
                    [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                    [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                ]
            ],
            [ "id" => random_int(100000, 999999), "stage_slug" => "contacted", "stage_title" => "Contacted", "stage_deals" => [
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                ]
            ],
            [ "id" => random_int(100000, 999999), "stage_slug" => "qualified", "stage_title" => "Qualified", "stage_deals" => [
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                ]
            ],
            [ "id" => random_int(100000, 999999), "stage_slug" => "proposal_sent", "stage_title" => "Proposal Sent", "stage_deals" => [
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                ]
            ],
            [ "id" => random_int(100000, 999999), "stage_slug" => "negotiation", "stage_title" => "Negotiation", "stage_deals" => [
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                ]
            ],
            [ "id" => random_int(100000, 999999), "stage_slug" => "closed_won", "stage_title" => "Closed-Won", "stage_deals" => [
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                ]
            ],
            [ "id" => random_int(100000, 999999), "stage_slug" => "closed_lost", "stage_title" => "Closed-Lost", "stage_deals" => [
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                [ "id" => random_int(100000, 999999), "deal_name" => "John Doe's Deal", "value" => "1,000,000.00", "close_date" => "01-02-2024", "contact_Person" => "John Doe", "deal_status" => "At Risk" ],
                ]
            ]
        ];

        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.sales.pipeline', compact('sales_pipeline'))->with(['page_title' => 'Pipeline']);
        }
        return redirect()->route('logout');
    }
    public function campaigns()
    {
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.sales.campaigns')->with(['page_title' => 'Campaigns']);
        }
        return redirect()->route('logout');
    }
    public function forms()
    {
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.sales.forms')->with(['page_title' => 'Forms']);
        }
        return redirect()->route('logout');
    }
}
