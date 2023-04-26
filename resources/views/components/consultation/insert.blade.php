 @props(['complaint'])

 <form id="consultation-form" class="form-material" style="font-size: 1.25rem;">
     <div class="row no-gutters">

         <input type="hidden" name="complaint_id" id='complaint_id' value="{{ $complaint->id }}">
         <input type="hidden" name="patient_id" id='patient_id' value="{{ $complaint->patient_id }}">

         <div class="form-group col-12 mt-4">
             <label class="col-sm-12">Consultation date</label>
             <div class="col-md-12">
                 <input type="date" name="consultation_date" id='consultation_date' class="form-control" value="{{ $complaint->date }}" disabled>
             </div>
         </div>

         <div class="form-group col-md-6">
             <label class="col-md-12" for="chief_complaint">Chief complaint*</span>
             </label>
             <div class="col-md-12">
                 <textarea class="form-control" name="chief_complaint" id="chief_complaint" rows="3" required>{{ $complaint->complaint }}</textarea>
             </div>
         </div>

         <div class="form-group col-md-6">
             <label class="col-md-12" for="disease_history">History of the disease*</span>
             </label>
             <div class="col-md-12">
                 <textarea class="form-control" name="disease_history" id="disease_history" rows="3" required></textarea>
             </div>
         </div>

         <div class="form-group col-md-6">
             <label class="col-md-12" for="medical_history">Medical History*</span>
             </label>
             <div class="col-md-12">
                 <textarea class="form-control" name="medical_history" id="medical_history" rows="3" required></textarea>
             </div>
         </div>

         <div class="form-group col-md-6">
             <label class="col-md-12" for="anamnesis">Anamnesis*</span>
             </label>
             <div class="col-md-12">
                 <textarea class="form-control" name="anamnesis" id="anamnesis" rows="3" required></textarea>
             </div>
         </div>

         <div class="form-group col-md-6">
             <label class="col-md-12" for="physical_examination">Physical examination*</span>
             </label>
             <div class="col-md-12">
                 <textarea class="form-control" name="physical_examination" id="physical_examination" rows="3" required></textarea>
             </div>
         </div>

         <div class="form-group col-md-6">
             <label class="col-md-12" for="probable_diagnosis">Probable diagnosis*</span>
             </label>
             <div class="col-md-12">
                 <textarea class="form-control" name="probable_diagnosis" id="probable_diagnosis" rows="3" required></textarea>
             </div>
         </div>

         <div class="form-group col-md-6">
             <label class="col-md-12" for="examinations">Exams Labo</span></label>
             <div class="">
                 <select class="examinations" multiple="multiple" id='examinations' placeholder="Choose examination"></select>
             </div>
         </div>

         <div class="form-check col-12">
             <input class="form-check-input" type="checkbox" value="" id="prescribed">
             <label class="form-check-label ml-2 mt-1" for="prescribed">
                 Do you want to prescribe?
             </label>
         </div>

         <div class="d-flex col-12 justify-content-center mt-5">
             <button type="submit" class="btn btn-info px-5 rounded-md d-flex justify-items-center" id='submit-patient'>
                 <span>Submit</span>
                 <x-core.icons.check />
             </button>
         </div>

     </div>
 </form>

 <script>
     var $selectized = $('#examinations').selectize({
         dropdownParent: 'body',
         valueField: 'id',
         optgroupField: 'category',
         labelField: 'name',
         searchField: ['name'],
         optionGroupRegister: function(optgroup) {
             var capitalised = optgroup.charAt(0).toUpperCase() + optgroup.substring(1);
             var group = {
                 label: 'Category: ' + capitalised
             };

             group[this.settings.optgroupValueField] = optgroup;

             return group;
         },

         options: [],
         persist: true,

         load: function(query, callback) {
             let url = "{{ route('api.v1.services.index') }}";
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
     });

     $('#prescribed').on('click', function(e) {
         const checked = $(this).prop('checked')

         if (checked) $selectized[0].selectize.disable();
         else $selectized[0].selectize.enable();
     })
 </script>