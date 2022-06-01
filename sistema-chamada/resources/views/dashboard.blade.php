<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-fluid">
                        <div class="row min-vh-100 flex-column flex-md-row">
                            <aside class="col-12 col-md2 p-0 bg-light flex-shrink-1">
                                <nav class="navbar navbard-expand navbar-light bg-light flex-md-column flex-row align-items-start py-2">
                                    <div class="collapse navbar-collapse">
                                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link pl-0 text-nowrap">Link1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link pl-0 text-nowrap">Link2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link pl-0 text-nowrap">Link3</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </aside>
                        </div>
                    </div>
                    @can('user')
                        <h4>Dados do Usuário!</h4>
                    @elsecan('admin')
                        <h4>Somente do admin pode ver isso.</h4>
                    @endcan
                    
                    Você está logado(a)!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 