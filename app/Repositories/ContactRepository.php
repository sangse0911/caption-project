<?php

namespace App\Repositories;

use App\Interfaces\ContactInterface;
use App\Models\Contact;
use Auth;

class ContactRepository implements ContactInterface
{

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function get()
    {
        return Contact::all()->first()->account;
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll()
    {
        return Contact::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Contact::findOrFail($id);
    }

    /**
     * [create description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data)
    {
        return Contact::create([
            'admin_id' => Auth::user()->id,
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'account' => $data['account'],
        ]);
    }

    /**
     * [modified description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function modified($data)
    {
        $contact = Contact::find($data['id']);

        $contact->phone = $data['phone'];
        $contact->email = $data['email'];
        $contact->address = $data['address'];
        $contact->account = $data['account'];

        return $contact->saveOrFail();
    }
}
