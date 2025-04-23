<div>
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Skills</h1>
        </div>

        <hr>

        <div id="app">
            <form @submit.prevent="submitSkillForm" class="needs-validation" id="submitSkillForm" novalidate>
                <input type="hidden" v-model="skill_id" name="skill_id" id="skill_id" />

                <div class="row">
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label for="skill_name" class="form-label">Enter Skill<span class="text-danger">*</span></label>
                            <input type="text" v-model="skill_name" class="form-control" id="skill_name" name="skill_name" placeholder="Enter Skill" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label extra_space">&nbsp;</label>
                            <button type="submit" class="btn btn-primary form-control" id="SkillBtnLabel">Insert</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table align-middle table-nowrap display nowrap w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
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
</div>


@section('custom-scripts')
<script type="text/javascript">

const app = new Vue({
    el: '#app',
    data: {
        skill_id: '',
        skill_name: ''
    },
    methods: {
        submitSkillForm() {
            axios.post('/admin/skill/save', {
                id: this.skill_id,
                name: this.skill_name
            }, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                toastr.success('Skill saved successfully');

                this.skill_id = '';
                this.skill_name = '';

                resetSkillForm();
                this.reloadDataTable();
            })
            .catch(error => {
                console.log("Full error response:", error.response.data);

                if (error.response && error.response.status === 422) {
                    const errors = error.response.data.errors;
                    Object.keys(errors).forEach(field => {
                        errors[field].forEach(msg => {
                            toastr.error(`${msg}`);
                        });
                    });
                } else {
                    toastr.error('Something went wrong.');
                }
            });
        },

        SkillDataTable() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const SkillRecords = '/admin/skill/records';

            this.table = $('#datatable').DataTable({
                "aoColumnDefs": [{"bSortable": false, "aTargets": [1]}],
                "order": [[0, 'asc']],
                "processing": true,
                "serverSide": true,
                "scrollX": true,
                "lengthMenu": [[10, 50], [10, 50]],
                "ajax": {
                    "url": SkillRecords,
                    "type": "POST",
                    "data": { "_token": csrfToken }
                },
                "aoColumns": [
                    { "mData": "name" },
                    { "mData": "action", "bSortable": false }
                ]
            });
        },

        reloadDataTable() {
            this.table.ajax.reload();
        }
    },

    mounted() {
        this.SkillDataTable();
    }
});

function resetSkillForm(){
    $('#skill_name').val('');
    $('#skill_id').val('');
    $("#SkillBtnLabel").html("Insert");
    $('#submitSkillForm').trigger("reset").removeClass('was-validated');
}

function editView(id) {
    resetSkillForm();

    const getSingleRecord = "/admin/skill/single/records";

    $.ajax({
        type: 'GET',
        url: getSingleRecord + "?id=" + id,
        success: function(resultData) {
            if (resultData['status'] == 1) {
                const data = resultData['data'];

                app.skill_id = data['id'];
                app.skill_name = data['name'];
            }
            $("#SkillBtnLabel").html("Update");
        }
    });
}

function deleteSkill(id) {
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
                url: "/admin/skill/delete?id=" + id,
                success: function(resultData) {
                    if (resultData['status'] == 1) {
                        toastr["success"](resultData['msg']);

                        app.reloadDataTable();
                    }
                }
            });
        }
    });
}

</script>

@endsection
