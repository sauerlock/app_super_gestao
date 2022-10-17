<h1> Fornecedor </h1>

{{-- Comentario --}}

@php






@endphp



@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor )
    <hr>
        Fornecedores: {{ $fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado Inexistente'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}} 
        <br>  
        <hr>
        @if($loop->first)
            Primeira interacao
            <br>
        @endif
        
        @if($loop->last)
            Ultima interacao
        <br>
            Total de Registros: {{$loop->count}}
        <br>
        @endif  
        <br>
        @empty
        Nao existem fornecedores cadastrados
        <br>
    @endforelse
@endisset        