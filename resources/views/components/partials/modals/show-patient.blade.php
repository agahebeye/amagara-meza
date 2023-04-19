<div id="show-patient" class="px-5" style="font-size: 1.25rem;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Lastname</p>
            <p id="last_name">{{ $patient->last_name }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Postname</p>
            <p id="post_name">{{ $patient->post_name}}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Firstname</p>
            <p id="first_name">{{ $patient->first_name }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Place of Birth</p>
            <p id="birth_place">{{ $patient->birth_place }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Date of Birth</p>
            <p id="birth_date">{{ $patient->birth_date }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Gender</p>
            <p id="gender">{{ $patient->gender }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Marital Status</p>
            <p id="marital_status">{{ $patient->marital_status }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Father's name</p>
            <p id="father_name">{{ $patient->father_name }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Mother's name</p>
            <p id="mother_name">{{ $patient->mother_name }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Relative</p>
            <p id="relative">{{ $patient->relative }}</p>
        </div>


        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Relative's contact </p>
            <p id="relative_contact">{{ $patient->relative_contact }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Nationality</p>
            <p id="nationality">{{ $patient->nationality }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Country</p>
            <p id="country">{{ $patient->country }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold" for="province">Province</p>
            <p id="province">{{ $patient->province }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Town</p>
            <p id="town">{{ $patient->town }}</p>
        </div>


        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Municipality</p>
            <p id=" municipality">{{ $patient->municipality }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Neighborhood</p>
            <p id="neighborhood">{{ $patient->neighborhood }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Avenue</p>
            <p id="avenue">{{ $patient->avenue }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold" for="house_number">House number</p>
            <p id="house_number">{{ $patient->house_number }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold">Profession</p>
            <p id="profession">{{ $patient->profession }}</p>
        </div>

        <div class="col-md-4">
            <p class="mt-4 font-weight-bold" for="phone">Phone</p>
            <p id="phone_number">{{ $patient->phone_number }}</p>
        </div>
    </div>

</div>

<div class="modal-footer justify-content-center">
    <button type="button" data-id="{{ $patient->id }}" class="btn btn-info px-5 rounded-md" id="set-consulation-btn">Set for consultation</button>
</div>


<script>
    $(document).ready(function() {
        $('#set-consulation-btn').on('click', function() {

            const btn = $(this);
            btn.closest('#show-patient-modal').modal('hide')
            fetch("{{route('api.v1.invoices.store')}}", {
                    method: 'POST',
                    body: JSON.stringify({
                        patient_id: btn.data('id'),
                        services: [1] // 1 is consultation service
                    }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(_ => notify('Consultation notice', 'Patient set for consultation.'))
                .catch(_ => notify('Consultaion notice', 'Error setting a patient for consultation.', 'error'))
                .finally(() => btn.closest('#show-patient-modal').modal('hide'));

        })
    })
</script>