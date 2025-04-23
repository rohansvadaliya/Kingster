<div>
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center py-8">
            <h1 class="text-2xl font-bold">Jobs</h1>
        </div>


        <div class="card-body" style="background-color: white; border-radius: .8rem;">
            <div class="table-responsive">
                <table id="datatable" class="table table-light align-middle table-nowrap display nowrap w-100">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Company<br>Logo</th>
                            <th>Company Name</th>
                            <th>Experience</th>
                            <th>Salary</th>
                            <th>Location</th>
                            <th>Skills</th>
                            <th>Extra</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                @csrf
            </div>
        </div>


    </div>
</div>



@section('custom-scripts')
<script type="text/javascript">

    $(document).ready(function() {
        $('#datatable').DataTable({
          "aoColumnDefs": [{ "bSortable": true, "aTargets": [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]}],
            "order":[[ 1, 'desc' ]],
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "scrollX": true,
            "scrollY": function() {return $(window).height() - 100;},
            "lengthMenu": [[10, 50, 100, 150], [10, 50, 100, 150]],
            ajax: {
                url: '/admin/job/records',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                }
            },
            columns: [
                { data: 'title' },
                { data: 'description' },
                { data: 'logo' },
                { data: 'company_name' },
                { data: 'experience' },
                { data: 'salary' },
                { data: 'location' },
                { data: 'skill' },
                { data: 'extra' },
                { data: 'action' },
            ]
        });
    });

    function deleteJob(id) {
        swal.fire({
            title: "Are you sure want to delete this?",
            text: "You won't be able to revert this!",
            showCancelButton: true,
            confirmButtonColor: "#526BDF",
            cancelButtonColor: "#EC6767",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'GET',
                    url: "/admin/job/delete?id=" + id,
                    success: function(resultData) {
                        if (resultData['status'] == 1) {
                            toastr["success"](resultData['msg']);

                            $('#datatable').DataTable().ajax.reload(null, false);
                        }
                    }
                });
            }
        });
    }

</script>

@endsection

