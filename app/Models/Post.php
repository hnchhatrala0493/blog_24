<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [ 'title', 'description' ];

    function Readmore( $string, $id ) {
        if ( strlen( $string ) > 50 ) {
            $stringCut = substr( $string, 0, 150 );
            $endPoint = strrpos( $stringCut, ' ' );
            $string = $endPoint? substr( $stringCut, 0, $endPoint ) : substr( $stringCut, 0 );
            $string .= "... <a href='".route( 'post.show', [ 'post'=>$id ] )."'>Read More</a>";
        }
        echo $string;
        // die;
    }
}
