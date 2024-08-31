<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('index',compact('contacts'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'detail','content']);
        $contact['tel'] = $request->tel1 .  $request->tel2 . $request->tel3;
        if ($contact['gender'] == 1) {
        $contact['gender'] = '男性';
        } elseif ($contact['gender'] == 2) {
        $contact['gender'] = '女性';
        } elseif ($contact['gender'] == 3) {
        $contact['gender'] = 'その他';
        }
        return view('confirm', compact('contact'));
    }

    public function thanks(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'detail','content']);
        Contact::create($contact);
        return view('thanks');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function andmin()
    {
        return view('admin');
    }
}