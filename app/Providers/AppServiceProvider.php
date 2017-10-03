<?php

namespace App\Providers;

use View;
use Auth;
use DB;
use App\StatasPost;
use App\CategoryList;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('shadhin', 'shadhin');


        View::composer('*', function ($view) {
            /*$categoryObj=CategoryList::where('user_id',Auth::user()->id)->get();*/

            try {
                $id = Auth::user()->id;
                $categoryObj = DB::table('category_lists')

                    /*->select('category_lists.*')*/
                    /*->where('id',$id)
                        ->first()*/

                    /*->orderBy('id', 'desc')*/
                    ->distinct()
                    ->where('user_id', $id)
                    ->get(['Category_name']);
                $view->with('CategoryListById', $categoryObj);
            } catch (\Exception $e) {

                return redirect('/home');
            }

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
