
<x-layouts.app>

    <h1 class="text-lg font-bold pl-4 bg-gray-200">Produtos</h1>
    <table class="w-[80%] m-auto text-left mt-6">
        <tr class="mb-2 text-lg text-blue-950">
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th class="text-center">Quantidade</th>
        </tr>

        @foreach($produtos as $produto)

            <tr class="table-line align-middle leading-6" id="{{$produto->id}}">
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>R$ {{number_format($produto->preco,2, "," ,)}}</td>
                <td class="text-center">{{$produto->quantidade}}</td>
                <td class="flex justify-between">
                    <a href="{{route('produtos.show', $produto->id)}}" class="text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    </a>

                    <form action="{{route('produtos.destroy', $produto->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
</x-layouts.app>

