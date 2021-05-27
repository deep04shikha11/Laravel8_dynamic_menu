 <x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             Create Main Menu
         </h2>
     </x-slot>

     <div>
         <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
             <div class="mt-5 md:mt-0 md:col-span-2">
                 <form method="post" action="{{ route('item.store') }}">
                     @csrf
                    
                     <div class="shadow overflow-hidden sm:rounded-md">
                     
                         <div class="px-4 py-5 bg-white sm:p-6">
                         <h1 class="py-2 text-center">Add Main Menu</h1>
                             <label for="name" class="block font-medium text-sm text-gray-700">Title </label>
                             <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('name', '') }}" />
                             @error('name')
                             <p class="text-sm text-red-600">{{ $message }}</p>
                             @enderror
                         </div>

                         <div class="px-4 py-5 bg-white sm:p-6">
                             <label for="menu_link" class="block font-medium text-sm text-gray-700">Menu Link </label>
                             <input type="text" name="menu_link" id="menu_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('menu_link', '') }}" />
                             @error('menu_link')
                             <p class="text-sm text-red-600">{{ $message }}</p>
                             @enderror
                         </div>

                         <div class="px-4 py-5 bg-white sm:p-6">
                             <label for="status" class="block font-medium text-sm text-gray-700">Sub Menu </label>
                             <select name="status" id="status" class="block w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="0">Disable</option>
                                <option value="1">Active</option>
                             </select>
                         </div>

                         <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                             <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                 Create
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </x-app-layout>