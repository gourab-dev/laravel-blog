<?php

namespace App\Http\Controllers\blog\Api;

use App\Repositories\user\UserRepository;
use App\Repositories\blog\TagRepository;
use App\Repositories\blog\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function __construct(TagRepository $tags, CategoryRepository $cats, UserRepository $user)
    {
        $this->tagRepo = $tags;
        $this->catsRepo = $cats;
        $this->userRepo = $user;
    }
    public function tags()
    {
        $tags = $this->tagRepo->get();

        return $tags;
    }

    public function categories()
    {
        $categories = $this->catsRepo->get();

        return $categories;
    }

    public function users()
    {
        $users = $this->userRepo->get();

        return $users;
    }
}
