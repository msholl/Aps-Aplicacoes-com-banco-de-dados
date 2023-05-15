<x-layouts.app>
    <h1 class="text-lg font-bold pl-4 bg-gray-200">Adicionar Produto</h1>
    <form action="{{route('produtos.store')}}" method="post" class="flex justify-between w-[50%] m-auto mt-8">
        @csrf
        <div class="flex flex-col">
            <label class="required" for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div class="flex flex-col">
            <label class="required" for="descricao">Descricao</label>
            <input type="text" name="descricao" id="descricao" required>
        </div>

        <div class="flex flex-col">
            <label class="required" for="preco">Preço</label>
            <input type="number" name="preco" id="preco" required>
        </div>

        <div class="flex flex-col">
            <label class="required" for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" required>
        </div>

        <button type="submit" class="bg-blue-500 rounded-md w-16 h-8 relative top-4">Criar</button>
    </form>
</x-layouts.app>
