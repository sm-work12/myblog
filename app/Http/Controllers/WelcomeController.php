<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class WelcomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index() {
        $blog=DB::table('tbl_blog')
                ->where('publication_status',1)
                ->get();
        $data=DB::table('tbl_category')
                ->where('publication_status',1)
                ->get();
        $home_content = view('pages.home')->with('blog_data',$blog);
        $category = view('pages.category')->with('category_data',$data);
        return view('master')
                        ->with('content', $home_content)
                        ->with('category', $category);
    }
    public function portfolio(){
        $portfolio_content=  view('pages.portfolio');
        return view('master')
        ->with('content',$portfolio_content);
    }
    
    public function services() {
        $services=  view('pages.services');
        return view('master')
        ->with('content',$services);
    }
    public function contact_us() {
        $contact=  view('pages.contact');
        return view('master')
        ->with('content',$contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request) {
        //
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
