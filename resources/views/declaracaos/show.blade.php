<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detalhes da Declaração
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6 space-y-6">

                <div>

                    <div class="mb-3 text-gray-700 dark:text-gray-300">
                        <strong>Data:</strong> {{ $declaracao->data }}
                    </div>

                    <div class="mb-3 text-gray-700 dark:text-gray-300">
                        <strong>Aluno:</strong> {{ $declaracao->aluno->nome ?? 'Não informado' }}
                    </div>

                    <div>
                        <strong class="text-gray-700 dark:text-gray-300">Arquivo:</strong>
                        <span class="ml-2">
                                <a href="{{ asset('storage/documentos/' . \App\Models\Comprovante::find($declaracao->comprovante_id) -> hash) }}" target="_blank" class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-600 transition">
                                    Visualizar Documento
                                </a>
                        </span>
                    </div>
                </div>

                <div class="flex gap-6">
                    <a href="{{ route('declaracaos.index') }}"
                       class="inline-block px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                        Voltar
                    </a>

                    <a href="{{ route('declaracaos.edit', $declaracao->id) }}"
                       class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Editar
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

