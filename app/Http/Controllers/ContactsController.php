<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{

  public function apphome(){
    return view('welcome');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // Lists all contacts saved

    public function index()
    {
      $contacts = Contact::all()->sortByDesc('id');

      return view('index')->with('contacts',$contacts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcontact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
          'name'=> 'required',
          'email'=> 'required',
          'info'=> 'required',
          'phone'=> 'required',
          'gender'=> 'required'

        ]);

      // Create contact same as using tinker
      $contact = new Contact;
      $contact->name = $request->input('name');
      $contact->email = $request->input('email');
      $contact->info = $request->input('info');
      $contact->phone = $request->input('phone');
      $contact->gender = $request->input('gender');

      $contact->save();

      return redirect('/contacts')->with('success', 'Contact has been created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // This is the detail page - shows info of a particular contact
    public function show($id)
    {
        $contact = Contact::find($id);

        return view('contactsdetail')->with('contact',$contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
