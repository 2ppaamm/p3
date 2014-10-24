<?php
use Faker\Factory as Faker;

class p3Controller extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | p3 Controller
    |--------------------------------------------------------------------------
    |
    | Receives from routes and output to views
    |
    */

    // Responds to get requests from /p3
    public function getIndex()
    {
        return View::make('p3.index');
    }

    // Responds to get requests from /p3/list
    public function getList()
    {
        $MAXREQ = 100;              // sets the max number of req (for restful requests
        $MINREQ = 0;                // sets the min number of req (for restful requests

        $faker = Faker::create();
        $query = Input::all();      //get input from form
        $genresults=null;

        //start: perform a paragraph generator
        if (isset($query['numpara']) && $query['numpara'] > $MINREQ && $query['numpara'] < $MAXREQ) {
            $genresults = $faker->paragraphs($query['numpara']);
        }

        // start: perform a user generator
        elseif (isset($query['numuser']) && $query['numuser'] > $MINREQ && $query['numuser'] < $MAXREQ) {
            for ($i = 0; $i < $query['numuser']; $i++) {
                $genresults[$i]['username'] = $faker->name;           //create names
                if (array_key_exists('birthdate', $query)) {
                    $genresults[$i]['birthdate'] = $faker->date;       //create birthdates
                }
                if (array_key_exists('profile', $query)) {
                    $genresults[$i]['profile'] = $faker->sentence();  //create profile
                }
            }
        } else {
            $genresults =
                "<img src='/img/404.png' class='col-md-12' /><br />".         //generate an error output page if form is invalid
                "<h4>D'oh... wake me when you've figured your input...</h4>";

        }
        if (Request::ajax()) {
            // provide the ajax content
            return View::make('p3.showPara')
                ->with(compact('genresults'))
                ->with(compact('query')
                );
//            , query'));
        }

        // provide the full content
        else {
            return View::make('p3.list')
                -> with (compact('genresults'))
                ->with(compact('query')
            );
        }  //if not ajax
    }
}