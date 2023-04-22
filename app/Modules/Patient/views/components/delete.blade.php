 <x-partials.modals.confirmation title="Delete confirmation" message='Do you really want to delete this patient?' />

 @push('scripts')
 <script>
     $('#confirmation').on('show.bs.modal', function(event) {
         const button = $(event.relatedTarget);
         selectId = button.data('id');
     })

     $('#confirm-button').on('click', () => {
         let route = `{{route('api.v1.patients.destroy', ':id')}}`;

         fetch(route.replace(':id', selectId), {
                 method: 'DELETE'
             })
             .then(res => {
                 notify('Delete notification', 'Patient deleted succefully.');
                 table.ajax.reload();
             })
             .catch(reason => notify('Delete notification', 'Error deleting a patient.'))
             .finally(() => $('#confirmation').modal('hide'));
     })
 </script>
 @endpush