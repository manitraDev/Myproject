<form class="w-full my-5" method="POST" action={{ route('post_product') }}>
    <div class="w-full mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Nom de produit
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="Carotte" name="name">
    </div>
    <div class="w-full mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Description
        </label>
        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Description" name="description">
        </textarea>
    </div>
    <div class="w-full mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Prix
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" placeholder="500 Ar" name="prix">
    </div>
    <div class="w-full mb-6 md:mb-0">
        <label class="inline-flex items-center cursor-pointer">
            <input type="checkbox" value="" class="sr-only peer" name="product_pusblished">
            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">publier</span>
        </label>
    </div>
    <div class="w-full mb-6 md:mb-0">
        <button type="submit" class="w-full bg-gray-200 rounded h-10 uppercase tracking-wide text-gray-700 text-xs font-bold">Enregistrer</button>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>
