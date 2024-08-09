<?php

namespace App\Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Http\Requests\StoreBlogRequest;
use App\Modules\Blog\Models\Blog;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function list( Request $request ) {
        try {
            if ( $request->ajax() && $request->isMethod( 'post' ) ) {
                $list = Blog::select( 'id', 'heading', 'name', 'title', 'comments', 'content', 'blog_quote', 'categories', 'date', 'posts', 'post_date', 'tags', 'email', 'website' )
                    ->orderBy( 'id' )
                    ->get();
                return Datatables::of( $list )
                    ->editColumn( 'heading', function ( $list ) {
                        return $list->heading;
                    } )
                    ->editColumn( 'name', function ( $list ) {
                        return $list->name;
                    } )
                    ->editColumn( 'title', function ( $list ) {
                        return $list->title;
                    } )
                    ->editColumn( 'comments', function ( $list ) {
                        return $list->comments;
                    } )
                    ->editColumn( 'content', function ( $list ) {
                        return $list->content;
                    } )
                    ->editColumn( 'blog_quote', function ( $list ) {
                        return $list->blog_quote;
                    } )
                    ->editColumn( 'categories', function ( $list ) {
                        return $list->categories;
                    } )
                    ->editColumn( 'date', function ( $list ) {
                        return $list->date;
                    } )
                    ->editColumn( 'posts', function ( $list ) {
                        return $list->posts;
                    } )
                    ->editColumn( 'post_date', function ( $list ) {
                        return $list->post_date;
                    } )
                    ->editColumn( 'tags', function ( $list ) {
                        return $list->tags;
                    } )
                    ->editColumn( 'email', function ( $list ) {
                        return $list->email;
                    } )
                    ->editColumn( 'website', function ( $list ) {
                        return $list->website;
                    } )
                    ->addColumn( 'action', function ( $list ) {
                        return '<a href="' . URL::to( 'blog/edit/' . $list->id ) .
                            '"class="btn btn-sm btn-outline-dark"> <i class="fa fa-edit"></i> Edit</a> ';
                    } )
                    ->rawColumns( array( 'action' ) )
                    ->make( true );
            }
            return view( "Blog::list" );
        } catch ( Exception $exception ) {
            Log::error( "Error occurred in BlogController@list ({$exception->getFile()}:{$exception->getLine()}): {$exception->getMessage()}" );
            Session::flash( 'error', "Something went wrong during application data load [Blog-101]" );
            return response()->json( array( 'error' => $exception->getMessage() ), Response::HTTP_INTERNAL_SERVER_ERROR );
        }

    }

    public function create(): View | RedirectResponse {
        try {
            $data['categories_list'] = array(
                ''    => 'Select One',
                'General'  => 'General',
                'Lifestyle'  => 'Lifestyle',
                'Travel'  => 'Travel',
                'Design'  => 'Design',
                'Development'  => 'Development',
                'Marketing'  => 'Marketing',
                'Creative' => 'Creative',
                'Educaion' => 'Educaion',
            );
            return view( 'Blog::create', $data );

        } catch ( Exception $exception ) {
            Log::error( "Error occurred in Blog@create ({$exception->getFile()}:{$exception->getLine()}): {$exception->getMessage()}" );
            Session::flash( 'error', "Something went wrong during application data create [Blog-102]" );
            return redirect()->back();
        }
    }

    public function store(StoreBlogRequest $request)
    {
        try {
            if ($request->get('id')) {
                $blog = Blog::findOrFail($request->get('id'));
            } else {
                $blog = new Blog();
            }
            $blog->heading = $request->get('heading');
            $blog->name = $request->get('name');
            $blog->title = $request->get('title');
            $blog->comments = $request->get('comments');
            $blog->content = $request->get('content');
            $blog->blog_quote = $request->get('blog_quote');
            $blog->categories = $request->get('categories');
            $blog->date = $request->get('date');
            $blog->posts = $request->get('posts');
            $blog->post_date = $request->get('post_date');
            $blog->tags = $request->get('tags');
            $blog->email = $request->get('email');
            $blog->website = $request->get('website');

            $blog->save();
            Session::flash( 'success', 'Data save successfully!' );
            return redirect()->route('blog.list');
        } catch ( Exception $exception ) {
            Log::error( "Error occurred in BlogController@store ({$exception->getFile()}:{$exception->getLine()}): {$exception->getMessage()}" );
            Session::flash( 'error', "Something went wrong during application data store [UC-103]" );
            return Redirect::back()->withInput();

        }
    }


    public function edit( $id ): View | RedirectResponse {
        try {
            $data['categories_list'] = array(
                ''    => 'Select One',
                'General'  => 'General',
                'Lifestyle'  => 'Lifestyle',
                'Travel'  => 'Travel',
                'Design'  => 'Design',
                'Development'  => 'Development',
                'Marketing'  => 'Marketing',
                'Creative' => 'Creative',
                'Educaion' => 'Educaion',
            );
            $data['data'] = Blog::findOrFail( $id );
            return view( 'Blog::edit', $data );
        } catch ( Exception $exception ) {
            Log::error( "Error occurred in Employee@edit ({$exception->getFile()}:{$exception->getLine()}): {$exception->getMessage()}" );
            Session::flash( 'error', "Something went wrong during application data edit [Blog-103]" );
            return redirect()->back();
        }
}
}
