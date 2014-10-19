<?php
use Faker\Factory as Faker;

class p3Controller extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | p3 Controller
    |--------------------------------------------------------------------------
    |
    | Receives an input from user and generates users and paragraphs from faker
    |
    | Input: Either number of paragraphs or number of users required
    | Output: Render a view: showPara
    |
    |	Route::post('/p3', 'p3Controller@showPara');
    |
    */

    public function showPara()
    {
        $faker = Faker::create();
        $query = Input::all();      //get input from form

        //start: perform a paragraph generator
        if (isset($query['numpara'])) {
            $paras = $faker->paragraphs($query['numpara']);

            if (Request::ajax()) {
                // provide the ajax content
                return View::make('p3.showPara', compact('paras'));
            } // provide the full content
            else return View::make('p3.list', compact('paras')); //if not ajax
        }

        // start: perform a user generator
        elseif (isset($query['numuser'])){
            for ($i=0; $i<$query['numuser']; $i++){
                $users[$i]['username'] = $faker->name;
                if (array_key_exists('birthdate', $query)){
                   $users[$i]['birthdate'] = $faker->date;
                }
                if (array_key_exists('profile',$query)){
                    $users[$i]['profile'] = $faker->sentence();
                }
            }
            if (Request::ajax()) {
                // provide the ajax content
                return View::make('p3.showPara', compact('users'));
            } // provide the full content
            else return View::make('p3.list', compact('users'));  //if not ajax
        }
    }
}
