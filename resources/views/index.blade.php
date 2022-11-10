<x-app-layout>
    @push('styles')
    <style>

        .sortable-drag {
          background: green !important;
          box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05)
      }
    </style> 
    @endpush
    

    @livewire('drag-and-drop')

@push('scripts')
<script src="https://unpkg.com/@nextapps-be/livewire-sortablejs@0.2.0/dist/livewire-sortable.js"></script>
@endpush
   
</x-app-layout>
