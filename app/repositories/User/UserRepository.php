<?php 
	namespace App\Repositories\User;

    use Illuminate\Database\Eloquent\Model;
    use App\User;
    use App\Repositories\BaseRepository;

    class UserRepository extends BaseRepository implements UserRepositoryInterFace{

    	public function __construct(User $user){
    		parent::__construct($user);
    	}
    }
?>