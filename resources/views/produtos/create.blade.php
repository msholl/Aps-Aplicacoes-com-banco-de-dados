<x-layouts.app>
    <h1 class="text-lg font-bold pl-4 bg-gray-200">Adicionar Produto</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="bg-red-200 text-red-800 text-center p-2">{{$error}}</div>
        @endforeach

    @endif
    <form action="{{route('produtos.store')}}" method="post" class="flex justify-between w-[50%] m-auto mt-8">
        @csrf

        <div class="flex flex-col">
            <label class="required" for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
        </div>

        <div class="flex flex-col">
            <label class="required" for="descricao">Descricao</label>
            <input type="text" name="descricao" id="descricao" value="{{ old('descricao') }}">
        </div>

        <div class="flex flex-col">
            <label class="required" for="preco">Preço</label>
            <input type="number" name="preco" id="preco" value="{{ old('preco') }}" required>
        </div>

        <div class="flex flex-col">
            <label class="required" for="quantidade">Quantidade</label>
            <input type="text" name="quantidade" id="quantidade" value="{{ old('quantidade') }}" required>
        </div>

        <button type="submit" class="bg-blue-500 rounded-md w-16 h-8 relative top-4">Criar</button>
    </form>
</x-layouts.app>
