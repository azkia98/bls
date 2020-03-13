<template>
  <header class="bg-gray-200 sm:flex sm:justify-between sm:items-center md:px-20 sm:px-5 sm:py-3 sm:pt-6">

    <nav :class="isOpen ? 'block' : 'hidden'" class="px-2 pt-2 pb-4 sm:flex sm:p-0">
      <a href="#" class="block px-2 py-1 text-gray-600 font-medium rounded hover:text-gray-800">صفحه اصلی</a>
      <a href="#" class="mt-1 block px-2 py-1 text-gray-600 font-medium rounded hover:text-gray-800 sm:mt-0 sm:ml-2">برنامه کلاسی</a>
      <a href="#" class="mt-1 block px-2 py-1 text-gray-600 font-medium rounded hover:text-gray-800 sm:mt-0 sm:ml-2">درباره ما</a>
    </nav>

    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
      <div class="relative z-10">
          <div class="bg-orange-300 w-5 h-5 circle-background absolute z--10 rounded-full"></div>
          <a href="#" class="font-bold block">Bistoon</a>
      </div>
      <div class="sm:hidden">
        <button @click="isOpen = !isOpen" type="button" class="block text-gray-600 hover:text-gray-500 focus:text-gray-500 focus:outline-none">
          <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>
      </div>
    </div>

  </header>
</template>

<script>
export default {
  data() {
    return {
      isOpen: false,
    }
  },
}
</script>