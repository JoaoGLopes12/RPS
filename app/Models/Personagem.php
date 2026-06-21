<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $fillable = [
        'user_id',
        'nome',
        'nivel',
        'experiencia',
        'raca_id',
        'classe_id',
        'forca_base',
        'destreza_base',
        'constituicao_base',
        'inteligencia_base',
        'sabedoria_base',
        'carisma_base',
        'hp',
        'mana',
        'dinheiro'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function raca()
    {
        return $this->belongsTo(Raca::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function itens()
    {
        return $this->belongsToMany(
            Item::class,
            'personagem_item'
        )
        ->withPivot('quantidade')
        ->withTimestamps();
    }

    public function pontosDisponiveis()
    {
        return 10 + (($this->nivel - 1) * 2);
    }

    public function pontosDistribuidos()
    {
        return
            $this->forca_base +
            $this->destreza_base +
            $this->constituicao_base +
            $this->inteligencia_base +
            $this->sabedoria_base +
            $this->carisma_base;
    }

    public function pontosRestantes()
    {
        return $this->pontosDisponiveis()
            - $this->pontosDistribuidos();
    }

    public function bonusItens($campo)
    {
        return $this->itens->sum($campo);
    }

    public function getForcaFinalAttribute()
    {
        return
            $this->forca_base
            + ($this->raca->bonus_forca ?? 0)
            + ($this->classe->bonus_forca ?? 0)
            + $this->bonusItens('bonus_forca');
    }

    public function getDestrezaFinalAttribute()
    {
        return
            $this->destreza_base
            + ($this->raca->bonus_destreza ?? 0)
            + ($this->classe->bonus_destreza ?? 0)
            + $this->bonusItens('bonus_destreza');
    }

    public function getConstituicaoFinalAttribute()
    {
        return
            $this->constituicao_base
            + ($this->raca->bonus_constituicao ?? 0)
            + ($this->classe->bonus_constituicao ?? 0)
            + $this->bonusItens('bonus_constituicao');
    }

    public function getInteligenciaFinalAttribute()
    {
        return
            $this->inteligencia_base
            + ($this->raca->bonus_inteligencia ?? 0)
            + ($this->classe->bonus_inteligencia ?? 0)
            + $this->bonusItens('bonus_inteligencia');
    }

    public function getSabedoriaFinalAttribute()
    {
        return
            $this->sabedoria_base
            + ($this->raca->bonus_sabedoria ?? 0)
            + ($this->classe->bonus_sabedoria ?? 0)
            + $this->bonusItens('bonus_sabedoria');
    }

    public function getCarismaFinalAttribute()
    {
        return
            $this->carisma_base
            + ($this->raca->bonus_carisma ?? 0)
            + ($this->classe->bonus_carisma ?? 0)
            + $this->bonusItens('bonus_carisma');
    }

    public function getHpFinalAttribute()
    {
        return
            100
            + $this->constituicao_final
            + ($this->classe->bonus_hp ?? 0)
            + $this->bonusItens('bonus_hp');
    }

    public function getManaFinalAttribute()
    {
        return
            50
            + $this->inteligencia_final
            + ($this->classe->bonus_mana ?? 0)
            + $this->bonusItens('bonus_mana');
    }

    public function experienciaProximoNivel()
    {
        return $this->nivel * 100;
    }

    public function subirNivel()
    {
        while (
            $this->experiencia >=
            $this->experienciaProximoNivel()
        ) {
            $this->nivel++;

            $this->save();
        }
    }
}