@extends('base')

@section('content')
    <div class="flex flex-wrap -mx-3 mb-5">
        <div class="w-full max-w-full px-3 mb-6  mx-auto">
            <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                    <!-- card header -->
                    <div class="px-9 pt-5 flex justify-end items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                        <div class="relative flex flex-wrap items-center my-2">
                            <a href="#" class="bg-blue-800 w-48 h-10 rounded text-white font-bold flex items-center justify-center"> ajouter un nouve produit </a>
                        </div>
                    </div>
                    <!-- end card header -->
                    <!-- card body  -->
                    <div class="flex-auto block py-8 pt-6 px-9">
                        <div class="overflow-x-auto">
                            <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                <thead class="align-bottom">
                                <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                    <th class="pb-3 text-end min-w-[100px]">NAME</th>
                                    <th class="pb-3 text-end min-w-[175px]">DESCRIPTION</th>
                                    <th class="pb-3 pr-12 text-end min-w-[50px]">STATUS</th>
                                    <th class="pb-3 text-end min-w-[50px]">PRIX</th>
                                    <th class="pb-3 text-end min-w-[50px]">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($produts as $produt)
                                    <tr class="border-b border-dashed last:border-b-0">
                                        <td class="p-3 pr-0 text-end">
                                            <span class="font-semibold text-light-inverse text-md/normal">{{ $produt->name }}</span>
                                        </td>
                                        <td class="p-3 pr-0 text-end">
                                            <span class="font-semibold text-light-inverse text-md/normal">{{ $produt->description }}</span>
                                        </td>
                                        <td class="p-3 pr-0 text-end">
                                            @if($produt->isPublished === 1)
                                                <span class="inline-block w-2 h-2 rounded-full bg-green-600"></span>
                                            @else
                                                <span class="inline-block w-2 h-2 rounded-full bg-red-600"></span>
                                            @endif
                                        </td>
                                        <td class="p-3 pr-0 text-end">
                                            <span class="font-semibold text-light-inverse text-md/normal">{{ $produt->prix }}</span>
                                        </td>
                                        <td class="p-3 pr-0 text-end">
                                            <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                      <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                      </span>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
