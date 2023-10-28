<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getAccount(Account $account)
    {
        return response()->json($account->limit(20)->get(['email_address', 'student_no', 'firstname', 'middlename', 'lastname']));
    }
}
