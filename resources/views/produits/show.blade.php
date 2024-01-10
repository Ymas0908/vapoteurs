


<x-app-layout>
    <x-slot name="header">
          Liste des produits
   </x-slot>
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="bg-gradient-to-bl from-blue-50 to-violet-50 flex items-center justify-center lg:h-screen">
      <div class="container mx-auto mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
           <!-- produit 1 -->

           <div class="bg-white rounded-lg border p-4">
    <img src="{{$produit->image}}" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
    <div class="px-1 py-4">
        <div class="font-bold text-xl mb-2">{{$produit->nom}}</div>
        <p class="text-gray-700 text-base">
            {{$produit->description}}
        </p>
        <p class="text-lg font-semibold text-gray-900 mt-2">{{$produit->prix}}</p><!-- Ajout du prix -->
    </div>
    <button class="bg-blue-200 text-white px-4 py-2 rounded-md hover:bg-blue-300" style="background-color: #352cb5;">
        Ajouter au panier
    </button>
</div>

          <!-- produit 1 -->

          <div class="bg-white rounded-lg border p-4">
            <img src="{{$produit->image}}" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
            <div class="px-1 py-4">
                <div class="font-bold text-xl mb-2">{{$produit->nom}}</div>
                <p class="text-gray-700 text-base">
                    {{$produit->description}}
                </p>
                <p class="text-lg font-semibold text-gray-900 mt-2">{{$produit->prix}}</p><!-- Ajout du prix -->
            </div>
            <button class="bg-blue-200 text-white px-4 py-2 rounded-md hover:bg-blue-300" style="background-color: #352cb5;">
                Ajouter au panier
            </button>
        </div>









       </div>
      </div>
    </div>
            </div>
        </div>
    </div>
<!-- Ajoute cette ligne dans ta vue pour inclure jQuery, afin de gérer les buttons ajouter au panier-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</x-app-layout>
