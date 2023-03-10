<?php

namespace Domain\Shared\Models\Actor;

use Database\Factories\Shared\Actor\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


/**
 * @property int $id
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $startWork
 * @property string $email
 * @property string $password
 * @property string $userable_type
 * @property int $userable_id
 * @property Employee|HR|Mentor|Supervisor userable
 * @property string $photo
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasRoles;

    protected $table = 'users';

    public function userable():MorphTo{
        return $this->morphTo();
    }

    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'startWork',
        'email',
        'password',
        'userable_type',
        'userable_id',
        'photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function newFactory()
    {
        return app(UserFactory::class);
    }
}
