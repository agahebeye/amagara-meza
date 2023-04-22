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
                 <textarea class="form-control" name="chief_complaint" id="chief_complaint" rows="3" required></textarea>
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
             <div class="result">
                 <select class="examinations" multiple="multiple" id='examinations' data-placeholder="Choose examinations" style="width: 75%">
                 </select>
             </div>
         </div>

         <div class="d-flex col-12 justify-content-center mt-5">
             <button type="submit" class="btn btn-info px-5 rounded-md d-flex justify-items-center" id='submit-patient'>
                 <span>Submit</span>
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg ml-2" viewBox="0 0 16 16">
                     <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                 </svg>
             </button>
         </div>

     </div>
 </form>

 <script>
     $('select.examinations').select2({
         placeholder: 'Select examinations',
         ajax: {
             url: "{{route('api.v1.services.index')}}",
             dataType: 'json',
             processResults: (data) => {
                 const results = []

                 results.push({
                     text: 'Laboratory Examination',
                     children: data.filter(x => x.category === 'Laboratory').map(x => ({
                         id: x.id,
                         text: x.name
                     }))
                 }, {
                     text: 'Imaging Examination',
                     children: data.filter(x => x.category === 'Imaging').map(x => ({
                         id: x.id,
                         text: x.name
                     }))
                 });

                 return {
                     results
                 }
             }
         }
     })
 </script>