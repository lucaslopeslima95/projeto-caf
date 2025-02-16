<x-app-layout>
    <main class="w-full">
        <h2 class="text-2xl font-bold mt-4">Usuário Cadastrados</h2>
        <table class="border-collapse md:border-separate">
            <thead>
                <tr>
                    <th class="border border-gray-300 ">Nome</th>
                    <th class="border border-gray-300 ">Email</th>
                    <th class="border border-gray-300 ">Ação</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border border-gray-300">{{ $user->name }}</td>
                    <td class="border border-gray-300">{{ $user->email }}</td>
                    <td class="border border-gray-300" align="center"><a  href="">X</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </main>
</x-app-layout>