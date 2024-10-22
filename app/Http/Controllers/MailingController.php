<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use App\Models\Mails;
use Illuminate\Support\Facades\Mail;
use App\Mail\nikMailable;

use Illuminate\Http\Request;

class MailingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails=Mails::all();
        return view('adminMailing',
                    [ 'mails' => $mails ]
                );
    }

    // public function enviarMail($id)
    // {
    // $mail = Mails::find($id);

    // Mail::send('emails.plantilla', ['mail' => $mail], function($message) use ($mail) {
    //     $message->to($mail->email)
    //             ->subject('Asunto del Correo');
    // });

    // return redirect('adminMailing')
    //     ->with(['mensaje' => 'Enviado Exitosamente']);
    // }


public function enviarMails(Request $request)
{
    $selectedIds = $request->input('selected_ids');

    if ($selectedIds) {
        foreach ($selectedIds as $id) {
            $mailData = Mails::find($id); // Obtener el registro del correo por ID

            if ($mailData) {
                $data = [
                    'email' => $mailData->email,
                    'ciudad' => $mailData->ciudad,
                    // Añade aquí otros datos que quieras enviar al correo
                ];

                // Enviar el correo
                Mail::to($mailData->email)->send(new nikMailable($data));
            }
        }

        return redirect()->back()->with('mensaje', 'Correos enviados con éxito')->with('color', 'success');
    }

    return redirect()->back()->with('mensaje', 'No se seleccionó ningún correo')->with('color', 'warning');
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mailing $mailing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mailing $mailing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mailing $mailing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mailing $mailing)
    {
        //
    }
}
