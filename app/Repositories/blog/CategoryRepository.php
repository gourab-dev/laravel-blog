<?php 
namespace App\Repositories\blog;

use App\Models\blog\Category;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class CategoryRepository extends BaseRepository
{
    public function __construct()
    { 
        $cat = new Category(); 
        parent::__construct($cat);
        
    }
    
}