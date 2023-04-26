 @props(['complaint', 'consultation'])

 <div style="font-size: 1.35rem;">
     <input type="hidden" name="patient_id" id='patient_id' value="{{ $complaint->patient_id }}">

     <div class="row">
         <div class="col-4 mt-4">
             <label class="mt-4">Consultation date</label>
             <div class="">{{ $complaint->date }}</div>
         </div>

         <div class="col-4 mt-4">
             <label class="mt-4" for="chief_complaint">Chief complaint</span>
             </label>
             <div>{{$complaint->complaint }}</div>
         </div>

         <div class="col-4 mt-4">
             <label class="mt-4" for="disease_history">History of the disease</span>
             </label>
             <div>{{ $consultation?->disease_history }}</div>
         </div>

         <div class="col-4 mt-4">
             <label class="col-md-12 mt-4" for="medical_history">Medical History</span>
             </label>
             <div>{{ $consultation?->medical_history }}</div>
         </div>

         <div class="col-4 mt-4">
             <label class="col-md-12 mt-4" for="anamnesis">Anamnesis</span>
             </label>
             <div>{{ $consultation?->anamnesis }}</div>
         </div>

         <div class="col-4 mt-4">
             <label class="col-md-12 mt-4" for="physical_examination">Physical examination*</span>
             </label>
             <div>{{ $consultation?->physical_examination }}</div>
         </div>

         <div class="col-4 mt-4">
             <label class="col-md-12 mt-4" for="probable_diagnosis">Probable diagnosis*</span>
             </label>
             <div>{{ $consultation?->probable_diagnosis }}</div>
         </div>

         <div class="d-flex col-12 justify-content-center mt-5">
             <button type="button" class="btn btn-info px-5 rounded-md d-flex justify-items-center" id='submit-patient'>
                 <span>View results</span>
             </button>
         </div>

     </div>
 </div>