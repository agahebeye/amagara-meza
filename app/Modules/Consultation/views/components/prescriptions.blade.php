 <form id="prescriptions-form" class="form-material mt-5" style="font-size: 1.25rem;">
     <div class="d-flex justify-content-between align-items-center">
         <button type="button">&plus;</button>

         <div class="">
             <label>Medicament</span></label>
             <div class="prescription">
                 <select class="medecine" placeholder="Choose medics" style="flex-grow: 2; width: 20rem;">
                     <option value="1">Lorem.</option>
                     <option value="2">Beatae.</option>
                     <option value="3">Quibusdam.</option>
                     <option value="4">Possimus.</option>
                     <option value="5">Aut?</option>
                 </select>
             </div>
         </div>

         <div class="">
             <label>Posologie</label>
             <div>
                 <input type="text" class="form-control">
             </div>
         </div>

         <div class="">
             <label>Qty</label>
             <div>
                 <input type="text" class="form-control">
             </div>
         </div>
     </div>
 </form>

 <script>
     $('.medecine').selectize({
         dropdownParent: 'body',
     })
 </script>