<form id="consultation-form" class="form-material" style="font-size: 1.25rem;">
    <div class="row no-gutters">
        <div class="form-group col-12 mt-4" id='patient-id-wrapper'>
            <label class="col-sm-12">Patient ID</label>
            <div class="col-md-12">
                <input type="number" name="patient_id" class="patient_id form-control" style="pointer-events: none;">
            </div>
        </div>


        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="chief_complaint">Chief complaint*</span>
            </label>
            <div class="col-md-12">
                <textarea class="form-control" name="chief_complaint" id="chief_complaint" rows="3" required></textarea>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="disease_history">History of the disease*</span>
            </label>
            <div class="col-md-12">
                <textarea class="form-control" name="disease_history" id="disease_history" rows="3" required></textarea>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="medical_history">Medical History*</span>
            </label>
            <div class="col-md-12">
                <textarea class="form-control" name="medical_history" id="medical_history" rows="3" required></textarea>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="anamnesis">Anamnesis*</span>
            </label>
            <div class="col-md-12">
                <textarea class="form-control" name="anamnesis" id="anamnesis" rows="3" required></textarea>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="physical_examination">Physical examination*</span>
            </label>
            <div class="col-md-12">
                <textarea class="form-control" name="physical_examination" id="physical_examination" rows="3" required></textarea>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="probable_diagnosis">Probable diagnosis*</span>
            </label>
            <div class="col-md-12">
                <textarea class="form-control" name="probable_diagnosis" id="probable_diagnosis" rows="3" required></textarea>
            </div>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input result" type="radio" id="examinations" name='result' value="examinations" checked>
            <label class="form-check-label ml-2" for="examinations">Examens Labo</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input result" type="radio" id="prescriptions" name='result' value="prescriptions">
            <label class="form-check-label ml-2" for="prescriptions">Prescriptions</label>
        </div>

        <div class="result col-md-12">
            <select class="examination" multiple="multiple" data-placeholder="Choose examinations" style="width: 50%">
                <optgroup label="Laboratory examination">
                    <option value="Consultation ORL">Consultation ORL</option>
                    <option value="Consultation Ophta">Consultation Ophta</option>
                    <option value="Consultation NUTR">Consultation NUTR</option>
                    <option value="Consultation Kiné">Consultation Kiné</option>
                </optgroup>

                <optgroup label="Imaging examination">
                    <option value="Consultation ORL">ASP</option>
                    <option value="Consultation Ophta">Biopsie echo guidée</option>
                    <option value="Consultation NUTR">Colonne Lombo-Sacre</option>
                    <option value="Consultation Kiné">Echographie testiculaire</option>
                </optgroup>
            </select>


        </div>

        <div class="result col-md-12 hidden">
            <select class="prescriptions" multiple="multiple" data-placeholder="Choose prescriptions" style="width: 50%">
                <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                </optgroup>
            </select>
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