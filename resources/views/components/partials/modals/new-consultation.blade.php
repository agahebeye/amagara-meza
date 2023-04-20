<div class="modal fade" id="consultation-modal" tabindex="-1" role="dialog" aria-labelledby="newConsultationModal" data-backdrop='false' aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content px-4 pb-4 rounded-md">
            <div class="modal-header m-0">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <ul class="nav customtab nav-tabs d-flex justify-content-between" role="tablist">
                <li role="presentation" class="nav-item"><a href="#medical-form" class="nav-link" aria-controls="medicalForm" role="tab" data-toggle="tab" aria-expanded="true">Medical Form</a></li>
                <li role="presentation" class="nav-item"><a href="#consultation" class="nav-link active" aria-controls="consultation" role="tab" data-toggle="tab" aria-expanded="false"> Consultation</a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="medical-form">
                    <div id="medical-form" class="px-5 pt-3" style="font-size: 1.3rem;"></div>
                </div>

                <div role="tabpanel" class="tab-pane fade active in  px-5" id="consultation">
                    <x-partials.forms.patient-consultation />
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    let medicalFormRoute = "{{route('api.v1.medical-form', ':id')}}"

    $('#consultation-modal').on('show.bs.modal', function(event) {
        const button = $(event.relatedTarget);
        const value = JSON.parse(decodeURIComponent(button.data('value')))

        $.map(value, function(v, i) {
            $(`#consultation-form`).find(`#${i}`).val(v)
        })

        $('#medical-form').load(medicalFormRoute.replace(':id', value.id));
    })
</script>
@endpush