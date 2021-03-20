@extends('master')

@section('css')

@endsection

@section('content')
<section class="relative flex flex-col m-0 pb-16">
    <div style="filter: opacity(0.4);" class="bg-image bg-riga-landing absolute w-full h-full bg-center -z-10 bg-cover">
    </div>
    <h1 class="mx-auto text-2xl sm:text-6xl text-yellow-600 w-2/3 text-center font-normal py-16 z-1">Узнай бесплатно
        сколько стоит твоя
        недвижимость</h1>


    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div style="filter:drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.446));"
            class="border-2 border-white relative bg-green-100 px-4 py-10 bg-white mx-8 md:mx-0 rounded-lg sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <i style="filter:drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.193));"
                        class="fas fa-building fa-3x text-yellow-600"></i>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-200">
                        <h2 class="leading-relaxed">Пофлексь сюда своей хатой</h2>
                        <p class="text-sm text-gray-300 font-normal leading-relaxed">Введите информацию о вашей
                            недвижимости, чтобы узнать цену от наших экспертов</p>
                    </div>
                </div>
                <div class="">
                    <div class="pt-8 text-sm leading-6 space-y-4 text-gray-200 sm:text-base sm:leading-7">
                        <div class="flex flex-col">
                            <label class="leading-loose">Город</label>
                            <div>
                                <div class="mt-1 relative">
                                    <button type="button" aria-haspopup="listbox" aria-expanded="true"
                                        aria-labelledby="listbox-label"
                                        class="relative w-full bg-white border border-gray-300 rounded-sm shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="flex items-center text-gray-400">
                                            <i class="fas fa-location-arrow"></i>
                                            <span class="ml-3 block truncate">
                                                Рига
                                            </span>
                                        </span>
                                        <span
                                            class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                            <!-- Heroicon name: solid/selector -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>

                                    <!--
                            Select popover, show/hide based on select state.
                      
                            Entering: ""
                              From: ""
                              To: ""
                            Leaving: "transition ease-in duration-100"
                              From: "opacity-100"
                              To: "opacity-0"
                          -->
                                    {{-- <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                                        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                            aria-activedescendant="listbox-item-3"
                                            class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                                            <!--
                                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
                      
                                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                              -->
                                            <li id="listbox-item-0" role="option"
                                                class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
                                                <div class="flex items-center">
                                                    <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                        alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
                                                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                                    <span class="ml-3 block font-normal truncate">
                                                        Wade Cooper
                                                    </span>
                                                </div>

                                                <!--
                                  Checkmark, only display for selected option.
                      
                                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                                -->
                                                <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </li>

                                            <!-- More items... -->
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Район</label>
                            <div>
                                <div class="mt-1 relative">
                                    <button type="button" aria-haspopup="listbox" aria-expanded="true"
                                        aria-labelledby="listbox-label"
                                        class="relative w-full bg-white border border-gray-300 rounded-sm shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="flex items-center text-gray-400">
                                            <i class="fas fa-city"></i>
                                            <span class="ml-3 block truncate">
                                                Вецрига
                                            </span>
                                        </span>
                                        <span
                                            class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                            <!-- Heroicon name: solid/selector -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>

                                    <!--
                            Select popover, show/hide based on select state.
                      
                            Entering: ""
                              From: ""
                              To: ""
                            Leaving: "transition ease-in duration-100"
                              From: "opacity-100"
                              To: "opacity-0"
                          -->
                                    {{-- <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                                        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                            aria-activedescendant="listbox-item-3"
                                            class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                                            <!--
                                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
                      
                                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                              -->
                                            <li id="listbox-item-0" role="option"
                                                class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
                                                <div class="flex items-center">
                                                    <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                        alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
                                                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                                    <span class="ml-3 block font-normal truncate">
                                                        Wade Cooper
                                                    </span>
                                                </div>

                                                <!--
                                  Checkmark, only display for selected option.
                      
                                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                                -->
                                                <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </li>

                                            <!-- More items... -->
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Тип дома</label>
                            <div>
                                <div class="mt-1 relative">
                                    <button type="button" aria-haspopup="listbox" aria-expanded="true"
                                        aria-labelledby="listbox-label"
                                        class="relative w-full bg-white border border-gray-300 rounded-sm shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="flex items-center text-gray-400">
                                            <i class="fas fa-home"></i>
                                            <span class="ml-3 block truncate">
                                                Бомжатник
                                            </span>
                                        </span>
                                        <span
                                            class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                            <!-- Heroicon name: solid/selector -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>

                                    <!--
                            Select popover, show/hide based on select state.
                      
                            Entering: ""
                              From: ""
                              To: ""
                            Leaving: "transition ease-in duration-100"
                              From: "opacity-100"
                              To: "opacity-0"
                          -->
                                    {{-- <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                                        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                            aria-activedescendant="listbox-item-3"
                                            class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                                            <!--
                                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
                      
                                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                              -->
                                            <li id="listbox-item-0" role="option"
                                                class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
                                                <div class="flex items-center">
                                                    <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                        alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
                                                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                                    <span class="ml-3 block font-normal truncate">
                                                        Wade Cooper
                                                    </span>
                                                </div>

                                                <!--
                                  Checkmark, only display for selected option.
                      
                                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                                -->
                                                <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </li>

                                            <!-- More items... -->
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Серия</label>
                            <div>
                                <div class="mt-1 relative">
                                    <button type="button" aria-haspopup="listbox" aria-expanded="true"
                                        aria-labelledby="listbox-label"
                                        class="relative w-full bg-white border border-gray-300 rounded-sm shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <span class="flex items-center text-gray-400">
                                            <i class="fas fa-landmark"></i>
                                            <span class="ml-3 block truncate">
                                                119 серия
                                            </span>
                                        </span>
                                        <span
                                            class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                            <!-- Heroicon name: solid/selector -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>

                                    <!--
                            Select popover, show/hide based on select state.
                      
                            Entering: ""
                              From: ""
                              To: ""
                            Leaving: "transition ease-in duration-100"
                              From: "opacity-100"
                              To: "opacity-0"
                          -->
                                    {{-- <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg">
                                        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                            aria-activedescendant="listbox-item-3"
                                            class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                                            <!--
                                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
                      
                                Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                              -->
                                            <li id="listbox-item-0" role="option"
                                                class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9">
                                                <div class="flex items-center">
                                                    <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                        alt="" class="flex-shrink-0 h-6 w-6 rounded-full">
                                                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                                    <span class="ml-3 block font-normal truncate">
                                                        Wade Cooper
                                                    </span>
                                                </div>

                                                <!--
                                  Checkmark, only display for selected option.
                      
                                  Highlighted: "text-white", Not Highlighted: "text-indigo-600"
                                -->
                                                <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </li>

                                            <!-- More items... -->
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Площадь (м<sup>2</sup>)</label>
                            <input type="text"
                                class="px-4 py-2 border focus:ring-gray-200 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-sm focus:outline-none text-gray-600"
                                placeholder="36">
                        </div>
                        {{-- <div class="flex flex-col">
                            <label class="leading-loose">Event Subtitle</label>
                            <input type="text"
                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-sm focus:outline-none text-gray-600"
                                placeholder="Optional">
                        </div> --}}
                        <div class="flex items-center space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Количество комнат</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="text"
                                        class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-sm focus:outline-none text-gray-600"
                                        placeholder="1">
                                    <div class="absolute left-3 top-2">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Этаж</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="text"
                                        class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-sm focus:outline-none text-gray-600"
                                        placeholder="4">
                                    <div class="absolute left-3 top-2">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Дополнительная информация</label>
                            <input type="text"
                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-sm focus:outline-none text-gray-600"
                                placeholder="Много бухал">
                        </div>

                        <div class="flex items-center space-x-4">

                            <button
                                class="mx-auto w-full sm:w-1/2 bg-red-100 flex justify-center items-center text-white px-4 py-3 rounded-sm focus:outline-none 
                      shadow-lg bg-red-100 hover:bg-red-200 p-2 py-1 rounded-lg text-gray-200 text-2xl hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">Узнать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

@section('js')

@endsection