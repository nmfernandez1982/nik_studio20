<?php

namespace App\Http\Controllers;

use App\Models\Mails;
use Illuminate\Http\Request;

class MailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails=Mails::all();
        return view('adminMails',
                    [ 'mails' => $mails ]
                );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregarMail');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mail=new Mails;
        $mail->email=$request->email;
        $mail->ciudad=$request->ciudad;
        $mail->Persona=$request->usuario;
        $mail->fecha_de_envio=now();
        $mail->save();
        //retornar redirección con mensaje ok
        return redirect('adminMails')
                    ->with(['mensaje'=>'E-Mail: '.$mail->email.' agregado correctamente.' ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mails $mails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mail = Mails::find($id);

        return view('modificarMail',
        [
            'mail'  =>$mail            
        ]
);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Mail = Mails::find($request->id);
        $Mail->email=$request->email;
        $Mail->ciudad=$request->ciudad;
        $Mail->persona=$request->usuario;
         //guardamos
         $Mail->save();
         //retornar redirección con mensaje ok
         return redirect('adminMails')
             ->with(['mensaje'=>'E-mail: '.$request->email.' modificado correctamente.' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $mails)
    {
        Mails::destroy( $mails->id );
        return redirect('adminMails')
            ->with(['mensaje'=>'Email: '.$mails->email.' eliminado correctamente.' ]);
    }
}
