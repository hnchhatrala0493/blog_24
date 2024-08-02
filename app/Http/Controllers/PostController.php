<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $post = Post::orderBy( 'created_at', 'DESC' )->get();
        return view( 'post.index', compact( 'post' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view( 'post.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $post = Post::create( $request->all() );
        if ( $post ) {
            return redirect()->route( 'post.index' );
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $post = Post::find( $id );
        return view( 'post.show', compact( 'post' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $post = Post::find( $id );
        return view( 'post.edit', compact( 'post' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $update = Post::where( 'id', $id )->update( [ 'title'=>$request->title, 'description'=>$request->description ] );
        if ( $update ) {
            return redirect()->route( 'post.index' );
        }
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $delete = Post::where( 'id', $id )->delete();
        if ( $delete ) {
            return json_encode( [ 'status'=>200, 'result'=>'pass' ] );
        }
    }
}
