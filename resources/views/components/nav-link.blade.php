@props(['active' => false])
<a 
class="rounded-md  px-3 py-2 text-sm font-medium {{ $active ? 'text-white bg-gray-900 ' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  " aria-current="{{ $active ?'page' : false}}" {{ $attributes }}>{{ $slot }}</a>
