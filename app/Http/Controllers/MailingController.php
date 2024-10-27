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
        //$mails=Mails::all();

          $mails = Mails::leftJoin('mailing', 'mails.id', '=', 'mailing.mails_id')
          ->select('mails.*', 'mailing.fecha_de_envio') ->get();
          
        //   ->where(function ($query) {
        //     $query->where('mailing.fecha_de_envio', '>=', today())   // Fechas mayores a hoy
        //           ->orWhereNull('mailing.fecha_de_envio');           // O fechas que son NULL
        // }) 
        //   ->get();

         
      


        return view('adminMailing',
                    [ 'mails' => $mails ]
                );
    }

public function enviarMails(Request $request)
{
    $selectedIds = $request->input('selected_ids');

    if ($selectedIds) {
        foreach ($selectedIds as $id) {
            $mailData = Mails::find($id); // Obtener el registro del correo por ID
            //$mailData = Mails::where('id', $id)->where('habilitado', true);

            if ($mailData) {
                $data = [
                    'email' => $mailData->email,
                    'ciudad' => $mailData->ciudad,
                    // Añade aquí otros datos que quieras enviar al correo
                ];

                // Enviar el correo
                Mail::to($mailData->email)->send(new nikMailable($data));
                // Llamar al método store en MailinkController
                $mailinkController = new MailingController();
                $mailinkController->store($mailData->id); // Llama al método y pasa el ID

                
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
    public function store($mails_id)
    {
        $mailink = new Mailing;
        $mailink->mails_id = $mails_id; 
        $mailink->fecha_de_envio = now(); 
        $mailink->save(); 
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
