<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div class="max-w-5xl mx-auto px-3">
        <div class="text-center mb-8">
            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200" href="/book/new">
                Créer un livre
            </a>
        </div>

        <form action="">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <label for="order_by">Trier par</label>
                    <select class="rounded-lg border-gray-300" name="order_by" id="order_by">
                        <option value="id">Id</option>
                        <option value="title">Nom</option>
                        <option value="price">Prix</option>
                    </select>
                </div>

                <div>
                    <label for="direction">Direction</label>
                    <select class="rounded-lg border-gray-300" name="direction" id="direction">
                        <option value="asc">Asc</option>
                        <option value="desc">Desc</option>
                    </select>
                </div>

                <div>
                    <label for="min_price">Prix min</label>
                    <input type="text" class="rounded-lg border-gray-300" name="min_price" id="min_price">
                </div>

                <div>
                    <label for="max_price">Prix max</label>
                    <input type="text" class="rounded-lg border-gray-300" name="max_price" id="max_price">
                </div>

                <button class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200">Filtrer</button>
            </div>
        </form>

        <div class="flex flex-wrap -mx-3">
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/1">
                            <img class="rounded-t-lg" src="./uploads/06.jpg" alt="Quae dolor itaque natus reiciendis ad quae.">
                            <div class="p-4">
                                <h2 class="text-center">Quae dolor itaque natus reiciendis ad quae.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">36,94 €</p>
                                    <p class="text-xs font-bold">-19% <span class="line-through">45,60 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Denise-Sabine Bernard</strong> en 2014
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>8-248827-583739</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/1/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/1/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/2">
                            <img class="rounded-t-lg" src="./uploads/05.jpg" alt="In in facilis quam vitae.">
                            <div class="p-4">
                                <h2 class="text-center">In in facilis quam vitae.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">31,20 €</p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Nicolas de la Courtois</strong> en 1987
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>3-6807-8091-5</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/2/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/2/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/3">
                            <img class="rounded-t-lg" src="./uploads/02.jpg" alt="Dolorum sit veritatis atque rerum cum quaerat.">
                            <div class="p-4">
                                <h2 class="text-center">Dolorum sit veritatis atque rerum cum quaerat.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">74,88 €</p>
                                    <p class="text-xs font-bold">-20% <span class="line-through">93,60 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Aimé Martineau</strong> en 2008
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>0-432990-694820</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/3/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/3/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/4">
                            <img class="rounded-t-lg" src="./uploads/01.jpg" alt="Illo deleniti commodi ex.">
                            <div class="p-4">
                                <h2 class="text-center">Illo deleniti commodi ex.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">28,54 €</p>
                                    <p class="text-xs font-bold">-18% <span class="line-through">34,80 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Arthur Allard</strong> en 1991
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>7-445094-667310</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/4/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/4/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/5">
                            <img class="rounded-t-lg" src="./uploads/02.jpg" alt="Et modi sit dolorum.">
                            <div class="p-4">
                                <h2 class="text-center">Et modi sit dolorum.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">44,28 €</p>
                                    <p class="text-xs font-bold">-18% <span class="line-through">54,00 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Alphonse Gros</strong> en 1981
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>0-857622-132295</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/5/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/5/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/6">
                            <img class="rounded-t-lg" src="./uploads/03.jpg" alt="Quam iusto natus eos.">
                            <div class="p-4">
                                <h2 class="text-center">Quam iusto natus eos.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">66,22 €</p>
                                    <p class="text-xs font-bold">-11% <span class="line-through">74,40 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Théodore Francois</strong> en 2013
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>9-478341-825490</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/6/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/6/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/7">
                            <img class="rounded-t-lg" src="./uploads/06.jpg" alt="Natus possimus modi sint hic ut tempore.">
                            <div class="p-4">
                                <h2 class="text-center">Natus possimus modi sint hic ut tempore.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">73,44 €</p>
                                    <p class="text-xs font-bold">-10% <span class="line-through">81,60 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>René Joly</strong> en 1996
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>0-873356-029069</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/7/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/7/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/8">
                            <img class="rounded-t-lg" src="./uploads/05.jpg" alt="Maxime vel ut similique.">
                            <div class="p-4">
                                <h2 class="text-center">Maxime vel ut similique.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">27,00 €</p>
                                    <p class="text-xs font-bold">-10% <span class="line-through">30,00 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Henriette Gomes</strong> en 1975
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>0-593548-548504</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/8/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/8/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/9">
                            <img class="rounded-t-lg" src="./uploads/05.jpg" alt="Quia officia dignissimos et natus a.">
                            <div class="p-4">
                                <h2 class="text-center">Quia officia dignissimos et natus a.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">53,40 €</p>
                                    <p class="text-xs font-bold">-11% <span class="line-through">60,00 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Guillaume Leleu</strong> en 2021
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>1-309708-700366</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/9/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/9/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 lg:w-1/4 mb-6">
                <div class="shadow-lg rounded-lg h-full mx-3">
                    <div class="flex flex-col justify-between h-full">
                        <a href="/book/10">
                            <img class="rounded-t-lg" src="./uploads/05.jpg" alt="Enim et omnis aliquid.">
                            <div class="p-4">
                                <h2 class="text-center">Enim et omnis aliquid.</h2>
                                <div class="flex justify-around items-center">
                                    <p class="text-lg font-bold">61,92 €</p>
                                    <p class="text-xs font-bold">-14% <span class="line-through">72,00 €</span></p>
                                </div>
                                <p class="text-xs text-center text-gray-400">
                                    Par <strong>Louise Guyon</strong> en 1994
                                </p>
                                <p class="text-xs text-center text-gray-400">
                                    ISBN: <strong>1-223719-243691</strong>
                                </p>
                            </div>
                        </a>

                        <div class="text-center">
                            <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200 mb-4" href="/book/10/edit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a class="bg-red-700 px-4 py-2 text-white inline-block rounded hover:bg-red-500 duration-200 mb-4" href="/book/10/delete">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
