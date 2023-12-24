<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Builder\ContactBuilder;


class ContactController extends Controller
{
    public function index()
    {
       // Fetch all contacts from the database
       $contacts = Contact::all();
       return view('patterns.builder.index', compact('contacts'));
    }
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('patterns.builder.view', compact('contact'));
    }
    public function create()
    {
        return view('patterns.builder.create');
    }
    public function store(Request $request)
    {
        $contact = (new ContactBuilder())
            ->setName($request->input('name'))
            ->setEmail($request->input('email'))
            ->setAge($request->input('age'))
            ->setNumber($request->input('number'))
            ->build();

        $contact->save();

        return redirect()->route('builder.index')->with('success', 'Contact created successfully!');
    }
        public function edit($id)
    {
        $contact = Contact::find($id);
        return view('patterns.builder.edit', compact('contact'));
    }
        public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'number' => $request->input('number'),
        ]);

        return redirect()->route('builder.index')->with('success', 'Contact updated successfully!');
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('builder.index')->with('success', 'Contact deleted successfully!');
    }
}
