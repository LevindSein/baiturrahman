<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\Gsetting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $Gsetting = Gsetting::first();
        if($Gsetting == NULL){
            $home_text = [
                'home_text_title_1' => "Something here",
                'home_text_desc_1' => "Something here",
                'home_text_title_2' => "Something here",
                'home_text_desc_2' => "Something here",
            ];
            $home_text = json_encode($home_text);
            $data = [
                'home_text' => $home_text
            ];
            Gsetting::create($data);

            $this->gsetting();
        }
        else{
            $this->gsetting();
        }
    }

    function gsetting(){
        $Gsetting = Gsetting::first();
        $Gsetting['home_text'] = json_decode($Gsetting->home_text);
        View::share('Gsetting', $Gsetting);
    }
}
