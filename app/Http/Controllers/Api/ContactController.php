<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return ContactResource::collection(Contact::all());
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:150',
            'budget' => 'required|string|max:50',
            'message' => 'nullable|string',
        ]);

        // Jika validasi gagal, kirimkan respon error
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Simpan data ke database
        $contact = Contact::create($request->only('name', 'email', 'subject', 'budget', 'message'));

        // Kembalikan respons sukses dengan data yang baru disimpan
        return response()->json([
            'status' => 'success',
            'message' => 'Contact message saved successfully.',
            'data' => new ContactResource($contact),
        ], 201);
    }
}
