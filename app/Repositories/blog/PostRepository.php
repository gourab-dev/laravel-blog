<?php 
namespace App\Repositories\blog;

use App\Models\blog\Post;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class PostRepository extends BaseRepository
{
    public function __construct()
    { 
        $posts = new Post(); 
        parent::__construct($posts);

    }
    public function getIndex(Request $request)
    {
        return $this->model->when($request->title, function($query) use ($request) {
            return $query->where('title', 'like', "%{$request->title}%");
        })
        ->when($request->search, function($query) use ($request) {
            return $query->where('title', 'like', "%{$request->search}%")
                         ->orWhere('body', 'like', "%{$request->search}%");
        })
        ->when($request->order, function($query) use ($request) {
            if($request->order == 'oldest') {
                return $query->oldest();
            }
            return $query->latest();
        }, function($query) {
            return $query->latest();
        })
        ->when($request->status, function($query) use ($request) {
            if($query->status == 'published') {
                return $query->published();
            }
            return $query->drafted();
        })
        ->paginate($request->get('limit', 10));
    }

    public function getAll(Post $post)
    {
        $post = $post->load(['category', 'comments.user', 'tags', 'user']);

        return $post;
    }
}