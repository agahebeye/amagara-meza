<form id="orientation-form" class="form-material patient-form" style="font-size: 1.25rem;">

    <div class="row no-gutters mt-4">
        <div class="form-group col-12" id='patient-id-wrapper'>
            <label class="col-sm-12">Patient ID</label>
            <div class="col-md-12">
                <input type="number" name="patient_id" class="patient_id form-control" style="pointer-events: none;">
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="orientation_date">Orientation Date*</span>
            </label>

            <div class="col-md-12">
                <input required type="date" id="orientation_date" name="orientation_date" class="form-control" placeholder="enter orientation date">
            </div>
        </div>

        <div class="form-group col-md-6 align-self-end ">

            <label class="col-sm-12">Department*</label>

            <div class="col-sm-12">
                <select class="form-control" name="department" required>
                    <option value="" selected disabled>--Select department--</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value='Neurology'>Neurology</option>
                    <option value="Pedriatics">Pedriatics</option>
                    <option value="Eye care">Eye care</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-6 align-self-end ">

            <div class="form-check">
                <input class="form-check-input" type="radio" name="precision" id="monitoring" value="monitoring">
                <label class="form-check-label ml-2" for="monitoring"> with medical monitoring</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="precision" id="hospitalization" value="hospitalization">
                <label class="form-check-label ml-2" for="hospitalization"> with direct hospitalization</label>
            </div>

        </div>


    </div>

    <div class="row justify-content-center mt-5">
        <button type="submit" class="btn btn-info px-5 rounded-md" id='submit-patient'><i class="fa fa-check"></i> Submit</button>
    </div>

</form>