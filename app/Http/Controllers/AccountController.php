<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\ApiKey;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getAccount(Account $account, ApiKey $apiKey)
    {
        return response()->json($account->orderBy('lastname')->get(['email_address', 'student_no', 'firstname', 'middlename', 'lastname']));
    }

    public function getAccountAPI(Account $account, ApiKey $apiKey)
    {
        $validApiKey = $apiKey->where('key', request()->header('X-API-Key'))->exists();

        if (empty(request()->header('X-API-Key'))) {
            return response()->json(['error' => "Unauthorized. API key is missing."], 403);
        }

        if (!$validApiKey) {
            return response()->json(['error' => "Unauthorized. Wrong API key."], 403);
        }

        $accounts = $account->with('semester', 'section')->orderBy('lastname')->get();

        $getAccounts = $accounts->map(function ($account) {
            return [
                'fullname' => $account->lastname. ', ' . $account->firstname. ' ' .$account->middlename,
                'email_address' => $account->email_address,
                'student_no' => $account->student_no,
                'section_name' => $account->section->name,
                'semester_name' => $account->semester->name
            ];
        });

        return response()->json($getAccounts);
    }

    public function getAccountVotingAPI(Account $account, ApiKey $apiKey)
    {
        $validApiKey = $apiKey->where('key', request()->header('X-API-Key'))->exists();

        if (empty(request()->header('X-API-Key'))) {
            return response()->json(['error' => "Unauthorized. API key is missing."], 403);
        }

        if (!$validApiKey) {
            return response()->json(['error' => "Unauthorized. Wrong API key."], 403);
        }

        $accounts = $account->with('semester', 'section')->orderBy('lastname')->get();

        $getAccounts = $accounts->map(function ($account) {
            return [
                'fullname' => $account->lastname. ', ' . $account->firstname. ' ' .$account->middlename,
                'email_address' => $account->email_address,
                'student_no' => $account->student_no,
            ];
        });

        return response()->json($getAccounts);
    }

    public function getStudentAPI(Account $account, ApiKey $apiKey)
    {
        $validApiKey = $apiKey->where('key', request()->header('X-API-Key'))->exists();

        if (empty(request()->header('X-API-Key'))) {
            return response()->json(['error' => "Unauthorized. API key is missing."], 403);
        }

        if (!$validApiKey) {
            return response()->json(['error' => "Unauthorized. Wrong API key."], 403);
        }

        $accounts = $account->with('semester', 'section')->orderBy('lastname')->get();

        $getAccounts = $accounts->map(function ($account) {
            return [
                'firstname' => $account->firstname,
                'middlename' => $account->middlename,
                'lastname' => $account->lastname,
                'email_address' => $account->email_address,
                'student_no' => $account->student_no,
            ];
        });

        return response()->json($getAccounts);
    }
}
