<x-app-layout>
    <main class="w-full">
        <h2 class="text-2xl font-bold mt-4 mb-4">Usuário Cadastrados</h2>
        <button class="btn btn-primary mb-4"> Apagar</button>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox" />
                            </label>
                        </th>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Contato</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img
                                                src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">{{$user->name}}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Gerente de projetos
                            </td>
                            <td>{{$user->email}}</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Contato</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>


    </main>
</x-app-layout>