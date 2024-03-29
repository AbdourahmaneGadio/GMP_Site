<!-- Dropdown menu -->
<div id="dropdownauth" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
      <li>
        <a href="#" data-modal-target="authentication-modal-enseignant" data-modal-toggle="authentication-modal-enseignant"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Enseignant</a>
    </li>
      <li>
        <a href="#" data-modal-target="authentication-modal-etudiant" data-modal-toggle="authentication-modal-etudiant" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Etudiant</a>
    </li>
      <li>
        <a href="#" data-modal-toggle="authentication-modal-entreprise" data-modal-toggle="authentication-modal-entreprise"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Entreprise</a>
      </li>
      <li>
        <a href="#" data-modal-target="authentication-modal-personnel" data-modal-toggle="authentication-modal-personnel"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Le personnel</a>
      </li>
    </ul>
</div>
<x-auth-enseignant/>
<x-auth-etudiant/>
<x-auth-entreprise/>
<x-auth-personnel/>