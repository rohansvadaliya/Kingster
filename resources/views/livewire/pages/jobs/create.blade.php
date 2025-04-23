<div>
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Create new job posting</h1>
        </div>
        <hr>


        <div id="jobCreation">
            <form @submit.prevent="submitJobForm" class="needs-validation" id="submitJobForm" novalidate>
                <input type="hidden" v-model="record_id" name="record_id" id="record_id" />
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <h6><strong>Job Details</strong></h6>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="job_title" class="form-label">Title</label>
                                    <input type="text" v-model="job_title" class="form-control" id="job_title" name="job_title" placeholder="Job posting title" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" v-model="description" class="form-control" id="description" name="description" placeholder="Job posting description" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="experience" class="form-label">Experience</label>
                                    <input type="text" v-model="experience" class="form-control" id="experience" name="experience" placeholder="Eg. 1-3 Yrs" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input type="text" v-model="salary" class="form-control" id="salary" name="salary" placeholder="Eg. 1.89-7 Lacs PA" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" v-model="location" class="form-control" id="location" name="location" placeholder="Eg. Remote / Pune" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="extra_information" class="form-label">Extra Information</label>
                                    <input type="text" v-model="extra_information" class="form-control" id="extra_information" name="extra_information" placeholder="Eg. Full Time, Urgent / Part Tme" required autocomplete="off">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="mb-3">
                                    <label class="form-label extra_space">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary form-control" id="JobSubmitBtn">Save Job</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <h6><strong>Company Details</strong></h6>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="company_name" class="form-label">Name</label>
                                    <input type="text" v-model="company_name" class="form-control" id="company_name" name="company_name" placeholder="Company Name" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="company_logo">Logo</label>
                                        <input type="file" @change="handleFileUpload" class="form-control" id="company_logo" name="company_logo[]" placeholder="upload image" accept="image/jpeg,image/png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <h6 class="mt-3"><strong>Skills</strong></h6>
                                    <label for="skill" class="form-label">Name</label>
                                    <select class="form-control select2-ajax" v-model="skill" id="skill" name="skill[]" placeholder="Select skills" required="required" multiple></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>


@section('custom-scripts')

<script type="text/javascript">

    const jobCreation = new Vue({
        el: '#jobCreation',
        data: {
            record_id: '',
            job_title: '',
            description: '',
            experience: '',
            salary: '',
            location: '',
            extra_information: '',
            company_name: '',
            skill: [],
            company_logo: null,
        },
        methods: {

            handleFileUpload(event) {
                console.log('File uploaded:', event.target.files[0]);
                this.company_logo = event.target.files[0];
            },

            submitJobForm() {

                if (!this.job_title || !this.description || !this.experience || !this.salary || !this.location || !this.extra_information || !this.company_name || !this.skill.length) {
                    toastr.error('Please fill out all required fields');
                    return;
                }

                let formData = new FormData();
                formData.append('id', this.record_id);
                formData.append('job_title', this.job_title);
                formData.append('description', this.description);
                formData.append('experience', this.experience);
                formData.append('salary', this.salary);
                formData.append('location', this.location);
                formData.append('extra_information', this.extra_information);
                formData.append('company_name', this.company_name);
                formData.append('company_logo', this.company_logo);

                this.skill.forEach((skill, index) => {
                    formData.append(`skill[${index}]`, skill);
                });

                axios.post('/admin/job/save', formData, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'multipart/form-data',
                    }
                }).then(response => {
                    // reset form
                    this.record_id = '';
                    this.job_title = '';
                    this.description = '';
                    this.experience = '';
                    this.salary = '';
                    this.location = '';
                    this.extra_information = '';
                    this.company_name = '';
                    this.skill = [];
                    this.company_logo = null;

                    resetJobForm();

                    toastr.success('Job saved successfully');
                }).catch(error => {
                    console.log(error);
                    if (error.response && error.response.status === 0) {
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
        },

        mounted() {
            let vm = this;
            $('#skill').select2({
                ajax: {
                    url: "/admin/skill/lists",
                    dataType: 'json',
                    delay: 0,
                    data: function(params) {
                        return {
                            search_value: params.term,
                            page: params.page,
                        };
                    },
                    processResults: function(data, params) {
                        params.page = params.page || 1;

                        return {
                            results: data.results,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: false,
                    allowClear: true,
                    placeholder: "select skills"
                }
            }).on('change', function () {
                vm.skill = $(this).val();
            });
        }
    });

    function resetJobForm(){
        $('#record_id').val('');
        $('#job_title').val('');
        $('#description').val('');
        $('#experience').val('');
        $('#salary').val('');
        $('#location').val('');
        $('#extra_information').val('');
        $('#company_name').val('');
        $('#skill').val([]).trigger('change');
        $('#company_logo').val('');
        $("#JobSubmitBtn").html("Insert");
        $('#submitJobForm').trigger("reset").removeClass('was-validated');
    }

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

                            jobCreation.reloadDataTable();
                        }
                    }
                });
            }
        });
    }
</script>

@endsection
