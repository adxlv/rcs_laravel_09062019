<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});


Route::get('/news', function () {
    return view('pages.news');
});


Route::get('/contacts', function () {
    return view('pages.contacts');
});


Route::get('/blog', function () {
    
    $allPosts = App\BlogPost::all();

    return view('pages.blog', [
        'posts' => $allPosts,
    ]);
});


Route::get('/blog/{id}', function ($id) {

    $singlePost = App\BlogPost::find($id);
    
    return view('pages.singleblog', [
        'post' => $singlePost,
    ]);
    
});



Route::get('/contact', function () {

    $isSuccessfull = Request::get('success', '');

    return view('pages.contact', [
        'formSuccess' => $isSuccessfull,
    ]);
    
});


Route::any('/submitform', function () {

    //dd($_GET);
    $name  = Request::get('yourname', null);
    $email = Request::get('youremail', '');
    $msg   = Request::get('yourmessage', null);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = new App\Ieraksts;
        $message->vards = $name;
        $message->epasts = $email;
        $message->komentars = $msg;
        $message->save();

        return redirect('/contact?success=form-successfull');
    } else {
        return redirect('/contact?success=form-not-successfull');
    }

    //Saglabat datubāzē;
    
    
    //return view('pages.contact'); 
});



Route::any('/newblogpost', function () {

    return view('pages.new-blog');
});

Route::any('/submit-newblogpost', function () {

    $title    = Request::post('title', null);
    $img_url  = Request::post('img_url', null);
    $body     = Request::post('body', null);
    $excerpt  = Request::post('excerpt', null);
    $slug     = Request::post('slug', null);
    $tags     = Request::post('tags', null);

    $post = new App\BlogPost;

    $post->title   = $title;
    $post->img_url = $img_url;
    $post->body    = $body;
    $post->excerpt = $excerpt;
    $post->slug    = $slug;
    $post->tags    = $tags;

    $post->save();


    return redirect('/blog');
    //return view('pages.contact'); 
});
