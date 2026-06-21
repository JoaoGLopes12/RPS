@extends('layouts.app')
@section('content')

<div class="container">

    <h1>Ficha do Personagem</h1>

    <hr>

    <div class="card mb-3">
        <div class="card-header">
            Informações Gerais
        </div>

        <div class="card-body">

            <p>
                <strong>Nome:</strong>
                {{ $personagem->nome }}
            </p>

            <p>
                <strong>Jogador:</strong>
                {{ $personagem->user->name }}
            </p>

            <p>
                <strong>Raça:</strong>
                {{ $personagem->raca->nome }}
            </p>

            <p>
                <strong>Classe:</strong>
                {{ $personagem->classe->nome }}
            </p>

            <p>
                <strong>Nível:</strong>
                {{ $personagem->nivel }}
            </p>

            <p>
                <strong>Experiência:</strong>
                {{ $personagem->experiencia }}
            </p>

            <p>
                <strong>Dinheiro:</strong>
                {{ $personagem->dinheiro }}
            </p>

        </div>
    </div>

    <div class="card mb-3">

        <div class="card-header">
            Recursos
        </div>

        <div class="card-body">

            <p>
                <strong>HP Final:</strong>
                {{ $personagem->hp_final }}
            </p>

            <p>
                <strong>Mana Final:</strong>
                {{ $personagem->mana_final }}
            </p>

            <p>
                <strong>Pontos Disponíveis:</strong>
                {{ $personagem->pontosDisponiveis() }}
            </p>

            <p>
                <strong>Pontos Utilizados:</strong>
                {{ $personagem->pontosDistribuidos() }}
            </p>

            <p>
                <strong>Pontos Restantes:</strong>
                {{ $personagem->pontosRestantes() }}
            </p>

        </div>

    </div>

    <div class="card mb-3">

        <div class="card-header">
            Atributos Base
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th>Força</th>
                    <td>{{ $personagem->forca_base }}</td>
                </tr>

                <tr>
                    <th>Destreza</th>
                    <td>{{ $personagem->destreza_base }}</td>
                </tr>

                <tr>
                    <th>Constituição</th>
                    <td>{{ $personagem->constituicao_base }}</td>
                </tr>

                <tr>
                    <th>Inteligência</th>
                    <td>{{ $personagem->inteligencia_base }}</td>
                </tr>

                <tr>
                    <th>Sabedoria</th>
                    <td>{{ $personagem->sabedoria_base }}</td>
                </tr>

                <tr>
                    <th>Carisma</th>
                    <td>{{ $personagem->carisma_base }}</td>
                </tr>

            </table>

        </div>

    </div>

    <div class="card mb-3">

        <div class="card-header">
            Atributos Finais
        </div>

        <div class="card-body">

            <table class="table table-striped">

                <tr>
                    <th>Força</th>
                    <td>{{ $personagem->forca_final }}</td>
                </tr>

                <tr>
                    <th>Destreza</th>
                    <td>{{ $personagem->destreza_final }}</td>
                </tr>

                <tr>
                    <th>Constituição</th>
                    <td>{{ $personagem->constituicao_final }}</td>
                </tr>

                <tr>
                    <th>Inteligência</th>
                    <td>{{ $personagem->inteligencia_final }}</td>
                </tr>

                <tr>
                    <th>Sabedoria</th>
                    <td>{{ $personagem->sabedoria_final }}</td>
                </tr>

                <tr>
                    <th>Carisma</th>
                    <td>{{ $personagem->carisma_final }}</td>
                </tr>

            </table>

        </div>

    </div>

    <div class="card mb-3">

        <div class="card-header">
            Inventário
        </div>

        <div class="card-body">

            @if($personagem->itens->count())

                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Raridade</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($personagem->itens as $item)

                        <tr>

                            <td>
                                {{ $item->nome }}
                            </td>

                            <td>
                                {{ $item->raridade }}
                            </td>

                            <td>
                                {{ $item->pivot->quantidade }}
                            </td>

                            <td>
                                {{ $item->valor }}
                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            @else

                <p>
                    Nenhum item cadastrado.
                </p>

            @endif

        </div>

    </div>

    <a
        href="{{ route('personagens.index') }}"
        class="btn btn-secondary"
    >
        Voltar
    </a>

</div>

@endsection