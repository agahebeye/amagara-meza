<h3 class="mt-4 text-center">List of examinations</h3>

<div class="table-responsive mt-4">
    <table id="examination-table" class="compact" style="max-width: 640px">
        <thead>
            <tr>
                <th scope="col" class="">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th class='text-center' scope="col">Result</th>
            </tr>
        </thead>

        <tbody></tbody>
    </table>
</div>

<div class="row justify-content-center">
    <form id="result-form" class="form-material hidden" style="font-size: 1.25rem; max-width: 640px">
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
                        <select type="text" name="intra_id" class="form-control" id="intras">
                            <option value="" selected disabled>-- select intra --</option>
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
</div>

<script>
    var table = $('#examination-table').DataTable({
        paging: false,
        searching: false,
        ordering: false,
        serverSide: true,
        info: false,

        ajax: "{{route('api.v1.examinations.index', ['consultation_id' => $consultationId])}}",
        columns: [{
                data: 'id'
            },
            {
                data: 'name'
            },
            {
                render: function(data, type, row, meta) {
                    return row.result ? 'done' : 'pending'
                }
            },
            {
                render: function(data, type, row, meta) {
                    return row.result ?? '-';
                }
            },

        ],
        columnDefs: [{
            targets: [-1],
            className: 'font-bold text-center'
        }, {
            targets: ['_all'],
            className: 'text-center'
        }, ]
    })

    $('.image-result').dropify();

    fetch("{{ route('api.v1.intras.index') }}").then(res => res.json()).then(data => {

        var select = $('#intras');

        $.each(data, function(i, item) {
            select.append(`
            <option value="${item.id}">
                ${item.name}
            </option>
         `);
        });
    }).catch(console.error);

    $('#examination-table tbody').on('click', 'tr', function() {
        var data = table.row(this).data();
        var form = $('#result-form')

        // if a result already added, we won't show a form
        if (data.result) {
            if (!form.hasClass('hidden')) {
                form.addClass('hidden')
            }

            return;
        }

        form.removeClass('hidden');
        $('#service_id').val(data.id);
    });

    $('#result-form').on('submit', function(e) {
        e.preventDefault();
        const body = JSON.stringify(Object.fromEntries(new FormData(this).entries()));
        const route = '{{route("api.v1.laboratories.update", $consultationId)}}';

        fetch(route, {
                method: 'PUT',
                body,
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(res => res.json())
            .then(res => {
                table.draw();
                $('#result-form').addClass('hidden');
            })
            .catch(console.error)
    })
</script>