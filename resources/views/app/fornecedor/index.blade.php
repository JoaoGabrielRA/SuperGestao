<h3>Fornecedor</h3>

@php 
  /*  foreach ($fornecedores as $fornecedor){
        print_r($fornecedor);
    }@if($fornecedores2[0]['status'] == 'N')
    <h3>Fornecedor Inativo</h3>
@endif*/
@endphp

@if(count($fornecedores) > 3)
    <h3>Existem mais de 3 fornecedores</h3>
@endif

Fornecedor: {{$fornecedores2[0]['nome']}}
Status: {{$fornecedores2[0]['status']}}

@unless($fornecedores2[0]['status'] == 'S') {{-- A não ser que o status seja S execute --}}
    <h3>Fornecedor Inativo</h3>
@endunless

@isset($variavel)
    <h3>{{$variavel}}</h3>
@endisset

@isset($fornecedores2)
Fornecedor: {{ $fornecedores2[0]['nome'] }}
<br>
Status: {{ $fornecedores2[0]['status'] }}
<br>
Cpnj: {{ $fornecedores2[0]['cnpj'] ?? 'Cpnj não informado' }}
<br>
Telefone:  ({{ $fornecedores2[0]['ddd'] ?? '' }}) {{ $fornecedores2[0]['telefone'] ?? '' }}
@switch( $fornecedores2[0]['ddd'])
    @case('11')
        São paulo - SP
        @break
    @case('84')
        Natal - RN
        @break
    @case('85')
        Fortaleza - CE
        @break
    @default
        Estado não identificado
        @break
@endswitch
@endisset














<hr>
@foreach ($fornecedores2 as $fornecedor)
          @isset($fornecedor)
               Fornecedor: {{ $fornecedor['nome'] }}
                <br>
                Status: {{ $fornecedor['status'] }}
                <br>
                Cpnj: {{ $fornecedor['cnpj'] ?? 'Cpnj não informado' }}
                <br>
          @endisset
          Telefone:  ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
            @switch( $fornecedor['ddd'])
                @case('11')
                    São paulo - SP
                    @break
                @case('84')
                    Natal - RN
                    @break
                @case('85')
                    Fortaleza - CE
                    @break
                @default
                    Estado não identificado
                    @break
            @endswitch
          <hr>
@endforeach
