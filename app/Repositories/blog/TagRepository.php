<?php 
namespace App\Repositories\blog;

use App\Models\blog\Tag;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class TagRepository extends BaseRepository
{

    public function __construct()
    { 
        $tag = new Tag(); 
        parent::__construct($tag);

    }
    
}