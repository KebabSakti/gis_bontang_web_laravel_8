<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomClass\IDGenerator;
use App\CustomClass\FileUploader;

use App\Models\Option;
use App\Models\Area;
use App\Models\Form;
use App\Models\Foto;

class UserFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('formDetail');
        // $this->middleware('optimizeImages')->only('formSubmit');
    }

    public function form()
    {
        $areas = Area::all();
        $options = Option::where('active', 1)->get();

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
                'foto_ktp',
                'foto_kk',
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
            foreach($request->foto_ktp as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'foto_ktp',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_kk as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'foto_kk',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_pondasi as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'pondasi',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_kolom_balok as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kolom_balok',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_konstruksi_atap as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'konstruksi_atap',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_jendela as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'jendela',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_ventilasi as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'ventilasi',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_kamar_mandi as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kamar_mandi',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_jarak_air as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'jarak_air',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_sumber_air as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'sumber_air',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_sumber_listrik as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'sumber_listrik',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_material_atap as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'material_atap',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_kondisi_atap as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kondisi_atap',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_material_dinding as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'material_dinding',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_kondisi_dinding as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kondisi_dinding',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_material_lantai as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'material_lantai',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }

            foreach($request->foto_kondisi_lantai as $item) {
                Foto::create([
                    'foto_id' => IDGenerator::generate(),
                    'form_id' => $request->form_id,
                    'tag' => 'kondisi_lantai',
                    'foto' => FileUploader::uploadFoto($item),
                ]);
            }
        });

        return redirect()->back()->with('message', 'Data berhasil tersimpan');
    }

    public function formDetail($form_id, $tag = null)
    {
        $data = Form::where('form_id', $form_id)->first();
        $tags = [
            'foto_ktp' => 'KTP',
            'foto_kk' => 'KK',
            'pondasi' => 'Pondasi',
            'kolom_balok' => 'Kondisi Kolom Balok',
            'konstruksi_atap' => 'Kondisi Konstruksi Atap',
            'jendela' => 'Jendela/Lubang Cahaya',
            'ventilasi' => 'Ventilasi',
            'kamar_mandi' => 'Kepemilikan Kamar Mandi dan Jamban',
            'jarak_air' => 'Jarak Sumber Air Minum ke TPA Tinja',
            'sumber_air' => 'Sumber Air Minum',
            'sumber_listrik' => 'Sumber Listrik',
            'material_atap' => 'Material Atap Terluas',
            'kondisi_atap' => 'Kondisi Atap',
            'material_dinding' => 'Material Dinding Terluas',
            'kondisi_dinding' => 'Kondisi Dinding',
            'material_lantai' => 'Material Lantai Terluas',
            'kondisi_lantai' => 'Kondisi Lantai',
        ];

        if(empty($data)) {
            abort('404');
        }

        return view('public.form_detail', [
            'data' => $data,
            'tags' => $tags,
        ]);
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
