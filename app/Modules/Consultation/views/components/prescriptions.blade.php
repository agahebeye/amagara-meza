 <form id="prescriptions-form" class="form-material mt-5" style="font-size: 1.25rem;">
     <button type="button" style="display: table; margin: auto;" id="new-prescription">&plus; add prescription</button>

     <div class="d-flex col-12 justify-content-center mt-5 submit-container">
         <button type="submit" class="btn btn-info px-5 rounded-md d-flex justify-items-center" id='submit-patient'>
             <span>Submit</span>
             <x-icons.check />
         </button>
     </div>
 </form>

 <script>
     var selectizeOptions = {
         dropdownParent: 'body',
         valueField: 'id',
         labelField: 'name',
         searchField: 'name',
         options: [],
         persist: true,

         onChange: function(value) {},

         load: function(query, callback) {
             let url = "{{ route('api.v1.medics.index') }}";
             if (!query.length) return callback();

             $.ajax({
                 url,
                 type: 'GET',
                 error: function() {
                     callback();
                 },
                 success: function(res) {
                     callback(res);
                 }
             });
         },
     }

     $('form').on('click', '#new-prescription', function(e) {
         const prescription = $(this).next('.prescription');

         $div = $('<div class="d-flex justify-content-between align-items-center prescription mt-5"></div>')

         $div.append(`
                <div>
                   <label>Medicament</span></label>
                   <div>
                       <select class="medecine" placeholder="Choose medics" style="flex-grow: 2; width: 20rem;"></select>
                   </div>
                </div>

                <div>
                   <label>Posology</label>
                   <div>
                       <input type="text" class="posology form-control">
                   </div>
                </div>

                <div>
                   <label>Qty</label>
                   <div>
                       <input type="number" class="qty form-control">
                   </div>
                </div>

         `)

         $div.insertBefore('.submit-container')
         var selectized = $div.find('.medecine').selectize(selectizeOptions);
         selectized[0].selectize.focus();

         selectized.on('change', function() {
             $div.find('.posology').focus();
         })
     })


     $('form').on('keydown', '.posology', function(e) {
         if (e.which === 13) {
             e.preventDefault();
             $(this).closest('.prescription').find('.qty').focus();
         }
     })

     $('form').on('keydown', '.qty', function(e) {
         if (e.which === 13) {
             e.preventDefault();
             $('#new-prescription').click()
         }
     })

     $('#prescriptions-form').on('submit', function(e) {

         e.preventDefault();
         let data = [];

         $(this).find('select.medecine, .posology, .qty').each(function(i) {
             const cl = $(this)[0].classList[0];
             console.log(i % 3 === 0);
         })
     })
 </script>