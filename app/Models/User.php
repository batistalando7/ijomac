<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\News;
use App\Models\Comment;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use softDeletes;

    protected $table = 'users';
    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    } */

    /**
     * Eventos do modelo.
     *
     * - creating: gera um slug único ao criar um novo estudante.
     * - updating: atualiza o slug apenas se o nome do estudante for alterado.
     */
    protected static function boot()
    {
        parent::boot();

        // Antes de inserir um novo registro
        static::creating(function ($user) {
            $user->slug = self::generateSlug($user->name);
        });

        // Antes de atualizar um registro existente
        static::updating(function ($user) {

            // Regenera o slug somente se o nome tiver sido modificado
            if ($user->isDirty('name')) {
                $user->slug = self::generateSlug(
                    $user->name,
                    $user->id
                );
            }
        });
    }

    /**
     * Gera um slug único para o estudante.
     *
     * Caso o slug já exista, acrescenta um número sequencial
     * ao final (-1, -2, -3, ...), garantindo sua unicidade.
     *
     * @param string $name Nome do estudante.
     * @param int|null $ignoreId ID do registro que será ignorado
     *                           durante a verificação (utilizado no update).
     *
     * @return string
     */
    protected static function generateSlug($name, $ignoreId = null)
    {
        // Gera o slug base a partir do nome
        $slug = Str::slug($name);

        // Guarda o slug original para reutilização
        $originalSlug = $slug;

        // Contador utilizado para criar slugs sequenciais
        $count = 1;

        // Enquanto existir outro registro com o mesmo slug,
        // acrescenta um número ao final.
        while (
            self::where('slug', $slug)
            ->when($ignoreId, function ($query) use ($ignoreId) {
                return $query->where('id', '!=', $ignoreId);
            })
            ->exists()
        ) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}
