<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Student extends Model
{
    // Permite exclusão lógica (soft delete)
    use SoftDeletes;

    // Nome da tabela associada ao modelo
    protected $table = 'students';

    // Protege o campo "id" contra atribuição em massa
    protected $guarded = ['id'];

    /**
     * Relacionamento:
     * Um estudante pertence a um curso.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

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
        static::creating(function ($student) {
            $student->slug = self::generateSlug($student->name);
        });

        // Antes de atualizar um registro existente
        static::updating(function ($student) {

            // Regenera o slug somente se o nome tiver sido modificado
            if ($student->isDirty('name')) {
                $student->slug = self::generateSlug(
                    $student->name,
                    $student->id
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
