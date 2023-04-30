<h3 class="mt-4 text-center">List of examinations</h3>

<div class="table-responsive mt-4">
    <table id="" class="table table-sm w-100">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="px-4">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th class='text-center' scope="col">Result</th>
            </tr>
        </thead>

        <tbody>
            @foreach($consultation->examinations as $examination)
            <tr class="exam">
                <th scope="row" class="px-4" class="service-id">{{ $examination->id }}</td>
                <td>{{ $examination->name }}</td>
                <td>{{ $examination->exam->result ? 'done' : 'pending' }}</td>
                <td class="text-center">{{ $examination->exam->result ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<form id="result-form" class="form-material px-4 hidden" style="font-size: 1.25rem;">
    <input type="hidden" name="service_id" id="service_id">

    <div class="row no-gutters mt-4">
        <div class="form-group col-md-6 mt-5">
            <label class="col-sm-12">Result*</label>
            <div class="col-sm-12">
                <input type="text" name="result" class="form-control">
            </div>
        </div>

        <div class="col-6">

            <div class="form-group col-md-6 mt-5">
                <label class="col-sm-12">Intra*</label>
                <div class="col-sm-12">
                    <select type="text" name="intra" class="form-control">
                        <option value="" selected disabled>-- select intra --</option>
                        <option value="1">Lorem.</option>
                        <option value="2">Iste.</option>
                        <option value="3">Voluptas?</option>
                        <option value="4">Eum.</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-md-6 mt-5">
                <label class="col-sm-12">Quantité*</label>
                <div class="col-sm-12">
                    <input type="text" name="qty" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group col-md-6 mt-4">
            <label for="image-result">Attach examination result</label>
            <input type="file" id="image-result" class="image-result" />
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <button type="submit" class="btn btn-info px-5 rounded-md" id='submit-patient'><i class="fa fa-check"></i> Submit</button>
    </div>
</form>


</form>

<script>
    $('.image-result').dropify();

    $('.exam').on('click', function(e) {
        $(this).toggleClass('clicked');

        $('#result-form').removeClass('hidden');

        const serviceId = $(this).find('th').text().trim()
        $('#service_id').val(serviceId);
    })



    $('#result-form').on('submit', function(e) {
        e.preventDefault();
        const body = JSON.stringify(Object.fromEntries(new FormData(this).entries()));
        const route = '{{route("api.v1.laboratories.update", $consultation->id)}}';


        fetch(route, {
                method: 'PUT',
                body,
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(res => res.json())
            .then(console.log)
            .catch(console.error)
    })
</script>