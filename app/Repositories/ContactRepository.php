<?php

namespace App\Repositories;

use App\Interfaces\ContactInterface;
use App\Models\Contact;
use Auth;

class ContactRepository implements ContactInterface
{

    public function getAll()
    {
        return Contact::all();
    }

    public function find($id)
    {
        return Contact::findOrFail($id);
    }
    public function create($data)
    {
        return Contact::create([
            'admin_id' => Auth::user()->id,
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
        ]);
    }

    public function modified($data)
    {
        $contact = Contact::find($data['id']);

        $contact->phone = $data['phone'];
        $contact->email = $data['email'];
        $contact->address = $data['address'];

        return $contact->saveOrFail();
    }
}
