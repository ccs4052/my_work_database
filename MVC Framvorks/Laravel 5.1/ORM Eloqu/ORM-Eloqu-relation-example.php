<?php 


class User extends Model implements AuthenticatableContract,
	AuthorizableContract,
	CanResetPasswordContract
{
	use Authenticatable, Authorizable, CanResetPassword;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['l_name', 'category_id', 'location_id', 'f_name', 'email', 'password','active','hash']; //database table row name

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	public function location()           //связь с таблицей  location
	{
		return $this->belongsTo('App\Model\DB\Location');
	}



	
}




/////////////////////ТАБЛИЦА Location

class Location extends Model {

	public $timestamps = false;
	public $table = 'location'; //table name
	protected $fillable = ['name']; //database table row name

	public function users()
	{
		return $this->hasMany('App\User');   //они связана с таблицей users
	}

}


////////////////////////ТЕПЕРЬ В КОНТРОЛЕРЕ ВЫЗЫВАЕМ ТАК 

$users = User::with(['location'])->where('id','=',120)->first();
		echo $users->id;             //user id
		echo $users->location->name; //retrive location name




?>