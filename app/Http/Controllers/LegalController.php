<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class LegalController extends Controller
{
    public function contracts()
    {
        $contracts = [
            ["contract_slug" => "team_contract", "contract_title" => "Team Contract"],
            ["contract_slug" => "client_contract", "contract_title" => "Client Contract"]
        ];
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.legals.contracts',compact('contracts'))->with(['page_title' => 'Contracts']);
        }
        return redirect()->route('logout');
    }

    public function contract(Request $request)
    {
        $contracts = [
            ["id" => 1, "team_member_name" => "Garrett Winters", "contract_name" => "Accountant"],
            ["id" => 2, "team_member_name" => "Ashton Cox", "contract_name" => "Junior Technical Author"],
            ["id" => 3, "team_member_name" => "Cedric Kelly", "contract_name" => "Senior Javascript Developer"],
            ["id" => 4, "team_member_name" => "Airi Satou", "contract_name" => "Accountant"],
            ["id" => 5, "team_member_name" => "Brielle Williamson", "contract_name" => "Integration Specialist"],
            ["id" => 6, "team_member_name" => "Herrod Chandler", "contract_name" => "Sales Assistant"],
            ["id" => 7, "team_member_name" => "Rhona Davidson", "contract_name" => "Integration Specialist"],
            ["id" => 8, "team_member_name" => "Colleen Hurst", "contract_name" => "Javascript Developer"],
            ["id" => 9, "team_member_name" => "Sonya Frost", "contract_name" => "Software Engineer"],
            ["id" => 10, "team_member_name" => "Jena Gaines", "contract_name" => "Office Manager"],
            ["id" => 11, "team_member_name" => "Quinn Flynn", "contract_name" => "Support Lead"],
            ["id" => 12, "team_member_name" => "Charde Marshall", "contract_name" => "Regional Director"],
            ["id" => 13, "team_member_name" => "Haley Kennedy", "contract_name" => "Senior Marketing Designer"],
            ["id" => 14, "team_member_name" => "Tatyana Fitzpatrick", "contract_name" => "Regional Director"],
            ["id" => 15, "team_member_name" => "Michael Silva", "contract_name" => "Marketing Designer"],
            ["id" => 16, "team_member_name" => "Paul Byrd", "contract_name" => "Chief Financial Officer (CFO)"],
            ["id" => 17, "team_member_name" => "Gloria Little", "contract_name" => "Systems Administrator"],
            ["id" => 18, "team_member_name" => "Bradley Greer", "contract_name" => "Software Engineer"],
            ["id" => 19, "team_member_name" => "Dai Rios", "contract_name" => "Personnel Lead"],
            ["id" => 20, "team_member_name" => "Jenette Caldwell", "contract_name" => "Development Lead"],
            ["id" => 21, "team_member_name" => "Yuri Berry", "contract_name" => "Chief Marketing Officer (CMO)"],
            ["id" => 22, "team_member_name" => "Caesar Vance", "contract_name" => "Pre-Sales Support"],
            ["id" => 23, "team_member_name" => "Doris Wilder", "contract_name" => "Sales Assistant"],
            ["id" => 24, "team_member_name" => "Angelica Ramos", "contract_name" => "Chief Executive Officer (CEO)"],
            ["id" => 25, "team_member_name" => "Gavin Joyce", "contract_name" => "Developer"],
            ["id" => 26, "team_member_name" => "Fiona Green", "contract_name" => "Chief Operating Officer (COO)"],
            ["id" => 27, "team_member_name" => "Michelle House", "contract_name" => "Integration Specialist"],
            ["id" => 28, "team_member_name" => "Martena Mccray", "contract_name" => "Post-Sales support"],
            ["id" => 29, "team_member_name" => "Unity Butler", "contract_name" => "Marketing Designer"],
            ["id" => 30, "team_member_name" => "Hope Fuentes", "contract_name" => "Secretary"],
            ["id" => 31, "team_member_name" => "Timothy Mooney", "contract_name" => "Office Manager"],
            ["id" => 32, "team_member_name" => "Bruno Nash", "contract_name" => "Software Engineer"],
            ["id" => 33, "team_member_name" => "Sakura Yamamoto", "contract_name" => "Support Engineer"],
            ["id" => 34, "team_member_name" => "Finn Camacho", "contract_name" => "Support Engineer"],
            ["id" => 35, "team_member_name" => "Jennifer Acosta", "contract_name" => "Junior Javascript Developer"],
            ["id" => 36, "team_member_name" => "Cara Stevens", "contract_name" => "Sales Assistant"],
            ["id" => 37, "team_member_name" => "Hermione Butler", "contract_name" => "Regional Director"],
            ["id" => 38, "team_member_name" => "Jonas Alexander", "contract_name" => "Developer"],
        ];
        
        // return $request->slug;
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.legals.contract', compact('contracts'))->with(['page_title' => Str::title(str_replace('_', ' ', $request->slug))]);
        }
        return redirect()->route('logout');
        // return Redirect::back()->withErrors(['msg' => 'The error Message']);
    }
}
