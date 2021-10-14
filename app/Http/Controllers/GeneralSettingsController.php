<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

use App\Models\Gsetting;

class GeneralSettingsController extends Controller
{
    public function index() {
        return view('general_settings.index');
    }

    public function title(Request $request){
        $request->validate([
            'titleInput' => 'max:50'
        ]);

        $data = $request->titleInput;
        $dataset = Gsetting::first();
        $dataset->title = $data;
        $dataset->update();
        return response()->json(['message' => "Data Berhasil Disimpan."]);
    }

    public function footer(Request $request){
        $request->validate([
            'footerInput' => 'max:255'
        ]);

        $data = $request->footerInput;
        $dataset = Gsetting::first();
        $dataset->footer = $data;
        $dataset->update();
        return response()->json(['message' => "Data Berhasil Disimpan."]);
    }

    public function favicon(Request $request){
        $request->validate([
            'faviconInput' => 'image|mimes:jpeg,png,jpg'
        ]);

        $dataset = Gsetting::first();
        $data = $dataset->favicon;
        if($request->hasFile('faviconInput')){
            $image = $request->file('faviconInput');

            $image_name = "favicon";
            $extension = strtolower($image->getClientOriginalExtension());
            $image_full_name = "gsetting/" . $image_name . '.' . $extension;

            $location = storage_path('app/public/' . $image_full_name);
            Image::make($image)->save($location);
            $data = $image_full_name;
        }
        else{
            return redirect('pengaturan_umum')->with('error', 'Gambar tidak terdeteksi.');
        }

        $dataset->favicon = "storage/" . $data;
        $dataset->update();
        return redirect('pengaturan_umum')->with('success', 'Gambar berhasil disimpan');
    }

    public function sosial(Request $request){
        $request->validate([
            'waInput' => 'max:255',
            'emailInput' => 'max:255',
            'mapsInput' => 'max:255'
        ]);

        $dataset = Gsetting::first();
        $dataset->phone = $request->waInput;
        $dataset->email = $request->emailInput;
        $dataset->address = $request->mapsInput;
        $dataset->update();
        return response()->json(['message' => "Data berhasil disimpan."]);
    }

    public function login(Request $request){
        $request->validate([
            'loginTitleInput' => 'max:255',
            'loginDescInput' => 'max:255'
        ]);

        $dataset = Gsetting::first();
        $data = json_decode($dataset->home_text);
        $data->home_text_title_1 = $request->loginTitleInput ;
        $data->home_text_desc_1 = $request->loginDescInput ;
        $dataset->home_text = json_encode($data);
        $dataset->update();
        return response()->json(['message' => "Data Berhasil Disimpan."]);
    }

    public function registrasi(Request $request){
        $request->validate([
            'registrasiTitleInput' => 'max:255',
            'registrasiDescInput' => 'max:255'
        ]);

        $dataset = Gsetting::first();
        $data = json_decode($dataset->home_text);
        $data->home_text_title_2 = $request->registrasiTitleInput ;
        $data->home_text_desc_2 = $request->registrasiDescInput ;
        $dataset->home_text = json_encode($data);
        $dataset->update();
        return response()->json(['message' => "Data Berhasil Disimpan."]);
    }

    public function gambar_login(Request $request){
        $request->validate([
            'gambarLoginInput' => 'image|mimes:png'
        ]);

        $dataset = Gsetting::first();
        $data = $dataset->home_img_1;
        if($request->hasFile('gambarLoginInput')){
            $image = $request->file('gambarLoginInput');

            $image_name = "log";
            $extension = strtolower($image->getClientOriginalExtension());
            $image_full_name = "gsetting/" . $image_name . '.' . $extension;

            $location =  storage_path('app/public/' . $image_full_name);
            Image::make($image)->save($location);
            $data = $image_full_name;
        }
        else{
            return redirect('pengaturan_umum')->with('error', 'Gambar tidak terdeteksi.');
        }

        $dataset->home_img_1 = "storage/" . $data;
        $dataset->update();
        return redirect('pengaturan_umum')->with('success', 'Gambar berhasil disimpan');
    }

    public function gambar_registrasi(Request $request){
        $request->validate([
            'gambarRegistrasiInput' => 'image|mimes:png'
        ]);

        $dataset = Gsetting::first();
        $data = $dataset->home_img_2;
        if($request->hasFile('gambarRegistrasiInput')){
            $image = $request->file('gambarRegistrasiInput');

            $image_name = "register";
            $extension = strtolower($image->getClientOriginalExtension());
            $image_full_name = "gsetting/" . $image_name . '.' . $extension;

            $location =  storage_path('app/public/' . $image_full_name);
            Image::make($image)->save($location);
            $data = $image_full_name;
        }
        else{
            return redirect('pengaturan_umum')->with('error', 'Gambar tidak terdeteksi.');
        }

        $dataset->home_img_2 = "storage/" . $data;
        $dataset->update();
        return redirect('pengaturan_umum')->with('success', 'Gambar berhasil disimpan');
    }

    public function logo_dashboard(Request $request){
        $request->validate([
            'logoDashboardInput' => 'image|mimes:png,gif,jpg,jpeg'
        ]);

        $dataset = Gsetting::first();
        $data = $dataset->logo_img;
        if($request->hasFile('logoDashboardInput')){
            $image = $request->file('logoDashboardInput');

            $image_name = "logo_icon";
            $extension = strtolower($image->getClientOriginalExtension());
            $image_full_name = "gsetting/" . $image_name . '.' . $extension;

            $location =  storage_path('app/public/' . $image_full_name);
            Image::make($image)->resize(60,40)->save($location);
            $data = $image_full_name;
        }
        else{
            return redirect('pengaturan_umum')->with('error', 'Gambar tidak terdeteksi.');
        }

        $dataset->logo_img = "storage/" . $data;
        $dataset->update();
        return redirect('pengaturan_umum')->with('success', 'Gambar berhasil disimpan');
    }

    public function logo_text_dashboard(Request $request){
        $request->validate([
            'logoTextDashboardInput' => 'image|mimes:png,gif,jpg,jpeg'
        ]);

        $dataset = Gsetting::first();
        $data = $dataset->logo_text;
        if($request->hasFile('logoTextDashboardInput')){
            $image = $request->file('logoTextDashboardInput');

            $image_name = "logo_text";
            $extension = strtolower($image->getClientOriginalExtension());
            $image_full_name = "gsetting/" . $image_name . '.' . $extension;

            $location =  storage_path('app/public/' . $image_full_name);
            Image::make($image)->resize(90,20)->save($location);
            $data = $image_full_name;
        }
        else{
            return redirect('pengaturan_umum')->with('error', 'Gambar tidak terdeteksi.');
        }

        $dataset->logo_text = "storage/" . $data;
        $dataset->update();
        return redirect('pengaturan_umum')->with('success', 'Gambar berhasil disimpan');
    }
}
