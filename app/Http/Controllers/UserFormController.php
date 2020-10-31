<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;

use App\Models\Option;
use App\Models\Area;
use App\Models\Form;
use App\Models\Foto;

class UserFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('optimizeImages')->only('formSubmit');
    }

    public function form()
    {
        $areas = Area::all();
        $options = Option::all();

        return view('public.form', [
            'areas' => $areas,
            'options' => $options,
        ]);
    }

    public function formSubmit(Request $request)
    {
        DB::transaction(function () use($request) {
            //store data
            $form = Form::create($request->except([
                '_token',
                'foto',
                'foto_pondasi',
                'foto_kolom_balok',
                'foto_konstruksi_atap',
                'foto_jendela',
                'foto_ventilasi',
                'foto_kamar_mandi',
                'foto_jarak_air',
                'foto_sumber_air',
                'foto_sumber_listrik',
                'foto_material_atap',
                'foto_kondisi_atap',
                'foto_material_dinding',
                'foto_kondisi_dinding',
                'foto_material_lantai',
                'foto_kondisi_lantai',
            ]));

            //store and upload image
            foreach($request->foto as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'form',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_pondasi as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'form',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_kolom_balok as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'form',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_konstruksi_atap as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'konstruksi_atap',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_jendela as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'jendela',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_ventilasi as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'ventilasi',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_kamar_mandi as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kamar_mandi',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_jarak_air as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'jarak_air',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_sumber_air as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'sumber_air',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_sumber_listrik as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'sumber_listrik',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_material_atap as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'material_atap',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_kondisi_atap as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kondisi_atap',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_material_dinding as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'material_dinding',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_kondisi_dinding as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kondisi_dinding',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_material_lantai as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'material_lantai',
                    'foto' => $this->uploadFoto($item),
                ]);
            }

            foreach($request->foto_kondisi_lantai as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kondisi_lantai',
                    'foto' => $this->uploadFoto($item),
                ]);
            }
        });

        return redirect()->back()->with('message', 'Data berhasil tersimpan');
    }

    private function uploadFoto($file)
    {
        $originalName = $file->getClientOriginalName();
        $fileName = time().'_'.mt_rand(100000, 999999).'_'.$originalName;
        //upload foto to server
        $file->move('foto/', $fileName);

        //return path
        return $_SERVER['HTTP_HOST'].'/foto'.'/'.$fileName;
    }
}
