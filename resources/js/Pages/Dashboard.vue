<script setup lang="ts">
import Hero from '@/Components/Dashboard/Hero.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref, onMounted, computed } from 'vue';
import axios from 'axios';


const jobDetails = ref<any[]>([]);
const loading = ref<boolean>(true);
const error = ref<string | null>(null);

const fetchJobDetails = async () => {
    try {
        const response = await axios.get('/job-details');
        console.log(response.data);
        jobDetails.value = response.data;
    } catch (err) {
        console.error('Error fetching job data:', err);
        error.value = 'Failed to load job details';
    } finally {
        loading.value = false;
    }
};

// Chunk jobDetails into groups of 2 for Bootstrap rows
const chunkedJobs = computed(() => {
  const chunks: any[][] = [];
  for (let i = 0; i < jobDetails.value.length; i += 2) {
    chunks.push(jobDetails.value.slice(i, i + 2));
  }
  return chunks;
});

onMounted(() => {
  fetchJobDetails();
});
</script>

<template>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/icons.min.css">
    <link rel="stylesheet" href="/assets/css/app.min.css">
    <link rel="stylesheet" href="/assets/css/maintance.css">

  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <Hero />

    <div class="container py-5">

      <div v-if="loading" class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>

      <div v-if="error" class="alert alert-danger">
        {{ error }}
      </div>

      <div v-for="(row, rowIndex) in chunkedJobs" :key="rowIndex" class="row">
        <div v-for="(job, index) in row" :key="index" class="col-md-6 mb-3">
          <div class="card" style="border: 1px solid #eee;">
            <div class="card-body">
                <div class="card-top-area d-flex justify-content-between mb-3">
                    <div class="company-detail d-flex">
                        <div class="img-area">
                            <img :src="job.logo" class="me-3" alt="Job Logo" width="45px">
                        </div>
                        <div class="details">
                            <h5 class="card-title mb-1">{{ job.title }}</h5>
                            <p class="card-text">{{ job.company_name }}</p>
                        </div>
                    </div>
                    <div class="extra-information">
                        <span
                            v-for="(item, index) in job.extra"
                            :key="index"
                            class="badge bg-secondary me-2 font-size-11">
                            {{ item }}
                        </span>
                    </div>
                </div>
              <ul class="p-0 m-0">
                <li class="mb-2"><span class="me-2"><i class="fa fa-briefcase me-2"></i>{{ job.experience }}</span> | <span class="mx-2"><i class="bx bx-rupee"></i>{{ job.salary }}</span> | <span class="mx-2"><i class="dripicons-location me-2"></i>{{ job.locations }}</span></li>
                <li><span><i class="me-1 bx bx-file"></i></span> {{ job.description }}</li>

                <div class="card-top-area d-flex justify-content-between mt-3">
                    <div class="skill-content">
                        <span
                            v-for="(item, index) in job.skill"
                            :key="index"
                            class="font-size-11">
                            {{ item }}
                            <span v-if="index < job.skill.length - 1" class="mx-2">
                                <i class="bx bxs-circle" style="font-size: 6px; color: #d1c4c4;"></i>
                            </span>
                        </span>
                    </div>
                    <div class="timing">{{  job.created }}</div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
