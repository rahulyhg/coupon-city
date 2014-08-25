<?php namespace Couponcity\User;

    use Codesleeve\Stapler\ORM\EloquentTrait;
    use Codesleeve\Stapler\ORM\StaplerableInterface;
    use Couponcity\Events\UserSignedUp;
    use Illuminate\Auth\Reminders\RemindableInterface;
    use Illuminate\Auth\Reminders\RemindableTrait;
    use Illuminate\Auth\UserInterface;
    use Illuminate\Auth\UserTrait;
    use Laracasts\Commander\Events\EventGenerator;
    use Laracasts\Presenter\PresentableTrait;

    class User extends \Eloquent implements UserInterface, RemindableInterface, StaplerableInterface
    {

        use PresentableTrait, EloquentTrait, UserTrait, RemindableTrait, EventGenerator;

        protected $presenter = 'Couponcity\User\UserPresenter';


        protected $fillable = ['email', 'password'];

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'users';

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        protected $hidden = array('password', 'remember_token');

        public static function signup($command)
        {
            $user = User::create(['email' => $command->email, 'password' => $command->password]);
            $user->raise(new UserSignedUp($user));

            return $user;
        }

        public function setPasswordAttribute($value)
        {
            $this->attributes['password'] = \Hash::make($value);
        }

        public function coupons(){
            return $this->belongsToMany('Couponcity\Coupon\Coupon');
        }

        public function wallet_transactions(){
            return $this->hasMany('WalletTransaction');
        }

    }
