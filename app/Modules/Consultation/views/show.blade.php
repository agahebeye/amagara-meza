<ul class="nav customtab nav-tabs d-flex justify-content-between" role="tablist">
    <li role="presentation" class="nav-item"><a href="#medical-form" class="nav-link" aria-controls="medicalForm" role="tab" data-toggle="tab" data-patient-id="{{ $complaint->patient_id }}" aria-expanded="true">Medical Form</a></li>
    <li role="presentation" class="nav-item"><a href="#consultation" class="nav-link active" aria-controls="consultation" role="tab" data-toggle="tab" aria-expanded="false"> Consultation</a></li>
    <li role="presentation" class="nav-item"><a href="#prescriptions" class="nav-link" aria-controls="prescriptions" role="tab" data-toggle="tab" aria-expanded="false"> Prescriptions</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade" id="medical-form"></div>

    <div role="tabpanel" class="tab-pane fade active in  px-5" id="consultation">
        @if(! $consultation)
        <x-consultation::insert :complaint="$complaint" />
        @else
        <x-consultation::result :complaint="$complaint" :consultation="$consultation" />
        @endif
    </div>
    <div role="tabpanel" class="tab-pane fade px-5" id="prescriptions">
        <x-consultation::prescriptions />
    </div>
</div>


<script>
    $('a[href="#medical-form"]').on('click', function(e) {
        e.preventDefault();
        const patientId = $(this).data('patientId');

        $('#medical-form').load(
            "{{route('api.v1.medical-form', ':id')}}".replace(':id', patientId)
        );
    })

    //TODO submit consultation with its complaint
    $('#consultation-form').on('submit', function(e) {
        e.preventDefault();

        const consultation = Object.fromEntries(new FormData(this).entries());
        const examinations = $('select.examinations').val();

        fetch("{{route('api.v1.consultations.store')}}", {
                method: 'POST',
                body: JSON.stringify({
                    ...consultation,
                    examinations,
                }),
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(res => {
                if ($('#prescribed').prop('checked')) {
                    $('a[href="#prescriptions"]').click();
                }
            })
            .catch(console.error)
            .finally(() => {
                if (!$('#prescribed').prop('checked')) {
                    $(this).closest('#consultation-modal').modal('hide');
                    $(this).trigger('reset')
                    $('select.examinations').val(null).trigger('change');
                }
            })
    })
</script>