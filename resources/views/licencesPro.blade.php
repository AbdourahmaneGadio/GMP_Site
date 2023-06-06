@include('layouts.header')


    <!-- Licences professionnelles -->
    <section class="container w-1/2 mx-auto mt-8">
        <h3>Licences professionnelles (L3)</h3>
        <x-trait-titre> </x-trait-titre>

        <div class="mt-4">
                <iframe class="responsive-iframe"
                src="https://www.youtube.com/embed/M7lc1UVf-VE" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>

        </div>
        <div class="mt-4">
            <p>La faculté des Sciences et Ingénierie propose des licences professionnelles accessibles après 
                la validation de deux années d'études supérieures. 
                Elles se préparent en deux semestres et permettent une insertion professionnelle rapide.
            </p>
        </div>
    </section>
    <!-- Licences professionnelles -->
    <!-- Science, technologie, santé -->
    <section class="container w-1/2 mx-auto mt-12">
        <h3>Science, technologie, santé</h3>
        <x-trait-titre> </x-trait-titre>


        <div class="flex mt-8 h-40" style="background-color: #DDA15E; border-radius:46px;">
            <div class="m-auto"><img src="" alt="Image de la licence professionnelle MRI" srcset=""></div>
            <div class="text-center m-auto"><span>LP Métiers de l’industrie : mécatronique, robotique – Mécatronique – Robotique Intelligence (M.R.I)</span></div>
        </div>
        <x-separateur> </x-separateur>

        <div class="flex mt-8 h-40" style="background-color: #DDA15E; border-radius:46px;">
            <div class="text-center m-auto"><span>LP Métiers de l’industrie : mécatronique, robotique – Mécatronique – Robotique Intelligence (M.R.I)</span></div>
            <div class="m-auto"><img src="" alt="Image de la licence professionnelle MRI" srcset=""></div>

        </div>
        <x-separateur> </x-separateur>
        <div class="flex mt-8 h-40" style="background-color: #DDA15E; border-radius:46px;">
            <div class="m-auto"><img src="" alt="Image de la licence professionnelle MRI" srcset=""></div>
            <div class="text-center m-auto"><span>LP Métiers de l’industrie : mécatronique, robotique – Mécatronique – Robotique Intelligence (M.R.I)</span></div>
        </div>

    </section>
    <!-- Science, technologie, santé -->
    @include('layouts.footer')