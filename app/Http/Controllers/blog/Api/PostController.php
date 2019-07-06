<?php

namespace App\Http\Controllers\blog\Api;

use App\Repositories\blog\PostRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

	public function __construct(PostRepository $post)
    {
        $this->postRepo = $post;
    }

    public function index(Request $request)
    {
        return $this->postRepo->getIndex($request);
    }

    public function show(Post $post)
    {
        return $this->postRepo->getAll($post);
    }
}
