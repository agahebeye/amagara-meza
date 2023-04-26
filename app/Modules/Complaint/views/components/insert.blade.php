<form id="complaint-form" class="form-material" style="font-size: 1.25rem;">
    <div class="row no-gutters">
        <input type="hidden" name="patient_id">

        <!-- <div class="form-group col-12 mt-4">
            <label class="col-sm-12">Patient ID</label>
            <div class="col-md-12">
                <input type="number"  class="form-control" style="pointer-events: none; cursor: not-allowed;">
            </div>
        </div> -->

        <div class="form-group col-md-6 align-self-end mt-4">
            <label class="col-sm-12">Taken care?*</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="care_type" id="private" value="private">
                <label class="form-check-label ml-2" for="private"> Private</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="care_type" id="subscribed" value="subscribed">
                <label class="form-check-label ml-2" for="subscribed"> Subscribed to organisation</label>
            </div>

        </div>

        <div class="form-group col-md-6 mt-4">
            <label class="col-md-12 mt-4" for="lastname">Weight</span>
            </label>
            <div class="col-md-12">
                <input type="number" id="weight" name="weight" class="form-control" placeholder="enter your weight">
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="size">Size</span>
            </label>
            <div class="col-md-12">
                <input type="number" id="size" name="size" class="form-control" placeholder="enter your size">
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="blood_pressure">BP (Blood Pressure)</span> <!-- tension arterielle(TA)-->
            </label>
            <div class="col-md-12">
                <input type="number" id="blood_pressure" name="blood_pressure" class="form-control" placeholder="enter your blood pressure">
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="blood_pressure">Temperature</span>
            </label>
            <div class="col-md-12">
                <input type="number" id="temperature" name="temperature" class="form-control" placeholder="enter your temperature">
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="pulse_rate">PR (Pulse Rate)</span> <!-- frequence cardiaque-->
            </label>
            <div class="col-md-12">
                <input required type="number" id="pulse_rate" name="pulse_rate" class="form-control" placeholder="enter your heart pulse">
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="respiratory_rate">RR (Respiratory Rate)</span>
            </label>
            <div class="col-md-12">
                <input type="number" id="respiratory_rate" name="respiratory_rate" class="form-control" placeholder="enter your respiratory rate">
            </div>
        </div>

        <div class="form-group col-md-6 align-self-end ">
            <label class="col-md-12 mt-4" for="date">Date</span>
            </label>
            <div class="col-md-12">
                <input type="date" id="date" name="date" class="form-control" placeholder="enter date">
            </div>
        </div>


        <div class="form-group col-md-6">
            <label class="col-md-12 mt-4" for="complaint">Complaint*</span>
            </label>
            <div class="col-md-12">
                <textarea class="form-control" name="complaint" id="complaint" rows="3" required></textarea>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label class="col-sm-12">Precision*</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="precision" id="same_desease" value="same_desease">
                <label class="form-check-label ml-2" for="same_desease">
                    Same desease
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="precision" id="new_desease" value="new_desease">
                <label class="form-check-label ml-2" for="new_desease">
                    New desease
                </label>
            </div>
        </div>


    </div>

    <div class="row justify-content-end mt-5">
        <button type="submit" class="btn btn-info px-5 rounded-md" id='submit-patient'>Next <i class="fa fa-arrow-right"></i></button>
    </div>

</form>

@push('scripts')
<script>
    let complaint;
    // save complaint and switch to orientation tab - Ok
    $('#complaint-form').on('submit', function(e) {
        e.preventDefault();
        complaint = Object.fromEntries(new FormData(this).entries());
        $("a[href='#orientation']").click()

    })
</script>
@endpush