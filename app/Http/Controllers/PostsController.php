<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostsRepo;
use Illuminate\Session\Store;


class PostsController extends Controller
{
    
    public function getUserIndex(Store $session) {
	
		$postsRepo = new PostsRepo($session);

    	return view('users.index', [
    		'posts' => $postsRepo->getPosts()
    	]);
    }
	
    public function getUserPost($id, Store $session) {
    	$postsRepo = new PostsRepo($session);

	    return view('post.post', [
	    	'post' => $postsRepo->getPost($id)
	    ]);
    }

    public function getUserPostByTitle($title, Store $session) {
        $postsRepo = new PostsRepo($session);

        return view('post.post', [
            'post' => $postsRepo->getPostByTitle($title)
        ]);   
    }
    

	public function getUserCreate() {
        return view('users.create');
    	}
       public function postUserCreate(Store $session, Request $req) {
        $this->validate($req, [
            'title' => 'required|min:5'
        ]);

        $postsRepo = new PostsRepo($session);
        $postsRepo->addPost(
            $req->input('title')
        );

        return redirect()->route('userIndex')->with([
            'info'=>'Successfully created! Post title is '. $req->input('title')
        ]);
    	}

	public function getUserEdit($id, Store $session) {
    	$postsRepo = new PostsRepo($session);
    	$post = $postsRepo->getPost($id);

    	return view('users.edit', [
    		'post' => $post,
    		'postId' => $id
    	]);
    	}

	 public function postUserEdit(Request $req, Store $session) {
    	$this->validate($req, [
			'title' => 'required|min:5'
		]);

    	$postsRepo = new PostsRepo($session);
    	$postsRepo->updatePost(
    		$req->input('id'),
    		$req->input('title')
    	);

    	return redirect()->route('userIndex')->with([
			'info'=>'Successfully updated! Post title is '. $req->input('title')
		]);
   	 }

	public function getUserDelete(Store $session, $id) {
        $postsRepo = new PostsRepo($session);
        $postsRepo->deletePost($id);

        return redirect()->route('userIndex')->with([
            'info'=>'Successfully deleted!  Post id is '. $id
        ]);
    }   


    }   

    



