<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'message' => 'nullable|string',
        ]);

        Contact::create($request->only('full_name', 'phone', 'email', 'message'));

        return back()->with('success', 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất.');
    }

    public function purchase(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'message' => 'nullable|string',
            'product_id' => 'nullable|exists:products,id',
        ]);

        Contact::create($request->only('full_name', 'phone', 'email', 'message', 'product_id'));

        return back()->with('success', 'Yêu cầu của bạn đã được gửi! Chúng tôi sẽ liên hệ sớm nhất.');
    }
}