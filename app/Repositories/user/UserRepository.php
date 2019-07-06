<?php 
namespace App\Repositories\user;

use App\User;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class UserRepository extends BaseRepository
{
	public function __construct()
    { 
        $user = new User(); 
        parent::__construct($user);
        
    }
    
}