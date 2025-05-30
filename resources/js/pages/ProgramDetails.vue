<script setup>
import { ref, computed, onMounted } from 'vue'
import { useProgramStore } from '@/stores/useProgramStore'

const programStore = useProgramStore()
const selectedBodyPart = ref('All')

const filteredPrograms = computed(() => {
	if (selectedBodyPart.value === 'All') {
		return programStore.programs;
	}

	const filtered = programStore.programs.filter(
		(program) => program.difficulty === selectedBodyPart.value
	)
	console.log('Selected:', selectedBodyPart.value);
	console.log('Filtered:', filtered);

	return filtered;
})

const programs = ['All', 'Light', 'Easy', 'Normal', 'Intermediate', 'Advanced']

onMounted(() => {
	programStore.fetchPrograms().then(()=>{
		console.log('Programs:', programStore.programs)
	})
})
</script>

<template>
	<div class="max-w-5xl mx-auto py-8">
		<h1 class="text-3xl font-bold mb-6">Program Details</h1>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                    class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Sets</th>
                                    <th>Reps</th>
                                    <th>Duration</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</template>
