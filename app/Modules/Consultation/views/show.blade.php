<ul class="nav customtab nav-tabs d-flex justify-content-between" role="tablist">
    <li role="presentation" class="nav-item"><a href="#medical-form" class="nav-link" aria-controls="medicalForm" role="tab" data-toggle="tab" aria-expanded="true">Medical Form</a></li>
    <li role="presentation" class="nav-item"><a href="#consultation" class="nav-link active" aria-controls="consultation" role="tab" data-toggle="tab" aria-expanded="false"> Consultation</a></li>
    @if ($consultation) <li role="presentation" class="nav-item"><a href="#prescriptions" class="nav-link" aria-controls="prescriptions" role="tab" data-toggle="tab" aria-expanded="false"> Prescriptions</a></li> @endif
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade" id="medical-form">
    </div>
    <div role="tabpanel" class="tab-pane fade active in  px-5" id="consultation">
        @if(! $consultation)
        <x-consultation::insert :complaint="$complaint" />
        @else
        <x-consultation::result :complaint="$complaint" :consultation="$consultation" />
        @endif
    </div>
    <div role="tabpanel" class="tab-pane fade active in  px-5" id="prescriptions">
    </div>
</div>


<script>
    // $('select.examinations').select2({
    //     placeholder: 'Select examinations',
    //     ajax: {
    //         url: "{{route('api.v1.services.index')}}",
    //         dataType: 'json',
    //         processResults: (data) => {
    //             const results = []

    //             results.push({
    //                 text: 'Laboratory Examination',
    //                 children: data.filter(x => x.category === 'Laboratory').map(x => ({
    //                     id: x.id,
    //                     text: x.name
    //                 }))
    //             }, {
    //                 text: 'Imaging Examination',
    //                 children: data.filter(x => x.category === 'Imaging').map(x => ({
    //                     id: x.id,
    //                     text: x.name
    //                 }))
    //             });

    //             return {
    //                 results
    //             }
    //         }
    //     }
    // })

    // //TODO submit consultation with its complaint
    // $('#consultation-form').on('submit', function(e) {
    //     e.preventDefault();

    //     const consultation = Object.fromEntries(new FormData(this).entries());
    //     const examinations = $('select.examinations').val();

    //     fetch("{{route('api.v1.consultations.store')}}", {
    //             method: 'POST',
    //             body: JSON.stringify({
    //                 ...consultation,
    //                 examinations,
    //             }),
    //             headers: {
    //                 'Content-Type': 'application/json'
    //             }
    //         }).then(res => res.json())
    //         .then(console.log)
    //         .catch(console.error)
    //         .finally(() => {
    //             $(this).closest('#consultation-modal').modal('hide');
    //             $(this).trigger('reset')
    //             $('select.examinations').val(null).trigger('change');
    //         })
    // })
</script>